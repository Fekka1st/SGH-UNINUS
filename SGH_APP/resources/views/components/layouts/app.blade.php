<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""> @stack('title')
    <link rel="shortcut icon" type="image/x-icon" href="https://storage.nu.or.id/storage/post/16_9/mid/logo-baru-uninus-news18112023_1700288683.webp" />
    <link href="{{asset('utama/asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('utama/asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> @stack('css') @livewireStyles
  </head>
  <body id="page-top">
    <div>
      <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon">
              <img class="img-fluid" width="50px" height="50px" src="{{asset('asset/img/icondas.png')}}" alt="">
            </div>
            <div class="sidebar-brand-text mx-3">
              <sup>SGH - UNINUS </sup>
            </div>
          </a>
          <hr class="sidebar-divider my-0">
          <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <hr class="sidebar-divider">
          <div class="sidebar-heading"> Menu </div>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-laptop-house"></i>
              <span>Device</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Device :</h6>
                <a class="collapse-item" href="/smartgreenhouse">Smart Greenhouse</a>
                <a class="collapse-item" href="/smarthydroponik">Smart Hydroponik</a>
                <a class="collapse-item" href="/smartaerophonik">Smart Aeroponik</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/report">
              <i class="fas fa-file-alt"></i>
              <span>Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="manajemen_user">
              <i class="fas fa-users"></i>
              <span>Manajemen User</span>
            </a>
          </li>
          <hr class="sidebar-divider d-none d-md-block">
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
          <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
              <div class="jam"> Time Today <h2 id="current-time" style="font-size: 18px">Time</h2>
              </div>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                    <img class="img-profile rounded-circle" src="{{auth()->user()->foto_profile}}">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/profile_akun">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout </a>
                  </div>
                </li>
              </ul>
            </nav>
            {{$slot}}
          </div>
        </div>
      </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SGH-UNINUS 2024</span>
          </div>
        </div>
      </footer>
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">
                <b>Yakin ingin Keluar?</b>
              </h3>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Tekan Ya untuk mengakhiri Session</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
              <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Ya, Keluar </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('utama/asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('utama/asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('utama/asset/js/sb-admin-2.min.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
         --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.6/dist/chart.umd.min.js"></script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
      let time = document.getElementById("current-time");
      setInterval(() => {
        let d = new Date();
        time.innerHTML = d.toLocaleTimeString();
      }, 1000)
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> @stack('script') @livewireScripts
  </body>
</html>
