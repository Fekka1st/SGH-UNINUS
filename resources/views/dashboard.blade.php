@extends('layout.master')
@section('title','Dashboard')

@section('css')

@endsection


@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Smart Greenhouse
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a
                                    class="small text-white stretched-link"
                                    href="greenhouse.html"></a>Lihat Detail</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Smart Hydroponik
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a
                                    class="small text-white stretched-link"
                                    href="hydroponik.html"></a>Lihat Detail</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Smart Aeroponik
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a
                                            class="small text-white stretched-link"
                                            href="aeroponik.html"></a>Lihat Detail</div>
                                </div>
                                <div class="col">
                                </div>
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

    <!-- Chart Row -->
    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daily Summary</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="dailySummaryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row for Last Logged Section -->
    <div class="row">

        <!-- Last Logged Card -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Last Logged</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="list-group">
                        <!-- User 1 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Harold</h5>
                                <small>6 hours ago</small>
                            </div>
                            <p class="mb-1">September 7, 2019</p>
                        </a>
                        <!-- User 2 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Hanzo Miguel</h5>
                                <small>7 hours ago</small>
                            </div>
                            <p class="mb-1">September 7, 2019</p>
                        </a>
                        <!-- User 3 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Hendrik Michael</h5>
                                <small>12 hours ago</small>
                            </div>
                            <p class="mb-1">September 7, 2019</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Content Row -->



    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
        </div>
        <div class="card-body">
            <p>
                "Smart Greenhouse adalah solusi cerdas untuk pertanian modern.
                <br>Teknologi sensor dan otomatisasi, kami dapat mengontrol suhu, kelembapan, dan
                pencahayaan secara optimal, memastikan tanaman tumbuh dengan lebih efisien dan
                produktif. Proyek ini tidak hanya ramah lingkungan, tapi juga hemat energi dan membantu
                meningkatkan hasil panen dengan lebih sedikit sumber daya."
            </p>
        </div>
    </div>

</div>
@endsection


@section('script')
<script>
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    var ctx = document.getElementById("dailySummaryChart");
    var dailySummaryChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
            datasets: [{
                label: "Temperature",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [20, 25, 30, 35, 40, 35, 30, 25], // Contoh data suhu
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'hour'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 8
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a degree symbol in the ticks
                        callback: function (value, index, values) {
                            return value + '°C';
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel + '°C';
                    }
                }
            }
        }
    });

</script>
@endsection


