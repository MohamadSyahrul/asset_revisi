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
          <div class="col-lg-6 pl-0">
            <a href="#" class="noble-ui-logo d-block mt-3">Sim<span>Aset</span></a>

            <h5 class="my-2 mx-5"><span class="text-muted">Nama Aset : </span>{{$item->nama_asset}}</h5>
            <h5 class="my-2 mx-5"> <span class="text-muted"> Merk atau Type : </span> {{$item->merk_aset}}</h5>
            <h5 class="my-2 mx-5"><span class="text-muted">Kategori : </span> {{$kategori}}</h5>
            <h5 class="my-2 mx-5"><span class="text-muted"> Lokasi Aset : </span> {{$lokasi}}</h5>

            <div class="table-responsive w-100">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th><h5 class="text-muted text-capitalize"> Harga </h5></th>
                            <th><h5 class="text-muted text-capitalize"> Kuantitas </h5></th>
                            <th><h5 class="text-muted text-capitalize text-primary"> Total </h5></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td> <h5> Rp.{{$item->nilai_asset}}</h5></td>
                            <td> <h5> {{$item->quantity}}</h5></td>
                            <td> <h5> Rp.{{$item->total}} </h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
          <div class="col-lg-6 pr-0">
            <h5 class="font-weight-medium text-uppercase text-right mt-5">{{$qrCode}}</h5>
            <h5 class="text-right my-2">{{$item->kode_asset}}</h5>
            <h5 class="text-right my-2"><span class="text-muted">Batas Pemakaian : </span> {{$item->batas_pemakaian}} Tahun</h5>
            <h5 class="text-right my-2"><span class="text-muted">Tanggal Terima : </span> {{date('d F Y',strtotime($item->tanggal_terima))}}</h5>
          </div>
        </div>
        <div class="container-fluid mt-4 d-flex justify-content-center w-100">
          <div class="table-responsive w-100">
              <table class="table table-bordered">
                <thead>
                  <tr>
                      <th>Jenis Aset</th>
                      <th>Histori Satuan</th>
                      <th>Satuan Saat ini</th>
                      <th>Koordinat Aset</th>
                      <th>Penyusutan Aset</th>
                      <th>Keterangan</th>
                      <th>Keadaan</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$item->jenis_asset ? 'Aset Tetap' : 'Aset Bergerak'}}</td>
                    @if (!$item->histori_satuan)
                        <td> - </td>
                    @endif
                    @foreach ($satker as $satuan )
                        @if ($satuan->kode_satuan == $item->histori_satuan)
                            <td>{{$satuan->nama_satuan}}</td>
                        @elseif ($satuan->kode_satuan == $item->kode_satuan)
                            <td>{{$satuan->nama_satuan}}</td>
                        @endif
                    @endforeach
                    <td>{{$item->koordinat_asset}}</td>
                    <td>{{$penyusutan . ' Tahun'}}</td>
                    <td>{{$item->keterangan . '%'}}</td>
                    <td>{{$item->keadaan_awal ? 'Baik' : 'Kurang'}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="container-fluid mt-5 w-100">
          <div class="row">
            <div class="col-md-12 ml-auto">
                <div class="table-responsive">
                  <table class="table">
                      <tbody class="text-center">
                        @foreach ($foto as $item)
                        <tr>
                          <td>Foto Utama</td>
                          <td>Foto Aset 1</td>
                          <td>Foto Aset 2</td>
                        </tr>
                        <tr>
                          <td> <img src="{{ asset('img/'.$item->foto_utama) }}" class="img-thumbnail"></td>
                          <td> <img src="{{ asset('img/'.$item->foto_1) }}" class="img-thumbnail"></td>
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
