-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 09:09 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_diving_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dcleisure_pricing_options`
--

CREATE TABLE IF NOT EXISTS `tbl_dcleisure_pricing_options` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_unit` varchar(100) DEFAULT NULL,
  `max_dive_day` int(20) DEFAULT NULL,
  `product_max_day` varchar(255) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `discount_bulk_purchase` varchar(100) DEFAULT NULL,
  `discount_unit` varchar(100) DEFAULT NULL,
  `range_start` varchar(255) DEFAULT NULL,
  `range_end` varchar(255) DEFAULT NULL,
  `discount_rate` varchar(255) DEFAULT NULL,
  `apply_promo` varchar(50) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ap_discount_unit` varchar(50) DEFAULT NULL,
  `ap_discount_rate` int(20) DEFAULT NULL,
  `apply_promo_bilk_discount` varchar(20) DEFAULT NULL,
  `optional_services` varchar(50) DEFAULT NULL,
  `optional_services_price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
