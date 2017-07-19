-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 09:00 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_exportoffices`
--

-- --------------------------------------------------------

--
-- Table structure for table `excel_m1a`
--

CREATE TABLE IF NOT EXISTS `excel_m1a` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `baocaoso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentrungtam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngoaingu` smallint(6) NOT NULL,
  `tinhoc` smallint(6) NOT NULL,
  `ngoaingu_tinhoc` smallint(6) NOT NULL,
  `nghiepvu_chuyennganh` smallint(6) NOT NULL,
  `chungnhan_landau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chungnhan_hientai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_hoatdong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaovien_nuocngoai` int(11) NOT NULL,
  `giaovien_vietnam` int(11) NOT NULL,
  `giaovien_tong` int(11) NOT NULL,
  `solop` int(11) NOT NULL,
  `hocvien_2014` int(11) NOT NULL,
  `hocvien_2015` int(11) NOT NULL,
  `hocvien_2016` int(11) NOT NULL,
  `hocvien_2017` int(11) NOT NULL,
  `hocphi_muc1` double NOT NULL,
  `hocphi_muc2` double NOT NULL,
  `hocphi_muc3` double NOT NULL,
  `hocphi_muc4` double NOT NULL,
  `csvc_phonghoc` int(11) NOT NULL,
  `csvc_phongchucnang` int(11) NOT NULL,
  `csvc_thuvien` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excel_m1a`
--

INSERT INTO `excel_m1a` (`id`, `created_at`, `updated_at`, `baocaoso`, `bc`, `ngay`, `thang`, `nam`, `tentrungtam`, `diachi`, `email`, `dienthoai`, `ngoaingu`, `tinhoc`, `ngoaingu_tinhoc`, `nghiepvu_chuyennganh`, `chungnhan_landau`, `chungnhan_hientai`, `noidung_hoatdong`, `giaovien_nuocngoai`, `giaovien_vietnam`, `giaovien_tong`, `solop`, `hocvien_2014`, `hocvien_2015`, `hocvien_2016`, `hocvien_2017`, `hocphi_muc1`, `hocphi_muc2`, `hocphi_muc3`, `hocphi_muc4`, `csvc_phonghoc`, `csvc_phongchucnang`, `csvc_thuvien`) VALUES
(1, '2017-07-17 01:41:37', '2017-07-17 01:41:37', '1', '123', '17', '07', '2017', 'Tesla', 'Ha Noi', 'tesla@gmail.com', '0192827382', 1, 1, 0, 1, '92928', '2019281', 'Tat ca', 12, 21, 33, 12, 23, 23, 32, 32, 1000, 2000, 3000, 4000, 23, 12, 11),
(2, '2017-07-17 01:42:58', '2017-07-17 01:42:58', '1', '123', '17', '07', '2017', 'Tesla', 'Ha Noi', 'tesla@gmail.com', '0192827382', 1, 1, 0, 1, '92928', '2019281', 'Tat ca', 12, 21, 33, 12, 23, 23, 32, 32, 1000, 2000, 3000, 4000, 23, 12, 11),
(3, '2017-07-17 01:45:30', '2017-07-17 01:45:30', '1', '123', '17', '07', '2017', 'Tesla', 'Ha Noi', 'tesla@gmail.com', '0192827382', 1, 1, 0, 1, '92928', '2019281', 'Tat ca', 12, 21, 33, 12, 23, 23, 32, 32, 1000, 2000, 3000, 4000, 23, 12, 11),
(4, '2017-07-17 01:46:05', '2017-07-17 01:46:05', '1', '123', '17', '07', '2017', 'Tesla', 'Ha Noi', 'tesla@gmail.com', '0192827382', 1, 1, 0, 1, '92928', '2019281', 'Tat ca', 12, 21, 33, 12, 23, 23, 32, 32, 1000, 2000, 3000, 4000, 23, 12, 11),
(5, '2017-07-17 01:47:29', '2017-07-17 01:47:29', '1', '123', '17', '07', '2017', 'Tesla', 'Ha Noi', 'tesla@gmail.com', '0192827382', 1, 1, 0, 1, '92928', '2019281', 'Tat ca', 12, 21, 33, 12, 23, 23, 32, 32, 1000, 2000, 3000, 4000, 23, 12, 11),
(6, '2017-07-18 01:09:19', '2017-07-18 01:09:19', '12321', '12321312', '17', '07', '2017', 'TESLA1', 'Tesla', 'test@test.com', '01239123821', 1, 0, 1, 1, '1', '23', 'Tat ca', 12, 21, 33, 22, 45, 45, 45, 45, 1000, 2000, 3000, 4000, 12, 23, 11);

