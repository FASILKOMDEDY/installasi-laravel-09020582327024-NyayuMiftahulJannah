<?php

namespace App\Http\Controllers\Admin\Jabatan;

use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index()
    {
        return view('admin/jabatan.list');
    }

    public function tambah()
    {
    return view('admin/jabatan.tambah');
    }
}