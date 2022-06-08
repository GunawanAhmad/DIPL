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
        $data = Produk_Data::get();
        $tel = Produk_Tel::get();
        $sms = Produk_SMS::get();
        return view('Dashboard', ['data' => $data, 'tel' => $tel, 'sms' => $sms]);
    }

}