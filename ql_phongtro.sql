-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2020 lúc 06:49 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_phongtro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ql_hoadon`
--

CREATE TABLE `ql_hoadon` (
  `sophong` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tienphong/thang` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiendien/thang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiennuoc/thang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phidichvu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ql_hopdong`
--

CREATE TABLE `ql_hopdong` (
  `sophong` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiphong` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahopdong` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiendatcoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiendien/so` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiennuoc/khoi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ql_khachthue`
--

CREATE TABLE `ql_khachthue` (
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namsinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CMT_CCCD` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quequan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviecht` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiphong` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ql_khachthue`
--

INSERT INTO `ql_khachthue` (`hoten`, `sodienthoai`, `email`, `namsinh`, `gioitinh`, `CMT_CCCD`, `quequan`, `congviecht`, `loaiphong`) VALUES
('gaugau', '0123', 'co@asda.ác', '2000', 'nam', '01234', 'hn', 'kb', 'Loại 1'),
('Chó Bình', '02123', 'co@asda.ác', '2000', '', '012345', 'hn', 'tRôNg NhÀ', 'Loại 1'),
('Long', '056100168', '6151@gmail.com', '2005', 'Nam', '018436', 'NGuyễn Xá', 'King SLeep', 'Loại 1'),
('Lộc', '15015188', '6151@gmail.com', '1999', '', '05015132121565', 'HN', 'cOdEr', 'Loại 2'),
('Quân', '0601501899', 'quanaduvjpp@gmail.com', '2002', 'Nam', '05151613203', 'Thạch Rau Câu', 'Hacker Phone', 'Loại 3'),
('Nhung', '0262605465', 'nhungcute@gmail.com', '2003', 'Nữ', '0645050156', 'NGuyên XÁ', 'Cấp 3', 'Loại 3'),
('Ngọc Long', '0373773853', 'longskt@gmail.com', '2000', '', '33333', 'Thái Bình', 'Manager', 'Loại 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ql_khuvuc`
--

CREATE TABLE `ql_khuvuc` (
  `makhuvuc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenthanhpho` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ql_phong`
--

CREATE TABLE `ql_phong` (
  `sophong` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiphong` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qlthietbi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tienphong` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ql_phong`
--

INSERT INTO `ql_phong` (`sophong`, `loaiphong`, `qlthietbi`, `tienphong`) VALUES
('A1', 'Loại 1', 'FULL', '3.000.000 VND'),
('A2', 'Loại 2', 'FULL', '2.500.000 VND'),
('A3', 'Loại 3', 'FULL', '2.000.000 VND');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ql_hoadon`
--
ALTER TABLE `ql_hoadon`
  ADD PRIMARY KEY (`sophong`);

--
-- Chỉ mục cho bảng `ql_hopdong`
--
ALTER TABLE `ql_hopdong`
  ADD PRIMARY KEY (`mahopdong`);

--
-- Chỉ mục cho bảng `ql_khachthue`
--
ALTER TABLE `ql_khachthue`
  ADD PRIMARY KEY (`CMT_CCCD`),
  ADD KEY `loaiphong` (`loaiphong`);

--
-- Chỉ mục cho bảng `ql_phong`
--
ALTER TABLE `ql_phong`
  ADD PRIMARY KEY (`loaiphong`),
  ADD KEY `sophong` (`sophong`) USING BTREE;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ql_khachthue`
--
ALTER TABLE `ql_khachthue`
  ADD CONSTRAINT `ql_khachthue_ibfk_1` FOREIGN KEY (`loaiphong`) REFERENCES `ql_phong` (`loaiphong`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
