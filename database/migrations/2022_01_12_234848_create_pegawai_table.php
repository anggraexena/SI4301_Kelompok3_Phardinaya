<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->integer('id_pemilik');//biar tau siapa pemilik pegawai ini
            $table->string('nama_pegawai');
            $table->string('email_pegawai');
            $table->string('password');
            $table->string('nohp_pegawai');
            $table->string('alamat_pegawai');
            $table->string('jk_pegawai');
            $table->date('tgllahir_pegawai');
            $table->integer('umur_pegawai');
            $table->date('tgl_diterima');
            $table->integer('lama_bekerja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
