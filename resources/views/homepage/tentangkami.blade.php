@extends('welcome')

@section('content')

<section class="HERO-AREA d-flex align-items-center justify-content-center position-relative" style="background-image: url('asset/img/tambakdepanununis.png'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 90vh;">
  <div class="container position-relative" style="z-index: 2;">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="text-white animate-slide-up" data-aos="fade-down" style="z-index: 3; color: white; font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);">
          <b>TENTANG KAMI</b>
        </h2>
      </div>
    </div>
  </div>
</section>

<!-- Start Table Fungsi-->
<section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px; font-family: 'Book Antiqua', serif; background: linear-gradient(to left, #fff, #A8D5E3);margin-bottom: -100px;">
    <div class="container">
        <div class="info-one">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12 mb-4">
                        <img src="{{asset('asset/img/batu.jpeg')}}" 
                            alt="Smart Green House" class="img-fluid h-100" style="object-fit: cover;  width: 100%; height: 100%; border-radius: 5px">
                </div>
                <div class="col-lg-6 col-md-12 d-flex" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); border-radius: 10px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style=" font-family: 'Poppins', sans-serif; font-size: 30px; color:#fff">Sejarah Smart Greenhouse</h5>
                        <p class="text-justify" style="color: #fff;  font-family: 'Poppins', sans-serif; text-align: justify; font-size: 20px">
                            Smart Greenhouse berbasis IoT Fakultas Pertanian Uninus dimulai dari visi untuk memodernisasi praktik pertanian di Indonesia melalui teknologi canggih. Proyek ini didirikan pada tahun 2024 sebagai tanggapan terhadap tantangan global di bidang pertanian, seperti perubahan iklim, ketidakstabilan cuaca, dan kebutuhan akan efisiensi sumber daya.
                        </p>
                        <p><br></p>
                        <p class="text-justify" style="color: #fff; font-family: 'Poppins', sans-serif; text-align: justify; font-size: 20px;">
                        Kolaborasi antara agronomi dan teknik menghasilkan sistem yang memungkinkan pemantauan dan pengendalian lingkungan greenhouse secara otomatis dan real-time. Teknologi ini membantu memastikan pertumbuhan optimal tanaman sepanjang musim.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Table Fungsi-->
<!-- Start Table Fungsi Tujuan dan Manfaat -->
<section id="pricing" class="pricing-table section" style="background: linear-gradient(to left, #fff, #A8D5E3);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div  style="font-family: 'Book Antiqua', serif;">
                <h1 class="text-center mb-4"data-aos="flip-left" style="font-family: 'Poppins', sans-serif;">Fungsi, Tujuan dan Manfaat</h1>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="zoom-in-down">
            <div class="col-lg-4 col-md-12 col-12 mb-4">
                <div class="single-table" style="height:100%; background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); font-family: 'Poppins', sans-serif; " data-wow-delay=".2s">
                    <div class="text-center">
                        <h3 class="title" style=" margin-top: 50px; color: white; font-family: 'Poppins', sans-serif;">Fungsi</h3>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white; font-size: 17px;">Smart Greenhouse berfungsi sebagai sistem pertanian terintegrasi yang memanfaatkan teknologi sensor dan otomatisasi untuk mengatur dan memantau berbagai parameter lingkungan, seperti suhu, kelembapan, pencahayaan, dan tingkat nutrisi. Sistem ini juga membantu petani mengurangi risiko kegagalan panen dan memastikan kualitas hasil pertanian yang optimal setiap saat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mb-4" data-aos="zoom-in-down">
                <div class="single-table" style="height:100%; background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); font-family: 'Poppins', sans-serif;" data-wow-delay=".4s">
                    <div class="text-center">
                        <h3 class="title" style=" margin-top: 50px; color: white; font-family: 'Poppins', sans-serif;">Tujuan</h3>
                        <p style="text-align: justify;margin-right: 35px; margin-bottom: 35px; margin-left: 35px;color: white; font-size: 17px;">Tujuan utama pengembangan Smart Greenhouse adalah meningkatkan produktivitas pertanian modern melalui pemanfaatan data analitik dan teknologi IoT. Dengan adanya sistem yang cerdas ini, petani dapat lebih fokus pada kualitas, kuantitas, dan efektivitas pengelolaan lahan, sambil meminimalisir dampak negatif terhadap lingkungan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mb-4" data-aos="zoom-in-down">
                <div class="single-table" style="height:100%; background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); font-family: 'Poppins', sans-serif;" data-wow-delay=".6s">
                    <div class="text-center">
                        <h3 class="title" style=" margin-top: 50px; color: white; font-family: 'Times New Roman', Times, serif;">Manfaat</h3>
                        <p style="text-align: justify; margin-right: 35px; margin-bottom: 35px; margin-left: 35px; color: white; font-size: 17px;">Penerapan Smart Greenhouse memberikan manfaat berupa penghematan air dan energi hingga 50%, serta pengurangan penggunaan pestisida berkat teknologi otomatisasi yang cerdas. Hal ini tidak hanya meningkatkan efisiensi produksi, tetapi juga memastikan pertanian yang lebih ramah lingkungan dan berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Table Fungsi Tujuan dan Manfaat -->

@endsection

@section('css')

@endsection

@section('script')

@endsection