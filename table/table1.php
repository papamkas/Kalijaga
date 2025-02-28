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
      background-image: url("./img/kalijagabar.jpg");
      /* Tambahkan URL gambar */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: rgba(255, 255, 255, 0.5);
      background-blend-mode: overlay;
      width: 100%;
      height: 100vh;
      position: relative;
    }
  </style>
</head>

<body>
  <!-- <div class="loader"></div> -->
  <!-- section menu -->
  <!-- <section id="menu"> -->
  <!-- head -->
  <div class="container mt-3 bg-hijau text-plain border-radius drop-shadow">
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
  <div class="container mt-3 text-plain">
    <div class="d-flex justify-content-between">
      <button
        class="btn-makanan-minuman text-center flex-fill me-2"
        type="button"
        onclick="showOnly('multiCollapseExample1')">
        Makanan
      </button>
      <button
        class="btn-makanan-minuman text-center flex-fill"
        type="button"
        onclick="showOnly('multiCollapseExample2')">
        Minuman
      </button>
    </div>
  </div>

  <div class="container mt-3 text-plain">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col">
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid rounded" alt="Preview">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="multiCollapseExample1">
              <div class="container mt-1 text-plain">
                <div class="row">
                  <!-- Kolom Makanan -->
                  <div class="col-sm-12 border-radius">
                    <h2 class="text-center mt-3 bg-cerah border-radius">Makanan</h2>

                    <!-- Card Menu -->
                    <div class="row row-cols-1 row-cols-md-2 g-3">
                      <div class="col">
                        <div class="card p-2 bg-hijau text-cerah" style="background-color: #3f4f44; color: #d9d9d9">
                          <div class="row g-0 align-items-center">
                            <div class="col-4">
                              <img
                                src="./img/nasgor.jpg"
                                class="img-fluid rounded"
                                alt="Product Image"
                                data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                onclick="showImage(this)" />
                            </div>
                            <div class="col-8">
                              <div class="card-body">
                                <h5 class="card-title mb-1" style="color: #d9d9d9">Nasgor SF</h5>
                                <p class="card-text mb-2" style="color: #d9d9d9">Rp 29.000</p>
                                <div class="d-flex align-items-center">
                                  <!-- Tombol minus -->
                                  <button class="btn btn-outline-secondary btn-sm" onclick="ubahPesanan('NasgorSF', 29000, -1)">
                                    −
                                  </button>
                                  <!-- Input quantity -->
                                  <input
                                    type="text"
                                    class="form-control-styling text-center mx-2"
                                    id="quantity-NasgorSF"
                                    value="0"
                                    readonly />
                                  <!-- Tombol plus -->
                                  <button class="btn btn-outline-primary btn-sm" onclick="ubahPesanan('NasgorSF', 29000, 1)">
                                    +
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card p-2 bg-hijau text-cerah" style="background-color: #3f4f44; color: #d9d9d9">
                          <div class="row g-0 align-items-center">
                            <div class="col-4">
                              <img
                              src="./img/nasgor.jpg"
                              class="img-fluid rounded"
                                alt="Product Image"
                                data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                onclick="showImage(this)" />
                            </div>
                            <div class="col-8">
                              <div class="card-body">
                                <h5 class="card-title mb-1" style="color: #d9d9d9">Nasgor 2</h5>
                                <p class="card-text mb-2" style="color: #d9d9d9">Rp 18.000</p>
                                <div class="d-flex align-items-center">
                                  <button class="btn btn-outline-secondary btn-sm" onclick="ubahPesanan('Nasgor2', 18000, -1)">
                                    −
                                  </button>
                                  <input
                                    type="text"
                                    class="form-control-styling text-center mx-2"
                                    id="quantity-Nasgor2"
                                    value="0"
                                    style="width: 50px"
                                    readonly />
                                  <button class="btn btn-outline-primary btn-sm" onclick="ubahPesanan('Nasgor2', 18000, 1)">
                                    +
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <br>
                    <br>
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse mt-1" id="multiCollapseExample2">
              <div class="container mt-1 text-plain">
                <div class="row">
                  <!-- Kolom Makanan -->
                  <div class="col-sm-12  border-radius">
                    <h2 class="text-center mt-3 bg-cerah border-radius">Minuman</h2>

                    <!-- Card Menu -->
                    <div class="row row-cols-1 row-cols-md-2 g-3">
                      <div class="col">
                        <div class="card p-2 bg-hijau text-cerah" style="background-color: #3f4f44; color: #d9d9d9">
                          <div class="row g-0 align-items-center">
                            <div class="col-4">
                              <img
                                src="../assets/img/antique-cafe-bg-03.jpg"
                                class="img-fluid rounded"
                                alt="Kopi"
                                data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                onclick="showImage(this)" />
                            </div>
                            <div class="col-8">
                              <div class="card-body">
                                <h5 class="card-title mb-1">Kopi</h5>
                                <p class="card-text mb-2">Rp 13.000</p>
                                <div class="d-flex align-items-center">
                                  <button class="btn btn-outline-secondary btn-sm" onclick="ubahPesanan('KopiTubruk', 13000, -1)">−</button>
                                  <input type="text" class="form-control-styling text-center mx-2" id="quantity-KopiTubruk" value="0" style="width: 50px" readonly />
                                  <button class="btn btn-outline-primary btn-sm" onclick="ubahPesanan('KopiTubruk', 13000, 1)">+</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card p-2 bg-hijau text-cerah" style="background-color: #3f4f44; color: #d9d9d9">
                          <div class="row g-0 align-items-center">
                            <div class="col-4">
                              <img
                                src="../assets/img/antique-cafe-bg-03.jpg"
                                class="img-fluid rounded"
                                alt="Kopi Cream"
                                data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                onclick="showImage(this)" />
                            </div>
                            <div class="col-8">
                              <div class="card-body">
                                <h5 class="card-title mb-1">Kopi Cream</h5>
                                <p class="card-text mb-2">Rp 15.000</p>
                                <div class="d-flex align-items-center">
                                  <button class="btn btn-outline-secondary btn-sm" onclick="ubahPesanan('KopiCream', 15000, -1)">−</button>
                                  <input type="text" class="form-control-styling text-center mx-2" id="quantity-KopiCream" value="0" style="width: 50px" readonly />
                                  <button class="btn btn-outline-primary btn-sm" onclick="ubahPesanan('KopiCream', 15000, 1)">+</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <br>
                    <br>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-1">
        <h2 class="text-center text-light py-2 rounded bg-hijau">Rincian Pesanan</h2>
        <div class="card border-secondary mb-3 bg-coklat">
          <div class="card-header " style="background-color: #54473F; color: #E3DFC8;">Pesanan Kamu</div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareainputNama" style="height: 50px"></textarea>
            <label for="floatingTextareainputNama text-coklat">Atas Nama siapa kak ? :</label>
          </div>
          <div class="card-body text-secondary">
            <div id="rincianPesanan" class="mt-4 p-3 bg-light rounded"></div>
            <!-- Item Pesanan Akan Muncul Disini -->
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaInputCatatan" style="height: 100px"></textarea>
            <label for="floatingTextareaInputCatatan text-coklat">Catatan :</label>
          </div>
          <button type="submit" class="btn-makanan-minuman " id="tombolPesan">Pesan</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- btn makan-minum end -->
  <!-- <footer class="bg-hijau text-white text-center p-3">
      <p class="footer-p">
        Kalijaga &copy; 
        <a href="https://www.instagram.com/spmungkas_/#" class="text-plain footer-text">Team</a>
      </p>
    </footer> -->

