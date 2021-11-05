<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('v_user', compact('mahasiswa'));
    }
}
