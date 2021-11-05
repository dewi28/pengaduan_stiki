<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawailayanan;

class pegawailayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawailayanan = pegawailayanan::all();
        $kategorilayanan = \App\Models\kategorilayanan::all();
        return view('v_aplikasi',compact('pegawailayanan','kategorilayanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(Request $request)
    {
        pegawailayanan::create([
            'telegram' => $request->telegram,
            'id_kategorilayanan' => $request->kategorilayanan,
            ]);
        return redirect()->back();
        //$kategorilayanan = \App\Models\kategorilayanan::all();
        //return view('pegawailayanan.create',compact('kategorilayanan'));       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //pegawailayanan::create([
        //    'telegram' => $request->telegram,
        //    'id_kategorilayanan' => $request->kategorilayanan,
        //    ]);
       // return redirect()->back();
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawailayanan = pegawailayanan::where('kode',$id)->first();
        //$kategorilayanan = kategorilayanan::where('id',$id)->first();
        return view('pegawailayanan.show',compact('pegawailayanan'));
    }

    public function update(Request $request, $id)
    {
        pegawailayanan::where('kode',$id)
        ->update([
        'telegram' => $request->telegram,
        'id_kategorilayanan' => $request->kategorilayanan,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pegawailayanan::where('kode',$id)->delete();
        return redirect()->back();
    }
}
