<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('titik_banjir');
        Schema::create('titik_banjir', function (Blueprint $table) {
            $table->id('id_titik_banjir');
            $table->string('nama_titik');
            $table->unsignedBigInteger('id_kelurahan');
            $table->foreign('id_kelurahan')->references('id_kelurahan')->on('kelurahan')->onDelete('cascade');
            $table->ipAddress('longitude');
            $table->text('link_maps');
            $table->ipAddress('ketinggian_air');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titik_banjir');
    }
};