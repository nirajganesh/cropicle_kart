-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 02:51 PM
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
-- Table structure for table `categories_master`
--

CREATE TABLE `categories_master` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories_master`
--

INSERT INTO `categories_master` (`id`, `category_name`, `created`, `modified`) VALUES
(1, 'Fruits & vegetables', '2020-06-30 09:55:48', '2020-06-30 09:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `demand_lists`
--

CREATE TABLE `demand_lists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demand_lists`
--

INSERT INTO `demand_lists` (`id`, `user_id`, `name`, `is_active`, `is_deleted`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(1, 25, 'Regular list', 1, 0, '2020-06-30 09:49:38', '2020-06-30 09:49:38', '', ''),
(18, 25, 'Special List', 1, 0, '2020-07-03 12:37:01', '2020-07-03 12:37:01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `demand_lists_details`
--

CREATE TABLE `demand_lists_details` (
  `id` int(11) NOT NULL,
  `demand_list_id` int(11) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `qty` float NOT NULL,
  `unit_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demand_lists_details`
--

INSERT INTO `demand_lists_details` (`id`, `demand_list_id`, `item_id`, `qty`, `unit_id`, `is_active`, `is_deleted`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(1, 1, '1', 20, 1, 1, 0, '2020-06-30 09:50:21', '2020-06-30 09:50:21', '', ''),
(2, 1, '2', 4, 1, 1, 0, '2020-06-30 09:50:21', '2020-06-30 09:50:21', '', ''),
(3, 1, '4', 6, 1, 1, 0, '2020-06-30 09:50:50', '2020-06-30 09:50:50', '', ''),
(4, 2, '1', 2, 1, 1, 0, '2020-06-30 09:50:50', '2020-06-30 09:50:50', '', ''),
(30, 17, '12', 1, 1, 1, 0, '2020-07-03 11:59:24', '2020-07-03 11:59:24', '', ''),
(31, 18, '10', 3, 1, 1, 0, '2020-07-03 12:37:01', '2020-07-03 12:37:01', '', ''),
(32, 18, '11', 1, 1, 1, 0, '2020-07-03 12:37:01', '2020-07-03 12:37:01', '', ''),
(33, 18, '7', 2, 1, 1, 0, '2020-07-03 12:37:01', '2020-07-03 12:37:01', '', ''),
(34, 18, '5', 1, 1, 1, 0, '2020-07-03 12:37:01', '2020-07-03 12:37:01', '', ''),
(35, 19, '4', 4, 1, 1, 0, '2020-07-03 12:37:18', '2020-07-03 12:37:18', '', ''),
(36, 20, '10', 1, 1, 1, 0, '2020-07-03 12:48:36', '2020-07-03 12:48:36', '', ''),
(37, 21, '11', 4, 1, 1, 0, '2020-07-03 12:48:47', '2020-07-03 12:48:47', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items_master`
--

CREATE TABLE `items_master` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `max_order_qty` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_img` varchar(500) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `item_price_kart` varchar(100) NOT NULL,
  `item_price_customer` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items_master`
--

INSERT INTO `items_master` (`id`, `category_id`, `max_order_qty`, `item_name`, `item_img`, `unit_id`, `item_price_kart`, `item_price_customer`, `is_active`, `created`, `modified`) VALUES
(1, 1, '8', 'Apple', '', 1, '140', '145', 1, '2020-06-30 07:41:52', '2020-06-30 07:41:52'),
(2, 1, '8', 'Potato', '', 1, '20', '30', 1, '2020-06-30 07:41:52', '2020-06-30 07:41:52'),
(3, 1, '8', 'Tomato', '', 1, '25', '40', 1, '2020-06-30 07:42:30', '2020-06-30 07:42:30'),
(4, 1, '8', 'Pumpkin', '', 1, '10', '15', 1, '2020-06-30 07:42:30', '2020-06-30 07:42:30'),
(5, 1, '2', 'Coriander', '', 1, '140', '160', 1, '2020-06-30 07:43:07', '2020-06-30 07:43:07'),
(6, 1, '5', 'Carrot', '', 1, '40', '45', 1, '2020-06-30 07:43:07', '2020-06-30 07:43:07'),
(7, 1, '4', 'Grapes', '', 1, '80', '90', 1, '2020-06-30 07:43:59', '2020-06-30 07:43:59'),
(8, 1, '5', 'Banana', '', 1, '30', '40', 1, '2020-06-30 07:43:59', '2020-06-30 07:43:59'),
(9, 1, '8', 'Onion', '', 1, '60', '80', 1, '2020-06-30 07:44:51', '2020-06-30 07:44:51'),
(10, 1, '5', 'Watermelon', '', 1, '40', '45', 1, '2020-06-30 07:44:51', '2020-06-30 07:44:51'),
(11, 1, '3', 'Ginger', '', 1, '90', '120', 1, '2020-06-30 07:45:29', '2020-06-30 07:45:29'),
(12, 1, '3', 'Garlic', '', 1, '50', '80', 1, '2020-06-30 07:45:29', '2020-06-30 07:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_qty` varchar(100) NOT NULL,
  `total_amt` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updated_by_hawker` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_qty`, `total_amt`, `date`, `payment_type`, `status`, `updated_by_hawker`, `is_deleted`) VALUES
