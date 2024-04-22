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
											<h3>Buat Akun</h3>
										</div>
										<br>
										<div class="form-body">
											<form class="row g-3" @submit.prevent="submit">
												<div class="col-12">
													<label for="namalengkap" class="form-label">Nama Lengkap</label>
													<input v-model="form.name" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama lengkap">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="username" class="form-label">Username</label>
													<input  v-model="form.username" type="text" class="form-control" id="inputUsername" placeholder="Username">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="email" class="form-label">Email</label>
													<input  v-model="form.email" type="email" class="form-control" id="inputEmailAddress" placeholder="Email">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="password" class="form-label">Password</label>
													<div class="input-group" id="show_hide_password">
														<input v-model="form.password" type="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Masukkan Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
													</div>
												</div>
												<!-- <div>
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
														<label class="form-check-label check-login" for="flexSwitchCheckChecked">Saya membaca serta menyetujui Syarat & Ketentuan </label>
													</div>
												</div> -->
												<div class="col-12 jarak-top-lebih12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Registrasi</button>
													</div>
													<div class="login-separater text-center mb-4 jarak-top-kurang18"> <span>ATAU MASUK DENGAN EMAIL</span>
														<hr/>
													</div>
													<div class="d-grid jarak-top-kurang10">
														<a class="btn shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
															<img class="me-2" src="../../../../public/assets/images/icons/search.svg" width="16" alt="Image Description">
															<span>Masuk dengan Google</span>
															</span>
														</a>
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

<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  name: null,

  email: null,
  password: null,
})

function submit() {
    router.post('/daftar', form)
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
