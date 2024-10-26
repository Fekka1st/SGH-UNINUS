@extends('welcome')


@section('content')
<section id="home" class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12 mb-4">
                <!-- Margin bawah -->
                <div class="hero-content" data-aos="fade-right">
                    <h1 class="wow fadeInLeft" data-wow-delay=".4s">Aplikasi Smart Green House</h1>
                    <h1 class="wow fadeInLeft" data-wow-delay=".6s">Universitas Islam Nusantara</h1>
                    <h2 class="wow fadeInLeft"
                        style="color: antiquewhite; font-size: 23px; line-height: 1.5em; margin-top: 20px;"
                        data-wow-delay=".8s"> Mengintegrasikan Teknologi dan Alam untuk Meningkatkan Kualitas Hidup
                    </h2>
                    <div class="button wow fadeInLeft" data-wow-delay=".8s">
                        <a href="#about_us" class="btn">Tentang</a>
                        <a href="https://www.youtube.com/watch?v=917dBBxONh0" target="_blank"
                            class="glightbox video-button">
                            <span class="video">
                                <i class="lni lni-play"></i>
                            </span>
                            <span class="text">Video Green House</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 mb-4" data-aos="fade-left">
                <!-- Margin bawah -->
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://img.freepik.com/free-photo/young-man-apron-working-with-plants-greenery_171337-5944.jpg?t=st=1728876626~exp=1728880226~hmac=eade031fd75f2899cd182fbb74ffafb7432f17e9b46981129c83f159459b39f1&w=740"
                                class="d-block w-100" alt="Gambar 1" style="border-radius: 10px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.freepik.com/free-photo/female-gardener-standing-near-fatsia-japonica-plants-growing-greenhouse_23-2147918549.jpg?t=st=1728984765~exp=1728988365~hmac=509d464c51ab353f337be6071405b57386ed47550ae7b4db4e2886db2609c472&w=826"
                                class="d-block w-100" alt="Gambar 2" style="border-radius: 10px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.freepik.com/free-photo/long-shot-woman-inside-greenhouse_23-2148224053.jpg?t=st=1728984839~exp=1728988439~hmac=984c2526f3299e8f2e87c42add95ca7b40a20c07bdd4584fb5f04a3bdf20a619&w=826"
                                class="d-block w-100" alt="Gambar 3" style="border-radius: 10px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.freepik.com/free-photo/full-shot-people-holding-plants_23-2149098297.jpg?t=st=1728984887~exp=1728988487~hmac=8ac8ae38499cfe6183d17ee3d574afc2701bdb212278366e7796561f81b4f832&w=826"
                                class="d-block w-100" alt="Gambar 4" style="border-radius: 10px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<div id="about_us"></div>
