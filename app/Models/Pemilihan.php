<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilihan extends Model
{
    protected $table = 'pemilihans';
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];
    use HasFactory;

    public function kandidats()
    {
        return $this->hasMany(Kandidat::class);
    }
}
