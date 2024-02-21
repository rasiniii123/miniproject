<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DetailmenuController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UlasanController;

Route::get('/login', [UserController::class, 'index'])->name('auth.login');
Route::post('/login', [UserController::class, 'store'])->name('login.submit');

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');

Route::middleware('auth')->group(function () {

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');



Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('menu', [MenuController::class, 'index'])->name('menu');

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::get('detailmenu', [DetailmenuController::class, 'index'])->name('detailmenu');

Route::get('/ulasan',[UlasanController::class,'index'])->name('ulasan');

Route::get('/tentangkami', [TentangController::class, 'index'])->name('tentang.index');
Route::get('/detail', [DetailController::class, 'index'])->name('detail.index');
});

Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::controller(RoomController::class)->prefix('room')->group(function () {
        Route::get('/', 'index')->name('room');
        Route::get('/create', 'create')->name('room.create');
        Route::post('/store', 'store')->name('room.store');
        Route::get('/edit/{id}', 'edit')->name('room.edit');
        Route::put('/edit/{id}', 'update')->name('room.update');
        Route::delete('destroy/{id}', 'destroy')->name('room.destroy');
    });

    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('', 'index')->name('kategori');
        Route::get('create', 'create')->name('kategori.create');
        Route::post('store', 'store')->name('kategori.store');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::put('edit/{id}', 'update')->name('kategori.update');
        Route::delete('destroy/{id}', 'destroy')->name('kategori.destroy');
    });

});
Route::get('/', function () {
    return view ('dashboard');
})->name('dashboard');

