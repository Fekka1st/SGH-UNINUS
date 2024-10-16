@extends('welcome')


@section('content')
<section class="hero-area " style="background-color: #1C532A">
    <div class="container">
        <div class="row align-items-center">
            <div class="brand_color">
                <div style="text-align: center;">
                    <h2 style="color: white;">
                        <b>Smart Greenhouse</b>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="overview" class="app-info section" style="padding-top:50px;padding-bottom:50px">
<div class="container-fluid">
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        CO2
                    </div>
                        <div>
                            2000PPM
                        </div>
                </div>
                <div class="col-auto">
                <i class="fab fa-cloudversify"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Intensitas Cahaya
                    </div>
                        <div>
                            2000 lx
                        </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-lightbulb"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Pemakaian Air
                    </div>
                        <div>
                            1000 Liter
                        </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-water"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Rata-Rata Suhu
                    </div>
                        <div>
                            30°C
                        </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-thermometer-full"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Rata-Rata Kelembapan
                    </div>
                        <div>
                            50%
                        </div>
                </div>
                <div class="col-auto">
                <i class="fas fa-tint"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-xl-6 col-md-6 mb-6">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2 text-center"> <!-- Tambahkan class text-center -->
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Sensor Suhu
                        </div>
                        <div>
                            <div>
                                <h5>Suhu 1 : 29°C</h5>
                            </div>
                            <div>
                                <h5>Suhu 2 : 28°C</h5>
                            </div>
                            <div>
                                <h5>Suhu 3 : 29°C</h5>
                            </div>
                            <div>
                                <h5>Suhu 4 : 28°C</h5>
                            </div>
                            <div>
                                <h5>Suhu 5 : 28°C</h5>
                            </div>
                            <div>
                                <h5>Suhu 6 : 29°C</h5>
                            </div>
                            <div>
                                <h5>Suhu 7 : 28°C</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-thermometer-full"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-6">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2 text-center"> <!-- Tambahkan class text-center -->
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Sensor Kelembaban
                        </div>
                        <div>
                            <h5>Kelembapan 1 : 50%</h5>
                            <div>
                                <h5>Kelembapan 2 : 50%</h5>
                            </div>
                            <div>
                                <h5>Kelembapan 3 : 50%</h5>
                            </div>
                            <div>
                                <h5>Kelembapan 4 : 50%</h5>
                            </div>
                            <div>
                                <h5>Kelembapan 5 : 50%</h5>
                            </div>
                            <div>
                                <h5>Kelembapan 6 : 50%</h5>
                            </div>
                            <div>
                                <h5>Kelembapan 7 : 50%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-tint"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
  </section>
@endsection

@section('css')

@endsection

@section('script')

@endsection
