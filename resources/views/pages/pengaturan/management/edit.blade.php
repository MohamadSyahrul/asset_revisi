@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Management User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Management User</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Management User</h6>
          <form class="forms-sample" action="{{ url('pengaturan/update', $item->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="nameuser">Name</label>
              <input type="text" class="form-control" id="nameuser" name="name" placeholder="Name User" value="{{ $item->name }}" required autocomplete="name" autofocus>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Level User</label>
              <select class="form-control" name="roles" id="exampleFormControlSelect1">
                  <option value="{{$item->roles }}">Level Sebelumnya ({{$item->roles }})</option>
                  <option value="admin">Admin</option>
                  <option value="satuan-kerja">Satuan Kerja</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Satuan Kerja</label>
              <select class="form-control" name="satuan_kerja_id"  id="exampleFormControlSelect1">
                  <option value="{{ $item->satuan_kerja_id }}">Satuan Sebelumnya ({{$item->satuan_kerja_id }})</option>
                  @foreach ($satuanKerja as $satuan_kerja)
                    <option value="{{ $satuan_kerja->nama_satuan }}">
                        {{ $satuan_kerja->nama_satuan }}
                    </option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="email">Email User</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email User" value="{{ old('email') ?? $item->email }}" required autocomplete="email">
            </div>
            <div class="form-group">
              <label for="passworduser">Password user</label>
              <input type="password" class="form-control" id="passworduser" name="password" placeholder="Passowrd User" required autocomplete="new-password">
            </div>
            <div class="form-group">
              <label for="Confirmuser">Confirm user</label>
              <input type="password" class="form-control" id="Confirmuser" name="password_confirmation" placeholder="Confirm Passowrd" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
