-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 03, 2018 lúc 09:18 AM
-- Phiên bản máy phục vụ: 10.0.31-MariaDB-cll-lve
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chufarmc_farm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `image`, `content`) VALUES
(1, 'logo.png', '<p>Chu&rsquo;s Farm is specialized in fresh fruits</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `full_name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '$2y$10$haimuoihaihaimuoihai2u4dEn636KYbp.Jk2f.a.m6krmn4C3aL6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL DEFAULT '1',
  `total_price` int(50) NOT NULL,
  `order_status` varchar(50) NOT NULL DEFAULT 'pending',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `full_name`, `address`, `phone_number`, `email`, `product_id`, `product_quantity`, `total_price`, `order_status`, `date`) VALUES
(51, 'tra', 'au', '04', 'tranapa@gmail.com', 39, 1, 10, 'pending', '2017-12-23 21:30:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `date`) VALUES
(5, 'Brand5', 'page4_logo5.png', '2017-12-17 20:36:18'),
(7, 'Brand 1', 'page4_logo1.png', '2017-12-18 19:25:27'),
(8, 'Brand 2', 'page4_logo2.png', '2017-12-18 19:26:31'),
(9, 'Brand 3', 'page4_logo3.png', '2017-12-18 19:26:46'),
(10, 'Brand 6', 'page4_logo6.png', '2017-12-18 19:27:01'),
(12, 'Brand6', 'Webp.net-resizeimage-8.jpg', '2017-12-24 03:37:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name_comment` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `name_comment`, `content`, `date`) VALUES
(1, 'EMMA S', 'Good Farm!!', '2017-12-18 19:35:00'),
(2, 'JOHN D.', 'Praesent vestibu lum molestie lacuiirhs. Aenean non ummy hendreriauris. Phasellllus. porta. Fusce suscipit varius mium sociis atibus et magis dis parturient montes, nascetur.', '2017-12-17 17:42:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keywords_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_map` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `title_website`, `description_website`, `keywords_website`, `phone_number`, `email`, `address`, `google_map`, `contact_name`, `position`, `logo`, `favicon`) VALUES
(1, 'Chu’s Farm', 'Chu’s Farm is specialized in fresh fruits ', 'Chu Farm, fresh fruit in Australia, trái cây Úc, nhập khẩu trái cây', '+61455779999', 'tnp.imex@gmail.com', '415 Waugh Road, Toolamba 3614', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3208.9825383443313!2d145.294492715093!3d-36.457978280020484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad862c4148cb8fd%3A0xa72f991a34b1be9d!2s415+Waugh+Rd%2C+Toolamba+VIC+3614%2C+%C3%9Ac!5e0!3m2!1svi!2s!4v1513994768083\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Hoang Chu', 'Director', 'chus_farm.png', 'favicon.ico');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `informations`
--

INSERT INTO `informations` (`id`, `title`, `content`, `image`, `date`) VALUES
(3, 'Cherries', '', 'rsz_cherry1.jpg', '2017-12-22 08:51:55'),
(6, 'Chu Farm\'s Logo', '', 'chu\'s farm-logo.png', '2017-12-23 21:20:24'),
(7, 'Apples', '', 'page1_pic3.jpg', '2017-12-23 21:20:47'),
(8, 'Tomato', '', 'Webp.net-resizeimage-4.jpg', '2017-12-23 21:23:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`) VALUES
(9, 'Cherry  Úc hay anh đào là loại trai cay thuộc họ R', 'Cherry  Úc hay anh đào là loại trai cay thuộc họ Rosaceae, chi Prunus. Từ cherry là tên gọi chung để chỉ một số loại cây có quả hạch và có chứa hạt cứng. Trong tiếng Pháp, cherry được gọi là cerise, điều thú vị là trái “sơ ri” của Việt Nam được lấy tên từ', '2017-12-18 19:09:56'),
(10, ' Loại quả này có hình dáng rất giống quả anh đào n', ' Loại quả này có hình dáng rất giống quả anh đào nhưng chúng lại không hề có họ hàng với nhau. Có rất nhiều chủng loại cherry khác nhau nhưng chỉ có khoảng 15 giống là được trồng nhiều vào mục đích thương mại. Cherry Úc thường được thu hoạch từ cuối tháng', '2017-12-18 19:10:30'),
(11, 'Các nhà khoa học đã gọi cherry là “siêu trái cây” ', 'Các nhà khoa học đã gọi cherry là “siêu trái cây” nhờ vào thành phần dinh dưỡng và tác dụng bất ngờ của trái Cherry đối với sức khỏe con người. Một số các nghiên cứu hiện đại đã chỉ ra rằng loại quả này có tác dụng đặc biệt trong việc ngăn ngừa ung thư, t', '2017-12-18 19:10:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_d` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `keywords_seo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `description_d`, `image`, `price`, `keywords_seo`, `date`) VALUES
(32, 'Tomato Kumato', '', 'rsz_tomate_cumato.jpg', 7, 'tomato', '2017-12-22 08:47:18'),
(33, 'Tomato Arawak', '', 'rsz_ara.jpg', 6, '', '2017-12-28 08:04:31'),
(34, 'Tomato Yellow', '', 'rsz_2yellow.jpg', 10, 'tomato, kumato1', '2017-12-28 10:03:42'),
(35, 'Tomato cherries', '', 'rsz_tomacheri.png', 7, 'tomato, kumato', '2017-12-28 10:02:58'),
(38, 'White Cherry', '', 'Webp.net-resizeimage-7.jpg', 0, '', '2017-12-23 22:30:57'),
(39, 'Cherry Lapins', '', 'Webp.net-resizeimage-2.jpg', 10, '', '2017-12-23 21:15:01'),
(40, 'Apples Pink Lady', '', 'Webp.net-resizeimage-3.jpg', 10, '', '2017-12-23 21:18:14'),
(41, 'Cucumbers', '', 'Webp.net-resizeimage-5.jpg', 10, '', '2017-12-28 10:03:55'),
(42, 'Eggplant', '', 'Webp.net-resizeimage-6.jpg', 4, '', '2017-12-28 10:03:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `date`) VALUES
(3, 'Slider 3', 'picture3.jpg', '2017-12-17 17:30:20'),
(4, 'Slider 4', 'picture4.jpg', '2017-12-17 17:30:20'),
(5, 'Slider 1', 'Webp.net-resizeimage-12.jpg', '2017-12-27 09:28:14'),
(6, 'Slider 2', 'Webp.net-resizeimage-10.jpg', '2017-12-27 09:19:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `titles`
--

CREATE TABLE `titles` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `titles`
--

INSERT INTO `titles` (`id`, `title`) VALUES
(1, 'We implement new technologies \r\nfor agriculture growth'),
(2, 'Testimonials'),
(3, 'Our products\r\n'),
(4, 'News'),
(5, 'Deltail Product:'),
(6, 'Support!'),
(7, 'Related products'),
(8, 'Our most respected clients');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
