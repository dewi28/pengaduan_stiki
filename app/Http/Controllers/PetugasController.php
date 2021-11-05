<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\petugas;
use DB;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $petugas = DB::table('petugas')->get();
        return view('v_petugas', compact('petugas'));
    }
    public function create(Request $request)
    {
        $this->validate( $request, [
            'nama_petugas' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);
       petugas::create($request->all());
       return redirect()->back();
    }

    public function show($id)
    {
        $petugas = petugas::where('id_petugas',$id)->first();
        return view('petugas.show',compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        petugas::where('id_petugas',$id)
        ->update([
        'nama_petugas' => $request->nama_petugas,
        'telepon' => $request->telepon,
        'alamat' => $request->alamat,
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        petugas::where('id_petugas',$id)->delete();
        return redirect()->back();
    }
}


