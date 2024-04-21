<template>
	<section style="background: url(../assets/images/login-images/bg-forgot-password.jpg);">
	  <div class="wrapper">
		  <div class="section-authentication-signin d-flex justify-content-center my-5 my-lg-1">
			  <div class="container-fluid jarak-top-lebih10">
				  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					  <div class="col mx-auto">
						  <div class="card">
							  <div class="card-body">
								  <div class="border p-4 rounded">
									  <div class="text-center">
										<h3 style="color: black;">Login</h3>
										  <br>
									  </div>
									  <div class="form-body">
										<form class="row g-3" @submit.prevent="loginUser">
											  <div class="col-12">
												  <label for="email" class="form-label">Username</label>
												  <input v-model="username"   type="emailorusername" class="form-control" id="emailorusername" placeholder="Masukkan Username">
											  </div>
											  <div class="col-12">
												  <label for="password" class="form-label">Password</label>
												  <div class="input-group" id="show_hide_password">
													<input v-model="password" type="password" class="form-control border-end-0" id="password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												  </div>
											  </div>
											  <div class="col-md-6 jarak-top-lebih4 ">
												  <!-- <div class="form-check form-switch">
													  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													  <label class="form-check-label check-login" for="flexSwitchCheckChecked">Ingatkan saya</label>
												  </div> -->
											  </div>
											  <div class="col-md-6 text-end jarak-top-lebih7">	<a href="/lupapassword">Lupa Password ?</a>
											  </div>
											  <div class="col-12">
													<label style="margin-right:5px ;">Hasil Dari</label>
                                                    <label for="captcha" class="form-label">{{ captcha.question }}</label>
                                                    <div class="input-group">
                                                        <input v-model="captchaInput" type="text" class="form-control" id="captcha" placeholder="Enter Captcha">
                                                    </div>
                                                </div>
											  <div class="col-12">
												  <div class="d-grid jarak-top-kurang5">
													  <Button href="/index2" class="btn btn-primary"><i class='bx bx-user'></i>Masuk</Button>
												  </div>
												  <div class="login-separater text-center mb-4 jarak-top-kurang15"> <span>ATAU MASUK DENGAN EMAIL</span>
													  <hr/>
												  </div>
												  <div class="d-grid jarak-top-kurang4">
													
													  <a class="btn shadow-sm btn-white" href="#" @click="loginWithGoogle"> <span class="d-flex justify-content-center align-items-center">
														  <img class="me-2" src="../../../../public/assets/images/icons/search.svg" width="16" alt="Image Description">
														  <span >Masuk dengan Google</span>
														  </span>
													  </a>
												  </div>
												  <div class="text-center jarak-top-kurang10">
													  <br>
													  <p>Belum punya akun? <a href="/daftar">Daftar disini</a>
													  </p>
												  </div>
											  </div>
										  </form>
									  </div>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>
				  <!--end row-->
			  </div>
		  </div>
	  </div>
	  <!--=========================
		  LOGIN END
	  ==========================-->
	</section>
  </template>
 
<script>
import axios from 'axios';

export default {
    data() {
        return {
            username: '',
            password: '',
            rememberMe: true,
            captcha: {},
            captchaInput: ''
        };
    },
    methods: {
        async loginUser() {
            try {
                // Check if captcha input matches the answer
                if (parseInt(this.captchaInput) !== this.captcha.answer) {
                    alert("Hasil penjumlahan yang Anda masukkan salah!");
                    return;
                }

                // Assuming API call for login
                const response = await axios.post('http://localhost:8000/api/login', {
                    username: this.username,
                    password: this.password
                });

                // Assuming API returns role information
                const userRole = response.data.role;

                // Redirect user based on role
                switch (userRole) {
                    case 'admin':
                        window.location.href = '/index2'; // Redirect to admin dashboard
                        break;
                    case 'petugas':
                        window.location.href = '/dashboardpetugas'; // Redirect to petugas dashboard
                        break;
                    case 'juri':
                        window.location.href = '/dashboardjuri'; // Redirect to juri dashboard
                        break;
                    default:
                        window.location.href = '/overviewpeserta'; // Redirect to user dashboard or homepage
                        break;
                }

            } catch (error) {
                console.error(error.response.data);
            }
        },
        async fetchCaptcha() {
            try {
                // Generate random numbers for the captcha question
                const num1 = Math.floor(Math.random() * 10);
                const num2 = Math.floor(Math.random() * 10);
                const question = `${num1} + ${num2}`;
                
                // Calculate the answer
                const answer = num1 + num2;

                // Set the captcha data
                this.captcha = {
                    question: question,
                    answer: answer
                };
            } catch (error) {
                console.error(error.response.data);
            }
        },
		loginWithGoogle() {
    // Redirect to Google OAuth URL
    window.location.href = "/authorized/google";

    // Tangani respons autentikasi dari server
    window.addEventListener('message', (event) => {
        // Pastikan pesan berasal dari origin yang diizinkan
        if (event.origin !== 'http://localhost:8000') return;

        const message = event.data;
        // Periksa pesan apakah pengguna berhasil diautentikasi
        if (message.authenticated === true) {
            // Pengguna berhasil diautentikasi, arahkan ke halaman overviewpeserta
            window.location.href = '/overviewpeserta';
        }
    });
}

    },
    mounted() {
        this.fetchCaptcha();
    }
};
    // Pembaruan pada skrip jQuery untuk menampilkan / menyembunyikan password
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
