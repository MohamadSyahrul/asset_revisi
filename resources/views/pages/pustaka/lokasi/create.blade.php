@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pustaka-lokasi-aset.index')}}">Pustaka</a></li>
    <li class="breadcrumb-item">Lokasi aset</li>
    <li class="breadcrumb-item active" aria-current="page">Create aset</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Lokasi Aset</h6>
          <form class="forms-sample" action="{{ route('pustaka-lokasi-aset.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="namalokasi">Nama Lokasi Aset</label>
              <input type="text" class="form-control" id="namalokasi" name="nama_lokasi" placeholder="Nama Lokasi Aset" value="{{ old('nama_lokasi') }}">
            </div>
            <div class="form-group">
                <label for="penanggungjawab">Penanggung Jawab</label>
                <input type="text" class="form-control" id="penanggungjawab" name="penanggung_jawab" placeholder="Penanggung Jawab" value="{{ old('penanggung_jawab') }}">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
