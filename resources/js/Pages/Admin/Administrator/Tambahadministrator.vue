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
                        <h4 class="mb-0">TAMBAH ADMINISTRATOR</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6"  style="margin-bottom: 10px; color: black;">
                                <label style="margin-bottom: 5px;"><b>Nama Lengkap</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Username</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div>
                                <label for="inputChoosePassword" class="form-label" style="color: black;"><b>Password</b></label>
								<div class="input-group" id="show_hide_password">
					    			<input type="password" class="form-control border-end-0" id="inputChoosePassword"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
								</div>
                            </div>
                            <div>
                                <label style="margin-bottom: 5px; margin-top: 10px;"><b style="color: black">Role</b></label>
                                <div class="col-12">
                                    <select class="form-select" id="inputProductType">
                                        <option value="1" selected>Admin</option>
                                        <option value="2">Juri</option>
                                        <option value="3">Petugas</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label style="margin-bottom: 5px; margin-top: 10px;"><b style="color: black">Lomba</b></label>
                                <div class="col-12">
                                    <select class="form-select" id="inputProductType">
                                        <option value="1" selected>Satu</option>
                                        <option value="2">Dua</option>
                                        <option value="3">Tiga</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-primary" style="width: 200px; margin-right: auto; margin-top: 50px; margin-bottom: 30px" onclick="window.location.href='/administrator'">Tambah</button>
                            <button class="btn btn-danger" style="width: 200px; margin-left: auto; margin-top: 50px; margin-bottom: 30px" onclick="window.location.href='/administrator'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
    </template>
    
   