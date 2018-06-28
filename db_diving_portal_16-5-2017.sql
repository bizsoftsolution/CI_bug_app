-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 01:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diving_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_background` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_background`, `image1`, `image2`) VALUES
(1, '1.jpg', '#myCarousel', 'active'),
(2, '2.jpg', '#myCarousel', ''),
(3, '3.jpg', '#myCarousel', ''),
(4, '4.jpg', '#myCarousel', '');

-- --------------------------------------------------------

--
-- Table structure for table `daily_plan`
--

CREATE TABLE `daily_plan` (
  `daily_plan` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `island_id` int(11) NOT NULL,
  `per_day_amount` double(18,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `popular_dive_destination` varchar(100) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daily_plan`
--

INSERT INTO `daily_plan` (`daily_plan`, `country_id`, `island_id`, `per_day_amount`, `image`, `popular_dive_destination`) VALUES
(1, 2, 1, 600.00, '1.jpg', 'Yes'),
(2, 5, 2, 300.00, '2.jpg', 'Yes'),
(3, 6, 4, 0.00, '3.jpg', 'Yes'),
(4, 3, 3, 0.00, '4.jpg', 'Yes'),
(8, 2, 6, 4500.00, '11.jpg', 'Yes'),
(9, 7, 5, 5400.00, '22.jpg', 'Yes'),
(10, 3, 3, 6000.00, '12.jpg', 'Yes'),
(11, 2, 8, 700.00, '41.jpg', 'Yes'),
(12, 3, 4, 500.00, '31.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `dive_center`
--

CREATE TABLE `dive_center` (
  `dive_center_id` int(11) NOT NULL,
  `center_name` varchar(250) NOT NULL,
  `address1` varchar(250) NOT NULL,
  `address2` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(75) NOT NULL,
  `country_id` int(11) NOT NULL,
  `island_id` int(11) NOT NULL,
  `contact_person_name` varchar(250) NOT NULL,
  `contact_no` bigint(16) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `center_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dive_center`
--

INSERT INTO `dive_center` (`dive_center_id`, `center_name`, `address1`, `address2`, `city`, `state`, `country_id`, `island_id`, `contact_person_name`, `contact_no`, `email_id`, `center_image`) VALUES
(1, 'Asia Diving Vacation', 'abc 3rd Floor, Block C', 'Damai Plaza IV 88300', 'Kota Kinabalu', 'paula', 3, 2, 'adam', 6023356988, 'adam@g.com', '2.jpg'),
(2, 'Cbc dive center', '123 dsknsdns', 'piosdsak', 'jgggkgubbj', '', 2, 1, 'sdsdvn', 9687456445, 'vghgh@gmail.com', '1.jpg'),
(3, 'ggg dive center', '45 dsnfdsfnsd', 'dsakasdk', 'paul kdsds', '', 2, 8, 'hajhbj', 4646464446, 'hh@g.com', '3.jpg'),
(4, 'rps dive center', 'dsf', 'dsfsf', 'selangur', '', 1, 18, 'fgdfg', 9555955, 'fg@g.com', '2.jpg'),
(5, 'Asia Diving Vacation', 'abc 3rd Floor, Block C', 'Damai Plaza IV 88300', 'Kota Kinabalu', 'paula', 3, 2, 'adam', 6023356988, 'adam@g.com', '2.jpg'),
(6, 'Cbc dive center', '123 dsknsdns', 'piosdsak', 'jgggkgubbj', '', 2, 1, 'sdsdvn', 9687456445, 'vghgh@gmail.com', '1.jpg'),
(7, 'ggg dive center', '45 dsnfdsfnsd', 'dsakasdk', 'paul kdsds', '', 2, 8, 'hajhbj', 4646464446, 'hh@g.com', '3.jpg'),
(8, 'rps dive center', 'dsf', 'dsfsf', 'selangur', '', 1, 18, 'fgdfg', 9555955, 'fg@g.com', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` char(20) DEFAULT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `photo`) VALUES
(7, 'annnn', '', ''),
(10, 'a', '', ''),
(11, 'a', '', ''),
(12, 'aaaa3434343', '', ''),
(13, 'asa22', '', ''),
(14, 'aaa', 'aa', ''),
(15, 'aaa', 'aa', ''),
(16, ' njk', '', ''),
(17, 'aaaaaa', 'aa', 'Screenshot (8).png'),
(18, 'aaaaaa', 'aa', ''),
(19, 'nnn', 'nnn', ''),
(20, 'nnn', 'nnn', '');

-- --------------------------------------------------------

--
-- Table structure for table `facebook_user`
--

CREATE TABLE `facebook_user` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facebook_user`
--

INSERT INTO `facebook_user` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture_url`, `profile_url`, `created`, `modified`) VALUES
(1, 'facebook', '1328226313922129', 'Raj', 'Kumar', 'Raj', 'male', 'en_GB', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.2.50.50/p50x50/17796156_1298385666906194_5859451471142001804_n.jpg?oh=59060513ef6d822be8ddf3ff68e5941c&oe=5974E079', 'https://www.facebook.com/1328226313922129', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'facebook', '1328226313922129', 'Raj', 'Kumar', 'Raj', 'male', 'en_GB', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.2.50.50/p50x50/17796156_1298385666906194_5859451471142001804_n.jpg?oh=59060513ef6d822be8ddf3ff68e5941c&oe=5974E079', 'https://www.facebook.com/1328226313922129', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'facebook', '1328226313922129', 'Raj', 'Kumar', 'Raj', 'male', 'en_GB', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.2.50.50/p50x50/17796156_1298385666906194_5859451471142001804_n.jpg?oh=59060513ef6d822be8ddf3ff68e5941c&oe=5974E079', 'https://www.facebook.com/1328226313922129', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `filter_infrastructure`
--

CREATE TABLE `filter_infrastructure` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter_infrastructure`
--

INSERT INTO `filter_infrastructure` (`id`, `name`) VALUES
(1, 'CLASSROOM'),
(2, 'SHOWER'),
(3, 'LONGE'),
(4, 'BAR'),
(5, 'EQUIPMENT SHOP'),
(6, 'WASH CABIN'),
(7, 'WI-FI'),
(8, 'AC'),
(9, 'LOCKER');

-- --------------------------------------------------------

--
-- Table structure for table `filter_language`
--

CREATE TABLE `filter_language` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter_language`
--

INSERT INTO `filter_language` (`id`, `name`) VALUES
(1, 'ENGLISH'),
(2, 'JAPANESE'),
(3, 'GERMAN'),
(4, 'FRENCH'),
(5, 'MALAY');

-- --------------------------------------------------------

--
-- Table structure for table `googleplus_user`
--

CREATE TABLE `googleplus_user` (
  `id` int(15) NOT NULL,
  `google_id` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googleplus_user`
--

INSERT INTO `googleplus_user` (`id`, `google_id`, `name`, `first_name`, `last_name`, `email`, `gender`, `photo`) VALUES
(1, '111119531509452736334', 'Rajkumar Subramaniam', 'Rajkumar', 'Subramaniam', 'rajkumar.bizsoft@gmail.com', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg'),
(2, '111119531509452736334', 'Rajkumar Subramaniam', 'Rajkumar', 'Subramaniam', 'rajkumar.bizsoft@gmail.com', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg'),
(3, '111119531509452736334', 'Rajkumar Subramaniam', 'Rajkumar', 'Subramaniam', 'rajkumar.bizsoft@gmail.com', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg'),
(4, '111119531509452736334', 'Rajkumar Subramaniam', 'Rajkumar', 'Subramaniam', 'rajkumar.bizsoft@gmail.com', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg'),
(5, '111119531509452736334', 'Rajkumar Subramaniam', 'Rajkumar', 'Subramaniam', 'rajkumar.bizsoft@gmail.com', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg'),
(6, '111119531509452736334', 'Rajkumar Subramaniam', 'Rajkumar', 'Subramaniam', 'rajkumar.bizsoft@gmail.com', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg'),
(7, '111119531509452736334', 'Rajkumar Subramaniam', 'Rajkumar', 'Subramaniam', 'rajkumar.bizsoft@gmail.com', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `expanded` varchar(50) NOT NULL DEFAULT 'false',
  `children` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `expanded`, `children`) VALUES
(1, 'dive my pussy', 'false', ''),
(2, 'full day boat trip', 'false', ''),
(3, 'diving', 'false', ''),
(4, 'shore dive', 'false', ''),
(5, 'full equipment rental', 'false', ''),
(6, '2 dive per day', 'false', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_read` enum('0','1') NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_name` varchar(30) NOT NULL,
  `from_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `message`, `is_read`, `time`, `to_name`, `from_name`) VALUES
(23, 33, 40, 'hdgsfgadhfgdhfgh', '0', '2017-04-24 03:46:48', 'admin', 'super_admin'),
(24, 33, 41, 'hello', '0', '2017-04-24 03:49:20', 'Mk', 'super_admin'),
(25, 33, 40, 'how r u', '0', '2017-04-24 03:50:23', 'admin', 'super_admin'),
(26, 40, 33, 'dfjgsdhfh', '0', '2017-04-24 03:53:32', 'super_admin', 'viji'),
(27, 33, 41, 'dfsfdfdsf', '0', '2017-04-24 01:48:47', 'Mk', 'Super Admin'),
(28, 33, 41, 'dfsfdfdsf', '0', '2017-04-24 01:49:20', 'Mk', 'Super Admin'),
(29, 33, 41, 'hjhjghj', '0', '2017-04-24 01:49:31', 'Mk', 'Super Admin'),
(30, 33, 41, 'hjhjghj', '0', '2017-04-24 01:49:51', 'Mk', 'Super Admin'),
(31, 33, 41, 'dfgfdgdfgfg', '0', '2017-04-24 01:50:25', 'Mk', 'Super Admin'),
(32, 33, 41, 'dfgfdgdfgfg', '0', '2017-04-24 01:51:19', 'Mk', 'Super Admin'),
(48, 33, 41, 'fgfg', '0', '2017-04-24 01:54:12', 'Mk', 'Super Admin'),
(49, 33, 41, 'fgfg', '0', '2017-04-24 01:54:13', 'Mk', 'Super Admin'),
(50, 33, 41, 'fgfg', '0', '2017-04-24 01:54:13', 'Mk', 'Super Admin'),
(51, 33, 41, 'fgfg', '0', '2017-04-24 01:54:13', 'Mk', 'Super Admin'),
(52, 33, 41, 'fgfg', '0', '2017-04-24 01:54:13', 'Mk', 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `product_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 1, 'ASUS Laptop 1500', '799.00', 'asus-laptop.jpg'),
(2, 1, 'Microsoft Surface Pro 3', '898.00', 'surface-pro.jpg'),
(3, 1, 'Samsung EVO 32GB', '12.00', 'samsung-sd-card.jpg'),
(4, 1, 'Desktop Hard Drive', '50.00', 'computer-hard-disk.jpg'),
(5, 1, 'External Hard Drive', '80.00', 'external-hard-disk.jpg'),
(6, 2, 'Crock-Pot Oval Slow Cooker', '34.00', 'crok-pot-cooker.jpg'),
(7, 2, 'Magic Blender System', '80.00', 'blender.jpg'),
(8, 2, 'Cordless Hand Vacuum', '40.00', 'vaccum-cleaner.jpg'),
(9, 2, 'Dishwasher Detergent', '15.00', 'detergent-powder.jpg'),
(10, 2, 'Essential Oil Diffuser', '20.00', 'unpower-difuser.jpg'),
(11, 3, 'Medical Personalized', '11.00', 'hand-bag.jpg'),
(12, 3, 'Best Bridle Leather Belt', '64.00', 'mens-belt.jpg'),
(13, 3, 'HANDMADE Bow set', '24.00', 'pastal-colors.jpg'),
(14, 3, 'Ceramic Coffee Mug', '18.00', 'coffee-mug.jpg'),
(15, 3, 'Wine Birthday Glass', '18.00', 'wine-glass.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `price` double(18,2) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`product_id`, `product_name`, `product_image`, `price`, `product_description`) VALUES
(1, 'BCD', 'BCD.jpg', 500.00, 'dkjhfkdshfs ksdfnkdsnf ds fkdsfkds'),
(2, 'Dive Lignits', 'divelignits2.jpg', 350.00, 'vxcbxvcbxvcbvcbvbvcbvcb'),
(4, 'Fins', 'fins2.png', 450.00, 'dssfffffffdsfdsfds'),
(5, 'Gearbags', 'gearbags.jpg', 440.00, 'fdnfndsfdnsfnds'),
(6, 'Mask', 'masks.jpg', 560.00, 'dsfsffdfdfdf'),
(7, 'REBREATHERS', 'REBREATHERS1.jpg', 1500.00, 'czfdsfdfdf'),
(8, 'Regulator', 'regulator.jpg', 1000.00, 'xzcxzcxzcxzcxc'),
(9, 'Side Mount', 'side-mount.jpg', 1300.00, 'dfdasfdfdff'),
(10, 'Snorkel', 'Snorkel-set.jpg', 800.00, 'dsfsdfdsfdsfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `session_table`
--

CREATE TABLE `session_table` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_table`
--

INSERT INTO `session_table` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('09cd77954ea02b6e7a4cc268e61882adbe986c54', '::1', 1494929987, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343932393837323b757365725f69647c733a303a22223b757365725f747970657c733a303a22223b66697273745f6e616d657c733a303a22223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a303a22223b70617373776f72647c733a303a22223b6c6f676765645f696e7c733a353a2246414c5345223b),
('0a34225335ea55352683dbfcddcdfe1ed81319fd', '::1', 1494835826, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833353734383b),
('109cd8f18d75eee2c4579589042fcdefbe51b9eb', '::1', 1494837688, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833373431323b),
('1388c449381c2519bfbc0250048f3632514ea070', '::1', 1494933989, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343933333835323b757365725f69647c733a323a223333223b757365725f747970657c733a31303a22535550455241444d494e223b66697273745f6e616d657c733a31313a2253757065722041646d696e223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a363a227361646d696e223b70617373776f72647c733a333a22313233223b6c6f676765645f696e7c733a343a2254525545223b),
('15f3ed135388aa7a50497d52c1886d4a1de6df5c', '::1', 1494931200, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343933313037363b757365725f69647c733a323a223333223b757365725f747970657c733a31303a22535550455241444d494e223b66697273745f6e616d657c733a31313a2253757065722041646d696e223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a363a227361646d696e223b70617373776f72647c733a333a22313233223b6c6f676765645f696e7c733a343a2254525545223b),
('16751ad16f16bc3ced149ce878eb245b6909eab7', '::1', 1494845456, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834353230313b),
('24c7115642073d6d8481227813f831adcb8219a7', '::1', 1494832063, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833313936333b),
('456bedc7285203a2e319fe5f27de7d8d2a50989b', '::1', 1494843359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834333334373b),
('4ce27068c73f9a26116818c55a02ff0c2ad5974d', '::1', 1494830344, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833303039323b),
('4fd7fceb8f7e78b1b8da57f7c003744d917d8ea5', '::1', 1494909033, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343930393032343b),
('6072f121e6aa81dc476310d2dc27d28a48d91944', '::1', 1494929174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343932393131323b),
('6b5c3921bf85d79b578d2623263c230601fb2a46', '::1', 1494931430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343933313431353b757365725f69647c733a323a223333223b757365725f747970657c733a31303a22535550455241444d494e223b66697273745f6e616d657c733a31313a2253757065722041646d696e223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a363a227361646d696e223b70617373776f72647c733a333a22313233223b6c6f676765645f696e7c733a343a2254525545223b),
('6e7e79feb05f66d9cca668f27ee830d9e7805606', '::1', 1494922760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343932323636393b),
('72a2f80f9ac4c18d5606930b1c358bea8fbec094', '::1', 1494838206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833373932323b),
('72c149233519d8b30fb95a440f96b29dd4574f05', '::1', 1494830573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833303430393b),
('77ac96032d6f2ca1628b4ca230233f7040aef06f', '::1', 1494842470, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834323331373b),
('81d6d330a9a0bea09f211598aac0e040737572cf', '::1', 1494835740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833353333373b),
('83f8ec077d01f337d9411ad4d9e374da405e269c', '::1', 1494840490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834303231353b),
('85bb2342d6cbc606c37a30717a6f0ed034eee14b', '::1', 1494927105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343932373037303b),
('8cca3597725b9f5e6ac231d2e27d45ca1a43d4ef', '::1', 1494841912, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834313930363b),
('8daf6b4fabc82737cd090d5f800cf0bd6e9a4226', '::1', 1494923523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343932333430363b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a3839383b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226338316537323864396434633266363336663036376638396363313438363263223b613a363a7b733a323a226964223b733a313a2232223b733a343a226e616d65223b733a32333a224d6963726f736f667420537572666163652050726f2033223b733a333a22717479223b643a313b733a353a227072696365223b643a3839383b733a353a22726f776964223b733a33323a226338316537323864396434633266363336663036376638396363313438363263223b733a383a22737562746f74616c223b643a3839383b7d7d),
('9096af0da7e22d05337d9eae8e16080dcf1a85c6', '::1', 1494838578, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833383434333b),
('94f8ab0eb21821bb9718d1314669610463c58d7a', '::1', 1494836341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833363137393b),
('9c09aa9b83c152ebd47c4202d899ba393689bf95', '::1', 1494839011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833383739303b),
('a22f824abb3ae355fa2bacde383532c0d6c05cca', '::1', 1494839715, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833393432383b),
('aef8100a1d51c03cb4cdbc74dba3c822674cfc66', '::1', 1494839419, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833393132373b),
('c1f23bcd4d5650050405262370699dacbc73684e', '::1', 1494831291, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833313132343b),
('c2cda2c16e303241af9659834e1a767a1ab76b3b', '::1', 1494927713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343932373533393b),
('c65213654086fd5b9f773eb2b918f5c39b43b574', '::1', 1494841509, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834313232373b),
('c7d2f666b8f55dcdc075985dccfc166604dfaac2', '::1', 1494837311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833373039363b),
('c93d458de8ce5afcb3d295fd19a25d6ab2fece73', '::1', 1494841901, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834313533323b),
('d338ac84b6d5e3a25d55b884f037df5d6c6a0946', '::1', 1494840142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833393836393b),
('d8ea085a688ee9ab12d3baa56fb9ab0227284157', '::1', 1494928064, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343932373936363b),
('e5131e36488f90b359ef44836bf86a7ffc6890e2', '::1', 1494932570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343933323533363b757365725f69647c733a323a223333223b757365725f747970657c733a31303a22535550455241444d494e223b66697273745f6e616d657c733a31313a2253757065722041646d696e223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a363a227361646d696e223b70617373776f72647c733a333a22313233223b6c6f676765645f696e7c733a343a2254525545223b),
('ed84a3c1b0971bd6e2088111a575a4a1a91a164a', '::1', 1494922287, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343932323238353b),
('f4237e5f45144833bd01ab4dfbace3b910434ec9', '::1', 1494845831, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834353832303b),
('f5fbba2a1fd13d2923386f4049b0ea909d5f1f32', '::1', 1494848464, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343834383434373b),
('f9e6d64697c32d8d8f13999190205375f31544f6', '::1', 1494836849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343833363637393b);

-- --------------------------------------------------------

--
-- Table structure for table `special_offer`
--

CREATE TABLE `special_offer` (
  `special_offer_id` int(11) NOT NULL,
  `offer_image` varchar(250) NOT NULL,
  `offer_period` varchar(20) NOT NULL,
  `price` double(18,2) NOT NULL,
  `starting_place_id` int(11) NOT NULL,
  `destination_place_id` int(11) NOT NULL,
  `start_km` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `dive_center_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `special_offer`
--

INSERT INTO `special_offer` (`special_offer_id`, `offer_image`, `offer_period`, `price`, `starting_place_id`, `destination_place_id`, `start_km`, `note`, `dive_center_id`) VALUES
(1, '1.jpg', '2 dive/day', 4500.00, 3, 4, '1200', '<p><strong>special offer dive center.</strong></p>\r\n', 1),
(2, '2.jpg', '1 dive/day', 2500.00, 2, 3, '1700000', '<p>sdhkfdsbdfdfbdkbfkdf, kdsbfkdbks</p>\r\n', 2),
(3, '3.jpg', '2 dive/day', 1800.00, 3, 2, '2500000', '<p>dsndsfmds</p>\r\n', 5),
(4, '4.jpg', '2 dive/day', 600.00, 3, 3, '25000', '<p>bjdsdsdksdbsd</p>\r\n', 3),
(5, '1.jpg', '2 dive/day', 2500.00, 3, 2, '17000', 'dsfdsfdf', 4),
(6, '1.jpg', '2 dive/day', 4500.00, 3, 4, '1200', '<p><strong>special offer dive center.</strong></p>\r\n', 6),
(7, '2.jpg', '1 dive/day', 2500.00, 2, 3, '1700000', '<p>sdhkfdsbdfdfbdkbfkdf, kdsbfkdbks</p>\r\n', 7),
(8, '3.jpg', '2 dive/day', 1800.00, 3, 2, '2500000', '<p>dsndsfmds</p>\r\n', 8),
(9, '4.jpg', '2 dive/day', 600.00, 3, 3, '25000', '<p>bjdsdsdksdbsd</p>\r\n', 1),
(10, '1.jpg', '2 dive/day', 2500.00, 3, 2, '17000', 'dsfdsfdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_policies`
--

CREATE TABLE `tbl_booking_policies` (
  `id` int(15) NOT NULL,
  `booking_name` varchar(255) DEFAULT NULL,
  `deposit_required` varchar(100) NOT NULL,
  `booking_deposit` varchar(255) NOT NULL,
  `booking_amount` varchar(100) DEFAULT NULL,
  `booking_total_product` varchar(255) DEFAULT NULL,
  `booking_days` varchar(255) DEFAULT NULL,
  `booking_period` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking_policies`
--

INSERT INTO `tbl_booking_policies` (`id`, `booking_name`, `deposit_required`, `booking_deposit`, `booking_amount`, `booking_total_product`, `booking_days`, `booking_period`) VALUES
(1, 'dfgdfg', 'Yes', 'Partial', 'gfhgf', 'jjj', 'gfh', 'jjj'),
(2, 'dsfdsf', 'Yes', 'Partial', 'ddcsa,xsds', 'jjj,kkk', '50,50', 'jjj,kkk'),
(3, 'dsfdsf', 'Yes', 'Full Prepayment', '', '', '', 'After Booking Date');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cancellation_policies`
--

CREATE TABLE `tbl_cancellation_policies` (
  `id` int(15) NOT NULL,
  `cancellation_name` varchar(255) DEFAULT NULL,
  `cancellation_policy_type` varchar(255) NOT NULL,
  `cancellation_amount` varchar(100) DEFAULT NULL,
  `cancellation_total_product` varchar(255) DEFAULT NULL,
  `cancellation_days` varchar(255) DEFAULT NULL,
  `cancellation_period` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cancellation_policies`
--

INSERT INTO `tbl_cancellation_policies` (`id`, `cancellation_name`, `cancellation_policy_type`, `cancellation_amount`, `cancellation_total_product`, `cancellation_days`, `cancellation_period`) VALUES
(1, 'sdsa', 'Cancellation with Penalty', '50', '% of Product Total', '2', 'After Booking Date'),
(2, 'gdfg', 'Cancellation with Penalty', '25', '% of Product Total', '3', 'After Booking Date'),
(3, 'gfdfg', 'Cancellation with Penalty', '50', '% of Product Total', '2', 'Before Date of Arrival'),
(4, 'sdfdfsffdsfdsf', 'Cancellation with Penalty', '1,2', 'USD,% of Product Total', '2,3', 'Before Date of Arrival,After Booking Date');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts_divemaster`
--

CREATE TABLE `tbl_contacts_divemaster` (
  `id` int(15) NOT NULL,
  `images` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `cert_body` varchar(100) NOT NULL,
  `id_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contacts_divemaster`
--

INSERT INTO `tbl_contacts_divemaster` (`id`, `images`, `name`, `position`, `cert_body`, `id_no`) VALUES
(1, '', 'Justin', 'Dive Master', 'PADI', 'A1234-S, B1234-I');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts_staffdetails`
--

CREATE TABLE `tbl_contacts_staffdetails` (
  `id` int(15) NOT NULL,
  `dept_name` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contacts_staffdetails`
--

INSERT INTO `tbl_contacts_staffdetails` (`id`, `dept_name`, `name`, `contact_no`, `email`) VALUES
(1, 3, 'Justin', '012-1234567', 'Justin@tdc.com.my');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(25) NOT NULL,
  `is_deactivate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`, `country_code`, `is_deactivate`) VALUES
(1, 'Malaysia', 'MY', 'N'),
(2, 'Thailand', 'TH', 'Y'),
(3, 'Indonesia', 'ID', 'Y'),
(4, 'Philippines', 'PH', 'Y'),
(5, 'Vietnam', 'VN', 'Y'),
(6, 'Cambodia', 'KH', 'Y'),
(7, 'Laos', 'LA', 'Y'),
(8, 'Myanmar', 'MM', 'Y'),
(9, 'Singapore', 'SG', 'Y'),
(10, 'Brunei Darussalam', 'BN', 'Y'),
(11, 'Timor-Leste', 'TL', 'Y'),
(12, 'China', 'CN', 'Y'),
(13, 'Afghanistan', 'AF', 'Y'),
(14, 'Aland Islands', 'AX', 'Y'),
(15, 'Albania', 'AL', 'Y'),
(16, 'Algeria', 'DZ', 'Y'),
(17, 'American Samoa', 'AS', 'Y'),
(18, 'Andorra', 'AD', 'Y'),
(19, 'Angola', 'AO', 'Y'),
(20, 'Anguilla', 'AI', 'Y'),
(21, 'Antarctica', 'AQ', 'Y'),
(22, 'Antigua and Barbuda', 'AG', 'Y'),
(23, 'Argentina', 'AR', 'Y'),
(24, 'Armenia', 'AM', 'Y'),
(25, 'Aruba', 'AW', 'Y'),
(26, 'Australia', 'AU', 'Y'),
(27, 'Austria', 'AT', 'Y'),
(28, 'Azerbaijan', 'AZ', 'Y'),
(29, 'Bahamas', 'BS', 'Y'),
(30, 'Bahrain', 'BH', 'Y'),
(31, 'Bangladesh', 'BD', 'Y'),
(32, 'Barbados', 'BB', 'Y'),
(33, 'Belarus', 'BY', 'Y'),
(34, 'Belgium', 'BE', 'Y'),
(35, 'Belize', 'BZ', 'Y'),
(36, 'Benin', 'BJ', 'Y'),
(37, 'Bermuda', 'BM', 'Y'),
(38, 'Bhutan', 'BT', 'Y'),
(39, 'Bolivia', 'BO', 'Y'),
(40, 'Bosnia and Herzegovina', 'BA', 'Y'),
(41, 'Botswana', 'BW', 'Y'),
(42, 'Bouvet Island', 'BV', 'Y'),
(43, 'Brazil', 'BR', 'Y'),
(44, 'British Virgin Islands', 'VG', 'Y'),
(45, 'British Indian Ocean Territory', 'IO', 'Y'),
(46, 'Bulgaria', 'BG', 'Y'),
(47, 'Burkina Faso', 'BF', 'Y'),
(48, 'Burundi', 'BI', 'Y'),
(49, 'Cameroon', 'CM', 'Y'),
(50, 'Canada', 'CA', 'Y'),
(51, 'Cape Verde', 'CV', 'Y'),
(52, 'Cayman Islands', 'KY', 'Y'),
(53, 'Central African Republic', 'CF', 'Y'),
(54, 'Chad', 'TD', 'Y'),
(55, 'Chile', 'CL', 'Y'),
(56, 'Hong Kong, SAR China', 'HK', 'Y'),
(57, 'Macao, SAR China', 'MO', 'Y'),
(58, 'Christmas Island', 'CX', 'Y'),
(59, 'Cocos (Keeling) Islands', 'CC', 'Y'),
(60, 'Colombia', 'CO', 'Y'),
(61, 'Comoros', 'KM', 'Y'),
(62, 'Congo?(Brazzaville)', 'CG', 'Y'),
(63, 'Congo, (Kinshasa)', 'CD', 'Y'),
(64, 'Cook Islands', 'CK', 'Y'),
(65, 'Costa Rica', 'CR', 'Y'),
(66, 'C?te d\'Ivoire', 'CI', 'Y'),
(67, 'Croatia', 'HR', 'Y'),
(68, 'Cuba', 'CU', 'Y'),
(69, 'Cyprus', 'CY', 'Y'),
(70, 'Czech Republic', 'CZ', 'Y'),
(71, 'Denmark', 'DK', 'Y'),
(72, 'Djibouti', 'DJ', 'Y'),
(73, 'Dominica', 'DM', 'Y'),
(74, 'Dominican Republic', 'DO', 'Y'),
(75, 'Ecuador', 'EC', 'Y'),
(76, 'Egypt', 'EG', 'Y'),
(77, 'El Salvador', 'SV', 'Y'),
(78, 'Equatorial Guinea', 'GQ', 'Y'),
(79, 'Eritrea', 'ER', 'Y'),
(80, 'Estonia', 'EE', 'Y'),
(81, 'Ethiopia', 'ET', 'Y'),
(82, 'Falkland Islands (Malvinas)', 'FK', 'Y'),
(83, 'Faroe Islands', 'FO', 'Y'),
(84, 'Fiji', 'FJ', 'Y'),
(85, 'Finland', 'FI', 'Y'),
(86, 'France', 'FR', 'Y'),
(87, 'French Guiana', 'GF', 'Y'),
(88, 'French Polynesia', 'PF', 'Y'),
(89, 'French Southern Territories', 'TF', 'Y'),
(90, 'Gabon', 'GA', 'Y'),
(91, 'Gambia', 'GM', 'Y'),
(92, 'Georgia', 'GE', 'Y'),
(93, 'Germany', 'DE', 'Y'),
(94, 'Ghana', 'GH', 'Y'),
(95, 'Gibraltar', 'GI', 'Y'),
(96, 'Greece', 'GR', 'Y'),
(97, 'Greenland', 'GL', 'Y'),
(98, 'Grenada', 'GD', 'Y'),
(99, 'Guadeloupe', 'GP', 'Y'),
(100, 'Guam', 'GU', 'Y'),
(101, 'Guatemala', 'GT', 'Y'),
(102, 'Guernsey', 'GG', 'Y'),
(103, 'Guinea', 'GN', 'Y'),
(104, 'Guinea-Bissau', 'GW', 'Y'),
(105, 'Guyana', 'GY', 'Y'),
(106, 'Haiti', 'HT', 'Y'),
(107, 'Heard and Mcdonald Islands', 'HM', 'Y'),
(108, 'Holy See?(Vatican City State)', 'VA', 'Y'),
(109, 'Honduras', 'HN', 'Y'),
(110, 'Hungary', 'HU', 'Y'),
(111, 'Iceland', 'IS', 'Y'),
(112, 'India', 'IN', 'Y'),
(113, 'Iran, Islamic Republic of', 'IR', 'Y'),
(114, 'Iraq', 'IQ', 'Y'),
(115, 'Ireland', 'IE', 'Y'),
(116, 'Isle of Man', 'IM', 'Y'),
(117, 'Israel', 'IL', 'Y'),
(118, 'Italy', 'IT', 'Y'),
(119, 'Jamaica', 'JM', 'Y'),
(120, 'Japan', 'JP', 'Y'),
(121, 'Jersey', 'JE', 'Y'),
(122, 'Jordan', 'JO', 'Y'),
(123, 'Kazakhstan', 'KZ', 'Y'),
(124, 'Kenya', 'KE', 'Y'),
(125, 'Kiribati', 'KI', 'Y'),
(126, 'Korea?(North)', 'KP', 'Y'),
(127, 'Korea?(South)', 'KR', 'Y'),
(128, 'Kuwait', 'KW', 'Y'),
(129, 'Kyrgyzstan', 'KG', 'Y'),
(130, 'Latvia', 'LV', 'Y'),
(131, 'Lebanon', 'LB', 'Y'),
(132, 'Lesotho', 'LS', 'Y'),
(133, 'Liberia', 'LR', 'Y'),
(134, 'Libya', 'LY', 'Y'),
(135, 'Liechtenstein', 'LI', 'Y'),
(136, 'Lithuania', 'LT', 'Y'),
(137, 'Luxembourg', 'LU', 'Y'),
(138, 'Macedonia, Republic of', 'MK', 'Y'),
(139, 'Madagascar', 'MG', 'Y'),
(140, 'Malawi', 'MW', 'Y'),
(141, 'Maldives', 'MV', 'Y'),
(142, 'Mali', 'ML', 'Y'),
(143, 'Malta', 'MT', 'Y'),
(144, 'Marshall Islands', 'MH', 'Y'),
(145, 'Martinique', 'MQ', 'Y'),
(146, 'Mauritania', 'MR', 'Y'),
(147, 'Mauritius', 'MU', 'Y'),
(148, 'Mayotte', 'YT', 'Y'),
(149, 'Mexico', 'MX', 'Y'),
(150, 'Micronesia, Federated States of', 'FM', 'Y'),
(151, 'Moldova', 'MD', 'Y'),
(152, 'Monaco', 'MC', 'Y'),
(153, 'Mongolia', 'MN', 'Y'),
(154, 'Montenegro', 'ME', 'Y'),
(155, 'Montserrat', 'MS', 'Y'),
(156, 'Morocco', 'MA', 'Y'),
(157, 'Mozambique', 'MZ', 'Y'),
(158, 'Namibia', 'NA', 'Y'),
(159, 'Nauru', 'NR', 'Y'),
(160, 'Nepal', 'NP', 'Y'),
(161, 'Netherlands', 'NL', 'Y'),
(162, 'Netherlands Antilles', 'AN', 'Y'),
(163, 'New Caledonia', 'NC', 'Y'),
(164, 'New Zealand', 'NZ', 'Y'),
(165, 'Nicaragua', 'NI', 'Y'),
(166, 'Niger', 'NE', 'Y'),
(167, 'Nigeria', 'NG', 'Y'),
(168, 'Niue', 'NU', 'Y'),
(169, 'Norfolk Island', 'NF', 'Y'),
(170, 'Northern Mariana Islands', 'MP', 'Y'),
(171, 'Norway', 'NO', 'Y'),
(172, 'Oman', 'OM', 'Y'),
(173, 'Pakistan', 'PK', 'Y'),
(174, 'Palau', 'PW', 'Y'),
(175, 'Palestinian Territory', 'PS', 'Y'),
(176, 'Panama', 'PA', 'Y'),
(177, 'Papua New Guinea', 'PG', 'Y'),
(178, 'Paraguay', 'PY', 'Y'),
(179, 'Peru', 'PE', 'Y'),
(180, 'Pitcairn', 'PN', 'Y'),
(181, 'Poland', 'PL', 'Y'),
(182, 'Portugal', 'PT', 'Y'),
(183, 'Puerto Rico', 'PR', 'Y'),
(184, 'Qatar', 'QA', 'Y'),
(185, 'R?union', 'RE', 'Y'),
(186, 'Romania', 'RO', 'Y'),
(187, 'Russian Federation', 'RU', 'Y'),
(188, 'Rwanda', 'RW', 'Y'),
(189, 'Saint-Barth?lemy', 'BL', 'Y'),
(190, 'Saint Helena', 'SH', 'Y'),
(191, 'Saint Kitts and Nevis', 'KN', 'Y'),
(192, 'Saint Lucia', 'LC', 'Y'),
(193, 'Saint-Martin (French part)', 'MF', 'Y'),
(194, 'Saint Pierre and Miquelon', 'PM', 'Y'),
(195, 'Saint Vincent and Grenadines', 'VC', 'Y'),
(196, 'Samoa', 'WS', 'Y'),
(197, 'San Marino', 'SM', 'Y'),
(198, 'Sao Tome and Principe', 'ST', 'Y'),
(199, 'Saudi Arabia', 'SA', 'Y'),
(200, 'Senegal', 'SN', 'Y'),
(201, 'Serbia', 'RS', 'Y'),
(202, 'Seychelles', 'SC', 'Y'),
(203, 'Sierra Leone', 'SL', 'Y'),
(204, 'Slovakia', 'SK', 'Y'),
(205, 'Slovenia', 'SI', 'Y'),
(206, 'Solomon Islands', 'SB', 'Y'),
(207, 'Somalia', 'SO', 'Y'),
(208, 'South Africa', 'ZA', 'Y'),
(209, 'South Georgia and the South Sandwich Islands', 'GS', 'Y'),
(210, 'South Sudan', 'SS', 'Y'),
(211, 'Spain', 'ES', 'Y'),
(212, 'Sri Lanka', 'LK', 'Y'),
(213, 'Sudan', 'SD', 'Y'),
(214, 'Suriname', 'SR', 'Y'),
(215, 'Svalbard and Jan Mayen Islands', 'SJ', 'Y'),
(216, 'Swaziland', 'SZ', 'Y'),
(217, 'Sweden', 'SE', 'Y'),
(218, 'Switzerland', 'CH', 'Y'),
(219, 'Syrian Arab Republic?(Syria)', 'SY', 'Y'),
(220, 'Taiwan, Republic of China', 'TW', 'Y'),
(221, 'Tajikistan', 'TJ', 'Y'),
(222, 'Tanzania, United Republic of', 'TZ', 'Y'),
(223, 'Togo', 'TG', 'Y'),
(224, 'Tokelau', 'TK', 'Y'),
(225, 'Tonga', 'TO', 'Y'),
(226, 'Trinidad and Tobago', 'TT', 'Y'),
(227, 'Tunisia', 'TN', 'Y'),
(228, 'Turkey', 'TR', 'Y'),
(229, 'Turkmenistan', 'TM', 'Y'),
(230, 'Turks and Caicos Islands', 'TC', 'Y'),
(231, 'Tuvalu', 'TV', 'Y'),
(232, 'Uganda', 'UG', 'Y'),
(233, 'Ukraine', 'UA', 'Y'),
(234, 'United Arab Emirates', 'AE', 'Y'),
(235, 'United Kingdom', 'GB', 'Y'),
(236, 'United States of America', 'US', 'Y'),
(237, 'US Minor Outlying Islands', 'UM', 'Y'),
(238, 'Uruguay', 'UY', 'Y'),
(239, 'Uzbekistan', 'UZ', 'Y'),
(240, 'Vanuatu', 'VU', 'Y'),
(241, 'Venezuela?(Bolivarian Republic)', 'VE', 'Y'),
(242, 'Virgin Islands, US', 'VI', 'Y'),
(243, 'Wallis and Futuna Islands', 'WF', 'Y'),
(244, 'Western Sahara', 'EH', 'Y'),
(245, 'Yemen', 'YE', 'Y'),
(246, 'Zambia', 'ZM', 'Y'),
(247, 'Zimbabwe', 'ZW', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `id` int(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`id`, `description`) VALUES
(1, '<p>Let&#39;s review some basic dive physiology. Your middle ears are dead air spaces, connected to the outer world by the eustachian tubes running to the back of your throat (see illustration). When you fail to increase the pressure in your middle ears to match the building pressure around you, the result is pain and potential damage to the delicate mechanisms of the ear. But you knew that already.</p>\r\n\r\n<p>The key to safe equalizing is opening the normally closed eustachian tubes, allowing higher-pressure air from your throat to enter your middle ears. Most divers are taught to equalize by pinching their nose and blowing gently. Called the Valsalva Maneuver, it essentially forces the tubes open with air pressure.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE `tbl_currency` (
  `id` int(15) NOT NULL,
  `Currencycode` varchar(255) NOT NULL,
  `Currency` varchar(255) NOT NULL,
  `is_deactivate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`id`, `Currencycode`, `Currency`, `is_deactivate`) VALUES
(1, 'MYR', 'Malaysian ringgit', 'N'),
(2, 'USD', 'United States dollar', 'N'),
(3, 'THB', 'Thai Baht', 'Y'),
(4, 'IDR', 'Indonesian Rupiah', 'Y'),
(5, 'SGD', 'Singapore Dollar', 'Y'),
(6, 'VND', 'Vietnamese dong', 'Y'),
(7, 'PHP', 'Philippine Peso', 'Y'),
(8, 'KYAT', 'Burmese Kyat', 'Y'),
(9, 'BND', 'Bruneian dollar', 'Y'),
(10, 'LAK', 'Lao Kip', 'Y'),
(11, 'EUR', 'Euro', 'Y'),
(12, 'AED', 'Arab Emirates Dirham', 'Y'),
(13, 'ARS', 'Argentine Peso', 'Y'),
(14, 'AUD', 'Australian Dollar', 'Y'),
(15, 'BGN', 'Bulgarian Lev', 'Y'),
(16, 'BRL', 'Brazilian Real', 'Y'),
(17, 'CAD', 'Canadian Dollar', 'Y'),
(18, 'CHF', 'Swiss Franc', 'Y'),
(19, 'CLP', 'Chilean Peso', 'Y'),
(20, 'CNY', 'Chinese Yuan Renminbi', 'Y'),
(21, 'COP', 'Colombian Peso', 'Y'),
(22, 'CRC', 'Costa Rican Colon', 'Y'),
(23, 'CZK', 'Czech Koruna', 'Y'),
(24, 'DKK', 'Danish Krone', 'Y'),
(25, 'GBP', 'Pound sterling', 'Y'),
(26, 'HKD', 'Hong Kong dollar', 'Y'),
(27, 'HRK', 'Croatian Kuna', 'Y'),
(28, 'HUF', 'Hungarian Forint', 'Y'),
(29, 'ILS', 'Israeli Sheke', 'Y'),
(30, 'INR', 'Indian Rupee', 'Y'),
(31, 'JPY', 'Japanese Yen', 'Y'),
(32, 'KRW', 'North Korean won', 'Y'),
(33, 'MAD', 'Moroccan Dirham', 'Y'),
(34, 'MXN', 'Mexican peso', 'Y'),
(35, 'NOK', 'Norwegian Krone', 'Y'),
(36, 'NZD', 'New Zealand dollar', 'Y'),
(37, 'PEN', 'Peruvian Sol', 'Y'),
(38, 'PLN', 'Polish Zloty', 'Y'),
(39, 'RON', 'Romanian leu', 'Y'),
(40, 'RUB', 'Russian Ruble', 'Y'),
(41, 'SAR', 'Saudi riyal', 'Y'),
(42, 'SEK', 'Swedish Krona', 'Y'),
(43, 'TRY', 'Turkish lira', 'Y'),
(44, 'TWD', 'New Taiwan dollar', 'Y'),
(45, 'UAH', 'Ukrainian Hryvnia', 'Y'),
(46, 'UYU', 'Uruguayan peso', 'Y'),
(47, 'ZAR', 'South African rand', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customerprofile`
--

CREATE TABLE `tbl_customerprofile` (
  `id` int(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `nationality` varchar(50) NOT NULL,
  `diver_registration_body` varchar(255) NOT NULL,
  `identifiction_passport` varchar(100) NOT NULL,
  `diver_registration_level` varchar(100) NOT NULL,
  `diver_speciality_skill` text NOT NULL,
  `diver_card` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `address3` varchar(255) NOT NULL,
  `other_language` text NOT NULL,
  `name` varchar(150) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `relationship` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customerprofile`
--

INSERT INTO `tbl_customerprofile` (`id`, `firstname`, `lastname`, `gender`, `dob`, `email`, `contactno`, `photo`, `nationality`, `diver_registration_body`, `identifiction_passport`, `diver_registration_level`, `diver_speciality_skill`, `diver_card`, `language`, `currency`, `address1`, `address2`, `address3`, `other_language`, `name`, `contact_no`, `e_mail`, `relationship`) VALUES
(1, 'Raymond', 'Wong', 'Male', '1970-01-01', 'ray.wong@gmail.com', '+6016-2213456', '1483346768735.png', 'Malaysian', 'PADI', '', 'OWD', 'DEEP DIVING', '', 'ENGLISH', 'MYR', '10, Jalan testing 123', 'taman testing menjalara ', '56100 kepong, kuala lumpur', 'English,German,Mandarin', 'Melanie Wong', '+60123456789', 'melanie.wong@gmail.com', 'Sister');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dccourses`
--

CREATE TABLE `tbl_dccourses` (
  `id` int(15) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` text,
  `product_includes` varchar(100) DEFAULT NULL,
  `product_excludes` varchar(100) DEFAULT NULL,
  `common_options` text,
  `other_info` varchar(255) DEFAULT NULL,
  `product_category` varchar(100) DEFAULT NULL,
  `product_keyword` varchar(100) DEFAULT NULL,
  `sequence_number` int(20) DEFAULT NULL,
  `product_status` varchar(100) DEFAULT NULL,
  `product_unit` varchar(100) DEFAULT NULL,
  `max_dive_day` int(20) DEFAULT NULL,
  `product_max_day` int(20) DEFAULT NULL,
  `product_price` double(18,2) DEFAULT NULL,
  `discount_bulk_purchase` varchar(50) DEFAULT NULL,
  `discount_unit` varchar(50) DEFAULT NULL,
  `range_start` varchar(255) DEFAULT NULL,
  `range_end` varchar(255) DEFAULT NULL,
  `discount_rate` varchar(255) DEFAULT NULL,
  `apply_promo` varchar(50) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ap_discount_unit` varchar(50) DEFAULT NULL,
  `ap_discount_rate` int(20) DEFAULT NULL,
  `apply_promo_bilk_discount` varchar(20) DEFAULT NULL,
  `optional_services` varchar(255) DEFAULT NULL,
  `optional_services_price` varchar(255) DEFAULT NULL,
  `diver_certification` varchar(255) DEFAULT NULL,
  `diver_experience` varchar(255) DEFAULT NULL,
  `diver_specialties` varchar(255) DEFAULT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dccourses`
--

INSERT INTO `tbl_dccourses` (`id`, `product_name`, `product_description`, `product_includes`, `product_excludes`, `common_options`, `other_info`, `product_category`, `product_keyword`, `sequence_number`, `product_status`, `product_unit`, `max_dive_day`, `product_max_day`, `product_price`, `discount_bulk_purchase`, `discount_unit`, `range_start`, `range_end`, `discount_rate`, `apply_promo`, `start_date`, `end_date`, `ap_discount_unit`, `ap_discount_rate`, `apply_promo_bilk_discount`, `optional_services`, `optional_services_price`, `diver_certification`, `diver_experience`, `diver_specialties`, `user_id`) VALUES
(7, 'Discovery Scuba ', 'Experience the joy of scuba diving with our Discovery Scuba', '', '', NULL, '', 'Courses & Specialties', 'Dive Lesson', 1, 'Active', 'Pax', 1, 0, 200.00, '', NULL, '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'Non-Diver', '', '', 1),
(8, 'Padi Open Water Course', 'If you want to experience unparalleled adventure and see the world beneath the wave, take your first step as a Certified Diver by taking the Padi Open Water License. ', 'We provide the complete course in 3 days. Course include 2 Beach Dive and 2 Boat Dive.\nReading Mater', 'Accomodation', NULL, '0', 'Courses & Specialties', 'Dive Lesson', 2, 'Hidden', 'Pax', 1, 10, 700.00, 'No', NULL, '', '', '', 'Yes', '0000-00-00', '0000-00-00', '%', 10, NULL, NULL, '', 'Non-Diver', NULL, NULL, 1),
(9, 'Padi Advanced Open Water Course', '', '3D2N Accommodation (Basic Room), Jetty Transfer to Tioman Island', 'Marine Park Fees (RM10 Locals, RM30 Foreigners)', '', '', 'Courses & Specialties', 'Dive Lesson', 3, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 1),
(10, 'Padi Emergency Oxygen Provider', 'Learn about dive injuries, different types of emergency oxygen equipment and safety considerations when using oxygen', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 4, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 1),
(11, 'Padi AWARE - Fish ID', 'Learn to recognize what types of fish you see, you?ll find it easier to reference the exact species after a scuba dive', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 5, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 2),
(12, 'Padi Drift Diver', 'This course teaches you how to enjoy going with the flow as you scuba dive down rivers and use ocean currents to glide along. It feels like flying ? except that you?re underwater using scuba equipment. Drift diving can be relaxing and exhilarating at the same time', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 6, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 2),
(13, 'Padi Night Diver', 'Drop into a whole new night world and watch it come to life under the glow of your dive light. Learn what you can see in your light?s beam, on controlling your buoyancy by feel, on staying with your buddy and on paying attention to details you may overlook during the day', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 7, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 2),
(14, 'Padi Peak Performance Buoyancy', 'Excellent buoyancy control is what defines skilled scuba divers. Learn how to glide effortlessly, use less air and ascend, descend or hover almost as if by thought and easily observe aquatic life without disturbing their surroundings', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 8, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 2),
(15, 'Padi Multilevel Diver', 'Learn to understand more about dive computers and learn how you can use tools like the eRDPMLTM to plan multilevel dives', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 9, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 3),
(16, 'Padi Underwater Videography', 'Learn how to select, maintain and care for your underwater video equipment. Cover fundamentals such as exposure, focus, story line and sequencing. Post dive, you?ll learn about the editing process and how to produce a video that truly captures your scuba adventures and share the sights, sounds, motion and dynamics of the underwater world.', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 10, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 3),
(17, 'Padi Enriched Air Nitrox Diver', 'Scuba diving with enriched air nitrox gives you more no decompression time, especially on repetitive scuba dives. Learn why diving with air that has higher oxygen and lower nitrogen content gives you more bottom time, along with enriched air equipment considerations.', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 11, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 3),
(18, 'Padi Underwater Navigator', 'Fine-tune your observation skills and learn how to use your compass underwater more accurately. Learn the methods to estimate distance underwater, compass navigation, marking or relocating a submerged object or position from the surface and underwater map making.', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 12, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 3),
(19, 'Padi Digital Underwater Photography', 'Discover how to choose the right underwater camera system for you and use the PADI SEA (Shoot, Examine, Adjust) method for getting great shots quickly. Learn principles for good composition of underwater images and practical techniques to take great photos with your digital camera', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 13, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 4),
(20, 'Padi Dry Suit Diver', 'Want to stay warm? Want to extend your scuba diving season? Then dive dry. A dry suit seals you off from the water and keeps you comfortable, even in surprisingly cold water.', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 14, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 4),
(21, 'Padi Sidemount Diver', 'Having scuba tanks on your back isn?t a requirement for exploring the underwater world. Sidemount diving gives you flexibility and streamlining options. Learn about the many benefits of diving with a sidemount configuration.', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 15, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 4),
(22, 'Padi Wreck Diver', 'Wrecks are fascinating to explore and usually teem with aquatic life. Learn the safety considerations for navigating and exploring wrecks, surveying and mapping a wreck and other skills to safely explore a wreck dive site.', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 16, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 4),
(23, 'Padi Deep Diver', 'Scuba dive with confidence at depths down to 40 metres/130 feet and explore exciting and mysterious deeper dive sites. Learn to know your personal limits and know more about specialized deep diving equipment, deep dive planning, buddy contact procedures and buoyancy control and managing your gas supply, dealing with gas narcosis and safety considerations.', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 17, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 5),
(24, 'Padi Search & Recovery Diver', ' If you?ve ever lost something in the water and wanted to go find it, then the PADI Search and Recovery Diver Specialty course is for you. Learn how to gather information and resources, then carefully planning a search and recovery to locate those sunken treasures.', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 18, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 5),
(25, 'Padi Cavern Diver', 'Caverns exist in many areas where scuba divers venture. In these locations you?ll find large, dark spaces that seem incredibly inviting, yet are potentially dangerous. The PADI Cavern Diver Specialty course gives you the knowledge and skills to explore caverns correctly ? allowing you to enter far enough for adventure, but staying within the light zone for an easy exit to open water', '', '', '', '', 'Courses & Specialties', 'Dive Lesson', 19, '', 'Pax', 0, 0, 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', 'OWD', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dcguidedtours`
--

CREATE TABLE `tbl_dcguidedtours` (
  `id` int(15) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` text,
  `product_includes` varchar(100) DEFAULT NULL,
  `product_excludes` varchar(100) DEFAULT NULL,
  `common_options` text,
  `other_info` varchar(255) DEFAULT NULL,
  `product_category` varchar(100) DEFAULT NULL,
  `product_keyword` varchar(100) DEFAULT NULL,
  `booking_period_start_date` date NOT NULL,
  `booking_period_end_date` date NOT NULL,
  `travel_period_start_date` date NOT NULL,
  `travel_period_end_date` date NOT NULL,
  `sequence_number` int(20) DEFAULT NULL,
  `product_status` varchar(100) DEFAULT NULL,
  `product_unit` varchar(100) DEFAULT NULL,
  `product_max_day` int(20) DEFAULT NULL,
  `single_room` text,
  `twin_room` text,
  `three_person_room` text,
  `quad_room` text,
  `discount_bulk_purchase` varchar(50) DEFAULT NULL,
  `discount_unit` varchar(50) DEFAULT NULL,
  `range_start` varchar(255) DEFAULT NULL,
  `range_end` varchar(255) DEFAULT NULL,
  `discount_rate` varchar(255) DEFAULT NULL,
  `apply_promo` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ap_discount_unit` varchar(50) DEFAULT NULL,
  `ap_discount_rate` int(20) DEFAULT NULL,
  `apply_promo_bilk_discount` varchar(20) DEFAULT NULL,
  `optional_services` varchar(255) DEFAULT NULL,
  `optional_services_price` varchar(255) DEFAULT NULL,
  `accomodation_name` varchar(255) DEFAULT NULL,
  `oneperson_bed_type` varchar(255) DEFAULT NULL,
  `twoperson_bed_type` varchar(255) DEFAULT NULL,
  `threeperson_bed_type` varchar(255) DEFAULT NULL,
  `fourperson_bed_type` varchar(255) DEFAULT NULL,
  `checkintime` time NOT NULL,
  `checkouttime` time NOT NULL,
  `actype` text,
  `amenities` text,
  `diver_certification` varchar(255) DEFAULT NULL,
  `diver_experience` varchar(255) DEFAULT NULL,
  `diver_specialties` varchar(255) DEFAULT NULL,
  `country` int(20) NOT NULL,
  `island` int(20) NOT NULL,
  `gpsx` varchar(100) DEFAULT NULL,
  `gpsy` varchar(100) DEFAULT NULL,
  `dive_sites` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dcguidedtours`
--

INSERT INTO `tbl_dcguidedtours` (`id`, `product_name`, `product_description`, `product_includes`, `product_excludes`, `common_options`, `other_info`, `product_category`, `product_keyword`, `booking_period_start_date`, `booking_period_end_date`, `travel_period_start_date`, `travel_period_end_date`, `sequence_number`, `product_status`, `product_unit`, `product_max_day`, `single_room`, `twin_room`, `three_person_room`, `quad_room`, `discount_bulk_purchase`, `discount_unit`, `range_start`, `range_end`, `discount_rate`, `apply_promo`, `start_date`, `end_date`, `ap_discount_unit`, `ap_discount_rate`, `apply_promo_bilk_discount`, `optional_services`, `optional_services_price`, `accomodation_name`, `oneperson_bed_type`, `twoperson_bed_type`, `threeperson_bed_type`, `fourperson_bed_type`, `checkintime`, `checkouttime`, `actype`, `amenities`, `diver_certification`, `diver_experience`, `diver_specialties`, `country`, `island`, `gpsx`, `gpsy`, `dive_sites`, `photo`, `user_id`) VALUES
(6, 'Pulau Weh', 'Travel to Indonesia and dive around Pulau Weh, A great spot to expand your dive experience and increase your diving skills.', 'Transfer from Jetty to Island, Transfer from Airport to Jetty', 'Marine Park Fee', 'Full Equipment Rendal', 'Flight Tickets not included and booked separately by divers.', 'Guided Tours	', 'Dive Packages', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 'Available', 'Day', 10, '800', '780', '760', '0', 'Yes', '', '5', '6', '20', 'Yes', '0000-00-00', '0000-00-00', '', 10, 'No', '', '', 'ABC Chalet Resort', '-', '2 Single Bed', '1 Queen & 1 Single', '2 Queen', '15:00:00', '12:00:00', 'Capsule', '', 'Owd', '1', '', 5, 5, '0', '0', '', 'Image_C_1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dcleisure`
--

CREATE TABLE `tbl_dcleisure` (
  `id` int(15) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` text,
  `product_includes` varchar(100) DEFAULT NULL,
  `product_excludes` varchar(100) DEFAULT NULL,
  `common_options` text,
  `other_info` varchar(255) DEFAULT NULL,
  `product_category` varchar(100) DEFAULT NULL,
  `product_keyword` varchar(100) DEFAULT NULL,
  `sequence_number` int(20) DEFAULT NULL,
  `product_status` varchar(100) DEFAULT NULL,
  `product_unit` varchar(100) DEFAULT NULL,
  `max_dive_day` int(20) DEFAULT NULL,
  `product_max_day` varchar(255) DEFAULT NULL,
  `product_price` double(18,2) DEFAULT NULL,
  `discount_bulk_purchase` varchar(50) DEFAULT NULL,
  `discount_unit` varchar(50) DEFAULT NULL,
  `range_start` varchar(255) DEFAULT NULL,
  `range_end` varchar(255) DEFAULT NULL,
  `discount_rate` varchar(255) DEFAULT NULL,
  `apply_promo` varchar(50) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ap_discount_unit` varchar(50) DEFAULT NULL,
  `ap_discount_rate` int(20) DEFAULT NULL,
  `apply_promo_bilk_discount` varchar(20) DEFAULT NULL,
  `optional_services` varchar(255) DEFAULT NULL,
  `optional_services_price` varchar(255) DEFAULT NULL,
  `diver_certification` varchar(255) DEFAULT NULL,
  `diver_experience` varchar(255) DEFAULT NULL,
  `diver_specialties` varchar(255) DEFAULT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dcleisure`
--

INSERT INTO `tbl_dcleisure` (`id`, `product_name`, `product_description`, `product_includes`, `product_excludes`, `common_options`, `other_info`, `product_category`, `product_keyword`, `sequence_number`, `product_status`, `product_unit`, `max_dive_day`, `product_max_day`, `product_price`, `discount_bulk_purchase`, `discount_unit`, `range_start`, `range_end`, `discount_rate`, `apply_promo`, `start_date`, `end_date`, `ap_discount_unit`, `ap_discount_rate`, `apply_promo_bilk_discount`, `optional_services`, `optional_services_price`, `diver_certification`, `diver_experience`, `diver_specialties`, `user_id`) VALUES
(19, 'Boat Dive', 'A guided boat dive to the diving sites located around Pulau Tioman. Dive sites subjected to weather and dive instructor arrangement.', 'Water is provided', 'Marine Park Fee, Dive Equipment, Land Transfer', 'Full Equipment Rendal', 'Maximum of 6 ppl per diving group for every instructor.', 'Leisure Dive', 'Dive Packages', 1, 'Available', 'Dive', 3, 'No Limit', 100.00, 'Yes', '$', '3', '4', '5', 'No', '0000-00-00', '0000-00-00', '', NULL, NULL, 'Full Equipment Rental', '75', 'Owd', '', '', 1),
(20, 'Snorkelling', 'Go on a Snorkelling Excursion around Pulau Tioman. We’ll take you to the 5 of the most beautiful sites where you can play and swim among the fishes.', 'Snorkel & Mask + Safety Vest is provided.', 'Marine Park Fee', NULL, 'There will be a lunch break. This is a full day event.', 'Leisure Dive', 'Dive Packages', 2, 'Available', 'Pax', 0, 'No Limit', 200.00, 'Yes', '$', '3,5,7', '4,6,8', '10,15,25', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, '', '', 'Non-Diver', '', '', 1),
(21, 'Dive Equipment Rental', 'Full Dive Equipment Rental includes Wetsuit, Mask & Snorkel, Weights, Flippers, BCD.', '', '', '', 'Rental for 1 day', 'Leisure Dive', 'Equipment', 3, 'Available', 'Day', 1, 'No Limit', 95.00, 'No', NULL, '0', '0', '0', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, '', '', 'Non-Diver', '', '', 1),
(22, 'GoPro Rental', 'Underwater GoPro Camera Rental', 'Rental for 1 day', '', NULL, 'A separate refundable deposit of MYR 200 is required.', 'Leisure Dive', 'Equipment', 4, 'Available', 'Day', 0, 'No Limit', 200.00, 'No', NULL, '0', '0', '0', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, '', '', 'Non-Diver', '', '', 2),
(23, 'Night Boat Dive', 'Guided Night Dive', '', 'Divelight, Dive Equipment', 'Full Equipment Rendal', '', 'Leisure Dive', 'Dive Packages', 5, 'Available', 'Dive', 0, '', 150.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 'Full Equipment Rental', '75', 'AWD', '', '', 2),
(24, 'Shore Dive', 'Guided Shore Dive', '', '', '', '', 'Leisure Dive', '', 6, '', 'Dive', 0, '', 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', '', '', '', 0),
(25, 'Night Shore Dive', 'Guided Night Shore Dive', '', 'Divelight, Dive Equipment', '', '', 'Leisure Dive', '', 7, '', 'Dive', 0, '', 0.00, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dcpackage`
--

CREATE TABLE `tbl_dcpackage` (
  `id` int(15) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` text,
  `product_includes` varchar(100) DEFAULT NULL,
  `product_excludes` varchar(100) DEFAULT NULL,
  `common_options` text,
  `other_info` varchar(255) DEFAULT NULL,
  `product_category` varchar(100) DEFAULT NULL,
  `product_keyword` varchar(100) DEFAULT NULL,
  `booking_period_start_date` date NOT NULL,
  `booking_period_end_date` date NOT NULL,
  `travel_period_start_date` date NOT NULL,
  `travel_period_end_date` date NOT NULL,
  `sequence_number` int(20) DEFAULT NULL,
  `product_status` varchar(100) DEFAULT NULL,
  `product_unit` varchar(100) DEFAULT NULL,
  `product_max_day` int(20) DEFAULT NULL,
  `normal_product_price` double(18,2) DEFAULT NULL,
  `weekend_product_price` double(18,2) DEFAULT NULL,
  `peak_product_price` double(18,2) DEFAULT NULL,
  `disaccomodation` varchar(250) DEFAULT NULL,
  `single_room` text,
  `twin_room` text,
  `three_person_room` text,
  `quad_room` text,
  `discount_bulk_purchase` varchar(50) DEFAULT NULL,
  `discount_unit` varchar(50) DEFAULT NULL,
  `range_start` varchar(255) DEFAULT NULL,
  `range_end` varchar(255) DEFAULT NULL,
  `discount_rate` varchar(255) DEFAULT NULL,
  `apply_promo` varchar(50) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ap_discount_unit` varchar(50) DEFAULT NULL,
  `ap_discount_rate` int(20) DEFAULT NULL,
  `apply_promo_bilk_discount` varchar(20) DEFAULT NULL,
  `optional_services` varchar(255) DEFAULT NULL,
  `optional_services_price` varchar(255) DEFAULT NULL,
  `accomodation_name` varchar(255) DEFAULT NULL,
  `oneperson_bed_type` varchar(255) DEFAULT NULL,
  `twoperson_bed_type` varchar(255) DEFAULT NULL,
  `threeperson_bed_type` varchar(255) DEFAULT NULL,
  `fourperson_bed_type` varchar(255) DEFAULT NULL,
  `checkintime` time NOT NULL,
  `checkouttime` time NOT NULL,
  `actype` varchar(255) DEFAULT NULL,
  `amenities` text,
  `diver_certification` varchar(255) DEFAULT NULL,
  `diver_experience` varchar(255) DEFAULT NULL,
  `diver_specialties` varchar(255) DEFAULT NULL,
  `country` int(20) NOT NULL,
  `island` int(20) NOT NULL,
  `gpsx` varchar(100) DEFAULT NULL,
  `gpsy` varchar(100) DEFAULT NULL,
  `dive_sites` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dcpackage`
--

INSERT INTO `tbl_dcpackage` (`id`, `product_name`, `product_description`, `product_includes`, `product_excludes`, `common_options`, `other_info`, `product_category`, `product_keyword`, `booking_period_start_date`, `booking_period_end_date`, `travel_period_start_date`, `travel_period_end_date`, `sequence_number`, `product_status`, `product_unit`, `product_max_day`, `normal_product_price`, `weekend_product_price`, `peak_product_price`, `disaccomodation`, `single_room`, `twin_room`, `three_person_room`, `quad_room`, `discount_bulk_purchase`, `discount_unit`, `range_start`, `range_end`, `discount_rate`, `apply_promo`, `start_date`, `end_date`, `ap_discount_unit`, `ap_discount_rate`, `apply_promo_bilk_discount`, `optional_services`, `optional_services_price`, `accomodation_name`, `oneperson_bed_type`, `twoperson_bed_type`, `threeperson_bed_type`, `fourperson_bed_type`, `checkintime`, `checkouttime`, `actype`, `amenities`, `diver_certification`, `diver_experience`, `diver_specialties`, `country`, `island`, `gpsx`, `gpsy`, `dive_sites`, `photo`, `user_id`) VALUES
(6, '3D2N Tioman Diveaway', 'Enjoy a wonderful 3 Day 2 Night Stay at the lovely Pulau Tioman. Pack your bags and enjoy a divecation and see the amazing underwater view of the numerous dive site at Pulau Tioman. Package includes 5 Dives and accommodation.', 'Transfer from Jetty to Island, Water provided during dive trip', 'Marine Park Fee', 'Full Equipment Rendal', 'Maximum of 6 ppl per diving group for every instructor.', 'Dive Package', 'Dive Packages', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 'Available', 'Pax', 20, 0.00, 0.00, 0.00, 'Yes', '750,800,850', '750,800,850', '725,780,830', '700,760,810', 'No', '$', '0', '0', '0', 'No', '0000-00-00', '0000-00-00', '', 0, NULL, '', '', 'ABC Chalet Resort', 'N/A', '2 Single Bed', '1 Queen & 1 Single', '2 Queen', '15:00:00', '12:00:00', 'Chalet', '', 'Owd', 'Novice', 'Deep Diver', 3, 2, '-', '-', '', 'Image_C_11.jpg', 1),
(7, '5 Boat Dive Package', 'Grab our 5 boat dive package and enjoy more savings.', 'Water and Biscuits in Between Dives', '-', 'Full Equipment Rendal', 'Maximum of 6 ppl per diving group for every instructor.', 'Dive Package', 'Dive Packages', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 'Available', 'Pax', 20, 550.00, 600.00, 650.00, 'No', ',,', ',,', ',,', ',,', 'Yes', '%', '3', '4', '5', 'No', '0000-00-00', '0000-00-00', '', 0, NULL, '50', '', 'N/A', '', '', '', '', '00:00:00', '00:00:00', '', '', 'Owd', 'Novice', 'Deep Diver', 3, 2, '-', '-', 'Goral Garden,Batu Ikan', 'Image_C_2.jpg', 1),
(8, '3D2N', '', 'Land Transfer from Tekek Jetty/Airport', 'Marine Park Fee ', '', '', 'Dive Package', 'Dive Packages', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 3, 'Available', 'Pax', 20, 0.00, 0.00, 0.00, 'Yes', '330,350,350', '230,250,250', '230,250,250', '205,225,225', 'No', '$', '0', '0', '0', 'No', '0000-00-00', '0000-00-00', '', 0, NULL, 'Ferry Retun Ticket', '70', '', '', '', '', '', '00:00:00', '00:00:00', '', '', '', '', '', 0, 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dcprofile`
--

CREATE TABLE `tbl_dcprofile` (
  `id` int(15) NOT NULL,
  `dcname` varchar(100) DEFAULT NULL,
  `dcimage` varchar(255) DEFAULT NULL,
  `dcdescription` text,
  `dccountry` int(15) NOT NULL,
  `dcislands` int(15) NOT NULL,
  `dcgps_x` varchar(255) DEFAULT NULL,
  `dcgps_y` varchar(255) DEFAULT NULL,
  `dcreg_co_name` varchar(150) DEFAULT NULL,
  `dcbusiness_reg_no` varchar(150) DEFAULT NULL,
  `dcbusi_telephone_no` varchar(20) DEFAULT NULL,
  `dcbilling_address` text,
  `dcbusi_fax_no` varchar(100) DEFAULT NULL,
  `dcaddress` varchar(150) DEFAULT NULL,
  `dctelephone_no` varchar(20) DEFAULT NULL,
  `dcfax_no` varchar(100) DEFAULT NULL,
  `dcemailid` varchar(75) DEFAULT NULL,
  `dcsiteurl` varchar(150) DEFAULT NULL,
  `dcno_of_divemaster` varchar(200) DEFAULT NULL,
  `dcno_boats` int(15) DEFAULT NULL,
  `dcdaily_capacity` varchar(100) DEFAULT NULL,
  `dcfacilities` varchar(255) DEFAULT NULL,
  `dcaffiliation` varchar(255) DEFAULT NULL,
  `dcaffiliation_reg_no` varchar(100) DEFAULT NULL,
  `dcseason` varchar(255) DEFAULT NULL,
  `dclanguage` varchar(255) DEFAULT NULL,
  `dcdocument_required` text,
  `dccurrency` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dcprofile`
--

INSERT INTO `tbl_dcprofile` (`id`, `dcname`, `dcimage`, `dcdescription`, `dccountry`, `dcislands`, `dcgps_x`, `dcgps_y`, `dcreg_co_name`, `dcbusiness_reg_no`, `dcbusi_telephone_no`, `dcbilling_address`, `dcbusi_fax_no`, `dcaddress`, `dctelephone_no`, `dcfax_no`, `dcemailid`, `dcsiteurl`, `dcno_of_divemaster`, `dcno_boats`, `dcdaily_capacity`, `dcfacilities`, `dcaffiliation`, `dcaffiliation_reg_no`, `dcseason`, `dclanguage`, `dcdocument_required`, `dccurrency`, `user_id`) VALUES
(8, 'Ray\'s Dive Adventure', '17_Ray Dive Adventure.jpg', 'Ray\'s Dive Adventure', 1, 5, '2.86573', '104.038278', '', '', '6019-3308062', 'Kampung Air Batang (ABC), Kuala Rompin,Pahang, 26800', '', 'Kampung Air Batang (ABC), Kuala Rompin,Pahang, 26800', '019-3308062', '', 'reynolds@raysdive.com', 'http://www.raysdive.com/index.asp', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'S-24086 ', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 1),
(9, 'Redang Aquatic Adventure', '10_Redang Aquatic Adventure.jpg', 'Redang Aquatic Adventure', 1, 2, '4.0878578', '100.9102324', '', '', '603-20315079', 'Redang Beach Resort, Pasir Panjang Kecil, Pulau Redang', '', 'Redang Beach Resort, Pasir Panjang Kecil, Pulau Redang', '603-20315079', '', 'robheng@yahoo.com', 'www.redang.com.my', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'R-6066', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 2),
(10, 'Quiver Dive Team', '1_Quiver Dive Team.jpg', 'Quiver Dive Team', 1, 1, '6.1417164', '100.8372573', '', '', '6012-2138885', 'Perhentian Kecil, Kuala Besut, Terengganu, 22000', '', 'Perhentian Kecil, Kuala Besut, Terengganu, 22000', '6012-2138885', '', 'info@quiver-perhentian.com', 'www.quiver-perhentian.com', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'S-36202', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 3),
(12, 'Diveasia Tioman Island', '21_Diveasia Tioman Island.jpg', 'Diveasia Tioman Island', 1, 5, '2.8793778', '104.1526598', '', '', '609-4195017', 'KG Salang, Tioman Island, Kuala Rompin, Pahang', '', 'KG Salang, Tioman Island, Kuala Rompin, Pahang', '609-4195017', '', 'diveasiatioman@yahoo.com', 'www.diveasia.com.my', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'S-3173', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 5),
(13, 'Tioman Dive Centre', '22_Tioman Dive Centre.jpg', 'Tioman Dive Centre', 1, 5, '2.815117', '104.1496643', '', '', '609-4191228', 'Swiss Cottage Resort, Kampung Tekek, Tioman Island, Pahang', '', 'Swiss Cottage Resort, Kampung Tekek, Tioman Island, Pahang', '609-4191228', '', 'enquiries@tioman-dive-centre.com', 'www.tioman-dive-centre.com', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'R-36004', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 6),
(14, 'Divers Cove', '23_Divers Cove.jpg', 'Divers Cove', 1, 5, '2.7789548', '104.0932758', '', '', '609-4197102', 'Kampong Paya, Pulau Tioman, Pahang, 26800', '', 'Kampong Paya, Pulau Tioman, Pahang, 26800', '609-4197102', '', 'dive@payabeach.com', 'www.diverscoveasia.com', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'R-22630', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 7),
(15, 'Tioman Dive Buddy', '24_Tioman Dive Buddy.jpg', 'Tioman Dive Buddy', 1, 5, '2.8457963', '103.9929478', '', '', '609-4197000', 'KG Genting, Idaman Beach Holiday, Rompin, Pahang, 26800', '', 'KG Genting, Idaman Beach Holiday, Rompin, Pahang, 26800', '609-4197000', '', 'tiomandivebuddy@gmail.com', 'www.tiomandivebuddy.com', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'S-24072', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 8),
(16, 'Matahari Divers', '2_Matahari Divers.jpg', 'Matahari Divers', 1, 1, '7.8731068', '114.9698724', '', '', '609-6911742', 'Longbeach, Pulau Perhentian Kecil, Kuala Besut, Terrengganu, 22300', '', 'Longbeach, Pulau Perhentian Kecil, Kuala Besut, Terrengganu, 22300', '609-6911742', '', 'mataharidivers@gmail.com', 'www.mataharichalet.com', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'R-23592', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 9),
(17, 'Bubbles Dive Centre', '4_Bubbles Dive Centre.jpg', 'Bubbles Dive Centre', 1, 1, '36.0783146', '14.1830268', '', '', '6019-5999628', 'Tanjung Tukas, Pulau Perhentian Besar 22300, Malaysia', '', 'Tanjung Tukas, Pulau Perhentian Besar 22300, Malaysia', '6019-5999628', '', 'info@bubblesdc.com', 'www.bubblesdc.com', '2', 2, '50', 'CLASSROOM,WASH CABIN,LOCKER,SHOWER,WI-FI,LOUNGE,', '', 'R-36459', 'MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER', 'ENGLISH,FRENCH,CHINESE,', 'CERTIFICATION CARD,LOGBOOK,MEDICAL STATEMENT,', 'MYR', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int(15) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `dept_name`) VALUES
(1, 'Reservation'),
(2, 'Billing & Settlement'),
(3, 'Dive Center Manager'),
(4, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `street1` varchar(255) DEFAULT NULL,
  `street2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone_number` varchar(25) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `branch_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `ename`, `dob`, `designation`, `street1`, `street2`, `city`, `state`, `country`, `phone_number`, `email`, `password`, `photo`, `branch_no`) VALUES
(8, 'Super Admin', '2017-01-04', 'SUPERADMIN', 'hh', 'hh', 'hh', 'h', 'hh', 'h', 'gow@gmail.com', '123', NULL, 1),
(13, 'admin', '2017-01-04', 'ADMIN', 's1', 's2', 'cc', 'ss', 'ss', 'ss', 'admin', '123', NULL, 0),
(14, 'Mk', '2017-01-04', 'MARKETINGPERSON', 'sa', 'sa', 'sa', 'sa', 'sa', '1223', 'mk', '123', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fundive`
--

CREATE TABLE `tbl_fundive` (
  `id` int(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fundive`
--

INSERT INTO `tbl_fundive` (`id`, `description`) VALUES
(1, '<p>Let&#39;s review some basic dive physiology. Your middle ears are dead air spaces, connected to the outer world by the eustachian tubes running to the back of your throat (see illustration). When you fail to increase the pressure in your middle ears to match the building pressure around you, the result is pain and potential damage to the delicate mechanisms of the ear. But you knew that already.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(15) NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `user_id` int(15) NOT NULL,
  `island_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `gallery`, `user_id`, `island_id`) VALUES
(1, 'Image_B_1.png', 41, 18),
(2, 'Image_B_2.jpg', 41, 18),
(3, 'Image_C_2.jpg', 41, 18),
(5, 'Image_C_3.jpg', 41, 18),
(6, 'Image_C_31.jpg', 41, 18),
(7, 'Image_B_3.jpg', 1, 0),
(8, 'Image_B_2.jpg', 1, 0),
(9, 'Image_C_1.jpg', 1, 0),
(10, 'Image_B_2.jpg', 41, 18),
(11, 'Image_B_1.png', 1, 0),
(12, 'Image_C_2.jpg', 65, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_generalinfo`
--

CREATE TABLE `tbl_generalinfo` (
  `id` int(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_generalinfo`
--

INSERT INTO `tbl_generalinfo` (`id`, `description`) VALUES
(1, '<p>Let&#39;s review some basic dive physiology. Your middle ears are dead air spaces, connected to the outer world by the eustachian tubes running to the back of your throat (see illustration). When you fail to increase the pressure in your middle ears to match the building pressure around you, the result is pain and potential damage to the delicate mechanisms of the ear. But you knew that already.</p>\r\n\r\n<p>The key to safe equalizing is opening the normally closed eustachian tubes, allowing higher-pressure air from your throat to enter your middle ears. Most divers are taught to equalize by pinching their nose and blowing gently. Called the Valsalva Maneuver, it essentially forces the tubes open with air pressure.</p>\r\n\r\n<p>The better way is to use the throat muscles to pull your eustachian tubes open the way nature intended--by swallowing. You already do this hundreds of times a day--just listen for that faint &quot;pop&quot; you hear about every other gulp. The rapid pressure changes of scuba diving, however, are more challenging. You need to help this process along.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_help`
--

CREATE TABLE `tbl_help` (
  `id` int(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_help`
--

INSERT INTO `tbl_help` (`id`, `description`) VALUES
(1, '<p>Let&#39;s review some basic dive physiology. Your middle ears are dead air spaces, connected to the outer world by the eustachian tubes running to the back of your throat (see illustration). When you fail to increase the pressure in your middle ears to match the building pressure around you, the result is pain and potential damage to the delicate mechanisms of the ear. But you knew that already.</p>\r\n\r\n<p>The key to safe equalizing is opening the normally closed eustachian tubes, allowing higher-pressure air from your throat to enter your middle ears. Most divers are taught to equalize by pinching their nose and blowing gently. Called the Valsalva Maneuver, it essentially forces the tubes open with air pressure.</p>\r\n\r\n<p>The better way is to use the throat muscles to pull your eustachian tubes open the way nature intended--by swallowing. You already do this hundreds of times a day--just listen for that faint &quot;pop&quot; you hear about every other gulp. The rapid pressure changes of scuba diving, however, are more challenging. You need to help this process along.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Listen for the &quot;pop.&quot;</strong>&nbsp;Before you even board the boat, make sure that when you swallow you hear a &quot;pop&quot; in both ears. This tells you both eustachian tubes are opening.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Start early.</strong>&nbsp;Several hours before the dive, begin gently equalizing your ears every few minutes. Chewing gum seems to help because it makes you swallow often.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Equalize at the surface.</strong>&nbsp;&quot;Prepressurizing&quot; at the surface helps most divers get past the critical first few feet of descent. It may also inflate your eustachian tubes so they are slightly bigger. Not all medical authorities recommend this, however. The lesson here is to pre-pressurize only if it seems to help you, and to pressurize gently.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Descend feet first.</strong>&nbsp;Studies have shown a Valsalva Maneuver requires 50 percent more force when you&#39;re in a head-down position than head-up.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Look up.</strong>&nbsp;Extending your neck tends to open your eustachian tubes.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Use a descent line.</strong>&nbsp;Pulling yourself down an anchor or mooring line helps control your descent rate more accurately. A line also helps you stop your descent quickly if you feel pressure.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Stay ahead.</strong>&nbsp;Equalize often, trying to maintain a slight positive pressure in your middle ears. Don&#39;t wait until you feel pressure or pain.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Stop if it hurts.</strong>&nbsp;Your eustachian tubes are probably locked shut by pressure differential. Ascend a few feet and try equalizing again.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Avoid milk.</strong>&nbsp;Some foods, including milk, can increase your mucus production.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Avoid tobacco and alcohol.</strong>&nbsp;Both tobacco smoke and alcohol irritate your mucus membranes, promoting more mucus that can block your eustachian tubes.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Keep your mask clear.</strong>&nbsp;Water up your nose can irritate your mucus membranes, which then produce more of the stuff that clogs.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3><strong>Better Clearing Techniques</strong></h3>\r\n\r\n<p>There are two other problems with the Valsalva Maneuver: It may not work if the tubes are already locked by a pressure differential, and it&#39;s all too easy to blow hard enough to damage something. Divers who experience difficulty equalizing may find it helpful to master some alternative techniques.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Toynbee Maneuver.</strong>&nbsp;With your nostrils pinched or blocked against your mask skirt, swallow. Swallowing pulls open your eustachian tubes while the movement of your tongue, with your nose closed, compresses air against them.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lowry Technique.</strong>&nbsp;A combination of Valsalva and Toynbee: while closing your nostrils, blow and swallow at the same time.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Edmonds Technique.</strong>&nbsp;While tensing the soft palate and throat muscles and pushing the jaw forward and down, do a Valsalva Maneuver.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Frenzel Maneuver.</strong>&nbsp;Close your nostrils, and close the back of your throat as if straining to lift a weight. Then make the sound of the letter &quot;K.&quot; This forces the back of your tongue upwards, compressing air against the openings of your eustachian tubes.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Voluntary Tubal Opening.</strong>&nbsp;Tense the muscles of the soft palate and the throat while pushing the jaw forward and down as if starting to yawn. These muscles pull the eustachian tubes open. This requires a lot of practice, but some divers can learn to control those muscles and hold their tubes open for continuous equalization.</p>\r\n	</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_island`
--

CREATE TABLE `tbl_island` (
  `island_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `island_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `island_code` varchar(25) NOT NULL,
  `country_code` varchar(25) NOT NULL,
  `is_deactivate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_island`
--

INSERT INTO `tbl_island` (`island_id`, `country_id`, `island_name`, `description`, `island_code`, `country_code`, `is_deactivate`) VALUES
(1, 1, 'Perhentian Island', 'East side of Peninsular Malaysia', 'MY00001', 'MY', 'N'),
(2, 1, 'Lang Tengah Island', 'East side of Peninsular Malaysia', 'MY00002', 'MY', 'N'),
(3, 1, 'Redang Island', 'East side of Peninsular Malaysia', 'MY00003', 'MY', 'N'),
(4, 1, 'Tenggol Island', 'East side of Peninsular Malaysia', 'MY00004', 'MY', 'N'),
(5, 1, 'Tioman Island', 'East side of Peninsular Malaysia', 'MY00005', 'MY', 'N'),
(6, 1, 'Rawa Island', 'East side of Peninsular Malaysia', 'MY00006', 'MY', 'N'),
(7, 1, 'Kapas Island', 'East side of Peninsular Malaysia', 'MY00007', 'MY', 'N'),
(8, 1, 'Tengah Island', 'East side of Peninsular Malaysia', 'MY00008', 'MY', 'N'),
(9, 1, 'Sibu Island', 'East side of Peninsular Malaysia', 'MY00009', 'MY', 'N'),
(10, 1, 'Besar Island', 'East side of Peninsular Malaysia', 'MY00010', 'MY', 'N'),
(11, 1, 'Dayang / Aur Island', 'East side of Peninsular Malaysia', 'MY00011', 'MY', 'N'),
(12, 1, 'Pemanggil Island', 'East side of Peninsular Malaysia', 'MY00012', 'MY', 'N'),
(13, 1, 'Langkawi Island', 'west side of Peninsular Malaysia', 'MY00013', 'MY', 'N'),
(14, 1, 'Payar Island', 'west side of Peninsular Malaysia', 'MY00014', 'MY', 'N'),
(15, 1, 'Sembilan Island', 'west side of Peninsular Malaysia', 'MY00015', 'MY', 'N'),
(16, 1, 'Pangkor Island', 'west side of Peninsular Malaysia', 'MY00016', 'MY', 'N'),
(17, 1, 'Mantanani besar Island', 'Coasts of Borneo', 'MY00017', 'MY', 'N'),
(18, 1, 'Sipadan Island', 'Coasts of Borneo', 'MY00018', 'MY', 'N'),
(19, 1, 'Mabul Island', 'Coasts of Borneo', 'MY00019', 'MY', 'N'),
(20, 1, 'Kapalai Island', 'Coasts of Borneo', 'MY00020', 'MY', 'N'),
(21, 1, 'Mataking Island', 'Coasts of Borneo', 'MY00021', 'MY', 'N'),
(22, 1, 'Selingan (Turtle Island)', 'Coasts of Borneo', 'MY00022', 'MY', 'N'),
(23, 1, 'Lankayan Island', 'Coasts of Borneo', 'MY00023', 'MY', 'N'),
(24, 1, 'Layang-Layang Island', 'Coasts of Borneo', 'MY00024', 'MY', 'N'),
(25, 1, 'Labuan Island', 'Coasts of Borneo', 'MY00025', 'MY', 'N'),
(26, 1, 'Mengalum Island', 'Coasts of Borneo', 'MY00026', 'MY', 'N'),
(27, 1, 'Mantanani Island', 'Coasts of Borneo', 'MY00027', 'MY', 'N'),
(28, 1, 'Sepangar Island', 'Coasts of Borneo', 'MY00028', 'MY', 'N'),
(29, 1, 'Gaya Island', 'Coasts of Borneo', 'MY00029', 'MY', 'N'),
(30, 1, 'Manukan Island', 'Coasts of Borneo', 'MY00030', 'MY', 'N'),
(31, 1, 'SAPI', 'Coasts of Borneo', 'MY00031', 'MY', 'N'),
(32, 1, 'Manutik', 'Coasts of Borneo', 'MY00032', 'MY', 'N'),
(33, 1, 'Sulug', 'Coasts of Borneo', 'MY00033', 'MY', 'N'),
(34, 2, 'KOH LANTA', '', 'TH00001', 'TH', 'N'),
(35, 2, 'PHI PHI ISLAND', '', 'TH00002', 'TH', 'N'),
(36, 2, 'KRABI', '', 'TH00003', 'TH', 'N'),
(37, 2, 'PHUKET', '', 'TH00004', 'TH', 'N'),
(38, 2, 'KHAOLAK', '', 'TH00005', 'TH', 'N'),
(39, 2, 'KOH SAMUI', '', 'TH00006', 'TH', 'N'),
(40, 2, 'KOH PHANGAN', '', 'TH00007', 'TH', 'N'),
(41, 2, 'KOH TAO', '', 'TH00008', 'TH', 'N'),
(42, 2, 'PATTAYA', '', 'TH00009', 'TH', 'N'),
(43, 2, 'RAYONG', '', 'TH00010', 'TH', 'N'),
(44, 2, 'KOH CHANG', '', 'TH00011', 'TH', 'N'),
(45, 2, 'BANGKOK', '', 'TH00012', 'TH', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_island_overview`
--

CREATE TABLE `tbl_island_overview` (
  `id` int(15) NOT NULL,
  `overview` text NOT NULL,
  `current` text NOT NULL,
  `water_temperature` text NOT NULL,
  `underwater_visibility` text NOT NULL,
  `diving_season` text NOT NULL,
  `diving_sites` text NOT NULL,
  `diving_centers` text NOT NULL,
  `depth` text NOT NULL,
  `what_to_see` text NOT NULL,
  `island_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_island_overview`
--

INSERT INTO `tbl_island_overview` (`id`, `overview`, `current`, `water_temperature`, `underwater_visibility`, `diving_season`, `diving_sites`, `diving_centers`, `depth`, `what_to_see`, `island_id`) VALUES
(1, 'Sipadan Island, or more fondly known by the locals as Pulau Sipadan is a small island located in the state of Pahang in Peninsular Malaysia. It is along the east coast of the state which is one of the top tourist destinations in the region. In Sipadan Island, there are 8 main villages in which Kampung Tekek has the highest population.', 'moderate to Strong', 'Range From 27/80F to 30C/86F', 'Range betweeen 5m- 30m/16-98ft, depending on the reason', 'Late january and lasts until middle of November', 'chebeh island sepoi island tiger reef', 'Around 3 dive centers', 'Average 8m Maximum 25m', 'Angelfish, puffer fish', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(15) NOT NULL,
  `language_code` varchar(255) NOT NULL,
  `language` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text NOT NULL,
  `is_deactivate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `language_code`, `language`, `description`, `is_deactivate`) VALUES
(1, '', 'English', 'English', 'N'),
(2, '', 'Bahasa Indonesia\r\n', 'Indonesia\r\n', 'N'),
(3, '', 'Bahasa Melayu\r\n', 'Malaysia, Indonesia, Singapore, Brunei and Thailand\r\n', 'N'),
(4, '', 'Català\n', 'Andorra\r\n', 'N'),
(5, '', 'Dansk\r\n', 'Danish language\r\n', 'N'),
(6, '', 'Deutsch\r\n', 'Germanic language\r\n', 'N'),
(7, '', 'Español\n', 'Spanish\r\n', 'N'),
(8, '', '????????', 'Greek\r\n', 'N'),
(9, '', 'Français', 'French\r\n', 'N'),
(10, '', 'Italiano\r\n', 'Italian\r\n', 'N'),
(11, '', 'Magyar\r\n', 'Hungarian\r\n', 'N'),
(12, '', 'Nederlands\r\n', 'Dutch Language\r\n', 'N'),
(13, '', 'Norsk\r\n', 'Norwegian language\r\n', 'N'),
(14, '', 'Polski\r\n', 'Polish\r\n', 'N'),
(15, '', 'Português\n', 'Portuguese\r\n', 'N'),
(16, '', 'Suomi\r\n', 'Finnish\r\n', 'N'),
(17, '', 'Svenska\r\n', 'Swedish\r\n', 'N'),
(18, '', 'Türkçe\n', 'Turkish\r\n', 'N'),
(19, '', 'Íslenska\n', 'Iceland\r\n', 'N'),
(20, '', 'Ceština\n', 'Czech Republic\r\n', 'N'),
(21, '', '???????\n', 'Russian\r\n', 'N'),
(22, '', '??(??)', 'Chinese Simplified\r\n', 'N'),
(23, '', '??(??)\n', 'Chinese Traditional\r\n', 'N'),
(24, '', '???\n', 'Japanese Language\r\n', 'N'),
(25, '', '???\n', 'Korean Language\r\n', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_map`
--

CREATE TABLE `tbl_map` (
  `id` int(11) NOT NULL,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_map`
--

INSERT INTO `tbl_map` (`id`, `lat`, `lng`) VALUES
(1, 11.0168, 76.9558),
(2, 11.2891, 76.941);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `description`) VALUES
(1, '<p>Let&#39;s review some basic dive physiology. Your middle ears are dead air spaces, connected to the outer world by the eustachian tubes running to the back of your throat (see illustration). When you fail to increase the pressure in your middle ears to match the building pressure around you, the result is pain and potential damage to the delicate mechanisms of the ear. But you knew that already.</p>\r\n\r\n<p>The key to safe equalizing is opening the normally closed eustachian tubes, allowing higher-pressure air from your throat to enter your middle ears. Most divers are taught to equalize by pinching their nose and blowing gently. Called the Valsalva Maneuver, it essentially forces the tubes open with air pressure.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phonecode`
--

CREATE TABLE `tbl_phonecode` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `country_code_plus` varchar(255) NOT NULL,
  `country_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_phonecode`
--

INSERT INTO `tbl_phonecode` (`id`, `name`, `country_code`, `country_code_plus`, `country_id`) VALUES
(1, 'Afghanistan', '93', '+93', 13),
(2, 'Albania', '355', '+355', 15),
(3, 'Algeria', '213', '+213', 16),
(4, 'American Samoa', '1', '+1', 17),
(5, 'Andorra', '376', '+376', 18),
(6, 'Angola', '244', '+244', 19),
(7, 'Anguilla', '1', '+1', 20),
(8, 'Antarctica', '672', '+672', 21),
(9, 'Antigua and Barbuda', '1', '+1', 22),
(10, 'Argentina', '54', '+54', 23),
(11, 'Armenia', '374', '+374', 24),
(12, 'Aruba', '297', '+297', 25),
(13, 'Australia', '61', '+61', 26),
(14, 'Austria', '43', '+43', 27),
(15, 'Azerbaijan', '994', '+994', 28),
(16, 'Bahamas', '1', '+1', 29),
(17, 'Bahrain', '973', '+973', 30),
(18, 'Bangladesh', '880', '+880', 31),
(19, 'Barbados', '1', '+1', 32),
(20, 'Belarus', '375', '+375', 33),
(21, 'Belgium', '32', '+32', 34),
(22, 'Belize', '501', '+501', 35),
(23, 'Benin', '229', '+229', 36),
(24, 'Bermuda', '1', '+1', 37),
(25, 'Bhutan', '975', '+975', 38),
(26, 'Bolivia', '591', '+591', 39),
(27, 'Bosnia and Herzegovina', '387', '+387', 40),
(28, 'Botswana', '267', '+267', 41),
(29, 'Brazil', '55', '+55', 43),
(30, 'British Indian Ocean Territory', '246', '+246', 45),
(31, 'British Virgin Islands', '1', '+1', 44),
(32, 'Brunei', '673', '+673', 10),
(33, 'Bulgaria', '359', '+359', 46),
(34, 'Burkina Faso', '226', '+226', 47),
(35, 'Burundi', '257', '+257', 48),
(36, 'Cambodia', '855', '+855', 6),
(37, 'Cameroon', '237', '+237', 49),
(38, 'Canada', '1', '+1', 50),
(39, 'Cape Verde', '238', '+238', 51),
(40, 'Cayman Islands', '1', '+1', 52),
(41, 'Central African Republic', '236', '+236', 53),
(42, 'Chad', '235', '+235', 54),
(43, 'Chile', '56', '+56', 55),
(44, 'China', '86', '+86', 12),
(45, 'Christmas Island', '61', '+61', 58),
(46, 'Cocos Islands', '61', '+61', 59),
(47, 'Colombia', '57', '+57', 60),
(48, 'Comoros', '269', '+269', 61),
(49, 'Cook Islands', '682', '+682', 64),
(50, 'Costa Rica', '506', '+506', 65),
(51, 'Croatia', '385', '+385', 67),
(52, 'Cuba', '53', '+53', 68),
(53, 'Curacao', '599', '+599', 162),
(54, 'Cyprus', '357', '+357', 69),
(55, 'Czech Republic', '420', '+420', 70),
(56, 'Democratic Republic of the Congo', '243', '+243', 0),
(57, 'Denmark', '45', '+45', 71),
(58, 'Djibouti', '253', '+253', 72),
(59, 'Dominica', '1', '+1', 73),
(60, 'Dominican Republic', '1', '+1', 74),
(61, 'East Timor', '670', '+670', 0),
(62, 'Ecuador', '593', '+593', 75),
(63, 'Egypt', '20', '+20', 76),
(64, 'El Salvador', '503', '+503', 77),
(65, 'Equatorial Guinea', '240', '+240', 78),
(66, 'Eritrea', '291', '+291', 79),
(67, 'Estonia', '372', '+372', 80),
(68, 'Ethiopia', '251', '+251', 81),
(69, 'Falkland Islands', '500', '+500', 82),
(70, 'Faroe Islands', '298', '+298', 83),
(71, 'Fiji', '679', '+679', 84),
(72, 'Finland', '358', '+358', 85),
(73, 'France', '33', '+33', 86),
(74, 'French Polynesia', '689', '+689', 88),
(75, 'Gabon', '241', '+241', 90),
(76, 'Gambia', '220', '+220', 91),
(77, 'Georgia', '995', '+995', 92),
(78, 'Germany', '49', '+49', 93),
(79, 'Ghana', '233', '+233', 94),
(80, 'Gibraltar', '350', '+350', 95),
(81, 'Greece', '30', '+30', 96),
(82, 'Greenland', '299', '+299', 97),
(83, 'Grenada', '1', '+1', 98),
(84, 'Guam', '1', '+1', 100),
(85, 'Guatemala', '502', '+502', 101),
(86, 'Guernsey', '44', '+44', 102),
(87, 'Guinea', '224', '+224', 103),
(88, 'Guinea-Bissau', '245', '+245', 104),
(89, 'Guyana', '592', '+592', 105),
(90, 'Haiti', '509', '+509', 106),
(91, 'Honduras', '504', '+504', 109),
(92, 'Hong Kong', '852', '+852', 56),
(93, 'Hungary', '36', '+36', 110),
(94, 'Iceland', '354', '+354', 111),
(95, 'India', '91', '+91', 112),
(96, 'Indonesia', '62', '+62', 3),
(97, 'Iran', '98', '+98', 113),
(98, 'Iraq', '964', '+964', 114),
(99, 'Ireland', '353', '+353', 115),
(100, 'Isle of Man', '44', '+44', 116),
(101, 'Israel', '972', '+972', 117),
(102, 'Italy', '39', '+39', 118),
(103, 'Ivory Coast', '225', '+225', 0),
(104, 'Jamaica', '1', '+1', 119),
(105, 'Japan', '81', '+81', 120),
(106, 'Jersey', '44', '+44', 121),
(107, 'Jordan', '962', '+962', 122),
(108, 'Kazakhstan', '7', '+7', 123),
(109, 'Kenya', '254', '+254', 124),
(110, 'Kiribati', '686', '+686', 125),
(111, 'Kosovo', '383', '+383', 0),
(112, 'Kuwait', '965', '+965', 128),
(113, 'Kyrgyzstan', '996', '+996', 129),
(114, 'Laos', '856', '+856', 7),
(115, 'Latvia', '371', '+371', 130),
(116, 'Lebanon', '961', '+961', 131),
(117, 'Lesotho', '266', '+266', 132),
(118, 'Liberia', '231', '+231', 133),
(119, 'Libya', '218', '+218', 134),
(120, 'Liechtenstein', '423', '+423', 135),
(121, 'Lithuania', '370', '+370', 136),
(122, 'Luxembourg', '352', '+352', 137),
(123, 'Macau', '853', '+853', 57),
(124, 'Macedonia', '389', '+389', 138),
(125, 'Madagascar', '261', '+261', 139),
(126, 'Malawi', '265', '+265', 140),
(127, 'Malaysia', '60', '+60', 1),
(128, 'Maldives', '960', '+960', 141),
(129, 'Mali', '223', '+223', 142),
(130, 'Malta', '356', '+356', 143),
(131, 'Marshall Islands', '692', '+692', 144),
(132, 'Mauritania', '222', '+222', 146),
(133, 'Mauritius', '230', '+230', 147),
(134, 'Mayotte', '262', '+262', 148),
(135, 'Mexico', '52', '+52', 149),
(136, 'Micronesia', '691', '+691', 150),
(137, 'Moldova', '373', '+373', 151),
(138, 'Monaco', '377', '+377', 152),
(139, 'Mongolia', '976', '+976', 153),
(140, 'Montenegro', '382', '+382', 154),
(141, 'Montserrat', '1', '+1', 155),
(142, 'Morocco', '212', '+212', 156),
(143, 'Mozambique', '258', '+258', 157),
(144, 'Myanmar', '95', '+95', 8),
(145, 'Namibia', '264', '+264', 158),
(146, 'Nauru', '674', '+674', 159),
(147, 'Nepal', '977', '+977', 160),
(148, 'Netherlands', '31', '+31', 161),
(149, 'Netherlands Antilles', '599', '+599', 162),
(150, 'New Caledonia', '687', '+687', 163),
(151, 'New Zealand', '64', '+64', 164),
(152, 'Nicaragua', '505', '+505', 165),
(153, 'Niger', '227', '+227', 166),
(154, 'Nigeria', '234', '+234', 167),
(155, 'Niue', '683', '+683', 168),
(156, 'North Korea', '850', '+850', 0),
(157, 'Northern Mariana Islands', '1', '+1', 170),
(158, 'Norway', '47', '+47', 171),
(159, 'Oman', '968', '+968', 172),
(160, 'Pakistan', '92', '+92', 173),
(161, 'Palau', '680', '+680', 174),
(162, 'Palestine', '970', '+970', 0),
(163, 'Panama', '507', '+507', 176),
(164, 'Papua New Guinea', '675', '+675', 177),
(165, 'Paraguay', '595', '+595', 178),
(166, 'Peru', '51', '+51', 179),
(167, 'Philippines', '63', '+63', 4),
(168, 'Pitcairn', '64', '+64', 180),
(169, 'Poland', '48', '+48', 181),
(170, 'Portugal', '351', '+351', 182),
(171, 'Puerto Rico', '1', '+1', 183),
(172, 'Qatar', '974', '+974', 184),
(173, 'Republic of the Congo', '242', '+242', 0),
(174, 'Reunion', '262', '+262', 185),
(175, 'Romania', '40', '+40', 186),
(176, 'Russia', '7', '+7', 187),
(177, 'Rwanda', '250', '+250', 188),
(178, 'Saint Barthelemy', '590', '+590', 189),
(179, 'Saint Helena', '290', '+290', 190),
(180, 'Saint Kitts and Nevis', '1', '+1', 191),
(181, 'Saint Lucia', '1', '+1', 192),
(182, 'Saint Martin', '590', '+590', 193),
(183, 'Saint Pierre and Miquelon', '508', '+508', 194),
(184, 'Saint Vincent and the Grenadines', '1', '+1', 195),
(185, 'Samoa', '685', '+685', 196),
(186, 'San Marino', '378', '+378', 197),
(187, 'Sao Tome and Principe', '239', '+239', 198),
(188, 'Saudi Arabia', '966', '+966', 199),
(189, 'Senegal', '221', '+221', 200),
(190, 'Serbia', '381', '+381', 201),
(191, 'Seychelles', '248', '+248', 202),
(192, 'Sierra Leone', '232', '+232', 203),
(193, 'Singapore', '65', '+65', 9),
(194, 'Sint Maarten', '1', '+1', 0),
(195, 'Slovakia', '421', '+421', 204),
(196, 'Slovenia', '386', '+386', 205),
(197, 'Solomon Islands', '677', '+677', 206),
(198, 'Somalia', '252', '+252', 207),
(199, 'South Africa', '27', '+27', 208),
(200, 'South Korea', '82', '+82', 0),
(201, 'South Sudan', '211', '+211', 210),
(202, 'Spain', '34', '+34', 211),
(203, 'Sri Lanka', '94', '+94', 212),
(204, 'Sudan', '249', '+249', 213),
(205, 'Suriname', '597', '+597', 214),
(206, 'Svalbard and Jan Mayen', '47', '+47', 215),
(207, 'Swaziland', '268', '+268', 216),
(208, 'Sweden', '46', '+46', 217),
(209, 'Switzerland', '41', '+41', 218),
(210, 'Syria', '963', '+963', 219),
(211, 'Taiwan', '886', '+886', 220),
(212, 'Tajikistan', '992', '+992', 221),
(213, 'Tanzania', '255', '+255', 222),
(214, 'Thailand', '66', '+66', 2),
(215, 'Togo', '228', '+228', 223),
(216, 'Tokelau', '690', '+690', 224),
(217, 'Tonga', '676', '+676', 225),
(218, 'Trinidad and Tobago', '1', '+1', 226),
(219, 'Tunisia', '216', '+216', 227),
(220, 'Turkey', '90', '+90', 228),
(221, 'Turkmenistan', '993', '+993', 229),
(222, 'Turks and Caicos Islands', '1', '+1', 230),
(223, 'Tuvalu', '688', '+688', 231),
(224, 'U.S. Virgin Islands', '1', '+1', 242),
(225, 'Uganda', '256', '+256', 232),
(226, 'Ukraine', '380', '+380', 233),
(227, 'United Arab Emirates', '971', '+971', 234),
(228, 'United Kingdom', '44', '+44', 235),
(229, 'United States', '1', '+1', 236),
(230, 'Uruguay', '598', '+598', 238),
(231, 'Uzbekistan', '998', '+998', 239),
(232, 'Vanuatu', '678', '+678', 240),
(233, 'Vatican', '379', '+379', 0),
(234, 'Venezuela', '58', '+58', 241),
(235, 'Vietnam', '84', '+84', 5),
(236, 'Wallis and Futuna', '681', '+681', 243),
(237, 'Western Sahara', '212', '+212', 244),
(238, 'Yemen', '967', '+967', 245),
(239, 'Zambia', '260', '+260', 246),
(240, 'Zimbabwe', '263', '+263', 247);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_keywords`
--

CREATE TABLE `tbl_product_keywords` (
  `id` int(15) NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_keywords`
--

INSERT INTO `tbl_product_keywords` (`id`, `keywords`) VALUES
(1, 'Dive Packages'),
(2, 'Equipment'),
(3, 'Dive Lesson');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_links`
--

CREATE TABLE `tbl_social_links` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fa_icon_name` varchar(100) NOT NULL,
  `links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social_links`
--

INSERT INTO `tbl_social_links` (`id`, `name`, `fa_icon_name`, `links`) VALUES
(1, 'Twitter', 'fa fa-twitter', '#'),
(2, 'Pinterest', 'fa fa-pinterest', '#'),
(3, 'Facebook', 'fa fa-facebook', '#'),
(4, 'Google Plus', 'fa fa-google-plus', '#'),
(5, 'Instagram', 'fa fa-instagram', '#'),
(6, 'Linkedin', 'fa fa-linkedin', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logged_in` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `emp_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `user_type`, `email`, `logged_in`, `last_login`, `first_name`, `middle_name`, `last_name`, `emp_no`) VALUES
(33, '123', 'SUPERADMIN', 'sadmin', 'TRUE', '2017-05-16 13:02:50', 'Super Admin', '', '', 8),
(40, '123', 'ADMIN', 'admin', 'FALSE', '2017-05-16 13:02:27', 'admin', '', '', 13),
(41, '123', 'MARKETINGPERSON', 'mk', 'FALSE', '2017-01-17 12:30:10', 'Mk', '', '', 14),
(42, '111119531509452736334', 'Customer', 'rajkumar.bizsoft@gmail.com', 'FALSE', '2017-04-25 11:29:26', 'Rajkumar', '', 'Subramaniam', 0),
(61, '107550170254738098187', 'Customer', 'ruthanitha94@gmail.com', 'FALSE', '2017-04-24 12:33:58', 'Ruth', '', 'Anitha', 0),
(62, '116211299901976086383', 'Customer', 'anitha.bizsoft@gmail.com', 'FALSE', '2017-04-24 12:36:21', 'Anitha', '', 'Sugumaran', 0),
(63, '114721322863519575929', 'Customer', 'rajsl.0324@gmail.com', 'FALSE', '2017-04-24 12:37:14', 'Raj', '', 'Kumar SL', 0),
(64, '1328226313922129', 'Customer', 'kkcasraj709@gmail.com', 'FALSE', '2017-04-25 11:20:48', 'Raj', '', 'Kumar', 0),
(65, '1328226313922129', 'Customer', 'Raj', 'FALSE', '2017-05-12 13:38:07', 'Raj', '', 'Kumar', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `daily_plan`
--
ALTER TABLE `daily_plan`
  ADD PRIMARY KEY (`daily_plan`);

--
-- Indexes for table `dive_center`
--
ALTER TABLE `dive_center`
  ADD PRIMARY KEY (`dive_center_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook_user`
--
ALTER TABLE `facebook_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter_infrastructure`
--
ALTER TABLE `filter_infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter_language`
--
ALTER TABLE `filter_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `googleplus_user`
--
ALTER TABLE `googleplus_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `session_table`
--
ALTER TABLE `session_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `special_offer`
--
ALTER TABLE `special_offer`
  ADD PRIMARY KEY (`special_offer_id`);

--
-- Indexes for table `tbl_booking_policies`
--
ALTER TABLE `tbl_booking_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cancellation_policies`
--
ALTER TABLE `tbl_cancellation_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contacts_divemaster`
--
ALTER TABLE `tbl_contacts_divemaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contacts_staffdetails`
--
ALTER TABLE `tbl_contacts_staffdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customerprofile`
--
ALTER TABLE `tbl_customerprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dccourses`
--
ALTER TABLE `tbl_dccourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dcguidedtours`
--
ALTER TABLE `tbl_dcguidedtours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dcleisure`
--
ALTER TABLE `tbl_dcleisure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dcpackage`
--
ALTER TABLE `tbl_dcpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dcprofile`
--
ALTER TABLE `tbl_dcprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fundive`
--
ALTER TABLE `tbl_fundive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_generalinfo`
--
ALTER TABLE `tbl_generalinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_help`
--
ALTER TABLE `tbl_help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_island`
--
ALTER TABLE `tbl_island`
  ADD PRIMARY KEY (`island_id`);

--
-- Indexes for table `tbl_island_overview`
--
ALTER TABLE `tbl_island_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_map`
--
ALTER TABLE `tbl_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_phonecode`
--
ALTER TABLE `tbl_phonecode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_keywords`
--
ALTER TABLE `tbl_product_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social_links`
--
ALTER TABLE `tbl_social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `daily_plan`
--
ALTER TABLE `daily_plan`
  MODIFY `daily_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dive_center`
--
ALTER TABLE `dive_center`
  MODIFY `dive_center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `facebook_user`
--
ALTER TABLE `facebook_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `filter_infrastructure`
--
ALTER TABLE `filter_infrastructure`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `filter_language`
--
ALTER TABLE `filter_language`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `googleplus_user`
--
ALTER TABLE `googleplus_user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product1`
--
ALTER TABLE `product1`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `special_offer`
--
ALTER TABLE `special_offer`
  MODIFY `special_offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_booking_policies`
--
ALTER TABLE `tbl_booking_policies`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_cancellation_policies`
--
ALTER TABLE `tbl_cancellation_policies`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_contacts_divemaster`
--
ALTER TABLE `tbl_contacts_divemaster`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_contacts_staffdetails`
--
ALTER TABLE `tbl_contacts_staffdetails`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_customerprofile`
--
ALTER TABLE `tbl_customerprofile`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_dccourses`
--
ALTER TABLE `tbl_dccourses`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_dcguidedtours`
--
ALTER TABLE `tbl_dcguidedtours`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_dcleisure`
--
ALTER TABLE `tbl_dcleisure`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_dcpackage`
--
ALTER TABLE `tbl_dcpackage`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_dcprofile`
--
ALTER TABLE `tbl_dcprofile`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_fundive`
--
ALTER TABLE `tbl_fundive`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_generalinfo`
--
ALTER TABLE `tbl_generalinfo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_help`
--
ALTER TABLE `tbl_help`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_island`
--
ALTER TABLE `tbl_island`
  MODIFY `island_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_island_overview`
--
ALTER TABLE `tbl_island_overview`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_map`
--
ALTER TABLE `tbl_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_phonecode`
--
ALTER TABLE `tbl_phonecode`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `tbl_product_keywords`
--
ALTER TABLE `tbl_product_keywords`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_social_links`
--
ALTER TABLE `tbl_social_links`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
