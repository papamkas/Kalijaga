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
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: rgba(255, 255, 255, 0.5);
      background-blend-mode: overlay;
      width: 100vw;
      height: 100vh;
      margin: 0;
      padding: 0;
      overflow-x: hidden;

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
  <div class="container mt-5 d-flex justify-content-center align-items-center">
  <div class="row w-100">
    <div class="col-md-12 col-lg-4 col-xl-4 mx-auto">
        <div class="p-3 bg-body-tertiary">
          <span class="fw-bold">Boleh langsung ke kasir ya kak >></span>
          <hr>
          <span class="fw-bold">Rincian Pesanan</span>
          <div class="d-flex justify-content-between mt-2">
            <span>Atas Nama</span> <span>Satria</span>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <span>Nomor Meja</span> <span>1</span>
          </div>
          <hr />
          <div class="d-flex justify-content-between mt-2">
            <span>Menu :</span>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <span>Nasgor 1x</span>
            <span>Rp 35.000</span>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <span>Kopi Cream 1x</span>
            <span>Rp 16.000</span>
          </div>
          <hr />
          <div class="d-flex justify-content-between mt-2">
            <span>Total</span>
            <span class="text-success">Rp 51.000</span>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <span>Status</span>
            <!-- <span class="text-warning">Pesanan sedang UTIWI</span> -->
            <span class="text-success">Pesanan Selesai</span>
            <!-- <span class="text-danger">Menunggu Pembayaran</span> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- btn makan-minum end -->
  <!-- <div class="mt-5 p-4 bg-hijau text-white text-center">
      <p class=" footer-p">Kalijaga &copy; <a href="https://www.instagram.com/spmungkas_/#" class="text-plain footer-text">Team</a></p> 
      </div> -->
</body>

</html>