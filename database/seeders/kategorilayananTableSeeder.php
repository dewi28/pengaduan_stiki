<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kategorilayanan;

class kategorilayananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            kategorilayanan::create([
            'nama' => 'SIPUT'
            ]);
            kategorilayanan::create([
            'nama' => 'SADS'
            ]);
            kategorilayanan::create([
            'nama' => 'SISKAD'
            ]);
            kategorilayanan::create([
            'nama' => 'KUESIONER'
            ]);
            kategorilayanan::create([
            'nama' => 'ANGKET'
            ]);
    }
}
