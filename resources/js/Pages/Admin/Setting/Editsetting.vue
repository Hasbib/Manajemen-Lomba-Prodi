<template>
    <div class="wrapper">
        <!--start header -->
        <header>
            <div class="c-topbar">
                <nav class="navbar navbar-expand">
                    <!-- Navbar tambah untuk logo di kiri -->
                    <div class="navbar-tambah">
                        <a href="/">
                            <div class="navbar-left">
                                <img src="../../../../../public/bootstrap/images/logo.png" alt="Logo">
                            </div>
                        </a>
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
                        <h4 class="mb-0">Edit Event</h4>
                        <hr/>
                        <div>
                            <div class="c-mb10">
                                <label class="c-mb5-black"><b>Nama Event</b></label>
                                <input type="email" class="form-control" value="Olinas">
                            </div>  
                            <div class="c-mb10">
                                <label class="c-mb5-black"><b>Judul</b></label>
                                <input type="email" class="form-control" value="OLINAS 2024">
                            </div>
                            <div class="c-mb10">
                                <label class="c-mb5-black"><b>Sub Judul</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="c-mb10">
                                <label class="c-mb5-black"><b>Judul Deskripsi</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div>
                                <label class="c-mb5-black"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <textarea class="form-control c-mb10" id="inputProductDescription" rows="4" value="Olinas adalah"></textarea>
                                </div>
                            </div>
                            <div>
                                <label class="form-label warna-hitam"><b>Tanggal Mulai</b></label>
								<input type="date" class="form-control label-8">
                            </div>
                            <div>
                                <label class="form-label warna-hitam"><b>Tanggal Berakhir</b></label>
								<input type="date" class="form-control label-8">
                            </div>
                            <div>
                                <label for="formFile" class="form-label warna-hitam"><b>Logo 1</b></label>
								<input class="form-control" type="file" id="formFile">
                                <p class="keterangan-foto">Max 2 MB ( 180 x 55 px )</p>
                            </div>
                            <div>
                                <label for="formFile" class="form-label warna-hitam jarak-top-lebih6"><b>Logo 2 (background)</b></label>
								<input class="form-control" type="file" id="formFile">
                                <p class="keterangan-foto">Max 2 MB ( 1200 x 800 px )</p>
                            </div>
                            <div>
                                <label for="formFile" class="form-label warna-hitam jarak-top-lebih6"><b>Logo 3</b></label>
								<input class="form-control" type="file" id="formFile">
                                <p class="keterangan-foto">Max 2 MB ( 450 x 450 px )</p>
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-primary button-tabel-right" onclick="window.location.href='/setting'">Simpan</button>
                            <button class="btn btn-danger button-tabel-left" onclick="window.location.href='/setting'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
</template>
    
   