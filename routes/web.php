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

Route::get('/', 'AdminController@index');

// Student
Route::resource('students', 'StudentController');
// Classroom
Route::resource('classrooms', 'ClassroomController');
// Payment
Route::resource('payments', 'PaymentController');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
