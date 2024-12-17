<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MeteranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembacaanController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PeranController;
use App\Models\Meteran;
use App\Models\Tagihan;
use App\Models\Tarif;
use App\Http\Controllers\DashboardController;

Route::resource('pelanggan', PelangganController::class);
Route::resource('meteran', MeteranController::class);
Route::resource('pembacaan', PembacaanController::class);
Route::resource('tagihan', TagihanController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('tarif', TarifController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('peran', PeranController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/', function () {
    return redirect()->route('dashboard.index');
});
