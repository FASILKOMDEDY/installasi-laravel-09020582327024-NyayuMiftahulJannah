<?php

namespace App\Http\Controllers\Admin\Karyawan;

use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index()
    {
        return view('admin/karyawan.list');
    }

    public function tambah()
    {
    return view('admin/karyawan.tambah');
    }
}