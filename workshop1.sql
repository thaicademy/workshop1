-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2022 at 12:37 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `title`, `detail`, `img`) VALUES
(1, '', 'Hello', './images/blog/qrcode'),
(2, '', 'Hello', './images/blog/messageImage_1663138618479.jpg'),
(3, '', 'dtdrgdg', 'xxxdownload.jpg'),
(4, '', 'bbbbbb', './images/blog/302317217_5496601157064754_6765919266768467945_n.jpg'),
(5, 'hioy', 'ioyoiy', './images/blog/messageImage_1663138618479.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_name`) VALUES
(1, 'อุปโภค'),
(2, 'บริโภค'),
(3, 'อิเล็กทรอนิกส์'),
(4, 'IT'),
(5, 'Network'),
(6, 'Semi Conductor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetail`
--

CREATE TABLE `tbl_orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_orderdetail`
--

INSERT INTO `tbl_orderdetail` (`id`, `order_id`, `product_id`, `qty`) VALUES
(28, 57, 5, 1),
(29, 58, 5, 1),
(30, 58, 6, 1),
(31, 58, 4, 1),
(32, 59, 5, 1),
(33, 59, 6, 1),
(34, 59, 4, 1),
(35, 60, 5, 1),
(36, 60, 6, 2),
(37, 60, 4, 3),
(38, 61, 5, 1),
(39, 61, 6, 2),
(40, 61, 4, 3),
(41, 62, 5, 1),
(42, 62, 6, 2),
(43, 62, 4, 3),
(44, 63, 5, 1),
(45, 63, 6, 2),
(46, 63, 4, 3),
(47, 64, 5, 1),
(48, 64, 6, 2),
(49, 64, 4, 3),
(50, 65, 5, 1),
(51, 65, 6, 2),
(52, 65, 4, 3),
(53, 66, 6, 4),
(54, 66, 5, 3),
(55, 66, 4, 2),
(56, 67, 5, 1),
(57, 67, 6, 2),
(58, 67, 4, 1),
(59, 68, 5, 1),
(60, 68, 6, 2),
(61, 68, 4, 1),
(62, 69, 5, 1),
(63, 69, 6, 2),
(64, 69, 4, 1),
(65, 70, 6, 1),
(66, 70, 5, 1),
(67, 71, 9, 2),
(68, 71, 11, 1),
(69, 71, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `order_date`, `name`, `address`, `tel`, `email`) VALUES
(57, '2022-11-07 19:01:06', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(58, '2022-11-07 19:03:20', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(59, '2022-11-07 19:03:32', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(60, '2022-11-07 19:04:12', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(61, '2022-11-07 19:20:51', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(62, '2022-11-07 19:21:03', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(63, '2022-11-07 19:37:58', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(64, '2022-11-07 19:38:20', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(65, '2022-11-07 19:38:23', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(66, '2022-11-08 19:03:55', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(67, '2022-11-09 19:09:55', 'สมศักดิ์ ใจเกินร้อย 150', ' กทม ', '', 'admin@gmail.com'),
(68, '2022-11-09 19:20:28', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(69, '2022-11-09 19:24:32', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com'),
(70, '2022-11-11 18:35:49', ' สมเกียรติ ใจดี', '  กทม', '', 'admin@gmail.com'),
(71, '2022-11-21 18:54:04', 'สมศักดิ์ ใจเกินร้อย', ' กทม ', '', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `stock` int(10) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `cat_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `status`) VALUES
(2, 'สมเกียรติ', 'ิ้่้ิใจดี', 'eleclabs@gmail.com', '1234', 'กทม', 'guest'),
(3, 'สมศักดิ์', 'ใจเกินร้อย', 'admin@gmail.com', '1234', 'กทม', 'admin'),
(4, 'สมหมาย', 'ใจมาก', 'abc@gmail.com', '1234', 'กทม', 'guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
