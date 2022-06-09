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

Route::get('/', function () {
    return view('prueba/principal');
});
Route::get('/Fabiana', function () {
    return view('prueba.pruebas');
});

Route::get('/danieladejesus', function () {
    return view('prueba/amigos');
});
Route::get('empleados', function () {
    $mensaje = 'vista principal empleados';
    return $mensaje;
});