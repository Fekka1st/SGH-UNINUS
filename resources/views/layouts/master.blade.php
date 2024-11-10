<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SGH | {{ $title ?? 'Page Title' }}</title>

    <link href="{{asset('utama/asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('utama/asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('css')

</head>

<body id="page-top">
    {{$slot}}

    <script src="{{asset('utama/asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('utama/asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('utama/asset/js/sb-admin-2.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin = "anonymous" >

    </script>
    @stack('script')
</body>

</html>
