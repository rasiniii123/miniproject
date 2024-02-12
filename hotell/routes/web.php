<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SemiadminController;

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

Route::middleware('auth')->group(function () {
});
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/login', [UserController::class, 'index'])->name('auth.login');
Route::post('/login', [UserController::class, 'store'])->name('login.submit');

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('menu', [MenuController::class, 'index'])->name('menu');
Route::get('tentangkita',[TentangController::class, 'index'])->name('tentang.index');


Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'checkrole:semiadmin'])->group(function () {
    Route::get('/semiadmin/dashboard', [SemiadminController::class, 'index'])->name('semiadmin.dashboard');
});

