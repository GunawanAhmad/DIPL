<?php

namespace App\Http\Controllers;

use App\Models\Produk_Tel;
use App\Http\Requests\StoreProduk_TelRequest;
use App\Http\Requests\UpdateProduk_TelRequest;
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
        return View('Tambah_paket_tel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Produk_Tel::create($request->all());
        return redirect('/admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduk_TelRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreProduk_TelRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Produk_Tel  $produk_Tel
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Produk_Tel $produk_Tel)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Produk_Tel  $produk_Tel
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Produk_Tel $produk_Tel)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduk_TelRequest  $request
     * @param  \App\Models\Produk_Tel  $produk_Tel
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateProduk_TelRequest $request, Produk_Tel $produk_Tel)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Produk_Tel  $produk_Tel
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Produk_Tel $produk_Tel)
    // {
    //     //
    // }
}