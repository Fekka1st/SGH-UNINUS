@extends('welcome')

@section('content')


<!-- Hero Section -->
<section class="hero-area d-flex align-items-center justify-content-center" style="background-image: url('asset/img/uninusdrown.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-white animate-slide-up" data-aos="fade-down" style="font-family: 'Courier New', Courier, monospace;">
                    <b>TIM KINERJA</b>
                </h2>
            </div>
        </div>
    </div>
</section>


<!-- Team Support Section -->
<section id="overview" class="app-info section py-5">
    <div class="container my-5">
        <div class="row align-items-center shadow-lg rounded overflow-hidden">
            <!-- Kolom Gambar -->
            <div class="col-md-6 p-0" data-aos="zoom-in">
                <div class="image-container position-relative">
                    <img src="https://i.pinimg.com/564x/89/3a/ac/893aacb27919912d6820dd1488ff3886.jpg"
                        alt="Gambar Smart Green House"
                        class="img-fluid hover-zoom"
                        style="width: 100%; height: auto; object-fit: cover; min-height: 300px;">
                    <div class="overlay d-flex justify-content-center align-items-center">
                        <p class="overlay-text">Explore the Future of Agriculture</p>
                    </div>
                </div>
            </div>

            <!-- Kolom Konten -->
            <div class="col-md-6 d-flex" data-aos="fade-left">
                <div class="card flex-grow-1 border-0 p-4 bg-white">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title mb-4">
                                <i class="fas fa-leaf me-2"></i> TEAM SUPPORT
                            </h5>
                            <p class="card-text mb-3" style="text-align: justify;">
                                <strong>Smart Green House</strong> adalah proyek inovatif hasil kolaborasi lintas disiplin antara Fakultas Pertanian dan Fakultas Teknik Universitas Islam Nusantara (Uninus) yang mengintegrasikan teknologi dengan pertanian berkelanjutan.
                            </p>
                            <p class="card-text mb-3" style="text-align: justify;">
                                Dengan memanfaatkan teknologi canggih seperti sensor, sistem irigasi pintar, dan otomatisasi, kami membantu meningkatkan produktivitas tanaman dan memungkinkan pengguna memantau kondisi tanaman secara real-time.
                            </p>
                            <p class="card-text mb-3" style="text-align: justify;">
                                Proyek ini mengintegrasikan keahlian dari berbagai disiplin ilmu untuk menciptakan sistem pertanian yang efisien dan ramah lingkungan, memanfaatkan pengalaman dosen dari agronomi, teknologi informasi, dan rekayasa perangkat keras.
                            </p>
                            <p class="card-text mb-3" style="text-align: justify;">
                                Smart Green House dapat mengatur suhu, kelembapan, dan pencahayaan sesuai kebutuhan spesifik tanaman, meningkatkan hasil panen, serta mengurangi penggunaan air dan energi, yang penting untuk keberlanjutan lingkungan.
                            </p>
                            <p class="card-text mb-3" style="text-align: justify;">
                                Proyek ini juga melibatkan mahasiswa dalam penelitian dan pengembangan, memberikan mereka pengalaman praktis serta kesempatan untuk menerapkan teori dalam situasi dunia nyata.
                            </p>
                            <p class="card-text mb-3" style="text-align: justify;">
                                Dengan fokus pada inovasi, Smart Green House menjadi contoh bagaimana kolaborasi lintas disiplin dapat menghasilkan solusi yang berdampak, berkontribusi pada pertanian yang lebih berkelanjutan dan efisien.
                            </p>
                            <p class="card-text" style="text-align: justify;">
                                Diharapkan, Smart Green House dapat menjadi model yang diadopsi oleh institusi lain dan menginspirasi generasi mendatang untuk terus berinovasi dalam sektor pertanian.
                            </p>
                        </div>
                        <p class="mt-4 mb-0 text-end text-muted" style="font-size: 14px;">
                            <i class="fas fa-users me-1"></i> Tim Ahli Pertanian & Teknologi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</section>
