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
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item">
                                </li>                             
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0" style="margin-top: -5px;">Tabel Berita</h4>
                        <hr style="margin-top: 10px;" />		
                        <button class="btn btn-success"  style="margin-top: -7px;" onclick="window.location.href='/tambahberita'">Tambah Berita</button>
                        <hr style="margin-top: 10px;" />
                        <div class="table-responsive">
                            <table id="example" class="table mt-3  table-bordered">
                                <thead class="table-dark">
                                <tr>
                                    <th style="width: 1px;">ID</th>
                                    <th style="width: 100px;">Judul</th>
                                    <th style="width: 130px;">Deskripsi Awal</th>
                                    <th style="width: 40px;">Penerbit</th>
                                    <th style="font-size: 12px; width: 75px">Tanggal Upload</th>  
                                    <th style="width: 145px;">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Profil Ketua Emailkomp Periode 2024</td>
                                        <td>Emailkomp adalah sebuah organisasi dibawah pengawasan langsung oleh Prodi Teknik Informatika</td>
                                        <td>Admin</td>   
                                        <td>29 Maret 2024</td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-secondary" onclick="window.location.href='/detailberita'"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-primary" onclick="window.location.href='/editberita'"><i class="bi bi-pencil-square"></i></button>    
                                            <button class="btn btn-danger" ><i class="bi bi-trash"></i></button>                              
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