</body>
<!-- script bootstrap menu -->
<script>
  // Fungsi untuk menampilkan hanya satu elemen
  function showOnly(id) {
    // Tutup semua elemen collapse
    document.querySelectorAll(".collapse").forEach(function(collapse) {
      const bsCollapse = new bootstrap.Collapse(collapse, {
        toggle: false,
      });
      bsCollapse.hide();
    });

    function showOnly(id) {
      // Sembunyikan semua collapse
      document.getElementById('multiCollapseExample1').classList.remove('show');
      document.getElementById('multiCollapseExample2').classList.remove('show');

      // Tampilkan collapse yang diminta
      document.getElementById(id).classList.add('show');
    }
    // Buka elemen yang dipilih
    const target = document.getElementById(id);
    const bsTarget = new bootstrap.Collapse(target, {
      toggle: false,
    });
    bsTarget.show();
  }
</script>

<script>
  // Fungsi untuk menambah pesanan
  function tambahPesanan(menu, harga) {
    const inputQty = document.getElementById(`quantity-${menu}`);
    let qty = parseInt(inputQty.value) || 0;
    qty += 1;
    inputQty.value = qty;
    hitungTotal(harga);
  }

  // Fungsi untuk mengurangi pesanan
  function kurangiPesanan(menu) {
    const inputQty = document.getElementById(`quantity-${menu}`);
    let qty = parseInt(inputQty.value) || 0;
    if (qty > 0) {
      qty -= 1;
      inputQty.value = qty;
    }
  }
