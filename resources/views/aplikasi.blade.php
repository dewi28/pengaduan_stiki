@extends('layout.v_template')
@section('title','')

@section('content')
          <div class="box">
            <div class="box-header">
           <i class="fa fa-home"></i>
              <h3 class="box-title">Data Aplikasi</h3>
              <div class="pull-right">
              <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambahAplikasi">
                  Tambah Aplikasi
              </button>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
            @if (session('flash_message_success'))
              <div class="alert alert-success">
                  {{ session('flash_message_success')}}
              </div>
            @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode</th>
                  <th>Telegram</th>
                  <th>Nama Aplikasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($aplikasi as $p)
                <tr>
                  <td>{{ $p->kode }}</td>
                  <td>{{ $p->telegram }}</td>
                  <td>{{ $p->telegram }}</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=""> Edit</a>
                    <a href="#" class="btn btn-sm btn-warning delete">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>

<!-- Modal -->
<div class="modal fade" id="tambahAplikasi">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Aplikasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('pegawailayanan.store')}}" method="post">
      {{ csrf_field() }}
        <div class="form-group">
          <label>Telegram</label>
          <input type="text" name="telegram" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Nama Aplikasi</label>
            <select class="form-control" name="kategorilayanan"> 
            <option value="">--Pilih Aplikasi--</option>
            @foreach ($kategorilayanan as $k)
            <option value="{{ $k->id }}">{{ $k->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div> 
         
@endsection