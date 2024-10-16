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
                                    <b>TENTANG KAMI</b>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
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
    <div class="row">
        <div class="col-md-6">
            <img src="https://img.freepik.com/free-photo/medium-shot-smiley-people-greenhouse_23-2149098324.jpg?t=st=1728985054~exp=1728988654~hmac=fa5ad69cec329563af5412fcd288616024efd630000dbf62a88cd2418cf2ab78&w=826"
                alt="Gambar Smart Green House" class="img-fluid rounded">
            <!-- Ganti dengan URL gambar Anda -->
        </div>
        <div class="col-md-6">
            <div class="card" style="background-color: #228B22;">
                <div class="card-body">
                    <h5 class="card-title" style="color: white;">Penjelasan</h5>
                    <p class="card-title mt-3" style="color: white; text-align: justify">
                        Smart Green House adalah sebuah aplikasi inovatif yang bertujuan untuk mengintegrasikan
                        teknologi
                        dengan pertanian berkelanjutan. Kami berkomitmen untuk menyediakan solusi yang ramah lingkungan
                        dan
                        efisien bagi para petani dan penghobi tanaman. Melalui penggunaan teknologi canggih, kami
                        membantu
                        meningkatkan kualitas hidup serta produktivitas tanaman secara lebih berkelanjutan.
                    </p>
                    <p style="color: white; text-align: justify">
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

<div class="container mt-5">
    <h1 class="text-center mb-4">Visi dan Misi</h1>
    <div class="row m-3">
        <div class="card" style="background-color: #228B22;">
            <div class="containe my-5">
                <div class="row">
                    <div class="col-md-6" style="color: white;">
                        <h2>Visi</h2>
                        <p>Menjadi perguruan tinggi Islam Ahlussunnah walJama'ah An-Nahdliyah yang unggul di tingkat
                            nasional dan internasional tahun 2030.</p>
                    </div>
                    <div class="col-md-6" style="color: white;">
                        <h2>Misi</h2>
                        <p>Menyelenggarakan pendidikan, penelitian, dan pengabdian pada masyarakat yang unggul
                            Mengintegrasikan dan mensyiarkan nilai-nilai Islam Ahlussunnah wal Jama'ah AnNahdliyah dalam
                            kegiatan pendidika...</p>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-lg-10 offset-lg-1">
                        <h3 class="mb-3">Tim Kami</h3>
                        <p>
                            Tim Smart Green House terdiri dari individu yang berpengalaman di bidang pertanian,
                            teknologi, dan bisnis.
                            Kami memiliki:
                        </p>
                        <ul>
                            <li><strong>Ahli Pertanian:</strong> Mengembangkan dan menyempurnakan algoritma untuk
                                meningkatkan hasil pertanian.</li>
                            <li><strong>Pengembang Perangkat Lunak:</strong> Membangun dan memelihara aplikasi yang
                                ramah pengguna.</li>
                            <li><strong>Desainer UI/UX:</strong> Menciptakan antarmuka yang intuitif untuk pengalaman
                                pengguna yang optimal.</li>
                            <li><strong>Staf Pemasaran:</strong> Mengedukasi pasar tentang manfaat dari penggunaan
                                teknologi dalam pertanian.</li>
                        </ul>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-10 offset-lg-1">
                        <h3 class="mb-3">Hubungi Kami</h3>
                        <p>
                            Untuk informasi lebih lanjut, silakan hubungi kami melalui email di <a
                                href="mailto:info@smartgreenhouse.com">info@smartgreenhouse.com</a>
                            atau kunjungi situs web kami di <a
                                href="https://www.smartgreenhouse.com">www.smartgreenhouse.com</a>.
                        </p>

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
