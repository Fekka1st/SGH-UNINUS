/*=============== SWIPER JS halaman TIM KINERJA===============*/
// DOSEN MAHASISWA VENDOR 
const sections = [
  { id: '#swiper-section-1', delay: 3000 },
  { id: '#swiper-section-2', delay: 3000 },
  { id: '#swiper-section-3', delay: 3000 },
  { id: '#swiper-section-4', delay: 3000 },
  { id: '#swiper-section-5', delay: 3000 },
];

sections.forEach((section) => {
  new Swiper(`${section.id} .card__content`, {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,
    
    autoplay: {
      delay: section.delay,
      disableOnInteraction: false,
    },
    
    pagination: {
      el: `${section.id} .swiper-pagination`,
      clickable: true,
      dynamicBullets: true,
    },
    
    navigation: {
      nextEl: `${section.id} .swiper-button-next`,
      prevEl: `${section.id} .swiper-button-prev`,
    },
    
    slidesPerGroup: 1,
    
    breakpoints: {
      600: {
        slidesPerView: 2,
      },
      968: {
        slidesPerView: 3,
      },
    },
  });
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
