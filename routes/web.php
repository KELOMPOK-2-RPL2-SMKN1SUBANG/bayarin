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
    return view('layouts.admin.index');
});

Route::get('/students', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');
Route::post('/students', 'StudentController@store');
Route::get('/students/{student}/edit', 'StudentController@edit');
Route::patch('/students/{student}', 'StudentController@update');
Route::delete('/students/{student}', 'StudentController@destroy');
Route::get('/students/{student}', 'StudentController@show');
