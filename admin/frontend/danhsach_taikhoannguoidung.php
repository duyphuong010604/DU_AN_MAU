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
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Quản lí tài khoản người dùng</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="danhsach_taikhoannguoidung.php" class="menu-link">
                    <div data-i18n="Tables">Danh sách tài khoản</div>
                  </a>
                </li>
                <li class="menu-item ">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí tài khoản người dùng /</span> Danh sách quản lí tài khoản người dùng</h4>
              

              <hr class="my-5" />

              <!-- Bootstrap Table with Header - Footer -->
              <div class="card">
                <h5 class="card-header">Danh sách quản lí tài khoản người dùng</h5>
                <div class="table-responsive text-nowrap p-1">
                  <table id="example" class="table mb-3">
                    <thead>
                      <tr>
                        <th>ID tài khoản</th>
                        <th>User name</th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Trạng thái</th>
                        <th>Tùy chọn</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "../backend/pdo.php";
                      include "../act-admin/khachhang.php";
                      $khachhang = new khachhang();
                      $rows = $khachhang->get_list();
                      foreach($rows as $row):
                      ?>
                      <tr>
                        <td><?=$row['id_kh']?></td>
                        <td><?=$row['username']?></td>
                        <td><?=$row['ho']?> <?=$row['ten']?></td>
                        <td>
                        <?=$row['sdt']?>
                        </td>
                        
                        
                        <td><span class="badge <?php if(trim($row['trangthai'])=='Chặn') {echo 'bg-label-secondary';}else{echo'bg-label-success';}?> me-1"><?=$row['trangthai']?></span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="chitiet_tk.php?id_kh=<?=$row['id_kh']?>"
                                ><i class='bx bx-detail me-1'></i>Chi tiết</a
                              >
                              <a class="dropdown-item" href="sua_tk.php?id_kh=<?=$row['id_kh']?>"
                                ><i class="bx bx-edit-alt me-1"></i>Chỉnh sửa</a
                              >
                              <a class="dropdown-item" href="../backend/khachhang-xoa.php?id_kh=<?=$row['id_kh']?>" 
                                ><i class="bx bx-trash me-1"></i>Xóa</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <!-- Modal -->
                      <!-- <div class="modal fade" id="exampleModal-xoatk" tabindex="-1" aria-labelledby="exampleModalLabel-xoatk" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Xóa tài khoản người dùng</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="card">
                              
                              <div class="card-body">
                                <div class="mb-3 col-12 mb-0">
                                  <div class="alert alert-warning">
                                    <h6 class="alert-heading fw-bold mb-1">Bạn chắc chăn muốn xóa tài khoản?</h6>
                                    <p class="mb-0">Sau khi xóa không thể đặt username đã tồn tại trong csdl</p>
                                  </div>
                                </div>
                                  <form id="formAccountDeactivation" >
                                    <div class="form-check mb-3">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="accountActivation"
                                        id="accountActivation"
                                      />
                                      <label class="form-check-label" for="accountActivation"
                                        >Tôi đồng ý xóa tài khoản!</label
                                      >
                                    </div>
                                    <button type="submit" class="btn btn-danger deactivate-account">Xóa tài khoản</button>
                                  </form>
                            </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div> -->
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                      
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
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
  </body>
</html>