<section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px">
    <div class="container">
      <div class="info-one">
        <div class="row align-items-center">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="row">
              <div class="info-text wow fadeInLeft" data-wow-delay=".3s">
                <div style="text-align: center;">
                <h2>Team Support</h2>
                <p style="margin: 20px 0;line-height: 2em;">Tim Kinerja adalah sekelompok individu yang dibentuk dalam suatu organisasi untuk memantau, mengevaluasi, dan meningkatkan kinerja organisasi atau bagian tertentu dari perusahaan. Fungsi utama tim ini adalah memastikan bahwa tujuan strategis dan operasional dapat tercapai dengan optimal. Berikut adalah beberapa komponen dan fungsi utama dalam isi dari tim kinerja.</p>
                <div class="row">
=======
>>>>>>> 4e099d46fc1a7cd47d718a25526202cd28f931e0

<!-- Team Categories -->
<div class="row text-center mt-5">
<!-- Dosen Section -->
        <div class="col-12 col-md-4 mb-4">
            <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-dosen')">
                <strong>Dosen</strong>
            </div>
            <div id="desc-dosen" class="description">
                <strong>Fakultas Pertanian</strong>

<<<<<<< HEAD
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
                                                <span>Ganis Sanhaji, S.Si, M..Sc.</span>
                                            </div>
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Ir. Ardiansyah, M.T.">
                                                <span>Galih, S.T., M.KOM.</span>
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
                                            <div class="user-item">
                                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Dr. Lala Sari, M.T.I.">
                                                <span>Pak Dadang</span>
                                            </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                      </div>
                    </div>


                  </div>
=======
                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Dosen">
                    <span>Ir. Lilis Irmawatie, M.M.Pd.</span>
                    <a href="https://www.linkedin.com/in/linkedinusername" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
>>>>>>> 4e099d46fc1a7cd47d718a25526202cd28f931e0
                </div>

                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                    <span>Dr. Ir. Yenny Muliani, M.P.</span>
                    <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>

                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                    <span>Dr. Ir. Hasanawi, MT., MP.</span>
                    <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>

                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                    <span>Dra. Ida Adviany, M.P.</span>
                    <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>

                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                    <span>Ir. Suli Suswana, M.Si.</span>
                    <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>

                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                    <span>Dr. Ir. Okke Rosmaladewi, M.M.Pd.</span>
                    <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>

                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                    <span>Ir. Erry Mustariani, M.M.</span>
                    <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>

                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                    <span>Dr. Debby Ustari, SP., MP.</span>
                    <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>

                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                    <span>Dr. Syayidah Nuriyah, SOd., MSI.</span>
                    <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>


<!-- Mahasiswa Section -->
<div class="col-12 col-md-4 mb-4">
    <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-mahasiswa')">
        <strong>Mahasiswa</strong>
    </div>

    <div id="desc-mahasiswa" class="description">

        <!-- Fakultas Pertanian -->
        <strong>Fakultas Pertanian</strong>
        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Imam Ramadhan</span>
            <a href="https://www.linkedin.com/in/imamramadhan" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <hr> <!-- Pemisah antara fakultas -->

        <!-- Fakultas Teknik -->
        <strong>Fakultas Teknik</strong>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Herlan Syah</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Julian</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Decky Putra K</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>M. Iqbal Rizaldi</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Marvin</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Defany Kuswandi</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Azis Maulana</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Indra Saputra</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Boyke Adam</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Aby Herdiansyah</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Anif Alifianto</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Zen Ahlil Baeri</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>M. Alviansyah</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Ipin Ahmad S</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Adam Panji S</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>M. Sya'dan M</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
            <span>Rizki Hendriawan</span>
            <a href="https://www.linkedin.com/in/boykeadam" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</div>




<!-- Vendor Technology Section -->
<div class="col-12 col-md-4 mb-4">
    <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-vendor')">
        <strong>Vendor</strong>
    </div>
    <div id="desc-vendor" class="description">
        <strong>Vendor IoT</strong>
        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Vendor">
            <span>Hamdi Sholahudin</span>
            <a href="https://www.linkedin.com/in/hamdi-sholahudin" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Vendor">
            <span>Ferry Aditya Herman</span>
            <a href="https://www.linkedin.com/in/ferry-aditya-herman" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <hr> <!-- Pemisah antara vendor -->

        <strong>Vendor Green House</strong>
        <div class="user-item">
            <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Vendor">
            <span>Pak Dadang</span>
            <a href="https://www.linkedin.com/in/pak-dadang" target="_blank" class="linkedin-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</div>


