<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use Carbon\Carbon;
use App\Models\Pemilihan;
use App\Models\Vote;

class HasilDashboard
{
    public function hasil($pemilihan_id){
        $pemilihan = Pemilihan::find($pemilihan_id);
        $kandidats = Kandidat::where('pemilihan_id', $pemilihan->id)->withCount('votes')->get();
        return view('dashboard.hasil')->with(['pemilihan' => $pemilihan, 'kandidats' => $kandidats]);
    }
}
