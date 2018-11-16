-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2018 at 08:16 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `farm_info`
--

DROP TABLE IF EXISTS `farm_info`;
CREATE TABLE IF NOT EXISTS `farm_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty_planted` int(11) NOT NULL DEFAULT '0',
  `qty_harvested` int(11) NOT NULL DEFAULT '0',
  `on_harvest_waste` int(11) NOT NULL DEFAULT '0',
  `post_harvest_waste` int(11) NOT NULL DEFAULT '0',
  `crop_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farm_info`
--

INSERT INTO `farm_info` (`id`, `qty_planted`, `qty_harvested`, `on_harvest_waste`, `post_harvest_waste`, `crop_id`) VALUES
(1, 100, 86, 14, 20, 1),
(2, 85, 73, 10, 0, 1),
(3, 50, 38, 12, 5, 1),
(4, 120, 92, 28, 16, 1),
(5, 300, 258, 42, 36, 1),
(6, 60, 42, 18, 12, 1),
(7, 220, 182, 48, 33, 1),
(8, 75, 65, 10, 8, 2),
(9, 85, 68, 17, 13, 2),
(10, 145, 124, 21, 17, 2),
(11, 89, 64, 25, 9, 2),
(12, 375, 363, 12, 52, 2),
(13, 280, 150, 130, 33, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
