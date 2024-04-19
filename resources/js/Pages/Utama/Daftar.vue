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
											<h3 style="color: black;">Buat Akun</h3>
										</div>
										<br>
										<div class="form-body">
											<form class="row g-3" @click.prevent="registerUser">
												<div class="col-12">
													<label for="namalengkap" class="form-label">Nama Lengkap</label>
													<input v-model="name" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama lengkap">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="username" class="form-label">Username</label>
													<input v-model="username" type="text" class="form-control" id="inputUsername" placeholder="Username">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="email" class="form-label">Email</label>
													<input v-model="email" type="email" class="form-control" id="inputEmailAddress" placeholder="Email">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="password" class="form-label">Password</label>
													<div class="input-group" id="show_hide_password">
														<input v-model="password" type="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Masukkan Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
													</div>
												</div>
												<div class="col-12 jarak-top-lebih12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Registrasi</button>
													</div>
													<div class="login-separater text-center mb-4 jarak-top-kurang18"> <span>ATAU MASUK DENGAN EMAIL</span>
														<hr/>
													</div>
													<div class="d-grid jarak-top-kurang10">
														<button @click.prevent="loginWithGoogle" class="btn shadow-sm btn-white"> <span class="d-flex justify-content-center align-items-center">
															<img class="me-2" src="../../../../public/assets/images/icons/search.svg" width="16" alt="Image Description">
															<span>Masuk dengan Google</span>
															</span>
														</button>
													</div>
													<div class="text-center jarak-top-kurang12">
														<br>
														<p>Sudah punya akun? <a href="/login">Login</a>
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
	</section>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            username: '',
            email: '',
            password: '',
        };
    },
    methods: {
        async registerUser() {
            try {
                const response = await axios.post('http://localhost:8000/api/registrasi', {
                    name: this.name,
                    username: this.username,
                    email: this.email,
                    password: this.password,
                });

                console.log(response.data);

                // Redirect to login page after successful registration
                window.location.href = '/login';

            } catch (error) {
                console.error(error.response.data);
            }
        },
		loginWithGoogle() {
            // Redirect to Google OAuth URL
            window.location.href ="auth.google"
        },
    },
};
</script>
