<template>
	<body style="background-color: #C0D6E8;">
    <div class="wrapper">
		<div class="section-authentication-signin d-flex justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Login</h3>
										<br><br>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email atau Username</label>
												<input type="email" class="form-control" id="inputEmailAddress" placeholder="Masukka Email atau Username">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label check-login" for="flexSwitchCheckChecked">Ingatkan saya</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="/lupapassword">Lupa Password ?</a>
											</div>
                                            <div class="d-grid">
                                                <a class="btn shadow-sm btn-white" href="javascript:;">
                                                    <span>Capcha</span>
                                                </a>
                                            </div>
											<div class="col-12">
												<div class="d-grid">
													<a href="/index2" class="btn btn-primary"><i class='bx bxs-lock-open'></i>Masuk</a>
												</div>
												<div class="login-separater text-center mb-4"> <span>ATAU MASUK DENGAN EMAIL</span>
													<hr/>
												</div>
												<div class="d-grid">
													<a class="btn shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
														<img class="me-2" src="../../../../public/assets/images/icons/search.svg" width="16" alt="Image Description">
														<span>Masuk dengan Google</span>
														</span>
													</a>
												</div>
												<div class="text-center">
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
</body>
</template>

<script>
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