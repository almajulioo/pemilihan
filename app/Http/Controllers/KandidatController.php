<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;

class KandidatController extends Controller
{
    public function create(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'pemilihan_id' => 'required',
            'nomor_urut' => 'required',
            'photo_url' => 'required',
            'description' => 'required',
            'visi' => 'required',
            'misi_1' => 'required',
            'misi_2' => 'required',
            'misi_3' => 'required'
        ]);
        $pemilihan = Kandidat::create([
            'name' => $request->name,
            'pemilihan_id' => $request->pemilihan_id,
            'nomor_urut' => $request->nomor_urut,
            'photo_url' => $request->photo_url,
            'description' => $request->description,
            'visi' => $request->visi,
            'misi_1' => $request->misi_1,
            'misi_2' => $request->misi_2,
            'misi_3' => $request->misi_3
        ]);
        return back()->with('success', 'Berhasil menambahkan kandidat!');
    }

    public function update(Request $request, $id)
    {
        $kandidat = Kandidat::find($id);
        if(!$kandidat) {
            return back()->with('error','Kandidat tidak ditemukan');
        }
        $kandidat->update($request->all());
        return back()->with('success', 'Berhasil mengupdate kandidat!');
    }

    public function delete($id)
    {
        $kandidat = Kandidat::find($id);
        if(!$kandidat) {
            return back()->with('error','Kandidat tidak ditemukan');
        }
        $kandidat->delete();
        return back()->with('success', 'Berhasil menghapus kandidat!');
    }
}
