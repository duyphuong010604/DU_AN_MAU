<?php
session_start();
if (isset($_SESSION['user'])):
    // echo $_SESSION['user'].$_SESSION['id_kh'];
    ?>
    <!DOCTYPE html>
    <html lang="en-US" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title> Tài khoản - Borcelle </title>


        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32"
            href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
        <link rel="icon" type="image/png" sizes="16x16"
            href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
        <link rel="shortcut icon" type="image/x-icon"
            href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
        <link rel="manifest" href="assets/img/favicons/manifest.json">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="style.css">


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="assets/css/theme.css" rel="stylesheet" />

    </head>


    <body>

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->

        <main class="main" id="top">
            <?php include "header-main.php"; ?>
            <!-- Chính sách -->
            <section class="py-8 bg-light-gradient border-bottom border-white border-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="page-title category-title">
                                <h1 class="title-head"><a href="#">Thông tin tài khoản </a></h1>
                            </div>
                            <div class="card-body">
                                <?php
                                include "../backend/pdo.php";
                                include "../atc-user/user.php";
                                $khachhang = new khachhang();
                                $id_kh = $_SESSION["id_kh"];

                                $row = $khachhang->getById($id_kh);


                                ?>
                                <form action="../backend/taikhoan-capnhat.php" method="POST">
                                    <div class="row">

                                        <div class="mb-3 col-md-6">
                                            <label for="id_kh" class="form-label">ID tài khoản</label>
                                            <input class="form-control" type="text" id="id_kh" name="id_kh"
                                                value="<?= $row['id_kh'] ?>" readonly />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="username" class="form-label">Tên đăng nhập</label>
                                            <input class="form-control" type="text" name="username" id="username"
                                                value="<?= $row['username'] ?>" readonly />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="ho" class="form-label">Họ và tên đệm</label>
                                            <input class="form-control" type="text" id="ho" name="ho"
                                                value="<?= $row['ho'] ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="ten" class="form-label">Tên</label>
                                            <input class="form-control" type="text" name="ten" id="ten"
                                                value="<?= $row['ten'] ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input class="form-control" type="text" id="email" name="email"
                                                value="<?= $row['email'] ?>" />
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="sdt">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">VN (+84)</span>
                                                <input type="text" id="sdt" name="sdt" class="form-control"
                                                    value="<?= $row['sdt'] ?>" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="diachi" class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" id="diachi" name="diachi"
                                                value="<?= $row['diachi'] ?>" />
                                        </div>

                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-success me-2" name='luu'>Lưu</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card">
                                <h5 class="card-header">Đặt lại mật khẩu</h5>
                                <div class="card-body">
                                    <div class="mb-3 col-12 mb-0">
                                        <div class="alert alert-warning">
                                            <h6 class="alert-heading fw-bold mb-1">Vui lòng nhập đúng mật khẩu cũ?
                                            </h6>
                                            <p class="mb-0">Xin chân thành cảm ơn bạn.</p>
                                        </div>
                                    </div>
                                    <form action="../backend/taikhoan-capnhat.php" method='post'>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="password" class="form-label">Mật khẩu cũ</label>
                                                <input class="form-control" type="text" name="password" id="password"
                                                    name="password" required/>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="password_new" class="form-label">Mật khẩu mới</label>
                                                <input class="form-control" type="password" name="password_new"
                                                    id="password_new" name="password-new" required/>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger" name="thaydoi">Thay đổi</button>
                                        <?php if (isset($_SESSION['saimatkhau'])) echo "<br><span style='color: red;'>" . $_SESSION['saimatkhau'] . "</span><br>"; ?>
                                    </form>
                                </div>
                            </div>

                            <div class="card mt-5 ">
                               <button type="submit" class="btn btn-danger"> <a href="../backend/dangxuat.php">Đăng xuất tài khoản</a></button>
                            </div>



                        </div>
                    </div>
                </div>

            </section>


            <?php include "footer-main.php" ?>
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->




        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="vendors/feather-icons/feather.min.js"></script>
        <script>
            feather.replace();
        </script>
        <script src="assets/js/theme.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap"
            rel="stylesheet">
    </body>

    </html>
<?php
else:
    header("Location: dangnhap.php");
endif;
?>