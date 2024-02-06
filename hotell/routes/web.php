<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;


    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');



Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::middleware(['auth', ''])->group(function () {
Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});


Route::get('/login', [UserController::class, 'index'])->name('auth.login');

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');

Route::post('/login', [UserController::class, 'store'])->name('login.submit');

route::middleware('checkrole:admin')->group(function() {

});

Route::middleware('checkrole:Semiadmin')->group(function () {



});
});
