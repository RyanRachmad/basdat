@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

@section('content')
<div class="row">
    <div class="mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <h5 class="card-header m-0 me-2 pb-3">Data Penjualan Di Berbagai Negara</h5>
                <canvas class="center" id="barnegara" style="width:100%;max-width:850px"></canvas>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <h5 class="card-header m-0 me-2 pb-3">Data Pelanggan Di Berbagai Negara</h5>
                <canvas class="center" id="barnegaracust" style="width:100%;max-width:850px"></canvas>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <h5 class="card-header m-0 me-2 pb-3">Data Penjualan Berdasarkan Warna</h5>
                <canvas class="center" id="barwarna" style="width:100%;max-width:850px"></canvas>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <h5 class="card-header m-0 me-2 pb-3">Data Penjualan Berdasarkan Jenis Kelamin</h5>
                <canvas class="center" id="piegender" style="width:100%;max-width:400px"></canvas>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <h5 class="card-header m-0 me-2 pb-3">Data Penjualan Berdasarkan Ukuran</h5>
                <canvas class="center" id="pieukuran" style="width:100%;max-width:400px"></canvas>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <h5 class="card-header m-0 me-2 pb-3">Data Penjualan per Bulan Tiap Tahun</h5>
                <canvas class="center" id="linekuartal" style="width:100%;max-width:850px"></canvas>
            </div>
        </div>
    </div>
  </div>
</div>


<script>
var xValues = ["Australia", "China", "Filipina", "Hongkong", "Indonesia", "Jepang", "Korsel","Malaysia","Singapura","Taiwan", "Thailand"];
var yValues = {{$negara}};
var barColors = ["#c5d2db","#2096ba","#e7b183","#c5919d","#df6e21","#feb47b","#f5ab99","#765285","#351c42","#709fb0","#a0c1b8"];

new Chart("barnegara", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      borderColor:'#000000',
      borderWidth: 1,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true
    }
  }
});
</script>

<script>
var xValues = ["Australia", "China", "Filipina", "Hongkong", "Indonesia", "Jepang", "Korsel","Malaysia","Singapura","Taiwan", "Thailand"];
var yValues = {{$pelanggan}};
var barColors = ["#c5d2db","#2096ba","#e7b183","#c5919d","#df6e21","#feb47b","#f5ab99","#765285","#351c42","#709fb0","#a0c1b8"];

new Chart("barnegaracust", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      borderColor:'#000000',
      borderWidth: 1,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true
    }
  }
});
</script>

<script>
var xValues = ["Abu-Abu", "Biru", "Hijau", "Hitam", "Merah","Putih"];
var yValues = {{$warna}};
var barColors = ["#808080","#00008B","#006400","#000000","#8b0000","#ffffff"];

new Chart("barwarna", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      borderColor:'#000000',
      borderWidth: 1,
      data: yValues
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    },
    legend: {display: false},
    title: {
      display: true
    }
  }
});
</script>

<script>
var xValues = ["Laki-Laki", "Perempuan"];
var yValues = [{{$laki}},{{$perempuan}}];
var barColors = [
  "#D4F1F4",
  "#FFED86"
];

new Chart("piegender", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      borderColor:'#000000',
      borderWidth: 1,
      data: yValues
    }]
  },
  options: {
    title: {
      display: false
    }
  }
});
</script>

<script>
var xValues = ["Ukuran S", "Ukuran M", "Ukuran L", "Ukuran XL", "Aksesoris"];
var yValues = {{$ukuran}};
var barColors = [
  "#05445E",
  "#189AB4",
  "#0295ce",
  "#75E6DA",
  "#D4F1F4"
];

new Chart("pieukuran", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      borderColor:'#000000',
      borderWidth: 1,
      data: yValues
    }]
  },
  options: {
    title: {
      display: false
    }
  }
});
</script>

<script>
var xValues = ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agt","Sep","Okt","Nov","Des"];

new Chart("linekuartal", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      label: '2020',
      data: {{$tahun2020}},
      borderColor: "red",
      fill: false
    }, { 
      label: '2021',
      data: {{$tahun2021}},
      borderColor: "green",
      fill: false
    }, { 
      label: '2022',
      data: {{$tahun2022}},
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {
      display: true,
    }
  }
});
</script>
@endsection
