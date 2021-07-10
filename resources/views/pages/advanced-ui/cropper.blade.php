@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/cropperjs/cropper.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cropper</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">CropperJs</h4>
        <p class="card-description mb-0">Read the <a href="https://github.com/fengyuanchen/cropperjs" target="_blank"> Official CropperJs Documentation </a>for a full list of instructions and other options.</p>                  
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <input type="file" name="img[]" class="file-upload-default" id="cropperImageUpload">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
            <div>
              <img src="{{ url('assets/images/placeholder.jpg') }}" class="w-100" id="croppingImage" alt="cropper">
            </div>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="form-group d-flex align-items-center flex-wrapp mb-0 mr-2 mt-3">
                <label class="w-50 mr-3 mb-0 mb-2 mb-md-0 text-nowrap">Width (px) :</label>
                <input type="number" value="300" class="form-control img-w mr-2 mb-2 mb-md-0 w-75" placeholder="Image width">
                <button class="btn btn-primary crop mb-2 mb-md-0">Crop</button>
              </div>
              <div class="mb-4 mb-md-0 mt-3">
                <a href="javascript:;" class="btn btn-outline-primary download">Download</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <h6 class="card-description mb-2 mb-md-4">Cropped Image: </h6>
            <img class="w-100 cropped-img mt-2" src="#" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/cropperjs/cropper.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/cropper.js') }}"></script>
@endpush