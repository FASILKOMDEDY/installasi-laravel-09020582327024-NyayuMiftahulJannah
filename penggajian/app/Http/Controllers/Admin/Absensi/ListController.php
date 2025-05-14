<?php

namespace App\Http\Controllers\Admin\Absensi;

use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index()
    {
        return view('admin/absensi.list');
    }

    public function tambah()
    {
    return view('admin/absensi.tambah');
    }
}