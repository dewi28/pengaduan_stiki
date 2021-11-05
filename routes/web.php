<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controller\UserController;
use App\Http\Controller\PetugasController;
use App\Http\Controller\AplikasiController;
use App\Http\Controller\pegawailayananController;
use App\Http\Controller\AplikasiMahasiswaController;
use App\Http\Controller\Pengaduan1Controller;
use App\Http\Controller\MahasiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

//Route::get('/', function () {
//return view('v_login');
//  });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/petugas', [App\Http\Controllers\PetugasController::class, 'index'])->name('petugas');
//Route::get('/aplikasi', [App\Http\Controllers\aplikasiController::class, 'index'])->name('aplikasi');
Route::get('/pengaduan1', [App\Http\Controllers\Pengaduan1Controller::class, 'index'])->name('pengaduan1');
//Route::get('/pengaduan1/print', [App\Http\Controllers\Pengaduan1Controller::class, 'index'])->name('print');
//Route::get('/aplikasi_mahasiswa', [App\Http\Controllers\AplikasiMahasiswaController::class, 'index'])->name('aplikasi_mahasiswa');
Route::get('/aplikasimahasiswa', [App\Http\Controllers\AplikasiMahasiswaController::class, 'index'])->name('aplikasimahasiswa');
//Route::post('/aplikasimahasiswa', [App\Http\Controllers\AplikasiMahasiswaController::class, 'index'])->name('aplikasimahasiswa');
Route::get('/pegawailayanan', [App\Http\Controllers\pegawailayananController::class, 'index'])->name('pegawailayanan');
Route::post('/petugas/create','PetugasController@create');
//Route::post('/aplikasi/create','aplikasiController@create');
Route::post('/pegawailayanan/create','pegawailayananController@create');
Route::post('/aplikasimahasiswa/create','AplikasiMahasiswaController@create');

Route::resource('/petugas','PetugasController');
//Route::resource('/aplikasi','aplikasiController');
Route::resource('/aplikasi','pegawailayananController');
Route::get('/pengaduan1/print','Pengaduan1Controller@print');

//hapus Petugas-------
Route::get('/petugas/destroy/{id_petugas}','PetugasController@destroy');
Route::get('/aplikasi/destroy/{kode}','pegawailayananController@destroy');
