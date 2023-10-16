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
              <li class="menu-item ">
                <a href="danhsach_taikhoannguoidung.php" class="menu-link">
                  <div data-i18n="Tables">Danh sách tài khoản</div>
                </a>
              </li>
              <li class="menu-item active">
                <a href="them_taikhoannguoidung.php" class="menu-link">
                  <div data-i18n="Tables">Thêm mới tài khoản</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item ">
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
              <li class="menu-item ">
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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí tài khoản người dùng/ </span> Thêm mới tài khoản người dùng</h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">

              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Thêm mới tài khoản người dùng</h5>
                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                  </div>
                  <div class="card-body">
                    <form action="../backend/khachhang-them.php" method="post">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="username">User Name</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="username" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập" aria-describedby="username" name="username" required/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="password">Password</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-password" class="input-group-text"><i class='bx bx-text'></i></span>
                            <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password" required />
                            <span id="basic-icon-default-password icon-hidden" class="input-group-text">
                              <i class='bx bx-show' onclick="changeTypePassword()"></i>
                            </span>


                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="ho">Họ và tên đệm</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="ho" class="input-group-text"><i class='bx bx-user-circle'></i></span>
                            <input type="text" class="form-control" id="ho" placeholder="Họ và tên đệm" name="ho" required/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="ten">Tên</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="ten" class="input-group-text"><i class='bx bx-user-circle'></i></span>
                            <input type="text" class="form-control" id="ten" placeholder="Tên" name="ten" aria-describedby="ten" required/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="diachi">Địa chỉ</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="diachi" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="text" id="diachi" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="diachi" name="diachi" required/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input type="text" id="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="email" name="email" required/>
                            <span id="email" class="input-group-text">@example.com</span>
                          </div>

                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="sdt">Số điện thoại</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="sdt" class="input-group-text"><i class="bx bx-phone"></i></span>
                            <input type="text" id="sdt" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="sdt" name="sdt" required />
                          </div>
                        </div>
                      </div>
                      <!-- <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Giới tính</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class='bx bx-male-female'></i></span>
                              <select name="" id="" class="form-control form-select">
                                <option value="" selected >Giới tính</option>
                                <option value="">Nam</option>
                                <option value="">Nữ</option>
                                <option value="">Khác</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Ngày sinh</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class='bx bxs-calendar-event'></i></span>
                              <input
                                type="date"
                                id="basic-icon-default-phone"
                                class="form-control phone-mask"
                                placeholder="12/02/2001"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2"
                              />
                            </div>
                          </div>
                        </div> -->

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="trangthai ">Trạng thái</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="trangthai " class="input-group-text"><i class='bx bx-list-ul'></i></span>
                            <select name="trangthai" id="trangthai" class="form-control form-select" required>
                              <option selected disabled>Chọn</option>
                              <option class="form-control" value="Cho phép">Cho phép</option>
                              <option class="form-control" value="Chặn">Chặn</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary" name="them">Thêm mới</button>
                          <?php if (isset($_SESSION['messages'])) echo "<br><span style='color: red;'>" . $_SESSION['messages'] . "</span><br>"; ?>
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
          <footer class="content-footer footer bg-footer-theme shadow p-3 mb-5 bg-body rounded ">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0 col-4">
                <div class="top-logo d-flex justify-content-start align-items-center">
                  <img src="../content/assets/img/favicon/White & Black Minimalist Logo Distro Fashion.png" alt="logo" class="me-1" width="42px" height="42px">
                  <a href="#" class=" text-logo footer-link fw-bolder">BORCELLE STORE</a>
                </div>
                <h4 class="mt-5 mb-5">Trang mua sắm thời trang hàng đầu VIỆT NAM</h4>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.0317137582388!2d105.7647403745949!3d10.014239072790462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08832a0ceaab3%3A0xd3c1057499044392!2zMjE2IFThuqdtIFZ1LCBIxrBuZyBM4bujaSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1695056442710!5m2!1svi!2s" style="border: 2px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="mb-2 mb-md-0 col-8 border-start border-5 border-secondary">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Bạn cần hỗ trợ</th>
                      <th scope="col">Hướng dẫn mua hàng</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><span class=" text-primary fw-bold">19006277</span></th>
                      <td>Trang chủ</td>


                    </tr>
                    <tr>
                      <th>
                        <p>Địa chỉ: 345, đường Nguyễn Văn Cừ, xã Mỹ Lộc, huyện Phong Điền, TP.Cần Thơ</p>
                      </th>
                      <td>Sản phẩm</td>
                      <td></td>

                    </tr>
                    <tr>
                      <th>
                        <p> Email: phuongvdpc06941@gmail.com</p>
                      </th>
                      <td>Giới thiệu</td>

                    </tr>
                    <tr>
                      <th>
                        <p>SĐT: 0388925209</p>
                      </th>
                      <td>Liên hệ</td>

                    </tr>
                    <tr>
                      <th>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325 1.42-3.592 3.5-3.592.699-.002 1.399.034 2.095.107v2.42h-1.435c-1.128 0-1.348.538-1.348 1.325v1.735h2.697l-.35 2.725h-2.348V21H20a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"></path>
                          </svg></a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path>
                          </svg></a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path>
                          </svg></a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path>
                            <circle cx="11.994" cy="11.979" r="3.003"></circle>
                          </svg></a>
                      </th>
                      <td>Tin tức</td>

                    </tr>
                    <tr>
                      <th>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="48" height="36" viewBox="0 0 24 24" style="border: 1px solid black; fill: rgba(0, 0, 0, 1);">
                            <path d="M19.554 9.488c.121.563.106 1.246-.04 2.051-.582 2.978-2.477 4.466-5.683 4.466h-.442a.666.666 0 0 0-.444.166.72.72 0 0 0-.239.427l-.041.189-.553 3.479-.021.151a.706.706 0 0 1-.247.426.666.666 0 0 1-.447.166H8.874a.395.395 0 0 1-.331-.15.457.457 0 0 1-.09-.363c.061-.373.148-.938.267-1.689.117-.75.206-1.314.267-1.689s.15-.938.272-1.685c.121-.748.212-1.31.271-1.685.033-.248.179-.371.433-.371h1.316c.893.013 1.682-.057 2.375-.211 1.172-.262 2.134-.744 2.886-1.449.685-.637 1.203-1.462 1.56-2.473.162-.47.277-.917.352-1.338.006-.041.014-.066.025-.074.008-.011.022-.014.035-.011a.378.378 0 0 1 .062.035c.524.398.854.941.98 1.632zm-1.728-2.836c0 .717-.154 1.508-.465 2.374-.537 1.562-1.547 2.618-3.037 3.168-.758.269-1.602.408-2.535.425 0 .006-.301.007-.904.007l-.903-.007c-.672 0-1.067.32-1.187.964-.013.053-.298 1.83-.855 5.329-.008.066-.048.102-.121.102H4.854a.473.473 0 0 1-.369-.165.469.469 0 0 1-.115-.39L6.702 3.664a.784.784 0 0 1 .276-.483.785.785 0 0 1 .519-.19h6.014c.228 0 .555.044.979.131.428.084.801.194 1.123.321.718.274 1.266.688 1.645 1.237.379.552.568 1.207.568 1.972z"></path>
                          </svg></a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="48" height="36" viewBox="0 0 24 24" style="border: 1px solid black; fill: rgba(0, 0, 0, 1);">
                            <path d="M16.539 9.186a4.155 4.155 0 0 0-1.451-.251c-1.6 0-2.73.806-2.738 1.963-.01.85.803 1.329 1.418 1.613.631.292.842.476.84.737-.004.397-.504.577-.969.577-.639 0-.988-.089-1.525-.312l-.199-.093-.227 1.332c.389.162 1.09.301 1.814.313 1.701 0 2.813-.801 2.826-2.032.014-.679-.426-1.192-1.352-1.616-.563-.275-.912-.459-.912-.738 0-.247.299-.511.924-.511a2.95 2.95 0 0 1 1.213.229l.15.067.227-1.287-.039.009zm4.152-.143h-1.25c-.389 0-.682.107-.852.493l-2.404 5.446h1.701l.34-.893 2.076.002c.049.209.199.891.199.891h1.5l-1.31-5.939zm-10.642-.05h1.621l-1.014 5.942H9.037l1.012-5.944v.002zm-4.115 3.275.168.825 1.584-4.05h1.717l-2.551 5.931H5.139l-1.4-5.022a.339.339 0 0 0-.149-.199 6.948 6.948 0 0 0-1.592-.589l.022-.125h2.609c.354.014.639.125.734.503l.57 2.729v-.003zm12.757.606.646-1.662c-.008.018.133-.343.215-.566l.111.513.375 1.714H18.69v.001h.001z"></path>
                          </svg></a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="48" height="36" viewBox="0 0 24 24" style="border: 1px solid black; fill: rgba(0, 0, 0, 1);">
                            <path d="M11.454 17.021c.048.041.1.082.151.122a6.173 6.173 0 0 1-3.42 1.03A6.17 6.17 0 0 1 2.01 12a6.175 6.175 0 0 1 9.592-5.144c-.05.043-.1.082-.138.126A6.633 6.633 0 0 0 9.166 12c0 1.925.833 3.755 2.288 5.021zm4.361-11.195a6.14 6.14 0 0 0-3.416 1.03c.049.043.099.082.137.126 1.462 1.263 2.299 3.094 2.299 5.018s-.835 3.753-2.288 5.021c-.049.041-.101.082-.151.122a6.162 6.162 0 0 0 3.418 1.03 6.174 6.174 0 1 0 .001-12.347zM12 7.15A6.152 6.152 0 0 0 9.644 12 6.15 6.15 0 0 0 12 16.853 6.157 6.157 0 0 0 14.357 12 6.15 6.15 0 0 0 12 7.15z"></path>
                          </svg></a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="48" height="36" viewBox="0 0 24 24" style="border: 1px solid black; fill: rgba(0, 0, 0, 1);">
                            <path d="M21 4H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-1 11a3 3 0 0 0-3 3H7a3 3 0 0 0-3-3V9a3 3 0 0 0 3-3h10a3 3 0 0 0 3 3v6z"></path>
                            <path d="M12 8c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"></path>
                          </svg></a>

                      </th>
                      <td>Danh mục</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
              </div>
              <div>
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
              </div>
            </div>
          </footer>
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

  <script>
    function changeTypePassword() {
      document.getElementById('password').type = document.getElementById('password').type == 'text' ? 'password' : 'text';
    }
  </script>
</body>

</html>