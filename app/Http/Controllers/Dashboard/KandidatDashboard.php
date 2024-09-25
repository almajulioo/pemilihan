<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use Carbon\Carbon;

class KandidatDashboard
{
    public function tambahKandidat($id){
        return view('dashboard.kandidat.tambah')->with(['pemilihan_id' => $id]);
    }
    public function updateKandidat($pemilihan_id, $id){
        $kandidat = Kandidat::find($id);
        return view('dashboard.kandidat.update')->with(['pemilihan_id' => $pemilihan_id, 'kandidat' => $kandidat]);
    }
}
