-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 02:14 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `number_phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `type_payment` tinyint(3) NOT NULL COMMENT '1: Trả tiền khi nhận hàng \r\n2: Chuyển khoản ngân hàng \r\n3: Thanh toán Online\r\n',
  `quantity` int(11) NOT NULL,
  `total` decimal(11,0) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Đơn hàng mới\r\n1: Đơn hàng đã chuẩn bị\r\n2: Đang giao hàng\r\n3: Đã giao thành công',
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_user`, `id_product`, `number_phone`, `address`, `email`, `full_name`, `type_payment`, `quantity`, `total`, `status`, `create_at`) VALUES
(1, 1, 1, '012345678', 'Giữa Hồ Tây Hà Nội', 'nguyenvana@gmail.com', 'Nguyễn Văn A', 1, 5, 50000, 0, '2023-11-16'),
(2, 1, 1, '', '', '', '', 2, 10, 10000, 2, '2023-11-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id_bill_deatail` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `total` decimal(11,0) NOT NULL,
  `img_product` varchar(50) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `price_product` decimal(11,0) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id_bill_deatail`, `id_bill`, `quantity`, `total`, `img_product`, `name_product`, `price_product`, `id_product`) VALUES
(1, 1, 2, 50000, '', '', 0, 1),
(2, 1, 1, 10000, '', '', 0, 2),
(3, 2, 2, 60000, '', '', 0, 3),
(4, 2, 3, 120000, '', '', 0, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `img_product` varchar(50) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price_product` decimal(11,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(50) NOT NULL,
  `desc_category` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0: Còn hàng\r\n1: Hết hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `desc_category`, `status`) VALUES
(1, 'Bánh', 'Gồm nhiều loại', 0),
(2, 'Kẹo ngọt', 'Gồm nhiều kẹo a', 1),
(3, 'Khô bò', 'Dai ngon ', 1),
(4, 'Snack', '', 0),
(5, 'Đồ ăn vặt khô', '', 0),
(6, 'Đồ ăn vặt ', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `create_at` date NOT NULL,
  `rate` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0: Hiển thị\r\n1: Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `id_user`, `id_product`, `content`, `create_at`, `rate`, `status`) VALUES
(1, 1, 1, 'Ngon quá bạn ơi', '2023-11-15', 0, 0),
(2, 2, 1, 'Không non bạn ơi', '2023-11-08', 0, 1),
(3, 1, 4, 'Haha', '2023-11-16', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discount`
--

CREATE TABLE `discount` (
  `id_discount` int(11) NOT NULL,
  `name_discount` varchar(100) NOT NULL,
  `percent_discount` tinyint(2) NOT NULL,
  `active` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0: Hiệu lực\r\n1: Hết hiệu lực',
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `discount`
--

INSERT INTO `discount` (`id_discount`, `name_discount`, `percent_discount`, `active`, `create_at`) VALUES
(1, 'Black Friday', 60, 1, '2023-11-15'),
(2, 'Chào thánh 12', 40, 0, '2023-11-19'),
(3, '15.12', 40, 1, '2023-11-17'),
(4, '20.11', 20, 0, '2023-11-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `desc_product` text NOT NULL,
  `image_product` varchar(50) NOT NULL,
  `price_product` decimal(11,0) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0: Còn hàng\r\n1: Hết hàng',
  `quantity` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name_product`, `desc_product`, `image_product`, `price_product`, `status`, `quantity`, `id_category`, `id_discount`) VALUES
(20, 'Bắp mắm tỏi ớt', 'Những hạt bắp biến tấu giòn tan hoà quyện vào lớp mắm ớt đậm đà khiến bạn sẽ ngất ngây. Cả gia đình vừa nhâm nhi những hạt bắp vừa xem phim thư giản vào buổi tối thì còn gì bằng.\r\n\r\nBắp làm từ 100% thiên nhiên + thêm muối + đường + tỏi + ớt + nước mắm đặc biệt', 'bắp.jpg', 0, 0, 0, 4, 0),
(21, 'Bí đỏ', 'Snack bánh phồng giòn ngon, thơm thơm kích thích vị giác vô cùng. Snack Oishi 73g hấp dẫn, phù hợp vừa xem phim, vừa nghe nhạc vừa nhâm nhi thưởng thức. Snack Oishi tiện lợi, nhỏ gọn, dễ mang theo cho các buổi hoạt động ngoài trời.', 'bí.jpg', 0, 0, 0, 4, 0),
(22, 'Pho mát', 'Snack bánh phồng giòn ngon, thơm thơm kích thích vị giác vô cùng. Snack Oishi 73g hấp dẫn, phù hợp vừa xem phim, vừa nghe nhạc vừa nhâm nhi thưởng thức. Snack Oishi tiện lợi, nhỏ gọn, dễ mang theo cho các buổi hoạt động ngoài trời.', 'pho mát.jpg', 1, 0, 1, 1, 0),
(23, 'Bim bim đùi gà', 'Bim bim đùi gà bịch, cam kết hàng đúng mô tả, chất lượng đảm bảo, an toàn đến sức khỏe người sử dụng.', 'bimbim đùi gà.jpg', 0, 0, 0, 1, 0),
(24, 'Bim bim sò hành', 'Snack bim bim sò hành có hình dáng bắt mắt vị mằn mặn, ngọt ngọt thơm vị hành, hơi cay nhẹ kích thích vị giác, ăn hoài không biết chán, siêu nghiện.\r\n\r\nSản phẩm snack sò mắm hành rất thích hợp nhâm nhi khi học bài, làm việc hay xem phim cùng bạn bè và gia đình hoặc làm mồi bén khi nhậu lai rai.', 'bimbim sò hành.jpg', 0, 0, 0, 1, 0),
(25, 'Bim bim cánh gà', 'Bim bim cánh gà bịch 20 gói 25g, cam kết hàng đúng mô tả, chất lượng đảm bảo, an toàn đến sức khỏe người sử dụng.', 'bim cánh gà.jpg', 0, 0, 0, 1, 0),
(26, 'Snack Cua', 'Snack bánh phồng giòn ngon, thơm thơm kích thích vị giác vô cùng. Snack Oishi 73g hấp dẫn, phù hợp vừa xem phim, vừa nghe nhạc vừa nhâm nhi thưởng thức. Snack Oishi tiện lợi, nhỏ gọn, dễ mang theo cho các buổi hoạt động ngoài trời.', 'snack cua.jpg', 0, 0, 0, 4, 0),
(27, 'Bim bim tôm cay', 'Snack bánh phồng giòn ngon, thơm thơm kích thích vị giác vô cùng. Snack Oishi 73g hấp dẫn, phù hợp vừa xem phim, vừa nghe nhạc vừa nhâm nhi thưởng thức. Snack Oishi tiện lợi, nhỏ gọn, dễ mang theo cho các buổi hoạt động ngoài trời.', 'Oishi Tôm cay.jpg', 0, 0, 0, 4, 0),
(28, 'Khô Gà bơ tỏi', 'Khô gà bơ với vị thơm lừng, mặn mặn, cay cay sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'khô gà bơ tỏi.jpg', 0, 0, 0, 1, 0),
(29, 'Khô gà lá chanh', 'Khô gà với vị thơm lừng, mặn mặn, cay cay sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'khô gà lá chanh.jpg', 0, 0, 0, 5, 0),
(30, 'Khô bò', 'Khô bò với vị thơm lừng, mặn mặn, cay cay sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'khô bò.jpg', 0, 0, 0, 5, 0),
(31, 'Khô gà YUKI', 'Khô gà với vị thơm lừng, mặn mặn, cay cay sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'khô gà yuki.jpg', 0, 0, 0, 5, 0),
(32, 'Khô mực', 'Khô mực với vị thơm lừng, mặn mặn, cay cay sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'khô mực.jpg', 0, 0, 0, 5, 0),
(33, 'Khô heo', 'Khô heo với vị thơm lừng, mặn mặn, cay cay sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'khô heo.jpg', 0, 0, 0, 5, 0),
(34, 'Khô gà cháy tỏi', 'Khô gà cháy tỏi với vị thơm lừng, mặn mặn, cay cay sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'khô heo cháy tỏi.jpg', 0, 0, 0, 5, 0),
(35, 'Khô heo cháy tỏi', 'Khô heo với vị thơm lừng, mặn mặn, cay cay sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'khô heo cháy tỏi.jpg', 0, 0, 0, 5, 0),
(36, 'Thịt trâu gác bếp', 'Thịt trâu với vị thơm lừng, mặn mặn, cay cay, dai dai sẽ khiến bạn cảm giác tê tái khi ăn miếng đầu tiên. Hơn nữa, nó đã được chế biến kỹ càng nên rất dễ bảo quản và mang đi mà không cần cất trữ tủ lạnh.', 'Thịt trâu gác bếp.jpg', 0, 0, 0, 5, 0),
(37, 'Chân gà', 'CHÂN GÀ CAY muối cay đặc sản Phúc Kiến luôn được các bạn trẻ Trung Quốc cực kì yêu thích. Đây là một món nhắm không thể thiếu trên các bàn nhậu của các anh các chị.', 'chân gà.jpg', 0, 0, 0, 6, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `number_phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0: Đang hoạt dộng\r\n1: Vô hiệu',
  `permissions` tinyint(3) NOT NULL DEFAULT 0 COMMENT '\r\n1: Quản trị viên\r\n2: Nhân viên\r\n3: Khách hàng',
  `full_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `image`, `number_phone`, `address`, `status`, `permissions`, `full_name`) VALUES
(1, 'nguyentien', 'nguyentien2905', 'tiennkph38127@fpt.edu.vn', 'tải xuống (1).jfif', '0', '', 1, 1, 'nguyentien'),
(2, 'nguyentien1', 'nguyentien2905', 'tiennkph38127@fpt.edu.vn', 'xiaomi-13-pro-thumb-1-2-600x600.jpg', '0', '', 0, 1, 'nguyentien1'),
(3, 'nguyentien2', 'nguyentien2905', 'tiennkph38127@fpt.edu.vn', 'xiaomi-13-pro-thumb-1-2-600x600.jpg', '012345678', 'So 2 Nguyen Xa', 0, 1, 'nguyentien2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id_bill_deatail`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id_bill_deatail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `discount`
--
ALTER TABLE `discount`
  MODIFY `id_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
