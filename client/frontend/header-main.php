<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
  <div class="container"><a class="navbar-brand d-inline-flex d-flex justify-content-center align-items-center" href="index.php"><img class="d-inline-block" src="assets/img/gallery/White & Black Minimalist Logo Distro Fashion.png" width="42px" height="42px" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">Borcelle</span></a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="index.php">Trang chủ</a></li>
        <li class="nav-item px-2"><a class="nav-link fw-medium" href="products.php">Sản phẩm</a></li>
        <li class="nav-item px-2"><a class="nav-link fw-medium" href="gioithieu.php">Giới thiệu</a></li>
        <li class="nav-item px-2"><a class="nav-link fw-medium" href="chinhsach.php">Chính sách</a></li>
        <li class="nav-item px-2"><a class="nav-link fw-medium" href="lienhe.php">Liên hệ</a></li>
      </ul>
      <form class="d-flex"><a class="text-1000" href="#!">
          <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg></a><a class="text-1000" href="#!">
          <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="21" r="1"></circle>
            <circle cx="20" cy="21" r="1"></circle>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
          </svg></a><a class="text-1000" href="#!">
          <svg class="feather feather-search me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg></a><a class="text-1000" href="<?php if (!isset($_SESSION["user"])) {
                                                  echo "dangnhap.php";
                                                } else {
                                                  echo "taikhoan.php";
                                                } ?>">
          <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg></a><a class="text-1000" href="#!">
          <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
          </svg></a></form>
    </div>
  </div>
</nav>