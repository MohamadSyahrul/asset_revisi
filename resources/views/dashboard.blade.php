@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush
@push('style')
    <style>
        .highcharts-figure, .highcharts-data-table table {
min-width: 460px;
max-width: 900px;
margin: 1em auto;
}
    </style>
@endpush
@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
          <h4 class="mb-3 mb-md-0">Selamat Datang di Dashboard Asset</h4>
        </div>
    </div>

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">
          <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                          <h6 class="card-title mb-0">Total Aset</h6>
                      </div>
                      <div class="row">
                          <div class="col-12 col-md-12 col-xl-12">
                              <h3 class="mb-2">{{$aset ?? '-'}}</h3>
                              <i class="float-right text-danger" data-feather="box"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                          <h6 class="card-title mb-0">Aset Tetap</h6>
                      </div>
                      <div class="row">
                          <div class="col-12 col-md-12 col-xl-12">
                              <h3 class="mb-2">{{$aset_tetap ?? '-'}}</h3>
                              <i class="float-right text-danger" data-feather="shopping-bag"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                          <h6 class="card-title mb-0">Aset Bergerak</h6>
                      </div>
                      <div class="row">
                          <div class="col-12 col-md-12 col-xl-12">
                              <h3 class="mb-2">{{$aset_bergerak ?? '-'}}</h3>
                              <i class="float-right text-danger" data-feather="activity"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- row -->
<figure class="highcharts-figure">
    <div id="container"></div>
</figure>

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>


  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript">
  $(function () {
    let totalJenis = <?= $totalJenis; ?>;
    let nilaiTotal = <?= $nilaiTotal; ?>;

    console.log(totalJenis)
    // console.log(nilaiTotal)

    let item = []
    let tetap = []
    let gerak = []

    let jenis = totalJenis.forEach(element => {
        if(element.jenis == 1) {
            tetap.push(parseInt(element.sum))
        }
        else if(element.jenis == 0) {
            gerak.push(parseInt(element.sum))
        }

    });

    let tahun = nilaiTotal.forEach(element => {
            item.push(parseInt(element.sum))
    });

    // console.log(item)
    console.log(tetap)
    console.log(gerak)

   Highcharts.chart('container', {

    title: {
    text: 'Pertumbuhan Nilai Aset, 2020-2027'
    },
    yAxis: {
    title: {
        text: 'Nilai Aset'
    }
    },

    xAxis: {
    accessibility: {
        rangeDescription: 'Range: 2020 to 2027'
    }
    },

    legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
    },

    plotOptions: {
    series: {
        label: {
            connectorAllowed: true
        },
        pointStart: 2020
    }
    },

    series: [{
    name: 'Nilai Aset Total',
    data: item
    }, {
    name: 'Nilai Aset Tetap',
    data: tetap
    }, {
    name: 'Nilai Aset Bergerak',
    data: gerak
    }],

    responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
    }
    });
});
</script>
@endpush
