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
                    <a href="/index2">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-plus-circle"></i>
                        </div>
                        <div class="menu-title">Event</div>
                    </a>
                    <ul>
                        <li style="padding-left: 35px;"> <a href="/lomba">Lomba</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/administrator">Administrator</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/tim">Tim</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/sponsor">Sponsor</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/berita">Berita</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/setting">Setting</a>
                        </li>
                    </ul>
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
                        <div class="menu-title">Logout</div>
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
                        <h4 class="mb-0" style="margin-top: -5px;">Tabel Tim</h4>
                        <hr style="margin-top: 10px;" />		
                        <button class="btn btn-primary" style="margin-top: -7px; float: right;">Export Excel</button>
                        <label style="margin-right: 10px;">Filter by Status</label> 
						<select class="form-select2">
							<option selected>Semua</option>
							<option>Verified</option>
                            <option>Unverified</option>
						</select>
                        <br><br>
                        <div class="table-responsive">	
                            <table id="example" class="table table-bordered" style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 2px;">ID</th>
                                        <th style="width: 90px;">Nama Tim</th>
                                        <th style="width: 90px;">Lomba</th>
                                        <th style="width: 100px;">No WhatsApp</th>
                                        <th style="width: 120px;">Email</th>
                                        <th style="width: 90px;">Instansi</th>
                                        <th style="width: 60px;">Status</th>
                                        <th style="width: 60px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Start Green</td>
                                        <td>Lomba Desain</td>
                                        <td>0850000000</td>
                                        <td>goat@gmail.com</td>
                                        <td>Universitas</td>
                                        <td>Verified</td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-secondary" onclick="window.location.href='/detailtim'"><i class="bi bi-eye"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        <footer class="page-footer">
            <p class="mb-0">Copyright ©2024 Tim Website OLINAS.</p>
        </footer>
    </div>
</template>

<script>
$(document).ready(function() {
    $('#example').DataTable();
  } );
</script>