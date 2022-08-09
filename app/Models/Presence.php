<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'nama_balita',
        'tanggal',
        'usia',
        'tinggi',
        'berat',
        'ntob',
        'imunisasi',
        'keterangan',
        'id_posyandu'
    ];
}
