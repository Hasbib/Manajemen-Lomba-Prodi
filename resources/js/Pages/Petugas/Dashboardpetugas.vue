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
                    <a href="/dashboardpetugas">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="/proses">
                        <div class="parent-icon"><i class=""></i>
                        </div>
                        <div class="menu-title" style="padding-left: 25px;">Event</div>
                    </a>
                </li>
                <li>
                    <a href="/tim">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-street-view"></i>
                        </div>
                        <div class="menu-title">Tim</div>
                    </a>
                </li>
                <li>
                    <a href="/partisipan">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-street-view"></i>
                        </div>
                        <div class="menu-title">Partisipan</div>
                    </a>
                </li>
                <li>
                    <a href="/pesan">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-comment-detail"></i>
                        </div>
                        <div class="menu-title">Pesan <span class="alert-count">1</span></div>
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
                            <div class="parent-icon" style="font-size: 30px; margin-left: 10px; "><i class="bx bx-user-circle c-font48"></i>
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
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-info">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0"><b>1265 Partisipan</b></h5>
                                        <br>
                                        <p class="mb-0 font-13">1250 Verified</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0"><b>987 Tim</b></h5>
                                        <br>
                                        <p class="mb-0 font-13">Semua Lomba</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0"><b>987 Tim</b></h5>
                                        <br>
                                        <p class="mb-0 font-13">-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	  
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-warning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0"><b>987 Tim</b></h5>
                                        <br>
                                        <p class="mb-0 font-13">-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center;"><b>Jumlah Pengunjung Setiap Bulan</b></h3>
                        <br><br>
                        <div id="bi-weekly-visit" class="chart-lg"></div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>        
</template>
    