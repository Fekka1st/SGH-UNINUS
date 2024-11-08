/*=============== SWIPER JS halaman TIM KINERJA===============*/
// DOSEN MAHASISWA VENDOR 
let swiperCards = new Swiper(".card__content", {
  loop: true,
  spaceBetween: 32,
  grabCursor: true,

  autoplay: {
    delay: 3000, // Durasi delay antara slide, diatur ke 3 detik (3000 ms)
    disableOnInteraction: false, // Tetap autoplay meskipun pengguna berinteraksi
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 3,
    },
  },
});

// END DOSEN MAHASISWA VENDOR 

// halaman TEAM SUPPORT
function toggleParagraph() {
  var paragraph = document.getElementById("extraParagraph");
  var toggleText = document.getElementById("toggleText");

  if (paragraph.style.display === "none" || paragraph.style.display === "") {
      paragraph.style.display = "block";
      toggleText.style.display = "none"; // Sembunyikan "selengkapnya"
      document.getElementById("closeText").style.display = "block"; // Tampilkan "tutup"
  } else {
      paragraph.style.display = "none";
      toggleText.style.display = "inline"; // Tampilkan "selengkapnya" kembali
      document.getElementById("closeText").style.display = "none"; // Sembunyikan "tutup"
  }
}

window.onload = function() {
  document.getElementById("extraParagraph").style.display = "none";
  document.getElementById("toggleText").style.display = "inline";
  document.getElementById("closeText").style.display = "none";
}

// window.addEventListener("scroll", function() {
//   var paragraph = document.getElementById("extraParagraph");
//   var toggleText = document.getElementById("toggleText");
//   var closeText = document.getElementById("closeText");

 
//   if (paragraph.style.display === "block") {
//       paragraph.style.display = "none";
//       toggleText.style.display = "inline"; 
//       closeText.style.display = "none"; 
//   }
// });
// END halaman TEAM SUPPORT
