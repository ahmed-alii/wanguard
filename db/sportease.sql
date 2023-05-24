-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 08:34 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportease`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(10) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `sport_center_id` int(11) DEFAULT NULL,
  `ground_id` int(11) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `time_slot` text DEFAULT NULL,
  `total_payment` text DEFAULT NULL,
  `receipt` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `customer_id`, `sport_center_id`, `ground_id`, `booking_date`, `time_slot`, `total_payment`, `receipt`, `status`, `created_date`) VALUES
(1, 2, 2, 3, '2023-05-22', '8:00-9:00,9:00-10:00,1:00-2:00', '90', '../uploads/1684760797-hero.png', 1, '2023-05-22 15:06:37'),
(2, 17, 2, 3, '2023-05-22', '10:00-11:00,2:00-3:00', '90', '../uploads/1684761673-hero.png', 0, '2023-05-22 15:21:13'),
(3, 2, 2, 3, '2023-05-22', '10:00-11:00,2:00-3:00', '90', '../uploads/1684761963-hero.png', 0, '2023-05-22 15:26:03'),
(4, 17, 2, 3, '2023-05-23', '8:00-9:00,9:00-10:00,10:00-11:00,11:00-12:00', '90', '../uploads/1684909023-Coursera.png', 0, '2023-05-24 08:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `booking_slots`
--

CREATE TABLE `booking_slots` (
  `id` int(10) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `slot_1` int(2) DEFAULT 0,
  `slot_2` int(2) DEFAULT 0,
  `slot_3` int(2) DEFAULT 0,
  `slot_4` int(2) DEFAULT 0,
  `slot_5` int(11) NOT NULL DEFAULT 0,
  `slot_6` int(11) NOT NULL DEFAULT 0,
  `slot_7` int(11) NOT NULL DEFAULT 0,
  `slot_8` int(11) NOT NULL DEFAULT 0,
  `slot_9` int(11) NOT NULL DEFAULT 0,
  `add_by_user` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_slots`
--

