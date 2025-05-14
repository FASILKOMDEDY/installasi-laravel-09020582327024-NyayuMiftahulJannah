<?php

namespace App\Http\Controllers\Admin\Laporan;

use App\Http\Controllers\Controller;

class SlipController extends Controller
{
    public function index()
    {
        return view('admin/laporan.slip');
    }
}