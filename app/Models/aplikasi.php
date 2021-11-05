<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aplikasi extends Model
{
    protected $table = 'pegawailayanans';
    protected $guarded = ['kode','created_at','upadated_at'];

    public function kategorilayanan()
    {
        return $this->hasOne('App\Models\kategorilayanan', 'kode', 'id_kategorilayanan');
    }
}