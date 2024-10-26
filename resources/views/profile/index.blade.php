@extends('layout.master')
@section('title', 'Profile')

@section('css')
<!-- Tambahkan CSS khusus jika diperlukan -->
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 1416px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="https://www.shutterstock.com/image-vector/cute-panda-dabbing-pose-cartoon-260nw-2471990065.jpg" 
                                     alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">Nama Pengguna</h3>
                            <p class="text-muted text-center">Email Pengguna</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Nama</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Password</b> <a class="float-right">13,287</a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block"><b>Save</b></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>
@endsection
