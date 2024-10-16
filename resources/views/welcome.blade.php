<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
        integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css"
        integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"
        integrity="sha512-eMxdaSf5XW3ZW1wZCrWItO2jZ7A9FhuZfjVdztr7ZsKNOmt6TUMTQgfpNoVRyfPE5S9BC0A4suXzsGSrAOWcoQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.css"
        integrity="sha512-iQ3H4A+iyBTP8M4ypX5PrTt2S+G1zmRjf0k0uOASKlFHysV8TL9ZoQyVwPss0D12IBTMoDEHA8+bg8a1viS9Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}" />

    <title>Smart Green House</title>
    <link rel="shortcut icon" type="image/x-icon"
        href="https://storage.nu.or.id/storage/post/16_9/mid/logo-baru-uninus-news18112023_1700288683.webp" />
</head>

<body>
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
    <header class="header navbar-area bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Brand Logo -->
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('asset/img/logo.png')}}" alt="Logo">
                        </a>
                        <!-- Mobile Menu Toggler -->
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <!-- Navbar Links -->
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <!-- Beranda -->
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Beranda</a>
                                </li>
                                <!-- Tentang Kami -->
                                <li class="nav-item">
                                    <a class="nav-link" href="tentangkami">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="timkinerja">Tim Kinerja</a>
                                </li>
                                <!-- Monitoring -->
                                <li class="nav-item">
                                    <a class="dd-menu" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">Monitoring</a>
                                    <ul class="sub-menu collapse show" id="submenu-1-4" style>
                                        <li class="nav-item"><a href="earsip/laman/tim">Smart Green House</a></li>
                                        <li class="nav-item"><a href="earsip/laman/wilayah-kerja"></a>Smart Hidroponik</li>
                                        <li class="nav-item"><a href="earsip/laman/wilayah-kerja"></a>Smart Aeroponik</li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Authenticated User - Dashboard Link -->
                            @auth
                            <div class="button add-list-button">
                                <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                            </div>
                            @endauth

                            <!-- Guest User - Login Button -->
                            @guest
                            <div class="button add-list-button">
                                <a href="{{ route('login') }}" class="btn">Login</a>
                            </div>
                            @endguest
                        </div> <!-- /.navbar-collapse -->
                    </nav> <!-- /.navbar -->
                </div> <!-- /.nav-inner -->
            </div> <!-- /.col-lg-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</header>

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12 mb-4"> <!-- Margin bawah -->
                <div class="hero-content">
                    <h1 class="wow fadeInLeft" data-wow-delay=".4s">Aplikasi Smart Green House</h1>
                    <h1 class="wow fadeInLeft" data-wow-delay=".6s">Universitas Islam Nusantara</h1>
                    <h2 class="wow fadeInLeft" style="color: antiquewhite; font-size: 23px; line-height: 1.5em; margin-top: 20px;" data-wow-delay=".8s">
                        Mengintegrasikan Teknologi dan Alam untuk Meningkatkan Kualitas Hidup
                    </h2>
                    <div class="button wow fadeInLeft" data-wow-delay=".8s">
                        <a href="#about_us" class="btn">Tentang</a>
                        <a href="https://www.youtube.com/watch?v=917dBBxONh0" target="_blank" class="glightbox video-button">
                            <span class="video"><i class="lni lni-play"></i></span>
                            <span class="text">Video Green House</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 mb-4"> <!-- Margin bawah -->
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://img.freepik.com/free-photo/young-man-apron-working-with-plants-greenery_171337-5944.jpg?t=st=1728876626~exp=1728880226~hmac=eade031fd75f2899cd182fbb74ffafb7432f17e9b46981129c83f159459b39f1&w=740" class="d-block w-100" alt="Gambar 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.freepik.com/free-photo/female-gardener-standing-near-fatsia-japonica-plants-growing-greenhouse_23-2147918549.jpg?t=st=1728984765~exp=1728988365~hmac=509d464c51ab353f337be6071405b57386ed47550ae7b4db4e2886db2609c472&w=826" class="d-block w-100" alt="Gambar 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.freepik.com/free-photo/long-shot-woman-inside-greenhouse_23-2148224053.jpg?t=st=1728984839~exp=1728988439~hmac=984c2526f3299e8f2e87c42add95ca7b40a20c07bdd4584fb5f04a3bdf20a619&w=826" class="d-block w-100" alt="Gambar 3">
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.freepik.com/free-photo/full-shot-people-holding-plants_23-2149098297.jpg?t=st=1728984887~exp=1728988487~hmac=8ac8ae38499cfe6183d17ee3d574afc2701bdb212278366e7796561f81b4f832&w=826" class="d-block w-100" alt="Gambar 4">
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
    <section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px">
        <div class="container">
            <div class="info-one">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="info-text wow fadeInLeft" data-wow-delay=".3s">
                            <h2>Smart Green House</h2>
                            <p style="margin: 20px 0; line-height: 2em; text-align: justify;">
                                 Smart Green House adalah sebuah aplikasi yang membantu meningkatkan kualitas hidup dengan mengintegrasikan teknologi dan alam. Kami berfokus pada pengembangan sistem yang ramah lingkungan dan berkelanjutan.
                            </p>

                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="alert alert-primary" role="alert">
                                        <span>100%</span> Ramah Lingkungan
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="alert alert-primary" role="alert">
                                        <span>80%</span> Tanpa Campur Tangan Manusia
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="alert alert-primary" role="alert">
                                        <span>95%</span> Efisiensi Energi
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Kolom kiri untuk karosel -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.pinimg.com/736x/ce/bd/26/cebd26401693c6daeb87897136d24578.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.pinimg.com/564x/77/83/38/778338b052c5eddd6b07204daaa7553d.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.pinimg.com/564x/ed/c6/1a/edc61ad6dd0cf8125880a21c98e245f3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
    <section class="our-achievement section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="title text-center" >
                    <h2>Jenis - Jenis Tanaman</h2>
                    <p>Berikut adalah beberapa pencapaian kami dalam mengembangkan Smart Green House</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-12 text-center">
                <div class="row">
                    <div class="col-md-4 mb-4"> <!-- Menambah margin bawah -->
                        <div class="h-100"> <!-- Memastikan card mengisi ketinggian maksimal -->
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
                                <p class="card-text">Mahasiswa Yang Terlibat Untuk Membuat Smart Green House</p>
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
                <div class="section-title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Media Yang Digunakan</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Berikut adalah beberapa media yang kami gunakan untuk metode penanaman</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center"> <!-- Membuat grid lebih responsif -->
            <div class="col-lg-4 col-md-6 col-12 mb-4"> <!-- Menambah jarak bawah untuk mobile -->
                <div class="single-table wow fadeInUp" style="height:100%" data-wow-delay=".2s">
                    <div class="table-head text-center">
                        <h4 class="title">Smart Green House</h4>
                        <p style="text-align: justify;">Smart Green House adalah sistem otomatis yang memantau dan mengelola kondisi lingkungan rumah kaca menggunakan teknologi seperti sensor dan IoT. Ini membantu meningkatkan efisiensi energi, air, dan hasil panen dengan pemantauan real-time serta pengaturan otomatis untuk pertumbuhan tanaman yang optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="single-table wow fadeInUp" style="height:100%" data-wow-delay=".4s">
                    <div class="table-head text-center">
                        <h4 class="title">Smart Hidroponik</h4>
                        <p style="text-align: justify;">Smart Hidroponik adalah sistem pertanian tanpa tanah yang menggunakan teknologi untuk mengontrol dan memantau kondisi pertumbuhan tanaman secara otomatis, seperti pH, suhu, dan nutrisi, guna meningkatkan efisiensi dan hasil panen.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="single-table wow fadeInUp" style="height:100%" data-wow-delay=".6s">
                    <div class="table-head text-center">
                        <h4 class="title">Smart Aeroponik</h4>
                        <p style="text-align: justify;">Smart Aeroponik adalah sistem pertanian tanpa tanah yang menyemprotkan kabut nutrisi langsung ke akar tanaman. Dengan teknologi otomatis, sistem ini memantau dan mengontrol kelembapan, suhu, dan nutrisi untuk efisiensi pertumbuhan tanaman yang optimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!--/ End Pricing Table Area -->

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Gallery</h2>
</div><!-- End Section Title -->
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="{{asset('asset/img/sg1.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="{{asset('asset/img/sg2.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{asset('asset/img/sg3.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="{{asset('asset/img/sg4.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{asset('asset/img/sg5.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="{{asset('asset/img/sg6.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->

        </section><!-- /Portfolio Section -->

        </div>
        <!-- Start Footer Area -->
        <footer class="footer">
            <!-- Start Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row align-items-start">

                    </div>
                </div>

                <!-- Contact Section -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h3>Kontak</h3>
                        <p>Jl. Soekarno Hatta No.530, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat</p>
                        <p>
                            <i class="lni lni-phone"></i> (022) 21000229 <br>
                            <i class="lni lni-envelope"></i> <a href="https://uninus.ac.id/" target="_blank">https://uninus.ac.id/</a>
                        </p>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.footer-top -->
</footer>
    <!-- End Footer Top -->

    <!-- Start Footer Bottom -->
    <div class="footer-bot">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content text-center">
                        <p>Copyright © 2024 <a href="#">Smart Green House</a>, Universitas Islam Nusantara</p>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
    <!-- End Footer Bottom -->

</footer>


        <!--/ End Footer Area -->

        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-chevron-up"></i>
        </a>

        <!-- ========================= JS here ========================= -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
            integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"
            integrity="sha512-eMxdaSf5XW3ZW1wZCrWItO2jZ7A9FhuZfjVdztr7ZsKNOmt6TUMTQgfpNoVRyfPE5S9BC0A4suXzsGSrAOWcoQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js"
            integrity="sha512-RBWI5Qf647bcVhqbEnRoL4KuUT+Liz+oG5jtF+HP05Oa5088M9G0GxG0uoHR9cyq35VbjahcI+Hd1xwY8E1/Kg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            //====== counter up
            var cu = new counterUp({
                start: 0,
                duration: 2000,
                intvalues: true,
                interval: 100,
                append: " ",
            });
            cu.start();

        </script>

<script>
        // Get all elements with class 'card-title'
        const countElements = document.querySelectorAll('.card-title');

        // Function to animate the count for each element
        countElements.forEach((element) => {
            let count = 0;
            const targetCount = parseInt(element.getAttribute('data-target')); // Get the target count from data-target attribute
            const interval = setInterval(() => {
                count++;
                element.textContent = count.toString();

                // Stop the interval when the count reaches the target count
                if (count >= targetCount) {
                    clearInterval(interval); // Stop the interval for this element
                }
            }, targetCount === 100 ? 30 : 10); // Faster for 300, slower for 100
        });
    </script>
</body>

</html>
