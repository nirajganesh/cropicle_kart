-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 07:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories_master`
--

INSERT INTO `categories_master` (`id`, `category_name`, `is_active`, `created`, `modified`) VALUES
(1, 'Fruits & vegetables', 1, '2020-06-30 09:55:48', '2020-06-30 09:55:48'),
(2, 'Flowers', 1, '2020-08-31 09:55:48', '2020-08-31 10:05:52'),
(3, 'Exotic vegetables', 1, '2020-08-31 09:55:48', '2020-08-31 10:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `customer_demands`
--

CREATE TABLE `customer_demands` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `demand_amount` varchar(100) NOT NULL,
  `location_id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `customer_remarks` varchar(500) NOT NULL,
  `admin_remarks` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `notify` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_demands`
--

INSERT INTO `customer_demands` (`id`, `user_id`, `demand_amount`, `location_id`, `address`, `customer_remarks`, `admin_remarks`, `status`, `notify`, `created`, `modified`) VALUES
(11, 40, '340', 0, '', 'fgdfhtg', '', 'APPROVED', 0, '2020-07-31 14:04:31', '2020-07-31 14:04:31'),
(12, 40, '215', 0, '', 'dnd', '', 'APPROVED', 0, '2020-07-31 14:12:38', '2020-07-31 14:12:38'),
(13, 40, '70', 4, 'c vfd', 'dsv', '', 'REJECTED', 0, '2020-07-31 19:06:05', '2020-07-31 19:06:05'),
(14, 41, '295', 4, 'vsfvfv', 'no', '', 'APPROVED', 0, '2020-07-31 19:11:40', '2020-07-31 19:11:40'),
(15, 13, '165', 1, 'fbf', '', '', 'APPROVED', 0, '2020-08-04 14:56:41', '2020-08-04 14:56:41'),
(16, 13, '260', 1, 'jygg', '', '', 'APPROVED', 0, '2020-08-05 11:44:54', '2020-08-05 11:44:54'),
(17, 13, '0', 1, 'jygg', '', '', 'PENDING', 0, '2020-08-05 11:44:54', '2020-08-05 11:44:54'),
(18, 13, '125', 1, 'vsvds', '', '', 'PENDING', 0, '2020-08-05 11:46:59', '2020-08-05 11:46:59'),
(19, 13, '0', 1, 'vsvds', '', '', 'PENDING', 0, '2020-08-05 11:46:59', '2020-08-05 11:46:59'),
(20, 13, '160', 1, '', '', '', 'PENDING', 0, '2020-08-05 11:57:16', '2020-08-05 11:57:16'),
(21, 13, '15', 1, '', '', '', 'PENDING', 0, '2020-08-05 11:58:05', '2020-08-05 11:58:05'),
(22, 13, '15', 1, 'dvs', '', '', 'PENDING', 0, '2020-08-05 12:04:16', '2020-08-05 12:04:16'),
(23, 13, '40', 1, 'dsvs', '', '', 'PENDING', 0, '2020-08-05 12:26:40', '2020-08-05 12:26:40'),
(24, 13, '30', 1, 'sdgsfdgsgsd', '', '', 'PENDING', 0, '2020-08-05 12:27:21', '2020-08-05 12:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `customer_demand_details`
--

CREATE TABLE `customer_demand_details` (
  `id` int(11) NOT NULL,
  `customer_demand_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_price_customer` varchar(100) NOT NULL,
  `item_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_demand_details`
--

INSERT INTO `customer_demand_details` (`id`, `customer_demand_id`, `item_id`, `item_price_customer`, `item_quantity`) VALUES
(31, 11, 10, '45', '1'),
(32, 11, 9, '80', '1'),
(33, 11, 8, '40', '1'),
(34, 11, 2, '30', '1'),
(35, 11, 1, '145', '1'),
(36, 12, 3, '40', '1'),
(37, 12, 4, '15', '1'),
(38, 12, 5, '160', '1'),
(39, 13, 3, '40', '1'),
(40, 13, 4, '15', '2'),
(41, 14, 9, '80', '1'),
(42, 14, 3, '40', '1'),
(43, 14, 4, '15', '1'),
(44, 14, 5, '160', '1'),
(45, 15, 8, '40', '1'),
(46, 15, 9, '80', '1'),
(47, 15, 10, '45', '1'),
(48, 16, 3, '40', '1'),
(49, 16, 4, '15', '1'),
(50, 16, 5, '160', '1'),
(51, 16, 6, '45', '1'),
(52, 18, 10, '45', '1'),
(53, 18, 9, '80', '1'),
(54, 20, 5, '160', '1'),
(55, 21, 4, '15', '1'),
(56, 22, 4, '15', '1'),
(57, 23, 3, '40', '1'),
(58, 24, 2, '30', '1');

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
(36, 14, 'tdb', 1, 0, '2020-08-01 07:59:43', '2020-08-01 07:59:43', '', '');

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
(84, 30, '1', 8, 1, 1, 0, '2020-07-27 10:33:07', '2020-07-27 10:33:07', '', ''),
(85, 30, '3', 10, 1, 1, 0, '2020-07-27 10:33:07', '2020-07-27 10:33:07', '', ''),
(86, 31, '3', 8, 1, 1, 0, '2020-08-01 07:22:27', '2020-08-01 07:22:27', '', ''),
(87, 32, '8', 5, 1, 1, 0, '2020-08-01 07:22:33', '2020-08-01 07:22:33', '', ''),
(88, 33, '6', 5, 1, 1, 0, '2020-08-01 07:22:39', '2020-08-01 07:22:39', '', ''),
(89, 34, '4', 8, 1, 1, 0, '2020-08-01 07:22:54', '2020-08-01 07:22:54', '', ''),
(90, 35, '7', 4, 1, 1, 0, '2020-08-01 07:26:48', '2020-08-01 07:26:48', '', ''),
(91, 36, '3', 8, 1, 1, 0, '2020-08-01 07:59:43', '2020-08-01 07:59:43', '', ''),
(92, 36, '7', 4, 1, 1, 0, '2020-08-01 07:59:43', '2020-08-01 07:59:43', '', '');

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
(1, 1, '8', 'Apple', 'apple.jpg', 2, '140', '145', 0, '2020-06-30 07:41:52', '2020-08-31 10:18:19'),
(2, 1, '8', 'Potato', 'potato.jpeg', 1, '20', '30', 1, '2020-06-30 07:41:52', '2020-07-17 09:39:30'),
(3, 1, '8', 'Tomato', 'tomato.jpg', 1, '25', '40', 1, '2020-06-30 07:42:30', '2020-07-17 09:44:52'),
(5, 1, '2', 'Coriander', 'Coriander.jpg', 4, '140', '160', 1, '2020-06-30 07:43:07', '2020-07-17 09:40:16'),
(6, 1, '5', 'Carrot', 'carrots.jpg', 1, '40', '45', 1, '2020-06-30 07:43:07', '2020-07-17 09:39:40'),
(7, 1, '4', 'Grapes', 'grapes.jpg', 1, '80', '90', 1, '2020-06-30 07:43:59', '2020-07-17 09:45:20'),
(8, 1, '5', 'Banana', 'defaultItem.jpg', 3, '30', '40', 1, '2020-06-30 07:43:59', '2020-06-30 07:43:59'),
(9, 1, '8', 'Onion', 'Onion.jpg', 1, '60', '80', 1, '2020-06-30 07:44:51', '2020-07-17 09:39:51'),
(10, 1, '5', 'Watermelon', 'watermelon.jpg', 1, '40', '45', 1, '2020-06-30 07:44:51', '2020-06-30 07:44:51'),
(11, 1, '3', 'Ginger', 'ginger.jpg', 1, '90', '120', 1, '2020-06-30 07:45:29', '2020-07-17 09:45:41'),
(12, 1, '3', 'Garlic', 'garlic.jpg', 1, '50', '80', 1, '2020-06-30 07:45:29', '2020-07-17 09:45:52'),
(17, 3, '10', 'Brocolli', 'defaultItem.jpg', 1, '30', '50', 1, '2020-08-31 13:56:59', '2020-08-31 10:32:57');

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
(1, 'Budhapara', 'Raipur', 'CG', '492001', 1, '2020-07-08 07:29:24', '2020-08-06 05:18:56'),
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
(27, 14, '18', '1370', '2020-07-27', 'CASH', 'DELIVERED', 1, 0);

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
(117, 27, 3, 1, '10.00', '2.00', '25', '2020-07-27 10:35:04', '2020-07-27 10:35:34'),
(118, 27, 1, 1, '8.00', '1', '140', '2020-07-27 10:35:04', '2020-07-27 10:35:34');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'KART ADMIN'),
(2, 'KART'),
(3, 'USER');

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
(2, 'piece', 'pc'),
(3, 'dozen', 'dzn'),
(4, 'bunch', 'bunch'),
(5, 'litre', 'L'),
(6, 'quintal', 'qntl'),
(7, 'bora', 'bora');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login_oauth_uid` varchar(200) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `login_oauth_uid`, `role_id`, `name`, `mobile_no`, `email`, `password`, `is_verified`, `otp`, `otp_verified`, `pwd_reset_token`, `token_expire_at`, `is_active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(1, NULL, 1, 'Admin', '8888888888', 'admin@cropicle.com', '$2y$10$IenBYZcELmjIdfY1i8cuv.AOOqHDi713h51w0hL.JvcFji4FdHBVi', 1, '', 1, '', '0000-00-00', 1, '2020-07-06 05:22:59', '2020-07-06 05:22:59', 0, 0),
(13, NULL, 3, 'Ankur', '7894561230', 'dcd@sds.c', '$2y$10$LHKBCjBcqoxtFJmODWwmAeP0QQnsW4a4FhqSNpTXXvVbUorsWiuiO', 1, '', 1, '', '0000-00-00', 1, '2020-07-27 10:23:16', '2020-08-06 05:19:30', 0, 0),
(14, NULL, 2, 'Kart Ankur', '7894561231', '', '$2y$10$hPwNXEQkmA0KDArcp3AmZOMmIe0hjZ6rUSodQdH0QyMJFzdVgjYGG', 0, '', 0, '', '0000-00-00', 1, '2020-07-27 10:30:17', '2020-08-06 05:19:09', 0, 0),
(40, '100529833051623983135', 3, 'Ankur Agrawal', '7894567888', 'ankbiz32@gmail.com', '', 0, '', 0, '', '0000-00-00', 1, '2020-07-31 10:29:16', '2020-07-31 11:37:02', 0, 0),
(41, '104462354514848636575', 3, 'Ankur Agrawal', '8888999977', 'ankur.agr32@gmail.com', '', 0, '', 0, '', '0000-00-00', 1, '2020-07-31 15:41:06', '2020-07-31 19:11:06', 0, 0);

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
  `address` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(20) NOT NULL,
  `modified_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `email`, `aadhaar_license`, `capacity_kart`, `sales_qty_daily`, `source_purchase`, `bank_name`, `holder_name`, `acc_no`, `ifsc_code`, `latitude`, `longitude`, `profile_img`, `location_id`, `address`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(8, 13, '', '', 0, 0, '', '', '', '', '', '', '', 'user.png', 1, '', '2020-07-27 10:23:29', '2020-08-04 11:24:49', '', ''),