<section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px">
    <div class="container">
        <div class="info-one">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="info-text wow fadeInLeft" data-aos="zoom-out-right">
                        <h2>Smart Green House</h2>
                        <p style="margin: 20px 0; line-height: 2em; text-align: justify;"> Smart Green House adalah
                            sebuah aplikasi yang membantu meningkatkan kualitas hidup dengan mengintegrasikan
                            teknologi dan alam. Kami berfokus pada pengembangan sistem yang ramah lingkungan dan
                            berkelanjutan. </p>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="alert alert-primary" style="background-color: #d6ffcf" role="alert">
                                    <span>100%</span> Ramah Lingkungan
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="alert alert-primary" style="background-color: #d6ffcf" role="alert">
                                    <span>80%</span> Tanpa Campur Tangan Manusia
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="alert alert-primary" style="background-color: #d6ffcf" role="alert">
                                    <span>95%</span> Efisiensi Energi
                                </div>
                            </div>
                        </div>
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
                                <img src="https://i.pinimg.com/736x/ce/bd/26/cebd26401693c6daeb87897136d24578.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://i.pinimg.com/564x/77/83/38/778338b052c5eddd6b07204daaa7553d.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://i.pinimg.com/564x/ed/c6/1a/edc61ad6dd0cf8125880a21c98e245f3.jpg"
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
<<<<<<< HEAD
<section class="our-achievement section" style="background-color: #365E32">
=======
<section class="our-achievement section" style="background-color: #1C532A; font-family: 'Book Antiqua', serif;">
>>>>>>> 4e099d46fc1a7cd47d718a25526202cd28f931e0
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="title text-center">
                    <h2>Jenis - Jenis Tanaman</h2>
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
<!-- Start Pricing Table Area -->
<section id="pricing" class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center" style="font-family: 'Book Antiqua', serif;">
                    <h2 data-aos="zoom-out-up" data-wow-delay=".4s">Media Yang Digunakan</h2>
                    <p data-aos="zoom-out-up" data-wow-delay=".6s">Berikut adalah beberapa media yang kami gunakan
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
                        <h4 class="title" style=" margin-top: 50px; color: white;">Smart Green House</h4>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white;">Smart Green House adalah sistem otomatis yang memantau dan
                            mengelola kondisi lingkungan rumah kaca menggunakan teknologi seperti sensor dan IoT.
                            Ini membantu meningkatkan efisiensi energi, air, dan hasil panen dengan pemantauan
                            real-time serta pengaturan otomatis untuk pertumbuhan tanaman yang optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in-down">
                <div class="single-table" style="height:100%; background-color: #1C532A;font-family: 'Times New Roman', Times, serif;" data-wow-delay=".4s">
                    <div class="text-center">
                        <h4 class="title" style=" margin-top: 50px; color: white;">Smart Hidroponik</h4>
                        <p style="text-align: justify;margin-right: 35px; margin-bottom: 35px; margin-left: 35px;color: white;">Smart Hidroponik adalah sistem pertanian tanpa tanah yang
                            menggunakan teknologi untuk mengontrol dan memantau kondisi pertumbuhan tanaman secara
                            otomatis, seperti pH, suhu, dan nutrisi, guna meningkatkan efisiensi dan hasil panen.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in-down">
                <div class="single-table" style="height:100%; background-color: #1C532A;font-family: 'Times New Roman', Times, serif;" data-wow-delay=".6s">
                    <div class="text-center">
                        <h4 class="title" style=" margin-top: 50px; color: white;">Smart Aeroponik</h4>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white;">Smart Aeroponik adalah sistem pertanian tanpa tanah yang
                            menyemprotkan kabut nutrisi langsung ke akar tanaman. Dengan teknologi otomatis, sistem
                            ini memantau dan mengontrol kelembapan, suhu, dan nutrisi untuk efisiensi pertumbuhan
                            tanaman yang optimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galeri -->
<section class="our-achievement section" style="background-color: #1C532A; padding: 20px; font-family: 'Times New Roman', Times, serif;">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-lg-12" data-aos="fade-down">
                <h2 class="text-white">Galeri</h2>
            </div>
        </div>
        <div class="row">
            <!-- Kolom 1 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sg1.jpg')}}" class="img-fluid shadow-1-strong rounded mb-4" alt="Image 1" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-right">
                <img src="{{asset('asset/img/sg2.jpg')}}" class="img-fluid shadow-1-strong rounded" alt="Image 2" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-right">
            </div>
            <!-- Kolom 2 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sg3.jpg')}}" class="img-fluid shadow-1-strong rounded mb-4" alt="Image 3" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-right">
                <img src="{{asset('asset/img/sg4.jpg')}}" class="img-fluid shadow-1-strong rounded" alt="Image 4" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-left">
            </div>
            <!-- Kolom 3 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column align-items-center">
                <img src="{{asset('asset/img/sg5.jpg')}}" class="img-fluid shadow-1-strong rounded mb-4" alt="Image 5" style="width: 500px; height: 200px; object-fit: cover;" data-aos="fade-left">
                <img src="{{asset('asset/img/sg6.jpg')}}" class="img-fluid shadow-1-strong rounded" alt="Image 6" style="width: 500px; height: 200px; object-fit: cover;"  data-aos="fade-left">
            </div>
        </div>
    </div>
</section>
<!-- END Galeri -->
</div>
@endsection

@section('css')

@endsection

@section('script')
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
