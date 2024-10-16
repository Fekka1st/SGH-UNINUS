@extends('welcome')


@section('content')
<section class="hero-area " style="background-color: #1C532A">
    <div class="container">
        <div class="row align-items-center">
            <div class="brand_color">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div style="text-align: center;">
                                <h2 style="color: white;">
                                    <b>Tim Kinerja</b>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px">
    <div class="container">
      <div class="info-one">
        <div class="row align-items-center">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="row">
              <div class="info-text wow fadeInLeft" data-wow-delay=".3s">
                <h2>Team Support</h2>
                <p style="margin: 20px 0;line-height: 2em;">Tim Kinerja adalah sekelompok individu yang dibentuk dalam suatu organisasi untuk memantau, mengevaluasi, dan meningkatkan kinerja organisasi atau bagian tertentu dari perusahaan. Fungsi utama tim ini adalah memastikan bahwa tujuan strategis dan operasional dapat tercapai dengan optimal. Berikut adalah beberapa komponen dan fungsi utama dalam isi dari tim kinerja.</p>
                <div class="row">

                    <div class="container mt-5">
                      <div class="row text-center">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Kotak Deskripsi Tim</title>

                            <!-- Bootstrap CSS -->
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

                            <style>
                                body {
                                    background-color: #f8f9fa;
                                    font-family: 'Arial', sans-serif;
                                }

                                .alert {
                                    text-align: center;
                                    padding: 20px;
                                    cursor: pointer;
                                    transition: transform 0.3s ease-in-out;
                                    width: 100%;
                                }

                                .alert:hover {
                                    transform: scale(1.05);
                                }

                                /* Kotak deskripsi */
                                .description {
                                    display: none;
                                    background-color: #e9ecef;
                                    border-radius: 10px;
                                    padding: 20px;
                                    font-size: 15px;
                                    color: #333;
                                    text-align: left;
                                    max-height: 0;
                                    overflow: hidden;
                                    transition: max-height 0.6s ease, opacity 0.6s ease;
                                    opacity: 0;
                                }

                                .description.show {
                                    display: block;
                                    max-height: 600px;
                                    opacity: 1;
                                }

                                .user-item {
                                    display: flex;
                                    align-items: center;
                                    margin-bottom: 15px;
                                    transition: opacity 0.4s ease-in-out;
                                }

                                .user-item img {
                                    width: 50px;
                                    height: 50px;
                                    border-radius: 50%;
                                    margin-right: 15px;
                                    object-fit: cover;
                                }

                                /* Responsif: Tampilan layar lebih besar */
                                @media (min-width: 768px) {
                                    .description {
                                        font-size: 16px;
                                        line-height: 1.6;
                                    }

                                    .user-item {
                                        margin-bottom: 20px;
                                    }
                                }

                                .container {
                                    max-width: 900px;
                                    margin: auto;
                                }
                            </style>
                        </head>

                        <body>
                            <div class="container mt-5">
                                <div class="row text-center">

                                    <!-- Dosen -->
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-dosen')">
                                            <strong>Dosen</strong>
                                        </div>
                                        <div id="desc-dosen" class="description">
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Dr. Siti Aminah">
                                                <span>Ir. Lilis Irmawatie, M.M.Pd.</span>
                                            </div>
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Prof. Budi Santoso">
                                                <span>GANIS SANHAJI, S.Si, M..Sc.</span>
                                            </div>
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Ir. Ardiansyah, M.T.">
                                                <span>GALIH, S.T., M.KOM.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mahasiswa -->
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-mahasiswa')">
                                            <strong>Mahasiswa</strong>
                                        </div>
                                        <div id="desc-mahasiswa" class="description">
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Prof. Joko Prasetyo">
                                                <span>Imam Ramadhan</span>
                                            </div>
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Dr. Rina Kusuma">
                                                <span>Herlan</span>
                                            </div>
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Miko Nugraha, S.T., M.Eng.">
                                                <span>Boyke Adam</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Vendor Technology -->
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-vendor')">
                                            <strong>Vendor Technology</strong>
                                        </div>
                                        <div id="desc-vendor" class="description">
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Andi Kurniawan, M.Kom.">
                                                <span>Hamdi Sholahudin</span>
                                            </div>
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Dr. Lala Sari, M.T.I.">
                                                <span>Ferry Aditya Herman</span>
                                            </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>

            </div>

            </div>
          </div>
        </div>
      </div>
  </section>
@endsection

@section('css')

@endsection

@section('script')
 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleDescription(id) {
            const selectedDesc = document.getElementById(id);
            const isCurrentlyShown = selectedDesc.classList.contains('show');

            // Tutup semua deskripsi yang terbuka
            const descriptions = document.querySelectorAll('.description');
            descriptions.forEach(desc => desc.classList.remove('show'));

            // Buka deskripsi yang dipilih jika belum terbuka
            if (!isCurrentlyShown) {
                selectedDesc.classList.add('show');
            }
        }
    </script>
@endsection
