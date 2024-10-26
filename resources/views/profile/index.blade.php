@extends('layout.master')
@section('title','Profile')

@section('css')

@endsection

@section('content')
<div class="content-wrapper" style="min-height: 1416px;">

    <!-- Content Header -->
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

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center align-items-center full-height">
                <div class="col-md-6 col-lg-4">

                    <!-- Profile Card -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img id="profileImage" class="img-preview"
                                    src="{{Auth()->user()->foto_profile}}"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Edit Profile</h3>

                            <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="photo">Upload Foto</label>
                                    <input type="file" name="foto" class="form-control-file" id="photoInput"
                                        accept="image/*" onchange="previewImage(event)">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control"
                                        value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="" required>
                                </div>

                                <!-- Input Password dengan Toggle Visibility -->
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukkan Password Baru" id="passwordInput" required>
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-secondary"
                                                id="togglePassword" tabindex="-1">
                                                <i class="fas fa-eye" id="toggleIcon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block"><b>Save</b></button>
                            </form>
                        </div>
                    </div>



                </div>
            </div>

        </div>

</div>

</div>
</section>

</div>
@endsection

@section('script')
<!-- Script untuk Toggle Password Visibility -->
<script>
    // Pastikan elemen sudah tersedia sebelum event listener ditambahkan
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('passwordInput');
        const togglePassword = document.getElementById('togglePassword');
        const toggleIcon = document.getElementById('toggleIcon');

        // Event Listener untuk toggle visibility password
        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Ganti ikon sesuai dengan tipe input
            toggleIcon.classList.toggle('fa-eye-slash');
            toggleIcon.classList.toggle('fa-eye');
        });
    });

    // Preview Foto yang Diupload
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('profileImage');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
