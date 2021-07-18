@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-danger" href="#">Data Asset</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Detail</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">

        @if(session()->get('sukses'))
            <div class="alert alert-success">
                {{session()->get('sukses')}}
            </div>

        @elseif(session()->get('hapus'))
            <div class="alert alert-danger">
                {{session()->get('hapus')}}
            </div>
        @endif

      <div class="card-body">
        <h6 class="card-title">Data Detail</h6>
        <div class="float-left">
          <form action="{{route('aset.import')}}" method="POST" enctype="multipart/form-data" class="mb-3">
            @csrf
            <input type="file" name="excel">
            <input type="submit" value="import" class="file-upload-browse btn btn-primary">
          </form>
        </div>
        <div class="table-responsive">
          <table id="dataDetail" class="table">
            <thead class="text-center">
              <tr>
                <th>No</th>
                <th>Kode Aset</th>
                <th>Nama Aset</th>
                <th>Jenis Aset</th>
                <th>Tanggal Terima</th>
                <th>Masa Pakai</th>
                <th>Nilai Aset</th>
                <th>Merk/Type Aset</th>
                <th>Kuantitas</th>
                <th>Detail & Transfer</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @forelse($data as $row)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->kode_asset}}</td>
                <td>{{$row->nama_asset}}</td>
                <td>
                    {{$row->jenis_asset ? 'Aset Tetap' : 'Aset Bergerak'}}
                </td>
                <td>
                    {{date('d F Y',strtotime($row->tanggal_terima))}}
                </td>
                <td>{{$row->batas_pemakaian}} Tahun</td>
                <td>Rp.{{$row->nilai_asset}}</td>
                <td>{{$row->merk_aset}}</td>
                <td>{{$row->quantity}}</td>
                <td class="text-center">
                  <a role="button" class="btn btn-info btn-icon" title="Detail" href="{{route('data-asset.show',$row->id)}}">
                    <i data-feather="chevrons-down" style="margin-top:8px; color:white;"></i>
                  </a>
                  <a href="{{route('transfer-aset',$row->id)}}" title="transfer" type="button" class="btn btn-success btn-icon">
                    <i class="btn-icon-prepend" style="margin-top:8px; color:white;" data-feather="send"></i>
                  </a>
                </td>
                <td>
                    <a href="{{route('data-asset.edit',$row->id)}}" class="btn btn-primary btn-icon" type="button">
                        <i data-feather="edit-2" style="margin-top:8px;"></i>
                    </a>

                    <form action="{{route('data-asset.destroy',$row->id)}}" method="post" style="display: inline;" onsubmit="return confirm('Yakin hapus data ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-icon">
                            <i data-feather="trash"></i>
                        </button>
                    </form>
                </td>
              </tr>
            @empty
            <tr>
                <td colspan="11" class="text-center">
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

@push('custom-scripts')
<script>
$(function() {
'use strict';

$(function() {
  $('#dataDetail').DataTable({
    "aLengthMenu": [
      [10, 30, 50, -1],
      [10, 30, 50, "All"]
    ],
    "iDisplayLength": 10,
    "language": {
      search: ""
    }
  });
  $('#dataDetail').each(function() {
    var datatable = $(this);
    // SEARCH - Add the placeholder for Search and Turn this into in-line form control
    var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
    search_input.attr('placeholder', 'Search Kode Aset');
    search_input.removeClass('form-control-sm');
    // LENGTH - Inline-Form control
    var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
    length_sel.removeClass('form-control-sm');
  });
});

});
</script>
@endpush
