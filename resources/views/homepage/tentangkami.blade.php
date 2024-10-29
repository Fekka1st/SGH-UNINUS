@extends('welcome')

@section('content')
<section class="hero-area d-flex align-items-center justify-content-center" 
    style="background-image: url('https://i.pinimg.com/564x/cc/ac/fa/ccacfa4b58e8c1a30fc2662cb3c6c226.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;">
    <div class="container text-center">
        <h2 class="text-white display-4 animate-slide-up"><b>TENTANG KAMI</b></h2>
    </div>
</section>

<div class="container my-5">
    <div class="row justify-content-center"data-aos="fade-down">
        <div class="col-lg-10">
            <div class="card shadow-sm rounded-lg overflow-hidden">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="https://img.freepik.com/free-photo/medium-shot-smiley-people-greenhouse_23-2149098324.jpg?t=st=1728985054~exp=1728988654~hmac=fa5ad69cec329563af5412fcd288616024efd630000dbf62a88cd2418cf2ab78&w=826" 
                            alt="Smart Green House" class="img-fluid h-100" style="object-fit: cover;">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Sejarah Smart Greenhouse</h5>
                            <p class="card-text text-justify">
                                Smart Greenhouse berbasis IoT Fakultas Pertanian Uninus dimulai dari visi untuk memodernisasi praktik pertanian di Indonesia melalui teknologi canggih. Proyek ini didirikan pada tahun 2024 sebagai tanggapan terhadap tantangan global di bidang pertanian, seperti perubahan iklim, ketidakstabilan cuaca, dan kebutuhan akan efisiensi sumber daya.
                            </p>
                            <p class="card-text text-justify">
                                Kolaborasi antara agronomi dan teknik menghasilkan sistem yang memungkinkan pemantauan dan pengendalian lingkungan greenhouse secara otomatis dan real-time. Teknologi ini membantu memastikan pertumbuhan optimal tanaman sepanjang musim.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Start Table Fungsi Tujuan dan Manfaat -->
<section id="pricing" class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div  style="font-family: 'Book Antiqua', serif;">
                <h1 class="text-center mb-4"data-aos="flip-left">Fungsi, Tujuan, dan Manfaat</h1>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="zoom-in-down">
            <!-- Membuat grid lebih responsif -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <!-- Menambah jarak bawah untuk mobile -->
                <div class="single-table" style="height:100%; background-color: #1C532A;font-family: 'Times New Roman', Times, serif; " data-wow-delay=".2s">
                    <div class="text-center">
                        <h3 class="title" style=" margin-top: 50px; color: white;">Fungsi</h3>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white;">Smart Greenhouse berfungsi sebagai sistem pertanian terintegrasi yang memanfaatkan teknologi sensor dan otomatisasi untuk mengatur dan memantau berbagai parameter lingkungan, seperti suhu, kelembapan, pencahayaan, dan tingkat nutrisi. Sistem ini juga membantu petani mengurangi risiko kegagalan panen dan memastikan kualitas hasil pertanian yang optimal setiap saat.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in-down">
                <div class="single-table" style="height:100%; background-color: #1C532A;font-family: 'Times New Roman', Times, serif;" data-wow-delay=".4s">
                    <div class="text-center">
                        <h3 class="title" style=" margin-top: 50px; color: white;">Tujuan</h3>
                        <p style="text-align: justify;margin-right: 35px; margin-bottom: 35px; margin-left: 35px;color: white;">Tujuan utama pengembangan Smart Greenhouse adalah meningkatkan produktivitas pertanian modern melalui pemanfaatan data analitik dan teknologi IoT. Dengan adanya sistem yang cerdas ini, petani dapat lebih fokus pada kualitas, kuantitas, dan efektivitas pengelolaan lahan, sambil meminimalisir dampak negatif terhadap lingkungan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="zoom-in-down">
                <div class="single-table" style="height:100%; background-color: #1C532A;font-family: 'Times New Roman', Times, serif;" data-wow-delay=".6s">
                    <div class="text-center">
                        <h3 class="title" style=" margin-top: 50px; color: white;">Manfaat</h3>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white;">Penerapan Smart Greenhouse memberikan manfaat berupa penghematan air dan energi hingga 50%, serta pengurangan penggunaan pestisida berkat teknologi otomatisasi yang cerdas. Hal ini tidak hanya meningkatkan efisiensi produksi, tetapi juga memastikan pertanian yang lebih ramah lingkungan dan berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Table Fungsi Tujuan dan Manfaat -->

@endsection

@section('script')
<script>
    // Show/Hide scroll to top button
    window.onscroll = () => {
        scrollToTopBtn.style.display = (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) ? "block" : "none";
    };

    // Hover effects for scroll to top button
    scrollToTopBtn.addEventListener('mouseenter', () => {
        scrollToTopBtn.style.backgroundColor = '#1e7a1e';
    });
    scrollToTopBtn.addEventListener('mouseleave', () => {
        scrollToTopBtn.style.backgroundColor = '#228B22';
    });
</script>

<style>
    .hero-area {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
    }

    .hero-area h2 {
        font-size: 3rem;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .text-justify {
        text-align: justify;
    }

    .shadow-sm {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15) !important;
    }

    .card-body {
        padding: 20px;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .hero-area h2 {
            font-size: 2rem;
        }

        .card {
            margin-bottom: 20px;
        }

        .col-md-6 img {
            object-fit: cover;
            max-height: 300px;
        }

        .col-md-6, .col-lg-10 {
            padding: 10px;
        }

        .card-title {
            font-size: 1.3rem;
        }
    }

    .scrollToTop {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #228B22;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        display: none;
        z-index: 1000;
        transition: background-color 0.3s;
        font-size: 18px;
    }
</style>
@endsection