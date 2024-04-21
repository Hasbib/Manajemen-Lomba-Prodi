<template>
    <div class="wrapper">
        <!-- Start header -->
        <header>
            <div class="navbar-tambah">
                <div class="navbar-left">
                    <img src="../../../../../public/bootstrap/images/logo.png" alt="Logo">
                </div>
                <div class="navbar-right" style="margin-left: auto;">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">Habib</p>                      
                        </div>
                        <img src="../../../../../public/bootstrap/images/profil.png" class="user-img" alt="user avatar" style="width: 38px; height: 38px;">
                    </a>
                </div>
            </div>
        </header>
        <!-- End header -->
        <!-- Start page wrapper -->
        <div class="page-wrapper-tambah">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">TAMBAH ADMINISTRATOR</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6" style="margin-bottom: 10px; color: black;">
                                <label style="margin-bottom: 5px;"><b>Nama Lengkap</b></label>
                                <input v-model="name" type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Username</b></label>
                                <input v-model="username" type="text" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="inputChoosePassword" class="form-label" style="color: black;"><b>Password</b></label>
                                <div class="input-group" id="show_hide_password">
                                    <input v-model="password" type="password" class="form-control border-end-0" id="inputChoosePassword">
                                    <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; margin-top: 10px;"><b style="color: black">Role</b></label>
                                <select v-model="role" class="form-select">
                                    <option value="admin">Admin</option>
                                    <option value="juri">Juri</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; margin-top: 10px;"><b style="color: black">Lomba</b></label>
                                <select v-model="name_lomba" class="form-select">
                                    <option v-for="lomba in lombas" :key="lomba.id" :value="lomba.name_lomba">{{ lomba.name_lomba }}</option>
                                </select>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button @click="tambahAdministrator" class="btn btn-primary" style="width: 200px; margin-right: auto; margin-top: 50px; margin-bottom: 30px">Tambah</button>
                            <button @click="cancel" class="btn btn-danger" style="width: 200px; margin-left: auto; margin-top: 50px; margin-bottom: 30px">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page wrapper -->
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            username: '',
            password: '',
            role: '',
            name_lomba: '',
            lombas: []
        };
    },
    mounted() {
        this.fetchLomba();
    },
    methods: {
        tambahAdministrator() {
            axios.post('http://localhost:8000/api/registrasiadministrator', {
                    name: this.name,
                    username: this.username,
                    password: this.password,
                    role: this.role,
                })
                .then(response => {
                    console.log('Administrator berhasil ditambahkan');
                    this.redirectToAdministrator();
                })
                .catch(error => {
                    console.error('Gagal menyimpan administrator', error);
                });
        },
        fetchLomba() {
            axios.get('http://localhost:8000/api/lomba')
                .then(response => {
                    this.lombas = response.data;
                    if (this.lombas.length > 0) {
                        this.name_lomba = this.lombas[0].name_lomba;
                    }
                })
                .catch(error => {
                    console.error('Gagal memuat data lomba', error);
                });
        },
        redirectToAdministrator() {
            console.log('Redirecting to administrator page');
        },
        cancel() {
            console.log('Cancellation');
        }
    }
};
</script>
