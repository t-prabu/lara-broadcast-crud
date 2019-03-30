-- --------------------------------------------------------
-- Host:                         ivgz2rnl5rh7sphb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com
-- Server version:               5.7.23-log - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for v7pyk5hz66gcyot2
CREATE DATABASE IF NOT EXISTS `v7pyk5hz66gcyot2` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `v7pyk5hz66gcyot2`;

-- Dumping structure for table v7pyk5hz66gcyot2.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table v7pyk5hz66gcyot2.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2014_10_12_000000_create_users_table', 1),
	(6, '2014_10_12_100000_create_password_resets_table', 1),
	(7, '2019_03_29_054750_create_networks_table', 1),
	(8, '2019_03_29_055409_create_numbers_table', 1),
	(9, '2019_03_29_073844_update_table_networks', 2),
	(10, '2019_03_29_073939_update_table_numbers', 2),
	(11, '2019_03_29_094823_updatenetworkstable', 3),
	(12, '2019_03_29_094930_updat_numbers_table', 3),
	(13, '2019_03_29_152210_alter_numbers_table', 4),
	(14, '2019_03_29_162108_update_numbers_table_3', 5),
	(15, '2019_03_29_162639_update_numbers_table_4', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table v7pyk5hz66gcyot2.networks
CREATE TABLE IF NOT EXISTS `networks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `networks_name_unique` (`name`),
  UNIQUE KEY `networks_network_id_unique` (`network_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table v7pyk5hz66gcyot2.networks: ~5 rows (approximately)
/*!40000 ALTER TABLE `networks` DISABLE KEYS */;
INSERT INTO `networks` (`id`, `name`, `network_id`, `created_at`, `updated_at`) VALUES
	(1, 'Mobitel Main', '071', NULL, '2019-03-29 17:19:17'),
	(5, 'tew6', '348', '2019-03-29 11:02:30', '2019-03-29 13:26:37'),
	(6, 'uop[', '457', '2019-03-29 13:23:00', '2019-03-29 13:23:00'),
	(7, 'yui', '567', '2019-03-29 13:23:33', '2019-03-29 13:23:33');
/*!40000 ALTER TABLE `networks` ENABLE KEYS */;

-- Dumping structure for table v7pyk5hz66gcyot2.numbers
CREATE TABLE IF NOT EXISTS `numbers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `numbers_network_id_foreign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table v7pyk5hz66gcyot2.numbers: ~2 rows (approximately)
/*!40000 ALTER TABLE `numbers` DISABLE KEYS */;
INSERT INTO `numbers` (`id`, `name`, `number`, `created_at`, `updated_at`, `numbers_network_id_foreign`) VALUES
	(1, 'test update 12', '1234567890', '2019-03-29 16:05:17', '2019-03-30 02:08:07', '567'),
	(8, 'test 6', '0711234567', '2019-03-30 03:29:15', '2019-03-30 03:29:15', '071'),
	(40, 'test rec 1', '1234567890', '2019-03-30 04:19:02', '2019-03-30 04:32:12', '071'),
	(41, 'test rec 2', '1234567891', '2019-03-30 04:19:03', '2019-03-30 04:19:03', '772'),
	(42, 'test rec 3', '1234567892', '2019-03-30 04:19:04', '2019-03-30 04:19:04', '773'),
	(43, 'test rec 4', '1234567893', '2019-03-30 04:19:05', '2019-03-30 04:19:05', '774'),
	(44, 'test rec 5', '1234567894', '2019-03-30 04:19:05', '2019-03-30 04:19:05', '775'),
	(45, 'test rec 6', '1234567895', '2019-03-30 04:19:06', '2019-03-30 04:19:06', '776'),
	(46, 'test rec 7', '1234567896', '2019-03-30 04:19:06', '2019-03-30 04:19:06', '777'),
	(47, 'test rec 8', '1234567897', '2019-03-30 04:19:07', '2019-03-30 04:19:07', '778'),
	(48, 'test rec 9', '1234567898', '2019-03-30 04:19:08', '2019-03-30 04:19:08', '779'),
	(49, 'test rec 10', '1234567899', '2019-03-30 04:19:08', '2019-03-30 04:19:08', '780'),
	(50, 'test final', '1234567890', '2019-03-30 04:33:55', '2019-03-30 04:33:55', '567');
/*!40000 ALTER TABLE `numbers` ENABLE KEYS */;

-- Dumping structure for table v7pyk5hz66gcyot2.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table v7pyk5hz66gcyot2.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table v7pyk5hz66gcyot2.users
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table v7pyk5hz66gcyot2.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', '$2y$10$TW6pPOZjH/rpaj54aVVjEOqrQpN0u/RiaLgTcmW0fGAGmd3xRyqEG', 'G1n0rg6ZvgrDBNRtjYt0Keo7z8vp4u9Ez3b1qePWy5h737HpOFzH8oYfmmfn', '2019-03-29 06:20:11', '2019-03-29 06:20:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
