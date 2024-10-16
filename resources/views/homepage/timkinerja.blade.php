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
          <div class="col-lg-6 col-md-12 col-12">
            <div class="row">
              <div class="info-text wow fadeInLeft" data-wow-delay=".3s">
                <h2>Team Support</h2>
                <p style="margin: 20px 0;line-height: 2em;">Tim Kinerja adalah sekelompok individu yang dibentuk dalam suatu organisasi untuk memantau, mengevaluasi, dan meningkatkan kinerja organisasi atau bagian tertentu dari perusahaan. Fungsi utama tim ini adalah memastikan bahwa tujuan strategis dan operasional dapat tercapai dengan optimal. Berikut adalah beberapa komponen dan fungsi utama dalam isi dari tim kinerja.</p>
                <div class="row">
                  <div class="row">
                    <div class="container mt-5">
                      <div class="row text-center">
                        <!-- Kotak Pertanian -->
                        <div class="col-12 col-md-4 mb-4">
                          <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-pertanian')">
                            <strong>Pertanian</strong>
                          </div>
                          <div id="desc-pertanian" class="description">
                            <p> Program studi Pertanian fokus pada pengembangan teknologi dan inovasi dalam bidang pertanian, termasuk teknik irigasi, pengembangan varietas unggul, dan pengelolaan lahan secara berkelanjutan. </p>
                          </div>
                        </div>
                        <!-- Kotak Elektro -->
                        <div class="col-12 col-md-4 mb-4">
                          <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-elektro')">
                            <strong>Elektro</strong>
                          </div>
                          <div id="desc-elektro" class="description">
                            <p> Elektro mempelajari dasar-dasar kelistrikan, elektronika, dan energi, termasuk teknologi kontrol dan telekomunikasi. Bidang ini berperan penting dalam penerapan energi terbarukan dan pengembangan sistem listrik modern. </p>
                          </div>
                        </div>
                        <!-- Kotak Informatika -->
                        <div class="col-12 col-md-4 mb-4">
                          <div class="alert alert-primary" role="alert" onclick="toggleDescription('desc-informatika')">
                            <strong>Informatika</strong>
                          </div>
                          <div id="desc-informatika" class="description">
                            <p> Informatika fokus pada pengembangan software, analisis data, dan kecerdasan buatan. Bidang ini berperan dalam menciptakan solusi inovatif di era digital dengan mengembangkan aplikasi dan sistem informasi yang memudahkan kehidupan masyarakat. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Bootstrap JS -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                      // Fungsi untuk menampilkan/menyembunyikan deskripsi
                      function toggleDescription(id) {
                        const desc = document.getElementById(id);
                        if (desc.style.display === "none" || desc.style.display === "") {
                          desc.style.display = "block";
                        } else {
                          desc.style.display = "none";
                        }
                      }
                    </script>
                    </body>
                  </div>
                </div>
              </div>
              <script>
                // Fungsi untuk menampilkan/menyembunyikan deskripsi
                function toggleDescription(id) {
                  const desc = document.getElementById(id);
                  if (desc.style.display === "none" || desc.style.display === "") {
                    desc.style.display = "block";
                  } else {
                    desc.style.display = "none";
                  }
                }
              </script>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
              <div class="info-image wow fadeInRight" data-wow-delay=".5s">
                <img class="ss1" src="https://storage.nu.or.id/storage/post/16_9/mid/logo-baru-uninus-news18112023_1700288683.webp">
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

@endsection
