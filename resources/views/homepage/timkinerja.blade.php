@extends('welcome')

@section('content')

<!-- Start Hero Area -->
 <section class="HERO-AREA d-flex align-items-center justify-content-center position-relative" style="background-image: url('asset/img/tambakdepanununis.png'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 90vh;">
  <div class="container position-relative" style="z-index: 2;">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="text-white animate-slide-up" data-aos="fade-down" style="z-index: 3; color: white; font-family: 'Poppins', sans-serif;">
          <b>TIM KINERJA</b>
            <!-- <ul id="nav" class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" href="/">Kembali > Beranda</a>
                  <a class="nav-link" href="tentangkami">Kembali Ke > Tentang Kami</a>
               </li>
            </ul> -->
          </div>
        </h2>
      </div>
    </div>
  </div>
</section>
<!-- End Hero Area -->

<!-- Start PENJELASAN  -->
<section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px; font-family: 'Book Antiqua', serif; background: linear-gradient(to left, #fff, #A8D5E3);">
    <div class="container">
        <div class="info-one">
            <div class="row align-items-center">
                  <!-- Kolom gambar -->
                  <div class="col-md-6 p-0" data-aos="zoom-in">
                     <div class="image-container position-relative">
                        <img src="https://i.pinimg.com/474x/c8/a6/6b/c8a66bb1bf09eac97d51292ebc89c448.jpg" alt="Gambar Smart Green House" class="img-fluid hover-zoom" style="width: 100%; height: auto; object-fit: cover; min-height: 300px;">
                     </div>
                  </div>
                  <!-- END Kolom gambar -->

                      <!-- Kolom PENJELASAN -->
                  <div class="col-md-6 d-flex" data-aos="fade-left">
                     <!-- <div class="card flex-grow-1 border-0 p-4 bg-white"> -->
                        <div class="card-body d-flex flex-column justify-content-between" style="background: linear-gradient(to bottom right, #46AA46, #3FA34D, #006400, #003200, #001E00,#001400); border-radius: 15px;">
                              <div>
                                 <h5 class="card-title mb-4" style="color:aliceblue;  font-family: 'Poppins', sans-serif;"><i class="fas fa-leaf me-2"></i> TEAM SUPPORT</h5>
                                 <div class="mt-2">
                                    <span class="ml-2" style="text-align: justify; color:aliceblue;  font-family: 'Poppins', sans-serif;">
                                       <b><i>Smart Green House</i></b> dalah proyek kolaboratif lintas disiplin di Universitas Islam Nusantara (Uninus) yang menggabungkan teknologi modern dengan praktik pertanian berkelanjutan. Proyek ini melibatkan keahlian dari berbagai disiplin untuk menciptakan sistem pertanian yang efisien melalui teknologi canggih, seperti sensor dan irigasi pintar, guna meningkatkan produktivitas tanaman serta penghematan sumber daya.
                                          <span id="toggleText" style="text-align: justify; color:yellow;  font-family: 'Poppins', sans-serif;" onclick="toggleParagraph()"><b>selengkapnya....</b></span>
                                    </span>
                                 </div>
                                 <div id="extraParagraph" class="mt-2" style="display: none;">
                                    <p class="card-text mb-3" style="text-align: justify; color:aliceblue;  font-family: 'Poppins', sans-serif;">
                                    <b>Dukungan Yayasan dan Rektor Uninus</b><br>
                                       Proyek ini juga didukung oleh Yayasan Uninus dan Rektor Uninus sebagai bagian dari komitmen universitas untuk mendorong inovasi dan keberlanjutan. Rektor dan Yayasan memberikan dukungan penuh dalam penyediaan sumber daya dan fasilitasi kegiatan lintas fakultas ini.
                                       <br>
                                       <b>Tim Pelaksana Proyek</b>
                                       <br>
                                       Proyek Smart Greenhouse ini merupakan hasil kerja keras tim lintas disiplin dari Fakultas Pertanian dan Fakultas Teknik Uninus. Para dosen yang berperan penting dalam pengembangan proyek ini, antara lain:
                                       <br>
                                       •	<b>Ir. Lilis Irmawatie, M.M.Pd</b> (Dekan Fakultas Pertanian)
                                             Sebagai penanggung jawab utama dari proyek smart greenhouse berbasis dan mengawasi keseluruhan perencanaan dan pembuatan <i>smart greenhouse</i>.
                                       <br>
                                       •	<b>Dr. Debby Ustari, S.P., M.P dan Dr. Syayidah Nuriyah,  S.Pd., M.Si</b> (Dosen dan Peneliti) 
                                             Mengawasi keseluruhan perencanaan agronomis dan teknis di dalam <i>smart greenhouse</i>, serta bertanggung jawab dalam pengembangan penelitian yang diterapkan.	
                                       <br>
                                       •	<b>GALIH, S.T., M.KOM. dan Ganis Sanhaji, S.Si., M.Sc.</b> berperan dalam penerapan sistem <i>IoT</i>, khususnya dalam desain arsitektur sistem pemantauan otomatis. 
                                       <br>
                                       •	<b>Tim Mahasiswa</b>
                                             Mahasiswa dari Fakultas Pertanian dan Fakultas Teknik turut ambil bagian dalam proyek, baik sebagai perancang sistem maupun tenaga operasional. Mahasiwa tidak hanya mempelajari konsep teoritis tentang pertanian dan teknologi, tetapi juga mendapatkan pengalaman langsung dalam mengelola dan memantau sistem berbasis <i>IoT</i>
                                    </p>
                                    <span id="closeText" class="cursor-pointer text-blue-500" style="display: none; color:yellow;  font-family: 'Poppins', sans-serif;" onclick="toggleParagraph()"><b>tutup..</b></span>
                                 </div>
                              </div>
                              <p class="mt-4 mb-0 text-end" style="font-size: 17px; color:aliceblue;  font-family: 'Poppins', sans-serif;"><i class="fas fa-users me-1"></i> Tim Ahli Pertanian & Teknologi</p>
                        </div>
                     <!-- </div> -->
                  </div>
                  <!-- END Kolom PENJELASAN -->
            </div>
        </div>
    </div>
</section>
<!-- End PENJELASAN -->

<!-- Start yayasan-->
<section style="background: linear-gradient(to bottom right, #46AA46, #3FA34D, #003200, #001E00, #001400);">
   <div class="card__container swiper" >
            <div class="row align-items-center">
                <div class="col-md-12 col-12 mb-4">
                     <div class="card__content">
                           <div class="judul" style="display: flex; justify-content: center; align-items: center; height: 105px; margin-top: -0px; margin-bottom: 50px; font-family: 'Poppins', sans-serif;">
                              <h5 class="card-title" style="color: aliceblue; font-size: 1.8em; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid #fff; padding-bottom: 10px;  text-align: center;">
                                 YAYASAN UNIVERSITAS ISLAM NUSANTARA
                              </h5>
                           </div>
                        <div class="swiper-wrapper">
                           <!-- ketua -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                    <img src="{{asset('asset/img/yayasan/Dr._KH._M.Mujib_Qulyubi__M.H1.png')}}" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                 </div>
                  
                                 <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                                    <h3 class="card__name">Ketua Pembina Yayasan</h3>
                                       <p class="card__description">
                                       <b>Dr. KH. M.Mujib Qulyubi M.H</b>
                                       </p>
                                 </div>
                           </article>
                           <!-- end ketua -->
                            <!-- wakil -->
                              <article class="card__article swiper-slide">
                                 <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/yayasan/Aizzudin_Abdurrahman5.png')}}" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                 </div>
                  
                                 <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                                    <h3 class="card__name">Wakil Ketua Pembina Yayasan</h3>
                                       <p class="card__description">
                                       <b>Aizzudin Abdurrahman</b></p>
                                 </div>
                              </article>
                              <!-- anggota -->
                              <article class="card__article swiper-slide">
                                 <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                    <img src="{{asset('asset/img/yayasan/H._Muhammad_Hasyim1.png')}}" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                 </div>
                  
                                 <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                                    <h3 class="card__name">Anggota Pembina Yayasan</h3>
                                       <p class="card__description">
                                       <b>H. Muhammad Hasyim</b></p>
                              </article>
                              <!-- Pengurus Yayasan -->
                              <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/yayasan/KH._Hasan_Nuri_Hidayatullah1.png')}}" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                 </div>
                  
                                 <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                                    <h3 class="card__name">Ketua Pengurus Yayasan</h3>
                                       <p class="card__description">
                                       <b>H. Hasan Nuri Hidayatullah</b></p>
                                 </div>
                           </article>
                           <!-- 1 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/yayasan/Masagus_Royhan_Ariep__S.IP3.png')}}" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                 </div>
                  
                                 <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                                    <h3 class="card__name">Sekretaris Pengurus Yayasan</h3>
                                       <p class="card__description">
                                       <b>Masagus Royhan Ariep S.IP</b></p>
                                 </div>
                           </article>
                           <!-- 2 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/yayasan/H._Mohammad_Machrus_Alie__M.T1.png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3); font-family: 'Poppins', sans-serif;">
                                 <h3 class="card__name">Bendahara Pengurus Yayasan</h3>
                                       <p class="card__description">
                                       <b>H. M. Machrus Alie M.T</b></p>
                              </div>
                           </article>
                        </div>
                     </div>

                     <!-- Navigation buttons -->
                     <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                     </div>
                     
                     <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                     </div>

                     <!-- Pagination -->
                     <div class="swiper-pagination"></div>
                </div>
         </div>
   </div>
