<template>

	<body class="body-login">
		<div class="card3 jarakm">
			<div class="card2">
				<div class="card-body">
					<div class="border p-4 rounded">
						<div class="text-center">
							<div class="text-center">
								<img src="../../../../public/assets/images/icons/forgot-2.png" width="120" />
							</div>
							<h5 class="mt-5 rata-kiri">Tidak ingat kata sandi?</h5>
							<p class="text-lupa-pw rata-kiri">Masukkan Email anda yang terdaftar untuk mengatur ulang
								kata sandi</p>
							<div class="col-12 c-mb-13 c-mt10">
								<input type="email" class="form-control" id="inputEmailAddress" placeholder="Email">
							</div>
							<div class="d-grid">
								<button type="submit" class="btn btn-primary w-100 c-mb-8"
									onclick="window.location.href='/login'"><i class='bx bx-user'></i>Kirim</button>
								<a href="/login" class="btn btn-light w-100" onclick="window.location.href='/login'"><i
										class='bx bx-arrow-back me-1'></i>Kembali
									ke halaman
									login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</template>
