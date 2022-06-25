<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Produk_Data;
use App\Models\Produk_SMS;
use App\Models\User;
use App\Models\Produk_Tel;
use App\Models\UserDataProduk;
use App\Models\UserSmsProduk;
use App\Models\UserTelProduk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index_data(Request $request) {
        $id = $request->route('id');
        $data = Produk_Data::select('produk__data.*', 'produks.harga','produks.masa_berlaku','produks.nama')->join('produks', 'produks.id', 'produk__data.produk_id')->where('produk__data.produk_id', $id)->first();
        return View('user/pembayaran_data', ['data' => $data]);
    }
    public function index_tel(Request $request) {
        $id = $request->route('id');
        $data = Produk_Tel::select('produk__tels.*', 'produks.harga','produks.masa_berlaku','produks.nama')->join('produks', 'produks.id', 'produk__tels.produk_id')->where('produk__tels.produk_id', $id)->first();
        return View('user/pembayaran_tel', ['data' => $data]);

    }
    public function index_sms(Request $request) {
        $id = $request->route('id');
        $data = Produk_SMS::select('produk__s_m_s.*', 'produks.harga','produks.masa_berlaku','produks.nama')->join('produks', 'produks.id', 'produk__s_m_s.produk_id')->where('produk__s_m_s.produk_id', $id)->first();
        return View('user/pembayaran_sms', ['data' => $data]);
    }

    public function bayar_data(Request $request) {
        $id = $request->route('id');
        $user = User::find(Auth::user()->id);
        $produk_data = Produk_Data::find($id);
        $produk = Produk::find($produk_data->produk_id);
        $user->update(['saldo' => $user->saldo - $produk->harga]);
        $date = Carbon::now();
        $date->addDays($produk->masa_berlaku);
        UserDataProduk::create([
            'produk_id' => $id,
            'user_id' => $user->id,
            'tanggal_berakhir' => $date
        ]);
        return redirect('/user');
    }

    public function bayar_tel(Request $request) {
        $id = $request->route('id');
        $user = User::find(Auth::user()->id);
        $produk_tel = Produk_Tel::find($id);
        $produk = Produk::find($produk_tel->produk_id);
        $user->update(['saldo' => $user->saldo - $produk->harga]);
        $date = Carbon::now();
        $date->addDays($produk->masa_berlaku);
        UserTelProduk::create([
            'produk_id' => $id,
            'user_id' => $user->id,
            'tanggal_berakhir' => $date
        ]);
        return redirect('/user');
    }

    public function bayar_sms(Request $request) {
        $id = $request->route('id');
        $user = User::find(Auth::user()->id);
        $produk_sms = Produk_SMS::find($id);
        $produk = Produk::find($produk_sms->produk_id);
        $user->update(['saldo' => $user->saldo - $produk->harga]);
        $date = Carbon::now();
        $date->addDays($produk->masa_berlaku);
        UserSmsProduk::create([
            'produk_id' => $id,
            'user_id' => $user->id,
            'tanggal_berakhir' => $date
        ]);
        return redirect('/user');
    }

}