-- --------------------------------------------------------

--
-- Table structure for table `excel_m1b`
--

CREATE TABLE IF NOT EXISTS `excel_m1b` (
  `id` int(10) unsigned NOT NULL,
  `tentrungtam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baocaoso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trinhdo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quoctich` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hochieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaypheplaodong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thamnien` int(11) NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excel_m1b`
--

INSERT INTO `excel_m1b` (`id`, `tentrungtam`, `baocaoso`, `bc`, `ngay`, `thang`, `nam`, `hoten`, `gioitinh`, `chucvu`, `trinhdo`, `quoctich`, `hochieu`, `giaypheplaodong`, `noio`, `thamnien`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'TESLA', '12', '12', 17, 7, 2017, 'Nguyen Van A', 'nam', 'quanly', 'trendaihoc', 'Viet Nam', 'HC1298321983', 'LD123981273', 'Ha Noi', 12, 'Ghi chu 1', '2017-07-18 02:41:46', '2017-07-18 02:41:46'),
(2, 'TESLA', '12', '12', 17, 7, 2017, 'Nguyen Van A', 'nam', 'gv_huuco', 'trendaihoc', 'Viet Nam', 'HC1298321983', 'LD123981273', 'Ha Noi', 12, 'Ghi chu 1', '2017-07-18 02:41:56', '2017-07-18 02:41:56'),
(3, 'TESLA', '12', '12', 17, 7, 2017, 'Nguyen Van A', 'nam', 'gv_thinhgiang', 'daihoc', 'Viet Nam', 'HC1298321983', 'LD123981273', 'Ha Noi', 12, 'Ghi chu 1', '2017-07-18 02:41:58', '2017-07-18 02:41:58'),
(4, 'TESLA', '12', '12', 17, 7, 2017, 'Nguyen Van A', 'nam', 'tinhnguyen', 'caodang', 'Viet Nam', 'HC1298321983', 'LD123981273', 'Ha Noi', 12, 'Ghi chu 1', '2017-07-18 02:41:59', '2017-07-18 02:41:59'),
(5, 'TESLA', '12', '12', 17, 7, 2017, 'Nguyen Van A', 'nam', 'quanly', 'chuyennganh', 'Viet Nam', 'HC1298321983', 'LD123981273', 'Ha Noi', 12, 'Ghi chu 1', '2017-07-18 02:41:59', '2017-07-18 02:41:59'),
(6, 'TESLA', '12', '12', 17, 7, 2017, 'Nguyen Van A', 'nam', 'tinhnguyen', 'nghiepvu', 'Viet Nam', 'HC1298321983', 'LD123981273', 'Ha Noi', 12, 'Ghi chu 1', '2017-07-18 02:42:00', '2017-07-18 02:42:00'),
(7, 'TESLA', '12', '12', 17, 7, 2017, 'Nguyen Van A', 'nam', 'gv_huuco', 'ngoaingu', 'Viet Nam', 'HC1298321983', 'LD123981273', 'Ha Noi', 12, 'Ghi chu 1', '2017-07-18 02:42:01', '2017-07-18 02:42:01'),
(8, 'TESLA', '12', '12', 17, 7, 2017, 'Nguyen Thi A', 'nu', 'quanly', 'ngoaingu', 'Viet Nam', 'HC1298321983', 'LD123981273', 'Ha Noi', 12, 'Ghi chu 1', '2017-07-18 02:42:01', '2017-07-18 02:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `excel_m1c`
--

CREATE TABLE IF NOT EXISTS `excel_m1c` (
  `id` int(10) unsigned NOT NULL,
  `tentrungtam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baocaoso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quoctich` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trinhdo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sohochieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hansudung_hochieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sovisa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hansudung_visa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_giayphep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoihan_giayphep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_giayphep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_cutru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoihan_laodong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tructiep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendonvi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sogiogiangday` int(11) NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excel_m1c`
--

INSERT INTO `excel_m1c` (`id`, `tentrungtam`, `baocaoso`, `bc`, `ngay`, `thang`, `nam`, `hoten`, `quoctich`, `gioitinh`, `trinhdo`, `sohochieu`, `hansudung_hochieu`, `sovisa`, `hansudung_visa`, `so_giayphep`, `thoihan_giayphep`, `diachi_giayphep`, `diachi_cutru`, `thoihan_laodong`, `tructiep`, `tendonvi`, `sogiogiangday`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'TESLA', '1', '12', 17, 7, 2017, 'Nguyen Van A', 'Viet Nam', 'nam', 'chuyenmon', 'HC123123123VN', '25/05', 'VS123213123VN', '29', '1', '20', 'Ha Noi', 'Hai Duong', '25', '????', 'TESLA', 12, 'Ghi chu', '2017-07-18 04:07:16', '2017-07-18 04:07:16'),
(2, 'TESLA', '1', '12', 17, 7, 2017, 'Nguyen Thi A', 'Viet Nam', 'nu', 'ngoaingu', 'HC123123123VN', '25/05', 'VS123213123VN', '29', '1', '20', 'Ha Noi', 'Hai Duong', '25', '????', 'TESLA', 12, 'Ghi chu', '2017-07-18 04:07:18', '2017-07-18 04:07:18'),
(3, 'TESLA', '1', '12', 17, 7, 2017, 'Nguyen Van A', 'Viet Nam', 'nam', 'chuyenmon', 'HC123123123VN', '25/05', 'VS123213123VN', '29', '1', '20', 'Ha Noi', 'Hai Duong', '25', '????', 'TESLA', 12, 'Ghi chu', '2017-07-18 04:07:20', '2017-07-18 04:07:20'),
(4, 'TESLA', '1', '12', 17, 7, 2017, 'Nguyen Van A', 'Viet Nam', 'nam', 'chuyenmon', 'HC123123123VN', '25/05', 'VS123213123VN', '29', '1', '20', 'Ha Noi', 'Hai Duong', '25', '????', 'TESLA', 12, 'Ghi chu', '2017-07-18 04:07:21', '2017-07-18 04:07:21'),
(5, 'TESLA', '1', '12', 17, 7, 2017, 'Nguyen Van A', 'Viet Nam', 'nam', 'chuyenmon', 'HC123123123VN', '25/05', 'VS123213123VN', '29', '1', '20', 'Ha Noi', 'Hai Duong', '25', '????', 'TESLA', 12, 'Ghi chu', '2017-07-18 04:07:22', '2017-07-18 04:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `excel_m1d`
--

CREATE TABLE IF NOT EXISTS `excel_m1d` (
  `id` int(10) unsigned NOT NULL,
  `tentrungtam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baocaoso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `tentruong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quanhuyen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solop` int(11) NOT NULL,
  `sohocsinh` int(11) NOT NULL,
  `sotiethoc` int(11) NOT NULL,
  `tyle_gvnn` int(11) NOT NULL,
  `cocau_gvnn` int(11) NOT NULL,
  `ten_gvnn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excel_m1d`
--

INSERT INTO `excel_m1d` (`id`, `tentrungtam`, `baocaoso`, `bc`, `ngay`, `thang`, `nam`, `tentruong`, `quanhuyen`, `solop`, `sohocsinh`, `sotiethoc`, `tyle_gvnn`, `cocau_gvnn`, `ten_gvnn`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'TESLA', '1', '1', 17, 7, 2017, 'Khoa hoc Tu nhien', 'Thanh Xuan', 12, 120, 60, 50, 50, 'Nobody', 'Ghi chu 1', '2017-07-18 19:54:17', '2017-07-18 19:54:17'),
(2, 'TESLA', '1', '1', 17, 7, 2017, 'Khoa hoc Tu nhien', 'Thanh Xuan', 12, 120, 60, 50, 50, 'Nobody', 'Ghi chu 1', '2017-07-18 19:54:20', '2017-07-18 19:54:20'),
(3, 'TESLA', '1', '1', 17, 7, 2017, 'Khoa hoc Tu nhien', 'Thanh Xuan', 12, 120, 60, 50, 50, 'Nobody', 'Ghi chu 1', '2017-07-18 19:54:21', '2017-07-18 19:54:21'),
(4, 'TESLA', '1', '1', 17, 7, 2017, 'Khoa hoc Tu nhien', 'Thanh Xuan', 12, 120, 60, 50, 50, 'Nobody', 'Ghi chu 1', '2017-07-18 19:54:22', '2017-07-18 19:54:22'),
(5, 'TESLA', '1', '1', 17, 7, 2017, 'Khoa hoc Tu nhien', 'Thanh Xuan', 12, 120, 60, 50, 50, 'Nobody', 'Ghi chu 1', '2017-07-18 19:54:24', '2017-07-18 19:54:24'),
(6, 'TESLA', '1', '1', 17, 7, 2017, 'Khoa hoc Tu nhien', 'Thanh Xuan', 12, 120, 60, 50, 50, 'Nobody', 'Ghi chu 1', '2017-07-18 19:54:25', '2017-07-18 19:54:25'),
(7, 'TESLA', '1', '1', 17, 7, 2017, 'Khoa hoc Tu nhien', 'Thanh Xuan', 12, 120, 60, 50, 50, 'Nobody', 'Ghi chu 1', '2017-07-18 19:54:26', '2017-07-18 19:54:26'),
(8, 'TESLA', '1', '1', 17, 7, 2017, 'Khoa hoc Tu nhien', 'Thanh Xuan', 12, 120, 60, 50, 50, 'Nobody', 'Ghi chu 1', '2017-07-18 19:54:27', '2017-07-18 19:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2017_07_17_031957_add_word_m1_table', 1),
(32, '2017_07_17_035816_create_excel_m1a_table', 1),
(33, '2017_07_17_035857_create_excel_word_m1_table', 1),
(34, '2017_07_17_171834_add_excel_m1a_table', 1),
(35, '2017_07_17_100800_create_excel_m1b_table', 2),
(36, '2017_07_18_105328_create_excel_m1c_table', 3),
(37, '2017_07_19_024806_create_excel_m1d_table', 4),
(38, '2017_07_19_043119_create_word_m1_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `word_m1`
--

CREATE TABLE IF NOT EXISTS `word_m1` (
  `id` int(10) unsigned NOT NULL,
  `trungtam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congvanso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congvan_ngay` int(11) NOT NULL,
  `congvan_thang` int(11) NOT NULL,
  `congvan_nam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trungtam2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chungnhan_so` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chungnhan_ngaycap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chungnhan_noicap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trusochinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trusochinh_dienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trusochinh_fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trusochinh_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trusochinh_website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaihinhdoanhnghiep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masothue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `von_dieule` bigint(20) NOT NULL,
  `von_trungtam` bigint(20) NOT NULL,
  `daidien_hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daidien_quoctich` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daidien_dtdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daidien_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daidien_noio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentrungtam_vn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentrungtam_e` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhlap_so` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhlap_ngaycap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhlap_noicap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoatdong_so` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoatdong_ngaycap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoatdong_noicap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giamdoc_hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giamdoc_quoctich` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giamdoc_dienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giamdoc_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giamdoc_noio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cosodaotao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vuongmac` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kiennghi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `word_m1`
--

INSERT INTO `word_m1` (`id`, `trungtam`, `so`, `bc`, `ngay`, `congvanso`, `congvan_ngay`, `congvan_thang`, `congvan_nam`, `trungtam2`, `chungnhan_so`, `chungnhan_ngaycap`, `chungnhan_noicap`, `trusochinh`, `trusochinh_dienthoai`, `trusochinh_fax`, `trusochinh_email`, `trusochinh_website`, `loaihinhdoanhnghiep`, `thoihan`, `masothue`, `von_dieule`, `von_trungtam`, `daidien_hoten`, `daidien_quoctich`, `daidien_dtdd`, `daidien_email`, `daidien_noio`, `tentrungtam_vn`, `tentrungtam_e`, `thanhlap_so`, `thanhlap_ngaycap`, `thanhlap_noicap`, `hoatdong_so`, `hoatdong_ngaycap`, `hoatdong_noicap`, `giamdoc_hoten`, `giamdoc_quoctich`, `giamdoc_dienthoai`, `giamdoc_email`, `giamdoc_noio`, `cosodaotao`, `vuongmac`, `kiennghi`, `created_at`, `updated_at`) VALUES
(1, 'Trung tâm 1', '12', '12', '19/07/2017', '12', 12, 12, '2012', 'Trung tâm 1', '12', '19/07/2017', 'Thanh Xuân - Hà Nội', 'Thanh Xuân - Hà Nội', '0912347127', '912932183', 'trungtam@gmail.com', 'trungtam1.com.vn', 'Tự do', '19/08/2017', 'THUE1238217391273VN', 10000000, 20000000, 'Nguyễn Văn A', 'Việt Nam', '09282831712', 'nguyenvana@gmail.com', 'Hà Nội', 'Trung Tâm', 'Center', '12', '19/07/2017', 'Hà Nội', '12', '20/07/2017', 'Hà Nội', 'Nguyễn Văn B', 'Việt Nam', '0928218172', 'nguyenvanb@gmail.com', 'Hà Nội - Việt Nam', 'Thanh Xuân - Hà Nội', 'Vướng mắc 1', 'Kiến Nghị 1', '2017-07-18 21:43:36', '2017-07-18 21:43:36'),
(2, 'Trung tâm 1', '12', '12', '19/07/2017', '12', 12, 12, '2012', 'Trung tâm 1', '12', '19/07/2017', 'Thanh Xuân - Hà Nội', 'Thanh Xuân - Hà Nội', '0912347127', '912932183', 'trungtam@gmail.com', 'trungtam1.com.vn', 'Tự do', '19/08/2017', 'THUE1238217391273VN', 100000000000000000, 20000000000000000, 'Nguyễn Văn A', 'Việt Nam', '09282831712', 'nguyenvana@gmail.com', 'Hà Nội', 'Trung Tâm', 'Center', '12', '19/07/2017', 'Hà Nội', '12', '20/07/2017', 'Hà Nội', 'Nguyễn Văn B', 'Việt Nam', '0928218172', 'nguyenvanb@gmail.com', 'Hà Nội - Việt Nam', 'Thanh Xuân - Hà Nội', 'Vướng mắc 1', 'Kiến Nghị 1', '2017-07-18 21:45:22', '2017-07-18 21:45:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `excel_m1a`
--
ALTER TABLE `excel_m1a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_m1b`
--
ALTER TABLE `excel_m1b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_m1c`
--
ALTER TABLE `excel_m1c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_m1d`
--
ALTER TABLE `excel_m1d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `word_m1`
--
ALTER TABLE `word_m1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `excel_m1a`
--
ALTER TABLE `excel_m1a`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `excel_m1b`
--
ALTER TABLE `excel_m1b`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `excel_m1c`
--
ALTER TABLE `excel_m1c`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `excel_m1d`
--
ALTER TABLE `excel_m1d`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `word_m1`
--
ALTER TABLE `word_m1`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
