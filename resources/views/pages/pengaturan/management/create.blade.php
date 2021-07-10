@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Management User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Management User</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Management User</h6>
          <form class="forms-sample" action="{{ url('pengaturan/create-user/tambah-user')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Name User" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            <div class="form-group">
              <label for="level">Level User</label>
              <select class="form-control" name="roles" id="level">
                  <option selected disabled>Pilih...</option>
                  <option value="admin">Admin</option>
                  <option value="satuan-kerja">Satuan Kerja</option>
              </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Satuan Kerja</label>
                <select class="form-control" name="satuan_kerja_id"  id="exampleFormControlSelect1">
                    <option value="">Pilih Satuan Kerja</option>
                    @foreach ($satuanKerja as $satuan_kerja)
                      <option value="{{ $satuan_kerja->nama_satuan }}">
                          {{ $satuan_kerja->nama_satuan }}
                      </option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
                <label for="email">Email User</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email User" value="{{ old('email') }}" required autocomplete="email">
            </div>
            <div class="form-group">
              <label for="password">Password User</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Passowrd User" required autocomplete="new-password">
            </div>
            <div class="form-group">
              <label for="confirm">Confirm Password User</label>
              <input type="password" class="form-control" id="confirm" name="password_confirmation" placeholder="Confirm Passowrd" required autocomplete="new-password">
            </div>
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" class="form-control file-upload-info" name="gambar" placeholder="Upload Gambar">
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
