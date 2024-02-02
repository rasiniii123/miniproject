<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', [UserController::class, 'index'])->name('auth.login');
Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');

