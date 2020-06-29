-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 03:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cropicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `demand_lists`
--

CREATE TABLE `demand_lists` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demand_lists_details`
--

CREATE TABLE `demand_lists_details` (
  `id` int(11) NOT NULL,
  `demand_list_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qty` float NOT NULL,
  `unit_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(50) NOT NULL,
  `unit_short_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `unit_short_name`) VALUES
(1, 'kilogram', 'kg'),
(2, 'ton', 'ton'),
(3, 'dozen', 'dzn'),
(4, 'grams', 'gm'),
(5, 'litre', 'L'),
(6, 'millilitre', 'mL'),
(7, 'quintal', 'qui');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `is_verified` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `otp_verified` int(11) NOT NULL,
  `pwd_reset_token` varchar(100) NOT NULL,
  `token_expire_at` date NOT NULL,
  `is_active` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `mobile_no`, `email`, `password`, `is_verified`, `otp`, `otp_verified`, `pwd_reset_token`, `token_expire_at`, `is_active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(25, 2, 'Ankur', '7894561230', '', '$2y$10$cMS7k8b4cq3WFLDerTXY0O0yLK89jDh2.aNJFzUY6fd.JyNVX.fvW', 1, '', 0, '', '0000-00-00', 1, '2020-06-29 09:55:01', '2020-06-29 09:55:01', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `capacity_kart` int(11) NOT NULL,
  `sales_qty_daily` float NOT NULL,
  `source_purchase` varchar(500) NOT NULL,
  `bank_name` varchar(500) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `acc_no` varchar(100) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `profile_img` varchar(500) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(20) NOT NULL,
  `modified_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `email`, `capacity_kart`, `sales_qty_daily`, `source_purchase`, `bank_name`, `holder_name`, `acc_no`, `ifsc_code`, `latitude`, `longitude`, `profile_img`, `is_active`, `is_deleted`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(2, 25, '', 0, 0, '', '', '', '', '', '', '', '', 0, 0, '2020-06-29 09:55:01', '2020-06-29 09:34:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `login_time` timestamp NULL DEFAULT current_timestamp(),
  `logout_time` timestamp NULL DEFAULT NULL,
  `is_logged_in` int(11) NOT NULL,
  `ip_address` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sessions`
--

INSERT INTO `user_sessions` (`id`, `user_id`, `role_id`, `login_time`, `logout_time`, `is_logged_in`, `ip_address`, `is_active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(4, 1, 2, '2020-06-29 04:45:52', '2020-06-29 05:00:25', 0, 0, 0, 0, 0, 0, 0),
(5, 1, 2, '2020-06-29 05:00:44', '2020-06-29 05:00:58', 0, 0, 0, 0, 0, 0, 0),
(6, 1, 2, '2020-06-29 06:00:16', '2020-06-29 06:20:33', 0, 0, 0, 0, 0, 0, 0),
(7, 25, 2, '2020-06-29 06:25:28', '2020-06-29 06:34:44', 0, 0, 0, 0, 0, 0, 0),
(8, 25, 2, '2020-06-29 06:34:49', '2020-06-29 06:46:02', 0, 0, 0, 0, 0, 0, 0),
(9, 25, 2, '2020-06-29 06:48:09', '2020-06-29 06:49:45', 0, 0, 0, 0, 0, 0, 0),
(10, 25, 2, '2020-06-29 07:19:01', NULL, 1, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demand_lists`
--
ALTER TABLE `demand_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demand_lists_details`
--
ALTER TABLE `demand_lists_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demand_lists`
--
ALTER TABLE `demand_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demand_lists_details`
--
ALTER TABLE `demand_lists_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
