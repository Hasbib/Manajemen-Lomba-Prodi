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
                        <h4 class="mb-0">Detail Berita</h4>
                        <hr/>
                        <div class="">
                            <div class="col-md-6"  style="margin-bottom: 10px;">
                                <label style="margin-bottom: 5px;  color: black;"><b>Nama Sponsor</b></label>
                                <div style="margin-bottom: 20px;">D3TI UNS</div>
                            </div>
                            <div class="">
                                <label style="margin-bottom: 5px; color: black;"><b>Link</b></label>
                                <div style="margin-bottom: 20px;">https://s4-eight.vercel.app/</div>
                            </div>
                            <div class=""  style="margin-bottom: 10px;">
                                <label style="margin-bottom: 5px; color: black;"><b>Gambar</b></label><br>
                                <img src="../../../../../public/bootstrap/images/about_2_img_3.jpg" alt="Product Image" class="img-fluid" style="display:flex; margin: auto;" >
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-danger" style="width: 200px; margin: auto; margin-top: 50px; margin-bottom: 30px" onclick="window.location.href='/sponsor'">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    
   