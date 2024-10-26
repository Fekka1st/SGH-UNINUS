@extends('welcome')

@section('content')
<!-- Hero Section -->
<section class="hero-area" style="background-image: url('https://i.pinimg.com/control/564x/61/8b/e4/618be4145724460b73d410a1b7a58523.jpg'); background-size: cover; background-position: center; padding: 30px 0; position: relative;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(28, 83, 42, 0.7);"></div>
    <div class="container text-center" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-2 text-left">
                <img src="https://i.pinimg.com/564x/74/ea/e9/74eae96448daecd195e98d0faa02606c.jpg" alt="Logo Kiri" style="max-width: 100px;">
            </div>
            <div class="col-8">
                <h2 class="text-white font-weight-bold" style="font-size: 3rem; margin: 0;">Tim Kinerja</h2>
            </div>
            <div class="col-2 text-right">
                <img src="https://i.pinimg.com/236x/20/0c/31/200c3102f139b46bd89ab7e02f1d08e2.jpg" alt="Logo Kanan" style="max-width: 100px;">
            </div>
        </div>
    </div>
</section>

<!-- Team Support Section with Photos -->
<section id="overview" class="app-info section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Team Support</h2>
        <p class="text-center mb-5" style="line-height: 1.8; font-size: 1rem;">
            Tim Kinerja adalah sekelompok individu yang dibentuk dalam suatu organisasi untuk memantau, mengevaluasi,
            dan meningkatkan kinerja organisasi. Berikut adalah beberapa komponen dan fungsi utama dalam isi dari tim
            kinerja.
        </p>

        <!-- Photo grid -->
        <div class="row text-center mt-5">
            <!-- Dosen Photos -->
            <div class="col-12 col-md-4 mb-3">
                <div class="box p-4 border" style="background-color: #f8f9fa;" onclick="toggleVisibility('dosenNames')">
                    <h5 class="font-weight-bold">Dosen</h5>
                    <hr>
                    <div id="dosenNames" class="d-none">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Galih, S.T., M.Kom." class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Ir. Lilis Irmawatie, M.M.Pd.</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Ganis Sanhaji, S.Si, M.Sc." class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Ganis Sanhaji, S.Si, M.Sc.</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Ir. Lilis Irmawatie, M.M.Pd." class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Galih, S.T., M.Kom.</p>
                            </div>
                            <!-- Add more Dosen as needed -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mahasiswa Photos -->
            <div class="col-12 col-md-4 mb-3">
                <div class="box p-4 border" style="background-color: #f8f9fa;" onclick="toggleVisibility('mahasiswaNames')">
                    <h5 class="font-weight-bold">Mahasiswa</h5>
                    <hr>
                    <div id="mahasiswaNames" class="d-none">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Imam Ramadhan" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Imam Ramadhan</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Herlan Syah" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Herlan Syah</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Decky Putra K" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Decky Putra K</p>
                            </div>
                            <!-- Add more Mahasiswa as needed -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vendor Technology Photos -->
            <div class="col-12 col-md-4 mb-3">
                <div class="box p-4 border" style="background-color: #f8f9fa;" onclick="toggleVisibility('vendorNames')">
                    <h5 class="font-weight-bold">Vendor Technology</h5>
                    <hr>
                    <div id="vendorNames" class="d-none">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Hamdi Sholahudin" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Hamdi Sholahudin S.T</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Ferry Aditya Herman" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Ferry Aditya Herman S.T</p>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://i.pinimg.com/236x/f8/19/e4/f819e4d4f5b6a266a71f8a5248003e39.jpg" alt="Pak Dadang" class="img-fluid rounded-circle mb-2" style="max-width: 100px;">
                                <p>Pak Dadang</p>
                            </div>
                            <!-- Add more vendors as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleVisibility(elementId) {
        const namesDiv = document.getElementById(elementId);
        namesDiv.classList.toggle('d-none');
    }
</script>
@endsection
