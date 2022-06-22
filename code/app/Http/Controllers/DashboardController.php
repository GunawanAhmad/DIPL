<?php

namespace App\Http\Controllers;

use App\Models\Produk_Data;
use App\Models\Produk_SMS;
use App\Models\Produk_Tel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    function admin() {
        $data = Produk_Data::select('produks.*', 'produk__data.jumlah_data')->join('produks', 'produk__data.produk_id', 'produks.id')->get();
        $tel = Produk_Tel::select('produks.*', 'produk__tels.jumlah_menit')->join('produks', 'produk__tels.produk_id', 'produks.id')->get();
        $sms = Produk_SMS::select('produks.*', 'produk__s_m_s.jumlah_sms')->join('produks', 'produk__s_m_S.produk_id', 'produks.id')->get();
        return view('Dashboard', ['data' => $data, 'tel' => $tel, 'sms' => $sms]);
    }

}