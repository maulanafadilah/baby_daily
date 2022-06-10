<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_produk',
        'harga',
        'brand',
        'stok',
        'deskripsi',
        'id_kategori',
        'id_penjual',
        'link_tokped',
        'link_shopee',
        'link_buka',
        'cover'
    ];
}
