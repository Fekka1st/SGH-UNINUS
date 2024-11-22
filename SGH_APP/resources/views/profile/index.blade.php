@extends('layout.master')

@section('title', 'Profile')

@section('css')
<style>
    .full-height {
        height: calc(100vh - 100px);
    }
    .img-preview {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 10px;
    }
</style>
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
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center full-height">
          <div class="col-md-6 col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img id="profileImage" class="img-preview" src="{{Auth()->user()->foto_profile}}" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">Edit Profile</h3>
                <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data"> @csrf <div class="form-group">
                    <label for="photo">Upload Foto</label>
                    <input type="file" name="foto" class="form-control-file" id="photoInput" accept="image/*" onchange="previewImage(event)">
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{Auth()->user()->name}}" class="form-control" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{Auth()->user()->email}}" class="form-control" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <p class="text-danger">*its opsional</p>
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="Create New Password" id="passwordInput">
                      <div class="input-group-append">
                        <button type="button" class="btn btn-secondary" id="togglePassword" tabindex="-1">
                          <i class="fas fa-eye" id="toggleIcon"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">
                    <b>Save</b>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('passwordInput');
        const togglePassword = document.getElementById('togglePassword');
        const toggleIcon = document.getElementById('toggleIcon');
        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            toggleIcon.classList.toggle('fa-eye-slash');
            toggleIcon.classList.toggle('fa-eye');
        });
    });
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
