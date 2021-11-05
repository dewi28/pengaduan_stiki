<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aplikasimahasiswa extends Model
{
    protected $table = 'pengaduan1s';
    protected $fillable = ['kode','nim','nama','prodi','nama_aplikasi','judul_laporan','deskripsi_laporan','lampiran','tgl_kejadian','tgl_ditanggapi','tgl_selesai','status','created_at','upadated_at'];

    public function kategorilayanan()
    {
    return $this->hasOne('App\Models\kategorilayanan', 'id', 'nama_aplikasi');
    }
}
