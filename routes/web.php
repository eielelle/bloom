<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('/login',function () {
        return view('auth.login');
    })->name('auth.login');
    Route::post('/login', [UserController::class, 'login']);

    Route::get('/register', function () {
        return view('auth.register');
    })->name('auth.register');
    Route::post('/register', [UserController::class, 'register']);
});