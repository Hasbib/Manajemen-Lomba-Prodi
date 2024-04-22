<template>
    <!--=========================
    LOGIN START
	==========================-->
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
											<img src="../../../../public/assets/images/icons/forgot-2.png" width="120"/>
										</div>
										<h5 class="mt-5 font-weight-bold">Tidak ingat kata sandi?</h5>
										<p class="text-lupa-pw">Masukkan Email anda yang terdaftar untuk mengatur ulang kata sandi</p>
										<div class="my-4">
											<label class="form-label">Email</label>
											<input type="email" class="form-control form-control-lg" placeholder="Masukkan Email" />
										</div>
										<div class="d-grid gap-2">
											<a type="button" onclick="window.location.href='/login'"class="btn btn-primary btn-lg">Kirim</a> 
											<a href="/login" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Kembali ke halaman login</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end wrapper -->
	</section>
	<!--=========================
		LOGIN END
	==========================-->
</template>
