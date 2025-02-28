<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KASIR | KALIJAGA</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/img/kalijaga.jpg" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo text-kalijaga text-hijau" href="#">KALIJAGA</a>
        <a class="sidebar-brand brand-logo-mini text-kalijaga" href="../index.php">K</a>

        <!-- <a class="sidebar-brand brand-logo-mini text-kalijaga" href="#">KALIJAGA</a> -->
      </div>
      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Navigasi</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../index.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Pesanan</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Pesanan</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pesanan_makanan.php">Pesanan Makanan</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pesanan_minuman.php">Pesanan Minuman</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">History Pemesanan</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Cari Pesanan">
              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Halo, Satria !</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row text-plain">
          </div>
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pesanan</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Meja No </th>
                          <th> Nama </th>
                          <!-- <th> Menu </th> -->
                          <th> Pembayaran </th>
                          <th> Rincian </th>
                          <th> Total Harga </th>
                          <th> Detail </th>
                          <th> Cetak Pesanan </th>
                          <th> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="pl-2">01</span>
                          </td>
                          <td> Satria </td>
                          <!-- <td> Minuman </td> -->
                          <td> Cash </td>
                          <td>
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <p class="preview-subject">Kopi Cream</p>
                              <p class="text-muted text-small">x2</p>
                            </div>
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <p class="preview-subject">Nasgor Kecap</p>
                              <p class="text-muted text-small">x2</p>
                            </div>
                          </td>
                          <td> Rp 29.000 </td>
                          <td>
                            <div class="btn-group-vertical" role="group" aria-label="Basic example">
                              <button type="button" class="btn btn-outline-secondary " data-bs-toggle="modal" data-bs-target="#staticBackdropRincian"> Pesanan</button>
                              <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdropPembayaran">Pembayaran</button>
                            </div>
                            <!-- Modal -->

                          </td>
                          <td>
                            <a href="">
                              <button type="button" class="btn btn-outline-info btn-icon-text"> Cetak <i class="mdi mdi-printer btn-icon-append"></i>
                              </button>
                            </a>
                          </td>
                          <td>
                            <div class="btn-group ">
                              <button type="button" class="btn btn-outline-success btn-fw" data-toggle="dropdown"> Selesai
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item"> <button type="button" class="btn btn-outline-warning btn-fw">Sedang Dikerjakan</button>
                                </a>
                                <a class="dropdown-item"> <button type="button" class="btn btn-outline-danger btn-fw"> Menunggu Pembayaran</button>
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="pl-2">02</span>
                          </td>
                          <td> Pams </td>
                          <!-- <td> Minuman </td> -->
                          <td> Cashless </td>
                          <td>
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <p class="preview-subject">Kopi Cream</p>
                              <p class="text-muted text-small">x2</p>
                            </div>
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <p class="preview-subject">Nasgor Kecap</p>
                              <p class="text-muted text-small">x2</p>
                            </div>
                          </td>
                          <td> Rp 29.000 </td>
                          <td>
                            <div class="btn-group-vertical" role="group" aria-label="Basic example">
                              <button type="button" class="btn btn-outline-secondary " data-bs-toggle="modal" data-bs-target="#staticBackdropRincian"> Pesanan</button>
                              <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdropPembayaran">Pembayaran</button>
                            </div>
                            <!-- Modal -->

                          </td>
                          <td>
                            <a href="">
                              <button type="button" class="btn btn-outline-info btn-icon-text"> Cetak <i class="mdi mdi-printer btn-icon-append"></i>
                              </button>
                            </a>
                          </td>
                          <td>
                          <div class="btn-group ">
                              <button type="button" class="btn btn-outline-success btn-fw" data-toggle="dropdown"> Selesai
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item"> <button type="button" class="btn btn-outline-warning btn-fw">Sedang Dikerjakan</button>
                                </a>
                                <a class="dropdown-item"> <button type="button" class="btn btn-outline-danger btn-fw"> Menunggu Pembayaran</button>
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title mb-1">Total Pesanan</h4>
                    <p class="text-muted mb-1">2</p>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex flex-row justify-content-between mt-3">
                        <h6 class="card-title mb-1">Makan & Minum</h6>
                        <p class="text-muted mb-1">2</p>
                      </div>
                      <div class="preview-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Makanan</h6>
                            </div>
                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">1</p>
                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Makanan</h6>
                            </div>
                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">1</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdropRincian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropRincian" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropRincian">Rincian Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
              </div>
                <!-- Bagian Sugeng Rawuh -->

                <!-- Bagian Rincian Pesanan -->
                <div class="container mt-4">
                  <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12">
                      <div class="p-12 bg-body-tertiary rounded-4 border shadow">
                        <!-- Rincian Pesanan -->
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
                          <span>Status:</span> <span class="text-warning">Pesanan Sedang Diproses</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div> -->
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdropPembayaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropPembayaran" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropPembayaran">Bukti Pembayaran</h5>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
              <div class="modal-body text-center">
                <img src="../../assets/img/resi-mbanking.jpeg" alt="Bukti Pembayaran" style="width: 100%;">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-kalijaga d-block text-center text-sm-left d-sm-inline-block">KALIJAGA</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../assets/js/off-canvas.js"></script>
  <script src="../assets/js/hoverable-collapse.js"></script>
  <script src="../assets/js/misc.js"></script>
  <script src="../assets/js/settings.js"></script>
  <script src="../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="../assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script>
    document.getElementById('understoodButton').addEventListener('click', function() {
      alert('You clicked "Understood"!');
      // Anda juga bisa menambahkan logika lain di sini, seperti menutup modal secara manual
      var modal = bootstrap.Modal.getInstance(document.getElementById('staticBackdrop'));
      modal.hide();
    });
  </script>
</body>

</html>