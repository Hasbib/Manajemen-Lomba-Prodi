<template>
    <!--=================================
       MAIN MENU START
    ==================================-->
   <nav class="navbar navbar-expand-lg main_menu">
       <div class="container">
           <a class="navbar-brand" href="#">
               <img src="../../../public/bootstrap/images/logo.png" alt="Olinas" class="img-fluid w-100">
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i class="far fa-bars menu_icon"></i>
               <i class="far fa-times close_icon"></i>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                       <a class="nav-link active" href="#">Beranda</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#tentang-section">Tentang</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#lomba-section">Lomba</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#timeline-section">Timeline</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#berita-section">Berita</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#sponsor-section">Sponsor</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/kontak">Kontak</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link common_btn" href="/login">Login</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
   <!--=================================
       MAIN MENU END
   ==================================-->


   <!--=================================
       BANNER START
   ==================================-->
   <section class="tf__banner" style="background: url(bootstrap/images/home.jpg);">
       <div class="container">
           <div class="row">
               <div class="col-xl-7 col-lg-8">
                   <div class="tf__banner_text wow fadeInUp" data-wow-duration="1.5s">
                       <h1 style="font-size: 26px;"><b>Olimpiade Informatika Nasional</b></h1>
                       <h1 style="font-size: 40px;"><b>OLINAS 2024</b></h1>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--=================================
       BANNER END
   ==================================-->
   <br>
   <!--=================================
       ABOUT 2 START
   ==================================-->
   <section id="tentang-section" class="tf__home_2_about pt_100 pb_100" style="background: url(bootstrap/images/about_2_bg.jpg);">
       <div class="container">
           <div class="row">
               <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1.5s">
                   <div class="tf__home_2_about_img">
                       <img src="../../../public/bootstrap/images/about_2_img_3.jpg" alt="about us" class="img-fluid w-100">
                   </div>
               </div>
               <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                   <div> <!-- <div class="tf__home_2_about_text"-->
                       <div class="tf__heading_area tf__heading_area_left mb_25">
                           <h5>Apa itu OLINAS ?</h5>
                       </div>
                       <p class="tentang" > Olinas adalah Olimpiade Informatika Nasional, ajang kompetisi nasional bagi 
                           mahasiswa vokasi di Indonesia. Event ini memajukan keterampilan teknologi dan kreativitas, penting 
                           dalam menghadapi era digital. Olinas, acara tahunan yang dinantikan, menginspirasi pelajar untuk 
                           eksplorasi dan berkembang dalam teknologi informasi. Dengan peran yang semakin penting, Olinas 
                           memberikan motivasi bagi generasi mendatang untuk mengeksplorasi dunia digital. 
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--=================================
       ABOUT 2 END
   ==================================-->

   <!--=================================
       CATEGORIES START
   ==================================-->
   <section id="lomba-section" class="tf__categories mt_95">
       <div class="tf__activities_slider_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                        <div class="tf__heading_area mb_15">
                            <h5>Daftar Lomba</h5>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-duration="1.5s">
                    <div class="col-xl-3">
                        <div class="tf__activities_item light_blue">
                            <span> <i class="fal fa-book"></i> </span>
                            <h3>Lomba AR</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="tf__activities_item green">
                            <span> <i class="fas fa-graduation-cap"></i> </span>
                            <h3>Lomba VR</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="tf__activities_item orange">
                            <span> <i class="far fa-university"></i> </span>
                            <h3>Lomba Desain</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="tf__activities_item blue">
                            <span> <i class="fas fa-books-medical"></i> </span>
                            <h3>Lomba Web</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="tf__activities_item green">
                            <span> <i class="fas fa-analytics"></i> </span>
                            <h3>Lomba Aplikasi Mobile</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="tf__activities_item green">
                            <span> <i class="fas fa-analytics"></i> </span>
                            <h3>Lomba Creative Video</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="tf__activities_item green">
                            <span> <i class="fas fa-analytics"></i> </span>
                            <h3>Lomba Cybersecurity</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="tf__activities_item green">
                            <span> <i class="fas fa-analytics"></i> </span>
                            <h3>Lomba Robotik</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <!--=================================
       CATEGORIES END
   ==================================-->


   <section id="timeline-section" class="tf__categories mt_95">
       <div class="container" style="margin-bottom: -50px;">
           <div class="row">
               <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                   <div class="tf__heading_area mb_15">
                       <h5 style="margin-bottom: 40px;">Timeline</h5>
                       <div class="card" style="height: 180px; background-color: #D9D9D9;">
                            <div class="card-body p-4 text-center">
                                <h6 style="text-align: center; margin-bottom: 25px; font-size: 20px;"><b>Event OLINAS</b></h6>
                               <h6 style="margin-bottom: 18px; color: #8D8686;"><b>Tanggal Mulai : 12 April 2024</b></h6>
                               <h6 style="margin-bottom: 18px; color: #8D8686;"><b>Tanggal Berakhir : 13 Mei 2024</b></h6>
                            </div>                        
                        </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <br><br>

