-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2018 at 08:10 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproj`
--
CREATE DATABASE IF NOT EXISTS `myproj` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myproj`;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` int(10) unsigned NOT NULL,
  `working_time_start` time NOT NULL,
  `working_time_end` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `mobile_number`, `working_time_start`, `working_time_end`, `status`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed Ali', 540000007, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 04:45:07', '2018-03-21 04:45:07'),
(2, 'Ahmed Ali', 549774005, '10:00:00', '18:00:00', '1', 'Riyadh', '2018-03-21 04:46:04', '2018-03-21 04:46:04'),
(3, 'Mustafa Qadi', 540000001, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 04:46:16', '2018-03-21 04:46:16'),
(4, 'Tariq Alshobak', 540000002, '08:00:00', '16:00:00', '1', 'Damam', '2018-03-21 04:46:54', '2018-03-21 04:46:54'),
(5, 'Yazeed AlTaib', 540000000, '14:00:00', '00:00:00', '1', 'Riyadh', '2018-03-21 04:47:37', '2018-03-21 04:47:37'),
(6, 'Waleed Mustafa', 540000055, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 04:47:57', '2018-03-21 04:47:57'),
(7, 'Khaled Waleed', 540000684, '08:00:00', '16:00:00', '0', 'Riyadh', '2018-03-21 04:49:12', '2018-03-21 04:49:12'),
(8, 'AbdullahElawi', 549774025, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 04:52:39', '2018-03-21 04:52:39'),
(9, 'Ali Eid', 540000157, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 04:53:45', '2018-03-21 04:53:45'),
(10, 'Adeel Tamer', 540050000, '08:00:00', '16:00:00', '0', 'Riyadh', '2018-03-21 04:54:03', '2018-03-21 04:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_resets_table', 1),
(45, '2018_03_20_104907_create_drivers_table', 1),
(46, '2018_03_20_105356_create_restaurants_table', 1),
(47, '2018_03_20_105606_create_orders_table', 1),
(48, '2018_03_21_072300_create_drivers_table', 2),
(49, '2018_03_21_081953_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `delivared_at` timestamp NULL DEFAULT NULL,
  `restaurant_id` int(10) unsigned NOT NULL,
  `driver_id` int(10) unsigned NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_number` int(10) unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_restaurant_id_foreign` (`restaurant_id`),
  KEY `orders_driver_id_foreign` (`driver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_on`, `delivared_at`, `restaurant_id`, `driver_id`, `customer_name`, `customer_number`, `status`, `Item`, `created_at`, `updated_at`) VALUES
(1, '2018-03-21 05:22:45', NULL, 1, 8, 'Aya Omar Younis', 549774005, 'Placed', 'pasta , pasta , Pizza', '2018-03-21 05:22:45', '2018-03-21 05:22:45'),
(2, '2018-03-21 05:26:16', '2018-03-20 12:43:00', 1, 3, 'Aya Omar Younis', 549774005, 'Delivered', 'pasta , pasta , Pizza', '2018-03-21 05:26:16', '2018-03-21 05:26:16'),
(3, '2018-03-21 09:41:06', '2018-03-20 12:43:00', 2, 3, 'Mohamed Alqadi', 548723966, 'Delivered', 'Pizza , Rice', '2018-03-21 09:41:06', '2018-03-21 09:41:06'),
(4, '2018-03-21 09:42:41', NULL, 5, 3, 'MOHMAD ALQADI', 549775555, 'On Way', 'Fish', '2018-03-21 09:42:41', '2018-03-21 09:42:41'),
(7, '2018-03-22 15:56:25', NULL, 10, 8, 'Zaher ghnaim', 548989899, 'Ready', 'chicken meal', '2018-03-22 15:56:26', '2018-03-22 15:56:26'),
(8, '2018-03-22 15:58:56', NULL, 11, 3, 'Tareq Altayeb', 587979879, 'Placed', 'Steak', '2018-03-22 15:58:57', '2018-03-22 15:58:57'),
(9, '2018-03-22 16:00:55', NULL, 12, 8, 'hamdi zain', 579898989, 'Placed', 'Kung Pao chicken', '2018-03-22 16:00:55', '2018-03-22 16:00:55'),
(10, '2018-03-22 16:02:39', NULL, 10, 5, 'Mohamed ahmed', 598746546, 'Ready', 'chiken meal', '2018-03-22 16:02:39', '2018-03-22 16:02:39'),
(11, '2018-03-22 16:05:20', NULL, 5, 8, 'zain ahmed', 598888888, 'On Way', 'fish', '2018-03-22 16:05:20', '2018-03-22 16:05:20'),
(12, '2018-03-22 16:05:59', NULL, 3, 8, 'Mariam Zain', 541236999, 'Placed', 'pasta , pasta , Pizza', '2018-03-22 16:05:59', '2018-03-22 16:05:59'),
(13, '2018-03-22 16:06:43', NULL, 12, 8, 'Maria yousef', 587978987, 'Placed', 'fish,shrimps', '2018-03-22 16:06:44', '2018-03-22 16:06:44'),
(14, '2018-03-22 16:07:29', NULL, 10, 8, 'hadeel altayeb', 548898798, 'Placed', 'chicken meal', '2018-03-22 16:07:30', '2018-03-22 16:07:30'),
(15, '2018-03-22 16:09:01', NULL, 12, 3, 'Mazen ahmed', 589998798, 'Placed', 'Kung Pao chicken', '2018-03-22 16:09:01', '2018-03-22 16:09:01'),
(16, '2018-03-22 16:09:54', '2018-03-20 15:43:00', 10, 4, 'marwan alshobaki', 547888888, 'Delivered', 'chiken', '2018-03-22 16:09:54', '2018-03-22 16:09:54'),
(17, '2018-03-22 16:10:26', NULL, 10, 9, 'Mohamed Alqadi', 549879789, 'Placed', 'chicken', '2018-03-22 16:10:26', '2018-03-22 16:10:26'),
(18, '2018-03-22 16:13:52', NULL, 3, 1, 'Tariq hamad', 564646464, 'Placed', 'pasta , pasta , Pizza', '2018-03-22 16:13:52', '2018-03-22 16:13:52'),
(19, '2018-03-22 16:14:40', NULL, 3, 1, 'arwa alshamri', 564888888, 'Placed', 'pasta , pasta , Pizza', '2018-03-22 16:14:40', '2018-03-22 16:14:40'),
(20, '2018-03-22 16:15:04', NULL, 3, 1, 'hadeel alghanim', 544445878, 'Placed', 'pasta , pasta , Pizza', '2018-03-22 16:15:04', '2018-03-22 16:15:04'),
(21, '2018-03-22 16:15:59', NULL, 1, 1, 'jahangeer mohamed', 598989898, 'Placed', 'rice', '2018-03-22 16:16:00', '2018-03-22 16:16:00'),
(22, '2018-03-22 16:16:33', NULL, 5, 1, 'Raya mohamed', 566565665, 'Ready', 'shrimps', '2018-03-22 16:16:33', '2018-03-22 16:16:33'),
(23, '2018-03-22 16:17:18', NULL, 3, 2, 'maysa matar', 554487789, 'Placed', 'pasta , pasta , Pizza', '2018-03-22 16:17:18', '2018-03-22 16:17:18'),
(24, '2018-03-22 16:17:41', NULL, 3, 2, 'Jomana Ahmed', 589798798, 'On Way', 'pasta , pasta , Pizza', '2018-03-22 16:17:41', '2018-03-22 16:17:41'),
(25, '2018-03-22 16:18:30', NULL, 1, 6, 'yasmain ahmed', 578979879, 'Ready', 'rice', '2018-03-22 16:18:30', '2018-03-22 16:18:30'),
(26, '2018-03-22 16:19:16', NULL, 3, 4, 'Josiph laham', 549579798, 'On Way', 'pasta , pasta , Pizza', '2018-03-22 16:19:16', '2018-03-22 16:19:16'),
(27, '2018-03-22 16:19:47', NULL, 10, 4, 'ahmed khaldon', 598989898, 'Placed', 'Chiken', '2018-03-22 16:19:47', '2018-03-22 16:19:47'),
(28, '2018-03-22 16:21:41', '2018-03-22 17:30:33', 3, 8, 'khaleel ahmed', 589798798, 'Delivered', 'pasta , pasta , Pizza', '2018-03-22 16:21:41', '2018-03-22 16:21:41'),
(29, '2018-03-22 16:22:19', '2018-03-20 12:43:00', 10, 1, 'ahmed mahmoud', 598989888, 'Delivered', 'chiken', '2018-03-22 16:22:19', '2018-03-22 16:22:19'),
(30, '2018-03-22 16:29:29', '2018-03-20 12:43:00', 1, 8, 'Aya Omar Younis', 4294967295, 'Delivered', 'pasta , pasta , Pizza', '2018-03-22 16:29:29', '2018-03-22 16:29:29'),
(31, '2018-03-22 16:31:57', '2018-03-19 12:43:00', 10, 2, 'Mohamed zain', 598989889, 'Delivered', 'Chicken', '2018-03-22 16:31:57', '2018-03-22 16:31:57'),
(32, '2018-03-22 16:34:46', '2018-03-20 12:43:00', 10, 5, 'Mazen', 549879879, 'Delivered', 'pasta , pasta , Pizza', '2018-03-22 16:34:46', '2018-03-22 16:34:46'),
(33, '2018-03-22 16:37:05', '2018-03-19 12:43:00', 3, 9, 'khalid', 598798798, 'Delivered', 'pasta , pasta , Pizza', '2018-03-22 16:37:05', '2018-03-22 16:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(10) unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `restaurants_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `phone_number`, `status`, `item`, `created_at`, `updated_at`) VALUES
(1, 'Anardana Indian Restaurant, Movenpick', 549774005, '1', 'pizza', '2018-03-20 15:09:11', '2018-03-20 15:09:11'),
(2, 'Maharaja East by Vineet', 110000000, '1', 'Fish', '2018-03-20 15:10:09', '2018-03-20 15:10:09'),
(3, 'Zafran Indian Bistro', 110000001, '1', 'coffee', '2018-03-20 15:10:28', '2018-03-20 15:10:28'),
(4, 'Copper Chandni', 110000003, '1', 'Rice', '2018-03-20 15:10:42', '2018-03-20 15:10:42'),
(5, 'Benihana', 110000004, '1', 'fish', '2018-03-20 15:11:05', '2018-03-20 15:11:05'),
(6, 'Lusin', 110000005, '0', 'Burger', '2018-03-20 15:11:31', '2018-03-20 15:11:31'),
(10, 'KFC', 555555555, '1', 'Enter text here...', '2018-03-22 15:43:14', '2018-03-22 15:43:14'),
(11, 'Longhorn Steakhouse', 588841264, '1', 'Steak, chicken', '2018-03-22 15:48:41', '2018-03-22 15:48:41'),
(12, 'P.F. Chang''s', 578979874, '1', 'dynamite shrimps, Kung Pao chicken', '2018-03-22 15:51:07', '2018-03-22 15:51:07'),
(13, 'Mcdonalds', 578787878, '0', 'Enter text here...', '2018-03-22 15:51:28', '2018-03-22 15:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`),
  ADD CONSTRAINT `orders_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
