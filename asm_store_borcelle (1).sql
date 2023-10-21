-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 21, 2023 lúc 11:42 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_store_borcelle`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ho` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `ho`, `ten`, `sdt`, `diachi`, `trangthai`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'phuong13', 'e10adc3949ba59abbe56e057f20f883e', 'voduyphuong13@gmail.com', 'Võ Duy', 'Phương', '0388925209', 'An Giang', 'Quản lí'),
(4, 'Hello', '88888888', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int NOT NULL,
  `noidung_bl` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trangthai_bl` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_sp` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung_bl`, `trangthai_bl`, `id_sp`) VALUES
(26, 'sây helllo', 'Ẩn', 3),
(27, 'Hang chat lượng', 'Hiển thị', 3),
(28, 'Ahihi', 'Hiển thị', 3),
(29, 'Ahihi', 'Hiển thị', 3),
(30, 'huhujjj', 'Hiển thị', 3),
(31, 'doo em oi', 'Ẩn', 4),
(32, 'Balo tốt', 'Ẩn', 2),
(33, 'Xanh chối quá, mà em thích', 'Hiển thị', 4),
(34, 'Hơi đắt', 'Ẩn', 30),
(35, 'Quá đen', 'Hiển thị', 3),
(36, 'Mới thêm dô', 'Hiển thị', 1),
(37, 'Chi tiết hơn cho quần', 'Hiển thị', 31),
(38, 'đỏ đẹp', 'Hiển thị', 2),
(39, 'hehehoooo', 'Hiển thị', 3),
(40, 'oki la', 'Hiển thị', 1),
(42, 'thanhcongqua', 'Hiển thị', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbl`
--

CREATE TABLE `chitietbl` (
  `id_bl` int NOT NULL,
  `id_kh` int NOT NULL,
  `traloi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietbl`
--

INSERT INTO `chitietbl` (`id_bl`, `id_kh`, `traloi`) VALUES
(26, 12, ''),
(27, 15, 'Em nói dì anh không hiểu'),
(28, 54, ''),
(29, 54, ''),
(30, 54, ''),
(31, 54, ''),
(32, 54, ''),
(33, 54, ''),
(34, 54, 'Đắt sắt ra miến'),
(35, 54, ''),
(36, 54, 'Mua đi bạn'),
(37, 54, 'Cảm ơn bạn đã góp ý cho shop'),
(38, 54, ''),
(40, 1, ''),
(42, 54, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_hd` int NOT NULL,
  `id_sp` int NOT NULL,
  `soluong` int DEFAULT NULL,
  `gia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_hd`, `id_sp`, `soluong`, `gia`) VALUES
(1, 1, 3, 70000),
(1, 2, 5, 50000),
(2, 1, 2, 70000),
(2, 2, 1, 50000),
(2, 3, 2, 60000),
(3, 1, 5, 70000),
(4, 2, 1, 50000),
(5, 3, 1, 60000),
(6, 4, 1, 300000),
(7, 1, 1, 70000),
(8, 3, 1, 60000),
(9, 1, 1, 70000),
(10, 2, 1, 50000),
(11, 1, 1, 70000),
(12, 2, 2, 50000),
(13, 2, 1, 50000),
(13, 3, 1, 60000),
(14, 1, 2, 70000),
(15, 2, 1, 50000),
(16, 1, 1, 70000),
(17, 2, 1, 50000),
(18, 2, 1, 50000),
(19, 2, 2, 50000),
(19, 4, 1, 300000),
(20, 2, 1, 50000),
(21, 1, 1, 70000),
(22, 2, 1, 50000),
(23, 2, 1, 50000),
(24, 2, 1, 50000),
(25, 1, 1, 70000),
(26, 2, 1, 50000),
(27, 2, 1, 50000),
(28, 2, 1, 50000),
(29, 2, 1, 50000),
(30, 2, 1, 50000),
(31, 2, 1, 50000),
(32, 2, 1, 50000),
(33, 2, 1, 50000),
(34, 2, 1, 50000),
(35, 2, 1, 50000),
(36, 2, 1, 50000),
(37, 2, 1, 50000),
(38, 1, 1, 70000),
(39, 1, 1, 70000),
(39, 2, 3, 50000),
(40, 1, 1, 70000),
(40, 3, 1, 60000),
(40, 16, 1, 300000),
(41, 2, 1, 50000),
(42, 3, 1, 60000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tongtien` double DEFAULT NULL,
  `tgdat` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_kh` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `sdt`, `diachi`, `tongtien`, `tgdat`, `id_kh`) VALUES
(1, '0777831747', 'Quận Cam', 460000, '2022-08-17 21:15:05', 1),
(2, '0388925209', 'jgjgj', 310000, '2023-08-09 10:28:23', 1),
(3, '0389120633', 'An giang', 350000, '2023-08-09 16:09:51', 12),
(4, '0389120633', 'An giang', 50000, '2023-08-09 16:10:07', 12),
(5, '0389120633', 'An giang', 60000, '2023-08-09 16:11:28', 12),
(6, '0389120633', 'An giang', 300000, '2023-08-09 16:11:36', 12),
(7, '0389120633', 'An giang', 70000, '2023-08-09 16:11:48', 12),
(8, '0389120633', 'An giang', 60000, '2023-08-09 16:12:00', 12),
(9, '0389120633', 'An giang', 70000, '2023-08-09 16:16:07', 12),
(10, '0388925209', 'Long an ', 50000, '2023-08-09 22:00:36', 4),
(11, '0388925209', 'An giang', 70000, '2023-08-09 22:46:31', 13),
(12, '0388925209', 'An giang', 100000, '2023-08-10 12:15:59', 13),
(13, '0388925209', 'An giang', 110000, '2023-08-10 12:17:36', 13),
(14, '0388925209', 'An giang', 140000, '2023-08-10 12:21:38', 13),
(15, '0388925209', 'An giang', 50000, '2023-08-10 12:22:47', 13),
(16, '0388925209', 'An giang', 70000, '2023-08-10 12:23:03', 13),
(17, '0388925209', 'An giang', 50000, '2023-08-10 12:32:39', 13),
(18, '0388925209', 'An giang', 50000, '2023-08-10 12:41:17', 13),
(19, '0388925209', 'An giang', 400000, '2023-08-10 12:49:18', 13),
(20, '0388925209', 'An giang', 50000, '2023-08-10 12:52:26', 13),
(21, '0388925209', 'An giang', 70000, '2023-08-10 12:54:15', 13),
(22, '0388925209', 'An giang', 50000, '2023-08-10 12:56:43', 13),
(23, '0388925209', 'An giang', 50000, '2023-08-10 13:15:39', 13),
(24, '0388925209', 'An giang', 50000, '2023-08-10 13:21:46', 13),
(25, '0388925209', 'Cần thơ', 70000, '2023-08-10 14:01:39', 18),
(26, '0388925209', 'Cần thơ', 50000, '2023-08-10 14:03:16', 18),
(27, '0388925209', 'Cần thơ', 50000, '2023-08-10 14:07:22', 18),
(28, '0388925209', 'An giang', 50000, '2023-08-10 14:10:37', 13),
(29, '0388925209', 'Cần thơ', 50000, '2023-08-10 14:11:16', 19),
(30, '0388925209', 'Cần thơ', 50000, '2023-08-10 14:23:52', 31),
(31, '0388925209', 'An giang', 50000, '2023-08-10 14:31:18', 13),
(32, '0388925209', 'Cần thơbv', 50000, '2023-08-10 14:33:24', 36),
(33, '0388925209', 'Cần thơbv', 50000, '2023-08-10 14:39:39', 43),
(34, '0388925209', 'Cần thơbv', 50000, '2023-08-10 14:42:57', 46),
(35, '0388925209', 'Cần thơbv', 50000, '2023-08-10 14:46:03', 48),
(36, '0388925209', 'An giang', 50000, '2023-08-10 14:48:32', 13),
(37, '0388925209', 'An giang', 50000, '2023-08-10 15:30:50', 13),
(38, '0388925209', 'An giang', 70000, '2023-08-10 15:33:02', 13),
(39, '0388925209', 'An giang', 220000, '2023-08-10 18:21:07', 13),
(40, '0388925209', 'Cần thơ mới', 430000, '2023-08-10 19:45:24', 13),
(41, '0388925209', 'An giang', 50000, '2023-08-10 19:52:41', 2),
(42, '0388925209', 'An giang', 60000, '2023-08-10 20:51:29', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ho` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `username`, `password`, `email`, `ho`, `ten`, `sdt`, `diachi`, `trangthai`) VALUES
(1, 'chihihi', '14e1b600b1fd579f47433b88e8d85291', 'lechi@gmail.com', '', '', '', '', 'Chặn'),
(2, 'Duy Phương 12', '6c9335de5fad0ad60aa32f63ff0c6d06', 'voduyphuong13@gmail.com', 'Võ', 'Phương', '0388925209', 'An giang', 'Cho phép'),
(3, 'root', '6c9335de5fad0ad60aa32f63ff0c6d06', 'voduyphuong13@gmail.com', 'Võ', 'Phương', '0388925209', 'An giang', 'Cho phép'),
(4, 'Võ Duy Phương 12', '6c9335de5fad0ad60aa32f63ff0c6d06', 'voduyphuong13@gmail.com', 'Võ', 'Phương', '0388925209', 'An giang', 'Cho phép'),
(12, 'Thư Đỗ5 ', '6c9335de5fad0ad60aa32f63ff0c6d06', 'phuongvdpc06941@fpt.edu.vn', 'Đỗ', 'Thư', '0389120633', 'An giang', 'Cho phép'),
(54, 'Hello ', 'hayqua', 'dothianhthu6903@gmail.com', 'Đỗ Thị Anh', 'Thư', '0389120633', 'Ven sông cầu kinh 2', 'Cho phép'),
(78, 'Thanhcongthem', 'mysql', 'voduy@gmail.com', 'Aloalo', 'hehe', '0389120633', '', 'Cho phép'),
(83, 'duyphuong77', 'hehehe', '', '', '', '0388925209', '', 'Cho phép');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id_lsp` int NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_lsp`, `ten`, `trangthai`) VALUES
(1, 'Loại sản phẩm số một', 'Ẩn'),
(2, 'Loại sản phẩm 2', 'Ẩn'),
(84, 'Áo', 'Hiển thị'),
(85, 'Quần', 'Hiển thị'),
(86, 'Đồng hồ', 'Hiển thị'),
(87, 'Giày', 'Hiển thị'),
(88, 'Kính', 'Hiển thị'),
(89, 'Balo', 'Hiển thị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mausac` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gia` double DEFAULT NULL,
  `mota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_lsp` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten`, `hinhanh`, `mausac`, `size`, `gia`, `mota`, `trangthai`, `id_lsp`) VALUES
(1, 'Balo leo núi', '20231021025749.png', 'xanh', 'XL', 70000, 'Chất liệu chuẩn châu âu', 'Hiển thị', 89),
(2, 'Sản phẩm 2', '20231021075401.png', 'xanh', 'XL', 50000, 'Mô tả sản phẩm 2', 'Hiển thị', 89),
(3, 'Sản phẩm 3', '20231016062446.png', 'xanh', 'X', 60000, 'Mô tả sản phẩm 3', 'Hiển thị', 31),
(4, 'Áo cotton', '20231021075615.png', 'Cam', 'XL', 300000, 'Màu cam sáng hơn màu đen', 'Hiển thị', 84),
(12, 'Áo nữ', '20231021075640.png', 'Họa tiết', 'M', 500000, 'Sản phẩm chất lượng', 'Hiển thị', 84),
(13, 'Đồng hồ', '20231015143649.png', 'xanh', 'X', 9000000, 'Đồng hồ thụy sĩ', 'Hiển thị', 32),
(14, 'Đồng hồ thông minh', '20231016062531.png', 'xanh', 'Xl', 120000000, 'Đồng hồ 4.0', 'Hiển thị', 26),
(15, 'Áo nam', '20231016062520.png', 'Đỏ', 'XL', 300000, 'Áo polo', 'Hiển thị', 12),
(16, 'Áo polo nữ', '20230810144503.png', 'tím', 'S', 300000, 'Áo nữ', 'Ẩn', 31),
(30, 'Thư', '20231009084029.png', 'hồng', 'm', 500000, 'dep', 'Ẩn', 24),
(31, 'Quần Nam', '20231015170254.png', 'Xanh', 'm', 500000, 'dep', 'Ẩn', 1),
(35, 'Áo cotton', '20231018100231.png', 'Đen', 'm', 300000, 'Áo co giản 2 chiều, đường viền sắc nét', 'Hiển thị', 84),
(36, 'Balo Đỏ', '20231021022641.png', 'Đỏ', 'xl', 500000, 'Chống nước', 'Hiển thị', 89);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `chitietbl`
--
ALTER TABLE `chitietbl`
  ADD PRIMARY KEY (`id_bl`,`id_kh`),
  ADD KEY `id_bl` (`id_bl`,`id_kh`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_hd`,`id_sp`),
  ADD KEY `id_hd` (`id_hd`,`id_sp`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_lsp`),
  ADD UNIQUE KEY `ten` (`ten`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_lsp` (`id_lsp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_lsp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `chitietbl`
--
ALTER TABLE `chitietbl`
  ADD CONSTRAINT `chitietbl_ibfk_1` FOREIGN KEY (`id_bl`) REFERENCES `binhluan` (`id_bl`),
  ADD CONSTRAINT `chitietbl_ibfk_2` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_lsp`) REFERENCES `loaisanpham` (`id_lsp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
