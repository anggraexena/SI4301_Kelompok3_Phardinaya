<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('id_pegawai');
            $table->string('kode_obat');
            $table->integer('qty');
            $table->timestamp('tgl_transaksi');
            $table->integer('sub_total')->nullable();
            $table->integer('total')->nullable();
            $table->string('metode_pembayaran');
            $table->string('diskon');
            $table->integer('total_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
