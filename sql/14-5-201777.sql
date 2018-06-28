-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 01:40 PM
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
  `product_name` varchar(60) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `price` double(18,2) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `price`, `product_description`) VALUES
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
('0159d4bfb97a990aeaf79a8c866c201a8f3343ec', '::1', 1494590543, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343539303534333b4642524c485f73746174657c733a33323a226638313338346463303638383235666537383761613334376666613532346666223b),
('01c21db4d4207c225d0d0af8420f258e4554eeee', '::1', 1494580484, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538303438313b),
('05a5aca62cf63f3bd74e95fb97c2a7c64db2d56c', '::1', 1494758388, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735383133333b),
('05b0d0a8c2eec331614ada3c602d09a7d6ffa139', '::1', 1494586827, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538363737323b),
('0996731beaff8ce4ca6628201a04d1c5d4895d60', '::1', 1494568026, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536373837363b),
('0b38e765d59e7ae55e6652cc0ce0482b0ba89318', '::1', 1494650186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634393938333b),
('0ceb25fdfab04a904107e1195e440557b306d592', '::1', 1494761954, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343736313935333b),
('0d2431a5c9361cf9fe6e6c2705ab9bb61a7ace22', '::1', 1494583524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538333233363b),
('10d1401b04d9cc0b6cc7480aa1bcd4f8611a7680', '::1', 1494759562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735393236373b),
('136bc97deacbc931767101c5daef8d49a373030e', '::1', 1494754824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735343831393b),
('13a4d0176bf5e8584868bb748b1b925de7176e1e', '::1', 1494588288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538383037373b4642524c485f73746174657c733a33323a223032666135663366303837646362623239613662383363313061316137373938223b757365725f69647c733a323a223333223b757365725f747970657c733a31303a22535550455241444d494e223b66697273745f6e616d657c733a31313a2253757065722041646d696e223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a363a227361646d696e223b70617373776f72647c733a333a22313233223b6c6f676765645f696e7c733a343a2254525545223b),
('16a68fc6e9c44a754ea410aeef566e385581e529', '::1', 1494657608, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635373630373b),
('1c221a51d1fbfc4317e3e4becff4cdd228e74fa2', '::1', 1494562271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536323236383b),
('1ec59c9b3054e6691de6e88ef1e6fe4e31b0d449', '::1', 1494587500, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538373330303b4642524c485f73746174657c733a33323a223032666135663366303837646362623239613662383363313061316137373938223b757365725f69647c733a323a223333223b757365725f747970657c733a31303a22535550455241444d494e223b66697273745f6e616d657c733a31313a2253757065722041646d696e223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a363a227361646d696e223b70617373776f72647c733a333a22313233223b6c6f676765645f696e7c733a343a2254525545223b),
('204c067971821bf2556439c7bb23026b3d2659e0', '::1', 1494668641, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343636383634303b),
('2079f91783fbf3599c24fd0e6a4c58388505b941', '::1', 1494672001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637313638373b),
('25b9a05f2d07484d178bf23675882b9281bc4e1c', '::1', 1494738503, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343733383335333b),
('2b673adf164a9e5c508c6dfaedb265755fd4d20b', '::1', 1494738127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343733373839363b),
('2db198b77396afcf0a326678ff5c3eec384f59b3', '::1', 1494566530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536363432363b),
('31468278bc83f46db2ff0bdb30cef0f2faeb79f5', '::1', 1494648622, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634383336313b),
('3349f9f06080089a5961ec27c4c0a55e00591a21', '::1', 1494667129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343636373034373b),
('34e783a6dfda82a7a60eb3c05c4180c35de90620', '::1', 1494759026, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735383835393b),
('3855f1eaf7e356704f5f5fe8b91552e3973aac4a', '::1', 1494563254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536333235343b),
('3e115d548d1bab1c223a09ed97817e7984f81bff', '::1', 1494571060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343537303936363b),
('41dbc40ca6203338a3a92b08b8d55902466a0d35', '::1', 1494578522, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343537383237363b),
('46e34ac51608ada4a875c6bce7ad8cba47eb9cb6', '::1', 1494745084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343734343833313b),
('477206ec7b58f163035968651112b327afbf2d49', '::1', 1494568401, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536383237383b),
('4aa6bbb243d4049ed75a1f8f35ea5da7dcebda1c', '::1', 1494667562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343636373433333b),
('4afd4855e06ed53427616e0903041c7f90b124ac', '::1', 1494588594, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538383338373b4642524c485f73746174657c733a33323a223032666135663366303837646362623239613662383363313061316137373938223b757365725f69647c733a323a223333223b757365725f747970657c733a31303a22535550455241444d494e223b66697273745f6e616d657c733a31313a2253757065722041646d696e223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a363a227361646d696e223b70617373776f72647c733a333a22313233223b6c6f676765645f696e7c733a343a2254525545223b),
('4c6375a3133d4720a65e78101613327e9ec2141f', '::1', 1494562016, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536313932303b),
('4daaf5ca46d6ab42ae02bde975024070802770d0', '::1', 1494669586, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343636393335323b),
('54cf9bf52b9a3996578bd13ec53e8bed43dfd8d2', '::1', 1494589785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538393731343b4642524c485f73746174657c733a33323a226438303964633133306431316264333331336134373232393431633335346438223b66625f6578706972657c693a313439393737333038333b66625f6163636573735f746f6b656e7c733a3137383a224541414f6b5a424b764759375142414161794c646e614e6e77666c4b57777a795a43694e6a5452556a72345776304a5a4264466673586477586a4e7a56474e6a6948676a766f3758666a56687536764b5a41723537373265484c556f665a42774f4c53473243303667356f5a4139347877424337723047744c6d4e65746f6b396c596c684e7454387a5868746e72764c6e6770516951576e55496a6474645a416d524875787776484132504d43775a445a44223b757365725f69647c733a323a223635223b757365725f747970657c733a31333a2246616365626f6f6b2055736572223b66697273745f6e616d657c733a333a2252616a223b6c6173745f6e616d657c733a353a224b756d6172223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a333a2252616a223b70617373776f72647c733a31363a2231333238323236333133393232313239223b6c6f676765645f696e7c733a343a2254525545223b),
('5655c11ee5d500613764bd32920d61b95220ce1e', '::1', 1494562776, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536323537373b),
('5744bcdad23631e4ff03d087c8b304103578b257', '::1', 1494655112, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635343939363b),
('58628a4a93794b2b0fae8c04742b1b6beb7790c5', '::1', 1494669915, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343636393931353b),
('5868018993b76a6146ef2d22e87d0e318101c2a9', '::1', 1494649394, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634393330373b),
('5bf277f9cb27257765a44dd363e6054483ab2473', '::1', 1494651809, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635313533303b),
('5c4d05cb7e07971401c40fadeca4ba2b2a73f0d4', '::1', 1494579313, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343537393130383b),
('5d6e47cbfd815a8b5e0e02efd097448bbfe1f95a', '::1', 1494583722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538333730303b),
('631a73c8c202c8e99b188ba57891a3133313ecdc', '::1', 1494569695, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536393432373b),
('632023f2c60926d902b61a4ba5a61d695144b1c4', '::1', 1494759883, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735393633353b),
('63dbd6cd97b3133afa2235d783861632b013b42a', '::1', 1494744214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343734343230353b),
('6530723c590493c20c37ea3da62bf5d5d75dcddf', '::1', 1494652211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635323137383b),
('68a60ba0be5bfc701bf1e6327f3fc0dcb1edf57b', '::1', 1494649930, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634393635303b),
('6caebcfd5bba58b02b7524065b3a1f9fb633817c', '::1', 1494652782, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635323536313b),
('6f26b69458fa36b4a927a163993d0aa18fb2c6d8', '::1', 1494651163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635303930343b),
('70605187808e752d26b2df40d8429c81ad5d852a', '::1', 1494673412, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637333132313b),
('725d2f8b7d882be4dd8cef8d20b387deb8b6c17b', '::1', 1494670996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637303734333b),
('731cfa9d26f23b871f18cef471433c2c4ad73795', '::1', 1494590140, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343539303133393b4642524c485f73746174657c733a33323a226438303964633133306431316264333331336134373232393431633335346438223b66625f6578706972657c693a313439393737333038333b66625f6163636573735f746f6b656e7c733a3137383a224541414f6b5a424b764759375142414161794c646e614e6e77666c4b57777a795a43694e6a5452556a72345776304a5a4264466673586477586a4e7a56474e6a6948676a766f3758666a56687536764b5a41723537373265484c556f665a42774f4c53473243303667356f5a4139347877424337723047744c6d4e65746f6b396c596c684e7454387a5868746e72764c6e6770516951576e55496a6474645a416d524875787776484132504d43775a445a44223b757365725f69647c733a323a223635223b757365725f747970657c733a31333a2246616365626f6f6b2055736572223b66697273745f6e616d657c733a333a2252616a223b6c6173745f6e616d657c733a353a224b756d6172223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a333a2252616a223b70617373776f72647c733a31363a2231333238323236333133393232313239223b6c6f676765645f696e7c733a343a2254525545223b),
('751191f52f1b351721ee22a838e4aba9e8429959', '::1', 1494567142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536363835333b),
('758a0ca06d2421bd2477ecf734dc3755b6fb13d3', '::1', 1494754963, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735343832363b),
('7598c4fd294c88246226204b18afc27ed1092964', '::1', 1494655459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635353435383b),
('76f2bb9967945eef8bb8eb1eb8d9ca56af8787ba', '::1', 1494564419, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536343230333b),
('7b355bb85ec47d476a8ea453e9f9ad627febd48e', '::1', 1494648030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634373835303b),
('80503c09d71a38b7abfeba1de2347fa4c12fc46b', '::1', 1494668167, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343636373837363b),
('844d25f4c20db5370a073d7ff03029ba3586bb64', '::1', 1494648940, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634383637333b),
('88f7d5c15aa1f47a5bc382970ef01a6038a349ce', '::1', 1494589576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538393338363b4642524c485f73746174657c733a33323a226438303964633133306431316264333331336134373232393431633335346438223b66625f6578706972657c693a313439393737333038333b66625f6163636573735f746f6b656e7c733a3137383a224541414f6b5a424b764759375142414161794c646e614e6e77666c4b57777a795a43694e6a5452556a72345776304a5a4264466673586477586a4e7a56474e6a6948676a766f3758666a56687536764b5a41723537373265484c556f665a42774f4c53473243303667356f5a4139347877424337723047744c6d4e65746f6b396c596c684e7454387a5868746e72764c6e6770516951576e55496a6474645a416d524875787776484132504d43775a445a44223b757365725f69647c733a323a223635223b757365725f747970657c733a31333a2246616365626f6f6b2055736572223b66697273745f6e616d657c733a333a2252616a223b6c6173745f6e616d657c733a353a224b756d6172223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a333a2252616a223b70617373776f72647c733a31363a2231333238323236333133393232313239223b6c6f676765645f696e7c733a343a2254525545223b),
('89c73b5dc50fd8a09f12a266bee7f8eeabf851bf', '::1', 1494756399, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735363237313b),
('922141c969110c5aa0c77dafa68d63d4f749c4e7', '::1', 1494576836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343537363635383b),
('93de3d4390ceafedc6ea840ac156bf92da4c1b86', '::1', 1494739788, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343733393735343b),
('948a6d7e39247db73f1aad590f2db668e90fa15a', '::1', 1494671349, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637313035343b),
('95433ede55d47eac0a0cacf4766c75391d74261f', '::1', 1494745244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343734353136393b),
('96e1b3b8d5e4c234987aacf32f4f116688ceddcd', '::1', 1494569213, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536383931373b),
('a033398c191ed06444078594edc8bf6392e2ec24', '::1', 1494760311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343736303032383b),
('a108e1e2e907d172e72ec4ff0a8595c7eeec47d1', '::1', 1494760725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343736303335343b),
('a128a6ddd0c9c2a41c3b1dc40b41dd4818b24257', '::1', 1494656897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635363830353b),
('a1c7ff5f2758fb790d7cc91638b9846dbec0a007', '::1', 1494570862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343537303633323b),
('a2092ee668257fe6db9a7c3de5662a4a446e045f', '::1', 1494652148, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635313836373b),
('a2345423c091797d99827b44e42449cc0b85de03', '::1', 1494563724, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536333539363b),
('a30b29252ea985f36ec6e8df897de5967375840c', '::1', 1494760927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343736303733323b),
('a32ef952863a8754d3706bb8c86c3940a1a44edb', '::1', 1494758690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735383439393b),
('a50a07a05990c6c19dc2a06ff7d29295ef464067', '::1', 1494570537, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343537303331393b),
('a88093f20d138f15fc1f863643be735bce0ca5c5', '::1', 1494588991, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538383639393b4642524c485f73746174657c733a33323a223032666135663366303837646362623239613662383363313061316137373938223b757365725f69647c733a323a223333223b757365725f747970657c733a31303a22535550455241444d494e223b66697273745f6e616d657c733a31313a2253757065722041646d696e223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a363a227361646d696e223b70617373776f72647c733a333a22313233223b6c6f676765645f696e7c733a343a2254525545223b),
('af84d04cc4a794a8534ae177d6ba7dcf42a0d142', '::1', 1494744821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343734343532343b),
('b40e27581af1dcb3719d1f6405972f06721fd379', '::1', 1494672697, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637323431363b),
('b9dfb18e5f122ea9ffac8acd4a5a51b8270709b6', '::1', 1494673615, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637333630323b),
('c406f829cb88fd4ee242e21690a616cd5f91d8a3', '::1', 1494743105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343734333130333b),
('c46654bb94bb30d38a1d09f13027577b8bf46dc6', '::1', 1494647309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634373330363b),
('c63474362ac94ea177f4cc67a2d6b0f94a1b9064', '::1', 1494756015, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343735353731363b),
('c9e56525199b13b296fb6f17a78828d7cadd4428', '::1', 1494561562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536313536323b),
('c9fe4da0f238cee2e0d41e88064153aa6acb8691', '::1', 1494565726, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536353634333b),
('d4646aa01a7d9feb864f9f41e2a432464281cfb9', '::1', 1494674311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637343138363b),
('d4c937a7c08e3483c7599db6719b6f30fab57279', '::1', 1494567507, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536373231353b),
('d52fb25bbaa064839eb8ce8456404e7557f69033', '::1', 1494654996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635343939333b),
('d5f958627a84793d1a45c79ab02302ec326ae9d0', '::1', 1494581003, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538303837373b),
('db582add59a5deaa05dbcf6d2b74ae4c7a91bc93', '::1', 1494653080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635323838363b),
('e218586c239f9eacb47c75a46b044db054690fdc', '::1', 1494569807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536393830363b),
('e3df1d74f462dfd2faafad922c44eeb779574100', '::1', 1494649233, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634383938373b),
('e52e182ab0fd4102997b9276a9653838ebd46d71', '::1', 1494589097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343538393038303b4642524c485f73746174657c733a33323a226438303964633133306431316264333331336134373232393431633335346438223b66625f6578706972657c693a313439393737333038333b66625f6163636573735f746f6b656e7c733a3137383a224541414f6b5a424b764759375142414161794c646e614e6e77666c4b57777a795a43694e6a5452556a72345776304a5a4264466673586477586a4e7a56474e6a6948676a766f3758666a56687536764b5a41723537373265484c556f665a42774f4c53473243303667356f5a4139347877424337723047744c6d4e65746f6b396c596c684e7454387a5868746e72764c6e6770516951576e55496a6474645a416d524875787776484132504d43775a445a44223b757365725f69647c733a323a223635223b757365725f747970657c733a31333a2246616365626f6f6b2055736572223b66697273745f6e616d657c733a333a2252616a223b6c6173745f6e616d657c733a353a224b756d6172223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a333a2252616a223b70617373776f72647c733a31363a2231333238323236333133393232313239223b6c6f676765645f696e7c733a343a2254525545223b),
('e67aef166364ffa029088964c06db8354cc0b6fb', '::1', 1494563236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536323934313b),
('e680b91a90b20cce767f59127f83fa8a48c9a35e', '::1', 1494666724, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343636363631303b),
('e8a69ca46c303d9d249df9d24b22becb5d25a02d', '::1', 1494653307, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635333330363b),
('eac7d3accbcf9b94a36a88ffb515089ffef677b5', '::1', 1494739410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343733393135323b),
('eaebdaee72f2f792dd26778230384166a83bc38c', '::1', 1494671498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637313336343b),
('f0c930b83b8dc2feb016cd2ce2b01bca6cba02f3', '::1', 1494658787, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343635383738363b),
('f8945743572218263c7623e3f6dad2115c8437af', '::1', 1494672012, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343637323031303b),
('fedc3c8f7104bd4e079497b2dd9bfd74c641e8f0', '::1', 1494565508, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343536353237363b),
('ffb6eff1ee7957dd66992564d8178a19e72860a3', '::1', 1494578876, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343537383634313b);

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
(1, 'Open Water License', 'Take your 1st step as a Certified Diver by taking the Padi Open Water License. We provide the complete course in 3 days. Course include 2 Beach Dive and 2 Boat Dive.', 'Reading Materials', 'Accomodation', '', '0', 'Courses & Specialties', 'Dive Lesson', 1, 'Available', 'Pax', 1, 10, 700.00, 'No', '', '0', '0', '0', 'Yes', '2017-03-01', '2017-03-01', '%', 10, '', '', '', 'Non-Diver', '', '', 41),
(2, 'ccc', 'c', 'c', 'c', 'Full Equipment Rendal,Marine Park Fee', 'c', 'Courses & Specialties', 'Equipment', 1, 'Available', 'Dive', 1, 2, 50.00, 'No', '$', '1,2', '2,5', '50,60', 'Yes', '2017-03-28', '2017-03-29', '$', 50, 'No', '', '', 'Non-Diver', 'Advanced', 'Altitude Diver', 0),
(3, 'bnbfn', 'bvnbvn', 'bvnbvn', 'bvnbvn', 'Full Equipment Rendal,Marine Park Fee', 'vbnbvn', 'bvnbvn', 'Equipment', 5, 'Available', '', 5, 2, 42.00, 'Yes', '%', '5', '2', '150', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, 'No', '', 'Non-Diver', 'Advanced', 'Altitude Diver', 0),
(4, 'sdfds', 'sdfdsf', 'sdfsd', 'dsfdsf', 'Full Equipment Rendal', 'sdfds', 'dsfdsf', 'Dive Packages', 45, 'Available', NULL, 5, 2, 3.00, 'No', NULL, '', '', '', 'Yes', '2017-05-18', '2017-05-19', '%', 52, 'Yes', '', NULL, 'Non-Diver', 'Novice', 'Altitude Diver', 0);

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
(2, 'Pulau Weh', 'Travel to Indonesia and dive around Pulau Weh, A great spot to expand your dive experience and increase your diving skills.', 'Transfer from Jetty to Island, Transfer from Airport to Jetty', 'Marine Park Fee', 'Full Equipment Rendal', 'Flight Tickets not included and booked separately by divers.', 'Guided Tours	', 'Dive Packages', '2017-03-01', '2017-06-01', '2017-06-22', '2017-06-30', 1, 'Available', 'Day', 10, '800', '780', '760', '0', 'Yes', '', '5', '6', '20', 'Yes', '2017-03-01', '2017-03-15', '', 10, 'No', '', '', 'ABC Chalet Resort', '-', '2 Single Bed', '1 Queen & 1 Single', '2 Queen', '15:00:00', '12:00:00', 'Capsule', '', 'Owd', '', '', 5, 5, '0', '0', '', 'Image_B_1.png', 41),
(3, 'mmm', 'mmm', 'mmm', 'mmm', 'Full Equipment Rendal,Transfer From Hotel', 'mmm', 'mmm', 'Dive Packages', '2017-03-29', '2017-03-30', '2017-03-29', '2017-03-30', 5, 'Available', '', 5, '2', '1', '2', '3', 'No', '', '0', '0', '0', 'Yes', '2017-03-29', '2017-03-30', '$', 50, 'Yes', '', '', 'mmm', '1', '2', '3', '4', '17:00:00', '14:00:00', '', 'Wi-fi,Television,', 'Non-Diver', 'Novice,Advanced', 'Altitude Diver', 2, 6, '52.008', '52.798', 'Goral Garden,Batu Ikan', 'Image_C_2.jpg', 11),
(4, 'Pulau Weh', 'Travel to Indonesia and dive around Pulau Weh, A great spot to expand your dive experience and increase your diving skills.', 'Transfer from Jetty to Island, Transfer from Airport to Jetty', 'Marine Park Fee', 'Full Equipment Rendal', 'Flight Tickets not included and booked separately by divers.', 'Guided Tours	', 'Dive Packages', '2017-03-01', '2017-06-01', '2017-07-12', '2017-07-15', 1, 'Available', 'Day', 10, '800', '780', '760', '0', 'Yes', '', '5', '6', '20', 'Yes', '2017-03-01', '2017-03-15', '', 10, 'No', '', '', 'ABC Chalet Resort', '-', '2 Single Bed', '1 Queen & 1 Single', '2 Queen', '15:00:00', '12:00:00', 'Capsule', '', 'Owd', '', '', 5, 5, '0', '0', '', 'Image_C_3.jpg', 15),
(5, 'mmm', 'mmm', 'mmm', 'mmm', 'Full Equipment Rendal,Transfer From Hotel', 'mmm', 'mmm', 'Dive Packages', '2017-03-29', '2017-03-30', '2017-02-09', '2017-02-23', 5, 'Available', '', 5, '2', '1', '2', '3', 'No', '', '0', '0', '0', 'Yes', '2017-03-29', '2017-03-30', '$', 50, 'Yes', '', '', 'mmm', '1', '2', '3', '4', '17:00:00', '14:00:00', '', 'Wi-fi,Television,', 'Non-Diver', 'Novice,Advanced', 'Altitude Diver', 2, 6, '52.008', '52.798', 'Goral Garden,Batu Ikan', 'Image_B_1.png', 25);

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
(1, 'Boat Dive', 'A guided boat dive to the diving sites located around Pulau Tioman. Dive sites subjected to weather and dive instructor arrangement.', 'Water is provided', 'Marine Park Fee', 'Full Equipment Rendal', 'Maximum of 6 ppl per diving group for every instructor.', 'Leisure Dive', 'Dive Packages', 1, 'Available', 'Dive', 3, 'No Limit', 100.00, 'Yes', '$', '3', '4', '5', 'No', '0000-00-00', '0000-00-00', '', NULL, NULL, '', '', 'Owd', '', '', 41),
(2, 'Snorkelling', 'Go on a Snorkelling Excursion around Pulau Tioman. We’ll take you to the 5 of the most beautiful sites where you can play and swim among the fishes.', 'Snorkel & Mask + Safety Vest is provided.', 'Marine Park Fee', NULL, 'There will be a lunch break. This is a full day event.', 'Leisure Dive', 'Dive Packages', 2, 'Available', 'Pax', 0, 'No Limit', 200.00, 'Yes', '$', '3,5,7', '4,6,8', '10,15,25', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, '', '', 'Non-Diver', '', '', 41),
(3, 'Dive Equipment Rental', 'Full Dive Equipment Rental includes Wetsuit, Mask & Snorkel, Weights, Flippers, BCD.', '-', '-', '', 'Rental for 1 day', 'Leisure Dive', 'Equipment', 3, 'Available', 'Day', 1, 'No Limit', 95.00, 'No', NULL, '0', '0', '0', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, '', '', 'Non-Diver', '', '', 41),
(4, 'GoPro Rental', 'Underwater GoPro Camera Rental', 'Rental for 1 day', 'N/A', NULL, 'A separate refundable deposit of MYR 200 is required.', 'Leisure Dive', 'Equipment', 4, 'Available', 'Day', 0, 'No Limit', 200.00, 'No', NULL, '0', '0', '0', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, '', '', 'Non-Diver', '', '', 41),
(14, 'sdsas', 'dsass', 'dsfs', 'dsd', 'Full Equipment Rendal,Transfer From Hotel', 'dsasd', 'dsfds', 'Equipment', 78, 'Available', '', 55, '22', 333.00, 'No', NULL, '', '', '', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, 'Yes', '55,56', 'Non-Diver', 'Novice', 'Altitude Diver', 0),
(15, 'gfhgf', 'gfhgf', 'gfhgf', 'gfhgfh', 'Full Equipment Rendal,Transfer From Hotel', 'gfhgfh', 'gfhfg', 'Dive Packages', 626, 'Available', '', 5, '2', 32.00, 'No', NULL, '', '', '', 'Yes', '2017-03-04', '2017-04-08', '%', 52, 'Yes', 'No', '', 'Non-Diver', 'Novice', 'Altitude Diver', 0),
(16, 'sdfds', 'dsfdsf', 'dsfdsf', 'sdfdsf', 'Full Equipment Rendal,Transfer From Hotel', 'fdsfds', 'dsfdsf', 'Equipment', 6, 'Available', '', 5, '2', 250.00, 'No', NULL, '', '', '', 'No', '0000-00-00', '0000-00-00', NULL, 0, NULL, 'No', '', 'Non-Diver', 'Novice', 'Altitude Diver', 0),
(18, 'dfds', 'dsfds', 'dasd', 'asds', '', 'asdsa', 'sadsa', '', 56, NULL, '', 5, '2', 3.00, 'No', NULL, '', '', '', 'Yes', '2017-04-17', '2017-04-21', NULL, 0, NULL, 'No', '', '', '', '', 0);

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
(1, '3D2N Tioman Diveaway', 'Enjoy a wonderful 3 Day 2 Night Stay at the lovely Pulau Tioman. Pack your bags and enjoy a divecation and see the amazing underwater view of the numerous dive site at Pulau Tioman. Package includes 5 Dives and accommodation.', 'Transfer from Jetty to Island, Water provided during dive trip', 'Marine Park Fee', 'Full Equipment Rendal', 'Maximum of 6 ppl per diving group for every instructor.', 'Dive Package', 'Dive Packages', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 'Available', 'Pax', 20, 0.00, 0.00, 0.00, 'Yes', '750,800,850', '750,800,850', '725,780,830', '700,760,810', 'No', '$', '0', '0', '0', 'No', '0000-00-00', '0000-00-00', '', 0, NULL, '', '', 'ABC Chalet Resort', 'N/A', '2 Single Bed', '1 Queen & 1 Single', '2 Queen', '15:00:00', '12:00:00', 'Chalet', '', 'Owd', 'Novice', 'Deep Diver', 3, 2, '-', '-', '', 'Image_C_11.jpg', 41),
(2, '5 Boat Dive Package', 'Grab our 5 boat dive package and enjoy more savings.\r\n', 'Water and Biscuits in Between Dives', '-', 'Full Equipment Rendal', 'Maximum of 6 ppl per diving group for every instructor.', 'Dive Package', 'Dive Packages', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 'Available', 'Pax', 20, 550.00, 600.00, 650.00, 'No', ',,', ',,', ',,', ',,', 'Yes', '%', '3', '4', '5', 'No', '0000-00-00', '0000-00-00', '', 0, NULL, '50', '', 'N/A', '', '', '', '', '00:00:00', '00:00:00', '', '', 'Owd', 'Novice', 'Deep Diver', 3, 2, '-', '-', 'Goral Garden,Batu Ikan', 'Image_C_2.jpg', 41),
(3, 'dfgf', 'fdfgdf', 'fdg', 'dgdf', 'Full Equipment Rendal,Marine Park Fee', 'fdgdf', 'dfgdfg', 'Dive Packages', '2017-03-29', '2017-03-30', '2017-03-29', '2017-03-30', 12, 'Available', 'Day', 5, 150.00, 200.00, 250.00, 'Yes', '1,2,3', '4,5,6', '7,8,9', '10,11,12', 'Yes', '$', '1', '2', '3', 'Yes', '2017-03-29', '2017-03-30', '$', 150, 'Yes', '', '', 'gdfdf', '1', '2', '3', '4', '15:00:00', '12:00:00', 'Capsule', 'Wi-fi,Fan', 'Non-Diver', 'Advanced', 'Altitude Diver', 3, 2, '100', '122', '', 'Image_C_33.jpg', 41),
(4, 'kkk', 'df', 'kkk', 'kkkk', 'Full Equipment Rendal,Transfer From Hotel', 'kkk', 'kkk', 'Equipment', '2017-03-29', '2017-03-30', '2017-03-29', '2017-03-30', 45, 'Available', '', 5, 15.00, 25.00, 35.00, 'No', ',,', ',,', ',,', ',,', 'No', '', '', '', '', 'Yes', '2017-03-29', '2017-03-30', '%', 450, 'Yes', '', '', 'kkk', '1', '2', '3', '4', '16:00:00', '13:00:00', '', 'Wi-fi,Television,', 'Non-Diver', 'Novice', 'Altitude Diver', 3, 2, '11.052', '11.0790', 'Batu Ikan,Renggis', 'Image_B_1.png', 41),
(5, 'dsfdsf', 'dfsfs', 'sdfsd', 'sfdsf', 'Full Equipment Rendal,Transfer From Hotel', 'dsfsdf', 'dsfsdf', 'Equipment', '2017-04-05', '2017-04-06', '2017-04-05', '2017-04-06', 6, 'Available', '', 5, 10.00, 20.00, 30.00, 'No', ',,', ',,', ',,', ',,', 'No', '', '', '', '', 'Yes', '2017-04-05', '2017-04-06', '$', 100, 'Yes', 'No', '', 'dsfd', '1', '2', '3', '4', '15:00:00', '12:00:00', '', 'Wi-fi,Locker,', 'Non-Diver', 'Advanced', 'Altitude Diver', 3, 2, '13.0785', '81.0085', 'Goral Garden,Renggis', 'Image_B_1.png', 41);

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
(2, 'Ocean Dive Discovery', '2s.jpg', 'Tioman Island, or more fondly known by the locals as Pulau Tioman is a small island located in the state of Pahang in Peninsular Malaysia. It is along the east coast of the state which is one of the top tourist destinations in the region. In Tioman Island, there are 8 main villages in which Kampung Tekek has the highest population.', 1, 18, '2.7902', '104.1698', 'Ocean Dive Discovery', '123456789', '060 4546466', '123 jskdkahs', '060 546466', 'Kampung Air Batang(ABC Village)', '75825956599', '78994515', 'ocean@demo.com', '-', '3', 2, '2', 'CLASSROOM,EQUIPMENT SHOP,', '100% AWARE,SSI,SDI,', '123366', 'JAN,MARCH', 'ENGLISH', 'DATE OF BIRTH,DATE OF LAST DIVE,', 'MYR', 41),
(3, 'ABC Dive center', '1s.jpg', 'Professional recreational diving instructors are often associated with, or employed by, a dive center. The center may be located near a swimming pool and open water, where training and guided dives can be conducted.', 1, 18, '4.92555', '102.566565', 'abc', '123', '060595255', 'ghhgjj', '060054446', 'gvjhgjg', '060545545', '0061111', 'abc@demo.com', 'www.abc.com', '2', 3, '2', 'CLASSROOM,SHOWER', 'GREEN STAR AWARD,SDI', '12655', 'JAN,MARCH,MAY', 'FRENCH', 'CERTIFICATION CARD,MEDICAL STATEMENT', 'MYR', 11),
(4, 'FGH Dive center', '3s.jpg', 'Professional recreational diving instructors are often associated with, or employed by, a dive center. The center may be located near a swimming pool and open water, where training and guided dives can be conducted.', 1, 18, '4.0985', '102.8955', 'FGH ', '4745', '060548454', 'dfngkfd', '18945645', 'dssdfd', '06045454', '06161116', 'fgh@demo.com', '-', '3', 1, '3', 'BAR,LOCKER', 'PADI,SDI,NAUI', '456', 'JAN,APRIL,SEPTEMBER', 'ENGLISH,SWEDISH,MALAY', 'DATE OF BIRTH,DATE OF LAST DIVE', 'MYR', 12),
(5, 'RPS dive center', '4s.jpg', 'Professional recreational diving instructors are often associated with, or employed by, a dive center. The center may be located near a swimming pool and open water, where training and guided dives can be conducted.', 1, 18, '4.5626', '102.09559', 'RPS', '45665', '0607859', 'tuygugyugf', '0604158454', 'gjgjguj', '060458484', '061154156', 'rps@demo.com', '-', '5', 2, '3', 'WASH CABIN,CLASSROOM,BAR', 'PADI 5* CDC CENTER,SDI,ANDI', '454591', 'MARCH,JUNE,OCTOBER', 'ENGLISH,CHINESE,MALAY', 'LOGBOOK,DATE OF LAST DIVE', 'MYR', 15),
(6, 'RCB Dive center', '1s.jpg', 'Professional recreational diving instructors are often associated with, or employed by, a dive center. The center may be located near a swimming pool and open water, where training and guided dives can be conducted.', 1, 18, '4.9225', '102.45626', 'RCB', '46456', '06041564564', 'dsfdsfds', '06054545', 'dsfdfd', '060446454', '06054545', 'RCB@demo.com', '-', '3', 2, '7', 'CLASSROOM,LOCKER', 'PADI 5* DIVE RESORT,SSI,SDI', '74845', 'JUNE,JULY', 'ENGLISH,CHINESE,MALAY', 'DATE OF BIRTH,MEDICAL STATEMENT', 'MYR', 25),
(7, 'MI dive center', '3s.jpg', 'dskfhsj', 1, 1, '4.82922', '102.5366', 'mi', '123', '305955', 'dfdsf', '12656', 'sdds', '4255', '454545', 'mi@g.com', '-', '5', 2, '10', 'BAR,LOCKER', 'PADI,SDI,NAUI', '2115', 'JAN,APRIL,SEPTEMBER', 'ENGLISH,FRENCH,MALAY', 'LOGBOOK,DATE OF LAST DIVE', 'MYR', 16);

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
(1, 'Tioman Island, or more fondly known by the locals as Pulau Tioman is a small island located in the state of Pahang in Peninsular Malaysia. It is along the east coast of the state which is one of the top tourist destinations in the region. In Tioman Island, there are 8 main villages in which Kampung Tekek has the highest population.', 'moderate to Strong', 'Range From 27/80F to 30C/86F', 'Range betweeen 5m- 30m/16-98ft, depending on the reason', 'Late january and lasts until middle of November', 'chebeh island sepoi island tiger reef', 'Around 3 dive centers', 'Average 8m Maximum 25m', 'Angelfish, puffer fish', 18);

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
(8, '', 'Ελληνικά', 'Greek\r\n', 'N'),
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
(20, '', 'Čeština\n', 'Czech Republic\r\n', 'N'),
(21, '', 'Русский\n', 'Russian\r\n', 'N'),
(22, '', '中文(简体)', 'Chinese Simplified\r\n', 'N'),
(23, '', '中文(繁體)\n', 'Chinese Traditional\r\n', 'N'),
(24, '', '日本語\n', 'Japanese Language\r\n', 'N'),
(25, '', '한국어\n', 'Korean Language\r\n', 'N');

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
(33, '123', 'SUPERADMIN', 'sadmin', 'FALSE', '2017-05-12 13:08:36', 'Super Admin', '', '', 8),
(40, '123', 'ADMIN', 'admin', 'FALSE', '2017-01-17 12:31:16', 'admin', '', '', 13),
(41, '123', 'MARKETINGPERSON', 'mk', 'FALSE', '2017-01-17 12:30:10', 'Mk', '', '', 14),
(42, '111119531509452736334', 'Googleplus User', 'rajkumar.bizsoft@gmail.com', 'FALSE', '2017-04-25 11:29:26', 'Rajkumar', '', 'Subramaniam', 0),
(61, '107550170254738098187', 'Googleplus User', 'ruthanitha94@gmail.com', 'FALSE', '2017-04-24 12:33:58', 'Ruth', '', 'Anitha', 0),
(62, '116211299901976086383', 'Googleplus User', 'anitha.bizsoft@gmail.com', 'FALSE', '2017-04-24 12:36:21', 'Anitha', '', 'Sugumaran', 0),
(63, '114721322863519575929', 'Googleplus User', 'rajsl.0324@gmail.com', 'FALSE', '2017-04-24 12:37:14', 'Raj', '', 'Kumar SL', 0),
(64, '1328226313922129', 'Facebook User', 'kkcasraj709@gmail.com', 'FALSE', '2017-04-25 11:20:48', 'Raj', '', 'Kumar', 0),
(65, '1328226313922129', 'Facebook User', 'Raj', 'FALSE', '2017-05-12 13:38:07', 'Raj', '', 'Kumar', 0);

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_dcguidedtours`
--
ALTER TABLE `tbl_dcguidedtours`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_dcleisure`
--
ALTER TABLE `tbl_dcleisure`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_dcpackage`
--
ALTER TABLE `tbl_dcpackage`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_dcprofile`
--
ALTER TABLE `tbl_dcprofile`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
