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
Route::get('/student','StudentController@display');

Route::post('/add_data','StudentController@save');

Route::get('/studentadd','StudentController@display');
Route::get('/studentview','StudentController@index');
Route::get('/student','StudentController@show');