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
Route::get('usuario','UsuarioController@index')->name('usuario.index');

/*
	GET, POST, PUT, DELETE
*/

Route::get('url', 'Nombre_Controlador@nombre_metodo');

//public function nombre_metodo($nombre, $edad) {}

Route::get('url', function() {
	// Instrucciones necesarias
});

Route::get('ejemplo', function() {
	return "Mi primera ruta";
});

Route::get('enviar', function() {
	return "Metodo post";
});

Route::get('ejemplo/{nombre}/{edad}', function($nombre, $edad) {
	return "Mi nombre es: ".$nombre." y tengo ".$edad." años";
});

Route::get('master', function(){
	return view('master');
});

Route::get('admin/index', function() {
	$datos = array('nombre' => 'David',
					'edad' => 15);
	return view('admin.index')->with('parametro', $datos);
});