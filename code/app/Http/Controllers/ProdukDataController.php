<?php

namespace App\Http\Controllers;

use App\Models\Produk_Data;
use App\Http\Requests\StoreProduk_DataRequest;
use App\Http\Requests\UpdateProduk_DataRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


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
        return View('Tambah_paket_data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Produk_Data::create($request->all());
        return redirect('/admin');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \App\Http\Requests\StoreProduk_DataRequest  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(StoreProduk_DataRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Produk_Data  $produk_Data
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Produk_Data $produk_Data)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Produk_Data  $produk_Data
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Produk_Data $produk_Data)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \App\Http\Requests\UpdateProduk_DataRequest  $request
    //  * @param  \App\Models\Produk_Data  $produk_Data
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(UpdateProduk_DataRequest $request, Produk_Data $produk_Data)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Produk_Data  $produk_Data
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Produk_Data $produk_Data)
    // {
    //     //
    // }
}