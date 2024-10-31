@extends('welcome')

@section('content')
<section id="home" class="hero-area">
    <div class="container" style="font-family: 'Times New Roman', Times, serif;">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12 mb-4">
                <!-- Margin bawah -->
                <div class="hero-content" data-aos="fade-right">
                    <h1 class="wow fadeInLeft" data-wow-delay=".4s"><i>Smart Greenhouse</i> Berbasis <i>IoT</i> di Fakultas Pertanian Uninus</h1>
                    <p class="wow fadeInLeft"
                        style="color: white; line-height: 1.5em; margin-top: 15px; font-size: 14px;  text-align: justify;"
                        data-wow-delay=".8s"> Selamat datang di <i>Smart Greenhouse</i> Fakultas Pertanian Universitas Islam Nusantara (Uninus). Kami berkomitmen untuk menerapkan teknologi terbaru dalam bidang pertanian untuk meningkatkan efisiensi dan produktivitas tanaman. Smart Greenhouse dilengkapi dengan sistem <i>Internet of Things</i> (IoT) yang dikembangkan oleh Fakultas Teknik Uninus. Dengan smart greenhouse kami berkomitmen untuk menciptakan masa depan pertanian yang lebih baik, berkelanjutan, dan ramah lingkungan. 
                    </p>
                    <div class="button wow fadeInLeft" data-wow-delay=".8s">
                        <a href="#about_us" class="btn text-white bg-success">Tentang</a>
                        <a href="https://www.youtube.com/watch?v=917dBBxONh0" target="_blank"
                            class="glightbox video-button">
                            <span class="video bg-success">
                            <i class="lni lni-play text-white"></i>
                            </span>
                            <span class="text-white m-3"><B>Video Green House</B></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 mb-4" data-aos="fade-left">
                <!-- Margin bawah -->
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
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
<!-- End Hero Area -->

<div id="about_us"></div>
<!-- Start Features Area -->
<section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px; font-family: 'Book Antiqua', serif;">
    <div class="container">
        <div class="info-one">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="info-text wow fadeInLeft" data-aos="zoom-out-right">

                        <h2><b>Keunggulan</b> <i><b>Smart Greenhouse</b></i></h2>
                        <p style="margin: 20px 0; line-height: 2em; text-align: justify; color: black; font-size: 14px"> 
                        <i>Smart Greenhouse</i> kami dirancang untuk menanggapi kebutuhan pertanian modern dengan fokus pada keberlanjutan dan efisiensi. Dengan sistem berbasis <i>IoT</i>, kami mampu mengurangi pemakaian berbasis sumber daya seperti air dan energi, serta meningkatkan produktivitas tanaman. Sistem hidroponik dan aeroponik yang kami terapkan di dalam <i>smart greenhouse</i> memungkinkan penanaman tanpa menggunakan tanah, sehingga lebih ramah lingkungan dan efektif dalam ruang terbatas. Ini menjadikan model pertanian kami sangat cocok untuk diterapkan di daerah perkotaan atau wilayah dengan lahan yang terbatas. Selain itu, proyek ini berfungsi sebagai pusat penelitian dan pengembangan bagi mahasiswa dan peneliti yang tertarik pada bidang pertanian modern. Data yang dikumpulkan dari sensor <i>IoT</i> juga digunakan dalam penelitian untuk terus memperbaiki sistem budidaya dan memahami lebih baik faktor-faktor yang mempengaruhi pertumbuhan tanaman.
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
                        <div class="carousel-inner">
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
<!-- End Features Area -->

<!-- Start Achievement Area -->
<section id="pricing" class="pricing-table section" style="background-color: #1C532A;">
    <div class="container">
    <div class="row">
            <div class="col-12">
                <div class="text-center" style="color: white;">

                    <h2 style="color: white; font-family: 'Open Sans', sans-serif;"><b>Smart Greenhouse</b></h2>

                    <p>Berikut adalah beberapa Fasilitas Greenhouse yang kami gunakan untuk metode penanaman</p>
                </div>
            </div>
        </div>

        <div id="facilityCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background-color: #F0F0F0;">
                                <div class="text-center">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;;">Sistem Pemantauan Lingkungan</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black;">
                                        Memanfaatkan sensor canggih untuk mengukur dan mengendalikan suhu, kelembapan, dan pencahayaan secara otomatis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background-color: #F0F0F0;">
                                <div class="text-center">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;">Automasi Irigasi</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black;">
                                        Sistem irigasi yang terintegrasi dengan sensor kelembapan tanah, memungkinkan penyiraman yang tepat waktu dan sesuai kebutuhan tanaman.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background-color: #F0F0F0;">
                                <div class="text-center">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;">Data Analitik</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black;">
                                        Pengolahan data untuk menganalisis pertumbuhan tanaman dan mengoptimalkan kondisi lingkungan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background-color: #F0F0F0;">
                                <div class="text-center">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;">Sistem Hidroponik</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black;">
                                        Dipantau dan dikendalikan secara otomatis, memastikan tanaman mendapatkan nutrisi yang tepat dalam jumlah yang sesuai.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div class="single-table" style="height: 100%; background-color: #F0F0F0;">
                                <div class="text-center">
                                    <h4 class="title" style="margin-top: 50px; color: #228B22;">Sistem Aeroponik</h4>
                                    <p style="text-align: justify; margin: 0 35px 35px; color: black;">
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
<!-- End Achievement Area -->

