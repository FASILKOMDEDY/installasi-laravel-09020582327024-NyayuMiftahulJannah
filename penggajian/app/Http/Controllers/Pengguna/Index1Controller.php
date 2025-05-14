<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;

class Index1Controller extends Controller
{
    public function index()
    {
        return view('pengguna.index');
    }
}