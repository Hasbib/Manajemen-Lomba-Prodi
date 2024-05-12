<template>
    <div class="wrapper">
        <!--start header -->
        <header>
            <div class="c-topbar">
                <nav class="navbar navbar-expand">
                    <!-- Navbar tambah untuk logo di kiri -->
                    <div class="navbar-tambah">
                        <div class="navbar-left">
                            <a href="/">
                                <img src="../../../../../public/bootstrap/images/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- Mobile toggle menu -->
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                    <!-- Search bar -->
                    <div class="search-bar flex-grow-1">
                    </div>
                    <!-- Top menu -->
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Lionel Andres</p>
                                <p class="user-role">leon</p>
                            </div>
                            <div class="parent-icon posisi-icon"><i class="bx bx-user-circle c-font48"></i>
                            </div>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-notifications-list">
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-message-list">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper-baru">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">ANGGOTA TIM</h4>
                        <hr />
                        <div class="row">
                            <div>
                                <label class="jarak-input"><b>Nama Lengkap</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div>
                                <label style="margin-bottom: 5px; margin-top: 10px;"><b
                                        style="color: black">Jabatan</b></label>
                                <div class="col-12">
                                    <select class="form-select" id="inputProductType">
                                        <option value="1" selected>Satu</option>
                                        <option value="2">Dua</option>
                                        <option value="3">Tiga</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="jarak-input"><b>NIK</b></label>
                                <input type="email" class="form-control" style="margin-bottom: 8px;">
                            </div>
                            <div>
                                <label class="jarak-input"><b>Instansi</b></label>
                                <input type="email" class="form-control" style="margin-bottom: 8px;">
                            </div>
                            <div>
                                <label for="formFile" class="form-label jarak-teks12"><b>Bukti Pembayaran</b></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-primary button-tabel-right"
                                onclick="window.location.href='/daftarlomba'">Tambah</button>
                            <button class="btn btn-danger button-tabel-left"
                                onclick="window.location.href='/daftarlomba'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>