</script>
<!-- script hitung pesanan -->
<script>
  // Struktur Data Pesanan
  let pesanan = [];

  // Fungsi untuk Mengubah Pesanan (Tambah/Kurangi)
  function ubahPesanan(menu, harga, perubahan) {
    const inputQty = document.getElementById(`quantity-${menu}`);
    let qty = parseInt(inputQty.value) || 0;
    qty = Math.max(0, qty + perubahan);
    inputQty.value = qty;

    const index = pesanan.findIndex(item => item.nama === menu);
    if (index !== -1) {
      pesanan[index].jumlah = qty;
      if (qty === 0) pesanan.splice(index, 1);
    } else if (qty > 0) {
      pesanan.push({
        nama: menu,
        harga: harga,
        jumlah: qty
      });
    }

    tampilkanRincian();
    hitungTotalHarga();
  }

  // Fungsi Hitung Total Harga Keseluruhan
  function hitungTotalHarga() {
    let totalHarga = pesanan.reduce((total, item) => total + item.harga * item.jumlah, 0);
    const totalHargaElement = document.getElementById('totalHarga');
    if (totalHargaElement) {
      totalHargaElement.textContent = `Rp ${totalHarga.toLocaleString()}`;
    }
  }

  // Fungsi Tampilkan Rincian Pesanan
  function tampilkanRincian() {
    const rincianContainer = document.getElementById('rincianPesanan');
    rincianContainer.innerHTML = pesanan.length > 0 ?
      pesanan.map(item => `
            <div class="d-flex justify-content-between">
              <p>${item.nama} x${item.jumlah}</p>
              <p>Rp ${(item.harga * item.jumlah).toLocaleString()}</p>
            </div>`).join('') :
      '<p>Belum ada pesanan</p>';
    hitungTotalHarga();
  }
</script>
<!-- script hitung pesanan -->


<!-- script hitung pesanan kopi -->
<script>
  let pesananMinuman = {};

  function ubahPesanan(nama, harga, perubahan) {
    // Jika item belum ada di pesanan, inisialisasi
    if (!pesanan[nama]) {
      pesanan[nama] = {
        jumlah: 0,
        harga: harga
      };
    }

    // Ubah jumlah pesanan
    pesanan[nama].jumlah += perubahan;

    // Pastikan jumlah tidak negatif
    if (pesanan[nama].jumlah < 0) {
      pesanan[nama].jumlah = 0;
    }

    // Update input jumlah sesuai nama
    document.getElementById(`quantity-${nama.replace(/\s+/g, '')}`).value = pesanan[nama].jumlah;

    // Perbarui rincian pesanan
    tampilkanRincianPesanan();
  }

  function tampilkanRincianPesanan() {
    let rincian = '';
    let totalHarga = 0;

    for (const item in pesanan) {
      if (pesanan[item].jumlah > 0) {
        const subtotal = pesanan[item].jumlah * pesanan[item].harga;
        rincian += `
            <p>
              ${item} x${pesanan[item].jumlah} = Rp ${subtotal.toLocaleString('id-ID')}
            </p>`;
        totalHarga += subtotal;
      }
    }

    if (rincian === '') {
      rincian = '<p>Belum ada pesanan</p>';
    }

    rincian += `<hr><strong>Total: Rp ${totalHarga.toLocaleString('id-ID')}</strong>`;

    document.getElementById('rincianPesanan').innerHTML = rincian;
  }
