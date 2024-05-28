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
                    <!-- Search bar -->
                    <div class="search-bar flex-grow-1">
                    </div>
                    <!-- Top menu -->
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Habib Shohiburrotib</p>
                                <p class="user-role">habib</p>
                            </div>
                            <div class="parent-icon posisi-icon"><i class="bx bx-user-circle c-font48"></i>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper-new">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">DETAIL ADMINISTRATOR</h4>
                        <hr />
                        <div class="row">
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>NAMA LENGKAP</b></label>
                                <div class="data-tim"> Bambang</div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>USERNAME</b></label>
                                <div class="data-tim">admin</div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>PASSWORD</b></label>
                                <div class="data-tim">**********</div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>EMAIL</b></label>
                                <div class="data-tim">bambang@gmail.com</div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>ROLE</b></label>
                                <div class="data-tim">admin</div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>LOMBA</b></label>
                                <div class="data-tim">Lomba Desain</div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>TANGGAL</b></label>
                                <div class="data-tim">1 Maret 2024</div>
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-danger btn-kembali"
                                onclick="window.location.href='/administrator'">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>