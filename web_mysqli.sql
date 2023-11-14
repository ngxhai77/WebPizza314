-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 06:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_damin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_damin`, `username`, `password`, `admin_status`) VALUES
(3, 'haiadmin', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(4, 'Nguyễn Xuân Hải', 'nxh@gmail.com', '18 Trần Van ƠN', '25f9e794323b453885f5181f1b624d0b', '123456798'),
(7, 'Nguyễn Xuân Hải', 'nxk@gmail.com', '312 America Đình', '25f9e794323b453885f5181f1b624d0b', '21172717274'),
(8, 'Nguyễn Tấn Thi', 'ntt@gmail.com', '18/8/2 Nguyễn Văn Bé', '4297f44b13955235245b2497399d7a93', '031909000'),
(10, 'HAI NGUYEN', 'admin@gmail.com', 'nha admin', '21232f297a57a5a743894a0e4a801fc3', '123123123123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(6, 'Pizza', 2),
(7, 'Gà rán', 3),
(8, 'Khai vị', 4),
(9, 'Mỳ Ý', 5),
(10, 'Salad', 6),
(11, 'Thức Uống', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `mota` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `mota`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(25, 'Kid-mania-Pizza-Trung-Cut-Xot-Pho-Mai-1111\r\n    ', 'pz1', '69000000', 69, 'Kid-mania-Pizza-Trung-Cut-Xot-Pho-Mai-1111.jpg', 'Ngon hơn khi dùng kèm xốt mù tạc mật ong và củ cải lên men.', 'Ngon hơn khi dùng kèm xốt mù tạc mật ong và củ cải lên men.', 1, 6),
(26, 'Menu-PC_LTO-NewYork\r\n    ', 'pz2', '69000000', 20, 'Menu-PC_LTO-NewYork.jpg', 'Ngon hơn khi dùng kèm xốt mù tạc mật ong và củ cải lên men.', 'Ngon hơn khi dùng kèm xốt mù tạc mật ong và củ cải lên men.', 1, 6),
(27, 'Pizza-Dam-Bong-Dua-Kieu-Hawaii-Hawaiian\r\n    ', 'pz3', '390329', 30, 'Pizza-Dam-Bong-Dua-Kieu-Hawaii-Hawaiian.jpg', 'Ngon hơn khi dùng kèm xốt mù tạc mật ong và củ cải lên men', 'Ngon hơn khi dùng kèm xốt mù tạc mật ong và củ cải lên men', 1, 6),
(31, 'pizza-lap-xuong-2k\r\n    ', 'pz5', '69000000', 32, 'pizza-lap-xuong-2k.jpg', 'Ngon hơn khi dùng kèm xốt mù tạc mật ong', 'Ngon hơn khi dùng kèm xốt mù tạc mật ong', 1, 6),
(32, 'Pizza-Hai-San-Xot-Ca-Chua-Seafood-Delight\r\n    ', 'pz6', '390329', 30, 'Pizza-Hai-San-Xot-Ca-Chua-Seafood-Delight.jpg', 'Ngon hơn khi dùng kèm xốt mù tạc', 'Ngon hơn khi dùng kèm xốt mù tạc', 1, 6),
(33, 'Pizzaminsea-Hai-San-Nhiet-Doi-Xot-Tieu\r\n    ', 'pz4', '69000000', 32, 'Pizzaminsea-Hai-San-Nhiet-Doi-Xot-Tieu.jpg', 'Ngon hơn khi dùng kèm xốt mù tạc', 'Ngon hơn khi dùng kèm xốt mù tạc', 1, 6),
(34, 'Pizza-Pho-Mai-Hao-Hang-Cheese-Mania\r\n    ', 'pz9', '390329', 30, 'Pizza-Pho-Mai-Hao-Hang-Cheese-Mania.jpg', '	Ngon hơn khi dùng kèm xốt mù tạc', '	Ngon hơn khi dùng kèm xốt mù tạc', 1, 6),
(35, 'Sausage-Kid-Manianeww\r\n    ', 'pz10', '390329', 32, 'Sausage-Kid-Manianeww.jpg', 'Ngon hơn khi dùng kèm xốt mù tạc', 'Ngon hơn khi dùng kèm xốt mù tạc', 1, 6),
(36, 'Surf-turf-Pizza-Bo-Tom-Nuong-Kieu-My-1\r\n    ', 'pz11', '390329', 20, 'Surf-turf-Pizza-Bo-Tom-Nuong-Kieu-My-1.jpg', '	Ngon hơn khi dùng kèm xốt mù tạc', '	Ngon hơn khi dùng kèm xốt mù tạc', 1, 6),
(37, 'Veggie-mania-Pizza-Rau-Cu-Thap-Cam\r\n    ', 'pz12', '69000000', 20, 'Veggie-mania-Pizza-Rau-Cu-Thap-Cam.jpg', 'Ngon hơn khi dùng kèm xốt mù tạc', 'Ngon hơn khi dùng kèm xốt mù tạc', 1, 6),
(38, 'quesadilla\r\n    ', 'kv1', '180000', 30, '0002241_quesadilla_300.jpeg', 'Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn.', 'Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn.', 1, 8),
(39, 'squid-rings\r\n    ', 'kv2', '69000000', 30, '0002242_squid-rings_300.jpeg', 'Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', 'Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', 1, 8),
(40, 'potato-basket\r\n    ', 'kv3', '69000000', 20, '0002243_potato-basket_300.jpeg', 'Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', 'Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', 1, 8),
(41, 'cheese-garlic-breads\r\n    ', 'kv4', '123000000', 43, '0002244_cheese-garlic-breads_300.jpeg', '	Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', '	Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', 1, 8),
(42, 'bread-sticks-w-dipping-sauce\r\n    ', 'kv5', '2200000', 15, '0002247_bread-sticks-w-dipping-sauce_300.jpeg', 'Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', 'Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', 1, 8),
(43, 'spicy-garlic-shrimp-with-bread\r\n    ', 'kv6', '49000000', 3, '0002248_spicy-garlic-shrimp-with-bread_300.jpeg', '	Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', '	Phủ bởi lớp bột đặc biệt tạo nên lớp vỏ giòn dai hấp dẫn', 1, 8),
(44, 'spaghetti-spicy-seafood\r\n    ', 'my1', '390329000', 30, '0002253_spaghetti-spicy-seafood_300.png', 'Sự tươi ngon của mỳ hợp với sốt kem cà chua', 'Sự tươi ngon của mỳ hợp với sốt kem cà chua', 1, 9),
(45, 'spicy-sausage-spaghetti\r\n    ', 'my2', '18000000', 10, '0002254_spicy-sausage-spaghetti_300.png', '	Sự tươi ngon của mỳ hợp với sốt kem cà chua', '	Sự tươi ngon của mỳ hợp với sốt kem cà chua', 1, 9),
(46, 'spaghetti-ham-mushroom\r\n    ', 'my3', '69000000', 69, '0002255_spaghetti-ham-mushroom_300.png', '	Sự tươi ngon của mỳ hợp với sốt kem cà chua', '	Sự tươi ngon của mỳ hợp với sốt kem cà chua', 1, 9),
(47, 'spaghetti-shrimp-rose\r\n    ', 'my4', '4500000', 7, '0002257_spaghetti-shrimp-rose_300.png', '	Sự tươi ngon của mỳ hợp với sốt kem cà chua', '	Sự tươi ngon của mỳ hợp với sốt kem cà chua', 1, 9),
(48, 'spaghetti-bolognese\r\n    ', 'my5', '2000000', 32, '0002258_spaghetti-bolognese_300.png', 'Sự tươi ngon của mỳ hợp với sốt kem cà chua', 'Sự tươi ngon của mỳ hợp với sốt kem cà chua', 1, 9),
(52, 'signature-salad\r\n    ', 'sl1', '4320000', 10, '0002250_signature-salad_300.png', 'Rau với sốt dầu giấm', 'Rau với sốt dầu giấm', 1, 10),
(53, 'caesars-salad\r\n    ', 'sl2', '4728000', 32, '0002251_caesars-salad_300.png', 'Rau với sốt caesars', 'Rau với sốt caesars', 1, 10),
(54, 'garden-salad\r\n    ', 'sl3', '390329', 4, '0002252_garden-salad_300.png', 'Salad rau và trái cây tươi dùng kèm xốt kem đặc biệt', 'Salad rau và trái cây tươi dùng kèm xốt kem đặc biệt', 1, 10),
(55, 'chicken-strip-salad\r\n    ', 'sl4', '180000', 50, '0002600_chicken-strip-salad_300.png', '	Salad rau và trái cây tươi dùng kèm xốt kem đặc biệt', '	Salad rau và trái cây tươi dùng kèm xốt kem đặc biệt', 1, 10),
(56, 'crispy-salmon-skin-salad\r\n    ', 'sl5', '7600000', 8, '0002601_crispy-salmon-skin-salad_300.png', '	Salad rau và trái cây tươi dùng kèm xốt kem đặc biệt', '	Salad rau và trái cây tươi dùng kèm xốt kem đặc biệt', 1, 10),
(57, '7up fiber lon\r\n    ', 'tu1', '12000', 20, '0003087_7up-fiber-lon-_300.png', 'Thức uống giải khát có gaz', 'Thức uống giải khát có gaz', 1, 11),
(58, 'Cocacola\r\n    ', 'tu2', '15000', 69, 'coke-390.jpg', 'Thức uống giải khát có gaz', 'Thức uống giải khát có gaz', 1, 11),
(59, 'Cocacola light\r\n    ', 'tu3', '160000', 69, 'coke-light.jpg', 'Thức uống giải khát có gaz', 'Thức uống giải khát có gaz', 1, 11),
(60, 'Cocacola zero\r\n    ', 'tu4', '160000', 20, 'coke-zero.jpg', '	Thức uống giải khát có gaz', '	Thức uống giải khát có gaz', 1, 11),
(61, 'fuze đào hạt chia\r\n    ', 'tu5', '160000', 32, 'dao-hat-chia.jpg', 'Thức uống giải khát khong có gaz', 'Thức uống giải khát khong có gaz', 1, 11),
(62, 'Danisa 1,5l\r\n    ', 'tu6', '20000', 30, 'Dasani15L.jpg', 'Thức uống giải khát khong có gaz', 'Thức uống giải khát khong có gaz', 1, 11),
(63, 'Fanta cam\r\n    ', 'tu7', '16000', 50, 'fanta-1.5.jpg', 'Thức uống giải khát khong có gaz', 'Thức uống giải khát khong có gaz', 1, 11),
(65, 'fuze chanh dây hại chia\r\n    ', 'tu8', '160000', 20, 'FUZETEA-CHANH-DÂY-HẠT-CHIA-PC.png', '	Thức uống giải khát khong có gaz', '	Thức uống giải khát khong có gaz', 1, 11),
(66, 'Cocacola zero 1,5l\r\n    ', 'tu9', '20000', 100, 'MENU-PC_Coke-Zero-1L5_trang.png', 'Thức uống giải khát có gaz', 'Thức uống giải khát có gaz', 1, 11),
(67, 'Sprite\r\n    ', 'tu10', '14000', 75, 'Sprite-390.jpg', '	Thức uống giải khát có gaz', '	Thức uống giải khát có gaz', 1, 11),
(68, 'spaghetti-veggi-mushroom-cream-sauce\r\n    ', 'my6', '160000', 20, 'spaghetti-veggi-mushroom-cream-sauce.png', '	Sự tươi ngon của mỳ hợp với sốt kem cà chua', '	Sự tươi ngon của mỳ hợp với sốt kem cà chua', 1, 9),
(69, 'spaghetti-vegetarian-w-marinara-sauce\r\n    ', 'my7', '160000', 32, '0003135_spaghetti-vegetarian-w-marinara-sauce.png', 'Sự tươi ngon của mỳ hợp với sốt kem cà chua', 'Sự tươi ngon của mỳ hợp với sốt kem cà chua', 1, 11),
(70, 'Gà xiên nướng Satay\r\n    ', 'gr1', '99000', 65, 'MON+PHU+ga+stay+PC-nen+xam_360X240px.jpg', 'Giòn rụm , giòn tan , mọng nước.', 'Giòn rụm , giòn tan , mọng nước.', 1, 7),
(71, 'Đùi gà xúc xích\r\n    ', 'gr2', '99000', 30, 'Khai-Vị-Tổng-Hợp-PC-nen-xam-1_360X240px_1.jpg', 'Giòn rụm, giòn tan, mọng nước.', 'Giòn rụm , giòn tan , mọng nước.', 1, 7),
(72, 'Gà viên phô mia đút lò \r\n    ', 'gr3', '125000', 35, 'MENU-PC-Gà-Viên-Phô-Mai-Đút-Lò-1.jpg', 'Giòn rụm , giòn tan , mọng nước.', 'Giòn rụm , giòn tan , mọng nước.', 1, 7),
(73, 'Cánh gà BBQ kiểu Mỹ\r\n    ', 'gr4', '99000', 12, 'MENU-PC_Cánh-Gà-BBQ-Kiểu-Mỹ-.jpg', 'Giòn rụm , giòn tan , mọng nước.', 'Giòn rụm , giòn tan , mọng nước.', 1, 7),
(74, 'Gà không xương BBQ  A  ', 'gr5', '90000', 20, 'MENU-PC_GÀ-KHÔNG-XƯƠNG-BBQ.jpg', 'Giòn rụm , giòn tan , mọng nước.', 'Giòn rụm , giòn tan , mọng nước.', 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_damin`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_damin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
