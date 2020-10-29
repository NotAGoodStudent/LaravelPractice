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

Route::get('/users/list', 'UserController@index');
Route::get('/users/register', 'UserController@create');
Route::get('/users/getUser', 'UserController@getUser');
Route::get('/users/login', 'UserController@validateData');
Route::get('/users/{id}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::get('/pizzas', 'PizzaController@index');
Route::get('/pizzas/create', 'PizzaController@create');
Route::get('/pizzas/{id}', 'PizzaController@show');
Route::post('/pizzas', 'PizzaController@store');


