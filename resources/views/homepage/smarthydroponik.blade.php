@extends('welcome')


@section('content')
<section class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="brand_color">
                <div style="text-align: center;">
                    <h2 style="color: white;">
                        <b>Smart Hydroponic</b>
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
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        PH Air
                    </div>
                        <div>
                            
                        </div>
                </div>
                <div class="col-auto">
                
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
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        TDS
                    </div>
                        <div>
                            2000 PPM
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
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Laju Air
                    </div>
                        <div>
                            1000 m/s
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
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Volume Air
                    </div>
                        <div>
                            50cm
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
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Suhu Air
                    </div>
                        <div>
                            20°C
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
