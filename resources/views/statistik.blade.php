@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush
@push('style')
    <style>
        .highcharts-figure {
min-width: 460px;
max-width: 900px;
margin: 1em auto;
}
    </style>
@endpush
@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
          <h4 class="mb-3 mb-md-0">Selamat Datang di Statistik Aset</h4>
        </div>
    </div>

<!-- row -->
<figure class="highcharts-figure">
    <div id="container"></div>
    <br>
    <div id="kondisi"></div>
    <br>
    <div id="jenis"></div>
    <br>
    <div id="nilai"></div>
</figure>

@endsection

<!--@push('plugin-scripts')-->
<!--  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>-->
<!--  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>-->
<!--  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>-->
<!--@endpush-->

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>


  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript">

let aset = <?= $asets; ?>;
let kategori = <?= $kategoris; ?>;

// console.log(aset)
// console.log(kategori)

let hasil = []

aset.forEach(element => {
    kategori.forEach(kategoris => {
        if(element.kategori == kategoris.id){
            hasil.push([kategoris.kategori,element.total])
        }
    });
});

let all = ['Total Aset',0]
let sum = 0

aset.forEach(element =>{
    sum +=element.total
    all.splice(1,1,sum)
})

// console.log(all)

hasil.unshift(all)

// console.log(hasil)


 Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Aset Berdasarkan Kategori'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Aset'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Jumlah aset : <b>{point.y:.1f} buah</b>'
    },
    series: [{
        name: 'Aset',
        data: hasil,
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
</script>
<script type="text/javascript">

let aset_baik = <?= $persentase_baik; ?>;
let aset_rusak = <?= $persentase_rusak; ?>;
let aset_berat = <?= $persentase_rusak_berat; ?>;

Highcharts.chart('kondisi', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Aset Berdasarkan Kondisi'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            colors: [
             '#ff36f2',
             '#0cd2e8',
             '#36ff40',

           ],
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Baik',
            y: aset_baik
        }, {
            name: 'Rusak ringan',
            y: aset_rusak
        },{
            name: 'Rusak berat',
            y: aset_berat
        }]
    }]
});
</script>
<script type="text/javascript">

let aset_tetap = <?= $persentase_tetap; ?>;
let aset_bergerak = <?= $persentase_bergerak; ?>;

Highcharts.chart('jenis', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Aset Berdasarkan Jenis'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            colors: [
             '#DDDF00',
             '#FF9655'
           ],
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Aset Tetap',
            y: aset_tetap
        }, {
            name: 'Aset Bergerak',
            y: aset_bergerak
        }]

    }]
});
</script>
@endpush
