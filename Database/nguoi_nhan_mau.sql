-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 07:08 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hienmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_nhan_mau`
--

CREATE TABLE `nguoi_nhan_mau` (
  `reci_id` int(100) NOT NULL,
  `reci_name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reci_age` int(200) DEFAULT NULL,
  `reci_bgrp` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reci_bqnty` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reci_sex` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reci_reg_date,` date DEFAULT NULL,
  `reci_phno` char(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_nhan_mau`
--

INSERT INTO `nguoi_nhan_mau` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date,`, `reci_phno`) VALUES
(1, 'Đỗ Quang Tuấn', 20, 'AB', '300ml', 'Nam', '2021-10-15', '0988888888'),
(2, 'Đỗ Quang Huấn', 29, 'A', '400ml', 'Nam', '2021-10-16', '0988898888');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoi_nhan_mau`
--
ALTER TABLE `nguoi_nhan_mau`
  ADD PRIMARY KEY (`reci_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoi_nhan_mau`
--
ALTER TABLE `nguoi_nhan_mau`
  MODIFY `reci_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
