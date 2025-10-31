// Header Scroll Effect
$(window).on("scroll", function() {
  if ($(this).scrollTop() > 50) {
    $(".main-header").addClass("scrolled");
  } else {
    $(".main-header").removeClass("scrolled");
  }
});

// Hover Effect
$(document).ready(function() {
  $('button, a').hover(
    function() { $(this).css('opacity', '0.8'); },
    function() { $(this).css('opacity', '1'); }
  );

  // --- Validasi Form Checkout ---
  $("#checkoutForm").on("submit", function(e) {
    let valid = true;
    $(".error-msg").text(""); // reset error

    let nama = $("#nama").val().trim();
    let telepon = $("#telepon").val().trim();
    let alamat = $("#alamat").val().trim();
    let kota = $("#kota").val().trim();
    let provinsi = $("#provinsi").val().trim();

    // Validasi nama
    if (!/^[a-zA-Z\s]{3,}$/.test(nama)) {
      $("#error-nama").text("Nama minimal 3 huruf dan tanpa angka/simbol.");
      valid = false;
    }

    // Validasi nomor telepon
    if (!/^[0-9]{10,14}$/.test(telepon)) {
      $("#error-telepon").text("Nomor telepon hanya angka (10–14 digit).");
      valid = false;
    }

    // Validasi alamat
    if (alamat.length < 10) {
      $("#error-alamat").text("Alamat terlalu pendek. Tuliskan lebih lengkap.");
      valid = false;
    }

    // Validasi kota
    if (!/^[a-zA-Z\s]+$/.test(kota)) {
      $("#error-kota").text("Nama kota hanya boleh huruf.");
      valid = false;
    }

    // Validasi provinsi
    if (!/^[a-zA-Z\s]+$/.test(provinsi)) {
      $("#error-provinsi").text("Nama provinsi hanya boleh huruf.");
      valid = false;
    }

    if (!valid) e.preventDefault();
  });

  // Batasi input nomor telepon ke angka
  $("#telepon").on("input", function() {
    $(this).val($(this).val().replace(/[^0-9]/g, ""));
  });
});