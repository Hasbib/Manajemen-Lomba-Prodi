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
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0 jarak-teks1">Daftar lomba</h4>
                        <div class="card">
                            <h5 class="p-3">Info Tim Lomba</h5>
                            <hr class="garis">
                            <div class="row">
                                <div class="col-md-2 jarak-daftar-lomba">
                                    <label class="c-mb5-black"><b>NAMA TIM</b></label>
                                    <div class="data-tim">Lomba Desain</div>
                                </div>
                                <div class="col-md-2 jarak-daftar-lomba">
                                    <label class="c-mb5-black"><b>INSTANSI</b></label>
                                    <div class="data-tim">Start Green</div>
                                </div>
                                <div class="col-md-2 jarak-daftar-lomba">
                                    <label class="c-mb5-black"><b>LOMBA</b></label>
                                    <div class="data-tim">Lomba Desain</div>
                                </div>
                                <div class="col-md-2 jarak-daftar-lomba">
                                    <label class="c-mb5-black"><b>EMAIL</b></label>
                                    <div class="data-tim">goat@gmail.com</div>
                                </div>
                                <div class="col-md-2 jarak-daftar-lomba">
                                    <label class="c-mb5-black "><b>NO WHATSAPP</b></label>
                                    <div class="data-tim">0850000000s</div>
                                </div>
                                <div class="col-md-2 jarak-daftar-lomba">
                                    <label class="c-mb5-black"><b>STATUS</b></label>
                                    <div class="data-tim">Verified</div>
                                </div>
                                <!-- <div class="col-md-2 jarak-daftar-lomba">
                                    <label class="c-mb5-black"><b>Surat</b></label>
                                    <div class="data-tim"><a href="#">Lihat Surat</a></div>
                                </div> -->
                                <div class="col-md-2 jarak-daftar-lomba">
                                    <label class="c-mb5-black"><b>PEMBAYARAN</b></label>
                                    <div class="data-tim c-mb-70"><a href="#">Lihat Bukti</a></div>
                                </div>
                               
                                <div>
                                    <button onclick="window.location.href='/datatim'" class="btn btn-primary radius-5 isi-data">Isi Data</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="p-3">Input Anggota Tim</h5>
                            <div class="row row-cards jarak-data-peserta">
                            <div class="col-md-6 col-lg-3 crud-max-width260">
                                <div class="card">
                                    <div class="card-header btn-crud ">
                                        <h6><b>Ketua</b></h6>
                                    </div>
                                    <div class="card-body p-4 text-center posisi-mb23">
                                        <div class="btn-crud ">
							                <img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded">
			                            </div>
                                        <br>
                                            <h6><b>Muhammaad Afkar Triwardana</b></h6>
                                        <br>
                                        <div class="posisi-mb7">1234567890</div>
                                        <div class="text-muted">Teknik Informatika</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 crud-max-width260">
                                <div class="card">
                                    <div class="card-header btn-crud" >
                                        <h6><b>Anggota 1</b></h6>
                                    </div>
                                    <div class="card-body p-4 text-center posisi-mb23">
                                        <div class="btn-crud ">
                                            <button class="btn btn-white btn-putih" @click="showPopup"> + </button>
						                </div>
                                        <br>
                                    </div>                        
                                </div>
                            </div>
                            </div>
                        </div>  
                        <div v-if="isPopupVisible" class="popup">
                            <div class="popup-content">
                                <span class="close" @click="hidePopup">&times;</span>
                                <h5>Input Anggota Tim</h5>
                                <hr />
                                <div class="position-relative">
                                    <input type="text" class="form-control ps-5" placeholder="Search by email">
                                    <span class="position-absolute top-50 product-show-edit translate-middle-y"><i class="bx bx-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="p-3">PENGUMPULAN KARYA</h5>
                            <div class="card-body p-4 text-center">
                               <div class="row">
                                    <div class="col-md-3 text-left">
                                        <label class="jarak-teks05" ><b>JUDUL</b></label>                                                
                                        <div class="data-tim">Lomba Desain</div>
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
                                        <div class="data-tim c-mb-70"><a href="#">Link Video</a></div>
                                    </div>
                                    <div>
                                        <button onclick="window.location.href='/pengumpulankarya'" class="btn btn-primary radius-5 isi-data jarak-isi-data">Isi Data</button>
                                    </div>
                                </div>
                            </div>             
                        </div>
                        <div class="btn-dl">
                            <button href="#" class="btn btn-primary radius-5 lebar-btn">Submit</button>
                        </div>           
                    </div>
                </div>   
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
<script>
export default {
  data() {
    return {
      isPopupVisible: false
    };
  },
  methods: {
    showPopup() {
      this.isPopupVisible = true;
    },
    hidePopup() {
      this.isPopupVisible = false;
    }
  }
}
</script>

