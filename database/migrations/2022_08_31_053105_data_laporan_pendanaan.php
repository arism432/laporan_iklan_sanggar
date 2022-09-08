<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataLaporanPendanaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('laporan_pendanaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('daftar_ads', 15);
            $table->date('tanggal_cek_saldo');
            $table->time('jam_cek_saldo');
            $table->integer('jumlah_saldo');
            $table->date('tanggal_topup');
            $table->time('jam_topup');
            $table->integer('jumlah_topup');
            $table->integer('jumlah_setelah_topup');
            $table->string('status_iklan', 20);
            $table->string('keterangan', 255);
            //
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
        //
        Schema::dropIfExists('laporan_pendanaan');
    }
}
