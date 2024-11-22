<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" integrity="sha512-eMxdaSf5XW3ZW1wZCrWItO2jZ7A9FhuZfjVdztr7ZsKNOmt6TUMTQgfpNoVRyfPE5S9BC0A4suXzsGSrAOWcoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.css" integrity="sha512-iQ3H4A+iyBTP8M4ypX5PrTt2S+G1zmRjf0k0uOASKlFHysV8TL9ZoQyVwPss0D12IBTMoDEHA8+bg8a1viS9Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}" />
    <title>Smart Green House</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://storage.nu.or.id/storage/post/16_9/mid/logo-baru-uninus-news18112023_1700288683.webp" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    @yield('css')
  </head>
  <body>
    <header class="header navbar-area" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="nav-inner">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                  <img src="{{asset('asset/img/logo.png')}}" alt="Logo">
                </a>
                <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="tentangkami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="timkinerja">Tim Kinerja</a>
                    </li>
                    {{-- <!-- Monitoring -->
                    <li class="nav-item">
                        <a class="dd-menu" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">Monitoring</a> <ul class="sub-menu collapse" id="submenu-1-3" style>
						<li class="nav-item m-2">
							<a href="/Monitoring_greenhouse">Smart Greenhouse</a>
                        </li>
					    <li class="nav-item m-2">
						    <a href="Monitoring_hydroponik">Smart Hydroponic</a>
						</li>
						<li class="nav-item m-2">
							<a href="Monitoring_aeroponik">Smart Aeroponic</a>
						</li>  --}}
                    </ul>
                </div>
                  @auth
                  <div class="button add-list-button">
                    <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                  </div>
                  @endauth
                  @guest
                  <div class="button add-list-button">
                    <a href="{{ route('login') }}" class="btn">Login</a>
                  </div>
                  @endguest
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header> @yield('content') <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-4" style="text-align: justify">
            <img src="{{asset('asset/img/logo.png')}}" alt="Logo" class="img img-fluid" style="margin-bottom: 9px; color:aliceblue;">
            <p class="text-justify" style="color:aliceblue;">Smart Green House Adalah Sebuah aplikasi yang membantu meningkatkan kualitas hidup dengan mengintegrasikan teknologi dan alam. Kami berfokus pada pengembangan sistem yang ramah lingkungan dan berkelanjutan </p>
          </div>
          <div class="col-sm-3 col-md-4 mt-5" style="text-align: justify; color:aliceblue;">
            <h6>Kontak</h6>
            <p class="text-justify mt-5 mb-2">Jl.Soekarno Hatta No.530, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat. </p>
            <p>
              <i class="fa-solid fa-phone"></i> (022) 21000229
            </p>
            <p>
              <i class="fa-solid fa-link"></i>
              <a href="https://uninus.ac.id/" style="color:aliceblue;">UNIVERSITAS ISLAM NUSANTARA</a>
            </p>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text" style="color:aliceblue;">Copyright &copy; 2024 All Rights Reserved by <a href="#" style="color:aliceblue;">Smart Green House</a>. </p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li>
                <a class="facebook" href="#">
                  <i class="fa-brands fa-facebook"></i>
                </a>
              </li>
              <li>
                <a class="twitter" href="#">
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>
              <li>
                <a class="instagram" href="#">
                  <i class="fa-brands fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js" integrity="sha512-RBWI5Qf647bcVhqbEnRoL4KuUT+Liz+oG5jtF+HP05Oa5088M9G0GxG0uoHR9cyq35VbjahcI+Hd1xwY8E1/Kg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script type="text/javascript">
      var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
      });
      cu.start();
    </script> --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    @yield('script')
  </body>
</html>
