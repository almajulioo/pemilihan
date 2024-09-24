<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "votes";
    protected $fillable = ["pemilihan_id", "kandidat_id", "user_id"];
    use HasFactory;
}
