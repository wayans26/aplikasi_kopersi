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
        Schema::create('daftar_rekenings', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_rekening')->unique();
            $table->string('nama_rekening');
            $table->enum('status', ['1', '0']);
            $table->unsignedInteger('id_daftar_akun');
            $table->foreign('id_daftar_akun')->references('id')->on('daftar_akuns');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_rekenings');
    }
};
