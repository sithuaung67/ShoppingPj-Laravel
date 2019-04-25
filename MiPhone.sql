-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2019 at 08:04 AM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MiPhone`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `cat_name`) VALUES
(1, '2019-02-27 09:07:08', '2019-02-27 09:13:00', 'MI Phones'),
(3, '2019-02-27 09:13:25', '2019-03-04 09:28:10', 'Red Miphone'),
(4, '2019-02-27 09:13:46', '2019-02-27 09:13:46', 'MI TV'),
(5, '2019-02-27 09:14:11', '2019-02-27 09:14:11', 'Smart Devices'),
(6, '2019-02-27 09:14:25', '2019-02-27 09:14:25', 'Audio'),
(7, '2019-02-27 09:14:43', '2019-02-27 09:14:43', 'MI Power Bank'),
(8, '2019-02-27 09:16:36', '2019-02-27 09:16:36', 'All Products');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_26_100207_create_categories_table', 1),
(4, '2019_01_27_085317_create_products_table', 1),
(5, '2019_02_23_071217_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `name`, `email`, `address`, `phone`, `cart`) VALUES
(1, '2019-02-27 10:58:53', '2019-02-27 10:58:53', 'sithu phyo', 'siithuphyo145@gami.com', 'Thaton', '09782312342', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:3:{s:4:\"item\";O:11:\"App\\Product\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-02-27 16:03:12\";s:10:\"updated_at\";s:19:\"2019-02-27 16:04:23\";s:12:\"product_name\";s:4:\"MI 9\";s:5:\"price\";d:31790;s:11:\"category_id\";i:1;s:5:\"image\";s:8:\"MI 9.png\";s:7:\"user_id\";i:1;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-02-27 16:03:12\";s:10:\"updated_at\";s:19:\"2019-02-27 16:04:23\";s:12:\"product_name\";s:4:\"MI 9\";s:5:\"price\";d:31790;s:11:\"category_id\";i:1;s:5:\"image\";s:8:\"MI 9.png\";s:7:\"user_id\";i:1;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:3:\"qty\";i:1;s:6:\"amount\";d:31790;}}s:10:\"totallyQty\";i:1;s:13:\"totallyAmount\";d:31790;}'),
(2, '2019-02-27 20:02:24', '2019-02-27 20:02:24', 'Si Thu Aung', 'sithuphyo@gmail.com', 'Thaton', '09792836473', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:3:{s:4:\"item\";O:11:\"App\\Product\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-02-27 16:03:12\";s:10:\"updated_at\";s:19:\"2019-02-27 16:04:23\";s:12:\"product_name\";s:4:\"MI 9\";s:5:\"price\";d:31790;s:11:\"category_id\";i:1;s:5:\"image\";s:8:\"MI 9.png\";s:7:\"user_id\";i:1;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-02-27 16:03:12\";s:10:\"updated_at\";s:19:\"2019-02-27 16:04:23\";s:12:\"product_name\";s:4:\"MI 9\";s:5:\"price\";d:31790;s:11:\"category_id\";i:1;s:5:\"image\";s:8:\"MI 9.png\";s:7:\"user_id\";i:1;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:3:\"qty\";i:2;s:6:\"amount\";d:63580;}}s:10:\"totallyQty\";i:2;s:13:\"totallyAmount\";d:63580;}'),
(3, '2019-03-04 09:21:35', '2019-03-04 09:21:35', 'ghyhh', 'hgfjjgfgg@jhkhg', 'hgjgjj', '098765544', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:3:{s:4:\"item\";O:11:\"App\\Product\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:2;s:10:\"created_at\";s:19:\"2019-02-28 02:35:31\";s:10:\"updated_at\";s:19:\"2019-03-02 14:47:56\";s:12:\"product_name\";s:4:\"Mi 8\";s:5:\"price\";d:410;s:11:\"category_id\";i:1;s:5:\"image\";s:8:\"Mi 8.jpg\";s:7:\"user_id\";i:1;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:2;s:10:\"created_at\";s:19:\"2019-02-28 02:35:31\";s:10:\"updated_at\";s:19:\"2019-03-02 14:47:56\";s:12:\"product_name\";s:4:\"Mi 8\";s:5:\"price\";d:410;s:11:\"category_id\";i:1;s:5:\"image\";s:8:\"Mi 8.jpg\";s:7:\"user_id\";i:1;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:3:\"qty\";i:1;s:6:\"amount\";d:410;}}s:10:\"totallyQty\";i:1;s:13:\"totallyAmount\";d:410;}'),
(4, '2019-03-04 09:26:15', '2019-03-04 09:26:15', 'loihh', 'sithu@gmail.com', 'thaton', '098787', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:20;a:3:{s:4:\"item\";O:11:\"App\\Product\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:20;s:10:\"created_at\";s:19:\"2019-03-02 15:00:35\";s:10:\"updated_at\";s:19:\"2019-03-02 15:00:35\";s:12:\"product_name\";s:10:\"Poco Phone\";s:5:\"price\";d:450;s:11:\"category_id\";i:1;s:5:\"image\";s:14:\"Poco Phone.jpg\";s:7:\"user_id\";i:1;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:20;s:10:\"created_at\";s:19:\"2019-03-02 15:00:35\";s:10:\"updated_at\";s:19:\"2019-03-02 15:00:35\";s:12:\"product_name\";s:10:\"Poco Phone\";s:5:\"price\";d:450;s:11:\"category_id\";i:1;s:5:\"image\";s:14:\"Poco Phone.jpg\";s:7:\"user_id\";i:1;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:3:\"qty\";i:3;s:6:\"amount\";d:1350;}}s:10:\"totallyQty\";i:3;s:13:\"totallyAmount\";d:1350;}'),
(5, '2019-03-06 21:07:27', '2019-03-06 21:07:27', 'mm', 'fffhhh@gmail.com', 'gggggg', '0999', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:28;a:3:{s:4:\"item\";O:11:\"App\\Product\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:28;s:10:\"created_at\";s:19:\"2019-03-02 15:04:06\";s:10:\"updated_at\";s:19:\"2019-03-02 15:04:06\";s:12:\"product_name\";s:13:\"Mi Mix 3 Crew\";s:5:\"price\";d:150;s:11:\"category_id\";i:4;s:5:\"image\";s:17:\"Mi Mix 3 Crew.jpg\";s:7:\"user_id\";i:1;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:28;s:10:\"created_at\";s:19:\"2019-03-02 15:04:06\";s:10:\"updated_at\";s:19:\"2019-03-02 15:04:06\";s:12:\"product_name\";s:13:\"Mi Mix 3 Crew\";s:5:\"price\";d:150;s:11:\"category_id\";i:4;s:5:\"image\";s:17:\"Mi Mix 3 Crew.jpg\";s:7:\"user_id\";i:1;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:3:\"qty\";i:1;s:6:\"amount\";d:150;}i:27;a:3:{s:4:\"item\";O:11:\"App\\Product\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:27;s:10:\"created_at\";s:19:\"2019-03-02 15:03:34\";s:10:\"updated_at\";s:19:\"2019-03-02 15:03:34\";s:12:\"product_name\";s:9:\"Mi 3 S TV\";s:5:\"price\";d:120;s:11:\"category_id\";i:4;s:5:\"image\";s:13:\"Mi 3 S TV.jpg\";s:7:\"user_id\";i:1;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:27;s:10:\"created_at\";s:19:\"2019-03-02 15:03:34\";s:10:\"updated_at\";s:19:\"2019-03-02 15:03:34\";s:12:\"product_name\";s:9:\"Mi 3 S TV\";s:5:\"price\";d:120;s:11:\"category_id\";i:4;s:5:\"image\";s:13:\"Mi 3 S TV.jpg\";s:7:\"user_id\";i:1;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:3:\"qty\";i:1;s:6:\"amount\";d:120;}}s:10:\"totallyQty\";i:2;s:13:\"totallyAmount\";d:270;}');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `product_name`, `price`, `category_id`, `image`, `user_id`) VALUES
(1, '2019-02-27 09:33:12', '2019-03-02 08:17:47', 'MI 9', 3179.00, 1, 'MI 9.png', 1),
(2, '2019-02-27 20:05:31', '2019-03-02 08:17:56', 'Mi 8', 410.00, 1, 'Mi 8.jpg', 1),
(3, '2019-03-02 08:17:41', '2019-03-02 08:18:53', 'Mi 8 Pro', 500.00, 1, 'Mi 8 Pro.jpg', 1),
(4, '2019-03-02 08:19:56', '2019-03-02 08:19:56', 'Mi Mix 3', 300.00, 1, 'Mi Mix 3.jpg', 1),
(5, '2019-03-02 08:20:27', '2019-03-02 08:20:27', 'Mi Power Bank', 50.00, 7, 'Mi Power Bank.jpg', 1),
(6, '2019-03-02 08:21:50', '2019-03-02 08:21:50', 'Mi Note Book', 500.00, 8, 'Mi Note Book.jpg', 1),
(7, '2019-03-02 08:23:39', '2019-03-02 08:23:39', 'Mi Bluetooth 4.1 Speaker', 40.00, 6, 'Mi Bluetooth 4.1 Speaker.jpg', 1),
(8, '2019-03-02 08:24:13', '2019-03-02 08:24:13', 'Red Mi', 450.00, 3, 'Red Mi.jpg', 1),
(9, '2019-03-02 08:24:51', '2019-03-02 08:24:51', 'Mi Power Bank 1000MAH', 60.00, 7, 'Mi Power Bank 1000MAH.png', 1),
(10, '2019-03-02 08:25:21', '2019-03-02 08:25:21', 'Mi Power Bank 500MAH', 40.00, 7, 'Mi Power Bank 500MAH.png', 1),
(11, '2019-03-02 08:25:50', '2019-03-02 08:25:50', 'Red Mi Pro', 400.00, 3, 'Red Mi Pro.jpg', 1),
(12, '2019-03-02 08:26:20', '2019-03-02 08:26:20', 'Red Mi Note 6 Pro', 500.00, 3, 'Red Mi Note 6 Pro.jpg', 1),
(13, '2019-03-02 08:26:50', '2019-03-02 08:26:50', 'Red Mi Note 3 Pro', 600.00, 3, 'Red Mi Note 3 Pro.png', 1),
(14, '2019-03-02 08:27:25', '2019-03-02 08:27:25', 'Speaker', 70.00, 6, 'Speaker.png', 1),
(15, '2019-03-02 08:27:51', '2019-03-02 08:27:51', 'Mi 8', 500.00, 1, 'Mi 8.jpg', 1),
(16, '2019-03-02 08:28:24', '2019-03-02 08:28:24', 'Mi 9', 700.00, 1, 'Mi 9.', 1),
(17, '2019-03-02 08:28:48', '2019-03-02 08:28:48', 'Mi Mix 3', 500.00, 1, 'Mi Mix 3.jpg', 1),
(18, '2019-03-02 08:29:48', '2019-03-02 08:29:48', 'Poco Phone', 500.00, 1, 'Poco Phone.jpg', 1),
(19, '2019-03-02 08:30:09', '2019-03-02 08:30:09', 'POCO Phone', 540.00, 1, 'POCO Phone.jpg', 1),
(20, '2019-03-02 08:30:35', '2019-03-02 08:30:35', 'Poco Phone', 450.00, 1, 'Poco Phone.jpg', 1),
(21, '2019-03-02 08:31:02', '2019-03-02 08:31:02', 'Note Book', 500.00, 4, 'Note Book.jpg', 1),
(22, '2019-03-02 08:31:26', '2019-03-02 08:31:26', 'Earphone', 100.00, 6, 'Earphone.jpg', 1),
(23, '2019-03-02 08:31:49', '2019-03-02 08:31:49', 'Mi Box', 90.00, 6, 'Mi Box.jpg', 1),
(24, '2019-03-02 08:32:07', '2019-03-02 08:32:07', 'MI Box', 95.00, 6, 'MI Box.jpg', 1),
(25, '2019-03-02 08:32:27', '2019-03-02 08:32:27', 'MI Tv', 120.00, 4, 'MI Tv.jpg', 1),
(26, '2019-03-02 08:33:03', '2019-03-02 08:33:03', 'Mi Laser', 130.00, 5, 'Mi Laser.jpg', 1),
(27, '2019-03-02 08:33:34', '2019-03-02 08:33:34', 'Mi 3 S TV', 120.00, 4, 'Mi 3 S TV.jpg', 1),
(28, '2019-03-02 08:34:06', '2019-03-02 08:34:06', 'Mi Mix 3 Crew', 150.00, 4, 'Mi Mix 3 Crew.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'sithu237010@gmail.com', '2019-02-27 04:25:08', '$2y$10$eHCZ8JAMbfbpErTKhFJuU.Di88cYJObhZuPDeycPrtWnb5wcbnRsW', 'BbWX1ruHuWeqLb2VC4E4Pds2stLEc2qPJgtcwJHNKRlvWheBlkkeMdpaJILZ', '2019-02-27 04:22:17', '2019-02-27 04:25:08'),
(2, 'Sithu Aung', 'sithu23701@gmail.com', NULL, '$2y$10$2bbVAT0K3QweSixnnk7rGu/cRDbLUEEiK2XtDYxJJcLs/6MFeY2Ua', 'NMZBSs78epJqHRWVQyi3eOdgU6lfY51D6WAagrQuYFOIcYaDFskxuD6yKEgW', '2019-04-04 22:40:03', '2019-04-04 22:40:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
