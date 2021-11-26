<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function indec()
    {
        return view('dashboard.absensi');
    }
}