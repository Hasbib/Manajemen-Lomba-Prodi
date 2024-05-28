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
                        <h4 class="mb-0">EDIT NILAI</h4>
                        <hr />
                        <div class="row">
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>1. Kreativitas</b></label>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black">Nilai</label>
                                <input type="namalomba" class="form-control c-mb20">
                            </div>
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>2. Estetika dan Komposisi</b></label>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black">Nilai</label>
                                <input type="namalomba" class="form-control c-mb20">
                            </div>
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>3. Kriteria 3</b></label>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black">Nilai</label>
                                <input type="namalomba" class="form-control c-mb20">
                            </div>
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>4. Kriteria 4</b></label>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black">Nilai</label>
                                <input type="namalomba" class="form-control c-mb20">
                            </div>
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>4. Kriteria 5</b></label>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black">Nilai</label>
                                <input type="namalomba" class="form-control c-mb20">
                            </div>

                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-primary button-tabel-right"
                                onclick="window.location.href='/tabellomba'">Simpan</button>
                            <button class="btn btn-danger button-tabel-left"
                                onclick="window.location.href='/tabellomba'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>