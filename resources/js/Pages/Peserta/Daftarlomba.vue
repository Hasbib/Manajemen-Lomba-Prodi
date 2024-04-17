<template>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="../../../../public/bootstrap/images/logocb.png" class="logo-icon" alt="logo icon">
                </div>
                <div class="toggle-icon ms-auto"><i class="fadeIn animated bx bx-menu"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/overviewpeserta">
                        <div class="parent-icon"><i class='bx bx-category'></i>
                        </div>
                        <div class="menu-title">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="/daftarlomba">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-street-view"></i>
                        </div>
                        <div class="menu-title">Daftar Lomba</div>
                    </a>
                </li>
                <li>
                    <a href="/profilpeserta">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">Profil</div>
                    </a>
                </li>
                <li>
                    <a href="/notifikasipeserta">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">Notifikasi<span class="alert-count">1</span></div>
                    </a>
                </li>
                <li>
                    <a href="/reportpeserta">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-comment-detail"></i>
                        </div>
                        <div class="menu-title">Report <span class="alert-count">1</span></div>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-log-out"></i>
                        </div>
                        <div class="menu-title">Keluar</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-plus-circle"></i>
                        </div>
                        <div class="menu-title">SEMENTARA</div>
                    </a>
                    <ul>
                        <li style="padding-left: 35px;"> <a href="/dashboardjuri">JURI</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/dashboardpetugas">PETUGAS</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/overviewpeserta">PESERTA</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/index2">ADMIN</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Habib</p>						
                            </div>
                            <div class="parent-icon" style="font-size: 30px; margin-left: 10px; "><i class="bx bxs-user me-1"></i>
                            </div>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-notifications-list">
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">	
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-message-list">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>		
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0 jarak-teks1">Daftar lomba</h4>
                        <div class="row">
                        </div>
                        <div class="card card-panjang">
                            <h5 class="p-3">Info Tim Lomba</h5>
                            <hr class="garis">
                            <div class="row">
                                <div class="col-md-3 jarak-daftar-lomba">
                                    <label class="judul-daftar-lomba"><b>PARTISIPAN</b></label>
                                    <div class="data-tim">Lomba Desain</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="judul-daftar-lomba"><b>NAMA TIM</b></label>
                                    <div class="data-tim">Start Green</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="judul-daftar-lomba"><b>LOMBA</b></label>
                                    <div class="data-tim">Lomba Desain</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="judul-daftar-lomba"><b>EMAIL</b></label>
                                    <div class="data-tim">goat@gmail.com</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="judul-daftar-lomba "><b>NO WHATSAPP</b></label>
                                    <div class="data-tim">0850000000s</div>
                                </div>
                                <div class="col-md-3 jarak-daftar-lomba">
                                    <label class="judul-daftar-lomba"><b>INSTASNSI</b></label>
                                    <div class="data-tim">Universitas</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="judul-daftar-lomba"><b>STATUS</b></label>
                                    <div class="data-tim">Verified</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="judul-daftar-lomba"><b>Surat</b></label>
                                    <div class="data-tim">-----</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="judul-daftar-lomba"><b>PEMBAYARAN</b></label>
                                    <div class="data-tim">images.jpg</div>
                                </div>
                                <div>
                                    <button onclick="window.location.href='/datatim'" class="btn btn-primary radius-5 isi-data">Isi Data</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="p-3">Input Anggota Tim</h5>
                            <div class="row row-cards jarak-data-peserta">
                            <div class="col-md-6 col-lg-3" style="max-width: 260px;">
                                <div class="card">
                                    <div class="card-header" style="text-align: center;">
                                        <h6><b>Ketua</b></h6>
                                    </div>
                                    <div class="card-body p-4 text-center" style="margin-bottom: 23px;">
                                        <div style="text-align: center;">
							                <img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded">
			                            </div>
                                        <br>
                                            <h6><b>Muhammaad Afkar Triwardana</b></h6>
                                        <br>
                                        <div style="margin-bottom: 7px;">1234567890</div>
                                        <div class="text-muted">Teknik Informatika</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3" style="max-width: 260px;">
                                <div class="card">
                                    <div class="card-header" style="text-align: center;">
                                        <h6><b>Anggota 1</b></h6>
                                    </div>
                                    <div class="card-body p-4 text-center" style="margin-bottom: 23px;">
                                        <div style="text-align: center;">
                                            <button class="btn btn-white btn-putih" onclick="window.location.href='/anggotatim'"> + </button>
						                </div>
                                        <br>
                                    </div>                        
                                </div>
                            </div>
                            </div>
                        </div>  
                        <div class="card" style="height: 220px;">
                            <h5 class="p-3">PENGUMPULAN KARYA</h5>
                            <div class="card-body p-4 text-center">
                               <div class="row">
                                    <div class="col-md-3 text-left">
                                        <label class="jarak-teks05" ><b>JUDUL</b></label>                                                
                                        <div class="data-tim">Lo,ba Desain</div>
                                    </div>
                                    <div class="col-md-3 text-left">
                                        <label class="jarak-teks05"><b>DESKRIPSI</b></label>
                                        <div class="data-tim" >Wait</div>
                                    </div>
                                    <div class="col-md-3 text-left">
                                        <label class="jarak-teks05"><b>File</b></label>
                                        <div class="data-tim" ><a href="#">Lihat File</a></div>
                                    </div>
                                    <div class="col-md-3 text-left">
                                        <label class="jarak-teks05"><b>LINK VIDEO</b></label>
                                        <div class="data-tim" >s4-eight.vercel.app/</div>
                                    </div>
                                    <div>
                                        <button onclick="window.location.href='/pengumpulankarya'" class="btn btn-primary radius-5 isi-data jarak-isi-data">Isi Data</button>
                                    </div>
                                </div>
                            </div>             
                        </div>
                        <div style="text-align: right;">
                            <button href="#" class="btn btn-primary radius-5">Submit</button>
                        </div>           
                    </div>
                </div>   
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    