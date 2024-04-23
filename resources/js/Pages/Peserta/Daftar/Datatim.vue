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
                                <p class="user-name mb-0">Lionel Andres</p>			
                                <p class="user-role">leon</p>						
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
                        <h4 class="mb-0">INFO TIM LOMBA</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6 c-mb10">
                                <label class="jarak-input"><b>Nama Tim</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-input"><b>Instansi</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-input"><b>Lomba</b></label>
                                <input type="email" class="form-control c-mb8">
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-input"><b>No WhatsApp</b></label>
                                <input type="email" class="form-control c-mb8">
                            </div>
                            <div class="col-md-6">
                                <label class="jarak-input"><b>Email</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="formFile" class="form-label jarak-teks11"><b>Surat</b></label>
								<input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-md-6">
                                <label for="formFile" class="form-label jarak-teks12"><b>Bukti Pembayaran</b></label>
								<input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-primary button-tabel-right" onclick="window.location.href='/daftarlomba'">Simpan</button>
                            <button class="btn btn-danger button-tabel-left" onclick="window.location.href='/daftarlomba'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
    </template>
    
   