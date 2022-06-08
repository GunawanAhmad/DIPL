<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk_Tel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'harga',
        'masa_berlaku',
        'jumlah_menit',
    ];
}