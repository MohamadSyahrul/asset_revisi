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
                        <div class="card-title text-center mb-2 mt-1" style="font-weight:bold; font-size:20px;">List</div>
                    
                    <br><br><br><br><br><br><br><br>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  id="table" class="table text-center">
                                <thead>
                                <tr>
                                    <th scope="col" style="font-size:20px;">Qr Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($aset as $item)
                                <tr>
                                    <td><img src="data:image/png;base64, {!! $qrcode !!}" style="width:200px"></td>
                                    </tr>
                                @endforeach
                                </tbody>
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