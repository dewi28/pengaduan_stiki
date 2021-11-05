@extends('layout.v_template')
@section('title','')

@section('content')
<div class="box">
            <div class="box-header">
            <i class="fa fa-user"></i>
              <h3 class="box-title">Data Mahasiswa</h3>
              <div class="pull-right">
              <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambahData">
                 Sinkronisasi Mahasiswa
              </button>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Hp</th>
                  <th>Jenis Kelamin</th>
                  <th>Prodi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($mahasiswa as $m)
                <tr>
                  <td>{{ $m->nim}}</td>
                  <td>{{ $m->nama}}</td>
                  <td>{{ $m->alamat}}</td>
                  <td>{{ $m->no_hp}}</td>
                  <td>
                      @if ($m->jkel == 0)
                          <option value="0" selected>Perempuan</option>             
                      @else  
                          <option value="1" selected>Laki laki</option>    
                      @endif
                  </td>
                  <td>{{ $m->prodi}}</td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>

<!-- Modal -->
<div class="modal fade" id="tambahData">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Data Petugas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Isikan Data Disini !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection