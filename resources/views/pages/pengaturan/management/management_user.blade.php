@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
    <li class="breadcrumb-item active" aria-current="page">Management User</li>
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
        <h6 class="card-title">Management User</h6>
        <a href="{{url('/pengaturan/create-user')}}" type="button" class="btn btn-outline-success btn-icon-text btn-xs">
          <i class="btn-icon-prepend" data-feather="plus"></i>
          Tambah Baru
        </a>
        <br><br>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead class="text-center">
              <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama User</th>
                <th>Email</th>
                <th>Level</th>
                <th>Satuan Kerja</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <img src="{{ asset('img/'. $item->gambar ) }}" alt="no image" style="width:100px;" class="rounded-circle">
                      {{-- <img src="{{ Storage::url($item->gambar) }}" alt="no image" width="100%" class="img-sm rounded-circle"> --}}
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->roles  }}</td>
                    <td>{{ ($item->satuan_kerja_id != NULL) ? $item->satuan_kerja_id : '-' }}</td>
                    <td>
                      <button class="btn btn-primary btn-icon">
                        <a href="{{url('pengaturan/edit', $item->id)}}" type="button" role="button">
                          <i data-feather="edit-2" style="color: white;"></i>
                        </a>
                      </button>
                      <form style="display: inline;" action="{{ url('pengaturan/management', $item->id) }}" method="post" onsubmit="return confirm('Yakin hapus data ?')" >
                        @method('delete')
                        @csrf
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
@endpush
