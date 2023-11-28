-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2023 at 01:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int NOT NULL,
  `brand_name` varchar(25) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(23, 'Apple'),
(27, 'Samsung'),
(30, 'Xiaomi'),
(42, 'Oppo '),
(43, 'Realme '),
(44, 'Vivo'),
(45, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `code` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int NOT NULL,
  `price_all` int NOT NULL DEFAULT '0',
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `note` text COLLATE utf8mb4_vietnamese_ci,
  `date_time` datetime NOT NULL,
  `payment` tinyint(1) NOT NULL COMMENT 'phương thức thanh toán\r\n0 thanh toán khi nhận hàng.\r\n1 tài khoản ngân hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `code`, `phone_number`, `address`, `user_id`, `price_all`, `role`, `note`, `date_time`, `payment`) VALUES
(36, 'A1hEK', '035743847', 'tiền phong', 4, 83380000, 4, '', '2023-04-15 15:24:23', 0),
(37, 'IHAaD', '035743847', 'tiền phong', 4, 48860000, 4, '', '2023-04-15 15:28:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `cart_detail_id` int NOT NULL,
  `product_id` int NOT NULL,
  `code` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `quantity` int NOT NULL,
  `total_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`cart_detail_id`, `product_id`, `code`, `quantity`, `total_price`) VALUES
(27, 12, 'A1hEK', 1, 27290000),
(28, 13, 'A1hEK', 2, 33980000),
(29, 17, 'A1hEK', 1, 22060000),
(30, 17, 'IHAaD', 2, 44120000),
(31, 20, 'IHAaD', 1, 4690000);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int NOT NULL,
  `note` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `datetime` date NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `note`, `datetime`, `product_id`, `user_id`) VALUES
(3, 'hàng hàn xẻng chất lượng thiệt!', '2023-04-16', 32, 4),
(4, 'ultraphone', '2023-04-16', 25, 4),
(5, 'hàng hàn xẻng chất lượng thiệt!', '2023-04-16', 25, 4),
(6, 'giá cao quá!', '2023-04-17', 12, 5),
(7, 'hôm nào phải mua cái', '2023-04-17', 12, 5),
(8, 'nice!', '2023-04-17', 23, 5),
(9, 'siu cấp vippro hâhh', '2023-04-17', 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int NOT NULL,
  `image_name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `view` int NOT NULL DEFAULT '0',
  `brand_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `image`, `description`, `detail`, `create_date`, `update_date`, `quantity`, `price`, `view`, `brand_id`, `status`) VALUES
(12, 'iPhone 14 Pro Max 128GB', 'anh3.jpg', ' iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.', 'iPhone năm nay sẽ được thừa hưởng nét đặc trưng từ người anh iPhone 13 Pro Max, vẫn sẽ là khung thép không gỉ và mặt lưng kính cường lực kết hợp với tạo hình vuông vức hiện đại thông qua cách tạo hình phẳng ở các cạnh và phần mặt lưng.Điểm ấn tượng nhất trên điện thoại iPhone năm nay nằm ở thiết kế màn hình, có thể dễ dàng nhận thấy được là hãng cũng đã loại bỏ cụm tai thỏ truyền thống qua bao đời iPhone bằng một hình dáng mới vô cùng lạ mắt.', '2023-04-02', '2023-04-16', 100, 27290000, 102, 23, 0),
(13, 'iPhone 13 128GB | Chính hãng VN/A', '14_1_9_2_9.jpg', 'Máy mới 100% , chính hãng Apple Việt Nam. CellphoneS hiện là đại lý bán lẻ uỷ quyền iPhone chính hãng VN/A của Apple Việt Nam iPhone 13 128GB, cáp USB-C sang Lightning 1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple : Điện Thoại Vui ASP (Apple Authorized Service Provider)', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-07', '2023-04-15', 98, 16990000, 42, 23, 0),
(14, 'iPhone 11 64GB I Chính hãng VN/A', '3_225.jpg', 'Máy mới 100% , chính hãng Apple Việt Nam. CellphoneS hiện là đại lý bán lẻ uỷ quyền iPhone chính hãng VN/A của Apple Việt Nam iPhone 13 128GB, cáp USB-C sang Lightning 1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple : Điện Thoại Vui ASP (Apple Authorized Service Provider)', 'iPhone 11 sở hữu hiệu năng khá mạnh mẽ, ổn định trong thời gian dài nhờ được trang bị chipset A13 Bionic. Màn hình LCD 6.1 inch sắc nét cùng chất lượng hiển thị Full HD của máy cho trải nghiệm hình ảnh mượt mà và có độ tương phản cao. Hệ thống camera hiện đại được tích hợp những tính năng công nghệ mới kết hợp với viên Pin dung lượng 3110mAh, giúp nâng cao trải nghiệm của người dùng.', '2023-04-08', '2023-04-14', 100, 10250000, 62, 23, 0),
(17, 'Samsung Galaxy S22 Ultra (8GB - 128GB)', 'sm-s908_galaxys22ultra_front_burgundy_211119.jpg', 'Máy, Sách hướng dẫn, Bút cảm ứng, Cây lấy sim, Cáp Type C Bảo hành chính hãng 12 tháng tại trung tâm bảo hành ủy quyền, 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ NSX', 'Đúng như các thông tin được đồn đoán trước đó, mẫu flagship mới của gả khổng lồ Hàn Quốc được ra mắt với tên gọi là Samsung Galaxy S22 Ultra với nhiều cải tiến đáng giá. Mẫu điện thoại cao cấp đến từ Samsung này có nhiều thay đổi từ thiết kế, cấu hình cho đến camera. Vậy siêu phẩm này có gì mới, giá bao nhiêu và có nên mua không? Hãy cùng tìm hiểu chi tiết ngay bên dưới nhé!  Dự kiến vào tháng 2 năm 2023, Samsung sẽ cho ra mắt siêu phẩm S23 Ultra mà có thể quý khách sẽ quan tâm! Click vào link để tìm hiểu thêm!', '2023-04-08', '2023-04-14', 97, 22060000, 35, 27, 0),
(20, 'Xiaomi Redmi Note 12', 'gtt_7766_3__1.jpg', ' Xiaomi Redmi Note 12 mang trong mình khá nhiều những nâng cấp cực kì sáng giá. Là chiếc điện thoại có màn hình lớn, tần số quét 120 Hz, hiệu năng ổn định cùng một viên pin siêu trâu.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 12 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-10', '2023-04-14', 99, 4690000, 8, 30, 0),
(21, 'OPPO Find N2 Flip', 'n2_flip_-_combo_product_-_purple.jpg', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Điện thoại × 1 Dây cáp dữ liệu × 1 (USB A - Type C) Sạc × 1 Dụng cụ lấy SIM × 1 Sách HDSD nhanh × 1 Thẻ bảo hành × 1 Thẻ VIP × 1 Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất', 'OPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng OPPO Find N2 Flip dự kiến sẽ là chiếc điện thoại khiến nhiều tín đồ công nghệ quan tâm khi sở hữu thiết kế bắt mắt, cùng màn hình ấn tượng. Đi cùng với đó là hệ thống camera của thiết bị cũng cao cấp không kém khi tích hợp đầy đủ các cảm biến, cùng đa dạng tính năng chụp ảnh.', '2023-04-14', '2023-04-14', 100, 19990000, 1, 42, 0),
(22, 'vivo Y22S 8GB 128GB', '542434226.jpg', 'OPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng OPPO Find N2 Flip dự kiến sẽ là chiếc điện thoại khiến nhiều tín đồ công nghệ quan tâm khi sở hữu thiết kế bắt mắt, cùng màn hình ấn tượng. Đi cùng với đó là hệ thống camera của thiết bị cũng cao cấp không kém khi tích hợp đầy đủ các cảm biến, cùng đa dạng tính năng chụp ảnh.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-14', NULL, 100, 5290000, 0, 44, 0),
(23, 'realme C55 6GB 128GB', 'rgrgrtyt6.jpg', ' Xiaomi Redmi Note 11 Pro 4G mang trong mình khá nhiều những nâng cấp cực kì sáng giá. Là chiếc điện thoại có màn hình lớn, tần số quét 120 Hz, hiệu năng ổn định cùng một viên pin siêu trâu.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-14', NULL, 100, 4590000, 21, 43, 0),
(24, 'realme C33 4GB 64GB', 'realme.jpg', ' Xiaomi Redmi Note 11 Pro 4G mang trong mình khá nhiều những nâng cấp cực kì sáng giá. Là chiếc điện thoại có màn hình lớn, tần số quét 120 Hz, hiệu năng ổn định cùng một viên pin siêu trâu.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-14', NULL, 100, 3390000, 4, 43, 0),
(25, 'realme 9 Pro Plus', '9_pro_plus.jpg', 'OPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng OPPO Find N2 Flip dự kiến sẽ là chiếc điện thoại khiến nhiều tín đồ công nghệ quan tâm khi sở hữu thiết kế bắt mắt, cùng màn hình ấn tượng. Đi cùng với đó là hệ thống camera của thiết bị cũng cao cấp không kém khi tích hợp đầy đủ các cảm biến, cùng đa dạng tính năng chụp ảnh.', 'Màn hình:  AMOLED6.67\"Full HD+ Hệ điều hành:  Android 11 Camera sau:  Chính 108 MP & Phụ 8 MP, 2 MP, 2 MP Camera trước:  16 MP Chip:  MediaTek Helio G96 RAM:  8 GB Dung lượng lưu trữ:  128 GB SIM:  2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 4G Pin, Sạc:  5000 mAh67 W', '2023-04-14', NULL, 100, 6290000, 6, 43, 0),
(26, 'vivo Y22S 4GB 128GB', '542434226_3.jpg', ' Xiaomi Redmi Note 11 Pro 4G mang trong mình khá nhiều những nâng cấp cực kì sáng giá. Là chiếc điện thoại có màn hình lớn, tần số quét 120 Hz, hiệu năng ổn định cùng một viên pin siêu trâu.', 'Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).  Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.  Thiết kế với nhiều đột phá  Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.  Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đ', '2023-04-14', NULL, 100, 4690000, 46, 44, 0),
(27, 'vivo Y02s 3GB 64GB', 'vivo.jpg', ' Xiaomi Redmi Note 11 Pro 4G mang trong mình khá nhiều những nâng cấp cực kì sáng giá. Là chiếc điện thoại có màn hình lớn, tần số quét 120 Hz, hiệu năng ổn định cùng một viên pin siêu trâu.', 'Màn hình:  AMOLED6.67\"Full HD+ Hệ điều hành:  Android 11 Camera sau:  Chính 108 MP & Phụ 8 MP, 2 MP, 2 MP Camera trước:  16 MP Chip:  MediaTek Helio G96 RAM:  8 GB Dung lượng lưu trữ:  128 GB SIM:  2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 4G Pin, Sạc:  5000 mAh67 W', '2023-04-14', NULL, 100, 3190000, 3, 44, 0),
(28, 'Xiaomi Redmi Note 12 Pro 5G', 'gtt7766.jpg', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Redmi Note 12 Pro 5G Sạc 67W Cáp USB Type-C Công cụ tháo SIM Vỏ bảo vệ Hướng dẫn bắt đầu nhanh Thẻ bảo hành Bảo hành 18 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuấ', 'Xiaomi Redmi Note 12 Pro sở hữu cấu hình vượt trội gồm chip MediaTek Dimensity 1080, hệ thống ba camera với cảm biến chính 50MP và mạng 5G. Ngoài ra, màn hình Note 12 Pro 5G có kích thước khá lớn khoảng 6.67 inch, tấm nền AMOLED, tần số quét 120Hz khiến chiếc điện thoại nổi bật trong tầm giá dưới 8 triệu.', '2023-04-14', NULL, 100, 9190000, 0, 30, 0),
(29, 'Xiaomi 12T', 'xiaomi-12t-xanh_1.jpg', ' Xiaomi Redmi Note 11 Pro 4G mang trong mình khá nhiều những nâng cấp cực kì sáng giá. Là chiếc điện thoại có màn hình lớn, tần số quét 120 Hz, hiệu năng ổn định cùng một viên pin siêu trâu.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-14', NULL, 100, 9490000, 0, 30, 0),
(30, 'Xiaomi Redmi 10C 4GB 128GB', 'xiaomi-redmi-10c-1-003.jpg', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Máy, Sách hướng dẫn, Cây lấy sim, Cáp Type C, Củ sạc nhanh rời đầu Type A 10W Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-14', NULL, 100, 3090000, 0, 30, 0),
(31, 'Samsung Galaxy S22 Ultra (12GB - 256GB)', 'sm-s908_galaxys22ultra_front_burgundy_211119.jpg', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Máy, Sách hướng dẫn, Cây lấy sim, Cáp Type C, Củ sạc nhanh rời đầu Type A 10W Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất.', 'Màn hình:  AMOLED6.67\"Full HD+ Hệ điều hành:  Android 11 Camera sau:  Chính 108 MP & Phụ 8 MP, 2 MP, 2 MP Camera trước:  16 MP Chip:  MediaTek Helio G96 RAM:  8 GB Dung lượng lưu trữ:  128 GB SIM:  2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 4G Pin, Sạc:  5000 mAh67 W', '2023-04-14', NULL, 100, 21490000, 0, 27, 0),
(32, 'Samsung Galaxy A34 5G 8GB 128GB', 'sm-a346_galaxy_a34_5g_awesome_silver_front.jpg', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Máy, Sách hướng dẫn, Cây lấy sim, Cáp Type C, Củ sạc nhanh rời đầu Type A 10W Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất.', 'Xiaomi Redmi Note 12 Pro sở hữu cấu hình vượt trội gồm chip MediaTek Dimensity 1080, hệ thống ba camera với cảm biến chính 50MP và mạng 5G. Ngoài ra, màn hình Note 12 Pro 5G có kích thước khá lớn khoảng 6.67 inch, tấm nền AMOLED, tần số quét 120Hz khiến chiếc điện thoại nổi bật trong tầm giá dưới 8 triệu.', '2023-04-14', NULL, 100, 8490000, 7, 27, 0),
(33, 'OPPO Reno8', 'combo_product_-_reno8_4g_-_black.jpg', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Máy, Sách hướng dẫn, Cây lấy sim, Cáp Type C, Củ sạc nhanh rời đầu Type A 10W Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-14', NULL, 100, 7490000, 0, 42, 0),
(34, 'OPPO Reno7 4G (8GB - 128GB)', 'combo_product_-_orange_-_reno7_4g.jpg', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Máy, Sách hướng dẫn, Cây lấy sim, Cáp Type C, Củ sạc nhanh rời đầu Type A 10W Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-14', NULL, 100, 6390000, 0, 42, 0),
(35, 'Nokia G22 4GB 128GB', 'dgtyi8899_.jpg', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Máy, Sách hướng dẫn, Cây lấy sim, Cáp Type C, Củ sạc nhanh rời đầu Type A 10W Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất.', 'Điểm nổi bật ở phần thiết kế của Redmi Note 11 Pro chính là cụm camera khá lớn và lồi so với mặt lưng, mặt lưng có chất liệu bằng kính đã được làm phẳng đi. Khung viền bằng nhựa cũng được bo tròn và vát phẳng rất liền mạch, mức độ hoàn thiện tốt, không có hiện tượng ọp ẹp khi mình sử dụng chiếc máy này..', '2023-04-14', NULL, 100, 3420000, 0, 45, 0),
(36, 'iPhone 14 Plus 256GB | VN/A', 'photo_2022-09-28_21-58-48_7.jpg', 'iPhone 14 Plus 256GB có kích thước màn hình là 6.7 inch, sở hữu kiểu thiết kế quen thuộc với 2 mặt kính được ép chặt bởi khung viền kim loại mang đến trải nghiệm sử dụng chắc chắn, liền lạc và có tính thẩm mỹ cao. iPhone 14 Plus còn có hệ thống camera kép mới, phát hiện sự cố, dịch vụ an toàn đầu tiên trong ngành điện thoại thông minh với SOS khẩn cấp qua vệ tinh và tuổi thọ pin tốt nhất trên iPhone. ', 'iPhone 14 Plus phiên bản 256GB chính hãng VN/A có giá khoảng 30.990.000đ tại Việt Nam (giá chưa bao gồm các chương trình khuyến mãi tại CellphoneS). Tuy nhiên, bạn có thể sở hữu được sản phẩm ưu đãi khủng với giá chỉ 24.990.000đ (mức giá áp dụng khi khách hàng thu cũ lên đời và kèm theo các ưu đãi hoàn tiền đến từ đối tác liên kết). Ngoài ra, quý khách cũng có thể tham khảo thêm bảng giá của các phiên bản khác tại website.iPhone 14 Plus khi nào ra mắt bán chính thức tại Việt Nam? iPhone 14 Plus (256GB) chính hãng VN/A ra mắt chính thức toàn cầu vào 00h00 ngày 08/09/2022. Hiện nay vẫn chưa có thông báo chính thức về ngày bán ở Việt Nam, tuy nhiên Quý Khách có thể để lại thông tin dưới phần bình luận hoặc đăng ký nhận tin sau để CellphoneS thông báo đến khách hàng SỚM NHẤT và được hưởng các chính sách ưu đãi cực lớn! Xin chân thành cảm ơn Quý Khách!', '2023-04-15', '2023-04-17', 100, 24490000, 0, 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `image`, `email`, `phone_number`, `address`, `password`, `role`) VALUES
(4, 'toanlqph', 'author.png', 'lcqtpk24315@dcctb.com', '035743847', 'tiền phong', '1234', 1),
(5, 'toan', 'user.png', 'lcqtpk24315@dcctb.com', '0987654321', '', '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `lk_cart_user` (`user_id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`cart_detail_id`),
  ADD KEY `lk_cdt_pro` (`product_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `product` (`product_id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `lk_pro_img` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `lk_pro_brand` (`brand_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `cart_detail_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `lk_cdt_pro` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `lk_pro_img` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_pro_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
