<template>
    <!--=================================
           MAIN MENU START
       ==================================-->
    <nav class="navbar navbar-expand-lg main_menu">
       <div class="container">
            <a class="navbar-brand" href="/">
               <img src="../../../../public/bootstrap/images/logo.png" alt="Eduor" class="img-fluid w-100">
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i class="far fa-bars menu_icon"></i>
               <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                       <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/#tentang-section">Tentang</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/#lomba-section">Lomba</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/#timeline-section">Timeline</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/#berita-section">Berita</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/#sponsor-section">Sponsor</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link active" href="#">Kontak</a>
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
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(bootstrap/images/home.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>Kontak</h2>
                        <ul>
                           <li><a></a></li>
                           <li><a></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
       BREADCRUMB END
    ==================================-->
   
   
    <!--=================================
       CONTACT PAGE START
    ==================================-->
    <section class="tf__contact_page mt_190 xs_mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-7  wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="tf__contact_form">
                        <div class="tf__heading_area tf__heading_area_left mb_25">
                           <h5 style="margin-bottom: 13px;">HUBUNGI KAMI</h5>
                        </div>
                        <form>
                            <div>
                                <div>
                                   <input style="margin-bottom: 15px;" type="text" placeholder="Nama">
                                </div>
                                <div>
                                    <input style="margin-bottom: 15px;"  type="email" placeholder="Email">
                                </div>
                                <div>
                                    <input style="margin-bottom: 15px;"  type="email" placeholder="No. WhatsApp">
                                </div>
                                <div class="col-xl-12">
                                    <textarea rows="8" placeholder="Pesan"></textarea>
                                    <button type="submit" class="common_btn_2">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5  ">
                    <!-- <div class="tf__contact_text"> -->
                    <div>
                        <div class="tf__contact_single">
                            <div class="icon blue">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h3 class="akun">Whatsapp</h3>
                                <a href="callto:+6285800086454">6285800086454 (Habib)</a>
                                <a href="callto:+6285800086454">6285800086454 (Habib)</a>
                            </div>
                        </div>
                        <div class="tf__contact_single">
                            <div class="icon orange">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h3 class="akun">Email</h3>
                                <a href="habibshohiburrotib@gmail.com">habibshohiburrotib@gmail.com</a>
                            </div>
                            </div>
                            <div class="tf__contact_single">
                                <div class="icon green">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="text">
                                    <h3 class="akun">Alamat</h3>
                                    <p>Karanganyar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__contact_map mt_100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3012.4794374146772!2d110.98160354801688!3d-7.591865364294748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19d07a714fd3%3A0xaea18d5d16dea09d!2sWaduk%20Delingan!5e1!3m2!1sen!2sid!4v1711694566155!5m2!1sen!2sid" width="600" height="450" style="border:0;" 
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!--=================================
           CONTACT PAGE END
       ==================================-->
   
   
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
    <div class="tf__scroll_btn"> go to top </div>
    <!--=============================
       SCROLL BUTTON END 
    ==============================-->
</template>