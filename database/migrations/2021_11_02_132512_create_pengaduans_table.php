<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->increments('kode');
            $table->integer('nim');
            $table->string('nama');
            $table->string('prodi');
            $table->string('nama_aplikasi');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('lampiran');
            $table->datetime('tgl_input');
            $table->datetime('tgl_ditanggapi');
            $table->datetime('tgl_selesai');
            $table->string('status');
            $table->string('aksi');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('pengaduans');
    }
}
