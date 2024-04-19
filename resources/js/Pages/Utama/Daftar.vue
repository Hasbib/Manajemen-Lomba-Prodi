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
											<h3 class="">Buat Akun</h3>
										</div>
										<br>
										<div class="form-body">
											<form class="row g-3">
												<div class="col-12">
													<label for="namalengkap" class="form-label">Nama Lengkap</label>
													<input type="namalengkap" class="form-control jarak-top-kurang6" id="namalengkap" placeholder="Masukkan Nama Lengkap">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="username" class="form-label">Username</label>
													<input type="username" class="form-control jarak-top-kurang6" id="username" placeholder="Masukkan Username">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="email" class="form-label">Email</label>
													<input type="email" class="form-control jarak-top-kurang6" id="email" placeholder="Masukkan Email">
												</div>
												<div class="col-12 jarak-top-lebih6">
													<label for="password" class="form-label">Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" class="form-control border-end-0" id="password" value="12345678"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
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
														<a href="/index2" class="btn btn-primary"><i class='bx bx-user'></i>Registrasi</a>
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
