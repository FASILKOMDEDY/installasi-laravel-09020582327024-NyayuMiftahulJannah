<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;

// admin
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\Absensi\ListController;
use App\Http\Controllers\Admin\Gaji\ListController as GajiListController;
use App\Http\Controllers\Admin\Jabatan\ListController as JabatanListController;
use App\Http\Controllers\Admin\Karyawan\ListController as KaryawanListController;
use App\Http\Controllers\Admin\Laporan\SlipController;

// pengguna
use App\Http\Controllers\Pengguna\Index1Controller;
use App\Http\Controllers\Pengguna\Laporan\SlipController as LaporanSlipController;

// Rute untuk halaman umum
Route::prefix('daftar')->group(function () {
    Route::get('/', [DaftarController::class, 'index'])->name('daftar');
    });

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    });

// Rute untuk admin
Route::prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('admin.index');
    });

    Route::prefix('jabatan')->group(function () {
    Route::get('/', [JabatanListController::class, 'index'])->name('jabatan.list');
    Route::get('/tambah', [JabatanListController::class, 'tambah'])->name('jabatan.tambah');
    });

    Route::prefix('karyawan')->group(function () {
    Route::get('/', [KaryawanListController::class, 'index'])->name('karyawan.list');
    Route::get('/tambah', [KaryawanListController::class, 'tambah'])->name('karyawan.tambah');
    });

    Route::prefix('absensi')->group(function () {
    Route::get('/', [ListController::class, 'index'])->name('absensi.list');
    Route::get('/tambah', [ListController::class, 'tambah'])->name('absensi.tambah');
    });


    Route::prefix('gaji')->group(function () {
    Route::get('/', [GajiListController::class, 'index'])->name('gaji.list');
    });


    Route::prefix('laporan')->group(function () {
    Route::get('/', [SlipController::class, 'index'])->name('laporan.slip');
    });


Route::prefix('pengguna')->group(function () {
    Route::get('/', [Index1Controller::class, 'index'])->name('pengguna.index');
    });

    Route::prefix('laporan')->group(function () {
    Route::get('/', [LaporanSlipController::class, 'index'])->name('laporan.slip');
    });


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    return redirect('/login');
})->name('logout');