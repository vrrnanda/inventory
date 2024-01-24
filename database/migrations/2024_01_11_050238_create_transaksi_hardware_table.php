<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi_hardware', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->string('kodeth', 10);
            $table->string('namahw', 200);
            $table->string('namavd', 200);
            $table->string('merk', 200);
            $table->string('spesifikasi', 400);
            $table->string('no_spk', 10);
            $table->date('tgl_spk');
            $table->string('no_do', 10);
            $table->date('tgl_do');
            $table->string('no_garansi', 10);
            $table->date('tgl_garansi');
            $table->date('tgl_pembelian');
            $table->string('harga', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_hardware');
    }
};
