<template>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div> 
                    <a href="/">
                        <img src="../../../../public/bootstrap/images/logocb.png" class="logo-icon" alt="logo icon">
                    </a>
                </div>
                <div class="toggle-icon ms-auto"><i class="fadeIn animated bx bx-menu"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/dashboardjuri">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="/lombajuri">
                        <div class="parent-icon"><i class="bx bx-award"></i>
                        </div>
                        <div class="menu-title">Lomba</div>
                    </a>
                </li>
                <li>
                    <a href="/rangkingjuri">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-trophy"></i>
                        </div>
                        <div class="menu-title">Rangking</div>
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
                        <li class="jarak-dropdown"> <a href="/dashboardjuri">JURI</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/dashboardpetugas">PETUGAS</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/overviewpeserta">PESERTA</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/index2">ADMIN</a>
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
                                <p class="user-name mb-0">Juri</p>						
                            </div>
                            <div class="parent-icon posisi-icon"><i class="bx bx-user-circle c-font48"></i>
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
				<!--breadcrumb-->
				<div class="tf__activities_slider_area">
                    <div class="container">
                        <!--breadcrumb-->
                        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                            <div class="col">
                                <div class="card radius-15 card-overview">
                                    <img src="../../../../public/bootstrap/images/desain.jpg" alt="New Image" class="border-radius">
                                    <label class="judul-overview">UI / UX</label>
                                    <a class="btn btn-primary btn-landing-page2" href="/tabellomba">Lihat Peserta</a>
                                </div>
                            </div>
                            <div class="col">
                                    <div class="card radius-15 card-overview">
                                        <img src="../../../../public/bootstrap/images/ar-vr.jpg" alt="New Image" class="border-radius">
                                        <label class="judul-overview">AR / VR</label>
                                        <a class="btn btn-primary btn-landing-page2" href="/tabellomba">Lihat Peserta</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 card-overview">
                                        <img src="../../../../public/bootstrap/images/aplikasi-mobile.jpg" alt="New Image" class="border-radius">
                                        <label class="judul-overview">APLIKASI MOBILE</label>
                                        <a class="btn btn-primary btn-landing-page2" href="/tabellomba">Lihat Peserta</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 card-overview">
                                        <img src="../../../../public/bootstrap/images/desain-website.jpg" alt="New Image" class="border-radius">
                                        <label class="judul-overview">DESAIN WEBSITE</label>
                                        <a class="btn btn-primary btn-landing-page2" href="/tabellomba">Lihat Peserta</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 card-overview">
                                        <img src="../../../../public/bootstrap/images/sistem-keamanan-data.jpg" alt="New Image" class="border-radius">
                                        <label class="judul-overview">SISTEM KEAMANAN DATA</label>
                                        <a class="btn btn-primary btn-landing-page2" href="/tabellomba">Lihat Peserta</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 card-overview">
                                        <img src="../../../../public/bootstrap/images/membuat-game.jpg" alt="New Image" class="border-radius">
                                        <label class="judul-overview">UI / UX</label>
                                        <a class="btn btn-primary btn-landing-page2" href="/tabellomba">Lihat Peserta</a>
                                    </div>
                                </div> 
                            </div>
                        <!--end row-->
                    </div>
                </div>				
                <!--end row-->
			</div>
		</div>
    </div>        
</template>
    

