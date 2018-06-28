-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 09:19 AM
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
(1, 'sliderbg.jpg', '1.png', '2.png'),
(2, 'sliderbg.jpg', '3.png', '4.png');

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
(3, 'ggg dive center', '45 dsnfdsfnsd', 'dsakasdk', 'paul kdsds', '', 2, 8, 'hajhbj', 4646464446, 'hh@g.com', '3.jpg');

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
(3, '3.jpg', '2 dive/day', 1800.00, 3, 2, '2500000', '<p>dsndsfmds</p>\r\n', 1),
(4, '4.jpg', '2 dive/day', 600.00, 3, 3, '25000', '<p>bjdsdsdksdbsd</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts_divemaster`
--

CREATE TABLE `tbl_contacts_divemaster` (
  `id` int(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `cert_body` varchar(100) NOT NULL,
  `id_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 1, 'name', '9787228639', 'name@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`) VALUES
(2, 'India'),
(3, 'Malaysia'),
(4, 'Thailand'),
(5, 'Indonesia'),
(6, 'Philippines'),
(7, 'Mexico'),
(8, 'Spain');

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
  `Currency` varchar(255) NOT NULL,
  `Currencycode` varchar(255) NOT NULL,
  `Country(en)` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`id`, `Currency`, `Currencycode`, `Country(en)`) VALUES
(1, 'Afghani', 'AFN', 'Afghanistan'),
(2, 'Pfund', 'EGP', 'Egypt'),
(3, 'Euro', 'EUR', 'Åland Islands'),
(4, 'Lek', 'ALL', 'Albania'),
(5, 'Dinar', 'DZD', 'Algeria'),
(6, 'Dollar', 'USD', 'American Samoa'),
(7, 'Euro', 'EUR', 'Andorra'),
(8, 'Kwanza', 'AOA', 'Angola'),
(9, 'Dollar', 'XCD', 'Anguilla'),
(10, 'Dollar', 'XCD', 'Antigua and Barbuda'),
(11, 'Franc', 'XAF', 'Equatorial Guinea'),
(12, 'Peso', 'ARS', 'Argentina'),
(13, 'Dram', 'AMD', 'Armenia'),
(14, 'Florin', 'AWG', 'Aruba'),
(15, 'Manat', 'AZN', 'Azerbaijan'),
(16, 'Birr', 'ETB', 'Ethiopia'),
(17, 'Dollar', 'AUD', 'Australia'),
(18, 'Dollar', 'BSD', 'Bahamas'),
(19, 'Dinar', 'BHD', 'Bahrain'),
(20, 'Taka', 'BDT', 'Bangladesh'),
(21, 'Dollar', 'BBD', 'Barbados'),
(22, 'Rubel', 'BYR', 'Belarus'),
(23, 'Euro', 'EUR', 'Belgium'),
(24, 'Dollar', 'BZD', 'Belize'),
(25, 'Franc', 'XOF', 'Benin'),
(26, 'Dollar', 'BMD', 'Bermuda'),
(27, 'Ngultrum', 'BTN', 'Bhutan'),
(28, 'Boliviano', 'BOB', 'Bolivia'),
(29, 'Konvertible Mark', 'BAM', 'Bosnia and Herzegovina'),
(30, 'Pula', 'BWP', 'Botswana'),
(31, 'Krone', 'NOK', 'Bouvet Island'),
(32, 'Real', 'BRL', 'Brazil'),
(33, 'Dollar', 'USD', 'British Indian Ocean Territory'),
(34, 'Dollar', 'BND', 'Brunei'),
(35, 'Lew', 'BGN', 'Bulgaria'),
(36, 'Franc', 'XOF', 'Burkina Faso'),
(37, 'Franc', 'BIF', 'Burundi'),
(38, 'Peso', 'CLP', 'Chile'),
(39, 'Yuan', 'CNY', 'China'),
(40, 'Dollar', 'NZD', 'Cook Islands'),
(41, 'Colón', 'CRC', 'Costa Rica'),
(42, 'Gulden', 'ANG', 'Curacao'),
(43, 'Krone', 'DKK', 'Denmark'),
(44, 'Franc', 'CDF', 'Democratic Republic of the Congo'),
(45, 'Euro', 'EUR', 'Germany'),
(46, 'Dollar', 'XCD', 'Dominica'),
(47, 'Peso', 'DOP', 'Dominican Republic'),
(48, 'Franc', 'DJF', 'Djibouti'),
(49, 'Dollar', 'USD', 'Ecuador'),
(50, 'Dollar', 'USD', 'El Salvador'),
(51, 'Franc', 'XOF', 'Ivory Coast'),
(52, 'Nakfa', 'ERN', 'Eritrea'),
(53, 'Euro', 'EUR', 'Estonia'),
(54, 'Pfund', 'FKP', 'Falkland Islands'),
(55, 'Krone', 'DKK', 'Faroe Islands'),
(56, 'Dollar', 'FJD', 'Fiji'),
(57, 'Euro', 'EUR', 'Finland'),
(58, 'Euro', 'EUR', 'France'),
(59, 'Euro', 'EUR', 'French Guiana'),
(60, 'Franc', 'XPF', 'French Polynesia'),
(61, 'Euro', 'EUR', 'French Southern and Antarctic Lands'),
(62, 'Franc', 'XAF', 'Gabon'),
(63, 'Dalasi', 'GMD', 'Gambia'),
(64, 'Lari', 'GEL', 'Georgia'),
(65, 'Ghana Cedi', 'GHS', 'Ghana'),
(66, 'Pfund', 'GIP', 'Gibraltar'),
(67, 'Dollar', 'XCD', 'Grenada'),
(68, 'Euro', 'EUR', 'Greece'),
(69, 'Krone', 'DKK', 'Greenland'),
(70, 'Euro', 'EUR', 'Guadeloupe'),
(71, 'Dollar', 'USD', 'Guam'),
(72, 'Quetzal', 'GTQ', 'Guatemala'),
(73, 'Pfund', 'GGP', 'Guernsey'),
(74, 'Franc', 'GNF', 'Guinea'),
(75, 'Franc', 'XOF', 'Guinea-Bissau'),
(76, 'Dollar', 'GYD', 'Guyana'),
(77, 'Gourde', 'HTG', 'Haiti'),
(78, 'Dollar', 'AUD', 'Heard Island and McDonald Islands'),
(79, 'Lempira', 'HNL', 'Honduras'),
(80, 'Dollar', 'HKD', 'Hong Kong'),
(81, 'Rupie', 'INR', 'India'),
(82, 'Rupiah', 'IDR', 'Indonesia'),
(83, 'Pfund', 'IMP', 'Isle of Man'),
(84, 'Dinar', 'IQD', 'Iraq'),
(85, 'Rial', 'IRR', 'Iran'),
(86, 'Euro', 'EUR', 'Ireland'),
(87, 'Krone', 'ISK', 'Iceland'),
(88, 'Schekel', 'ILS', 'Israel'),
(89, 'Euro', 'EUR', 'Italy'),
(90, 'Dollar', 'JMD', 'Jamaica'),
(91, 'Yen', 'JPY', 'Japan'),
(92, 'Rial', 'YER', 'Yemen'),
(93, 'Pfund-Sterling', 'JEP', 'Jersey'),
(94, 'Dinar', 'JOD', 'Jordan'),
(95, 'Dollar', 'USD', 'British Virgin Islands'),
(96, 'Dollar', 'USD', 'Virgin Islands'),
(97, 'Cayman-Dollar', 'KYD', 'Cayman Islands'),
(98, 'Riel', 'KHR', 'Cambodia'),
(99, 'Franc', 'XAF', 'Cameroon'),
(100, 'Dollar', 'CAD', 'Canada'),
(101, 'Escudo', 'CVE', 'Cape Verde'),
(102, 'Tenge', 'KZT', 'Kazakhstan'),
(103, 'Dollar', 'QAR', 'Qatar'),
(104, 'Schilling', 'KES', 'Kenya'),
(105, 'Som', 'KGS', 'Kyrgyzstan'),
(106, 'Dollar', 'AUD', 'Kiribati'),
(107, 'Dollar', 'AUD', 'Cocos Islands'),
(108, 'Peso', 'COP', 'Colombia'),
(109, 'Franc', 'KMF', 'Comoros'),
(110, 'Franc', 'CDF', 'Republic of the Congo'),
(111, 'Euro', 'EUR', 'Kosovo'),
(112, 'Kuna', 'HRK', 'Croatia'),
(113, 'Peso', 'CUP', 'Cuba'),
(114, 'Dinar', 'KWD', 'Kuwait'),
(115, 'Kip', 'LAK', 'Laos'),
(116, 'Loti', 'LSL', 'Lesotho'),
(117, 'Euro', 'EUR', 'Latvia'),
(118, 'Pfund', 'LBP', 'Lebanon'),
(119, 'Dollar', 'LRD', 'Liberia'),
(120, 'Dinar', 'LYD', 'Libya'),
(121, 'Franken', 'CHF', 'Liechtenstein'),
(122, 'Litas', 'LTL', 'Lithuania'),
(123, 'Euro', 'EUR', 'Luxembourg'),
(124, 'Pataca', 'MOP', 'Macau'),
(125, 'Ariary', 'MGA', 'Madagascar'),
(126, 'Kwacha', 'MWK', 'Malawi'),
(127, 'Ringgit', 'MYR', 'Malaysia'),
(128, 'Rufiyaa', 'MVR', 'Maldives'),
(129, 'Franc', 'XOF', 'Mali'),
(130, 'Euro', 'EUR', 'Malta'),
(131, 'Dirham', 'MAD', 'Morocco'),
(132, 'Dollar', 'USD', 'Marshall Islands'),
(133, 'Euro', 'EUR', 'Martinique'),
(134, 'Ouguiya', 'MRO', 'Mauritania'),
(135, 'Rupie', 'MUR', 'Mauritius'),
(136, 'Euro', 'EUR', 'Mayotte'),
(137, 'Denar', 'MKD', 'Macedonia'),
(138, 'Peso', 'MXN', 'Mexico'),
(139, 'Dollar', 'USD', 'Micronesia, Federated States of'),
(140, 'Leu', 'MDL', 'Moldova'),
(141, 'Euro', 'EUR', 'Monaco'),
(142, 'Tögrög', 'MNT', 'Mongolia'),
(143, 'Euro', 'EUR', 'Montenegro'),
(144, 'Dollar', 'XCD', 'Montserrat'),
(145, 'Metical', 'MZN', 'Mozambique'),
(146, 'Kyat', 'MMK', 'Burma'),
(147, 'Dollar', 'NAD', 'Namibia'),
(148, 'Dollar', 'AUD', 'Nauru'),
(149, 'Rupie', 'NPR', 'Nepal'),
(150, 'Franc', 'XPF', 'New Caledonia'),
(151, 'Dollar', 'NZD', 'New Zealand'),
(152, 'Córdoba Oro', 'NIO', 'Nicaragua'),
(153, 'Euro', 'EUR', 'Netherlands'),
(154, 'Gulden', 'ANG', 'Netherlands Antilles'),
(155, 'Franc', 'XOF', 'Niger'),
(156, 'Naira', 'NGN', 'Nigeria'),
(157, 'Dollar', 'NZD', 'Niue'),
(158, 'Won', 'KPW', 'North Korea'),
(159, 'Dollar', 'USD', 'Northern Mariana Islands'),
(160, 'Dollar', 'AUD', 'Norfolk Island'),
(161, 'Krone', 'NOK', 'Norway'),
(162, 'Rial', 'OMR', 'Oman'),
(163, 'Euro', 'EUR', 'Austria'),
(164, 'Dollar', 'USD', 'Timor-Leste'),
(165, 'Rupie', 'PKR', 'Pakistan'),
(166, 'Schekel', 'ILS', 'Palestine'),
(167, 'Dollar', 'USD', 'Palau'),
(168, 'Balboa', 'PAB', 'Panama'),
(169, 'Kina', 'PGK', 'Papua New Guinea'),
(170, 'Guaraní', 'PYG', 'Paraguay'),
(171, 'Nuevo Sol', 'PEN', 'Peru'),
(172, 'Peso', 'PHP', 'Philippines'),
(173, 'Pfund', 'GBP', 'Pitcairn Islands'),
(174, 'Zloty', 'PLN', 'Poland'),
(175, 'Euro', 'EUR', 'Portugal'),
(176, 'Dollar', 'USD', 'Puerto Rico'),
(177, 'Euro', 'EUR', 'Reunion'),
(178, 'Franc', 'RWF', 'Rwanda'),
(179, 'Leu', 'RON', 'Romania'),
(180, 'Rubel', 'RUB', 'Russia'),
(181, 'Dollar', 'SBD', 'Solomon Islands'),
(182, 'Kwacha', 'ZMK', 'Zambia'),
(183, 'Tala', 'WST', 'Samoa'),
(184, 'Euro', 'EUR', 'San Marino'),
(185, 'Euro', 'EUR', 'Saint Barthelemy'),
(186, 'Dobra', 'STD', 'Sao Tome and Principe'),
(187, 'Riyal', 'SAR', 'Saudi Arabia'),
(188, 'Krone', 'SEK', 'Sweden'),
(189, 'Franken', 'CHF', 'Switzerland'),
(190, 'Franc', 'XOF', 'Senegal'),
(191, 'Dinar', 'RSD', 'Serbia'),
(192, 'Rupie', 'SCR', 'Seychelles'),
(193, 'Leone', 'SLL', 'Sierra Leone'),
(194, 'Dollar', 'ZWL', 'Zimbabwe'),
(195, 'Dollar', 'SGD', 'Singapore'),
(196, 'Gulden', 'ANG', 'Saint Martin'),
(197, 'Euro', 'EUR', 'Slovakia'),
(198, 'Euro', 'EUR', 'Slovenia'),
(199, 'Schilling', 'SOS', 'Somalia'),
(200, 'Euro', 'EUR', 'Spain'),
(201, 'Rupie', 'LKR', 'Sri Lanka'),
(202, 'Pfund', 'SHP', 'Saint Helena, Ascension and Tristan da Cunha'),
(203, 'Dollar', 'XCD', 'Saint Kitts and Nevis'),
(204, 'Dollar', 'XCD', 'Saint Lucia'),
(205, 'Euro', 'EUR', 'Saint Pierre and Miquelon'),
(206, 'Dollar', 'XCD', 'Saint Vincent and the Grenadines'),
(207, 'Rand', 'ZAR', 'South Africa'),
(208, 'Pfund', 'SDG', 'Sudan'),
(209, 'Pfund', 'GBP', 'South Georgia and South Sandwich Islands'),
(210, 'Won', 'KRW', 'South Korea'),
(211, 'Pfund', 'SSP', 'South Sudan'),
(212, 'Dollar', 'SRD', 'Suriname'),
(213, 'Krone', 'NOK', 'Svalbard'),
(214, 'Lilangeni', 'SZL', 'Swaziland'),
(215, 'Pfund', 'SYP', 'Syria'),
(216, 'Somoni', 'TJS', 'Tajikistan'),
(217, 'Dollar', 'TWD', 'Taiwan'),
(218, 'Schilling', 'TZS', 'Tanzania'),
(219, 'Baht', 'THB', 'Thailand'),
(220, 'Franc', 'XOF', 'Togo'),
(221, 'Dollar', 'NZD', 'Tokelau'),
(222, 'Pa\'anga', 'TOP', 'Tonga'),
(223, 'Dollar', 'TTD', 'Trinidad and Tobago'),
(224, 'Franc', 'XAF', 'Chad'),
(225, 'Krone', 'CZK', 'Czech Republic'),
(226, 'Dinar', 'TND', 'Tunisia'),
(227, 'Lira', 'TRY', 'Turkey'),
(228, 'Manat', 'TMT', 'Turkmenistan'),
(229, 'Dollar', 'USD', 'Turks and Caicos Islands'),
(230, 'Dollar', 'AUD', 'Tuvalu'),
(231, 'Schilling', 'UGX', 'Uganda'),
(232, 'Hrywnja', 'UAH', 'Ukraine'),
(233, 'Forint', 'HUF', 'Hungary'),
(234, 'Peso', 'UYU', 'Uruguay'),
(235, 'So\'m', 'UZS', 'Uzbekistan'),
(236, 'Vatu', 'VUV', 'Vanuatu'),
(237, 'Euro', 'EUR', 'Holy See (Vatican City)'),
(238, 'Bolívar Fuerte', 'VEF', 'Venezuela'),
(239, 'Dirham', 'AED', 'United Arab Emirates'),
(240, 'Dollar', 'USD', 'United States'),
(241, 'Pfund', 'GBP', 'United Kingdom'),
(242, 'Dong', 'VND', 'Vietnam'),
(243, 'Franc', 'XPF', 'Wallis and Futuna'),
(244, 'Dollar', 'AUD', 'Christmas Island'),
(245, 'Dirham', 'MAD', 'Western Sahara'),
(246, 'Franc', 'XAF', 'Central African Republic'),
(247, 'Euro', 'EUR', 'Cyprus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dcprofile`
--

CREATE TABLE `tbl_dcprofile` (
  `id` int(15) NOT NULL,
  `dcname` varchar(100) NOT NULL,
  `dcimage` varchar(255) NOT NULL,
  `dcdescription` text NOT NULL,
  `dccountry` int(15) NOT NULL,
  `dcislands` int(15) NOT NULL,
  `dcgps_x` varchar(255) NOT NULL,
  `dcgps_y` varchar(255) NOT NULL,
  `dcreg_co_name` varchar(150) NOT NULL,
  `dcbusiness_reg_no` varchar(150) NOT NULL,
  `dcbusi_telephone_no` varchar(20) NOT NULL,
  `dcbilling_address` text NOT NULL,
  `dcbusi_fax_no` varchar(100) NOT NULL,
  `dcaddress` varchar(150) NOT NULL,
  `dctelephone_no` varchar(20) NOT NULL,
  `dcfax_no` varchar(100) NOT NULL,
  `dcemailid` varchar(75) NOT NULL,
  `dcsiteurl` varchar(150) NOT NULL,
  `dcno_of_divemaster` varchar(200) NOT NULL,
  `dcno_boats` int(15) NOT NULL,
  `dcdaily_capacity` varchar(100) NOT NULL,
  `dcfacilities` varchar(255) NOT NULL,
  `dcaffiliation` varchar(255) NOT NULL,
  `dcaffiliation_reg_no` varchar(100) NOT NULL,
  `dcseason` varchar(255) NOT NULL,
  `dclanguage` varchar(255) NOT NULL,
  `dcdocument_required` text NOT NULL,
  `dccurrency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dcprofile`
--

INSERT INTO `tbl_dcprofile` (`id`, `dcname`, `dcimage`, `dcdescription`, `dccountry`, `dcislands`, `dcgps_x`, `dcgps_y`, `dcreg_co_name`, `dcbusiness_reg_no`, `dcbusi_telephone_no`, `dcbilling_address`, `dcbusi_fax_no`, `dcaddress`, `dctelephone_no`, `dcfax_no`, `dcemailid`, `dcsiteurl`, `dcno_of_divemaster`, `dcno_boats`, `dcdaily_capacity`, `dcfacilities`, `dcaffiliation`, `dcaffiliation_reg_no`, `dcseason`, `dclanguage`, `dcdocument_required`, `dccurrency`) VALUES
(1, 'vbn', '', 'bvn', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'CLASSROOM,LOCKER', '', '', '', '', '', '');

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
  `dive_center_id` int(15) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `gallery`, `dive_center_id`) VALUES
(1, '3.jpg', 1),
(2, '2.jpg', 1);

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
  `island_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_island`
--

INSERT INTO `tbl_island` (`island_id`, `country_id`, `island_name`) VALUES
(1, 2, 'test1'),
(2, 3, 'fgdfgdfg'),
(3, 3, 'fdgdfgfg'),
(4, 3, 'fdgdfgdfg'),
(5, 2, 'test3'),
(6, 2, 'test2'),
(7, 3, 'dsdsfs'),
(8, 2, 'test4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_map`
--

CREATE TABLE `tbl_map` (
  `id` int(11) NOT NULL,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(33, '123', 'SUPERADMIN', 'sadmin', 'TRUE', '2017-03-21 04:18:53', 'Super Admin', '', '', 8),
(40, '123', 'ADMIN', 'admin', 'FALSE', '2017-01-17 12:31:16', 'admin', '', '', 13),
(41, '123', 'MARKETINGPERSON', 'mk', 'FALSE', '2017-01-17 12:30:10', 'Mk', '', '', 14);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `special_offer`
--
ALTER TABLE `special_offer`
  ADD PRIMARY KEY (`special_offer_id`);

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
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `daily_plan`
--
ALTER TABLE `daily_plan`
  MODIFY `daily_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dive_center`
--
ALTER TABLE `dive_center`
  MODIFY `dive_center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `special_offer`
--
ALTER TABLE `special_offer`
  MODIFY `special_offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_contacts_divemaster`
--
ALTER TABLE `tbl_contacts_divemaster`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_contacts_staffdetails`
--
ALTER TABLE `tbl_contacts_staffdetails`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT for table `tbl_dcprofile`
--
ALTER TABLE `tbl_dcprofile`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `island_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_map`
--
ALTER TABLE `tbl_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_social_links`
--
ALTER TABLE `tbl_social_links`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;