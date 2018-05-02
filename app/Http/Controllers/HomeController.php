<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('welcome');
    }

     public function index2(){
        return view('welcome2');
    }

    public function gass(Request $request){

        $entidad = base64_decode($request->currVal);
        
        if(intval($entidad) == 1){
            $spreadsheet = new Spreadsheet();
            $datos = ["# Contrato", "Entidad Federativa", "Municipio", "Nombre", "Direccion", "Marca", "Producto", "Sub producto", "Precio Vigente", "Fecha Aplicación"];
            $sheet = $spreadsheet->getActiveSheet()->fromArray($datos);
            $writer = new Xlsx($spreadsheet);
            $writer->save('../storage/app/public/reporte_'.date('d-m-Y').'.xlsx');
            $spreadsheet->disconnectWorksheets();
            unset($spreadsheet);
        }

        $resultado = [];
        $municipios = json_decode(file_get_contents("http://api-catalogo.cre.gob.mx/api/utiles/municipios?EntidadFederativaId=".$entidad));
        $entidades = json_decode(file_get_contents("http://api-catalogo.cre.gob.mx/api/utiles/entidadesfederativas"));
        $resultado["Entidad Federativa"] = $entidades[intval($entidad)-1]->Nombre;
        
        $sizeMunicipios= sizeof($municipios);
        $resultado["Municipios"] = [];
        
        
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('../storage/app/public/reporte_'.date('d-m-Y').'.xlsx');
        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow()+1; 
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        

        for($j = 0; $j < $sizeMunicipios; $j++){
            $resultado["Municipios"][$j]["Nombre"] = $municipios[$j]->Nombre;
            $gasolineras = json_decode(file_get_contents("http://api-reportediario.cre.gob.mx/api/EstacionServicio/Petroliferos?entidadId=".$entidad."&municipioId=".$municipios[$j]->MunicipioId."&_=1525103591556"));
            $resultado["Municipios"][$j]["Gasolineras"] = $gasolineras;
            $gasolinerasSize = sizeof($gasolineras);

            for($i = 0; $i < $gasolinerasSize; $i++){
                
                $topRow = $highestRow++;
                $spreadsheet->getActiveSheet()->setCellValue("A".($topRow), $gasolineras[$i]->Numero);
                $spreadsheet->getActiveSheet()->setCellValue("B".($topRow), $entidades[intval($entidad)-1]->Nombre);
                $spreadsheet->getActiveSheet()->setCellValue("C".($topRow), $municipios[$j]->Nombre);
                $spreadsheet->getActiveSheet()->setCellValue("D".($topRow), $gasolineras[$i]->Nombre);
                $spreadsheet->getActiveSheet()->setCellValue("E".($topRow), $gasolineras[$i]->Direccion);
                $spreadsheet->getActiveSheet()->setCellValue("F".($topRow), $gasolineras[$i]->Marca);
                $spreadsheet->getActiveSheet()->setCellValue("G".($topRow), $gasolineras[$i]->Producto);
                $spreadsheet->getActiveSheet()->setCellValue("H".($topRow), $gasolineras[$i]->SubProducto);
                $spreadsheet->getActiveSheet()->setCellValue("I".($topRow), $gasolineras[$i]->PrecioVigente);
                $spreadsheet->getActiveSheet()->setCellValue("J".($topRow), $gasolineras[$i]->FechaAplicacion);
            }
        }
        
        $writer->save('../storage/app/public/reporte_'.date('d-m-Y').'.xlsx');
        $spreadsheet->disconnectWorksheets();
        unset($spreadsheet);
        return response()->json(["result"=>$resultado]);
    }

    public function gas(){
        $data =[];

        $entidades = json_decode(file_get_contents("http://api-catalogo.cre.gob.mx/api/utiles/entidadesfederativas"));
        $data["entidades"] = $entidades;
        $data["rand"] = str_random(20);
        return view("gas", $data);
    }

    public function excel(){
        return response()->download('../storage/app/public/reporte_'.date('d-m-Y').'.xlsx', 
            "Reporte_".date('d-m-Y'), 
            ["Content-Type" => "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"]);
    }

}
