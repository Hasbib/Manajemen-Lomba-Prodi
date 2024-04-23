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
                        <li class="jarak-dropdown"> <a href="/lomba">Lomba</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/administrator">Administrator</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/tim">Tim</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/sponsor">Sponsor</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/berita">Berita</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/setting">Setting</a>
                        </li>
                    </ul>
                  </li>
                  <li>
                      <a href="/partisipan">
                          <div class="parent-icon"><i class="fadeIn animated bx bx-user-circle c-font25"></i>
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
                    <a href="/rangking">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-trophy"></i>
                        </div>
                        <div class="menu-title">Rangking</div>
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
                            <p class="user-name mb-0">Habib Shohiburrotib</p>			
                            <p class="user-role">habib</p>							
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
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0 jarak-top-kurang5">Tabel Berita</h4>
                        <hr class="c-mt10" />		
                        <button class="btn btn-success"  style="margin-top: -7px;" onclick="window.location.href='/tambahberita'">Tambah Berita</button>
                        <hr class="c-mt10" />
                        <div class="table-responsive">
                            <table id="example" class="table mt-3  table-bordered">
                                <thead class="table-dark">
                                <tr>
                                    <th class="width-id">ID</th>
                                    <th class="crud-width100">Judul</th>
                                    <th class="crud-width130">Deskripsi Awal</th>
                                    <th class="crud-width-40">Penerbit</th>
                                    <th class="crud-custom">Tanggal Upload</th>  
                                    <th class="crud-width-150">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Profil Ketua Emailkomp Periode 2024</td>
                                        <td>Emailkomp adalah sebuah organisasi dibawah pengawasan langsung oleh Prodi Teknik Informatika</td>
                                        <td>Admin</td>   
                                        <td>February 27, 2024</td>
                                        <td class="btn-crud">
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
    </div>
</template>
    
<script>
$(document).ready(function() {
    $('#example').DataTable();
  } );
</script>