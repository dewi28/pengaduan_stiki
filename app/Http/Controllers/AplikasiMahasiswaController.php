<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aplikasimahasiswa;
use DB;

class AplikasiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aplikasimahasiswa = DB::table('pengaduan1s')->get();
        $kategorilayanan = \App\Models\kategorilayanan::all();
        return view('aplikasimahasiswa', compact('aplikasimahasiswa','kategorilayanan'));
    }
    public function create(Request $request)
    {
        $aplikasimahasiswa = DB::table('pengaduan1s')->get();
        $kategorilayanan = \App\Models\kategorilayanan::all();
        aplikasimahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'nama_aplikasi' => $request->kategorilayanan,
            'tgl_kejadian'=> $request->tgl_kejadian,
            'judul_laporan' => $request->judul_laporan,
            'deskripsi_laporan' => $request->deskripsi_laporan,
            'lampiran' => $request->lampiran,
            /**'status' => $request->status,*/
            ]);
            //return view('aplikasimahasiswa', compact('kategorilayanan'));
            return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
