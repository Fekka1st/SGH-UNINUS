@extends('welcome')

@section('content')
<!-- Hero Section -->
<section class="hero-area" style="
    background-image: url('https://assets.pikiran-rakyat.com/crop/40x35:1155x715/1200x675/photo/2024/05/19/3265301182.jpg');
    background-size: cover; background-position: center; padding: 200px 0; position: relative;">

    <div class="overlay" style="
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background-color: rgba(28, 83, 42, 0.7);"></div>

    <div class="container text-center position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-3 col-md-2 text-right">
                <img src="{{ asset('asset/img/ftannew.png') }}" alt="Logo Kiri" class="img-fluid logo-small">
            </div>

            <div class="col-6 col-md-8 text-center">
                <h2 class="title-large mb-0 tim-kinerja-text">Tim Kinerja</h2>
            </div>

            <div class="col-3 col-md-2 text-right">
                <img src="{{ asset('asset/img/ftek.png') }}" alt="Logo Kanan" class="img-fluid logo-small">
            </div>
        </div>
    </div>
</section>

<!-- Team Support Section -->
<section id="overview" class="app-info section" style="padding-top:70px; padding-bottom:70px;">
    <div class="container">
        <div class="info-one">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="info-text wow fadeInLeft text-center" data-wow-delay=".3s">
                        <h2>Team Support</h2>
                        <p style="margin: 20px 0; line-height: 2em;">
                            Tim Kinerja adalah sekelompok individu yang dibentuk dalam suatu organisasi untuk memantau, mengevaluasi, dan meningkatkan kinerja organisasi atau bagian tertentu dari perusahaan. Fungsi utama tim ini adalah memastikan bahwa tujuan strategis dan operasional dapat tercapai dengan optimal. Berikut adalah beberapa komponen dan fungsi utama dalam isi dari tim kinerja.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Team Categories -->
            <div class="row text-center mt-5">
                <!-- Dosen Section -->
                <div class="col-12 col-md-4 mb-4">
                    <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-dosen')">
                        <strong>Dosen</strong>
                    </div>
                    <div id="desc-dosen" class="description">
                        <strong>Fakultas Pertanian</strong>
                        <div class="user-item">
                            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Dosen">
                            <span>Ir. Lilis Irmawatie, M.M.Pd.</span>
                        </div>
                        <a href="https://www.linkedin.com/in/linkedinusername" class="btn btn-primary mt-2" target="_blank">LinkedIn Profile</a>
                    </div>
                </div>

                <!-- Mahasiswa Section -->
                <div class="col-12 col-md-4 mb-4">
                    <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-mahasiswa')">
                        <strong>Mahasiswa</strong>
                    </div>
                    <div id="desc-mahasiswa" class="description">
                        <strong>Fakultas Pertanian</strong>
                        <div class="user-item">
                            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                            <span>Imam Ramadhan</span>
                        </div>
                        <a href="https://www.linkedin.com/in/linkedinusername" class="btn btn-primary mt-2" target="_blank">LinkedIn Profile</a>
                    </div>
                </div>

                <!-- Vendor Technology Section -->
                <div class="col-12 col-md-4 mb-4">
                    <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-vendor')">
                        <strong>Vendor</strong>
                    </div>
                    <div id="desc-vendor" class="description">
                        <strong>Vendor System</strong>
                        <div class="user-item">
                            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Vendor">
                            <span>Hamdi Sholahudin</span>
                        </div>
                        <div class="user-item">
                            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Vendor">
                            <span>Ferry Aditya Herman</span>
                        </div>
                        <strong>Vendor Green House</strong>
                        <div class="user-item">
                            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Vendor">
                            <span>Pak Dadang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@Section ('css')
<!-- Bootstrap CSS -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .alert {
        text-align: center;
        padding: 20px;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
        width: 100%;
    }

    .alert:hover {
        transform: scale(1.05);
    }

    /* Kotak deskripsi */
    .description {
        display: none;
        background-color: #e9ecef;
        border-radius: 10px;
        padding: 20px;
        font-size: 15px;
        color: #333;
        text-align: left;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.6s ease, opacity 0.6s ease;
        opacity: 0;
    }

    .description.show {
        display: block;
        max-height: 600px;
        opacity: 1;
    }

    .user-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        transition: opacity 0.4s ease-in-out;
    }

    .user-item img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
        object-fit: cover;
    }

    /* Responsif: Tampilan layar lebih besar */
    @media (min-width: 768px) {
        .description {
            font-size: 16px;
            line-height: 1.6;
        }

        .user-item {
            margin-bottom: 20px;
        }
    }

    .container {
        max-width: 900px;
        margin: auto;
    }

    /* Atur ukuran logo kiri dan kanan agar seragam */
.logo-small {
    max-width: 100px;
    height: auto;
}

/* Responsif pada teks "Tim Kinerja" */
.tim-kinerja-text {
    color: white; /* Ubah warna teks menjadi putih */
    font-size: 24px; /* Ukuran font default */
    font-weight: bold; /* Buat teks lebih tebal */
}

@media (min-width: 768px) {
    .tim-kinerja-text {
        font-size: 32px; /* Ukuran font untuk layar menengah ke atas */
    }
}

@media (min-width: 992px) {
    .tim-kinerja-text {
        font-size: 40px; /* Ukuran font lebih besar untuk layar desktop */
    }
}

</style>

@section ('script')
<!-- Bootstrap JS -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

<script>
    function toggleDescription(id) {
        const selectedDesc = document.getElementById(id);
        const isCurrentlyShown = selectedDesc.classList.contains('show');

        // Tutup semua deskripsi yang terbuka
        const descriptions = document.querySelectorAll('.description');
        descriptions.forEach(desc => desc.classList.remove('show'));

        // Buka deskripsi yang dipilih jika belum terbuka
        if (!isCurrentlyShown) {
            selectedDesc.classList.add('show');
        }
    }
</script>

@endsection
