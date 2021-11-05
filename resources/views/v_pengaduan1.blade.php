@extends('layout.v_template')
@section('title','')
@section('content')
        <div class="box">
            <div class="box-header">
           <i class="fa fa-book"></i>
              <h3 class="box-title">Data Pengaduan</h3>
              <div class="pull-right">
              <a href="pengaduan1/print" target= "_blank" class= " btn btn-sm btn-primary">Print To Printer</a>
            </div>
            </div>
   
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Nama Aplikasi</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Lampiran</th>
                  <th>Tanggal Input</th>
                  <th>Tanggal Ditanggapi</th>
                  <th>Tanggal Selesai</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach ($pengaduan as $m)
                <tr>
                  <td>{{ $m->kode}}</td>
                  <td>{{ $m->nim}}</td>
                  <td>{{ $m->nama}}</td>
                  <td>
                      @if ($m->prodi == 001)
                          <option value="001" selected>Teknik Informatika</option>             
                      @else  
                          <option value="002" selected>Sistem Informasi</option>    
                      @endif
                  </td>
                  <td>{{ $m->kategorilayanan->nama}}</td>
                  <td>{{ $m->judul_laporan}}</td>
                  <td>{{ $m->deskripsi_laporan}}</td>
                  <td>{{ $m->lampiran}}</td>
                  <td>{{ $m->tgl_kejadian}}</td>
                  <td>{{ $m->tgl_ditanggapi}}</td>
                  <td>{{ $m->tgl_selesai}}</td>
                  <td>{{ $m->status}}</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-success"><i class="fa fa-cogs"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-check-square"></i></a>
                    <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-comments-o"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>
@endsection