</script>
<!-- script hitung pesanan kopi -->


<!-- Tambahkan CDN SweetAlert2 di dalam <head> atau sebelum </body> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  // Tambahkan event listener pada tombol "Pesan"
  document.getElementById('tombolPesan').addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah submit otomatis jika di dalam form

    // Ambil nilai nama dan catatan saat tombol diklik
    const ambilValueNamaCatatan = ambilNamaCatatan();

    if (Object.keys(pesanan).length === 0) {
      Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: 'Anda belum memesan apa pun!',
      });
      return;
    }

    // Buat rincian pesanan untuk ditampilkan di alert
    let rincian = Object.keys(pesanan)
      .filter(item => pesanan[item].jumlah > 0)
      .map(item => `${item} x${pesanan[item].jumlah} = Rp ${(pesanan[item].jumlah * pesanan[item].harga).toLocaleString('id-ID')}`)
      .join('<br>');

    let totalHarga = Object.keys(pesanan).reduce((total, item) => {
      return total + pesanan[item].jumlah * pesanan[item].harga;
    }, 0);

    if (totalHarga <= 0) {
      Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: 'Anda belum memesan apa pun!',
      });
      return;
    }

    // Tampilkan konfirmasi dengan SweetAlert2
    Swal.fire({
      title: 'Konfirmasi Pesanan',
      html: `
    <strong>Rincian Pesanan:</strong><br>
    <strong>Atas Nama : ${ambilValueNamaCatatan.nama}</strong><br>
    <strong>Catatan : ${ambilValueNamaCatatan.catatan}</strong><br>
    ${rincian}<br><br>
    <strong>Total Harga:</strong> Rp ${totalHarga.toLocaleString('id-ID')}<br><br>
    Apakah Anda ingin memproses pesanan ini?
  `,
      icon: 'info',
      showCancelButton: true,
      confirmButtonText: 'Ya, Pesan!',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if (result.isConfirmed) {
        // Tampilkan alert baru dengan 2 tombol (CASH dan CASHLESS)
        Swal.fire({
          title: 'Pilih Metode Pembayaran',
          text: 'Silakan pilih metode pembayaran yang Anda inginkan.',
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'CASH',
          cancelButtonText: 'CASHLESS',
        }).then((paymentResult) => {
          if (paymentResult.isConfirmed) {
            // Jika tombol CASH ditekan
            window.location.href = '../pembayaran/cash.php';
            // Tambahkan logika untuk pembayaran CASH di sini
          } else if (paymentResult.dismiss === Swal.DismissReason.cancel) {
            // Jika tombol CASHLESS ditekan
            window.location.href = '../pembayaran/cashless.php';
            // Tambahkan logika untuk pembayaran CASHLESS di sini
          }
        });
      }
    });
  });

  // Fungsi untuk mengambil nilai nama dan catatan
  function ambilNamaCatatan() {
    const nama = document.getElementById('floatingTextareainputNama').value; // Ambil nilai dari input nama
    const catatan = document.getElementById('floatingTextareaInputCatatan').value; // Ambil nilai dari input catatan
    return {
      nama,
      catatan
    }; // Kembalikan sebagai objek
  }
</script>

<!-- script modal gambar -->
<script>
  function showImage(element) {
    const modalImg = document.getElementById('modalImage');
    modalImg.src = element.src;
  }
</script>
<!-- script modal gambar -->
<!-- script close order -->

<!-- script close order -->

</html>