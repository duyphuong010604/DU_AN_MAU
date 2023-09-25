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
    <link rel="stylesheet" href="style.css">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


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
        <!-- Sản phẩm -->
        <section class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Products</h5>
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