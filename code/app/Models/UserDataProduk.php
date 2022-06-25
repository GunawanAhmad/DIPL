<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDataProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'produk_id',
        'tanggal_berakhir',
    ];

    public function produk() {
        return $this->belongsTo('App\Models\Produk_Data');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}