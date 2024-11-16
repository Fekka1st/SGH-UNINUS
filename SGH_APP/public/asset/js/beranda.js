// h
const countElements = document.querySelectorAll('.card-title');
    countElements.forEach((element) => {
        let count = 0;
        const targetCount = parseInt(element.getAttribute('data-target'));
        const interval = setInterval(() => {
            count++;
            element.textContent = count.toString();
            if (count >= targetCount) {
                clearInterval(interval);
            }
        }, targetCount === 100 ? 30 : 10);
    });

     // Fungsi untuk membuka modal dengan gambar dan deskripsi
function openModal(imgElement) {
    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("modalImage");
    var modalDesc = document.getElementById("modalDescription");

    // Menampilkan modal dan mengatur gambar dan deskripsi
    modal.style.display = "block";
    modalImg.src = imgElement.src;
    modalDesc.textContent = imgElement.getAttribute("data-description");
}

// Fungsi untuk menutup modal
function closeModal() {
    var modal = document.getElementById("imageModal");
    modal.style.display = "none";
}
