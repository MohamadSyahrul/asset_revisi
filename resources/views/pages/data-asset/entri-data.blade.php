@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="text-danger" href="#">Data Aset</a></li>
      <li class="breadcrumb-item active" aria-current="page">Entri Data</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
              <h6 class="card-title">Entri Data Aset</h6>
              <form class="forms-sample" action="{{route('data-asset.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                      <label for="kode">Kode Aset</label>
                      <input type="text" class="form-control" name="kode_asset" id="kode" value="Kode Aset(auto generate)" disabled />
                  </div>
                  <div class="form-group">
                    <label>Jenis Aset
                    <br>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label" for="tetap">
                          <input type="radio" class="form-check-input" name="jenis_asset" id="tetap" value="1" />
                          Aset Tetap
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label" for="bergerak">
                          <input type="radio" class="form-check-input" name="jenis_asset" id="bergerak" value="0" />
                          Aset Bergerak
                      </label>
                    </div>
                    </label>
                  </div>
                  <div class="form-group">
                      <label for="nama">Nama Aset</label>
                      <input type="text" class="form-control" name="nama_asset" id="nama" value="{{old('nama_asset')}}" placeholder="Nama Aset" required/>
                  </div>
                  <div class="form-group">
                      <label for="kode_satuan">Satuan Kerja</label>
                      <select name="kode_satuan" class="form-control" id="kode_satuan">
                          <option selected disabled>Pilih...</option>
                          @foreach($data_satker as $satker)
                            <option value="{{$satker->kode_satuan}}">{{$satker->nama_satuan}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Kategori Aset</label>
                      <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                          <option selected disabled>Pilih...</option>
                          @foreach($data_kategori as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputReadonly">Tanggal Terima Aset</label>
                    <div class="input-group date datepicker" id="datePickerExample">
                        <input type="text" class="form-control" name="tanggal_terima" value="{{old('tanggal_terima')}}" required/><span class="input-group-addon"><i data-feather="calendar"></i></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Keadaan Asset
                        <br>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="baik">
                              <input type="radio" class="form-check-input" name="keadaan_asset" id="baik" value="2" />
                              Baik
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="kurang">
                              <input type="radio" class="form-check-input" name="keadaan_asset" id="rusak_ringan" value="1" />
                              Rusak Ringan
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="kurang">
                              <input type="radio" class="form-check-input" name="keadaan_asset" id="rusak_berat" value="0" />
                              Rusak Berat
                          </label>
                        </div>
                        </label>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Batas Pemakaian Aset</label>
                      <input type="number" min="0" placeholder="Dalam Tahun" class="form-control" name="batas_pemakaian" value="{{old('batas_pemakaian')}}" required />
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kuantitas</label>
                    <input type="number" min="0" placeholder="Kuantitas" class="form-control" name="kuantitas" value="{{old('kuantitas')}}" required />
                </div>
                  <div class="form-group">
                      <label for="rupiah">Nilai Aset</label>
                      <input class="form-control" id="rupiah" min="0" placeholder="Rp." type="number" name="nilai_asset" value="{{old('nilai_asset')}}" required/>
                      <figcaption  class="text-danger">*Contoh : 500000</figcaption>
                      
                  </div>
                  
                  <div class="form-group">
                      <label for="merk">Merk/Type Aset</label>
                      <input class="form-control"  placeholder="Merk/Type Aset" type="text" name="merk_aset" value="{{old('merk_aset')}}" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Lokasi Aset</label>
                    <select name="lokasi_asset" class="form-control" id="exampleFormControlSelect1">
                        <option selected disabled>Pilih...</option>
                        @foreach($data_lokasi as $lokasi)
                          <option value="{{$lokasi->id}}">{{$lokasi->nama_lokasi}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Koordinat Aset</label>
                      <input class="form-control" id="exampleFormControlTextarea1" type="text" name="koordinat_asset" value="{{old('koordinat_asset')}}" required/>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Keterangan Aset</label>
                      <input class="form-control" list="ket" type="range" name="keterangan" required/>
                      <datalist id="ket" style="display: flex; justify-content:space-between; padding:0 1.2em; color:#FF6567;">
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
                  <div class="form-group">
                      <label>Foto Utama Aset</label>
                      <div class="input-group col-xs-12">
                          <input type="file" name="foto_utama" id="foto_utama" class="form-control file-upload-info" required/>
                      </div>
                  </div>
                  <div class="form-group">
                      <label>Foto Aset Lainnya</label>
                      <div class="input-group col-xs-12">
                        <input type="file" name="foto_1" class="form-control file-upload-info" required/>
                      </div>
                      <br />
                      <div class="input-group col-xs-12">
                        <input type="file" name="foto_2" class="form-control file-upload-info" required/>
                      </div>
                  </div>
                  <button class="btn btn-danger" type="submit">Submit</button>
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
