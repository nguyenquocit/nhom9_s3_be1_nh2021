-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2022 at 10:27 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom10`
--

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namesp` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `soluong` int(100) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `namesp`, `image`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 'dt oppo', 'abc', 250000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(2, 'SAMSUNG'),
(3, 'REALME'),
(4, 'NOKIA'),
(5, 'APPLE'),
(11, 'nhom9');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descriotion` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `descriotion`, `feature`, `created_at`) VALUES
(2, 'dien thoai oppo a53', 2, 1, 4700000, 'oppo-find-x3-pro-5g-1-780x433-1 (1).jpg', 'OPPO đã làm khuynh đảo thị trường smartphone khi cho ra đời chiếc điện thoại OPPO Find X3 Pro 5G. Đây là một sản phẩm có thiết kế độc đáo, sở hữu cụm camera khủng, cấu hình thuộc top đầu trong thế giới Android.', 1, '2020-11-11 03:55:45'),
(3, 'Điện thoại iPhone 13 mini 512GB', 3, 1, 30990000, 'iphone-13mini-1020x570.jpg', 'iPhone 13 mini 512GB là chiếc điện thoại có thiết kế nhỏ gọn, ngoại hình khá là dễ thương khi nằm gọn trong bàn tay nhưng lại gây bất ngờ hơn nữa với sức mạnh hiệu năng đáng kinh ngạc, màn hình OLED siêu nét cùng camera nhiếp ảnh chuyên nghiệp.', 1, '2021-03-25 03:55:45'),
(4, 'Điện thoại Samsung Galaxy Z Flip3 5G 128GB', 1, 1, 23990000, 'samsung-galaxy-z-flip-3-violet-gc-org.jpg', 'Trong sự kiện Galaxy Unpacked hồi 11/8, Samsung đã chính thức trình làng mẫu điện thoại màn hình gập thế hệ mới mang tên Galaxy Z Flip3 5G 128GB. Đây là một siêu phẩm với màn hình gập dạng vỏ sò cùng nhiều điểm cải tiến và thông số ấn tượng, sản phẩm chắc chắn sẽ thu hút được rất nhiều sự quan tâm của người dùng, đặc biệt là phái nữ.', 0, '2020-11-12 03:55:45'),
(5, 'Điện thoại Nokia 6300 4G ', 4, 1, 1090000, 'vi-vn-nokia-6300-4g-thietke-1.jpg', 'Thương hiệu Nokia vẫn phát huy nét đẹp hoài cổ trong ngoại hình nhưng đâu đó pha lẫn chút hiện đại từ những cải tiến công nghệ, Nokia 6300 4G chính là ví dụ điển hình ấy.', 0, '2021-06-16 03:55:45'),
(6, 'Điện thoại Realme 8 ', 5, 1, 7290000, 'realme-8-thumbvideo-780x433.jpg', 'Điện thoại Realme 8 được ra mắt nằm trong phân khúc tầm trung, có thiết kế đẹp mắt đặc trưng của Realme, smartphone trang bị hiệu năng bên trong đầy mạnh mẽ và có dung lượng pin tương đối lớn.', 0, '2021-07-23 03:55:45'),
(7, 'Điện thoại OPPO Reno6 Z 5G ', 2, 1, 9490000, 'oppo-reno6-z-5g-280721-11481111.jpg', 'Reno6 Z 5G đến từ nhà OPPO với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong. Đặc biệt, chiếc điện thoại được hãng đánh giá “chuyên gia chân dung bắt trọn mọi cảm xúc chân thật nhất”, đây chắc chắn sẽ là một “siêu phẩm\" mà bạn không thể bỏ qua.', 1, '2021-01-15 03:55:45'),
(8, 'Điện thoại iPhone 12 128GB', 3, 1, 23490000, 'iphone-12-128gb-281120-1020380.jpg', 'Apple đã trình diện đến người dùng mẫu điện thoại iPhone 12 128GB với sự tuyên bố về một kỷ nguyên mới của iPhone: iPhone 5G siêu nhanh, nâng cấp về màn hình và hiệu năng hứa hẹn đây sẽ là smartphone cao cấp đáng để mọi người đầu tư sở hữu. ', 1, '2021-04-08 03:55:45'),
(9, 'Điện thoại Nokia 150 (2020)', 4, 1, 680000, '-nokia-150-2020-tinhnang.jpg', 'Nokia 150 (2020) là phiên bản tiếp theo của Nokia 150 (2017) đã rất thành công trước đó. Được cải tiến nhiều nhất về thiết kế, nâng cấp bộ nhớ danh bạ đến 800 số và có bàn phím T9 lớn hơn dễ sử dụng.', 0, '2021-07-14 03:55:45'),
(10, 'Điện thoại Realme C21-Y 3GB ', 5, 1, 3490000, 'realme-c21-y-3gb637703508429839250.jpg', 'Realme C21-Y 3 GB là chiếc điện thoại nằm ở phân khúc giá rẻ với điểm nhấn thiết kế hình học sang trọng, bộ 3 camera chất lượng, hiệu năng đáp ứng khá tốt các nhu cầu và thời lượng pin tương đối dài hứa hẹn mang đến cho người dùng những trải nghiệm ấn tượng.', 1, '2020-12-16 03:55:45'),
(18, 'Điện thoại Samsung Galaxy Z Fold3 5G 256GB', 2, 1, 41990000, 'samsung-galaxy-z-fold-3-slider-tong-quan-1020x570 (1).jpg', 'Galaxy Z Fold3 5G, chiếc điện thoại được nâng cấp toàn diện về nhiều mặt, đặc biệt đây là điện thoại màn hình gập đầu tiên trên thế giới có camera ẩn (08/2021). Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.', 1, '2021-12-20 14:41:55'),
(19, 'Laptop Acer Nitro 5 Gaming', 2, 3, 28190000, 'acer-nitro-gaming-an515-57-727j-i7-nhqd9sv005-250721-0326472.jpg', 'Acer Nitro 5 Gaming AN515 57 727J i7 (NH.QD9SV.005.) sở hữu vẻ ngoài cá tính, nổi bật và được tích hợp bộ vi xử lý Intel thế hệ 11 tân tiến, card đồ hoạ rời NVIDIA GeForce RTX, hứa hẹn mang đến các trải nghiệm tuyệt vời cho người dùng.', 1, '2021-12-20 14:43:48'),
(20, 'Điện thoại Samsung Galaxy A52 128GB', 2, 1, 8990000, 'vi-vn-samsung-galaxy-a52-ip67.jpg', 'Galaxy A52 (8GB/128GB) mẫu smartphone thuộc dòng Galaxy A của Samsung, với nhiều sự thay đổi lớn về thiết kế lẫn cấu hình, cung cấp những công nghệ đột phá, thiết lập tiêu chuẩn trải nghiệm mới cho người dùng ở phân khúc tầm trung.', 1, '2021-12-20 14:46:54'),
(21, 'Điện thoại iPhone 13 Pro Max 128GB ', 5, 1, 32990000, 'iphone-13-pro-max-slider-5g-1020x570.jpg', 'iPhone 13 Pro Max 128GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', 1, '2021-12-20 14:48:48'),
(22, 'Điện thoại iPhone 12 Pro 128GB', 5, 1, 27490000, 'iphone-12-pro-xam-1-org.jpg', 'iPhone 12 Pro - \"Siêu phẩm công nghệ\" với nhiều nâng cấp mạnh mẽ về thiết kế, cấu hình và hiệu năng, khẳng định đẳng cấp thời thượng trên thị trường smartphone cao cấp.', 1, '2021-12-20 14:50:29'),
(23, 'Laptop MacBook Pro 14 M1 Pro 2021 8-core', 5, 3, 52990000, 'apple-macbook-pro-14-m1-pro-2021-1.jpg', 'Sự đẳng cấp không chỉ ở thiết kế thời thượng, sang trọng mà còn sở hữu sức mạnh siêu năng với con chip Apple M1 Pro phiên bản nâng cấp ấn tượng đến từ nhà Apple, mang đến cho bạn trải nghiệm làm việc chuyên nghiệp nhất dù là các tác vụ đồ họa - kỹ thuật chuyên sâu.', 1, '2021-12-20 14:52:20'),
(24, 'iMac 24-inch 2021 4.5K M1/512GB/16GB/8-core', 5, 4, 50990000, 'imac-24-inch-2021-45k-m1-8-gpu-blue-01.jpg', 'iMac 24-inch 2021 4.5K M1 8-core GPU mang thiết kế trẻ trung, thanh lịch, đẳng cấp, nâng tầm mọi không gian cùng với bộ cấu hình vượt trội Apple M1 8-core và màn hình Retina 4.5K hiển thị siêu nét, rực rỡ, tươi mới.', 1, '2021-12-20 14:53:51'),
(25, 'Máy tính bảng iPad Pro M1 12.9 inch WiFi 256GB', 3, 2, 33790000, 'ipad-pro-m1-129-inch-wifi-256gb-2021-xam-1-org.jpg', 'iPad Pro M1 12.9 inch Wifi 256GB (2021) là dòng máy tính bảng cao cấp của Apple với nhiều nâng cấp đáng chú ý như chip Apple M1 giống trên MacBook và màn hình mini-LED mới cùng nhiều đột phá công nghệ dẫn đầu khác mang đến trải nghiệm làm việc và giải trí đỉnh cao.', 1, '2021-12-20 14:55:40'),
(26, 'Máy tính bảng iPad Pro 12.9 inch Wifi 128GB', 4, 2, 26790000, 'ipad-pro-12-9-inch-wifi-128gb-2020-bac-1020x680-org.jpg', '', 1, '2021-12-20 14:57:03'),
(27, 'Điện thoại Nokia B10', 4, 1, 3500000, 'nokia-g10-1-3.jpg', 'ĐIỆN THOẠI NOKIA MANG PHONG THÁI THANH LỊCH', 1, '2021-12-20 14:58:40'),
(28, 'nhóm 9', 2, 1, 20000000, 'Screenshot (6).png', 'điện thoại\r\n', 1, '2021-12-21 02:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện thoại'),
(2, 'IPAD\r\n'),
(3, 'LapTop'),
(4, 'Máy Tính');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

DROP TABLE IF EXISTS `tbl_bill`;
CREATE TABLE IF NOT EXISTS `tbl_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`id`, `name`, `address`, `tel`, `email`) VALUES
(2, 'Đàng Thanh Quốc', 'Bình Thuận', 12654789, 'quocda'),
(7, 'Hồ nguyễn gia anh', 'bình thuận', 123654789, 'hngia'),
(8, 'Hồ nguyễn gia anh', 'Bình Thuận', 123654789, 'quocdang1808@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `role_id`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(3, 'dangthanhquoc', '25f9e794323b453885f5181f1b624d0b', 1),
(4, 'user1', 'e10adc3949ba59abbe56e057f20f883e', 2),
(14, 'user2', '202cb962ac59075b964b07152d234b70', 2),
(15, 'user10', '202cb962ac59075b964b07152d234b70', 2),
(16, 'thanhquoc', '25f9e794323b453885f5181f1b624d0b', 2),
(13, 'user5', '202cb962ac59075b964b07152d234b70', 2),
(17, 'nhom9', '76c5684695f1603d58e09b059ce2f008', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
