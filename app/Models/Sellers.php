<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'sellers';
    protected $fillable = [
        'nama_penjual',
        'nomor_telepon',
        'nama_toko',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'alamat',
        'kode_pos',
        'foto_penjual',
        'banner_1',
        'banner_2',
        'banner_3',
        'flag',
        'id_pengguna',
        'link_whatsapp',
        'link_ecommerce'
    ];
}
