<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DetailmenuController;
use App\Http\Controllers\AdminDashboardController;

    Route::get('/', function () {
        return view ('dashboard');
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

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::get('detailmenu', [DetailmenuController::class, 'index'])->name('detailmenu');

Route::get('/tentangkami', [TentangController::class, 'index'])->name('tentang.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::get('/detail', [DetailController::class, 'index'])->name('detail.index');

Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/rooms/create', [RoomController::class, 'create'])->name('rooms.create');

    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
    Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');
});

