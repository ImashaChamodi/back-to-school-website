-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2025 at 11:54 AM
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
-- Database: `backtoschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password_hash`, `created_at`) VALUES
(1, 'admin', '$2y$10$eQjas4BZqFNy6fqYvDYBxOnPExiCRR4OqqaRs1Wv5iT6RokdUhaNS', '2025-08-18 04:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `donation_type` enum('finance','resource') NOT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `resource_details` text DEFAULT NULL,
  `status` enum('pending','approved') DEFAULT 'pending',
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `full_name`, `address`, `phone`, `email`, `donation_type`, `amount`, `resource_details`, `status`, `submitted_at`) VALUES
(1, 'chamm', 'fffgff', 'hhhh', 'Tttt@gmail.com', 'resource', NULL, 'httytt', 'approved', '2025-08-14 08:48:13'),
(2, 'chamm', 'qqqq', 'qqq', 'www@gmai.com', 'finance', 345.00, NULL, 'approved', '2025-08-14 09:14:03'),
(3, 'chamm', 'qqqq', 'qqq', 'www@gmai.com', 'finance', 345.00, NULL, 'approved', '2025-08-14 10:57:01'),
(4, 'chamm', 'qa', 'aaaaaa', 'test1@gmail.com', 'finance', 343.00, NULL, 'approved', '2025-08-14 10:57:35'),
(5, 'chamm', 'qa', 'aaaaaa', 'test1@gmail.com', 'finance', 343.00, NULL, 'approved', '2025-08-14 10:58:29'),
(7, 'chamm', 'qa', 'aaaaaa', 'test1@gmail.com', 'finance', 343.00, NULL, 'approved', '2025-08-14 11:04:04'),
(8, 'chamm', 'qa', 'aaaaaa', 'test1@gmail.com', 'finance', 343.00, NULL, 'approved', '2025-08-14 11:08:41'),
(9, 'chamm', 'qa', 'aaaaaa', 'test1@gmail.com', 'finance', 343.00, NULL, 'approved', '2025-08-14 11:08:45'),
(10, 'chamm', 'qa', 'aaaaaa', 'test1@gmail.com', 'finance', 343.00, NULL, 'approved', '2025-08-14 11:09:10'),
(12, 'chamm', 'qa', 'aaaaaa', 'test1@gmail.com', 'finance', 343.00, NULL, 'approved', '2025-08-14 11:18:04'),
(14, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'approved', '2025-08-21 19:20:41'),
(15, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'approved', '2025-08-21 19:20:45'),
(16, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'pending', '2025-08-21 19:23:42'),
(17, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'pending', '2025-08-21 19:23:51'),
(18, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'pending', '2025-08-21 19:28:29'),
(19, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'pending', '2025-08-21 19:28:35'),
(20, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'pending', '2025-08-21 19:30:58'),
(21, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'pending', '2025-08-21 19:33:16'),
(22, 'rrrrrr', 'wwww', 'www', 'rrrrr@gmail.com', 'finance', 333.00, NULL, 'pending', '2025-08-21 19:36:35'),
(27, 'ssq', '21', 'ww', 'chamodiimasha801@gmail.com', 'resource', NULL, 'chair', 'approved', '2025-08-21 20:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `join_requests`
--

CREATE TABLE `join_requests` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` enum('pending','processed') NOT NULL DEFAULT 'pending',
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `join_requests`
--

INSERT INTO `join_requests` (`id`, `full_name`, `email`, `phone`, `message`, `status`, `submitted_at`) VALUES
(1, 'test1', 'test1@gmail.com', '+94 762258987', 'd', 'processed', '2025-08-13 20:01:29'),
(3, 'test2', 'test2@gmail.com', '+94 762258987', 'hello ', '', '2025-08-14 05:13:52'),
(4, 'cham dis', 'test2@gmail.com', 'qq', 'qq', 'pending', '2025-08-14 19:15:26'),
(5, 'cham dis', 'test2@gmail.com', 'qq', 'qq', '', '2025-08-14 19:50:40'),
(6, 'new', 'new@gmail.com', '+94 762258987', '23232323', 'pending', '2025-08-18 05:17:42'),
(7, 'today', 'tdt@gmail.com', '1111111', '113w2r ertrtr', 'pending', '2025-08-21 04:22:20'),
(8, 'dddd', 'eeee#@gmail.com', 'rrrrr', 'rt', 'pending', '2025-08-21 14:45:37'),
(9, 'ww', '222@gmail.com', '22', 'qqq', '', '2025-08-21 18:00:30'),
(10, '44', 'www@gmai.com', '333', '33', 'pending', '2025-08-21 18:02:24'),
(11, 'eee', 'eee@gmail.com', 'eee', 'ee', '', '2025-08-21 18:39:54'),
(12, 'eee', 'eee@gmail.com', 'eee', 'ee', '', '2025-08-21 18:42:19'),
(13, 'eee', 'eee@gmail.com', 'eee', 'ee', '', '2025-08-21 18:45:55'),
(14, 'eee', 'eee@gmail.com', 'eee', 'ee', '', '2025-08-21 19:08:31'),
(15, 'ee', 'eee@gmail.com', 'ee', 'ee', 'processed', '2025-08-22 07:35:54'),
(16, '12`1212', 'chamodiimasha801@gmail.com', '22', 'qq', 'processed', '2025-08-27 17:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `previous_scholars`
--

CREATE TABLE `previous_scholars` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `period_from` year(4) NOT NULL,
  `period_to` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `previous_scholars`
--

INSERT INTO `previous_scholars` (`id`, `name`, `designation`, `period_from`, `period_to`, `created_at`) VALUES
(1, 'sawqewq', 'ewewewe', '2009', '2021', '2025-08-27 17:57:52'),
(2, 'test1', 'engineer', '1999', '2004', '2025-08-27 18:10:14'),
(3, 'test1', 'engineer', '1999', '2004', '2025-08-27 18:19:07'),
(4, '44545', '44', '2033', '2044', '2025-08-28 10:01:55'),
(5, '44545', '44', '2033', '2044', '2025-08-28 10:03:25'),
(6, 'rr', 'ew', '1999', '2033', '2025-08-28 10:03:33'),
(7, '34rrr', 'gff', '2055', '2055', '2025-08-28 10:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `volunteer_type` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` enum('pending','approved') DEFAULT 'pending',
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `full_name`, `volunteer_type`, `designation`, `email`, `phone`, `status`, `submitted_at`) VALUES
(1, 'qqqqq', '111', '222', 'test2@gmail.com', '111', '', '2025-08-14 19:00:44'),
(11, 'eeeee', 'eeeeeeeeeee', 'eeeeeeeeeeeeee', 'eee@gmail.com', 'eeeeeeeeeee', 'approved', '2025-08-18 06:33:36'),
(12, 'eeeee', 'eeeeeeeeeee', 'eeeeeeeeeeeeee', 'eee@gmail.com', 'eeeeeeeeeee', 'approved', '2025-08-18 06:33:47'),
(13, 'chamm', '111', '222', 'www@gmai.com', 'test123', 'approved', '2025-08-18 06:34:25'),
(15, 'chamm', '111', '222', 'www@gmai.com', 'test123', 'approved', '2025-08-18 07:28:15'),
(18, 'test1teach', 'Volunteer Type', 'Designation', 'chamodiimasha801@gmail.com', 'phone', 'approved', '2025-08-21 20:16:15'),
(20, 'neww', '111', 'Designation', 'test2@gmail.com', 'new', 'approved', '2025-08-28 09:57:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_requests`
--
ALTER TABLE `join_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous_scholars`
--
ALTER TABLE `previous_scholars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `join_requests`
--
ALTER TABLE `join_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `previous_scholars`
--
ALTER TABLE `previous_scholars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
