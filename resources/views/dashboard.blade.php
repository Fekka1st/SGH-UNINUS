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
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Smart Greenhouse
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a
                                    class="small text-white stretched-link"
                                    href="/smartgreenhouse"></a>Lihat Detail</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Smart Hydroponik
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a
                                    class="small text-white stretched-link"
                                    href="/smarthydroponik"></a>Lihat Detail</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
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
                                            href="/smartaerophonik"></a>Lihat Detail</div>
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
        <!-- Grafik Suhu dan Kelembapan -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Per Minggu</h6>
                </div>
                <div class="card-body">
                    <canvas id="Jadwal"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Row for Last Logged Section -->
    <div class="row">


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
    const xValues = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
        new Chart("Jadwal", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    label: 'SmartHydroponik',
                    data: [30, 32, 33, 31, 34, 30, 32, 30],
                    borderColor: "blue",
                    fill: true
                }, {
                    label: 'Smart Aerophonic',
                    data: [50, 40, 40, 45, 55, 50, 45, 40],
                    borderColor: "red",
                    fill: true
                },
                {
                    label: 'Smart GreenHouse',
                    data: [20, 30, 30,75, 55, 20, 45, 50],
                    borderColor: "Green",
                    fill: true
                }]
            },
            options: {
                legend: {
                    display: true

                }
            }
        });

</script>
@endsection


