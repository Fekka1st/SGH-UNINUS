@extends('welcome')

@section('content')

<section class="HERO-AREA d-flex align-items-center justify-content-center position-relative" style="background-image: url('asset/img/tambakdepanununis.png'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 90vh;">
  <div class="container position-relative" style="z-index: 2;">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="text-white animate-slide-up" data-aos="fade-down" style="z-index: 3; color: white; font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);">
        <b>SELAMAT DATANG</b>
        </h2>
      </div>
    </div>
  </div>
</section>

<!-- star Smart Greenhouse Berbasis IoT di Fakultas Pertanian Uninus -->
<section id="home" class="hero-area" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);">
    <div class="container" style="font-family: 'Poppins', sans-serif;">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12 mb-4">
                <!-- Margin bawah -->
                <div class="hero-content" data-aos="fade-right">
                    <h1 class="wow fadeInLeft" data-wow-delay=".4s" style="font-size: 33px;"><i>Smart Greenhouse</i> Berbasis <i>IoT</i> di Fakultas Pertanian Uninus</h1>
                    <p class="wow fadeInLeft"
                        style="color: white; line-height: 1.5em; margin-top: 15px; font-size: 17px;  text-align: justify; font-family: 'Poppins', sans-serif;"
                        data-wow-delay=".8s"> Selamat datang di <i>Smart Greenhouse</i> Fakultas Pertanian Uninus. Kami menerapkan teknologi terkini untuk efisiensi dan produktivitas tanaman. Dilengkapi sistem IoT hasil pengembangan Fakultas Teknik, kami berkomitmen menciptakan pertanian berkelanjutan dan ramah lingkungan.
                    </p>
                    <div class="button wow fadeInLeft" data-wow-delay=".8s">
                        <a href="#about_us" class="btn text-white bg-success" style="font-size: 17px;">Tentang</a>
                        <a href="https://www.youtube.com/watch?v=917dBBxONh0" target="_blank"
                            class="glightbox video-button">
                            <span class="video bg-success">
                            <i class="lni lni-play text-white"></i>
                            </span>
                            <span class="text-white m-3" style="font-family: 'Poppins', sans-serif; font-size: 17px;"><B>Video Green House</B></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 mb-4" data-aos="fade-left">
                <!-- Margin bawah -->
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner" style="border-radius: 5px">
                        <div class="carousel-item active">
                            <img src="{{asset('asset/img/sgf1.jpg')}}"
                                class="d-block w-100" alt="Gambar 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('asset/img/sgf11.jpeg')}}"
                                class="d-block w-100" alt="Gambar 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('asset/img/sgf9.jpeg')}}"
                                class="d-block w-100" alt="Gambar 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('asset/img/sgf14.jpeg')}}"
                                class="d-block w-100" alt="Gambar 4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Smart Greenhouse Berbasis IoT di Fakultas Pertanian Uninus -->