</section>
<!-- End DOSEN -->

<!-- Start PIMPINAN UNIVERSITAS ISLAM NUSANTARA -->
<section style="background: linear-gradient(to left, #fff, #A8D5E3);">
   <div class="card__container swiper" >
            <div class="row align-items-center">
                <div class="col-md-12 col-12 mb-4">
                     <div class="card__content">
                           <div class="judul" style="display: flex; justify-content: center; align-items: center; height: 105px; margin-top: -0px; margin-bottom: 50px; font-family: 'Poppins', sans-serif;">
                              <h5 class="card-title" style="color: #1C532A; font-size: 1.8em; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid #1C532A; padding-bottom: 10px;  text-align: center;">
                              PIMPINAN UNIVERSITAS ISLAM NUSANTARA
                              </h5>
                           </div>
                        <div class="swiper-wrapper">
                           <!-- 1 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/rektor/endang.png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif; color:#fff;">
                                 <h3 class="card__name" style="color:#fff;">Prof. Dr. H. Endang Komara, M.Si</h3>
                                 <p class="card__description">
                                 Rektor
                                 <br>universitas islam nusantara
                                 <p style="margin-bottom:-10px"><br></p>
                                 </p>
                              </div>
                           </article>
                           <!-- 2 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/rektor/hanaviah.png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif; color:#fff;">
                                 <h3 class="card__name" style="color:#fff;">Prof. Dr. Hanafiah, <br> M.M.Pd.</h3>
                                 <p class="card__description">
                                 Wakil Rektor 1 Bidang Akademik, Pembelajaran, Kemahasiswaan dan Penjaminan Mutu
                                 <p style="margin-bottom:-30px"><br></p>
                                 </p>
                              </div>
                           </article>
                           <!-- 3 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/rektor/aslan.png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif; color:#fff;">
                                 <h3 class="card__name" style="color:#fff;">Prof. Dr. Aslan Noor, <br>M.H</h3>
                                 <p class="card__description">
                                 Wakil Rektor 2 <br>
                                 Bidang Keuangan, Aset dan Sumber Daya
                                 </p>
                              </div>
                           </article>
                           <!-- 4 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/rektor/ridwan.png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif; color:#fff;">
                                 <h3 class="card__name" style="color:#fff;">A. M. Ridwan Saeful Hikmat, S.Si., M.H</h3>
                                 <p class="card__description">
                                 Wakil Rektor 3 Bidang Komunikasi, Kerjasama, Penelitia dan Pengabdian Kepada Masyarakat
                                 </p>
                              </div>
                           </article>
                        </div>
                     </div>

                     <!-- Navigation buttons -->
                     <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                     </div>
                     
                     <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                     </div>

                     <!-- Pagination -->
                     <div class="swiper-pagination"></div>
                </div>
         </div>
   </div>
