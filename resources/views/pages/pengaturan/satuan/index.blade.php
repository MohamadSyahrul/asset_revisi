@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
    <li class="breadcrumb-item active" aria-current="page">Satuan Kerja</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Satuan Kerja</h6>
        <a href="{{route('satuan-kerja.create')}}" type="button" class="btn btn-outline-success btn-icon-text btn-xs">
          <i class="btn-icon-prepend" data-feather="plus"></i>
          Tambah Satuan Kerja
        </a>
        <br><br>
        <div class="table-responsive">
          <table id="satker" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Satuan Kerja</th>
                <th>Nama Satuan Kerja</th>
                <th>Tanggal dibuat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$item->kode_satuan}}</td>
                <td>{{$item->nama_satuan}}</td>
                <td>{{$item->created_at }}</td>
                <td>
                  <button  class="btn btn-primary btn-icon">
                    <a href="{{route('satuan-kerja.edit', $item->id)}}" type="button">
                      <i data-feather="edit-2" style="color: white;"></i>
                    </a>
                  </button>
                  <form action="{{route('satuan-kerja.destroy',$item->id)}}" method="post" style="display: inline;">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-icon">
                        <i data-feather="trash"></i>
                      </button>
                  </form>
                </td>

              </tr>
              @empty
                  <tr>
                    <td colspan="7" class="text-center">
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

  <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/promise-polyfill/polyfill.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>
  <script>
    $(function() {
  'use strict';

  $(function() {
    $('#satker').DataTable({
      "aLengthMenu": [
        [10, 30, 50, -1],
        [10, 30, 50, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      }
    });
    $('#satker').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Search Kode');
      search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      length_sel.removeClass('form-control-sm');
    });
  });

});
  </script>
@endpush
