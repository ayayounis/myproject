-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table myproj.drivers: ~10 rows (approximately)
/*!40000 ALTER TABLE `drivers` DISABLE KEYS */;
INSERT INTO `drivers` (`id`, `name`, `mobile_number`, `working_time_start`, `working_time_end`, `status`, `location`, `created_at`, `updated_at`) VALUES
	(1, 'Mohammed Ali', 540000007, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 07:45:07', '2018-03-21 07:45:07'),
	(2, 'Ahmed Ali', 549774005, '10:00:00', '18:00:00', '1', 'Riyadh', '2018-03-21 07:46:04', '2018-03-21 07:46:04'),
	(3, 'Mustafa Qadi', 540000001, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 07:46:16', '2018-03-21 07:46:16'),
	(4, 'Tariq Alshobak', 540000002, '08:00:00', '16:00:00', '1', 'Damam', '2018-03-21 07:46:54', '2018-03-21 07:46:54'),
	(5, 'Yazeed AlTaib', 540000000, '14:00:00', '00:00:00', '1', 'Riyadh', '2018-03-21 07:47:37', '2018-03-21 07:47:37'),
	(6, 'Waleed Mustafa', 540000055, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 07:47:57', '2018-03-21 07:47:57'),
	(7, 'Khaled Waleed', 540000684, '08:00:00', '16:00:00', '0', 'Riyadh', '2018-03-21 07:49:12', '2018-03-21 07:49:12'),
	(8, 'AbdullahElawi', 549774025, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 07:52:39', '2018-03-21 07:52:39'),
	(9, 'Ali Eid', 540000157, '08:00:00', '16:00:00', '1', 'Riyadh', '2018-03-21 07:53:45', '2018-03-21 07:53:45'),
	(10, 'Adeel Tamer', 540050000, '08:00:00', '16:00:00', '0', 'Riyadh', '2018-03-21 07:54:03', '2018-03-21 07:54:03');
/*!40000 ALTER TABLE `drivers` ENABLE KEYS */;

-- Dumping data for table myproj.migrations: ~7 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(43, '2014_10_12_000000_create_users_table', 1),
	(44, '2014_10_12_100000_create_password_resets_table', 1),
	(45, '2018_03_20_104907_create_drivers_table', 1),
	(46, '2018_03_20_105356_create_restaurants_table', 1),
	(47, '2018_03_20_105606_create_orders_table', 1),
	(48, '2018_03_21_072300_create_drivers_table', 2),
	(49, '2018_03_21_081953_create_orders_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table myproj.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `created_on`, `delivared_at`, `restaurant_id`, `driver_id`, `customer_name`, `customer_number`, `status`, `Item`, `created_at`, `updated_at`) VALUES
	(1, '2018-03-21 08:22:45', NULL, 1, 8, 'Aya Omar Younis', 549774005, 'placed', 'pasta , pasta , Pizza', '2018-03-21 08:22:45', '2018-03-21 08:22:45'),
	(2, '2018-03-21 08:26:16', '2018-03-20 15:43:00', 1, 3, 'Aya Omar Younis', 549774005, 'delivered', 'pasta , pasta , Pizza', '2018-03-21 08:26:16', '2018-03-21 08:26:16'),
	(3, '2018-03-21 12:41:06', '2018-03-20 15:43:00', 2, 3, 'Mohamed Alqadi', 1, 'delivered', 'Pizza , Rice', '2018-03-21 12:41:06', '2018-03-21 12:41:06'),
	(4, '2018-03-21 12:42:41', NULL, 5, 3, 'MOHMAD ALQADI', 549775555, 'On Way', 'Fish', '2018-03-21 12:42:41', '2018-03-21 12:42:41');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping data for table myproj.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table myproj.restaurants: ~6 rows (approximately)
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
INSERT INTO `restaurants` (`id`, `name`, `phone_number`, `status`, `item`, `created_at`, `updated_at`) VALUES
	(1, 'Anardana Indian Restaurant, Movenpick', 549774005, '1', 'pizza', '2018-03-20 18:09:11', '2018-03-20 18:09:11'),
	(2, 'Maharaja East by Vineet', 110000000, '1', 'Fish', '2018-03-20 18:10:09', '2018-03-20 18:10:09'),
	(3, 'Zafran Indian Bistro', 110000001, '1', 'coffee', '2018-03-20 18:10:28', '2018-03-20 18:10:28'),
	(4, 'Copper Chandni', 110000003, '1', 'Rice', '2018-03-20 18:10:42', '2018-03-20 18:10:42'),
	(5, 'Benihana', 110000004, '1', 'fish', '2018-03-20 18:11:05', '2018-03-20 18:11:05'),
	(6, 'Lusin', 110000005, '0', 'Burger', '2018-03-20 18:11:31', '2018-03-20 18:11:31');
/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;

-- Dumping data for table myproj.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
