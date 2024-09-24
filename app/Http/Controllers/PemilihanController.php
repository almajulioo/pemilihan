<?php

namespace App\Http\Controllers;

use Illuminate\Bus\UpdatedBatchJobCounts;
use Illuminate\Http\Request;
use App\Models\Pemilihan;
class PemilihanController extends Controller
{
    public function create(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $pemilihan = Pemilihan::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return back()->with('success', 'Berhasil membuat pemilihan!');
    }

    public function update(Request $request, $id)
    {
        $pemilihan = Pemilihan::find($id);
        if(!$pemilihan) {
            return back()->with('error','Pemilihan tidak ditemukan');
        }

        $pemilihan->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        return back()->with('success', 'Berhasil mengupdate pemilihan!');
    }

    public function delete($id)
    {
        $pemilihan = Pemilihan::find($id);

        if(!$pemilihan) {
            return back()->with('error','Pemilihan tidak ditemukan');
        }
        $pemilihan->delete();
        return back()->with('success', 'Berhasil menghapus pemilihan!');
    }
}
