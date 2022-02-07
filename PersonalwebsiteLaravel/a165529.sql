-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 10:32 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a165529`
--
CREATE DATABASE IF NOT EXISTS `a165529` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `a165529`;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(100) unsigned NOT NULL,
  `abilities` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `abilities`, `rate`, `created_at`, `updated_at`) VALUES
(8, 'C++', '8', '2020-07-21 23:01:05', '2020-07-21 23:01:05'),
(9, 'HTML, PHP,CSS', '9', '2020-07-21 23:01:47', '2020-07-21 23:04:27'),
(10, 'Java', '7', '2020-07-21 23:02:14', '2020-07-21 23:02:14'),
(11, 'Critical Thinking', '8', '2020-07-21 23:02:51', '2020-07-21 23:04:16'),
(13, 'Multitasking', '10', '2020-07-21 23:03:27', '2020-07-21 23:03:27'),
(14, 'Problem Solving', '8', '2020-07-21 23:03:51', '2020-07-21 23:03:51'),
(15, 'Teamwork', '10', '2020-07-21 23:05:21', '2020-07-21 23:05:21'),
(16, 'Agility and adaptability', '9', '2020-07-21 23:06:51', '2020-07-21 23:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Adam', 'haharina21@gmail.com', NULL, 1, '$2y$10$nkIGVo22iB1/7jGi3PBnG.yTLNIZxkZx/Ir1EkEwhyC/Y.RLYygni', NULL, '2020-06-24 04:14:02', '2020-06-24 04:14:02'),
(9, 'fasihaharina', 'haha97364@gmail.com', NULL, 0, '$2y$10$bkv//hi7ZXaSk7ACUpWOrOf8L8a1.AdlsY09YrP2ZvpIEYUPE8AWK', NULL, '2020-06-24 19:09:00', '2020-06-24 19:09:00'),
(12, 'Admin', 'admin@webpage.com', NULL, 1, '$2y$10$Vuw9gSQD2Qu/XD6hoGYCzeiep9KgnWBBhIsno4sIdjsDE8VXKNF3C', NULL, '2020-07-17 02:26:04', '2020-07-17 02:26:04'),
(13, 'User', 'user@gmail.com', NULL, 0, '$2y$10$RMyJgOYoe8h8e3mOnRzaOefA4P2AQt4ZQsjA3qSYT24GxTTZzs4WG', NULL, '2020-07-17 02:26:08', '2020-07-17 02:26:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(100) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
