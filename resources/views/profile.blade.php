@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Profile</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profile Saya</li>
    </ol>
</nav>

<div class="profile-page tx-13">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="profile-header">
        <div class="cover">
          <div class="gray-shade"></div>
          <figure>
            <img src="{{ asset('assets/images/aset.jpg') }}" class="img-fluid" alt="profile cover">
          </figure>
          <div class="cover-body d-flex justify-content-between align-items-center">
            <div>
              <img class="profile-pic" src="{{ asset('img/'. Auth::user()->gambar ) }}" alt="no image">
              <span class="profile-name">{{Auth::user()->name}}</span>
            </div>
            <div class="d-none d-md-block">
              <a href="{{ url('/update_gambar') }}" data-bs-toggle="tooltip" data-bs-placement="left" title="Update Foto">
                <button class="btn btn-primary btn-icon-text btn-edit-profile">
                    <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="header-links">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                @if(session()->get('sukses'))
                    <div class="alert alert-success">
                        {{session()->get('sukses')}}
                    </div>

                @elseif(session()->get('hapus'))
                    <div class="alert alert-danger">
                        {{session()->get('hapus')}}
                    </div>
                @endif
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                          <h6 class="card-title mb-2">Profil saya</h6>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTableExample" class="table">
                          <tr>
                            <th>Nama</th>
                            <td>{{Auth::user()->name}}</td>
                          </tr>
                          <tr>
                            <th>Email</th>
                            <td>{{Auth::user()->email}}</td>
                          </tr>
                          <tr>
                              <th>Tanggal Registrasi</th>
                              <td>{{date('d F Y',strtotime(Auth::user()->created_at))}}</td>
                          </tr>
                          <tr>
                              <th>Level</th>
                              <td>{{Auth::user()->roles}}</td>
                          </tr>
                          <tr>
                            <th>Satuan Kerja</th>
                            <td>{{(Auth::user()->satuan_kerja_id != NULL) ? Auth::user()->satuan_kerja_id : '-' }}</td>
                          </tr>
                        </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush
