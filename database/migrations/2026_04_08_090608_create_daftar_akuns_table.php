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
        Schema::create('daftar_akuns', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_akun')->unique();
            $table->string('nama_akun');
            $table->string('pos_saldo')->nullable();
            $table->string('pos_laporan')->nullable();
            $table->unsignedBigInteger('saldo_awal')->default(0);
            $table->unsignedBigInteger('saldo_akhir')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_akuns');
    }
};
