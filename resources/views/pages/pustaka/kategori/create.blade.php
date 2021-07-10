@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pustaka-kategori-aset.index')}}">Pustaka</a></li>
    <li class="breadcrumb-item">Kategori aset</li>
    <li class="breadcrumb-item active" aria-current="page">Create aset</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Kategori Aset</h6>
          <form class="forms-sample" action="{{ route('pustaka-kategori-aset.store')}}" method="POST">
            @csrf
            {{-- <div class="form-group">
              <label for="kodekategori">Kode Kategori</label>
              <input type="text" class="form-control" id="kodekategori" name="kode_kategori" placeholder="Kode Kategori" value="{{ old('kode_kategori') }}">
            </div> --}}
            <div class="form-group">
                <label for="namakategori">Nama Kategori</label>
                <input type="text" class="form-control" id="namakategori" name="nama_kategori" placeholder="Nama Kategori" value="{{ old('nama_kategori') }}">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
