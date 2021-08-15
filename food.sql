-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2021 at 06:53 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'COMBO BURGER PACK', 399),
(2, 'DELUXE VEGGIE PIZZA', 450),
(3, 'COMBO FRENCH FRIES', 199),
(4, 'MOMOS', 99),
(5, 'VEG PANEER ROLLS', 100),
(6, 'CHOW MEIN', 150),
(7, 'KADAI PANEER', 350),
(8, 'IDLI SAMBAR', 200),
(9, 'DRY KOFTE', 250),
(10, 'TANDORI CHICKEN', 500),
(11, 'FRENCH FRIES', 100),
(12, 'STUFFED DOSA', 200),
(13, 'CRUMBLE BALL', 100),
(14, 'CHOCOLATE TRUFFLE', 300),
(15, 'STRAWBERRY TRUFFLE', 200),
(16, 'GULAM JAMUN', 150),
(17, 'CHOCOLATE PUDDING', 250),
(18, 'VANILLA WAFFLES', 200),
(19, 'CHOW MEIN', 150),
(20, 'CHICKEN MANCHURIAN', 250),
(21, 'TSO CHICKEN', 350),
(22, 'NOODLES', 150),
(23, 'KUNG PAO CHICKEN', 400),
(24, 'DUMPLINGS', 350),
(28, 'BLACK COFFEE', 200),
(27, 'COLA', 150),
(26, 'MANGO SHAKE', 100),
(25, 'POMEGRANATE JUICE', 200),
(29, 'CAPPUCCINO', 100),
(30, 'ICE TEA', 150);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(7, 'Archana Bisht', '19bcs1338@gmail.com', 'a152e841783914146e4bcd4f39100686', '6399104055', 'dehradun', 'bus stand,uttarakhand'),
(6, 'Archana Bisht', 'archanabisht174@gmail.com', 'a152e841783914146e4bcd4f39100686', '6399104055', 'dehradun', 'bus stand,uttarakhand');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 2, 3, 'Confirmed'),
(2, 2, 2, 'Confirmed'),
(3, 2, 4, 'Confirmed'),
(4, 2, 1, 'Confirmed'),
(5, 2, 8, 'Confirmed'),
(6, 3, 1, 'Confirmed'),
(7, 3, 2, 'Confirmed'),
(8, 3, 3, 'Confirmed'),
(9, 3, 4, 'Confirmed'),
(10, 4, 1, 'Confirmed'),
(11, 12, 3, 'Confirmed'),
(12, 12, 1, 'Confirmed'),
(13, 12, 2, 'Confirmed'),
(14, 5, 1, 'Confirmed'),
(15, 5, 2, 'Confirmed'),
(16, 5, 2, 'Confirmed'),
(17, 5, 2, 'Confirmed'),
(18, 5, 2, 'Confirmed'),
(19, 5, 6, 'Confirmed'),
(57, 1, 2, 'Confirmed'),
(56, 1, 3, 'Confirmed'),
(53, 1, 1, 'Confirmed'),
(50, 1, 30, 'Confirmed'),
(24, 1, 5, 'Confirmed'),
(25, 1, 6, 'Confirmed'),
(26, 1, 7, 'Confirmed'),
(27, 1, 8, 'Confirmed'),
(28, 1, 9, 'Confirmed'),
(29, 1, 10, 'Confirmed'),
(30, 1, 11, 'Confirmed'),
(31, 1, 12, 'Confirmed'),
(32, 1, 13, 'Confirmed'),
(33, 1, 14, 'Confirmed'),
(34, 1, 15, 'Confirmed'),
(35, 1, 16, 'Confirmed'),
(36, 1, 17, 'Confirmed'),
(37, 1, 18, 'Confirmed'),
(38, 1, 19, 'Confirmed'),
(39, 1, 20, 'Confirmed'),
(40, 1, 21, 'Confirmed'),
(41, 1, 22, 'Confirmed'),
(42, 1, 23, 'Confirmed'),
(43, 1, 24, 'Confirmed'),
(44, 1, 25, 'Confirmed'),
(45, 1, 26, 'Confirmed'),
(46, 1, 27, 'Confirmed'),
(47, 1, 28, 'Confirmed'),
(51, 1, 29, 'Confirmed'),
(52, 1, 4, 'Confirmed'),
(58, 1, 1, 'Added to cart'),
(59, 6, 1, 'Added to cart'),
(60, 6, 2, 'Added to cart'),
(61, 6, 3, 'Added to cart'),
(62, 7, 1, 'Added to cart'),
(63, 7, 2, 'Added to cart'),
(64, 7, 3, 'Added to cart'),
(65, 7, 5, 'Added to cart'),
(66, 7, 6, 'Added to cart'),
(67, 7, 4, 'Added to cart'),
(68, 7, 12, 'Added to cart'),
(69, 7, 11, 'Added to cart'),
(70, 7, 10, 'Added to cart'),
(71, 7, 9, 'Added to cart'),
(72, 7, 7, 'Added to cart'),
(73, 7, 8, 'Added to cart'),
(74, 7, 15, 'Added to cart'),
(75, 7, 14, 'Added to cart'),
(76, 7, 13, 'Added to cart'),
(77, 7, 16, 'Added to cart'),
(78, 7, 17, 'Added to cart'),
(79, 7, 18, 'Added to cart'),
(80, 7, 19, 'Added to cart'),
(81, 7, 20, 'Added to cart'),
(82, 7, 21, 'Added to cart'),
(83, 7, 24, 'Added to cart'),
(84, 7, 23, 'Added to cart'),
(85, 7, 22, 'Added to cart'),
(86, 7, 25, 'Added to cart'),
(87, 7, 26, 'Added to cart'),
(88, 7, 27, 'Added to cart'),
(89, 7, 30, 'Added to cart'),
(90, 7, 29, 'Added to cart');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
