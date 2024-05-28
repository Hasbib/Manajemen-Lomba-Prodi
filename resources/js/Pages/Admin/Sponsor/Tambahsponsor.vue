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
                        <h4 class="mb-0">TAMBAH SPONSOR</h4>
                        <hr />
                        <div>
                            <div class="c-mb10">
                                <label class="c-mb5-black"><b>Nama Sponsor</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div>
                                <label class="c-mb5-black"><b>Link</b></label>
                                <div class="col-12">
                                    <textarea class="form-control c-mb10" id="inputProductDescription"
                                        rows="2"></textarea>
                                </div>
                            </div>
                            <div>
                                <label for="formFile" class="form-label warna-hitam"><b>Logo</b></label>
                                <input class="form-control" type="file" id="formFile">
                                <p class="keterangan-foto">Max 2 MB (200 x 200 px)</p>
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-primary button-tabel-right"
                                onclick="window.location.href='/sponsor'">Tambah</button>
                            <button class="btn btn-danger button-tabel-left"
                                onclick="window.location.href='/sponsor'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>