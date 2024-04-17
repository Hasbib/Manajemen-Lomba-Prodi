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
                        <h4 class="mb-0">Tambah Sponsor</h4>
                        <hr/>
                        <div class="">
                            <div class=""  style="margin-bottom: 10px;">
                                <label style="margin-bottom: 5px; color: black;"><b>Nama Sponsor</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="">
                                <label style="margin-bottom: 5px; color: black;"><b>Link</b></label>
                                <div class="col-12">
                                    <textarea class="form-control" id="inputProductDescription" rows="2" style="margin-bottom: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="">
                                <label for="formFile" class="form-label" style="color: black;"><b>Logo</b></label>
								<input class="form-control" type="file" id="formFile">
                                <p style="font-size: 13px;">Ukuran 500 x 500</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-primary" style="width: 200px; margin-right: auto; margin-top: 50px; margin-bottom: 30px" onclick="window.location.href='/sponsor'">Tambah</button>
                            <button class="btn btn-danger" style="width: 200px; margin-left: auto; margin-top: 50px; margin-bottom: 30px" onclick="window.location.href='/sponsor'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
    </template>
    
   