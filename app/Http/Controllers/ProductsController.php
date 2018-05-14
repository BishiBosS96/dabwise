<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    public function index(){
    	return view('Products.index');
    }

    public function swiman(){

		$uniques = array_unique(DB::table('ALUMNOS')
    		->select('id_escuelas')
    		->pluck('id_escuelas')
    		->toArray());

		$alumnos2 = DB::table('ALUMNOS')
			->select('nombre_a', 'id_escuelas')
			->orderBy('id_escuelas')
			->pluck('id_escuelas', 'nombre_a')
			->toArray();

		
		$newArray = [];
		$size = sizeof($alumnos2);
		for($i=0; $i<$size; $i++){
			foreach($uniques as $unique){
				
				if(!sizeof($alumnos2)==0){
					$index = array_search($unique, array_values($alumnos2));
					array_push($newArray, array_splice($alumnos2, $index, 1));
				}else{
					break;
				}
				
				
			}
		}

    	return response($newArray);
    }
}
