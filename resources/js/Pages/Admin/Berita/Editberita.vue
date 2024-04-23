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
                        <h4 class="mb-0">Edit Berita</h4>
                        <hr/>
                        <div>
                            <div class="c-mb10">
                                <label class="c-mb5-black"><b>Judul</b></label>
                                <input type="email" class="form-control" value="Profil Ketua Emailkomp Periode 2024">
                            </div>
                            <div>
                                <label class="c-mb5-black"><b>Deskripsi Awal</b></label>
                                <div class="col-12">
                                    <textarea class="form-control c-mb10" id="inputProductDescription" rows="2" value="Emailkomp adalah sebuah organisasi dibawah pengawasan langsung oleh Prodi Teknik Informatika"></textarea>
                                </div>
                            </div>
                            <div>
                                <label class="c-mb5-black"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <textarea class="form-control c-mb10" id="inputProductDescription" rows="7" value="Emailkomp adalah sebuah organisasi dibawah pengawasan langsung oleh Prodi Teknik Informatika"></textarea>
                                </div>
                            </div>
                            <div class="c-mb10">
                                <label class="c-mb5-black"><b>Penerbit</b></label>
                                <input type="email" class="form-control" value="Admin">
                            </div>
                            <div>
                                <label class="form-label warna-hitam"><b>Upload</b></label>
								<input type="date" class="form-control jarak-btn8">
                            </div>
                            <div>
                                <label for="formFile" class="form-label warna-hitam"><b>Upload Gambar</b></label>
								<input class="form-control" type="file" id="formFile">
                                <p class="keterangan-foto">Ukuran 500 x 500</p>
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-primary button-tabel-right" onclick="window.location.href='/berita'">Simpan</button>
                            <button class="btn btn-danger button-tabel-left" onclick="window.location.href='/berita'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    
   