<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk__s_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('masa_berlaku');
            $table->double('jumlah_sms');
            $table->double('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk__s_m_s');
    }
};