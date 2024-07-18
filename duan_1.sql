-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 18, 2024 lúc 04:01 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `id_anh` int NOT NULL,
  `id_sanpham` int NOT NULL,
  `url_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `anh`
--

INSERT INTO `anh` (`id_anh`, `id_sanpham`, `url_anh`) VALUES
(1, 44, 'tải xuống (3).png'),
(2, 44, 'tải xuống (2).png'),
(3, 44, 'tải xuống (1).png'),
(4, 45, 'tải xuống (3).png'),
(5, 45, 'tải xuống (2).png'),
(6, 45, 'tải xuống (1).png'),
(7, 46, 'tải xuống (2).png'),
(8, 46, 'tải xuống (1).png'),
(9, 46, 'tải xuống (1).jpg'),
(18, 30, 'iphone-15-plus-128gb-den-thumb-600x600.jpg'),
(19, 30, 'iphone-15-pro-blue-thumbnew-600x600.jpg'),
(20, 30, 'iphone-15-pro-max_3.jpg'),
(21, 31, 'anh1.jpg'),
(22, 31, 'samsung-galaxy-s23-ultra.jpg'),
(23, 32, 'nubia-neo-5g_2_1.jpg'),
(24, 32, 'samsung-galaxy-a05-thumb-600x600.jpg'),
(25, 33, 'anh2.jpg'),
(26, 33, 'samsung-galaxy-z-flip-5-256gb_1_4.jpg'),
(27, 34, '3_51_1_2_2_1_1_2.jpg'),
(28, 34, '3_229.jpg'),
(30, 35, 'apple-watch-se-2023-40mm.jpg'),
(31, 36, '3_51_1_2_2_1_1_2.jpg'),
(32, 36, 'iphone-15-plus-128gb-den-thumb-600x600.jpg'),
(33, 37, '8676-iphone-15.png'),
(34, 37, 'air_m2.jpg'),
(35, 38, '70y72-4555_-_copy.jpg'),
(36, 38, 'air_m2.jpg'),
(37, 39, '1.jpg'),
(38, 39, 'airtag.jpg'),
(39, 40, '1.jpg'),
(40, 40, '3_51_1_2_2_1_1_2.jpg'),
(41, 35, '8676-iphone-15.png'),
(42, 47, '82bbbffb0ee24320a2d8c4e7a35e9ea3.jpg'),
(43, 47, '5.png'),
(44, 47, '2.png'),
(45, 47, '1.png'),
(46, 47, 'AnhoLe_PC.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `iduser` int DEFAULT '0',
  `bill_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL,
  `total` int NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT '0',
  `receive_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `receive_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `receive_tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaydathang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`, `ngaydathang`) VALUES
