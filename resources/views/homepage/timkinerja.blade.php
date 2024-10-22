@extends('welcome')

@section('content')
<!-- Hero Section -->
<section class="hero-area" style="
    background-image: url('https://assets.pikiran-rakyat.com/crop/40x35:1155x715/1200x675/photo/2024/05/19/3265301182.jpg');
    background-size: cover; background-position: center; padding: 200px 0; position: relative;">

    <div class="overlay" style="
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background-color: rgba(28, 83, 42, 0.7);"></div>

    <div class="container text-center position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-3 col-md-2 text-right">
                <img src="{{ asset('asset/img/ftannew.png') }}" alt="Logo Kiri" class="img-fluid logo-small">
            </div>

            <div class="col-6 col-md-8">
                <h2 class="title-large mb-0">Tim Kinerja</h2>
            </div>

            <div class="col-3 col-md-2 text-right">
                <img src="{{ asset('asset/img/ftek.png') }}" alt="Logo Kanan" class="img-fluid logo-small">
            </div>
        </div>
    </div>
</section>

<!-- Team Support Section -->
<section id="overview" class="app-info section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Team Support</h2>
        <p class=" mb-5" style="line-height: 1.8;text-align: justify">
            <strong style="color: black;">
                Tim Kinerja adalah sekelompok individu yang dibentuk dalam suatu organisasi untuk memantau,
                mengevaluasi, dan meningkatkan kinerja organisasi. Berikut adalah beberapa komponen dan fungsi utama
                dalam isi dari tim kinerja.
            </strong>
        </p>

        <!-- Team Categories -->
        <div class="row text-center mt-5">
            <!-- Dosen Section -->
            <div class="col-12 col-md-4 mb-4">
                <div class="box p-4 border bg-light" onclick="toggleVisibility('dosenNames')">
                    <h5 class="fw-bold">Dosen</h5>
                    <hr>
                    <div id="dosenNames" class="d-none">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg"
                                     alt="Ir. Lilis Irmawatie" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Ir. Lilis Irmawatie, M.M.Pd.</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg"
                                     alt="Ganis Sanhaji" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Ganis Sanhaji, S.Si, M.Sc.</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg"
                                     alt="Galih" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Galih, S.T., M.Kom.</p>
                            </div>
                            <!-- Add more Dosen as needed -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mahasiswa Section -->
            <div class="col-12 col-md-4 mb-4">
                <div class="box p-4 border bg-light" onclick="toggleVisibility('mahasiswaNames')">
                    <h5 class="fw-bold">Mahasiswa</h5>
                    <hr>
                    <div id="mahasiswaNames" class="d-none">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg"
                                     alt="Imam Ramadhan" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Imam Ramadhan</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg"
                                     alt="Herlan Syah" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Herlan Syah</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Decky Putra K" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Decky Putra K</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Imam Ramadhan" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Julian</p>
                            </div>
                                <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Herlan Syah" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>M. Iqbal Rizaldi</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Decky Putra K" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Marvin</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Decky Putra K" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Defany Kuswandi</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Imam Ramadhan" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Azis Maulana</p>
                            </div>
                                <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Herlan Syah" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Indra Saputra</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Decky Putra K" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Boyke Adam</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Decky Putra K" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Aby Herdiansyah</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Imam Ramadhan" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Anif Alifianto</p>
                            </div>
                                <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Herlan Syah" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Zen Ahlil Baeri</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Decky Putra K" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Rizki Hendriawan</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Decky Putra K" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Ipin Ahmad S</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Imam Ramadhan" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Adam Panji S</p>
                            </div>
                                <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Herlan Syah" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>M. Sya'dan M</p>
                            </div>
                            <!-- Add more Mahasiswa as needed -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vendor Technology Section -->
            <div class="col-12 col-md-4 mb-4">
                <div class="box p-4 border bg-light" onclick="toggleVisibility('vendorNames')">
                    <h5 class="fw-bold">Vendor Technology</h5>
                    <hr>
                    <div id="vendorNames" class="d-none">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg"
                                     alt="Hamdi Sholahudin" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Hamdi Sholahudin</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg"
                                     alt="Ferry Aditya Herman" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Ferry Aditya Herman</p>
                            </div>
                            <!-- Add more vendors as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section ('script')
<!-- JavaScript to Toggle Visibility -->
<script>
    function toggleVisibility(id) {
        const element = document.getElementById(id);
        element.classList.toggle('d-none');
    }
</script>
@endsection
