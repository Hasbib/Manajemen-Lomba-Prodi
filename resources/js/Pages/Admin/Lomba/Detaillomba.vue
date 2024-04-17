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
                        <h4 class="mb-0">Detail Lomba</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6 label-bawah">
                                <label class="jarak-label"><b>Nama Lomba</b></label>
                                <div class="data-tim">Lomba Desain</div>
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-label"><b>Nama PJ</b></label>
                                <div class="data-tim">Agung</div>
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-label"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <div class="data-tim">Lomba Desain adalah ajang kompetitif di mana beberapa tim bersaing dalam merancang dan menciptakan karya visual yang unik dan inovatif, sesuai dengan tema yang ditentukan.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-label"><b>Kontak PJ</b></label>
                                <div class="data-tim">085000000000</div>
     
                                <label class="jarak-label"><b>Tempat</b></label>
                                <div class="data-tim">Surakarta</div>

                                <div style="margin-top: 10px; color: black;">
                                    <label style="margin-bottom: 5px;"><b>Biaya Pendaftaran</b></label>
                                    <div class="data-tim">20.000</div>
                                </div>
                            </div>    
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-danger btn-kembali" onclick="window.location.href='/lomba'">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
    </template>
    
   