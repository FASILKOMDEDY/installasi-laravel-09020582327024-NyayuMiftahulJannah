<?php

namespace App\Http\Controllers\Admin\Gaji;

use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index()
    {
        return view('admin/gaji.list');
    }
}