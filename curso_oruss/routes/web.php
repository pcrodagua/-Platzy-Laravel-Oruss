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


Route::get('/test', function () {
    return [
        'saludo' => 'Hola',
        'nombre' => 'Oruss'
    ];
});

Route::get('/oruss', function () {
    return view('oruss');
});

## en esta sección se define el tipo de método, podemos usar route, put delete post, en sí. y además la palabra
# reservada any, en la cual cualquier método entra directamente a esta función.
