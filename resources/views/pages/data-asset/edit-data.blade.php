@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="text-danger" href="#">Data Aset</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
              <h6 class="card-title">Edit Data Aset</h6>
              <form action="{{route('data-asset.update',$asset->id)}}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                  <div class="form-group">
                      <label for="exampleInputText1">Kode Aset</label>
                      <input type="text" class="form-control" name="kode_asset" id="exampleInputText1" value="Kode Aset(auto generate)" disabled />
                  </div>
                  <div class="form-group">
                    <label>Jenis Aset
                    <br>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label" for="tetap">
                          <input type="radio" class="form-check-input" name="jenis_asset" id="tetap" value="1" {{$asset->jenis_asset == '1'? 'checked' : ''}} />
                          Aset Tetap
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label" for="bergerak">
                          <input type="radio" class="form-check-input" name="jenis_asset" id="bergerak" value="0" {{$asset->jenis_asset == '0'? 'checked' : ''}}/>
                          Aset Bergerak
                      </label>
                    </div>
                    </label>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail3">Nama Aset</label>
                      <input type="text" class="form-control" name="nama_asset" id="exampleInputEmail3" value="{{old('nama_asset') ?? $asset->nama_asset}}" placeholder="Nama Aset" />
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Satuan Kerja</label>
                      <select name="kode_satuan" class="form-control" id="exampleFormControlSelect1">
                          <option disabled>Pilih...</option>
                          @foreach($satker as $item)
                            @if ($item->kode_satuan == $asset->kode_satuan)
                                <option value="{{$item->kode_satuan}}" selected>{{$item->nama_satuan}}</option>
                            @else
                                <option value="{{$item->kode_satuan}}">{{$item->nama_satuan}}</option>
                            @endif
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Kategori Aset</label>
                      <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                          <option selected disabled>Pilih...</option>
                          @foreach($kategori as $item)
                            @if ($item->id == $asset->kategori)
                                <option value="{{$item->id}}" selected>{{$item->nama_kategori}}</option>
                            @else
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                            @endif
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputReadonly">Tanggal Terima Aset</label>
                    <input disabled type="text" class="form-control" name="tanggal_terima"  value="{{$asset->tanggal_terima}}" />
                  </div>
                   <div class="form-group">
                    <label>Keadaan Asset
                        <br>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="baik">
                              <input type="radio" class="form-check-input" name="keadaan_awal" id="baik" value="2" {{ $asset->keadaan_awal == '2'? 'checked' : ''}} />
                              Baik
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="kurang">
                              <input type="radio" class="form-check-input" name="keadaan_awal" id="rusak_ringan" value="1" {{ $asset->keadaan_awal == '1'? 'checked' : ''}}  />
                              Rusak Ringan
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="kurang">
                              <input type="radio" class="form-check-input" name="keadaan_awal" id="rusak_berat" value="0" {{ $asset->keadaan_awal == '0'? 'checked' : ''}} />
                              Rusak Berat
                          </label>
                        </div>
                        </label>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Batas Pemakaian Aset</label>
                      <input type="number" min="0" class="form-control" name="batas_pemakaian" value="{{ old('batas_pemakaian') ?? $asset->batas_pemakaian}}" />
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kuantitas</label>
                    <input type="number" min="0" placeholder="Kuantitas" class="form-control" name="quantity" value="{{old('kuantitas') ?? $asset->quantity}}" required />
                </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nilai Aset</label>
                    <input class="form-control" min="0" id="exampleFormControlTextarea1" type="number" name="nilai_asset" value="{{old('nilai_asset') ?? $asset->nilai_asset}}"/>
                     <figcaption  class="text-danger">*Contoh : 500000</figcaption>
                </div>
                <div class="form-group">
                      <label for="merk">Merk/Type Aset</label>
                      <input class="form-control"  placeholder="Merk/Type Aset" type="text" name="merk_aset" value="{{old('merk_aset') ?? $asset->merk_aset}}" required/>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Lokasi Aset</label>
                      <select name="lokasi_asset" class="form-control" id="exampleFormControlSelect1">
                          <option selected disabled>Pilih...</option>
                          @foreach($lokasi as $item)
                            @if ($item->id == $asset->lokasi_asset)
                                <option value="{{$item->id}}" selected>{{$item->nama_lokasi}}</option>
                            @else
                                <option value="{{$item->id}}">{{$item->nama_lokasi}}</option>
                            @endif
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Koordinat Aset</label>
                      <input class="form-control" id="exampleFormControlTextarea1" type="text" name="koordinat_asset" value="{{old('Koordinat_asset') ?? $asset->koordinat_asset}}"/>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Keterangan Aset</label>
                      <input class="form-control" list="ket" type="range" name="keterangan"/>
                      <datalist id="ket" style="display: flex; justify-content:space-between; padding:0 1.2em">
                        <option value="0" label="0%"></option>
                        <option value="10" label="10%"></option>
                        <option value="20" label="20%"></option>
                        <option value="30" label="30%"></option>
                        <option value="40" label="40%"></option>
                        <option value="50" label="50%">h</option>
                        <option value="60" label="60%"></option>
                        <option value="70" label="70%"></option>
                        <option value="80" label="80%"></option>
                        <option value="90" label="90%"></option>
                        <option value="100" label="100%"></option>
                      </datalist>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection
@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
@push('custom-scripts')
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush
