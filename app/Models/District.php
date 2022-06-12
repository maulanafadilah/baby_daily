<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    // Inverse
    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }

    // District -> Village (One to Many)
    public function villages()
    {
        return $this->hasMany(Village::class);
    }

    // District -> Sellers (One to Many)
    public function stores()
    {
        return $this->hasOne(Sellers::class);
    }
}
