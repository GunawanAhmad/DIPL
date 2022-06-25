<?php

namespace App\Http\Controllers;

use App\Models\Produk_Data;
use App\Models\Produk_SMS;
use App\Models\Produk_Tel;
use App\Models\UserDataProduk;
use App\Models\UserSmsProduk;
use App\Models\UserTelProduk;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function admin() {
        $data = Produk_Data::select('produks.*', 'produk__data.jumlah_data')->join('produks', 'produk__data.produk_id', 'produks.id')->get();

        $tel = Produk_Tel::select('produks.*', 'produk__tels.jumlah_menit')->join('produks', 'produk__tels.produk_id', 'produks.id')->get();

        $sms = Produk_SMS::select('produks.*', 'produk__s_m_s.jumlah_sms')->join('produks', 'produk__s_m_S.produk_id', 'produks.id')->get();
        
        return view('admin/Dashboard', ['data' => $data, 'tel' => $tel, 'sms' => $sms]);
    }

    function user() {
        $id = Auth::user()->id;

        
        $data = UserDataProduk::select('produks.*', 'produk__data.jumlah_data', 'user_data_produks.tanggal_berakhir', 'produk__data.produk_id')->join('produk__data', 'produk__data.id', 'user_data_produks.produk_id')->join('produks', 'produk__data.produk_id', 'produks.id')->where('user_data_produks.user_id', $id)->get();
        
        $tel = UserTelProduk::select('produks.*', 'user_tel_produks.tanggal_berakhir', 'produk__tels.produk_id')->join('produk__tels', 'user_tel_produks.produk_id', 'produk__tels.id')->join('produks', 'produks.id', 'produk__tels.produk_id')->where('user_tel_produks.user_id', $id)->get();
        
        
        $sms = UserSmsProduk::select('produks.*', 'user_sms_produks.tanggal_berakhir', 'produk__s_m_s.produk_id')->join('produk__s_m_s', 'user_sms_produks.produk_id', 'produk__s_m_s.id')->join('produks', 'produks.id', 'produk__s_m_s.produk_id')->where('user_sms_produks.user_id', $id)->get();


        $user = Auth::user();

        
        return view('user/Dashboard', ['data' => $data, 'tel' => $tel, 'sms' => $sms, 'user' => $user]);
    }

    function daftarProduk() {
        $data = Produk_Data::select('produks.*', 'produk__data.jumlah_data')->join('produks', 'produk__data.produk_id', 'produks.id')->get();
        $tel = Produk_Tel::select('produks.*', 'produk__tels.jumlah_menit')->join('produks', 'produk__tels.produk_id', 'produks.id')->get();
        $sms = Produk_SMS::select('produks.*', 'produk__s_m_s.jumlah_sms')->join('produks', 'produk__s_m_S.produk_id', 'produks.id')->get();
        return view('user/daftar_produk', ['data' => $data, 'tel' => $tel, 'sms' => $sms]);
    }
}