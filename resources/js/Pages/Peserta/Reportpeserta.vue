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
                                <p class="user-name mb-0">Lionel Andres</p>			
                                <p class="user-role">leon</p>									
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
                <div class="card card-height200">
                    <div class="card-body">
                        <label class="keterangan jarak-bottom-kurang20">TIDAK LOLOS</label>
                        <div class="d-flex justify-content-end">
                                <a class="btn btn-success crud-width-150" href="/detailtimreport">Dowload</a>
                            </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-7 label-left">
                                <h5 class="judul-report"><b>Poster Keamanan Data</b></h5>
                                <div class="judul-lomba-index">Olinas Periode 2024</div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end align-items-center jarak-af">
                                <a class="btn btn-primary crud-width-150" href="/detailtimreport">Detail</a>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    