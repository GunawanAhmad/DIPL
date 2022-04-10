<?php

namespace App\Models;


use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class ProductPaketData extends Produk
{
    use HasApiTokens;

    private $id_produk;
    private $harga;
    private $jumlah_data;
    private $nama_produk;
    private $masa_berlaku;
    


    //setter
    function set_id_produk($id_produk) {
        $this->id_produk = $id_produk;
    }

    function set_hargak($harga) {
        $this->harga = $harga;
    }

    function set_jumlah_data($jumlah_data) {
        $this->jumlah_data = $jumlah_data;
    }

    function set_nama_produk($nama_produk) {
        $this->nama_produk = $nama_produk;
    }

    function set_masa_berlaku($masa_berlaku) {
        $this->masa_berlaku = $masa_berlaku;
    }

    //getter
    function get_id_produk() {
        return $this->id_produk;
    }

    function get_nama_produk() {
        return $this->nama_produk;
    }

    function get_harga() {
        return $this->harga;
    }

    function get_jumlah_data() {
        return $this->jumlah_data;
    }

    
    function get_masa_berlaku() {
        return $this->masa_berlaku;
    }
    

}