</section>
<!-- End DOSEN -->

 <!-- Start DOSEN YANG IKUT DALAM PENELITIAN-->
 <section style="background: linear-gradient(to bottom right, #46AA46, #3FA34D, #003200, #001E00, #001400);">
   <div class="card__container swiper">
      <div class="card__content">
         <div class="judul" style="display: flex; justify-content: center; align-items: center; height: 105px; margin-top: 0; margin-bottom: 50px;">
            <h5 class="card-title" style="color: aliceblue; font-size: 1.8em; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid #fff; padding-bottom: 10px; font-family: 'Poppins', sans-serif;">
               DOSEN  YANG TERLIBAT DALAM RISET
            </h5>
         </div>
         <div class="swiper-wrapper">
            <!-- 1 -->
            <article class="card__article swiper-slide">
               <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                  <img src="{{asset('asset/img/vendor/hamditrb.png')}}" alt="image" class="card__img">
                  <div class="card__shadow"></div>
               </div>

               <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                  <h3 class="card__name">Debby Ustari</h3>
                  <p class="card__description" style="margin-bottom:25px;">
                  Universitas Islam Nusantara
                  Email: uninus.ac.id Pertanian
                  </p>
                  <div class="card__box">
                     <a href="https://www.linkedin.com" target="_blank">
                        <img src="{{asset('asset/img/logo/logo_scopus-removebg-preview.png')}}" alt="LinkedIn" class="social-ico">
                     </a>
                     <a href="https://scholar.google.com/citations?user=8C8Z-agAAAAJ&hl=id" target="_blank">
                        <img src="{{asset('asset/img/logo/logo.scholar-removebg-preview.png')}}" alt="GitHub" class="social-ico">
                     </a>
                  </div>
               </div>
            </article>
                           <!-- 3 -->
            <article class="card__article swiper-slide">
               <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                  <img src="{{asset('asset/img/vendor/hamditrb.png')}}" alt="image" class="card__img">
                  <div class="card__shadow"></div>
               </div>

               <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                  <h3 class="card__name">Hamdi S., S.T</h3>
                  <p class="card__description">
                     IoT Engineer |<br> Embedded System IoT <br>| Elektrical Engineer
                  </p>

                  <div class="card__box">
                     <a href="https://www.linkedin.com/in/hamdi-sholahudin/" target="_blank">
                        <i class="fa-brands fa-linkedin fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://github.com/HamdiSholahudin" target="_blank" style="margin-left: 20px; margin-right:20px">
                        <i class="fa-brands fa-square-github fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://www.instagram.com" target="_blank">
                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #000;"></i>
                     </a>
                  </div>
               </div>
            </article>

            <!-- 2 -->
            <article class="card__article swiper-slide">
               <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                  <img src="{{asset('asset/img/vendor/ferry.png')}}" alt="image" class="card__img">
                  <div class="card__shadow"></div>
               </div>

               <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                  <h3 class="card__name">Ferry Aditya H., S.T</h3>
                  <p class="card__description">
                  Web Developer | <br>IoT Engineer <br>| IT Support
                  </p>

                  <div class="card__box">
                     <a href="https://www.linkedin.com/in/ferry-aditya-herman/" target="_blank">
                        <i class="fa-brands fa-linkedin fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://github.com/Fekka1st" target="_blank"style="margin-left: 20px; margin-right:20px">
                        <i class="fa-brands fa-square-github fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://www.instagram.com/fekka_1st/" target="_blank">
                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #000;"></i>
                     </a>
                  </div>
               </div>
            </article>
         </div> <!-- Penutup yang diperbaiki -->

         <!-- Navigation buttons -->
         <div class="swiper-button-next">
            <i class="ri-arrow-right-s-line"></i>
         </div>
         
         <div class="swiper-button-prev">
            <i class="ri-arrow-left-s-line"></i>
         </div>

         <!-- Pagination -->
         <div class="swiper-pagination"></div>
      </div>
   </div>
