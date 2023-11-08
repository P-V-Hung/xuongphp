-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2023 lúc 02:24 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xuongphp1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ca_hoc`
--

CREATE TABLE `ca_hoc` (
  `id` int(11) NOT NULL,
  `ten_ca` varchar(255) NOT NULL,
  `thoi_gian` time NOT NULL,
  `trang_thai` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ca_thi`
--

CREATE TABLE `ca_thi` (
  `id` int(11) NOT NULL,
  `ngay_thi` date NOT NULL,
  `id_ca` int(11) NOT NULL,
  `phong` varchar(255) NOT NULL,
  `lop_hoc` varchar(255) NOT NULL,
  `trang_thai` tinyint(2) NOT NULL,
  `id_ky_hoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `de_thi`
--

CREATE TABLE `de_thi` (
  `id` int(11) NOT NULL,
  `de_thi` varchar(255) NOT NULL,
  `id_mon_hoc` int(11) NOT NULL,
  `trang_thai` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giam_thi`
--

CREATE TABLE `giam_thi` (
  `id` int(11) NOT NULL,
  `id_ca_thi` int(11) NOT NULL,
  `id_gv1` int(11) NOT NULL,
  `id_gv2` int(11) NOT NULL,
  `trang_thai` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giang_vien`
--

CREATE TABLE `giang_vien` (
  `id` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `ten_giang_vien` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `trang_thai` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ky_hoc`
--

CREATE TABLE `ky_hoc` (
  `id` int(11) NOT NULL,
  `ten_ky` varchar(255) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `trang_thai` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_hoc`
--

CREATE TABLE `mon_hoc` (
  `id` int(11) NOT NULL,
  `ten_mon_hocc` varchar(255) NOT NULL,
  `trang_thai` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mon_hoc`
--

INSERT INTO `mon_hoc` (`id`, `ten_mon_hocc`, `trang_thai`) VALUES
(1, 'HTML, CSS', 0),
(12, 'PHP', 0),
(13, 'Laravel', 0),
(14, 'ReactJs', 0),
(15, 'NodeJs', 0),
(16, 'JavaScript', 0),
(17, 'Java', 0),
(18, 'Python', 0),
(19, 'C#', 1),
(20, 'C++', 0),
(22, 'FD', 1),
(27, '', 1),
(28, '', 1),
(29, 'fasdfasd', 1),
(30, 'fasdfsdads', 0),
(31, 'sdfa', 0),
(32, 'Methi', 1),
(33, 'Methi', 0),
(34, 'Methi', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ca_hoc`
--
ALTER TABLE `ca_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ca_thi`
--
ALTER TABLE `ca_thi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_khoa` (`id_ky_hoc`),
  ADD KEY `lk_cat_monh` (`id_ca`);

--
-- Chỉ mục cho bảng `de_thi`
--
ALTER TABLE `de_thi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giam_thi`
--
ALTER TABLE `giam_thi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_giam_thi` (`id_ca_thi`);

--
-- Chỉ mục cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ky_hoc`
--
ALTER TABLE `ky_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ca_hoc`
--
ALTER TABLE `ca_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ca_thi`
--
ALTER TABLE `ca_thi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `de_thi`
--
ALTER TABLE `de_thi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giam_thi`
--
ALTER TABLE `giam_thi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ky_hoc`
--
ALTER TABLE `ky_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mon_hoc`
--
ALTER TABLE `mon_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ca_thi`
--
ALTER TABLE `ca_thi`
  ADD CONSTRAINT `lk_cat_monh` FOREIGN KEY (`id_ca`) REFERENCES `mon_hoc` (`id`),
  ADD CONSTRAINT `lk_khoa` FOREIGN KEY (`id_ky_hoc`) REFERENCES `ky_hoc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
