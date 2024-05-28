<template>
    <div class="bg-index">
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
                            <h2 class="c-kontak">Kontak</h2>
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
                    <div class="col-xxl-8 col-xl-7  wow fadeInLeft">
                        <div class="tf__contact_form">
                            <div class="tf__heading_area tf__heading_area_left mb_25">
                                <h5 class="c-mb-13">HUBUNGI KAMI</h5>
                            </div>
                            <form @submit.prevent="submit">
                                <input class="form-control" id="nama" v-model="form.nama" placeholder="Nama" />
                                <input class="form-control" id="email" v-model="form.email" placeholder="Email" />
                                <input class="form-control" id="nomor" v-model="form.nomor"
                                    placeholder="No. WhatsApp" />
                                <textarea class="form-control" rows="4" v-model="form.pesan" placeholder="Pesan" />
                                <button type="submit" class="common_btn_2">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-12 wow fadeInUp">
                        <div class="tf__contact_map mt_30">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3012.4794374146772!2d110.98160354801688!3d-7.591865364294748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19d07a714fd3%3A0xaea18d5d16dea09d!2sWaduk%20Delingan!5e1!3m2!1sen!2sid!4v1711694566155!5m2!1sen!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="tf__footer mt_100">
            <div class="text-center p-4 cfooter">
                Copyright ©2024 Tim Website OLINAS
            </div>
        </footer>
    </div>
</template>


<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
    nama: null,
    email: null,
    nomor: null,
    pesan: null,
})

function submit() {
    router.post('/kontak', form)
}
</script>