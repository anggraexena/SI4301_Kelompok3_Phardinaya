<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nohp_pegawai');
            $table->string('alamat_pegawai');
            $table->string('jk_pegawai');
            $table->date('tgllahir_pegawai');
            $table->integer('umur_pegawai');
            $table->date('tgl_diterima');
            $table->integer('lama_bekerja');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
