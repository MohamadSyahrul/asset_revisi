@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Profile</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update Gambar</li>
    </ol>
</nav>

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <h6 class="card-title mb-2">Update Gambar</h6>
                      <div class="d-flex">
                          <img src="{{ asset('img/'. Auth::user()->gambar ) }}" alt="no image" height="200px" class=" rounded-circle">
                          <form class="forms-sample" action="{{ url('/edit_gambar', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="gambar">Pilih Gambar</label>
                                <input type="file" class="form-control file-upload-info" name="gambar" placeholder="Upload Gambar">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                          </form>
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
