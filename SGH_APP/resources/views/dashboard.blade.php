@extends('layout.master')
@section('title','Dashboard')
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-12 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Smart Room Greenhouse </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  {{$greenDayCount}} Data Today
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <a class="small text-white stretched-link" href="/smartgreenhouse"></a>See Detail
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-laptop-house"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Smart Hydroponik </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  {{$hydroDayCount}} Data Today
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <a class="small stretched-link" href="/smarthydroponik"></a>See Detail
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-laptop-house"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Smart Aeroponik </div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      {{$aeroDayCount}} Data Today
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <a href=""></a>
                      <a class="small text-white stretched-link" href="/smartaerophonik"></a>See Detail
                    </div>
                  </div>
                  <div class="col"></div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-laptop-house"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Weekly Data</h6>
          </div>
          <div class="card-body">
            <canvas id="Jadwal"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row"></div>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
      </div>
      <div class="card-body">
        <p> "Smart Greenhouse adalah solusi cerdas untuk pertanian modern. <br>Teknologi sensor dan otomatisasi, kami dapat mengontrol suhu, kelembapan, dan pencahayaan secara optimal, memastikan tanaman tumbuh dengan lebih efisien dan produktif. Proyek ini tidak hanya ramah lingkungan, tapi juga hemat energi dan membantu meningkatkan hasil panen dengan lebih sedikit sumber daya." </p>
      </div>
    </div>
  </div>
@endsection


@section('script')
<script>
const labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
const hydroData = @json(array_values($hydroDailyCounts));
const greenData = @json(array_values($greenDailyCounts));
const aeroData = @json(array_values($aeroDailyCounts));
const ctx = document.getElementById('Jadwal').getContext('2d');
const weeklyChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
                label: 'Hydroponik',
                data: hydroData,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                tension: 0.3
            },
            {
                label: 'Greenhouse',
                data: greenData,
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                fill: true,
                tension: 0.3
            },
            {
                label: 'Aeroponik',
                data: aeroData,
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                fill: true,
                tension: 0.3
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Jumlah Data Harian (Senin - Minggu)'
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Jumlah Data'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Hari'
                }
            }
        }
    }
});
</script>
@endsection


