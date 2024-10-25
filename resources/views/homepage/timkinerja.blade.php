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

            <div class="col-6 col-md-8 text-center">
                <h2 class="title-large mb-0 tim-kinerja-text">Tim Kinerja</h2>
            </div>

            <div class="col-3 col-md-2 text-right">
                <img src="{{ asset('asset/img/ftek.png') }}" alt="Logo Kanan" class="img-fluid logo-small">
            </div>
        </div>
      </div>
    </div>
</section>

<!-- Team Support Section -->
<section id="overview" class="app-info section" style="padding-top:70px; padding-bottom:70px;">
    <div class="container">
        <div class="info-one">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="info-text wow fadeInLeft text-center" data-wow-delay=".3s">
                        <h2>Team Support</h2>
                            <p style="margin: 20px 0; line-height: 2em;">
                                Tim Kinerja adalah sekelompok individu yang dibentuk dalam suatu organisasi untuk memantau, mengevaluasi, dan meningkatkan kinerja organisasi atau bagian tertentu dari perusahaan. Fungsi utama tim ini adalah memastikan bahwa tujuan strategis dan operasional dapat tercapai dengan optimal. Berikut adalah beberapa komponen dan fungsi utama dalam isi dari tim kinerja.
                                </p>
                            </div>
                        </div>
                    </div>

<!-- Team Categories -->
<div class="row text-center mt-5">
<!-- Dosen Section -->
<div class="col-12 col-md-4 mb-4">
    <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-dosen')">
        <strong>Dosen</strong>
            </div>
        <div id="desc-dosen" class="description">
            <strong>Fakultas Pertanian</strong>
                <div class="user-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Dosen">
                    <span>Ir. Lilis Irmawatie, M.M.Pd.</span>
                    <a href="https://www.linkedin.com/in/linkedinusername" target="_blank" class="linkedin-icon">
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
                    <strong>Fakultas Pertanian</strong>
                    <div class="user-item">
                        <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/original/user-icon-on-transparent-background-free-png.png" alt="Mahasiswa">
                        <span>Imam Ramadhan</span>
                        <a href="https://www.linkedin.com/in/imamramadhan" target="_blank" class="linkedin-icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>

                    <hr> <!-- Pemisah antara fakultas -->

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
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

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
        color: white; /* Teks putih */
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

    .user-item {
        display: flex;
        align-items: center;
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
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
        object-fit: cover;
    }

    .user-item span {
        font-size: 16px;
        font-weight: 600;
        color: #111827;
    }

    /* Ikon LinkedIn */
    .linkedin-icon {
        margin-left: auto;
        font-size: 18px;
        color: #0a66c2;
        transition: color 0.3s ease;
    }

    .linkedin-icon:hover {
        color: #004182;
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
    }

    /* Alert dan kontainer */
    .alert {
        background-color: white;
        color: white;
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

    /* Deskripsi kolom mahasiswa */
    .description {
        max-height: 400px;
        overflow-y: auto;
        padding: 10px;
        border: 1px solid #d1d5db;
        border-radius: 10px;
        background-color: white; /* putih */
        color: #111827; /* Teks hitam */
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

<script>
    function toggleDescription(id) {
        const selectedDesc = document.getElementById(id);

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

</script>


@endsection
