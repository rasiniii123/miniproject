<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', [UserController::class, 'index'])->name('auth.login');

