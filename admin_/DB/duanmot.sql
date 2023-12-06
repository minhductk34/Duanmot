-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 02:42 PM
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
  `type_payment` tinyint(3) DEFAULT NULL COMMENT '1: Trả tiền khi nhận hàng \r\n2: Chuyển khoản ngân hàng \r\n3: Thanh toán Online\r\n',
  `quantity` int(11) NOT NULL,
  `total` decimal(11,0) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Đơn hàng mới\r\n1: Đơn hàng đã chuẩn bị\r\n2: Đang giao hàng\r\n3: Đã giao thành công',
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_user`, `id_product`, `number_phone`, `address`, `email`, `full_name`, `type_payment`, `quantity`, `total`, `status`, `create_at`) VALUES
(1, 1, 1, '012345678', 'Giữa Hồ Tây Hà Nội', 'nguyenvana@gmail.com', 'Nguyễn Văn A', 1, 5, 50000, 4, '2023-11-16'),
(2, 1, 1, '', '', '', '', 1, 10, 10000, 0, '2023-11-01');

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
  `quantity` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `total_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user`, `id_product`, `quantity`, `id_bill`, `total_cart`) VALUES
(80, 1, 22, 1, 0, 0),
(81, 1, 26, 1, 0, 0),
(87, 1, 21, 1, 0, 0),
(88, 1, 21, 1, 0, 0),
(89, 1, 21, 1, 0, 0),
(90, 1, 21, 1, 0, 0);

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
(7, 'Apple ', 'Táo là một loại trái cây cực kỳ ngon và giòn với lượng chất xơ, chất chống oxy hóa và polyphenol dồi dào. Việc bổ sung táo vào chế độ ăn uống đã được chứng minh là làm giảm nguy cơ mắc bệnh tim, đái tháo đường typ II, tăng lipid máu, giảm táo bón ở trẻ. Vì thế, bằng cách thêm táo vào chế độ ăn uống hàng ngày, cả gia đình có thể bổ sung thêm vitamin, khoáng chất cực kì tốt cho sức khỏe.', 0),
(8, 'Orange', 'Cam là một nguồn tuyệt vời của vitamin C. Ngoài ra quả cam còn cung cấp nhiều canxi, kali, chất xơ và folate, khiến chúng trở thành một lựa chọn bổ dưỡng.', 0),
(9, 'Grapes', 'Nho là loại quả có nhiều vitamin, chất xơ, khoáng chất… Với hàm lượng cao các loại chất dinh dưỡng và chất chống oxy hóa, nho đem lại nhiều lợi ích cho sức khỏe con người.', 0),
(10, 'Pear', 'Quả lê có tính mát, hơi chua, có tác dụng thanh nhiệt, nhuận phế, tiêu đờm, giảm ho; đồng thời có tác dụng thanh tâm giáng hỏa, dưỡng huyết sinh tân, nhuận trường, tiêu độc.', 0),
(11, 'Guava ', 'Quả ổi chứa nhiều vitamin C hơn cả quả cam. Ổi có lượng vitamin C gấp 4 lần quả cam cùng trọng lượng. Đối với cơ thể, vitamin C không chỉ cải thiện quá trình chữa lành vết thương mà còn cải thiện sự hấp thụ sắt và bảo vệ hệ miễn dịch.', 0),
(12, 'Cherry', 'Cherry chứa 100 calorine và 15% nhu cầu vitamin C hàng ngày của cơ thể. Không những vậy, Cherry  có lợi ích đối với sức khỏe con người.', 0);

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
(2, 2, 1, 'Không non bạn ơi', '2023-11-08', 0, 0),
(3, 1, 4, 'Haha', '2023-11-16', 0, 0);

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
  `id_product` int(11) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `desc_product` text NOT NULL,
  `image_product` varchar(50) NOT NULL,
  `price_product` decimal(11,0) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0: Còn hàng\r\n1: Hết hàng',
  `quantity` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `desc_product`, `image_product`, `price_product`, `status`, `quantity`, `id_cat`, `id_discount`) VALUES
(40, 'Mini Apple - Cheon Hong Korea', 'MINI APPLES – CHEON HONG\r\nKOREA\r\n Sangju is the name of a city in Gyeongsangbuk-do province, located in the center of Korea. This place is the homeland of the famous Hong Deo, also known as the famous Korean wind-hanging rose.\r\n Korean Mini Cheon Hong Apples, also known as SangJu Fuji Apples, are another representative of the famous specialties of this Sangju region. The apple is small, like a Rockit apple but redder, fragrant, crunchy and very sweet. Because apples are grown completely naturally, the yield is quite low and so they are packaged in 500 gram plastic boxes.\r\n This is another special gift of Klever Fruit from the legendary Sangju land. Customers can buy to enjoy or give as a gift when mixing a box of apples into Klever Fruit\'s gift basket or fruit gift box. It will make that gift classy and unique.', 'Mini Apple.png', 450000, 0, 100, 7, 0),
(41, 'Japanese Ohrin apple', '- Origin: Aomori Province - Japan, home of clean apples. Klever Fruits is proud to be one of two official importers and distributors of Japanese Aomori apples in the Vietnamese market.\r\n- Season: From October to August of the following year\r\n- Characteristics:\r\n\r\n+ Each apple from the Aomori region exported to Vietnam does not use any chemicals or preservatives \r\n+ Aomori apples must go through 10 stages and strict procedures from fruit set to harvest. In order to produce fruit, farmers will carefully select and cut off small flowers and fruits to concentrate nutrients for the best development of large fruits. At the same time, each apple is also carefully wrapped by hand to prevent Insects and fungal diseases penetrate and apples have enough conditions to grow naturally instead of using pesticides. \r\n+ When the apples are big, they will absorb sunlight thanks to reflective panels to help the apples have beautiful and even colors throughout the fruit.', 'Japanese Ohrin apple.jpg', 511000, 0, 100, 7, 0),
(46, 'Sweet green apple - American Green Dragon', '- Xuất xứ:  tại Mỹ\r\n- Mùa vụ: cuối thu sang đông\r\n- Đặc điểm sản phẩm: \r\n\r\n+ Táo Green Dragon có hình dạng từ thuôn, tròn, đến hình nón với thân mảnh mai, màu nâu sẫm.\r\n\r\n+ Vỏ táo mỏng có khả năng chống lại vết thâm và có màu vàng xanh, sáng bóng và mịn, điểm xuyết những đốm tàn nhang nhỏ li ti màu nâu.\r\n\r\n+ Bên dưới bề mặt, thịt quả có màu trắng, mọng nước và giòn, bao bọc một lõi ở giữa có một vài hạt hình bầu dục màu nâu sẫm.\r\n\r\n+ Táo Green Dragon rất thơm và có hàm lượng axit thấp tạo ra một hương vị rất ngọt ngào với hương thơm của dứa và lê.\r\n\r\n- Thông tin dinh dưỡng:\r\n\r\nTáo Green Dragon là một nguồn cung cấp chất xơ để điều chỉnh đường tiêu hóa, kali để cân bằng lượng chất lỏng trong cơ thể, và vitamin A và C để tăng cường hệ thống miễn dịch, giảm viêm và tăng cường sản xuất collagen. Táo cũng cung cấp anthocyanins, sắc tố bên trong thịt có chứa các đặc tính giống như chất chống oxy hóa để bảo vệ tế bào chống lại tác hại của các gốc tự do, và một lượng boron, vitamin E, vitamin K, canxi, phốt pho, magiê, sắt và đồng khác.', 'Sweet green apple - American Green Dragon.jpg', 447000, 0, 100, 7, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `type`) VALUES
(1, 'Medium'),
(2, 'Large');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_box`
--

CREATE TABLE `type_box` (
  `id_box` int(11) NOT NULL,
  `type_box` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `type_box`
--

INSERT INTO `type_box` (`id_box`, `type_box`) VALUES
(1, 'Hộp Giấy'),
(2, 'Hộp Kính');

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
(3, 'nguyentien2', 'nguyentien2905', 'tiennkph38127@fpt.edu.vn', 'xiaomi-13-pro-thumb-1-2-600x600.jpg', '012345678', 'So 2 Nguyen Xa', 1, 1, 'nguyentien2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variant_product`
--

CREATE TABLE `variant_product` (
  `id_variant` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_box` int(11) NOT NULL,
  `name_variant` varchar(100) NOT NULL,
  `quantity` int(5) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0: Còn hàng\r\n1: Hết hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `type_box`
--
ALTER TABLE `type_box`
  ADD PRIMARY KEY (`id_box`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `variant_product`
--
ALTER TABLE `variant_product`
  ADD PRIMARY KEY (`id_variant`);

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
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type_box`
--
ALTER TABLE `type_box`
  MODIFY `id_box` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `variant_product`
--
ALTER TABLE `variant_product`
  MODIFY `id_variant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
