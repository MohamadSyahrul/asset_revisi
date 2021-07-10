@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
      <div class="col-md-8 col-xl-6 mx-auto">
        <div class="card">
          <div class="row">
            <div class="col-md-12 pl-md-0">
              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo d-block mb-2">Sim<span>Aset</span></a>
                <h5 class="text-muted font-weight-normal mb-2">
                <i data-feather="search" class="text-danger"></i>
                <span style="color: #031a61;"> Tracking Aset</span></h5>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        @forelse ($data as $aset)
                        <tr>
                          <th>Kode Aset</th>
                          <td>{{ $aset->kode_asset }}</td>
                        </tr>
                        <tr>
                          <th>Nama Aset</th>
                          <td>{{ $aset->nama_asset }}</td>
                        </tr>
                        <tr>
                            <th>Satuan Kerja</th>
                            <td>{{ $aset->kode_satuan }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Aset</th>
                            <td>{{($aset->jenis_asset==1 ? 'Aset Tetap' : 'Aset Bergerak')}}</td>
                        </tr>
                        <tr>
                            <th>Kategori Aset</th>
                            <td>@foreach ($data_kategori as $row)
                              {{($row->id == $aset->kategori ? $row->nama_kategori : '')}}
                              @endforeach</td>
                        </tr>
                        
                        <tr>
                            <th>Lokasi Aset</th>
                            <td> @foreach ($lokasi as $row)
                              {{($row->id == $aset->lokasi_asset ? $row->nama_lokasi : '')}}
                              @endforeach</td>
                        </tr>
                        <tr>
                            <th>Tanggal Terima</th>
                            <td>{{date('d F Y',strtotime($aset->tanggal_terima))}}</td>
                        </tr>
                        <tr>
                            <th>Batas Pemakaian</th>
                            <td>{{$aset->batas_pemakaian}} Tahun</td>
                        </tr>
                        <tr>
                            <th>Kondisi</th>
                            <td>{{($aset->keterangan <= 30 ? 'Rusak' : 'Baik')}}</td>
                        </tr>
                        <tr>
                            <th>Kuantiatas </th>
                            <td>{{ $aset->quantity }}</td>
                        </tr>
                        <tr>
                            <th>Harga Satuan</th>
                            <td>Rp.{{ $aset->nilai_asset }}</td>
                        </tr>
                        
                        <tr>
                            <th>Harga Total</th>
                            <td>Rp.{{ $aset->total }}</td>
                        </tr>
                        </tr>
                        <tr>
                            <th>QrCode</th>
                            <td>
                            {{$qrCode}}
                            </td>
                        </tr>
                        <tr>
                            <th>Foto Fisik Aset</th>
                            <td>
                              <table class="table table-bordered text-center">
                                  <tr>
                                      <th>Foto Utama</th>
                                      <th>Foto Aset 1</th>
                                      <th>Foto Aset 2</th>
                                  </tr>
                                  @foreach ($foto as $aset)
                                      <tr style="height: 150px;">
                                        <td >
                                          <img src="{{ asset('img/'.$aset->foto_utama) }}" class="img-thumbnail">
                                        </td>
                                        <td>
                                          <img src="{{ asset('img/'.$aset->foto_1) }}" class="img-thumbnail">
                                        </td>
                                        <td>
                                          <img src="{{ asset('img/'.$aset->foto_2)  }}" class="img-thumbnail">
                                        </td>
                                      </tr>
                                  @endforeach
                              </table>
                          </td>
                        @empty
                        <tr>
                          <td colspan="7" class="text-center">
                            Data Kosong
                          </td>
                        </tr>
                        @endforelse
                    </table>
                    <a href="{{ route('tracking') }}" class="btn btn-link text-danger float-left">
                        <i data-feather="arrow-left"></i>
                        Back To Tracking Aset
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