<!-- Start Pricing Table Area -->
<section id="pricing" class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center" style="font-family: 'Book Antiqua', serif;">

                    <h2 data-aos="zoom-out-up" data-wow-delay=".4s"><b>Program dan Kegiatan</b></h2>
                    <p data-aos="zoom-out-up" data-wow-delay=".6s">Berikut adalah beberapa Program dan Kegiatan yang kami gunakan
                        untuk metode penanaman</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="zoom-in-down">
            <!-- Membuat grid lebih responsif -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <!-- Menambah jarak bawah untuk mobile -->
                <div class="single-table" style="height:100%; background-color: #1C532A;font-family: 'Times New Roman', Times, serif; " data-wow-delay=".2s">
                    <div class="text-center">
                        <h4 class="title" style=" margin-top: 50px; color: white;">Pelatihan dan Workshop</h4>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white;">Menyelenggarakan pelatihan bagi mahasiswa dan petani mengenai penggunaan teknologi IoT dalam pertanian.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in-down">
                <div class="single-table" style="height:100%; background-color: #1C532A;font-family: 'Times New Roman', Times, serif;" data-wow-delay=".4s">
                    <div class="text-center">
                        <h4 class="title" style=" margin-top: 50px; color: white;">Penelitian dan Pengembangan</h4>
                        <p style="text-align: justify;margin-right: 35px; margin-bottom: 35px; margin-left: 35px;color: white;">Melakukan penelitian untuk mengembangkan calon varietas/kultivar unggul baru dan mengembangkan metode pertanian yang lebih inovatif.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in-down">
                <div class="single-table" style="height:100%; background-color: #1C532A;font-family: 'Times New Roman', Times, serif;" data-wow-delay=".6s">
                    <div class="text-center">
                        <h4 class="title" style=" margin-top: 50px; color: white;">Kerjasama dengan Industri</h4>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white;">Bekerja sama dengan perusahaan teknologi dan lembaga penelitian untuk mengembangkan solusi inovatif dalam pertanian.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Table Area -->

<!-- Start Achievement Area -->
<section class="our-achievement section" style="background-color: #1C532A; font-family: 'Book Antiqua', serif;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="title text-center">

                    <h2><b>Jenis - Jenis Tanaman</b></h2>

                    <p>Berikut adalah beberapa pencapaian kami dalam mengembangkan Smart Green House</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-12 text-center">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <!-- Menambah margin bawah -->
                        <div class="h-100">
                            <!-- Memastikan card mengisi ketinggian maksimal -->
                            <div class="card-body text-center" style="color: white;">
                                <h1 class="card-title" style="color: white;" data-target="300">0</h1>
                                <p class="card-text">Ekosistem Yang Bermuatan Serta Berkelanjutan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="h-100">
                            <div class="card-body text-center" style="color: white;">
                                <h1 class="card-title" style="color: white;" data-target="300">0</h1>
                                <p class="card-text">Tanaman Yang Ditanam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="h-100">
                            <div class="card-body text-center" style="color: white;">
                                <h1 class="card-title" style="color: white;" data-target="100">0</h1>
                                <p class="card-text">Mahasiswa Berkontribusi Menanam Beragam Jenis Tanaman dalam Smart Green House</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Achievement Area -->
 
<!-- Galeri -->
<section class="our-achievement section" style="background-color:white; padding: 20px; font-family: 'Times New Roman', Times, serif;">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-lg-12" data-aos="fade-down">

                <h2 class="text-black"><B>Galeri</B></h2>

            </div>
        </div>
        <div class="row">
            <!-- Kolom 1 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sgf2.jpg')}}" class="img-fluid shadow-1-strong rounded mb-4" alt="Image 1" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-right">
                <img src="{{asset('asset/img/sgf1.jpg')}}" class="img-fluid shadow-1-strong rounded" alt="Image 2" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-right">
            </div>
            <!-- Kolom 2 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sgf6.jpg')}}" class="img-fluid shadow-1-strong rounded mb-4" alt="Image 3" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-right">
                <img src="{{asset('asset/img/sgf4.jpg')}}" class="img-fluid shadow-1-strong rounded" alt="Image 4" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-left">
            </div>
            <!-- Kolom 3 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sgf9.jpeg')}}" class="img-fluid shadow-1-strong rounded mb-4" alt="Image 5" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-left">
                <img src="{{asset('asset/img/sgf14.jpeg')}}" class="img-fluid shadow-1-strong rounded" alt="Image 6" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-left">
            </div>
        </div>
    </div>
</section>
<!-- END Galeri -->
</div>
@endsection

@section('css')
<!-- link fon -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
<!-- end link fon -->
@endsection

@section('script')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    const countElements = document.querySelectorAll('.card-title');
    countElements.forEach((element) => {
        let count = 0;
        const targetCount = parseInt(element.getAttribute('data-target'));
        const interval = setInterval(() => {
            count++;
            element.textContent = count.toString();
            if (count >= targetCount) {
                clearInterval(interval);
            }
        }, targetCount === 100 ? 30 : 10);
    });
</script>
@endsection