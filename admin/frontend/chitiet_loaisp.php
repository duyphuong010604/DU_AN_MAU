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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí loại sảm phẩm / Danh sách quản lí loại sảm phẩm </span>/ Thông tin chi tiết loại sản phẩm</h4>
              

              <hr class="my-5" />

              <!-- Bootstrap Table with Header - Footer -->
              <div class="card">
                <h5 class="card-header">Thông tin chi tiết loại sản phẩm </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                    <?php 
                        include "../backend/pdo.php";
                        include "../act-admin/loaisp.php";
                        $loaisp = new loaisp();
                        $id_lsp = $_GET["id_lsp"];
                        $rows = $loaisp->getById($id_lsp);
                        // var_dump($rows);
                      ?>
                      <tr>
                        <th>Thông tin</th>
                        <th>Thông tin loại sản phẩm</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>ID loại sản phẩm</td>
                        <td><?=$rows['id_lsp']?></td>
                      </tr>
                      <tr>
                        <td>Tên loại sản phẩm</td>
                        <td><?=$rows['ten']?></td>
                      </tr>
                      <tr>
                        <td>Ngày tạo loại sản phẩm</td>
                        <td>.....</td>
                      </tr>
                      <tr>
                        <td>Trạng thái</td>
                        <td><span class="badge me-1 <?php if(trim($row['trangthai'])=='Ẩn') {echo 'bg-label-secondary';}else{echo'bg-label-success';}?> "><?=$rows['trangthai']?></span></td>
                      </tr>

                    </tbody>
                    <tfoot class="table-border-bottom-0 bg-secondary opacity-75 text-white fw-bold">
                      <tr>
                        <td>Tùy chọn</td>
                        <td>
                            <a href="../frontend/sua_loaisp.php?id_lsp=<?=$rows["id_lsp"]?>">
                                <button class="btn btn-outline-success"><i class='bx bx-message-square-edit'></i></button>
                            </a>
                            <a href="../backend/loaisp-xoa.php?id_lsp=<?=$rows["id_lsp"]?>" >
                                <button class="btn btn-outline-danger"><i class='bx bx-message-square-x'></i></button>
                            </a>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!-- Bootstrap Table with Header - Footer -->
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

    <!-- Main JS -->
    <script src="../content/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>