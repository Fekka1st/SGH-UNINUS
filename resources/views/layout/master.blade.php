<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SGH | @yield('title')</title>

    <link href="{{asset('utama/asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('utama/asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @yield('css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

</head>

<body id="page-top">
    @include('sweetalert::alert')

    <div id="wrapper">
        @include('layout.navbar')
        @yield('content')
    </div>
    </div>
    </div>
    @include('layout.footer')
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><b>Yakin ingin Keluar?</b></h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan Ya untuk mengakhiri Session</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Ya, Keluar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('utama/asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('utama/asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('utama/asset/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('utama/asset/vendor/chart.js/Chart.min.js')}}"></script>
    {{-- <script src="{{asset('utama/asset/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('utama/asset/js/demo/chart-pie-demo.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    @yield('script')
</body>

</html>
