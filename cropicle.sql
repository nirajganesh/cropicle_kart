-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 02:34 PM
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
(22, 25, 'New list', 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(23, 25, 'New', 1, 0, '2020-07-08 11:52:17', '2020-07-08 11:52:17', '', ''),
(24, 25, 'Latest', 1, 0, '2020-07-08 11:56:13', '2020-07-08 11:56:13', '', '');

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
(38, 22, '12', 1, 1, 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(39, 22, '11', 1, 1, 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(40, 22, '10', 3, 1, 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(41, 22, '9', 3, 1, 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(42, 22, '2', 5, 1, 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(43, 22, '1', 1, 1, 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(44, 22, '3', 3, 1, 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(45, 22, '6', 2, 1, 1, 0, '2020-07-08 11:22:21', '2020-07-08 11:22:21', '', ''),
(46, 23, '3', 3, 1, 1, 0, '2020-07-08 11:52:17', '2020-07-08 11:52:17', '', ''),
(47, 24, '10', 5, 1, 1, 0, '2020-07-08 11:56:13', '2020-07-08 11:56:13', '', ''),
(48, 24, '4', 3, 1, 1, 0, '2020-07-08 11:56:13', '2020-07-08 11:56:13', '', ''),
(49, 24, '5', 0.5, 1, 1, 0, '2020-07-08 11:56:13', '2020-07-08 11:56:13', '', ''),
(50, 24, '8', 2, 1, 1, 0, '2020-07-08 11:56:13', '2020-07-08 11:56:13', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items_master`
--

CREATE TABLE `items_master` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 1,
  `max_order_qty` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_img` varchar(500) NOT NULL,
  `unit_id` int(11) NOT NULL DEFAULT 1,
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
(1, 1, '8', 'Apple', 'defaultItem.jpg', 1, '140', '145', 1, '2020-06-30 07:41:52', '2020-07-06 08:31:20'),
(2, 1, '8', 'Potato', 'defaultItem.jpg', 1, '20', '30', 1, '2020-06-30 07:41:52', '2020-06-30 07:41:52'),
(3, 1, '8', 'Tomato', 'defaultItem.jpg', 1, '25', '40', 1, '2020-06-30 07:42:30', '2020-06-30 07:42:30'),
(4, 1, '8', 'Pumpkin', 'defaultItem.jpg', 1, '10', '15', 1, '2020-06-30 07:42:30', '2020-06-30 07:42:30'),
(5, 1, '2', 'Coriander', 'defaultItem.jpg', 1, '140', '160', 1, '2020-06-30 07:43:07', '2020-06-30 07:43:07'),
(6, 1, '5', 'Carrot', 'defaultItem.jpg', 1, '40', '45', 1, '2020-06-30 07:43:07', '2020-06-30 07:43:07'),
(7, 1, '4', 'Grapes', 'defaultItem.jpg', 1, '80', '90', 1, '2020-06-30 07:43:59', '2020-06-30 07:43:59'),
(8, 1, '5', 'Banana', 'defaultItem.jpg', 1, '30', '40', 1, '2020-06-30 07:43:59', '2020-06-30 07:43:59'),
(9, 1, '8', 'Onion', 'defaultItem.jpg', 1, '60', '80', 1, '2020-06-30 07:44:51', '2020-06-30 07:44:51'),
(10, 1, '5', 'Watermelon', 'watermelon.jpg', 1, '40', '45', 1, '2020-06-30 07:44:51', '2020-06-30 07:44:51'),
(11, 1, '3', 'Ginger', 'defaultItem.jpg', 1, '90', '120', 1, '2020-06-30 07:45:29', '2020-06-30 07:45:29'),
(12, 1, '3', 'Garlic', 'defaultItem.jpg', 1, '50', '80', 1, '2020-06-30 07:45:29', '2020-06-30 07:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `locations_master`
--

CREATE TABLE `locations_master` (
  `id` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_code` varchar(15) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations_master`
--

INSERT INTO `locations_master` (`id`, `area`, `city`, `state`, `pin_code`, `is_active`, `created`, `modified`) VALUES
(1, 'Budhapara', 'Raipur', 'CG', '492001', 1, '2020-07-08 07:29:24', '2020-07-08 06:14:46'),
(2, 'Shankar nagar', 'Raipur', 'CG', '492007', 1, '2020-07-08 07:29:24', '2020-07-08 07:29:24'),
(4, 'Avanti', 'Raipur', 'CG', '492003', 1, '2020-07-08 09:41:14', '2020-07-08 06:14:37'),
(5, 'VIP Road', 'Raipur', 'CG', '492000', 1, '2020-07-08 09:42:23', '2020-07-08 09:42:23');

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
(15, 25, '19', '835', '2020-07-08', 'CASH', 'DELIVERED', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL DEFAULT 1,
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
(60, 15, 6, 1, '2.00', '0.00', '40', '2020-07-08 12:20:35', '2020-07-08 08:50:47'),
(61, 15, 3, 1, '3.00', '0.00', '25', '2020-07-08 12:20:35', '2020-07-08 08:50:47'),
(62, 15, 1, 1, '1.00', '0.00', '140', '2020-07-08 12:20:35', '2020-07-08 08:50:47'),
(63, 15, 2, 1, '5.00', '0.00', '20', '2020-07-08 12:20:35', '2020-07-08 08:50:47'),
(64, 15, 9, 1, '3.00', '0.00', '60', '2020-07-08 12:20:35', '2020-07-08 08:50:47'),
(65, 15, 10, 1, '3.00', '0.00', '40', '2020-07-08 12:20:35', '2020-07-08 08:50:47'),
(66, 15, 11, 1, '1.00', '0.00', '90', '2020-07-08 12:20:35', '2020-07-08 08:50:47'),
(67, 15, 12, 1, '1.00', '0.00', '50', '2020-07-08 12:20:35', '2020-07-08 08:50:47');

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
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `mobile_no`, `email`, `password`, `is_verified`, `otp`, `otp_verified`, `pwd_reset_token`, `token_expire_at`, `is_active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(1, 1, 'Admin', '8888888888', 'admin@cropicle.com', '$2y$10$IenBYZcELmjIdfY1i8cuv.AOOqHDi713h51w0hL.JvcFji4FdHBVi', 1, '', 1, '', '0000-00-00', 1, '2020-07-06 05:22:59', '2020-07-06 05:22:59', 0, 0),
(25, 2, 'Ankur', '7894561230', '', '$2y$10$IenBYZcELmjIdfY1i8cuv.AOOqHDi713h51w0hL.JvcFji4FdHBVi', 1, '', 0, '', '0000-00-00', 1, '2020-06-29 09:55:01', '2020-07-06 07:48:42', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aadhaar_license` varchar(100) NOT NULL,
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
  `location_id` int(11) NOT NULL,
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

INSERT INTO `user_info` (`id`, `user_id`, `email`, `aadhaar_license`, `capacity_kart`, `sales_qty_daily`, `source_purchase`, `bank_name`, `holder_name`, `acc_no`, `ifsc_code`, `latitude`, `longitude`, `profile_img`, `location_id`, `is_active`, `is_deleted`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(2, 25, '', '', 200, 200, '', 'SBI', 'asas', '78946542300', 'asasadf4465', '', '', '', 1, 0, 0, '2020-06-29 09:55:01', '2020-07-08 04:22:42', '', '');

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
(21, 25, 2, '2020-07-04 06:24:59', NULL, 1, 0, 0, 0, 0, 0, 0),
(22, 1, 1, '2020-07-06 01:53:29', NULL, 1, 0, 0, 0, 0, 0, 0),
(23, 25, 2, '2020-07-06 01:54:46', '2020-07-06 06:18:34', 0, 0, 0, 0, 0, 0, 0),
(24, 1, 1, '2020-07-06 06:18:46', NULL, 1, 0, 0, 0, 0, 0, 0),
(25, 25, 2, '2020-07-06 07:10:39', '2020-07-06 07:10:42', 0, 0, 0, 0, 0, 0, 0),
(26, 25, 2, '2020-07-06 07:11:27', '2020-07-06 07:11:30', 0, 0, 0, 0, 0, 0, 0),
(27, 1, 1, '2020-07-06 07:11:48', NULL, 1, 0, 0, 0, 0, 0, 0),
(28, 25, 2, '2020-07-06 07:39:06', '2020-07-06 07:39:27', 0, 0, 0, 0, 0, 0, 0),
(29, 1, 1, '2020-07-06 07:40:05', NULL, 1, 0, 0, 0, 0, 0, 0),
(30, 25, 2, '2020-07-06 07:50:50', '2020-07-06 07:51:41', 0, 0, 0, 0, 0, 0, 0),
(31, 1, 1, '2020-07-06 07:51:55', NULL, 1, 0, 0, 0, 0, 0, 0),
(32, 32, 2, '2020-07-06 08:05:06', '2020-07-06 08:05:10', 0, 0, 0, 0, 0, 0, 0),
(33, 1, 1, '2020-07-06 08:05:20', '2020-07-06 08:39:20', 0, 0, 0, 0, 0, 0, 0),
(34, 25, 2, '2020-07-06 08:39:38', '2020-07-06 09:40:03', 0, 0, 0, 0, 0, 0, 0),
(35, 25, 2, '2020-07-06 09:40:13', NULL, 1, 0, 0, 0, 0, 0, 0),
(36, 25, 2, '2020-07-07 01:32:10', '2020-07-07 04:14:16', 0, 0, 0, 0, 0, 0, 0),
(37, 1, 1, '2020-07-07 04:14:26', NULL, 1, 0, 0, 0, 0, 0, 0),
(38, 25, 2, '2020-07-07 06:50:01', '2020-07-07 07:32:12', 0, 0, 0, 0, 0, 0, 0),
(39, 1, 1, '2020-07-07 07:32:26', NULL, 1, 0, 0, 0, 0, 0, 0),
(40, 25, 2, '2020-07-07 07:38:08', NULL, 1, 0, 0, 0, 0, 0, 0),
(41, 1, 1, '2020-07-08 01:50:24', NULL, 1, 0, 0, 0, 0, 0, 0),
(42, 25, 2, '2020-07-08 01:51:02', '2020-07-08 03:06:17', 0, 0, 0, 0, 0, 0, 0),
(43, 1, 1, '2020-07-08 03:06:38', '2020-07-08 06:41:44', 0, 0, 0, 0, 0, 0, 0),
(44, 25, 2, '2020-07-08 04:01:27', NULL, 1, 0, 0, 0, 0, 0, 0),
(45, 25, 2, '2020-07-08 06:41:56', NULL, 1, 0, 0, 0, 0, 0, 0),
(46, 1, 1, '2020-07-08 07:00:27', '2020-07-08 07:04:07', 0, 0, 0, 0, 0, 0, 0),
(47, 25, 2, '2020-07-08 07:04:13', NULL, 1, 0, 0, 0, 0, 0, 0),
(48, 1, 1, '2020-07-08 07:12:31', '2020-07-08 07:12:50', 0, 0, 0, 0, 0, 0, 0),
(49, 25, 2, '2020-07-08 07:12:56', NULL, 1, 0, 0, 0, 0, 0, 0),
(50, 25, 2, '2020-07-08 07:48:53', NULL, 1, 0, 0, 0, 0, 0, 0),
(51, 25, 2, '2020-07-08 08:07:01', NULL, 1, 0, 0, 0, 0, 0, 0),
(52, 1, 1, '2020-07-08 08:18:59', NULL, 1, 0, 0, 0, 0, 0, 0);

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
-- Indexes for table `locations_master`
--
ALTER TABLE `locations_master`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `demand_lists_details`
--
ALTER TABLE `demand_lists_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `items_master`
--
ALTER TABLE `items_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `locations_master`
--
ALTER TABLE `locations_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
