<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Pemilihan;
use App\Models\Kandidat;
use Carbon\Carbon;
class BerandaController 
{
    public function index()
    {   
        $pemilihans = Pemilihan::all();
         foreach($pemilihans as $pemilihan){
            $formattedMulai = Carbon::parse($pemilihan->start_date)->translatedFormat('d F Y');
            $formattedBerakhir = Carbon::parse($pemilihan->end_date)->translatedFormat('d F Y');

            $pemilihan->mulai = $formattedMulai;
            $pemilihan->berakhir = $formattedBerakhir;
        }
        return view('frontend.beranda')->with(['pemilihans' => $pemilihans]);
    }

    public function pemilihan($id)
    {
        $pemilihan = Pemilihan::find($id);
        $kandidats = Kandidat::where('pemilihan_id', $pemilihan->id)->get();
        return view('frontend.pemilihan')->with(['pemilihan' => $pemilihan, 'kandidats' => $kandidats]);
    }
}
