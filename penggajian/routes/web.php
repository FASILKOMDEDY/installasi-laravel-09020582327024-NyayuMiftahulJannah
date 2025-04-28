<?php

use Illuminate\Support\Facades\Route;

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/jabatan/list', function () {
    return view('admin.jabatan.list');
});

Route::get('/admin/jabatan/tambah', function () {
    return view('admin.jabatan.tambah');
});

Route::get('/admin/karyawan/list', function () {
    return view('admin.karyawan.list');
});

Route::get('/admin/karyawan/tambah', function () {
    return view('admin.karyawan.tambah');
});

Route::get('/admin/absensi/list', function () {
    return view('admin.absensi.list');
});

Route::get('/admin/absensi/tambah', function () {
    return view('admin.absensi.tambah');
});

Route::get('/admin/gaji/list', function () {
    return view('admin.gaji.list');
});

Route::get('/admin/laporan/slip', function () {
    return view('admin.laporan.slip');
});

Route::get('/pengguna/index', function () {
    return view('pengguna.index');
});

Route::get('/pengguna/laporan/slip', function () {
    return view('pengguna.laporan.slip');
});
