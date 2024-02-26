<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\UlasanController;

use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailmenuController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PaymentController;

// Route::middleware('auth')->group(function () {
// });



Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::middleware(['CheckRole:user'])->group(function () {
        Route::get('menu', [MenuController::class, 'index'])->name('menu');
        Route::get('detailmenu', [DetailmenuController::class, 'index'])->name('detailmenu');
        Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan');
        Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('/histori', [HistoriController::class, 'index'])->name('histori');
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('/login', [UserController::class, 'store'])->name('login.submit');
    Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
    Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');
    Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
    Route::get('/tentangkami', [TentangController::class, 'index'])->name('tentang.index');
    Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail.index');
});

Route::middleware(['CheckRole:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

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
Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('', [ProfileController::class, 'index'])->name('profile');
    Route::get('create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('store', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('edit/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('destroy/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('test', function () {
    return view('user.test');
});
Route::controller(PaymentController::class)->prefix('payment')->group(function () {
    Route::get('', 'index')->name('payment');
    Route::get('create', 'create')->name('payment.create');
    Route::post('store', 'store')->name('payment.store');
    Route::get('edit/{id}', 'edit')->name('payment.edit');
    Route::put('edit/{id}', 'update')->name('payment.update');
    Route::delete('destroy/{id}', 'destroy')->name('payment.destroy');
});
