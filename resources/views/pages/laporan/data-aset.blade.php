@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
@endpush
@push('style')
    <style type="text/css">
  .divider{
    width: 100%;
    height: 1px;
    background: #e0e0e0;
    margin: 1rem 0;
  }
    </style>
@endpush
@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
    <li class="breadcrumb-item active" aria-current="page">Laporan Data Aset</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-header">
        <h5>Laporan Data Aset</h5>
      </div>
      <div class="card-body">
          <a href="{{route('download-pdf',['download'=>'pdf']) }}"
          title="cetak pdf" class="btn text-white btn-warning btn-icon-text btn-xs" target="_blank">
            <i class="btn-icon-prepend" data-feather="printer"></i>
            Cetak
          </a>
          <a href="{{route('download-qrcode',['download'=>'pdf'])}}"
          title="cetak pdf" class="btn text-white btn-primary btn-icon-text btn-xs" target="_blank">
            <i class="btn-icon-prepend fas fa-qrcode"></i>
            Cetak QrCode
          </a>
          <div class="divider"></div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Aset</th>
                <th>Nama Aset</th>
                <th>Jenis Aset</th>
                <th>Kategori Aset</th>
                <th>Merk/Type Aset</th>
                <th>Lokasi Aset</th>
                <th>Kondisi</th>
                <th>Tgl Terima</th>
                <th>Status</th>
                <th>Pemakaian</th>
                <th>Kuantitas</th>
                <th>Harga Satuan</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td><a href="{{route('data-asset.show',$item->id)}}">{{$item->kode_asset}}</a></td>
                <td>{{$item->nama_asset}}</td>
                <td>{{($item->jenis_asset==1 ? 'Aset Tetap' : 'Aset Bergerak')}}</td>
                <td>
                  @foreach ($data_kategori as $row)
                  {{($row->id == $item->kategori ? $row->nama_kategori : '')}}
                  @endforeach
                </td>
                <td>{{$item->merk_aset}}</td>
                <td>
                  @foreach ($lokasi as $row)
                  {{($row->id == $item->lokasi_asset ? $row->nama_lokasi : '')}}
                  @endforeach
                </td>
                <td>
                  {{($item->keterangan <= 30 ? 'Rusak' : 'Baik')}}
                </td>
                <td>{{date('d F Y',strtotime($item->tanggal_terima))}}</td>
                <td>{{ ($item->keterangan == 0 ? 'Nonaktif' : 'Aktif') }}</td>
                <td>{{$item->batas_pemakaian}} Tahun</td>
                <td>{{$item->quantity}}</td>
                <td>Rp. {{$item->nilai_asset}}</td>
                <td>Rp. {{$item->total}}</td>
                </tr>
              @endforeach
              
            </tbody>
            <tfoot style="font-weight:bold;">
              <tr>
                <td></td>
                <td>Total Nilai Aset (Rp)</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Rp. {{$data->sum('total')}}</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>

@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
     
@endpush