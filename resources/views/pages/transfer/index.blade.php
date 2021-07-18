@extends('layout.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Data Asset</a></li>
      <li class="breadcrumb-item active" aria-current="page">Transfer Aset</li>
    </ol>
  </nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Transfer Aset</h6>
          <form class="forms-sample" action="{{ route('transfer-aset.update', $asset->id)}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="saker_sebelumnya">Histori Satuan Kerja</label>
                @if (!$asset->histori_satuan)
                    <input type="text" class="form-control" name="saker_sebelumnya" value="" placeholder="Belum ada Histori Satuan Kerja" disabled />
                @endif
                @foreach ($satker as $item)
                    @if ($item->kode_satuan == $asset->histori_satuan)
                        <input type="text" class="form-control" name="saker_sebelumnya" value="" placeholder="{{$item->nama_satuan}}" disabled />
                    @endif
                @endforeach
            </div>
            <div class="form-group">
                <label for="saker_sebelumnya">Satuan Kerja Saat Ini</label>
                @foreach ($satker as $item)
                    @if ($item->kode_satuan == $asset->kode_satuan)
                        <input type="text" class="form-control" name="saker_sekarang" value="{{$item->kode_satuan}}" placeholder="{{$item->nama_satuan}}" disabled />
                    @endif
                @endforeach
            </div>
            <div class="form-group">
                <label for="saker">Satuan Kerja</label>
                <select name="kode_satuan"  class="form-control" id="saker">
                    <option value="" selected>Pilih Satuan Kerja yang Baru</option>
                    @foreach($satker as $item)
                      @if ($item->kode_satuan == $asset->kode_satuan)
                          <option value="{{$item->kode_satuan}}">{{$item->nama_satuan}}</option>
                      @else
                          <option value="{{$item->kode_satuan}}">{{$item->nama_satuan}}</option>
                      @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
