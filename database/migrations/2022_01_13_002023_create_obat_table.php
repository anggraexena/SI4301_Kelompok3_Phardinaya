<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id('kode_obat');
            $table->string('nama_obat');
            $table->string('deskripsi_obat');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->integer('stok');
            $table->integer('berat_satuan');
            $table->string('no_batch');
            $table->date('tgl_expired');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
}
