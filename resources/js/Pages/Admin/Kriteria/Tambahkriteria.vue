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
                        <h4 class="mb-0">Tambah Kriteria Lomba</h4>
                        <hr />
                        <div class="row">
                            <div class="c-mt10">
                                <label class="c-mb5-black c-mt10"><b>Kriteria Penilaian</b></label>
                                <div id="kriteriaPenilaianContainer">
                                    <input type="email" class="form-control label-8">
                                </div>
                                <button id="tambahKriteriaButton" class="btn btn-secondary"><i
                                        class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-primary button-tabel-right"
                                onclick="window.location.href='/kriteria'">Tambah</button>
                            <button class="btn btn-danger button-tabel-left"
                                onclick="window.location.href='/kriteria'">Batal</button>
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