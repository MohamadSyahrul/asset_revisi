<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https:// mbstackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <style type="text/css">
      @page { margin: 1em; }
      @page { size: US-Letter landscape; }
      body { font-size: 200%; }
    </style>

</head>
<body>
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-title text-center mb-2 mt-1" style="font-weight:bold;">Laporan Data Aset</div>
                    
                    <br><br><br><br><br><br><br><br>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  id="table" class="table table-striped thead-light">
                                <thead>
                                <tr>
                                    <th scope="col">Nama Aset</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Tgl Terima</th>
                                    <th scope="col">Pemakaian</th>
                                    <th scope="col">Merk & Type</th>
                                    <th scope="col">Qr Code</th>
                                    <th scope="col">Kuantitas</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col" class="text-right">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($aset as $item)
                                <tr>
                                    <td colspan="12" style="color:#266bff; text-align: center;">{{$item->kode_asset}}</td>
                                </tr>
                                <tr>
                                    <td>{{$item->nama_asset}}</td>
                                    <td>{{($item->jenis_asset==1 ? 'Aset Tetap' : 'Aset Bergerak')}}</td>
                                    <td>
                                        @foreach ($data_kategori as $row)
                                            {{($row->id == $item->kategori ? $row->nama_kategori : '')}}
                                        @endforeach       
                                    </td>
                                    <td>
                                    @foreach ($lokasi as $row)
                                            {{($row->id == $item->lokasi_asset ? $row->nama_lokasi : '')}}
                                    @endforeach
                                    </td>
                                    <td>{{($item->keterangan <= 30 ? 'Rusak' : 'Baik')}}</td>
                                    <td>{{date('d F Y',strtotime($item->tanggal_terima))}}</td>
                                    <td>{{$item->batas_pemakaian}} Tahun</td>
                                    <td>{{$item->merk_aset}}</td>
                                    <td><img src="data:image/png;base64, {!! $qrcode !!}" style="width:50px"></td>
                                    <td>{{$item->quantity}}</td>                    
                                    <td>Rp {{$item->nilai_asset}}</td>
                                    <td>Rp {{$item->total}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot style="font-weight:bold;">
                                    <tr>
                                    <td colspan="12" class="text-right">Total Nilai: Rp {{$aset->sum('total')}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>

</body>
</html>