@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
    <!-- Start Hero Area -->
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Hero Content -->
                    <div class="hero-content">
                        <h1>Selamat Datang di LLDIKTI Wilayah IV </h1>
                        <p>LLDIKTI Wilayah IV merupakan lembaga yang melayani dan memfasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di provinsi Jawa Barat dan Banten.</p>
                        <a href="{{ url('/laman/about') }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Area -->
@endsection