<!--=================================
       EVENT START
   ==================================-->
   <section id="berita-section" class="tf__event mt_95">
       <div class="container">
           <div class="row">
               <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                   <div class="tf__heading_area mb_40">
                       <h5>Berita</h5>
                   </div>
               </div>
           </div>
           <div class="row event_slider">
               <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s" onclick="window.location.href='/informasiberita'">
                   <div class="tf__single_event">
                       <div class="tf__single_event_img">
                           <img src="../../../public/bootstrap/images/event_img_1.jpg" alt="event" class="img-fluid w-100">
                       </div>
                       <div class="tf__single_event_text">
                           <a class="title" href="/informasiberita">Monitoring Perkembangan Projek Manajemen Lomba Prodi</a>
                           <p>Platform yang sering kami gunakan untuk melakukan diskusi online selain whatsapp adalah discord </p>
                           <div class="tf__single_event_footer">
                               <span>27 Februari 2024</span>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s" onclick="window.location.href='/informasiberita'">
                   <div class="tf__single_event">
                       <div class="tf__single_event_img">
                           <img src="../../../public/bootstrap/images/liburan.jpg" alt="event" class="img-fluid w-100">
                       </div>
                       <div class="tf__single_event_text">
                           <a class="title"  href="/informasiberita">Berlibur Sebagai Persiapan Sebelum Memulai Proyek</a>
                           <p>Sebelum memulai proyek, kami melakukan liburan agar pikiran segar.</p>
                           <div class="tf__single_event_footer">
                               <span>29 Februari 2024</span>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s" onclick="window.location.href='/informasiberita'">
                   <div class="tf__single_event">
                       <div class="tf__single_event_img">
                           <img src="../../../public/bootstrap/images/farel.png" alt="event" class="img-fluid w-100">
                       </div>
                       <div class="tf__single_event_text">
                           <a class="title"  href="/informasiberita">Profil Ketua Emailkomp Periode 2024</a>
                           <p>Emailkomp adalah sebuah organisasi dibawah pengawasan langsung oleh Prodi Teknik Informatika</p>
                           <div class="tf__single_event_footer">
                               <span>12 Desember 2023</span>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s" onclick="window.location.href='/informasiberita'">
                   <div class="tf__single_event">
                       <div class="tf__single_event_img">
                           <img src="../../../public/bootstrap/images/game.png" alt="event" class="img-fluid w-100">
                       </div>
                       <div class="tf__single_event_text">
                           <a class="title"  href="/informasiberita">Bermain Game Untuk Melatih Kekompakan Tim</a>
                           <p>Hal yang sering kami lakukan ketika selesai diskusi yaitu bermain game gartic</p>
                           <div class="tf__single_event_footer">
                               <span>25 Februari 2024</span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--=================================
       EVENT END
   ==================================-->

   <section id="sponsor-section" class="tf__categories mt_95">
        <div class="container">
            <div class="row">
                <div class="tf__heading_area mb_15">
                    <h5>Sponsor</h5>
                    <div class="sponsor-grid">
                        <div class="sponsor-item">
                            <img src="../../../public/bootstrap/images/logo-sv.png" alt="about" class="img-fluid">
                        </div>
                        <div class="sponsor-item">
                            <img src="../../../public/bootstrap/images/UNS.png" alt="about" class="img-fluid">
                        </div>
                        <div class="sponsor-item">
                            <img src="../../../public/bootstrap/images/d3ti.png" alt="about" class="img-fluid">
                        </div>
                        <div class="sponsor-item">
                            <img src="../../../public/bootstrap/images/em.png" alt="about" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <!--=================================
       FOOTER START
   ==================================-->
    <footer class="tf__footer mt_100">
        <div class="text-center p-4" style="background-color: #191e24f5; color: white;">
            Copyright ©2024 Tim Website OLINAS
        </div>
   </footer>
   <!--=================================
       FOOTER END
   ==================================-->


   <!--=============================
       SCROLL BUTTON START
   ==============================-->
   <div class="tf__scroll_btn" href="#"> go to top </div>
   <!--=============================
       SCROLL BUTTON END 
   ==============================-->
</template>

