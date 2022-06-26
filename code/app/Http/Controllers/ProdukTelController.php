<?php

namespace App\Http\Controllers;

use App\Models\Produk_Tel;
use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukTelController extends Controller
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

    public function tambah_tel_view() {
        return View('admin/Tambah_paket_tel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $produk = Produk::create($request->all());
        Produk_Tel::create(
            [
                'jumlah_menit' => $request->jumlah_menit,
                'produk_id' => $produk->id,
            ]
        );
        return redirect('/admin');
    }

    public function delete(Request $request) {
        $id = $request->route('id');
        $produk_data = Produk_Tel::find($id);
        Produk_Tel::destroy($id);
        Produk::destroy($produk_data->produk_id);
        return redirect('/admin');
    }
}