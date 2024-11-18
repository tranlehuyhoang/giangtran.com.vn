-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Nov 18, 2024 at 04:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giangtran.com.vn`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_17_043830_create_transactions_table', 2),
(5, '2024_11_17_045600_create_payment_history_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `amount` decimal(30,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`id`, `user_id`, `transaction_code`, `amount`, `status`, `bank`, `created_at`, `updated_at`) VALUES
(40, 1, '4704381', 0.00, 'thành công', 'MBBank', '2024-11-17 20:34:58', '2024-11-17 20:34:58'),
(41, 1, '4719355', 30000.00, 'thành công', 'MBBank', '2024-11-17 20:34:58', '2024-11-17 20:34:58'),
(42, 1, '4740935', 38.00, 'thành công', 'MBBank', '2024-11-17 20:34:58', '2024-11-17 20:34:58'),
(43, 1, '4743423', 55000.00, 'thành công', 'MBBank', '2024-11-17 20:34:58', '2024-11-17 20:34:58'),
(44, 1, '4743476', 100000.00, 'thành công', 'MBBank', '2024-11-17 20:34:58', '2024-11-17 20:34:58'),
(45, 1, '4747141', 60000.00, 'thành công', 'MBBank', '2024-11-17 20:34:58', '2024-11-17 20:34:58'),
(46, 1, '4747778', 100000.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(47, 1, '4747783', 100000.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(48, 1, '4748060', 2222.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(49, 1, '4748082', 3000.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(50, 1, '4758880', 5000.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(51, 1, '4758986', 0.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(52, 1, '4758988', 10000.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(53, 1, '4759262', 10001.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(54, 1, '4759294', 11111.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(55, 1, '4760247', 12345.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(56, 1, '4768719', 10000.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(57, 1, '4768735', 0.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(58, 1, '4768790', 0.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(59, 1, '4768795', 10000.00, 'thành công', 'MBBank', '2024-11-17 20:34:59', '2024-11-17 20:34:59'),
(60, 1, '4768890', 11111.00, 'thành công', 'MBBank', '2024-11-17 20:40:52', '2024-11-17 20:40:52'),
(61, 1, '4768915', 12345.00, 'thành công', 'MBBank', '2024-11-17 20:40:52', '2024-11-17 20:40:52'),
(62, 1, '4768933', 5555.00, 'thành công', 'MBBank', '2024-11-17 20:40:52', '2024-11-17 20:40:52'),
(63, 1, '4769002', 5556.00, 'thành công', 'MBBank', '2024-11-17 20:45:20', '2024-11-17 20:45:20'),
(64, 1, '4769008', 5556.00, 'thành công', 'MBBank', '2024-11-17 20:45:20', '2024-11-17 20:45:20'),
(65, 1, '47690732', 0.00, 'thành công', 'MBBank', '2024-11-17 20:45:20', '2024-11-17 20:45:20'),
(66, 1, '47690800', 10000.00, 'thành công', 'MBBank', '2024-11-17 20:45:20', '2024-11-17 20:45:20'),
(67, 1, '4769082', 10000.00, 'thành công', 'MBBank', '2024-11-18 03:48:17', '2024-11-18 03:48:17'),
(68, 1, '4769073', 0.00, 'thành công', 'MBBank', '2024-11-18 03:48:39', '2024-11-18 03:48:39'),
(69, 1, '4769173', 39000.00, 'thành công', 'MBBank', '2024-11-18 03:49:38', '2024-11-18 03:49:38'),
(70, 1, '4769173123', 3900000.00, 'thành công', 'MBBank', '2024-11-18 03:52:29', '2024-11-18 03:52:29'),
(71, 1, '4769233', 10001.00, 'thành công', 'MBBank', '2024-11-18 03:52:56', '2024-11-18 03:52:56'),
(72, 1, '4769250', 0.00, 'thành công', 'MBBank', '2024-11-18 03:53:38', '2024-11-18 03:53:38'),
(73, 1, '4769257', 20000.00, 'thành công', 'MBBank', '2024-11-18 03:54:04', '2024-11-18 03:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dKPgTO7WSSqC1EaarprpddU7qEBgNV6FQ1nJIPMY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXl4a0dIRmRXZ2djQ05EdVp0VTFURzdzOUJiYXp0aVhQUUVLWHdCayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731899369),
('dKVH5so5v1MOFQBxhVQy9fm6E1nEmJCSorICaFFA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWWJ5WURrRk8zQlZ0cE5mWXBUeGo5V2p5YXluczFNZ2Z0ekVlaGZJaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jaGVja3BheW1lbnQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1731902124);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(255) NOT NULL,
  `bank_brand_name` varchar(50) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `amount_out` decimal(30,2) NOT NULL DEFAULT 0.00,
  `amount_in` decimal(30,2) NOT NULL DEFAULT 0.00,
  `accumulated` decimal(30,2) NOT NULL DEFAULT 0.00,
  `transaction_content` text NOT NULL,
  `reference_number` varchar(50) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `sub_account` varchar(20) DEFAULT NULL,
  `bank_account_id` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `bank_brand_name`, `account_number`, `transaction_date`, `amount_out`, `amount_in`, `accumulated`, `transaction_content`, `reference_number`, `code`, `sub_account`, `bank_account_id`, `created_at`, `updated_at`) VALUES
('4704381', 'MBBank', '104567890', '2024-11-15 19:38:45', 345000.00, 0.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24320778197744', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4719355', 'MBBank', '104567890', '2024-11-16 08:43:06', 0.00, 30000.00, 0.00, 'LE VIET ANH chuyen tien', 'FT24321791094227', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4740935', 'MBBank', '104567890', '2024-11-17 00:29:00', 0.00, 38.00, 0.00, 'NODATA', '104567890-20241116', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4743423', 'MBBank', '104567890', '2024-11-17 07:34:56', 0.00, 55000.00, 0.00, 'THAI THI NGOC QUY CHUYEN TIEN- Ma GD ACSP/ ht147148', 'FT24323433060983', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4743476', 'MBBank', '104567890', '2024-11-17 07:39:49', 0.00, 100000.00, 0.00, 'IBFT mua   Ma giao dich  Trace334971 Trace 334971', 'FT24323320170551', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4747141', 'MBBank', '104567890', '2024-11-17 11:27:41', 0.00, 60000.00, 0.00, '71663811883-LE TAN THANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30111181-MOMO71663811883MOMO', 'FT24323047778039', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4747778', 'MBBank', '104567890', '2024-11-17 11:58:43', 0.00, 100000.00, 0.00, 'MBVCB.7636713318.004653.DANG HOANGLONG chuyen tien.CT tu 0761002380668 DANG HOANG LONG toi 104567890 TRAN LE HUY HOANG tai MB- Ma GD ACSP/', 'FT24323802077207', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4747783', 'MBBank', '104567890', '2024-11-17 11:58:59', 0.00, 100000.00, 0.00, 'MBVCB.7636714649.006354.DANG HOANGLONG chuyen tien.CT tu 0761002380668 DANG HOANG LONG toi 104567890 TRAN LE HUY HOANG tai MB- Ma GD ACSP/', 'FT24323630042405', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4748060', 'MBBank', '104567890', '2024-11-17 12:14:18', 0.00, 2222.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien', 'FT24323082750874', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4748082', 'MBBank', '104567890', '2024-11-17 12:15:19', 0.00, 3000.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien', 'FT24323680746008', NULL, NULL, '3622', '2024-11-16 22:18:42', '2024-11-16 22:18:42'),
('4758880', 'MBBank', '104567890', '2024-11-17 21:21:53', 0.00, 5000.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien', 'FT24323050806057', NULL, NULL, '3622', '2024-11-17 07:22:01', '2024-11-17 07:22:01'),
('4758986', 'MBBank', '0966579217', '2024-11-17 21:27:28', 100000.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCIOhEvYqNS-71705824493', 'FT24323541049635', NULL, NULL, '4230', '2024-11-17 20:14:54', '2024-11-17 20:14:54'),
('4758988', 'MBBank', '0966579217', '2024-11-17 21:27:55', 0.00, 10000.00, 0.00, '71707107145-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30308768-MOMO71707107145MOMO', 'FT24323590558304', NULL, NULL, '4230', '2024-11-17 20:14:54', '2024-11-17 20:14:54'),
('4759262', 'MBBank', '0966579217', '2024-11-17 21:41:29', 0.00, 10001.00, 0.00, '71708037439-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30313251-MOMO71708037439MOMO', 'FT24323902652050', NULL, NULL, '4230', '2024-11-17 20:14:54', '2024-11-17 20:14:54'),
('4759294', 'MBBank', '0966579217', '2024-11-17 21:43:02', 0.00, 11111.00, 0.00, '71708198479-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30313747-MOMO71708198479MOMO', 'FT24323395080820', NULL, NULL, '4230', '2024-11-17 20:14:54', '2024-11-17 20:14:54'),
('4760247', 'MBBank', '0966579217', '2024-11-17 22:30:39', 0.00, 12345.00, 0.00, '71710945088-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30327479-MOMO71710945088MOMO', 'FT24323053600214', NULL, NULL, '4230', '2024-11-17 20:14:54', '2024-11-17 20:14:54'),
('4768719', 'MBBank', '0966579217', '2024-11-18 10:28:30', 0.00, 10000.00, 0.00, '71737622158-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30419087-MOMO71737622158MOMO', 'FT24323573020182', NULL, NULL, '4230', '2024-11-17 20:29:17', '2024-11-17 20:29:17'),
('4768735', 'MBBank', '0966579217', '2024-11-18 10:28:56', 3000.00, 0.00, 0.00, 'MVPAS568SKpxh - Ma giao dich/ Trace252260', 'FT24323280716680', NULL, NULL, '4230', '2024-11-17 20:29:17', '2024-11-17 20:29:17'),
('4768790', 'MBBank', '0966579217', '2024-11-18 10:31:09', 50000.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCIiknGSqJC-71736718996', 'FT24323913851637', NULL, NULL, '4230', '2024-11-17 20:31:55', '2024-11-17 20:31:55'),
('4768795', 'MBBank', '0966579217', '2024-11-18 10:31:36', 0.00, 10000.00, 0.00, '71737814118-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30419903-MOMO71737814118MOMO', 'FT24323455040932', NULL, NULL, '4230', '2024-11-17 20:31:55', '2024-11-17 20:31:55'),
('4768890', 'MBBank', '0966579217', '2024-11-18 10:35:24', 0.00, 11111.00, 0.00, '71738140062-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30420925-MOMO71738140062MOMO', 'FT24323340275998', NULL, NULL, '4230', '2024-11-17 20:40:48', '2024-11-17 20:40:48'),
('4768915', 'MBBank', '0966579217', '2024-11-18 10:36:00', 0.00, 12345.00, 0.00, '71738147145-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30421207-MOMO71738147145MOMO NG CHUYEN:CTCP DICH VU DI DONG TRUC TUYEN', 'FT24323416873237', NULL, NULL, '4230', '2024-11-17 20:40:48', '2024-11-17 20:40:48'),
('4768933', 'MBBank', '0966579217', '2024-11-18 10:37:56', 0.00, 5555.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24323540228719', NULL, NULL, '4230', '2024-11-17 20:40:48', '2024-11-17 20:40:48'),
('4769002', 'MBBank', '0966579217', '2024-11-18 10:40:14', 0.00, 5556.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24323444070054', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
('4769008', 'MBBank', '0966579217', '2024-11-18 10:40:38', 0.00, 5556.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24323567189379', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
('4769073', 'MBBank', '0966579217', '2024-11-18 10:44:27', 50000.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCIPHdqFRzS-71737898531', 'FT24323051916503', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
('4769082', 'MBBank', '0966579217', '2024-11-18 10:44:48', 0.00, 10000.00, 0.00, '71738873900-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30423507-MOMO71738873900MOMO', 'FT24323784448437', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
('4769173', 'MBBank', '0966579217', '2024-11-18 10:49:16', 0.00, 39000.00, 0.00, '71739164870-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30424777-MOMO71739164870MOMO', 'FT24323839775406', NULL, NULL, '4230', '2024-11-18 03:49:37', '2024-11-18 03:49:37'),
('4769173123', 'MBBank', '0966579217', '2024-11-18 10:49:16', 0.00, 3900000.00, 0.00, '71739164870-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30424777-MOMO71739164870MOMO', 'FT24323839775406', NULL, NULL, '4230', '2024-11-18 03:49:37', '2024-11-18 03:49:37'),
('4769233', 'MBBank', '0966579217', '2024-11-18 10:52:51', 0.00, 10001.00, 0.00, '71739499873-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30425807-MOMO71739499873MOMO', 'FT24323077619354', NULL, NULL, '4230', '2024-11-18 03:52:56', '2024-11-18 03:52:56'),
('4769250', 'MBBank', '0966579217', '2024-11-18 10:53:31', 50000.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCIOcppXcge-71737905128', 'FT24323017105885', NULL, NULL, '4230', '2024-11-18 03:53:38', '2024-11-18 03:53:38'),
('4769257', 'MBBank', '0966579217', '2024-11-18 10:54:00', 0.00, 20000.00, 0.00, '71739507876-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30426153-MOMO71739507876MOMO', 'FT24323274468247', NULL, NULL, '4230', '2024-11-18 03:54:04', '2024-11-18 03:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2509roblox@gmail.com', '2509roblox@gmail.com', '2509roblox@gmail.com', NULL, '$2y$12$MX0TDXpd987my1iQYkDNHeWT.UdSsnRT2xb54S0SAWoa0EHAIbzs.', 'qUcHWOVTkY2aeQrCzgz6uSYoIw5YZ9xBxtaCEHibX9usuM5dkmnlr8RPuXhZ', '2024-11-16 20:18:19', '2024-11-16 20:18:19'),
(3, '2509roblox@gmail.com2509roblox@gmail.com', '2509roblox@gmail.com2509robloxgmail.com', '2509roblox@gmail.com2509roblox@gmail.com', NULL, '$2y$12$xZdC8kn9cOX3LYkAmOh5bOsx5l6X8MJRwtHKPWM8vFFCiAUtl9aay', NULL, '2024-11-16 21:09:55', '2024-11-16 21:09:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_history_transaction_code_unique` (`transaction_code`),
  ADD KEY `payment_history_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD CONSTRAINT `payment_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
