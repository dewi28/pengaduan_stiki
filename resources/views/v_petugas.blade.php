@extends('layout.v_template')
@section('title','')

@section('content')


        <div class="box">
            <div class="box-header">
           <i class="fa fa-user-plus"></i>
              <h3 class="box-title">Data Petugas</h3>
              <div class="pull-right">
              <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambahData">
                  </i>Tambah Data Petugas
              </button>
              </div>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Petugas</th>
                  <th>Nama Petugas</th>
                  <th>Telepon</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($petugas as $w)
                <tr>
                  <td>{{ $w->id_petugas}}</td>
                  <td>{{ $w->nama_petugas}}</td>
                  <td>{{ $w->telepon}}</td>
                  <td>{{ $w->alamat}}</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#update-{{ $w->id_petugas }}"> Edit</a>
                    <a href="#" class="btn btn-sm btn-warning delete" data-id="{{ $w->id_petugas }}" data-nama="{{ $w->nama_petugas }}" >Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>

<!-- Modal Tambah-->
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
        <form action="/petugas/create" method="POST">
        {{csrf_field()}}
          <div class="form-group">
              <label for="exampleInputNamaPetugas">Nama Petugas</label>
              <input name="nama_petugas" type="petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{ old('nama_petugas')}}">
            </div>
            @error('nama_petugas')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
              <label for="exampleInputTelepon">Telepon</label>
              <input name="telepon" type="telepon" class="form-control @error('telepon') is-invalid @enderror" value="{{ old('telepon')}}">
            </div>
            @error('telepon')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat')}}" rows="3"></textarea>
            </div>
            @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" id="submit" class="btn btn-primary">Simpan</button></a>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Tambah-->

@foreach ($petugas as $update)
<!-- Modal Update-->
<div class="modal fade" id="update-{{ $update->id_petugas }}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Data Petugas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('petugas.update',$update->id_petugas) }}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
              <label for="exampleInputNamaPetugas">Nama Petugas</label>
              <input name="nama_petugas" type="petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{ $update->nama_petugas }}">
            </div>
            @error('nama_petugas')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
              <label for="exampleInputTelepon">Telepon</label>
              <input name="telepon" type="telepon" class="form-control @error('telepon') is-invalid @enderror" value="{{ $update->telepon }}">
            </div>
            @error('telepon')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <input name="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $update->alamat }}">
            </div>
            @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" id="submitupdate" class="btn btn-primary">Update Data</button></a>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- End Modal Edit-->


@endsection