(1, 25, '50', '2500', '2020-07-01', 'CASH', 'DELIVERED', 1, 0),
(2, 25, '80', '3000', '2020-07-04', 'CASH', 'DELIVERED', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `remaining_qty` varchar(100) NOT NULL,
  `item_price_kart` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `item_id`, `unit_id`, `qty`, `remaining_qty`, `item_price_kart`, `created`, `updated`) VALUES
(1, 1, 1, 1, '8', '2', '40', '2020-07-04 05:28:40', '2020-07-04 05:28:40'),
(2, 1, 2, 1, '5', '3', '50', '2020-07-04 05:28:40', '2020-07-04 05:28:40'),
(3, 2, 1, 1, '4', '1', '40', '2020-07-04 05:59:29', '2020-07-04 05:59:29'),
(4, 2, 2, 1, '3', '0', '45', '2020-07-04 06:00:03', '2020-07-04 06:00:03'),
(5, 2, 3, 1, '5', '1', '50', '2020-07-04 06:00:03', '2020-07-04 06:00:03'),
(6, 2, 4, 1, '3', '1', '20', '2020-07-04 06:00:28', '2020-07-04 06:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `api_payment_id` varchar(1000) NOT NULL,
  `api_order_id` varchar(1000) NOT NULL,
  `api_signature` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
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
(25, 2, 'Ankur', '7894561230', '', '$2y$10$IenBYZcELmjIdfY1i8cuv.AOOqHDi713h51w0hL.JvcFji4FdHBVi', 1, '', 0, '', '0000-00-00', 1, '2020-06-29 09:55:01', '2020-06-29 09:55:01', 0, 0);

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
(2, 25, '', 200, 200, '', 'SBI', 'asas', '78946542300', 'asasadf4465', '', '', '', 0, 0, '2020-06-29 09:55:01', '2020-06-29 09:34:00', '', '');

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
(10, 25, 2, '2020-06-29 07:19:01', NULL, 1, 0, 0, 0, 0, 0, 0),
(11, 25, 2, '2020-06-30 01:32:09', '2020-06-30 01:50:23', 0, 0, 0, 0, 0, 0, 0),
(12, 25, 2, '2020-06-30 01:50:29', '2020-06-30 01:51:37', 0, 0, 0, 0, 0, 0, 0),
(13, 25, 2, '2020-06-30 01:51:41', '2020-06-30 01:52:07', 0, 0, 0, 0, 0, 0, 0),
(14, 25, 2, '2020-06-30 01:52:20', '2020-06-30 03:31:52', 0, 0, 0, 0, 0, 0, 0),
(15, 25, 2, '2020-06-30 03:31:59', '2020-06-30 03:34:04', 0, 0, 0, 0, 0, 0, 0),
(16, 25, 2, '2020-06-30 03:34:08', NULL, 1, 0, 0, 0, 0, 0, 0),
(17, 25, 2, '2020-06-30 08:44:46', NULL, 1, 0, 0, 0, 0, 0, 0),
(18, 25, 2, '2020-07-02 02:04:12', NULL, 1, 0, 0, 0, 0, 0, 0),
(19, 25, 2, '2020-07-03 01:44:31', NULL, 1, 0, 0, 0, 0, 0, 0),
(20, 25, 2, '2020-07-04 01:51:33', NULL, 1, 0, 0, 0, 0, 0, 0),
(21, 25, 2, '2020-07-04 06:24:59', NULL, 1, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories_master`
--
ALTER TABLE `categories_master`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `items_master`
--
ALTER TABLE `items_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- AUTO_INCREMENT for table `categories_master`
--
ALTER TABLE `categories_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `demand_lists`
--
ALTER TABLE `demand_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `demand_lists_details`
--
ALTER TABLE `demand_lists_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `items_master`
--
ALTER TABLE `items_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
