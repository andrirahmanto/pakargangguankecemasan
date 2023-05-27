<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenyakit extends Model
{
    protected $fillable = [
        'userid',
        'riwayat'
    ];
    use HasFactory;
}
