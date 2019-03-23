-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 23, 2019 lúc 03:02 AM
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
-- Cơ sở dữ liệu: `ban_sach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `date_order` date NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(1, 4, '2019-03-04', 0, 'Trả tiền mặt khi nhận được hàng', '', '2019-03-16 13:56:41', '0000-00-00 00:00:00'),
(2, 5, '2019-03-01', 0, 'chuyển khoản', '', '2019-03-16 13:56:41', '0000-00-00 00:00:00'),
(3, 1, '2019-03-05', 0, 'Trả tiền mặt khi nhận được hàng', '', '2019-03-16 13:56:41', '0000-00-00 00:00:00'),
(4, 4, '2019-03-11', 0, 'Trả tiền mặt khi nhận được hàng', '', '2019-03-16 13:56:41', '0000-00-00 00:00:00'),
(5, 1, '2019-03-15', 0, 'Trả tiền mặt khi nhận được hàng', '', '2019-03-16 13:56:41', '0000-00-00 00:00:00'),
(6, 3, '2019-03-08', 0, 'Trả tiền mặt khi nhận được hàng', '', '2019-03-16 13:56:41', '0000-00-00 00:00:00'),
(7, 4, '2019-03-10', 0, 'Chuyển khoản', '', '2019-03-16 13:56:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `amount` int(10) NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `amount`, `unit_price`, `created_at`, `updated_at`) VALUES
(2, 1, 5, 10000, 89000, '2019-03-16 14:28:34', '0000-00-00 00:00:00'),
(3, 3, 4, 0, 56000, '2019-03-16 14:29:31', '0000-00-00 00:00:00'),
(4, 4, 3, 0, 34000, '2019-03-16 14:29:45', '0000-00-00 00:00:00'),
(5, 7, 6, 15000, 79, '2019-03-16 14:30:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Trần Văn Chí', 'Nam', 'Chitran123@gmail.com', '23 Hòa Hiệp, Phường 4, Quận Tân Bình, TP HCM', '0968457734', '', '2019-03-16 13:47:19', '0000-00-00 00:00:00'),
(2, 'Hồ Thùy Linh', 'Nữ', 'Thuylinh123@gmail.com', '67 Ma Thiên Phú, Phường 2, Quận 6, TP HCM ', '0358394890', '', '2019-03-16 13:47:19', '0000-00-00 00:00:00'),
(3, 'Phan Huỳnh Lập', 'Nam', 'Huynhlap7898@gmail.com', '23/4 Nguyễn Chí, Hòa Xã, Vân Canh, Bình Định', '09483833448', '', '2019-03-16 13:47:19', '0000-00-00 00:00:00'),
(4, 'Hà Thanh Lịch', 'Nữ', 'Lichhathanh6798@gmail.com', '45/3/6 Nguyễn Khắc Chí, Hồ Lí, Suối Đá, Tây Ninh', '0967853679', '', '2019-03-16 13:47:19', '0000-00-00 00:00:00'),
(5, 'Hồ Thị Mỹ Đoan\r\n', 'Nữ', 'Homydoan2323@gmial.com', '78 Thanh Mai, Phường 5, Quận 5, TP CHM', '0379869429', '', '2019-03-16 13:47:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` double NOT NULL,
  `discount_price` double NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `new` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `company`, `description`, `unit_price`, `discount_price`, `image`, `unit`, `created_at`, `updated_at`, `new`) VALUES
