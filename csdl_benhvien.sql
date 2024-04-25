-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 20, 2024 lúc 01:05 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdl_benhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benh_nhan`
--

CREATE TABLE `benh_nhan` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) DEFAULT NULL,
  `tuoi` int(11) DEFAULT NULL,
  `gioi_tinh` varchar(255) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `ma_the_bhyt` varchar(20) DEFAULT NULL,
  `trang_thai` tinyint(1) DEFAULT 1,
  `benh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `benh_nhan`
--

INSERT INTO `benh_nhan` (`id`, `ho_ten`, `tuoi`, `gioi_tinh`, `ngay_sinh`, `dia_chi`, `ma_the_bhyt`, `trang_thai`, `benh`) VALUES
(1, 'Vũ Kim An', 21, 'Nam', '2024-02-01', 'Hải Dương', '012345688', 0, 'Đau đầu'),
(2, 'Trần Văn B', 34, 'Nữ', '2010-03-11', 'Hà Nội', '123456', 1, 'Đau đầu'),
(3, 'Nguyễn Thị Thuỳ Linh', 23, 'Nam', '2024-02-07', 'Ninh Bình', '457542784', 0, 'Xinh đẹp'),
(4, 'Vũ Kim An Đã Sửa', 2, 'Nam', '2024-02-06', 'Hải Dương', '22', 1, 'hhihi haga'),
(5, 'Trần Văn B', 43, 'Nữ', '2024-02-17', 'Ninh Bình', '543534', 0, 'Cute');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `benh_nhan`
--
ALTER TABLE `benh_nhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `benh_nhan`
--
ALTER TABLE `benh_nhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
