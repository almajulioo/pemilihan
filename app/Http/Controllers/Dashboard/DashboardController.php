<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class DashboardController
{
    public function pemilihan(){
        return view('dashboard.pemilihan');
    }
}
