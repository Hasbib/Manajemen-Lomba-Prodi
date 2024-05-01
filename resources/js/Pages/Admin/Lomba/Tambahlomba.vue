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
                        <h4 class="mb-0">Tambah Lomba</h4>
                        <hr />
                        <div class="row">
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>Nama Lomba</b></label>
                                <input type="namalomba" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Nama PJ</b></label>
                                <input type="email" class="form-control label-8">
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <textarea class="form-control c-mb10" id="deskripsi" rows="4"></textarea>
                                </div>
                                <div>
                                    <label for="formFile" class="form-label judul-form"><b>Gambar</b></label>
                                    <input class="form-control" type="file" id="formFile">
                                    <p class="keterangan-foto">Ukuran 500 x 500</p>
                                </div>
                                <div>
                                    <label for="formFile" class="form-label judul-form"><b>Sertifikat</b></label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Kontak PJ</b></label>
                                <input type="email" class="form-control label-8">
                                <div>
                                    <label class="c-mb5-black c-mt5"><b>Tempat</b></label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="c-mt10">
                                    <label class="c-mb5-black"><b>Biaya Pendaftaran</b></label>
                                    <input type="email" class="form-control label-8">
                                </div>
                                <div class="c-mt10">
                                    <label class="c-mb5-black c-mt10"><b>Kriteria Penilaian</b></label>
                                    <div id="kriteriaPenilaianContainer">
                                        <input type="email" class="form-control label-8">
                                    </div>
                                    <button id="tambahKriteriaButton" class="btn btn-secondary"><i
                                            class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-primary button-tabel-right"
                                onclick="window.location.href='/lomba'">Tambah</button>
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
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Menangkap elemen tombol tambah
    var tambahKriteriaButton = document.getElementById('tambahKriteriaButton');

    // Menambahkan event listener ketika tombol tambah diklik
    tambahKriteriaButton.addEventListener('click', function () {
        // Membuat elemen input baru
        var inputBaru = document.createElement('input');
        inputBaru.setAttribute('type', 'email');
        inputBaru.classList.add('form-control', 'label-8');

        // Mendapatkan container untuk kriteria penilaian
        var kriteriaPenilaianContainer = document.getElementById('kriteriaPenilaianContainer');

        // Menambahkan input baru ke dalam container
        kriteriaPenilaianContainer.appendChild(inputBaru);
    });
});
</script>