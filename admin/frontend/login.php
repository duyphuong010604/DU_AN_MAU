<!DOCTYPE html>
<html dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Bảng điều khiển | BORCELLE - ADMIN</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../content/assets/img/favicon/906343.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet" />

	<!-- Icons. Uncomment required icon fonts -->
	<link rel="stylesheet" href="../content/assets/vendor/fonts/boxicons.css" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="../content/assets/vendor/css/core.css" class="template-customizer-core-css" />
	<link rel="stylesheet" href="../content/assets/vendor/css/theme-default.css"
		class="template-customizer-theme-css" />
	<link rel="stylesheet" href="../content/assets/css/demo.css" />


	<!-- Vendors CSS -->
	<link rel="stylesheet" href="../content/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

	<link rel="stylesheet" href="../content/assets/vendor/libs/apex-charts/apex-charts.css" />

	<!-- Page CSS -->

	<!-- CSS STYLE -->
	<link rel="stylesheet" href="../content/assets/css/style.css">


</head>

<body class="">
	<div class="main-wrapper">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<div class="lds-ripple">
				<div class="lds-pos"></div>
				<div class="lds-pos"></div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Login box.scss -->
		<!-- ============================================================== -->
		<div class=" auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark ">
			<div class="auth-box bg-dark border-top border-secondary " style="min-height: 100vh; ">
				<div id="loginform ">
					<div class="text-center pt-3 pb-3 ps-2">
						<span class="db"><img
								src="../content/assets/img/favicon/White & Black Minimalist Logo Distro Fashion.png"
								style="height: 50px;" alt="logo" /></span>
						<b class="logo-icon ">

							<img src="../content/assets/img/favicon/906343.png"
								alt="homepage" class="light-logo" style="height: 50px;" />

						</b>
					</div>
					<!-- Form -->
					<form class="form-horizontal mt-3" id="loginform" action="../backend/login-xuly.php" method="post">
						<div class="row pb-4">
							<div class="col-12">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class='bx bx-user'></i></span>
									</div>
									<input type="text" name="username" class="form-control form-control-lg"
										placeholder="Tên đăng nhập" aria-label="Username"
										aria-describedby="basic-addon1" required="">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i class='bx bxs-lock-alt' ></i></span>
									</div>
									<input type="password" name="password" class="form-control form-control-lg"
										placeholder="Mật khẩu" aria-label="Password" aria-describedby="basic-addon1"
										required="">
								</div>
							</div>

						</div>
						<div class="row border-top border-secondary">
							<div class="col-12">
								<div class="form-group">
									<div class="pt-3">
										<button class="btn btn-info" id="to-recover" type="button"><i
												class="fa fa-lock me-1"></i> Quên mật khẩu?</button>
										<button class="btn btn-success float-end text-white" type="submit"
											name="dangnhap">Đăng nhập</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Login box.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper scss in scafholding.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper scss in scafholding.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right Sidebar -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right Sidebar -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- All Required js -->
	<!-- ============================================================== -->
	<script src="../assets/admin/libs/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="../assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugin js -->
	<!-- ============================================================== -->
	<script>
		$(".preloader").fadeOut();
		// ============================================================== 
		// Login and Recover Password 
		// ============================================================== 
		$('#to-recover').on("click", function () {
			$("#loginform").slideUp();
			$("#recoverform").fadeIn();
		});
		$('#to-login').click(function () {

			$("#recoverform").hide();
			$("#loginform").fadeIn();
		});
	</script>

</body>

</html>