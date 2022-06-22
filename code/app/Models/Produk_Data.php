<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk_Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'harga',
        'masa_berlaku',
        'jumlah_data',
        'produk_id'
    ];

    public function produk() {
        return $this->belongsTo('App\Models\Produk');
    }
}