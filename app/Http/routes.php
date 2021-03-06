<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TodosController@index');
Route::post('/', 'TodosController@store');

Route::get('aviso/create', 'AvisoController@create');
Route::post('aviso/create','AvisoController@store');
Route::get('aviso/show','AvisoController@show');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
