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
				<!--breadcrumb-->
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col">
						<div class="card radius-15 card-overview">
							<div class="text-overview">
                                <h6 class="ukuran">UI / UX</h6>
                            </div>
                            <div class="d-grid button-overview"> <a href="#" class="btn btn-primary radius-10">Detail</a>
							</div>
						</div>
					</div>
                    <div class="col">
						<div class="card radius-15 card-overview">
							<div class="text-overview">
                                <h6 class="ukuran">AR / VR</h6>
                            </div>
                            <div class="d-grid button-overview"> <a href="#" class="btn btn-primary radius-10">Detail</a>
							</div>
						</div>
					</div>
                    <div class="col">
						<div class="card radius-15 card-overview">
							<div class="text-overview">
                                <h6 class="ukuran">APLIKASI MOBILE</h6>
                            </div>
                            <div class="d-grid button-overview"> <a href="#" class="btn btn-primary radius-10">Detail</a>
							</div>
						</div>
					</div>
                    <div class="col">
						<div class="card radius-15 card-overview">
							<div class="text-overview">
                                <h6 class="ukuran">DESAIN WEBSITE</h6>
                            </div>
                            <div class="d-grid button-overview"> <a href="#" class="btn btn-primary radius-10">Detail</a>
							</div>
						</div>
					</div>
                    <div class="col">
						<div class="card radius-15 card-overview">
							<div class="text-overview">
                                <h6 class="ukuran">SISTEM KEAMANAN DATA</h6>
                            </div>
                            <div class="d-grid button-overview"> <a href="#" class="btn btn-primary radius-10">Detail</a>
							</div>
						</div>
					</div>
                    <div class="col">
						<div class="card radius-15 card-overview">
							<div class="text-overview">
                                <h6 class="ukuran">MEMBUAT GAME</h6>
                            </div>
                            <div class="d-grid button-overview"> <a href="#" class="btn btn-primary radius-10">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	
	</div>
	<!--end switcher-->      
</template>
    

