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
            <li class="menu-item ">
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

            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Tables">Quản lí loại sản phẩm</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí loại sản phẩm / Danh sách loại sản phẩm  </span>/ Sửa loại sản phẩm</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Chỉnh sửa loại sản phẩm</h5>
                      <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                    </div>
                    <div class="card-body">
                    <form action="../backend/loaisp-sua.php" method="post">
                      <?php 
                        include "../backend/pdo.php";
                        include "../act-admin/loaisp.php";
                        $loaisp = new loaisp();
                        $id_lsp = $_GET["id_lsp"];
                        $rows = $loaisp->getById($id_lsp);
                        
                      ?>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">ID loại sản phẩm</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="loaisp" class="input-group-text"
                                ><i class='bx bx-id-card'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="id_lsp"
                                required readonly
                                name="id_lsp"
                                value="<?=$rows['id_lsp']?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="ten">Tên loại sản phẩm</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="loaisp" class="input-group-text"
                                ><i class='bx bxl-product-hunt' ></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="ten"
                                value="<?=$rows['ten']?>"
                                name="ten"
                              />
                            </div>
                          </div>
                        </div>
                        

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="trangthai">Trạng thái</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="trangthai" class="input-group-text"
                                ><i class='bx bx-list-ul'></i></span>
                              <select name="trangthai" id="trangthai" class="form-control form-select " >
                                  <option selected disabled >Chọn</option>
                                  <option class="form-control" value="Hiển thị" <?php if ($rows["trangthai"] == "Hiển thị") echo "selected"; ?>>Hiển thị</option>
                                  <option class="form-control" value="Ẩn" <?php if ($rows['trangthai'] == "Ẩn") echo "selected"; ?>>Ẩn</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        
                       
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="luu">Lưu</button>
                          </div>
                        </div>
                        
                      </form>
                    </div>
                  </div>
                </div>
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

    <!-- Main JS -->
    <script src="../content/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    
  </body>
</html>
