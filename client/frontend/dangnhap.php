<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
	<title>Đăng nhập tài khoản</title>
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
	<link rel="manifest" href="assets/img/favicons/manifest.json">

	<meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
	<meta name="theme-color" content="#ffffff">


	<!-- ===============================================-->
	<!--    Stylesheets-->
	<!-- ===============================================-->
	<link href="assets/css/theme.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="./assets/login/css/style.css">
	<link rel="stylesheet" href="./assets/login/css/login.css">

</head>

<body>


	<header class="container position-sticky z-index-sticky top-1">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-expand-lg top-0 z-index-3 shadow  position-absolute my-3 py-2 start-0 end-0 rounded-pill" style="background-color: #9EDDFF">
					<div class="container">
						<a class="navbar-brand d-inline-flex d-flex justify-content-center align-items-center" href="index.php"><img class="d-inline-block" src="assets/img/gallery/White & Black Minimalist Logo Distro Fashion.png" width="42px" height="42px" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">Borcelle</span></a>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<section class="ftco-section mt-5">


		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10 ">
					<div class="wrap d-md-flex">

						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last ">
							<div class="text w-100">
								<h2>Chào bạn đến với Borcelle Store</h2>
								<p>Bạn chưa có tài khoản?</p>
								<a href="dangky.php" class="btn btn-white btn-outline-white">Đăng ký</a>
							</div>
						</div>
						<div class="login-wrap p-4 p-lg-5 ">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4 text-white fw-bold">Đăng nhập tài khoản</h3>
								</div>

							</div>
							<form action="../backend/dangnhap.php" method="post" class="signin-form ">
								<div class="form-group mb-3">
									<label class="label" for="name">Tên đăng nhập</label>
									<input type="text" class="form-control" placeholder="Tên đăng nhập" name="username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Mật khẩu</label>
									<input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary submit px-3" name='dangnhap'>Đăng Nhập</button>
									<?php if (isset($_SESSION['messages']))
										echo "<br><span style='color: red;'>" . $_SESSION['messages'] . "</span><br>"; ?>

								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Tôi đồng ý với điều
											khoản.
											<input type="checkbox" checked required>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Quên mật khẩu</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="./assets/login/js/jquery.min.js"></script>
	<script src="./assets/login/js/popper.js"></script>
	<script src="./assets/login/js/bootstrap.min.js"></script>
	<script src="./assets/login/js/main.js"></script>

</body>

</html>