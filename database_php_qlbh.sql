-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2024 lúc 03:57 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh_12521151`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `NoiDung` text NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `DuongDan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `TieuDe`, `NoiDung`, `HinhAnh`, `DuongDan`) VALUES
(1, 'TOP 5+ LAPTOP ĐƯỢC BÁN NHIỀU NHẤT', 'Trong cuộc sống hiện đại ngày nay, việc sử dụng laptop hay máy tính bàn đã không còn xa lạ gì với mỗi chúng ta. Những thiết bị này được xem là trợ thủ đắc lực để phục vụ cho mọi người trong các hoạt động làm việc, học tập và giải trí… Nhưng nên mua máy tính bàn hay laptop thì tốt hơn, loại nào tối ưu và tiết kiệm chi phí hơn?', '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 'https://cellphones.com.vn/asus'),
(2, 'TOP 4+ Máy tính để bàn dưới 10 triệu cấu hình cao chơi game tốt nên mua', 'Hiện nay, khi thị trường công nghệ ngày càng phát triển thì các thiết bị điện tử nhỏ gọn lại càng phổ biến hơn. Tuy nhiên, sự ưa chuộng của người dùng công nghệ với sản phẩm máy tính để bàn cũng không hề giảm sút. Trong đó các thiết bị máy tính giá rẻ ở phân khúc 10 triệu đồng được yêu thích và quan tâm hơn cả.', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'https://cellphones.com.vn/xiaomi'),
(3, 'So sánh nên mua laptop hay PC để bàn dùng cái nào tốt nhất', 'Trong cuộc sống hiện đại ngày nay, việc sử dụng laptop hay máy tính bàn đã không còn xa lạ gì với mỗi chúng ta. Những thiết bị này được xem là trợ thủ đắc lực để phục vụ cho mọi người trong các hoạt động làm việc, học tập và giải trí… Nhưng nên mua máy tính bàn hay laptop thì tốt hơn, loại nào tối ưu và tiết kiệm chi phí hơn?', '/Images/Image/MACBOOK/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg', 'https://cellphones.com.vn/asus'),
(4, 'TOP 5+ Laptop cho dân xây dựng cấu hình mạnh giá rẻ đáng mua nhất', 'Laptop dành cho dân xây dựng nên chọn sản phẩm nào, cấu hình máy như thế nào cho phù hợp là điều mà rất nhiều người dùng quan tâm. Với đặc thù công việc cần xử lý nhiều tác vụ nặng nề nên việc lựa chọn sản phẩm cần thực sự cẩn thận, kỹ lưỡng.', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 'https://cellphones.com.vn/xiaomi'),
(5, 'TOP 5+ Cấu hình laptop chạy giả lập Nox tốt đáng mua nhất hiện nay', 'Giải pháp chạy NoxPlayer trình giả lập Android trên hệ thống máy tính sẽ đáp ứng được nhu cầu mở cùng lúc nhiều giả lập. Thiết bị máy tính đáp ứng được yêu cầu chạy giả lập cần có trang bị cấu hình đủ mạnh, cụ thể là CPU nhiều nhân, Ram dung lượng lớn, card đồ họa bộ nhớ từ 4GB', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'https://cellphones.com.vn/xiaomi'),
(6, 'TOP 5+ Laptop chơi GTA 5 max setting mượt giá rẻ đáng mua nhất hiện nay', 'GTA 5 là một trong những tựa game được nhiều game thủ hiện nay ưa chuộng và yêu thích. Trò chơi với tính chiến cấu cao, đồ họa hấp dẫn, lối chơi đa dạng phong phú khiến người luôn đắm chìm trong không gian game. Để chơi được mượt mà tựa game này thì người dùng cần chọn được cho mình chiếc laptop có cấu hình phù hợp. Vì thế các game thủ trước khi cài đặt trò chơi này cần tìm hiểu kỹ lưỡng về cấu hình chơi được GTA 5 laptop.', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 'https://cellphones.com.vn/xiaomi'),
(7, 'TOP 6+ Laptop chơi CSGO max setting giá rẻ không nên bỏ qua', 'CSGO là từ viết tắt của tựa game Counter-Strike: Global Offensive, đây là một trò chơi bắn súng dưới góc nhìn thứ nhất đang được cộng đồng game thủ cực yêu thích. Trò chơi lần đầu ra mắt vào năm 2012, đến nay nó vẫn duy trì được độ hót, nhận được sự đánh giá cao của nhiều người chơi. Bạn cũng đang muốn khám phá tựa game này nhưng không biết chọn cấu hình laptop chơi csgo như thế nào cho phù hợp.', '/Images/Image/MACBOOK/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg', 'https://cellphones.com.vn/xiaomi'),
(8, 'Render là gì? TOP 5+ Phần mềm rendering tốt nhất hiện nay', 'Render là một thuật ngữ dường như khá thân quen với những người dùng chuyên làm các công việc về thiết kế hoặc liên quan đến đồ họa máy tính. Với một người cần xử lý các công việc về đô họa chuyên nghiệp thì hiểu biết và nghiên cứu về render là rất quan trọng.', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'https://cellphones.com.vn/asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `IdCart` int(11) NOT NULL,
  `MaTaiKhoan` int(11) DEFAULT NULL,
  `MaSanPham` int(11) DEFAULT NULL,
  `AnhSanPham` varchar(500) NOT NULL,
  `TenSanPham` varchar(255) DEFAULT NULL,
  `Gia` bigint(20) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `TamTinh` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`IdCart`, `MaTaiKhoan`, `MaSanPham`, `AnhSanPham`, `TenSanPham`, `Gia`, `SoLuong`, `TamTinh`) VALUES
(5, 2, 14, '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', 22000000, 3, 66000000),
(7, 2, 13, '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', 11000000, 3, 33000000),
(8, 2, 15, '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 'Apple MacBook Air M1 256GB 2011 I Chính hãng Apple Việt Nam', 20000000, 2, 40000000),
(10, 1, 40, '/Images/Image/Iphone/t_m_18.png', 'iPhone 14 512GB | Chính hãng VN/A', 16000000, 1, 16000000),
(11, 2, 41, '/Images/Image/Iphone/3_51_1_7.png', 'iPhone 15 512GB | Chính hãng VN/A', 11000000, 1, 11000000),
(14, 1, 39, '/Images/Image/Iphone/iphone-15-pro-max-512gb.png', 'iPhone 14 128GB | Chính hãng VN/A', 13000000, 1, 13000000),
(15, 1, 41, '/Images/Image/Iphone/3_51_1_7.png', 'iPhone 15 512GB | Chính hãng VN/A', 11000000, 1, 11000000),
(16, 1, 12, '/Images/Image/MACBOOK/1.png', 'Apple MacBook Air M1 512GB 2020 V Chính hãng Apple Việt Nam', 22000000, 1, 22000000),
(17, 1, 12, '/Images/Image/MACBOOK/1.png', 'Apple MacBook Air M1 512GB 2020 V Chính hãng Apple Việt Nam', 22000000, 1, 22000000),
(20, 2, 43, '/Images/Image/Iphone/vn_iphone_15_pink_pdp_image_position-1a_pink_color_1_5.png', 'iPhone 11 128GB | Chính hãng VN/A', 2000, 1, 2000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadons`
--

CREATE TABLE `chitiethoadons` (
  `MaChiTietHoaDon` int(11) NOT NULL,
  `MaHoaDon` int(11) DEFAULT NULL,
  `IDSP` int(11) NOT NULL,
  `AnhSanPham` text DEFAULT NULL,
  `TenSanPham` varchar(500) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` varchar(500) NOT NULL,
  `ThanhTien` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadons`
--

INSERT INTO `chitiethoadons` (`MaChiTietHoaDon`, `MaHoaDon`, `IDSP`, `AnhSanPham`, `TenSanPham`, `SoLuong`, `DonGia`, `ThanhTien`) VALUES
(1, 10, 14, 'http://127.0.0.1:8000/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', 3, '22000000đ', '66000000đ'),
(2, 10, 13, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', 3, '11000000đ', '33000000đ'),
(3, 11, 14, 'http://127.0.0.1:8000/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', 3, '22000000đ', '66000000đ'),
(4, 11, 13, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', 3, '11000000đ', '33000000đ'),
(5, 12, 14, 'http://127.0.0.1:8000/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', 3, '22000000đ', '66000000đ'),
(6, 12, 13, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', 3, '11000000đ', '33000000đ'),
(7, 13, 14, 'http://127.0.0.1:8000/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', 3, '22000000đ', '66000000đ'),
(8, 13, 13, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', 3, '11000000đ', '33000000đ'),
(9, 14, 15, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 'Apple MacBook Air M1 256GB 2011 I Chính hãng Apple Việt Nam', 2, '20000000đ', '40000000đ'),
(10, 15, 13, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', 3, '11000000đ', '33000000đ'),
(11, 15, 15, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 'Apple MacBook Air M1 256GB 2011 I Chính hãng Apple Việt Nam', 2, '20000000đ', '40000000đ'),
(12, 16, 38, 'http://127.0.0.1:8000/Images/Image/Iphone/iphone-14-storage-select-202209-6-1inch-y889.png', 'iPhone 12 128GB | Chính hãng VN/A', 1, '10000000đ', '10000000đ'),
(13, 16, 40, 'http://127.0.0.1:8000/Images/Image/Iphone/t_m_18.png', 'iPhone 14 512GB | Chính hãng VN/A', 1, '16000000đ', '16000000đ'),
(14, 17, 15, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 'Apple MacBook Air M1 256GB 2011 I Chính hãng Apple Việt Nam', 2, '20000000đ', '40000000đ'),
(15, 17, 41, 'http://127.0.0.1:8000/Images/Image/Iphone/3_51_1_7.png', 'iPhone 15 512GB | Chính hãng VN/A', 1, '11000000đ', '11000000đ'),
(16, 17, 43, 'http://127.0.0.1:8000/Images/Image/Iphone/vn_iphone_15_pink_pdp_image_position-1a_pink_color_1_5.png', 'iPhone 11 128GB | Chính hãng VN/A', 1, '22000000đ', '22000000đ'),
(17, 18, 40, 'http://127.0.0.1:8000/Images/Image/Iphone/t_m_18.png', 'iPhone 14 512GB | Chính hãng VN/A', 1, '16000000đ', '16000000đ'),
(18, 18, 39, 'http://127.0.0.1:8000/Images/Image/Iphone/iphone-15-pro-max-512gb.png', 'iPhone 14 128GB | Chính hãng VN/A', 1, '13000000đ', '13000000đ'),
(19, 18, 41, 'http://127.0.0.1:8000/Images/Image/Iphone/3_51_1_7.png', 'iPhone 15 512GB | Chính hãng VN/A', 1, '11000000đ', '11000000đ'),
(20, 19, 43, 'http://127.0.0.1:8000/Images/Image/Iphone/vn_iphone_15_pink_pdp_image_position-1a_pink_color_1_5.png', 'iPhone 11 128GB | Chính hãng VN/A', 1, '22000000đ', '22000000đ'),
(24, 25, 14, 'http://127.0.0.1:8000/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', 3, '22000000đ', '66000000đ'),
(25, 25, 13, 'http://127.0.0.1:8000/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', 3, '11000000đ', '33000000đ'),
(26, 26, 41, 'http://127.0.0.1:8000/Images/Image/Iphone/3_51_1_7.png', 'iPhone 15 512GB | Chính hãng VN/A', 1, '11000000đ', '11000000đ'),
(27, 26, 43, 'http://127.0.0.1:8000/Images/Image/Iphone/vn_iphone_15_pink_pdp_image_position-1a_pink_color_1_5.png', 'iPhone 11 128GB | Chính hãng VN/A', 1, '10000đ', '10000đ'),
(29, 28, 43, 'http://127.0.0.1:8000/Images/Image/Iphone/vn_iphone_15_pink_pdp_image_position-1a_pink_color_1_5.png', 'iPhone 11 128GB | Chính hãng VN/A', 1, '2000đ', '2000đ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `IDCTSP` int(11) NOT NULL,
  `MaSanPham` int(11) DEFAULT NULL,
  `AnhSanPham2` varchar(255) DEFAULT NULL,
  `AnhSanPham3` varchar(255) DEFAULT NULL,
  `AnhSanPham4` varchar(255) DEFAULT NULL,
  `AnhSanPham5` varchar(255) DEFAULT NULL,
  `MoTaSanPham` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`IDCTSP`, `MaSanPham`, `AnhSanPham2`, `AnhSanPham3`, `AnhSanPham4`, `AnhSanPham5`, `MoTaSanPham`) VALUES
(1, 12, '/Images/Image/CTSP/1.png', '/Images/Image/CTSP/2.png', '/Images/Image/CTSP/3.png', '/Images/Image/CTSP/4.png', '\r\n-      Apple MacBook Air M1 512GB 2020, sản phẩm chính hãng Apple Việt Nam, đánh dấu sự chuyển mình đáng kể trong lĩnh vực máy tính xách tay. Được trang bị chip M1 tự phát triển bởi Apple, đây là một bước tiến lớn trong việc cải thiện hiệu suất và hiệu năng toàn diện của dòng sản phẩm này.     \r\n-      Chip M1 không chỉ mạnh mẽ với khả năng xử lý nhanh chóng mà còn tiết kiệm năng lượng đáng kể, giúp kéo dài thời lượng pin và tạo ra trải nghiệm sử dụng máy tính xách tay mượt mà hơn. Điều này làm cho MacBook Air M1 trở thành một trong những máy tính xách tay mỏng nhẹ và di động nhất trên thị trường hiện nay.\r\n-      Với 512GB dung lượng lưu trữ, người dùng có đủ không gian để lưu trữ dữ liệu cá nhân, ứng dụng, và tập tin đa phương tiện mà không cần phải lo lắng về việc chạy hết bộ nhớ. Bên cạnh đó, SSD có tốc độ đọc/ghi nhanh giúp máy hoạt động mượt mà và khởi động nhanh chóng.\r\n-      Màn hình của MacBook Air M1 được trang bị công nghệ Retina Display, mang lại chất lượng hình ảnh sắc nét và màu sắc chân thực. Điều này làm cho việc xem phim, chỉnh sửa hình ảnh và làm việc trên các ứng dụng đồ họa trở nên trải nghiệm thú vị và chân thực hơn.\r\n\r\n*      THÔNG TIN CẤU HÌNH SẢN PHẨM\r\n\r\n-            Loại card đồ họa:       GPU 8 nhân, 16 nhân Neural Engine\r\n-            Ổ cứng:       512GB SSD\r\n-            Kích thước màn hình:       13.3 inches\r\n-            Công nghệ màn hình:       Độ sáng 400 nits Hỗ trợ dải màu P3 True-Tone\r\n-            Dung Lượng Pin:       49.9-watt-hour lithium-polymer, củ sạc công suất 30W\r\n-            Hệ điều hành:       macOS Big Sur\r\n-            Độ phân giải màn hình:       2560 x 1600 pixels (2K)\r\n-            Cổng giao tiếp:       Two Thunderbolt / USB 4 ports\r\n-            Tính năng đặc biệt:       Ổ cứng SSD, Viền màn hình siêu mỏng, Wi-Fi 6, Bảo mật vân tay\r\n-            Kích thước:       1.61 cm x 30.41 cm x 21.24 cm\r\n-            Trọng lượng:       1.29 kg\r\n-            Trong tổng thể, MacBook Air M1 512GB 2020 là một sản phẩm đáng chú ý trong dòng máy tính xách tay cao cấp. Với hiệu suất mạnh mẽ, thiết kế mỏng nhẹ và tính năng tiện ích của hệ điều hành macOS, sản phẩm này hứa hẹn mang lại trải nghiệm sử dụng đỉnh cao cho người dùng.'),
(2, 41, '/Images/Image/CTSP/5.png', '/Images/Image/CTSP/6.png', '/Images/Image/CTSP/7.png', '/Images/Image/CTSP/8.png', '\r\niPhone 15 512GB | Chính hãng VN/A: Sức Mạnh và Hiệu Năng Vượt Trội\r\n\r\niPhone 15 512GB là một trong những sản phẩm tiêu biểu của Apple, mang đến một trải nghiệm di động vượt trội với nhiều tính năng tiên tiến và hiệu suất mạnh mẽ. Được chính thức phân phối bởi hãng tại Việt Nam, sản phẩm này không chỉ là một điện thoại thông minh mà còn là biểu tượng của sự tiên tiến và phong cách.\r\n\r\nHiệu Năng Mạnh Mẽ:\r\niPhone 15 512GB được trang bị bộ vi xử lý mạnh mẽ, giúp nó hoạt động mượt mà và nhanh chóng trong mọi tác vụ. Với chip xử lý mới nhất của Apple, sản phẩm này đảm bảo xử lý đồ họa, chơi game và các ứng dụng đa nhiệm một cách dễ dàng và hiệu quả.\r\n\r\nBộ Nhớ Lớn:\r\nVới dung lượng lưu trữ lên đến 512GB, iPhone 15 cho phép người dùng lưu trữ một lượng lớn ảnh, video, và dữ liệu cá nhân mà không cần lo lắng về không gian. Điều này giúp người dùng thoải mái tải xuống ứng dụng, lưu trữ nhiều nội dung và sử dụng điện thoại một cách linh hoạt mà không gặp trở ngại về dung lượng.\r\n\r\nMàn Hình Đẹp và Sắc Nét:\r\nMàn hình của iPhone 15 512GB là một trong những điểm nhấn đáng chú ý. Với công nghệ hiển thị tiên tiến, màn hình Retina XDR cung cấp hình ảnh sắc nét, màu sắc sống động và độ tương phản cao. Điều này tạo điều kiện tuyệt vời cho việc xem phim, chơi game và duyệt web trên điện thoại.\r\n\r\nChất Lượng Ảnh Và Video Tuyệt Vời:\r\niPhone 15 512GB trang bị camera chất lượng cao, giúp người dùng chụp ảnh và quay video với độ phân giải cao và chất lượng hình ảnh xuất sắc. Tính năng chụp ảnh ban đêm cũng được cải thiện, mang lại những bức ảnh sáng hơn và rõ nét ngay cả trong điều kiện ánh sáng yếu.\r\n\r\nThiết Kế Sang Trọng:\r\nThiết kế của iPhone 15 512GB tiếp tục mang đậm dấu ấn của Apple với vẻ ngoài tinh tế và sang trọng. Với vật liệu chất lượng cao và sự chăm chút trong từng chi tiết, sản phẩm này không chỉ là một công cụ di động mà còn là một biểu tượng của sự phong cách và đẳng cấp.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmucs`
--

CREATE TABLE `chuyenmucs` (
  `MaChuyenMuc` int(11) NOT NULL,
  `MaChuyenMucCha` int(11) DEFAULT NULL,
  `TenChuyenMuc` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NoiDung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyenmucs`
--

INSERT INTO `chuyenmucs` (`MaChuyenMuc`, `MaChuyenMucCha`, `TenChuyenMuc`, `NoiDung`) VALUES
(1, 1, 'MACBOOK', 'Chuyên mục dành cho máy tính Macbook'),
(2, 1, 'ASUS', 'Chuyên mục dành cho máy tính ASUS'),
(4, 1, 'DELL', 'Chuyên mục dành cho máy tính DELL'),
(5, 1, 'MSI', 'Chuyên mục dành cho máy tính MSI'),
(6, 2, 'Iphone', 'Chuyên mục dành cho điện thoại Iphone'),
(7, 2, 'Panasonic', 'Chuyên mục dành cho điện thoại Panasonic'),
(8, 2, 'LG', 'Chuyên mục dành cho điện thoại LG'),
(9, 2, 'OPPO', 'Chuyên mục dành cho điện thoại OPPO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadons`
--

CREATE TABLE `hoadons` (
  `MaHoaDon` int(11) NOT NULL,
  `NgayTao` date DEFAULT NULL,
  `NgayDuyet` date DEFAULT NULL,
  `TongGia` decimal(18,0) DEFAULT NULL,
  `Id` int(11) DEFAULT NULL,
  `TrangThai` varchar(500) NOT NULL DEFAULT 'Đang xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadons`
--

INSERT INTO `hoadons` (`MaHoaDon`, `NgayTao`, `NgayDuyet`, `TongGia`, `Id`, `TrangThai`) VALUES
(10, '2024-04-28', '2024-05-22', 99000000, 2, 'Đã xác nhận'),
(11, '2024-04-28', '2024-05-18', 99000000, 2, 'Đang xử lý'),
(12, '2024-04-28', '2024-05-19', 99000000, 2, 'Đang xử lý'),
(13, '2024-04-28', '2024-05-23', 99000000, 2, 'Đã xác nhận'),
(14, '2024-04-28', '2024-05-24', 40000000, 2, 'Đã hủy đơn'),
(15, '2024-04-28', '2024-05-23', 73000000, 2, 'Đã xác nhận'),
(16, '2024-05-03', '2024-05-22', 26000000, 1, 'Đã xác nhận'),
(17, '2024-05-04', '2024-05-19', 73000000, 2, 'Đang xử lý'),
(18, '2024-05-17', '2024-05-22', 40000000, 1, 'Đã hủy đơn'),
(19, '2024-05-22', '2024-05-22', 22000000, 2, 'Đang xử lý'),
(25, '2024-05-23', '2024-05-23', 99000000, 2, 'Đang xử lý'),
(26, '2024-05-24', '2024-05-24', 11010000, 2, 'Đang xử lý'),
(28, '2024-05-24', '2024-05-24', 0, 2, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `Id` int(11) NOT NULL,
  `TenKH` varchar(255) NOT NULL,
  `GioiTinh` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SDT` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Id`, `TenKH`, `GioiTinh`, `DiaChi`, `Email`, `SDT`) VALUES
(1, 'Nguyễn Văn A', 'Nam', 'Dân Tiến - Khoái Châu - Hưng Yên', 'nguyenvana@gmail.com', '0987654321'),
(2, 'Nguyễn Văn Trường', 'Nam', 'Dân Tiến - Khoái Châu - Hưng Yên', 'truong2k3dev@gmail.com', '0788023724');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhangs`
--

CREATE TABLE `khachhangs` (
  `Id` int(11) NOT NULL,
  `TenKH` varchar(50) DEFAULT NULL,
  `GioiTinh` varchar(30) NOT NULL,
  `DiaChi` varchar(250) DEFAULT NULL,
  `SDT` varchar(50) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoans`
--

CREATE TABLE `loaitaikhoans` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(50) DEFAULT NULL,
  `MoTa` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoans`
--

INSERT INTO `loaitaikhoans` (`MaLoai`, `TenLoai`, `MoTa`) VALUES
(1, 'ADMIN', 'Tài khoản dành cho Admin'),
(2, 'USER', 'Tài khoản dành cho người dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_20_055700_create_test', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `id` int(11) NOT NULL,
  `AnhQuangCao` varchar(255) DEFAULT NULL,
  `LinkQuangCao` varchar(255) DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`id`, `AnhQuangCao`, `LinkQuangCao`, `MoTa`) VALUES
(1, '/Images/Image/QC/1.png', 'https://cellphones.com.vn/asus', 'Ưu đãi khi mua sản phẩm máy tính ASUS'),
(2, '/Images/Image/QC/2.png', 'https://cellphones.com.vn/samsung', 'Ưu đãi khi mua sản phẩm máy tính Samsung'),
(3, '/Images/Image/QC/3.png', 'https://cellphones.com.vn/apple', 'Ưu đãi khi mua sản phẩm Apple'),
(4, '/Images/Image/QC/4.png', 'https://cellphones.com.vn/xiaomi', 'Ưu đãi khi mua sản phẩm Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `MaSanPham` int(11) NOT NULL,
  `MaChuyenMuc` int(11) DEFAULT NULL,
  `TenSanPham` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `AnhSanPham` varchar(350) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Gia` decimal(18,0) DEFAULT NULL,
  `GiaGiam` decimal(18,0) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `SoLuongDaBan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphams`
--

INSERT INTO `sanphams` (`MaSanPham`, `MaChuyenMuc`, `TenSanPham`, `AnhSanPham`, `Gia`, `GiaGiam`, `SoLuong`, `SoLuongDaBan`) VALUES
(12, 1, 'Apple MacBook Air M1 512GB 2020 V Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/1.png', 22760000, 22000000, 30, 1234),
(13, 1, 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 12320000, 11000000, 350, 1000),
(14, 1, 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 31330000, 22000000, 130, 5000),
(15, 1, 'Apple MacBook Air M1 256GB 2011 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 22760000, 20000000, 6530, 6060),
(16, 1, 'Apple MacBook Air M1 512GB 2012 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 11110000, 10000000, 7730, 6540),
(17, 1, 'Apple MacBook Air M1 256GB 2013 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 22220000, 20000000, 7777, 6000),
(18, 1, 'Apple MacBook Air M1 512GB 2014 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 33330000, 24000000, 7730, 4560),
(19, 1, 'Apple MacBook Air M1 256GB 2015 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg', 43230000, 22000000, 930, 1000),
(20, 1, 'Apple MacBook Air M1 512GB 2020 II Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 22760000, 22000000, 30, 11000),
(21, 1, 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 12320000, 11000000, 350, 1000),
(22, 1, 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 31330000, 22000000, 130, 5000),
(23, 1, 'Apple MacBook Air M1 256GB 2011 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 22760000, 20000000, 6530, 6060),
(24, 1, 'Apple MacBook Air M1 512GB 2012 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 11110000, 10000000, 7730, 6540),
(25, 1, 'Apple MacBook Air M1 256GB 2013 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-m2-2022-xam-600x600.jpg', 22220000, 20000000, 1000, 7000),
(26, 1, 'Apple MacBook Air M1 512GB 2014 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 33330000, 24000000, 7730, 4560),
(27, 1, 'Apple MacBook Air M1 256GB 2015 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg', 43230000, 22000000, 930, 1000),
(28, 1, 'Apple MacBook Air M1 512GB 2020 VI Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 22760000, 22000000, 302, 11111),
(29, 1, 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 12320000, 11000000, 350, 1000),
(30, 1, 'Apple MacBook Air M1 512GB 2010 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 31330000, 22000000, 130, 5000),
(31, 1, 'Apple MacBook Air M1 256GB 2011 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-m2-2023-starlight-thumb-600x600.jpg', 22760000, 20000000, 6530, 6060),
(32, 1, 'Apple MacBook Air M1 512GB 2012 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 11110000, 10000000, 7730, 6540),
(38, 6, 'iPhone 12 128GB | Chính hãng VN/A', '/Images/Image/Iphone/iphone-14-storage-select-202209-6-1inch-y889.png', 54320000, 10000000, 310, 1010),
(39, 6, 'iPhone 14 128GB | Chính hãng VN/A', '/Images/Image/Iphone/iphone-15-pro-max-512gb.png', 23130000, 13000000, 320, 1011),
(40, 6, 'iPhone 14 512GB | Chính hãng VN/A', '/Images/Image/Iphone/t_m_18.png', 25210000, 16000000, 340, 1000),
(41, 6, 'iPhone 15 512GB | Chính hãng VN/A', '/Images/Image/Iphone/3_51_1_7.png', 13450000, 11000000, 7530, 1010),
(42, 6, 'iPhone 13 256GB | Chính hãng VN/A', '/Images/Image/Iphone/iphone-14-storage-select-202209-6-1inch-y889.png', 24320000, 12000000, 3330, 1010),
(43, 6, 'iPhone 11 128GB | Chính hãng VN/A', '/Images/Image/Iphone/vn_iphone_15_pink_pdp_image_position-1a_pink_color_1_5.png', 2000, 2000, 3530, 1100),
(44, 6, 'iPhone 12 128GB | Chính hãng VN/A', '/Images/Image/Iphone/t_m_18.png', 31240000, 12000000, 1230, 1100),
(45, 6, 'iPhone 13 128GB | Chính hãng VN/A', '/Images/Image/Iphone/iphone-15-pro-max-512gb.png', 33330000, 22000000, 2230, 1100),
(46, 6, 'iPhone 14 128GB | Chính hãng VN/A', '/Images/Image/Iphone/iphone-14-storage-select-202209-6-1inch-y889.png', 44440000, 32000000, 2330, 1100),
(47, 6, 'iPhone 15 128GB | Chính hãng VN/A', '/Images/Image/Iphone/3_51_1_7.png', 55550000, 42000000, 1130, 1100),
(49, 9, 'OPPO Reno8 Pro 5G 12GB 256GB', '/Images/Image/OPPO/1.png', 54320000, 10000000, 310, 1222),
(50, 9, 'OPPO Reno10 128GB', '/Images/Image/OPPO/2.png', 23130000, 13000000, 320, 1011),
(51, 9, 'OPPO Reno8 5G 8GB 256GB', '/Images/Image/OPPO/3.png', 25210000, 16000000, 340, 1000),
(52, 9, 'OPPO A58 4G 6GB 128GB', '/Images/Image/OPPO/4.png', 13450000, 11000000, 7530, 1010),
(53, 9, 'OPPO Reno8 T 5G (8GB - 128GB)', '/Images/Image/OPPO/5.png', 24320000, 12000000, 3330, 1010),
(54, 9, 'OPPO Reno10 5G 8GB 256GB', '/Images/Image/OPPO/6.png', 43210000, 22000000, 3530, 1100),
(55, 9, 'OPPO A78 4G (8GB 256GB)', '/Images/Image/OPPO/7.png', 31240000, 12000000, 1230, 1100),
(56, 9, 'OPPO Reno8 Pro 5G 12GB 256GB', '/Images/Image/OPPO/8.png', 33330000, 22000000, 2230, 1100),
(57, 9, 'OPPO Find X6 Pro', '/Images/Image/OPPO/8.png', 44440000, 32000000, 2330, 1100),
(58, 9, 'OPPO Reno8 Pro Plus', '/Images/Image/OPPO/10.png', 55550000, 42000000, 1130, 1100),
(60, 2, 'Laptop ASUS TUF Gaming F15 FX506HC-HN144W', '/Images/Image/Asus/1.png', 54320000, 10000000, 310, 1100),
(61, 2, 'Laptop Asus VivoBook 15 OLED A1505VA-L1114W', '/Images/Image/Asus/2.png', 23130000, 13000000, 320, 1011),
(62, 2, 'Laptop Asus VivoBook Go 14 E1404FA-NK177W', '/Images/Image/Asus/3.png', 25210000, 16000000, 340, 1000),
(63, 2, 'Laptop ASUS X515MA-BR481W Chính Hãng VN', '/Images/Image/Asus/4.png', 13450000, 11000000, 7530, 1010),
(64, 2, 'Laptop Asus TUF Gaming F15 FX506HE-HN377W', '/Images/Image/Asus/5.png', 24320000, 12000000, 3330, 1010),
(65, 2, 'Laptop ASUS TUF Gaming F15 FX506HC-HN144W', '/Images/Image/Asus/1.png', 54320000, 10000000, 310, 1010),
(66, 2, 'Laptop Asus VivoBook 15 OLED A1505VA-L1114W', '/Images/Image/Asus/2.png', 23130000, 12000000, 320, 1011),
(67, 2, 'Laptop Asus VivoBook Go 14 E1404FA-NK177W', '/Images/Image/Asus/3.png', 25210000, 16000000, 340, 1000),
(68, 2, 'Laptop ASUS X515MA-BR481W Chính Hãng', '/Images/Image/Asus/4.png', 13450000, 11000000, 7530, 1010),
(69, 2, 'Laptop Asus TUF Gaming F15 FX506HE-HN377W', '/Images/Image/Asus/5.png', 24320000, 12000000, 3330, 1010),
(70, 2, 'Laptop Asus VivoBook X515KA-EJ135W Chính Hãng VN', '/Images/Image/Asus/6.png', 43210000, 22000000, 3530, 1100),
(71, 2, 'Laptop Asus VivoBook Go 14 E1404FA-NK113W', '/Images/Image/Asus/7.png', 31240000, 12000000, 1230, 1100),
(72, 2, 'Laptop Asus TUF GAMING F15 FX506HF-HN014W', '/Images/Image/Asus/8.png', 33330000, 22000000, 2230, 1100),
(73, 2, 'Laptop ASUS Gaming TUF FX506LHB-HN188W', '/Images/Image/Asus/9.png', 44440000, 32000000, 2330, 1100),
(74, 2, 'Laptop Asus E210MA GJ537W Chính Hãng VN', '/Images/Image/Asus/10.png', 55550000, 42000000, 1130, 1100),
(75, 8, 'Smart Tivi LG 4K 65 inch 65UR7550PSC Chính Hãng VN', '/Images/Image/LG/1.png', 54320000, 10000000, 310, 1010),
(76, 8, 'Smart Tivi NanoCell LG 4K 43 inch 43NANO76SQA Chính Hãng VN', '/Images/Image/LG/2.png', 23130000, 13000000, 320, 1011),
(77, 8, 'Smart Tivi LG 4K 55 inch 55UQ7550PSF Chính Hãng VN', '/Images/Image/LG/3.png', 25210000, 16000000, 340, 1000),
(78, 8, 'Smart Tivi LG 4K 65 inch 65UR7550PSC Chính Hãng VN', '/Images/Image/LG/1.png', 54320000, 10000000, 310, 1010),
(79, 8, 'Smart Tivi NanoCell LG 4K 43 inch 43NANO76SQA Chính Hãng VN', '/Images/Image/LG/2.png', 23130000, 13000000, 320, 1011),
(80, 8, 'Smart Tivi LG 4K 55 inch 55UQ7550PSF Chính Hãng VN', '/Images/Image/LG/3.png', 25210000, 16000000, 340, 1000),
(81, 8, 'Smart Tivi LG 4K 43 inch 43UQ7550PSF Chính Hãng VN', '/Images/Image/LG/4.png', 13450000, 11000000, 7530, 1010),
(82, 8, 'Smart Tivi LG 4K 50 inch 50UQ7550PSF Chính Hãng VN', '/Images/Image/LG/5.png', 24320000, 12000000, 3330, 1010),
(83, 8, 'Smart Tivi LG 4K 65 inch 65UQ7550PSF Chính Hãng VN', '/Images/Image/LG/6.png', 43210000, 22000000, 3530, 1100),
(84, 8, 'Smart Tivi NanoCell LG 4K 65 inch 65NANO76SQA Chính Hãng VN', '/Images/Image/LG/7.png', 31240000, 12000000, 1230, 1100),
(85, 8, 'Smart Tivi NanoCell LG 4K 55 inch 55NANO76SQA Chính Hãng VN', '/Images/Image/LG/8.png', 33330000, 22000000, 2230, 1100),
(86, 8, 'Smart Tivi LG UHD 4K 43 inch 43UQ7050 Chính Hãng VN', '/Images/Image/LG/9.png', 44440000, 32000000, 2330, 1100),
(87, 8, 'Smart Tivi LG 4K 43 inch 43UP7550PTC Chính Hãng VN', '/Images/Image/LG/10.png', 55550000, 42000000, 1130, 1100),
(100, 4, 'Laptop Dell Inspiron 3511 5829BLK Chính Hãng VN', '/Images/Image/DELL/1.png', 54320000, 10000000, 310, 1010),
(101, 4, 'Laptop Dell Inspiron 14 2IN1 I7430-5800SLV RD7PJ', '/Images/Image/DELL/2.png', 23130000, 13000000, 320, 1011),
(102, 4, 'Laptop Dell Latidude 7320 9PPWV Chính Hãng VN', '/Images/Image/DELL/3.png', 25210000, 16000000, 340, 1000),
(103, 4, 'Laptop Dell Inspiron 15 3525 NH20W Chính Hãng VN', '/Images/Image/DELL/4.png', 13450000, 11000000, 7530, 1010),
(104, 4, 'Laptop Dell Inspiron 7506-5903SLV Chính Hãng VN', '/Images/Image/DELL/5.png', 24320000, 12000000, 3330, 1010),
(105, 4, 'Laptop Dell Inspirion N5515 N5R75700U104W1 Chính Hãng VN', '/Images/Image/DELL/6.png', 43210000, 22000000, 3530, 1100),
(106, 4, 'Laptop Dell Vostro 14 3400 YX51W3 Chính Hãng VN', '/Images/Image/DELL/7.png', 31240000, 12000000, 1230, 1100),
(107, 4, 'Laptop Dell Vostro 3405 V4R53500U003W Chính Hãng VN', '/Images/Image/DELL/8.png', 33330000, 22000000, 2230, 1100),
(108, 4, 'Laptop Dell Inspiron 3501 70253897 Chính Hãng VN', '/Images/Image/DELL/9.png', 44440000, 32000000, 2330, 1100),
(109, 4, 'Laptop Dell Inspiron 13 7000 I7306-5934SLV-PUS', '/Images/Image/DELL/10.png', 55550000, 42000000, 1130, 1100),
(110, 5, 'Màn hình MSI Pro MP243X 24 inch Chính Hãng VN', '/Images/Image/MSI/1.png', 54320000, 10000000, 310, 1010),
(111, 5, 'Màn hình MSI PROMP243W 24 inch Chính Hãng VN', '/Images/Image/MSI/2.png', 23130000, 13000000, 320, 1011),
(113, 5, 'Màn hình MSI Pro MP243XW 24 inch Chính Hãng VN', '/Images/Image/MSI/4.png', 13450000, 11000000, 7530, 1010),
(114, 5, 'Màn hình MSI Pro MP273QP 27 inch Chính Hãng VN', '/Images/Image/MSI/5.png', 24320000, 12000000, 3330, 1010),
(115, 5, 'Màn hình cong Gaming MSI Optix MAG342CQPV 34 inch', '/Images/Image/MSI/6.png', 43210000, 22000000, 3530, 1100),
(116, 5, 'Màn hình MSI PROMP273P 27 inch Chính Hãng VN', '/Images/Image/MSI/7.png', 31240000, 12000000, 1230, 1100),
(117, 5, 'Màn hình Gaming OPTIX G241V E2 24 inch Chính Hãng VN', '/Images/Image/MSI/8.png', 33330000, 22000000, 2230, 1100),
(118, 5, 'Màn hình cong Gaming MSI Optix MAG342CQPV 34 inch', '/Images/Image/MSI/1.png', 44440000, 32000000, 2330, 1100),
(119, 5, 'Màn hình Gaming MSI G244F 24 inch Chính Hãng VN', '/Images/Image/MSI/10.png', 55550000, 42000000, 1130, 1100),
(121, 5, 'Màn hình MSI Pro MP243X 24 inch Chính Hãng VN', '/Images/Image/MSI/1.png', 54320000, 10000000, 310, 1010),
(122, 5, 'Màn hình MSI PROMP243W 24 inch Chính Hãng VN', '/Images/Image/MSI/2.png', 23130000, 13000000, 320, 1011),
(124, 5, 'Màn hình MSI Pro MP243XW 24 inch Chính Hãng VN', '/Images/Image/MSI/4.png', 13450000, 11000000, 7530, 1010),
(125, 5, 'Màn hình MSI Pro MP273QP 27 inch Chính Hãng VN', '/Images/Image/MSI/5.png', 24320000, 12000000, 3330, 1010),
(126, 5, 'Màn hình cong Gaming MSI Optix MAG342CQPV 34 inch', '/Images/Image/MSI/6.png', 43210000, 22000000, 3530, 1100),
(127, 5, 'Màn hình MSI PROMP273P 27 inch Chính Hãng VN', '/Images/Image/MSI/7.png', 31240000, 12000000, 1230, 1100),
(128, 5, 'Màn hình Gaming OPTIX G241V E2 24 inch Chính Hãng VN', '/Images/Image/MSI/8.png', 33330000, 22000000, 2230, 1100),
(130, 5, 'Màn hình Gaming MSI G244F 24 inch Chính Hãng VN', '/Images/Image/MSI/10.png', 55550000, 42000000, 1130, 1100),
(133, 1, 'Apple MacBook Air M1 512GB 2020 III Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 22760000, 22000000, 30, 11000),
(134, 6, 'iPhone 12 128GB | Chính hãng VN/A', '/Images/Image/Iphone/iphone-14-storage-select-202209-6-1inch-y889.png', 54320000, 100000000, 310, 1010),
(135, 6, 'iPhone 14 128GB | Chính hãng VN/A', '/Images/Image/Iphone/iphone-15-pro-max-512gb.png', 23130000, 13000000, 320, 1011),
(136, 6, 'iPhone 15 512GB | Chính hãng VN/A', '/Images/Image/Iphone/3_51_1_7.png', 13450000, 11000000, 7530, 1111),
(137, 6, 'iPhone 14 512GB | Chính hãng VN/A', '/Images/Image/Iphone/t_m_18.png', 25210000, 16000000, 340, 1000),
(138, 6, 'iPhone 13 128GB | Chính hãng VN/A', '/Images/Image/Iphone/iphone-15-pro-max-512gb.png', 33330000, 22000000, 2230, 1100),
(139, 8, 'Smart Tivi LG 4K 43 inch 43UP7550PTC Chính Hãng VN', '/Images/Image/LG/10.png', 55550000, 42000000, 1130, 1100),
(140, 8, 'Smart Tivi LG 4K 65 inch 65UR7550PSC Chính Hãng VN', '/Images/Image/LG/1.png', 54320000, 10000000, 310, 1010),
(157, 1, 'Apple MacBook Air M1 512GB 2020 I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 22760000, 22000000, 30, 1234),
(158, 1, 'Apple MacBook Air M1 512GB 2020 IV Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/macbook-air-m1-2020-gray-600x600.jpg', 22760000, 22000000, 30, 1234),
(159, 1, 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam', '/Images/Image/MACBOOK/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg', 12320000, 11000000, 350, 1000),
(160, 7, 'Panasonic Inverter 170 lít NR-BA190PPVN', '/Images/Image/Panasonic/1.png', 54320000, 10000000, 310, 1010),
(161, 7, 'Panasonic Inverter 380 lít NR-BX421WGKV', '/Images/Image/Panasonic/2.png', 23130000, 13000000, 320, 1011),
(162, 7, 'Panasonic Inverter 188 lít NR-BA229PAVN', '/Images/Image/Panasonic/3.png', 25210000, 16000000, 340, 1000),
(163, 7, 'Panasonic Inverter 366 lít NR-TL381GPKV', '/Images/Image/Panasonic/4.png', 13450000, 11000000, 7530, 1010),
(164, 7, 'Panasonic Inverter 268 lít NR-TV301VGMV', '/Images/Image/Panasonic/5.png', 24320000, 12000000, 3330, 1010),
(165, 7, 'Panasonic Inverter 325 lít NR-BC361VGMV', '/Images/Image/Panasonic/6.png', 43210000, 22000000, 3530, 1100),
(166, 7, 'Panasonic Inverter 325 lít NR-BV361WGKV', '/Images/Image/Panasonic/7.png', 31240000, 12000000, 1230, 1100),
(167, 7, 'Panasonic Inverter 326 lít NR-TL351GPKV', '/Images/Image/Panasonic/8.png', 33330000, 22000000, 2230, 1100),
(168, 7, 'Panasonic Inverter 420 lít NR-BX471WGKV', '/Images/Image/Panasonic/9.png', 44440000, 32000000, 2330, 1100),
(169, 7, 'Panasonic Inverter 255 lít NR-BV281BGMV', '/Images/Image/Panasonic/10.png', 55550000, 42000000, 1130, 1100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rCU2W1oTjqv5SzoO0wGISfukB0Kpzb6VIu1YXM33', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoicVBkWk1JSE53QlFJejF5OVh4ZTNXUmlQTGpEb0dqQzlTRUx0MzFFcCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL0JpbGxQYWlkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJyb2xlIjtpOjA7czoxMDoiTWFUYWlLaG9hbiI7aToyO3M6OToidXNlcm5hbWVzIjtzOjQ6InVzZXIiO3M6NToiZW1haWwiO3M6MTQ6InVzZXJAZ21haWwuY29tIjtzOjEwOiJhbmhkYWlkaWVuIjtzOjA6IiI7fQ==', 1716515491);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoans`
--

CREATE TABLE `taikhoans` (
  `MaTaiKhoan` int(11) NOT NULL,
  `MaLoai` int(11) DEFAULT NULL,
  `TenTaiKhoan` varchar(50) DEFAULT NULL,
  `MatKhau` varchar(50) DEFAULT NULL,
  `AnhDaiDien` varchar(500) NOT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoans`
--

INSERT INTO `taikhoans` (`MaTaiKhoan`, `MaLoai`, `TenTaiKhoan`, `MatKhau`, `AnhDaiDien`, `Email`, `role`) VALUES
(1, 1, 'admin', 'admin', '/Images/avt1.jpg', 'admin@gmail.com', 1),
(2, 2, 'user', 'user', '', 'user@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`IdCart`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Chỉ mục cho bảng `chitiethoadons`
--
ALTER TABLE `chitiethoadons`
  ADD PRIMARY KEY (`MaChiTietHoaDon`),
  ADD KEY `MaHoaDon` (`MaHoaDon`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`IDCTSP`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Chỉ mục cho bảng `chuyenmucs`
--
ALTER TABLE `chuyenmucs`
  ADD PRIMARY KEY (`MaChuyenMuc`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `hoadons`
--
ALTER TABLE `hoadons`
  ADD PRIMARY KEY (`MaHoaDon`),
  ADD KEY `Id` (`Id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Chỉ mục cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `loaitaikhoans`
--
ALTER TABLE `loaitaikhoans`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaChuyenMuc` (`MaChuyenMuc`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `taikhoans`
--
ALTER TABLE `taikhoans`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `IdCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `chitiethoadons`
--
ALTER TABLE `chitiethoadons`
  MODIFY `MaChiTietHoaDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `IDCTSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chuyenmucs`
--
ALTER TABLE `chuyenmucs`
  MODIFY `MaChuyenMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadons`
--
ALTER TABLE `hoadons`
  MODIFY `MaHoaDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaitaikhoans`
--
ALTER TABLE `loaitaikhoans`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT cho bảng `taikhoans`
--
ALTER TABLE `taikhoans`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoans` (`MaTaiKhoan`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanphams` (`MaSanPham`);

--
-- Các ràng buộc cho bảng `chitiethoadons`
--
ALTER TABLE `chitiethoadons`
  ADD CONSTRAINT `chitiethoadons_ibfk_1` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadons` (`MaHoaDon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanphams` (`MaSanPham`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD CONSTRAINT `sanphams_ibfk_1` FOREIGN KEY (`MaChuyenMuc`) REFERENCES `chuyenmucs` (`MaChuyenMuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoans`
--
ALTER TABLE `taikhoans`
  ADD CONSTRAINT `taikhoans_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loaitaikhoans` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
