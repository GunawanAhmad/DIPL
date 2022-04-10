<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    private $produk_id;
    

    //setter
    function set_produk_id($produk_id) {
        $this->produk_id = $produk_id;
    }

    
    


    //getter
    function get_produk_id() {
        return $this->produk_id;
    }

}