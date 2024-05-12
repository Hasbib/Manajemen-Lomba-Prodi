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
                        <h4 class="mb-0">Detail Berita</h4>
                        <hr />
                        <div>
                            <div class="col-md-6 c-mb10">
                                <label class="c-mb5-black"><b>Nama Sponsor</b></label>
                                <div class="c-mb20">D3TI UNS</div>
                            </div>
                            <div>
                                <label class="col-md-6 c-mb10 warna-hitam"><b>Link</b></label>
                                <div class="c-mb20"><a href="#">Link</a></div>
                            </div>
                            <div class="c-mb10">
                                <label class="c-mb5-black"><b>Gambar</b></label><br>
                                <img src="../../../../../public/bootstrap/images/about_2_img_3.jpg" alt="Product Image"
                                    class="form-control c-maxw400">
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-danger btn-kembali"
                                onclick="window.location.href='/sponsor'">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>