<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

Route::resource('ambulancias', 'VehiculosController' , ['only' => [
    'index', 'create', 'store', 'edit', 'update'
]]);

Route::resource('suscriptores', 'SuscriptorController' , ['only' => [
    'index', 'create', 'store'
]]);

Route::resource('servicios', 'ServicioController' , ['only' => [
    'index'
]]);

Route::get('/obtenerUbicacion/{id}', 'VehiculosController@getVehicleInformation');

Route::get('/getvehicles', 'VehiculosController@countVehicles');

Route::get('/obtenerservicios', 'ServicioController@getActiveServices');

Route::get('/obtenerinformacionservicio/{id}', 'ServicioController@getServiceInformation');