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
        Schema::create('antrians', function (Blueprint $table) {
            $table->id('ID_Antrian');
            $table->unsignedBigInteger('ID_Pasien');
            $table->unsignedBigInteger('ID_Poli');
            $table->integer('Nomor_Antrian');
            $table->date('Tanggal_Antrian');
            $table->time('Waktu_Antrian');
            $table->string('Status_Antrian', 20);
            $table->timestamps();

            $table->foreign('ID_Pasien')->references('ID_Pasien')->on('pasiens');
            $table->foreign('ID_Poli')->references('ID_Poli')->on('polis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrians');
    }
};
