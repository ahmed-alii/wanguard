-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 02:13 PM
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
-- Database: `wanguard`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(150) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `location`, `description`, `date`, `time`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Admina', 'Lahorea', 'dda', '2023-05-24', '17:56', 1, '2023-05-24 00:00:00', '2023-05-24 12:02:01'),
(2, 'Admina', 'Lahorea', 'dda', '2023-05-24', '17:56', 1, '2023-05-24 09:39:32', '2023-05-24 12:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `rank` varchar(200) DEFAULT NULL,
  `department` varchar(260) DEFAULT NULL,
  `earning` double NOT NULL DEFAULT 0,
  `youtube_link` text DEFAULT NULL,
  `appointment_link` text DEFAULT NULL,
  `image_path` varchar(200) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `level`, `rank`, `department`, `earning`, `youtube_link`, `appointment_link`, `image_path`, `created_date`, `updated_date`) VALUES
(2, 'Testing', 1, NULL, 'CS', 222, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1684926402-man.png', '2023-05-24 13:06:42', NULL),
(3, 'demo', 2, 'SQA', 'SE', 12, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1684926431-l2.jpeg', '2023-05-24 13:07:11', NULL),
(4, 'Testing', 1, 'Developer', 'SE', 121111, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1684929779-laptop.jpeg', '2023-05-24 14:02:59', NULL);

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
(2, 1, 'Admin', 'admin@gmail.com', '+447222555555', '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, '../uploads/profile/1684921569-man.png', 'This is testing notes...', 'Lahore, Punjab, Pakistan', '2023-02-07 00:00:00', '2023-05-14 21:45:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
