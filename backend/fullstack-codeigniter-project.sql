-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 11:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack-codeigniter-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) UNSIGNED NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(1, 'Electric Item'),
(2, 'Display Item'),
(3, 'Sports item'),
(4, 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2022-12-26-110349', 'App\\Database\\Migrations\\Products', 'default', 'App', 1672315766, 1),
(6, '2022-12-29-121317', 'App\\Database\\Migrations\\Category', 'default', 'App', 1672316157, 2),
(7, '2022-12-31-091956', 'App\\Database\\Migrations\\Users', 'default', 'App', 1672479384, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_details` text DEFAULT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_details`, `product_price`, `product_image`, `product_category`) VALUES
(2, 'Addidas ', '    Content here                                    ', '300.00', 'assets/uploads/ledtv_5.jpg', 3),
(3, 'watch', ' dddddddd                                    ', '300.00', 'assets/uploads/sajedul2_2.png', 3),
(4, 'CC TV', ' Wood product                                    ', '800.00', 'assets/uploads/cctv.jpg', 2),
(7, 'Extra 5', '  wwwwww                                                                        ', '1200.00', 'assets/uploads/sajedul_3.png', 2),
(13, 'Shirt', 'Content here', '300.00', 'assets/uploads/warehouse_2.jpg', 4),
(14, 'CC TV', 'Content', '800.00', 'assets/uploads/cctv_4.jpg', 1),
(15, 'Cap', 'Content', '800.00', 'assets/uploads/warehouse_3.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Sajedul', 'Islam', 'sajedul@gmail.com', '123'),
(5, 'Amjad', 'Hossain', 'amjad@gmail.com', '123'),
(6, 'kabir', 'hasan', 'kabir@gmail.com', '123'),
(7, 'sakib', 'khan', 'sakib@gmail.com', '123'),
(8, 'Tamim', 'khan', 'tamim@gmail.com', '123'),
(9, 'dd', 'dd', 'masrafee@gmail.com', '123'),
(10, 'ss', 'ss', 'abc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(2, 'Amjad', 'amjad@gmail.com', '$2y$10$S.jaIuv8zfn/4qrKZK8pgOutLH.NJN73WL5wFc1wm3w5gc9.MAxFW', '2022-12-31 10:22:05'),
(3, 'rakib', 'rakib@gmail.com', '$2y$10$oloech0//4TTYT2XhkCFtujuAJLgLSwEi7DY9rSeVBApp8i8N4iSK', '2022-12-31 10:48:58'),
(4, 'Nirob', 'ni@gmail.com', '$2y$10$mzVDKq7f1iTuXxIw3Dt2v.r1mn7UFPAdGfrujvuBUBq7jfNL7mW2i', '2022-12-31 10:57:20'),
(5, 'sajedul', 'sajedul@gmail.com', '$2y$10$iBGo6SmJO0EIRisb6bcZsOFA3vbk/2gN5f7c99xys24yz5geQS2R2', '2022-12-31 11:35:33');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
