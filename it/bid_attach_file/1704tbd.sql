-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2011 at 07:26 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dpi_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_recorder`
--

CREATE TABLE IF NOT EXISTS `action_recorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `identifier` varchar(255) NOT NULL,
  `success` char(1) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_action_recorder_module` (`module`),
  KEY `idx_action_recorder_user_id` (`user_id`),
  KEY `idx_action_recorder_identifier` (`identifier`),
  KEY `idx_action_recorder_date_added` (`date_added`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `action_recorder`
--

INSERT INTO `action_recorder` (`id`, `module`, `user_id`, `user_name`, `identifier`, `success`, `date_added`) VALUES
(1, 'ar_admin_login', 1, 'admin', '127.0.0.1', '1', '2011-08-25 12:18:30'),
(2, 'ar_admin_login', 1, 'admin', '127.0.0.1', '1', '2011-08-25 12:47:07'),
(3, 'ar_admin_login', 1, 'admin', '127.0.0.1', '1', '2011-08-25 17:21:02'),
(4, 'ar_admin_login', 1, 'admin', '127.0.0.1', '1', '2011-08-25 18:06:00'),
(5, 'ar_admin_login', 1, 'admin', '127.0.0.1', '1', '2011-08-26 13:44:35'),
(6, 'ar_admin_login', 1, 'admin', '127.0.0.1', '1', '2011-08-26 15:33:37'),
(7, 'ar_admin_login', 1, 'admin', '127.0.0.1', '1', '2011-08-26 17:03:48'),
(8, 'ar_admin_login', 1, 'admin', '127.0.0.1', '1', '2011-08-26 20:50:37'),
(9, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-08-26 08:58:09'),
(10, 'ar_admin_login', 1, 'admin', '59.180.146.10', '1', '2011-08-29 19:52:46'),
(11, 'ar_admin_login', 1, 'admin', '75.31.87.202', '1', '2011-08-29 20:09:20'),
(12, 'ar_admin_login', 1, 'admin', '75.31.87.202', '1', '2011-08-30 09:38:09'),
(13, 'ar_admin_login', 1, 'admin', '75.148.160.225', '1', '2011-08-31 10:41:25'),
(14, 'ar_admin_login', 1, 'admin', '192.168.1.49', '1', '2011-10-11 06:54:59'),
(15, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-12 01:05:00'),
(16, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-12 01:33:38'),
(17, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-12 05:45:43'),
(18, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-12 07:34:37'),
(19, 'ar_admin_login', 0, 'admin', '122.176.60.74', '0', '2011-10-12 08:47:22'),
(20, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-12 08:47:28'),
(21, 'ar_admin_login', 0, 'admin', '66.87.85.201', '0', '2011-10-12 19:33:07'),
(22, 'ar_admin_login', 0, '', '66.87.85.201', '0', '2011-10-12 19:40:34'),
(23, 'ar_admin_login', 1, 'admin', '122.162.160.153', '1', '2011-10-13 07:18:57'),
(24, 'ar_admin_login', 1, 'admin', '164.82.85.15', '1', '2011-10-13 07:19:33'),
(25, 'ar_admin_login', 1, 'admin', '122.162.160.153', '1', '2011-10-13 08:09:59'),
(26, 'ar_admin_login', 1, 'admin', '122.162.160.153', '1', '2011-10-13 08:34:58'),
(27, 'ar_contact_us', 0, 'ajit', '192.168.1.49', '1', '2011-10-14 09:28:31'),
(28, 'ar_contact_us', 0, 'sdfs', '122.176.60.74', '1', '2011-10-14 10:00:32'),
(29, 'ar_admin_login', 1, 'admin', '63.148.92.164', '1', '2011-10-14 15:38:28'),
(30, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-15 00:13:15'),
(31, 'ar_contact_us', 0, 'ajit dpi contact', '122.176.60.74', '1', '2011-10-15 00:15:25'),
(32, 'ar_contact_us', 0, 'ajit', '122.176.60.74', '0', '2011-10-15 00:17:55'),
(33, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-15 01:15:45'),
(34, 'ar_admin_login', 1, 'admin', '75.31.85.79', '1', '2011-10-15 12:48:58'),
(35, 'ar_admin_login', 1, 'admin', '192.168.1.49', '1', '2011-10-17 16:44:31'),
(36, 'ar_admin_login', 1, 'admin', '75.31.85.79', '1', '2011-10-19 20:07:26'),
(37, 'ar_admin_login', 0, 'admin', '122.176.129.94', '0', '2011-10-20 08:35:47'),
(38, 'ar_admin_login', 0, 'admin@localhost', '122.176.129.94', '0', '2011-10-20 08:36:03'),
(39, 'ar_admin_login', 1, 'admin', '122.176.129.94', '1', '2011-10-20 08:36:16'),
(40, 'ar_contact_us', 0, 'ajit', '122.176.129.94', '1', '2011-10-20 08:37:35'),
(41, 'ar_contact_us', 0, 'hh', '75.31.85.79', '1', '2011-10-20 08:59:04'),
(42, 'ar_contact_us', 0, 'ajit con 20', '122.176.129.94', '1', '2011-10-20 09:12:24'),
(43, 'ar_contact_us', 0, 'ajit', '122.176.129.94', '0', '2011-10-20 09:16:08'),
(44, 'ar_admin_login', 1, 'admin', '122.176.238.221', '1', '2011-10-20 23:58:45'),
(45, 'ar_admin_login', 1, 'admin', '122.176.238.221', '1', '2011-10-21 02:49:22'),
(46, 'ar_contact_us', 0, '', '122.176.238.221', '1', '2011-10-21 02:52:32'),
(47, 'ar_contact_us', 0, '', '122.176.238.221', '0', '2011-10-21 03:06:30'),
(48, 'ar_contact_us', 5, '', '122.176.238.221', '1', '2011-10-21 03:13:41'),
(49, 'ar_admin_login', 1, 'admin', '122.176.238.221', '1', '2011-10-21 04:41:54'),
(50, 'ar_admin_login', 0, '', '122.176.60.74', '0', '2011-10-21 06:12:57'),
(51, 'ar_admin_login', 0, '', '122.176.60.74', '0', '2011-10-21 06:13:10'),
(52, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-21 06:22:38'),
(53, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-21 07:05:13'),
(54, 'ar_contact_us', 0, '', '75.31.85.79', '1', '2011-10-21 07:12:47'),
(55, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-21 10:25:39'),
(56, 'ar_contact_us', 0, '', '122.176.60.74', '1', '2011-10-21 10:26:24'),
(57, 'ar_admin_login', 1, 'admin', '192.168.1.49', '1', '2011-10-21 14:50:16'),
(58, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-24 00:27:26'),
(59, 'ar_admin_login', 1, 'admin', '122.176.191.115', '1', '2011-10-24 04:26:36'),
(60, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-24 05:51:31'),
(61, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-24 09:11:27'),
(62, 'ar_contact_us', 0, '', '122.176.60.74', '1', '2011-10-24 09:12:31'),
(63, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-25 04:56:33'),
(64, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-25 06:05:10'),
(65, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-25 07:56:21'),
(66, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-27 00:00:04'),
(67, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-27 01:03:23'),
(68, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-27 02:55:10'),
(69, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-27 04:40:03'),
(70, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-27 05:48:20'),
(71, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-27 22:35:38'),
(72, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-27 23:59:05'),
(73, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-28 02:47:42'),
(74, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-28 06:22:33'),
(75, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-28 08:07:57'),
(76, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-28 09:04:40'),
(77, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-28 22:44:11'),
(78, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-29 01:18:26'),
(79, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-29 01:38:41'),
(80, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-29 02:30:39'),
(81, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-10-29 08:22:52'),
(82, 'ar_admin_login', 1, 'admin', '192.168.1.49', '1', '2011-10-31 14:28:26'),
(83, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-11-01 01:20:57'),
(84, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-11-03 07:58:07'),
(85, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-11-08 08:06:27'),
(86, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-11-08 23:21:19'),
(87, 'ar_admin_login', 1, 'admin', '192.168.1.49', '1', '2011-11-15 12:36:43'),
(88, 'ar_admin_login', 1, 'admin', '192.168.1.49', '1', '2011-11-15 13:04:21'),
(89, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-11-17 06:57:09'),
(90, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-11-17 07:31:01'),
(91, 'ar_admin_login', 0, 'portfolio', '122.176.60.74', '0', '2011-11-17 22:51:10'),
(92, 'ar_admin_login', 1, 'admin', '122.176.60.74', '1', '2011-11-17 23:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `address_book`
--

CREATE TABLE IF NOT EXISTS `address_book` (
  `address_book_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL,
  `entry_gender` char(1) DEFAULT NULL,
  `entry_company` varchar(255) DEFAULT NULL,
  `entry_firstname` varchar(255) NOT NULL,
  `entry_lastname` varchar(255) NOT NULL,
  `entry_street_address` varchar(255) NOT NULL,
  `entry_suburb` varchar(255) DEFAULT NULL,
  `entry_postcode` varchar(255) NOT NULL,
  `entry_city` varchar(255) NOT NULL,
  `entry_state` varchar(255) DEFAULT NULL,
  `entry_country_id` int(11) NOT NULL DEFAULT '0',
  `entry_zone_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`address_book_id`),
  KEY `idx_address_book_customers_id` (`customers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `address_book`
--

INSERT INTO `address_book` (`address_book_id`, `customers_id`, `entry_gender`, `entry_company`, `entry_firstname`, `entry_lastname`, `entry_street_address`, `entry_suburb`, `entry_postcode`, `entry_city`, `entry_state`, `entry_country_id`, `entry_zone_id`) VALUES
(1, 1, 'm', 'w3c', 'pradeep', 'kumar', 'aaaaa', '123', '22222', 'delhi', 'delhi', 99, 0),
(2, 2, '', 'w3c', 'pradeep', 'kumar', 'aaaaa', '123', '22222', 'delhi', 'delhi', 223, 0),
(3, 3, 'f', 'w3c', 'ajit', 'kumar', 'delhi', 'delhi', '110024', 'delhi', 'delhi', 99, 0),
(4, 4, '', 'fastlam', 'Joe', 'Nguyen', '5999 w 34th', '', '77092', 'houston', '', 223, 57),
(5, 5, '', 'w3c', 'ajit', 'sdfsdfsdfd', 'delhi', 'dsfdfg', '1322', 'dsfgfdgfd', 'delhi', 223, 0),
(6, 6, '', 'fghfgh', 'ishwar', 'sdffds', 'delhi', 'delhi', '110024', 'delhi', 'delhi', 99, 0),
(7, 7, '', 'w3c', 'ishwar', 'kumar', 'delhi', 'delhi', '110024', 'delhi', 'delhi', 99, 0),
(8, 8, '', 'fg', 'ajit', 'kumar', 'delhi', 'delhi', '110024', 'delhi', 'delhi', 99, 0),
(9, 9, '', 'w3c', 'ishwar', 'sfsfgsd', 'delhi', 'delhi', '110024', 'delhi', 'sfsdfd', 223, 0),
(10, 10, '', 'w3c', 'god', 'kumar', 'delhi', 'delhi', '110024', 'delhi', 'delhi', 99, 0),
(11, 11, '', 'LifePharm Global Network', 'mj', 'aragon', '29883 Santa Margarita Pkwy', '', '92688', 'Rancho Santa Margarita', 'California', 223, 0),
(12, 12, '', 'yo mama', 'yo', 'mama', '1112 aaa', '', '77000', 'htown', 'texas', 223, 0);

-- --------------------------------------------------------

--
-- Table structure for table `address_format`
--

CREATE TABLE IF NOT EXISTS `address_format` (
  `address_format_id` int(11) NOT NULL AUTO_INCREMENT,
  `address_format` varchar(128) NOT NULL,
  `address_summary` varchar(48) NOT NULL,
  PRIMARY KEY (`address_format_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `address_format`
--

INSERT INTO `address_format` (`address_format_id`, `address_format`, `address_summary`) VALUES
(1, '$firstname $lastname$cr$streets$cr$city, $postcode$cr$statecomma$country', '$city / $country'),
(2, '$firstname $lastname$cr$streets$cr$city, $state    $postcode$cr$country', '$city, $state / $country'),
(3, '$firstname $lastname$cr$streets$cr$city$cr$postcode - $statecomma$country', '$state / $country'),
(4, '$firstname $lastname$cr$streets$cr$city ($postcode)$cr$country', '$postcode / $country'),
(5, '$firstname $lastname$cr$streets$cr$postcode $city$cr$country', '$city / $country');

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `user_name`, `user_password`) VALUES
(1, 'admin', '$P$DfudvLPnkAohuEzcrAoMyK/tE5PdIZ0');

-- --------------------------------------------------------

--
-- Table structure for table `am_attributes_to_templates`
--

CREATE TABLE IF NOT EXISTS `am_attributes_to_templates` (
  `template_id` int(5) unsigned NOT NULL,
  `options_id` int(5) unsigned NOT NULL,
  `option_values_id` int(5) unsigned NOT NULL,
  `price_prefix` char(1) DEFAULT '+',
  `options_values_price` decimal(15,4) DEFAULT '0.0000',
  `products_options_sort_order` int(11) DEFAULT '0',
  `weight_prefix` char(1) DEFAULT '+',
  `options_values_weight` decimal(6,3) DEFAULT '0.000',
  KEY `template_id` (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `am_attributes_to_templates`
--


-- --------------------------------------------------------

--
-- Table structure for table `am_templates`
--

CREATE TABLE IF NOT EXISTS `am_templates` (
  `template_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `template_name` varchar(255) NOT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `am_templates`
--


-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `banners_id` int(11) NOT NULL AUTO_INCREMENT,
  `banners_title` varchar(64) NOT NULL,
  `banners_url` varchar(255) NOT NULL,
  `banners_image` varchar(64) NOT NULL,
  `banners_group` varchar(10) NOT NULL,
  `banners_html_text` text,
  `expires_impressions` int(7) DEFAULT '0',
  `expires_date` datetime DEFAULT NULL,
  `date_scheduled` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_status_change` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`banners_id`),
  KEY `idx_banners_group` (`banners_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banners_id`, `banners_title`, `banners_url`, `banners_image`, `banners_group`, `banners_html_text`, `expires_impressions`, `expires_date`, `date_scheduled`, `date_added`, `date_status_change`, `status`) VALUES
(1, 'osCommerce', 'http://www.oscommerce.com', 'banners/oscommerce.gif', '468x50', '', 0, NULL, NULL, '2011-08-25 10:44:18', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners_history`
--

CREATE TABLE IF NOT EXISTS `banners_history` (
  `banners_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `banners_id` int(11) NOT NULL,
  `banners_shown` int(5) NOT NULL DEFAULT '0',
  `banners_clicked` int(5) NOT NULL DEFAULT '0',
  `banners_history_date` datetime NOT NULL,
  PRIMARY KEY (`banners_history_id`),
  KEY `idx_banners_history_banners_id` (`banners_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banners_history`
--

INSERT INTO `banners_history` (`banners_history_id`, `banners_id`, `banners_shown`, `banners_clicked`, `banners_history_date`) VALUES
(1, 1, 22, 0, '2011-08-25 10:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categories_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_image` varchar(64) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(3) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`categories_id`),
  KEY `idx_categories_parent_id` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_image`, `parent_id`, `sort_order`, `date_added`, `last_modified`) VALUES
(21, 'category_gadgets.png', 0, 2, '2011-08-25 10:44:18', '2011-08-25 18:22:19'),
(22, NULL, 0, 0, '2011-08-25 17:23:23', '2011-08-30 09:40:39'),
(23, '246.jpg', 22, 0, '2011-08-25 17:26:13', '2011-10-21 04:50:06'),
(24, NULL, 22, 1, '2011-08-25 17:26:43', '2011-10-21 14:50:44'),
(25, NULL, 22, 2, '2011-08-25 17:27:13', NULL),
(26, NULL, 22, 3, '2011-08-25 17:27:32', NULL),
(27, NULL, 22, 4, '2011-08-25 17:28:09', NULL),
(28, NULL, 22, 5, '2011-08-25 18:06:38', NULL),
(31, NULL, 22, 8, '2011-08-25 18:10:33', NULL),
(32, NULL, 22, 9, '2011-08-25 18:10:55', '2011-10-21 15:07:26'),
(34, NULL, 22, 10, '2011-08-25 18:12:08', '2011-10-27 08:50:37'),
(35, NULL, 22, 12, '2011-08-25 18:12:32', '2011-10-27 02:16:39'),
(36, NULL, 22, 13, '2011-08-25 18:13:01', '2011-10-21 15:08:00'),
(40, NULL, 22, 14, '2011-08-25 18:14:29', NULL),
(41, NULL, 22, 15, '2011-08-25 18:14:49', NULL),
(42, NULL, 22, 15, '2011-08-25 18:15:18', NULL),
(43, NULL, 22, 16, '2011-08-25 18:15:42', '2011-10-27 08:07:29'),
(44, NULL, 22, 16, '2011-08-25 18:16:07', NULL),
(45, NULL, 22, 17, '2011-08-25 18:16:29', '2011-10-27 08:37:19'),
(47, NULL, 22, 19, '2011-08-25 18:17:29', '2011-10-27 23:00:53'),
(48, NULL, 0, 1, '2011-08-25 18:19:07', NULL),
(49, '246.jpg', 48, 0, '2011-08-25 18:19:58', '2011-10-21 04:46:31'),
(50, NULL, 48, 1, '2011-08-25 18:20:19', NULL),
(51, NULL, 21, 0, '2011-08-25 18:23:33', NULL),
(52, NULL, 21, 1, '2011-08-25 18:24:01', NULL),
(54, NULL, 22, 11, '2011-10-27 08:51:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories_description`
--

CREATE TABLE IF NOT EXISTS `categories_description` (
  `categories_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `categories_name` varchar(32) NOT NULL,
  PRIMARY KEY (`categories_id`,`language_id`),
  KEY `idx_categories_name` (`categories_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_description`
--

INSERT INTO `categories_description` (`categories_id`, `language_id`, `categories_name`) VALUES
(23, 1, 'Banners'),
(24, 1, 'Booklets'),
(25, 1, 'Bookmarks'),
(49, 1, 'Brochure'),
(26, 1, 'Brochures'),
(50, 1, 'Business Card'),
(27, 1, 'Business Cards'),
(28, 1, 'Calendars'),
(48, 1, 'Design Services'),
(52, 1, 'Direct Mail'),
(31, 1, 'Door Hangers'),
(32, 1, 'Envelopes'),
(34, 1, 'Flyers'),
(35, 1, 'Gift Card Holders'),
(54, 1, 'Greeting Card'),
(36, 1, 'Letterheads'),
(51, 1, 'Marketing Services'),
(21, 1, 'Other Services'),
(43, 1, 'Plastic Business Cards'),
(40, 1, 'Postcards'),
(41, 1, 'Posters'),
(42, 1, 'Presentation Folders'),
(22, 1, 'Print Products'),
(44, 1, 'Rack Cards'),
(45, 1, 'Sell Sheets'),
(47, 1, 'Yard Signs');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE IF NOT EXISTS `configuration` (
  `configuration_id` int(11) NOT NULL AUTO_INCREMENT,
  `configuration_title` varchar(255) NOT NULL,
  `configuration_key` varchar(255) NOT NULL,
  `configuration_value` text NOT NULL,
  `configuration_description` varchar(255) NOT NULL,
  `configuration_group_id` int(11) NOT NULL,
  `sort_order` int(5) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `use_function` varchar(255) DEFAULT NULL,
  `set_function` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`configuration_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=264 ;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`configuration_id`, `configuration_title`, `configuration_key`, `configuration_value`, `configuration_description`, `configuration_group_id`, `sort_order`, `last_modified`, `date_added`, `use_function`, `set_function`) VALUES
(1, 'Store Name', 'STORE_NAME', 'DPI Solutions LLC', 'The name of my store', 1, 1, '2011-10-13 07:21:55', '2011-08-25 10:44:20', NULL, NULL),
(2, 'Store Owner', 'STORE_OWNER', 'admin', 'The name of my store owner', 1, 2, NULL, '2011-08-25 10:44:20', NULL, NULL),
(3, 'E-Mail Address', 'STORE_OWNER_EMAIL_ADDRESS', 'info@dpi.net', 'The e-mail address of my store owner', 1, 3, '2011-10-27 06:15:25', '2011-08-25 10:44:21', NULL, NULL),
(4, 'E-Mail From', 'EMAIL_FROM', '"admin" <admin@dpi.net>', 'The e-mail address used in (sent) e-mails', 1, 4, NULL, '2011-08-25 10:44:21', NULL, NULL),
(5, 'Country', 'STORE_COUNTRY', '223', 'The country my store is located in <br /><br /><strong>Note: Please remember to update the store zone.</strong>', 1, 6, NULL, '2011-08-25 10:44:21', 'tep_get_country_name', 'tep_cfg_pull_down_country_list('),
(6, 'Zone', 'STORE_ZONE', '57', 'The zone my store is located in', 1, 7, '2011-10-15 12:57:43', '2011-08-25 10:44:21', 'tep_cfg_get_zone_name', 'tep_cfg_pull_down_zone_list('),
(7, 'Expected Sort Order', 'EXPECTED_PRODUCTS_SORT', 'desc', 'This is the sort order used in the expected products box.', 1, 8, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''asc'', ''desc''), '),
(8, 'Expected Sort Field', 'EXPECTED_PRODUCTS_FIELD', 'date_expected', 'The column to sort by in the expected products box.', 1, 9, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''products_name'', ''date_expected''), '),
(9, 'Switch To Default Language Currency', 'USE_DEFAULT_LANGUAGE_CURRENCY', 'false', 'Automatically switch to the language''s currency when it is changed', 1, 10, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(10, 'Send Extra Order Emails To', 'SEND_EXTRA_ORDER_EMAILS_TO', '', 'Send extra order emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;', 1, 11, NULL, '2011-08-25 10:44:21', NULL, NULL),
(11, 'Use Search-Engine Safe URLs', 'SEARCH_ENGINE_FRIENDLY_URLS', 'false', 'Use search-engine safe urls for all site links', 1, 12, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(12, 'Display Cart After Adding Product', 'DISPLAY_CART', 'true', 'Display the shopping cart after adding a product (or return back to their origin)', 1, 14, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(13, 'Allow Guest To Tell A Friend', 'ALLOW_GUEST_TO_TELL_A_FRIEND', 'false', 'Allow guests to tell a friend about a product', 1, 15, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(14, 'Default Search Operator', 'ADVANCED_SEARCH_DEFAULT_OPERATOR', 'and', 'Default search operators', 1, 17, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''and'', ''or''), '),
(15, 'Store Address and Phone', 'STORE_NAME_ADDRESS', 'Store Name\nAddress\nCountry\nPhone', 'This is the Store Name, Address and Phone used on printable documents and displayed online', 1, 18, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_textarea('),
(16, 'Show Category Counts', 'SHOW_COUNTS', 'true', 'Count recursively how many products are in each category', 1, 19, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(17, 'Tax Decimal Places', 'TAX_DECIMAL_PLACES', '0', 'Pad the tax value this amount of decimal places', 1, 20, NULL, '2011-08-25 10:44:21', NULL, NULL),
(18, 'Display Prices with Tax', 'DISPLAY_PRICE_WITH_TAX', 'false', 'Display prices with tax included (true) or add the tax at the end (false)', 1, 21, NULL, '2011-08-25 10:44:21', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(19, 'First Name', 'ENTRY_FIRST_NAME_MIN_LENGTH', '2', 'Minimum length of first name', 2, 1, NULL, '2011-08-25 10:44:21', NULL, NULL),
(20, 'Last Name', 'ENTRY_LAST_NAME_MIN_LENGTH', '2', 'Minimum length of last name', 2, 2, NULL, '2011-08-25 10:44:21', NULL, NULL),
(21, 'Date of Birth', 'ENTRY_DOB_MIN_LENGTH', '10', 'Minimum length of date of birth', 2, 3, NULL, '2011-08-25 10:44:21', NULL, NULL),
(22, 'E-Mail Address', 'ENTRY_EMAIL_ADDRESS_MIN_LENGTH', '6', 'Minimum length of e-mail address', 2, 4, NULL, '2011-08-25 10:44:22', NULL, NULL),
(23, 'Street Address', 'ENTRY_STREET_ADDRESS_MIN_LENGTH', '5', 'Minimum length of street address', 2, 5, NULL, '2011-08-25 10:44:22', NULL, NULL),
(24, 'Company', 'ENTRY_COMPANY_MIN_LENGTH', '2', 'Minimum length of company name', 2, 6, NULL, '2011-08-25 10:44:22', NULL, NULL),
(25, 'Post Code', 'ENTRY_POSTCODE_MIN_LENGTH', '4', 'Minimum length of post code', 2, 7, NULL, '2011-08-25 10:44:22', NULL, NULL),
(26, 'City', 'ENTRY_CITY_MIN_LENGTH', '3', 'Minimum length of city', 2, 8, NULL, '2011-08-25 10:44:22', NULL, NULL),
(27, 'State', 'ENTRY_STATE_MIN_LENGTH', '2', 'Minimum length of state', 2, 9, NULL, '2011-08-25 10:44:22', NULL, NULL),
(28, 'Telephone Number', 'ENTRY_TELEPHONE_MIN_LENGTH', '3', 'Minimum length of telephone number', 2, 10, NULL, '2011-08-25 10:44:22', NULL, NULL),
(29, 'Password', 'ENTRY_PASSWORD_MIN_LENGTH', '5', 'Minimum length of password', 2, 11, NULL, '2011-08-25 10:44:22', NULL, NULL),
(30, 'Credit Card Owner Name', 'CC_OWNER_MIN_LENGTH', '3', 'Minimum length of credit card owner name', 2, 12, NULL, '2011-08-25 10:44:22', NULL, NULL),
(31, 'Credit Card Number', 'CC_NUMBER_MIN_LENGTH', '10', 'Minimum length of credit card number', 2, 13, NULL, '2011-08-25 10:44:22', NULL, NULL),
(32, 'Review Text', 'REVIEW_TEXT_MIN_LENGTH', '50', 'Minimum length of review text', 2, 14, NULL, '2011-08-25 10:44:22', NULL, NULL),
(33, 'Best Sellers', 'MIN_DISPLAY_BESTSELLERS', '1', 'Minimum number of best sellers to display', 2, 15, NULL, '2011-08-25 10:44:23', NULL, NULL),
(34, 'Also Purchased', 'MIN_DISPLAY_ALSO_PURCHASED', '1', 'Minimum number of products to display in the ''This Customer Also Purchased'' box', 2, 16, NULL, '2011-08-25 10:44:23', NULL, NULL),
(35, 'Address Book Entries', 'MAX_ADDRESS_BOOK_ENTRIES', '5', 'Maximum address book entries a customer is allowed to have', 3, 1, NULL, '2011-08-25 10:44:23', NULL, NULL),
(36, 'Search Results', 'MAX_DISPLAY_SEARCH_RESULTS', '20', 'Amount of products to list', 3, 2, NULL, '2011-08-25 10:44:23', NULL, NULL),
(37, 'Page Links', 'MAX_DISPLAY_PAGE_LINKS', '5', 'Number of ''number'' links use for page-sets', 3, 3, NULL, '2011-08-25 10:44:23', NULL, NULL),
(38, 'Special Products', 'MAX_DISPLAY_SPECIAL_PRODUCTS', '9', 'Maximum number of products on special to display', 3, 4, NULL, '2011-08-25 10:44:24', NULL, NULL),
(39, 'New Products Module', 'MAX_DISPLAY_NEW_PRODUCTS', '9', 'Maximum number of new products to display in a category', 3, 5, NULL, '2011-08-25 10:44:24', NULL, NULL),
(40, 'Products Expected', 'MAX_DISPLAY_UPCOMING_PRODUCTS', '10', 'Maximum number of products expected to display', 3, 6, NULL, '2011-08-25 10:44:24', NULL, NULL),
(41, 'Manufacturers List', 'MAX_DISPLAY_MANUFACTURERS_IN_A_LIST', '0', 'Used in manufacturers box; when the number of manufacturers exceeds this number, a drop-down list will be displayed instead of the default list', 3, 7, NULL, '2011-08-25 10:44:24', NULL, NULL),
(42, 'Manufacturers Select Size', 'MAX_MANUFACTURERS_LIST', '1', 'Used in manufacturers box; when this value is ''1'' the classic drop-down list will be used for the manufacturers box. Otherwise, a list-box with the specified number of rows will be displayed.', 3, 7, NULL, '2011-08-25 10:44:24', NULL, NULL),
(43, 'Length of Manufacturers Name', 'MAX_DISPLAY_MANUFACTURER_NAME_LEN', '15', 'Used in manufacturers box; maximum length of manufacturers name to display', 3, 8, NULL, '2011-08-25 10:44:24', NULL, NULL),
(44, 'New Reviews', 'MAX_DISPLAY_NEW_REVIEWS', '6', 'Maximum number of new reviews to display', 3, 9, NULL, '2011-08-25 10:44:24', NULL, NULL),
(45, 'Selection of Random Reviews', 'MAX_RANDOM_SELECT_REVIEWS', '10', 'How many records to select from to choose one random product review', 3, 10, NULL, '2011-08-25 10:44:24', NULL, NULL),
(46, 'Selection of Random New Products', 'MAX_RANDOM_SELECT_NEW', '10', 'How many records to select from to choose one random new product to display', 3, 11, NULL, '2011-08-25 10:44:24', NULL, NULL),
(47, 'Selection of Products on Special', 'MAX_RANDOM_SELECT_SPECIALS', '10', 'How many records to select from to choose one random product special to display', 3, 12, NULL, '2011-08-25 10:44:24', NULL, NULL),
(48, 'Categories To List Per Row', 'MAX_DISPLAY_CATEGORIES_PER_ROW', '3', 'How many categories to list per row', 3, 13, NULL, '2011-08-25 10:44:24', NULL, NULL),
(49, 'New Products Listing', 'MAX_DISPLAY_PRODUCTS_NEW', '10', 'Maximum number of new products to display in new products page', 3, 14, NULL, '2011-08-25 10:44:24', NULL, NULL),
(50, 'Best Sellers', 'MAX_DISPLAY_BESTSELLERS', '10', 'Maximum number of best sellers to display', 3, 15, NULL, '2011-08-25 10:44:24', NULL, NULL),
(51, 'Also Purchased', 'MAX_DISPLAY_ALSO_PURCHASED', '6', 'Maximum number of products to display in the ''This Customer Also Purchased'' box', 3, 16, NULL, '2011-08-25 10:44:24', NULL, NULL),
(52, 'Customer Order History Box', 'MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX', '6', 'Maximum number of products to display in the customer order history box', 3, 17, NULL, '2011-08-25 10:44:24', NULL, NULL),
(53, 'Order History', 'MAX_DISPLAY_ORDER_HISTORY', '10', 'Maximum number of orders to display in the order history page', 3, 18, NULL, '2011-08-25 10:44:24', NULL, NULL),
(54, 'Product Quantities In Shopping Cart', 'MAX_QTY_IN_CART', '99', 'Maximum number of product quantities that can be added to the shopping cart (0 for no limit)', 3, 19, NULL, '2011-08-25 10:44:24', NULL, NULL),
(55, 'Small Image Width', 'SMALL_IMAGE_WIDTH', '100', 'The pixel width of small images', 4, 1, NULL, '2011-08-25 10:44:24', NULL, NULL),
(56, 'Small Image Height', 'SMALL_IMAGE_HEIGHT', '80', 'The pixel height of small images', 4, 2, NULL, '2011-08-25 10:44:24', NULL, NULL),
(57, 'Heading Image Width', 'HEADING_IMAGE_WIDTH', '57', 'The pixel width of heading images', 4, 3, NULL, '2011-08-25 10:44:24', NULL, NULL),
(58, 'Heading Image Height', 'HEADING_IMAGE_HEIGHT', '40', 'The pixel height of heading images', 4, 4, NULL, '2011-08-25 10:44:24', NULL, NULL),
(59, 'Subcategory Image Width', 'SUBCATEGORY_IMAGE_WIDTH', '100', 'The pixel width of subcategory images', 4, 5, NULL, '2011-08-25 10:44:24', NULL, NULL),
(60, 'Subcategory Image Height', 'SUBCATEGORY_IMAGE_HEIGHT', '57', 'The pixel height of subcategory images', 4, 6, NULL, '2011-08-25 10:44:24', NULL, NULL),
(61, 'Calculate Image Size', 'CONFIG_CALCULATE_IMAGE_SIZE', 'true', 'Calculate the size of images?', 4, 7, NULL, '2011-08-25 10:44:24', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(62, 'Image Required', 'IMAGE_REQUIRED', 'true', 'Enable to display broken images. Good for development.', 4, 8, NULL, '2011-08-25 10:44:24', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(63, 'Gender', 'ACCOUNT_GENDER', 'true', 'Display gender in the customers account', 5, 1, NULL, '2011-08-25 10:44:24', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(64, 'Date of Birth', 'ACCOUNT_DOB', 'true', 'Display date of birth in the customers account', 5, 2, NULL, '2011-08-25 10:44:24', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(65, 'Company', 'ACCOUNT_COMPANY', 'true', 'Display company in the customers account', 5, 3, NULL, '2011-08-25 10:44:24', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(66, 'Suburb', 'ACCOUNT_SUBURB', 'true', 'Display suburb in the customers account', 5, 4, NULL, '2011-08-25 10:44:24', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(67, 'State', 'ACCOUNT_STATE', 'true', 'Display state in the customers account', 5, 5, NULL, '2011-08-25 10:44:24', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(68, 'Installed Modules', 'MODULE_PAYMENT_INSTALLED', 'cod.php;paypal_standard.php', 'List of payment module filenames separated by a semi-colon. This is automatically updated. No need to edit. (Example: cod.php;paypal_express.php)', 6, 0, NULL, '2011-08-25 10:44:24', NULL, NULL),
(69, 'Installed Modules', 'MODULE_ORDER_TOTAL_INSTALLED', 'ot_subtotal.php;ot_shipping.php;ot_tax.php;ot_total.php', 'List of order_total module filenames separated by a semi-colon. This is automatically updated. No need to edit. (Example: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)', 6, 0, '2011-10-15 12:59:13', '2011-08-25 10:44:24', NULL, NULL),
(70, 'Installed Modules', 'MODULE_SHIPPING_INSTALLED', 'flat.php', 'List of shipping module filenames separated by a semi-colon. This is automatically updated. No need to edit. (Example: ups.php;flat.php;item.php)', 6, 0, NULL, '2011-08-25 10:44:24', NULL, NULL),
(71, 'Installed Modules', 'MODULE_ACTION_RECORDER_INSTALLED', 'ar_admin_login.php;ar_contact_us.php;ar_tell_a_friend.php', 'List of action recorder module filenames separated by a semi-colon. This is automatically updated. No need to edit.', 6, 0, NULL, '2011-08-25 10:44:24', NULL, NULL),
(72, 'Installed Modules', 'MODULE_SOCIAL_BOOKMARKS_INSTALLED', 'sb_email.php;sb_facebook.php;sb_twitter.php;sb_google_buzz.php;sb_digg.php', 'List of social bookmark module filenames separated by a semi-colon. This is automatically updated. No need to edit.', 6, 0, NULL, '2011-08-25 10:44:24', NULL, NULL),
(73, 'Enable Cash On Delivery Module', 'MODULE_PAYMENT_COD_STATUS', 'True', 'Do you want to accept Cash On Delevery payments?', 6, 1, NULL, '2011-08-25 10:44:24', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(74, 'Payment Zone', 'MODULE_PAYMENT_COD_ZONE', '0', 'If a zone is selected, only enable this payment method for that zone.', 6, 2, NULL, '2011-08-25 10:44:24', 'tep_get_zone_class_title', 'tep_cfg_pull_down_zone_classes('),
(75, 'Sort order of display.', 'MODULE_PAYMENT_COD_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:44:24', NULL, NULL),
(76, 'Set Order Status', 'MODULE_PAYMENT_COD_ORDER_STATUS_ID', '0', 'Set the status of orders made with this payment module to this value', 6, 0, NULL, '2011-08-25 10:44:25', 'tep_get_order_status_name', 'tep_cfg_pull_down_order_statuses('),
(77, 'Enable Flat Shipping', 'MODULE_SHIPPING_FLAT_STATUS', 'True', 'Do you want to offer flat rate shipping?', 6, 0, NULL, '2011-08-25 10:44:25', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(78, 'Shipping Cost', 'MODULE_SHIPPING_FLAT_COST', '5.00', 'The shipping cost for all orders using this shipping method.', 6, 0, NULL, '2011-08-25 10:44:25', NULL, NULL),
(79, 'Tax Class', 'MODULE_SHIPPING_FLAT_TAX_CLASS', '0', 'Use the following tax class on the shipping fee.', 6, 0, NULL, '2011-08-25 10:44:25', 'tep_get_tax_class_title', 'tep_cfg_pull_down_tax_classes('),
(80, 'Shipping Zone', 'MODULE_SHIPPING_FLAT_ZONE', '0', 'If a zone is selected, only enable this shipping method for that zone.', 6, 0, NULL, '2011-08-25 10:44:25', 'tep_get_zone_class_title', 'tep_cfg_pull_down_zone_classes('),
(81, 'Sort Order', 'MODULE_SHIPPING_FLAT_SORT_ORDER', '0', 'Sort order of display.', 6, 0, NULL, '2011-08-25 10:44:25', NULL, NULL),
(82, 'Default Currency', 'DEFAULT_CURRENCY', 'USD', 'Default Currency', 6, 0, NULL, '2011-08-25 10:44:25', NULL, NULL),
(83, 'Default Language', 'DEFAULT_LANGUAGE', 'en', 'Default Language', 6, 0, NULL, '2011-08-25 10:44:25', NULL, NULL),
(84, 'Default Order Status For New Orders', 'DEFAULT_ORDERS_STATUS_ID', '1', 'When a new order is created, this order status will be assigned to it.', 6, 0, NULL, '2011-08-25 10:44:25', NULL, NULL),
(85, 'Display Shipping', 'MODULE_ORDER_TOTAL_SHIPPING_STATUS', 'true', 'Do you want to display the order shipping cost?', 6, 1, NULL, '2011-08-25 10:44:25', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(86, 'Sort Order', 'MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER', '2', 'Sort order of display.', 6, 2, NULL, '2011-08-25 10:44:25', NULL, NULL),
(87, 'Allow Free Shipping', 'MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING', 'false', 'Do you want to allow free shipping?', 6, 3, NULL, '2011-08-25 10:44:25', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(88, 'Free Shipping For Orders Over', 'MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER', '50', 'Provide free shipping for orders over the set amount.', 6, 4, NULL, '2011-08-25 10:44:25', 'currencies->format', NULL),
(89, 'Provide Free Shipping For Orders Made', 'MODULE_ORDER_TOTAL_SHIPPING_DESTINATION', 'national', 'Provide free shipping for orders sent to the set destination.', 6, 5, NULL, '2011-08-25 10:44:25', NULL, 'tep_cfg_select_option(array(''national'', ''international'', ''both''), '),
(90, 'Display Sub-Total', 'MODULE_ORDER_TOTAL_SUBTOTAL_STATUS', 'true', 'Do you want to display the order sub-total cost?', 6, 1, NULL, '2011-08-25 10:44:26', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(91, 'Sort Order', 'MODULE_ORDER_TOTAL_SUBTOTAL_SORT_ORDER', '1', 'Sort order of display.', 6, 2, NULL, '2011-08-25 10:44:26', NULL, NULL),
(92, 'Display Tax', 'MODULE_ORDER_TOTAL_TAX_STATUS', 'true', 'Do you want to display the order tax value?', 6, 1, NULL, '2011-08-25 10:44:26', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(93, 'Sort Order', 'MODULE_ORDER_TOTAL_TAX_SORT_ORDER', '3', 'Sort order of display.', 6, 2, NULL, '2011-08-25 10:44:26', NULL, NULL),
(94, 'Display Total', 'MODULE_ORDER_TOTAL_TOTAL_STATUS', 'true', 'Do you want to display the total order value?', 6, 1, NULL, '2011-08-25 10:44:26', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(95, 'Sort Order', 'MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER', '4', 'Sort order of display.', 6, 2, NULL, '2011-08-25 10:44:26', NULL, NULL),
(96, 'Minimum Minutes Per E-Mail', 'MODULE_ACTION_RECORDER_CONTACT_US_EMAIL_MINUTES', '15', 'Minimum number of minutes to allow 1 e-mail to be sent (eg, 15 for 1 e-mail every 15 minutes)', 6, 0, NULL, '2011-08-25 10:44:26', NULL, NULL),
(97, 'Minimum Minutes Per E-Mail', 'MODULE_ACTION_RECORDER_TELL_A_FRIEND_EMAIL_MINUTES', '15', 'Minimum number of minutes to allow 1 e-mail to be sent (eg, 15 for 1 e-mail every 15 minutes)', 6, 0, NULL, '2011-08-25 10:44:26', NULL, NULL),
(98, 'Allowed Minutes', 'MODULE_ACTION_RECORDER_ADMIN_LOGIN_MINUTES', '5', 'Number of minutes to allow login attempts to occur.', 6, 0, NULL, '2011-08-25 10:44:26', NULL, NULL),
(99, 'Allowed Attempts', 'MODULE_ACTION_RECORDER_ADMIN_LOGIN_ATTEMPTS', '3', 'Number of login attempts to allow within the specified period.', 6, 0, NULL, '2011-08-25 10:44:26', NULL, NULL),
(100, 'Enable E-Mail Module', 'MODULE_SOCIAL_BOOKMARKS_EMAIL_STATUS', 'True', 'Do you want to allow products to be shared through e-mail?', 6, 1, NULL, '2011-08-25 10:44:26', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(101, 'Sort Order', 'MODULE_SOCIAL_BOOKMARKS_EMAIL_SORT_ORDER', '10', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:44:26', NULL, NULL),
(102, 'Enable Facebook Module', 'MODULE_SOCIAL_BOOKMARKS_FACEBOOK_STATUS', 'True', 'Do you want to allow products to be shared through Facebook?', 6, 1, NULL, '2011-08-25 10:44:26', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(103, 'Sort Order', 'MODULE_SOCIAL_BOOKMARKS_FACEBOOK_SORT_ORDER', '20', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:44:26', NULL, NULL),
(104, 'Enable Twitter Module', 'MODULE_SOCIAL_BOOKMARKS_TWITTER_STATUS', 'True', 'Do you want to allow products to be shared through Twitter?', 6, 1, NULL, '2011-08-25 10:44:26', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(105, 'Sort Order', 'MODULE_SOCIAL_BOOKMARKS_TWITTER_SORT_ORDER', '30', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:44:27', NULL, NULL),
(106, 'Enable Google Buzz Module', 'MODULE_SOCIAL_BOOKMARKS_GOOGLE_BUZZ_STATUS', 'True', 'Do you want to allow products to be shared through Google Buzz?', 6, 1, NULL, '2011-08-25 10:44:27', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(107, 'Sort Order', 'MODULE_SOCIAL_BOOKMARKS_GOOGLE_BUZZ_SORT_ORDER', '40', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:44:27', NULL, NULL),
(108, 'Enable Digg Module', 'MODULE_SOCIAL_BOOKMARKS_DIGG_STATUS', 'True', 'Do you want to allow products to be shared through Digg?', 6, 1, NULL, '2011-08-25 10:44:27', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(109, 'Sort Order', 'MODULE_SOCIAL_BOOKMARKS_DIGG_SORT_ORDER', '50', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:44:27', NULL, NULL),
(110, 'Country of Origin', 'SHIPPING_ORIGIN_COUNTRY', '223', 'Select the country of origin to be used in shipping quotes.', 7, 1, NULL, '2011-08-25 10:44:28', 'tep_get_country_name', 'tep_cfg_pull_down_country_list('),
(111, 'Postal Code', 'SHIPPING_ORIGIN_ZIP', 'NONE', 'Enter the Postal Code (ZIP) of the Store to be used in shipping quotes.', 7, 2, NULL, '2011-08-25 10:44:28', NULL, NULL),
(112, 'Enter the Maximum Package Weight you will ship', 'SHIPPING_MAX_WEIGHT', '50', 'Carriers have a max weight limit for a single package. This is a common one for all.', 7, 3, NULL, '2011-08-25 10:44:28', NULL, NULL),
(113, 'Package Tare weight.', 'SHIPPING_BOX_WEIGHT', '3', 'What is the weight of typical packaging of small to medium packages?', 7, 4, NULL, '2011-08-25 10:44:28', NULL, NULL),
(114, 'Larger packages - percentage increase.', 'SHIPPING_BOX_PADDING', '10', 'For 10% enter 10', 7, 5, NULL, '2011-08-25 10:44:28', NULL, NULL),
(115, 'Display Product Image', 'PRODUCT_LIST_IMAGE', '1', 'Do you want to display the Product Image?', 8, 1, NULL, '2011-08-25 10:44:28', NULL, NULL),
(116, 'Display Product Manufaturer Name', 'PRODUCT_LIST_MANUFACTURER', '0', 'Do you want to display the Product Manufacturer Name?', 8, 2, NULL, '2011-08-25 10:44:28', NULL, NULL),
(117, 'Display Product Model', 'PRODUCT_LIST_MODEL', '0', 'Do you want to display the Product Model?', 8, 3, NULL, '2011-08-25 10:44:28', NULL, NULL),
(118, 'Display Product Name', 'PRODUCT_LIST_NAME', '2', 'Do you want to display the Product Name?', 8, 4, NULL, '2011-08-25 10:44:28', NULL, NULL),
(119, 'Display Product Price', 'PRODUCT_LIST_PRICE', '3', 'Do you want to display the Product Price', 8, 5, NULL, '2011-08-25 10:44:28', NULL, NULL),
(120, 'Display Product Quantity', 'PRODUCT_LIST_QUANTITY', '0', 'Do you want to display the Product Quantity?', 8, 6, NULL, '2011-08-25 10:44:28', NULL, NULL),
(121, 'Display Product Weight', 'PRODUCT_LIST_WEIGHT', '0', 'Do you want to display the Product Weight?', 8, 7, NULL, '2011-08-25 10:44:28', NULL, NULL),
(122, 'Display Buy Now column', 'PRODUCT_LIST_BUY_NOW', '4', 'Do you want to display the Buy Now column?', 8, 8, NULL, '2011-08-25 10:44:28', NULL, NULL),
(123, 'Display Category/Manufacturer Filter (0=disable; 1=enable)', 'PRODUCT_LIST_FILTER', '1', 'Do you want to display the Category/Manufacturer Filter?', 8, 9, NULL, '2011-08-25 10:44:28', NULL, NULL),
(124, 'Location of Prev/Next Navigation Bar (1-top, 2-bottom, 3-both)', 'PREV_NEXT_BAR_LOCATION', '2', 'Sets the location of the Prev/Next Navigation Bar (1-top, 2-bottom, 3-both)', 8, 10, NULL, '2011-08-25 10:44:28', NULL, NULL),
(125, 'Check stock level', 'STOCK_CHECK', 'true', 'Check to see if sufficent stock is available', 9, 1, NULL, '2011-08-25 10:44:28', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(126, 'Subtract stock', 'STOCK_LIMITED', 'true', 'Subtract product in stock by product orders', 9, 2, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(127, 'Allow Checkout', 'STOCK_ALLOW_CHECKOUT', 'true', 'Allow customer to checkout even if there is insufficient stock', 9, 3, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(128, 'Mark product out of stock', 'STOCK_MARK_PRODUCT_OUT_OF_STOCK', '***', 'Display something on screen so customer can see which product has insufficient stock', 9, 4, NULL, '2011-08-25 10:44:29', NULL, NULL),
(129, 'Stock Re-order level', 'STOCK_REORDER_LEVEL', '5', 'Define when stock needs to be re-ordered', 9, 5, NULL, '2011-08-25 10:44:29', NULL, NULL),
(130, 'Store Page Parse Time', 'STORE_PAGE_PARSE_TIME', 'false', 'Store the time it takes to parse a page', 10, 1, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(131, 'Log Destination', 'STORE_PAGE_PARSE_TIME_LOG', '/var/log/www/tep/page_parse_time.log', 'Directory and filename of the page parse time log', 10, 2, NULL, '2011-08-25 10:44:29', NULL, NULL),
(132, 'Log Date Format', 'STORE_PARSE_DATE_TIME_FORMAT', '%d/%m/%Y %H:%M:%S', 'The date format', 10, 3, NULL, '2011-08-25 10:44:29', NULL, NULL),
(133, 'Display The Page Parse Time', 'DISPLAY_PAGE_PARSE_TIME', 'true', 'Display the page parse time (store page parse time must be enabled)', 10, 4, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(134, 'Store Database Queries', 'STORE_DB_TRANSACTIONS', 'false', 'Store the database queries in the page parse time log', 10, 5, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(135, 'Use Cache', 'USE_CACHE', 'false', 'Use caching features', 11, 1, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(136, 'Cache Directory', 'DIR_FS_CACHE', 'D:/wamp/www/dpi.net/includes/work/', 'The directory where the cached files are saved', 11, 2, NULL, '2011-08-25 10:44:29', NULL, NULL),
(137, 'E-Mail Transport Method', 'EMAIL_TRANSPORT', 'sendmail', 'Defines if this server uses a local connection to sendmail or uses an SMTP connection via TCP/IP. Servers running on Windows and MacOS should change this setting to SMTP.', 12, 1, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''sendmail'', ''smtp''),'),
(138, 'E-Mail Linefeeds', 'EMAIL_LINEFEED', 'LF', 'Defines the character sequence used to separate mail headers.', 12, 2, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''LF'', ''CRLF''),'),
(139, 'Use MIME HTML When Sending Emails', 'EMAIL_USE_HTML', 'false', 'Send e-mails in HTML format', 12, 3, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''true'', ''false''),'),
(140, 'Verify E-Mail Addresses Through DNS', 'ENTRY_EMAIL_ADDRESS_CHECK', 'false', 'Verify e-mail address through a DNS server', 12, 4, NULL, '2011-08-25 10:44:29', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(141, 'Send E-Mails', 'SEND_EMAILS', 'true', 'Send out e-mails', 12, 5, NULL, '2011-08-25 10:44:30', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(142, 'Enable download', 'DOWNLOAD_ENABLED', 'false', 'Enable the products download functions.', 13, 1, NULL, '2011-08-25 10:44:30', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(143, 'Download by redirect', 'DOWNLOAD_BY_REDIRECT', 'false', 'Use browser redirection for download. Disable on non-Unix systems.', 13, 2, NULL, '2011-08-25 10:44:30', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(144, 'Expiry delay (days)', 'DOWNLOAD_MAX_DAYS', '7', 'Set number of days before the download link expires. 0 means no limit.', 13, 3, NULL, '2011-08-25 10:44:30', NULL, ''),
(145, 'Maximum number of downloads', 'DOWNLOAD_MAX_COUNT', '5', 'Set the maximum number of downloads. 0 means no download authorized.', 13, 4, NULL, '2011-08-25 10:44:30', NULL, ''),
(146, 'Enable GZip Compression', 'GZIP_COMPRESSION', 'false', 'Enable HTTP GZip compression.', 14, 1, NULL, '2011-08-25 10:44:30', NULL, 'tep_cfg_select_option(array(''true'', ''false''), '),
(147, 'Compression Level', 'GZIP_LEVEL', '5', 'Use this compression level 0-9 (0 = minimum, 9 = maximum).', 14, 2, NULL, '2011-08-25 10:44:30', NULL, NULL),
(148, 'Session Directory', 'SESSION_WRITE_DIRECTORY', 'D:/wamp/www/dpi.net/includes/work/', 'If sessions are file based, store them in this directory.', 15, 1, NULL, '2011-08-25 10:44:30', NULL, NULL),
(149, 'Force Cookie Use', 'SESSION_FORCE_COOKIE_USE', 'False', 'Force the use of sessions when cookies are only enabled.', 15, 2, NULL, '2011-08-25 10:44:30', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(150, 'Check SSL Session ID', 'SESSION_CHECK_SSL_SESSION_ID', 'False', 'Validate the SSL_SESSION_ID on every secure HTTPS page request.', 15, 3, NULL, '2011-08-25 10:44:30', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(151, 'Check User Agent', 'SESSION_CHECK_USER_AGENT', 'False', 'Validate the clients browser user agent on every page request.', 15, 4, NULL, '2011-08-25 10:44:31', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(152, 'Check IP Address', 'SESSION_CHECK_IP_ADDRESS', 'False', 'Validate the clients IP address on every page request.', 15, 5, NULL, '2011-08-25 10:44:31', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(153, 'Prevent Spider Sessions', 'SESSION_BLOCK_SPIDERS', 'True', 'Prevent known spiders from starting a session.', 15, 6, NULL, '2011-08-25 10:44:31', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(154, 'Recreate Session', 'SESSION_RECREATE', 'True', 'Recreate the session to generate a new session ID when the customer logs on or creates an account (PHP >=4.1 needed).', 15, 7, NULL, '2011-08-25 10:44:31', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(155, 'Last Update Check Time', 'LAST_UPDATE_CHECK_TIME', '', 'Last time a check for new versions of osCommerce was run', 6, 0, NULL, '2011-08-25 10:44:31', NULL, NULL),
(172, 'Installed Modules', 'MODULE_HEADER_TAGS_INSTALLED', 'ht_manufacturer_title.php;ht_category_title.php;ht_product_title.php', 'List of header tag module filenames separated by a semi-colon. This is automatically updated. No need to edit.', 6, 0, NULL, '2011-08-25 10:45:18', NULL, NULL),
(173, 'Enable Category Title Module', 'MODULE_HEADER_TAGS_CATEGORY_TITLE_STATUS', 'True', 'Do you want to allow category titles to be added to the page title?', 6, 1, NULL, '2011-08-25 10:45:18', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(174, 'Sort Order', 'MODULE_HEADER_TAGS_CATEGORY_TITLE_SORT_ORDER', '200', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:18', NULL, NULL),
(175, 'Enable Manufacturer Title Module', 'MODULE_HEADER_TAGS_MANUFACTURER_TITLE_STATUS', 'True', 'Do you want to allow manufacturer titles to be added to the page title?', 6, 1, NULL, '2011-08-25 10:45:18', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(176, 'Sort Order', 'MODULE_HEADER_TAGS_MANUFACTURER_TITLE_SORT_ORDER', '100', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:18', NULL, NULL),
(177, 'Enable Product Title Module', 'MODULE_HEADER_TAGS_PRODUCT_TITLE_STATUS', 'True', 'Do you want to allow product titles to be added to the page title?', 6, 1, NULL, '2011-08-25 10:45:18', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(178, 'Sort Order', 'MODULE_HEADER_TAGS_PRODUCT_TITLE_SORT_ORDER', '300', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:18', NULL, NULL),
(179, 'Installed Modules', 'MODULE_ADMIN_DASHBOARD_INSTALLED', 'd_total_revenue.php;d_total_customers.php;d_orders.php;d_customers.php;d_admin_logins.php;d_security_checks.php;d_reviews.php', 'List of Administration Tool Dashboard module filenames separated by a semi-colon. This is automatically updated. No need to edit.', 6, 0, NULL, '2011-08-25 10:45:18', NULL, NULL),
(180, 'Enable Administrator Logins Module', 'MODULE_ADMIN_DASHBOARD_ADMIN_LOGINS_STATUS', 'True', 'Do you want to show the latest administrator logins on the dashboard?', 6, 1, NULL, '2011-08-25 10:45:18', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(181, 'Sort Order', 'MODULE_ADMIN_DASHBOARD_ADMIN_LOGINS_SORT_ORDER', '500', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:18', NULL, NULL),
(182, 'Enable Customers Module', 'MODULE_ADMIN_DASHBOARD_CUSTOMERS_STATUS', 'True', 'Do you want to show the newest customers on the dashboard?', 6, 1, NULL, '2011-08-25 10:45:18', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(183, 'Sort Order', 'MODULE_ADMIN_DASHBOARD_CUSTOMERS_SORT_ORDER', '400', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:18', NULL, NULL),
(188, 'Enable Orders Module', 'MODULE_ADMIN_DASHBOARD_ORDERS_STATUS', 'True', 'Do you want to show the latest orders on the dashboard?', 6, 1, NULL, '2011-08-25 10:45:19', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(189, 'Sort Order', 'MODULE_ADMIN_DASHBOARD_ORDERS_SORT_ORDER', '300', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:19', NULL, NULL),
(190, 'Enable Security Checks Module', 'MODULE_ADMIN_DASHBOARD_SECURITY_CHECKS_STATUS', 'True', 'Do you want to run the security checks for this installation?', 6, 1, NULL, '2011-08-25 10:45:19', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(191, 'Sort Order', 'MODULE_ADMIN_DASHBOARD_SECURITY_CHECKS_SORT_ORDER', '600', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:19', NULL, NULL),
(192, 'Enable Total Customers Module', 'MODULE_ADMIN_DASHBOARD_TOTAL_CUSTOMERS_STATUS', 'True', 'Do you want to show the total customers chart on the dashboard?', 6, 1, NULL, '2011-08-25 10:45:19', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(193, 'Sort Order', 'MODULE_ADMIN_DASHBOARD_TOTAL_CUSTOMERS_SORT_ORDER', '200', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:19', NULL, NULL),
(194, 'Enable Total Revenue Module', 'MODULE_ADMIN_DASHBOARD_TOTAL_REVENUE_STATUS', 'True', 'Do you want to show the total revenue chart on the dashboard?', 6, 1, NULL, '2011-08-25 10:45:19', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(195, 'Sort Order', 'MODULE_ADMIN_DASHBOARD_TOTAL_REVENUE_SORT_ORDER', '100', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:19', NULL, NULL),
(198, 'Enable Latest Reviews Module', 'MODULE_ADMIN_DASHBOARD_REVIEWS_STATUS', 'True', 'Do you want to show the latest reviews on the dashboard?', 6, 1, NULL, '2011-08-25 10:45:19', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(199, 'Sort Order', 'MODULE_ADMIN_DASHBOARD_REVIEWS_SORT_ORDER', '1000', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:19', NULL, NULL),
(200, 'Installed Modules', 'MODULE_BOXES_INSTALLED', 'bm_categories.php;bm_manufacturers.php;bm_search.php;bm_whats_new.php;bm_information.php;bm_shopping_cart.php;bm_manufacturer_info.php;bm_order_history.php;bm_best_sellers.php;bm_product_notifications.php;bm_product_social_bookmarks.php;bm_specials.php;bm_reviews.php;bm_languages.php;bm_currencies.php', 'List of box module filenames separated by a semi-colon. This is automatically updated. No need to edit.', 6, 0, NULL, '2011-08-25 10:45:19', NULL, NULL),
(201, 'Enable Best Sellers Module', 'MODULE_BOXES_BEST_SELLERS_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:19', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(202, 'Content Placement', 'MODULE_BOXES_BEST_SELLERS_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:19', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(203, 'Sort Order', 'MODULE_BOXES_BEST_SELLERS_SORT_ORDER', '5030', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:19', NULL, NULL),
(204, 'Enable Categories Module', 'MODULE_BOXES_CATEGORIES_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:19', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(205, 'Content Placement', 'MODULE_BOXES_CATEGORIES_CONTENT_PLACEMENT', 'Left Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(206, 'Sort Order', 'MODULE_BOXES_CATEGORIES_SORT_ORDER', '1000', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:20', NULL, NULL),
(207, 'Enable Currencies Module', 'MODULE_BOXES_CURRENCIES_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(208, 'Content Placement', 'MODULE_BOXES_CURRENCIES_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(209, 'Sort Order', 'MODULE_BOXES_CURRENCIES_SORT_ORDER', '5090', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:20', NULL, NULL),
(210, 'Enable Information Module', 'MODULE_BOXES_INFORMATION_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(211, 'Content Placement', 'MODULE_BOXES_INFORMATION_CONTENT_PLACEMENT', 'Left Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(212, 'Sort Order', 'MODULE_BOXES_INFORMATION_SORT_ORDER', '1050', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:20', NULL, NULL),
(213, 'Enable Languages Module', 'MODULE_BOXES_LANGUAGES_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(214, 'Content Placement', 'MODULE_BOXES_LANGUAGES_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(215, 'Sort Order', 'MODULE_BOXES_LANGUAGES_SORT_ORDER', '5080', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:20', NULL, NULL),
(216, 'Enable Manufacturer Info Module', 'MODULE_BOXES_MANUFACTURER_INFO_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(217, 'Content Placement', 'MODULE_BOXES_MANUFACTURER_INFO_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(218, 'Sort Order', 'MODULE_BOXES_MANUFACTURER_INFO_SORT_ORDER', '5010', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:20', NULL, NULL),
(219, 'Enable Manufacturers Module', 'MODULE_BOXES_MANUFACTURERS_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(220, 'Content Placement', 'MODULE_BOXES_MANUFACTURERS_CONTENT_PLACEMENT', 'Left Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(221, 'Sort Order', 'MODULE_BOXES_MANUFACTURERS_SORT_ORDER', '1020', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:20', NULL, NULL),
(222, 'Enable Order History Module', 'MODULE_BOXES_ORDER_HISTORY_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(223, 'Content Placement', 'MODULE_BOXES_ORDER_HISTORY_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:20', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(224, 'Sort Order', 'MODULE_BOXES_ORDER_HISTORY_SORT_ORDER', '5020', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:21', NULL, NULL),
(225, 'Enable Product Notifications Module', 'MODULE_BOXES_PRODUCT_NOTIFICATIONS_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:21', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(226, 'Content Placement', 'MODULE_BOXES_PRODUCT_NOTIFICATIONS_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:21', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(227, 'Sort Order', 'MODULE_BOXES_PRODUCT_NOTIFICATIONS_SORT_ORDER', '5040', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:21', NULL, NULL),
(228, 'Enable Product Social Bookmarks Module', 'MODULE_BOXES_PRODUCT_SOCIAL_BOOKMARKS_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:21', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(229, 'Content Placement', 'MODULE_BOXES_PRODUCT_SOCIAL_BOOKMARKS_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:21', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(230, 'Sort Order', 'MODULE_BOXES_PRODUCT_SOCIAL_BOOKMARKS_SORT_ORDER', '5050', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:22', NULL, NULL),
(231, 'Enable Reviews Module', 'MODULE_BOXES_REVIEWS_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:22', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(232, 'Content Placement', 'MODULE_BOXES_REVIEWS_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:22', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(233, 'Sort Order', 'MODULE_BOXES_REVIEWS_SORT_ORDER', '5070', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:22', NULL, NULL),
(234, 'Enable Search Module', 'MODULE_BOXES_SEARCH_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:23', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(235, 'Content Placement', 'MODULE_BOXES_SEARCH_CONTENT_PLACEMENT', 'Left Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:23', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(236, 'Sort Order', 'MODULE_BOXES_SEARCH_SORT_ORDER', '1030', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:23', NULL, NULL),
(237, 'Enable Shopping Cart Module', 'MODULE_BOXES_SHOPPING_CART_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:23', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(238, 'Content Placement', 'MODULE_BOXES_SHOPPING_CART_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:23', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(239, 'Sort Order', 'MODULE_BOXES_SHOPPING_CART_SORT_ORDER', '5000', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:23', NULL, NULL),
(240, 'Enable Specials Module', 'MODULE_BOXES_SPECIALS_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:23', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(241, 'Content Placement', 'MODULE_BOXES_SPECIALS_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:23', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(242, 'Sort Order', 'MODULE_BOXES_SPECIALS_SORT_ORDER', '5060', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:24', NULL, NULL),
(243, 'Enable What''s New Module', 'MODULE_BOXES_WHATS_NEW_STATUS', 'True', 'Do you want to add the module to your shop?', 6, 1, NULL, '2011-08-25 10:45:24', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(244, 'Content Placement', 'MODULE_BOXES_WHATS_NEW_CONTENT_PLACEMENT', 'Left Column', 'Should the module be loaded in the left or right column?', 6, 1, NULL, '2011-08-25 10:45:24', NULL, 'tep_cfg_select_option(array(''Left Column'', ''Right Column''), '),
(245, 'Sort Order', 'MODULE_BOXES_WHATS_NEW_SORT_ORDER', '1040', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 10:45:24', NULL, NULL),
(246, 'Installed Template Block Groups', 'TEMPLATE_BLOCK_GROUPS', 'boxes;header_tags', 'This is automatically updated. No need to edit.', 6, 0, NULL, '2011-08-25 10:45:24', NULL, NULL),
(247, 'Enable PayPal Website Payments Standard', 'MODULE_PAYMENT_PAYPAL_STANDARD_STATUS', 'True', 'Do you want to accept PayPal Website Payments Standard payments?', 6, 3, NULL, '2011-08-25 12:21:17', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(248, 'E-Mail Address', 'MODULE_PAYMENT_PAYPAL_STANDARD_ID', 'paypal@w3csolutions.com', 'The PayPal seller e-mail address to accept payments for', 6, 4, NULL, '2011-08-25 12:21:17', NULL, NULL),
(249, 'Sort order of display.', 'MODULE_PAYMENT_PAYPAL_STANDARD_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', 6, 0, NULL, '2011-08-25 12:21:18', NULL, NULL),
(250, 'Payment Zone', 'MODULE_PAYMENT_PAYPAL_STANDARD_ZONE', '0', 'If a zone is selected, only enable this payment method for that zone.', 6, 2, NULL, '2011-08-25 12:21:18', 'tep_get_zone_class_title', 'tep_cfg_pull_down_zone_classes('),
(251, 'Set Preparing Order Status', 'MODULE_PAYMENT_PAYPAL_STANDARD_PREPARE_ORDER_STATUS_ID', '5', 'Set the status of prepared orders made with this payment module to this value', 6, 0, NULL, '2011-08-25 12:21:18', 'tep_get_order_status_name', 'tep_cfg_pull_down_order_statuses('),
(252, 'Set PayPal Acknowledged Order Status', 'MODULE_PAYMENT_PAYPAL_STANDARD_ORDER_STATUS_ID', '0', 'Set the status of orders made with this payment module to this value', 6, 0, NULL, '2011-08-25 12:21:18', 'tep_get_order_status_name', 'tep_cfg_pull_down_order_statuses('),
(253, 'Gateway Server', 'MODULE_PAYMENT_PAYPAL_STANDARD_GATEWAY_SERVER', 'Sandbox', 'Use the testing (sandbox) or live gateway server for transactions?', 6, 6, NULL, '2011-08-25 12:21:18', NULL, 'tep_cfg_select_option(array(''Live'', ''Sandbox''), '),
(254, 'Transaction Method', 'MODULE_PAYMENT_PAYPAL_STANDARD_TRANSACTION_METHOD', 'Sale', 'The processing method to use for each transaction.', 6, 0, NULL, '2011-08-25 12:21:18', NULL, 'tep_cfg_select_option(array(''Authorization'', ''Sale''), '),
(255, 'Page Style', 'MODULE_PAYMENT_PAYPAL_STANDARD_PAGE_STYLE', '', 'The page style to use for the transaction procedure (defined at your PayPal Profile page)', 6, 4, NULL, '2011-08-25 12:21:18', NULL, NULL),
(256, 'Debug E-Mail Address', 'MODULE_PAYMENT_PAYPAL_STANDARD_DEBUG_EMAIL', '', 'All parameters of an Invalid IPN notification will be sent to this email address if one is entered.', 6, 4, NULL, '2011-08-25 12:21:18', NULL, NULL),
(257, 'Enable Encrypted Web Payments', 'MODULE_PAYMENT_PAYPAL_STANDARD_EWP_STATUS', 'False', 'Do you want to enable Encrypted Web Payments?', 6, 3, NULL, '2011-08-25 12:21:18', NULL, 'tep_cfg_select_option(array(''True'', ''False''), '),
(258, 'Your Private Key', 'MODULE_PAYMENT_PAYPAL_STANDARD_EWP_PRIVATE_KEY', '', 'The location of your Private Key to use for signing the data. (*.pem)', 6, 4, NULL, '2011-08-25 12:21:18', NULL, NULL),
(259, 'Your Public Certificate', 'MODULE_PAYMENT_PAYPAL_STANDARD_EWP_PUBLIC_KEY', '', 'The location of your Public Certificate to use for signing the data. (*.pem)', 6, 4, NULL, '2011-08-25 12:21:18', NULL, NULL),
(260, 'PayPals Public Certificate', 'MODULE_PAYMENT_PAYPAL_STANDARD_EWP_PAYPAL_KEY', '', 'The location of the PayPal Public Certificate for encrypting the data.', 6, 4, NULL, '2011-08-25 12:21:18', NULL, NULL),
(261, 'Your PayPal Public Certificate ID', 'MODULE_PAYMENT_PAYPAL_STANDARD_EWP_CERT_ID', '', 'The Certificate ID to use from your PayPal Encrypted Payment Settings Profile.', 6, 4, NULL, '2011-08-25 12:21:18', NULL, NULL),
(262, 'Working Directory', 'MODULE_PAYMENT_PAYPAL_STANDARD_EWP_WORKING_DIRECTORY', '', 'The working directory to use for temporary files. (trailing slash needed)', 6, 4, NULL, '2011-08-25 12:21:18', NULL, NULL),
(263, 'OpenSSL Location', 'MODULE_PAYMENT_PAYPAL_STANDARD_EWP_OPENSSL', '/usr/bin/openssl', 'The location of the openssl binary file.', 6, 4, NULL, '2011-08-25 12:21:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configuration_group`
--

CREATE TABLE IF NOT EXISTS `configuration_group` (
  `configuration_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `configuration_group_title` varchar(64) NOT NULL,
  `configuration_group_description` varchar(255) NOT NULL,
  `sort_order` int(5) DEFAULT NULL,
  `visible` int(1) DEFAULT '1',
  PRIMARY KEY (`configuration_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `configuration_group`
--

INSERT INTO `configuration_group` (`configuration_group_id`, `configuration_group_title`, `configuration_group_description`, `sort_order`, `visible`) VALUES
(1, 'My Store', 'General information about my store', 1, 1),
(2, 'Minimum Values', 'The minimum values for functions / data', 2, 1),
(3, 'Maximum Values', 'The maximum values for functions / data', 3, 1),
(4, 'Images', 'Image parameters', 4, 1),
(5, 'Customer Details', 'Customer account configuration', 5, 1),
(6, 'Module Options', 'Hidden from configuration', 6, 0),
(7, 'Shipping/Packaging', 'Shipping options available at my store', 7, 1),
(8, 'Product Listing', 'Product Listing    configuration options', 8, 1),
(9, 'Stock', 'Stock configuration options', 9, 1),
(10, 'Logging', 'Logging configuration options', 10, 1),
(11, 'Cache', 'Caching configuration options', 11, 1),
(12, 'E-Mail Options', 'General setting for E-Mail transport and HTML E-Mails', 12, 1),
(13, 'Download', 'Downloadable products options', 13, 1),
(14, 'GZip Compression', 'GZip compression options', 14, 1),
(15, 'Sessions', 'Session options', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `startdate` char(8) DEFAULT NULL,
  `counter` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`startdate`, `counter`) VALUES
('20110825', 4994);

-- --------------------------------------------------------

--
-- Table structure for table `counter_history`
--

CREATE TABLE IF NOT EXISTS `counter_history` (
  `month` char(8) DEFAULT NULL,
  `counter` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_history`
--


-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `countries_id` int(11) NOT NULL AUTO_INCREMENT,
  `countries_name` varchar(255) NOT NULL,
  `countries_iso_code_2` char(2) NOT NULL,
  `countries_iso_code_3` char(3) NOT NULL,
  `address_format_id` int(11) NOT NULL,
  PRIMARY KEY (`countries_id`),
  KEY `IDX_COUNTRIES_NAME` (`countries_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `countries_name`, `countries_iso_code_2`, `countries_iso_code_3`, `address_format_id`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 1),
(2, 'Albania', 'AL', 'ALB', 1),
(3, 'Algeria', 'DZ', 'DZA', 1),
(4, 'American Samoa', 'AS', 'ASM', 1),
(5, 'Andorra', 'AD', 'AND', 1),
(6, 'Angola', 'AO', 'AGO', 1),
(7, 'Anguilla', 'AI', 'AIA', 1),
(8, 'Antarctica', 'AQ', 'ATA', 1),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 1),
(10, 'Argentina', 'AR', 'ARG', 1),
(11, 'Armenia', 'AM', 'ARM', 1),
(12, 'Aruba', 'AW', 'ABW', 1),
(13, 'Australia', 'AU', 'AUS', 1),
(14, 'Austria', 'AT', 'AUT', 5),
(15, 'Azerbaijan', 'AZ', 'AZE', 1),
(16, 'Bahamas', 'BS', 'BHS', 1),
(17, 'Bahrain', 'BH', 'BHR', 1),
(18, 'Bangladesh', 'BD', 'BGD', 1),
(19, 'Barbados', 'BB', 'BRB', 1),
(20, 'Belarus', 'BY', 'BLR', 1),
(21, 'Belgium', 'BE', 'BEL', 1),
(22, 'Belize', 'BZ', 'BLZ', 1),
(23, 'Benin', 'BJ', 'BEN', 1),
(24, 'Bermuda', 'BM', 'BMU', 1),
(25, 'Bhutan', 'BT', 'BTN', 1),
(26, 'Bolivia', 'BO', 'BOL', 1),
(27, 'Bosnia and Herzegowina', 'BA', 'BIH', 1),
(28, 'Botswana', 'BW', 'BWA', 1),
(29, 'Bouvet Island', 'BV', 'BVT', 1),
(30, 'Brazil', 'BR', 'BRA', 1),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 1),
(32, 'Brunei Darussalam', 'BN', 'BRN', 1),
(33, 'Bulgaria', 'BG', 'BGR', 1),
(34, 'Burkina Faso', 'BF', 'BFA', 1),
(35, 'Burundi', 'BI', 'BDI', 1),
(36, 'Cambodia', 'KH', 'KHM', 1),
(37, 'Cameroon', 'CM', 'CMR', 1),
(38, 'Canada', 'CA', 'CAN', 1),
(39, 'Cape Verde', 'CV', 'CPV', 1),
(40, 'Cayman Islands', 'KY', 'CYM', 1),
(41, 'Central African Republic', 'CF', 'CAF', 1),
(42, 'Chad', 'TD', 'TCD', 1),
(43, 'Chile', 'CL', 'CHL', 1),
(44, 'China', 'CN', 'CHN', 1),
(45, 'Christmas Island', 'CX', 'CXR', 1),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', 1),
(47, 'Colombia', 'CO', 'COL', 1),
(48, 'Comoros', 'KM', 'COM', 1),
(49, 'Congo', 'CG', 'COG', 1),
(50, 'Cook Islands', 'CK', 'COK', 1),
(51, 'Costa Rica', 'CR', 'CRI', 1),
(52, 'Cote D''Ivoire', 'CI', 'CIV', 1),
(53, 'Croatia', 'HR', 'HRV', 1),
(54, 'Cuba', 'CU', 'CUB', 1),
(55, 'Cyprus', 'CY', 'CYP', 1),
(56, 'Czech Republic', 'CZ', 'CZE', 1),
(57, 'Denmark', 'DK', 'DNK', 1),
(58, 'Djibouti', 'DJ', 'DJI', 1),
(59, 'Dominica', 'DM', 'DMA', 1),
(60, 'Dominican Republic', 'DO', 'DOM', 1),
(61, 'East Timor', 'TP', 'TMP', 1),
(62, 'Ecuador', 'EC', 'ECU', 1),
(63, 'Egypt', 'EG', 'EGY', 1),
(64, 'El Salvador', 'SV', 'SLV', 1),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 1),
(66, 'Eritrea', 'ER', 'ERI', 1),
(67, 'Estonia', 'EE', 'EST', 1),
(68, 'Ethiopia', 'ET', 'ETH', 1),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 1),
(70, 'Faroe Islands', 'FO', 'FRO', 1),
(71, 'Fiji', 'FJ', 'FJI', 1),
(72, 'Finland', 'FI', 'FIN', 1),
(73, 'France', 'FR', 'FRA', 1),
(74, 'France, Metropolitan', 'FX', 'FXX', 1),
(75, 'French Guiana', 'GF', 'GUF', 1),
(76, 'French Polynesia', 'PF', 'PYF', 1),
(77, 'French Southern Territories', 'TF', 'ATF', 1),
(78, 'Gabon', 'GA', 'GAB', 1),
(79, 'Gambia', 'GM', 'GMB', 1),
(80, 'Georgia', 'GE', 'GEO', 1),
(81, 'Germany', 'DE', 'DEU', 5),
(82, 'Ghana', 'GH', 'GHA', 1),
(83, 'Gibraltar', 'GI', 'GIB', 1),
(84, 'Greece', 'GR', 'GRC', 1),
(85, 'Greenland', 'GL', 'GRL', 1),
(86, 'Grenada', 'GD', 'GRD', 1),
(87, 'Guadeloupe', 'GP', 'GLP', 1),
(88, 'Guam', 'GU', 'GUM', 1),
(89, 'Guatemala', 'GT', 'GTM', 1),
(90, 'Guinea', 'GN', 'GIN', 1),
(91, 'Guinea-bissau', 'GW', 'GNB', 1),
(92, 'Guyana', 'GY', 'GUY', 1),
(93, 'Haiti', 'HT', 'HTI', 1),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD', 1),
(95, 'Honduras', 'HN', 'HND', 1),
(96, 'Hong Kong', 'HK', 'HKG', 1),
(97, 'Hungary', 'HU', 'HUN', 1),
(98, 'Iceland', 'IS', 'ISL', 1),
(99, 'India', 'IN', 'IND', 1),
(100, 'Indonesia', 'ID', 'IDN', 1),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', 1),
(102, 'Iraq', 'IQ', 'IRQ', 1),
(103, 'Ireland', 'IE', 'IRL', 1),
(104, 'Israel', 'IL', 'ISR', 1),
(105, 'Italy', 'IT', 'ITA', 1),
(106, 'Jamaica', 'JM', 'JAM', 1),
(107, 'Japan', 'JP', 'JPN', 1),
(108, 'Jordan', 'JO', 'JOR', 1),
(109, 'Kazakhstan', 'KZ', 'KAZ', 1),
(110, 'Kenya', 'KE', 'KEN', 1),
(111, 'Kiribati', 'KI', 'KIR', 1),
(112, 'Korea, Democratic People''s Republic of', 'KP', 'PRK', 1),
(113, 'Korea, Republic of', 'KR', 'KOR', 1),
(114, 'Kuwait', 'KW', 'KWT', 1),
(115, 'Kyrgyzstan', 'KG', 'KGZ', 1),
(116, 'Lao People''s Democratic Republic', 'LA', 'LAO', 1),
(117, 'Latvia', 'LV', 'LVA', 1),
(118, 'Lebanon', 'LB', 'LBN', 1),
(119, 'Lesotho', 'LS', 'LSO', 1),
(120, 'Liberia', 'LR', 'LBR', 1),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 1),
(122, 'Liechtenstein', 'LI', 'LIE', 1),
(123, 'Lithuania', 'LT', 'LTU', 1),
(124, 'Luxembourg', 'LU', 'LUX', 1),
(125, 'Macau', 'MO', 'MAC', 1),
(126, 'Macedonia, The Former Yugoslav Republic of', 'MK', 'MKD', 1),
(127, 'Madagascar', 'MG', 'MDG', 1),
(128, 'Malawi', 'MW', 'MWI', 1),
(129, 'Malaysia', 'MY', 'MYS', 1),
(130, 'Maldives', 'MV', 'MDV', 1),
(131, 'Mali', 'ML', 'MLI', 1),
(132, 'Malta', 'MT', 'MLT', 1),
(133, 'Marshall Islands', 'MH', 'MHL', 1),
(134, 'Martinique', 'MQ', 'MTQ', 1),
(135, 'Mauritania', 'MR', 'MRT', 1),
(136, 'Mauritius', 'MU', 'MUS', 1),
(137, 'Mayotte', 'YT', 'MYT', 1),
(138, 'Mexico', 'MX', 'MEX', 1),
(139, 'Micronesia, Federated States of', 'FM', 'FSM', 1),
(140, 'Moldova, Republic of', 'MD', 'MDA', 1),
(141, 'Monaco', 'MC', 'MCO', 1),
(142, 'Mongolia', 'MN', 'MNG', 1),
(143, 'Montserrat', 'MS', 'MSR', 1),
(144, 'Morocco', 'MA', 'MAR', 1),
(145, 'Mozambique', 'MZ', 'MOZ', 1),
(146, 'Myanmar', 'MM', 'MMR', 1),
(147, 'Namibia', 'NA', 'NAM', 1),
(148, 'Nauru', 'NR', 'NRU', 1),
(149, 'Nepal', 'NP', 'NPL', 1),
(150, 'Netherlands', 'NL', 'NLD', 1),
(151, 'Netherlands Antilles', 'AN', 'ANT', 1),
(152, 'New Caledonia', 'NC', 'NCL', 1),
(153, 'New Zealand', 'NZ', 'NZL', 1),
(154, 'Nicaragua', 'NI', 'NIC', 1),
(155, 'Niger', 'NE', 'NER', 1),
(156, 'Nigeria', 'NG', 'NGA', 1),
(157, 'Niue', 'NU', 'NIU', 1),
(158, 'Norfolk Island', 'NF', 'NFK', 1),
(159, 'Northern Mariana Islands', 'MP', 'MNP', 1),
(160, 'Norway', 'NO', 'NOR', 1),
(161, 'Oman', 'OM', 'OMN', 1),
(162, 'Pakistan', 'PK', 'PAK', 1),
(163, 'Palau', 'PW', 'PLW', 1),
(164, 'Panama', 'PA', 'PAN', 1),
(165, 'Papua New Guinea', 'PG', 'PNG', 1),
(166, 'Paraguay', 'PY', 'PRY', 1),
(167, 'Peru', 'PE', 'PER', 1),
(168, 'Philippines', 'PH', 'PHL', 1),
(169, 'Pitcairn', 'PN', 'PCN', 1),
(170, 'Poland', 'PL', 'POL', 1),
(171, 'Portugal', 'PT', 'PRT', 1),
(172, 'Puerto Rico', 'PR', 'PRI', 1),
(173, 'Qatar', 'QA', 'QAT', 1),
(174, 'Reunion', 'RE', 'REU', 1),
(175, 'Romania', 'RO', 'ROM', 1),
(176, 'Russian Federation', 'RU', 'RUS', 1),
(177, 'Rwanda', 'RW', 'RWA', 1),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA', 1),
(179, 'Saint Lucia', 'LC', 'LCA', 1),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1),
(181, 'Samoa', 'WS', 'WSM', 1),
(182, 'San Marino', 'SM', 'SMR', 1),
(183, 'Sao Tome and Principe', 'ST', 'STP', 1),
(184, 'Saudi Arabia', 'SA', 'SAU', 1),
(185, 'Senegal', 'SN', 'SEN', 1),
(186, 'Seychelles', 'SC', 'SYC', 1),
(187, 'Sierra Leone', 'SL', 'SLE', 1),
(188, 'Singapore', 'SG', 'SGP', 4),
(189, 'Slovakia (Slovak Republic)', 'SK', 'SVK', 1),
(190, 'Slovenia', 'SI', 'SVN', 1),
(191, 'Solomon Islands', 'SB', 'SLB', 1),
(192, 'Somalia', 'SO', 'SOM', 1),
(193, 'South Africa', 'ZA', 'ZAF', 1),
(194, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 1),
(195, 'Spain', 'ES', 'ESP', 3),
(196, 'Sri Lanka', 'LK', 'LKA', 1),
(197, 'St. Helena', 'SH', 'SHN', 1),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM', 1),
(199, 'Sudan', 'SD', 'SDN', 1),
(200, 'Suriname', 'SR', 'SUR', 1),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', 1),
(202, 'Swaziland', 'SZ', 'SWZ', 1),
(203, 'Sweden', 'SE', 'SWE', 1),
(204, 'Switzerland', 'CH', 'CHE', 1),
(205, 'Syrian Arab Republic', 'SY', 'SYR', 1),
(206, 'Taiwan', 'TW', 'TWN', 1),
(207, 'Tajikistan', 'TJ', 'TJK', 1),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA', 1),
(209, 'Thailand', 'TH', 'THA', 1),
(210, 'Togo', 'TG', 'TGO', 1),
(211, 'Tokelau', 'TK', 'TKL', 1),
(212, 'Tonga', 'TO', 'TON', 1),
(213, 'Trinidad and Tobago', 'TT', 'TTO', 1),
(214, 'Tunisia', 'TN', 'TUN', 1),
(215, 'Turkey', 'TR', 'TUR', 1),
(216, 'Turkmenistan', 'TM', 'TKM', 1),
(217, 'Turks and Caicos Islands', 'TC', 'TCA', 1),
(218, 'Tuvalu', 'TV', 'TUV', 1),
(219, 'Uganda', 'UG', 'UGA', 1),
(220, 'Ukraine', 'UA', 'UKR', 1),
(221, 'United Arab Emirates', 'AE', 'ARE', 1),
(222, 'United Kingdom', 'GB', 'GBR', 1),
(223, 'United States', 'US', 'USA', 2),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI', 1),
(225, 'Uruguay', 'UY', 'URY', 1),
(226, 'Uzbekistan', 'UZ', 'UZB', 1),
(227, 'Vanuatu', 'VU', 'VUT', 1),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT', 1),
(229, 'Venezuela', 'VE', 'VEN', 1),
(230, 'Viet Nam', 'VN', 'VNM', 1),
(231, 'Virgin Islands (British)', 'VG', 'VGB', 1),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', 1),
(234, 'Western Sahara', 'EH', 'ESH', 1),
(235, 'Yemen', 'YE', 'YEM', 1),
(236, 'Yugoslavia', 'YU', 'YUG', 1),
(237, 'Zaire', 'ZR', 'ZAR', 1),
(238, 'Zambia', 'ZM', 'ZMB', 1),
(239, 'Zimbabwe', 'ZW', 'ZWE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE IF NOT EXISTS `currencies` (
  `currencies_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `code` char(3) NOT NULL,
  `symbol_left` varchar(12) DEFAULT NULL,
  `symbol_right` varchar(12) DEFAULT NULL,
  `decimal_point` char(1) DEFAULT NULL,
  `thousands_point` char(1) DEFAULT NULL,
  `decimal_places` char(1) DEFAULT NULL,
  `value` float(13,8) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`currencies_id`),
  KEY `idx_currencies_code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`currencies_id`, `title`, `code`, `symbol_left`, `symbol_right`, `decimal_point`, `thousands_point`, `decimal_places`, `value`, `last_updated`) VALUES
(1, 'U.S. Dollar', 'USD', '$', '', '.', ',', '2', 1.00000000, '2011-08-25 10:44:46'),
(2, 'Euro', 'EUR', '', 'â‚¬', '.', ',', '2', 1.00000000, '2011-08-25 10:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customers_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_gender` char(1) DEFAULT NULL,
  `customers_firstname` varchar(255) NOT NULL,
  `customers_lastname` varchar(255) NOT NULL,
  `customers_dob` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `customers_email_address` varchar(255) NOT NULL,
  `customers_email_confirm_address` varchar(64) NOT NULL,
  `reseller_number` varchar(64) NOT NULL,
  `customers_default_address_id` int(11) DEFAULT NULL,
  `customers_telephone` varchar(255) NOT NULL,
  `customers_fax` varchar(255) DEFAULT NULL,
  `customers_password` varchar(60) NOT NULL,
  `customers_newsletter` char(1) DEFAULT NULL,
  PRIMARY KEY (`customers_id`),
  KEY `idx_customers_email_address` (`customers_email_address`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `customers_gender`, `customers_firstname`, `customers_lastname`, `customers_dob`, `customers_email_address`, `customers_email_confirm_address`, `reseller_number`, `customers_default_address_id`, `customers_telephone`, `customers_fax`, `customers_password`, `customers_newsletter`) VALUES
(1, 'm', 'pradeep', 'kumar', '2011-08-25 00:00:00', 'pradeep@w3csolutions.com', '', '', 1, '111111', '1111', '$P$DfXSgUdnp6ZuQYBXKztLSYDnb2QE82.', ''),
(2, '', 'pradeep', 'kumar', '2011-08-25 00:00:00', 'pradeep1@w3csolutions.com', 'pradeep1@w3csolutions.com', '234566', 2, '111111', '', '$P$D3YaQ./S3ysqVYBADGHVWppeSvXWBY.', ''),
(3, 'f', 'ajit', 'kumar', '0199-10-12 00:00:00', 'ajit@w3csolutions.com', 'ajit@w3csolutions.com', '123456', 3, '1234567489', '', '$P$Dj8bYDnC8OVSI4RvbQBsvTC6oUikLF1', ''),
(4, 'm', 'Joe', 'Nguyen', '1980-01-01 00:00:00', 'josephn@fastlam.com', 'josephn@fastlam.com', '', 4, '123-456-1234', '', '$P$DaXCQZRGpRF8xH7Ii19MFbjIrTeHMJ/', '1'),
(5, '', 'ajit', 'sdfsdfsdfd', '1989-05-10 00:00:00', 'brajesh@w3csolutions.com', 'brajesh@w3csolutions.com', '11111', 5, '9990228081', '', '$P$DnpEMAm9ziy0CVJj.pU16sWcRco8Jb1', ''),
(6, '', 'ishwar', 'sdffds', '1990-10-12 00:00:00', 'gaurav@w3csolutions.com', 'gaurav@w3csolutions.com', '123456', 6, '1234567489', '', '$P$Dt09TUfIf85yUqZxEVZvEKRPHvHKIe1', ''),
(7, '', 'ishwar', 'kumar', '1989-05-10 00:00:00', 'ajit@gmail.com', 'ajit@gmail.com', '123456', 7, '1234567489', '', '$P$DxpNSxmeHTb1M4uitcBfRU361iA/B/.', ''),
(8, '', 'ajit', 'kumar', '1989-05-10 00:00:00', 'brajesh@gmail.com', 'brajesh@gmail.com', '123456', 8, '1234567489', '', '$P$DmqW2gV3AnuI9WYxRyBvyQM95G.c1u1', ''),
(9, '', 'ishwar', 'sfsfgsd', '1989-05-10 00:00:00', 'ajit12@gmail.com', 'ajit12@gmail.com', '123456', 9, '1223345553', '', '$P$DKyUAwHYe3Xc/EzJvjg41TrrwFtN/p/', ''),
(10, '', 'god', 'kumar', '1989-05-10 00:00:00', 'ajits@gmail.com', 'ajits@gmail.com', '123456', 10, '1234567489', '', '$P$DW.UQGEw3W8GzNTgTZWR5SAyZd8Grs1', ''),
(11, 'm', 'mj', 'aragon', '1986-03-07 00:00:00', 'michaeljohn@lifepharmglobal.com', 'michaeljohn@lifepharmglobal.com', '', 11, '949-216-9600', '', '$P$DknSTftb9ML6JM8mS1PgacK5r7bhrt.', ''),
(12, '', 'yo', 'mama', '1980-01-01 00:00:00', 'info@dpi.net', 'info@dpi.net', '', 12, '1234567890', '', '$P$Dy9Bdl72mKod3xqfczGyZgZOXDJFUu.', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers_basket`
--

CREATE TABLE IF NOT EXISTS `customers_basket` (
  `customers_basket_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL,
  `products_id` tinytext NOT NULL,
  `customers_basket_quantity` int(2) NOT NULL,
  `final_price` decimal(15,4) DEFAULT NULL,
  `customers_basket_date_added` char(8) DEFAULT NULL,
  `img_str` varchar(255) NOT NULL,
  PRIMARY KEY (`customers_basket_id`),
  KEY `idx_customers_basket_customers_id` (`customers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `customers_basket`
--

INSERT INTO `customers_basket` (`customers_basket_id`, `customers_id`, `products_id`, `customers_basket_quantity`, `final_price`, `customers_basket_date_added`, `img_str`) VALUES
(9, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 1, NULL, '20111031', ''),
(10, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}84', 2, NULL, '20111031', ''),
(11, 4, '34{14}41{1}60{12}35{7}68{13}38{6}32{2}67', 1, NULL, '20111031', ''),
(12, 12, '30{14}41{1}27{12}33{11}24{7}28{13}38{6}32', 1, NULL, '20111031', ''),
(13, 12, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 1, NULL, '20111031', ''),
(14, 3, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 2, NULL, '20111101', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers_basket_attributes`
--

CREATE TABLE IF NOT EXISTS `customers_basket_attributes` (
  `customers_basket_attributes_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL,
  `products_id` tinytext NOT NULL,
  `products_options_id` int(11) NOT NULL,
  `products_options_value_id` int(11) NOT NULL,
  PRIMARY KEY (`customers_basket_attributes_id`),
  KEY `idx_customers_basket_att_customers_id` (`customers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `customers_basket_attributes`
--

INSERT INTO `customers_basket_attributes` (`customers_basket_attributes_id`, `customers_id`, `products_id`, `products_options_id`, `products_options_value_id`) VALUES
(56, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 1, 27),
(57, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 15, 53),
(58, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 12, 36),
(59, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 7, 52),
(60, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 13, 38),
(61, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 6, 18),
(62, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 2, 43),
(63, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}84', 1, 27),
(64, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}84', 15, 53),
(65, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}84', 12, 36),
(66, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}84', 7, 52),
(67, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}84', 13, 38),
(68, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}84', 6, 18),
(69, 4, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}84', 2, 84),
(70, 4, '34{14}41{1}60{12}35{7}68{13}38{6}32{2}67', 14, 41),
(71, 4, '34{14}41{1}60{12}35{7}68{13}38{6}32{2}67', 1, 60),
(72, 4, '34{14}41{1}60{12}35{7}68{13}38{6}32{2}67', 12, 35),
(73, 4, '34{14}41{1}60{12}35{7}68{13}38{6}32{2}67', 7, 68),
(74, 4, '34{14}41{1}60{12}35{7}68{13}38{6}32{2}67', 13, 38),
(75, 4, '34{14}41{1}60{12}35{7}68{13}38{6}32{2}67', 6, 32),
(76, 4, '34{14}41{1}60{12}35{7}68{13}38{6}32{2}67', 2, 67),
(77, 12, '30{14}41{1}27{12}33{11}24{7}28{13}38{6}32', 14, 41),
(78, 12, '30{14}41{1}27{12}33{11}24{7}28{13}38{6}32', 1, 27),
(79, 12, '30{14}41{1}27{12}33{11}24{7}28{13}38{6}32', 12, 33),
(80, 12, '30{14}41{1}27{12}33{11}24{7}28{13}38{6}32', 11, 24),
(81, 12, '30{14}41{1}27{12}33{11}24{7}28{13}38{6}32', 7, 28),
(82, 12, '30{14}41{1}27{12}33{11}24{7}28{13}38{6}32', 13, 38),
(83, 12, '30{14}41{1}27{12}33{11}24{7}28{13}38{6}32', 6, 32),
(84, 12, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 1, 27),
(85, 12, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 15, 53),
(86, 12, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 12, 36),
(87, 12, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 7, 52),
(88, 12, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 13, 38),
(89, 12, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 6, 18),
(90, 12, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 2, 43),
(91, 3, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 1, 27),
(92, 3, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 15, 53),
(93, 3, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 12, 36),
(94, 3, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 7, 52),
(95, 3, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 13, 38),
(96, 3, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 6, 18),
(97, 3, '29{1}27{15}53{12}36{7}52{13}38{6}18{2}43', 2, 43);

-- --------------------------------------------------------

--
-- Table structure for table `customers_info`
--

CREATE TABLE IF NOT EXISTS `customers_info` (
  `customers_info_id` int(11) NOT NULL,
  `customers_info_date_of_last_logon` datetime DEFAULT NULL,
  `customers_info_number_of_logons` int(5) DEFAULT NULL,
  `customers_info_date_account_created` datetime DEFAULT NULL,
  `customers_info_date_account_last_modified` datetime DEFAULT NULL,
  `global_product_notifications` int(1) DEFAULT '0',
  PRIMARY KEY (`customers_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_info`
--

INSERT INTO `customers_info` (`customers_info_id`, `customers_info_date_of_last_logon`, `customers_info_number_of_logons`, `customers_info_date_account_created`, `customers_info_date_account_last_modified`, `global_product_notifications`) VALUES
(1, NULL, 0, '2011-08-25 12:42:03', NULL, 0),
(2, NULL, 0, '2011-08-26 12:31:05', NULL, 0),
(3, '2011-11-01 01:37:00', 6, '2011-10-12 03:20:20', '2011-10-12 03:27:50', 0),
(4, '2011-10-31 15:25:04', 5, '2011-10-20 09:16:00', '2011-10-21 15:09:30', 0),
(5, NULL, 0, '2011-10-21 03:11:08', NULL, 0),
(6, NULL, 0, '2011-10-21 06:29:22', NULL, 0),
(7, NULL, 0, '2011-10-21 06:35:22', NULL, 0),
(8, NULL, 0, '2011-10-21 06:44:51', NULL, 0),
(9, NULL, 0, '2011-10-21 07:14:51', NULL, 0),
(10, NULL, 0, '2011-10-21 09:12:54', NULL, 0),
(11, '2011-10-26 15:25:48', 1, '2011-10-26 09:55:11', '2011-10-26 09:56:48', 0),
(12, '2011-10-31 15:27:37', 1, '2011-10-31 15:26:46', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `geo_zones`
--

CREATE TABLE IF NOT EXISTS `geo_zones` (
  `geo_zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `geo_zone_name` varchar(32) NOT NULL,
  `geo_zone_description` varchar(255) NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`geo_zone_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `geo_zones`
--

INSERT INTO `geo_zones` (`geo_zone_id`, `geo_zone_name`, `geo_zone_description`, `last_modified`, `date_added`) VALUES
(1, 'Texas', 'Florida local sales tax zone', '2011-10-31 15:15:31', '2011-08-25 10:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `languages_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `code` char(2) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `directory` varchar(32) DEFAULT NULL,
  `sort_order` int(3) DEFAULT NULL,
  PRIMARY KEY (`languages_id`),
  KEY `IDX_LANGUAGES_NAME` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`languages_id`, `name`, `code`, `image`, `directory`, `sort_order`) VALUES
(1, 'English', 'en', 'icon.gif', 'english', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE IF NOT EXISTS `manufacturers` (
  `manufacturers_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturers_name` varchar(32) NOT NULL,
  `manufacturers_image` varchar(64) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`manufacturers_id`),
  KEY `IDX_MANUFACTURERS_NAME` (`manufacturers_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturers_id`, `manufacturers_name`, `manufacturers_image`, `date_added`, `last_modified`) VALUES
(1, 'Matrox', 'manufacturer_matrox.gif', '2011-08-25 10:44:46', NULL),
(2, 'Microsoft', 'manufacturer_microsoft.gif', '2011-08-25 10:44:46', NULL),
(3, 'Warner', 'manufacturer_warner.gif', '2011-08-25 10:44:46', NULL),
(4, 'Fox', 'manufacturer_fox.gif', '2011-08-25 10:44:46', NULL),
(5, 'Logitech', 'manufacturer_logitech.gif', '2011-08-25 10:44:46', NULL),
(6, 'Canon', 'manufacturer_canon.gif', '2011-08-25 10:44:46', NULL),
(7, 'Sierra', 'manufacturer_sierra.gif', '2011-08-25 10:44:46', NULL),
(8, 'GT Interactive', 'manufacturer_gt_interactive.gif', '2011-08-25 10:44:46', NULL),
(9, 'Hewlett Packard', 'manufacturer_hewlett_packard.gif', '2011-08-25 10:44:46', NULL),
(10, 'Samsung', 'manufacturer_samsung.png', '2011-08-25 10:44:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers_info`
--

CREATE TABLE IF NOT EXISTS `manufacturers_info` (
  `manufacturers_id` int(11) NOT NULL,
  `languages_id` int(11) NOT NULL,
  `manufacturers_url` varchar(255) NOT NULL,
  `url_clicked` int(5) NOT NULL DEFAULT '0',
  `date_last_click` datetime DEFAULT NULL,
  PRIMARY KEY (`manufacturers_id`,`languages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers_info`
--

INSERT INTO `manufacturers_info` (`manufacturers_id`, `languages_id`, `manufacturers_url`, `url_clicked`, `date_last_click`) VALUES
(1, 1, 'http://www.matrox.com', 0, NULL),
(2, 1, 'http://www.microsoft.com', 0, NULL),
(3, 1, 'http://www.warner.com', 0, NULL),
(4, 1, 'http://www.fox.com', 0, NULL),
(5, 1, 'http://www.logitech.com', 0, NULL),
(6, 1, 'http://www.canon.com', 0, NULL),
(7, 1, 'http://www.sierra.com', 0, NULL),
(8, 1, 'http://www.infogrames.com', 0, NULL),
(9, 1, 'http://www.hewlettpackard.com', 0, NULL),
(10, 1, 'http://www.samsung.com', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
  `newsletters_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `module` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_sent` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `locked` int(1) DEFAULT '0',
  PRIMARY KEY (`newsletters_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `newsletters`
--


-- --------------------------------------------------------

--
-- Table structure for table `newsletter_user`
--

CREATE TABLE IF NOT EXISTS `newsletter_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `newsletter_user`
--

INSERT INTO `newsletter_user` (`id`, `name`, `email`) VALUES
(8, 'Abhishek Awasthi', 'abhishekawasthi01@gmail.com'),
(9, 'abhishejkaaaaaaaaaaaaa', 'abhishek111111@w3csolutions.com'),
(10, 'sdlfkl', 'askljfa@asfijas.com'),
(11, '', 'das'),
(12, 'test', 'test@test.com'),
(13, 'webster@e', 'sales@webstergy.com'),
(14, 'Test', 'jolanwong@hotmail.com'),
(16, '', ''),
(17, '', 'pradeep@w3csolutions.com'),
(18, '', 'yret@gfsg.com'),
(19, '', 'info@dpi.net'),
(20, '', 'ajit@w3csolutions.com'),
(21, '', 'josephn@fastlam.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orders_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL,
  `customers_name` varchar(255) NOT NULL,
  `customers_company` varchar(255) DEFAULT NULL,
  `customers_street_address` varchar(255) NOT NULL,
  `customers_suburb` varchar(255) DEFAULT NULL,
  `customers_city` varchar(255) NOT NULL,
  `customers_postcode` varchar(255) NOT NULL,
  `customers_state` varchar(255) DEFAULT NULL,
  `customers_country` varchar(255) NOT NULL,
  `customers_telephone` varchar(255) NOT NULL,
  `customers_email_address` varchar(255) NOT NULL,
  `customers_address_format_id` int(5) NOT NULL,
  `delivery_name` varchar(255) NOT NULL,
  `delivery_company` varchar(255) DEFAULT NULL,
  `delivery_street_address` varchar(255) NOT NULL,
  `delivery_suburb` varchar(255) DEFAULT NULL,
  `delivery_city` varchar(255) NOT NULL,
  `delivery_postcode` varchar(255) NOT NULL,
  `delivery_state` varchar(255) DEFAULT NULL,
  `delivery_country` varchar(255) NOT NULL,
  `delivery_address_format_id` int(5) NOT NULL,
  `billing_name` varchar(255) NOT NULL,
  `billing_company` varchar(255) DEFAULT NULL,
  `billing_street_address` varchar(255) NOT NULL,
  `billing_suburb` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_postcode` varchar(255) NOT NULL,
  `billing_state` varchar(255) DEFAULT NULL,
  `billing_country` varchar(255) NOT NULL,
  `billing_address_format_id` int(5) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `cc_type` varchar(20) DEFAULT NULL,
  `cc_owner` varchar(255) DEFAULT NULL,
  `cc_number` varchar(32) DEFAULT NULL,
  `cc_expires` varchar(4) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_status` int(5) NOT NULL,
  `orders_date_finished` datetime DEFAULT NULL,
  `currency` char(3) DEFAULT NULL,
  `currency_value` decimal(14,6) DEFAULT NULL,
  PRIMARY KEY (`orders_id`),
  KEY `idx_orders_customers_id` (`customers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `customers_id`, `customers_name`, `customers_company`, `customers_street_address`, `customers_suburb`, `customers_city`, `customers_postcode`, `customers_state`, `customers_country`, `customers_telephone`, `customers_email_address`, `customers_address_format_id`, `delivery_name`, `delivery_company`, `delivery_street_address`, `delivery_suburb`, `delivery_city`, `delivery_postcode`, `delivery_state`, `delivery_country`, `delivery_address_format_id`, `billing_name`, `billing_company`, `billing_street_address`, `billing_suburb`, `billing_city`, `billing_postcode`, `billing_state`, `billing_country`, `billing_address_format_id`, `payment_method`, `cc_type`, `cc_owner`, `cc_number`, `cc_expires`, `last_modified`, `date_purchased`, `orders_status`, `orders_date_finished`, `currency`, `currency_value`) VALUES
(1, 1, 'pradeep kumar', 'w3c', 'aaaaa', '123', 'delhi', '22222', 'delhi', 'India', '111111', 'pradeep@w3csolutions.com', 1, 'pradeep kumar', 'w3c', 'aaaaa', '123', 'delhi', '22222', 'delhi', 'India', 1, 'pradeep kumar', 'w3c', 'aaaaa', '123', 'delhi', '22222', 'delhi', 'India', 1, 'Cash on Delivery', '', '', '', '', NULL, '2011-08-25 12:48:15', 1, NULL, 'USD', '1.000000'),
(2, 1, 'pradeep kumar', 'w3c', 'aaaaa', '123', 'delhi', '22222', 'delhi', 'India', '111111', 'pradeep@w3csolutions.com', 1, 'pradeep kumar', 'w3c', 'aaaaa', '123', 'delhi', '22222', 'delhi', 'India', 1, 'pradeep kumar', 'w3c', 'aaaaa', '123', 'delhi', '22222', 'delhi', 'India', 1, 'PayPal (including Credit and Debit Cards)', '', '', '', '', NULL, '2011-08-25 12:49:29', 5, NULL, 'USD', '1.000000'),
(3, 3, 'ajit kumar', 'w3c', 'delhi', 'delhi', 'delhi', '110024', 'delhi', 'India', '1234567489', 'ajit@w3csolutions.com', 1, 'ajit kumar', 'w3c', 'delhi', 'delhi', 'delhi', '110024', 'delhi', 'India', 1, 'ajit kumar', 'w3c', 'delhi', 'delhi', 'delhi', '110024', 'delhi', 'India', 1, 'Cash on Delivery', '', '', '', '', NULL, '2011-10-28 01:07:28', 1, NULL, 'USD', '1.000000'),
(4, 3, 'ajit kumar', 'w3c', 'delhi', 'delhi', 'delhi', '110024', 'delhi', 'India', '1234567489', 'ajit@w3csolutions.com', 1, 'ajit kumar', 'w3c', 'delhi', 'delhi', 'delhi', '110024', 'delhi', 'India', 1, 'ajit kumar', 'w3c', 'delhi', 'delhi', 'delhi', '110024', 'delhi', 'India', 1, 'Cash on Delivery', '', '', '', '', NULL, '2011-10-29 06:30:38', 1, NULL, 'USD', '1.000000');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE IF NOT EXISTS `orders_products` (
  `orders_products_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `products_model` varchar(12) DEFAULT NULL,
  `products_name` varchar(64) NOT NULL,
  `products_price` decimal(15,4) NOT NULL,
  `final_price` decimal(15,4) NOT NULL,
  `products_tax` decimal(7,4) NOT NULL,
  `products_quantity` int(2) NOT NULL,
  PRIMARY KEY (`orders_products_id`),
  KEY `idx_orders_products_orders_id` (`orders_id`),
  KEY `idx_orders_products_products_id` (`products_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`orders_products_id`, `orders_id`, `products_id`, `products_model`, `products_name`, `products_price`, `final_price`, `products_tax`, `products_quantity`) VALUES
(1, 1, 21, 'PC-SWAT3', 'SWAT 3: Close Quarters Battle', '79.9900', '79.9900', '0.0000', 1),
(2, 2, 23, 'PC-TWOF', 'The Wheel Of Time', '99.9900', '99.9900', '0.0000', 1),
(3, 3, 32, '', 'Bookmark', '0.0000', '-108.0000', '0.0000', 2),
(4, 3, 29, '', 'banner', '20.0000', '-33.8700', '0.0000', 2),
(5, 4, 29, '', 'banner', '20.0000', '-33.8700', '0.0000', 4),
(6, 4, 30, '', 'Booklet', '0.0000', '-726.3500', '0.0000', 2),
(7, 4, 33, '', 'Brochures', '0.0000', '0.0000', '0.0000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_products_attributes`
--

CREATE TABLE IF NOT EXISTS `orders_products_attributes` (
  `orders_products_attributes_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL,
  `orders_products_id` int(11) NOT NULL,
  `products_options` varchar(32) NOT NULL,
  `products_options_values` varchar(32) NOT NULL,
  `options_values_price` decimal(15,4) NOT NULL,
  `price_prefix` char(1) NOT NULL,
  PRIMARY KEY (`orders_products_attributes_id`),
  KEY `idx_orders_products_att_orders_id` (`orders_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `orders_products_attributes`
--

INSERT INTO `orders_products_attributes` (`orders_products_attributes_id`, `orders_id`, `orders_products_id`, `products_options`, `products_options_values`, `options_values_price`, `price_prefix`) VALUES
(1, 3, 3, 'Color', 'Color Front/Color Back', '0.0000', ''),
(2, 3, 3, 'Lead Time', '4 Days', '0.0000', ''),
(3, 3, 3, 'Paper', '14pt Coated 2 Sides', '0.0000', ''),
(4, 3, 3, 'Proof Type', 'E-mail .pdf Proof-(Free)', '0.0000', ''),
(5, 3, 3, 'Quantity', '250', '0.0000', ''),
(6, 3, 3, 'Size', '1.5" x 7"', '108.0000', ''),
(7, 3, 4, 'Color', 'Front Color,Back Color', '0.0000', ''),
(8, 3, 4, 'Grommets', 'No', '0.0000', ''),
(9, 3, 4, 'Lead Time', '8 Days', '0.0000', ''),
(10, 3, 4, 'Paper', '13 mil Vinyl', '0.0000', ''),
(11, 3, 4, 'Proof Type', 'E-mail .pdf Proof-(Free)', '0.0000', ''),
(12, 3, 4, 'Quantity', '1', '0.0000', ''),
(13, 3, 4, 'Size', '36"x 48"', '53.8700', ''),
(14, 4, 5, 'Color', 'Front Color,Back Color', '0.0000', ''),
(15, 4, 5, 'Grommets', 'No', '0.0000', ''),
(16, 4, 5, 'Lead Time', '8 Days', '0.0000', ''),
(17, 4, 5, 'Paper', '13 mil Vinyl', '0.0000', ''),
(18, 4, 5, 'Proof Type', 'E-mail .pdf Proof-(Free)', '0.0000', ''),
(19, 4, 5, 'Quantity', '1', '0.0000', ''),
(20, 4, 5, 'Size', '36"x 48"', '53.8700', ''),
(21, 4, 6, 'Aqueous Coating', 'No', '0.0000', ''),
(22, 4, 6, 'Color', 'Front Color,Back Color', '0.0000', ''),
(23, 4, 6, 'Lead Time', '7 Days', '0.0000', ''),
(24, 4, 6, 'Pages', '8 Pages', '726.3500', ''),
(25, 4, 6, 'Paper', '80# Gloss Text', '0.0000', ''),
(26, 4, 6, 'Proof Type', 'E-mail .pdf Proof-(Free)', '0.0000', ''),
(27, 4, 6, 'Quantity', '250', '0.0000', ''),
(28, 4, 7, 'Aqueous Coating', 'No', '0.0000', ''),
(29, 4, 7, 'Color', 'Color Front/Color Back', '0.0000', ''),
(30, 4, 7, 'Lead Time', '5 Days', '0.0000', ''),
(31, 4, 7, 'Paper', '80# Gloss Text', '0.0000', ''),
(32, 4, 7, 'Proof Type', 'E-mail .pdf Proof-(Free)', '0.0000', ''),
(33, 4, 7, 'Quantity', '250', '0.0000', ''),
(34, 4, 7, 'Size', '8.5" x 11"', '0.0000', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products_download`
--

CREATE TABLE IF NOT EXISTS `orders_products_download` (
  `orders_products_download_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL DEFAULT '0',
  `orders_products_id` int(11) NOT NULL DEFAULT '0',
  `orders_products_filename` varchar(255) NOT NULL DEFAULT '',
  `download_maxdays` int(2) NOT NULL DEFAULT '0',
  `download_count` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`orders_products_download_id`),
  KEY `idx_orders_products_download_orders_id` (`orders_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders_products_download`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders_status`
--

CREATE TABLE IF NOT EXISTS `orders_status` (
  `orders_status_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `orders_status_name` varchar(32) NOT NULL,
  `public_flag` int(11) DEFAULT '1',
  `downloads_flag` int(11) DEFAULT '0',
  PRIMARY KEY (`orders_status_id`,`language_id`),
  KEY `idx_orders_status_name` (`orders_status_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_status`
--

INSERT INTO `orders_status` (`orders_status_id`, `language_id`, `orders_status_name`, `public_flag`, `downloads_flag`) VALUES
(1, 1, 'Pending', 1, 0),
(2, 1, 'Processing', 1, 1),
(3, 1, 'Delivered', 1, 1),
(4, 1, 'PayPal [Transactions]', 0, 0),
(5, 1, 'Preparing [PayPal Standard]', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders_status_history`
--

CREATE TABLE IF NOT EXISTS `orders_status_history` (
  `orders_status_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL,
  `orders_status_id` int(5) NOT NULL,
  `date_added` datetime NOT NULL,
  `customer_notified` int(1) DEFAULT '0',
  `comments` text,
  PRIMARY KEY (`orders_status_history_id`),
  KEY `idx_orders_status_history_orders_id` (`orders_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders_status_history`
--

INSERT INTO `orders_status_history` (`orders_status_history_id`, `orders_id`, `orders_status_id`, `date_added`, `customer_notified`, `comments`) VALUES
(1, 1, 1, '2011-08-25 12:48:15', 1, ''),
(2, 3, 1, '2011-10-28 01:07:28', 1, ''),
(3, 4, 1, '2011-10-29 06:30:38', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_total`
--

CREATE TABLE IF NOT EXISTS `orders_total` (
  `orders_total_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `value` decimal(15,4) NOT NULL,
  `class` varchar(32) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`orders_total_id`),
  KEY `idx_orders_total_orders_id` (`orders_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `orders_total`
--

INSERT INTO `orders_total` (`orders_total_id`, `orders_id`, `title`, `text`, `value`, `class`, `sort_order`) VALUES
(1, 1, 'Sub-Total:', '$79.99', '79.9900', 'ot_subtotal', 1),
(2, 1, 'Flat Rate (Best Way):', '$5.00', '5.0000', 'ot_shipping', 2),
(3, 1, 'Total:', '<strong>$84.99</strong>', '84.9900', 'ot_total', 4),
(4, 2, 'Sub-Total:', '$99.99', '99.9900', 'ot_subtotal', 1),
(5, 2, 'Flat Rate (Best Way):', '$5.00', '5.0000', 'ot_shipping', 2),
(6, 2, 'Total:', '<strong>$104.99</strong>', '104.9900', 'ot_total', 4),
(7, 3, 'Sub-Total:', '$-283.74', '-283.7400', 'ot_subtotal', 1),
(8, 3, 'Flat Rate (Best Way):', '$5.00', '5.0000', 'ot_shipping', 2),
(9, 3, 'Total:', '<strong>$-278.74</strong>', '-278.7400', 'ot_total', 4),
(10, 4, 'Sub-Total:', '$-1,588.18', '-1588.1800', 'ot_subtotal', 1),
(11, 4, 'Flat Rate (Best Way):', '$5.00', '5.0000', 'ot_shipping', 2),
(12, 4, 'Total:', '<strong>$-1,583.18</strong>', '-1583.1800', 'ot_total', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_quantity` int(4) NOT NULL,
  `products_model` varchar(12) DEFAULT NULL,
  `products_image` varchar(64) DEFAULT NULL,
  `products_price` decimal(15,4) NOT NULL,
  `products_date_added` datetime NOT NULL,
  `products_last_modified` datetime DEFAULT NULL,
  `products_date_available` datetime DEFAULT NULL,
  `products_weight` decimal(5,2) NOT NULL,
  `products_status` tinyint(1) NOT NULL,
  `products_tax_class_id` int(11) NOT NULL,
  `manufacturers_id` int(11) DEFAULT NULL,
  `products_ordered` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_id`),
  KEY `idx_products_model` (`products_model`),
  KEY `idx_products_date_added` (`products_date_added`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_quantity`, `products_model`, `products_image`, `products_price`, `products_date_added`, `products_last_modified`, `products_date_available`, `products_weight`, `products_status`, `products_tax_class_id`, `manufacturers_id`, `products_ordered`) VALUES
(29, -6, '', '2279.jpg', '23.0000', '2011-08-26 15:44:06', '2011-11-17 07:17:07', NULL, '0.00', 1, 0, 0, 6),
(30, -2, '', 'Booklet_large.gif', '0.0000', '2011-10-21 05:02:45', '2011-10-28 08:20:15', NULL, '0.00', 1, 0, 0, 2),
(32, -2, '', '170.jpg', '0.0000', '2011-10-25 07:19:53', '2011-10-28 03:28:17', NULL, '0.00', 1, 0, 0, 2),
(33, -1, '', '246.jpg', '0.0000', '2011-10-25 08:07:07', '2011-10-27 23:16:57', NULL, '0.00', 1, 0, 0, 1),
(34, 0, '', 'BusinessCard_large.gif', '0.0000', '2011-10-27 01:20:26', '2011-10-28 08:22:37', NULL, '0.00', 1, 0, 0, 0),
(35, 0, '', 'calendar_large.gif', '0.0000', '2011-10-27 01:31:27', '2011-10-28 08:28:16', NULL, '0.00', 1, 0, 0, 0),
(36, 0, '', 'doorhanger_large.gif', '0.0000', '2011-10-27 01:40:59', '2011-10-27 01:42:52', NULL, '0.00', 1, 0, 0, 0),
(37, 0, '', 'envelope_large.gif', '0.0000', '2011-10-27 01:50:13', '2011-10-28 08:31:08', NULL, '0.00', 1, 0, 0, 0),
(38, 0, '', '482.jpg', '0.0000', '2011-10-27 02:04:45', '2011-10-27 02:22:47', NULL, '0.00', 1, 0, 0, 0),
(39, 0, '', 'GCH_102_1.jpg', '0.0000', '2011-10-27 06:56:46', '2011-10-27 07:03:46', NULL, '0.00', 1, 0, 0, 0),
(40, 0, '', 'letterhead_large.jpg', '0.0000', '2011-10-27 07:12:12', '2011-10-27 07:13:23', NULL, '0.00', 1, 0, 0, 0),
(41, 0, '', 'postcard-4-0.jpg', '0.0000', '2011-10-27 07:24:22', NULL, NULL, '0.00', 1, 0, 0, 0),
(42, 0, '', 'posters_large.jpg', '0.0000', '2011-10-27 07:52:17', '2011-10-27 07:52:42', NULL, '0.00', 1, 0, 0, 0),
(43, 0, '', '135_BN.jpg', '0.0000', '2011-10-27 08:05:18', NULL, NULL, '0.00', 1, 0, 0, 0),
(44, 0, '', 'BC_1.jpg', '0.0000', '2011-10-27 08:15:22', '2011-10-27 08:16:56', NULL, '0.00', 1, 0, 0, 0),
(45, 0, '', '43.jpg', '0.0000', '2011-10-27 08:34:57', '2011-10-28 09:07:37', NULL, '0.00', 1, 0, 0, 0),
(46, 0, '', '410.jpg', '0.0000', '2011-10-27 08:46:21', '2011-10-28 09:05:39', NULL, '0.00', 1, 0, 0, 0),
(47, 0, '', 'printable-greeting-button.jpg', '0.0000', '2011-10-27 09:01:38', '2011-10-27 09:02:22', NULL, '0.00', 1, 0, 0, 0),
(48, 0, '', '2307.jpg', '0.0000', '2011-10-27 23:08:16', NULL, NULL, '0.00', 1, 0, 0, 0),
(49, 0, '', '246.jpg', '0.0000', '2011-10-27 23:16:22', NULL, NULL, '0.00', 1, 0, 0, 0),
(50, 0, '', 'BusinessCard_large.gif', '0.0000', '2011-10-27 23:23:27', '2011-10-28 08:25:15', NULL, '0.00', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE IF NOT EXISTS `products_attributes` (
  `products_attributes_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  `options_values_id` int(11) NOT NULL,
  `options_values_price` decimal(15,4) NOT NULL,
  `price_prefix` char(1) NOT NULL,
  `products_options_sort_order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_attributes_id`),
  KEY `idx_products_attributes_products_id` (`products_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=342 ;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`products_attributes_id`, `products_id`, `options_id`, `options_values_id`, `options_values_price`, `price_prefix`, `products_options_sort_order`) VALUES
(5, 29, 2, 43, '53.8700', '+', 0),
(6, 29, 2, 44, '60.0000', '+', 0),
(7, 29, 2, 45, '65.0000', '+', 0),
(8, 29, 2, 46, '70.0000', '+', 0),
(9, 29, 2, 47, '74.0000', '+', 0),
(10, 29, 2, 48, '76.0000', '+', 0),
(11, 29, 2, 49, '80.0000', '+', 0),
(12, 29, 2, 50, '77.0700', '+', 0),
(13, 29, 2, 51, '73.0800', '+', 0),
(14, 29, 7, 52, '0.0000', '+', 0),
(15, 29, 15, 53, '0.0000', '+', 0),
(16, 29, 15, 54, '0.0000', '+', 0),
(17, 29, 6, 18, '0.0000', '+', 0),
(18, 29, 12, 36, '0.0000', '+', 0),
(19, 29, 12, 33, '0.0000', '+', 0),
(20, 29, 12, 34, '0.0000', '+', 0),
(21, 29, 13, 38, '0.0000', '+', 0),
(22, 29, 13, 38, '0.0000', '+', 0),
(23, 29, 13, 39, '0.0000', '+', 0),
(24, 29, 13, 40, '75.0000', '+', 0),
(25, 29, 1, 27, '10.0000', '+', 0),
(26, 30, 11, 24, '726.3500', '', 0),
(27, 30, 11, 25, '1083.0000', '', 0),
(28, 30, 11, 26, '2323.7200', '', 0),
(29, 30, 1, 27, '0.0000', '', 0),
(30, 30, 7, 28, '0.0000', '', 0),
(31, 30, 7, 30, '0.0000', '', 0),
(32, 30, 7, 31, '0.0000', '', 0),
(33, 30, 7, 29, '0.0000', '', 0),
(34, 30, 6, 32, '0.0000', '', 0),
(35, 30, 12, 33, '0.0000', '', 0),
(36, 30, 13, 38, '0.0000', '', 0),
(37, 30, 13, 39, '0.0000', '', 0),
(38, 30, 13, 40, '0.0000', '', 0),
(39, 30, 14, 41, '0.0000', '', 0),
(40, 32, 2, 56, '108.0000', '', 0),
(41, 32, 2, 57, '125.0000', '', 0),
(42, 32, 2, 58, '101.6800', '', 0),
(43, 32, 1, 60, '0.0000', '', 0),
(44, 32, 1, 59, '0.0000', '', 0),
(45, 32, 1, 27, '0.0000', '', 0),
(46, 32, 7, 61, '0.0000', '', 0),
(47, 32, 6, 32, '0.0000', '', 0),
(48, 32, 12, 62, '0.0000', '', 0),
(49, 32, 13, 38, '0.0000', '', 0),
(50, 32, 13, 39, '0.0000', '', 0),
(51, 32, 13, 40, '0.0000', '', 0),
(52, 33, 2, 63, '0.0000', '', 0),
(53, 33, 2, 64, '0.0000', '', 0),
(54, 33, 2, 65, '0.0000', '', 0),
(55, 33, 1, 60, '0.0000', '', 0),
(56, 33, 1, 59, '0.0000', '', 0),
(57, 33, 1, 27, '0.0000', '', 0),
(58, 33, 7, 28, '0.0000', '', 0),
(59, 33, 7, 30, '0.0000', '', 0),
(60, 33, 7, 31, '0.0000', '', 0),
(61, 33, 7, 29, '0.0000', '', 0),
(62, 33, 6, 32, '0.0000', '', 0),
(63, 33, 12, 35, '0.0000', '', 0),
(64, 33, 13, 38, '0.0000', '', 0),
(65, 33, 13, 39, '0.0000', '', 0),
(66, 33, 13, 40, '0.0000', '', 0),
(67, 33, 14, 41, '0.0000', '', 0),
(68, 34, 2, 67, '0.0000', '', 0),
(69, 34, 1, 60, '0.0000', '+', 0),
(70, 34, 1, 59, '0.0000', '', 0),
(71, 34, 1, 27, '0.0000', '', 0),
(72, 34, 7, 68, '0.0000', '', 0),
(73, 34, 6, 32, '0.0000', '', 0),
(74, 34, 12, 35, '0.0000', '', 0),
(75, 34, 12, 62, '0.0000', '', 0),
(76, 34, 12, 94, '0.0000', '', 0),
(77, 34, 13, 38, '0.0000', '', 0),
(78, 34, 13, 39, '0.0000', '', 0),
(79, 34, 13, 40, '0.0000', '', 0),
(80, 34, 14, 41, '0.0000', '', 0),
(81, 35, 2, 78, '0.0000', '', 0),
(82, 35, 2, 79, '0.0000', '', 0),
(83, 35, 1, 60, '0.0000', '', 0),
(84, 35, 1, 59, '0.0000', '', 0),
(85, 35, 1, 27, '0.0000', '', 0),
(86, 35, 7, 29, '0.0000', '', 0),
(87, 35, 6, 32, '0.0000', '', 0),
(88, 35, 12, 33, '0.0000', '', 0),
(89, 35, 12, 34, '0.0000', '', 0),
(90, 35, 13, 38, '0.0000', '', 0),
(91, 35, 13, 39, '0.0000', '', 0),
(92, 35, 13, 40, '0.0000', '', 0),
(93, 35, 14, 41, '0.0000', '', 0),
(94, 36, 2, 80, '0.0000', '', 0),
(95, 36, 2, 81, '0.0000', '', 0),
(96, 36, 1, 60, '0.0000', '', 0),
(97, 36, 1, 59, '0.0000', '', 0),
(98, 36, 1, 27, '0.0000', '', 0),
(99, 36, 7, 82, '0.0000', '', 0),
(100, 36, 6, 83, '0.0000', '', 0),
(101, 36, 12, 33, '0.0000', '', 0),
(102, 36, 12, 34, '0.0000', '', 0),
(103, 36, 13, 38, '0.0000', '', 0),
(104, 36, 13, 39, '0.0000', '', 0),
(105, 36, 13, 40, '0.0000', '', 0),
(106, 36, 14, 41, '0.0000', '', 0),
(107, 37, 2, 84, '0.0000', '', 0),
(108, 37, 1, 85, '0.0000', '', 0),
(109, 37, 1, 86, '0.0000', '', 0),
(110, 37, 7, 87, '0.0000', '', 0),
(111, 37, 6, 32, '0.0000', '', 0),
(112, 37, 12, 33, '0.0000', '', 0),
(113, 37, 12, 34, '0.0000', '', 0),
(114, 37, 12, 35, '0.0000', '', 0),
(115, 37, 13, 38, '0.0000', '', 0),
(116, 37, 13, 39, '0.0000', '', 0),
(117, 37, 13, 40, '0.0000', '', 0),
(118, 38, 2, 63, '0.0000', '', 0),
(119, 38, 2, 64, '0.0000', '', 0),
(120, 38, 2, 65, '0.0000', '', 0),
(121, 38, 1, 60, '0.0000', '', 0),
(122, 38, 1, 59, '0.0000', '', 0),
(123, 38, 1, 27, '0.0000', '', 0),
(124, 38, 7, 28, '0.0000', '', 0),
(125, 38, 7, 31, '0.0000', '', 0),
(126, 38, 7, 30, '0.0000', '', 0),
(127, 38, 7, 29, '0.0000', '', 0),
(128, 38, 16, 88, '0.0000', '', 0),
(129, 38, 16, 89, '0.0000', '', 0),
(130, 38, 16, 90, '0.0000', '', 0),
(131, 38, 16, 91, '0.0000', '', 0),
(132, 38, 16, 92, '0.0000', '', 0),
(133, 38, 6, 32, '0.0000', '', 0),
(134, 38, 12, 35, '0.0000', '', 0),
(135, 38, 12, 62, '0.0000', '', 0),
(136, 38, 12, 66, '0.0000', '', 0),
(137, 38, 13, 38, '0.0000', '', 0),
(138, 38, 13, 39, '0.0000', '', 0),
(139, 38, 13, 40, '0.0000', '', 0),
(140, 38, 14, 41, '0.0000', '', 0),
(141, 39, 2, 95, '0.0000', '', 0),
(142, 39, 2, 96, '0.0000', '', 0),
(143, 39, 2, 97, '0.0000', '', 0),
(144, 39, 1, 27, '0.0000', '', 0),
(145, 39, 1, 60, '0.0000', '', 0),
(146, 39, 1, 59, '0.0000', '', 0),
(147, 39, 7, 82, '0.0000', '', 0),
(148, 39, 7, 82, '0.0000', '', 0),
(149, 39, 6, 69, '0.0000', '', 0),
(150, 39, 12, 33, '0.0000', '', 0),
(151, 39, 12, 34, '0.0000', '', 0),
(152, 39, 12, 35, '0.0000', '', 0),
(153, 39, 13, 38, '0.0000', '', 0),
(154, 39, 13, 39, '0.0000', '', 0),
(155, 39, 13, 40, '0.0000', '', 0),
(156, 40, 2, 63, '0.0000', '', 0),
(157, 40, 1, 59, '0.0000', '', 0),
(158, 40, 1, 60, '0.0000', '', 0),
(159, 40, 1, 27, '0.0000', '', 0),
(160, 40, 7, 98, '0.0000', '', 0),
(161, 40, 7, 99, '0.0000', '', 0),
(162, 40, 7, 100, '0.0000', '', 0),
(163, 40, 6, 32, '0.0000', '', 0),
(164, 40, 12, 33, '0.0000', '', 0),
(165, 40, 13, 38, '0.0000', '', 0),
(166, 40, 13, 39, '0.0000', '', 0),
(167, 40, 13, 40, '0.0000', '', 0),
(168, 40, 14, 41, '0.0000', '', 0),
(169, 41, 2, 81, '0.0000', '', 0),
(170, 41, 2, 96, '0.0000', '', 0),
(171, 41, 2, 103, '0.0000', '', 0),
(172, 41, 2, 104, '0.0000', '', 0),
(173, 41, 2, 105, '0.0000', '', 0),
(174, 41, 1, 27, '0.0000', '', 0),
(175, 41, 1, 59, '0.0000', '', 0),
(176, 41, 1, 60, '0.0000', '', 0),
(177, 41, 7, 29, '0.0000', '', 0),
(178, 41, 7, 82, '0.0000', '', 0),
(179, 41, 6, 69, '0.0000', '', 0),
(180, 41, 12, 33, '0.0000', '', 0),
(181, 41, 12, 34, '0.0000', '', 0),
(182, 41, 13, 38, '0.0000', '', 0),
(183, 41, 13, 39, '0.0000', '', 0),
(184, 41, 13, 40, '0.0000', '', 0),
(185, 41, 14, 41, '0.0000', '', 0),
(186, 42, 2, 65, '0.0000', '', 0),
(187, 42, 2, 106, '0.0000', '', 0),
(188, 42, 2, 43, '0.0000', '', 0),
(189, 42, 1, 27, '0.0000', '', 0),
(190, 42, 1, 60, '0.0000', '', 0),
(191, 42, 1, 59, '0.0000', '', 0),
(192, 42, 7, 28, '0.0000', '', 0),
(193, 42, 7, 30, '0.0000', '', 0),
(194, 42, 7, 31, '0.0000', '', 0),
(195, 42, 7, 29, '0.0000', '', 0),
(196, 42, 6, 32, '0.0000', '', 0),
(197, 42, 12, 35, '0.0000', '', 0),
(198, 42, 12, 62, '0.0000', '', 0),
(199, 42, 12, 66, '0.0000', '', 0),
(200, 42, 13, 38, '0.0000', '', 0),
(201, 42, 13, 39, '0.0000', '', 0),
(202, 42, 13, 40, '0.0000', '', 0),
(203, 43, 2, 65, '0.0000', '', 0),
(204, 43, 2, 106, '0.0000', '', 0),
(205, 43, 1, 108, '0.0000', '', 0),
(206, 43, 1, 110, '0.0000', '', 0),
(207, 43, 7, 107, '0.0000', '', 0),
(208, 43, 17, 111, '0.0000', '', 0),
(209, 43, 17, 112, '0.0000', '', 0),
(210, 43, 17, 113, '0.0000', '', 0),
(211, 43, 18, 117, '0.0000', '', 0),
(212, 43, 18, 116, '0.0000', '', 0),
(213, 43, 18, 121, '0.0000', '', 0),
(214, 43, 18, 115, '0.0000', '', 0),
(215, 43, 18, 118, '0.0000', '', 0),
(216, 43, 18, 120, '0.0000', '', 0),
(217, 43, 18, 119, '0.0000', '', 0),
(218, 43, 18, 114, '0.0000', '', 0),
(219, 43, 18, 122, '0.0000', '', 0),
(220, 43, 6, 32, '0.0000', '', 0),
(221, 43, 12, 127, '0.0000', '', 0),
(222, 43, 13, 38, '0.0000', '', 0),
(223, 43, 13, 39, '0.0000', '', 0),
(224, 43, 13, 40, '0.0000', '', 0),
(225, 44, 2, 124, '0.0000', '', 0),
(226, 44, 1, 27, '0.0000', '', 0),
(227, 44, 1, 60, '0.0000', '', 0),
(228, 44, 1, 59, '0.0000', '', 0),
(230, 44, 19, 126, '0.0000', '', 0),
(231, 44, 6, 32, '0.0000', '', 0),
(232, 44, 12, 127, '0.0000', '', 0),
(233, 44, 12, 37, '0.0000', '', 0),
(234, 44, 12, 36, '0.0000', '', 0),
(235, 44, 13, 38, '0.0000', '', 0),
(236, 44, 13, 39, '0.0000', '', 0),
(237, 44, 13, 39, '0.0000', '', 0),
(238, 44, 13, 40, '0.0000', '', 0),
(239, 44, 14, 41, '0.0000', '', 0),
(240, 45, 2, 123, '0.0000', '', 0),
(241, 45, 1, 27, '0.0000', '', 0),
(242, 45, 1, 59, '0.0000', '', 0),
(243, 45, 1, 60, '0.0000', '', 0),
(244, 45, 7, 28, '0.0000', '', 0),
(245, 45, 7, 29, '0.0000', '', 0),
(246, 45, 7, 30, '0.0000', '', 0),
(247, 45, 7, 31, '0.0000', '', 0),
(248, 45, 6, 32, '0.0000', '', 0),
(249, 45, 12, 35, '0.0000', '', 0),
(250, 45, 12, 62, '0.0000', '', 0),
(251, 45, 13, 38, '0.0000', '', 0),
(252, 45, 13, 39, '0.0000', '', 0),
(253, 45, 13, 40, '0.0000', '', 0),
(254, 45, 14, 41, '0.0000', '', 0),
(255, 46, 2, 63, '0.0000', '', 0),
(256, 46, 2, 64, '0.0000', '', 0),
(257, 46, 2, 65, '0.0000', '', 0),
(258, 46, 1, 27, '0.0000', '', 0),
(259, 46, 1, 59, '0.0000', '', 0),
(260, 46, 1, 60, '0.0000', '', 0),
(261, 46, 7, 28, '0.0000', '', 0),
(262, 46, 7, 31, '0.0000', '', 0),
(263, 46, 7, 30, '0.0000', '', 0),
(264, 46, 7, 29, '0.0000', '', 0),
(265, 46, 16, 88, '0.0000', '', 0),
(266, 46, 16, 89, '0.0000', '', 0),
(267, 46, 16, 90, '0.0000', '', 0),
(268, 46, 16, 91, '0.0000', '', 0),
(269, 46, 16, 92, '0.0000', '', 0),
(270, 46, 6, 32, '0.0000', '', 0),
(271, 46, 12, 35, '0.0000', '', 0),
(272, 46, 12, 93, '0.0000', '', 0),
(273, 46, 12, 94, '0.0000', '', 0),
(274, 46, 13, 38, '0.0000', '', 0),
(275, 46, 13, 39, '0.0000', '', 0),
(276, 46, 13, 40, '0.0000', '', 0),
(277, 46, 14, 41, '0.0000', '', 0),
(278, 47, 2, 128, '0.0000', '', 0),
(279, 47, 1, 27, '0.0000', '', 0),
(280, 47, 1, 59, '0.0000', '', 0),
(281, 47, 1, 60, '0.0000', '', 0),
(282, 47, 1, 60, '0.0000', '', 0),
(283, 47, 7, 82, '0.0000', '', 0),
(284, 47, 7, 29, '0.0000', '', 0),
(285, 47, 6, 101, '0.0000', '', 0),
(286, 47, 12, 33, '0.0000', '', 0),
(287, 47, 12, 34, '0.0000', '', 0),
(288, 47, 13, 38, '0.0000', '', 0),
(289, 47, 13, 39, '0.0000', '', 0),
(290, 47, 13, 40, '0.0000', '', 0),
(291, 47, 14, 41, '0.0000', '', 0),
(292, 48, 2, 129, '0.0000', '', 0),
(293, 48, 2, 130, '0.0000', '', 0),
(294, 48, 2, 106, '0.0000', '', 0),
(295, 48, 2, 43, '0.0000', '', 0),
(296, 48, 2, 44, '0.0000', '', 0),
(297, 48, 2, 48, '0.0000', '', 0),
(298, 48, 1, 27, '0.0000', '', 0),
(299, 48, 1, 60, '0.0000', '', 0),
(300, 48, 1, 59, '0.0000', '', 0),
(301, 48, 7, 131, '0.0000', '', 0),
(302, 48, 20, 132, '0.0000', '', 0),
(303, 48, 20, 133, '0.0000', '', 0),
(304, 48, 6, 101, '0.0000', '', 0),
(305, 48, 12, 36, '0.0000', '', 0),
(306, 48, 12, 33, '0.0000', '', 0),
(307, 48, 12, 34, '0.0000', '', 0),
(308, 48, 13, 38, '0.0000', '', 0),
(309, 48, 13, 39, '0.0000', '', 0),
(310, 48, 13, 40, '0.0000', '', 0),
(311, 49, 2, 63, '0.0000', '', 0),
(312, 49, 2, 64, '0.0000', '', 0),
(313, 49, 2, 65, '0.0000', '', 0),
(314, 49, 1, 27, '0.0000', '', 0),
(315, 49, 1, 59, '0.0000', '', 0),
(316, 49, 1, 60, '0.0000', '', 0),
(317, 49, 7, 28, '0.0000', '', 0),
(318, 49, 7, 30, '0.0000', '', 0),
(319, 49, 7, 31, '0.0000', '', 0),
(320, 49, 7, 29, '0.0000', '', 0),
(321, 49, 6, 32, '0.0000', '', 0),
(322, 49, 12, 35, '0.0000', '', 0),
(323, 49, 13, 38, '0.0000', '', 0),
(324, 49, 13, 39, '0.0000', '', 0),
(325, 49, 13, 40, '0.0000', '', 0),
(326, 49, 14, 41, '0.0000', '', 0),
(327, 50, 2, 67, '0.0000', '', 0),
(328, 50, 1, 27, '0.0000', '', 0),
(329, 50, 1, 59, '0.0000', '', 0),
(330, 50, 1, 60, '0.0000', '', 0),
(331, 50, 7, 68, '0.0000', '', 0),
(332, 50, 6, 32, '0.0000', '', 0),
(333, 50, 12, 35, '0.0000', '', 0),
(334, 50, 12, 62, '0.0000', '', 0),
(335, 50, 12, 94, '0.0000', '', 0),
(336, 50, 13, 38, '0.0000', '', 0),
(337, 50, 13, 39, '0.0000', '', 0),
(338, 50, 13, 40, '0.0000', '', 0),
(339, 50, 14, 41, '0.0000', '', 0),
(340, 29, 2, 84, '0.0000', '+', 0),
(341, 30, 14, 84, '0.0000', '+', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes_download`
--

CREATE TABLE IF NOT EXISTS `products_attributes_download` (
  `products_attributes_id` int(11) NOT NULL,
  `products_attributes_filename` varchar(255) NOT NULL DEFAULT '',
  `products_attributes_maxdays` int(2) DEFAULT '0',
  `products_attributes_maxcount` int(2) DEFAULT '0',
  PRIMARY KEY (`products_attributes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_attributes_download`
--

INSERT INTO `products_attributes_download` (`products_attributes_id`, `products_attributes_filename`, `products_attributes_maxdays`, `products_attributes_maxcount`) VALUES
(26, 'unreal.zip', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products_description`
--

CREATE TABLE IF NOT EXISTS `products_description` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_name` varchar(64) NOT NULL DEFAULT '',
  `products_description` text,
  `products_url` varchar(255) DEFAULT NULL,
  `products_viewed` int(5) DEFAULT '0',
  PRIMARY KEY (`products_id`,`language_id`),
  KEY `products_name` (`products_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `products_description`
--

INSERT INTO `products_description` (`products_id`, `language_id`, `products_name`, `products_description`, `products_url`, `products_viewed`) VALUES
(29, 1, 'Banners', '<br/><br/><h3>Custom Banner Printing</h3><br/><br/>\r\n\r\nFrom advertising banners to outdoor banners, we have the banner printing options you need to get the results you want for your vinyl banners. Price and place your banner printing order easily and quickly online or work with our experienced vinyl banners experts via phone, email and online chat. No matter how you work with us, youâ€™ll find the materials, sizes and features that give you the best possible banner printing value.<br/><br/>\r\n\r\n<h3>Custom Banner Printing â€“ Big Benefits!</h3><br/><br/>\r\n\r\nHelping you get the best value for your banner printing project is what we do best. We use direct to vinyl printing which eliminates the need for costly, environmentally unsafe lamination. Direct to vinyl printing costs you less and helps you do something positive for the environment.<br/><br/>\r\n\r\n \r\n\r\nOur vinyl banners are printed on a very special material. Weâ€™ve selected a 13 oz material with edges that are so cleanly cut that no hemming is required. Weâ€™ve also automated our grommet affixing equipment to get tighter stitching done much faster on all vinyl banners. As a result, we use far less labor to finish your vinyl banners and we pass the lower costs on to you.<br/><br/>\r\n\r\n \r\n\r\nWhile we can do custom banner printing sizes, we simplify the order process for you by offering fast-ordering of the most popular sizes. Youâ€™ll get our fastest turnaround and best banner printing prices on: 2 x 6â€™, 3â€™ x 5â€™ and 4.5â€™ x 10â€™ vinyl banners.<br/><br/>\r\n\r\n \r\n\r\n<h3>Custom Banner Printing - Resources and Design Services</h3><br/><br/>\r\n\r\nNeed a material swatch or some expert advice? Our customer service team is ready to share all of their banner printing expertise with you, right now!<br/><br/>\r\n\r\n \r\n\r\nNeed help with your next banner printing design? We can help! Our design services team has the experience you need for designing advertising banners and all types of outdoor banners. For a small fee, our team will work with you to provide all of the design help you need with your vinyl banners project.<br/><br/>\r\n\r\n \r\nMy1Stop.com is the online and offline source for banner printing. We have the best values in advertising banners, outdoor banners and vinyl banners', '', 150),
(30, 1, 'Booklet', '<h3>Booklet Printing - Product Details</h3><br/><br/>\r\n\r\nDpi.net makes quick work of your booklet printing project with instant online pricing, secure ordering and simplified artwork uploading. From 4 to 48 pages, our standard booklet printing is done on 8 1/2" x 11" matte or gloss stock in 80# or 100# weights. Count on us for fast 12 day standard turnaround and faster options for booklet printing services when needed.<br/><br/>\r\n\r\nHere''s the best part about doing your booklet printing with Dpi.net Â®: our booklet printing is done on better than photo quality covers. Choose the same high quality color or crisp black and white for internal pages. We don''t stop there. If you''re looking for custom booklet printing sizes or binding options, we can help. Just contact us with your unique requirements and we''ll help you to create custom booklets that are tailored to your needs.', '', 33),
(32, 1, 'Bookmark', '<br/><br/><h3>Bookmark Printing - Details</h3><br/>\r\n\r\nHigh quality, full color bookmarks are a great way to promote your company, products, schools, churches and events. Dpi.net offers many different options to give your next custom bookmark printing project a professional look. Not only can you choose a size color option best for your bookmark printing project, you get aqueous coating included with your price!<br/><br/>\r\n\r\nCustom bookmarks are available in various quantities, starting as low as 250 pieces. If you need to add hole punching, or other specialty options, to your full color bookmarks, we can provide you a custom quote quickly. Just contact our customer service team for your next custom bookmark project.<br/><br/>\r\n\r\n<h3>Bookmark Printing â€“ Applications</h3><br/>\r\n\r\nBookmark printing can be used in every industry. Although custom bookmarks are obviously associated with reading, do not be surprised if you see them on a refrigerator, tacked up on a bulletin board or placed in a purse or wallet. Here are some great uses and benefits for investing in bookmark printing:<br/><br/>\r\n\r\n   <b> 1 : - </b> Retail Businesses â€“ Use your full color bookmarks for coupons, promotions and special events. Add a fun image with your logo on the front and a great promotion on the back<br/><br/>\r\n    <b> 2 : - </b> Churches and Youth Groups â€“ What a great way to encourage your followers to keep their bible close to their heart. Design a beautiful, custom bookmark including bible verses or inspiration words<br/><br/>\r\n   <b> 3 : - </b>  Educational Facilities â€“ custom bookmark printing with your school information and mascot to hand out during orientation or the first day of school<br/><br/>\r\n   <b> 4 : - </b>  Sports and Recreation â€“ hand out full color bookmarks complete with a schedule of upcoming games on the back. Donâ€™t be surprised if they stay in a wallet or purse<br/><br/>\r\n    <b> 5 : - </b> Special Events/ Trade Shows â€“ Get your business out there by using custom bookmark printing to add to a gift bag, information folder or just a handout', '', 31),
(33, 1, 'Brochures', '<br/><br/><h3>Brochure Printing â€“ Product Details</h3><br/>\r\n\r\nAt Dpi.net Â®, we have the options you need to make your brochures printing project stand out from the crowd. For starters, choose to print brochures in full eye-catching, photo quality, color. Combine your brochure artwork with our material selections to get just the right look. Print brochures in your choice of 80# or 100# text or cover stock. Print brochures with any fold you need, from trifold brochures printing, to gatefold brochures printing and accordion fold brochures printing.<br/><br/>\r\n\r\n \r\n\r\nWhichever discount brochure printing material you select, our photo quality printing is done in your choice of discount brochure printing sizes. Print brochures in 8.5" x 11", 8.5" x 14" and 11" x 17" sizes. Let us know If your brochures printing project calls for a non standard size. We can print brochures in virtually any size on almost any discount brochure printing material. Folding custom trifold brochures, gatefold brochures, and accordion fold brochures is something we do with excellence. Contact us when youâ€™re ready to custom print brochures!', '', 14),
(34, 1, 'Business Cards', '<br/><br/>\r\n<h3>Paper Business Cards - Product Details</h3><br/><br/>\r\n\r\n\r\n\r\nDpi.net knows paper business cards are a great way to impress your contacts. They can provide contact information or promote a new product by advertising on the back of the business card.  Premium business cards are a gateway to both new business and promote your company image. You can print premium business cards starting at quantities as low as 250 pieces. Dpi.net also offers full color, photo quality printing, standard, on all of your premium business cards.<br/><br/>\r\n<h3>Paper Business Cards - Custom Design Services</h3><br/><br/>\r\n\r\n\r\nDpi.net realizes design is a very important aspect of premium business cards.  We have a graphic design team specializing in designing custom marketing materials that will grab your viewer''s attention. They can help give you design ideas that set you apart and give your organization a true professional look and feel.<br/><br/>\r\n\r\n \r\n\r\n<b>Request Custom Graphic Design Services for Business Cards</b><br/><br/>\r\n\r\n \r\n\r\nDpi.net is your leading provider for paper business cards. We offer full color, premium business cards at a low cost, without sacrificing quality or service.<br/><br/>', '', 18),
(35, 1, 'Calendar', '<br/><br/>\r\n<h3>Custom Calendars - The 12 Month Promotion</h3><br/><br/>\r\n\r\nWell designed, well targeted custom calendars can outlive their intended 12 month life span. We have the options to make that happen for you. We start by printing your custom calendars in true digital photo quality. Our premium papers, 100# gloss cover and text, will display the images on your custom calendars accurately. Our standard custom calendars papers will last far longer than the â€œstandardâ€ papers used by other calendar suppliers. Dpi.net also gives you options that help you provide the best format and the right starting date for your custom calendars target audience. We give you two formats for custom calendars; year at glance and a seven page format that folds to provide 12 monthly pages and a front and back cover. We can also start the date range for your custom calendars for any date you choose. We also offer personalized calendars and calendar magnets. Just contact our customer service team to learn more about any of our calendar printing solutions.<br/><br/>\r\n\r\n \r\n<h4>Custom Calendars â€“ Whatâ€™s The Right Format For Me?</h4><br/><br/>\r\n\r\nChoosing the right format for your custom calendars can seem a daunting task. Here are some insights that our customers have provided to us as they consider which custom calendars format to go with.<br/><br/>\r\n\r\n    <b>The Year-At-A-Glance Format</b><br/><br/>\r\n    This is an economical, eco-friendly, poster sized promotional opportunity. The trick is to come up with an image â€“ or a montage of images â€“ that are highly relevant to the recipient or to the buyer. No small task. To get the best results, really refine the definition of your target audience. As you do so, youâ€™ll probably find that multiple versions of your custom calendars will be the most effective approach in keeping your message viable for 12 months â€“ or more. Younger buyers gravitate toward this format.<br/><br/>\r\n    <b>The Month-Per-Page View Format</b><br/><br/>\r\n    Traditional and effective. This custom calendars format is easier to target to broader demographic groups. Why? Because you get 12 to 14 shots at grabbing their attention. Of course, it takes 7 pages printed on both sides to do so â€“ and that adds a lot of cost to your printing ,and possibly to image licensing. If you have a broad target audience, the right budget and a good gallery of images, this custom calendars format is tried and true.<br/><br/>\r\n\r\n<h3>Custom Calendars - Resources</h3><br/><br/>\r\n\r\nOur customer service team is the best customer calendars resource we can offer.  We also offer free design templates for our two formats of custom calendars. If you find yourself needing design help, we have a design services team who can provide their custom calendars expertise to your needs for a modest fee.', '', 16),
(36, 1, 'Door Hangers', '<br/><br/>\r\n<h3>Door Hangers - Get The Word Out!</h3><br/><br/>\r\n\r\nDoor hangers are a fast, effective and an economical way to promote a message, organization or event. From real estate door knob hangers to hotel â€œdo not disturbâ€ door hangers, we have the fastest turnaround with most options youâ€™ll find anywhere. Our turnaround time is just 7 days â€“ 6 if you need it â€“ for all standard door hangers. We also offer many types of shipping methods to make sure your printed door hangers arrive on time. We pump up the effectiveness of your campaign by giving you the door hanger printing options that fit your message and your budget. Our pricing includes full color digital printing on coated 10pt thick stockâ€“ giving you the best possible product for your artwork on an economical and sturdy material.  To help you stay within the economic realities of your budget, we offer low minimum quantities, generous volume discounts and our promise to provide the best value possible on all of the door hangers that you print with us.<br/><br/>\r\n\r\n<h4>Door Hangers - Popular Use</h4><br/><br/>\r\n\r\nHere are some of the more popular examples of how door hangers are used in many different applications.<br/><br/>\r\n\r\n    Realtors â€“ Use door hangers for â€œJust Listedâ€, â€œJust Soldâ€, â€œCompsâ€ advertising<br/>\r\n    Food Delivery Services â€“ Add a few coupons to a promotion and watch sales soar<br/>\r\n    Churches â€“ Get The Word out and the people in â€“ advertise service locations and times<br/>\r\n    Hospitality â€“ Do your guests â€“ and your staff â€“ a favor; use â€œDo Not Disturbâ€ door hangers<br/>\r\n    Communication Providers â€“ The perfect way to describe your bundled services offering<br/>\r\n    Pest Control â€“ Print big nasty bug, and â€œSeen In Your Neighborhoodâ€ message on the front<br/>\r\n    Lawn Care â€“ Add some green to your bottom line when you advertise your green services<br/><br/>\r\n\r\n<h4>Door Hangers - Need Help Getting Started</h4><br/><br/>\r\n\r\nGet with our customer service team who can help with their extensive knowledge about door hangers.  Customer service will provide you with fast instant pricing, free samples and advice on size and material choices for door hangers.   Be sure to ask about free samples of door hangers. Customer service maintains a library of samples and will be able to provide samples very similar to your needs. You can also get a lot of information and help from our award winning web site. For starters, you can get an instant online price, and order securely online anytime youâ€™re ready. Whatever your needs, weâ€™re here to help.', '', 16),
(37, 1, 'Envelopes', '<br/><br/>\r\n<h3>Envelope - Product Details</h3><br/><br/>\r\n\r\nHigh quality, 2 color envelopes are a great way to promote your company. Custom Envelope printing can be used for many products from campaigning to a business request or action. Custom envelope design is important; Dpi.net has 1 or 2 color, photo quality envelope templates that set you apart and give your organization a true professional look and feel. If you are interested in four color custom envelopes, please call          1-281-536-4387  and a Customer Service Representative will be happy to help you.<br/><br/>\r\n\r\nEnvelope printing is available in various quantities, starting as low as 25 pieces. Pricing is determined by the quantity, size, format, paper and coating options and can start as low as .03 each!<br/><br/>\r\n<h3>Custom Design Services</h3><br/><br/>\r\nDpi.net has a graphic design team specializing in designing custom marketing materials that will grab your viewer''s attention. Creating effective digitally designed marketing materials such as full color brochures, presentation folders, post cards, booklets and catalogs are just the beginning of our design team''s strengths. We understand marketing materials that stand out and get noticed are key to any business marketing strategy.<br/><br/>\r\nDpi.net  custom digital design is the most effective manner for getting the custom marketing design look and feel you want for your customers. In order for your presentation folders, brochures, post cards, booklets or catalogs to effectively communicate your marketing message, a digital graphic designer with an understanding of Digital Design and layout is a must to be competitive in today''s market.', '', 16),
(38, 1, 'Flyers', '<br/><br/>\r\n<h3>Printing Flyers â€“ Great Quality â€“ Fast Turnaround</h3><br/><br/>\r\n\r\nWork with <a href="http://www.dpi.net/"><font color="blue">DPI Solutions LLC</font></a>  Â® online or offline when printing flyers, and weâ€™ll guarantee great quality and fast turnaround.  Printing flyers with us means youâ€™ll get digital photo quality printing on quality papers. Printing flyers with <a href="http://www.dpi.net/"><font color="blue">DPI Solutions LLC</font></a>, also gives you paper options that include white text or cover on cover stock in gloss finish in 80# or 100# weights. We keep your printing flyers cost low because we buy our quality materials in bulk, which helps us keep our costs lower. In addition to great quality, we do flyer printing fast. 5 days fast - standard. For a small extra charge your flyer printing can be ready-to-ship in 4 or even just 3 days. Get started with an instant online price or by contacting customer service.<br/><br/>\r\n\r\n \r\n<h3>Printing Flyers - Popular Uses</h3><br/><br/>\r\n\r\nWeâ€™re always looking for new and surprising ways that our customers are printing flyers. Weâ€™ve been printing flyers for popular uses like those shown below for a long time â€“ but go ahead â€“ surprise us!<br/><br/>\r\n\r\n    <b> 1 : - </b>Business Flyers â€“ Perfect For Employment Postings<br/>\r\n    <b> 2 : - </b>Sales Flyer â€“ An Affordable Way To Attract New Customers<br/>\r\n    <b> 3 : - </b>Church Flyers â€“ Announce Special Church Events<br/>\r\n   <b> 4 : - </b> School Announcements â€“ Great For Sports Schedules and Academic Calendars<br/>\r\n   <b> 5 : - </b> Personal Announcements â€“ Printing Flyers For Everything From Garage Sales To Party Invitations<br/>\r\n   <b> 6 : - </b> Real Estate Open House Flyers â€“ A Long Time Staple For Savvy Realtors<br/>\r\n <b> 7: - </b>   Service Clubs â€“ Used For Fundraiser Notices and Meeting Schedules<br/>\r\n   <b> 8 : - </b> And Many More...<br/><br/>\r\n\r\n<h3>Printing Flyers Resources</h3><br/><br/>\r\n\r\nWhen printing flyers, our best resource for you is our customer service team. Printing of flyers doesnâ€™t have to be hard, so get with customer service for experienced advice. Printing flyers is easier with design help! We offer free design templates to give you a design boost before youâ€™re ready to print flyers. Download our free templates below. We also offer affordable graphic design service as another of our flyer printing service options.', '', 22),
(39, 1, 'Gift Card Holders', '<br/><br/>\r\n<h3>Custom Gift Card Holders - Product Details</h3><br/><br/>\r\n\r\nPlastic card holders offer extra options for enhancing the message and design theme of any plastic card. If your need is for a gift card carrier or any other plastic card holders, DPI Solutions LLC Â® has the custom options you''ve been looking for. We offer three standard sizes, and excel at providing you with excellent pricing on photo quality custom gift card carrier printing. We are also your best source for other custom options including custom sizes and shapes printed in full color.<br/><br/>\r\n\r\nYou can have your gift card holder printed on our standard 10 pt coated 1 side stock material, or choose a custom material that works right for you using the Custom Quote. Like most My1Stop.comÂ® products, instant online pricing is just a few clicks away â€“ and live customer service is standing by for your toll free call or on-line messaging. Standard turnaround time is just 7 days.<br/><br/>\r\n\r\nCustom Gift Card Holders and carriers are also referred to as Fold Over card carriers and are available in two sizes:<br/><br/>\r\n\r\n    Standard side fold size gift card carrier measures 4" x 6"<br/>\r\n    Standard top fold size gift card carrier measures 4" x 5.5" (even fold)<br/>\r\n    Standard top fold size gift card carrier measures 2.8" x 8.75"<br/><br/>\r\n\r\nAll three gift card holders have inside die cut slots to hold the gift card in place. Gift card envelopes are available at extra cost. Traditional-sized plastic cards are easily inserted into either gift card carrier size, while custom gift card holders have no size limits.\r\n<br/><br/>\r\n \r\n\r\nAs an innovative alternative to custom plastic card holders, take a look at our plastic card mailers. Plastic gift card mailers are post card sized mailers â€“ made of plastic â€“ that include an easy-to-punch-out gift card right in the postcard. This solution will help you cut down mailing and distribution costs â€“ and gives you exciting new design options.<br/><br/>\r\n\r\n \r\n\r\nOur plastic gift card mailers can include personalization and numbering. This could be the best way to include a plastic card and a plastic card holder into one easy to mail solution!<br/><br/>\r\n\r\nMy1Stop.comÂ® plastic card printing provides you with the highest quality offset printed plastic cards and plastic card holders that are sure to get attention. Fast turnaround times, affordable, and customized for your specific needs. Select the plastic card and custom gift card carrier that is right for you and receive world class customer service on every order. Most plastic cards offer a magnetic strip, encoding and bar coding for stored value cards, and signature panels or variable imaging on gift cards, membership and loyalty cards, calendar cards, fundraiser cards, business cards, plastic card mailers, custom card carriers, bag and luggage tags, key tags, pre paid phone cards and more. For even more added value we now offer plastic card holders and carriers.', '', 13),
(40, 1, 'Letterhead', '<br/><br/><h3>Product Details</h3><br/>\r\n\r\nHigh quality, full color letterhead is a great way to promote your company, and add professionalism to your correspondence. Letterhead printing can be used for many products from cover letters to corporate sells letters. Letterhead design is important, Dpi Solution LlcÂ® has full color, photo quality letterhead templates that set you apart and give your organization a true professional look and feel.<br/><br/>\r\n\r\nLetterhead printing is available in various quantities, starting as low as 25 pieces. Pricing is determined by the quantity, size, format, paper and coating options and can start as low as .24 each! Calculate your price by using the instant pricing now! <br/><br/>\r\n<h3>Custom Design Services</h3><br/>\r\nDPI Solutions LLCÂ® has a graphic design team specializing in designing custom marketing materials that will grab your viewer''s attention. Creating effective digitally designed marketing materials such as full color brochures, presentation folders, post cards, booklets and catalogs are just the beginning of our design team''s strengths. We understand marketing materials that stand out and get noticed are key to any business marketing strategy.<br/><br/>\r\n\r\nDPI Solutions LLCÂ® custom digital design is the most effective manner for getting the custom marketing design look and feel you want for your customers. In order for your presentation folders, brochures, post cards, booklets or catalogs to effectively communicate your marketing message, a digital graphic designer with an understanding of Digital Design and layout is a must to be competitive in today''s market.', '', 15),
(41, 1, 'Postcard', '<br/><br/>\r\n<h3>Postcard Printing - Highest Quality - Best Value</h3><br/>\r\n\r\nWe give our postcard printing customers the best quality at the best possible value. We back our quality commitment to post card printing with photo quality digital printing. Whatâ€™s more, our postcard printing is done on the best available materials. Eco-friendly materials are available, too. We deliver great quality postcard printing at a value thatâ€™s tough to beat. Our value to our customers starts with competitive prices. We add further value with ease of ordering â€“ online or off, fast turnarounds and postcard printing options that keep you in control your budget. Ready to get started? Use the instant online postcard printing tool or contact customer service. We ready to help you order, today.<br/><br/>\r\n\r\n \r\n<h3>Postcard Printing - Buying Tips</h3><br/>\r\n\r\nHere are some postcard printing tips that our customers have shared with us. Please use them to help you get the best value for your next custom postcards project.<br/>\r\n\r\n    Print The Back In Black â€“ Printing the mailing side of your postcards in black â€“ rather than full color â€“ will lower your postcard printing costs. Use photos â€“ but grey scale them!<br/>\r\n    >Plan Ahead And Save â€“ We offer pretty nice discounts if you opt to have your postcard printing done in 7 days instead of six. Add a day, save a bit!<br/>\r\n    Test â€“ Test - Test â€“ How? This might be the oldest â€“ and wisest - marketing tip ever! With digital printing, ordering multiple versions and smaller quantities can provide big value â€“ especially if this approach helps you fine tune your message.<br/>\r\n    Punch Out The Response Rateâ€“ Youâ€™ve seen the new post cards that include a key tag or gift card that can be added to and punched right out of the postcard. Check them out for yourself!<br/><br/>\r\n\r\n<h3>Postcard Printing - Resources</h3><br/>\r\n\r\nOur best postcard printing resource is our customer service team. Online or offline,  count on our customer service with your questions. Free postcard printing design templates can help you get your project started. You can download our templates below â€“ free!  If you need professional design services, we have a staff of postcard printing experts who specialize in graphic design at reasonable rates.', '', 12),
(42, 1, 'Poster', '<br/><br/>\r\n<h3>Custom Poster Printing - Product Details</h3><br/>\r\n\r\nWe''re the online custom poster printing leader. Choose us for photo quality, custom poster printing. Our custom poster printing services include 11" x 17", 18" x 24" and 24" x 36" standard sizes. Our standard lead time is 7 days for custom poster printing. Our customer service representatives will be happy to assist you if a faster turn is needed, just call       1-281-536-4387    <br/><br/>       \r\n \r\n\r\nWhatever turnaround time and size you choose, your custom poster printing project will be printed on your choice of 80# gloss text, 100# gloss text, 80# gloss cover or 100# gloss cover papers. If you need an exotic or transparent stock, just let us know. Our better-than-photo quality, custom poster printing can be done on almost any material. <br/><br/>\r\n\r\n<h3>Design Services for Custom Poster Printing</h3><br/>\r\n\r\nThe graphic design team at DPI SOlutions LLC Â® can help you design a custom poster layout that displays your audience-specific message in perfect detail. When you need help designing your custom posters, contact our team. We''ll show you that poster design and poster printing services are just the beginning of our professional abilities. We understand that custom poster printing that stands out and gets noticed is key.', '', 35),
(43, 1, 'Presentation Folder', '<br/><br/>\r\n<h3>4 Color Presentation Folders - Product Details</h3><br/>\r\n\r\n4 color Presentation folders are pretty simple. They hold important marketing materials and they need to look great doing so. Ordering 4 color presentation folders should be simple, too! My1Stop.com has the easiest approach to get great looking, functional 4 color presentation folders in your hands fast and at a great price. Our instant online pricing is simple and quick; just take a look at how essential 4 color presentation folders options are easy to see and to select.\r\n<br/><br/>\r\n \r\n\r\nPhoto quality 4 color presentation folder printing does not have to cost more. That''s the My1Stop.com promise. Our standard 4 color presentation folder printing is done at up to 2400 dpi giving you the highest process color folder printing quality and professional look that will impress your customers and competitors alike. Best of all, our high quality output is competitive with lower quality 4 color presentation folder printing you might expect from other printers. We give you the best printing at the best pricing for PMS spot colors and full photo color printing. 4 color presentation folder printing can be done in almost any size. The size of printed folders is typically measured with the folder closed. The standard sizes for 4 color presentation folders are 9" x 12" and 9" x 14.5".  Aqueous coating is a free option when your artwork is printed on our standard 12 point coated stock. Our options also include up to 2 pockets with or without special business card or CD slits. The pockets are folded over from the outside after they are printed. So, you can print them as part of the outside!  You can easily select from our standard options and see your price instantly, online. If you prefer, connect with customer service to make sure you have the right options at the right price for your 4 color presentation folders project.<br/><br/>\r\n\r\n \r\n\r\nIf your needs go beyond our standard 4 color presentation folders sizes or materials, our customer service team is ready to help you think outside of the box. Our team will listen to your 4 color presentation folders needs and then provide fast accurate pricing typically within 24 hours of your call. 4 Color Presentation Folder Printing can be done in almost any size and color scheme you can imagine.  You can connect with customer service to discuss your 4 color presentation folders needs via instant online chat, email, fax, regular mail or by phoning toll-free. Remember, we also want to print the inserts for your 4 color process presentation folders, including brochures, flyers, sell-sheets and more. Weâ€™re ready to help you, today.\r\n\r\n\r\n<br/><br/>\r\n<h3>Design Services for 4 Color Presentation Folders</h3><br/>\r\n\r\nGetting your 4 color presentation folder printing design just right is critical. Our design service team has the experience you need to get the design right - for the folders and for the inserts. Let our design service team help create well-connected 4 color presentation folders and inserts "kit". Contact our customer service team, today.', '', 11),
(44, 1, 'Plastic Business Cards', '<br/><h3>Plastic Business Cards - Ordering Made Simple and Affordable</h3><br/><br/>\r\n\r\nPlastic business cards are easy to order from Dpi.net. You can choose to get your custom business card online or chat directly with our sales team. Printing business cards online is a breeze because we have simplified the process by providing plastic business cards product information, instant online pricing and secure checkout. To order your plastic business cards offline, just contact customer service. No matter how you choose to order, you will see that we offer a low minimum quantity and complete the package by printing business cards on one or both sides of your card.<br/><br/>\r\n\r\n \r\n<h3>Plastic Business Cards â€“ Marketing Tips</h3><br/>\r\n\r\nPlastic business cards make a unique and lasting first impression. Here are some tips for using your full color business cards to create more visibility for your company:<br/><br/>\r\n\r\n    <b>1 : - </b> Leave a Custom Business Card at Restaurants â€“ Place a few plastic business cards on the table for the next guest to see!<br/>\r\n  \r\n    <b>2 : - </b>  Put Them in Every Letter â€“ When you mail a letter or a package, be sure to include several full color business cards in each parcel.<br/>\r\n  \r\n    <b>3 : - </b>  Hand Them Out as Free Luggage Inserts â€“ Print your plastic business cards on one side and add lines on the back for people to write in their name and contact info to slide into their luggage tag holder. Your plastic business cards travel everywhere your prospect goes!<br/>\r\n  \r\n    <b>4 : - </b>  Print a Tip Calculator on the Back â€“ Customers will keep this custom business card in their wallet to use everywhere. Printing business cards like this will keep you with your customer at all times.<br/>\r\n \r\n    <b>5 : - </b>   Exchange at Trade Shows/Events â€“ Printing business cards for tradeshows/events is necessary for new customer acquisition.<br/><br/>\r\n\r\n<h3>Plastic Business Cards - Resources</h3><br/>\r\n\r\nOur customer service team is the best plastic business cards resource we can offer. Count on them when you need help on your next custom business card.  We also offer free design templates for plastic business cards. To download, follow the link below. If you need more than templates to get your plastic business cards design going, chat with our design services team. They can provide you with more affordable concepts and designs for your printing business cards.', '', 11),
(45, 1, 'Rack Card', '<br/></br/><h3>Rack Cards - Product Details</h3><br/>\r\n\r\nHigh quality, full color rack cards are a great way to promote your company, products, school and events. Custom rack card printing can be used for many products, from tour and event guides to local attractions. Rack card design is also important; Dpi.net has full color, photo quality rack card design ideas that set you apart and give your organization a true professional look and feel. Rack card printing is available in various quantities, starting as low as 250 pieces. Pricing is determined by the quantity, color format, size and paper options.<br/><br/>\r\n\r\n<h3>Custom Design Services</h3><br/>\r\n\r\nDpi.net  has a graphic design team specializing in designing custom marketing materials that will grab your viewer''s attention. Creating effective digitally designed marketing materials such as full color rack cards, brochures, presentation folders, post cards, booklets and catalogs are just the beginning of our design team''s strengths. We understand marketing materials that stand out and get noticed are key to any business marketing strategy.<br/><br/>\r\n\r\nDpi.net custom digital design is the most effective manner for getting the custom marketing design look and feel you want for your customers. In order for your rack cards, presentation folders, brochures, post cards, booklets or catalogs to effectively communicate your marketing message, a digital graphic designer with an understanding of Digital Design and layout is a must to be competitive in today''s market.', '', 13),
(46, 1, 'Sell Sheets', '<br/><br/>\r\n<h3>Sales Sheets â€“ Excellent Value â€“ Fast Turnaround</h3><br/>\r\n\r\nOnline or off-line, let Dpi.net help you with your sales sheets project.  We print sales data sheets on premium materials in true digital photo quality. Because we buy paper in huge volumes, our costs are low â€“ and we pass our savings onto you so Dpi.net can be your best value for printing sales sheets. Sales sheets are printed on your choice of 80# or 100# gloss white cover or text stock. Not only do we provide excellent printing quality of sales data sheets, we also give you 5 day standard printing time. If you need your sales data sheets faster, we can have sales sheets ready to ship in 4 or even just 3 days for a small extra charge. Start your sell sheets printing with us now by contacting customer service or by using the online instant pricing tool.<br/><br/>\r\n\r\n \r\n<h3>Sales Sheets â€“ Creating Impact</h3><br/>\r\n\r\nIf youâ€™re handing out sales sheets, go for impact!  We print sales data sheets for thousands of our customers, and here are some the impact-creating tips weâ€™ve learned from them.<br/><br/>\r\n\r\n    Keep Your Sales Data Sheets Design Simple â€“ Use a highly relevant, simple tag line, minimalistic description â€“ just enough to pique interest.<br/>\r\n    Make Your Sales Data Sheets Powerful â€“ Spend all of time that you must to find the image that drives your primary benefit home. Really drive the message home with your sell sheets.<br/>\r\n    Keep Your Sales Data Sheets Message Fresh â€“ Digital printing provides low cost sales sheets with fast turnaround and keeping your brand consistent.<br/><br/>\r\n\r\n<h4>Sales Sheet - Resources</h3><br/>\r\n\r\nDpi.net  has an experienced staff ready to help you get the most from your sales sheets. We suggest that you start with our customer service team. They understand sales data sheets. Once youâ€™re ready to start your sales data sheets design, we can help in two ways. First, we offer free design templates in each of our sales sheets sizes. If you need more help than the sales sheets templates provide, our professional design services team will provide you with ready-to-print sales sheets that exceed your expectations. Sales data sheet design is offered at an additional fee.', '', 14),
(47, 1, 'Greeting Card', '<br/><br/><h3>Greeting Card - Product Details</h3><br/>\r\n\r\nHigh quality, full color greeting cards are a great way to promote your company, products, school and events. Custom greeting card printing can be used for many products from new account appreciation cards to holiday greeting cards. Greeting card design is important; Dpi.net Â® has full color, photo quality greeting card design ideas that set you apart and give your organization a true professional look and feel.<br/><br/>\r\n\r\nGreeting card printing is available in various quantities, starting as low as 25 pieces. White matching envelopes are included in each order. Pricing is determined by the quantity, size, format, paper and coating options.<br/><br/>\r\n\r\n \r\n\r\nFor custom pre-designed invitations and occasional cards of every kind, we offer dozens of styles in the most popular designs and materials available. Our new printable greeting cards selections are available with verse selections, and matching envelopes. From designers like Cloe B and Red Leaf to several Disney products this offering gives you a chance to pick a design and custom print it to your personal specifications. Choose from a wide variety of type styles, ink colors, monograms, verses and more.<br/><br/>\r\n\r\n<h3>Custom Design Services</h3><br/>\r\n\r\nDpi.net Â® has a graphic design team specializing in designing custom marketing materials that will grab your viewer''s attention. Creating effective digitally designed marketing materials such as full color brochures, presentation folders, post cards, booklets and catalogs are just the beginning of our design team''s strengths. We understand marketing materials that stand out and get noticed are key to any business marketing strategy.<br/><br/>\r\n\r\nDpi.net Â® custom digital design is the most effective manner for getting the custom marketing design look and feel you want for your customers. In order for your presentation folders, brochures, post cards, booklets or catalogs to effectively communicate your marketing message, a digital graphic designer with an understanding of Digital Design and layout is a must to be competitive in today''s market.', '', 13),
(48, 1, 'Yard Signs', '<br/><br/><h3>Custom Printed Yard Signs</h3><br/>\r\n\r\nFrom political yard signs to outdoor yard signs of every kind, we have the custom coroplast yard sign options you need to get the results you want for your yard signs. Choose from the most popular yard sign sizes, directly-printed onto heavy duty coroplast material with sturdy stakes. Make a few simple choices using the online yard sign quoter and your pricing will be displayed instantly. When you need some â€œhands onâ€ support with your yard signs project, just reach out to our customer service team. Weâ€™ll work with you via email, online chat or toll free call to make sure your outdoor yard signs come together just the way you need them to.<br/><br/>\r\n<h3>Custom Printed Yard Signs â€“ More For Less</h3><br/>\r\n\r\nWe print your custom artwork directly onto durable coroplast yard sign material. This innovative yard sign printing approach eliminates the need for costly toxic laminates, increases color fastness and costs you less. In short, we give you more yard sign for less money.<br/><br/>\r\n\r\n \r\n\r\nChoose from the most popular sizes for yard signs, ranging from our smallest 18â€ x 24â€ format to our largest 48â€ x 48â€ yard signs. Youâ€™ll need stakes to support and display your yard signs. We provide you with easy to install, rugged yard sign stakes. Our largest yard sign stakes are up to 36â€ x 36â€ and are designed to work with our outdoor yard signs.<br/><br/>\r\n\r\n\r\n<h3>Custom Printed Yard Signs - Resources and Design Services</h3><br/>\r\n\r\nNeed yard sign material samples? How about some experienced insight for selecting the right yard sign size? Not sure how to put the stakes and your sign signs together? We can help! Our yard sign experts are ready to share all of their experience with outdoor yard signs with you, right now!<br/><br/>\r\n\r\n \r\n\r\nA custom printed yard sign is a lot like a mini billboard. Getting your design right can be tricky. If you find yourself needing help designing political yard signs, or any type of outdoor yard signs, just let our yard sign design team know. For a reasonable fee, our yard sign design services team will provide you with custom designed yard sign artwork â€“ that displays your message and brand professionally and effectively.<br/><br/>\r\n\r\n \r\nDpi.net is the leader in custom printed coroplast yards signs. Our yard sign options are perfect for outdoor yard signs like political yard signs.', '', 15),
(49, 1, 'Brochures', '<br/><br/><h3>Brochure Printing â€“ Product Details</h3><br/>\r\n\r\nAt Dpi.net Â®, we have the options you need to make your brochures printing project stand out from the crowd. For starters, choose to print brochures in full eye-catching, photo quality, color. Combine your brochure artwork with our material selections to get just the right look. Print brochures in your choice of 80# or 100# text or cover stock. Print brochures with any fold you need, from trifold brochures printing, to gatefold brochures printing and accordion fold brochures printing.<br/><br/>\r\n\r\n \r\n\r\nWhichever discount brochure printing material you select, our photo quality printing is done in your choice of discount brochure printing sizes. Print brochures in 8.5" x 11", 8.5" x 14" and 11" x 17" sizes. Let us know If your brochures printing project calls for a non standard size. We can print brochures in virtually any size on almost any discount brochure printing material. Folding custom trifold brochures, gatefold brochures, and accordion fold brochures is something we do with excellence. Contact us when youâ€™re ready to custom print brochures!', '', 16),
(50, 1, 'Business Cards', '<br/><br/>\r\n<h3>Paper Business Cards - Product Details</h3><br/>\r\n\r\n\r\nDpi.net knows paper business cards are a great way to impress your contacts. They can provide contact information or promote a new product by advertising on the back of the business card.  Premium business cards are a gateway to both new business and promote your company image. You can print premium business cards starting at quantities as low as 250 pieces. Dpi.net also offers full color, photo quality printing, standard, on all of your premium business cards.<br/><br/>\r\n<h3>Paper Business Cards - Custom Design Services</h3><br/>\r\n\r\n\r\nDpi.net realizes design is a very important aspect of premium business cards.  We have a graphic design team specializing in designing custom marketing materials that will grab your viewer''s attention. They can help give you design ideas that set you apart and give your organization a true professional look and feel.<br/><br/>\r\n \r\n\r\n<b>Request Custom Graphic Design Services for Business Cards</b><br/><br/>\r\n \r\n\r\nDpi.net is your leading provider for paper business cards. We offer full color, premium business cards at a low cost, without sacrificing quality or service.<br/><br/>', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE IF NOT EXISTS `products_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `htmlcontent` text,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_images_prodid` (`products_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products_images`
--


-- --------------------------------------------------------

--
-- Table structure for table `products_notifications`
--

CREATE TABLE IF NOT EXISTS `products_notifications` (
  `products_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`products_id`,`customers_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_notifications`
--


-- --------------------------------------------------------

--
-- Table structure for table `products_options`
--

CREATE TABLE IF NOT EXISTS `products_options` (
  `products_options_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_options_name` varchar(32) NOT NULL DEFAULT '',
  `products_options_sort_order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_options_id`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_options`
--

INSERT INTO `products_options` (`products_options_id`, `language_id`, `products_options_name`, `products_options_sort_order`) VALUES
(1, 1, 'Color', 0),
(2, 1, 'Size', 0),
(3, 1, 'Model', 0),
(4, 1, 'Memory', 0),
(5, 1, 'Version', 0),
(6, 1, 'Quantity', 0),
(7, 1, 'Paper', 0),
(8, 1, 'Coating', 0),
(9, 1, 'Folding', 0),
(10, 1, 'Turnaround', 0),
(11, 1, 'Pages', 0),
(12, 1, 'Lead Time', 0),
(13, 1, 'Proof Type', 0),
(14, 1, 'Aqueous Coating', 0),
(15, 1, 'Grommets', 0),
(16, 1, 'Fold', 0),
(17, 1, 'Pockets', 0),
(18, 1, 'Business Card & CD Slits', 0),
(19, 1, 'Plastic', 0),
(20, 1, 'Yard Stakes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_options_values`
--

CREATE TABLE IF NOT EXISTS `products_options_values` (
  `products_options_values_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_options_values_name` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`products_options_values_id`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_options_values`
--

INSERT INTO `products_options_values` (`products_options_values_id`, `language_id`, `products_options_values_name`) VALUES
(1, 1, '4 mb'),
(2, 1, '8 mb'),
(3, 1, '16 mb'),
(4, 1, '32 mb'),
(5, 1, 'Value'),
(6, 1, 'Premium'),
(7, 1, 'Deluxe'),
(8, 1, 'PS/2'),
(9, 1, 'USB'),
(10, 1, 'Download: Windows - English'),
(13, 1, 'Box: Windows - English'),
(14, 1, '1X1'),
(15, 1, '2X2'),
(16, 1, 'black'),
(17, 1, 'White'),
(18, 1, '1'),
(19, 1, '2'),
(20, 1, 'paper1'),
(21, 1, 'paper2'),
(22, 1, 'turn1'),
(23, 1, '2X2'),
(24, 1, '8 Pages'),
(25, 1, '16 Pages'),
(26, 1, '32 Pages'),
(27, 1, 'Front Color,Back Color'),
(28, 1, '80# Gloss Text'),
(29, 1, '100# Gloss Cover'),
(30, 1, '80# Gloss Cover'),
(31, 1, '100# Gloss Text'),
(32, 1, '250'),
(33, 1, '7 Days'),
(34, 1, '6 Days'),
(35, 1, '5 Days'),
(36, 1, '8 Days'),
(37, 1, '9 Days'),
(38, 1, 'E-mail .pdf Proof-(Free)'),
(39, 1, 'Fast Track - No Proof (Free)'),
(40, 1, 'Hard Copy ($75 -Next Day Air)'),
(41, 1, 'No'),
(42, 1, 'Yes'),
(43, 1, '36"x 48"'),
(44, 1, '36"x 60"'),
(45, 1, '36"x 72"'),
(46, 1, '36"x 96"'),
(47, 1, '36"x 120"'),
(48, 1, '48"x 48"'),
(49, 1, '48"x 60"'),
(50, 1, '48"x 72"'),
(51, 1, '48"x 120"'),
(52, 1, '13 mil Vinyl'),
(53, 1, 'No'),
(54, 1, 'Yes'),
(55, 1, '1'),
(56, 1, '1.5" x 7"'),
(57, 1, '2" x 8"'),
(58, 1, '5.5" x 2.125"'),
(59, 1, 'Color Front/No Color Back'),
(60, 1, 'Color Front/Color Back'),
(61, 1, '14pt Coated 2 Sides'),
(62, 1, '4 Days'),
(63, 1, '8.5" x 11"'),
(64, 1, '8.5" x 14"'),
(65, 1, '11"x17"'),
(66, 1, '3 Days'),
(67, 1, '3.5" x 2"'),
(68, 1, '14 pt C2S'),
(69, 1, '500'),
(70, 1, '1000'),
(71, 1, '2500'),
(72, 1, '5000'),
(73, 1, '10000'),
(74, 1, '20000'),
(75, 1, '30000'),
(76, 1, '40000'),
(77, 1, '50000'),
(78, 1, '11"x17" Flat-Year on Page'),
(79, 1, '11"x17" Folded-7 Sheets'),
(80, 1, '3.5" x 8.5"'),
(81, 1, '4.25" x 11"'),
(82, 1, '10pt Coated 1 Side'),
(83, 1, '25'),
(84, 1, '# 10 Envelopes'),
(85, 1, '1 Color'),
(86, 1, '2 color'),
(87, 1, '24# Security w/ Window'),
(88, 1, 'No Fold'),
(89, 1, 'Half Fold'),
(90, 1, 'Tri-Fold'),
(91, 1, 'Accordion Fold'),
(92, 1, 'Gate Fold'),
(93, 1, '4 Days'),
(94, 1, '3 Days'),
(95, 1, '4" x 5.5"'),
(96, 1, '4"x 6"'),
(97, 1, '2.8" x 8.75"'),
(98, 1, '24# Laid'),
(99, 1, '24# Linen'),
(100, 1, '70# Smooth Opaque'),
(101, 1, '25'),
(102, 1, '4.25" x 5.5"'),
(103, 1, '5" x 7"'),
(104, 1, '5.5" x 8.5"'),
(105, 1, '6" x 9"'),
(106, 1, '18" x 24"'),
(107, 1, '12pt Coated 1 Side'),
(108, 1, '4/0-Color Outside/No Color Inside'),
(109, 1, '4/1-Color Outside/Black Inside'),
(110, 1, '4/4-Color Outside/Color Inside'),
(111, 1, 'Both Sides'),
(112, 1, 'Left Sides'),
(113, 1, 'Right Sides'),
(114, 1, 'None'),
(115, 1, 'BC Right Pocket'),
(116, 1, 'BC Left Pocket'),
(117, 1, 'BC Both Pocket'),
(118, 1, 'CD Both Sides'),
(119, 1, 'CD Right'),
(120, 1, 'CD Left'),
(121, 1, 'BC Left and CD Right'),
(122, 1, 'BC Right and CD Left'),
(123, 1, '4" x 9"'),
(124, 1, '3 3/8" x 2 1/8"'),
(125, 1, '30 Mil White Plastic'),
(126, 1, '30 mil White Composite'),
(127, 1, '10 Days'),
(128, 1, '5" x 7" (half fold)'),
(129, 1, '12"x 18"'),
(130, 1, '12"x 24"'),
(131, 1, '4 mil Corrugated Plastic'),
(132, 1, 'No'),
(133, 1, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `products_options_values_to_products_options`
--

CREATE TABLE IF NOT EXISTS `products_options_values_to_products_options` (
  `products_options_values_to_products_options_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_options_id` int(11) NOT NULL,
  `products_options_values_id` int(11) NOT NULL,
  PRIMARY KEY (`products_options_values_to_products_options_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `products_options_values_to_products_options`
--

INSERT INTO `products_options_values_to_products_options` (`products_options_values_to_products_options_id`, `products_options_id`, `products_options_values_id`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 4, 3),
(4, 4, 4),
(5, 3, 5),
(6, 3, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 5, 10),
(13, 5, 13),
(14, 2, 14),
(15, 2, 15),
(16, 1, 16),
(17, 1, 17),
(18, 6, 18),
(19, 6, 19),
(20, 7, 20),
(21, 7, 21),
(22, 10, 22),
(23, 9, 23),
(24, 11, 24),
(25, 11, 25),
(26, 11, 26),
(27, 1, 27),
(28, 7, 28),
(29, 7, 29),
(30, 7, 30),
(31, 7, 31),
(32, 6, 32),
(33, 12, 33),
(34, 12, 34),
(35, 12, 35),
(36, 12, 36),
(37, 12, 37),
(38, 13, 38),
(39, 13, 39),
(40, 13, 40),
(41, 14, 41),
(42, 14, 42),
(43, 2, 43),
(44, 2, 44),
(45, 2, 45),
(46, 2, 46),
(47, 2, 47),
(48, 2, 48),
(49, 2, 49),
(50, 2, 50),
(51, 2, 51),
(52, 7, 52),
(53, 15, 53),
(54, 15, 54),
(55, 6, 55),
(56, 2, 56),
(57, 2, 57),
(58, 2, 58),
(59, 1, 59),
(60, 1, 60),
(61, 7, 61),
(62, 12, 62),
(63, 2, 63),
(64, 2, 64),
(65, 2, 65),
(66, 12, 66),
(67, 2, 67),
(68, 7, 68),
(69, 6, 69),
(70, 6, 70),
(71, 6, 71),
(72, 6, 72),
(73, 6, 73),
(74, 6, 74),
(75, 6, 75),
(76, 6, 76),
(77, 6, 77),
(78, 2, 78),
(79, 2, 79),
(80, 2, 80),
(81, 2, 81),
(82, 7, 82),
(83, 6, 83),
(84, 2, 84),
(85, 1, 85),
(86, 1, 86),
(87, 7, 87),
(88, 16, 88),
(89, 16, 89),
(90, 16, 90),
(91, 16, 91),
(92, 16, 92),
(93, 12, 93),
(94, 12, 94),
(95, 2, 95),
(96, 2, 96),
(97, 2, 97),
(98, 7, 98),
(99, 7, 99),
(100, 7, 100),
(101, 6, 101),
(102, 2, 102),
(103, 2, 103),
(104, 2, 104),
(105, 2, 105),
(106, 2, 106),
(107, 7, 107),
(108, 1, 108),
(109, 7, 109),
(110, 1, 110),
(111, 17, 111),
(112, 17, 112),
(113, 17, 113),
(114, 18, 114),
(115, 18, 115),
(116, 18, 116),
(117, 18, 117),
(118, 18, 118),
(119, 18, 119),
(120, 18, 120),
(121, 18, 121),
(122, 18, 122),
(123, 2, 123),
(124, 2, 124),
(125, 19, 125),
(126, 19, 126),
(127, 12, 127),
(128, 2, 128),
(129, 2, 129),
(130, 2, 130),
(131, 7, 131),
(132, 20, 132),
(133, 20, 133);

-- --------------------------------------------------------

--
-- Table structure for table `products_to_categories`
--

CREATE TABLE IF NOT EXISTS `products_to_categories` (
  `products_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`products_id`,`categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_to_categories`
--

INSERT INTO `products_to_categories` (`products_id`, `categories_id`) VALUES
(29, 23),
(30, 24),
(32, 25),
(33, 26),
(34, 27),
(35, 28),
(36, 31),
(37, 32),
(38, 34),
(39, 35),
(40, 36),
(41, 40),
(42, 41),
(43, 42),
(44, 43),
(45, 44),
(46, 45),
(47, 54),
(48, 47),
(49, 49),
(50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `reviews_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `customers_name` varchar(255) NOT NULL,
  `reviews_rating` int(1) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `reviews_status` tinyint(1) NOT NULL DEFAULT '0',
  `reviews_read` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reviews_id`),
  KEY `idx_reviews_products_id` (`products_id`),
  KEY `idx_reviews_customers_id` (`customers_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reviews`
--


-- --------------------------------------------------------

--
-- Table structure for table `reviews_description`
--

CREATE TABLE IF NOT EXISTS `reviews_description` (
  `reviews_id` int(11) NOT NULL,
  `languages_id` int(11) NOT NULL,
  `reviews_text` text NOT NULL,
  PRIMARY KEY (`reviews_id`,`languages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews_description`
--


-- --------------------------------------------------------

--
-- Table structure for table `sec_directory_whitelist`
--

CREATE TABLE IF NOT EXISTS `sec_directory_whitelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `directory` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sec_directory_whitelist`
--

INSERT INTO `sec_directory_whitelist` (`id`, `directory`) VALUES
(1, 'admin/backups'),
(2, 'admin/images/graphs'),
(3, 'images'),
(4, 'images/banners'),
(5, 'images/dvd'),
(6, 'images/gt_interactive'),
(7, 'images/hewlett_packard'),
(8, 'images/matrox'),
(9, 'images/microsoft'),
(10, 'images/sierra'),
(11, 'includes/work'),
(12, 'pub');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `sesskey` varchar(32) NOT NULL,
  `expiry` int(11) unsigned NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`sesskey`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`sesskey`, `expiry`, `value`) VALUES
('0042fnmghf5g7je6frdo33gbk1', 1321424802, 'sessiontoken|s:32:"0afd5ae4d7948ca50a27a9d8e771b628";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('006ch1bn8omhkhmkqml9hqeao7', 1320078236, 'sessiontoken|s:32:"2c1175260686f76a5f2c6191c7b49be5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('01grt5s7bocm6oeg42pckfrne5', 1320266169, 'sessiontoken|s:32:"3d0359cf42f7a9fd62d4eff5fb9df132";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('025n6rp1ag0lb9atkskler8d42', 1321367853, 'sessiontoken|s:32:"612b30cd97c7a45729fa29f454dac24a";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:11:"products_id";s:2:"44";}s:4:"post";a:0:{}}}s:8:"snapshot";a:4:{s:4:"page";s:11:"account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}'),
('02o5uvk7hlk0m3pq4npsk4ddb5', 1321042644, 'sessiontoken|s:32:"390bc4b5d55c490d907dcc02abb31029";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('03hb24segq7j4gmmhkg3ve7oa7', 1321393041, 'sessiontoken|s:32:"29e6ac4930dd9e0edc7a96639c3d2f07";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('03tn9g3kqcandj1hrli9c7tnf6', 1320872697, 'sessiontoken|s:32:"6cda1158853acd014446221a076c58e6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:11:"samples.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('045s94rkm7dp04t9nu4baj7eg2', 1319896905, 'language|s:7:"english";languages_id|s:1:"1";admin|a:2:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";}AM_SESSION_TEMPLATES_INSTALL_CHECKED|b:1;am_valid_include|s:40:"5122c0a7b6c42e2369955d1d2265f4e1ba695d4b";'),
('0465h08bv6au4m53ra3pfbj5d1', 1321529837, 'sessiontoken|s:32:"16e915094f09a8112108c0f3ee7386c7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0824jgp735sn1gvnv8o3c2t671', 1320233086, 'sessiontoken|s:32:"7130aa4355c2a2bf4115c0e7de457480";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0caq8tmstfngg8f8u3mivr7h83', 1320415509, 'sessiontoken|s:32:"55b6f03c7e1b9881f783a5beeda2b6a6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0f88506vmem7iplaig0311bcn0', 1321450410, 'sessiontoken|s:32:"f08a0fd5675265af288602e94179dc9c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cPath";s:2:"28";s:6:"osCsid";s:26:"0f88506vmem7iplaig0311bcn0";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0j8mfmmo713lnjd93ndstqkkh5', 1320251945, 'sessiontoken|s:32:"13d98f88f679e185f9f4c000db43b94a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0lj3ile5tt3ndq278hb1l5hdr3', 1320916976, 'sessiontoken|s:32:"d18d2ee2d8e52924aa0a490964fe0c04";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:10:"amp;oscsid";s:26:"unroq78us91bv9jv5b11agjfp7";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0luvgmji67k8as65agg81hdff0', 1320211875, 'sessiontoken|s:32:"9911f7feda219e9f42e8752a473f6159";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0m25o6bb8hvsjqovq3ft1gf0i0', 1320290729, 'sessiontoken|s:32:"ef7f236d6ff0e530bf1069837155d4a5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0m31mt7uqnnodgqp6qravdr0r4', 1320237985, 'sessiontoken|s:32:"40ded332e5a2ae1e74e604e2f06bd6b4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"24";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0o80cqcsn4biv5g8edjtiiar40', 1320880834, 'sessiontoken|s:32:"3300b203ded55480a96f44067d9661ab";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0ocm1stpehnb3mr4pipgujav77', 1321448541, 'sessiontoken|s:32:"c371f2df009ee46b58be9b2e3dc7f329";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0q8vkviom7t3vj5pjhpdjgfbq0', 1320648987, 'sessiontoken|s:32:"5909f66cd57189e116da456a5cebcd70";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"7341a0uk3fc2m89f6mdgega570";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0s40u63vrf430sdpks2041l4h5', 1320015703, 'sessiontoken|s:32:"cb84bec551b1d0a0bc0ff783e3d45b4a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0s8eo92g1jvtp3kp2f67mb12m6', 1319938188, 'sessiontoken|s:32:"6691f62bdec7d5a2e2bb38549919f7bd";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:11:"samples.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0sig60j3dcpg64rd5e6ia1un23', 1320478500, 'sessiontoken|s:32:"f1f09d73a701738662f03975d51e02d9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"24";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('0vvt9g6mvl40eku24q9frqnt26', 1320383049, 'sessiontoken|s:32:"9be4c85b045cb0ee96eb2a46eed8a60a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('12j8be2pq41cmnt73kjberspf4', 1320526278, 'sessiontoken|s:32:"0c01a52132162d683c6e14813c0e2967";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('13075qt58uqjvvbpls7arr3fh5', 1321680034, 'sessiontoken|s:32:"04ce4807a69d59b01d7fcce927697eb7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('13pnrbjsut490ju20os8v0vma1', 1321031309, 'sessiontoken|s:32:"f7b14e840a52d15d1abbdee58b33a939";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('15jg1n223jpjfuo3fipl1p4o91', 1319980861, 'sessiontoken|s:32:"0d00050806482e38cd611966fc57a906";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('16qtlih78ipse1u0fccs4b8hm2', 1321688108, 'sessiontoken|s:32:"aa93dfcf0893b4c9ae6b8125a6848c83";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('17ad190dn6pd916mnehakj3qb1', 1320853318, 'sessiontoken|s:32:"9f1b9aa86ce4ee9fcfd56da20c6d3495";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('17bj57fbi4nks2g9inga6v2vh0', 1320344389, 'sessiontoken|s:32:"c336f4eff91ccaf180b7edce847f04ea";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('17ildatbj2hnd3t1uipl20gdk6', 1320237971, 'sessiontoken|s:32:"d6b2d41017601ca9255f0f1a273f632c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"34";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1e819721pkgaj5bg29m2fq08d7', 1320335893, 'sessiontoken|s:32:"2f7f7d1762d98853dd653d3bc03921a4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1eqobogskkf0s405jbdu5m7ho0', 1319931924, 'sessiontoken|s:32:"ff07874f019609f7041db6fb73fa9aee";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1gq18q2qp0f7lk4lnk11faju11', 1320067522, 'sessiontoken|s:32:"7d7eb2fd7449325859214e00fbad917a";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"34{14}41{1}60{12}35{7}68{13}38{6}32{2}67";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:14;s:2:"41";i:1;s:2:"60";i:12;s:2:"35";i:7;s:2:"68";i:13;s:2:"38";i:6;s:2:"32";i:2;s:2:"67";}}}s:5:"total";d:0;s:6:"weight";d:0;s:6:"cartID";s:5:"42946";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1l8tfgjg7eeq3145338nt7eav5', 1320769377, 'sessiontoken|s:32:"50cd1ff6674102dee61ec5c9cd6ffe98";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1liifdigp5i2sr7o0c1amukti6', 1320736149, 'sessiontoken|s:32:"924bb82edbdc6d1c0a637d2209a0274a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1meed15i6emueb425ko8r2qt32', 1321655269, 'sessiontoken|s:32:"361f79f6d50a8b0715e5f9d8488a2079";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1mm2qsh13dp7ctlkmkb9herkq5', 1320250082, 'sessiontoken|s:32:"64b67ffae4317f89d4b2fe4b1d721768";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1naa0a32qao9fodjnfcq6jn8g6', 1320237961, 'sessiontoken|s:32:"5e2815a64ca930aba06833abec1fe660";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"40";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1nfogg1721q50i71r9f5vomeo4', 1321396009, 'sessiontoken|s:32:"3a683c4e2e3cc9c1db40e25d8696a117";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1nqkk9ghcbogr39k827kr3aj50', 1321632506, 'sessiontoken|s:32:"d66737da1c3262154418a6f303382cfb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1ou3pfje7kd4qg1e346aeis2g3', 1320725752, 'sessiontoken|s:32:"22d8179c9fe8f849996353e84190530d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1ouulcl9vi9kkqfcpga3fstfl4', 1319938199, 'sessiontoken|s:32:"1046a06eb143774f8e7abda04e866f8c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"3";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1qm79kckia37d8o66mt6qvjmj5', 1320078210, 'sessiontoken|s:32:"43a49dffba76856951ca5803936794c2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1qo4k5hlen9vkv9vmg03lot1b0', 1319959775, 'sessiontoken|s:32:"1a98ff1010b60e7f150ba1c039d12f5d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1r0e5srdaci75r4ckpneqbe225', 1321501282, 'sessiontoken|s:32:"f497d507260ff09c2c0a705cd08fb2a7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1sf6113lf4gsq2s09sg67voqs7', 1321481277, 'sessiontoken|s:32:"3c982aacd9f5d784cde7f56a1f13f9fa";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1stvr0ic1ak75ijn7nd6e2b684', 1320049076, 'sessiontoken|s:32:"ffe21b1557cec247dcb874b23e39dc9c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1tfb3atr9ls6r9ls3s58ur89l6', 1320477742, 'sessiontoken|s:32:"20ca5acc4a3e8b0b2b1edb352899cb99";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1tl3ot8pej4nd1hqpvr43la7i2', 1320185379, 'sessiontoken|s:32:"b38be94923c4b34b4977fc9024b5c0bb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1tt8qtnl66hr3kd7q5ulda0hh4', 1321609436, 'sessiontoken|s:32:"2acb6d70d19f29f393c3fa440fe7e3c5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('1vahoeuu00jhlo463sknj47197', 1321665209, 'sessiontoken|s:32:"789a06abc83d18375c364c6110463f8a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('22t8r7u71dqiltiak5j7l6ks31', 1320726037, 'sessiontoken|s:32:"7c2b7e03b34e0a25f95828f8ba146a61";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2480vfr12ok1o7ditgfut8nh14', 1321444170, 'sessiontoken|s:32:"0e4bdb87fd4d2423661a9d94c8e12b16";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('24llvjqheap882aoo1um03a103', 1320709565, 'sessiontoken|s:32:"bbbcf12d8a844e9870b9bfa8ba8a98ce";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('28n39lf4tiq3obuqqlsmuev9r4', 1321107475, 'sessiontoken|s:32:"411fb95068b40aea6f12f7f3cf50df2e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('29hov3u2e952olf275o2li98l1', 1320739945, 'sessiontoken|s:32:"0d89058d854dd44a9a9ec9afee563219";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:11:"products_id";s:2:"29";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('29pugcr6hanqktib1bgc7ma3i5', 1320129927, 'language|s:7:"english";languages_id|s:1:"1";admin|a:2:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";}AM_SESSION_TEMPLATES_INSTALL_CHECKED|b:1;am_valid_include|s:40:"5122c0a7b6c42e2369955d1d2265f4e1ba695d4b";'),
('2aabkb4g01uc545f674lkbr7q7', 1320608841, 'sessiontoken|s:32:"309381a3659ccc868a65c036a2dbb587";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:4:"send";}s:4:"post";a:4:{s:6:"formid";s:32:"309381a3659ccc868a65c036a2dbb587";s:7:"country";s:3:"USA";s:7:"enquiry";s:1198:"Billy Strahan \r\nDigital Press Inc\r\n\r\nHi Billy:\r\n\r\nI have used your form at http://dpi.net to send you a message that will allow you to become business savvy. If you choose not to respond to my offer, that\\''s OK, I just wanted to make sure you have the opportunity.\r\n\r\nI chosen not to disturb you with a call and let you decide whether to have a guaranteed increased bottom line from your business over the next ninety days or just remain with business as usual. \r\n\r\nMy offer is very simple, if my program does not improve your bottom line in the next ninety days, you don\\''t pay me a dime. In fact I won\\''t even bill you during the ninety days.\r\n\r\nVisit www.aubscmagic.net to find out more.\r\n\r\nI made this offer to add 300 new students into my Business Owners Training. There are about 95 spots left at this time and the offer will end once they have been filled. Make sure to get your seat in this master class.\r\n\r\nSorry for the unconventional way I have approached you, but I really wanted you to have the opportunity to increase your business results.\r\n\r\nJoel Shapito\r\n\r\n(Google us at: Joel Shapiro\\''s Magic)\r\n\r\n\r\n\r\n\r\nTo remove from further communications\r\nemail unsubscribe@aubscunsubscribe.net";s:4:"send";s:0:"";}}}s:8:"snapshot";a:0:{}}'),
('2gbkbieudnr2d6onkg24rfe4k7', 1321575945, 'sessiontoken|s:32:"98a33e88c704c55d0febf7e469ab9c67";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:4:"send";}s:4:"post";a:4:{s:6:"formid";s:32:"98a33e88c704c55d0febf7e469ab9c67";s:7:"country";s:3:"USA";s:7:"enquiry";s:646:"Welcome to Zoopon!\r\n\r\n\r\nPresented by Zoo Printing, Zoopon offers huge discounts to select members of the printing industry. \r\n\r\n\r\nYour current Zoopon offer is 100 4-Color Digital Business Cards for $1 + S&H.\r\n\r\n\r\nFor more information about Zoopon, click http://www.zooprinting.com/zoopon. Use code ZP1DOLLAR in the coupon code box when you check out.\r\n\r\n\r\nIn addition to Zoopon, we offer 20+ weekly specials and a huge new special every month. Check it out; it will change the way you print!\r\n\r\n\r\n\r\n\r\nBest,\r\n\r\n\r\nZoo Printing, Inc.\r\n\r\n\r\nStephen Kugelberg\r\n1-800-507-1907 x 110\r\n4730 Eastern Avenue\r\nCommerce, CA 90040\r\nskugelberg@zooprinting.com\r\n";s:4:"send";s:0:"";}}}s:8:"snapshot";a:0:{}}'),
('2hd812kj8d3su9ct5vtm4rpoa3', 1321598986, 'sessiontoken|s:32:"d7e564c21ee2b9d23920b39aae1fa060";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2jsg7dbchh3s1r71bbs1rjlbp2', 1321594123, 'sessiontoken|s:32:"b15ffcb248ba4a3dd885bc917ac9f7c9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2lphd48hn6tjssilq96olc3tt1', 1320361058, 'sessiontoken|s:32:"c5d5c568f47e30e1edfa1796877acca5";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2n4ifjt4ud9ave5vmrelh5ckc6', 1321544656, 'sessiontoken|s:32:"0fae328eece79ee46231c7c2de429ae5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2pvdnuv70amrtm1h8u5alemi97', 1320334470, 'sessiontoken|s:32:"910d1fd2665a10df45a69af7a57b1f2a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2r5ml0t3r6lfrksoa1vkboh160', 1320238002, 'sessiontoken|s:32:"235290de821b91654edeafb476f612d5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2rv001s0maq6hf9dl5uuhg04r2', 1320322781, 'sessiontoken|s:32:"d39324205c3f2d2f633bc4c64f10f837";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:4:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cPath";s:2:"23";s:6:"osCsid";s:26:"2rv001s0maq6hf9dl5uuhg04r2";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:11:"products_id";s:2:"29";s:6:"osCsid";s:26:"2rv001s0maq6hf9dl5uuhg04r2";}s:4:"post";a:0:{}}i:3;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"2";s:6:"osCsid";s:26:"2rv001s0maq6hf9dl5uuhg04r2";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2v4t6ec0q78kadf8ldho54haa6', 1320301542, 'sessiontoken|s:32:"e46b49cf172f61d6e4b8e315a497ffc9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('2v9nn0jkg2kqn2nrdteqon2120', 1321399475, 'sessiontoken|s:32:"262f34adc59d4ee54f6f204e1ad3ae8a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('31q12nueeme0spl2t1qn6n3n42', 1320651203, 'sessiontoken|s:32:"40d70310236709e84722821fb952ce24";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('320v2gb9sv4lkiqiot171ph3k2', 1320477834, 'sessiontoken|s:32:"f604c9501ee5589965b95727212083e5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('32e8p89g1s943u67miidno61s7', 1320310493, 'sessiontoken|s:32:"d49547211a9d7195a5b55a119de88216";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('37t15fupovg18b10dhfing4m55', 1320728075, 'sessiontoken|s:32:"84593636ecbe63cc4efa0bd0af82eb9b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('39vbli5obskrsahbrlru48kba7', 1320237983, 'sessiontoken|s:32:"181494ae40221219620b44ca61de62df";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"27";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3c4ia04uogg1ufnshdnj79qra3', 1320381246, 'sessiontoken|s:32:"a4ff67af5b71f8b21d1824cc79ef8a48";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3d1cntgps4ej0s816kgcesur05', 1321520180, 'sessiontoken|s:32:"588ab846fa871bb1d635638da1675aec";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3djif8mcmc3560q7qghs5hkfv0', 1320326339, 'sessiontoken|s:32:"903dbe29ae83b740261d1377538ffb4a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3fe02mk204almqk5vlq8a4kc46', 1321626981, 'sessiontoken|s:32:"df8cd576b59b4d33cd1e49a78a94a2ac";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3h07mllqqlsrs0867pbrdl2am6', 1320238000, 'sessiontoken|s:32:"023feb1b4f5524816d830e2ae8437bff";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:11:"samples.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3h2p6b4f4j35mfiqff6r4decb5', 1319938176, 'sessiontoken|s:32:"28883b2d72aef25cb9ad7145b9b06e26";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3hg51bau8m386cj4iqrjed4m64', 1321535860, 'sessiontoken|s:32:"33704125122c817d64789f21154299aa";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3km2skd1mmjbc2i4huasgo8gh1', 1321599743, 'sessiontoken|s:32:"cb05c13b939f8a99c4b88550a09b9c09";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3l7om3rjeist6s5nktcrn98nm1', 1320534605, 'sessiontoken|s:32:"d4af7c2903539228bb16b6362a57183e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"27";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3m3jpj424ivfeh0ipquktaq8j4', 1320237934, 'sessiontoken|s:32:"154b549a874c540b2178e6c415b66161";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"49";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3qb22u1e4u21qmmgdep55661e6', 1320677647, 'sessiontoken|s:32:"f9fc00364f380804af310526fabf9274";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3tfb88ja1g1phbvf3voalfio73', 1320094144, 'sessiontoken|s:32:"af9a44de038f25406f80c1902ee98666";cart|O:12:"shoppingCart":5:{s:8:"contents";a:3:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";s:1:"1";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}84";a:2:{s:3:"qty";s:1:"2";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"84";}}s:40:"34{14}41{1}60{12}35{7}68{13}38{6}32{2}67";a:2:{s:3:"qty";s:1:"1";s:10:"attributes";a:7:{i:14;s:2:"41";i:1;s:2:"60";i:12;s:2:"35";i:7;s:2:"68";i:13;s:2:"38";i:6;s:2:"32";i:2;s:2:"67";}}}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;s:6:"cartID";s:5:"85467";}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:21:"checkout_shipping.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:7:"process";}s:4:"post";a:5:{s:6:"formid";s:32:"ab94bca8ac24789527eead2875792f06";s:13:"email_address";s:19:"josephn@fastlam.com";s:8:"password";s:5:"jlaaD";s:1:"x";s:2:"57";s:1:"y";s:2:"22";}}}s:8:"snapshot";a:0:{}}customer_id|s:1:"4";customer_default_address_id|s:1:"4";customer_first_name|s:3:"Joe";customer_country_id|s:3:"223";customer_zone_id|s:2:"57";'),
('3u9kgg3rn1mc4aj7rqo32j7ki0', 1320076863, 'sessiontoken|s:32:"cfecd617464228b8bbe6bf2f42d4c736";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('3vjvn0sbhvoq5969ei779lejk2', 1321096877, 'sessiontoken|s:32:"fa05c7bb90e189b78820afdf1a6b3700";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('416l4s1bfl02gnn0gch6bros91', 1321672011, 'sessiontoken|s:32:"0238a5f6774a7e796e739c0f697a1766";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('41a987765tjrdsprj0apneq6k5', 1320500247, 'sessiontoken|s:32:"3df7b97c3c85a57e8fd5367dbe5e372a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"52";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('438tu8obdbbaig0kq9vl4akmp1', 1320231838, 'sessiontoken|s:32:"d859b469adb5038dbf145ea6b3c32242";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('47g0brffkffptnub3es08qbek7', 1320533242, 'sessiontoken|s:32:"0c390698b3cc8f6d73ca93fe9aebfec7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('490olmaqe7g5vie7i28a8tc243', 1321415619, 'sessiontoken|s:32:"84286c56ecdfaef41cb5eb62dffc3a4f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4boi0dms047i9uorpv5bglcc23', 1320088561, 'sessiontoken|s:32:"4a6d2f0556c13c037484fb01b130d808";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4cvb9lr1tmb4500l0lm8cvih87', 1320237989, 'sessiontoken|s:32:"3c4e1db8e32ab032fbfac83702da094d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4j7731qakd9t476ftn02eokt65', 1320516146, 'sessiontoken|s:32:"b31095844a341aee7a431f2aab3a1d7f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4l9pnmqsg3k0r40bqtich136p7', 1321453460, 'sessiontoken|s:32:"17f9bed8abbb260240ba8473467a14e7";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"4l9pnmqsg3k0r40bqtich136p7";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:6:"osCsid";s:26:"4l9pnmqsg3k0r40bqtich136p7";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4lquperad8pdolt50kuiks0556', 1321467649, 'sessiontoken|s:32:"bdee0251c51f0a6448113870441ac2e0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4n2bqu4oforge0i3t41ln3ga63', 1320387629, 'sessiontoken|s:32:"e308b8b41b4a6be965c038b783eeed44";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}');
INSERT INTO `sessions` (`sesskey`, `expiry`, `value`) VALUES
('4n99qf4gjmuhv1as8enqfuram7', 1320093835, 'sessiontoken|s:32:"53bdd0a3678573004a56021c3e1c21bf";cart|O:12:"shoppingCart":5:{s:8:"contents";a:3:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";s:1:"1";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}84";a:2:{s:3:"qty";s:1:"2";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"84";}}s:40:"34{14}41{1}60{12}35{7}68{13}38{6}32{2}67";a:2:{s:3:"qty";s:1:"1";s:10:"attributes";a:7:{i:14;s:2:"41";i:1;s:2:"60";i:12;s:2:"35";i:7;s:2:"68";i:13;s:2:"38";i:6;s:2:"32";i:2;s:2:"67";}}}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;s:6:"cartID";s:5:"65333";}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:21:"checkout_shipping.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:7:"process";}s:4:"post";a:5:{s:6:"formid";s:32:"90c6c6a699d9a72807596879f2ba9b5a";s:13:"email_address";s:19:"josephn@fastlam.com";s:8:"password";s:5:"jlaaD";s:1:"x";s:2:"48";s:1:"y";s:2:"14";}}}s:8:"snapshot";a:0:{}}customer_id|s:1:"4";customer_default_address_id|s:1:"4";customer_first_name|s:3:"Joe";customer_country_id|s:3:"223";customer_zone_id|s:2:"57";'),
('4niun7gn49s9eoj7vfibdv5pd2', 1321074656, 'sessiontoken|s:32:"a280765e87edc4070647ab17544a971b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4rdge7qphfboauc54i630lki20', 1320291737, 'sessiontoken|s:32:"6db13dc1fb52b82c1e13417ffce53dd8";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4rklv7os91uag8kapqq10qcvk1', 1320825032, 'sessiontoken|s:32:"3e96a3ebbcb0f4632c87ec22b078f1e1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4rp0n01gnh4irkic44qak0q7u5', 1320239736, 'sessiontoken|s:32:"2298d605d3d83a0370cc6bd35fd4d6eb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4shn70dg6chocpaohasser6bc4', 1321540129, 'sessiontoken|s:32:"5712507fdf4c93e1775a41b18c544d16";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"8";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('4t67hrr6bla1gg8fcjvkknukd2', 1321396009, 'sessiontoken|s:32:"5206340250de7cff9cba3795fbaa6ee0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('54n68a85hc3g7r69pmqcdcdi07', 1320852507, 'sessiontoken|s:32:"2295c8b45c99775c163e4793b43d702a";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:6:"osCsid";s:26:"54n68a85hc3g7r69pmqcdcdi07";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('56ughshg3d98go52c6ma12a9q1', 1321436845, 'sessiontoken|s:32:"16af4510891bf0e0d02bd84a78f2ca0d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5917gqso3mp347qkgom0073rb7', 1320906076, 'sessiontoken|s:32:"a53b79ea9bdcd4d6fbcbc8f9a54b045b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5am1ddri02u8rt1bk176rt27v4', 1320509154, 'sessiontoken|s:32:"e4f5f5f1238cf754de7333cc58ed38ba";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5asb4o9ps3ltql5t3db58bad02', 1320058770, 'sessiontoken|s:32:"c99eed771da88fa67c5e97c4b15c97cc";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5bu01nbtt7tf80p707lesb8l35', 1320450530, 'sessiontoken|s:32:"42fdf5e42442e7a80398e88b8a42d0f2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5c76jd0lle7c3qhsbobit9df41', 1320086123, 'sessiontoken|s:32:"08f5d2966bba2d17ab475d7b54481d6b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5e33d41k70741d0a5pq428s123', 1319903746, 'sessiontoken|s:32:"b19532a7951d7119571dfd913565ea27";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5kvso07ndd97fkol8j1ujm0kr4', 1321068936, 'sessiontoken|s:32:"2b04c9533da43a99e60f989a3446c9a3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5lml1a40ge3lengl7d29f4ivo2', 1319938180, 'sessiontoken|s:32:"8880482f356d96b126b97a497994a31a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5men3l132m3lv20d3u44bjnb47', 1320182984, 'sessiontoken|s:32:"d793ba371a26ef64145ef49de092e9b2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5nev3ahh6faovf3illlsg3j9l1', 1320770375, 'sessiontoken|s:32:"4d5660be70466e3434b8afeecb31eda0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5o05o0kgp8s5ufltq5ekpf4p27', 1320150291, 'sessiontoken|s:32:"1853d3ab824ff54d244c4396523465eb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5p9o6135sbtirv01g3fv0dqhb3', 1321027567, 'sessiontoken|s:32:"9ca74c9c398dd7a76a46d5367415234b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5pijuofvs8uddltjsppt7sr313', 1320482969, 'sessiontoken|s:32:"94b375423e36d024926f329b2661b4a4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5qi7qufh37evsl0u74taj5c5q0', 1320339683, 'sessiontoken|s:32:"b2aa4c36a244341edf6a350feecedb84";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5smd3ngqso46cv6vf3fju8jpm2', 1320319689, 'sessiontoken|s:32:"839cac461f9dcd327ba2a0054584e51c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5tpamfc9onjljpu6qq6k9sel27', 1321534073, 'sessiontoken|s:32:"2f94d2888cf2d6703c250a1863b30f60";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5tu5sebg3rut0ca8e34pgjdr34', 1320534484, 'sessiontoken|s:32:"6ff5f7101414d92309d0651bcad24a00";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"1";s:6:"osCsid";s:26:"5tu5sebg3rut0ca8e34pgjdr34";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('5voqido8mk52iju2ealkdtfr16', 1320863577, 'sessiontoken|s:32:"c4be7bcf87c032ed967fc48f1d7599fd";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6054abeu2v52dgkkttaj7m69g0', 1319889332, 'sessiontoken|s:32:"1ee600b7db64ba961b8c8fac200ad8f4";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}}s:5:"total";d:-33.86999999999999744204615126363933086395263671875;s:6:"weight";d:0;s:6:"cartID";s:5:"23440";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:4:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"23";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:11:"products_id";s:2:"29";s:6:"action";s:11:"add_product";}s:4:"post";a:4:{s:2:"id";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}s:11:"products_id";s:2:"29";s:1:"x";s:2:"22";s:1:"y";s:1:"3";}}i:3;a:4:{s:4:"page";s:18:"upload_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}b_image|s:38:"1319885991604_Chrysanthemum - Copy.jpg";fimage|s:35:"1319886879176_Lighthouse - Copy.jpg";fdesign_instruction|s:31:"<br><b>Instructions</b><br><br>";online_design_comment|a:1:{s:0:"";s:31:"<br><b>Instructions</b><br><br>";}pnam1|a:1:{s:0:"";s:74:"1319886879176_Lighthouse - Copy.jpg|1319885991604_Chrysanthemum - Copy.jpg";}showimg|s:35:"1319886879176_Lighthouse - Copy.jpg";instruction|s:31:"<br><b>Instructions</b><br><br>";bdesign|N;bimage|s:38:"1319885991604_Chrysanthemum - Copy.jpg";customer_id|s:1:"3";customer_default_address_id|s:1:"3";customer_first_name|s:4:"ajit";customer_country_id|s:2:"99";customer_zone_id|s:1:"0";'),
('615b70g4cpso34dbd7hscv8md0', 1321389264, 'sessiontoken|s:32:"7140e3eb63077e147571e9e5ace40f94";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('615virsp55fqfp2pnignvvidb0', 1320547919, 'sessiontoken|s:32:"867d6ca2c056644a23c64d61919a3b18";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('61g1gkrrlu75phost715e5eqp7', 1320275459, 'sessiontoken|s:32:"c57a27531f79d8c32ae0f51e470e8f9c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('64r5p85cj3h0p2mn1ekcbr18q4', 1320231838, 'sessiontoken|s:32:"01234b18893d72078253068df6fa8901";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('64skgb3gk36tnotnfb3lpoihi7', 1320498684, 'sessiontoken|s:32:"67223fc9a43411d3e7fc0d1e752d1979";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"26";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('66s5enskigvken10hn6e2j5j72', 1321403539, 'sessiontoken|s:32:"b942fd3663c6dc70a48978b458017b06";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('673iit9nocj7vefcogm6h672v3', 1320237977, 'sessiontoken|s:32:"2f49c801235f4141616222594c243a6a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"31";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('67h40l47eatv7p6gmhf54duvj6', 1321652618, 'sessiontoken|s:32:"e2bae127678cec06af678cd8379a4880";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('69h0oe9elf9qeiq851r3d56u06', 1321532362, 'sessiontoken|s:32:"ebd8d3da7aaa18d0be229277908c9077";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"pageid";s:10:"ProxyLists";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6afrardfu6kfr39177mbphk887', 1321086928, 'sessiontoken|s:32:"b5fb4e452b12065d770d1fd1a8f9dce1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6b291lv1qc1075v5evgggjtuk7', 1320405024, 'sessiontoken|s:32:"a174d2ad5ca78007897ac228eb028046";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6bhmfv3u4ui7lls1lfggjf2696', 1319931779, 'sessiontoken|s:32:"825c9156c9afbfafbdfa5f00e1b2cbc7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6itaq3b05t4g9o29a4mc4tnd64', 1319938182, 'sessiontoken|s:32:"38a4f5faf799006998917beaba8b12cb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:18:"create_account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6j5uqci86e7gg58fuumo7p58p7', 1320850457, 'sessiontoken|s:32:"17c329bb93b12e092959178094d703e5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6l7and6112sf5m8isemblsgg13', 1320237973, 'sessiontoken|s:32:"14da5f7aab56a63c31daa69b0bca5a3f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"32";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6n72t381sg86k42kecgdgon7k0', 1321625367, 'sessiontoken|s:32:"89e3cb7b60f689ff5789daa4e81b082e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6nn3bmr8ictgldhs46jmg77k55', 1320661774, 'sessiontoken|s:32:"96026365657da7f2c06e3bbcef478a0b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6nocmgshcv99qsnmovc98k8gt3', 1319897817, 'sessiontoken|s:32:"0e96806911bbc9223e2f9da82fc22e71";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";d:90;s:6:"weight";d:0;s:6:"cartID";s:5:"63679";s:12:"content_type";s:8:"physical";}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:4:{i:0;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"49";}s:4:"post";a:0:{}}i:3;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:11:"products_id";s:2:"49";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}b_image|s:0:"";fimage|s:21:"1319894024644_000.jpg";fdesign_instruction|s:31:"<br><b>Instructions</b><br><br>";online_design_comment|a:1:{s:0:"";s:31:"<br><b>Instructions</b><br><br>";}pnam1|a:1:{s:0:"";s:22:"1319894024644_000.jpg|";}showimg|s:21:"1319894024644_000.jpg";instruction|s:31:"<br><b>Instructions</b><br><br>";bdesign|N;customer_id|s:1:"3";customer_default_address_id|s:1:"3";customer_first_name|s:4:"ajit";customer_country_id|s:2:"99";customer_zone_id|s:1:"0";sendto|s:1:"3";cartID|s:5:"13631";comments|s:0:"";shipping|a:3:{s:2:"id";s:9:"flat_flat";s:5:"title";s:20:"Flat Rate (Best Way)";s:4:"cost";s:4:"5.00";}billto|s:1:"3";payment|s:15:"paypal_standard";'),
('6oo5pkh53fef9r66o7dre0pb92', 1320847503, 'sessiontoken|s:32:"e15eefb3c09ff1fab24089a4c1e1308c";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"6";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:11:"products_id";s:2:"29";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('6pnv6q78e4hijb97vh2etdch15', 1321453822, 'sessiontoken|s:32:"af5f4d826880ba58e7b399a4b4ae4afc";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('70tkmb2oli3jp1nodbcv7cff64', 1319898699, 'sessiontoken|s:32:"5c9e67aaf836e238f20b66a8bc081ea5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('70vb58ccq1sq1llihfmri8g0o3', 1320418564, 'sessiontoken|s:32:"8df2177842527ce31031f739b72a8673";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('725qmr0sj6bi16ajjtnvhkcf12', 1320192601, 'sessiontoken|s:32:"63bd2040dd0fb4d11929ea15e7718f3c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('726gq02rk4v3nip5vh9o6pmdp3', 1320624957, 'sessiontoken|s:32:"d792408e5d38e48bc8e57445d87a2da6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('72rc0ve7cp3m97iejj96akk531', 1321515180, 'sessiontoken|s:32:"6b4204f28859fe385b1982619e3bebe6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7341a0uk3fc2m89f6mdgega570', 1320648985, 'sessiontoken|s:32:"36d30f07daa92eb3b27fdc43a3660a91";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('73ktfttlulucdai6u7l0oo7346', 1320051675, 'sessiontoken|s:32:"0231c9390e248a7b653b81d70afd3ebb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('73v6tcrp2tfqb3f3dajupa08n5', 1320422251, 'sessiontoken|s:32:"52ba64c01f006f12d1c258eb60c710b5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('752jv9mafkbpd9ej9g6ou82nu7', 1321532924, 'sessiontoken|s:32:"54fc56de1bd58d4d3353d589ef069338";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('75qc41cqdj2vbs9k1tudtn0gq2', 1321587192, 'sessiontoken|s:32:"6a0d61b47b1edcf7d2df188f9ab6890a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('79a5c3h8gpt5ciuvkn6fon6ge6', 1320578984, 'sessiontoken|s:32:"4f41d554e2f7c6921410f8015a39667b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7b6hk8dhn5rso6eir3j19qsv07', 1321443009, 'sessiontoken|s:32:"c1f4eac8f91573068486bae9ae79ba6b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7chnhhn7vomgj6f4qj0r1sjqu3', 1321413298, 'sessiontoken|s:32:"50a757f1ec509e31777d723e6adbe0b0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"pageid";s:10:"ProxyLists";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7d5b15bs7jictka7dlmh0n2qf2', 1321495858, 'sessiontoken|s:32:"2e693ab5643b57f69e24ec99f1aa3388";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7fgje2rdcqjdveaq3or5so51j5', 1320237967, 'sessiontoken|s:32:"5c2955346f68ff252e8b678ba6f53110";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"35";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7k8uvilfpop1hks4lnaptls453', 1320419771, 'sessiontoken|s:32:"5c174238d2e6e51ca09fb11980f306bb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7ll19m7nujkppj2nck6fu0tbj6', 1321041672, 'sessiontoken|s:32:"8373798ab9e0d1ad6a9273119feafd7d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7lsus8nof715k56ujo3f0nr9j4', 1320821846, 'sessiontoken|s:32:"0bd6bb8d82d513db7158ab1b7975abbc";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7m8sv02dil9h6mug1lnunoh7q4', 1321538718, 'sessiontoken|s:32:"5a77cafe7a0fb8a8ffcb6141da02eb17";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7p4qr470rofuqg46u23pb66l67', 1320268951, 'sessiontoken|s:32:"bb819082f01b1bbcbc863c22fbc107a7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7q1phb7ir4km2n0fqbq64u2t85', 1320237957, 'sessiontoken|s:32:"08dbd34936923bbac999013f33ab53a1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"42";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7r674j39vnj2jif1qo9q3dsd32', 1320122597, 'sessiontoken|s:32:"9bf6294243cb37df3dcd0842ce59ec19";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7tfd4fkvu1gh14e8prviug6rh5', 1319972470, 'sessiontoken|s:32:"6377f230ad2e1e626fcc8ffe5e76f693";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('7tso4od6g3bu6v7l5611faand5', 1319952012, 'sessiontoken|s:32:"f3e6a761aa19e068cbea14252167c45e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('82kltfp0fjqcu5vim8ativa610', 1319942005, 'sessiontoken|s:32:"ec4d38590ab1b5bed4bbb2c0a83e04ed";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('83jidv1qu6rbitaqateeugg5j3', 1321658760, 'sessiontoken|s:32:"9dfecfc3008a54cd1e3e3389a0b68b7c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('84c7o02a0ubu3lt1dakd0d5dv5', 1320736795, 'sessiontoken|s:32:"baa71c890fdf60fdabd65677a20cf8ca";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"oi5c4cmgaftonkhfbe36fomhg0";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('85efmm2r6noh6q90kjb8rle120', 1320129586, 'sessiontoken|s:32:"4c7437d2bd89d4816836cca2d2401d01";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}}s:5:"total";d:86.8700000000000045474735088646411895751953125;s:6:"weight";d:0;s:6:"cartID";s:5:"59610";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:6:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cPath";s:2:"23";s:6:"osCsid";s:26:"85efmm2r6noh6q90kjb8rle120";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:3:{s:11:"products_id";s:2:"29";s:6:"action";s:11:"add_product";s:6:"osCsid";s:26:"85efmm2r6noh6q90kjb8rle120";}s:4:"post";a:4:{s:2:"id";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}s:11:"products_id";s:2:"29";s:1:"x";s:2:"98";s:1:"y";s:2:"17";}}i:3;a:4:{s:4:"page";s:18:"upload_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:6:"action";s:12:"upload_filee";s:6:"osCsid";s:26:"85efmm2r6noh6q90kjb8rle120";}s:4:"post";a:11:{s:9:"front_img";s:21:"1320126427235_000.jpg";s:10:"product_id";s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";s:15:"yourID_filename";s:7:"000.jpg";s:11:"yourID_guid";s:21:"1320126427235_000.jpg";s:8:"back_img";s:21:"1320126427238_000.jpg";s:16:"yourID1_filename";s:7:"000.jpg";s:12:"yourID1_guid";s:21:"1320126427238_000.jpg";s:19:"fdesign_instruction";s:0:"";s:4:"cccc";s:3:"vvv";s:1:"x";s:2:"51";s:1:"y";s:1:"8";}}i:4;a:4:{s:4:"page";s:16:"show_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"85efmm2r6noh6q90kjb8rle120";}s:4:"post";a:0:{}}i:5;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"85efmm2r6noh6q90kjb8rle120";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}b_image|s:21:"1320126427238_000.jpg";fimage|s:21:"1320126427235_000.jpg";fdesign_instruction|s:31:"<br><b>Instructions</b><br><br>";online_design_comment|a:1:{s:0:"";s:31:"<br><b>Instructions</b><br><br>";}pnam1|a:1:{s:0:"";s:43:"1320126427235_000.jpg|1320126427238_000.jpg";}showimg|s:21:"1320126427235_000.jpg";instruction|s:31:"<br><b>Instructions</b><br><br>";bdesign|N;bimage|s:21:"1320126427238_000.jpg";'),
('8781uu7k8jv07k2bhsbrauuq06', 1320676323, 'sessiontoken|s:32:"40eac239bf54f3370e892217a86fea55";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"2";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('87euldtpdue16lhr0c0dtiopk1', 1320639524, 'sessiontoken|s:32:"9fc6919d5e21c0fa5e5517da40edda78";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8a3uu0kg50grbohtap2nhhl255', 1320694235, 'sessiontoken|s:32:"71b65c47e7559225317fb31f888b5eb3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8bbaln006bubct5ic15104o454', 1320418972, 'sessiontoken|s:32:"a5b56ea205cf147f24ad853dcf1eca92";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:4:"send";}s:4:"post";a:4:{s:6:"formid";s:32:"a5b56ea205cf147f24ad853dcf1eca92";s:7:"country";s:0:"";s:7:"enquiry";s:1381:"Hello,\r\n\r\nI visited your website a few weeks ago and left a message. I feel your organization can benefit from my firm\\''s services.\r\n\r\nOver $2 billion in UPS/FedEx guaranteed service refunds go uncollected annually. \r\nThe reasons are simple: identifying late deliveries and acquiring refunds is not easy, \r\nand you only have a few days to submit a claim..\r\n\r\nElectronic Tracking and Auditing (ETA) can save you money by recovering refunds \r\non your behalf. Our business proposition is simple and straightforward:\r\n\r\n* We track UPS and FedEx shipments on behalf of your company including FedEx Freight\r\n* We identify late deliveries and recover refunds for you\r\n* Our tracking service has no cost - we only bill for half of any refunds we recover (no refund, no charge)\r\n* We use our computers and software eliminating security risks to your systems\r\n* There is no contract, set-up or maintenance fee\r\n\r\nSigning up only takes a few minutes and there is no need for your shipping staff \r\nto alter any existing processes. Refunds appear on your regular UPS or FedEx bill.\r\nMy direct line is 800-929-5474 ext. 8888. For more info visit our website at \r\nwww.eta--refunds.com. I look forward to hearing from you.\r\n\r\nBest regards,\r\nOrby Kelley\r\nVice President\r\nElectronic Tracking and Auditing (ETA)\r\n7008 Willow Run Drive\r\nDublin, OH  43017\r\n800-929-5474 ext.8888\r\nwww.eta--refunds.com\r\n";s:4:"send";s:0:"";}}}s:8:"snapshot";a:0:{}}'),
('8fks3epnq2gkrn9adl4noli7s2', 1321687679, 'sessiontoken|s:32:"e335f24528dca25b202f2bc3908249f0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8gbad4l59r4c8e84l2ulm8ufu2', 1320268950, 'sessiontoken|s:32:"03ef75c8ff3c6ffdc967f0e5077fba28";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8h2e5ucegukbh37sfqkbtrl2d2', 1320905162, 'sessiontoken|s:32:"097150edacc769c116d2073f3c1aec0d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8h47qc876h3o95m0qurvnk0eg5', 1320590571, 'sessiontoken|s:32:"3950dc22ebe62b6fc8dc1bb03ef2d6f5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8h87k457kofbnst4nhgarg9n57', 1320494338, 'sessiontoken|s:32:"09fada446021e9532f42ed70a505713f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"28";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8kusjlnc21b6cur6dbuef7m882', 1320237948, 'sessiontoken|s:32:"ab89eae848f029fd4f01b9c3513bc9cc";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"45";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8l5bl1stigrcugb94c40ulv8q6', 1321598349, 'sessiontoken|s:32:"3f2fb20ac52347b6644638722edb955a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8oqmsiu6ljtk2gub7unp116ef6', 1320246957, 'sessiontoken|s:32:"279514fcacfd92fbe081af4aa82b873e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('8r96h41j1ntfsl5l51dhv48io6', 1320604802, 'sessiontoken|s:32:"cd83ad508960b228ec02e9fd335ee509";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('901ok8a3qco04t1hhdi5djaop0', 1321645990, 'sessiontoken|s:32:"50700142c1ce749fc1dc548548fc9a87";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('90fcbc65mo3iu4e1ckov7l7e50', 1319909227, 'sessiontoken|s:32:"a65b31f193009aa681c55e6f6662863d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('94lmv3fksnf51g2gb951j2c2o4', 1320477836, 'sessiontoken|s:32:"0edb4eafe4be4a651ddcd1cc8aae9a35";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"320v2gb9sv4lkiqiot171ph3k2";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('958sirsc15qqq4ku13i5kks9f6', 1321646067, 'sessiontoken|s:32:"70f829ae2852a6dc0de9757a36ebd74c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('98belcmis0uhvvffg1ljv0o493', 1321392270, 'sessiontoken|s:32:"ea504c9b025c7647b5c685e6fde0ca71";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}');
INSERT INTO `sessions` (`sesskey`, `expiry`, `value`) VALUES
('9aju6ah2lh3pmt9tlri4rdlq34', 1319936405, 'sessiontoken|s:32:"87d68b6432ec5e91e454b3acb513ff73";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('9ga11hf5ngv1sat67eauhkbpl1', 1320987322, 'sessiontoken|s:32:"33edf860d4cde25d16422e0978958d12";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('9nk5577fep778im5qimpo4lbi4', 1320331880, 'sessiontoken|s:32:"6653ce571cdf4a3919454d80bb070d10";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('9p39b4rlficsfegn6ftolk97s4', 1321680107, 'sessiontoken|s:32:"768804eb1be53ce0a485c8480e4c58f4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('9p45rioj7q8tui2lhdg6ncj0c5', 1320814520, 'sessiontoken|s:32:"670f00aececf6b73b87c86fc86eae256";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('9pajh0dupcckk2ktmnb51caep0', 1321005744, 'sessiontoken|s:32:"87cfa44140e711d60f203d032dbc3427";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('9sm30j8n8acei9b3qpv94kdto4', 1321059082, 'sessiontoken|s:32:"0c9b84c36a84c0058af19f884b56b205";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('9tphrgkcjq3vbvdg4efvosr6p5', 1320093723, 'sessiontoken|s:32:"92f38235db85bf300f98db80f0732a73";cart|O:12:"shoppingCart":5:{s:8:"contents";a:2:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";s:1:"1";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}84";a:2:{s:3:"qty";s:1:"2";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"84";}}}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;s:6:"cartID";s:5:"86629";}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:7:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"23";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:11:"products_id";s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}84";s:6:"action";s:11:"add_product";}s:4:"post";a:4:{s:2:"id";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"84";}s:11:"products_id";s:2:"29";s:2:"_x";s:2:"80";s:2:"_y";s:2:"25";}}i:3;a:4:{s:4:"page";s:18:"upload_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:4;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:5;a:4:{s:4:"page";s:21:"checkout_shipping.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:6;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:7:"process";}s:4:"post";a:5:{s:6:"formid";s:32:"4b45d4d71e5f7452b2d05858162624a8";s:13:"email_address";s:19:"josephn@fastlam.com";s:8:"password";s:7:"fastlam";s:1:"x";s:2:"60";s:1:"y";s:2:"21";}}}s:8:"snapshot";a:0:{}}customer_id|s:1:"4";customer_default_address_id|s:1:"4";customer_first_name|s:3:"Joe";customer_country_id|s:3:"223";customer_zone_id|s:2:"57";'),
('9tv72ah2m92bmlimg2qbth8mj5', 1321367398, 'sessiontoken|s:32:"28b01875f17b8a1fffefb5239296ab28";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('9vu3cf4gbhsf9htc3lcq6cnto7', 1320478635, 'sessiontoken|s:32:"4f6c132a4ff0493d15ad350d15f9f7c4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"40";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('a6jn4762npdosofrrdtdkafcf2', 1321666066, 'sessiontoken|s:32:"4d1cbd58b67ff87e8849626cb05da042";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('a7ah3f7gpnmds9639a8021ta55', 1321435381, 'sessiontoken|s:32:"ee73d6c9d7e12f48822bbb584797dfcf";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('a7ftcl2jkfane45invddg91gc1', 1320590572, 'sessiontoken|s:32:"52872735540bd522c6e1ce69a7201d86";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('a7ra1d602g7rapaauvggnhfk13', 1321648849, 'sessiontoken|s:32:"33bdf1a0710560a5371e105ce98cd412";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('a7t78hf794m422bi2d4ei22jp0', 1321680105, 'sessiontoken|s:32:"297625315345a06ae24687245b1da31e";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:18:"create_account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"a7t78hf794m422bi2d4ei22jp0";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"6";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('a80p1i7nr17ttcc32fm3l5gjd2', 1320489789, 'sessiontoken|s:32:"c833ed0b29a29e3099818c410856bb9e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('a9s7mukhm36e839ppond1cicq4', 1320831258, 'sessiontoken|s:32:"953aa1c2397aa247f25f5c28e6a90ae0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('aars8jru4rgct1s8e1jbbko3e4', 1321453527, 'sessiontoken|s:32:"647a739ba257a9dea6d376c7049e7de8";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:11:"samples.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('aca04gp4ihfbh63q0otbd6nns4', 1320829787, 'sessiontoken|s:32:"2730981c3fe8fa9d785149800181172c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ade0015vie6n48b0hg1ke0a3f2', 1320471929, 'sessiontoken|s:32:"a06a36be710deb0be2cfffa58119bd02";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('adrat37aufaa0t4ji8gn7herd1', 1320237980, 'sessiontoken|s:32:"fbe20dc9905d63876e78fdcea688fe2f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"25";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('aj2umu1aome1qfahb5jq6olms7', 1321452405, 'sessiontoken|s:32:"5519b831a74e582de8a028aa3b56050b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('alovsl40olkia4j2fsnif9oqk7', 1320054191, 'sessiontoken|s:32:"a18cc338887c13e6daccc89031feef8a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('an8j87kb5lj33csjm9oi165b72', 1320726537, 'sessiontoken|s:32:"c8615918a14c0756554d884bd1af410e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('aptqu1qvvgt1hsgf89qkj81vi3', 1320237946, 'sessiontoken|s:32:"57887ad18e67c017e41f12af936668c3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"50";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('aqnibev5520gc3c3bq1llbnss3', 1320828242, 'language|s:7:"english";languages_id|s:1:"1";redirect_origin|a:2:{s:4:"page";s:14:"categories.php";s:3:"get";a:2:{s:5:"cPath";s:0:"";s:6:"action";s:19:"new_product_preview";}}'),
('arkj8akuva1u3q3j0141i2kk70', 1320835176, 'sessiontoken|s:32:"f23683bc6df91feaa5d772a64c2cbfad";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:6:"osCsid";s:26:"arkj8akuva1u3q3j0141i2kk70";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('avc71amsgcse6gp9bllu1a76a3', 1320069647, 'sessiontoken|s:32:"b48381fdd5d27487dae60d822479b3ea";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('b0bloga0f6apafl4vpbr13rmi2', 1320312041, 'sessiontoken|s:32:"b3b44906aae8f41bfc4cf4d064f8a71a";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"49";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('b1s58e8per48o3g6ns5ohsej04', 1321520928, 'sessiontoken|s:32:"b2d10cc003a0397f9ca38cf53270b3f8";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('b5i4sflbvdifit1rgkq2b12752', 1320397683, 'sessiontoken|s:32:"3af2be2a7a67c4c845f1d4cacb793896";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('b5jssd6s0anrfjob6lcfnkcoi5', 1320326539, 'language|s:7:"english";languages_id|s:1:"1";admin|a:2:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";}'),
('b65j1goeogdnmbg02d1v0i3ii1', 1321603270, 'sessiontoken|s:32:"317d24370d1f9fa12050aba836204c5e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('b6e4aq70q6tr1mot0mghg6m892', 1320467596, 'sessiontoken|s:32:"1d33dde8eefd7fa2627858522c3e3e30";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('b7d1dojmgb429qsqdvcb6u8n63', 1320539733, 'sessiontoken|s:32:"74d5f2589daede2912c90d2d6e8c142a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:11:"samples.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bc537ocslruvhue8g0qipd17o2', 1320511811, 'sessiontoken|s:32:"c79b6958df2ca049c449f6b35314e313";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"51";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bcc4ce1cpsa6342l9fal9re8q2', 1320578581, 'sessiontoken|s:32:"5af666b1bf9139607f98dabe56ffa34a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bdsd6s2f0hma2u2g9g9mn4fqp2', 1320845933, 'sessiontoken|s:32:"6f4d7cb3adf18c993a5cd636793620d9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bemic1u1uo4rnq5e8fi34acis0', 1319938178, 'sessiontoken|s:32:"59a3907dba46cb1eceb51c1ccfd59acb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cpath";s:2:"51";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bghg1vemt8j8ig8q4e5uhaj5v5', 1320093789, 'sessiontoken|s:32:"5f350cef6a8e750c3b75207cdb4da0d4";cart|O:12:"shoppingCart":5:{s:8:"contents";a:2:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";s:1:"1";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}84";a:2:{s:3:"qty";s:1:"2";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"84";}}}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;s:6:"cartID";s:5:"57654";}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:21:"checkout_shipping.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:7:"process";}s:4:"post";a:5:{s:6:"formid";s:32:"1a3e0eee1b97fe02bd1d5a81b829a68d";s:13:"email_address";s:19:"josephn@fastlam.com";s:8:"password";s:5:"jlaaD";s:1:"x";s:2:"40";s:1:"y";s:2:"17";}}}s:8:"snapshot";a:0:{}}customer_id|s:1:"4";customer_default_address_id|s:1:"4";customer_first_name|s:3:"Joe";customer_country_id|s:3:"223";customer_zone_id|s:2:"57";'),
('bghsmcl3860o9pggvuhi0tgh11', 1321566829, 'sessiontoken|s:32:"74d9cba6dfba54591b79a53f80b9825f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bgn1fd0mb3ivcqpdljtfitqtt1', 1321032415, 'sessiontoken|s:32:"bb0402ff5e316d93ff83d4d3ad6f3bc9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bhs63d10dpreo8chd425akvco1', 1321594123, 'sessiontoken|s:32:"964f7e44d823cfd00eb8d89bd03256d7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bi07ebkoip9hmqcmjsc7dbn7h1', 1321653998, 'sessiontoken|s:32:"3c804d688c5015f49a692a97df51372c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"ot3apqakdhekg53cat2eas2ma7";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bi4rdtbtgbpkrvtucablpqdj54', 1320431607, 'sessiontoken|s:32:"55a175bae7db8d4667b2d232ebd698e5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bit1b1apsm3k8ms9hq38pjlu75', 1320039669, 'sessiontoken|s:32:"56ae1e18cbb4637e72b580846faa97d8";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}}s:5:"total";d:73.8700000000000045474735088646411895751953125;s:6:"weight";d:0;s:6:"cartID";s:5:"03238";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:7:"process";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"bit1b1apsm3k8ms9hq38pjlu75";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bmdolvp2kd0oh00g02764mjgk3', 1320739945, 'sessiontoken|s:32:"c79cc921f5eee1952ff737de6891ecfd";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('br32hqd2m1uiufpgocu9dv2fo3', 1320070571, 'sessiontoken|s:32:"8d072d504b9f662b3b2a43baf68c4508";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bt8he5aldbdj4rjitsjek2ter6', 1320827111, 'sessiontoken|s:32:"403a2b987eb5035692642b4910d9f132";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('btviavln5p5v7aa4eulsdo9ev5', 1319938197, 'sessiontoken|s:32:"e0a3f94a8fdd31d30b0e5884cb2460f7";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:11:"account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"btviavln5p5v7aa4eulsdo9ev5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:4:{s:4:"page";s:11:"account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}'),
('bvcfoku1g1tnsnrb4kjtke0bq2', 1320158742, 'sessiontoken|s:32:"169205cb633eb5c3224e40281ca7cdba";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('bvhuc8aec8hv482b8r1hhkifu7', 1321464191, 'sessiontoken|s:32:"fa06870ee67bbcf0609cd131db23afd1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('c3a2pe83ru1nkcqrf088csj7c6', 1320385841, 'sessiontoken|s:32:"28fd291d9b4cb0711b9897be349b07a5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('c4qsu948nvbuplm7sri6cjs0v0', 1320726657, 'sessiontoken|s:32:"1daef6d7698122adb604a1a4869c97b6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('c50l4tlfl0e2ve36vo00g1smh3', 1321569814, 'sessiontoken|s:32:"8e633359167aa4ebd3d330f80f8683c6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ca08emmtcnef2dq0keeu5mbc76', 1320837056, 'sessiontoken|s:32:"cc8907e991ad5adcd236f4bd41b3a414";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cei53ikf8cbjl28rlt80ka4mp3', 1320093805, 'sessiontoken|s:32:"319b3a6fc53f9b934e7d4fd92a2448d5";cart|O:12:"shoppingCart":5:{s:8:"contents";a:2:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";s:1:"1";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}84";a:2:{s:3:"qty";s:1:"2";s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"84";}}}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;s:6:"cartID";s:5:"45911";}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:21:"checkout_shipping.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:7:"process";}s:4:"post";a:5:{s:6:"formid";s:32:"a3946a0571789355c00e6d19933b0323";s:13:"email_address";s:19:"josephn@fastlam.com";s:8:"password";s:5:"jlaaD";s:1:"x";s:2:"35";s:1:"y";s:2:"13";}}}s:8:"snapshot";a:0:{}}customer_id|s:1:"4";customer_default_address_id|s:1:"4";customer_first_name|s:3:"Joe";customer_country_id|s:3:"223";customer_zone_id|s:2:"57";'),
('cfu9moqhb7pv1is547i1dj1rj2', 1319923130, 'sessiontoken|s:32:"06fb2738a425e52240cac2b38f757b05";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ciea5p90s3jse8g1hlqmi5hlc1', 1321556609, 'sessiontoken|s:32:"3a4b886191cf35d3cd069dd41110ba94";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:11:"products_id";s:2:"42";s:6:"osCsid";s:26:"ciea5p90s3jse8g1hlqmi5hlc1";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('citv47hcjs9l4h4pdhjii49qv2', 1319938195, 'sessiontoken|s:32:"13f3ae34adbc63c1a2393bb08cfda56a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"1";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cjfi8hamndd1cko99somofrd42', 1321427465, 'sessiontoken|s:32:"0e4d6ffa02b9302d8de25f3b9894fcbf";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cjskkg3jb5enk3e2004bmj4dt3', 1320485159, 'sessiontoken|s:32:"5876c8f49e2826078cfc0f742dab62cb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"23";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ckb0sjt2odopm9ovvhhn7vqi67', 1320725752, 'sessiontoken|s:32:"200bd4f93f2364d296704af6b4a9ffdf";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('clc5od1u9tg95nhnvh8pitork4', 1320467693, 'sessiontoken|s:32:"3a2ca8e19cad8c29d9eb2fa288ddd1ac";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"32";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cmkuii4jf3s31utue6ttii38d0', 1320060662, 'sessiontoken|s:32:"13a3f043b725411a2928606ab0df2e5b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cnghdm4nd9818p89ilq345usj4', 1320237959, 'sessiontoken|s:32:"35ed6c46588ae389cabfd3b8c300afc4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"41";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cogg4eiel1ic7t0n2af698ons4', 1321004995, 'sessiontoken|s:32:"b432751d7c2bc06385cc1b6d2f5e8ee7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cpcnd92222fj248hbmttof33u7', 1320978676, 'sessiontoken|s:32:"3c62be28e1b2ef929e98feb2ac907347";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cq4uk2ikvtumh6rlpbp0spdp44', 1320571260, 'sessiontoken|s:32:"2370ad389c46d8337f527a965358061b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cr4r510lbn82kokmueiqndha25', 1320805934, 'sessiontoken|s:32:"c97405511c6f30d68d0b602d6e106f9a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('crrp90fnjnbs7sd29mp9q4duk2', 1320121773, 'sessiontoken|s:32:"97825d17ae7633e912236d3bd4b7e65a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ct69htbuv99ouga1lq7bgm3me7', 1321673167, 'sessiontoken|s:32:"4dc4cb37403bf00b5c83af8fb425deac";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cto4j0f443olhbdola8amu7185', 1320860289, 'sessiontoken|s:32:"f9198400f09db2bd96c0e166ab793a2d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cvcsgo4fnjk27irtc7d0qgvqv2', 1320922924, 'sessiontoken|s:32:"83fdb104c2744b2e22f340fca3f09151";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('cvfktvccahp7v0q6a8006816c5', 1320129581, 'sessiontoken|s:32:"08633801bb94fc268b7308251851c425";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('d016nern7gq1615prpr9iajr97', 1320301386, 'sessiontoken|s:32:"2d662b4d3486639d71677826ac24ebe2";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('d28eq1jlnob6onk138he8lc3j0', 1320134020, 'sessiontoken|s:32:"483ab0a72a8a18a5ea23c28aa8461792";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('d2bovirmbq4i71smnl28pae4a4', 1320077657, 'sessiontoken|s:32:"29164d3342f610c9b2bc065e4c8c8a12";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('d5qmhkv21rfl30reqt2br92dv5', 1320687891, 'sessiontoken|s:32:"e1dbf569cc1ed0105b8de292466be827";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('d5ua32f5d4ntvr3j0dvegd8qc3', 1321680119, 'sessiontoken|s:32:"0bf36e57c1d251f7f20707cb9fe664e1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('d7d125rev9d0knv91ra67k8ee4', 1320193415, 'sessiontoken|s:32:"5aa62911b9cb12f8c624a892afe2fe6e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('d84mfupfft04lj9i1tkj9lqi02', 1319970603, 'sessiontoken|s:32:"f5a3699aba46bf7d0605215425a498a0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('da01nvek4uh2nm1t77f1klbki0', 1320839923, 'sessiontoken|s:32:"4c37c0b5bd353e1ee7763e05f2f0d215";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('da7efgbnc2ogig01fvb1alsuv2', 1320228786, 'sessiontoken|s:32:"17e0d61d1df7dcaeae531d2842d0f034";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dbpa43c4io0fmjn23v619jjnq3', 1321527388, 'sessiontoken|s:32:"f24f3397d88365c9b1b19442eb1e5099";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ddq7tvar4r6b2r99et2v1t2o51', 1320157641, 'sessiontoken|s:32:"2003777d256115c711693a56ba12abc8";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dh00n9pcakqh2gfutk341pal23', 1320165433, 'sessiontoken|s:32:"ee16ee3d526bd1e448580ca497292ec4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('djdso26tit6qvv6dmquegnjn85', 1321101349, 'sessiontoken|s:32:"7c68a295e9c1afda0fd6ce1b29f42058";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dlfopumb2t8iml9m1f0d4a2oo2', 1321651020, 'sessiontoken|s:32:"c084b2785202df644102b58a40f182d0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dm0l5oakktdgerq7q9sq6sos26', 1320432275, 'sessiontoken|s:32:"1d072f042640b2ab4f687d5c796c8df1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dmoq47c1vldni1kd6ll9067vl2', 1320575689, 'sessiontoken|s:32:"db2f512398a0ef1495464c33c46315d1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dnfsvncgga9psqkd356isbeof0', 1320481846, 'sessiontoken|s:32:"94c5a166a311cb85b68082343e25c06f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dnhh0dkmkj05tihkmlbia529v2', 1321494493, 'sessiontoken|s:32:"6191c37f4f7da74722194d5d561d8d1f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dq5sekn2m9n1o4nuukj0uplba0', 1320184684, 'sessiontoken|s:32:"09be36b6390f052275523d3a75f10b37";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"2";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dq781j93ipfi6korl49uv2sp56', 1320476215, 'sessiontoken|s:32:"1567267f06b7d91ee57fd3a1835f46ba";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dqe10esa9rid8t356f9q2umvf1', 1320262591, 'sessiontoken|s:32:"04a131b936861b31337d6a5b2f009e9e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('drm73fmf0p3jbnu2t6i2glbbb7', 1320113841, 'sessiontoken|s:32:"a909c89f725c4b6c366e18592e864170";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ds28nfcmbmga3nhji90uproal5', 1320618679, 'sessiontoken|s:32:"cb6f45a0da497d9ee8a05f6b22d9733f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ds3eu1nr8tjbkoka24f68mm3r0', 1320557281, 'sessiontoken|s:32:"70df8fd46a8ce7a87e65e678260ce6b4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('dtl7voihbfhbcubpbsd6ddmb83', 1320338280, 'sessiontoken|s:32:"c10617695c20c3a4009d60ccf285c179";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('du1eeamihsvor1jksetsf6ms36', 1320246955, 'sessiontoken|s:32:"0fc1f4032f03b69b37e2443806362402";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}');
INSERT INTO `sessions` (`sesskey`, `expiry`, `value`) VALUES
('dugd6r15fp91b9e3jos6mjcub4', 1320760771, 'sessiontoken|s:32:"a422310590c6dac8c4f0bc5ac59bd063";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('e13i32jgdld7ednrl1jmmds852', 1320029181, 'sessiontoken|s:32:"cffcd42606c9701b2f5acbf7b67e38c2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('e6o5crirgb8keg2m9vnc66kgc7', 1320545303, 'sessiontoken|s:32:"f8e3b65cc2014f59789e67b72f30d02d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"45";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('e9pv6ib58k2vq63bjn2gj9nj97', 1321476952, 'sessiontoken|s:32:"e9845ab5bdb7af66940c33e64e2e3b00";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ebut0e4qjo1h3j0fpdm2bdf3s2', 1321675475, 'sessiontoken|s:32:"4b8833a3e986a0be98347f920f050b7f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ecesmgqacp9f7sm17qbn98b6j7', 1320494461, 'sessiontoken|s:32:"09f19ae02620b7131040d9e0444626c0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"47";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('edjek41osqaqprthgd0q1je5i5', 1321538688, 'sessiontoken|s:32:"e945f97de592dcfb7595c109934ec90f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ee3dimoo1tgkggbn4lpaueqb54', 1319959769, 'sessiontoken|s:32:"cd65cc62090a1dd9151898af388bcf0e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ef3sqvm39aksljdq3ucbq0gsg2', 1320541685, 'sessiontoken|s:32:"5c2bf2c5b46d376e11efbc0f29e58fb9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('efduulpu409gn97ikrbbpjcl94', 1320237912, 'sessiontoken|s:32:"f06a7389ff1a5dc87449085aec2848f5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ehb04ecjbta0lj93sb13c39906', 1320120612, 'sessiontoken|s:32:"a4804d80fc5c53d529af40b45706ed02";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ehoo0tthsfhe41qs03eacbgtp5', 1320237941, 'sessiontoken|s:32:"448c544e5f105d181076c8f87519fcc9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"47";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ei4mkjas01qcvcanr989hvdvn1', 1319991807, 'sessiontoken|s:32:"c08f73a97a404925ef1d70c9c1b682e0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('eijhialj1gvd679rrlsa2c7nh4', 1321465547, 'sessiontoken|s:32:"e5305a2998d875c4222fc034ad1ed339";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ejhvuha089avhebqbtlpm5or00', 1320898271, 'sessiontoken|s:32:"9abc67973f085310e9088477d4185860";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('eoto92921io7qojbic3oqofp86', 1321648655, 'sessiontoken|s:32:"5292ab91bd36f9547ab08666c399f7f7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('epss0h91e11he21f29v8phorc4', 1320262670, 'sessiontoken|s:32:"b76250163d36bdbfd3dcffaca515da44";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('eu25oevb52lic1hc0c12psaas2', 1321052348, 'sessiontoken|s:32:"4c74e5b6118f22dc36509e7318a33463";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('f0tgkp3tjifaaspa5eg1psqe96', 1319922622, 'sessiontoken|s:32:"7354c1d688040dbe93360a0ff72f000a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('f1stgf90pnv3h4cac6nca7i4l2', 1320291736, 'sessiontoken|s:32:"173d5d241457d78e5af32023d6d18565";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('f2fkcdt2q8edrfo4glvhpq8hd1', 1320101862, 'sessiontoken|s:32:"ee2962dad43157213731f6ec5da28c17";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('f3t6572qvhnokdp9271c6l0pd4', 1320540150, 'sessiontoken|s:32:"5c321cce4edda5127791087f8c84dec6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"35";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('f5pobvea8mdv2sap4dh0uh1n55', 1320903849, 'sessiontoken|s:32:"86918c31a2c0bf2dfae454430dc48995";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('f5s8410kvlp4peep8v1ubj0c86', 1319893592, 'sessiontoken|s:32:"f45bc225fec3d07f2ca3560cabf38183";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('f6t0buq92iv68n9kqtmo559vj3', 1319993048, 'sessiontoken|s:32:"0e96c47968e3d15ad0306722258cdf49";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('fcvba6kb6a97jbvsgcus8hj8f2', 1320118818, 'sessiontoken|s:32:"4135dc464e0a29726ccec3d13546fe04";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ffnobehchqj9cpjfbdann23f72', 1320094249, 'sessiontoken|s:32:"4ab838ccf6511d5fa6aa5020798f165f";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:41:"30{14}41{1}27{12}33{11}24{7}28{13}38{6}32";a:2:{s:3:"qty";s:1:"1";s:10:"attributes";a:7:{i:14;s:2:"41";i:1;s:2:"27";i:12;s:2:"33";i:11;s:2:"24";i:7;s:2:"28";i:13;s:2:"38";i:6;s:2:"32";}}}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;s:6:"cartID";s:5:"51515";}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:21:"checkout_shipping.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:18:"create_account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:20:{s:6:"formid";s:32:"ac569aaf7b2419178f62d54f13caaae3";s:6:"action";s:7:"process";s:9:"firstname";s:2:"yo";s:8:"lastname";s:4:"mama";s:13:"email_address";s:12:"info@dpi.net";s:21:"email_confirm_address";s:12:"info@dpi.net";s:15:"reseller_number";s:0:"";s:7:"company";s:7:"yo mama";s:14:"street_address";s:8:"1112 aaa";s:4:"city";s:5:"htown";s:3:"dob";s:10:"01/01/1980";s:6:"suburb";s:0:"";s:7:"country";s:3:"223";s:5:"state";s:5:"texas";s:8:"postcode";s:5:"77000";s:9:"telephone";s:10:"1234567890";s:8:"password";s:7:"abc123#";s:12:"confirmation";s:7:"abc123#";s:2:"_x";s:3:"103";s:2:"_y";s:2:"26";}}}s:8:"snapshot";a:4:{s:4:"page";s:21:"checkout_shipping.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}customer_id|i:12;customer_first_name|s:2:"yo";customer_default_address_id|i:12;customer_country_id|s:3:"223";customer_zone_id|b:0;'),
('fh7hvv92h3i33up6dut8krg407', 1319942990, 'sessiontoken|s:32:"6bfa91d4d7820555c01b90b1649c2e23";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('fivuujuvj1edch32406cr5i762', 1320275478, 'sessiontoken|s:32:"e978c947041f9ec2272eb55eda274096";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('flpccqahcfn6s1ui9gc4ndgnc0', 1320502060, 'sessiontoken|s:32:"94b28b44d5ff9d6592000e0d0cde9b60";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('fmhs41mverosfio2dok4dd5mg3', 1320502018, 'sessiontoken|s:32:"39da2f4b6d16b20d948766e0898b4386";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('fp1elhprisl89dloqrhoth5uf7', 1320109666, 'sessiontoken|s:32:"e2e6ec55ce6ec148669004d29f69b19f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('fpopj3jq9rr7aitbhoc25fc794', 1321396009, 'sessiontoken|s:32:"7a1b841f5c52b154a9a98f04d0113ba0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('fr5l4j3i89fvpo2c3ctvdsavg7', 1319893869, 'sessiontoken|s:32:"7d2c84d4b924137e2f7b3d1ad6eb9a55";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ft3oicll2u2loeirp7uf47pi91', 1320852275, 'sessiontoken|s:32:"bbe97390e8f424a0e8ac2656a68f6e12";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('fuv28o2086b32cmk659vf1v083', 1319938200, 'sessiontoken|s:32:"981c062db22dae12f365d837881e03fd";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cpath";s:2:"23";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('g0i2fil1fkhrtjl0sajem41om3', 1320352708, 'sessiontoken|s:32:"42c2eaf42dd9cc923d7f94ed2284fcdb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('g27fmgp3iv0eombekigk8cifi2', 1320346163, 'sessiontoken|s:32:"96c9aa0da822c98ab32b17d9f27d35af";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('g45ns6btoecitkdjivjlk86c65', 1320093980, 'sessiontoken|s:32:"1c1046ca365e6da81910ad7b67acb272";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('g8oih5eh0bh3cgp86ccqal8kr2', 1321458449, 'sessiontoken|s:32:"addb56a1d8c010ffe5aa402bce493c90";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('g9scpfvm133glhp1ej93dhd1d4', 1320502793, 'sessiontoken|s:32:"aed099a42115cbd4032b2f97ef8a47da";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"25";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gd1fmame25ald0jj0ipo716ck6', 1321617164, 'sessiontoken|s:32:"8d489bd6f68c30a9c095f810ab3ae270";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gd7r1edtm5u4hh219eivld3m83', 1321372027, 'sessiontoken|s:32:"2d7a2de36200755a84e90e38a6354282";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gd7td4n09fml7jikgrfl1nt0l7', 1320237993, 'sessiontoken|s:32:"d41e9094ba9afd4ebe861416182d549c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ge5t3bla6mqn7ps6fnp4tcp9r3', 1320291736, 'sessiontoken|s:32:"e1faf735f9f997b2fc312b7b284cb45a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('geul05pb10efeuifrqojb35g51', 1321368015, 'sessiontoken|s:32:"02bd886a5782662c22d5d660bae082cc";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gevhse8qqf461ii3q405gaov34', 1321653996, 'sessiontoken|s:32:"a12af274fbe58453ef49d1b48f74682e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:10:"amp;oscsid";s:26:"ot3apqakdhekg53cat2eas2ma7";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gk2dkcsit44613v6nfpn4u6793', 1320759891, 'sessiontoken|s:32:"429042c9cfff4ebbffb645d6538e4e4b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gnsgeu8fud8hietkkungq8fk76', 1320440370, 'sessiontoken|s:32:"be2d0588f23727a335c90ac3a9d2ddde";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gp24c4bl0dbfsplruvi076rrl4', 1320641902, 'sessiontoken|s:32:"c0aa231e6763fd2386240b863f1ce79f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:3:{s:2:"fp";s:88:"zrJjLzcLHuzjKfGcnltdZFVm8qaV7LFXIzC6k1NF0ocfdoAhcCxjgI78g6ynND5NP18l+9z7YQNshZUSExls0w==";s:6:"prvtof";s:44:"I6EFdVqkJHmmn6IriZ9NdA+VvB/EIqxBMog3kyd0h0A=";s:4:"poru";s:64:"WyuFn1zROyyaLw6tS+S7rbD4QSySGtqFbX585SjmU0l3anfO8dPRoy0bca4USOTG";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gscifq4stn6mvoabqfvc0mv2h2', 1320439255, 'sessiontoken|s:32:"7232ee81c8aa1aac5e7f1caa543a792e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gtpiqh7r36j3j15otf0e5khod7', 1320638592, 'sessiontoken|s:32:"25bdcd4c375a1b951a314503217f54a2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('gucd0t9eehq11fh19i2mlipte7', 1320379517, 'sessiontoken|s:32:"d6d595ca786bffdf43a80cb930d5bd26";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('h0ckqfbthneqh83g841amhvbn5', 1319938179, 'sessiontoken|s:32:"43e1971ae96cecc1fe4d848418b7f72a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('h0to3lrb8v00eq7itt7gbbvpb7', 1320545447, 'sessiontoken|s:32:"84079885a147020967fcb86447130d18";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"50";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('h4terqk9tvmpdh5h8gss27efa5', 1321650609, 'sessiontoken|s:32:"6d9e8e50868dc95ecdea00bd53c8ccf3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('h5utbp7no24ha3ah3n105fmvi0', 1321470311, 'sessiontoken|s:32:"64ff6436f90f2425f3b8c47a9c240b43";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:7:"execute";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('h852nmibaeigqdl53f44v87ah0', 1321396009, 'sessiontoken|s:32:"3f755a9e82edeea04e7a5d4d8ecee0ee";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('hca1e49bmqbc6nqeof9j9gk281', 1320458992, 'sessiontoken|s:32:"55d435d643cc1a2803d434e2dc42c2dc";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('hgi05ijork1kr76s02iajdue47', 1320716933, 'sessiontoken|s:32:"860909cd0851c49556e08256a80be003";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('hjk6vndgu9slbrfqqkaklp7m83', 1320182838, 'sessiontoken|s:32:"bc912ac2d5dc7dae8a8cba92f34e70bb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('hqdkhp2qhjoa6fpue2mg4m4u11', 1321497854, 'sessiontoken|s:32:"1ae18d2e40c09d82ae80b6527ed9a92c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('hqov87mid670smt6rkhgl1tjp6', 1320237995, 'sessiontoken|s:32:"addebd4c37b6e292c7cf2b7a5298ae3d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"specials.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('hrjlkc03a6jmbof64v3oif4r03', 1321662087, 'sessiontoken|s:32:"6dcbf4db3ff0a1e900ff46dfd486e153";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('hs1arcid8r61bafqah6fg4ge35', 1320383051, 'sessiontoken|s:32:"cbb53c4156c05bace534e6ad8674ecb6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ht3cm7ufbhj0tp9l1fqta6tbm0', 1320220833, 'sessiontoken|s:32:"15eebbf4b21760a21483ec1092e1f6ae";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('hu1se68fa0aabkoq6155kev522', 1320237939, 'sessiontoken|s:32:"1ed044fb46bd5b6d814ce5095d2df29a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"51";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('i2ntihnic5msbgfita4310gvo3', 1320705004, 'sessiontoken|s:32:"523605bed90015a57707c3b092dbeef1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:3:{s:2:"fp";s:88:"zrJjLzcLHuzjKfGcnltdZFVm8qaV7LFXIzC6k1NF0ocfdoAhcCxjgI78g6ynND5NP18l+9z7YQNshZUSExls0w==";s:6:"prvtof";s:44:"I6EFdVqkJHmmn6IriZ9NdA+VvB/EIqxBMog3kyd0h0A=";s:4:"poru";s:64:"WyuFn1zROyyaLw6tS+S7rbD4QSySGtqFbX585SjmU0l3anfO8dPRoy0bca4USOTG";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('i3h8qo6kvjnn3loj24k927k4f3', 1320831072, 'sessiontoken|s:32:"e41b9062033813443c945a19ae134eb9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('i4ld3bdgrmrp0es5p1uccipkj1', 1321385939, 'language|s:7:"english";languages_id|s:1:"1";admin|a:2:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";}'),
('i8frepaeiog7cghi82vprjk0j4', 1321385994, 'sessiontoken|s:32:"3e6d307a9d873cbcb07f4d55faa741c2";cart|O:12:"shoppingCart":5:{s:8:"contents";a:2:{s:40:"36{14}41{1}60{12}33{7}82{13}38{6}83{2}80";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:14;s:2:"41";i:1;s:2:"60";i:12;s:2:"33";i:7;s:2:"82";i:13;s:2:"38";i:6;s:2:"83";i:2;s:2:"80";}}s:41:"30{14}41{1}27{12}33{11}24{7}28{13}38{6}32";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:14;s:2:"41";i:1;s:2:"27";i:12;s:2:"33";i:11;s:2:"24";i:7;s:2:"28";i:13;s:2:"38";i:6;s:2:"32";}}}s:5:"total";d:-726.3500000000000227373675443232059478759765625;s:6:"weight";d:0;s:6:"cartID";s:5:"97259";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('idj0fub150bfsrj6hsb19ub6k1', 1321639002, 'sessiontoken|s:32:"cf6e500ee0af69737a95b5db71f1c7e5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ik9g7gifmcu9oucnq02cr1r576', 1320058024, 'sessiontoken|s:32:"6060a94b36f631de8ec26ab2d1779028";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('iovo9hs9l1ec5samn1r9pje5i0', 1320220819, 'sessiontoken|s:32:"56227de66398031a3471a137dba7bfea";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ipdd4vf6cv1adebkfqi4o6bis3', 1321011805, 'sessiontoken|s:32:"b44c6ed1a9d709cdf0299a4ffd25acea";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('iq92q18cmh5e6m2ei5fi755363', 1321429063, 'sessiontoken|s:32:"60a27a17810ded1d535548d585604772";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:10:"amp;oscsid";s:26:"sgm83m5jmqab1puul8fh12ktj1";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('iuvdkr65nqq6ojj1v7t4rutie2', 1320237936, 'sessiontoken|s:32:"17a6a70b4b463e0a6cf96ab3b3517165";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"52";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ivfj7b0aircvjgegrilmbvm7d6', 1320916765, 'sessiontoken|s:32:"52d305118095cfd5121051873b763627";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('j02hfhl09hqjp61771g26mta57', 1320772305, 'sessiontoken|s:32:"8d6369a905b4fe2da7f2f82dad89ecac";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('j07vmjis11bm74050jpdth3624', 1320876444, 'sessiontoken|s:32:"f518a4698dad6a6c843cb7f967dcc2bf";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:4:"send";}s:4:"post";a:4:{s:6:"formid";s:32:"f518a4698dad6a6c843cb7f967dcc2bf";s:7:"country";s:3:"USA";s:7:"enquiry";s:4391:"We located a fantastic ebook on Free Energy Devices. It\\''s over 2200 pages and has complete plans and even where to buy working free energy devices that can already power your home, business or car! We are giving you this ebook at no charge so you can spread it to everybody you know so they can\\''t suppress free energy any longer! Please share it with as many people as you can! Free energy is already being used all over the world. Get the ebook now on this page and tell everybody you know!\r\n\r\nwww.project.nsearch.com/profiles/blogs/free-energy-device-to-be-teste\r\n\r\nYou\\''ll also hear an interview from the author of this book where he tells of a group of survivalists that are now powering their homes with generators running on nothing but water!  See why this information has been suppressed!\r\n\r\nWatch a movie about Free Energy and get the ebook by going to this page\r\n\r\nwww.project.nsearch.com/profiles/blogs/free-energy-device-to-be-teste\r\n\r\nWe are not charging any money for this information because free energy belongs to the people!  We want you to tell others about our site!\r\n\r\nShare with ALL your friends & Engineers, Mechanics, Machinists and Electricians! This info needs to go global so we can give Free Energy to the PEOPLE! Free Energy is REAL! Share! :)\r\nhttp://www.project.nsearch.com/profiles/blogs/free-energy-device-to-be-teste\r\n\r\nMake sure you join our site so we can tell you about our upcoming radio show on free energy!\r\n\r\nWe will soon be releasing information about a free energy devices that can completely power your home off the grid!  It\\''s called a free energy magnetic motor and just one of these devices can power the average home at no cost!  It\\''s already being done by others right now!  You can see a video on free energy and read all about this amazing device on this page..\r\n\r\nwww.project.nsearch.com/profiles/blogs/free-energy-device-to-be-teste\r\n\r\nOne of our members is now running his vehicle on nothing but water and will be sharing this as soon as everything is documented for easy reproduction!  If you want to be informed about the free energy device and running your vehicle using water make sure you join the site at www.project.nsearch.com as it\\''s the only way we can reach you.\r\n\r\nAnother one of our members cured his skin cancer using our \\"hemp oil cures cancer\\" secret he learned in our free \\"Natural Cures\\" area of www.project.nsearch.com  Make sure you click on the natural cures menu option and share with others that have diseases so we can cure more people!\r\n\r\nWe filled out the form on your website so you can learn the truth about many things and tell your friends too!\r\n\r\nYou can listen to Radio Nsearch spreading the truth 7 days a week by going to the top of the page at www.project.nsearch.com and clicking the Play button there also.\r\n\r\n\r\nPlease make sure you go to this page\r\n\r\nwww.project.nsearch.com/profiles/blogs/free-energy-device-to-be-teste\r\n\r\nand see how free energy is being used all over the world right now!\r\n\r\n\r\n\r\nGlenn\r\n\r\nPS\r\nWe have just created a way for you to get free traffic to your website by simply doing questions and answers about things relating to your business.  Your  customers always ask you the same questions so just put them in Nsearch Answers and list your website in the signature so your company becomes the expert and gets free targeted traffic!.  To start doing questions and answers right away to promote your website just go to www.nsearch.com and click the RED \\"Join Nsearch\\" link in the upper right of the page.  It\\''s very easy and you probably can think of 50-100 questions and answers that you\\''ve been asked before so than that you become the expert!  There\\''s no charge for this and it\\''s a great way to become the expert in your field and get free traffic by listing your website in the signature of all your answers! The more questions and answers you provide, the more free traffic you get!  Doing questions and answer helps your business and helps spread the truth!\r\n\r\nIf you want to also support us in spreading the truth just tell your friends about www.5starshine.com also.  This site funds all our operations at spread the truth and sells our patented 5 Star Shine vehicle painit protection system along with hundreds of other unique automotive accessories.  Thanks for your help spreading the truth!\r\n\r\nwww.project.nsearch.com\r\n\r\nThe Truth Will Set You Free!\r\n\r\n";s:4:"send";s:0:"";}}}s:8:"snapshot";a:0:{}}'),
('j0svvc8v31ludks14u5dphr910', 1320743793, 'sessiontoken|s:32:"6230f83e2b8b66460df233d1854b0544";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('j12vb2vp8roa1hf79qlt9me7h7', 1320504856, 'sessiontoken|s:32:"762fcfa3d76c3d8a15ffb6333680b23d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"44";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('j399ghdngg7beco6stp9phhj30', 1320673984, 'sessiontoken|s:32:"70326a7fb18b0390c63d8cb6588ae29c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('j670ju05r27ml1sub6hfb5ag25', 1321453532, 'sessiontoken|s:32:"3dccc38f0a348f8644a628a07752afd9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('j6mn0kjnkjrmslr58iqku57ii7', 1321607309, 'sessiontoken|s:32:"a9480d3a79ca6c0dbaa3d6f13a78cefd";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('j8mnv8ba89eseuj8du645fc8m5', 1320450489, 'sessiontoken|s:32:"42b6f62d0bcb6856d8b25f08dff7f5b3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('j9k5t1d3b5pvlo5kprovvelg07', 1320930926, 'sessiontoken|s:32:"610817a0989415a2786a1ae04c265182";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('javl56l9lmu52sn4epemg4qgp2', 1321688845, 'sessiontoken|s:32:"3f17d36b8dc4bdbcfb29adea9aed7d30";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jej4nbfvv48kmo04tpnqaa9707', 1320237969, 'sessiontoken|s:32:"21f8c6267ef5fc082ba619bb9faa3d2a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"54";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jhto4hr6n2dva1fmigu5ajg6o3', 1320684134, 'sessiontoken|s:32:"db714c5e96edf6ad1dec95cc68d8eb17";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jikep3edp6qrm8r4t1keh4tpt4', 1320032815, 'sessiontoken|s:32:"6cfb11573464dabb24a2e3fa5a2220b6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jl1l2hcq163ho6bvdlph2811g0', 1320441345, 'sessiontoken|s:32:"dd31ef73bd0eaf5d2f3c1cc864c7d94d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jmqb4c2b209b4pv3l3nbf5fnu5', 1321603480, 'sessiontoken|s:32:"89169b1d5ccfa14280c6f1cec25c23fb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jnsv7etlhp74qtmf5jp32bb591', 1320634229, 'sessiontoken|s:32:"55f69e610cb422e38047ce596e887d2a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jp4d0umick589c1vsd1t07jaf3', 1319913082, 'sessiontoken|s:32:"d5b28dbcbe96013caf20afb880d6971e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jq37ac7j6hu9t7abdkguih8801', 1320150295, 'sessiontoken|s:32:"e460b7f970e12497179178cbf1cd3d40";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:18:"upload_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}');
INSERT INTO `sessions` (`sesskey`, `expiry`, `value`) VALUES
('jq5ckhao8lv5piqso4ciuk3bd3', 1320237920, 'sessiontoken|s:32:"80e53ca05295d7555fc928e2c31b9958";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:18:"create_account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jqpah9p0md1is8gu1oerduamd6', 1320254355, 'sessiontoken|s:32:"459c316a9c9eeba88a0ac165eba624d4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jr0r2pbg8nrcs5amnt0ckt78m5', 1320067427, 'sessiontoken|s:32:"c81433d7ffed2cf1dd2289ac06d1a169";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"34{14}41{1}60{12}35{7}68{13}38{6}32{2}67";a:2:{s:3:"qty";i:3;s:10:"attributes";a:7:{i:14;s:2:"41";i:1;s:2:"60";i:12;s:2:"35";i:7;s:2:"68";i:13;s:2:"38";i:6;s:2:"32";i:2;s:2:"67";}}}s:5:"total";d:0;s:6:"weight";d:0;s:6:"cartID";s:5:"68400";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}b_image|s:22:"1320065275335_logo.png";fimage|s:50:"1320065830426_SMS_WEBSITE_DESIGN_SCOPE_OF_WORK.pdf";fdesign_instruction|s:31:"<br><b>Instructions</b><br><br>";online_design_comment|a:1:{s:0:"";s:31:"<br><b>Instructions</b><br><br>";}pnam1|a:1:{s:0:"";s:73:"1320065830426_SMS_WEBSITE_DESIGN_SCOPE_OF_WORK.pdf|1320065275335_logo.png";}showimg|s:50:"1320065830426_SMS_WEBSITE_DESIGN_SCOPE_OF_WORK.pdf";instruction|s:31:"<br><b>Instructions</b><br><br>";bdesign|N;bimage|s:22:"1320065275335_logo.png";'),
('js341dklh1uat3mo4iffafjec5', 1320963329, 'sessiontoken|s:32:"cfefad69d6d904577b8abf62a6491d92";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('js5ac8kmo5p6jkgvd34305hme0', 1320126694, 'sessiontoken|s:32:"34765ce10a6a61d6e1e61cd8fab40cac";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jtr8tbk90r7m138tpgkelr3gm4', 1320067385, 'sessiontoken|s:32:"87c3755e0d3638a1d6c343795afc259e";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jtu9s2ped9o7sune2opcli5o82', 1320224387, 'sessiontoken|s:32:"4bc416791f82bc7ff02573a9c5d7c20b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ju1g93okp4hqfhqc9r6smk77u7', 1321394378, 'sessiontoken|s:32:"d8817d3c0ab4249288f89b0a32b55444";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('julgpbp6agopjlubtcagdbm5c2', 1321506918, 'sessiontoken|s:32:"0ede60af7cfe74a07575216a9ad556ec";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('jvud5hff2d3ogk322d31130ut0', 1320451341, 'sessiontoken|s:32:"97c8a2845d207c44d85063daa9a43639";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('k0j75mbhms4l9mdd3phvamihr1', 1321444573, 'sessiontoken|s:32:"5a47cb87b755d979b3f1ca86293fa293";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('k0n1njgh0lkua3mu06ijk6b6n2', 1320391032, 'sessiontoken|s:32:"27b6c5f8cc2db78cee9d58e6436b9ffd";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"k0n1njgh0lkua3mu06ijk6b6n2";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('k2dso80u5493ldcnq1hreu5181', 1320469097, 'sessiontoken|s:32:"76aba09fd573c5b04c80ec0f5b067163";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"54";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('k2vmv9ivpvsqmtf5bg540tka20', 1320850306, 'sessiontoken|s:32:"8581400c5b8635d13e90713ae8143100";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('k6m4rls99d82bt3lmn090bvtj4', 1321595405, 'sessiontoken|s:32:"fc20ade83c5f80cbb46e77fc33bc43c2";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:11:"products_id";s:2:"36";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('k7nhdcmavhls4788i5m2q9bfg0', 1320266158, 'sessiontoken|s:32:"8f550a3031ba5fc0799f2296b99807cf";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kcv59i260cv42vrmg9gtamvn43', 1320685613, 'sessiontoken|s:32:"cb9985f0b495a14db20de22ac0dcd579";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kga4qrng8golldbo27fkpkuiq2', 1320020702, 'sessiontoken|s:32:"1aee5c8d0a48681ce06fd08f10bb0bf4";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cPath";s:2:"27";s:6:"osCsid";s:26:"kga4qrng8golldbo27fkpkuiq2";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kj1h9p1ivn4pdfkrbnn4jbm914', 1320775048, 'sessiontoken|s:32:"032bd8a417e75c9029179c9061aac4af";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kj75af958ifes999vvh5e89ic4', 1321686044, 'sessiontoken|s:32:"5bbe60305c2e7cd21a1c2128fa3a3a0b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kk2eq68muiapldrt1vc04e3uc2', 1321469703, 'sessiontoken|s:32:"e76f014511ecb2e70a041a9880e863cc";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kmcbfki21ebk6pjnm30bab9c64', 1320828034, 'sessiontoken|s:32:"854d52c29e80e9e90f658267187757ab";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:10:"amp;oscsid";s:26:"kr0m8aelrr6agd8abbvqui9gb3";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kn3copfoqnt6hgmtip1e1086e5', 1320872816, 'sessiontoken|s:32:"d75ed520157d1178c43553659d4efe2a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"specials.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kna2ao6lsbqbfudasm7n2bgv92', 1319941909, 'sessiontoken|s:32:"f755d7922c6f542088c084b8c6082669";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kntnt7jak2mvrls7mibnnqb0j1', 1320972517, 'sessiontoken|s:32:"6369de466ff533bb8051c41586aef320";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kpork31stl7ivlh7eh90haojl6', 1320912095, 'sessiontoken|s:32:"ff55119e8448db001dc24d9cf7436c89";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kr0m8aelrr6agd8abbvqui9gb3', 1320828031, 'sessiontoken|s:32:"6817230d3b0304dd7d6994ddda24f71a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kulkqde3vvkt14sfoi5h5f1qf3', 1321078524, 'sessiontoken|s:32:"017f5c2d669756d2291addcd31740741";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('kvpvcom39h1j3qr8lp6apinf67', 1321457485, 'sessiontoken|s:32:"29896805cbb39a74310a6cd6bbbe8d9d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('l16sgg6hdknrlp10jqht8tarv1', 1320430427, 'sessiontoken|s:32:"1adc7abb489b81fbe3a43ebdb159ae58";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('l2lr08ha1mgqnpak972ensh9j2', 1319938202, 'sessiontoken|s:32:"86d3d6bca6cf09fe41c8bb8764c9cb49";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cpath";s:2:"25";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('l2ol22gbr0isflj3hc4bclkkg4', 1321688508, 'sessiontoken|s:32:"e40d86d3d2b35fef11da907cc2c3b44f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('l2tf0vi6mfnh4e33d08in8d3u3', 1321004990, 'sessiontoken|s:32:"9ae2a48a81041bc4f7633476d30e26cc";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('l41lbtt8t4m7f6el1ngr5sghc6', 1320916978, 'sessiontoken|s:32:"a3dde3df98484b7abf0ac0ecab2752a9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"unroq78us91bv9jv5b11agjfp7";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('l568onpt4h78f3kir1pv840qg3', 1321478177, 'sessiontoken|s:32:"137a175201c60179253c7815b572c579";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('l7souoetmbs8l6dloio7t98f72', 1320237997, 'sessiontoken|s:32:"03b849695b30a359b4293ab8afda7161";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"1";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lcd7le9j3folgjfmuumml2ro66', 1320483044, 'sessiontoken|s:32:"4f5d89e3a323632dfcefff069af8dcde";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"34";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lffrf2ri27ei89mju7dgagih50', 1320322991, 'sessiontoken|s:32:"197a66f1e5015de88b860edac1bdc9ee";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lfnvofu3kifobkb2gmrd14omr6', 1320254357, 'sessiontoken|s:32:"3b7518b7f8d68b2cd522e5d544a26f2d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lhmop3msjnqu0reeu2dpvu0qf2', 1320895630, 'sessiontoken|s:32:"12f1e49e7562351f44fe27477827271d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('liqrllpsan2fe78i9g62d1e5h1', 1320237979, 'sessiontoken|s:32:"e60cffab76a4df05b5d91df3e74b0614";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"28";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ll9fib51bfip89q8ffetnn4740', 1320540520, 'sessiontoken|s:32:"9d984923678cc6f04ff0ae805b02bc61";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lod07054i6306g8akf0tccnoi1', 1320106988, 'sessiontoken|s:32:"3d156d673ca4cec17665c0bb108e2b83";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('log6fa6b3qr79jhp38leshboe7', 1320537852, 'sessiontoken|s:32:"8f5c085c57b575d22f07493a86ce5c2c";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('loqh242hsu9fklfb31kgohgkt2', 1320084404, 'sessiontoken|s:32:"539e91248c07d34933f696f567f8873a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lpbvtv4h06c3u98bdt2rugc8m7', 1319938193, 'sessiontoken|s:32:"08ad7a3d446bba178d08e3494a396c09";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lpudjjru9b7n9g0q2ra9j7fao5', 1320323208, 'sessiontoken|s:32:"cb1a95a8802061332a30051b02f5b4f3";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}}s:5:"total";d:86.8700000000000045474735088646411895751953125;s:6:"weight";d:0;s:6:"cartID";s:5:"69366";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:11:"samples.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:4:{s:4:"page";s:11:"account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}b_image|s:24:"1320321511299_Desert.jpg";fimage|s:31:"1320321511296_Chrysanthemum.jpg";fdesign_instruction|s:31:"<br><b>Instructions</b><br><br>";online_design_comment|a:1:{s:0:"";s:31:"<br><b>Instructions</b><br><br>";}pnam1|a:1:{s:0:"";s:56:"1320321511296_Chrysanthemum.jpg|1320321511299_Desert.jpg";}showimg|s:31:"1320321511296_Chrysanthemum.jpg";instruction|s:31:"<br><b>Instructions</b><br><br>";bdesign|N;bimage|s:24:"1320321511299_Desert.jpg";'),
('lq1vr51h46414rnjvqtc0j49q1', 1319952376, 'sessiontoken|s:32:"24639faf713ad4cbc92ce505d8be62fb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lqg1mseqsakoiaoin6lj9taos7', 1321538721, 'sessiontoken|s:32:"0f0c2a7ed56cc7df17d907845531ad5d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ls4if5revnbjsda4deb913sh41', 1320743790, 'sessiontoken|s:32:"e980f312cbb7eb512055d80f371d77d3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('lustlqb3q376vhr9u6caiqti02', 1319938203, 'sessiontoken|s:32:"8ebeff5dac02747d209ec082ddd7f7fb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cpath";s:2:"26";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('m0jitb91j1a313orvimpuklhv2', 1320224400, 'sessiontoken|s:32:"aabbe7397f8891105a9e73e582638f2f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('m0mrobd5nna52utqu7u4qi55q4', 1320540507, 'sessiontoken|s:32:"a4cf8f6bad68ca686a5473af153d5ee7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('m3jcugco8jbemesb8vg8meln84', 1319938190, 'sessiontoken|s:32:"651b4549798815d8c4dce7f682a7f2ed";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"specials.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('m3tpecvmcdc1rmf9vupktirp35', 1320157643, 'language|s:7:"english";languages_id|s:1:"1";redirect_origin|a:2:{s:4:"page";s:9:"index.php";s:3:"get";a:0:{}}'),
('m7oguf7dfd3g2goqasf3roe505', 1320142000, 'sessiontoken|s:32:"c2765d275dc4c9af46681abf366b6e82";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('m9mcbvqto0upm335gh47tt0516', 1320783854, 'sessiontoken|s:32:"c071a07fd92750b81d22d4906d0f4692";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mb0kfl9q64stngm1e7hm2hjiv3', 1320239739, 'sessiontoken|s:32:"0775beb5cabe8e7421ed89a3a42b8072";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mc07is1v1d3fj46u0ao66cgc62', 1320237952, 'sessiontoken|s:32:"094cfe2e0eb3659bb06fb7ffe4518862";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"44";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mdb8pgcb3lb2e617jkgp2msq66', 1320239330, 'sessiontoken|s:32:"789f95b58ff980858009cb083c09879c";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"2";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mepmm788kmgo2tja59fnonhhq7', 1321478827, 'sessiontoken|s:32:"d642b57ff3ea8ec703b7bacd39a3c30f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mfv1neupk5jmnh5qfd5m7hq4f4', 1320718544, 'sessiontoken|s:32:"31061deb14e68ad026befe237f5a869d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mgvv5thbal2nnlqdrdgmdcu953', 1320409030, 'sessiontoken|s:32:"8c72d2fc61b2e51b555abf15c18c17e4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mll4l8q95ecej8gsffdbu77hr0', 1320516287, 'sessiontoken|s:32:"cff65156709b2e3d7eadd76b72724e35";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mmsa17pvv461r5f4uc12pt6cv6', 1320237964, 'sessiontoken|s:32:"35f3d1c3902bfb073e9e48d5d8fd2eed";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"36";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mnn0e25el75f5fbnm4osl2gd52', 1321594998, 'language|s:7:"english";languages_id|s:1:"1";admin|a:2:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";}'),
('mogbkadtp289ivmi4k2c50cc92', 1320473839, 'sessiontoken|s:32:"389e5bbeb299ca98d39c709254237ee2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:11:"samples.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mpaqs1o998a8df342b8id33sv0', 1320587538, 'sessiontoken|s:32:"4d21376ac91030a5640fd54eb8df36af";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mpduev4viduflbfnmjh7mqcqc4', 1321397261, 'sessiontoken|s:32:"0fd92f4fd5d5f512f05a6b2aeb7f4faa";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mprp00kh5fsal2vl7evs2a4rm4', 1320654961, 'sessiontoken|s:32:"841eb2ff6b5c4f18172d174038f9ee3a";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}}s:5:"total";d:86.8700000000000045474735088646411895751953125;s:6:"weight";d:0;s:6:"cartID";s:5:"20305";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}b_image|s:24:"1320653390983_Tulips.jpg";fimage|s:24:"1320651958130_Desert.jpg";fdesign_instruction|s:62:"<br><b>Instructions</b><br><br><b>Instructions</b><br><br><br>";online_design_comment|a:1:{s:0:"";s:62:"<br><b>Instructions</b><br><br><b>Instructions</b><br><br><br>";}pnam1|a:1:{s:0:"";s:49:"1320651958130_Desert.jpg|1320653390983_Tulips.jpg";}showimg|s:24:"1320651958130_Desert.jpg";instruction|s:62:"<br><b>Instructions</b><br><br><b>Instructions</b><br><br><br>";bdesign|N;bimage|s:24:"1320653390983_Tulips.jpg";'),
('mpse60am0isp5rifdg792a64f2', 1319942157, 'sessiontoken|s:32:"b9dd29c9c745b4bf358a1bd22b078f5f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mqa9he9d5igcfs16ko7hbifoo5', 1319961558, 'sessiontoken|s:32:"4feef2a453d2aa4c6566f2d3ef17a886";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('msa9e9kng4lh61m3ke00jful07', 1320515286, 'sessiontoken|s:32:"cc536cc02af327e27693ccd098e9e78b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('msvo5jk83j5g6qbivt04ka5680', 1319938182, 'sessiontoken|s:32:"625c63ec821c2b18e6180103080ba5ef";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('mtonbjskdm4ok7okontfqsgdc1', 1319888441, 'sessiontoken|s:32:"0858d077b198e96a4c48f68607ae942b";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:18:"upload_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:2:{s:8:"Filename";s:21:"Lighthouse - Copy.jpg";s:6:"Upload";s:12:"Submit Query";}}}s:8:"snapshot";a:0:{}}'),
('mucs01kb1cvpoh3a5crc0h1q54', 1321481336, 'sessiontoken|s:32:"1b09714b33e7b35dc0cd2c5f71dd6b87";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('n0h6q4t63pq2scrpugj2ugaim4', 1321480752, 'sessiontoken|s:32:"aabdc65a1aaa69d0b9a1b02023ce37a6";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:4:"send";}s:4:"post";a:4:{s:6:"formid";s:32:"aabdc65a1aaa69d0b9a1b02023ce37a6";s:7:"country";s:3:"USA";s:7:"enquiry";s:646:"Welcome to Zoopon!\r\n\r\n\r\nPresented by Zoo Printing, Zoopon offers huge discounts to select members of the printing industry. \r\n\r\n\r\nYour current Zoopon offer is 100 4-Color Digital Business Cards for $1 + S&H.\r\n\r\n\r\nFor more information about Zoopon, click http://www.zooprinting.com/zoopon. Use code ZP1DOLLAR in the coupon code box when you check out.\r\n\r\n\r\nIn addition to Zoopon, we offer 20+ weekly specials and a huge new special every month. Check it out; it will change the way you print!\r\n\r\n\r\n\r\n\r\nBest,\r\n\r\n\r\nZoo Printing, Inc.\r\n\r\n\r\nStephen Kugelberg\r\n1-800-507-1907 x 110\r\n4730 Eastern Avenue\r\nCommerce, CA 90040\r\nskugelberg@zooprinting.com\r\n";s:4:"send";s:0:"";}}}s:8:"snapshot";a:0:{}}'),
('n0qi3il6i5385gvmpbbaqih6c3', 1320473750, 'sessiontoken|s:32:"103dea75e51a6b68252a2c509ab7649e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"specials.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('n223hn1b49rt1s76gbk8ac3cu2', 1320548909, 'sessiontoken|s:32:"8bdad5d89fb039a0b5ccc70e372f846b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('n2ks5tf61078sbt2ojv4pe7c92', 1321094125, 'sessiontoken|s:32:"788f3054e274b79571716a69b647edb1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('n5uc88aiuondssf114jc2q82j4', 1320237932, 'sessiontoken|s:32:"f324959ccc38691c6c5f1a57b6109ba2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"26";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('n74j62t3e83rvojvd55ikccpj1', 1319938186, 'sessiontoken|s:32:"ba1c11126b58b3d2c6b777071c1c7419";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"2";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('nchejn812g2sienm49b9kigva5', 1321684393, 'sessiontoken|s:32:"da88ba129759e694d6496b3c7480643f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ng15j89os5oajafvao43g2c5a6', 1320930344, 'sessiontoken|s:32:"0be302b46d31619545c7461ca46bc022";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('nhq16pk9clcs7hfuq9iir1mnm2', 1320026080, 'sessiontoken|s:32:"ab20298fec77e4e8a444fa1f147fab54";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('nj4qe440itloa4b5p8mhlfvsh0', 1320105726, 'sessiontoken|s:32:"fc27235ceabfc7e5a7cf46df7d3bad52";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('njn5jbd7nkv3f82a7v1an4umh4', 1320762387, 'sessiontoken|s:32:"1efcd0d6fc92a305b771b23b11d2bb00";cart|N;language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|N;'),
('nksnikmrm1evimcmv4a7jje0m1', 1320191028, 'sessiontoken|s:32:"72a0f6879c4fc6400c82c56f1ac019d3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('nma2nnamgurv3fdudeallnbfr4', 1321089866, 'sessiontoken|s:32:"cff20076c7d990b398fb7d79b2059f8d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('np52hffot3brk1psldn0o8asr2', 1320198261, 'sessiontoken|s:32:"4bd10e2e0052433d2a5952cd07a91b36";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('nq13v2vi0chg9cc9sblqvihnk5', 1320233609, 'sessiontoken|s:32:"31682f57e2a53bfbc8402fc20016fa17";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('nqi5uv5h50q75g0qc1t7odgk30', 1320312243, 'sessiontoken|s:32:"356b853ce65edde39482ae7bd7b85770";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('o0nm5d75cg6jdhhd79bttfgfi2', 1321429065, 'sessiontoken|s:32:"12330c1f7fe85b31bc352d2237e28ec3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"sgm83m5jmqab1puul8fh12ktj1";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('o122bad1vj7vot19gk96k4e0p2', 1320492313, 'sessiontoken|s:32:"3505e091dfbabc22c986a9234ca7a899";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('o1onhdf3ndc5lk7d2eqp9qhj40', 1320574216, 'sessiontoken|s:32:"d7d11e90f0e636f85215e42e7ba380ac";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('o36h83j2ufisug5h2cb31b3h34', 1320290729, 'sessiontoken|s:32:"950e65c12df79768a875ee78b2c35882";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('o55gooqe4r6frnn93rt3spamq5', 1320391483, 'sessiontoken|s:32:"3cbcf0897905e01c1f6b6a7836940aba";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('odasrdnlc64men320mc04cb956', 1321031242, 'sessiontoken|s:32:"38188fa62021a2e747e5c5d694e2c9e9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ohm8lgcn06pjfj224c2uc9cmq6', 1320615745, 'sessiontoken|s:32:"3f75a7709a6de0e073af7684b8f71119";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('oi5c4cmgaftonkhfbe36fomhg0', 1320736793, 'sessiontoken|s:32:"ab6fedce9c9de6f695b97f63b79126ed";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('om5vh6saql8qvaoji1mevjl794', 1320291737, 'sessiontoken|s:32:"0d960bad60e26a9305926375708b32e6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('omvgn42okbr7c7rcmlui1k80t7', 1320084398, 'sessiontoken|s:32:"1c510b3db8cd75f32384a70b3dca810d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('onanb7udcmm44oqaqs83jkf063', 1321438081, 'sessiontoken|s:32:"91ed6694249aa1d8257ab6733f18904c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('oq5lj9qamp0tlp09imfcq7pm44', 1320897277, 'sessiontoken|s:32:"49e126aae33c8ae473b2b4a69f591a60";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}');
INSERT INTO `sessions` (`sesskey`, `expiry`, `value`) VALUES
('oqppeqardjl6bkoku09pqojkf3', 1321022999, 'sessiontoken|s:32:"52cc92f491c2eb838e230bec67dbb7d8";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ot3apqakdhekg53cat2eas2ma7', 1321653993, 'sessiontoken|s:32:"0f0fdbc5be08cf1ec09a0ea503aa03c4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('otlcfm07ibgh8ionqg3q6j5k76', 1320769492, 'sessiontoken|s:32:"9f50d38dcb6776eb43b9acb54d78a0e3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p0d7jklihd83a70lp1a9eiluo5', 1320553444, 'sessiontoken|s:32:"d202316ee913275e479083f83dd35667";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"49";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p0mknvceau0pl3vg888ib92gf3', 1320763021, 'sessiontoken|s:32:"8000a70ea5b1e8dc07d61fe92aeaa80c";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"p0mknvceau0pl3vg888ib92gf3";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:11:"products_id";s:2:"30";s:6:"osCsid";s:26:"p0mknvceau0pl3vg888ib92gf3";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:6:"osCsid";s:26:"p0mknvceau0pl3vg888ib92gf3";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p11fsljsv3207lrp2svi0khu04', 1321038735, 'sessiontoken|s:32:"666a52782d54cff60023040e4d6d6251";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p1nmvt2c0rknju474i5i9kqdh4', 1319970328, 'sessiontoken|s:32:"2f1da3a2fe6e5cad3014e5ad709c0a74";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p4qp02r9vr4perni2hhussuvo5', 1320197331, 'sessiontoken|s:32:"d25ddc3a109f164d3629fae032e6524b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p6msq3ocn193evgf3npms8vu37', 1320460872, 'sessiontoken|s:32:"bbd1dbaa811841c26bef81a878090d53";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p6o2ukgg8vpndcrm9cpgkqekc0', 1320832842, 'sessiontoken|s:32:"c974d3b56b2dba6153f6e3608d948f5a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p8j40se1a17j63p1un6un6rd43', 1320653807, 'sessiontoken|s:32:"ceabe3acbb212d26d65fb0ecd5953924";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p8o4cehbbgemlsucbd5cep6rv5', 1320516269, 'sessiontoken|s:32:"1e3500febe5af89cc746f6f5311608f6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"43";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('p8rgasncoffmjicat1ate8i5e5', 1321537268, 'language|s:7:"english";languages_id|s:1:"1";admin|a:2:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";}AM_SESSION_TEMPLATES_INSTALL_CHECKED|b:1;am_valid_include|s:40:"5122c0a7b6c42e2369955d1d2265f4e1ba695d4b";'),
('pft0apjc8guqcbvcj1u7ou5dp7', 1320850277, 'sessiontoken|s:32:"81b4c310d19ae6aca36f48b1edf4c8d7";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"6";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pggiofsp5qt7hn1lbi040m6q80', 1320850697, 'sessiontoken|s:32:"5b91907259917dc345352e4c70cc67e0";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pgvh2nqt9uiu8l3skaee20fqk4', 1319979151, 'sessiontoken|s:32:"2401c649fd52eee414f34ab230a3aefe";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pjfns2unao6bmps4soudjjd9q3', 1319938205, 'sessiontoken|s:32:"b56f1ec8d9f94128b72e2797815c4b29";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cpath";s:2:"27";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pk3rp58rd38gg87tkuq7j9er71', 1320827885, 'sessiontoken|s:32:"8419e3ad5384bd077719e29aa336fcbf";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pkpsh839h3bfsoso8i533n2p52', 1321668513, 'sessiontoken|s:32:"8d58cc9eeea20925af01e9d9c9937f7b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('poda7ffk6dhch8fmob8cihvc65', 1321439503, 'sessiontoken|s:32:"c2ff5d72cbdeff1912b2a3bdffdbe809";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pomf6nuv5g3kb1vq4o0jpsps03', 1321577294, 'sessiontoken|s:32:"a217a4d4ef0c932cb1abe72429ab667c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ps7f66r28oavh1f1bs249oc9r0', 1320283203, 'sessiontoken|s:32:"6d943134357415c1ea09602b62a08965";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pt09utvdoa5u0csrin6ifnrmi2', 1320306866, 'sessiontoken|s:32:"57ea2a3798a635d9c8442633fc1451e4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cPath";s:2:"53";s:6:"osCsid";s:26:"pt09utvdoa5u0csrin6ifnrmi2";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pubqton9m0vahv6j4cdtsacfa1', 1320098438, 'sessiontoken|s:32:"469f17d36bb8104931eda5a2b72c2db3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pug6292gq0nrp4keh01ieac8j4', 1321020257, 'sessiontoken|s:32:"765b5111354d2b32b481f9fbcfb87f31";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pv4al9staof02urrda5agsf2e5', 1320906718, 'sessiontoken|s:32:"09b9287fd31f2bf0ecfa4760f3a57ef6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('pvgfv7865ed3ridpc0j7ruhje7', 1320572511, 'sessiontoken|s:32:"c79a9fc5f55059baa56377d0e6235451";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q04cprm4l1g8ll5v5t28ruiv62', 1320639139, 'sessiontoken|s:32:"b12bdb5d9023a6bf796159e9557d069c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q1ar3nos2npgm35m2rlqhp0ba6', 1319889999, 'sessiontoken|s:32:"232aec2f6c2749e631f675cd23d51abf";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q1h21edoki16bujve8vvv7p706', 1320772996, 'sessiontoken|s:32:"0fd683d6b46aaf7653a6275b1b0bd214";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:11:"products_id";s:2:"30";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q1m0mh82eq6lqftumge1rj1cf7', 1320240230, 'sessiontoken|s:32:"ace01804f4e32fca40d553b074554d3c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q1no2gbaplbq80pj10ofjhc3l6', 1321501192, 'sessiontoken|s:32:"5ca37b127f09bbdd860a41b68212ed75";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q3fvab14hr1ogri07oc84f8he7', 1320518432, 'sessiontoken|s:32:"a20acfb242c54d9b2aaa867c62dfdbe6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q51kca3j912gs2mlm0cn9jodv3', 1321626204, 'sessiontoken|s:32:"950b085e9d1d74be2c3ae0f1a75fda3f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q5u9gghvjkoc32v3il06cgseh5', 1320237991, 'sessiontoken|s:32:"43238771f5d02e586180a700089cd883";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"3";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q7ads4ppi1l444q84o2393rjd5', 1320234466, 'sessiontoken|s:32:"c173fe3238009734a1a42ce1c69c2759";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q88ffc6hph9kvppn6r834srih0', 1320363262, 'sessiontoken|s:32:"3e45fe96242e86f0205029f3fb005ed8";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q8i3ntfgpnkg4icf4f3apl47j1', 1320103331, 'sessiontoken|s:32:"bae98afb76aa034546038636ed7f54f7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q9butln6ns9tlnhlfup3lokue4', 1320681643, 'sessiontoken|s:32:"748afe39d2e9d5e976e0432db6d9fa25";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('q9fhvrag6v2b8m35cdiaes91n1', 1321539753, 'sessiontoken|s:32:"2403294c8641bbd274e05e766bce2bec";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:11:"products_id";s:2:"29";s:6:"osCsid";s:26:"q9fhvrag6v2b8m35cdiaes91n1";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:6:"osCsid";s:26:"q9fhvrag6v2b8m35cdiaes91n1";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('qb09m5550u5i9p443r84jcvq60', 1320572573, 'sessiontoken|s:32:"a9b231c415412750c5e2345da49eef38";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('qcuphgkgv8eoj37mgo65a58l25', 1320213869, 'sessiontoken|s:32:"74370b786bd7646c88f4f76349f77bd5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('qdjm1dtfa244u40q83r7adl4p6', 1320016383, 'sessiontoken|s:32:"439da07c17b68694cecea4a616dc7002";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('qimfqil3avq8cb4n6c2op13sv6', 1320772293, 'sessiontoken|s:32:"a828ed81a3596b3373f30c4fa631dd37";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('qmd0hk9pvd6h0934812nl42im3', 1321520932, 'sessiontoken|s:32:"f9fe1d1b11dccc63711b23d538f147b1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"b1s58e8per48o3g6ns5ohsej04";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('qrl9hkp6nkqlmcb66fa6fhdvr4', 1320627366, 'sessiontoken|s:32:"dc69bfe1df4bdb500de5f893c89bb0ae";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('qvtca22p0jvd2k4kgmgtc1e1o4', 1320063542, 'sessiontoken|s:32:"d3448a6099fb7398718deb7dde40eb2e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:18:"create_account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r0j6cb75hiesfcpv14a2oi9uo2', 1320392214, 'sessiontoken|s:32:"542434cae6ee6fb60489fdd15ca00ac0";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:3:"msg";s:1:"t";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r23kvaf1uqcftmfo093pdm5tj5', 1320907027, 'sessiontoken|s:32:"e4e1445d87c9d11cd70f12c4b1a995c2";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r2t2beuffhhi53safdr9on5jn5', 1320872576, 'sessiontoken|s:32:"ed2217f41248c5176e6578cde292c25e";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:4:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"r2t2beuffhhi53safdr9on5jn5";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"r2t2beuffhhi53safdr9on5jn5";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:9:"login.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"r2t2beuffhhi53safdr9on5jn5";}s:4:"post";a:0:{}}i:3;a:4:{s:4:"page";s:18:"create_account.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"r2t2beuffhhi53safdr9on5jn5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r3hrr6nnq43mni3q22e4no0f67', 1320058017, 'sessiontoken|s:32:"333414c5aee69a150369ba94fa4d5e87";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r4g99t5h2araat2k9b3m2jmio6', 1321452287, 'sessiontoken|s:32:"184071b3c30c573995fd6459578ccd12";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r5mgbs3kldt0inmg119ti8vbr2', 1320086564, 'sessiontoken|s:32:"a7e4c5bdb17d70c251a54cad67d8c06e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r6djae8slg6cs16o92i5kit9c7', 1320496876, 'sessiontoken|s:32:"b1de650bf458c492a4dd0ba9ad748f47";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"36";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r6rb2nvk6sl0al89uiu5ti4t06', 1321482863, 'sessiontoken|s:32:"faec2f8f5dba873e84f79ce65c891f84";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r8jb85kkjmqcmdllgntq170lh4', 1321375460, 'sessiontoken|s:32:"b320e03114d89d6906b45688a4bcc665";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('r976ed7i56rdogdvt9kat63vn2', 1320936823, 'sessiontoken|s:32:"ff4cde2bc01e353cccd1a6e4d79e312d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('rbbkf6osrpdl9se0bek5j301u3', 1320593423, 'sessiontoken|s:32:"58c240e13b22ac2ab6c09bf866e76aaa";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"2";s:6:"osCsid";s:26:"rbbkf6osrpdl9se0bek5j301u3";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('rducr76r06h9bcev5omq0jk3t6', 1320564349, 'sessiontoken|s:32:"28768cb5e0c42a53668ab46e1ee7efb9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('retu7gbkfu7t46j5m97gfef1e4', 1320003537, 'sessiontoken|s:32:"49bdcb1c7bd36e100f33fded85da9693";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('rfcuan1v498fnr1h3mg50eeg85', 1321453364, 'sessiontoken|s:32:"241ab0c8f02db61f380c5284a84f01a0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('rg3e131cp84v8jgnmmf5503et4', 1320290082, 'sessiontoken|s:32:"7953ada4bb59b58749a0d0570cd582e4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('rlneqvg47jq0q55glpu7pe09s4', 1320311649, 'sessiontoken|s:32:"04d384a290d76eae7f0ba91d9d85c1d0";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"rlneqvg47jq0q55glpu7pe09s4";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('rmmn74a5rjbl328vqdftgd5r32', 1320322918, 'sessiontoken|s:32:"df79fd7283dfd68ec5c991f7dbf3799c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('rmo0utscb16b2i6d92ilthid81', 1320818757, 'language|s:7:"english";languages_id|s:1:"1";admin|a:2:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";}AM_SESSION_TEMPLATES_INSTALL_CHECKED|b:1;am_valid_include|s:40:"5122c0a7b6c42e2369955d1d2265f4e1ba695d4b";'),
('rmroh1ed4pfiu622g0n7dobl43', 1320039279, 'sessiontoken|s:32:"164216c49c9ed4779f6a56e5d648fa1b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ro52gdbgk6quc0ii9k5qa38pf5', 1321487930, 'sessiontoken|s:32:"a794eae1755711d92b8add4d6063439f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('rpjrd7pt9cq97uisenkt27q016', 1321540047, 'language|s:7:"english";languages_id|s:1:"1";admin|a:2:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";}AM_SESSION_TEMPLATES_INSTALL_CHECKED|b:1;am_valid_include|s:40:"5122c0a7b6c42e2369955d1d2265f4e1ba695d4b";'),
('rqg2fpmii5lt1l2nu15u5qa6b0', 1321030213, 'sessiontoken|s:32:"b3c615d3ec75791e50a4920eaec2ee3e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('s2ic916prturfl2qtgiuuogir3', 1320261990, 'sessiontoken|s:32:"fb32a8be11ee39a08446e1a11b98ff38";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('s4aoshbto8f0ck4gj9u4mm1um1', 1320482967, 'sessiontoken|s:32:"a7186ea8e36d15b06d6dad9ef19cddc2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('s55uakd88trnbupv0ue55fu7b7', 1321680966, 'sessiontoken|s:32:"c46d59914003703a124e8caa828d84b8";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('s6l3l6h0tddj7h1r4qpkbro7m5', 1320237987, 'sessiontoken|s:32:"ea59af01e030d9a96fb4869d852ba737";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"23";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('s6qjjkvhkm1lehjdjcfplnb944', 1320845933, 'sessiontoken|s:32:"7f885189dcebac55629068d839585ce3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('s7uctnvh4dt6ogucd3g5pn55u1', 1320363927, 'sessiontoken|s:32:"011ac616df463b0c6092499cf7691700";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('s9c5d8v95e1qh6tvqrpeo42u60', 1320467815, 'sessiontoken|s:32:"d05248533b25acfb5986a4a5dc030060";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"42";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('sa6cjuj35prb7vjbom0lnj20n4', 1321407175, 'sessiontoken|s:32:"c41f383fea4957b54a7a3cc2719d190b";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('saapupukn7oqnpjqaekqb5hns5', 1320096398, 'language|s:7:"english";languages_id|s:1:"1";redirect_origin|a:2:{s:4:"page";s:23:"products_attributes.php";s:3:"get";a:5:{s:6:"action";s:13:"update_option";s:9:"option_id";s:1:"1";s:11:"option_page";s:1:"1";s:10:"value_page";s:1:"1";s:14:"attribute_page";s:1:"1";}}'),
('sd0s923cj2s1dakhh1ahdjgig3', 1321534271, 'sessiontoken|s:32:"456b5d675855aeadcac69d4e316fc565";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('selno6ioasq5jeejop6oon1l26', 1320581086, 'sessiontoken|s:32:"6ceea035980370787ee8b3ef8dc8f1c6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('sgm83m5jmqab1puul8fh12ktj1', 1321429061, 'sessiontoken|s:32:"4bd9dd5656b6af3683f0c2d59d5a4bac";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('sh3cjn7gbodp5p5gg300rfluf1', 1321685836, 'sessiontoken|s:32:"e28a8fa05eb61c05b2a0b49d64d41774";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('sn7lm1s4svkro3meufolo8h7m2', 1320205905, 'sessiontoken|s:32:"1d8e10ea9c38ec9a6d4eafcb88f8eef5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('snmmb09dveagii6n52m71se5i1', 1321652465, 'sessiontoken|s:32:"ab7195de686fe722b615d6de86e6e540";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('t29cbatraqhbttf6b0bc5fkfm0', 1320426257, 'sessiontoken|s:32:"f84474306462068254b5101c75211a51";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('t5atc71ou5ph7m1tbmageejlq1', 1320237928, 'sessiontoken|s:32:"2054e30f56f1d0e5d246543d2914475c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('t6mr5kjd6eefhj7alj1bjkc6u1', 1321520930, 'sessiontoken|s:32:"12e2d8f1b64e9df19270621df9396fd1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:10:"amp;oscsid";s:26:"b1s58e8per48o3g6ns5ohsej04";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('t94psbqf89bjace8ukd0jb4bd3', 1320745551, 'sessiontoken|s:32:"ba10ab9019d14a5f0707b167259858e4";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('t96g8p9kd2f44b8mbodeeh9662', 1320226368, 'sessiontoken|s:32:"b1695e6491e480451f21062a22a05759";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('t98pnpd9tco9mrekjuhsk5ie83', 1321635828, 'sessiontoken|s:32:"eee987097fd3c3783736d5e9c6117371";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ta33hk1itdade60dag2flpt9r7', 1320283202, 'sessiontoken|s:32:"771db4f42098369730abf146f5dc80eb";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ta608cu9dk22moo8i1f46mpte7', 1320818528, 'sessiontoken|s:32:"ccd889152f576a0c7e374de52cae681f";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}48";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"48";}}}s:5:"total";d:109;s:6:"weight";d:0;s:6:"cartID";s:5:"38992";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:6:"osCsid";s:26:"ta608cu9dk22moo8i1f46mpte7";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:11:"products_id";s:2:"32";s:6:"osCsid";s:26:"ta608cu9dk22moo8i1f46mpte7";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}b_image|s:0:"";fimage|s:24:"1320816348395_Desert.jpg";fdesign_instruction|s:31:"<br><b>Instructions</b><br><br>";online_design_comment|a:1:{s:0:"";s:31:"<br><b>Instructions</b><br><br>";}pnam1|a:1:{s:0:"";s:25:"1320816348395_Desert.jpg|";}showimg|s:24:"1320816348395_Desert.jpg";instruction|s:31:"<br><b>Instructions</b><br><br>";bdesign|N;'),
('tb367gj5rhsdkpgs57qp22msp2', 1320079258, 'sessiontoken|s:32:"fadb8f0d5b5d259a35ce93cc8507f072";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tb6ktji68a16a3j2rirpekjrc6', 1320760279, 'sessiontoken|s:32:"972d0ca8123f6d8ecd6c926203ac5265";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tbncrrvg6g4btget1ohr12gjm3', 1321628133, 'sessiontoken|s:32:"f53480413869c62b188bf0df25caeaef";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tbnf9bdrru1hv9idae2i01s3e7', 1319938196, 'sessiontoken|s:32:"e8bd14c2b384d0e801ffb867a2ac4b6a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"5";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tbrnop2sad32atmcgi4esfohg3', 1320988183, 'sessiontoken|s:32:"d965650ade682ce93bab594b63427562";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tehsnu6q7b1er3ebhe801r2lc6', 1321412533, 'sessiontoken|s:32:"58a1b9e2b6527035db81e18246488327";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tejh1jp0j6dgpscvbg66hom5m7', 1321556522, 'sessiontoken|s:32:"b58bbdda89109da66dcd29ff12886ead";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tev6g7g69s1horsq0oblqgttv6', 1321665719, 'sessiontoken|s:32:"6b94538602ca1a7e37842eb54a1830de";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tgcevf7eu9ni1fif2oa50j05i3', 1320673235, 'sessiontoken|s:32:"9768a4d2b35432bebd475d9278903d18";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tjh91arlkpkqb55tfonjdpblk1', 1319938177, 'sessiontoken|s:32:"8cccddc30df48ade028b4318a6926b9f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tjuiqpjdlmbdq42hsjh4fa33p6', 1320483108, 'sessiontoken|s:32:"06a7a78c2cdfcadf0a25475dcc2312d3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"41";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tla7dqppnegs62ioc2it9t5t43', 1320237955, 'sessiontoken|s:32:"23d5afc5497aae1f2c05d4e0e545c4d8";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"43";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('togh64790nv2hjpuq6i3iao2n6', 1320325778, 'sessiontoken|s:32:"cfb01285765fbf6592aaafb4f02a03f2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('togs04vo5uucbi30r99hqh8jq6', 1320828036, 'sessiontoken|s:32:"4c00c89018acbd9bc0d38605e5cb0e22";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:14:"contact_us.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"oscsid";s:26:"kr0m8aelrr6agd8abbvqui9gb3";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}');
INSERT INTO `sessions` (`sesskey`, `expiry`, `value`) VALUES
('toqoa6c76bb4jopn3vse5d9fl5', 1321632399, 'sessiontoken|s:32:"a21e148e385f2eb6af1ee422ff6369c3";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tptvas7rqq1jqst23ettms8nl5', 1321077625, 'sessiontoken|s:32:"1a349f8d87cd68bf8659f7976c0e029d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tqc4o47n27s0vf9tgdj878kfm6', 1320468975, 'sessiontoken|s:32:"a9e737d200fab5a2f11b87cffdecb7e7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:5:"cPath";s:2:"31";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tsvl2oplgarib4qpjclvmpqv05', 1320669404, 'sessiontoken|s:32:"9e19cc1ae4460d1084f0f2b73c68f2ef";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tubd6dks8gmrlajls46ur342o5', 1320363870, 'sessiontoken|s:32:"788c9f653df942a58cda31d8764adb87";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('tveb3dj8bncl9qrt3pfe5j0aq3', 1321399942, 'sessiontoken|s:32:"cf90514a3d3d5140b5f6193f0eeba11c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('u0css92urdn5nqisr5hv9cucf1', 1320069165, 'sessiontoken|s:32:"f1c16d64a8aa857c72d7bf6f0eee3278";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('u23tpi6frjqquvmh96hmo2ot60', 1320635770, 'sessiontoken|s:32:"f210157246da4dde49a58d82d0ceb515";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('u2eaval757hlaa1aqeemuia734', 1320286310, 'sessiontoken|s:32:"e6eea90bdf4b0935e4e6890034a6dafa";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('u33mn6df0nertuvmpfhfo05ht7', 1320035538, 'sessiontoken|s:32:"0a2badd8daf0e4833ee2c344fa281cad";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('u7fg6f2e2gnquiadp7g3er9mq4', 1320919102, 'sessiontoken|s:32:"d0e21d39b52a312ce4d1ec5e3c64936e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('u86o59aaj436m1i0o7anvsiab6', 1320330346, 'sessiontoken|s:32:"56abab5a821adbebe7600e09bf72a2e2";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:10:"quotes.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('u8dfjqk394kmn2sqc500s2ikd6', 1320996039, 'sessiontoken|s:32:"2482f84bd87578a26849d175bf866532";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('u8raat8dig7j06p9surtu94mu0', 1320702258, 'sessiontoken|s:32:"4e12f8df06f226da47f43f86d5a7ee68";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('uacsfepht9of4pqjjqe3i7h4q3', 1321594892, 'sessiontoken|s:32:"a2d036f5375fb34177ecdf23137aa4ff";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:3:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"8";}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:11:"products_id";s:2:"30";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ubb906f2pev3pvd7hppmnomla7', 1320048330, 'sessiontoken|s:32:"4043d344196828f687261b8fb096a90e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('uco1ak7ec4fj1b277e8h9vkrm2', 1320844449, 'sessiontoken|s:32:"5b06189232336aa89a101373ad8c4ac9";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ud13cu9muodi4urhc8fpvcnpl4', 1320466307, 'sessiontoken|s:32:"7663e51e52cb33d17c2618dd8f0651ae";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('uhv1smc6uv94ghiu1r80askd16', 1320263093, 'sessiontoken|s:32:"17a466b1fce8098e6b4e6e626f7c5119";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('uj348h4b55pq34hmjbd7134so3', 1321030583, 'sessiontoken|s:32:"768a7ad95021054fb9a2e1afc90f8d21";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('ul20o26j46pv7qi65j2pcqidm4', 1320186923, 'sessiontoken|s:32:"0380562c46000d39dd1fcf447614044e";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('unroq78us91bv9jv5b11agjfp7', 1320916974, 'sessiontoken|s:32:"97c70f3564bfa81d4dcf9cb39a6e3296";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('uo86c2fd7j3mob9c45sbji1fe2', 1320098191, 'sessiontoken|s:32:"7d474289feea1e126fe8cc155d51c8d5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('uqhvprn70msaq1p6j49sdhj7o1', 1321639844, 'sessiontoken|s:32:"034aaf26a28d1228d4b856a6e7a37f9a";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('us95o5dd4g16se3ngcuulr8qi3', 1320124468, 'sessiontoken|s:32:"4e819d00d2f49a2fa4b5737582bcfacb";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}}s:5:"total";d:86.8700000000000045474735088646411895751953125;s:6:"weight";d:0;s:6:"cartID";s:5:"04267";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:6:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cPath";s:2:"23";s:6:"osCsid";s:26:"us95o5dd4g16se3ngcuulr8qi3";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:11:"products_id";s:2:"29";s:6:"action";s:11:"add_product";}s:4:"post";a:4:{s:2:"id";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}s:11:"products_id";s:2:"29";s:1:"x";s:2:"58";s:1:"y";s:2:"19";}}i:3;a:4:{s:4:"page";s:18:"upload_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:12:"upload_filee";}s:4:"post";a:11:{s:9:"front_img";s:31:"1320122863010_Chrysanthemum.jpg";s:10:"product_id";s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";s:15:"yourID_filename";s:17:"Chrysanthemum.jpg";s:11:"yourID_guid";s:31:"1320122863010_Chrysanthemum.jpg";s:8:"back_img";s:31:"1320122863030_Chrysanthemum.jpg";s:16:"yourID1_filename";s:17:"Chrysanthemum.jpg";s:12:"yourID1_guid";s:31:"1320122863030_Chrysanthemum.jpg";s:19:"fdesign_instruction";s:0:"";s:4:"cccc";s:3:"vvv";s:1:"x";s:2:"65";s:1:"y";s:1:"8";}}i:4;a:4:{s:4:"page";s:16:"show_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:5;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}b_image|s:31:"1320122863030_Chrysanthemum.jpg";fimage|s:31:"1320122863010_Chrysanthemum.jpg";fdesign_instruction|s:31:"<br><b>Instructions</b><br><br>";online_design_comment|a:1:{s:0:"";s:31:"<br><b>Instructions</b><br><br>";}pnam1|a:1:{s:0:"";s:63:"1320122863010_Chrysanthemum.jpg|1320122863030_Chrysanthemum.jpg";}showimg|s:31:"1320122863010_Chrysanthemum.jpg";instruction|s:31:"<br><b>Instructions</b><br><br>";bdesign|N;bimage|s:31:"1320122863030_Chrysanthemum.jpg";'),
('uumtut7u3jtod0e2jbdkv71oq1', 1320238005, 'sessiontoken|s:32:"d84519a60fe0b0f4632eb093c09f3ead";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:7:"page_id";s:1:"2";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('uvbnr2ci9nrduv8fklneenfc27', 1320850359, 'sessiontoken|s:32:"01e3f8f0f358a0fd61f30328ab8fa0b6";cart|O:12:"shoppingCart":5:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:6:"cartID";N;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:2:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:12:"contents.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:7:"page_id";s:1:"6";s:6:"osCsid";s:26:"uvbnr2ci9nrduv8fklneenfc27";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v0b73togv6vgja31i3fosd65g1', 1321685342, 'sessiontoken|s:32:"1cf8189eb5f499e464a47eca938a25db";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v117q9n17sme81qopjggpp5if0', 1320279460, 'sessiontoken|s:32:"c13403df9ea566ebac9268a0b590fb7c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v171ajuqio8ec00h9vd9drpj82', 1319938201, 'sessiontoken|s:32:"cd3d33b680759bf1a0984a42a9672a7d";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cpath";s:2:"24";s:6:"oscsid";s:26:"3h2p6b4f4j35mfiqff6r4decb5";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v1820vsa0bvnbfnfutvhg6s6o2', 1320694715, 'sessiontoken|s:32:"21d316eab5eeba8aac85bed381a78139";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v31si098g9v94ebjiovcmabmf7', 1320716540, 'sessiontoken|s:32:"55d8058047d6b9c00f2e6389a6ae02c1";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v4dp6qsq9tsd7fm2s6g7p335u4', 1321470311, 'sessiontoken|s:32:"5c4554444a63b2b39d44f5c3d105bc3c";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:17:"shopping_cart.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"action";s:7:"execute";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v4p52flrnkanta25sstkq7lur2', 1320329582, 'sessiontoken|s:32:"6df61f6706793a79255c19bd9084a7a6";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v5m90h4q6ljch0rdba5vo02oc6', 1321508403, 'sessiontoken|s:32:"67d55bf2a1c733a78b3ffcda5481cc29";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v6po14r40rjjjhttrknr8bie63', 1320880221, 'sessiontoken|s:32:"a11a98f247b275920f93b362efc3da0f";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:11:"samples.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v7u0oqtvicocft10eh3gn31el7', 1321389530, 'sessiontoken|s:32:"c3e75ceabe969dc4e16f038b5ce3d1e7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('v8b3bm0kgorupvo8c1prs6eac3', 1320210693, 'sessiontoken|s:32:"af754781c87d83b571b0c4e5e1aa84c8";cart|O:12:"shoppingCart":5:{s:8:"contents";a:1:{s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";a:2:{s:3:"qty";i:1;s:10:"attributes";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}}}s:5:"total";d:86.8700000000000045474735088646411895751953125;s:6:"weight";d:0;s:6:"cartID";s:5:"34481";s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:5:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}i:1;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:5:"cPath";s:2:"23";s:6:"osCsid";s:26:"v8b3bm0kgorupvo8c1prs6eac3";}s:4:"post";a:0:{}}i:2;a:4:{s:4:"page";s:16:"product_info.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:3:{s:11:"products_id";s:2:"29";s:6:"action";s:11:"add_product";s:6:"osCsid";s:26:"v8b3bm0kgorupvo8c1prs6eac3";}s:4:"post";a:4:{s:2:"id";a:7:{i:1;s:2:"27";i:15;s:2:"53";i:12;s:2:"36";i:7;s:2:"52";i:13;s:2:"38";i:6;s:2:"18";i:2;s:2:"43";}s:11:"products_id";s:2:"29";s:1:"x";s:2:"48";s:1:"y";s:2:"17";}}i:3;a:4:{s:4:"page";s:18:"upload_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:2:{s:6:"action";s:12:"upload_filee";s:6:"osCsid";s:26:"v8b3bm0kgorupvo8c1prs6eac3";}s:4:"post";a:11:{s:9:"front_img";s:43:"1320209142319_fijischoolreunion testing.pdf";s:10:"product_id";s:40:"29{1}27{15}53{12}36{7}52{13}38{6}18{2}43";s:15:"yourID_filename";s:29:"fijischoolreunion testing.pdf";s:11:"yourID_guid";s:43:"1320209142319_fijischoolreunion testing.pdf";s:8:"back_img";s:0:"";s:16:"yourID1_filename";s:0:"";s:12:"yourID1_guid";s:0:"";s:19:"fdesign_instruction";s:0:"";s:4:"cccc";s:3:"vvv";s:1:"x";s:2:"56";s:1:"y";s:2:"19";}}i:4;a:4:{s:4:"page";s:16:"show_pimages.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"osCsid";s:26:"v8b3bm0kgorupvo8c1prs6eac3";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}b_image|s:0:"";fimage|s:43:"1320209142319_fijischoolreunion testing.pdf";fdesign_instruction|s:31:"<br><b>Instructions</b><br><br>";online_design_comment|a:1:{s:0:"";s:31:"<br><b>Instructions</b><br><br>";}pnam1|a:1:{s:0:"";s:44:"1320209142319_fijischoolreunion testing.pdf|";}showimg|s:43:"1320209142319_fijischoolreunion testing.pdf";instruction|s:31:"<br><b>Instructions</b><br><br>";bdesign|N;'),
('v8ojohcrjc3hdagtt42b2bm8v2', 1320595426, 'sessiontoken|s:32:"ad1ec6471e40f76d4ac3c2a752b27aa0";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('vc735k7ovnq1d9v8bgm1kc8qn4', 1320731125, 'sessiontoken|s:32:"216b50df86faebb131e66540730b34e7";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('veepkb5innqvtvp72bgfn1to63', 1320313163, 'sessiontoken|s:32:"f7b52cf9964a7c47d1e9089640237293";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('vfke9ddqh8s6kj3b5sj6rpugp4', 1320510746, 'sessiontoken|s:32:"b548fe9f3f180d65d8e3739495cd2f14";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('vppth06f1t2t59ipvkt81ncpa6', 1320939065, 'sessiontoken|s:32:"92b133602583aabad71024b4741278b2";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('vq494bapq1992sc2eagqcjclj3', 1321621246, 'sessiontoken|s:32:"0bf9c93c0a6563d368fb3fa6b7d9f8c5";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:1:{s:6:"pageid";s:10:"ProxyLists";}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}'),
('vug68frq9aae93o66d6t0ibnf4', 1321474746, 'sessiontoken|s:32:"08f4a15ad3d19d75d93837fbf3490d58";cart|O:12:"shoppingCart":4:{s:8:"contents";a:0:{}s:5:"total";i:0;s:6:"weight";i:0;s:12:"content_type";b:0;}language|s:7:"english";languages_id|s:1:"1";currency|s:3:"USD";navigation|O:17:"navigationHistory":2:{s:4:"path";a:1:{i:0;a:4:{s:4:"page";s:9:"index.php";s:4:"mode";s:6:"NONSSL";s:3:"get";a:0:{}s:4:"post";a:0:{}}}s:8:"snapshot";a:0:{}}');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE IF NOT EXISTS `specials` (
  `specials_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `specials_new_products_price` decimal(15,4) NOT NULL,
  `specials_date_added` datetime DEFAULT NULL,
  `specials_last_modified` datetime DEFAULT NULL,
  `expires_date` datetime DEFAULT NULL,
  `date_status_change` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`specials_id`),
  KEY `idx_specials_products_id` (`products_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `specials`
--


-- --------------------------------------------------------

--
-- Table structure for table `tax_class`
--

CREATE TABLE IF NOT EXISTS `tax_class` (
  `tax_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_class_title` varchar(32) NOT NULL,
  `tax_class_description` varchar(255) NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`tax_class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tax_class`
--

INSERT INTO `tax_class` (`tax_class_id`, `tax_class_title`, `tax_class_description`, `last_modified`, `date_added`) VALUES
(1, 'Taxable Goods', 'The following types of products are included non-food, services, etc', '2011-08-25 10:45:00', '2011-08-25 10:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE IF NOT EXISTS `tax_rates` (
  `tax_rates_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_zone_id` int(11) NOT NULL,
  `tax_class_id` int(11) NOT NULL,
  `tax_priority` int(5) DEFAULT '1',
  `tax_rate` decimal(7,4) NOT NULL,
  `tax_description` varchar(255) NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`tax_rates_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tax_rates`
--

INSERT INTO `tax_rates` (`tax_rates_id`, `tax_zone_id`, `tax_class_id`, `tax_priority`, `tax_rate`, `tax_description`, `last_modified`, `date_added`) VALUES
(1, 1, 1, 1, '8.2500', 'TX TAX 8.25%', '2011-10-31 15:15:59', '2011-08-25 10:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `website_pages`
--

CREATE TABLE IF NOT EXISTS `website_pages` (
  `page_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(50) NOT NULL,
  `parent_page_id` int(10) NOT NULL,
  `page_name` text NOT NULL,
  `page_title` varchar(100) NOT NULL DEFAULT '',
  `page_meta_keyword` text NOT NULL,
  `page_body` text NOT NULL,
  `position` int(10) NOT NULL,
  `is_footer` char(2) NOT NULL,
  `page_banner` varchar(100) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `website_pages`
--

INSERT INTO `website_pages` (`page_id`, `file_name`, `parent_page_id`, `page_name`, `page_title`, `page_meta_keyword`, `page_body`, `position`, `is_footer`, `page_banner`) VALUES
(1, '', 0, 'Careers', 'Testimonials', 'Testimonials', '<p><b>Under Construction<span style=\\"display: none;\\">&nbsp;</span></b></p>\r\n', 0, 'N', ''),
(2, '', 0, 'UCommunity', 'Quality', 'Quality', '<p><b><font size=\\"4\\">Setting up your document:</font></b></p>\r\n<p><br>\r\n	Create artwork where possible at actual size (1:1 scale). For le sizes that are too large at actual size, we suggest<br>\r\n	using a document size of either 50% or 10%. No bleeds are required. Refer to the Pull Up Banner diagrams<br>\r\n	below for product specic information.</p>\r\n<p>&nbsp;</p>\r\n<p><b><font size=\\"4\\">Fonts:</font></b></p>\r\n<p><br>\r\n	All text must be converted to outlines or curves</p>\r\n<p>&nbsp;</p>\r\n<p><b><font size=\\"4\\">Colour:</font></b></p>\r\n<p><br>\r\n	Colour mode should be set to CMYK. Due to dierences between digital and oset printing and the diversity of<br>\r\n	products we supply, certain PMS colours and eects such as duotones can sometimes be dicult to emulate. If<br>\r\n	colour is of particular concern, colour matching and test prints are available upon request at an extra charge.<br>\r\n	Please contact our sales department if you require any colour matching on your jobs.</p>\r\n<p>&nbsp;</p>\r\n', 0, 'N', ''),
(7, '', 0, 'Blogs', 'Blogs', 'Blogs', '<h2>Augmented Reality in Print</h2>\r\n<p>The following round up of Augmented Reality print advertisements show that print is here to stay and is the medium which connects our reality to the virtual online world. Enjoy!</p>\r\n', 0, 'N', ''),
(3, '', 0, 'Help Center', 'Templates', 'Templates', '<p>You don&#39;t get a second chance to make that first impression, so leave your artwork to the<br>\r\n	experienced designers are DPI Solutions LLC.</p>\r\n<p>Graphic design is a powerful tool for your business, an investment that can transform from<br>\r\n	good impression to success.<br>\r\n	Our in-house graphic design service is fast, reliable and will assist you achieve your end goal,<br>\r\n	on time, and on budget. Let us tailor a package to suit your needs.<br>\r\n	Talk to us today about your artwork requirements.</p>\r\n', 0, 'N', ''),
(4, '', 0, 'contact us', 'contact us', 'contact us', '<p><b>imperial</b><br>\r\n	Monday - Friday<br>\r\n	8:30am - 5:00pm</p>\r\n<div firebugversion=\\"1.5.4\\" id=\\"_firebugConsole\\" style=\\"display: none;\\">&nbsp;</div>\r\n', 0, 'N', ''),
(5, 'faq', 0, 'faq', 'FAQ', 'faq', '<p><b>How can I contact you?</b><br>\r\n	If you have a query regarding&nbsp;DPI Solutions LLC&nbsp;please visit the Contact us page.</p>\r\n<p><br>\r\n	<b>Can I pick up my item?</b><br>\r\n	Yes you can. Please contact us to arrange this.</p>\r\n<p><br>\r\n	<b>How much does it cost to create an account?</b><br>\r\n	It&#39;s free to create an account.</p>\r\n<p><br>\r\n	<b>How do I pay for my order?</b><br>\r\n	Once you have added products to your shopping cart, complete the payment for your order via credit card or PayPal.</p>\r\n<p><br>\r\n	<b>What are the Credit Card types accepted on the site?</b><br>\r\n	The credit cards accepted on the site include Visa Card &amp; Mastercard. We do not accept American Express.</p>\r\n<p><br>\r\n	<b>How do I create an account?</b><br>\r\n	Click on the &quot;My Account&quot; button at the top of the home page. Click on the &quot;Register a new account&quot; button. Enter the required information, and click on the &quot;Submit&quot; button.</p>\r\n<p><br>\r\n	<b>I have forgotten my password </b><br>\r\n	If you have forgotten your password, please click on the &quot;Forgot your password&quot; link on the Sign In page. Enter your email address,and you will be sent a conrmation email with your new password information. If you do not receive an email, check your spam or junk mail folders.</p>\r\n<p><br>\r\n	<b>I would like to make a change to my account details</b><br>\r\n	Click &quot;My Account&quot; and enter your email address and password.Change your account details as required, and then click &quot;Apply&quot;</p>\r\n<p><br>\r\n	<b>Can I cancel and receive a refund for my order?</b><br>\r\n	Once your order is submitted, it uploads directly into an automated processing system. Unfortunately, the system is unable to be altered, so we cannot cancel and refund your order.</p>\r\n<p><br>\r\n	<b>I have placed my order and realised I have made a mistake and would like to make a change. How can I do that?</b><br>\r\n	Once your order is submitted, it uploads directly into an automated processing system. Once your order has been placed, it is unfortunately not possible to make any changes to your order.</p>\r\n<p><br>\r\n	<b>I am not happy with the quality of my products, who can I talk to?</b><br>\r\n	Please contact Customer Support via the contact us page.</p>\r\n<p><br>\r\n	<b>I have not received a conrmation email from Express Banners. Will my order be processed?</b><br>\r\n	If you do not receive a conrmation email from&nbsp;DPI Colutions LLC&nbsp;for your order, please check the spam folder of your email program. If your DPI Colutions LLC conrmation email is not there, please contact Customer Support to confirm that your order has been received.</p>\r\n<p><br>\r\n	<b>How can I check the status of what I have ordered online?</b><br>\r\n	Click &ldquo; My Account&quot; and sign In. The current status of your most recent orders will be displayed.A description of each status can be seen below:<br>\r\n	In Progress - Your order has been received by our system and the printing lab is processing the information.<br>\r\n	In Production - The printing lab has received your order and is currently printing and producing your items.<br>\r\n	Shipped - Your order has been shipped. Most orders will be delivered in 1-2 working days. A conrmation email will be sent to you to conrm that your order has been shipped.<br>\r\n	My Order Status is &#39;Shipped&#39; but I have still not received my order<br>\r\n	Your order status will display as &#39;Shipped&#39; once your order has been despatched from the our warehouse. You will need to use the<br>\r\n	courier tracking number to obtain the status of your parcel.</p>\r\n<p><br>\r\n	<b>How long does it take to process my order?</b><br>\r\n	Your order will be printed and despatched from our warehouse the next business day. This lead time may vary if our print queue has been lled and we have reached our maximum orders for that day.I have only received part of my order .Please contact our customer service team immediately.</p>\r\n<p><br>\r\n	<b>Can I change the shipping address, pick up location or contact phone number after my order has been placed?</b><br>\r\n	Once an order has been nalised and submitted for processing, it is unfortunately not possible to make any changes to your order,including the delivery address and contact phone number.</p>\r\n<p><br>\r\n	<b>How do I upload my artwork?</b><br>\r\n	Select which product you with to order. You will then be asked to upload your artwork.</p>\r\n<p><br>\r\n	<b>What format does my artwork need to be to upload?</b><br>\r\n	The system will accept JPEG, PDF, and ZIP le formats. Other le formats will not be able to be uploaded to the website</p>\r\n', 0, '', ''),
(6, 'about us', 0, 'about us', 'About Us', 'About us', '<p><b>Under Construction</b></p>\r\n', 0, '', ''),
(8, 'Custom Design', 0, 'Custom Design', 'Custom Design', 'Custom Design', '<p><b>Under Construction</b></p>\r\n', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `whos_online`
--

CREATE TABLE IF NOT EXISTS `whos_online` (
  `customer_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `session_id` varchar(128) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `time_entry` varchar(14) NOT NULL,
  `time_last_click` varchar(14) NOT NULL,
  `last_page_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whos_online`
--

INSERT INTO `whos_online` (`customer_id`, `full_name`, `session_id`, `ip_address`, `time_entry`, `time_last_click`, `last_page_url`) VALUES
(0, 'Guest', '16qtlih78ipse1u0fccs4b8hm2', '114.80.93.71', '1321686665', '1321686665', '/'),
(0, 'Guest', 'l2ol22gbr0isflj3hc4bclkkg4', '208.115.111.72', '1321687067', '1321687067', '/'),
(0, 'Guest', 'javl56l9lmu52sn4epemg4qgp2', '183.62.115.227', '1321687405', '1321687405', '/');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `zone_country_id` int(11) NOT NULL,
  `zone_code` varchar(32) NOT NULL,
  `zone_name` varchar(255) NOT NULL,
  PRIMARY KEY (`zone_id`),
  KEY `idx_zones_country_id` (`zone_country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`zone_id`, `zone_country_id`, `zone_code`, `zone_name`) VALUES
(1, 223, 'AL', 'Alabama'),
(2, 223, 'AK', 'Alaska'),
(3, 223, 'AS', 'American Samoa'),
(4, 223, 'AZ', 'Arizona'),
(5, 223, 'AR', 'Arkansas'),
(6, 223, 'AF', 'Armed Forces Africa'),
(7, 223, 'AA', 'Armed Forces Americas'),
(8, 223, 'AC', 'Armed Forces Canada'),
(9, 223, 'AE', 'Armed Forces Europe'),
(10, 223, 'AM', 'Armed Forces Middle East'),
(11, 223, 'AP', 'Armed Forces Pacific'),
(12, 223, 'CA', 'California'),
(13, 223, 'CO', 'Colorado'),
(14, 223, 'CT', 'Connecticut'),
(15, 223, 'DE', 'Delaware'),
(16, 223, 'DC', 'District of Columbia'),
(17, 223, 'FM', 'Federated States Of Micronesia'),
(18, 223, 'FL', 'Florida'),
(19, 223, 'GA', 'Georgia'),
(20, 223, 'GU', 'Guam'),
(21, 223, 'HI', 'Hawaii'),
(22, 223, 'ID', 'Idaho'),
(23, 223, 'IL', 'Illinois'),
(24, 223, 'IN', 'Indiana'),
(25, 223, 'IA', 'Iowa'),
(26, 223, 'KS', 'Kansas'),
(27, 223, 'KY', 'Kentucky'),
(28, 223, 'LA', 'Louisiana'),
(29, 223, 'ME', 'Maine'),
(30, 223, 'MH', 'Marshall Islands'),
(31, 223, 'MD', 'Maryland'),
(32, 223, 'MA', 'Massachusetts'),
(33, 223, 'MI', 'Michigan'),
(34, 223, 'MN', 'Minnesota'),
(35, 223, 'MS', 'Mississippi'),
(36, 223, 'MO', 'Missouri'),
(37, 223, 'MT', 'Montana'),
(38, 223, 'NE', 'Nebraska'),
(39, 223, 'NV', 'Nevada'),
(40, 223, 'NH', 'New Hampshire'),
(41, 223, 'NJ', 'New Jersey'),
(42, 223, 'NM', 'New Mexico'),
(43, 223, 'NY', 'New York'),
(44, 223, 'NC', 'North Carolina'),
(45, 223, 'ND', 'North Dakota'),
(46, 223, 'MP', 'Northern Mariana Islands'),
(47, 223, 'OH', 'Ohio'),
(48, 223, 'OK', 'Oklahoma'),
(49, 223, 'OR', 'Oregon'),
(50, 223, 'PW', 'Palau'),
(51, 223, 'PA', 'Pennsylvania'),
(52, 223, 'PR', 'Puerto Rico'),
(53, 223, 'RI', 'Rhode Island'),
(54, 223, 'SC', 'South Carolina'),
(55, 223, 'SD', 'South Dakota'),
(56, 223, 'TN', 'Tennessee'),
(57, 223, 'TX', 'Texas'),
(58, 223, 'UT', 'Utah'),
(59, 223, 'VT', 'Vermont'),
(60, 223, 'VI', 'Virgin Islands'),
(61, 223, 'VA', 'Virginia'),
(62, 223, 'WA', 'Washington'),
(63, 223, 'WV', 'West Virginia'),
(64, 223, 'WI', 'Wisconsin'),
(65, 223, 'WY', 'Wyoming'),
(66, 38, 'AB', 'Alberta'),
(67, 38, 'BC', 'British Columbia'),
(68, 38, 'MB', 'Manitoba'),
(69, 38, 'NF', 'Newfoundland'),
(70, 38, 'NB', 'New Brunswick'),
(71, 38, 'NS', 'Nova Scotia'),
(72, 38, 'NT', 'Northwest Territories'),
(73, 38, 'NU', 'Nunavut'),
(74, 38, 'ON', 'Ontario'),
(75, 38, 'PE', 'Prince Edward Island'),
(76, 38, 'QC', 'Quebec'),
(77, 38, 'SK', 'Saskatchewan'),
(78, 38, 'YT', 'Yukon Territory'),
(79, 81, 'NDS', 'Niedersachsen'),
(80, 81, 'BAW', 'Baden-WÃ¼rttemberg'),
(81, 81, 'BAY', 'Bayern'),
(82, 81, 'BER', 'Berlin'),
(83, 81, 'BRG', 'Brandenburg'),
(84, 81, 'BRE', 'Bremen'),
(85, 81, 'HAM', 'Hamburg'),
(86, 81, 'HES', 'Hessen'),
(87, 81, 'MEC', 'Mecklenburg-Vorpommern'),
(88, 81, 'NRW', 'Nordrhein-Westfalen'),
(89, 81, 'RHE', 'Rheinland-Pfalz'),
(90, 81, 'SAR', 'Saarland'),
(91, 81, 'SAS', 'Sachsen'),
(92, 81, 'SAC', 'Sachsen-Anhalt'),
(93, 81, 'SCN', 'Schleswig-Holstein'),
(94, 81, 'THE', 'ThÃ¼ringen'),
(95, 14, 'WI', 'Wien'),
(96, 14, 'NO', 'NiederÃ¶sterreich'),
(97, 14, 'OO', 'OberÃ¶sterreich'),
(98, 14, 'SB', 'Salzburg'),
(99, 14, 'KN', 'KÃ¤rnten'),
(100, 14, 'ST', 'Steiermark'),
(101, 14, 'TI', 'Tirol'),
(102, 14, 'BL', 'Burgenland'),
(103, 14, 'VB', 'Voralberg'),
(104, 204, 'AG', 'Aargau'),
(105, 204, 'AI', 'Appenzell Innerrhoden'),
(106, 204, 'AR', 'Appenzell Ausserrhoden'),
(107, 204, 'BE', 'Bern'),
(108, 204, 'BL', 'Basel-Landschaft'),
(109, 204, 'BS', 'Basel-Stadt'),
(110, 204, 'FR', 'Freiburg'),
(111, 204, 'GE', 'Genf'),
(112, 204, 'GL', 'Glarus'),
(113, 204, 'JU', 'GraubÃ¼nden'),
(114, 204, 'JU', 'Jura'),
(115, 204, 'LU', 'Luzern'),
(116, 204, 'NE', 'Neuenburg'),
(117, 204, 'NW', 'Nidwalden'),
(118, 204, 'OW', 'Obwalden'),
(119, 204, 'SG', 'St. Gallen'),
(120, 204, 'SH', 'Schaffhausen'),
(121, 204, 'SO', 'Solothurn'),
(122, 204, 'SZ', 'Schwyz'),
(123, 204, 'TG', 'Thurgau'),
(124, 204, 'TI', 'Tessin'),
(125, 204, 'UR', 'Uri'),
(126, 204, 'VD', 'Waadt'),
(127, 204, 'VS', 'Wallis'),
(128, 204, 'ZG', 'Zug'),
(129, 204, 'ZH', 'ZÃ¼rich'),
(130, 195, 'A CoruÃ±a', 'A CoruÃ±a'),
(131, 195, 'Alava', 'Alava'),
(132, 195, 'Albacete', 'Albacete'),
(133, 195, 'Alicante', 'Alicante'),
(134, 195, 'Almeria', 'Almeria'),
(135, 195, 'Asturias', 'Asturias'),
(136, 195, 'Avila', 'Avila'),
(137, 195, 'Badajoz', 'Badajoz'),
(138, 195, 'Baleares', 'Baleares'),
(139, 195, 'Barcelona', 'Barcelona'),
(140, 195, 'Burgos', 'Burgos'),
(141, 195, 'Caceres', 'Caceres'),
(142, 195, 'Cadiz', 'Cadiz'),
(143, 195, 'Cantabria', 'Cantabria'),
(144, 195, 'Castellon', 'Castellon'),
(145, 195, 'Ceuta', 'Ceuta'),
(146, 195, 'Ciudad Real', 'Ciudad Real'),
(147, 195, 'Cordoba', 'Cordoba'),
(148, 195, 'Cuenca', 'Cuenca'),
(149, 195, 'Girona', 'Girona'),
(150, 195, 'Granada', 'Granada'),
(151, 195, 'Guadalajara', 'Guadalajara'),
(152, 195, 'Guipuzcoa', 'Guipuzcoa'),
(153, 195, 'Huelva', 'Huelva'),
(154, 195, 'Huesca', 'Huesca'),
(155, 195, 'Jaen', 'Jaen'),
(156, 195, 'La Rioja', 'La Rioja'),
(157, 195, 'Las Palmas', 'Las Palmas'),
(158, 195, 'Leon', 'Leon'),
(159, 195, 'Lleida', 'Lleida'),
(160, 195, 'Lugo', 'Lugo'),
(161, 195, 'Madrid', 'Madrid'),
(162, 195, 'Malaga', 'Malaga'),
(163, 195, 'Melilla', 'Melilla'),
(164, 195, 'Murcia', 'Murcia'),
(165, 195, 'Navarra', 'Navarra'),
(166, 195, 'Ourense', 'Ourense'),
(167, 195, 'Palencia', 'Palencia'),
(168, 195, 'Pontevedra', 'Pontevedra'),
(169, 195, 'Salamanca', 'Salamanca'),
(170, 195, 'Santa Cruz de Tenerife', 'Santa Cruz de Tenerife'),
(171, 195, 'Segovia', 'Segovia'),
(172, 195, 'Sevilla', 'Sevilla'),
(173, 195, 'Soria', 'Soria'),
(174, 195, 'Tarragona', 'Tarragona'),
(175, 195, 'Teruel', 'Teruel'),
(176, 195, 'Toledo', 'Toledo'),
(177, 195, 'Valencia', 'Valencia'),
(178, 195, 'Valladolid', 'Valladolid'),
(179, 195, 'Vizcaya', 'Vizcaya'),
(180, 195, 'Zamora', 'Zamora'),
(181, 195, 'Zaragoza', 'Zaragoza');

-- --------------------------------------------------------

--
-- Table structure for table `zones_to_geo_zones`
--

CREATE TABLE IF NOT EXISTS `zones_to_geo_zones` (
  `association_id` int(11) NOT NULL AUTO_INCREMENT,
  `zone_country_id` int(11) NOT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `geo_zone_id` int(11) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`association_id`),
  KEY `idx_zones_to_geo_zones_country_id` (`zone_country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `zones_to_geo_zones`
--

INSERT INTO `zones_to_geo_zones` (`association_id`, `zone_country_id`, `zone_id`, `geo_zone_id`, `last_modified`, `date_added`) VALUES
(1, 223, 57, 1, '2011-10-31 15:14:23', '2011-08-25 10:45:00');
