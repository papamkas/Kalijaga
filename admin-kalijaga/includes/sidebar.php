<?php
$current_page = $_SERVER['REQUEST_URI']; // Ambil seluruh URL setelah domain
?>

<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="/kalijaga/admin-kalijaga/" class="logo"> <!-- Sesuaikan path absolut -->
                <h1 class="text-kalijaga text-hijau">Kalijaga</h1>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <a href="/kalijaga/admin-kalijaga/">
                        <h4 class="text-section">Dashboard</h4>
                    </a>
                </li>
                <!-- Dashboard -->
                <li class="nav-item <?= (strpos($current_page, '/kalijaga/admin-kalijaga/index.php') !== false || $current_page === '/kalijaga/admin-kalijaga/') ? 'active' : '' ?>">
                    <a href="/kalijaga/admin-kalijaga/index.php"> <!-- Sesuaikan path absolut -->
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- MENU -->
                <li class="nav-item <?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/menu') !== false ? 'active' : '' )?>">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Menu</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/menu') !== false ? 'show' : '') ?>" id="base">
                        <ul class="nav nav-collapse">
                            <li class="<?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/menu/menu_semua.php') !== false ? 'active' : '') ?>">
                                <a href="/kalijaga/admin-kalijaga/pages/menu/menu_semua.php"> <!-- Sesuaikan path absolut -->
                                    <span class="sub-item">Semua Menu</span>
                                </a>
                            </li>
                            <li class="<?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/menu/menu_buat_menu_baru.php') !== false ? 'active' : '' )?>">
                                <a href="/kalijaga/admin-kalijaga/pages/menu/menu_buat_menu_baru.php"> <!-- Sesuaikan path absolut -->
                                    <span class="sub-item">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- PESANAN -->
                <li class="nav-item <?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/pesanan') !== false ? 'active' : '' )?>">
                    <a href="/kalijaga/admin-kalijaga/pages/pesanan/pesanan.php"> <!-- Sesuaikan path absolut -->
                        <i class="fas fa-th-list"></i>
                        <p>Pesanan</p>
                    </a>
                </li>

                <!-- MEJA -->
                <li class="nav-item <?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/meja') !== false ? 'active' : '') ?>">
                    <a href="/kalijaga/admin-kalijaga/pages/meja/meja.php"> <!-- Sesuaikan path absolut -->
                        <i class="fas fa-table"></i>
                        <p>Meja</p>
                    </a>
                </li>

                <!-- LAPORAN DAN STATISTIK -->
                <li class="nav-item <?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/laporan') !== false ? 'active' : '' )?>">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-book-open"></i>
                        <p>Laporan dan Statistik</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/laporan') !== false ? 'show' : '' )?>" id="tables">
                        <ul class="nav nav-collapse">
                            <li class="<?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/laporan/penjualan.php') !== false ? 'active' : '' )?>">
                                <a href="/kalijaga/admin-kalijaga/pages/laporan/penjualan.php"> <!-- Sesuaikan path absolut -->
                                    <span class="sub-item">Laporan Penjualan</span>
                                </a>
                            </li>
                            <li class="<?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/laporan/penjualan_histori.php') !== false ? 'active' : '' )?>">
                                <a href="/kalijaga/admin-kalijaga/pages/laporan/penjualan_histori.php"> <!-- Sesuaikan path absolut -->
                                    <span class="sub-item">Histori Penjualan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- MANAGE AKUN -->
                <li class="nav-item <?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/akun') !== false ? 'active' : '' )?>">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-user-shield"></i>
                        <p>Manage Akun</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/akun') !== false ? 'show' : '' )?>" id="submenu">
                        <ul class="nav nav-collapse">
                            <li class="<?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/akun/akun.php') !== false ? 'active' : '' )?>">
                                <a href="/kalijaga/admin-kalijaga/pages/akun/akun.php"> <!-- Sesuaikan path absolut -->
                                    <span class="sub-item">Akun</span>
                                </a>
                            </li>
                            <li class="<?= (strpos($current_page, '/kalijaga/admin-kalijaga/pages/akun/akun_register.php') !== false ? 'active' : '' )?>">
                                <a href="/kalijaga/admin-kalijaga/pages/akun/akun_register.php"> <!-- Sesuaikan path absolut -->
                                    <span class="sub-item">Register Akun</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>