INSERT INTO `booking_slots` (`id`, `booking_date`, `slot_1`, `slot_2`, `slot_3`, `slot_4`, `slot_5`, `slot_6`, `slot_7`, `slot_8`, `slot_9`, `add_by_user`, `created_at`) VALUES
(1, '2023-05-22', 1, 1, 1, 0, 0, 1, 1, 0, 0, 0, '2023-05-22 13:06:37'),
(3, '2023-05-23', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '2023-05-24 06:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `grounds`
--

CREATE TABLE `grounds` (
  `gid` int(11) NOT NULL,
  `sport_center_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `has_a_store` varchar(30) DEFAULT NULL,
  `parking` varchar(30) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `booking_price` double NOT NULL DEFAULT 0,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grounds`
--

INSERT INTO `grounds` (`gid`, `sport_center_id`, `name`, `has_a_store`, `parking`, `photo`, `location`, `description`, `booking_price`, `created_date`) VALUES
(3, 2, 'Testing', 'No', 'Yes', '../uploads/1684749079-testimonial-4.png', 'Lahore', '', 90, '2023-05-22 11:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `lid` int(10) NOT NULL,
  `country` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `city` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `pid` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `pid` int(10) NOT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `coordinates` text DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `gomoso` text DEFAULT NULL,
  `availabilty_gomoso` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player_per_bookings`
--

CREATE TABLE `player_per_bookings` (
  `ppid` int(10) NOT NULL,
  `player_id` varchar(15) DEFAULT NULL,
  `booking_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player_sport_positions`
--

CREATE TABLE `player_sport_positions` (
  `psp_id` int(10) NOT NULL,
  `player_id` varchar(15) DEFAULT NULL,
  `sport_type_position` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sport_centers`
--

CREATE TABLE `sport_centers` (
  `sid` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contact_number` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `coordinates` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `has_a_store` text DEFAULT NULL,
  `parking` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `average_qualif` text DEFAULT NULL,
  `plan` text DEFAULT NULL,
  `reservation_validity` text DEFAULT NULL,
  `account_number` text DEFAULT NULL,
  `account_type` text DEFAULT NULL,
  `ccv` text DEFAULT NULL,
  `available` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sport_centers`
--

INSERT INTO `sport_centers` (`sid`, `user_id`, `contact_number`, `location`, `coordinates`, `name`, `has_a_store`, `parking`, `description`, `average_qualif`, `plan`, `reservation_validity`, `account_number`, `account_type`, `ccv`, `available`, `photo`, `created_date`) VALUES
(2, 18, '22112', 'Lahore2', '112', 'Testing2', 'Yes', 'Yes', 'wd', '1', '1', 'e', '12345', '222', '222', 'Yes', '../uploads/1684746344-logo.png', '2023-05-19 10:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `sport_scenarios`
--

CREATE TABLE `sport_scenarios` (
  `ssid` int(10) NOT NULL,
  `type` text DEFAULT NULL,
  `implements` text DEFAULT NULL,
  `number_of_players` text DEFAULT NULL,
  `dimensions` text DEFAULT NULL,
  `start_unavailable` text DEFAULT NULL,
  `end_unavailable` text DEFAULT NULL,
  `covered` text DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sport_types`
--

CREATE TABLE `sport_types` (
  `tid` int(10) NOT NULL,
  `sport_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sport_type_positions`
--

CREATE TABLE `sport_type_positions` (
  `id` int(10) NOT NULL,
  `sport_type_id` varchar(25) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0 COMMENT '0=user,1=admin',
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,0=block',
  `reset_token` varchar(10) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `phone`, `password`, `status`, `reset_token`, `image_path`, `notes`, `address`, `create_date`, `updated_date`) VALUES
(2, 1, 'Admin', 'admin@gmail.com', '+447222555555', '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, '../uploads/profile/1684733459-dog.jpeg', 'This is testing notes...', 'Lahore, Punjab, Pakistan', '2023-02-07 00:00:00', '2023-05-14 21:45:57'),
(17, 3, 'Usama', 'ur123meo@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', 1, '', NULL, NULL, NULL, '2023-05-19 09:24:20', NULL),
(18, 2, 'Manager', 'test2@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, NULL, NULL, NULL, '2023-05-22 08:39:01', NULL),
(19, 0, 'Usama  Ramzan	', '191370165@gift.edu.pk', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE `users_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0,
  `bank_name` varchar(30) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `transit_number` varchar(50) DEFAULT NULL,
  `account_currency` varchar(50) DEFAULT NULL,
  `account_type` varchar(50) DEFAULT NULL,
  `account_nature` varchar(50) DEFAULT NULL,
  `create_date` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=not active, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`id`, `user_id`, `user_type`, `bank_name`, `account_number`, `account_name`, `branch`, `transit_number`, `account_currency`, `account_type`, `account_nature`, `create_date`, `status`) VALUES
(1, 2, 1, 'ubl', '12345', 'usama', 'lahore', 'r1111', 'USD', 'Saving', 'Individual', '29-04-2023', 1),
(2, 1, 0, 'ubl', '123451', 'ADMIN1', 'lahore', 'r1111', 'USD', 'Chequing', 'Business', '29-04-2023', 0),
(3, 1, 0, 'ubl', '123451', 'testing1', 'lahore', 'r1111', 'USD', 'Chequing', 'Business', '02-05-2023', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `booking_slots`
--
ALTER TABLE `booking_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grounds`
--
ALTER TABLE `grounds`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `player_per_bookings`
--
ALTER TABLE `player_per_bookings`
  ADD PRIMARY KEY (`ppid`);

--
-- Indexes for table `player_sport_positions`
--
ALTER TABLE `player_sport_positions`
  ADD PRIMARY KEY (`psp_id`);

--
-- Indexes for table `sport_centers`
--
ALTER TABLE `sport_centers`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sport_scenarios`
--
ALTER TABLE `sport_scenarios`
  ADD PRIMARY KEY (`ssid`);

--
-- Indexes for table `sport_types`
--
ALTER TABLE `sport_types`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `sport_type_positions`
--
ALTER TABLE `sport_type_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking_slots`
--
ALTER TABLE `booking_slots`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grounds`
--
ALTER TABLE `grounds`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `lid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_per_bookings`
--
ALTER TABLE `player_per_bookings`
  MODIFY `ppid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_sport_positions`
--
ALTER TABLE `player_sport_positions`
  MODIFY `psp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sport_centers`
--
ALTER TABLE `sport_centers`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sport_scenarios`
--
ALTER TABLE `sport_scenarios`
  MODIFY `ssid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sport_types`
--
ALTER TABLE `sport_types`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sport_type_positions`
--
ALTER TABLE `sport_type_positions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users_account`
--
ALTER TABLE `users_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
