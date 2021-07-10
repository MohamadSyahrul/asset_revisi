@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Data Asset</a></li>
    <li class="breadcrumb-item active" aria-current="page">Penghapusan Asey</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Penghapusan Aset</h6>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Aset</th>
                <th>Nama Aset</th>
                <th>Jenis Aset</th>
                <th>Tanggal Terima</th>
                <th>Masa Pemakaian</th>
                <th>Nilai Aset</th>
                <th>Detail</th>
                <th>ACT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>320800</td>
                <td>
                  <button type="button" class="btn btn-info btn-icon">
                    <i data-feather="chevrons-down"></i>
                  </button>
                </td>
                <td>
                  <button type="button" class="btn btn-primary btn-icon">
                    <i data-feather="edit-2"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-icon">
                    <i data-feather="trash"></i>
                  </button>
                </td>

              </tr>
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