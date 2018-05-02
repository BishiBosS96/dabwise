<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/version2', 'HomeController@index2')->name('home2');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get("/gas", "HomeController@gas")->name("gas");
Route::post("/gass", "HomeController@gass")->name("gass");
Route::get("/excel", "HomeController@excel")->name("excel");



