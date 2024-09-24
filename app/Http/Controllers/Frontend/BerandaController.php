<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class BerandaController 
{
    public function index()
    {
        return view('frontend.beranda');
    }
}
