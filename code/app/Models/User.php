<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Produk;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'saldo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function pembayaran() {
        return $this->hasmany('App\Models\Pembayaran');
    }

    public function userDataProduk() {
        return $this->hasmany('App\Models\UserDataProduk');
    }

    public function userTelProduk() {
        return $this->hasmany('App\Models\UserTelProduk');
    }

    public function userSmsProduk() {
        return $this->hasmany('App\Models\UserSmsProduk');
    }

}