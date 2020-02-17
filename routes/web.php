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
Route::post('/municipio/crear_movimiento', 'municipioController@update_municipalityActivity');

//carga de datos carta bancaria
Route::get('cargaCartaBancaria','municipioController@cargaCartaBancaria')->name('cargacartabancaria');//revisado
Route::post('cargaDatosCartaBancaria','municipioController@cargarDatosCartaBacaria')->name('cargadatoscartabancaria');
//final carga de datos carta bancaria

//carga datos de cooparticipacion
Route::get('cargaCooparticipacion','municipioController@cargaCooparticipacion')->name('cartacooparticipacion');
//fin carga de datos de cooparticiapcion

//carga datos cedula-fiscal
Route::get('cargaDatosCedulaFiscal','municipioController@cargaCedulaFIscal')->name('cargadatoscedulafiscal');

//fin carga datos cedula-fiscal

//carga domicilio
Route::get('cargaConstanciaDomicilio','municipioController@cargaDomicilio')->name('cargadomicilio');
//fin carga domicili

Route::get('dga','HomeController@pro')->name('dga');
Route::get('dgvys','HomeController@pro')->name('dgvys');




