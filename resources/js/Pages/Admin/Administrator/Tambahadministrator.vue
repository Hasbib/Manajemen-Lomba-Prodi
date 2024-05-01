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
                                <p class="user-name mb-0">Habib Shohiburrotib</p>			
                                <p class="user-role">habib</p>					
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
                        <h4 class="mb-0">TAMBAH ADMINISTRATOR</h4>
                        <hr/>
                        <form @submit.prevent="submit">
                            <div class="row" >
                                <div class="col-md-6 margin-top10-crud">
                                    <label class="c-mb5-black"><b>Nama Lengkap</b></label>
                                    <input type="name" v-model="form.name" class="form-control">
                                </div>
                 
                                <div class="col-md-6 margin-top10-crud">
                                    <label class="c-mb5-black"><b>Username</b></label>
                                    <input type="username" v-model="form.username" class="form-control">
                                </div>
                                <div class="col-md-12 margin-top10-crud">
                                    <label class="c-mb5-black"><b>Email</b></label>
                                    <input type="email" v-model="form.email"  class="form-control">
                                </div>
                                <div>
                                    <label for="inputChoosePassword" class="form-label warna-hitam"><b>Password</b></label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password"  v-model="form.password"  class="form-control border-end-0" id="inputChoosePassword"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                    </div>
                                </div>
                                <div>
                                    <label class="role-add "><b class="warna-hitam">Role</b></label>
                                    <select class="form-select" id="inputProductType" v-model="form.role">
                                        <option value="admin">Admin</option>
                                        <option value="juri">Juri</option>
                                        <option value="petugas">Petugas</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="role-add"><b class="warna-hitam">Lomba</b></label>
                                    <div class="col-12">
                                        <select class="form-select" id="inputProductType">
                                            <option value="1" selected>AR/VR</option>
                                            <option value="2">DESAIN WEBSITE</option>
                                            <option value="3">APLIKASI MOBILE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="btn-posisi">
                                    <button class="btn btn-primary button-tabel-right"  type="submit">Tambah</button>
                                    <button class="btn btn-danger button-tabel-left" onclick="window.location.href='/administrator'">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--end page wrapper -->
    </div>
    </template>

<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  name: null,
  email: null,
  password: null,
  role: null, // Tambahkan role di sini
})


function submit() {
    router.post('/tambahadministrator', form)
}

$(document).ready(function () {
		$("#show_hide_password a").on('click', function (event) {
			event.preventDefault();
			if ($('#show_hide_password input').attr("type") == "text") {
				$('#show_hide_password input').attr('type', 'password');
				$('#show_hide_password i').addClass("bx-hide");
				$('#show_hide_password i').removeClass("bx-show");
			} else if ($('#show_hide_password input').attr("type") == "password") {
				$('#show_hide_password input').attr('type', 'text');
				$('#show_hide_password i').removeClass("bx-hide");
				$('#show_hide_password i').addClass("bx-show");
			}
		});
	});
</script>