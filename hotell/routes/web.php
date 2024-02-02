<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

Route::middleware('guest')->group(function () {

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', [UserController::class, 'index'])->name('auth.login');
Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');

Route::post('/login', [UserController::class, 'store'])->name('login.submit');
});

