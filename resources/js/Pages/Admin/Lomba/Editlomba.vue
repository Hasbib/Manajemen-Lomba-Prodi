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
                        <h4 class="mb-0">EDIT LOMBA</h4>
                        <hr />
                        <div class="row">
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>Nama Lomba</b></label>
                                <input type="namalomba" class="form-control" value="Lomba Desain">
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Nama PJ</b></label>
                                <input type="email" class="form-control label-8">
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <textarea class="form-control c-mb10" id="deskripsi" rows="4"
                                        value="Lomba Desain adalah ajang kompetitif di mana beberapa tim bersaing dalam merancang dan menciptakan karya visual yang unik dan inovatif, sesuai dengan tema yang ditentukan."></textarea>
                                </div>
                                <div>
                                    <label for="formFile" class="form-label judul-form"><b>Gambar</b></label>
                                    <input class="form-control" type="file" id="formFile">
                                    <p class="keterangan-foto">Ukuran 500 x 500</p>
                                </div>
                                <div>
                                    <label for="formFile" class="form-label judul-form"><b>Sertifikat</b></label>
                                    <input class="form-control" type="file" id="formFile">
                                    <p class="keterangan-foto">Max 2 MB</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Kontak PJ</b></label>
                                <input type="email" class="form-control label-8" value="085000000000">

                                <div>
                                    <label class="c-mb5-black"><b>Tempat</b></label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="c-mt10">
                                    <label class="c-mb5-black"><b>Biaya Pendaftaran</b></label>
                                    <input type="email" class="form-control label-8" value="20.000">
                                </div>
                                <div>
                                    <label class="role-add"><b class="warna-hitam">Kriteria Lomba</b></label>
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">Kreativitas</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck"> Kesesuaian Tahap
                                                Pelaksanaan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">Potensi Produk</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-primary button-tabel-right"
                                onclick="window.location.href='/lomba'">Simpan</button>
                            <button class="btn btn-danger button-tabel-left"
                                onclick="window.location.href='/lomba'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
