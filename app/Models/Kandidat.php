<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $table = 'kandidats';
    protected $fillable = [
        'pemilihan_id',
        'nomor_urut',
        'photo_url',
        'name',
        'description',
        'visi',
        'misi_1',
        'misi_2',
        'misi_3',
        'kabinet'
    ];
    use HasFactory;

    public function pemilihan()
    {
        return $this->belongsTo(Pemilihan::class);
    }
}
