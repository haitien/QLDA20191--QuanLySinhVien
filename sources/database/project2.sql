-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2019 lúc 10:04 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangdiem`
--

CREATE TABLE `bangdiem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maSV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLop` int(10) UNSIGNED NOT NULL,
  `diemQT` double(8,2) NOT NULL,
  `diemCK` double(8,2) NOT NULL,
  `diemChu` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangdiem`
--

INSERT INTO `bangdiem` (`id`, `maSV`, `maLop`, `diemQT`, `diemCK`, `diemChu`, `create_at`) VALUES
(1, '20151950', 1, 10.00, 8.50, 'A', '2019-05-14 02:50:18'),
(2, '20151950', 6, 7.00, 10.00, 'A', '2019-05-14 02:44:32'),
(3, '20151950', 8, 8.50, 9.00, 'A', '2019-05-14 02:44:38'),
(4, '20151331', 1, 5.00, 5.00, 'D+', '2019-05-12 15:47:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdaotao`
--

CREATE TABLE `ctdaotao` (
  `maCT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenCT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctdaotao`
--

INSERT INTO `ctdaotao` (`maCT`, `tenCT`, `create_at`) VALUES
('cn', 'Cử nhân', '2019-05-12 15:12:01'),
('cttt', 'Chương trình tiên tiến', '2019-05-12 15:12:01'),
('ks', 'Kỹ sư', '2019-05-12 15:12:01'),
('ksclc', 'Kỹ sư chất lượng cao', '2019-05-12 15:12:01'),
('kstn', 'Kỹ sư tài năng', '2019-05-12 15:12:01'),
('sie', 'Quốc tế', '2019-05-12 15:12:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdaotao_hocphan`
--

CREATE TABLE `ctdaotao_hocphan` (
  `maCT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maHocPhan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dotdangky`
--

CREATE TABLE `dotdangky` (
  `maDot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maHocKy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayBatDau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayKetThuc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `maHocKy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayBatDau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayKetThuc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`maHocKy`, `ngayBatDau`, `ngayKetThuc`, `create_at`) VALUES
('20131', '20/8/2016', '14/1/2017', '2019-05-12 14:04:32'),
('20132', '21/1/2017', '30/5/2017', '2019-05-12 14:04:32'),
('20141', '20/8/2016', '14/1/2017', '2019-05-12 14:04:32'),
('20142', '21/1/2017', '30/5/2017', '2019-05-12 14:04:32'),
('20151', '20/8/2016', '14/1/2017', '2019-05-12 14:04:32'),
('20152', '21/1/2017', '30/5/2017', '2019-05-12 14:04:32'),
('20161', '20/8/2016', '14/1/2017', '2019-05-12 14:04:32'),
('20162', '21/1/2017', '30/5/2017', '2019-05-12 14:04:32'),
('20171', '20/8/2016', '14/1/2017', '2019-05-12 14:04:32'),
('20172', '21/1/2017', '30/5/2017', '2019-05-12 14:04:32'),
('20181', '20/8/2016', '14/1/2017', '2019-05-12 14:04:32'),
('20182', '21/1/2017', '30/5/2017', '2019-05-12 14:04:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `maHocPhan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenHocPhan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maVien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soTC` tinyint(11) NOT NULL,
  `trongSo` float NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`maHocPhan`, `tenHocPhan`, `maVien`, `soTC`, `trongSo`, `create_at`) VALUES
('EE4609', 'Hệ thống điều khiển và giám sát', 'see', 3, 0.7, '2019-05-12 14:42:40'),
('FL1010', 'Tiếng Anh I', 'sofl', 3, 0.7, '2019-05-12 14:42:40'),
('FL1020', 'Tiếng Anh II', 'sofl', 3, 0.7, '2019-05-12 14:42:40'),
('IT1010', 'Tin học đại cương', 'soict', 3, 0.6, '2019-05-12 14:42:40'),
('MI1010', 'Giải tích I', 'sami', 3, 0.7, '2019-05-12 14:42:40'),
('MI1017', 'Toán đại cương I', 'sami', 3, 0.7, '2019-05-12 14:42:40'),
('SSH1030', 'Lịch sử Đảng CSVN', 'dpt', 2, 0.7, '2019-05-12 14:42:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhoc`
--

CREATE TABLE `lichhoc` (
  `tietDau` int(11) NOT NULL,
  `tietCuoi` int(11) NOT NULL,
  `maPhong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLop` int(10) UNSIGNED NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `maLop` int(10) UNSIGNED NOT NULL,
  `soLuong` tinyint(4) UNSIGNED NOT NULL,
  `maHocPhan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maHocKy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`maLop`, `soLuong`, `maHocPhan`, `maHocKy`, `create_at`) VALUES
(1, 30, 'MI1010', '20131', '2019-05-12 15:05:16'),
(2, 30, 'MI1010', '20131', '2019-05-12 15:05:16'),
(3, 30, 'MI1010', '20131', '2019-05-12 15:05:16'),
(4, 30, 'MI1010', '20131', '2019-05-12 15:05:16'),
(5, 30, 'MI1010', '20131', '2019-05-12 15:05:16'),
(6, 30, 'MI1010', '20141', '2019-05-12 15:05:16'),
(7, 30, 'MI1010', '20141', '2019-05-12 15:05:16'),
(8, 30, 'MI1010', '20141', '2019-05-12 15:05:16'),
(9, 30, 'MI1010', '20141', '2019-05-12 15:05:16'),
(10, 30, 'MI1010', '20141', '2019-05-12 15:05:16'),
(11, 30, 'MI1010', '20151', '2019-05-12 15:05:16'),
(12, 30, 'MI1010', '20151', '2019-05-12 15:05:16'),
(13, 30, 'MI1010', '20151', '2019-05-12 15:05:16'),
(14, 30, 'MI1010', '20151', '2019-05-12 15:05:16'),
(15, 30, 'MI1010', '20161', '2019-05-12 15:05:16'),
(16, 30, 'MI1010', '20171', '2019-05-12 15:05:16'),
(17, 30, 'MI1010', '20181', '2019-05-12 15:05:16'),
(18, 40, 'IT1010', '20131', '2019-05-12 15:05:16'),
(19, 40, 'IT1010', '20141', '2019-05-12 15:05:16'),
(20, 40, 'IT1010', '20151', '2019-05-12 15:05:16'),
(21, 40, 'IT1010', '20161', '2019-05-12 15:05:16'),
(22, 40, 'IT1010', '20171', '2019-05-12 15:05:16'),
(23, 40, 'IT1010', '20181', '2019-05-12 15:05:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopsv`
--

CREATE TABLE `lopsv` (
  `maLop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenLop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soLuong` tinyint(3) UNSIGNED NOT NULL,
  `khoaHoc` tinyint(3) UNSIGNED NOT NULL,
  `maCT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maVien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lopsv`
--

INSERT INTO `lopsv` (`maLop`, `tenLop`, `soLuong`, `khoaHoc`, `maCT`, `maVien`, `create_at`) VALUES
('ksclc-ckhk', 'KSCLC Cơ khí hàng không', 14, 60, 'ksclc', 'ste', '2019-05-12 15:18:10'),
('ksclc-httt&tt', 'KSCLC Hệ thống thông tin', 19, 60, 'ksclc', 'soict', '2019-05-12 15:18:10'),
('ksclc-thcn', 'KSCLC Tin học công nghiệp', 21, 60, 'ksclc', 'see', '2019-05-12 15:18:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_04_23_132848_table_taikhoan', 1),
(12, '2019_04_25_134504_table_thongtincanhan', 2),
(13, '2019_04_25_134529_table_thongtinhoctap', 2),
(14, '2019_04_25_134703_table_hocky', 2),
(15, '2019_04_25_134744_table_ctdaotao', 2),
(16, '2019_04_25_134755_table_vien', 2),
(17, '2019_04_25_134818_table_bangdiemsv', 2),
(18, '2019_04_25_134831_table_bangdiemlop', 2),
(19, '2019_04_25_141952_table_phonghoc', 2),
(20, '2019_04_25_134559_table_lopsv', 3),
(22, '2019_04_25_134608_table_lophoc', 5),
(23, '2019_04_25_134717_table_dotdangky', 6),
(24, '2019_04_25_142418_table_ctdaotao_hocphan', 7),
(25, '2019_04_25_134730_table_lichhoc', 8),
(26, '2019_04_25_155958_table_lopsv', 9),
(27, '2019_04_25_134350_table_sinhvien', 10),
(28, '2019_05_12_140736_bangdiem', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phonghoc`
--

CREATE TABLE `phonghoc` (
  `maPhong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toaNha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soPhong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soBan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `maSV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`maSV`, `username`, `maLop`, `create_at`) VALUES
('20151331', 'hieu', 'ksclc-thcn', '2019-05-12 15:41:28'),
('20151950', 'sinhvien', 'ksclc-httt&tt', '2019-05-12 15:41:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `hoTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioiTinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucVu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`hoTen`, `gioiTinh`, `username`, `password`, `email`, `chucVu`, `sdt`, `remember_token`, `create_at`) VALUES
('admin', 'Nam', 'admin', '$2y$10$iouLbj/CF39qKr.5r/y.4uEZCzguA2XASZRn1SzTMJKT/UN.y3eiy', 'nguyenankhang15@gmail.com', 'Admin', '0373445086', NULL, '2019-05-10 16:28:04'),
('Cán Bộ', 'Nam', 'canbo', '$2y$10$WtxIFAYGtvgJCeJ71dIXA.L6dJjBPcLLQAq9LC5HBZyRns6djjTRW', 'nguyenankhang1505@gmail.com', 'Cán bộ', '0373445086', NULL, '2019-05-10 16:29:57'),
('Nguyễn Chí Hiếu', 'Nữ', 'hieu', '$2y$10$Rw7JD7AqG2Pa6RgzcLOL3e1iB.8SAjAgxIdIIsxey9dLupO26zV9a', 'hieu@gmail.com', 'Sinh viên', '0373445088', NULL, '2019-05-04 02:40:51'),
('Nguyễn An Khang', 'Nam', 'khang', '$2y$10$HabxW.M3ncE73V2nWUwRre16P1BiaUuMuRYafjMqfYQoES11dSAWi', 'nguyenankhang1505@gmail.com', 'Admin', '123456789', NULL, '2019-05-03 07:11:49'),
('Sinh Viên', 'Nữ', 'sinhvien', '$2y$10$sT6PPH6LFx2O0wGPRmVOxuuMBBHSXzDuELDyQy.JUznlmwrohbfWu', '20151950@student.hust.edu.vn', 'Sinh viên', '0373445086', NULL, '2019-05-10 16:30:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtincanhan`
--

CREATE TABLE `thongtincanhan` (
  `maSV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danToc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tonGiao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truongTHPT` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namTN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soCMND` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diaChi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoKhau` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtincanhan`
--

INSERT INTO `thongtincanhan` (`maSV`, `danToc`, `tonGiao`, `truongTHPT`, `namTN`, `soCMND`, `diaChi`, `hoKhau`, `create_at`) VALUES
('20151331', 'Kinh', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-14 07:28:04'),
('20151950', 'Kinh', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-14 07:28:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinhoctap`
--

CREATE TABLE `thongtinhoctap` (
  `maSV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soTCTL` tinyint(191) UNSIGNED DEFAULT NULL,
  `diemTB` float DEFAULT NULL,
  `trinhDo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soTCNo` tinyint(191) UNSIGNED DEFAULT NULL,
  `soTCToiDa` tinyint(3) UNSIGNED DEFAULT NULL,
  `mucCC` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyDoCC` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinhoctap`
--

INSERT INTO `thongtinhoctap` (`maSV`, `soTCTL`, `diemTB`, `trinhDo`, `soTCNo`, `soTCToiDa`, `mucCC`, `lyDoCC`, `create_at`) VALUES
('20151331', NULL, 2.8, NULL, NULL, NULL, NULL, NULL, '2019-05-14 07:31:58'),
('20151950', NULL, 3.2, NULL, NULL, NULL, NULL, NULL, '2019-05-14 07:31:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vien`
--

CREATE TABLE `vien` (
  `maVien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenVien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vien`
--

INSERT INTO `vien` (`maVien`, `tenVien`, `create_at`) VALUES
('chemeng', 'Kỹ thuật hoá học', '2019-05-12 13:58:46'),
('dpt', 'Lý luận chính trị', '2019-05-12 13:53:34'),
('icea', 'Tự động hoá', '2019-05-12 13:58:46'),
('sami', 'Toán', '2019-05-12 13:53:34'),
('see', 'Điện', '2019-05-12 13:53:13'),
('sep', 'Vật lý kỹ thuật', '2019-05-12 13:58:46'),
('set', 'Điện tử viễn thông', '2019-05-12 13:58:46'),
('sme', 'Cơ khí', '2019-05-12 13:58:46'),
('sofl', 'Ngoại ngữ', '2019-05-12 13:58:46'),
('soict', 'Công nghệ thông tin', '2019-05-12 13:51:52'),
('ste', 'Cơ khí động lực', '2019-05-12 13:58:46');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangdiem`
--
ALTER TABLE `bangdiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bangdiem_masv_foreign` (`maSV`),
  ADD KEY `bangdiem_malop_foreign` (`maLop`);

--
-- Chỉ mục cho bảng `ctdaotao`
--
ALTER TABLE `ctdaotao`
  ADD PRIMARY KEY (`maCT`),
  ADD UNIQUE KEY `ctdaotao_mact_unique` (`maCT`);

--
-- Chỉ mục cho bảng `ctdaotao_hocphan`
--
ALTER TABLE `ctdaotao_hocphan`
  ADD KEY `ctdaotao_hocphan_mact_foreign` (`maCT`),
  ADD KEY `ctdaotao_hocphan_mahocphan_foreign` (`maHocPhan`);

--
-- Chỉ mục cho bảng `dotdangky`
--
ALTER TABLE `dotdangky`
  ADD PRIMARY KEY (`maDot`),
  ADD UNIQUE KEY `dotdangky_madot_unique` (`maDot`),
  ADD KEY `dotdangky_mahocky_foreign` (`maHocKy`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`maHocKy`),
  ADD UNIQUE KEY `hocky_mahocky_unique` (`maHocKy`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`maHocPhan`),
  ADD UNIQUE KEY `hocphan_mahocphan_unique` (`maHocPhan`),
  ADD KEY `hocphan_mavien_foreign` (`maVien`);

--
-- Chỉ mục cho bảng `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD KEY `lichhoc_maphong_foreign` (`maPhong`),
  ADD KEY `lichhoc_malop_foreign` (`maLop`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`maLop`),
  ADD KEY `lophoc_mahocphan_foreign` (`maHocPhan`),
  ADD KEY `lophoc_mahocky_foreign` (`maHocKy`);

--
-- Chỉ mục cho bảng `lopsv`
--
ALTER TABLE `lopsv`
  ADD PRIMARY KEY (`maLop`),
  ADD UNIQUE KEY `lopsv_malop_unique` (`maLop`),
  ADD KEY `lopsv_mact_foreign` (`maCT`),
  ADD KEY `lopsv_mavien_foreign` (`maVien`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phonghoc`
--
ALTER TABLE `phonghoc`
  ADD PRIMARY KEY (`maPhong`),
  ADD UNIQUE KEY `phonghoc_maphong_unique` (`maPhong`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`maSV`),
  ADD UNIQUE KEY `sinhvien_masv_unique` (`maSV`),
  ADD KEY `sinhvien_username_foreign` (`username`),
  ADD KEY `sinhvien_malop_foreign` (`maLop`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `taikhoan_username_unique` (`username`);

--
-- Chỉ mục cho bảng `thongtincanhan`
--
ALTER TABLE `thongtincanhan`
  ADD PRIMARY KEY (`maSV`);

--
-- Chỉ mục cho bảng `thongtinhoctap`
--
ALTER TABLE `thongtinhoctap`
  ADD PRIMARY KEY (`maSV`);

--
-- Chỉ mục cho bảng `vien`
--
ALTER TABLE `vien`
  ADD PRIMARY KEY (`maVien`),
  ADD UNIQUE KEY `vien_mavien_unique` (`maVien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangdiem`
--
ALTER TABLE `bangdiem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `maLop` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bangdiem`
--
ALTER TABLE `bangdiem`
  ADD CONSTRAINT `bangdiem_malop_foreign` FOREIGN KEY (`maLop`) REFERENCES `lophoc` (`maLop`),
  ADD CONSTRAINT `bangdiem_masv_foreign` FOREIGN KEY (`maSV`) REFERENCES `sinhvien` (`maSV`);

--
-- Các ràng buộc cho bảng `ctdaotao_hocphan`
--
ALTER TABLE `ctdaotao_hocphan`
  ADD CONSTRAINT `ctdaotao_hocphan_mact_foreign` FOREIGN KEY (`maCT`) REFERENCES `ctdaotao` (`maCT`),
  ADD CONSTRAINT `ctdaotao_hocphan_mahocphan_foreign` FOREIGN KEY (`maHocPhan`) REFERENCES `hocphan` (`maHocPhan`);

--
-- Các ràng buộc cho bảng `dotdangky`
--
ALTER TABLE `dotdangky`
  ADD CONSTRAINT `dotdangky_mahocky_foreign` FOREIGN KEY (`maHocKy`) REFERENCES `hocky` (`maHocKy`);

--
-- Các ràng buộc cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD CONSTRAINT `hocphan_mavien_foreign` FOREIGN KEY (`maVien`) REFERENCES `vien` (`maVien`);

--
-- Các ràng buộc cho bảng `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD CONSTRAINT `lichhoc_malop_foreign` FOREIGN KEY (`maLop`) REFERENCES `lophoc` (`maLop`),
  ADD CONSTRAINT `lichhoc_maphong_foreign` FOREIGN KEY (`maPhong`) REFERENCES `phonghoc` (`maPhong`);

--
-- Các ràng buộc cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_mahocky_foreign` FOREIGN KEY (`maHocKy`) REFERENCES `hocky` (`maHocKy`),
  ADD CONSTRAINT `lophoc_mahocphan_foreign` FOREIGN KEY (`maHocPhan`) REFERENCES `hocphan` (`maHocPhan`);

--
-- Các ràng buộc cho bảng `lopsv`
--
ALTER TABLE `lopsv`
  ADD CONSTRAINT `lopsv_mact_foreign` FOREIGN KEY (`maCT`) REFERENCES `ctdaotao` (`maCT`),
  ADD CONSTRAINT `lopsv_mavien_foreign` FOREIGN KEY (`maVien`) REFERENCES `vien` (`maVien`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_malop_foreign` FOREIGN KEY (`maLop`) REFERENCES `lopsv` (`maLop`),
  ADD CONSTRAINT `sinhvien_username_foreign` FOREIGN KEY (`username`) REFERENCES `taikhoan` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
