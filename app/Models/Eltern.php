<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eltern extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_kk',
        'nik',
        'nama_lengkap',
        'tanggal_lahir',
        'jenis_kelamin',
        'nomor_telepon',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'alamat',
        'kode_pos',
        'foto_orangtua',
        'id_pengguna',
    ];
}
