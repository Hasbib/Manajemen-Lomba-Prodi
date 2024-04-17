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
                        <img src="../../../../../public/bootstrap/images/profil.png" class="user-img avatar-all" alt="user avatar">
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
                        <h4 class="mb-0">Tambah Lomba</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6 label-bawah">
                                <label class="jarak-label"><b>Nama Lomba</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-label"><b>Nama PJ</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-label"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <textarea class="form-control label-bawah" id="inputProductDescription" rows="7"></textarea>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-label"><b>Kontak PJ</b></label>
                                <input type="email" class="form-control label-8">
     
                                <div>
                                    <label class="jarak-label"><b>Tempat</b></label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="jarak-hr">
                                    <label class="jarak-label"><b>Biaya Pendaftaran</b></label>
                                    <input type="email" class="form-control label-8">
                                </div>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-primary button-tabel-right" onclick="window.location.href='/lomba'">Tambah</button>
                            <button class="btn btn-danger button-tabel-left" onclick="window.location.href='/lomba'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
    </template>
    
   