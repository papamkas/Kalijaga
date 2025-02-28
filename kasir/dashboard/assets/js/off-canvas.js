$(function() {
  var body = $('body');

  // Mengecilkan sidebar saat halaman dimuat
  body.addClass('sidebar-icon-only');

  // Kode untuk toggle offcanvas dan minimize
  $('[data-toggle="offcanvas"]').on("click", function() {
    $('.sidebar-offcanvas').toggleClass('active');
  });

  $('[data-toggle="minimize"]').on("click", function() {
    if (body.hasClass('sidebar-toggle-display') || body.hasClass('sidebar-absolute')) {
      body.toggleClass('sidebar-hidden');
    } else {
      body.toggleClass('sidebar-icon-only');
    }
  });
});