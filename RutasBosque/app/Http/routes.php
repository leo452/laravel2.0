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

//Route::get('index','WelcomeController@index');
//Route::get('admin','AdministradorController@index');

/*Route::get('bus','PagesController@bus');
Route::get('buses','BusesController@index');
Route::get('buses/create','BusesController@create');
Route::post('buses','BusesController@store');*/

Route::resource('API/buses','BusAPIController');
Route::resource('buses','BusesController');







Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);






