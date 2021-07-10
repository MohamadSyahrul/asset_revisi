@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
      <div class="col-md-8 col-xl-6 mx-auto">
        <div class="card">
          <div class="row">
            <div class="col-md-4 pr-md-0">
              <div class="auth-left-wrapper" style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">
  
              </div>
            </div>
            <div class="col-md-8 pl-md-0">
              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo d-block mb-2">Sim<span class="text-danger">Aset</span></a>
                <h5 class="text-muted font-weight-normal mb-2"> 
                <i data-feather="search" class="text-danger"></i>
                <span style="color: #031a61;"> Tracking Aset</span></h5>
                <form action="{{route('detail-tracking')}}" method="get">
                    @csrf
                    <div class="form-group row">
                        <label for="tracking">Kode Aset</label>
                        <input id="tracking" type="text" placeholder="Kode Aset" class="form-control" name="cari" value="{{ old('cari') }}" required autofocus>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-danger text-center">
                        <i data-feather="search" width="15px"></i>
                        Tracking</button>
                    </div>
                </form>
                <a href="{{ route('login') }}" class="btn btn-link text-danger float-left"> 
                    <i data-feather="arrow-left"></i>
                    Back To Login
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
@endsection
