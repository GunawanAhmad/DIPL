<?php

namespace App\Models;


use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class Pembayaran extends Model
{
    use HasApiTokens;

    private $product_id;
    private $jenisPembayaran;
    private $listHarga;
    private $JenisPaket;
    private $userid;
    private $id_proudct;
    
    


    //setter
    function viewHarga( )
    {

    }
    function choosePayment( )
    {

    }
}