</section>
<!-- End DOSEN -->

<!-- Start MAHASISWA -->
<section style="background: linear-gradient(to left, #fff, #A8D5E3);">
      <div class="card__container swiper">
            <div class="card__content">
                           <div class="judul" style="display: flex; justify-content: center; align-items: center; height: 105px; margin-top: -0px; margin-bottom: 50px;">
                              <h4 class="card-title" style="color: #1C532A; font-size: 1.8em; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid #1C532A; padding-bottom: 10px;  font-family: 'Poppins', sans-serif;">
                                 TIM MAHASISWA
                              </h4>
                           </div>
                              <div class="swiper-wrapper">

                                 <!-- tim inti mahasiswa -->

                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/imam.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Imam Ramadhan</h3>
                                       <p class="card__description" style="color:aliceblue;">
                                       Team Support :
                                       <br> Mahasiswa FTAN
                                       <p style="margin-top:-10px"><br></p>
                                       </p>
                                       <div class="card__box">
                                             <a href="https://www.linkedin.com" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- END inti mahasiswa -->

                                 <!-- tim Elektro mahasiswa -->
                                  <!-- 1 -->
                                 <!-- Decky Putra Kurnia -->
                                 <article class="card__article swiper-slide">

                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/decky.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Decky Putra Kurnia</h3>
                                          <p class="card__description" style="color:aliceblue;">Firmware Division</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             Team Support : Silmi Nur Azmi <br>Silmi
                                          </p>

                                          <div class="card__box">
                                                <a href="https://www.linkedin.com/in/decky-putra-kurnia-387389260" target="_blank" style="margin-right:20px">
                                                <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="https://www.instagram.com/deqkii_" target="_blank">
                                                <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                                </a>
                                          </div>
                                    </div>
                                 </article>
                                 <!-- 2 -->
                                 <!-- Marvin -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/marvin.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Marvin</h3>
                                       <p class="card__description" style="color:aliceblue;">Network Division</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             <p style="margin-top:71px"><br></p>
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/marvin-mmpin?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"style="margin-right:20px">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href=" https://www.instagram.com/mrvinnr" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- 3 -->
                                 <!-- Julian -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/julian.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Julian</h3>
                                       <p class="card__description" style="color:aliceblue;">Design 3D Division</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             Team Support : Anisa Febrianti dan Anita Ayudya Riski
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/julian260802/" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com/Julian26080" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/iam_juliannn/profilecard/?igsh=eXBzZWl6YjNmcDNt" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- 4 -->
                                 <!-- Muhammad Iqbal R -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/iqbal.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Muhammad Iqbal R</h3>
                                       <p class="card__description" style="color:aliceblue;">Hardware Division</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             Team Support : Muhamad Ihsan dan Raihan Wahyu Pratama
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/muhammadiqbalrizaldi/" target="_blank" style="margin-right:20px">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/iieqbaalrz/" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- 5 -->
                                 <!-- Aziz Maulana -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/aziz.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Aziz Maulana</h3>
                                       <p class="card__description" style="color:aliceblue;">Hardware Division</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             Team Support : Deri Bahtiar dan
                                             <br>Kusnayadi
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/azis-maulana-217a5627b" target="_blank"style="margin-right:20px">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/azismaulana0909?igsh=MWI1Z3U5Y2pzN2RkYQ==" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- 6-->
                                 <!-- Indra Saputra -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/indra.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Indra Saputra</h3>
                                       <p class="card__description" style="color:aliceblue;">Hardware Division</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             Team Support : Muhamad Gias Muharom dan Vito Dwi Nur H
                                          </p>
                                       <div class="card__box">
                                             <a href="https://id.linkedin.com/in/indra-saputra-720242287" target="_blank" style="margin-right:20px">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/sptr_ndra?igsh=aWUyaWV5dzVmZWsy" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- 7 -->
                                 <!-- Defany Kuswandi -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/defan.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Defany Kuswandi</h3>
                                       <p class="card__description" style="color:aliceblue;">Electrical Division</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             Team Support : Ahmad Kurnia dan Wildan Permana
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/defanykuswandi" target="_blank" style="margin-right:20px">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/defanykuswandi/profilecard/?igsh=M2VjNTN4bnFyYW53" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- 8 -->
                                 <!-- Herlan Syah -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/helan2.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Herlan Syah</h3>
                                       <p class="card__description" style="color:aliceblue;">Electrical Division</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             Team Support :Hidayat
                                             <p style="margin-top:-10px"><br></p>
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/herlan-syah-ba04042a6?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" style="margin-right:20px">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/lan_syah_/profilecard/?igsh=ZXQxNTNvazJiOGhl" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- END Elektro mahasiswa -->
                                  
                                 <!--  tim informatika mahasiswa -->
                                 <!-- star UI/UX -->
                                 <!-- Rizki Hendriawan -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/riski-removebg-preview(1).png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Rizki Hendriawan</h3>
                                       <p class="card__description" style="color:aliceblue;">UI/UX</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             <i>User Interface</i> (UI),<br>
                                             <i>User Experience</i> (UX)
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>

                                 <!-- Zen Ahlil Baeri -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/Muhamad_Alviansyah2.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                          <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">M Alviansyah</h3>
                                       <p class="card__description" style="color:aliceblue;">UI/UX</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                             <i>User Interface</i> (UI),<br>
                                             <i>User Experience</i> (UX)
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/zen-ahlil-6000b5335/</a>" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com/Zen-hyppps" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/zeennnn.be/</a>" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- END UI/UX -->

                                 <!-- Star Frontend -->
                                 <!-- Boyke Adam -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/boyke.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Boyke Adam</h3>
                                       <p class="card__description" style="color:aliceblue;">Frontend</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                          Team Support : Zen Ahlil Baeri Dan Adam Panji
                                          </p>
                                    
                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/boyke-adam-9a589a336/</a>" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com/Bokoboy12" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/boyou_are/" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>

                                 <!-- Ipin Ahmad Syarifudin -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/ipin.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Ipin Ahmad S</h3>
                                       <p class="card__description" style="color:aliceblue;">Frontend</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                                Desain antarmuka pengguna untuk pengalaman yang optimal
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/ipin-ahmad-syarifudin-7008b5310/</a>" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com/ipinasm" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/ipinsya_" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>

                                 <!-- Adam Panji -->
                                 <!-- <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/adam.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background-color: #1C532A;  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Adam Panji</h3>
                                       <p class="card__description" style="color:aliceblue;">Frontend</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                                Desain antarmuka pengguna untuk pengalaman yang optimal
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/adampanji21/</a>" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article> -->
                                 <!-- END Frontend -->

                                 <!-- Backend -->
                                 <!-- Aby Herdiansyah -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/abi2.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                          <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400);  font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Aby Herdiansyah</h3>
                                       <p class="card__description" style="color:aliceblue;">Backend</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                                Pemrograman server untuk pengolahan data aplikasi
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/aby-herdiansyah/</a>" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com/Abyhrdians" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/abyhrdians/" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- Anif Alfianto -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/anif.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Anif Alfianto</h3>
                                       <p class="card__description" style="color:aliceblue;">Backend</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                                Pemrograman server untuk pengolahan data aplikasi
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com/in/anif-alfianto-b32b0819b/</a>" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com/anippppppppppp" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/anif.alfi" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- Muhamad Sya'dan M -->
                                 <article class="card__article swiper-slide">
                                    <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                       <img src="{{asset('asset/img/mahasiswa/Syahdan2.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                       <div class="card__shadow"></div>
                                    </div>

                                    <div class="card__data" style="background: linear-gradient(to bottom right, #3FA34D, #006400, #001400); font-family: 'Poppins', sans-serif;">
                                       <h3 class="card__name" style="color:aliceblue;">Muhamad Sya'dan</h3>
                                       <p class="card__description" style="color:aliceblue;">Backend</p> 
                                          <p class="card__description" style="color:aliceblue; margin-top:-26px;">
                                                Pemrograman server untuk pengolahan data aplikasi
                                          </p>

                                       <div class="card__box">
                                             <a href="https://www.linkedin.com" target="_blank">
                                             <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                             <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                             <a href="https://www.instagram.com/dan_syadan/" target="_blank">
                                             <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                             </a>
                                       </div>
                                    </div>
                                 </article>
                                 <!-- END Backend -->
                                 <!--  END informatika mahasiswa -->
                              </div>
            </div>

               <!-- Navigation buttons -->
               <div class="swiper-button-next">
                  <i class="ri-arrow-right-s-line"></i>
               </div>
               
               <div class="swiper-button-prev">
                  <i class="ri-arrow-left-s-line"></i>
               </div>

               <!-- Pagination -->
               <div class="swiper-pagination"></div>
      </div>
