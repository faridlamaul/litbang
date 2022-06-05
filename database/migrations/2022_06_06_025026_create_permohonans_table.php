<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('riwayat_id')->constrained('riwayats');
            $table->foreignId('surat_id')->constrained('surats');
            $table->date('tanggal_permohonan')->nullable();
            $table->string('surat_sekolah')->nullable();
            $table->string('proposal')->nullable();
            $table->string('ktp')->nullable();
            $table->string('surat_instansi')->nullable();
            $table->string('status')->nullable()->default('Diproses');
            $table->string('keterangan')->nullable()->default('Mohon maaf, surat permohonan yang anda ajukan masih diproses');
            $table->string('qrcode')->nullable();
            $table->string('ttd')->nullable();
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
        Schema::dropIfExists('permohonans');
    }
}