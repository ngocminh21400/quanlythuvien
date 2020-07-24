-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2020 lúc 05:11 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlythuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietmuonsach`
--

CREATE TABLE `chitietmuonsach` (
  `id_MuonSach` int(10) UNSIGNED NOT NULL,
  `id_Sach` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietmuonsach`
--

INSERT INTO `chitietmuonsach` (`id_MuonSach`, `id_Sach`, `created_at`, `updated_at`) VALUES
(1001, 1001, '2020-06-11 09:45:48', '2020-06-11 09:45:48'),
(1001, 1007, '2020-06-11 09:45:48', '2020-06-11 09:45:48'),
(1002, 1023, '2020-06-11 09:46:23', '2020-06-11 09:46:23'),
(1002, 1028, '2020-06-11 09:46:23', '2020-06-11 09:46:23'),
(1003, 1001, '2020-06-12 02:07:32', '2020-06-12 02:07:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiettrasach`
--

CREATE TABLE `chitiettrasach` (
  `id_TraSach` int(10) UNSIGNED NOT NULL,
  `id_Sach` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiettrasach`
--

INSERT INTO `chitiettrasach` (`id_TraSach`, `id_Sach`, `created_at`, `updated_at`) VALUES
(1002, 1001, '2020-06-11 10:32:38', '2020-06-11 10:32:38'),
(1002, 1007, '2020-06-11 10:32:38', '2020-06-11 10:32:38'),
(1003, 1023, '2020-06-12 02:03:23', '2020-06-12 02:03:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muonsach`
--

CREATE TABLE `muonsach` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `NgayMuon` date NOT NULL,
  `NgayTra` date NOT NULL,
  `TongTien` int(10) NOT NULL,
  `TrangThai` int(1) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `muonsach`
--

INSERT INTO `muonsach` (`id`, `id_user`, `NgayMuon`, `NgayTra`, `TongTien`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1001, 22, '2020-06-11', '2020-07-11', 10000, 1, '2020-06-11 09:45:48', '2020-06-11 10:32:39'),
(1002, 23, '2020-06-11', '2020-07-11', 10000, 1, '2020-06-11 09:46:23', '2020-06-12 02:03:23'),
(1003, 22, '2020-06-11', '2020-07-11', 5000, 0, '2020-06-12 02:07:32', '2020-06-12 02:07:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quydinh`
--

CREATE TABLE `quydinh` (
  `id` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quydinh`
--

INSERT INTO `quydinh` (`id`, `NoiDung`, `created_at`, `updated_at`) VALUES
(1001, 'Mượn sách 5k/cuốn', '2020-06-11 04:10:43', '2020-06-11 04:10:43'),
(1002, 'Trễ 1 ngày, tính thêm 1k/cuốn', '2020-06-11 04:11:07', '2020-06-11 04:11:07'),
(1003, 'Nếu làm mất hoặc hư hỏng thì đền bù 100% giá trị sách', '2020-06-11 04:11:36', '2020-06-11 04:11:36'),
(1004, 'Chỉ được mượn mỗi cuốn sách với số lượng là 1', '2020-06-11 04:12:01', '2020-06-11 04:12:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenSach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_TheLoai` int(10) UNSIGNED NOT NULL,
  `NamXuatBan` int(4) NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NhaXuatBan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TriGia` int(7) NOT NULL,
  `SoLuong` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `TenSach`, `TacGia`, `id_TheLoai`, `NamXuatBan`, `Hinh`, `NhaXuatBan`, `TriGia`, `SoLuong`, `created_at`, `updated_at`) VALUES
(1001, 'Lạc Giữa Niềm Đau', 'Nguyễn Ngọc Thạch', 29, 2018, 'Zpl7_lac_giua_mien_dau.jpg', 'NXB Hội Nhà Văn', 152000, 3, '2020-06-11 03:36:05', '2020-06-12 02:07:32'),
(1002, '12 Cách Yêu', 'Hamlet Trương', 28, 2019, 'vtuu_12_cach_yeu.jpg', 'NXB Tổng Hợp TPHCM', 65000, 5, '2020-06-11 03:37:19', '2020-06-11 03:37:19'),
(1003, 'Colorful', 'Mori Eto', 28, 2020, 'fAwP_colorfull.jpg', 'NXB Hội Nhà Văn', 78000, 4, '2020-06-11 03:38:08', '2020-06-11 03:38:08'),
(1004, 'Cổ Tích Không Phép Màu', 'Đào', 28, 2019, 'ASSW_co_tich_khong_phep_mau.jpg', 'NXB Thanh Niên', 126000, 1, '2020-06-11 03:38:46', '2020-06-11 03:38:46'),
(1005, 'Dám Bị Ghét', 'Koga Fumitake', 28, 2018, 'q0cT_dam_bi_ghet.jpg', 'NXB Dân Trí', 65000, 9, '2020-06-11 03:39:43', '2020-06-11 03:39:43'),
(1006, 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải', 'Cao Minh', 29, 2018, 'TxnB_thien_tai_ben_trai_ke_dien_ben_phai.jpg', 'NXB Thế Giới', 124000, 7, '2020-06-11 03:40:27', '2020-06-11 03:40:27'),
(1007, 'Mắt Biếc', 'Nguyễn Nhật Ánh', 29, 2019, 'ZaFf_mat_biec.jpg', 'NXB Trẻ', 156000, 4, '2020-06-11 03:41:11', '2020-06-11 10:32:38'),
(1008, '21 Bài Học Cho Thế Kỉ 21', 'Yuval Noah Harari', 29, 2019, 'gDzr_21_bai_hoc_cho_the_ki_21.jpg', 'NXB Thế Giới', 134000, 3, '2020-06-11 03:41:36', '2020-06-11 03:42:34'),
(1009, 'Phải Lòng Với Cô Đơn', 'Kulxsc', 29, 2019, 'QoiC_phai_long_voi_co_don.jpg', 'NXB Phụ Nữ', 99000, 1, '2020-06-11 03:42:17', '2020-06-11 03:42:17'),
(1010, 'Làm Bạn Với Bầu Trời', 'Nguyễn Nhật Ánh', 29, 2020, '9Ix5_lam_ban_voi_bau_troi.jpg', 'NXB Trẻ', 166000, 2, '2020-06-11 03:43:31', '2020-06-11 03:43:31'),
(1011, 'Cầu Thang Gào Thét', 'Jonathan Stroud', 30, 2020, 'j06A_cau_thang_gao_thet.jpg', 'NXB Văn Học', 210000, 4, '2020-06-11 03:44:07', '2020-06-11 03:44:07'),
(1012, '4MK', 'J.D. Barker', 30, 2019, 'wmSR_4mk.jpg', 'NXB Văn Hóa', 323000, 8, '2020-06-11 03:44:34', '2020-06-11 03:44:53'),
(1013, 'Zoo', 'Osuichi', 30, 2018, '8aqM_zoo.jpg', 'NXB Hồng Đức', 86000, 6, '2020-06-11 03:45:24', '2020-06-11 03:45:24'),
(1014, 'Thành phố hồn rỗng', 'Ransom Riggs', 30, 2019, 'muyu_thanh_pho_hon_rong.jpg', 'NXB Văn Học', 79000, 10, '2020-06-11 03:46:01', '2020-06-11 03:46:01'),
(1015, 'Đề Thi Đẫm Máu', 'Lôi Mễ', 30, 2018, 'G653_de_thi_dam_mau.jpg', 'NXB Hồng Đức', 150000, 15, '2020-06-11 03:46:40', '2020-06-11 03:46:40'),
(1016, 'Công Phá Lý Thuyết Sinh', 'Phạm Thị Thanh Thảo', 31, 2020, 'RGXd_cong_pha_ly_thuyet_sinh.jpg', 'NXB DĐHQG Hà Nội', 144000, 5, '2020-06-11 03:47:26', '2020-06-11 03:47:26'),
(1017, 'Công Phá Lý Thuyết Hóa', 'Trần Phương Duy', 31, 2020, 'JHmd_cong_pha_ly_thuyet_hoa.jpg', 'NXB DĐHQG Hà Nội', 211000, 9, '2020-06-11 03:47:48', '2020-06-11 03:47:48'),
(1018, 'Công Phá Toán 2', 'Nhiều Tác Giả', 31, 2019, '9P90_cong_pha_toan_2.jpg', 'NXB DĐHQG Hà Nội', 163000, 7, '2020-06-11 03:48:31', '2020-06-11 03:48:31'),
(1019, 'Công Phá Vật Lý 2', 'Tăng Tuân Hải', 31, 2017, 'cgQp_cong_pha_vat_ly_2.jpg', 'NXB DĐHQG Hà Nội', 59000, 8, '2020-06-11 03:48:59', '2020-06-11 03:48:59'),
(1020, 'Công Phá Tiếng Anh 3', 'Lương Văn Thủy', 31, 2018, 'hcjW_cong_pha_tieng_anh_3.jpg', 'NXB DĐHQG Hà Nội', 89000, 6, '2020-06-11 03:49:31', '2020-06-11 03:49:31'),
(1021, 'Từ Điển Hán Việt', 'Trương Văn Giới', 32, 2020, '1OtB_tu_dien_han_viet.jpg', 'NXB Khoa Học Hà Nội', 70000, 3, '2020-06-11 03:50:23', '2020-06-11 03:50:23'),
(1022, 'Từ Điển Nhật - Việt', 'Nguyễn Văn Khang', 32, 2019, 'lodb_tu_dien_nhat_viet.jpg', 'NXB ĐHQG Hà Nội', 88000, 4, '2020-06-11 03:50:51', '2020-06-11 03:50:51'),
(1023, 'Từ Điển Tiếng Anh Thương Mại', 'Nguyễn Quốc Hùng M.A', 32, 2018, 'egyA_tu_dien_tieng_anh_thuong_mai.jpg', 'NXB Hồng Đức', 92000, 3, '2020-06-11 03:51:19', '2020-06-12 02:03:23'),
(1024, 'Từ Điển Tiếng Việt', 'Nguyễn Kim Thán', 32, 2017, 'obua_tu_dien_tieng_viet.jpg', 'NXB Văn Hóa Sài Gòn', 109000, 10, '2020-06-11 03:51:51', '2020-06-11 03:51:51'),
(1025, 'Từ Điển Nga - Việt', 'PGS. Tiến sĩ Nguyễn Trọng Báu', 32, 2017, 'jTVV_tu-dien-nga-viet.jpg', 'NXB Thế Giới', 49000, 8, '2020-06-11 03:52:15', '2020-06-11 03:52:15'),
(1026, 'Biến Nhược Điểm Thành Ưu Điểm', 'Vương Chi Cương', 33, 2019, 'UPBw_bien_nhuoc_diem_thanh_uu_diem.jpg', 'NXB Lao Động', 64000, 11, '2020-06-11 03:54:09', '2020-06-11 03:54:09'),
(1027, 'Những Kỹ Năng Sống Để Hạnh Phúc', 'Steward Blackbum', 33, 2019, 'vj8g_nhung_ky_nang_song_de_hanh_phuc.jpg', 'NXB Thanh Hóa', 62000, 12, '2020-06-11 03:54:41', '2020-06-11 03:54:41'),
(1028, 'Cân Bằng Cảm Xúc, Cả Lúc Bão Giông', 'Richard Nichollas', 33, 2017, 'zUgC_can_bang_cam_xuc.jpg', 'NXB Thế Giới', 127000, 6, '2020-06-11 03:55:21', '2020-06-11 09:46:23'),
(1029, 'Đắc Nhân Tâm', 'Dale Camegie', 33, 2018, 'DiW8_dac_nhan_tam.jpg', 'NXB Tỏng Hợp TPHCM', 67000, 5, '2020-06-11 03:55:54', '2020-06-11 03:55:54'),
(1030, 'Bạn Đắt Giá Bao Nhiêu?', 'Vãn Tình', 33, 2020, 'AQc0_ban_dat_gia_bao_nhieu.jpg', 'NXB Thế Gíới', 83000, 12, '2020-06-11 03:56:19', '2020-06-11 03:56:19'),
(1031, 'Đại Việt Sử Ký Toàn Thư', 'Nhiều Tác Gỉa', 34, 2018, 'O2FJ_dai_viet_su_ki_toan_thu.jpg', 'NXB Thời Đại', 233000, 5, '2020-06-11 03:56:48', '2020-06-11 03:56:48'),
(1032, 'Lịch Sử Do Thái', 'Paul Johnson', 34, 2018, 'UN8G_lich_su_do_thai.jpg', 'NXB Dân Trí', 100000, 4, '2020-06-11 03:57:21', '2020-06-11 03:57:21'),
(1033, 'Trên Con Đường Tơ Lụa Ở Nam Á', 'Nguyễn Chí Linh', 34, 2020, 'odvv_tren_con_duong_tu_lua_nam_a.jpg', 'NXB Thế Giới', 58000, 9, '2020-06-11 03:57:57', '2020-06-11 03:57:57'),
(1034, 'Một Tháng Ở Nam Kỳ', 'Phạm Quỳnh', 34, 2019, 'jTWG_mot_thang_o_nam_ky.jpg', 'NXB Hội Nhà Văn', 99000, 7, '2020-06-11 03:58:35', '2020-06-11 03:58:35'),
(1035, 'Hàn Phi Tử', 'Hàn Phi', 34, 2019, 'ojDm_han_tu_phi.jpg', 'NXB Đà Nẵng', 177000, 5, '2020-06-11 03:59:03', '2020-06-11 03:59:03'),
(1036, 'Ngữ Pháp Tiếng Hàn Bỏ Túi', 'The Changmi', 35, 2017, 'bDSL_ngu_phap_tieng_han_bo_tui.jpg', 'NXB Hồng Đức', 185000, 6, '2020-06-11 03:59:40', '2020-06-11 03:59:40'),
(1037, 'Ngữ Pháp Tiếng Hàn Hiện Đại', 'Nguyên Thảo', 35, 2020, 'o1jk_ngu_phap_tieng_han_hien_dai.jpg', 'NXB Dân Trí', 256000, 3, '2020-06-11 04:00:10', '2020-06-11 04:00:10'),
(1038, 'Ngữ Pháp Tiếng Trung Thông Dụng', 'Mã Chân', 35, 2018, 'kfTB_ngu-phap-tieng-trung-thong-dung.jpg', 'NXB ĐHQG Hà Nội', 126000, 5, '2020-06-11 04:00:49', '2020-06-11 04:00:49'),
(1039, 'Tiếng Việt Cho Người Nước Ngoài', 'Lê Thị Hiệp', 35, 2017, 'FkHd_tieng_viet_danh_cho_nguoi_nuoc_ngoai.jpg', 'NXB Thế Giới', 69000, 9, '2020-06-11 04:01:26', '2020-06-11 04:01:26'),
(1040, 'Listen English Faster', 'The Windy', 35, 2017, 'N20i_listen_english_faster.jpg', 'NXB Hồng Đức', 245000, 3, '2020-06-11 04:02:11', '2020-06-11 04:02:11'),
(1041, 'Stem – Công Nghệ Siêu Thông Minh', 'Catherin Bruzzone', 36, 2019, 'fAiQ_stem_cong_nghe_sieu_thong_minh.jpg', 'NXB Dân Trí', 165000, 4, '2020-06-11 04:02:41', '2020-06-11 04:02:41'),
(1042, 'Thông Tin Đa Chiều', 'Trần Văn Tuấn', 36, 2019, 'OxxC_thong_tin_da_chieu.jpg', 'NXB Dân Trí', 122000, 5, '2020-06-11 04:03:07', '2020-06-11 04:03:07'),
(1043, 'An Toàn Thông Tin', 'TS. Lê Văn Hùng', 36, 2019, 'p6r1_an_toan_thong_tin.jpg', 'NXB Thông Tin Và Truyền Thông', 99000, 8, '2020-06-11 04:03:29', '2020-06-11 04:03:29'),
(1044, 'Effective Java', 'Jooshua Bloch', 36, 2020, '8wVi_efective_java.jpg', 'NXB Addison-Wesley', 45000, 15, '2020-06-11 04:03:53', '2020-06-11 04:03:53'),
(1045, 'Introducing Python', 'Bill Lubanovic', 36, 2017, 'E4VG_introducing_python.jpg', 'NXB Thông Tin Và Truyền Thông', 199000, 6, '2020-06-11 04:04:37', '2020-06-11 04:04:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `Ten`, `Hinh`, `created_at`, `updated_at`) VALUES
(28, 'Truyện ngắn', 'TIwd_truyen_ngan.jpg', '2020-06-11 03:31:22', '2020-06-11 03:31:22'),
(29, 'Tản văn', 'IkA0_tan_van.jpg', '2020-06-11 03:31:37', '2020-06-11 03:31:37'),
(30, 'Kinh dị', 'hGxb_kinh_di.jpg', '2020-06-11 03:31:48', '2020-06-11 03:31:48'),
(31, 'Tham khảo', 'yYkP_tham_khao.jpg', '2020-06-11 03:32:17', '2020-06-11 03:32:17'),
(32, 'Từ điển', 'WHDh_tu_dien.jpg', '2020-06-11 03:32:36', '2020-06-11 03:32:36'),
(33, 'Kỹ năng sống', 'sf01_ky_nang_song.jpg', '2020-06-11 03:32:53', '2020-06-11 03:32:53'),
(34, 'Lịch sử', 'sbzr_lich_su.jpg', '2020-06-11 03:33:05', '2020-06-11 03:33:05'),
(35, 'Ngoại ngữ', 'An39_ngoai_ngu.jpg', '2020-06-11 03:33:18', '2020-06-11 03:33:18'),
(36, 'Công nghệ thông tin', '22mg_cong_nghe_thong_tin.jpg', '2020-06-11 03:33:32', '2020-06-11 03:33:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trasach`
--

CREATE TABLE `trasach` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `NgayTra` date NOT NULL,
  `SoNgayTre` int(10) NOT NULL,
  `TienTre` int(10) NOT NULL,
  `TienBoiThuong` int(10) NOT NULL,
  `TienThueSach` int(10) NOT NULL,
  `TongTien` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trasach`
--

INSERT INTO `trasach` (`id`, `id_user`, `NgayTra`, `SoNgayTre`, `TienTre`, `TienBoiThuong`, `TienThueSach`, `TongTien`, `created_at`, `updated_at`) VALUES
(1002, 22, '2020-06-11', 0, 0, 0, 10000, 10000, '2020-06-11 10:32:38', '2020-06-11 10:32:38'),
(1003, 23, '2020-06-12', 0, 0, 127000, 10000, 137000, '2020-06-12 02:03:23', '2020-06-12 02:03:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quyen` int(1) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDT` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `HoTen`, `Quyen`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SoDT`, `created_at`, `updated_at`) VALUES
(11, 'laravel@gmail.com', '$2y$12$dv7qmjBlyUzOt3h1lfYso.pwknWdtTJn2d9qrNxuL3tgrwOuD36QG', 'laravel framework', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '17520334@gmail.com', '$2y$10$/jQ9W8IOF77JHqt1jh05.ulI9e.rm3IFh1VrJknAERLwpbTzpOGt.', 'Nguyễn Quang Đạt', 1, '1999-01-01', '1', 'ktx khu a', '0123456789', '2020-06-11 05:25:14', '2020-06-11 05:45:20'),
(13, '17420448@gmail.com', '$2y$10$xR.2FFKdciD0m4yE4OmWOe4J0jeTBB20pjA79/pEWVA43LLd/mj1S', 'Nguyễn Mạnh Hào', 1, '1999-01-01', '1', 'ktx khu a', '0123456789', '2020-06-11 05:26:16', '2020-06-11 05:26:16'),
(14, '17520687@gmail.com', '$2y$10$1U2i25..QXKfH/rO.0Ok.upcEyUzgIPuMJOlccJzMLZVlkrkSY5WO', 'Nguyễn Ngọc Anh Linh', 1, '1999-01-01', '2', 'ktx khu a', '0123456789', '2020-06-11 05:31:35', '2020-06-11 05:31:35'),
(15, '17520765@gmail.com', '$2y$10$.IRG/GiZ6bEyhdBtm8BanO3KGAjvRgoHBMgEdVv0f7qB1u3UNMfle', 'Trần Thị Ngọc Minh', 1, '1999-01-01', '2', 'KTX khu b', '0123456789', '2020-06-11 05:32:08', '2020-06-11 05:32:08'),
(16, '17520914@gmail.com', '$2y$10$Gg/SRofR3TRuy03DPgSZ1uE1RTcFDe1rXZ7qUygLJT.NZimAuV2va', 'Nguyễn Lê Thanh Phụng', 1, '1999-01-01', '2', 'KTX khu b', '0123456789', '2020-06-11 05:33:55', '2020-06-11 05:33:55'),
(17, '17520357@gmail.com', '$2y$10$daStVIYXby0yJv3Kft30WOdTOCI.1igGiAn3F9Wc1.FNWOjKeyyP.', 'Lê Huỳnh Đức', 1, '1999-01-01', '1', 'ktx khu a', '0123456789', '2020-06-11 05:37:43', '2020-06-11 05:37:43'),
(18, '17520979@gmail.com', '$2y$10$fwbKQJ9nfdnkhENKDa20W.Qkew6O4qdtxo4RgiEN4xymuPfwrbbdq', 'Trương Hữu Sang', 1, '1999-01-01', '1', 'KTX khu b', '0123456789', '2020-06-11 05:38:17', '2020-06-11 05:38:17'),
(19, '17520704@gmail.com', '$2y$10$6E4O9UmY0T8wwcfWO7dQJOsP5QtK4YUK1mk7Gj7TKkrpFPCNeHJ46', 'Trần Nguyên Lợi', 1, '1999-01-01', '1', 'ktx khu a', '0123456789', '2020-06-11 05:44:29', '2020-06-11 05:44:29'),
(20, '17520785@gmail.com', '$2y$10$.kkZNTh/HxmmARrWk6Ola.Vql0fnnLkc0yTX00ChM3k9tVXmQ7l86', 'Nguyễn Hữu Nghị', 1, '1999-01-01', '1', 'KTX khu b', '0123456789', '2020-06-11 05:49:47', '2020-06-11 05:49:47'),
(21, '17520673@gmail.com', '$2y$10$vg9iBjBCALzIeSQh.ifhE.CJati0qp16EqLkeMDIeiC.3V0QfcIVC', 'Lê Thị Ngọc Lan', 1, '1999-01-01', '2', 'Ktx khu a', '0123456789', '2020-06-11 06:09:47', '2020-06-11 06:09:47'),
(22, 'hongnhu@gmail.com', '$2y$10$C.iD.1agfMwlArFyZhCD3.TzoFiTvnC6MglvoqP3bjimCRfKQMibi', 'Nguyễn Thị Hồng Như', 0, '2000-01-01', '2', 'ktx khu A- ĐHQGTPHCM', '0123456789', '2020-06-11 06:14:46', '2020-06-11 06:14:46'),
(23, 'thuhuong1318@gmail.com', '$2y$10$djSS5lLbKptK2PzNrl0RBOh/LKpcFQOfsmOFnMUNf9B3T.JtYOO0q', 'Trần Thị Thu Hương', 0, '2000-01-01', '2', 'ktx khu B- ĐHQGTPHCM', '0123456789', '2020-06-11 06:15:21', '2020-06-11 06:15:21'),
(24, 'trathanh2485@gmail.com', '$2y$10$qh5c9WHBAwI3rnz6lCGcAO88zyWCUpuO9C1hTQu0nCKtSTc6PF3TC', 'Phan Thanh Trà', 0, '2000-01-01', '1', 'ktx khu A- ĐHQGTPHCM', '0123456789', '2020-06-11 06:15:57', '2020-06-11 06:15:57'),
(25, 'huongtra123@gmail.com', '$2y$10$DTS8fD.rifyR9CGRIsfFuudqgH6Qc4oFaTJmM0ztrswNJUAs4Y9bi', 'Nguyễn Thị Hương Trà', 0, '2000-01-01', '2', 'ktx khu A- ĐHQGTPHCM', '0123456789', '2020-06-11 06:16:23', '2020-06-11 06:16:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietmuonsach`
--
ALTER TABLE `chitietmuonsach`
  ADD PRIMARY KEY (`id_MuonSach`,`id_Sach`);

--
-- Chỉ mục cho bảng `chitiettrasach`
--
ALTER TABLE `chitiettrasach`
  ADD PRIMARY KEY (`id_TraSach`,`id_Sach`);

--
-- Chỉ mục cho bảng `muonsach`
--
ALTER TABLE `muonsach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `muonsach_iduser` (`id_user`);

--
-- Chỉ mục cho bảng `quydinh`
--
ALTER TABLE `quydinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sach_idloaisach` (`id_TheLoai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trasach`
--
ALTER TABLE `trasach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trasach_iduser` (`id_user`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `muonsach`
--
ALTER TABLE `muonsach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT cho bảng `quydinh`
--
ALTER TABLE `quydinh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1046;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `trasach`
--
ALTER TABLE `trasach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietmuonsach`
--
ALTER TABLE `chitietmuonsach`
  ADD CONSTRAINT `ctms_idmuonsach` FOREIGN KEY (`id_MuonSach`) REFERENCES `muonsach` (`id`);

--
-- Các ràng buộc cho bảng `muonsach`
--
ALTER TABLE `muonsach`
  ADD CONSTRAINT `muonsach_iduser` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_idloaisach` FOREIGN KEY (`id_TheLoai`) REFERENCES `theloai` (`id`);

--
-- Các ràng buộc cho bảng `trasach`
--
ALTER TABLE `trasach`
  ADD CONSTRAINT `trasach_iduser` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
