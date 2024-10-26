@extends('welcome')

<!-- link fon -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
<!-- end link fon -->

@section('content')
<section class="hero-area d-flex align-items-center justify-content-center" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="text-white animate-slide-up" data-aos="fade-down" style="font-family: 'Courier New', Courier, monospace;">
            <b>TENTANG KAMI</b>
          </h2>
        </div>
      </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-12">
            <div class="row"></div>
        </div>
    </div>
</section>
<div class="container my-5">
    <div class="row align-items-stretch"> <!-- align-items-stretch untuk memastikan tinggi sama -->
        <div class="col-md-6 d-flex mb-4 mb-md-0" data-aos="fade-down"> <!-- mb-4 untuk margin bawah di ponsel -->
            <img src="https://img.freepik.com/free-photo/medium-shot-smiley-people-greenhouse_23-2149098324.jpg?t=st=1728985054~exp=1728988654~hmac=fa5ad69cec329563af5412fcd288616024efd630000dbf62a88cd2418cf2ab78&w=826"
                alt="Gambar Smart Green House" class="img-fluid rounded" 
                style="width: 100%; height: auto; object-fit: cover; min-height: 300px;"> <!-- Menetapkan min-height agar gambar cukup tinggi -->
        </div>

        <div class="col-md-6 d-flex" data-aos="fade-down"> <!-- d-flex untuk mengatur tinggi fleksibel -->
            <div class="card flex-grow-1" style="background-color: #228B22;"> <!-- flex-grow-1 untuk memperluas card -->
                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%; font-family: 'Times New Roman', Times, serif;">
                    <h5 class="card-title" style="color:  white;">Penjelasan</h5>
                    <p class="card-title mt-3" style="color:  white; text-align: justify;">
                        Smart Green House adalah sebuah aplikasi inovatif yang bertujuan untuk mengintegrasikan
                        teknologi
                        dengan pertanian berkelanjutan. Kami berkomitmen untuk menyediakan solusi yang ramah lingkungan
                        dan
                        efisien bagi para petani dan penghobi tanaman. Melalui penggunaan teknologi canggih, kami
                        membantu
                        meningkatkan kualitas hidup serta produktivitas tanaman secara lebih berkelanjutan.
                    </p>
                    <p style="color:  white; text-align: justify;">
                        Tim kami terdiri dari para ahli di bidang pertanian, teknologi informasi, dan lingkungan yang
                        bekerja
                        sama untuk menciptakan sistem yang intuitif dan mudah digunakan. Kami percaya bahwa dengan
                        memberikan akses
                        kepada pengguna untuk memantau dan mengelola kondisi tanaman mereka secara real-time, kami dapat
                        membantu mereka
                        mencapai hasil yang lebih baik dan konsisten.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


//ini test
<div class="container mt-5">
    <h1 class="text-center mb-4"data-aos="fade-up" style="font-family: 'Book Antiqua', serif;">Visi dan Misi</h1>
    <div class="row m-3">
        <div style="color: white;">
            <div class="containe my-5">
                <div class="row">
                    <div class="col-md-6 text-center" style="color: white; font-family: 'Courier New', Courier, monospace;" data-aos="flip-left">
                        <h2>Visi</h2>
                        <p></p>
                    </div>
                    <div class="col-md-6 text-center" style="color: white; font-family: 'Courier New', Courier, monospace;"data-aos="flip-right">
                        <h2>Misi</h2>
                        <p></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection


@section('css')

@endsection

@section('script')

@endsection
