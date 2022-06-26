<?php

namespace App\Http\Controllers;

use App\Models\Produk_SMS;
use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukSMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function tambah_sms_view() {
        return View('admin/Tambah_paket_sms');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $produk = Produk::create($request->all());
        Produk_SMS::create(
            [
                'jumlah_sms' => $request->jumlah_sms,
                'produk_id' => $produk->id,
            ]
        );
        return redirect('/admin');
    }

    public function delete(Request $request) {
        $id = $request->route('id');
        $produk_data = Produk_SMS::find($id);
        Produk_SMS::destroy($id);
        Produk::destroy($produk_data->produk_id);
        return redirect('/admin');
    }
}