(33, 5, 'uydphph35380', '', '', 'uydpph35380@gmail.com', 0, 22312222, 0, NULL, NULL, NULL, '03:07:09pm 25/10/2023'),
(37, 8, 'uydphph35380', '', '', 'dophuonguy1209@gmail.com', 0, 3090000, 2, NULL, NULL, NULL, '05:57:39pm 25/10/2023'),
(39, 10, 'admin12', 'dgdgdf', '2432432', 'uy1245@gmail.com', 1, 4690000, 1, NULL, NULL, NULL, '2023-11-28'),
(40, 10, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 9380000, 3, NULL, NULL, NULL, '2023-11-29'),
(41, 10, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(48, 10, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 4690000, 2, NULL, NULL, NULL, '2023-11-29'),
(50, 10, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 4690000, 1, NULL, NULL, NULL, '2023-11-29'),
(71, 10, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 31990000, 1, NULL, NULL, NULL, '2023-11-29'),
(113, 10, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 22790000, 1, NULL, NULL, NULL, '2023-11-29'),
(114, 10, 'admin12', 'dffd', '2432432', 'uy1245@gmail.com', 1, 27589000, 1, NULL, NULL, NULL, '2023-11-29'),
(115, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 4690000, 1, NULL, NULL, NULL, '2023-11-29'),
(116, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(117, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 22790000, 1, NULL, NULL, NULL, '2023-11-29'),
(118, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(119, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(120, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(121, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(122, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(123, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(124, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-11-29'),
(125, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 31990000, 1, NULL, NULL, NULL, '2023-11-29'),
(126, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 9380000, 1, NULL, NULL, NULL, '2023-11-29'),
(127, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 45580000, 1, NULL, NULL, NULL, '2023-11-29'),
(128, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 38789000, 1, NULL, NULL, NULL, '2023-11-29'),
(129, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 4690000, 1, NULL, NULL, NULL, '2023-11-30'),
(130, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 2, 38789000, 1, NULL, NULL, NULL, '2023-11-30'),
(131, 0, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 15999000, 1, NULL, NULL, NULL, '2023-12-01'),
(132, 0, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 15999000, 1, NULL, NULL, NULL, '2023-12-01'),
(133, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 31998000, 2, NULL, NULL, NULL, '2023-12-01'),
(134, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 22790000, 1, NULL, NULL, NULL, '2023-12-02'),
(135, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-12-02'),
(136, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 31990000, 1, NULL, NULL, NULL, '2023-12-02'),
(137, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-12-02'),
(138, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 31990000, 1, NULL, NULL, NULL, '2023-12-02'),
(139, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 31990000, 1, NULL, NULL, NULL, '2023-12-02'),
(140, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 3, NULL, NULL, NULL, '2023-12-02'),
(141, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 4690000, 1, NULL, NULL, NULL, '2023-12-02'),
(142, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-12-02'),
(143, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 4690000, 1, NULL, NULL, NULL, '2023-12-02'),
(144, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-12-02'),
(145, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 4690000, 1, NULL, NULL, NULL, '2023-12-02'),
(146, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 0, 1, NULL, NULL, NULL, '2023-12-02'),
(147, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 4690000, 1, NULL, NULL, NULL, '2023-12-02'),
(148, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 31990000, 1, NULL, NULL, NULL, '2023-12-02'),
(149, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 15999000, 2, NULL, NULL, NULL, '2023-12-02'),
(150, 0, 'dsvs', 'gdbgf', '43564646', 'uydpph35380@fpt.edu.vn', 1, 34190000, 3, NULL, NULL, NULL, '2023-12-04'),
(151, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 50189000, 1, NULL, NULL, NULL, '2023-12-04'),
(152, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 4690000, 0, NULL, NULL, NULL, '2023-12-04'),
(153, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 22289000, 0, NULL, NULL, NULL, '2023-12-05'),
(154, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 45970000, 0, NULL, NULL, NULL, '2023-12-05'),
(155, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 57170000, 0, NULL, NULL, NULL, '2023-12-05'),
(156, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 11590000, 1, NULL, NULL, NULL, '2023-12-05'),
(157, 2, 'uy', 'cgn v', '0987654321', 'dophuonguy1209@gmail.com', 1, 20689000, 0, NULL, NULL, NULL, '2023-12-06'),
(158, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 2, 47989000, 0, NULL, NULL, NULL, '2023-12-07'),
(159, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 15999000, 0, NULL, NULL, NULL, '2023-12-07'),
(161, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 4690000, 3, NULL, NULL, NULL, '2023-12-07'),
(162, 8, 'uydphph35380', 'Hà nội', '0976562034', 'dophuonguy1209@gmail.com', 1, 11590000, 0, NULL, NULL, NULL, '2024-05-14'),
(163, 2, 'uy', 'Hà Nội', '0987654321', 'nguyenthanhduy12012004@gmail.com', 1, 11590000, 0, NULL, NULL, NULL, '2024-07-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(8, 'hbhjh', 0, 17, '10:43:36am 10/10/2023'),
(9, 'q352532', 0, 24, '10:45:36am 10/10/2023'),
(10, 'dâd', 6, 26, '03:20:59pm 12/10/2023'),
(12, 'h50yrto', 8, 17, '04:20:58pm 25/10/2023'),
(13, 'ôi sản phẩm này đẹp quá ', 8, 40, '12:20:05pm 26/10/2023'),
(14, 'ôi sản phẩm này chất quá', 10, 40, '12:21:33pm 26/10/2023'),
(15, 'sản phẩm đẹp ', 8, 39, '12:27:25pm 26/10/2023'),
(16, 'sản phẩm bền thật ', 8, 39, '12:28:04pm 26/10/2023'),
(17, 'chất lừ', 8, 38, '12:29:35pm 26/10/2023'),
(18, 'tivi này đẹp thật ', 8, 38, '12:29:59pm 26/10/2023'),
(19, 'tivi này to thật', 8, 38, '12:30:36pm 26/10/2023'),
(20, 'ôi sản phẩm này đẹp quá ', 8, 37, '12:39:14pm 26/10/2023'),
(21, 'ôi sản phẩm này chất quá', 8, 37, '12:39:16pm 26/10/2023'),
(22, 'máy dùng khỏe quá', 8, 37, '12:39:41pm 26/10/2023'),
(23, 'máy dùng vẫn còn ngonn', 8, 36, '12:40:45pm 26/10/2023'),
(24, 'máy vẫn quá ocee', 8, 36, '12:41:08pm 26/10/2023'),
(25, 'máy mua về vẫn đẹp', 8, 36, '12:41:41pm 26/10/2023'),
(26, 'sản phẩm cực chất', 8, 35, '12:42:55pm 26/10/2023'),
(27, 'sản phẩm khá ổn', 8, 35, '12:43:04pm 26/10/2023'),
(28, 'dùng khá là ocee', 8, 35, '12:43:12pm 26/10/2023'),
(29, 'đẹp quá', 8, 35, '12:43:17pm 26/10/2023'),
(30, 'dùng khá ocee', 8, 34, '12:44:32pm 26/10/2023'),
(31, 'chon chíp a15 vẫn rất khỏe', 8, 34, '12:44:47pm 26/10/2023'),
(32, 'cam hơi mờ', 8, 34, '12:44:56pm 26/10/2023'),
(34, 'máy gập nên đúc vào túy rất dễ ', 8, 33, '12:47:07pm 26/10/2023'),
(35, 'sản phẩm khá chất lương', 8, 33, '12:47:37pm 26/10/2023'),
(36, 'pin hơi kém ', 8, 33, '12:47:47pm 26/10/2023'),
(37, 'dùng khá ổn áp', 8, 33, '12:47:57pm 26/10/2023'),
(39, 'fdbgffg', 8, 34, '2023-11-30'),
(40, 'sản phẩm đẹp', 8, 34, '2023-11-30'),
(41, 'sản phẩm đẹp', 8, 34, '2023-11-30'),
(42, 'sản phẩm đẹp', 8, 34, '2023-11-30'),
(43, 'kvjfdjvbfd', 2, 32, '2023-12-05'),
(44, 'fbdbdx', 2, 32, '2023-12-05'),
(45, 'zc c cx', 2, 32, '2023-12-05'),
(46, 'sản phẩm đẹp', 2, 34, '2023-12-06'),
(47, 'sản phẩm đẹp', 2, 34, '2023-12-06'),
(48, 'fdbgffg', 8, 34, '2023-12-06'),
(49, 'sản phẩm đẹp', 8, 34, '2023-12-07'),
(50, 'sản phẩm đẹp', 8, 34, '2023-12-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(98, 8, 33, 'upload/samsung-galaxy-z-flip-5-256gb_1_4.jpg', 'Samsung Galaxy Z Flip5 256GB', 15999000, 1, 15999000, 149),
(100, 8, 40, 'upload/3_51_1_2_2_1_1_2.jpg', 'oppo', 34190000, 1, 34190000, 151),
(101, 8, 33, 'upload/samsung-galaxy-z-flip-5-256gb_1_4.jpg', 'Samsung Galaxy Z Flip5 256GB', 15999000, 1, 15999000, 151),
(102, 8, 32, 'upload/samsung-galaxy-a05-thumb-600x600.jpg', 'Nubia Neo 8GB 256GB 5G', 4690000, 1, 4690000, 152),
(103, 8, 33, 'upload/samsung-galaxy-z-flip-5-256gb_1_4.jpg', 'Samsung Galaxy Z Flip5 256GB', 15999000, 1, 15999000, 153),
(104, 8, 35, 'upload/8676-iphone-15.png', 'Apple Watch Se 2023', 6290000, 1, 6290000, 153),
(105, 8, 34, 'upload/3_229.jpg', 'iPad mini 6 WiFi 64GB', 11590000, 2, 11590000, 154),
(106, 8, 30, 'upload/iphone-15-pro-max_3.jpg', 'Iphone 15 128GB | Chính hãng VN/A', 22790000, 1, 22790000, 154),
(107, 8, 30, 'upload/iphone-15-pro-max_3.jpg', 'Iphone 15 128GB | Chính hãng VN/A', 22790000, 2, 22790000, 155),
(108, 8, 34, 'upload/3_229.jpg', 'iPad mini 6 WiFi 64GB', 11590000, 1, 11590000, 155),
(109, 8, 34, 'upload/3_229.jpg', 'iPad mini 6 WiFi 64GB', 11590000, 1, 11590000, 156),
(110, 2, 32, 'upload/samsung-galaxy-a05-thumb-600x600.jpg', 'Nubia Neo 8GB 256GB 5G', 4690000, 1, 4690000, 157),
(111, 2, 33, 'upload/samsung-galaxy-z-flip-5-256gb_1_4.jpg', 'Samsung Galaxy Z Flip5 256GB', 15999000, 1, 15999000, 157),
(112, 8, 31, 'upload/samsung-galaxy-s23-ultra.jpg', 'Samsung Galaxy S23 Ultra', 31990000, 1, 31990000, 158),
(113, 8, 33, 'upload/samsung-galaxy-z-flip-5-256gb_1_4.jpg', 'Samsung Galaxy Z Flip5 256GB', 15999000, 1, 15999000, 158),
(114, 8, 33, 'upload/samsung-galaxy-z-flip-5-256gb_1_4.jpg', 'Samsung Galaxy Z Flip5 256GB', 15999000, 1, 15999000, 159),
(115, 8, 32, 'upload/samsung-galaxy-a05-thumb-600x600.jpg', 'Nubia Neo 8GB 256GB 5G', 4690000, 1, 4690000, 161),
(116, 8, 34, 'upload/3_229.jpg', 'iPad mini 6 WiFi 64GB', 11590000, 1, 11590000, 162),
(117, 2, 34, 'upload/3_229.jpg', 'iPad mini 6 WiFi 64GB', 11590000, 1, 11590000, 163);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img_dm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `img_dm`) VALUES
(16, 'Phụ kiện', 'tải xuống (1).png'),
(17, 'Laptop', 'tải xuống.png'),
(18, 'Hàng cũ', 'tải xuống (2).png'),
(20, 'Điện thoại ', 'tải xuống (3).png'),
(21, 'cái bang', 'tải xuống (2).png'),
(22, 'Đồng hồ', 'tải xuống.png'),
(23, 'Khuyến mãi', 'tải xuống.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `luotxem` int NOT NULL DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `mota`, `luotxem`, `iddm`) VALUES
(30, 'Iphone 15 128GB | Chính hãng VN/A', 22790000, 'Mới, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple: CareS(xem chi tiết).\r\n\r\nGiá sản phẩm đã bao gồm VAT', 0, 20),
(31, 'Samsung Galaxy S23 Ultra', 31990000, '- Mới, đầy đủ phụ kiện từ nhà sản xuất\r\n- Máy, cáp, sách hướng dẫn, que chọc sim\r\n- Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\n- Giá sản phẩm đã bao gồm VAT', 0, 20),
(32, 'Nubia Neo 8GB 256GB 5G', 4690000, 'Tầm nhìn thoải mái, chiến game không lo ngại - Màn hình 6.6 inch cùng tần số quét 120Hz', 0, 20),
(33, 'Samsung Galaxy Z Flip5 256GB', 15999000, 'Thần thái nổi bật, cân mọi phong cách- Lấy cảm hứng từ thiên nhiên với màu sắc thời thượng, xu hướng', 0, 23),
(34, 'iPad mini 6 WiFi 64GB', 11590000, 'Mạnh mẽ bứt phá - Chip xử lý Apple A15 Bionic 6 nhân', 0, 21),
(35, 'Apple Watch Se 2023', 6290000, '- Trang bị màn hình Rentina, khung viền nhôm cùng kính cường lực chắc chắn\r\n- Hõ trợ thao tác mượt mà với chip S8 SiP mạnh mẽ', 0, 22),
(36, 'iPhone 13 Pro Max 128GB - Cũ đẹp', 18290000, 'SP được thu lại từ khách bán lại - thu cũ, ngoại hình đẹp như máy mới. Máy có thể đã qua bảo hành hãng hoặc sửa chữa thay thế linh kiện để đảm bảo sự ổn định khi dùng.\r\nCó nguồn gốc rõ ràng, xuất bán đầy đủ hoá đơn eVAT.', 0, 18),
(37, 'Apple MacBook Air M1 256GB 2020', 19490000, 'Phù hợp cho lập trình viên, thiết kế đồ họa 2D, dân văn phòng', 0, 17),
(39, 'Apple AirTag | Chính hãng Apple Việt Nam', 780000, 'Tính năng định vị độ chính xác cao tương thích với iPhone 11 trở lên cho phép phát và dẫn đường đến vị trí thiết bị', 0, 16),
(40, 'oppo', 34190000, 'Thiết kế khung viền từ titan chuẩn hàng không vũ trụ - Cực nhẹ, bền cùng viền cạnh mỏng cầm nắm thoải mái', 0, 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(2, 'uy', '12345678', 'nguyenthanhduy12012004@gmail.com', 'Hà Nội', '0987654321', 'admin'),
(8, 'uydphph35380', '123456', 'dophuonguy1209@gmail.com', 'Hà nội', '0976562034', 'client'),
(11, 'uydp', '123456', 'uydpph35380@fpt.edu.vn', NULL, NULL, 'client'),
(12, 'uydp', '123456', 'uydpph35380@fpt.edu.vn', NULL, NULL, 'client'),
(13, 'uydp', '123456', 'uydpph35380@fpt.edu.vn', NULL, NULL, 'client'),
(14, 'uy', '12345678', 'nguyenthanhduy12012004@gmail.com', NULL, NULL, 'client'),
(15, 'uy', '12345678', 'nguyenthanhduy12012004@gmail.com', NULL, NULL, 'client'),
(16, 'uy', '12345678', 'nguyenthanhduy12012004@gmail.com', NULL, NULL, 'client'),
(17, 'uy', '12345678', 'dophuonguy1209@gmail.com', NULL, NULL, 'client');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`id_anh`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `idbill` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh`
--
ALTER TABLE `anh`
  MODIFY `id_anh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `idbill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `idpro` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `iduser` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
