@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Satuan Kerja</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Satuan Kerja</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Satuan Kerja</h6>
          <form class="forms-sample" action="{{ route('satuan-kerja.store')}}" method="POST">
            @csrf
            {{-- <div class="form-group">
              <label for="kodesatker">Kode Satuan Kerja</label>
              <input type="text" class="form-control" id="kodesatker" name="kode_satuan" value="">
            </div> --}}
            <div class="form-group">
                <label for="namsaker">Nama Satuan Kerja</label>
                <input type="text" class="form-control" id="namsaker" name="nama_satuan" placeholder="Nama Satuan Kerja" value="{{ old('nama_satuan') }}">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
