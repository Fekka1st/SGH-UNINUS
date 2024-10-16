<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" integrity="sha512-eMxdaSf5XW3ZW1wZCrWItO2jZ7A9FhuZfjVdztr7ZsKNOmt6TUMTQgfpNoVRyfPE5S9BC0A4suXzsGSrAOWcoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.css" integrity="sha512-iQ3H4A+iyBTP8M4ypX5PrTt2S+G1zmRjf0k0uOASKlFHysV8TL9ZoQyVwPss0D12IBTMoDEHA8+bg8a1viS9Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}" />
    <title>Smart Green House</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://storage.nu.or.id/storage/post/16_9/mid/logo-baru-uninus-news18112023_1700288683.webp" />
    <style>
     @keyframes slideUp {
          from {
                opacity: 0;
                transform: translateY(50px);
                }
           to {
                opacity: 1;
                transform: translateY(0);
               }
          }

          .animate-slide-up {
                     animation: slideUp 1.5s ease-in-out;
                }

    </style>

  </head>
  <body>
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
                <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li class="nav-item">
                          <a href="earsip/laman/tim">Smart Green House</a>
                        </li>
                        <li class="nav-item">
                          <a href="earsip/laman/wilayah-kerja"></a>Smart Hidroponik
                        </li>
                        <li class="nav-item">
                          <a href="earsip/laman/wilayah-kerja"></a>Smart Aeroponik
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <!-- Authenticated User - Dashboard Link --> @auth <div class="button add-list-button">
                    <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                  </div> @endauth
                  <!-- Guest User - Login Button --> @guest <div class="button add-list-button">
                    <a href="{{ route('login') }}" class="btn">Login</a>
                  </div> @endguest
                </div>
                <!-- /.navbar-collapse -->
              </nav>
              <!-- /.navbar -->
            </div>
            <!-- /.nav-inner -->
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </header>
    <section class="hero-area d-flex align-items-center justify-content-center" style="background-image: url('https://img.freepik.com/free-photo/medium-shot-smiley-people-greenhouse_23-2149098324.jpg?t=st=1728985054~exp=1728988654~hmac=fa5ad69cec329563af5412fcd288616024efd630000dbf62a88cd2418cf2ab78&w=826'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="text-white animate-slide-up">
            <b>TENTANG KAMI</b>
          </h2>
        </div>
      </div>
    </div>
    </section>
    
    <section>
      <div class="container">
        <div class="col-12">
          <div class="row"></div>
        </div>
      </div>
    </section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img 
                    src="https://img.freepik.com/free-photo/medium-shot-smiley-people-greenhouse_23-2149098324.jpg?t=st=1728985054~exp=1728988654~hmac=fa5ad69cec329563af5412fcd288616024efd630000dbf62a88cd2418cf2ab78&w=826" 
                    alt="Gambar Smart Green House" 
                    class="img-fluid rounded"
                >
                <!-- Ganti dengan URL gambar Anda -->
            </div>
            <div class="col-md-6" > 
                <div class="card" style="background-color: #228B22;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">Penjelasan</h5>
                        <p class="card-title mt-3"  style="color: white; text-align: justify" >
                    Smart Green House adalah sebuah aplikasi inovatif yang bertujuan untuk mengintegrasikan teknologi
                    dengan pertanian berkelanjutan. Kami berkomitmen untuk menyediakan solusi yang ramah lingkungan dan
                    efisien bagi para petani dan penghobi tanaman. Melalui penggunaan teknologi canggih, kami membantu
                    meningkatkan kualitas hidup serta produktivitas tanaman secara lebih berkelanjutan.
                    </p>
                    <p style="color: white; text-align: justify">
                    Tim kami terdiri dari para ahli di bidang pertanian, teknologi informasi, dan lingkungan yang bekerja
                    sama untuk menciptakan sistem yang intuitif dan mudah digunakan. Kami percaya bahwa dengan memberikan akses
                    kepada pengguna untuk memantau dan mengelola kondisi tanaman mereka secara real-time, kami dapat membantu mereka
                    mencapai hasil yang lebih baik dan konsisten.
                </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <h1 class="text-center mb-4">Visi dan Misi</h1>
        <div class="row m-3" >
            <div class="card" style="background-color: #228B22;">
                <div class="containe my-5">
                    <div class="row">
                    <div class="col-md-6" style="color: white;">
                <h2>Visi</h2>
                <p>Menjadi perguruan tinggi Islam Ahlussunnah walJama'ah An-Nahdliyah yang unggul di tingkat nasional dan internasional tahun 2030.</p>
            </div>
            <div class="col-md-6" style="color: white;">
                <h2>Misi</h2>
                <p>Menyelenggarakan pendidikan, penelitian, dan pengabdian pada masyarakat yang unggul Mengintegrasikan dan mensyiarkan nilai-nilai Islam Ahlussunnah wal Jama'ah AnNahdliyah dalam kegiatan pendidika...</p>
            </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
     
      <!-- Start Footer Top -->
      <footer class="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <!-- About Section -->
              <div class="col-lg-6 col-md-6 col-12">
                <div class="single-footer f-about">
                  <div class="logo">
                    <a href="index.html">
                      <img src="{{asset('asset/img/logo.png')}}" alt="Logo">
                    </a>
                  </div>
                  <p>Smart Green House adalah sebuah aplikasi yang membantu meningkatkan kualitas hidup dengan mengintegrasikan teknologi dan alam.  Kami berfokus pada pengembangan sistem yang ramah lingkungan dan berkelanjutan.</p>
                  <ul class="social">
                    <li>
                      <a href="https://www.instagram.com/uninusbandung/" target="_blank">
                        <i class="lni lni-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com/@uninusbandung" target="_blank">
                        <i class="lni lni-youtube"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Contact Section -->
              <div class="col-lg-6 col-md-6 col-12">
                <div class="single-footer f-link">
                  <h3>Kontak</h3>
                  <p>Jl. Soekarno Hatta No.530, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat</p>
                  <p>
                    <i class="lni lni-phone"></i> (022) 21000229 <br>
                    <i class="lni lni-envelope"></i>
                    <a href="https://uninus.ac.id/" target="_blank">https://uninus.ac.id/</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.footer-top -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js" integrity="sha512-eMxdaSf5XW3ZW1wZCrWItO2jZ7A9FhuZfjVdztr7ZsKNOmt6TUMTQgfpNoVRyfPE5S9BC0A4suXzsGSrAOWcoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js" integrity="sha512-RBWI5Qf647bcVhqbEnRoL4KuUT+Liz+oG5jtF+HP05Oa5088M9G0GxG0uoHR9cyq35VbjahcI+Hd1xwY8E1/Kg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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