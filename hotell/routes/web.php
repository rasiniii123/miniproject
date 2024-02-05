<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});


Route::get('/login', [UserController::class, 'index'])->name('auth.login');

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');

Route::post('/login', [UserController::class, 'store'])->name('login.submit');

route::middleware('checkrole:admin')->group(function(){

});


