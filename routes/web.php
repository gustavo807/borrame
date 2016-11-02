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

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');



Route::get('pruebaCon','PruebaController@show');
Route::get('nombre/{nombre?}','PruebaController@nombre');

Route::resource('movie','MovieController');

Route::get('hola/{msj?}', function ($msj = 'Gustavo') {
    return 'Hello my name is: '.$msj;
});

Route::get('prueba', function() {
	return 'Hola desde prueba.php';
});

//Route::get('/', function () {
//    return view('welcome');
//});
