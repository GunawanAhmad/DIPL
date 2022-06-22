<?php

namespace App\Http\Controllers;

use App\Models\Produk_SMS;
use App\Http\Requests\StoreProduk_SMSRequest;
use App\Http\Requests\UpdateProduk_SMSRequest;
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
        return View('Tambah_paket_sms');
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

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \App\Http\Requests\StoreProduk_SMSRequest  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(StoreProduk_SMSRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Produk_SMS  $produk_SMS
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Produk_SMS $produk_SMS)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Produk_SMS  $produk_SMS
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Produk_SMS $produk_SMS)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \App\Http\Requests\UpdateProduk_SMSRequest  $request
    //  * @param  \App\Models\Produk_SMS  $produk_SMS
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(UpdateProduk_SMSRequest $request, Produk_SMS $produk_SMS)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Produk_SMS  $produk_SMS
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Produk_SMS $produk_SMS)
    // {
    //     //
    // }
}