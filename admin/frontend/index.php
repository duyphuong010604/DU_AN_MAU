<?php include "html.php"; ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.php" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img class="img" src="../content/assets/img/favicon/White & Black Minimalist Logo Distro Fashion.png" alt="logo" width="42px" height="42px">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">BORCELLE</span>
            <span class="text-primary text-admin ps-1">Admin</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Bảng điều khiển</div>
            </a>
          </li>


          <!-- Quản lí -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Quản lí</span>
          </li>
          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Quản lí tài khoản người dùng</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="danhsach_taikhoannguoidung.php" class="menu-link">
                  <div data-i18n="Tables">Danh sách tài khoản</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="them_taikhoannguoidung.php" class="menu-link">
                  <div data-i18n="Tables">Thêm mới tài khoản</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Tables">Quản lí loại sản phẩm</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="danhsach_loaisp.php" class="menu-link">
                  <div data-i18n="Tables">Danh sách loại sản phẩm</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="them_loaisp.php" class="menu-link">
                  <div data-i18n="Tables">Thêm mới loại sản phẩm</div>
                </a>
              </li>
            </ul>
          </li>


          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Tables">Quản lí sản phẩm</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="danhsach_sanpham.php" class="menu-link">
                  <div data-i18n="Tables">Danh sách sản phẩm</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="them_sanpham.php" class="menu-link">
                  <div data-i18n="Tables">Thêm mới sản phẩm</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Tables">Quản lí bình luận </div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="danhsach_binhluan.php" class="menu-link">
                  <div data-i18n="Tables">Danh sách bình luận</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="them_binhluan.php" class="menu-link">
                  <div data-i18n="Tables">Thêm mới bình luận</div>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <?php include "nav-main.php"; ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Trở lại trang website! 🎉</h5>
                        <p class="mb-4">
                          Kiểm tra các mục bạn đã cập nhật trong hôm nay.
                        </p>

                        <a href="../../client/index.php" class="btn btn-sm btn-outline-primary">Xem trang BORCELLE</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../content/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <?php
                      include "../backend/pdo.php";
                      include "../act-admin/thongke.php";
                      include "../act-admin/loaisp.php";
                      include "../act-admin/sanpham.php";

                      $thongke = new thongke();
                      $khachhang = "khachhang";
                      $binhluan = "binhluan";
                      $sanpham = "sanpham";
                      $loaisanpham = new loaisp();

                      $loaisp = "loaisanpham";
                      $dem_kh = $thongke->dem($khachhang);
                      $dem_bl = $thongke->dem($binhluan);
                      $dem_sp = $thongke->dem($sanpham);
                      $dem_lsp = $thongke->dem($loaisp);

                      ?>
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../content/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="danhsach_taikhoannguoidung.php">Danh sách tài khoản</a>

                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Số lượng tài khoản</span>

                        <h3 class="card-title mb-2 text-danger">
                          <?= $dem_kh[0]['Tong'] ?>
                        </h3>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../content/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                              <a class="dropdown-item" href="danhsach_loaisp.php">Danh sách loại sản phẩm</a>

                            </div>
                          </div>
                        </div>
                        <span>Số lượng loại sản phẩm</span>
                        <h3 class="card-title text-nowrap mb-1 text-danger">
                          <?= $dem_lsp[0]['Tong'] ?>
                        </h3>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->

              <!-- Biểu đồ cột -->
              <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0 mb-3">

                    <div class="col-md-12 rounded">
                      <div id="bieu-do" style=" height: 400px; width: 100%;"></div>
                    </div>

                    <?php
                    $truyvan_ao = "SELECT COUNT(SP.id_sp) as 'SL'FROM sanpham SP
                      INNER JOIN loaisanpham LSP ON LSP.id_lsp = SP.id_lsp 
                      WHERE LSP.id_lsp = 84";
                    $dem_sl_ao = $loaisanpham->dem_sp($truyvan_ao);

                    $truyvan_quan = "SELECT COUNT(SP.id_sp) as 'SL'FROM sanpham SP
                      INNER JOIN loaisanpham LSP ON LSP.id_lsp = SP.id_lsp 
                      WHERE LSP.id_lsp = 85";
                    $dem_sl_quan = $loaisanpham->dem_sp($truyvan_quan);

                    $truyvan_dongho = "SELECT COUNT(SP.id_sp) as 'SL'FROM sanpham SP
                      INNER JOIN loaisanpham LSP ON LSP.id_lsp = SP.id_lsp 
                      WHERE LSP.id_lsp = 86";
                    $dem_sl_dongho = $loaisanpham->dem_sp($truyvan_dongho);

                    $truyvan_giay = "SELECT COUNT(SP.id_sp) as 'SL'FROM sanpham SP
                      INNER JOIN loaisanpham LSP ON LSP.id_lsp = SP.id_lsp 
                      WHERE LSP.id_lsp = 87";
                    $dem_sl_giay = $loaisanpham->dem_sp($truyvan_giay);

                    $truyvan_kinh = "SELECT COUNT(SP.id_sp) as 'SL'FROM sanpham SP
                      INNER JOIN loaisanpham LSP ON LSP.id_lsp = SP.id_lsp 
                      WHERE LSP.id_lsp = 88";
                    $dem_sl_kinh = $loaisanpham->dem_sp($truyvan_kinh);

                    $truyvan_balo = "SELECT COUNT(SP.id_sp) as 'SL'FROM sanpham SP
                      INNER JOIN loaisanpham LSP ON LSP.id_lsp = SP.id_lsp 
                      WHERE LSP.id_lsp = 89";
                    $dem_sl_balo = $loaisanpham->dem_sp($truyvan_balo);

                    ?>


                  </div>

                  <!-- Biểu đồ tròn -->
                  <!-- <div class="row row-bordered g-0">
                    <div class="col-md-12 rounded">
                      <div id="bieu-do-tron" style=" height: 400px; width: 100%;"></div>
                    </div>
                  </div> -->
                </div>
              </div>


              <!--/ Total Revenue -->
              <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../content/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="danhsach_sanpham.php">Danh sách sản phẩm</a>

                            </div>
                          </div>
                        </div>
                        <span class="d-block mb-1">Số lượng sản phẩm</span>
                        <h3 class="card-title text-nowrap mb-2 text-danger">
                          <?= $dem_sp[0]['Tong'] ?>
                        </h3>

                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../content/assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                              <a class="dropdown-item" href="danhsach_binhluan.php">Danh sách bình luận</a>

                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Số lượng bình luận</span>
                        <h3 class="card-title mb-2 text-danger">
                          <?= $dem_bl[0]['Tong'] ?>
                        </h3>

                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $sp = new sanpham();
                $sp_tb = $sp->get_giatb();
                $sp_min = $sp->get_giamin();
                $sp_max = $sp->get_giamax();
                ?>
                <div class="row">
                  <div class="col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3 mb-3">
                          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                              <h5 class="text-nowrap mb-1"> Giá trung bình các sản phẩm:</h5>
                              <span class="badge bg-label-warning rounded-pill"></span>
                            </div>
                            <div class="mt-sm-auto">
                              <h3 class="mb-0">
                                <?= number_format($sp_tb) ?> VND
                              </h3>
                            </div>
                          </div>
                        </div>

                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3 mb-3">
                          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                              <h5 class="text-nowrap mb-1"> Giá sản phẩm cao nhất:</h5>
                              <span class="badge bg-label-warning rounded-pill"></span>
                            </div>
                            <div class="mt-sm-auto">
                              <h3 class="mb-0">
                                <?= number_format($sp_max) ?> VND
                              </h3>
                            </div>
                          </div>
                        </div>

                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3 mb-3">
                          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                              <h5 class="text-nowrap mb-1"> Giá sản phẩm thấp nhất:</h5>
                              <span class="badge bg-label-warning rounded-pill"></span>
                            </div>
                            <div class="mt-sm-auto">
                              <h3 class="mb-0">
                                <?= number_format($sp_min) ?> VND
                              </h3>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">

            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <?php include "footer-main.php" ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../content/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../content/assets/vendor/libs/popper/popper.js"></script>
  <script src="../content/assets/vendor/js/bootstrap.js"></script>
  <script src="../content/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../content/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../content/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../content/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../content/assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Bieu đồ -->
  <?php


  $dataPoints = array(
    array("y" => $dem_sl_ao, "label" => "Áo"),
    array("y" => $dem_sl_quan, "label" => "Quần"),
    array("y" => $dem_sl_dongho, "label" => "Đồng Hồ"),
    array("y" => $dem_sl_balo, "label" => "Balo"),
    array("y" => $dem_sl_kinh, "label" => "Kính"),
    array("y" => $dem_sl_giay, "label" => "Giày"),
    array(
      "y" => $dem_sp[0]['Tong'] - ($dem_sl_ao +
        $dem_sl_quan +
        $dem_sl_dongho +
        $dem_sl_giay +
        $dem_sl_kinh +
        $dem_sl_balo),
      "label" => "Sản phẩm khác"
    )

  );

  ?>
  <script>
    window.onload = function() {
      var chart = new CanvasJS.Chart("bieu-do", {
        animationEnabled: true,
        theme: "light2",
        title: {
          text: "Số Lượng sản phẩm theo từng loại "
        },
        axisY: {
          title: "Số Lượng "
        },
        data: [{
          type: "column",
          yValueFormatString: "#,##0.## tonnes",
          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart.render();
    }
  </script>
  <?php
  // $dataPoints_tron = array(
  //   array("y" => $dem_sl_ao, "label" => "Áo"),
  //   array("y" => $dem_sl_quan, "label" => "Quần"),
  //   array("y" => $dem_sl_dongho, "label" => "Đồng Hồ"),
  //   array("y" => $dem_sl_balo, "label" => "Balo"),
  //   array("y" => $dem_sl_kinh, "label" => "Kính"),
  //   array("y" => $dem_sl_giay, "label" => "Giày"),
  //   array(
  //     "y" => $dem_sp[0]['Tong'] - ($dem_sl_ao +
  //       $dem_sl_quan +
  //       $dem_sl_dongho +
  //       $dem_sl_giay +
  //       $dem_sl_kinh +
  //       $dem_sl_balo),
  //     "label" => "Sản phẩm khác"
  //   )

  // );

  ?>


  <!-- <script>
    window.onload = function() {
      var chart1 = new CanvasJS.Chart("bieu-do-tron", {
        theme: "light2",
        animationEnabled: true,
        title: {
          text: "Tỷ lệ sản phẩm theo loại"
        },
        data: [{
          type: "pie",
          indexLabel: "{y}",
          yValueFormatString: "#,##0.00\"%\"",
          indexLabelPlacement: "inside",
          indexLabelFontColor: "#36454F",
          indexLabelFontSize: 18,
          indexLabelFontWeight: "bolder",
          showInLegend: true,
          legendText: "{label}",
          dataPoints: <?php echo json_encode($dataPoints_tron, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart1.render();

    }
  </script> -->




  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
  
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

</body>

</html>