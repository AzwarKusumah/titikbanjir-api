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
        Schema::dropIfExists('titik_pengungsian');
        Schema::create('titik_pengungsian', function (Blueprint $table) {
            $table->id('id_titik_pengungsian');
            $table->string('nama_pengungsian');
            $table->integer('jumlah_kepala_keluarga');
            $table->integer('jumlah_orang_mengungsi');
            $table->ipAddress('longitude_pengungsian');
            $table->text('link_maps_pengungsian');
            $table->unsignedBigInteger('id_kelurahan');
            $table->foreign('id_kelurahan')->references('id_kelurahan')->on('kelurahan')->onDelete('cascade');
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titik_pengungsian');
    }
};