//Membuat image slide pada page buymenu
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("fotosepatu-wrapper");
    let dots = document.getElementsByClassName("fotosepatubawah");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
//Membuat image slide pada page buymenu

//Membuat function goBack() untuk bisa kembali ke page sebelumnya dari page buymenu_shoes
function goBack() {
    const previousPage = sessionStorage.getItem('previousPage');
    if (previousPage) {
        window.location.href = previousPage; // Redirect ke halaman sebelumnya
    } else {
        window.history.back(); // Kembali ke halaman sebelumnya dalam riwayat browser jika tidak ada informasi halaman sebelumnya
    }
}
//Membuat function goBack() untuk bisa kembali ke page sebelumnya dari page buymenu_shoes