<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Pemilihan;
use Carbon\Carbon;

class PemilihanDashboard
{
    public function pemilihan(){
        $pemilihans = Pemilihan::all();
        foreach($pemilihans as $pemilihan){
            $formattedMulai = Carbon::parse($pemilihan->start_date)->translatedFormat('d F Y');
            $formattedBerakhir = Carbon::parse($pemilihan->end_date)->translatedFormat('d F Y');

            $pemilihan->mulai = $formattedMulai;
            $pemilihan->berakhir = $formattedBerakhir;
        }
        return view('dashboard.pemilihan.pemilihan')->with(['pemilihans' => $pemilihans]);
    }

    public function tambahPemilihan(){
        return view('dashboard.pemilihan.tambah');
    }

    public function updatePemilihan($id){
        $pemilihan = Pemilihan::find($id);
        return view('dashboard.pemilihan.update')->with(['pemilihan' => $pemilihan]);
    }
}
