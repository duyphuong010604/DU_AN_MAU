<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title> Home - Borcelle </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/White & Black Minimalist Logo Distro Fashion.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <!-- chi tiết sản phẩm -->
        <section class="py-6 details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-star mt-7 mb-5">
                        <h6 class="fw-bold fs-3 fs-lg-4 lh-sm">Thông tin sản phẩm</h6>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 mb-12 mb-md-0 ">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-6 ">
                                            <img src="assets/img/gallery/flat-hill.png" class="rounded mx-auto d-block " height="500px" alt="...">
                                        </div>
                                        <div class="col-md-6 text-detailv border-warning border-start border-4 mt-2 mb-2">
                                            <div class="card-body">
                                                <div class="text-top">
                                                    <h2 class="card-title text-warning">Card title</h2>
                                                    <p class="card-text">Mô tả: This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <p class="card-text">Màu: While</p>
                                                    <p class="card-text">Kích thước: XL</p>
                                                    <h3 class="card-text text-danger">Giá: 123 VND</h3>
                                                    <div class="card mb-3 sale-text">
                                                        <div class="card-header fw-bold">
                                                            Ưu đãi 20% cho các khách hàng
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Đang là học sinh sinh viên!</li>
                                                            <li class="list-group-item">Có thẻ thành viên của shop</li>
                                                            <li class="list-group-item">Chuyển khoảng qua ngân hàng VPbank</li>
                                                        </ul>
                                                    </div>
                                                    <form action="#" method="post">
                                                        <button class="btn btn-success mb-3" name="them">Mua ngay</button>
                                                    </form>
                                                </div>
                                                <div class="text-bottom">
                                                    <p class="card-text"><small class="text-muted">Vừa mới cập nhật</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Bình luận -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border ">
                        <div class="card-header bg-transparent ">
                            <h5 class="text-star">Đánh giá sản phẩm</h5>
                            <div class="text-end">
                                <p>Bạn muốn bình luận sản phẩm này?</p>
                                <a href="#" class="btn btn-outline-danger">Gửi bình luận</a>

                            </div>

                        </div>
                        <div class="card-body row">
                            <div class="userimg_bl col-2">
                                <img src="assets/img/logo.png" alt="" width="40px" height="40px" class="rounded mx-auto d-block rounded-circle">
                            </div>
                            <div class="col-10 content">
                                <h5 class="fw-bold">Name user</h5>
                                <p>..............</p>
                                <p class="text-end text-danger"><a href="" class="text-danger">Trả lời</a></p>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-10 ">
                                <div class="row">
                                    <div class="userimg_bl col-2">
                                        <img src="assets/img/logo.png" alt="" width="40px" height="40px" class="rounded mx-auto d-block rounded-circle">
                                    </div>
                                    <div class="col-10 content">
                                        <h5 class="fw-bold">Name user</h5>
                                        <p>..............</p>
                                        <p class="text-end ">
                                            <a href="" class="text-primary">Sửa</a>
                                            <a href="" class="text-danger">Trả lời</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent ">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sản phẩm -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Sản phẩm tương tự</h5>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/flat-hill.png" alt="..." />

                                    <div class="card-body ps-0 bg-200">
                                        <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>
                                        <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                        <div class="d-flex lh-1 flex-row mb-5">
                                            <a href="#"><button class="btn btn-success badge me-2 " type="submit" style="font-size: 14px;" name="xem">See details</button></a>
                                            <form action="#" method="post">
                                                <input type="hidden" name="id_sp" id="" value="">
                                                <button class="btn btn-danger badge " style="font-size: 14px;" type="submit" name="them">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>
                        <div class="col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</body>

</html>