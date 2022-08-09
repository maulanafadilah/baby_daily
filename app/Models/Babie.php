<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Babie extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_kk',
        'nik',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'ibu',
        'ayah',
        'wali',
        'alamat',
        'tinggi_lahir',
        'berat_lahir',
        'id_posyandu',
        'foto_balita',
        'keterangan'
    ];
}