(3, 'Us - Chúng Ta', 5, 'NXB Phương Nam', '', 34000, 0, 'us-chung-ta-15517779531412_220x310.jpg', '', '2019-03-22 17:11:33', '0000-00-00 00:00:00', NULL),
(4, 'Bảy Viên Ngọc Rồng Siêu Cấp: Broly', 5, 'NXB Hà Nội', '', 56000, 0, 'bay-vien-ngoc-rong-huyen-thoai-broly-15525479949970_220x310.jpg', '', '2019-03-22 17:12:35', '0000-00-00 00:00:00', b'1'),
(5, 'Khách Sạn Mumbai - Thảm Sát Kinh Hoàng', 6, 'NXB Trí Thức', '', 89000, 1000, 'khach-san-mumbai-tham-sat-kinh-hoang-15524524800846_220x310.jpg', '', '2019-03-22 17:16:45', '0000-00-00 00:00:00', b'1'),
(6, 'Ông Hoàng Đường Đua: Um Bok Dong', 6, 'NXB Ngọc Nữ', '', 79000, 15000, 'ong-hoang-duong-dua-um-bok-dong-15529632487867_220x310.jpg', '', '2019-03-22 17:17:37', '0000-00-00 00:00:00', b'1'),
(7, 'Lý luận chính trị', 1, 'NXB Hà Nội', '', 45000, 0, 'CT02.jpg', '', '2019-03-08 17:00:00', '0000-00-00 00:00:00', NULL),
(8, 'Bác Hồ gọi đó là mùa xuân đến', 1, 'NXB Mặt Trận', '', 30000, 5000, 'CT03.jpg', '', '2019-03-07 17:00:00', '0000-00-00 00:00:00', NULL),
(9, 'Bush và quyên nước nước Mỹ', 1, 'NXB Thế Giới', '', 123000, 20000, 'CT05.jpg', '', '2019-03-17 02:39:20', '0000-00-00 00:00:00', NULL),
(10, 'Cuộc kháng chiến của đồng bào Gia Định', 1, 'NXB Kháng Chiến', '', 50000, 0, 'CT04.jpg', '', '2019-03-19 03:30:25', '0000-00-00 00:00:00', b'1'),
(11, 'Biệt đọng Sài Gòn', 1, 'NXB Sài Gòn', '', 35000, 10000, 'CT06.jpg', '', '2019-03-17 02:39:20', '0000-00-00 00:00:00', NULL),
(12, 'Nguyễn Ái Quốc_ Hồ Chí Minh', 1, 'NXB Tổng Hợp Hồ Chí Minh', '', 45000, 20000, 'CT07.jpg', '', '2019-03-19 03:30:27', '0000-00-00 00:00:00', b'1'),
(13, 'Không bao giờ là đủ', 1, 'NXB Tổng Hợp Hồ Chí Minh', '', 68000, 0, 'CT08.png', '', '2019-03-20 13:16:12', '0000-00-00 00:00:00', NULL),
(14, 'Những mảnh sử rời', 1, 'NXB Tổng Hợp Hồ Chí Minh', '', 59000, 10000, 'CT010.jpg', '', '2019-03-17 02:39:20', '0000-00-00 00:00:00', NULL),
(15, 'English For Everyone', 7, 'NXB Giáo Dục', '', 70000, 0, 'EB01.PNG', '', '2019-03-19 03:14:42', '0000-00-00 00:00:00', NULL),
(16, 'Nghệ thuật dạy tiếng anh hiệu quả', 7, 'NXB Giáo Dục', '', 50000, 0, 'EB02.jpg', '', '2019-03-19 03:30:30', '0000-00-00 00:00:00', b'1'),
(17, 'Tuyển tập các bài luận Tiếng Anh trong các kỳ thi', 7, 'NXB Giáo Dục', '', 60000, 10000, 'EB03.jpg', '', '2019-03-17 02:55:33', '0000-00-00 00:00:00', NULL),
(18, 'English For Mathematics B', 7, 'NXB Giáo Dục', '', 52000, 10000, 'EB04.GIF', '', '2019-03-19 03:14:57', '0000-00-00 00:00:00', NULL),
(19, 'English For Mathematics C', 7, 'NXB Tổng hợp Hồ chí Minh', '', 52000, 1000, 'EB05.GIF', '', '2019-03-19 03:15:02', '0000-00-00 00:00:00', NULL),
(20, 'My First English Adventure 1', 7, 'NXB Tổng hợp Hồ chí Minh', '', 67000, 0, 'EB06.GIF', '', '2019-03-19 03:15:42', '0000-00-00 00:00:00', NULL),
(21, 'Toefl ibt writing', 7, 'NXB Tổng hợp Hồ chí Minh', '', 45000, 10000, 'EB07.jpg', '', '2019-03-19 03:30:33', '0000-00-00 00:00:00', b'1'),
(22, 'Toefl ibt speaking', 7, 'NXB Tổng hợp Hồ chí Minh', '', 45000, 10000, 'EB08.jpg', '', '2019-03-03 17:00:00', '0000-00-00 00:00:00', NULL),
(23, 'Toefl ibt reading', 7, 'NXB Tổng hợp Hồ chí Minh', '', 45000, 10000, 'EB09.jpg', '', '2019-03-03 17:00:00', '0000-00-00 00:00:00', NULL),
(24, 'Toefl ibt listening', 7, 'NXB Tổng hợp Hồ chí Minh', '', 45000, 10000, 'EB010.jpg', '', '2019-03-17 02:55:33', '0000-00-00 00:00:00', NULL),
(25, '6 ông chồng của vợ tôi', 6, 'NXB Tổng hợp Hồ chí Minh', '', 38000, 0, 'XH01.jpg', '', '2019-03-19 03:30:37', '0000-00-00 00:00:00', b'1'),
(26, '60 lễ hội truyền thống Việt nam', 6, 'NXB Tổng hợp Hồ chí Minh', '', 40000, 10000, 'XH02.GIF', '', '2019-03-19 03:16:46', '0000-00-00 00:00:00', NULL),
(27, 'Bước đi của cải lương', 6, 'NXB Tổng hợp Hồ chí Minh', '', 45000, 0, 'XH05.jpg', '', '2019-03-17 03:06:29', '0000-00-00 00:00:00', NULL),
(28, 'Buông xả phiền não', 6, 'NXB Từ điển Bách Khoa', '', 29000, 15000, 'XH06.jpg', '', '2019-03-17 03:06:29', '0000-00-00 00:00:00', NULL),
(29, 'Cát bụi đường bay', 6, 'NXB Từ điển Bách Khoa', '', 32000, 0, 'XH07.jpg', '', '2019-03-17 03:06:29', '0000-00-00 00:00:00', NULL),
(30, 'Ẩm thực Trung Quốc', 6, 'NXB Thành Phố Hồ Chí Minh', '', 52000, 10000, 'XH08.jpg', '', '2019-03-17 03:06:29', '0000-00-00 00:00:00', NULL),
(31, 'Sợ hãi và tự do', 6, 'NXB Thành Phố Hồ Chí Minh', '', 48000, 0, 'XH09.PNG', '', '2019-03-19 03:16:31', '0000-00-00 00:00:00', NULL),
(32, 'Âm nhạc Trung Quốc', 6, 'NXB Thành Phố Hồ Chí Minh', '', 61000, 20000, 'XH010.jpg', '', '2019-03-17 03:06:29', '0000-00-00 00:00:00', NULL),
(33, 'An lạc từng bước chân', 6, 'NXB Thành Phố Hồ Chí Minh', '', 68000, 15000, 'XH011.jpg', '', '2019-03-17 03:06:29', '0000-00-00 00:00:00', NULL),
(34, 'Đi bán đam mê', 10, 'NXB Thành Phố Hồ Chí Minh', '', 59000, 0, 'KN01.jpg', '', '2019-03-17 03:16:27', '0000-00-00 00:00:00', NULL),
(35, '7 ngày khởi nghiệp', 10, 'NXB Thành Thị', '', 39000, 10000, 'KN02.jpg', '', '2019-03-17 03:16:27', '0000-00-00 00:00:00', NULL),
(36, 'Kinh điển về khởi nghiệp', 10, 'NXB Thành Phố Hồ Chí Minh', '', 73000, 0, 'KN03.jpg', '', '2019-03-17 03:16:27', '0000-00-00 00:00:00', NULL),
(37, 'Hành trình xa xứ', 10, 'NXB Tuổi trẻ', '', 48000, 0, 'KN04.PNG', '', '2019-03-19 03:17:15', '0000-00-00 00:00:00', NULL),
(38, 'Khác biệt hay là chết', 10, 'NXB Tuổi trẻ', '', 58000, 10000, 'KN05.PNG', '', '2019-03-19 03:18:06', '0000-00-00 00:00:00', NULL),
(39, 'Tứ đại quyền lực', 10, 'NXB Tuổi trẻ', '', 42000, 0, 'KN06.jpg', '', '2019-03-17 03:16:27', '0000-00-00 00:00:00', NULL),
(40, 'Các kỹ năng Maketing hiệu quả ', 11, 'NXB Tổng hợp Thành Phố Hồ Chí Minh', '', 67000, 18000, 'MKT01.PNG', '', '2019-03-19 03:18:10', '0000-00-00 00:00:00', NULL),
(41, '22 luật bất biến trong Maketing', 11, 'NXB Tổng hợp Thành Phố Hồ Chí Minh', '', 78000, 20000, 'MKT02.PNG', '', '2019-03-19 03:18:18', '0000-00-00 00:00:00', NULL),
(42, 'Thu hút thế giới về với bạn trong môi trường trực tuyến', 11, 'NXB Tổng hợp Thành Phố Hồ Chí Minh', '', 61000, 0, 'MKT03.PNG', '', '2019-03-19 03:18:26', '0000-00-00 00:00:00', NULL),
(43, 'Maketing đột phá', 11, 'NXB Tổng hợp Thành Phố Hồ Chí Minh', '', 68000, 20000, 'MKT04.jpg', '', '2019-03-20 13:15:31', '0000-00-00 00:00:00', NULL),
(44, 'Nghệ thuật bán hàng của người Do Thái', 11, 'NXB Tổng hợp Thành Phố Hồ Chí Minh', '', 86000, 0, 'MKT06.png\r\n', '', '2019-03-20 13:15:52', '0000-00-00 00:00:00', NULL),
(45, 'Xì xầm và hét to', 11, 'NXB Tổng hợp Thành Phố Hồ Chí Minh', '', 740000, 0, 'MKT07.jpg', '', '2019-03-17 03:25:31', '0000-00-00 00:00:00', NULL),
(46, '5 điểm chết trong teamwork', 12, 'NXB tổng hợp Hà Nội', '', 34000, 0, 'LD01.PNG', '', '2019-03-19 03:18:52', '0000-00-00 00:00:00', NULL),
(47, 'Người giỏi không phải là người làm tất cả', 12, 'NXB tổng hợp Hà Nội', '', 56000, 0, 'LD02.PNG', '', '2019-03-19 03:18:55', '0000-00-00 00:00:00', NULL),
(48, 'Cạm bẫy trong quản lý', 12, 'NXB tổng hợp Hà Nội', '', 79000, 0, 'LD03.PNG', '', '2019-03-19 03:19:00', '0000-00-00 00:00:00', NULL),
(49, 'Dám dẫn đầu', 12, 'NXB tổng hợp Hà Nội', '', 54000, 0, 'LD04.PNG', '', '2019-03-19 03:19:06', '0000-00-00 00:00:00', NULL),
(50, 'Cuốn sách nhỏ cho nhà lãnh đạo lớn', 12, 'NXB tổng hợp Hà Nội', '', 56000, 18000, 'LD05.jpg', '', '2019-03-17 14:16:32', '0000-00-00 00:00:00', NULL),
(51, 'Thuật lãnh đọa từ vị tu sĩ bán chiếc Ferari', 12, 'NXB tổng hợp Hà Nội', '', 89000, 0, 'LD08.PNG', '', '2019-03-19 03:19:25', '0000-00-00 00:00:00', NULL),
(52, 'Tứ thư lãnh đạo_ Thuật lãnh đạo', 12, 'NXB tổng hợp Hà Nội', '', 46000, 0, 'LD06.jpg', '', '2019-03-17 14:22:48', '0000-00-00 00:00:00', NULL),
(53, 'Tú thư lãnh đạo _ Thuật dụng ngôn', 12, 'NXB tổng hợp Hà Nội', '', 46000, 0, 'LD07.jpg', '', '2019-03-17 14:22:48', '0000-00-00 00:00:00', NULL),
(54, 'TỨ thư lãnh đạo _ Thuật quản trị', 12, 'NXB tổng hợp Hà Nội', '', 46000, 0, 'LD09.jpg', '', '2019-03-17 14:22:48', '0000-00-00 00:00:00', NULL),
(55, 'Tứ thư lãnh đạo _ Thuật xử thế', 12, 'NXB tổng hợp Hà Nội', '', 46000, 0, 'LD010.jpg', '', '2019-03-17 14:22:48', '0000-00-00 00:00:00', NULL),
(56, 'Một chút cho tâm lý_ một tí hiểu cuộc đời', 9, 'NXB Thế giới', '', 39000, 0, 'TL01.jpg', '', '2019-03-17 14:28:14', '0000-00-00 00:00:00', NULL),
(57, 'Tâm lí học đám đông', 9, 'NXB tổng hợp Hà Nội', '', 40000, 0, 'TL02.jpg', '', '2019-03-17 14:28:14', '0000-00-00 00:00:00', NULL),
(58, 'Những câu nói hay về sách văn hóa đọc', 9, 'NXB Kim Đồng', '', 29000, 0, 'TL03.GIF', '', '2019-03-19 03:21:47', '0000-00-00 00:00:00', NULL),
(59, 'Đọc vị bất kì ai', 9, 'NXB tổng hợp Hà Nội', '', 60000, 10000, 'TL04.GIF', '', '2019-03-19 03:21:51', '0000-00-00 00:00:00', NULL),
(60, 'Đắc nhân tâm', 9, 'NXB tổng hợp Hồ Chí Minh', '', 70000, 10000, 'TL05.jpg', '', '2019-03-17 14:31:48', '0000-00-00 00:00:00', NULL),
(61, 'Những cuộc phiêu lưu  trong kinh doanh', 3, 'NXB tổng hợp Hồ Chí Minh', '', 68000, 10000, 'KT01.jpg', '', '2019-03-17 14:37:09', '0000-00-00 00:00:00', NULL),
(62, 'Tuyển dụng và đãi ngộ người tài', 3, 'NXB tổng hợp Hà Nội', '', 72000, 0, 'KT03.PNG', '', '2019-03-19 03:19:29', '0000-00-00 00:00:00', NULL),
(63, 'Chiến lược dữ liệu', 3, 'NXB Giới Trẻ', '', 65000, 0, 'KT04.PNG', '', '2019-03-19 03:19:32', '0000-00-00 00:00:00', NULL),
(64, 'Đế chế kì lân', 3, 'NXB tổng hợp Hà Nội', '', 89000, 0, 'KT05.jpg', '', '2019-03-17 14:39:02', '0000-00-00 00:00:00', NULL),
(65, 'Quyền lực New Power', 3, 'NXB Thế giới', '', 45000, 20000, 'KT06.PNG', '', '2019-03-19 03:19:36', '0000-00-00 00:00:00', NULL),
(66, 'Giải pháp bán hàng 4.0', 3, 'NXB Phương Nam', '', 98000, 15000, 'KT07.PNG', '', '2019-03-19 03:19:39', '0000-00-00 00:00:00', NULL),
(67, 'Sức mạnh của sự khác biệt', 3, 'NXB tổng hợp Hà Nội', '', 75000, 18000, 'KT08.PNG', '', '2019-03-19 03:19:42', '0000-00-00 00:00:00', NULL),
(68, 'Tư duy làm giàu', 3, 'NXB tổng hợp Hồ Chí Minh', '', 60000, 10000, 'KT09.PNG', '', '2019-03-19 03:19:46', '0000-00-00 00:00:00', NULL),
(69, 'Thói quen thứ 8', 3, 'NXB Thế Giới', '', 59000, 10000, 'KT010.PNG', '', '2019-03-19 03:19:49', '0000-00-00 00:00:00', NULL),
(70, 'Warren Bufett làm giàu', 3, 'NXB Thế Giới', '', 70000, 10000, 'KT011.PNG', '', '2019-03-19 03:20:18', '0000-00-00 00:00:00', NULL),
(71, '15 phút tập bụng', 8, 'NXB Phụ Nữ', '', 29000, 10000, 'GD01.PNG', '', '2019-03-19 03:20:40', '0000-00-00 00:00:00', NULL),
(72, 'Ánh chớp tư duy', 8, 'NXB Phương Nam', '', 76000, 0, 'GD02.PNG', '', '2019-03-19 03:20:36', '0000-00-00 00:00:00', NULL),
(73, 'Bản đồ thành công', 8, 'NXB Thế Giới', '', 30000, 0, 'GD03.PNG', '', '2019-03-19 03:21:15', '0000-00-00 00:00:00', NULL),
(74, 'Bảo mật thông tin nơi công sở', 8, 'NXB Tuổi trẻ', '', 67000, 15000, 'KT04.png', '', '2019-03-20 13:17:04', '0000-00-00 00:00:00', NULL),
(75, 'Cà phê trên sao hỏa', 8, 'NXB Thế Giới', '', 61000, 10000, 'KT05.JPG', '', '2019-03-19 03:20:25', '0000-00-00 00:00:00', NULL),
(76, 'Bí quyết trường thọ của người Nhật', 8, 'NXB Thành Danh', '', 79000, 20000, 'KT06.png', '', '2019-03-20 13:17:24', '0000-00-00 00:00:00', NULL),
(77, 'Có điều kiện cứ thể hiện', 8, 'NXB Tổng hợp Hồ Chí Minh', '', 56000, 10000, 'KT07.png', '', '2019-03-20 13:17:40', '0000-00-00 00:00:00', NULL),
(78, 'Chìa khóa tư duy tích cực', 8, 'NXB Tổng hợp Hồ Chí Minh', '', 72000, 20000, 'KT08.png', '', '2019-03-20 13:18:32', '0000-00-00 00:00:00', NULL),
(79, 'Ăn chay chống lại biến đổi khí hậu', 8, 'NXB Tổng hợp Hồ Chí Minh', '', 25000, 0, 'KT09.png', '', '2019-03-20 13:18:51', '0000-00-00 00:00:00', NULL),
(80, 'Chống lại kẻ bắt nạt trên mạng', 9, 'NXB Tuổi Trẻ', '', 39000, 10000, 'KN01.jpg', '', '2019-03-17 15:05:04', '0000-00-00 00:00:00', NULL),
(81, 'Bài học kỳ diệu từ chiếc xe rác', 9, 'NXB Tổng hợp Hồ Chí Minh', '', 40000, 15000, 'KN02.PNG', '', '2019-03-19 03:21:30', '0000-00-00 00:00:00', NULL),
(83, 'Vừa đủ', 9, 'NXB Tổng hợp Hà Nội', '', 61000, 10000, 'KN03.jpg', '', '2019-03-17 15:05:04', '0000-00-00 00:00:00', NULL),
(84, '10 quy luật cuộc sống', 9, 'NXB Tổng hợp Hồ Chí Minh', '', 89000, 0, 'KN04.jpg', '', '2019-03-17 15:12:12', '0000-00-00 00:00:00', NULL),
(85, 'Để có một tâm hồn đẹp', 9, 'NXB Tổng hợp Hà Nội', '', 78000, 15000, 'KN05.jpg', '', '2019-03-17 15:12:12', '0000-00-00 00:00:00', NULL),
(86, 'Bắt sóng cảm xúc', 9, 'NXB Tổng hợp Hồ Chí Minh', '', 61000, 10000, 'KN06.jpg', '', '2019-03-17 15:12:12', '0000-00-00 00:00:00', NULL),
(87, 'Bí mật chiếc xô cảm xúc', 9, 'NXB Tổng hợp Hồ Chí Minh', '', 79000, 20000, 'KN07.jpg', '', '2019-03-17 15:12:12', '0000-00-00 00:00:00', NULL),
(88, 'Đầu tư cho mối quan hệ ', 9, 'NXB Tổng hợp Hồ Chí Minh', '', 86000, 0, 'KN08.jpg', '', '2019-03-17 15:12:12', '0000-00-00 00:00:00', NULL),
(89, 'Sisu Vượt qua tất cả', 9, 'NXB Tổng hợp Hồ Chí Minh', '', 42000, 0, 'KN09.jpg', '', '2019-03-17 15:12:12', '0000-00-00 00:00:00', NULL),
(90, 'Cảm ơn cuộc sống', 9, 'NXB Tổng hợp Hồ Chí Minh', '', 59000, 10000, 'KN010.jpg', '', '2019-03-17 15:12:12', '0000-00-00 00:00:00', NULL),
(91, 'Bí mật của may mắn', 9, 'NXB Tổng hợp Hà Nội', '', 67000, 0, 'KN011.jpg', '', '2019-03-17 15:12:12', '0000-00-00 00:00:00', NULL),
(92, '15 ngày vắng mẹ', 5, 'NXb Nhi Đồng', '', 30000, 18000, 'TN01.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(93, 'English for children', 5, 'NXB Thế Giới', '', 40000, 15000, 'TN02.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(94, 'Ba mẹ ơi con bị bắt nạt', 5, 'NXB Nhi Đồng', '', 61000, 10000, 'TN03.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(95, 'Bạn gái yêu quý của bác Phiodor', 5, 'NXB Nhi Đồng', '', 79000, 20000, 'TN04.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(96, 'Giúp trẻ tư duy số học', 5, 'NXB Nhi Đồng', '', 86000, 0, 'TN05.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(97, 'Bí mật của chiều cao', 5, 'NXB Tuổi Trẻ', '', 42000, 0, 'TN06.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(98, 'Bách khoa tâm lí cho trẻ', 5, 'NXB Nhi Đồng', '', 59000, 10000, 'TN07.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(99, 'Ai cũng được vui', 5, 'NXB Nhi Đồng', '', 63000, 10000, 'TN08.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(100, 'Bé Nấm đi siêu thị', 5, 'NXB Nhi Đồng', '', 32000, 0, 'TN09.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(101, 'Bà tớ là phù thủy', 5, 'NXB Nhi Đồng', '', 34000, 0, 'TN010.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(102, 'Bé Gi-Đâu', 5, 'NXB Nhi Đồng', '', 26000, 0, 'TN011.jpg', '', '2019-03-17 15:26:30', '0000-00-00 00:00:00', NULL),
(103, 'Áo dạ', 4, 'NXB Tổng hợp Hà Nội', '', 56000, 10000, 'VH01.jpg', '', '2019-03-17 15:46:23', '0000-00-00 00:00:00', NULL),
(104, 'Bảo tàng ngây thơ', 4, 'NXB Tổng hợp Hà Nội', '', 72000, 20000, 'VH02.jpg', '', '2019-03-17 15:46:23', '0000-00-00 00:00:00', NULL),
(105, 'Anne dưới mái nhà bên ánh lửa', 4, 'NXB Tuổi trẻ', '', 89000, 18000, 'VH03.jpg', '', '2019-03-17 15:48:21', '0000-00-00 00:00:00', NULL),
(106, '10 năm vắng bóng liêu xiêu \" Ông già đi bộ\"', 4, 'NXB Tổng hợp Hà Nội', 'sdsadasdsadasd', 40000, 10000, 'VH04.jpg', '', '2019-03-22 06:02:28', '0000-00-00 00:00:00', NULL),
(107, 'Bản năng', 4, 'NXB Tổng hợp Hà Nội', '', 79000, 15000, 'VH05.PNG', '', '2019-03-19 03:24:21', '0000-00-00 00:00:00', NULL),
(108, 'Anh chàng Habbi', 4, 'NXB Tổng hợp Hà Nội', '', 98000, 20000, 'Vh06.jpg', '', '2019-03-17 15:49:35', '0000-00-00 00:00:00', NULL),
(109, 'Animorph 5', 4, 'NXB Tổng hợp Hà Nội', '', 39000, 10000, 'VH07.jpg', '', '2019-03-17 15:51:18', '0000-00-00 00:00:00', NULL),
(110, 'Ăn, cầu nguyện, yêu', 4, 'NXB Tổng hợp Hà Nội', '', 72000, 20000, 'VH08.jpg', '', '2019-03-17 15:51:18', '0000-00-00 00:00:00', NULL),
(111, '41 năm làm báo', 4, 'NXB Tổng hợp Hà Nội', '', 39000, 15000, 'VH09.jpg', '', '2019-03-17 15:53:30', '0000-00-00 00:00:00', NULL),
(112, 'Ba ơi mình đi đâu', 4, 'NXB Tổng hợp Hà Nội', '', 98000, 20000, 'VH010.jpg', '', '2019-03-17 15:53:30', '0000-00-00 00:00:00', NULL),
(113, 'Ai biết đâu ngày mai', 4, 'NXB Tổng hợp Hà Nội', '', 61000, 10000, 'VH011.jpg', '', '2019-03-17 15:53:30', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Chính Trị', '', 'CT01.jpg', '2019-03-14 09:07:50', '0000-00-00 00:00:00'),
(3, 'Kinh tế', '', 'KT01.jpg', '2019-03-06 17:00:00', '0000-00-00 00:00:00'),
(4, 'Văn học', '', 'VH01.jpg', '2019-03-07 17:00:00', '0000-00-00 00:00:00'),
(5, 'Thiếu nhi', '', 'TN01.jpg', '2019-03-13 17:00:00', '0000-00-00 00:00:00'),
(6, 'Lịch sử xã hội', '', 'LSXH01.jpg', '2019-03-16 14:04:34', '0000-00-00 00:00:00'),
(7, 'English Book', '', 'EB01.jpg', '2019-03-17 02:23:56', '0000-00-00 00:00:00'),
(8, 'Khoa học_ Giáo dục', '', 'GD01.jpg', '2019-03-08 17:00:00', '0000-00-00 00:00:00'),
(9, 'Tâm lí_ Kỹ năng sống', '', 'KN01.jpg', '2019-03-17 02:23:56', '0000-00-00 00:00:00'),
(10, 'Khởi nghiệp', '', 'KN01.jpg', '2019-03-09 17:00:00', '0000-00-00 00:00:00'),
(11, 'Maketing', '', 'MKT01.jpg', '2019-03-08 17:00:00', '0000-00-00 00:00:00'),
(12, 'Lãnh đạo', '', 'LD01.jpg', '2019-03-10 17:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_bills` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_bills_detail` (`id_bill`),
  ADD KEY `FK_bills_detail_product` (`id_product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product` (`id_type`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `FK_bills` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `FK_bills_detail` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_bills_detail_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
