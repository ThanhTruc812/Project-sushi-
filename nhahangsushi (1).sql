-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2022 lúc 02:17 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhahangsushi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_caption` varchar(1000) NOT NULL,
  `about_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_caption`, `about_img`) VALUES
(1, 'Food comes to us from our raltives, whether they have wings or roots. This is how we consider food , it also has a culture. It has a history that passes from generation to generation.', '/img/about-sushi.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` int(11) NOT NULL,
  `home_caption` varchar(1000) NOT NULL,
  `home_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_caption`, `home_img`) VALUES
(1, 'Thưởng thức bửa tối ngon miệng với những món ăn ngon nhất tại nhà hàng và cải thiện ngày của bạn.', '/img/popular-sushi-rolls.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_password`, `user_fullname`, `user_gender`, `user_phone`, `user_address`) VALUES
(1, 'quang@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Le xuan quang', 'Nam', 273456789, '35 Tân Thuận Tây, quận 7, HCM'),
(2, 'xuanquang@gmail.com', '6901ba12943eaaca7288c4d4f5fb8df8', 'Xuân Quang', 'Nam', 273456789, '35 Tân Thuận Tây, quận 7, HCM'),
(3, 'xuanquang1@gmail.com', '6901ba12943eaaca7288c4d4f5fb8df8', 'Xuân Quang', 'Nam', 273456789, '35 Tân Thuận Tây, quận 7, HCM'),
(4, 'xuanquang2@gmail.com', 'bbb8aae57c104cda40c93843ad5e6db8', 'Xuân Quang', 'Nam', 273456789, '35 Tân Thuận Tây, quận 7, HCM');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Chỉ mục cho bảng `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
