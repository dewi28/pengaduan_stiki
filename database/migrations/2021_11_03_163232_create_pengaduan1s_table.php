<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduan1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan1s', function (Blueprint $table) {
            $table->increments('kode');
            $table->integer('nim');
            $table->string('nama');
            $table->string('prodi');
            $table->string('nama_aplikasi');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('lampiran');
            $table->datetime('tgl_kejadian');
            $table->datetime('tgl_ditanggapi');
            $table->datetime('tgl_selesai');
            $table->string('status');
            $table->string('aksi');
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
        Schema::dropIfExists('pengaduan1s');
    }
}
