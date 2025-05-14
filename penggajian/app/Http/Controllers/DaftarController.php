<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar');
    }
}