<div id="about_us"></div>
<!-- Start Keunggulan Smart Greenhouse -->
<section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px; font-family: 'Poppins', sans-serif; background: linear-gradient(to left,#ADD8E6,#fff);">
    <div class="container">
        <div class="info-one">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="info-text wow fadeInLeft" data-aos="zoom-out-right">

                        <h3><b>Keunggulan</b> <i><b>Smart Greenhouse</b></i></h3>
                        <p style="margin: 20px 0; line-height: 2em; text-align: justify; color: black; font-size: 17px;"> 
                        <i>Smart Greenhouse</i> kami dirancang untuk memenuhi kebutuhan pertanian modern dengan keberlanjutan dan efisiensi. Berbasis <i>IoT</i>, kami menghemat air dan energi, serta meningkatkan produktivitas tanaman. Sistem hidroponik dan aeroponik tanpa tanah memungkinkan penanaman ramah lingkungan di ruang terbatas, ideal untuk perkotaan. Proyek ini menjadi pusat riset mahasiswa dan peneliti, memanfaatkan data sensor <i>IoT</i> untuk memahami dan meningkatkan pertumbuhan tanaman.
                        </p>
                    </div>
                </div>
                <!-- Kolom kiri untuk karosel -->
                <div class="col-lg-6 col-md-12 mb-4" data-aos="zoom-out-left">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="border-radius: 5px">
                            <div class="carousel-item active">
                                <img src="{{asset('asset/img/sgf3.jpg')}}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('asset/img/sgf2.jpg')}}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('asset/img/sgf4.jpg')}}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Start Keunggulan Smart Greenhouse -->

<!-- Start Achievement Area Smart Greenhouse -->
<section id="pricing" class="pricing-table section" style="background: linear-gradient(to left, #000000, #1C532A, #005000); font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center" style="color: white;">

                    <h2 style="color: white;"><b>Smart Greenhouse</b></h2>

                    <p style="font-size: 17px;  font-family: 'Poppins', sans-serif;">Berikut adalah beberapa Fasilitas Greenhouse yang kami gunakan untuk metode penanaman</p>
                </div>
            </div>
        </div>

        <div id="facilityCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background: linear-gradient(to left, #fff, #A8D5E3);">
                                <div class="text-center" style="color: white;  font-family: 'Poppins', sans-serif;">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22">Sistem Pemantauan Lingkungan</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black; font-size: 17px;">
                                        Memanfaatkan sensor canggih untuk mengukur dan mengendalikan suhu, kelembapan, dan pencahayaan secara otomatis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background: linear-gradient(to left, #fff, #A8D5E3);">
                                <div class="text-center" style="color: white;  font-family: 'Poppins', sans-serif;">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;">Automasi Irigasi</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black; font-size: 17px;">
                                        Sistem irigasi yang terintegrasi dengan sensor kelembapan tanah, memungkinkan penyiraman yang tepat waktu dan sesuai kebutuhan tanaman.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background: linear-gradient(to left, #fff, #A8D5E3);">
                                <div class="text-center" style="color: white;  font-family: 'Poppins', sans-serif;">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;">Data Analitik</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black; font-size: 17px;">
                                        Pengolahan data untuk menganalisis pertumbuhan tanaman dan mengoptimalkan kondisi lingkungan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background: linear-gradient(to left, #fff, #A8D5E3);">
                                <div class="text-center" style="color: white;  font-family: 'Poppins', sans-serif;">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;">Sistem Hidroponik</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black; font-size: 17px;">
                                        Dipantau dan dikendalikan secara otomatis, memastikan tanaman mendapatkan nutrisi yang tepat dalam jumlah yang sesuai.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background: linear-gradient(to left, #fff, #A8D5E3);">
                                <div class="text-center" style="color: white;  font-family: 'Poppins', sans-serif;">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;">Sistem Aeroponik</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black;font-size: 17px;">
                                        Dilengkapi dengan sensor dan aktuator IoT untuk mengatur frekuensi dan durasi penyiraman.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#facilityCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#facilityCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- End Achievement Area Smart Greenhouse-->

<!-- Start Program dan Kegiatan -->
<section id="pricing" class="pricing-table section" style="background: linear-gradient(to left, #A8D5E3,#fff,);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center" style="font-family: 'Poppins', sans-serif;">

                    <h2 data-wow-delay=".4s"><b>Program dan Kegiatan</b></h2>
                    <p data-wow-delay=".6s" style="font-size: 17px; color: black;">
                        Berikut adalah beberapa Program dan Kegiatan yang kami gunakan untuk metode penanaman
                    </p>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-12 col-12 mb-4">
                <div class="single-table" style="height:100%; background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); font-family: 'Poppins', sans-serif;" data-wow-delay=".2s">
                    <div class="text-center">
                        <h4 class="title" style=" margin-top: 50px; color: white;">Pelatihan dan Workshop</h4>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white; font-size: 17px;">
                            Menyelenggarakan pelatihan bagi mahasiswa dan petani mengenai penggunaan teknologi IoT dalam pertanian.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mb-4">
                <div class="single-table" style="height:100%; background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); font-family: 'Poppins', sans-serif;" data-wow-delay=".4s">
                    <div class="text-center">
                        <h4 class="title" style=" margin-top: 50px; color: white;">Penelitian dan Pengembangan</h4>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white; font-size: 17px;">
                            Melakukan penelitian untuk mengembangkan calon varietas/kultivar unggul baru dan mengembangkan metode pertanian yang lebih inovatif.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mb-4">
                <div class="single-table" style="height:100%; background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); font-family: 'Poppins', sans-serif;" data-wow-delay=".6s">
                    <div class="text-center">
                        <h4 class="title" style=" margin-top: 50px; color: white;">Kerjasama dengan Industri</h4>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white; font-size: 17px;">
                            Bekerja sama dengan perusahaan teknologi dan lembaga penelitian untuk mengembangkan solusi inovatif dalam pertanian.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Program dan Kegiatan -->

<!-- Start Jenis - Jenis Tanaman -->

<section class="our-achievement section" style="background: linear-gradient(to left, #1C532A, #147814,#2E8B57, #000000); font-family: 'Poppins', sans-serif;">

    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="title text-center">

                    <h2><b>Jenis - Jenis Tanaman</b></h2>

                    <p style="font-size: 17px">Berikut adalah beberapa pencapaian kami dalam mengembangkan Smart Green House</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-12 text-center">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                        <div class="h-100">
                            <div class="card-body text-center" style="color: white;">
                                <h1 class="card-title" style="color: white;" data-target="300">0</h1>
                                <p class="card-text" style="font-size: 17px">Ekosistem Yang Bermuatan Serta Berkelanjutan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                        <div class="h-100">
                            <div class="card-body text-center" style="color: white;">
                                <h1 class="card-title" style="color: white;" data-target="300">0</h1>
                                <p class="card-text" style="font-size: 17px">Tanaman Yang Ditanam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 mb-4">
                        <div class="h-100">
                            <div class="card-body text-center" style="color: white;">
                                <h1 class="card-title" style="color: white;" data-target="100">0</h1>
                                <p class="card-text" style="font-size: 17px">Mahasiswa Berkontribusi Menanam Beragam Jenis Tanaman dalam Smart Green House</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Jenis - Jenis Tanaman -->
 
<!-- Galeri -->

<section class="our-achievement section" style="background-color:white; padding: 20px; font-family: 'Poppins', sans-serif; background: linear-gradient(to left,#A8D5E3, #fff,);">

    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-lg-12" data-aos="fade-down">
                <h2 class="text-black"><b>Galeri</b></h2>
            </div>
        </div>
        <div class="row gallery-content">
            <!-- Kolom 1 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">

                <img src="{{asset('asset/img/fotoberanda/ubi.JPG')}}" class="img-fluid shadow-1-strong rounded clickable-image" 
                     alt="Image 1" style="width: 500px; height: 200px; object-fit: cover;" 
                     data-description="Ubi adalah salah satu jenis umbi-umbian yang kaya akan nutrisi dan memiliki berbagai macam varietas, seperti ubi jalar, ubi kayu (singkong), dan ubi ungu." 
                     onclick="openModal(this)">
            </div>
            <!-- 2 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/fotoberanda/daunubi.jpeg')}}" class="img-fluid shadow-1-strong rounded mb-4 clickable-image" 
                     alt="Image 1" style="width: 500px; height: 200px; object-fit: cover;" 
                     data-description="ubi memiliki bentuk yang beragam tergantung jenis ubi, namun umumnya berbentuk menjari atau menyirip dengan permukaan yang halus. Warna daunnya bervariasi dari hijau muda hingga hijau tua, dan daun muda sering kali memiliki warna kemerahan pada beberapa jenis ubi, seperti ubi jalar." 
                     onclick="openModal(this)">
            </div>
            <!-- 3 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/fotoberanda/budeby1.jpeg')}}" class="img-fluid shadow-1-strong rounded mb-4 clickable-image" 
                     alt="Image 1" style="width: 500px; height: 200px; object-fit: cover;" 
                     data-description="ubi memiliki bentuk yang beragam tergantung jenis ubi, namun umumnya berbentuk menjari atau menyirip dengan permukaan yang halus. Warna daunnya bervariasi dari hijau muda hingga hijau tua, dan daun muda sering kali memiliki warna kemerahan pada beberapa jenis ubi, seperti ubi jalar." 
                     onclick="openModal(this)">

            </div>
            <!-- 4 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sgf4.jpg')}}" class="img-fluid shadow-1-strong rounded mb-4 clickable-image" 
                     alt="Image 1" style="width: 500px; height: 200px; object-fit: cover;" 
                     data-description="Bungan Tulup adalah jenis bunga yang tumbuh di daerah tropis. Ini memiliki kelopak yang sangat indah." 
                     onclick="openModal(this)">
            </div>
            <!-- 5 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sgf9.jpeg')}}" class="img-fluid shadow-1-strong rounded mb-4 clickable-image" 
                     alt="Image 1" style="width: 500px; height: 200px; object-fit: cover;" 
                     data-description="Bungan Tulup adalah jenis bunga yang tumbuh di daerah tropis. Ini memiliki kelopak yang sangat indah." 
                     onclick="openModal(this)">
            </div>
            <!-- 6 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sgf14.jpeg')}}" class="img-fluid shadow-1-strong rounded mb-4 clickable-image" 
                     alt="Image 1" style="width: 500px; height: 200px; object-fit: cover;" 
                     data-description="Bungan Tulup adalah jenis bunga yang tumbuh di daerah tropis. Ini memiliki kelopak yang sangat indah." 
                     onclick="openModal(this)">
            </div>
        </div>
    </div>
</section>
<!-- Overlay untuk gambar besar -->
<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
    <div id="modalDescription" class="description"></div>
</div>
<!-- END Galeri -->
 
@endsection

@section('css')
<!-- link fon -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
<!-- end link fon -->
<link rel="stylesheet" href="{{asset('asset/css/galeri.css')}}">
@endsection

@section('script')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('asset/js/beranda.js')}}"></script>
@endsection