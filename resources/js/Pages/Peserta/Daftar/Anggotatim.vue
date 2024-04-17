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
                        <h4 class="mb-0">ANGGOTA TIM</h4>
                        <hr/>
                        <div class="row">
                            <div>
                                <label class="jarak-input"><b>Nama Lengkap</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div>
                                <label style="margin-bottom: 5px; margin-top: 10px;"><b style="color: black">Jabatan</b></label>
                                <div class="col-12">
                                    <select class="form-select" id="inputProductType">
                                        <option value="1" selected>Satu</option>
                                        <option value="2">Dua</option>
                                        <option value="3">Tiga</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="jarak-input"><b>NIK</b></label>
                                <input type="email" class="form-control" style="margin-bottom: 8px;">
                            </div>
                            <div>
                                <label class="jarak-input"><b>Instansi</b></label>
                                <input type="email" class="form-control" style="margin-bottom: 8px;">
                            </div>
                            <div>
                                <label for="formFile" class="form-label jarak-teks12"><b>Bukti Pembayaran</b></label>
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
    
   