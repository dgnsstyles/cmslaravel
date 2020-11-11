<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/inicio', 'InicioController@index');


// FrontEnd

Route::get('/', 'FrontEndController@inicio');

// Datos
Route::view('/datos', 'modulos.datos');
Route::put('/datos', 'UsuariosController@update');

// Usuarios
Route::get('/usuarios', 'UsuariosController@index');
Route::get('/crear-usuarios', 'UsuariosController@create');
Route::post('/crear-usuarios', 'UsuariosController@store');
Route::delete('/usuarios/{id}', 'UsuariosController@destroy');

// Slide
Route::get('/slide', 'SlideController@index');
Route::post('/slide', 'SlideController@store');

