<?php

namespace App\Http\Controllers;

use App\Models\Produk_Data;
use App\Http\Requests\StoreProduk_DataRequest;
use App\Http\Requests\UpdateProduk_DataRequest;
use App\Models\Produk;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProdukDataController extends Controller
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

    public function tambah_data_view() {
        return View('admin/Tambah_paket_data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $produk = Produk::create($request->all());
        Produk_Data::create(
            [
                'jumlah_data' => $request->jumlah_data,
                'produk_id' => $produk->id,
            ]
        );
        return redirect('/admin');
    }

    public function delete(Request $request) {
        Log::info("dad");
        $id = $request->route('id');
        $produk_data = Produk_Data::find($id);
        Produk_Data::destroy($id);
        Produk::destroy($produk_data->produk_id);
        return redirect('/admin');
    }
}