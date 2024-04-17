<template>
    <div class="wrapper">
        <!--start header -->
        <header>
            <div class="navbar-tambah">
                <div class="navbar-left">
                    <img src="../../../../../public/bootstrap/images/logo.png" alt="Logo">
                </div>
                <div class="navbar-right" style="margin-left: auto;">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#">
						<div class="user-info ps-3">
							<p class="user-name mb-0">Habib</p>						
						</div>
                        <img src="../../../../../public/bootstrap/images/profil.png" class="user-img" alt="user avatar" style="width: 38px; height: 38px;">
					</a>
                </div>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper-tambah">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">PENGUMPULAN KARYA</h4>
                        <hr/>
                        <div class="row">
                            <div>
                                <label class="jarak-input"><b>Judul</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div>
                                <label class="jarak-input"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <textarea class="form-control" id="inputProductDescription" rows="7" style="margin-bottom: 10px;"></textarea>  
                                </div>
                            </div>
                            <div>
                                <label class="jarak-input"><b>Link</b></label>
                                <input type="email" class="form-control" style="margin-bottom: 8px;">
                            </div>
                            <div>
                                <label for="formFile" class="form-label jarak-teks12"><b>File</b></label>
								<input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-primary button-tabel-right" onclick="window.location.href='/daftarlomba'">Tambah</button>
                            <button class="btn btn-danger button-tabel-left" onclick="window.location.href='/daftarlomba'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
    </template>
    
   