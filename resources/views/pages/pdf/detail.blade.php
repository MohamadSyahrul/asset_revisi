<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    
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
                   @if(session()->get('sukses'))
                        <div class="alert alert-success">
                            {{session()->get('sukses')}}
                        </div>
                  @endif
                  <div class="card-body">
                    @foreach ($aset as $item)
                    <div class="container-fluid d-flex justify-content-between">
                      <div class="col-lg-3 pl-0">
                        <a href="#" class="noble-ui-logo d-block mt-3">Sim<span>Aset</span></a>                 
                        <p class="text-uppercase mt-1 mb-1"><span class="text-muted">Nama Aset :</span> <br> <b>{{$item->nama_asset}}</b></p>
                        <p><span class="text-muted"> Lokasi Aset </span> :<br>{{$lokasi}}</p>
                        <h5 class="mt-3 text-muted">Merk atau Type :</h5>
                        <p>{{$item->merk_aset}}</p>
                        <h5 class="mt-3 text-muted">Harga Total</h5>
                        <p class="text-primary"><b> Rp.{{$item->total}}</b></p> 
                      </div>
                      <div class="col-lg-3 pr-0">
                        <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">
                        <img src="data:image/png;base64, {!! $qrCode !!}" style="width:50px">
                        </h4>
                        <h6 class="text-right pb-4"># {{$item->kode_asset}}</h6>
                        <p class="text-right mb-1">Harga Satuan :</p>
                        <h4 class="text-right font-weight-normal">Rp {{$item->nilai_asset}}</h4>
                        <h6 class="mb-0 mt-3 text-right font-weight-normal mb-2"><span class="text-muted">Kategori Aset :</span> {{$kategori}}</h6>
                        <h6 class="text-right font-weight-normal"><span class="text-muted">Batas Pemakaian :</span> {{$item->batas_pemakaian}} Tahun</h6>
                        <h6 class="text-right font-weight-normal"><span class="text-muted">Tanggal Terima :</span> {{date('d F Y',strtotime($item->tanggal_terima))}}</h6>
                      </div>
                    </div><br><br><br><br><br><br><br><br><br><br>
                    <div class="container-fluid d-flex justify-content-center w-100">
                      <div class="table-responsive w-100">
                          <table class="table table-bordered ">
                            <thead>
                              <tr>
                                  <th>Jenis Aset</th>
                                  <th>Kode Satuan</th>
                                  <th>Koordinat Aset</th>
                                  <th>Penyusutan Aset</th>
                                  <th>Kuantitas Aset</th>
                                  <th>Keterangan Penyusutan</th>
                                  <th>Keadaan Awal</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$item->jenis_asset ? 'Aset Tetap' : 'Aset Bergerak'}}</td>
                                <td>{{$item->kode_satuan}}</td>
                                <td>{{$item->koordinat_asset}}</td>
                                <td>{{$penyusutan . ' Tahun'}}</td>
                                <td>{{$item->quantity}}</td>                    
                                <td>{{$item->keterangan . '%'}}</td>
                                <td>{{$item->keadaan_awal ? 'Baik' : 'Kurang'}}</td>

                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
        </div>
 

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>