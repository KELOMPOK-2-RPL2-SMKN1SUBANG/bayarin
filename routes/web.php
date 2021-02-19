<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
});

Route::get('admin', function () {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', 'AdminController')->name('dashboard');

    // Students
    Route::resource('students', 'StudentController', [
        'names' => [
            'index' => 'students'
        ]
    ]);

    // Classrooms
    Route::resource('classrooms', 'ClassroomController', [
        'names' => [
            'index' => 'classrooms'
        ]
    ]);

    // Users
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);

    // Payments
    Route::resource('payments', 'PaymentController', [
        'names' => [
            'index' => 'payments'
        ]
    ]);

    // Payment Transactions
    Route::resource('payment-transactions', 'PaymentTransactionController', [
        'names' => [
            'index' => 'payment-transactions'
        ]
    ]);
});

Auth::routes(['verify' => true]);

// Get authenticated user
Route::get('users/auth', function () {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});
