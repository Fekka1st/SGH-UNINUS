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
                                    <a class="nav-link" href="#">Beranda</a>
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
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">Aplikasi Smart Green House </h1>
                        <h1 class="wow fadeInLeft" data-wow-delay=".6s">Universitas Islam Nusantara </h1>
                        <h2 class="wow fadeInLeft"
                            style="color: antiquewhite;font-size: 23px;line-height: 1.5em;margin-top: 20px;"
                            data-wow-delay=".8s">Mengintegrasikan Teknologi dan Alam untuk Meningkatkan Kualitas Hidup
                        </h2>
                        <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <a href="#about_us" class="btn">Tentang</a>
                            <a href="https://www.youtube.com/watch?v=917dBBxONh0" target="_blank"
                                class="glightbox video-button"><span class="video"><i
                                        class="lni lni-play"></i></span><span class="text">Video Green House</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="https://img.freepik.com/free-photo/farm-workers-collegues-overseeing-organic-sustainable-eco-friendly-bio-green-lettuce-plantation-sunny-weather-local-entrepreneurial-chemical-free-horticultural-greenhouse_482257-64596.jpg?uid=R151835259&ga=GA1.1.365448952.1727150183&semt=ais_hybrid"
                            alt="#">
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
                            <p style="margin: 20px 0;line-height: 2em;">Smart Green House adalah sebuah aplikasi yang
                                membantu meningkatkan kualitas hidup dengan mengintegrasikan teknologi dan alam. Kami
                                berfokus pada pengembangan sistem yang ramah lingkungan dan berkelanjutan.</p>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="alert alert-primary" role="alert">
                                        <span>100%</span> Ramah Lingkungan
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="alert alert-primary" role="alert">
                                        <span>90%</span> Berkelanjutan
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
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="info-image wow fadeInRight" data-wow-delay=".5s">
                            <img class="ss1" src="https://img.freepik.com/free-photo/young-man-apron-working-with-plants-greenery_171337-5944.jpg?t=st=1728876626~exp=1728880226~hmac=eade031fd75f2899cd182fbb74ffafb7432f17e9b46981129c83f159459b39f1&w=740" alt="#">
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
                <div class="title">
                    <h2>Pencapaian Kami</h2>
                    <p>Berikut adalah beberapa pencapaian kami dalam mengembangkan Smart Green House</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-10 mx-auto">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                            <h3 class="counter"><span id="secondo1" class="countup" cup-end="100">300</span>+</h3>
                            <p>Ekosistem Yang Bermuatan Serta Berkelanjutan</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-10 mx-auto">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                            <h3 class="counter"><span id="secondo2" class="countup" cup-end="500">300</span>+</h3>
                            <p>Tanaman Yang Ditanam</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-10 mx-auto">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                            <h3 class="counter"><span id="secondo3" class="countup" cup-end="1000">100</span>+</h3>
                            <p>Mahasiswa Yang Terlibat Untuk Membuat Smart Green House</p>
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
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Layanan Kami</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Berikut adalah beberapa layanan yang kami
                            tawarkan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-table wow fadeInUp" style="height:250px" data-wow-delay=".2s">
                        <div class="table-head">
                            <h4 class="title">Desain Rumah Hijau</h4>
                            <p>Kami menawarkan jasa desain rumah hijau yang sesuai dengan kebutuhan Anda</p>
                            <div class="button" style="margin-top:50px">
                                <a href="javascript:void(0)" class="btn">Desain Rumah Hijau</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-table wow fadeInUp" style="height:250px" data-wow-delay=".4s">
                        <div class="table-head">
                            <h2 class="title">Pembangunan Rumah Hijau</h2>
                            <p>Kami menawarkan jasa pembangunan rumah hijau yang berkualitas dan berkelanjutan</p>
                            <div class="button" style="margin-top:50px">
                                <a href="javascript:void(0)" class="btn">Pembangunan Rumah Hijau</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-table wow fadeInUp" style="height:250px" data-wow-delay=".6s">
                        <div class="table-head">
                            <h4 class="title">Pengelolaan Rumah Hijau</h4>
                            <p>Kami menawarkan jasa pengelolaan rumah hijau yang efektif dan efisien</p>
                            <div class="button" style="margin-top:50px">
                                <a href="javascript:void(0)" class="btn">Pengelolaan Rumah Hijau</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-table wow fadeInUp" style="height:250px" data-wow-delay=".8s">
                        <div class="table-head">
                            <h4 class="title">Konsultasi Rumah Hijau</h4>
                            <p>Kami menawarkan jasa konsultasi rumah hijau yang profesional dan berpengalaman</p>
                            <div class="button" style="margin-top:50px">
                                <a href="javascript:void(0)" class="btn">Konsultasi Rumah Hijau</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Call To Action Area -->
    <section class="section call-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="cta-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Gabung dengan Kami</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Bergabunglah dengan kami untuk meningkatkan
                            kualitas hidup Anda dengan mengintegrasikan teknologi dan alam</p>
                        <h3 style="color:#fff;font-size: 24px;" class="title">
                            Universitas Islam Nusantara
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    < <section id="portfolio" class="portfolio section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Gallery</h2>
</div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="https://i.pinimg.com/564x/63/4a/e1/634ae1c8635965a5392d1eaa6bdbac79.jpg"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="https://i.pinimg.com/564x/ad/e9/41/ade941b02e1d5c429a1ff265b7e72ce1.jpg"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="https://i.pinimg.com/564x/47/fe/0b/47fe0b9eb59f46a8be4964e537f45928.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="https://i.pinimg.com/564x/4d/87/84/4d8784fd44f2022c7394b5ed05d0d971.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="https://i.pinimg.com/736x/f0/85/7c/f0857c01960a595814a74e94337e885f.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

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
</body>

</html>
