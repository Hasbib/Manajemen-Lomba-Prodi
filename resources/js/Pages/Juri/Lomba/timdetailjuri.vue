<template>
    <div class="wrapper">
        <!--start header -->
        <header>
            <div class="c-topbar">
                <nav class="navbar navbar-expand">
                    <!-- Navbar tambah untuk logo di kiri -->
                    <div class="navbar-tambah">
                        <div class="navbar-left">
                            <a href="/">
                                <img src="../../../../../public/bootstrap/images/logo.png" alt="Logo">   
                            </a>
                        </div>
                    </div>
                    <!-- Mobile toggle menu -->
                    <!-- Search bar -->
                    <div class="search-bar flex-grow-1">
                    </div>
                    <!-- Top menu -->
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Petugas</p>					
                            </div>
                            <div class="parent-icon posisi-icon"><i class="bx bx-user-circle c-font48"></i>
                            </div>
                        </ul>
                    </div>		
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper-new">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">Detail Tim Start Green</h4>
                        <div v-if="isPopupVisible" class="popup">
                            <div class="popup-content">
                                <span class="close" @click="hidePopup">&times;</span>
                                <h5>Input Notifikasi</h5>
                                <hr />
                                <div>
                                <label class="c-mb5-black c-ml20"><b>Deskripsi</b></label>
                                <div class="col-11">
                                    <textarea class="form-control c-mb10 c-ml20" id="inputProductDescription" rows="3" placeholder="Tulis Notifikasi"></textarea>
                                </div>
                                <button class="btn btn-primary crud-width100 btn-mid c-mt40" onclick="window.location.href='timpetugas'">Kirim</button>
                            </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 c-mb10">
                                <label class="c-mb5-black"><b>NAMA TIM</b></label>
                                <div class="c-mb20">Lomba Desain</div>
                            </div>
                            <div class="col-md-2">
                                <label class="c-mb5-black"><b>INSTASNSI</b></label>
                                <div class="c-mb20">Start Green</div>
                            </div>
                            <div class="col-md-2">
                                <label class="c-mb5-black"><b>LOMBA</b></label>
                                <div class="c-mb20">Lomba Desain</div>
                            </div>
                            <div class="col-md-3">
                                <label class="c-mb5-black"><b>EMAIL</b></label>
                                <div class="c-mb20">goat@gmail.com</div>
                            </div>
                            <div class="col-md-2">
                                <label class="c-mb5-black"><b>NO WHATSAPP</b></label>
                                <div class="c-mb20">0850000000s</div>
                            </div>
                            <div class="col-md-3">
                                <label class="c-mb5-black"><b>SERTIFIKAT</b></label>
                                <div class="c-mb20">Belum Ada</div>
                            </div>
                            <div class="col-md-2">
                                <label class="c-mb5-black"><b>STATUS</b></label>
                                <div class="c-mb20">Verified</div>
                            </div>
                            <!-- <div class="col-md-2">
                                <label class="c-mb5-black"><b>Surat</b></label>
                                <div class="c-mb20"><a href="#">Lihat Surat</a></div>
                            </div> -->
                            <div class="col-md-3">
                                <label class="c-mb5-black"><b>PEMBAYARAN</b></label>
                                <div class="c-mb20"><a href="#">Lihat Bukti</a></div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row row-cards justify-content-center">
                            <div class="col-md-6 col-lg-3 crud-max-width260">
                                <div class="card">
                                    <div class="card-header btn-crud">
                                        <h6><b>Ketua</b></h6>
                                    </div>
                                    <div class="card-body p-4 text-center posisi-mb23">
                                        <div class="btn-crud">
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
                                    <div class="card-header btn-crud">
                                        <h6><b>Anggota 1</b></h6>
                                    </div>
                                    <div class="card-body p-4 text-center posisi-mb23">
                                        <div class="btn-crud">
							                <img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded">
						                </div>
                                        <br>
                                        <h6><b>Muhammaad Haidar</b></h6>
                                        <br>
                                        <div class="posisi-mb7">1234567890</div>
                                        <div class="text-muted">Teknik Informatika</div>
                                    </div>                        
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 crud-max-width260">
                                <div class="card">
                                    <div class="card-header btn-crud">
                                        <h6><b>Anggota 2</b></h6>
                                    </div>
                                    <div class="card-body p-4 text-center posisi-mb23">
                                        <div class="btn-crud">
							                <img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded">
						                </div>
                                        <br>
                                        <h6><b>Iqbal Farhan Rasyid</b></h6>
                                        <br>
                                        <div class="posisi-mb7">1234567890</div>
                                        <div class="text-muted">Teknik Informatika</div>
                                    </div>                        
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 crud-max-width260">
                                <div class="card">
                                    <div class="card-header btn-crud">
                                        <h6><b>Anggota 3</b></h6>
                                    </div>
                                    <div class="card-body p-4 text-center posisi-mb23">
                                        <div class="btn-crud">
							                <img src="http://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded">
						                </div>
                                        <br>
                                        <h6><b>Lutfi Iffah Lathifah</b></h6>
                                        <br>
                                        <div class="posisi-mb7">1234567890</div>
                                        <div class="text-muted">Teknik Informatika</div>
                                    </div>                        
                                </div>
                            </div>
                        </div>
                        <div class="card card-height400">
                            <div class="card-body p-4 text-center">
                                <h6 class="sub-judul-tim" >PENGUMPULAN KARYA</h6>
                               <div class="row">
                                    <div class="col-md-3 label-left">
                                        <label class="jarak-teks05" ><b>JUDUL</b></label>                                                
                                        <div class="c-mb20">Platform Pendidikan Interaktif</div>
                                    </div>
                                    <div class="col-md-3 label-left">
                                        <label class="jarak-teks05"><b>DESKRIPSI</b></label>
                                        <div class="c-mb20" >Platform Pendidikan Interaktif “LearnXperience”</div>
                                    </div>
                                    <div class="col-md-3 label-left">
                                        <label class="jarak-teks05"><b>File</b></label>
                                        <div class="c-mb20" ><a href="#">Lihat File</a></div>
                                    </div>
                                    <div class="col-md-3 label-left">
                                        <label class="jarak-teks05"><b>LINK VIDEO</b></label>
                                        <div class="data-tim" ><a href="#">Link Video</a></div>
                                    </div>
                                </div>
                            </div>                        
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
