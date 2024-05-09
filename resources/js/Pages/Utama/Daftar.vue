<template>

	<body class="body-login">
		<div class="card3 jarakm">
			<div class="card2">
				<div class="card-body">
					<div class="border p-4 rounded">
						<div class="text-center">
							<h3>Buat Akun</h3>
						</div>
						<br><br>
						<form class="row g-3" @submit.prevent="submit">
							<div class="col-12">
								<input v-model="form.name" type="text" class="form-control" id="inputNamaLengkap"
									placeholder="Nama lengkap">
							</div>
							<div class="col-12">
								<input v-model="form.username" type="text" class="form-control" id="inputUsername"
									placeholder="Username">
							</div>
							<div class="col-12">
								<input v-model="form.email" type="email" class="form-control" id="inputEmailAddress"
									placeholder="Email">
							</div>
							<div class="col-12">
								<div class="input-group" id="show_hide_password">
									<input v-model="form.password" type="password" class="form-control border-end-0"
										id="inputChoosePassword" placeholder="Masukkan Password"> <a href="javascript:;"
										class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
								</div>
							</div>
							<div class="col-12 jarak-top-lebih12">
								<div class="d-grid">
									<button type="submit" class="btn btn-primary w-100"><i
											class='bx bx-user'></i>Registrasi</button>
								</div>
								<div class="login-separater text-center mb-4 jarak-top-kurang18"> <span>ATAU MASUK
										DENGAN EMAIL</span>
									<hr />
								</div>
								<div class="d-grid jarak-top-kurang10">
									<a class="btn shadow-sm btn-white" href="javascript:;"> <span
											class="d-flex justify-content-center align-items-center">
											<img class="me-2" src="../../../../public/assets/images/icons/search.svg"
												width="16" alt="Image Description">
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
		<!--end row-->
	</body>
</template>

<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
	name: null,
	username: null,
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
