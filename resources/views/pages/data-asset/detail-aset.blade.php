@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-danger" href="#">Data Asset</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Detail</li>
    <li class="breadcrumb-item active" aria-current="page">Detail Aset</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12">
    <div class="card">
       @if(session()->get('sukses'))
            <div class="alert alert-success">
                {{session()->get('sukses')}}
            </div>
      @endif
      <div class="card-body">
        @foreach ($aset as $item)
        <div class="container-fluid d-flex justify-content-between">
          <div class="col-lg-3 pl-0">
            <a href="#" class="noble-ui-logo d-block mt-3">Sim<span>Aset</span></a>                 
            <p class="text-uppercase mt-1 mb-1"><span class="text-muted">Nama Aset :</span> <br> <b>{{$item->nama_asset}}</b></p>
            <p><span class="text-muted"> Lokasi Aset </span> :<br>{{$lokasi}}</p>
            <h5 class="mt-5 mb-2 text-muted">Merk atau Type :</h5>
            <p>{{$item->merk_aset}}</p>
            <h5 class="mt-3 mb-2 text-muted">Harga Total</h5>
            <p class="text-primary"><b> Rp.{{$item->total}}</b></p> 
          </div>
          <div class="col-lg-3 pr-0">
            <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">{{$qrCode}}</h4>
            <h6 class="text-right mb-5 pb-4"># {{$item->kode_asset}}</h6>
            <p class="text-right mb-1">Harga Satuan :</p>
            <h4 class="text-right font-weight-normal">Rp {{$item->nilai_asset}}</h4>
            <h6 class="mb-0 mt-3 text-right font-weight-normal mb-2"><span class="text-muted">Kategori Aset :</span> {{$kategori}}</h6>
            <h6 class="text-right font-weight-normal"><span class="text-muted">Batas Pemakaian :</span> {{$item->batas_pemakaian}} Tahun</h6>
            <h6 class="text-right font-weight-normal"><span class="text-muted">Tanggal Terima :</span> {{date('d F Y',strtotime($item->tanggal_terima))}}</h6>
          </div>
        </div>
        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
          <div class="table-responsive w-100">
              <table class="table table-bordered">
                <thead>
                  <tr>
                      <th>Jenis Aset</th>
                      <th>Kode Satuan</th>
                      <th>Koordinat Aset</th>
                      <th>Penyusutan Aset</th>
                      <th>Kuantitas Aset</th>
                      <th>Keterangan Penyusutan</th>
                      <th>Keadaan Awal</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$item->jenis_asset ? 'Aset Tetap' : 'Aset Bergerak'}}</td>
                    <td>{{$item->kode_satuan}}</td>
                    <td>{{$item->koordinat_asset}}</td>
                    <td>{{$penyusutan . ' Tahun'}}</td>
                    <td>{{$item->quantity}}</td>                    
                    <td>{{$item->keterangan . '%'}}</td>
                    <td>{{$item->keadaan_awal ? 'Baik' : 'Kurang'}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="container-fluid mt-5 w-100">
          <div class="row">
            <div class="col-md-6 ml-auto">
                <div class="table-responsive">
                  <table class="table">
                      <tbody>
                        @foreach ($foto as $item)
                        <tr>
                          <td>Foto Utama</td>
                          <td> <img src="{{ asset('img/'.$item->foto_utama) }}" class="img-thumbnail"></td>
                        </tr>
                        <tr>
                          <td>Foto Aset 1</td>
                          <td> <img src="{{ asset('img/'.$item->foto_1) }}" class="img-thumbnail"></td>
                        </tr>
                        <tr>
                          <td>Foto Aset 2</td>
                          <td> <img src="{{ asset('img/'.$item->foto_2)  }}" class="img-thumbnail"></td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
        <div class="container-fluid w-100">
            <a href="{{route('download-detail-pdf',$item->id,['download'=>'pdf']) }}" class="btn btn-outline-primary float-right mt-4" target="_blank">
              <i data-feather="printer" class="mr-2 icon-md"></i>
              Print
            </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection