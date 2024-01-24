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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('kodevd', 7);
            $table->string('namavd', 200);
            $table->string('no_telp', 13);
            $table->string('alamat', 300);
            $table->unsignedBigInteger('kodevd');
            $table->foreign('kodevd')->references('id')->on('vendor')->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