(9, 14, '', '', 200, 0, '', '', '', '', '', '', '', '', 1, '', '2020-07-27 10:30:17', '2020-07-27 10:32:49', '', ''),
(21, 40, '', '', 0, 0, '', '', '', '', '', '', '', 'user.png', 0, 'c vfd', '2020-07-31 13:59:16', '2020-07-31 11:37:02', '', ''),
(22, 41, '', '', 0, 0, '', '', '', '', '', '', '', 'user.png', 0, '', '2020-07-31 19:11:06', '2020-07-31 19:11:06', '', '');

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
  `ip_address` varchar(100) NOT NULL,
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
(71, 14, 2, '2020-07-27 10:31:48', NULL, 1, '122168', 0, 0, 0, 0, 0),
(72, 1, 1, '2020-07-29 03:17:59', NULL, 1, '0', 0, 0, 0, 0, 0),
(73, 1, 1, '2020-07-29 04:17:42', NULL, 1, '0', 0, 0, 0, 0, 0),
(74, 1, 1, '2020-08-01 03:33:28', '2020-08-01 07:37:14', 0, '0', 0, 0, 0, 0, 0),
(75, 14, 2, '2020-08-01 03:34:48', NULL, 1, '0', 0, 0, 0, 0, 0),
(76, 1, 1, '2020-08-04 11:22:19', NULL, 1, '0', 0, 0, 0, 0, 0),
(77, 1, 1, '2020-08-05 08:14:05', NULL, 1, '0', 0, 0, 0, 0, 0),
(78, 1, 1, '2020-08-06 03:39:07', NULL, 1, '0', 0, 0, 0, 0, 0),
(79, 14, 2, '2020-08-06 06:17:15', NULL, 1, '0', 0, 0, 0, 0, 0),
(80, 1, 1, '2020-08-07 13:09:46', NULL, 1, '0', 0, 0, 0, 0, 0),
(81, 1, 1, '2020-08-08 15:03:10', NULL, 1, '0', 0, 0, 0, 0, 0),
(82, 1, 1, '2020-08-15 00:59:37', NULL, 1, '0', 0, 0, 0, 0, 0),
(83, 1, 1, '2020-08-31 04:32:35', NULL, 1, '::1', 0, 0, 0, 0, 0),
(84, 1, 1, '2020-08-31 08:42:38', NULL, 1, '::1', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories_master`
--
ALTER TABLE `categories_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_demands`
--
ALTER TABLE `customer_demands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_demand_details`
--
ALTER TABLE `customer_demand_details`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_demands`
--
ALTER TABLE `customer_demands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer_demand_details`
--
ALTER TABLE `customer_demand_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `demand_lists`
--
ALTER TABLE `demand_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `demand_lists_details`
--
ALTER TABLE `demand_lists_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `items_master`
--
ALTER TABLE `items_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `locations_master`
--
ALTER TABLE `locations_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
