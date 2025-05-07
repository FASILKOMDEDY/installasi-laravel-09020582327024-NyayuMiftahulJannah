<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 

// Rute untuk halaman umum
Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/login', function () {
    return view('login');
});

// Rute untuk login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Rute untuk admin
Route::prefix('admin')->group(function () {
    Route::get('/index', function () {
        return view('admin.index'); 
    });

    Route::prefix('jabatan')->group(function () {
        Route::get('/list', function () {
            return view('admin.jabatan.list');
        });

        Route::get('/tambah', function () {
            return view('admin.jabatan.tambah'); 
        });
    });

    Route::prefix('karyawan')->group(function () {
        Route::get('/list', function () {
            return view('admin.karyawan.list'); 
        });

        Route::get('/tambah', function () {
            return view('admin.karyawan.tambah'); 
        });
    });

    Route::prefix('absensi')->group(function () {
        Route::get('/list', function () {
            return view('admin.absensi.list'); 
        });

        Route::get('/tambah', function () {
            return view('admin.absensi.tambah'); 
        });
    });

    Route::prefix('gaji')->group(function () {
        Route::get('/list', function () {
            return view('admin.gaji.list'); 
        });
    });

    Route::get('/laporan/slip', function () {
        return view('admin.laporan.slip'); 
    });
});


Route::prefix('pengguna')->group(function () {
    Route::get('/index', function () {
        return view('pengguna.index'); 
    });

    Route::get('/laporan/slip', function () {
        return view('pengguna.laporan.slip'); 
    });
});


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    return redirect('/login');
})->name('logout');