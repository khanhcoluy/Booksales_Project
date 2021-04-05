-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 05, 2020 lúc 04:24 PM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `la_bansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'doantuananh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Tuấn Anh', '0932023992', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_slug`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'DealBooks', 'dealbooks', 'DealBooks', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_parent` int(11) NOT NULL,
  `slug_category_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `meta_keywords`, `category_name`, `category_parent`, `slug_category_product`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, '<p>S&aacute;ch kinh tế - kỹ thuật</p>', 'Sách kinh tế - kỹ thuật', 0, 'sach-kinh-te-ky-thuat', '<p>S&aacute;ch kinh tế - kỹ thuật</p>', 0, NULL, NULL),
(2, '<p>Kinh tế ch&iacute;nh trị</p>', 'Kinh tế chính trị', 1, 'kinh-te-chinh-tri', '<p>Kinh tế ch&iacute;nh trị</p>', 0, NULL, NULL),
(3, '<p>S&aacute;ch khởi nghiệp</p>', 'Sách khởi nghiệp', 4, 'sach-khoi-nghiep', '<p>S&aacute;ch khởi nghiệp</p>', 0, NULL, NULL),
(4, '<p>Nghệ thuật sống t&acirc;m l&yacute;</p>', 'Nghệ thuật sống tâm lý', 0, 'nghe-thuat-song-tam-ly', '<p>Nghệ thuật sống t&acirc;m l&yacute;</p>', 0, NULL, NULL),
(5, 'Sách tâm lý', 'Sách tâm lý', 4, 'sach-tam-ly', '<p>S&aacute;ch t&acirc;m l&yacute;</p>', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_address`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(4, 'Hiếu Tấn', 'Hai bà trưng hà nội', 'tanhieu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0932023992', NULL, NULL),
(5, 'Nguyễn Tuấn Anh', 'Hai bà trưng hà nội', 'doantuananh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0932023992', NULL, NULL),
(6, 'Hoàng Bảo Bảo', '245 Nguyễn Văn Khạ, Tân An Hội .Thị trấn Củ Chi,TPHCM', 'baobao@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0932023992', NULL, NULL),
(7, 'Hoàng Lan Anh', '245 Nguyễn Văn Khạ, Tân An Hội .Thị trấn Củ Chi,TPHCM', 'lananh@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0932023992', NULL, NULL),
(8, 'dasdasd', '245 Nguyễn Văn Khạ, Tân An Hội .Thị trấn Củ Chi,TPHCM', 'dasdasd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0932023992', NULL, NULL),
(9, 'dasdas', '245 Nguyễn Văn Khạ, Tân An Hội .Thị trấn Củ Chi,TPHCM', 'dsadas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0932023992', NULL, NULL),
(10, 'Trương nhi', '245 Nguyễn Văn Khạ, Tân An Hội .Thị trấn Củ Chi,TPHCM', 'truongnhi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0932023992', NULL, NULL),
(18, 'login demo', '', 'demologin979@gmail.com', '', '0932023992', NULL, NULL),
(19, 'Hiếu Tutorial with live project', '', 'truongngoctanhieu2018@gmail.com', '', '0932023992', NULL, NULL),
(21, 'Thanh Vo', '', 'hieuchance2018@gmail.com', '', '0932023992', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_status` int(20) NOT NULL,
  `order_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `order_status`, `order_code`, `created_at`, `updated_at`) VALUES
(2, 21, 27, 1, '5dc5b', '2020-06-04 17:49:11', NULL),
(3, 21, 28, 1, 'f1f81', '2020-06-04 18:14:44', NULL),
(5, 5, 30, 2, '84e30', '2020-06-04 18:37:38', NULL),
(7, 19, 32, 1, '58959', '2020-06-04 18:59:49', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `product_coupon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_feeship` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `product_coupon`, `product_feeship`, `created_at`, `updated_at`) VALUES
(1, 'bffd4', 9, 'Sách dạy nấu ăn', '500000', 1, 'no', '10000', NULL, NULL),
(2, '5dc5b', 5, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', '500000', 1, 'no', '10000', NULL, NULL),
(3, 'f1f81', 9, 'Sách dạy nấu ăn', '500000', 1, 'no', '10000', NULL, NULL),
(4, 'ab270', 10, 'Sách tâm lý xã hội', '500000', 1, 'no', '10000', NULL, NULL),
(5, '84e30', 10, 'Sách tâm lý xã hội', '500000', 1, 'no', '10000', NULL, NULL),
(6, '8df45', 2, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', '500000', 1, 'no', '10000', NULL, NULL),
(7, '58959', 6, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', '500000', 1, 'no', '10000', NULL, NULL),
(8, '58959', 10, 'Sách tâm lý xã hội', '500000', 1, 'no', '10000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_desc` text NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `post_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sold` int(11) DEFAULT NULL,
  `product_price_sale` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_author` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_hot` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_sold`, `product_price_sale`, `product_author`, `product_quantity`, `product_slug`, `category_id`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `product_date`, `product_hot`, `created_at`, `updated_at`) VALUES
(1, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', NULL, '300000', 'Nguyễn A', '12', 'Lap-trinh-ke-hoach-kinh-doanh-hieu-qua-1', 3, 1, 'Tác giả: Brian Finch\r\nNgày xuất bản: 04-2020\r\nKích thước: 20.5 x 13.5 cm\r\nDịch giả: Skye Phan;\r\nNhà xuất bản: Nhà Xuất Bản Thanh Niên\r\nHình thức bìa: Bìa mềm\r\nSố trang: 336\r\nCân nặng: 0', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', '1 (4)30.jpg', 0, '2020-06-04 16:12:43', 1, NULL, NULL),
(2, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', NULL, '300000', 'Nguyễn B', '13', 'Lap-trinh-ke-hoach-kinh-doanh-hieu-qua-2', 2, 1, 'Tác giả: Brian Finch\r\nNgày xuất bản: 04-2020\r\nKích thước: 20.5 x 13.5 cm\r\nDịch giả: Skye Phan;\r\nNhà xuất bản: Nhà Xuất Bản Thanh Niên\r\nHình thức bìa: Bìa mềm\r\nSố trang: 336\r\nCân nặng: 0', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', 'anhsp17.jpg', 0, '2020-06-04 16:12:43', 1, NULL, NULL),
(3, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', NULL, '300000', 'Chu văn an', '14', 'Lap-trinh-ke-hoach-kinh-doanh-hieu-qua-3', 4, 1, 'Tác giả: Brian Finch\r\nNgày xuất bản: 04-2020\r\nKích thước: 20.5 x 13.5 cm\r\nDịch giả: Skye Phan;\r\nNhà xuất bản: Nhà Xuất Bản Thanh Niên\r\nHình thức bìa: Bìa mềm\r\nSố trang: 336\r\nCân nặng: 0', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', '1 (5)28.jpg', 0, '2020-06-04 16:12:43', 1, NULL, NULL),
(4, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', NULL, '300000', 'Nguyễn D', '20', 'Lap-trinh-ke-hoach-kinh-doanh-hieu-qua-4', 1, 1, 'Tác giả: Brian Finch\r\nNgày xuất bản: 04-2020\r\nKích thước: 20.5 x 13.5 cm\r\nDịch giả: Skye Phan;\r\nNhà xuất bản: Nhà Xuất Bản Thanh Niên\r\nHình thức bìa: Bìa mềm\r\nSố trang: 336\r\nCân nặng: 0', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', 'anhsp17.jpg', 0, '2020-06-04 16:12:43', 1, NULL, NULL),
(5, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', NULL, '300000', 'Nguyễn E', '30', 'Lap-trinh-ke-hoach-kinh-doanh-hieu-qua-5', 5, 1, 'Tác giả: Brian Finch\r\nNgày xuất bản: 04-2020\r\nKích thước: 20.5 x 13.5 cm\r\nDịch giả: Skye Phan;\r\nNhà xuất bản: Nhà Xuất Bản Thanh Niên\r\nHình thức bìa: Bìa mềm\r\nSố trang: 336\r\nCân nặng: 0', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', '1 (1)87.jpg', 0, '2020-06-04 16:12:43', 0, NULL, NULL),
(6, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', NULL, '300000', 'Nguyễn F', '70', 'Lap-trinh-ke-hoach-kinh-doanh-hieu-qua-6', 2, 1, 'Tác giả: Brian Finch\r\nNgày xuất bản: 04-2020\r\nKích thước: 20.5 x 13.5 cm\r\nDịch giả: Skye Phan;\r\nNhà xuất bản: Nhà Xuất Bản Thanh Niên\r\nHình thức bìa: Bìa mềm\r\nSố trang: 336\r\nCân nặng: 0', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', '159.jpg', 0, '2020-06-04 16:12:43', 0, NULL, NULL),
(7, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', NULL, '300000', 'Nguyễn G', '90', 'Lap-trinh-ke-hoach-kinh-doanh-hieu-qua-7', 1, 1, 'Tác giả: Brian Finch\r\nNgày xuất bản: 04-2020\r\nKích thước: 20.5 x 13.5 cm\r\nDịch giả: Skye Phan;\r\nNhà xuất bản: Nhà Xuất Bản Thanh Niên\r\nHình thức bìa: Bìa mềm\r\nSố trang: 336\r\nCân nặng: 0', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', '1 (3)31.jpg', 0, '2020-06-04 16:12:43', 0, NULL, NULL),
(8, 'Lập Kế Hoạch Kinh Doanh Hiệu Quả', NULL, '300000', 'Nguyễn H', '60', 'Lap-trinh-ke-hoach-kinh-doanh-hieu-qua-8', 2, 1, 'Tác giả: Brian Finch\r\nNgày xuất bản: 04-2020\r\nKích thước: 20.5 x 13.5 cm\r\nDịch giả: Skye Phan;\r\nNhà xuất bản: Nhà Xuất Bản Thanh Niên\r\nHình thức bìa: Bìa mềm\r\nSố trang: 336\r\nCân nặng: 0', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', 'anhsp176.jpg', 0, '2020-06-04 16:12:43', 0, NULL, NULL),
(9, 'Sách dạy nấu ăn', NULL, '300000', 'Chu văn an', '12', 'sach-day-nau-an', 3, 1, '<ul>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">T&aacute;c giả: Nguyễn E</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Ng&agrave;y xuất bản:&nbsp;<strong>2020-06-04 16:12:43</strong></span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">K&iacute;ch thước:&nbsp;<strong>20.5 x 13.5 cm</strong></span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Dịch giả: Nguyễn E</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Nh&agrave; xuất bản: Nh&agrave; Xuất Bản Thanh Ni&ecirc;n</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">H&igrave;nh thức b&igrave;a:&nbsp;<strong>B&igrave;a mềm</strong></span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Số trang:&nbsp;<strong>336</strong></span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">C&acirc;n nặng:&nbsp;<strong>0</strong></span></span></li>\r\n</ul>\r\n\r\n<div class=\"ddict_btn\" style=\"left:932px; top:175px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/icon/16.png\" /></div>', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', 'cam-on-vi-da-duoc-thuong-297.jpg', 0, '2020-06-04 18:00:11', 0, NULL, NULL),
(10, 'Sách tâm lý xã hội', -1, '200000', 'Chu văn an', '124', 'sach-tam-ly-xa-hoi', 5, 1, '<ul>\r\n	<li>T&aacute;c giả:&nbsp;<a href=\"http://dealbook.xyz/Lap-trinh-ke-hoach-kinh-doanh-hieu-qua.html#\">Brian Finch</a></li>\r\n	<li>Ng&agrave;y xuất bản:&nbsp;<strong>04-2020</strong></li>\r\n	<li>K&iacute;ch thước:&nbsp;<strong>20.5 x 13.5 cm</strong></li>\r\n	<li>Dịch giả: Skye Phan;</li>\r\n	<li>Nh&agrave; xuất bản: Nh&agrave; Xuất Bản Thanh Ni&ecirc;n</li>\r\n	<li>H&igrave;nh thức b&igrave;a:&nbsp;<strong>B&igrave;a mềm</strong></li>\r\n	<li>Số trang:&nbsp;<strong>336</strong></li>\r\n	<li>C&acirc;n nặng:&nbsp;<strong>0</strong></li>\r\n</ul>', '<h6>Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>\r\n\r\n<p>Khi bắt đầu th&agrave;nh lập doanh nghiệp hay mở rộng quy m&ocirc; hoạt động, lập ra một bản kế hoạch kinh doanh l&agrave; bước đi đầu ti&ecirc;n kh&ocirc;ng thể thiếu. Bản kế hoạch kinh doanh c&agrave;ng được chuẩn bị kỹ lưỡng v&agrave; l&ocirc;i cuốn bao nhi&ecirc;u, cơ hội ghi điểm trước c&aacute;c nh&agrave; đầu tư c&agrave;ng lớn bấy nhi&ecirc;u. Phải chăng, th&ocirc;ng qua bản kế hoạch kinh doanh, bạn muốn người đọc:</p>\r\n\r\n<p>- Đầu tư v&agrave;o một &yacute; tưởng kinh doanh mới hay một doanh nghiệp đang hoạt động?</p>\r\n\r\n<p>- Mua lại doanh nghiệp của bạn?</p>\r\n\r\n<p>- Tham gia li&ecirc;n doanh với bạn?</p>\r\n\r\n<p>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</p>\r\n\r\n<p>- Cấp cho bạn một khoản hỗ trợ hoặc ph&ecirc; duyệt theo quy định?</p>\r\n\r\n<p>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp của bạn?</p>\r\n\r\n<p>Cuốn s&aacute;ch &ldquo;Lập kế hoạch kinh doanh hiệu quả&rdquo; sẽ hướng dẫn bạn c&aacute;ch để tạo ra bản kế hoạch kinh doanh thu h&uacute;t mọi tổ chức t&agrave;i ch&iacute;nh, khiến họ phải đ&aacute;p ứng mong muốn của bạn v&agrave; hỗ trợ bạn tới c&ugrave;ng trong c&ocirc;ng việc kinh doanh. Th&ocirc;ng qua cuốn s&aacute;ch, bạn sẽ biết c&aacute;ch:</p>\r\n\r\n<p>Tạo ra bản kế hoạch kinh doanh ho&agrave;n chỉnh X&acirc;y dựng chiến lược hoạt động cho doanh nghiệp.</p>\r\n\r\n<p>Đưa ra dự b&aacute;o kinh doanh s&aacute;t với thực tế.</p>\r\n\r\n<p>Nắm r&otilde; c&aacute;c th&ocirc;ng tin t&agrave;i ch&iacute;nh ảnh hưởng lớn tới doanh nghiệp.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh x&acirc;y dựng kế hoạch, việc tham khảo &yacute; kiến chuy&ecirc;n gia l&agrave; điều cần thiết nhưng bạn phải l&agrave; người đ&oacute;ng g&oacute;p ch&iacute;nh v&agrave; hiểu tường tận mỗi chi tiết c&oacute; trong đ&oacute;. H&atilde;y xem việc lập kế hoạch giống như việc truyền đạt c&acirc;u chuyện của m&igrave;nh nhằm thuyết phục người đọc đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n con đường chinh phục mục ti&ecirc;u kinh doanh.</p>\r\n\r\n<p>Bạn chỉ c&oacute; một cơ hội duy nhất để tạo ấn tượng đầu ti&ecirc;n tốt đẹp. Đừng để n&oacute; vụt mất. H&atilde;y tr&igrave;nh b&agrave;y một văn bản c&oacute; t&iacute;nh thuyết phục cao, bố cục đẹp mắt, kh&ocirc;ng mắc lỗi ch&iacute;nh tả, ngữ ph&aacute;p, bao gồm c&aacute;c vấn đề trọng t&acirc;m v&agrave; cuối c&ugrave;ng l&agrave; chứa c&aacute;c th&ocirc;ng tin bổ trợ cần thiết.</p>\r\n\r\n<p>Bằng kiến thức, kinh nghiệm của m&igrave;nh, Brian Finch - một chuy&ecirc;n gia trong lĩnh vực tư vấn lập kế hoạch kinh doanh v&agrave; quản l&yacute; t&agrave;i ch&iacute;nh - chắc chắn sẽ gi&uacute;p bạn x&acirc;y dựng th&agrave;nh c&ocirc;ng kế hoạch kinh doanh của ri&ecirc;ng m&igrave;nh.</p>', '500000', 'anhsp21.jpg', 0, '2020-06-04 18:44:16', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `shipping_payment` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `shipping_method`, `shipping_payment`, `created_at`, `updated_at`) VALUES
(20, 'Hieu tấn', '412/29 KP5, Hiệp Thành,Quận 12', '0932023992', 'fdsfds@gmail.com', 'fsdfsdfsdfsdf', 1, 1, NULL, NULL),
(21, 'dadasda', '412/29 KP5, Hiệp Thành,Quận 12', 'dasdasdasd', 'dasd@gmail.com', 'dasdasdasdasd', 1, 1, NULL, NULL),
(22, 'dasdas', '245 Nguyễn Văn Khạ, Tân An Hội .Thị trấn Củ Chi,TPHCM', 'ddsadasd', 'dsadas@gmail.com', 'dasdasdasdas', 1, 1, NULL, NULL),
(23, 'Hồ tùng lâm', '412/29 KP5, Hiệp Thành,Quận 12', '0932023992', 'dsadas@gmail.com', 'dasdasdasd', 2, 2, NULL, NULL),
(24, 'Hồ tùng lâm', '412/29 KP5, Hiệp Thành,Quận 12', '0932023992', 'tunglam@gmail.com', 'Giao hàng nhanh nhé', 2, 2, NULL, NULL),
(25, 'dasdasd', '412/29 KP5, Hiệp Thành,Quận 12', 'dasdasdas', 'dsadas@gmail.com', 'dasdasda', 1, 1, NULL, NULL),
(26, 'Hieu tấn', '412/29 KP5, Hiệp Thành,Quận 12', '0932023992', 'dsadas@gmail.com', 'dasdasda', 2, 2, NULL, NULL),
(27, 'Thanh', '412/29 KP5, Hiệp Thành,Quận 12', '0932023992', 'thanh@gmail.com', 'dasdasda', 1, 1, NULL, NULL),
(28, 'Hieu tấn', '412/29 KP5, Hiệp Thành,Quận 12', '0932023992', 'dsadas@gmail.com', 'dasdasdasd', 2, 2, NULL, NULL),
(29, 'Hieu tấn', '412/29 KP5, Hiệp Thành,Quận 12', '0932023992', 'dsadas@gmail.com', 'dsadadas', 1, 1, NULL, NULL),
(30, 'Hieu tấn', '123/123', '0932023992', 'dsadas@gmail.com', 'fsdfsdf', 2, 2, NULL, NULL),
(31, 'Hieu tấn', '412/29 KP5, Hiệp Thành,Quận 12', '0932023992', 'dsadas@gmail.com', 'dasdasd', 1, 1, NULL, NULL),
(32, 'Hieu tấn', '123/123', '0932023992', 'dsadas@gmail.com', 'dadas', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_status`, `slider_image`, `slider_desc`) VALUES
(1, 'Slider 1', 1, 'slider149.jpg', 'Thông tin khuyến mãi nạp thẻ game'),
(2, 'Slider 1', 1, 'slider188.jpg', 'dasdasdasdasdasd'),
(3, 'Slider 2', 1, 'slider275.jpg', 'dsadasdas'),
(4, 'Slider 3', 0, 'slider318.jpg', 'dasdasdasd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_social`
--

INSERT INTO `tbl_social` (`user_id`, `provider_user_id`, `provider`, `user`) VALUES
(22, '108162077516942840028', 'GOOGLE', 18),
(23, '111264198467826812391', 'GOOGLE', 19),
(25, '273519280459092', 'FACEBOOK', 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tinhthanhpho`
--

CREATE TABLE `tbl_tinhthanhpho` (
  `matp` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name_city` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tbl_tinhthanhpho`
--

INSERT INTO `tbl_tinhthanhpho` (`matp`, `name_city`, `type`) VALUES
('01', 'Thành phố Hà Nội', 'Thành phố Trung ương'),
('02', 'Tỉnh Hà Giang', 'Tỉnh'),
('04', 'Tỉnh Cao Bằng', 'Tỉnh'),
('06', 'Tỉnh Bắc Kạn', 'Tỉnh'),
('08', 'Tỉnh Tuyên Quang', 'Tỉnh'),
('10', 'Tỉnh Lào Cai', 'Tỉnh'),
('11', 'Tỉnh Điện Biên', 'Tỉnh'),
('12', 'Tỉnh Lai Châu', 'Tỉnh'),
('14', 'Tỉnh Sơn La', 'Tỉnh'),
('15', 'Tỉnh Yên Bái', 'Tỉnh'),
('17', 'Tỉnh Hoà Bình', 'Tỉnh'),
('19', 'Tỉnh Thái Nguyên', 'Tỉnh'),
('20', 'Tỉnh Lạng Sơn', 'Tỉnh'),
('22', 'Tỉnh Quảng Ninh', 'Tỉnh'),
('24', 'Tỉnh Bắc Giang', 'Tỉnh'),
('25', 'Tỉnh Phú Thọ', 'Tỉnh'),
('26', 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
('27', 'Tỉnh Bắc Ninh', 'Tỉnh'),
('30', 'Tỉnh Hải Dương', 'Tỉnh'),
('31', 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
('33', 'Tỉnh Hưng Yên', 'Tỉnh'),
('34', 'Tỉnh Thái Bình', 'Tỉnh'),
('35', 'Tỉnh Hà Nam', 'Tỉnh'),
('36', 'Tỉnh Nam Định', 'Tỉnh'),
('37', 'Tỉnh Ninh Bình', 'Tỉnh'),
('38', 'Tỉnh Thanh Hóa', 'Tỉnh'),
('40', 'Tỉnh Nghệ An', 'Tỉnh'),
('42', 'Tỉnh Hà Tĩnh', 'Tỉnh'),
('44', 'Tỉnh Quảng Bình', 'Tỉnh'),
('45', 'Tỉnh Quảng Trị', 'Tỉnh'),
('46', 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
('48', 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
('49', 'Tỉnh Quảng Nam', 'Tỉnh'),
('51', 'Tỉnh Quảng Ngãi', 'Tỉnh'),
('52', 'Tỉnh Bình Định', 'Tỉnh'),
('54', 'Tỉnh Phú Yên', 'Tỉnh'),
('56', 'Tỉnh Khánh Hòa', 'Tỉnh'),
('58', 'Tỉnh Ninh Thuận', 'Tỉnh'),
('60', 'Tỉnh Bình Thuận', 'Tỉnh'),
('62', 'Tỉnh Kon Tum', 'Tỉnh'),
('64', 'Tỉnh Gia Lai', 'Tỉnh'),
('66', 'Tỉnh Đắk Lắk', 'Tỉnh'),
('67', 'Tỉnh Đắk Nông', 'Tỉnh'),
('68', 'Tỉnh Lâm Đồng', 'Tỉnh'),
('70', 'Tỉnh Bình Phước', 'Tỉnh'),
('72', 'Tỉnh Tây Ninh', 'Tỉnh'),
('74', 'Tỉnh Bình Dương', 'Tỉnh'),
('75', 'Tỉnh Đồng Nai', 'Tỉnh'),
('77', 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
('79', 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
('80', 'Tỉnh Long An', 'Tỉnh'),
('82', 'Tỉnh Tiền Giang', 'Tỉnh'),
('83', 'Tỉnh Bến Tre', 'Tỉnh'),
('84', 'Tỉnh Trà Vinh', 'Tỉnh'),
('86', 'Tỉnh Vĩnh Long', 'Tỉnh'),
('87', 'Tỉnh Đồng Tháp', 'Tỉnh'),
('89', 'Tỉnh An Giang', 'Tỉnh'),
('91', 'Tỉnh Kiên Giang', 'Tỉnh'),
('92', 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
('93', 'Tỉnh Hậu Giang', 'Tỉnh'),
('94', 'Tỉnh Sóc Trăng', 'Tỉnh'),
('95', 'Tỉnh Bạc Liêu', 'Tỉnh'),
('96', 'Tỉnh Cà Mau', 'Tỉnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_tinhthanhpho`
--
ALTER TABLE `tbl_tinhthanhpho`
  ADD PRIMARY KEY (`matp`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
