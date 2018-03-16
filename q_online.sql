-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 07:45 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `session_id` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pro_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(20) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  `price` double NOT NULL,
  `descrip` varchar(300) NOT NULL,
  `imgurl` varchar(500) NOT NULL,
  `color` varchar(20) NOT NULL,
  `stock_qty` int(11) NOT NULL,
  `bigimg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `brand`, `model`, `capacity`, `price`, `descrip`, `imgurl`, `color`, `stock_qty`, `bigimg`) VALUES
(1, 'BlackBerry', 'Q5', '8GB', 13000, 'GSM / HSPA / LTE,BlackBerry OS 10.2, upgradable to 10.3.1,5 MP (f/2.4, 30mm), autofocus, LED flash,\r\nGeo-tagging, touch focus, face detection, HDR, panorama', 'img/bbq5.jpg.png', 'Black', 3, ''),
(2, 'BlackBerry', 'Q10', '8GB', 17000, 'GSM / HSPA / LTE,BlackBerry OS 10.2, upgradable to 10.3.1,5 MP (f/2.4, 30mm), autofocus, LED flash,\r\nGeo-tagging, touch focus, face detection, HDR, panorama', 'img/bbq5.jpg.png', 'Red', 5, ''),
(3, 'Apple', 'iphone 7 plus', '256', 120000, 'GSM / CDMA / HSPA / EVDO / LTE,iOS 10.0.1, upgradable to iOS 11.2,Apple A10 Fusion,32/128/256 GB, 3 GB RAM.', 'img/i7plus.png', 'jet black', 20, 'img/ap7plus.jpeg.png'),
(4, 'Apple', 'iphone 8x', '128', 220000, 'GSM / CDMA / HSPA / EVDO / LTE,iOS 10.0.1, upgradable to iOS 11.2,Apple A10 Fusion,32/128/256 GB, 6 GB RAM.', 'img/i7plus.png', 'jet black', 20, 'img/ap7plus.jpeg.png');

-- --------------------------------------------------------

--
-- Table structure for table `toprated`
--

CREATE TABLE `toprated` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toprated`
--

INSERT INTO `toprated` (`id`, `pro_id`) VALUES
(1, 2),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `topsellers`
--

CREATE TABLE `topsellers` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topsellers`
--

INSERT INTO `topsellers` (`id`, `pro_id`) VALUES
(1, 1),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `pro_id`) VALUES
(1, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `fname`, `lname`, `username`, `password`, `address`, `city`, `zip`) VALUES
(1, 'Anuk', 'Akmeemana', 'anukkavishka@gmail.com', '123', '123 main Street', 'Homagama', '2999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `toprated`
--
ALTER TABLE `toprated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topsellers`
--
ALTER TABLE `topsellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `uindex` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `toprated`
--
ALTER TABLE `toprated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `topsellers`
--
ALTER TABLE `topsellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
