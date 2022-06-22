<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'harga',
        'masa_berlaku',
    ];

    public function produkData() {
        return $this->hasOne('App\Models\Produk_Data');
    }

    public function produkTel() {
        return $this->hasOne('App\Models\Produk_Tel');
    }

    public function produkSms() {
        return $this->hasOne('App\Models\Produk_SMS');
    }

    public function pembayaran() {
        return $this->hasmany('App\Models\Pembayaran');
    }

}