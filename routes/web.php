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
Route::get('/info','PaginaController@info');
Route::get('/bienvenida/{nombre}/{apellido?}', 'PaginaController@bienvenida');
Route::get('/contacto','PaginaController@contacto');
Route::get('/colaboradores','PaginaController@colaboradores')->name('equipo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
