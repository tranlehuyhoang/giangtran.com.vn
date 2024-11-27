-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 04:48 PM
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
-- Table structure for table `activity_history`
--

CREATE TABLE `activity_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_history`
--

INSERT INTO `activity_history` (`id`, `user_id`, `content`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Đăng nhập bằng Google', '127.0.0.1', '2024-11-24 03:29:57', '2024-11-24 03:29:57'),
(2, 1, 'Đăng nhập bằng tài khoản', '127.0.0.1', '2024-11-26 10:19:24', '2024-11-26 10:19:24'),
(3, 12, 'Đăng nhập bằng tài khoản', '127.0.0.1', '2024-11-27 15:39:17', '2024-11-27 15:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:3;', 1732708890),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1732708890;', 1732708890),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1732722058),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1732722058;', 1732722058),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:80:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"view_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:13:\"view_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:11:\"create_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"update_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:11:\"delete_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:15:\"delete_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:21:\"view_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:25:\"view_any_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:23:\"create_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:23:\"update_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:24:\"restore_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:28:\"restore_any_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:26:\"replicate_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:24:\"reorder_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:23:\"delete_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:27:\"delete_any_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:29:\"force_delete_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:33:\"force_delete_any_payment::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:18:\"view_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:22:\"view_any_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:20:\"create_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:20:\"update_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:21:\"restore_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:25:\"restore_any_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:23:\"replicate_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:21:\"reorder_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:20:\"delete_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:24:\"delete_any_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:26:\"force_delete_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:30:\"force_delete_any_smm::category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:15:\"view_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:19:\"view_any_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:17:\"create_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:17:\"update_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:18:\"restore_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:22:\"restore_any_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:20:\"replicate_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:18:\"reorder_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:17:\"delete_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:21:\"delete_any_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:23:\"force_delete_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:27:\"force_delete_any_smm::order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:17:\"view_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:21:\"view_any_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:19:\"create_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:19:\"update_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:20:\"restore_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:24:\"restore_any_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:22:\"replicate_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:20:\"reorder_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:19:\"delete_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:23:\"delete_any_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:25:\"force_delete_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:29:\"force_delete_any_smm::service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:16:\"view_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:20:\"view_any_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:18:\"create_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:18:\"update_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:19:\"restore_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:23:\"restore_any_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:21:\"replicate_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:19:\"reorder_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:18:\"delete_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:22:\"delete_any_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:24:\"force_delete_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:28:\"force_delete_any_transaction\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:9:\"view_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:13:\"view_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:11:\"update_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:12:\"restore_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:16:\"restore_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:14:\"replicate_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:12:\"reorder_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:11:\"delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:15:\"delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:17:\"force_delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:21:\"force_delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:11:\"page_Themes\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:23:\"widget_SmmOrderOverview\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"panel_user\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"super_admin\";s:1:\"c\";s:3:\"web\";}}}', 1732808825),
('theme', 's:6:\"sunset\";', 2048079248),
('theme_color', 's:4:\"lime\";', 2048079251);

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_code` varchar(255) NOT NULL,
  `invoice_type` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `invoice_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` decimal(15,2) NOT NULL,
  `payment_due_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL
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
(8, '2024_11_19_212615_create_smm_categories_table', 6),
(9, '2024_11_19_214137_create_smm_services_table', 7),
(10, '2024_11_21_140737_create_smm_orders_table', 8),
(11, '2024_11_21_213650_add_fields_to_users_table', 9),
(12, '2024_11_24_102438_create_activity_history_table', 10),
(13, '2024_11_24_112534_create_invoices_table', 11),
(14, '2024_11_19_210118_create_permission_tables', 12);

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

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 4);

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
(116, 1, '4891313', 2000.00, 'thành công', 'MBBank', '2024-11-23 02:51:02', '2024-11-23 02:51:02'),
(117, 1, '4895678', 2000.00, 'thành công', 'MBBank', '2024-11-24 15:08:36', '2024-11-24 15:08:36'),
(118, 1, '4896194', 2000.00, 'thành công', 'MBBank', '2024-11-25 14:45:12', '2024-11-25 14:45:12'),
(119, 11, '4990567', 2000.00, 'thành công', 'MBBank', '2024-11-27 13:28:50', '2024-11-27 13:28:50');

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
(1, 'view_role', 'web', '2024-11-27 15:25:10', '2024-11-27 15:25:10'),
(2, 'view_any_role', 'web', '2024-11-27 15:25:10', '2024-11-27 15:25:10'),
(3, 'create_role', 'web', '2024-11-27 15:25:10', '2024-11-27 15:25:10'),
(4, 'update_role', 'web', '2024-11-27 15:25:10', '2024-11-27 15:25:10'),
(5, 'delete_role', 'web', '2024-11-27 15:25:10', '2024-11-27 15:25:10'),
(6, 'delete_any_role', 'web', '2024-11-27 15:25:10', '2024-11-27 15:25:10'),
(7, 'view_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(8, 'view_any_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(9, 'create_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(10, 'update_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(11, 'restore_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(12, 'restore_any_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(13, 'replicate_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(14, 'reorder_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(15, 'delete_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(16, 'delete_any_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(17, 'force_delete_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(18, 'force_delete_any_payment::history', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(19, 'view_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(20, 'view_any_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(21, 'create_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(22, 'update_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(23, 'restore_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(24, 'restore_any_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(25, 'replicate_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(26, 'reorder_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(27, 'delete_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(28, 'delete_any_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(29, 'force_delete_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(30, 'force_delete_any_smm::category', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(31, 'view_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(32, 'view_any_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(33, 'create_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(34, 'update_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(35, 'restore_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(36, 'restore_any_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(37, 'replicate_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(38, 'reorder_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(39, 'delete_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(40, 'delete_any_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(41, 'force_delete_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(42, 'force_delete_any_smm::order', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(43, 'view_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(44, 'view_any_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(45, 'create_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(46, 'update_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(47, 'restore_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(48, 'restore_any_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(49, 'replicate_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(50, 'reorder_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(51, 'delete_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(52, 'delete_any_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(53, 'force_delete_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(54, 'force_delete_any_smm::service', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(55, 'view_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(56, 'view_any_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(57, 'create_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(58, 'update_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(59, 'restore_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(60, 'restore_any_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(61, 'replicate_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(62, 'reorder_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(63, 'delete_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(64, 'delete_any_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(65, 'force_delete_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(66, 'force_delete_any_transaction', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(67, 'view_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(68, 'view_any_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(69, 'create_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(70, 'update_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(71, 'restore_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(72, 'restore_any_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(73, 'replicate_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(74, 'reorder_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(75, 'delete_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(76, 'delete_any_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(77, 'force_delete_user', 'web', '2024-11-27 15:35:37', '2024-11-27 15:35:37'),
(78, 'force_delete_any_user', 'web', '2024-11-27 15:35:38', '2024-11-27 15:35:38'),
(79, 'page_Themes', 'web', '2024-11-27 15:35:38', '2024-11-27 15:35:38'),
(80, 'widget_SmmOrderOverview', 'web', '2024-11-27 15:35:38', '2024-11-27 15:35:38');

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
(1, 'panel_user', 'web', '2024-11-27 15:24:28', '2024-11-27 15:24:28'),
(2, 'super_admin', 'web', '2024-11-27 15:25:10', '2024-11-27 15:25:10');

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
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2);

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
('9HeseKkZC8SIKuGyVXPwaUBmWNJg5yOWczNnosij', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicnRBcTR4MUFtQjJydVVHV0EwUjZicmVYWFgxQ1dVaDRjZVhhVVNnMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjExO30=', 1732722479),
('nzfn8owjlvuUIbIZhkG5uAT7kf5psHGYObQfJzWq', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMFRGdkx0Y2RxdHp6OTBzbHVyeFFFc0lvZUkxOVVCa0tQTlBQQVlOdCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vdXNlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkbnB2enR2M3RhcmxPVGFPVGlEVG5WZXZ5bFo4WFBOLnB0M3htRWlBb1RHQ0FTanRpb0F5WXUiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1732722448);

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
(1, 'Tiktok Follow ', '01JD2DGAVJRKZZM70P3FA9ZFME.gif', '123', '2024-11-19 14:33:57', '2024-11-27 11:34:43'),
(2, 'Tiktok View ', '01JDPPDF6ZT97C0PQ1GDPKRZDE.gif', '1', '2024-11-19 14:36:01', '2024-11-27 11:34:29'),
(3, 'Tiktok share', '01JDPPFQGNC4CXA0RCSJE91QBP.gif', '123', '2024-11-27 11:35:43', '2024-11-27 11:35:43'),
(4, 'Tiktok Like', '01JDPPGES6AG1SCWHZ9KQQZFJ8.gif', '2234', '2024-11-27 11:36:07', '2024-11-27 11:36:07'),
(5, 'Facebook Follow', '01JDPPMS15JFJS5CYPGTSQ5W72.gif', '123', '2024-11-27 11:38:29', '2024-11-27 11:38:29'),
(6, 'Facebook Like', '01JDPPP8T2NSSD4PQD0JHVENJC.gif', '123123', '2024-11-27 11:39:18', '2024-11-27 11:39:18'),
(7, 'Instagram Follow', '01JDPQXEPSMKCDDD9YBNC3QF5R.gif', '123', '2024-11-27 12:00:42', '2024-11-27 12:00:42'),
(8, 'Instagram Like', '01JDPQXX1R4PR4Z6NA87NFE21R.gif', '123', '2024-11-27 12:00:56', '2024-11-27 12:00:56'),
(9, 'Instagram View Story', '01JDPQYBW5ENFY4C1F4NR3SAXD.gif', '123', '2024-11-27 12:01:12', '2024-11-27 12:01:12');

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
  `payment_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smm_orders`
--

INSERT INTO `smm_orders` (`id`, `user_id`, `smm_service_id`, `quantity`, `total_price`, `status`, `unit_price`, `start_count`, `link`, `remains`, `payment_method`, `payment_status`, `created_at`, `updated_at`, `order_code`) VALUES
(51, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, 'bank_transfer', 'pending', '2024-11-26 11:50:51', '2024-11-26 11:50:51', '577698'),
(52, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, 'bank_transfer', 'pending', '2024-11-27 10:19:40', '2024-11-27 10:19:40', '700760'),
(53, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, 'bank_transfer', 'pending', '2024-11-27 10:30:04', '2024-11-27 10:30:04', '449229'),
(54, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, 'bank_transfer', 'pending', '2024-11-27 10:33:06', '2024-11-27 10:33:06', '808175'),
(55, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, 'bank_transfer', 'pending', '2024-11-27 10:34:03', '2024-11-27 10:34:03', '801030'),
(56, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, 'bank_transfer', 'pending', '2024-11-27 10:36:40', '2024-11-27 10:36:40', '788539'),
(57, 1, 1, 1000, 10000000.00, 'pending', 10000.00, 0, 'https://giangtran.com.vn/', 1000, 'bank_transfer', 'pending', '2024-11-27 11:28:05', '2024-11-27 11:28:05', '426599'),
(58, 4, 1, 1000, 4000.00, 'pending', 4.00, 0, 'https://giangtran.com.vn/', 1000, 'account_balance', 'paid', '2024-11-27 14:59:08', '2024-11-27 14:59:08', '211424'),
(59, 1, 2, 1000, 50000.00, 'pending', 50.00, 0, 'https://giangtran.com.vn/', 1000, 'bank_transfer', 'pending', '2024-11-27 15:13:43', '2024-11-27 15:13:43', '678489');

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
  `time` varchar(255) DEFAULT NULL,
  `min` int(255) DEFAULT NULL,
  `max` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smm_services`
--

INSERT INTO `smm_services` (`id`, `smmcategory_id`, `name`, `price`, `code`, `is_active`, `time`, `min`, `max`, `created_at`, `updated_at`) VALUES
(1, 2, 'TikTok Views [Refill: 30 Days] [Max: 10M] [Start Time: 0-1 Hour] [Speed: 1M/Day] 🔥 ♻️', 4.00, '763', 1, NULL, 1000, 1000000, '2024-11-19 14:58:37', '2024-11-27 11:47:03'),
(2, 1, 'TikTok HQ Followers [Refill: 30D] [Max: 1M] [Start Time: 0 - 3 Hrs] [Speed: 50K/D] 💧⛔️♻️', 50.00, '123', 1, NULL, 1, 1000000, '2024-11-27 11:32:45', '2024-11-27 11:32:45'),
(3, 3, 'TikTok Shares [Max: 100K] [Start Time: 0 - 1 Hours] [Speed: 100K/Day] 💧', 5.00, '123', 1, NULL, 1000, 100000, '2024-11-27 11:49:37', '2024-11-27 11:49:37'),
(4, 4, 'TikTok Likes | Worldwide 🌎| Max 10M | 𝗛𝗤+𝗥𝗘𝗔𝗟 | Cancel | No Refill | Day 150K | 𝗨𝗹𝘁𝗿𝗮𝗙𝗮𝘀𝘁', 5.00, '123', 1, NULL, 1000, 10000000, '2024-11-27 11:51:01', '2024-11-27 11:51:35'),
(5, 5, 'Facebook Followers [Profile & Page] [Refill: 60D] [Max: 10K] [Start Time: 0-3 Hrs] [Speed: 5K/D]', 35.00, '123123', 1, NULL, 100, 10000, '2024-11-27 11:55:24', '2024-11-27 11:55:24'),
(6, 6, 'Facebook Post Likes [Refill: No] [Max: 30K] [Start Time: 0-1 Hr] [Speed: 15K/D]', 20.00, '123', 1, NULL, 100, 30000, '2024-11-27 11:58:22', '2024-11-27 11:58:22');

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
('4769002', 'MBBank', '0966579217', '2024-11-18 10:40:14', 0.00, 5556.00, 0.00, '788539', 'FT24323444070054', NULL, NULL, '4230', '2024-11-17 20:45:19', '2024-11-17 20:45:19'),
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
('4891313', 'MBBank', '0966579217', '2024-11-23 09:50:52', 0.00, 2000.00, 0.00, 'NF 2509ROBLOX', 'FT24328650993234', NULL, NULL, '4230', '2024-11-23 02:51:00', '2024-11-23 02:51:00'),
('4891917', 'MBBank', '0966579217', '2024-11-23 10:37:43', 3123.00, 0.00, 0.00, 'MVPAS637th38h - Ma giao dich/ Trace606340', 'FT24328909426994', NULL, NULL, '4230', '2024-11-24 15:08:33', '2024-11-24 15:08:33'),
('4895678', 'MBBank', '0966579217', '2024-11-23 14:25:27', 0.00, 2000.00, 0.00, 'NF 2509ROBLOX', 'FT24328208560736', NULL, NULL, '4230', '2024-11-24 15:08:33', '2024-11-24 15:08:33'),
('4896194', 'MBBank', '0966579217', '2024-11-23 15:07:06', 0.00, 2000.00, 0.00, 'NF 2509ROBLOX', 'FT24328560885710', NULL, NULL, '4230', '2024-11-24 15:08:33', '2024-11-24 15:08:33'),
('4911366', 'MBBank', '0966579217', '2024-11-24 08:55:55', 0.00, 300000.00, 0.00, 'QR   thanh toan- Ma GD ACSP/ 2C350876', 'FT24330003704498', NULL, NULL, '4230', '2024-11-24 15:08:33', '2024-11-24 15:08:33'),
('4914546', 'MBBank', '0966579217', '2024-11-24 11:04:47', 0.00, 600000.00, 0.00, 'Parallax Scrolling FT24330550389246Ma giao dich  Trace858020 Trace858020', 'FT24330766674086', NULL, NULL, '4230', '2024-11-24 15:08:33', '2024-11-24 15:08:33'),
('4914665', 'MBBank', '0966579217', '2024-11-24 11:10:15', 10000.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCIaroeLCZf-72217675517', 'FT24330017450206', NULL, NULL, '4230', '2024-11-24 15:08:33', '2024-11-24 15:08:33'),
('4937236', 'MBBank', '0966579217', '2024-11-25 10:50:26', 96000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien- MaGD ACSP/ IP708190', 'FT24330810746961', NULL, NULL, '4230', '2024-11-25 14:45:13', '2024-11-25 14:45:13'),
('4938988', 'MBBank', '0966579217', '2024-11-25 12:15:12', 0.00, 300000.00, 0.00, '72302101459-NGUYEN THI NGOC TRAN chuyen tien qua MoMo-CHUYEN TIEN-OQCH32579863-MOMO72302101459MOMO', 'FT24330740051461', NULL, NULL, '4230', '2024-11-25 14:45:13', '2024-11-25 14:45:13'),
('4939027', 'MBBank', '0966579217', '2024-11-25 12:17:50', 0.00, 30000.00, 0.00, 'NGUYEN HUU TAI chuyen tien', 'FT24330014595320', NULL, NULL, '4230', '2024-11-25 14:45:13', '2024-11-25 14:45:13'),
('4939061', 'MBBank', '0966579217', '2024-11-25 12:19:30', 0.00, 30000.00, 0.00, 'MBVCB.7712609686.296298.NGO THANH BINH chuyen tien.CT tu 1027045414 NGO THANH BINH toi 0966579217 TRAN LEHOANG GIANG tai MB- Ma GD ACSP/ ml', 'FT24330319737066', NULL, NULL, '4230', '2024-11-25 14:45:13', '2024-11-25 14:45:13'),
('4939087', 'MBBank', '0966579217', '2024-11-25 12:21:40', 0.00, 30000.00, 0.00, 'DATN - DOCS', 'FT24330207996764', NULL, NULL, '4230', '2024-11-25 14:45:13', '2024-11-25 14:45:13'),
('4940503', 'MBBank', '0966579217', '2024-11-25 13:57:39', 0.00, 50000.00, 0.00, 'TRAN QUANG NGHIA chuyen tien', 'FT24330556938007', NULL, NULL, '4230', '2024-11-25 14:45:13', '2024-11-25 14:45:13'),
('4944840', 'MBBank', '0966579217', '2024-11-25 18:13:57', 0.00, 100000.00, 0.00, 'TRAN QUANG NGHIA chuyen tien', 'FT24330206584073', NULL, NULL, '4230', '2024-11-25 14:45:13', '2024-11-25 14:45:13'),
('4956079', 'MBBank', '0966579217', '2024-11-26 08:00:14', 0.00, 400000.00, 0.00, 'TRAN QUANG NGHIA chuyen tien FT24331959502463   Ma giao dich  Trace654167 Trace 654167', 'FT24331945856850', NULL, NULL, '4230', '2024-11-26 02:11:25', '2024-11-26 02:11:25'),
('4957058', 'MBBank', '0966579217', '2024-11-26 08:46:53', 0.00, 100000.00, 0.00, 'TRAN QUANG NGHIA chuyen tien FT24331052501436   Ma giao dich  Trace826670 Trace 826670', 'FT24331908069090', NULL, NULL, '4230', '2024-11-26 02:11:25', '2024-11-26 02:11:25'),
('4959807', 'MBBank', '0966579217', '2024-11-26 10:18:08', 166000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien- MaGD ACSP/ PN961585', 'FT24331906610907', NULL, NULL, '4230', '2024-11-26 12:15:44', '2024-11-26 12:15:44'),
('4963089', 'MBBank', '0966579217', '2024-11-26 12:20:56', 999000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien - Ma giao dich/ Trace 314326', 'FT24331290000770', NULL, NULL, '4230', '2024-11-26 12:15:44', '2024-11-26 12:15:44'),
('4977424', 'MBBank', '0966579217', '2024-11-27 08:44:39', 0.00, 200000.00, 0.00, 'MB 0966579217 NGUYEN VAN XO chuyentien- Ma GD ACSP/ S6017738', 'FT24332433743798', NULL, NULL, '4230', '2024-11-27 10:19:42', '2024-11-27 10:19:42'),
('4986533', 'MBBank', '0966579217', '2024-11-27 16:07:15', 0.00, 350000.00, 0.00, 'TRAN QUANG NGHIA chuyen tien FT24332065338042   Ma giao dich  Trace024449 Trace 024449', 'FT24332505661607', NULL, NULL, '4230', '2024-11-27 10:19:42', '2024-11-27 10:19:42'),
('4989649', 'MBBank', '0966579217', '2024-11-27 19:12:14', 13365.00, 0.00, 0.00, 'MOMO-CASHIN-0966579217-OQCIzfTveaem-72485813433', 'FT24332092067001', NULL, NULL, '4230', '2024-11-27 13:26:03', '2024-11-27 13:26:03'),
('4989650', 'MBBank', '0966579217', '2024-11-27 19:12:21', 0.00, 10000.00, 0.00, 'NF HOaNG TRaN   Ma giao dich  Trace633731 Trace 633731', 'FT24332776958660', NULL, NULL, '4230', '2024-11-27 13:26:03', '2024-11-27 13:26:03'),
('4990567', 'MBBank', '0966579217', '2024-11-27 20:28:35', 0.00, 2000.00, 0.00, 'NF M8UHSL2XQ2', 'FT24332309213300', NULL, NULL, '4230', '2024-11-27 13:28:50', '2024-11-27 13:28:50'),
('4990925', 'MBBank', '0966579217', '2024-11-27 21:00:04', 100000.00, 0.00, 0.00, 'TRAN LE HOANG GIANG chuyen tien', 'FT24332554507207', NULL, NULL, '4230', '2024-11-27 14:10:15', '2024-11-27 14:10:15'),
('4991056', 'MBBank', '0966579217', '2024-11-27 21:10:55', 0.00, 210000.00, 0.00, 'TRAN QUANG NGHIA chuyen tien', 'FT24332442844539', NULL, NULL, '4230', '2024-11-27 15:12:37', '2024-11-27 15:12:37');

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
  `avatar` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `theme`, `theme_color`, `balance`, `ip_address`, `other_contact_info`, `device`, `total_consumption`, `total_deposit`, `two_factor_auth_status`, `avatar`, `contact`) VALUES
(1, '2509roblox', '2509roblox@gmail.com', '2509roblox', NULL, '$2y$12$kY2ZpM2tVVx/4wTg1xaYW.pIydlUIDrvzDQ1tqvpvg1Q7VjQl8CSC', 'sXHqu6C6Vx3ic0K9Vxi4eo5ST9bjQiNK2FPqrf2Ep1YeT51z6rZ5EdGWfxBp', '2024-11-16 20:18:19', '2024-11-27 15:37:19', 'default', NULL, 6000.00, '171.243.49.123171.243.49.123', 'Thông Tin Liên Hệ Khác (Nếu Có)', '123Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 100000.00, 100000.00, 0, NULL, NULL),
(4, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$npvztv3tarlOTaOTiDTnVevylZ8XPN.pt3xmEiAoTGCASjtioAyYu', 'd1015BGMV7CL8WzWocn91zxLjpKOPAZdoZhmEcrGX51rTDtuJHLkQTH3dUB9', '2024-11-19 13:52:31', '2024-11-27 15:26:11', 'default', NULL, 800.00, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(11, 'BB Gamer. HG', '2508roblox@gmail.com', '2508roblox@gmail.com', NULL, '$2y$12$npvztv3tarlOTaOTiDTnVevylZ8XPN.pt3xmEiAoTGCASjtioAyYu', NULL, '2024-11-27 13:25:42', '2024-11-27 14:19:04', 'default', NULL, 2000.00, NULL, NULL, NULL, NULL, NULL, 0, NULL, ''),
(12, '2509roblxox@gmail.com', '2509roblxox@gmail.com', '2509roblxox@gmail.com', NULL, '$2y$12$npvztv3tarlOTaOTiDTnVevylZ8XPN.pt3xmEiAoTGCASjtioAyYu', NULL, '2024-11-27 15:37:59', '2024-11-27 15:37:59', 'default', NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_history`
--
ALTER TABLE `activity_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_history_user_id_foreign` (`user_id`);

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
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_invoice_code_unique` (`invoice_code`);

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
-- AUTO_INCREMENT for table `activity_history`
--
ALTER TABLE `activity_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smm_categories`
--
ALTER TABLE `smm_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `smm_orders`
--
ALTER TABLE `smm_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `smm_services`
--
ALTER TABLE `smm_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_history`
--
ALTER TABLE `activity_history`
  ADD CONSTRAINT `activity_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
