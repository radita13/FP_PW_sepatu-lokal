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