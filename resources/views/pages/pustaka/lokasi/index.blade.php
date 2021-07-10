@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pustaka-lokasi-aset.index')}}">Pustaka</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lokasi Aset</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Lokasi Aset</h6>
        <a href="{{route('pustaka-lokasi-aset.create')}}" type="button" class="btn btn-outline-success btn-icon-text btn-xs">
          <i class="btn-icon-prepend" data-feather="plus"></i>
          Tambah Baru
        </a>
        <br><br>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Lokasi Aset</th>
                <th>Penanggung Jawab</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $i=>$item)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->nama_lokasi }}</td>
                <td>{{ $item->penanggung_jawab }}</td>
                <td>{{ $item->created_at}}</td>
                <td>
                  <button type="button" class="btn btn-primary btn-icon">
                    <a href="{{route('pustaka-lokasi-aset.edit', $item->id)}}">
                      <i data-feather="edit-2" class="text-white"></i>
                    </a>
                  </button>
                  <form action="{{route('pustaka-lokasi-aset.destroy',$item->id)}}" method="post" style="display: inline;">
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
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
