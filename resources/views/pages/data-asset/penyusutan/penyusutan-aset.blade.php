@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Data Asset</a></li>
    <li class="breadcrumb-item active" aria-current="page">Penyusutan aset</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Penyusutan Aset</h6>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Aset</th>
                <th>Nama Aset</th>
                <th>Tanggal Terima</th>
                <th>Masa Pemakaian</th>
                <th>Kondisi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @forelse($aset as $row)
                <td>{{$loop->iteration}}</td>
                <td>
                  <a class="card-link" data-toggle="collapse" href="#menuone{{$row->id}}" aria-expanded="true" aria-controls="menuone">
                    {{$row->kode_asset}}
                  </a>
                </td>
                <td>{{$row->nama_asset}}</td>
                <td>
                    {{date('d F Y',strtotime($row->tanggal_terima))}}
                </td>
                <td>{{$row->batas_pemakaian}} Tahun</td>
                <td>
                  {{($row->keterangan <= 30 ? 'Rusak' : 'Baik')}}
                  </td>
              </tr>
            <tr>
              <td colspan="6">
                <div id="menuone{{$row->id}}" class="collapse">
                    {{-- <div class="card-body"> --}}
                          <label for="exampleFormControlTextarea1">Persentase Penyusutan</label>
                          <input class="form-control" list="ket" type="range" name="keterangan" value="{{$row->keterangan}}" disabled/>
                          <datalist id="ket" style="display: flex; justify-content:space-between; padding:0 1.2em">
                            <option value="0" label="0%"></option>
                            <option value="10" label="10%"></option>
                            <option value="20" label="20%"></option>
                            <option value="30" label="30%"></option>
                            <option value="40" label="40%"></option>
                            <option value="50" label="50%"></option>
                            <option value="60" label="60%"></option>
                            <option value="70" label="70%"></option>
                            <option value="80" label="80%"></option>
                            <option value="90" label="90%"></option>
                            <option value="100" label="100%"></option>
                          </datalist>
                      {{-- </div> --}}
                </div>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center">
                  Data Kosong
              </td>
            </tr>
              @endforelse
            </tbody>
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
{{-- 
@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush --}}
