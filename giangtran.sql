-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 02:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
(5, '2024_11_17_045600_create_payment_history_table', 3),
(6, '2024_11_19_205751_add_themes_settings_to_users_table', 4),
(7, '2024_11_19_210118_create_permission_tables', 5),
(8, '2024_11_19_212615_create_smm_categories_table', 6),
(9, '2024_11_19_214137_create_smm_services_table', 7),
(10, '2024_11_21_140737_create_smm_orders_table', 8),
(11, '2024_11_21_213650_add_fields_to_users_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(73, 1, '4769257', 20000.00, 'thành công', 'MBBank', '2024-11-18 03:54:04', '2024-11-18 03:54:04'),
(74, 1, '4769257123', 20000.00, 'thành công', 'MBBank', '2024-11-18 03:57:39', '2024-11-18 03:57:39'),
(75, 1, '4769257123213', 20000.00, 'thành công', 'MBBank', '2024-11-18 03:58:54', '2024-11-18 03:58:54'),
(76, 1, '123', 20000.00, 'thành công', 'MBBank', '2024-11-18 03:59:50', '2024-11-18 03:59:50'),
(77, 1, '4769425', 15000.00, 'thành công', 'MBBank', '2024-11-18 04:00:22', '2024-11-18 04:00:22'),
(78, 1, '4772762', 69000.00, 'thành công', 'MBBank', '2024-11-18 13:22:39', '2024-11-18 13:22:39'),
(79, 1, '4774959', 500000.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(80, 1, '4777333', 0.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(81, 1, '4777755', 0.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(82, 1, '4779658', 0.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(83, 1, '4780013', 0.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(84, 1, '4780064', 0.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(85, 1, '4780183', 0.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(86, 1, '4780224', 0.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(87, 1, '4780283', 0.00, 'thành công', 'MBBank', '2024-11-18 13:22:43', '2024-11-18 13:22:43'),
(88, 1, '4784033', 0.00, 'thành công', 'MBBank', '2024-11-18 14:43:29', '2024-11-18 14:43:29'),
(89, 1, '4791752', 8000.00, 'thành công', 'MBBank', '2024-11-19 02:31:08', '2024-11-19 02:31:08'),
(90, 1, '4792453', 0.00, 'thành công', 'MBBank', '2024-11-19 02:31:13', '2024-11-19 02:31:13'),
(91, 1, '4792460', 10000.00, 'thành công', 'MBBank', '2024-11-19 02:31:16', '2024-11-19 02:31:16'),
(92, 1, '4792566', 10000.00, 'thành công', 'MBBank', '2024-11-19 02:32:10', '2024-11-19 02:32:10'),
(93, 1, '4769002123', 5552226.00, 'thành công', 'MBBank', '2024-11-19 02:51:43', '2024-11-19 02:51:43'),
(94, 1, '4792851', 2000.00, 'thành công', 'MBBank', '2024-11-19 02:53:15', '2024-11-19 02:53:15'),
(95, 1, '4792895', 2000.00, 'thành công', 'MBBank', '2024-11-19 02:57:58', '2024-11-19 02:57:58'),
(96, 1, '4793369', 2345.00, 'thành công', 'MBBank', '2024-11-19 06:11:19', '2024-11-19 06:11:19'),
(97, 1, '4793814', 0.00, 'thành công', 'MBBank', '2024-11-19 06:11:23', '2024-11-19 06:11:23'),
(98, 1, '4799013', 2000.00, 'thành công', 'MBBank', '2024-11-19 12:14:18', '2024-11-19 12:14:18'),
(99, 1, '4799036', 2002.00, 'thành công', 'MBBank', '2024-11-19 12:14:24', '2024-11-19 12:14:24'),
(100, 1, '4801588', 2008.00, 'thành công', 'MBBank', '2024-11-19 12:14:28', '2024-11-19 12:14:28'),
(101, 4, '4816568', 250000.00, 'thành công', 'MBBank', '2024-11-20 13:55:43', '2024-11-20 13:55:43'),
(102, 4, '4817470', 0.00, 'thành công', 'MBBank', '2024-11-20 13:55:46', '2024-11-20 13:55:46'),
(103, 4, '4819057', 0.00, 'thành công', 'MBBank', '2024-11-20 13:55:50', '2024-11-20 13:55:50'),
(104, 4, '4819127', 0.00, 'thành công', 'MBBank', '2024-11-20 13:55:55', '2024-11-20 13:55:55'),
(105, 4, '4819289', 0.00, 'thành công', 'MBBank', '2024-11-20 13:55:59', '2024-11-20 13:55:59'),
(106, 4, '4819334', 0.00, 'thành công', 'MBBank', '2024-11-20 13:56:02', '2024-11-20 13:56:02'),
(107, 4, '4820214', 0.00, 'thành công', 'MBBank', '2024-11-20 13:56:05', '2024-11-20 13:56:05'),
(108, 4, '4820258', 0.00, 'thành công', 'MBBank', '2024-11-20 13:56:08', '2024-11-20 13:56:08'),
(109, 4, '4820432', 0.00, 'thành công', 'MBBank', '2024-11-20 13:56:12', '2024-11-20 13:56:12'),
(110, 4, '4820602', 30000.00, 'thành công', 'MBBank', '2024-11-20 13:56:15', '2024-11-20 13:56:15'),
(111, 4, '4830566', 2020.00, 'thành công', 'MBBank', '2024-11-20 13:58:43', '2024-11-20 13:58:43'),
(112, 4, '4831131', 2012.00, 'thành công', 'MBBank', '2024-11-20 14:18:57', '2024-11-20 14:18:57'),
(113, 4, '4831168', 2003.00, 'thành công', 'MBBank', '2024-11-20 14:20:24', '2024-11-20 14:20:24'),
(115, 4, '4831251', 2400.00, 'thành công', 'MBBank', '2024-11-21 09:39:04', '2024-11-21 09:39:04'),
(116, 1, '4891313', 2000.00, 'thành công', 'MBBank', '2024-11-23 02:51:02', '2024-11-23 02:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_role', 'web', '2024-11-19 14:06:30', '2024-11-19 14:06:30'),
(2, 'view_any_role', 'web', '2024-11-19 14:06:30', '2024-11-19 14:06:30'),
(3, 'create_role', 'web', '2024-11-19 14:06:30', '2024-11-19 14:06:30'),
(4, 'update_role', 'web', '2024-11-19 14:06:30', '2024-11-19 14:06:30'),
(5, 'delete_role', 'web', '2024-11-19 14:06:30', '2024-11-19 14:06:30'),
(6, 'delete_any_role', 'web', '2024-11-19 14:06:30', '2024-11-19 14:06:30'),
(7, 'page_Themes', 'web', '2024-11-19 14:06:30', '2024-11-19 14:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2024-11-19 14:06:30', '2024-11-19 14:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1);

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
('9E9qyLNZnnRsbliyuuTfNRCkzWvhRRwk55V8Yzo9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXJndVdHcVR6d0YyZjdpV09oMlB0RWMwOVZYTDJteGg2OVpyaFNWOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732405281),
('aTOpZkbpmciGN5XkH5Hab7LDAD5ZChboTXnN1ZRU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzFjZ0xIRkg4alRhWVZGMG1BT2hVMHBLc3VxTEVvZFJUSHRxNFJsRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732404963),
('NAn1jq01mdtJpsLitbRGsLDYPYUPpWkNOPtJmECc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHRISTRnQVozd0VGSm5LMURvN1M1elFqRVhid2N3T1cyVUI4ZDM5aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zZXJ2aWNlcy9zbW0vY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732412155),
('W6womxjO7nxOvTkkMHAFDrYz4lYZ8kp1Yybadcc6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGhsQkxadXJXZThCUlJBTUROWnEyWGxWTHY1RjFVNGFROTFlVDZ1ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732404997);

-- --------------------------------------------------------

--
-- Table structure for table `smm_categories`
--

CREATE TABLE `smm_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smm_categories`
--

INSERT INTO `smm_categories` (`id`, `name`, `image`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Follow tiktok', '01JD2DGAVJRKZZM70P3FA9ZFME.gif', '123', '2024-11-19 14:33:57', '2024-11-19 14:33:57'),
(2, 'Follow facebook', '01JD2DM3EGYGQ1NGQF9S8GT266.gif', '1', '2024-11-19 14:36:01', '2024-11-19 14:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `smm_orders`
--

CREATE TABLE `smm_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `smm_service_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(15,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `unit_price` decimal(15,2) NOT NULL,
  `start_count` int(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remains` int(11) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smm_orders`
--

INSERT INTO `smm_orders` (`id`, `user_id`, `smm_service_id`, `quantity`, `total_price`, `status`, `unit_price`, `start_count`, `link`, `remains`, `payment_method`, `created_at`, `updated_at`) VALUES
(8, 1, 1, 2000, 20000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 2000, NULL, '2024-11-23 04:10:15', '2024-11-23 04:10:15'),
(9, 1, 1, 2000, 20000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 2000, NULL, '2024-11-23 04:12:15', '2024-11-23 04:12:15'),
(10, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, NULL, '2024-11-23 04:12:43', '2024-11-23 04:12:43'),
(11, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, NULL, '2024-11-23 04:13:00', '2024-11-23 04:13:00'),
(12, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, NULL, '2024-11-23 04:13:57', '2024-11-23 04:13:57'),
(13, 1, 1, 2000, 20000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 2000, 'account_balance', '2024-11-23 04:15:04', '2024-11-23 04:15:04'),
(14, 1, 1, 3000, 30000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 3000, 'account_balance', '2024-11-23 04:20:23', '2024-11-23 04:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `smm_services`
--

CREATE TABLE `smm_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `smmcategory_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `code` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smm_services`
--

INSERT INTO `smm_services` (`id`, `smmcategory_id`, `name`, `price`, `code`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, '763 - TikTok Followers | Instant | 10000 Per Day | Real &amp; Bot Data ⚡⛔ - ≈ 33024.265 ₫ per 1000', 10000.00, '763', 1, '2024-11-19 14:58:37', '2024-11-21 06:54:51');

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
('123', 'MBBank', '0966579217', '2024-11-18 10:54:00', 0.00, 20000.00, 0.00, '71739507876-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30426153-MOMO71739507876MOMO', 'FT24323274468247', NULL, NULL, '4230', '2024-11-18 03:54:04', '2024-11-18 03:54:04'),
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
('4769002123', 'MBBank', '0966579217', '2024-11-18 10:40:14', 0.00, 5552226.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24323444070054', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
('4769008', 'MBBank', '0966579217', '2024-11-18 10:40:38', 0.00, 5556.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24323567189379', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
('4769073', 'MBBank', '0966579217', '2024-11-18 10:44:27', 50000.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCIPHdqFRzS-71737898531', 'FT24323051916503', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
('4769082', 'MBBank', '0966579217', '2024-11-18 10:44:48', 0.00, 10000.00, 0.00, '71738873900-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30423507-MOMO71738873900MOMO', 'FT24323784448437', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
('4769173', 'MBBank', '0966579217', '2024-11-18 10:49:16', 0.00, 39000.00, 0.00, '71739164870-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30424777-MOMO71739164870MOMO', 'FT24323839775406', NULL, NULL, '4230', '2024-11-18 03:49:37', '2024-11-18 03:49:37'),
('4769173123', 'MBBank', '0966579217', '2024-11-18 10:49:16', 0.00, 3900000.00, 0.00, '71739164870-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30424777-MOMO71739164870MOMO', 'FT24323839775406', NULL, NULL, '4230', '2024-11-18 03:49:37', '2024-11-18 03:49:37'),
('4769233', 'MBBank', '0966579217', '2024-11-18 10:52:51', 0.00, 10001.00, 0.00, '71739499873-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30425807-MOMO71739499873MOMO', 'FT24323077619354', NULL, NULL, '4230', '2024-11-18 03:52:56', '2024-11-18 03:52:56'),
('4769250', 'MBBank', '0966579217', '2024-11-18 10:53:31', 50000.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCIOcppXcge-71737905128', 'FT24323017105885', NULL, NULL, '4230', '2024-11-18 03:53:38', '2024-11-18 03:53:38'),
('4769257', 'MBBank', '0966579217', '2024-11-18 10:54:00', 0.00, 20000.00, 0.00, '71739507876-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30426153-MOMO71739507876MOMO', 'FT24323274468247', NULL, NULL, '4230', '2024-11-18 03:54:04', '2024-11-18 03:54:04'),
('4769257123', 'MBBank', '0966579217', '2024-11-18 10:54:00', 0.00, 20000.00, 0.00, '71739507876-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30426153-MOMO71739507876MOMO', 'FT24323274468247', NULL, NULL, '4230', '2024-11-18 03:54:04', '2024-11-18 03:54:04'),
('4769257123213', 'MBBank', '0966579217', '2024-11-18 10:54:00', 0.00, 20000.00, 0.00, '71739507876-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30426153-MOMO71739507876MOMO', 'FT24323274468247', NULL, NULL, '4230', '2024-11-18 03:54:04', '2024-11-18 03:54:04'),
('4769425', 'MBBank', '0966579217', '2024-11-18 11:00:17', 0.00, 15000.00, 0.00, '71740011067-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30427944-MOMO71740011067MOMO', 'FT24323051230108', NULL, NULL, '4230', '2024-11-18 04:00:22', '2024-11-18 04:00:22'),
('4772762', 'MBBank', '0966579217', '2024-11-18 13:52:37', 0.00, 69000.00, 0.00, 'MOMO-CASHOUT-0966579217-OQCOenSzAKFQ-71751983985', 'FT24323909064404', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4774959', 'MBBank', '0966579217', '2024-11-18 15:25:12', 0.00, 500000.00, 0.00, 'MB 0966579217 NGUYEN VAN XO chuyentien- Ma GD ACSP/ 6C033320', 'FT24323800724416', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4777333', 'MBBank', '0966579217', '2024-11-18 17:08:29', 50000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien- MaGD ACSP/ 1J338164', 'FT24323154045401', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4777755', 'MBBank', '0966579217', '2024-11-18 17:30:25', 3000.00, 0.00, 0.00, 'MVPAS5708IahQ - Ma giao dich/ Trace317390', 'FT24323740406222', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4779658', 'MBBank', '0966579217', '2024-11-18 18:44:36', 10000.00, 0.00, 0.00, 'WEB032679537411', 'FT24323113227901', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4780013', 'MBBank', '0966579217', '2024-11-18 18:57:42', 5000.00, 0.00, 0.00, 'WEB035533538906', 'FT24323352505313', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4780064', 'MBBank', '0966579217', '2024-11-18 18:59:25', 6000.00, 0.00, 0.00, 'WEB035533538906', 'FT24323176400060', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4780183', 'MBBank', '0966579217', '2024-11-18 19:03:29', 4000.00, 0.00, 0.00, 'WEB035533538906', 'FT24323633447323', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4780224', 'MBBank', '0966579217', '2024-11-18 19:05:03', 2000.00, 0.00, 0.00, 'WEB035533538906', 'FT24323218072377', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4780283', 'MBBank', '0966579217', '2024-11-18 19:07:00', 2002.00, 0.00, 0.00, 'WEB035533538906', 'FT24323585761944', NULL, NULL, '4230', '2024-11-18 13:22:33', '2024-11-18 13:22:33'),
('4784033', 'MBBank', '0966579217', '2024-11-18 21:29:16', 10000.00, 0.00, 0.00, 'NF 2508ROBLOX', 'FT24323502763702', NULL, NULL, '4230', '2024-11-18 14:43:29', '2024-11-18 14:43:29'),
('4791752', 'MBBank', '0966579217', '2024-11-19 08:09:53', 0.00, 8000.00, 0.00, 'BUI QUANG HUY chuyen tien', 'FT24324188795745', NULL, NULL, '4230', '2024-11-19 02:30:30', '2024-11-19 02:30:30'),
('4792453', 'MBBank', '0966579217', '2024-11-19 09:22:35', 50000.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCInsQQnFHq-71813521019', 'FT24324900540903', NULL, NULL, '4230', '2024-11-19 02:30:30', '2024-11-19 02:30:30'),
('4792460', 'MBBank', '0966579217', '2024-11-19 09:22:57', 0.00, 10000.00, 0.00, '71814638337-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30733890-MOMO71814638337MOMO', 'FT24324317756484', NULL, NULL, '4230', '2024-11-19 02:30:30', '2024-11-19 02:30:30'),
('4792566', 'MBBank', '0966579217', '2024-11-19 09:32:04', 0.00, 10000.00, 0.00, '71815400306-TRAN LE HOANG GIANG chuyen tien qua MoMo-CHUYEN TIEN-OQCH30736104-MOMO71815400306MOMO', 'FT24324289210336', NULL, NULL, '4230', '2024-11-19 02:32:10', '2024-11-19 02:32:10'),
('4792851', 'MBBank', '0966579217', '2024-11-19 09:53:08', 0.00, 2000.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24324455407049', NULL, NULL, '4230', '2024-11-19 02:53:15', '2024-11-19 02:53:15'),
('4792895', 'MBBank', '0966579217', '2024-11-19 09:56:50', 0.00, 2000.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24324250929417', NULL, NULL, '4230', '2024-11-19 02:57:56', '2024-11-19 02:57:56'),
('4793369', 'MBBank', '0966579217', '2024-11-19 10:34:33', 0.00, 2345.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24324203094038', NULL, NULL, '4230', '2024-11-19 06:11:18', '2024-11-19 06:11:18'),
('4793814', 'MBBank', '0966579217', '2024-11-19 11:07:45', 1950000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien - Ma giao dich/ Trace 429982', 'FT24324353906900', NULL, NULL, '4230', '2024-11-19 06:11:18', '2024-11-19 06:11:18'),
('4799013', 'MBBank', '0966579217', '2024-11-19 15:26:26', 0.00, 2000.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24324051985697', NULL, NULL, '4230', '2024-11-19 12:14:17', '2024-11-19 12:14:17'),
('4799036', 'MBBank', '0966579217', '2024-11-19 15:27:33', 0.00, 2002.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24324039249453', NULL, NULL, '4230', '2024-11-19 12:14:17', '2024-11-19 12:14:17'),
('4801588', 'MBBank', '0966579217', '2024-11-19 17:11:37', 0.00, 2008.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24324037264639', NULL, NULL, '4230', '2024-11-19 12:14:17', '2024-11-19 12:14:17'),
('4816568', 'MBBank', '0966579217', '2024-11-20 12:53:34', 0.00, 250000.00, 0.00, 'TRAN QUANG NGHIA chuyen tien', 'FT24325262970382', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4817470', 'MBBank', '0966579217', '2024-11-20 13:31:49', 60000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien- MaGD ACSP/ S6481826', 'FT24325054018064', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4819057', 'MBBank', '0966579217', '2024-11-20 14:29:00', 3000.00, 0.00, 0.00, 'MVPAS589cgnwY - Ma giao dich/ Trace055243', 'FT24325503600880', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4819127', 'MBBank', '0966579217', '2024-11-20 14:31:37', 3000.00, 0.00, 0.00, 'MVPAS591lRFng - Ma giao dich/ Trace068551', 'FT24325402206600', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4819289', 'MBBank', '0966579217', '2024-11-20 14:38:07', 3000.00, 0.00, 0.00, 'MVPAS595uUi4e - Ma giao dich/ Trace100096', 'FT24325539663730', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4819334', 'MBBank', '0966579217', '2024-11-20 14:39:22', 10000.00, 0.00, 0.00, 'MVPAS597V5J3M - Ma giao dich/ Trace106650', 'FT24325980074265', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4820214', 'MBBank', '0966579217', '2024-11-20 15:10:52', 5123.00, 0.00, 0.00, 'MVPAS6245vaOu - Ma giao dich/ Trace273908', 'FT24325458030289', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4820258', 'MBBank', '0966579217', '2024-11-20 15:12:18', 3123.00, 0.00, 0.00, 'MVPAS626nSW5w - Ma giao dich/ Trace356015', 'FT24325734607170', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4820432', 'MBBank', '0966579217', '2024-11-20 15:17:57', 5000.00, 0.00, 0.00, 'MVPAS628JKbJo - Ma giao dich/ Trace313567', 'FT24325199968851', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4820602', 'MBBank', '0966579217', '2024-11-20 15:23:03', 0.00, 30000.00, 0.00, 'MBVCB.7667692440.180038.LE THANH HAI chuyen tien.CT tu 9999118888 LE THANH HAI toi 0966579217 TRAN LE HOANG GIANG tai MB- Ma GD ACSP/ ot1800', 'FT24325824068610', NULL, NULL, '4230', '2024-11-20 13:55:42', '2024-11-20 13:55:42'),
('4830566', 'MBBank', '0966579217', '2024-11-20 20:58:39', 0.00, 2020.00, 0.00, 'NF 2509ROBLOX', 'FT24325528478455', NULL, NULL, '4230', '2024-11-20 13:58:42', '2024-11-20 13:58:42'),
('4831131', 'MBBank', '0966579217', '2024-11-20 21:18:50', 0.00, 2012.00, 0.00, 'NF ADMIN', 'FT24325697902828', NULL, NULL, '4230', '2024-11-20 14:18:56', '2024-11-20 14:18:56'),
('4831142', 'MBBank', '0966579217', '2024-11-20 21:19:20', 0.00, 2200.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24325853505830', NULL, NULL, '4230', '2024-11-20 14:19:31', '2024-11-20 14:19:31'),
('4831168', 'MBBank', '0966579217', '2024-11-20 21:20:16', 0.00, 2003.00, 0.00, 'NF ADMIN', 'FT24325082202583', NULL, NULL, '4230', '2024-11-20 14:20:23', '2024-11-20 14:20:23'),
('4831251', 'MBBank', '0966579217', '2024-11-20 21:23:17', 0.00, 2400.00, 0.00, 'NF ADMIN', 'FT24325625162500', NULL, NULL, '4230', '2024-11-20 14:23:22', '2024-11-20 14:23:22'),
('4847871', 'MBBank', '0966579217', '2024-11-21 15:39:37', 0.00, 500000.00, 0.00, 'LA VAN QUYEN CHUYEN TIEN- Ma GD ACSP/ Gx209419', 'FT24326301117476', NULL, NULL, '4230', '2024-11-21 09:37:42', '2024-11-21 09:37:42'),
('4856392', 'MBBank', '0966579217', '2024-11-21 21:19:03', 0.00, 300000.00, 0.00, 'NGUYEN NGOC TIEN chuyen tien', 'FT24326517060164', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4867474', 'MBBank', '0966579217', '2024-11-22 11:46:29', 2000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien', 'FT24327092295652', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4867701', 'MBBank', '0966579217', '2024-11-22 11:56:53', 544000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien - Ma giao dich/ Trace 549655', 'FT24327430850880', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4868611', 'MBBank', '0966579217', '2024-11-22 12:32:36', 500000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien- MaGD ACSP/ IH715740', 'FT24327220670097', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4872099', 'MBBank', '0966579217', '2024-11-22 14:45:07', 80000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien- MaGD ACSP/ HL854514', 'FT24327346363505', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4872270', 'MBBank', '0966579217', '2024-11-22 14:50:50', 0.00, 20000.00, 0.00, 'MBVCB.7686469610.274309.HO VAN TRONG chuyen tien.CT tu 0501000105037 HO VAN TRONG toi 0966579217 TRAN LEHOANG GIANG tai MB- Ma GD ACSP/ zs2', 'FT24327405666887', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4872643', 'MBBank', '0966579217', '2024-11-22 15:02:12', 20000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien- MaGD ACSP/ 6X412272', 'FT24327442460364', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4890341', 'MBBank', '0966579217', '2024-11-23 08:19:21', 0.00, 40000.00, 0.00, 'TRAN LE HUY HOANG chuyen tien', 'FT24328239208909', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4890566', 'MBBank', '0966579217', '2024-11-23 08:37:40', 1990000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien - Ma giao dich/ Trace 163334', 'FT24328175240474', NULL, NULL, '4230', '2024-11-23 02:50:04', '2024-11-23 02:50:04'),
('4891313', 'MBBank', '0966579217', '2024-11-23 09:50:52', 0.00, 2000.00, 0.00, 'NF 2509ROBLOX', 'FT24328650993234', NULL, NULL, '4230', '2024-11-23 02:51:00', '2024-11-23 02:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `theme` varchar(255) DEFAULT 'default',
  `theme_color` varchar(255) DEFAULT NULL,
  `balance` decimal(30,2) NOT NULL DEFAULT 0.00,
  `ip_address` varchar(255) DEFAULT NULL,
  `other_contact_info` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `total_consumption` decimal(10,2) DEFAULT NULL,
  `total_deposit` decimal(10,2) DEFAULT NULL,
  `two_factor_auth_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `theme`, `theme_color`, `balance`, `ip_address`, `other_contact_info`, `device`, `total_consumption`, `total_deposit`, `two_factor_auth_status`, `avatar`) VALUES
(1, '2509roblox', '2509roblox@gmail.com', '2509roblox', NULL, '$2y$12$jv0VFanX3CzJqEPmYZgt7ecgU1PyDiC8/NSKqXXVPyeZDu8vVtemi', 'RcWMHaDqN3ArHnR2v9dZGM93b92XNsYbXmxPoPso1VFiCBenGARldl0YLFsr', '2024-11-16 20:18:19', '2024-11-23 02:51:02', 'default', NULL, 2000.00, '171.243.49.123171.243.49.123', 'Thông Tin Liên Hệ Khác (Nếu Có)', '123Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 100000.00, 100000.00, 0, NULL),
(4, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$pqelBvHvBmcrFTMwtfPpFetOaczL7hbhM2iLR4IdoOXDwsSduQqLC', '4OBcTd5nAUfJTQ4vxjfh4ChaQ4TmKOGD0NfQjaQ0mtRJfR2IaIpKm4d5lmYr', '2024-11-19 13:52:31', '2024-11-21 09:39:04', 'default', NULL, 4800.00, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(5, 'Tran Le Huy Hoang (FPL HCM)', 'hoangtlhps26819@fpt.edu.vn', NULL, NULL, '$2y$12$DB1b1DSlzKgdA/kE8xn9ROrSRJA4fBtKXfYh0YMb.fPdKmLE7yYcy', NULL, '2024-11-21 10:50:00', '2024-11-21 10:50:00', 'default', NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(6, '123', '2@2', '123', NULL, '$2y$12$6MfzzoMPyoUSQhMZOAp3V.8I/N00zunuSnP8hr4cWGn3nJueXqh8S', NULL, '2024-11-21 11:14:20', '2024-11-21 11:14:20', 'default', NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(7, 'Hoàng Lâm Đoàn', 'hoanglamdoan79m0c@uehs.us', NULL, NULL, '$2y$12$FBtfvERuOP3pAo7A8IK5aOxk9LOfOGhyUYkuCZryFE7NlXpWMfcJC', NULL, '2024-11-21 13:32:41', '2024-11-21 13:32:41', 'default', NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(8, 'BB Gamer. HG', '2508roblox@gmail.com', NULL, NULL, '$2y$12$PGb7wtnWIesLWtkZYa2HR.gMvSCa/yyXnR4FtIIuKGBrJ5PZzynjy', NULL, '2024-11-23 12:45:54', '2024-11-23 12:45:54', 'default', NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `smm_categories`
--
ALTER TABLE `smm_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smm_orders`
--
ALTER TABLE `smm_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `smm_orders_user_id_foreign` (`user_id`),
  ADD KEY `smm_orders_smm_service_id_foreign` (`smm_service_id`);

--
-- Indexes for table `smm_services`
--
ALTER TABLE `smm_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `smm_services_smmcategory_id_foreign` (`smmcategory_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smm_categories`
--
ALTER TABLE `smm_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smm_orders`
--
ALTER TABLE `smm_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `smm_services`
--
ALTER TABLE `smm_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD CONSTRAINT `payment_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `smm_orders`
--
ALTER TABLE `smm_orders`
  ADD CONSTRAINT `smm_orders_smm_service_id_foreign` FOREIGN KEY (`smm_service_id`) REFERENCES `smm_services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `smm_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `smm_services`
--
ALTER TABLE `smm_services`
  ADD CONSTRAINT `smm_services_smmcategory_id_foreign` FOREIGN KEY (`smmcategory_id`) REFERENCES `smm_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
