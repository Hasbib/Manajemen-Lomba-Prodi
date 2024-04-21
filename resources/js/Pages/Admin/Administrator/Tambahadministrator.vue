<template>
    <div class="wrapper">
        <!--start header -->
        <header>
            <div class="c-topbar">
                <nav class="navbar navbar-expand">
                    <!-- Navbar tambah untuk logo di kiri -->
                    <div class="navbar-tambah">
                        <div class="navbar-left">
                            <img src="../../../../../public/bootstrap/images/logo.png" alt="Logo">
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
                            <div class="parent-icon posisi-icon"><i class="bx bxs-user me-1"></i>
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
                        <h4 class="mb-0">TAMBAH ADMINISTRATOR</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6 margin-top10-crud">
                                <label class="c-mb5-black"><b>Nama Lengkap</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="c-mb5-black"><b>Username</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div>
                                <label for="inputChoosePassword" class="form-label warna-hitam"><b>Password</b></label>
								<div class="input-group" id="show_hide_password">
					    			<input type="password" class="form-control border-end-0" id="inputChoosePassword"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
								</div>
                            </div>
                            <div>
                                <label class="role-add "><b class="warna-hitam">Role</b></label>
                                <div class="col-12">
                                    <select class="form-select" id="inputProductType">
                                        <option value="1" selected>Admin</option>
                                        <option value="2">Juri</option>
                                        <option value="3">Petugas</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="role-add"><b class="warna-hitam">Lomba</b></label>
                                <div class="col-12">
                                    <select class="form-select" id="inputProductType">
                                        <option value="1" selected>Satu</option>
                                        <option value="2">Dua</option>
                                        <option value="3">Tiga</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="form-label c-mt10b"><b>Tanggal</b></label>
								<input type="date" class="form-control label-8">
                            </div>
                        </div>
                        <div class="btn-posisi">
                            <button class="btn btn-primary button-tabel-right" onclick="window.location.href='/administrator'">Tambah</button>
                            <button class="btn btn-danger button-tabel-left" onclick="window.location.href='/administrator'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
    </template>
    
   