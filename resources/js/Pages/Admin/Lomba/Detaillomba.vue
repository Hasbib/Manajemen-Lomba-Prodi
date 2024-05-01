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
                        <h4 class="mb-0">Detail Lomba</h4>
                        <hr />
                        <div class="row">
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>Nama Lomba</b></label>
                                <div class="data-tim">Lomba Desain</div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Nama PJ</b></label>
                                <div class="data-tim">Agung</div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <div class="data-tim">Lomba Desain adalah ajang kompetitif di mana beberapa tim
                                        bersaing dalam merancang dan menciptakan karya visual yang unik dan inovatif,
                                        sesuai dengan tema yang ditentukan.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="c-mb5-black"><b>Gambar</b></label>
                                    <div class="col-12">
                                        <img src="../../../../../public/bootstrap/images/desain-website.jpg"
                                            width="150" />
                                    </div>
                                </div>
                                <div class="col-md-6 jarak-sertifikat">
                                    <label class="c-mb5-black"><b>Sertifikat</b></label>
                                    <div class="col-12">
                                        <img src="../../../../../public/bootstrap/images/sertifikat.png" width="150" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Kontak PJ</b></label>
                                <div class="data-tim">085000000000</div>

                                <label class="c-mb5-black"><b>Tempat</b></label>
                                <div class="data-tim">Surakarta</div>

                                <div class="margin-top5-crud">
                                    <label class="c-mb5-black"><b>Biaya Pendaftaran</b></label>
                                    <div class="data-tim">20.000</div>
                                </div>
                                <div class="margin-top5-crud">
                                    <label class="c-mb5-black"><b>KRITERIA PENILAIAN</b></label>
                                    <div class="data-tim">-</div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-danger btn-kembali"
                                onclick="window.location.href='/lomba'">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
</template>