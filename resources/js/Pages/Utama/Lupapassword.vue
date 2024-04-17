<template>
    <!--=========================
    LOGIN START
==========================-->
<body style="background-color: #C0D6E8;">
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box" style="width: 500px;">
				<div class="card-body">
					<div class="p-4 rounded border">
						<div class="text-center">
							<img src="../../../../public/assets/images/icons/forgot-2.png" width="120" alt="" />
						</div>
						<h4 class="mt-5 font-weight-bold">Tidak ingat kata sandi?</h4>
						<p class="text-muted">Masukkan Email anda yang terdaftar untuk mengatur ulang kata sandi</p>
						<div class="my-4">
							<label class="form-label">Email</label>
							<input type="text" class="form-control form-control-lg" placeholder="Masukkan Email" />
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
	<!-- end wrapper -->
</body>
<!--=========================
    LOGIN END
==========================-->
</template>
