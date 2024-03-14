<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('makanan_id')->unsigned();
            $table->integer('minuman_id')->unsigned();
            $table->date('tgl_transaksi');
            $table->integer('jumlah_pesanan');
            $table->integer('jumlah_bayar');
            $table->integer('sisa_uang');
            // $table->foreign('makanan_id')->references('id_makanan')->on('tabel_makanan');
            // $table->foreign('minuman_id')->references('id_minuman')->on('tabel_minuman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_transaksi');
    }
};
