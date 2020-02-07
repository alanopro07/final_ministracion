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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prueba','usuarioModelController@prueba')->name('prueba');

//rutas de dashboard
Route::get('municipio','municipioController@dashboardMunicipio')->name('municipio');
Route::post('cargarArchivos','municipioController@cargaArchivos')->name('cargarArchivos');
Route::get('entidad','HomeController@pro')->name('entidad');
Route::get('dga','HomeController@pro')->name('dga');
Route::get('dgvys','HomeController@pro')->name('dgvys');




