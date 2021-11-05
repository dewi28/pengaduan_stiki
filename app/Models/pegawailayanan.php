<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawailayanan extends Model
{
    protected $guarded = ['kode','created_at','upadated_at'];
    
    public function kategorilayanan()
    {
    return $this->hasOne('App\Models\kategorilayanan', 'id', 'id_kategorilayanan');
    }
}
