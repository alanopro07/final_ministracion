<?php


//login
Route::get('/','LoginController@showLoginForm')->name('showLoginForm');

Route::post('logout','LoginController@showLoginForm')->name('logout')->middleware('guest');

Route::post('login','LoginController@login')->name('login');

//fin login


Auth::routes();

Route::get('/home', 'HomeController@showLoginForm')->name('home');
Route::get('/prueba','usuarioModelController@prueba')->name('prueba');

//rutas de dashboard
Route::get('municipio','municipioController@dashboardMunicipio')->name('municipio');
Route::post('cargarArchivos','municipioController@cargaArchivos')->name('cargarArchivos');

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




