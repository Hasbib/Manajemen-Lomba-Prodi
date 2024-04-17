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
                        <h4 class="mb-0">DETAIL ADMINISTRATOR</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6"  style="margin-bottom: 10px;">
                                <label style="margin-bottom: 5px; color: black;"><b>Nama Lengkap</b></label>
                                <div style="margin-bottom: 20px;">	Bambang</div>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Username</b></label>
                                <div style="margin-bottom: 20px;">admin</div>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Password</b></label>
                                <div style="margin-bottom: 20px;">**********</div>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Email</b></label>
                                <div style="margin-bottom: 20px;">bambang@gmail.com</div>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Role</b></label>
                                <div style="margin-bottom: 20px;">admin</div>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Lomba</b></label>
                                <div style="margin-bottom: 20px;">Lomba Desain</div>
                            </div>               
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-danger" style="width: 200px; margin: auto; margin-top: 50px; margin-bottom: 30px" onclick="window.location.href='/administrator'">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    
   