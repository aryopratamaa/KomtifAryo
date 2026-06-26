<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EventController;

// Route::get('/', function () {
//     return view('layouts.master');
// });


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);
Route::resource('bahan', BahanController::class);
Route::resource('stok', StokController::class);
Route::resource('user', UserController::class);
Route::resource('setting', RoleController::class);
Route::resource('event', EventController::class);
