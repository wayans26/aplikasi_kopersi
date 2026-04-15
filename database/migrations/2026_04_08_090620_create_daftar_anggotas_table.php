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
        Schema::create('daftar_anggotas', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_anggota')->unique();
            $table->string('nama_anggota');
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('type_dokumen')->nullable();
            $table->string('no_dokumen')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->date('tanggal_bergabung');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->enum('status_anggota', ['1', '0']);
            $table->unsignedInteger('id_unit_koperasi');
            $table->foreign('id_unit_koperasi')->references('id')->on('unit_koperasis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_anggotas');
    }
};
