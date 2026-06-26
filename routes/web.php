<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BahanController;

// Route::get('/', function () {
//     return view('layouts.master');
// });


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);
Route::resource('bahan', BahanController::class);
