-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 09:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 4, 6, '2021-04-12 05:07:29', '2021-04-12 05:07:29'),
(15, 1, 1, '2021-04-14 03:01:41', '2021-04-14 03:01:41'),
(16, 1, 1, '2021-04-14 03:33:58', '2021-04-14 03:33:58'),
(20, 2, 8, '2021-04-14 07:52:03', '2021-04-14 07:52:03'),
(21, 2, 1, '2021-04-14 12:50:08', '2021-04-14 12:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `checklists`
--

CREATE TABLE `checklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make_up` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bakery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decoration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catering` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jewellery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklists`
--

INSERT INTO `checklists` (`id`, `user_id`, `attire`, `make_up`, `venue`, `bakery`, `decoration`, `catering`, `jewellery`, `created_at`, `updated_at`) VALUES
(1, '8', 'done', 'done', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '6', 'done', 'done', NULL, NULL, NULL, 'done', NULL, NULL, NULL);

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
(1, '2021_04_11_083607_create_users_table', 1),
(2, '2021_04_11_095525_create_products_table', 2),
(3, '2021_04_11_095525_create_product1s_table', 3),
(4, '2021_04_11_161909_create_cart_table', 4),
(5, '2021_04_12_044741_create_orders_table', 5),
(6, '2021_04_12_053640_create_orders_table', 6),
(7, '2021_04_14_065034_create_vendors_table', 7),
(8, '2021_04_14_072358_create_products_table', 8),
(9, '2021_04_14_093332_create_vendors_table', 9),
(10, '2021_04_19_085228_create_rating_table', 10),
(11, '2021_04_19_140623_create_checklist_table', 11),
(12, '2021_04_19_153222_create_checklists_table', 12),
(13, '2021_04_19_153222_create_checklists1_table', 13),
(14, '2021_04_19_154915_create_checklists_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'pending', 'cash', 'pending', 'gab botswa', NULL, NULL),
(2, 1, 1, 'pending', 'cash', 'pending', 'gab botswa', NULL, NULL),
(3, 4, 1, 'pending', 'cash', 'pending', 'gab botswa', NULL, NULL),
(4, 1, 1, 'pending', 'cash', 'pending', 'gab botswa', NULL, NULL),
(5, 2, 6, 'pending', 'cash', 'pending', 'tt 23', NULL, NULL),
(6, 3, 6, 'pending', 'cash', 'pending', 'tt 23', NULL, NULL),
(7, 1, 8, 'pending', 'cash', 'pending', '23 gabs', NULL, NULL),
(8, 1, 8, 'pending', 'cash', 'pending', '23 gabs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `vendor_id`, `vendor_category`, `description`, `vendor`, `gallery`, `created_at`, `updated_at`) VALUES
(2, 'masa outdoor', '130', '1', 'venue', 'beautiful garden at masa limited in bloock 6', 'Masa limited', '/image/img_venue.jpg', '2021-04-14 07:42:44', '2021-04-17 04:23:45'),
(3, 'kelly bride set 2020', '1400', '2', 'jewellery', 'a set of 2020 kelly collection bride set of earrings and neck piece', 'Kelly jewellery', '/image/img_jewelery.jpg', '2021-04-14 07:50:27', '2021-04-17 04:04:24'),
(4, 'sally back off', '1500', '2', 'attire', 'back off', 'sally', '/image/img_evenning-gown.jpg', '2021-04-19 06:08:50', '2021-04-19 06:08:50'),
(5, 'set 10 appetizers', '100', '2', 'category', 'set of 10 flavors of 3type of appetizers of your choice', 'kay catering', '/image/img_appetizers.jpg', '2021-04-19 06:13:21', '2021-04-19 06:13:21'),
(6, 'Bride dress amazing', '540', '3', 'attire', 'white bride dress with amazing matching shoe', 'Marang Designers', '/image/img_attire.jpg', '2021-04-19 06:16:03', '2021-04-19 06:16:03'),
(7, 'Strawberry 3 tier cake', '250', '4', 'bakery', '3 tier cake with strawberry decorations vanilla fillings', 'Sasa Bakery', '/image/img_bakery.jpg', '2021-04-19 06:19:16', '2021-04-19 06:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Tshia', 'tshia@gao.com', '$2y$10$9Ad0Spug1bvTGUO6WoSel.p487dtuwQr8b5Hxnb.sE6Mv/nwTkRjG', NULL, NULL),
(3, 'Sally Allen', 'sally@allen.com', '$2y$10$kQgVQsh.xino1Ds65ZVXZe7quI37ZHbWyhPSxsyBJIY0Xco4j6urS', NULL, NULL),
(6, 'Batho', 'batho@gao.com', '$2y$10$YIbZSY9VNHNKOYI52WwseufdZI/teJKv/tbCubkjDk5m/h0ZOUN0C', '2021-04-12 04:50:28', '2021-04-12 04:50:28'),
(7, 'sam', 'sam@test.com', '$2y$10$CO8g3u.LANBLZRbQDK9IuOb4sXljRdsI8cjBjjQjfz3QcwITQEsMq', '2021-04-12 05:20:08', '2021-04-12 05:20:08'),
(8, 'Seth Rom', 'seth@rom.com', '$2y$10$kRUvHRxyK5UVV0Zowp5A8eO3pzk8LUuo0/wbvdBY3U4KCR5Vd7uS2', '2021-04-14 03:34:54', '2021-04-14 03:34:54'),
(9, 'hhh', 'hhhh@hhh.hhhh', '$2y$10$ezewufpuScdvhReWK.BRPuEYiv4kBYCN/USUUiCP3qu7lRaegGId6', '2021-04-14 11:48:00', '2021-04-14 11:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `user_id`, `status`, `product_category`, `location`, `email`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Masa Limited', '1', 'avilable', 'venue', 'Gaborone CBD', 'masa@limited.com', 'private bag 30 gaborone', NULL, NULL),
(3, 'Marang Designers', '2', 'avilable', 'attire', 'Gaborone Block 1', 'marang@designers.com', 'Private Bag 14 Gaborone', NULL, NULL),
(4, 'Kelly Jewellery', '2', 'avilable', 'jewellery', 'Gaborone CBD', 'kelly@jewellery.com', 'private bag 24 gaborone', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklists`
--
ALTER TABLE `checklists`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `checklists`
--
ALTER TABLE `checklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
