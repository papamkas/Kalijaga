<!-- <?php
      $close_order_fitur = 1;
      $close_order = 1;

      var_dump($close_order_fitur);
      if ($close_order_fitur === 0) {
        echo "
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <script>
    Swal.fire({
      title: 'Close Order!',
      text: 'Mohon Maaf ya kak, Kami close order sebentar. Full order :(',
      icon: 'warning',
      showClass: {
        popup: 'animate__animated animate__fadeInUp animate__faster'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutDown animate__faster'
      }
    });
  </script>
  ";
      } else {
        echo "<p>Kondisi tidak terpenuhi</p>";
      }
      ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kalijaga | Pemesanan</title>
  <meta charset="utf-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="icon" type="image/x-icon" href="../assets/img/kalijaga.jpg">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      background-image: url("../assets/img/kalijagabar.jpg");
      /* Tambahkan URL gambar */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: rgba(255, 255, 255, 0.5);
      background-blend-mode: overlay;
      width: 100%;
      height: auto !important;
      ;
      position: relative;
    }

    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>
  <!-- section menu -->
  <!-- <section id="menu"> -->
  <!-- head -->
  <div class="container mt-5 bg-hijau text-plain border-radius drop-shadow">
    <div class="row">
      <div class="col-xl-12 mt-3">
        <h1 class="text-center text-cerah">- Sugeng Rawuh -</h1>
        <h5 class="text-center text-cerah mt-1">Meja No.1</h5>
        <p></p>
      </div>
    </div>
  </div>
  <!-- head end -->
  <!-- btn makan-minum start -->
  <div class="container mt-3 d-flex justify-content-center align-items-center">
  <div class="row w-100 justify-content-center">
    <div class="col-md-7 col-lg-5">
      <div class="p-4 bg-body-tertiary rounded-4 border shadow">
        <!-- Rincian Pesanan Section -->
        <h4 class="fw-bold mb-3 text-center">Rincian Pesanan</h4>
        <div class="d-flex justify-content-between">
          <span>Atas Nama:</span> <span>Satria</span>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <span>Nomor Meja:</span> <span>1</span>
        </div>
        <hr>
        <div class="mb-2">
          <span class="fw-semibold">Menu:</span>
          <div class="d-flex justify-content-between mt-2">
            <span>Nasgor 1x</span> <span>Rp 35.000</span>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <span>Kopi Cream 1x</span> <span>Rp 16.000</span>
          </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
          <span>Total:</span> <span class="text-success fw-bold">Rp 51.000</span>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <!-- <span>Status:</span> <span class="text-success">Pesanan Selesai</span> -->
          <span>Status:</span> <span class="text-warning">Pesanan Sedang Utiwi</span>
        </div>
        <!-- Upload Section -->
      </div>
    </div>
  </div>
</div>

  <!-- bukti pembayaran -->

  <div class="container mt-5 d-flex justify-content-center align-items-center">
    <div class="row w-100 justify-content-center">
      <div class="col-md-7 col-lg-4">
        <div class="p-4 bg-body-tertiary rounded-4 border shadow text-center">
          <!-- Modal Image -->
          <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <img id="modalImage" src="" class="img-fluid rounded" alt="Preview">
                </div>
              </div>
            </div>
          </div>
          <!-- QR Code Section -->
          <h2 class="text-coklat">Bukti Pembayaran</h2>
          <img src="../assets/img/resi-mbanking.jpeg" class="img-fluid rounded mx-auto mb-3" alt="QR Code"
            data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
        </div>
      </div>
    </div>
  </div>

  <!-- bukti pembayaran -->
  <br>
  <br>
  <!-- btn makan-minum end -->
  <div class="mt-5 p-4 bg-hijau text-white text-center">
    <p class=" footer-p">Kalijaga &copy; <a href="https://www.instagram.com/spmungkas_/#" class="text-plain footer-text">Team</a></p>
  </div>
</body>
<!-- alert pembayaran -->
<script>
  // Tambahkan event listener pada tombol dengan ID "btn-submit"
  document.getElementById('btn-submit').addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah submit form default (jika ada)

    const fileInput = document.getElementById('inputGroupFile02'); // Ambil input file

    // Cek apakah file sudah diisi
    if (!fileInput.value) {
      // Jika file kosong, tampilkan SweetAlert error
      Swal.fire({
        title: 'Error!',
        text: 'Harap pilih file bukti pembayaran terlebih dahulu.',
        icon: 'error',
        confirmButtonText: 'OK'
      });
      return; // Hentikan eksekusi lebih lanjut
    }

    // Jika file sudah diisi, tampilkan SweetAlert sukses
    Swal.fire({
      title: 'Berhasil!',
      text: 'Bukti pembayaran berhasil diupload.',
      icon: 'success',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.isConfirmed) {
        // Tambahkan logika lanjutan di sini (jika diperlukan)
        // Misalnya: reset form atau redirect ke halaman lain
        window.location.href = './cashless_berhasil.php';
        // document.getElementById('form-upload').reset(); // Reset form
      }
    });
  });
</script>
<!-- alert pembayaran -->
<script>
  function showImage(element) {
    const modalImg = document.getElementById('modalImage');
    modalImg.src = element.src;
  }
</script>

</html>