</section>


@Section ('css')
<!-- Bootstrap CSS -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .alert {
        text-align: center;
        padding: 15px 20px; /* menambah ruang di dalam tombol */
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
        width: 100%;
        background: linear-gradient(to bottom, #d3d3d3, #a9a9a9); /* gradasi abu-abu */
        color: black; /* warna teks hitam */
        cursor: pointer; /* mengubah kursor menjadi pointer saat hover */
        border-radius: 8px; /* sudut yang membulat */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* bayangan lembut */
        transition: background 0.3s, transform 0.2s; /* transisi halus */
    }

    .alert:hover {
        transform: scale(1.05);
        background: linear-gradient(to bottom, #a9a9a9, #d3d3d3); /* gradasi terbalik saat hover */
        transform: translateY(-2px); /* efek elevasi saat hover */
    }


        /* Kotak deskripsi */
    .description {
        display: none;
        background-color: white; /* putih */
        border-radius: 12px;
        padding: 20px;
        font-size: 15px;
        color: black; /* Teks */
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, opacity 0.4s ease;
        opacity: 0;
    }

    .description.show {
        display: block;
        max-height: 500px;
        overflow-y: auto;
        opacity: 1;
    }

    /* Daftar pengguna */
    .user-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

            /* Item profil pengguna */
    .user-item {
        display: flex;
        align-items: center; /* Memastikan semua elemen berada di tengah vertikal */
        justify-content: space-between; /* Memastikan nama pengguna dan ikon di sisi berlawanan */
        padding: 12px;
        border-radius: 10px;
        background-color: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        cursor: pointer;
    }

    .user-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
    }

    /* Gambar dan nama pengguna */
    .user-item img {
        width: 32px; /* Sesuaikan ukuran gambar dengan nama */
        height: 32px; /* Sesuaikan ukuran gambar dengan nama */
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px; /* Jarak antara gambar dan nama */
    }

    .user-item span {
        font-size: 15px;
        font-weight: 600;
        color: #111827;
        display: block; /* Pastikan span memisahkan baris dengan baik */
        text-align: left; /* Rata kiri untuk teks */
        margin-bottom: 5px; /* Jarak antara nama dan ikon */
    }

    /* Gaya ikon LinkedIn */
    .linkedin-icon {
        font-size: 20px;
        text-decoration: none;
        padding: 8px; /* Padding untuk ikon */
        color: #0077b5; /* Warna ikon LinkedIn */
    }

    .linkedin-icon:hover {
        color: #004182; /* Warna ikon saat hover */
    }

    /* Kontainer daftar pengguna dengan scroll */
    .user-list-container {
        width: 100%;
        height: 400px;
        overflow-y: auto;
        padding: 15px;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        background-color: #f9fafb;
        scroll-behavior: smooth; /* Efek transisi saat scroll */
    }

    /* Gaya scrollbar untuk WebKit */
    .user-list-container::-webkit-scrollbar {
        width: 8px; /* Lebar scrollbar */
        opacity: 0; /* Sembunyikan scrollbar secara default */
        transition: opacity 0.3s; /* Efek transisi saat menampilkan scrollbar */
    }

    /* Gaya untuk track scrollbar */
    .user-list-container::-webkit-scrollbar-track {
        background: #f1f1f1; /* Warna track */
        border-radius: 10px; /* Sudut membulat */
    }

    /* Gaya untuk thumb scrollbar */
    .user-list-container::-webkit-scrollbar-thumb {
        background: #888; /* Warna thumb */
        border-radius: 10px; /* Sudut membulat */
    }

    /* Gaya thumb saat hover */
    .user-list-container::-webkit-scrollbar-thumb:hover {
        background: #555; /* Warna thumb saat hover */
    }

    /* Tampilkan scrollbar saat menggulir */
    .user-list-container.scrolling::-webkit-scrollbar {
        opacity: 1; /* Tampilkan scrollbar saat menggulir */
    }


    /* Alert dan kontainer */
    .alert {
        background-color: white;
        color: black; /* Warna teks */
        padding: 12px;
        cursor: pointer;
        font-weight: bold;
        text-align: center;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .alert:hover {
        background-color: rgba(209, 213, 219, 0.82); /* Mengubah warna latar belakang saat hover */
    }

        /* Tampilan Slide Section Team Support */
    .image-container {
        position: relative;
        overflow: hidden;
    }

    .hover-zoom {
        transition: transform 0.5s ease-in-out;
    }

    .hover-zoom:hover {
        transform: scale(1.1); /* Efek zoom saat hover */
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Overlay hitam semi-transparan */
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .image-container:hover .overlay {
        opacity: 1; /* Munculkan overlay saat gambar dihover */
    }

    .overlay-text {
        color: white;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
    }

    .card-title i {
        font-size: 1.5rem;
        color: #3cb371;
    }

    .shadow-lg {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15); /* Bayangan lembut */
    }

    @media (max-width: 768px) {
        .row {
            flex-direction: column;
        }

        .col-md-6 {
            width: 100%;
        }

        .image-container img {
            min-height: 200px;
        }
    }

    /* Animasi Fade-in untuk Teks */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px); /* Muncul dari bawah */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Menuju posisi semula */
        }
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .title-large {
            font-size: 2.5rem; /* Ukuran teks lebih kecil untuk tablet */
        }
    }

    @media (max-width: 576px) {
        .title-large {
            font-size: 2rem; /* Ukuran teks lebih kecil untuk ponsel */
        }
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

    /* Atur ukuran logo kiri dan kanan agar seragam */
        .logo-small {
            max-width: 100px;
            height: auto;
        }

        /* Responsif pada teks "Tim Kinerja" */
        .tim-kinerja-text {
            color: white; /* Ubah warna teks menjadi putih */
            font-size: 24px; /* Ukuran font default */
            font-weight: bold; /* Buat teks lebih tebal */
        }

        @media (min-width: 768px) {
            .tim-kinerja-text {
                font-size: 32px; /* Ukuran font untuk layar menengah ke atas */
            }
        }

        @media (min-width: 992px) {
            .tim-kinerja-text {
                font-size: 40px; /* Ukuran font lebih besar untuk layar desktop */
            }
        }

        </style>

@section ('script')
<!-- Bootstrap JS -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
{{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}

<script>
    function toggleDescription(id) {
        const selectedDesc = document.getElementById(id);
        const userListContainer = document.querySelector('.user-list-container');

        // Tutup semua deskripsi yang terbuka
        const descriptions = document.querySelectorAll('.description');
        descriptions.forEach(desc => {
            if (desc !== selectedDesc) {
                desc.style.display = "none"; // Menyembunyikan deskripsi lain
                desc.classList.remove('show'); // Menghapus kelas 'show'
            }
        });

        // Toggle display untuk deskripsi yang dipilih
        if (selectedDesc.style.display === "block") {
            selectedDesc.style.display = "none"; // Menyembunyikan jika sudah terbuka
            selectedDesc.classList.remove('show'); // Menghapus kelas 'show'
        } else {
            selectedDesc.style.display = "block"; // Menampilkan jika tertutup
            selectedDesc.classList.add('show'); // Menambahkan kelas 'show'
        }
    }

        // Menambahkan event listener untuk menggulir
            userListContainer.addEventListener('scroll', () => {
            userListContainer.classList.add('scrolling');

        // Menghapus kelas 'scrolling' setelah 1 detik tidak ada aktivitas scroll
        clearTimeout(userListContainer.scrollTimeout);
        userListContainer.scrollTimeout = setTimeout(() => {
            userListContainer.classList.remove('scrolling');
        }, 1000); // Ganti 1000 dengan durasi dalam milidetik yang diinginkan
    });
</script>


@endsection