</section>
<!-- End MAHASISWA -->

<!-- Start VENDOR -->
<section style="background: linear-gradient(to bottom right, #46AA46, #3FA34D, #003200, #001E00, #001400);">
   <div class="card__container swiper">
      <div class="card__content">
         <div class="judul" style="display: flex; justify-content: center; align-items: center; height: 105px; margin-top: 0; margin-bottom: 50px;">
            <h5 class="card-title" style="color: aliceblue; font-size: 1.8em; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid #fff; padding-bottom: 10px; font-family: 'Poppins', sans-serif;">
               TIM VENDOR
            </h5>
         </div>
         <div class="swiper-wrapper">
            <!-- 1 -->
            <article class="card__article swiper-slide">
               <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                  <img src="{{asset('asset/img/vendor/hamditrb.png')}}" alt="image" class="card__img">
                  <div class="card__shadow"></div>
               </div>

               <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                  <h3 class="card__name">Hamdi S., S.T</h3>
                  <p class="card__description">
                     IoT Engineer |<br> Embedded System IoT <br>| Elektrical Engineer
                  </p>

                  <div class="card__box">
                     <a href="https://www.linkedin.com/in/hamdi-sholahudin/" target="_blank">
                        <i class="fa-brands fa-linkedin fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://github.com/HamdiSholahudin" target="_blank" style="margin-left: 20px; margin-right:20px">
                        <i class="fa-brands fa-square-github fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://www.instagram.com" target="_blank">
                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #000;"></i>
                     </a>
                  </div>
               </div>
            </article>

            <!-- 2 -->
            <article class="card__article swiper-slide">
               <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                  <img src="{{asset('asset/img/vendor/ferry.png')}}" alt="image" class="card__img">
                  <div class="card__shadow"></div>
               </div>

               <div class="card__data" style="background: linear-gradient(to left, #fff, #A8D5E3);  font-family: 'Poppins', sans-serif;">
                  <h3 class="card__name">Ferry Aditya H., S.T</h3>
                  <p class="card__description">
                  Web Developer | <br>IoT Engineer <br>| IT Support
                  </p>

                  <div class="card__box">
                     <a href="https://www.linkedin.com/in/ferry-aditya-herman/" target="_blank">
                        <i class="fa-brands fa-linkedin fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://github.com/Fekka1st" target="_blank"style="margin-left: 20px; margin-right:20px">
                        <i class="fa-brands fa-square-github fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://www.instagram.com/fekka_1st/" target="_blank">
                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #000;"></i>
                     </a>
                  </div>
               </div>
            </article>
         </div> <!-- Penutup yang diperbaiki -->

         <!-- Navigation buttons -->
         <div class="swiper-button-next">
            <i class="ri-arrow-right-s-line"></i>
         </div>
         
         <div class="swiper-button-prev">
            <i class="ri-arrow-left-s-line"></i>
         </div>

         <!-- Pagination -->
         <div class="swiper-pagination"></div>
      </div>
   </div>
</section>
<!-- End VENDOR -->

@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
<link rel="stylesheet" href="{{asset('asset/css/swiper-bundle.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">

@endsection

@section('script')
<script src="{{asset('asset/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
@endsection

