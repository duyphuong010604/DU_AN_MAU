<?php
session_start();

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
    <title> Chi tiết sản phẩm - Borcelle </title>


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
        <!-- chi tiết sản phẩm -->
        <section class="py-6 details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-star mt-7 mb-5">
                        <h6 class="fw-bold fs-3 fs-lg-4 lh-sm">Thông tin sản phẩm</h6>
                    </div>
                    <?php
                    include "../backend/pdo.php";
                    include "../atc-user/sanpham.php";
                    $sanpham = new sanpham();
                    $id_sp = $_GET['id_sp'];
                    $row = $sanpham->getById($id_sp);
                    $_SESSION['id_sp'] = $id_sp;
                    ?>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 mb-12 mb-md-0 ">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-6 ">
                                            <img src="../../uploads/<?= $row['hinhanh'] ?>"
                                                class="rounded mx-auto d-block " height="500px" alt="...">
                                        </div>
                                        <div
                                            class="col-md-6 text-detailv border-warning border-start border-4 mt-2 mb-2">
                                            <div class="card-body">
                                                <div class="text-top">
                                                    <h2 class="card-title text-warning">
                                                        <?= $row['ten'] ?>
                                                    </h2>
                                                    <p class="card-text">Mô tả:
                                                        <?= $row['mota'] ?>.
                                                    </p>
                                                    <p class="card-text">Màu:
                                                        <?= strtoupper($row['mausac']) ?>
                                                    </p>
                                                    <p class="card-text">Kích thước:
                                                        <?= strtoupper($row['size']) ?>
                                                    </p>
                                                    <h3 class="card-text text-danger">Giá:
                                                        <?= number_format($row['gia']) ?> VND
                                                    </h3>
                                                    <div class="card mb-3 sale-text">
                                                        <div class="card-header fw-bold">
                                                            Ưu đãi 20% cho các khách hàng
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Đang là học sinh sinh viên!
                                                            </li>
                                                            <li class="list-group-item">Có thẻ thành viên của shop
                                                            </li>
                                                            <li class="list-group-item">Chuyển khoảng qua ngân hàng
                                                                VPbank</li>
                                                        </ul>
                                                    </div>
                                                    <form action="#" method="post">
                                                        <button class="btn btn-success mb-3" name="them">Mua
                                                            ngay</button>
                                                    </form>
                                                </div>
                                                <div class="text-bottom">
                                                    <p class="card-text"><small class="text-muted">Vừa mới cập
                                                            nhật</small></p>
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
                            <h5 class="text-star">Đánh giá sản phẩm </h5>
                            <div class="text-end">
                                <p>Bạn muốn bình luận sản phẩm này?</p>
                                <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="<?php if (isset($_SESSION['user'])) {
                                    echo "#exampleModal";
                                } else {
                                    echo "#tb_dangnhap";
                                }
                                ?>">Gửi
                                    đánh giá</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Gửi đánh giá cho sản
                                                phẩm
                                                <?= $row['ten'] ?>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="../backend/binhluan.php" method="post">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-8 offset-2">
                                                        <img src="../../uploads/<?= $row['hinhanh'] ?>"
                                                            class="rounded mx-auto d-block " height="120px" alt="...">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class=" col-12 mb-3">
                                                        <label for="noidung_bl" class="form-label">Nội dung đánh
                                                            giá</label>
                                                        <textarea class="form-control" id="noidung_bl" rows="3"
                                                            name="noidung_bl"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Thoát</button>
                                                <button type="submit" class="btn btn-danger" name="them">Gửi đánh
                                                    giá</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal tb_dang nhap -->
                            <div class="modal fade" id="tb_dangnhap" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Vui lòng đăng nhập để có
                                                thể đánh giá sản phẩm
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6 offset-3">
                                                    <button class="btn btn-primary"><a href="dangnhap.php">Đăng nhập tài
                                                            khoản</a></button>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body row ">
                            <?php
                            include "../atc-user/chitietbl.php";
                            $chitietbl = new chitiet_bl();
                            $bl_rows = $chitietbl->getById($id_sp);
                            // echo "<pre>".var_dump($bl_rows)."</pre>";
                            
                            if (!($bl_rows) == ''):
                                foreach ($bl_rows as $bl):
                                    ?>
                                    <div class="col-12 content ">
                                        <h5 class="fw-bold pt-3 text-success ps-1 ">
                                            <img src="../../uploads/user.jpg" width="40px" height="40px" class="rounded-circle">
                                            <?= $bl['username'] ?>
                                        </h5>
                                        <p class="ps-5 border border-2">
                                            <?= $bl['noidung_bl'] ?>
                                        </p>
                                    </div>

                                    <!-- <div class="col-2">
                                        <p class="text-end text-danger mt-5"><a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="<?php if (isset($_SESSION['user']))
                                            echo "#traloi" ?>">Trả
                                                lời</a></p>
                                    </div> -->
                                    <?php if (!empty($bl['traloi'])): ?>
                                        <div class="col-2">
                                            <h5 class="text-danger mt-1 ms-2">Trả lời đánh giá</h5>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="fw-bold pt-3 text-primary ps-1 ">
                                                <img src="../../uploads/906343.png" width="40px" height="40px"
                                                    class="rounded-circle">
                                                ADMIN
                                            </h5>
                                            <p class="ps-5 border border-2">
                                                <?= $bl['traloi'] ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                            <!-- Modal trloi
                            <div class="modal fade" id="traloi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Trả lời đánh giá cho sản
                                                phẩm
                                                
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="../backend/traloi.php" method="post">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class=" col-12 mb-3">
                                                        <label for="traloi_bl" class="form-label">Nội dung trả
                                                            lời</label>
                                                        <textarea class="form-control" id="traloi_bl" rows="3" name="traloi_bl"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                                                <button type="submit" class="btn btn-danger" name="traloi">Gửi trả
                                                    lời</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                            
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
                                <?php
                                $rows = $sanpham->get_list();
                                foreach ($rows as $row):
                                    ?>
                                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                src="../../uploads/<?= $row['hinhanh'] ?>" alt="..." />

                                            <div class="card-body ps-0 bg-200">
                                                <h5 class="fw-bold text-1000 text-truncate">
                                                    <?= $row['ten'] ?>
                                                </h5>
                                                <div class="fw-bold"><span class="text-primary">
                                                        <?= number_format($row['gia']) ?>VND
                                                    </span></div>
                                                <div class="d-flex lh-1 flex-row mb-5">
                                                    <a href="products_detail.php?id_sp=<?= $row['id_sp'] ?>"><button
                                                            class="btn btn-success badge me-2 " type="submit"
                                                            style="font-size: 14px;" name="xem">Xem chi tiết</button></a>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="id_sp" id="" value="">
                                                        <button class="btn btn-danger badge " style="font-size: 14px;"
                                                            type="submit" name="them">Thêm vào giỏ hàng</button>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                <?php endforeach; ?>
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