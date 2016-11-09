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
    return view('index');
});


    Route::post('adiciona', 'DoadorController@adiciona');
    Route::get('doadores',['middleware' => 'auth', 'uses' => 'DoadorController@listaDoadores']);
    Route::get('mostra/{id}', 'DoadorController@mostra')
    ->where('id', '[0-9]+');
    Route::get('/doadores/filtrarDoador', 'DoadorController@filtrarDoador');


Auth::routes();

Route::get('/home', 'HomeController@index');
