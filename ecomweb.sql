-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2021 at 09:10 AM
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
-- Database: `ecomweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_method_id` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_code` varchar(50) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat` int(11) NOT NULL,
  `pro_value` int(50) NOT NULL,
  `pro_img` longtext NOT NULL,
  `description` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `cat`, `pro_value`, `pro_img`, `description`, `pname`) VALUES
(1, 1, 5000, 'abc8fd8416869e5809e8c4dfcc20e89abc571390.jpg', 'Midi Length Dress ', 'White'),
(2, 1, 4500, '6d4280f431ca129e2207a637496c412c79954396.jpg', 'Long Black Dress', 'Black Dress'),
(3, 1, 3500, '480c10eff3b3c5a435ce1f41563c42e68e1ee365.jpg', 'Knee Length Dress', 'Pink Dress'),
(4, 1, 7000, 'abc8fd8416869e5809e8c4dfcc20e89abc571390.jpg', 'Midi Length', 'White Dress'),
(5, 1, 4000, 'c12bd5e9523c58fb6267d8a76e71ec13685e2da6.jpg', 'Knee Length Dress', 'Yellow Dress'),
(6, 1, 4500, 'cff12d97a9b399085368015d52ca271cee23c6d8.jpg', 'long Length', 'Red Dress'),
(7, 2, 8000, '2238WHITE_grande.jpg', 'White T-Shirt ', 'White T-Shirt'),
(8, 2, 6000, 'CA1_6402_grande.jpg', 'Short Sleeve Shirt', 'Short Sleeve Shirt'),
(9, 2, 6500, 'CA1_6429_grande.jpg', 'Long Sleeve Shirt', 'Long Sleeve Shirt'),
(10, 2, 6700, 'CA1_6500_f3a1c850-47cc-4375-bd88-3622f06a015c_grande.jpg', 'Short Sleeve Green Shirt', 'Short Sleeve Green Shirt'),
(11, 2, 7000, 'CA1_6725_grande.jpg', 'Long Sleeve Blue Shirt', 'Long Sleeve Blue Shirt'),
(12, 2, 7000, 'CA1_6929_grande.jpg', 'Long Sleeve white T-Shirt', 'Long Sleeve white T-Shirt'),
(13, 3, 2000, '461293--1--1577858953.jpeg', 'Boys Shirts', 'Boys Shirts'),
(14, 3, 1500, 'MC-290211--1--1566546478.jpeg', 'Green Dress', 'Green Dress'),
(15, 3, 2000, 'MC-352818--1--1604553807.jpeg', 'Overalls', 'Overalls'),
(16, 3, 3000, 'MC-437313--1--1609002446.jpeg', 'White Shirt', 'White Shirt'),
(17, 3, 2000, 'MC-498613--1--1604507402.jpeg', 'Blue Dress', 'Blue Dress'),
(18, 3, 2500, 'MC-523469--1--1603347966.jpeg', 'Long Sleeve Blue T-Shirt', 'Long Sleeve Blue T-Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `pwd`, `role`) VALUES
(1, 'ucsc', 'ucsc', 'ucsc@ucsc.lk', 'ucsc', 'ucsc', 0),
(2, 'yadeesha', 'weerasinghe', 'yadeeshaw@gmail.com', 'yadeesha', '12345', 1),
(3, 'vimansa ', 'wickramasinghe', 'vimansa@gmail.com', 'Vimansa', '12345', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
