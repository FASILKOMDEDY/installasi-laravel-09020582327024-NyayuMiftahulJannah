<?php

namespace App\Http\Controllers\Pengguna\Laporan;

use App\Http\Controllers\Controller;

class SlipController extends Controller
{
    public function index()
    {
        return view('pengguna/laporan.slip');
    }
}