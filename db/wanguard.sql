-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 12:01 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `add_guest`
--

CREATE TABLE `add_guest` (
  `id` int(150) NOT NULL,
  `events` varchar(250) DEFAULT NULL,
  `guest_name` varchar(250) DEFAULT NULL,
  `they_are` varchar(250) DEFAULT NULL,
  `guest_of` varchar(250) DEFAULT NULL,
  `contact_number` varchar(250) DEFAULT NULL,
  `guest_mail` varchar(250) DEFAULT NULL,
  `guest_app_confirm` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_guest`
--

INSERT INTO `add_guest` (`id`, `events`, `guest_name`, `they_are`, `guest_of`, `contact_number`, `guest_mail`, `guest_app_confirm`) VALUES
(1, '1', 'we', 'undefined', '2', 'we', 'email@gmail.com', 'No'),
(2, '1', 'qw', 'undefined', '0', 'qw', 'email@gmail.com', 'No'),
(3, '1', 'we', 'undefined', '1', 'we', 'email@gmail.com', 'No'),
(4, '2', 'qw', 'undefined', '1', 'qw', 'email@gmail.com', 'No'),
(5, '1', 'qw', 'undefined', '1', '12', 'email@gmail.com', 'No'),
(6, '1', 'qw', 'undefined', '2', 'qw', 'email@gmail.com', 'No'),
(7, '1', 'we', '2', '2', 'we', 'email@gmail.com', 'YES');

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
  `event_link` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `location`, `description`, `date`, `time`, `event_link`, `status`, `created_date`, `updated_date`) VALUES
(5, 'Legacy Weekly Training', 'MÃ©xico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2023-06-14', '14:02', 'https://www.google.com/', 1, '2023-06-01 11:01:29', '2023-06-01 11:01:59'),
(6, 'Legacy Weekly Training', 'MÃ©xico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2023-06-21', '14:07', 'https://www.google.com/', 1, '2023-06-01 11:03:17', '0000-00-00 00:00:00'),
(7, 'ALL LEGACY FULL TIMERS - Financial Coaches Only', 'MÃ©xico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-07-05', '14:06', 'https://www.google.com/', 1, '2023-06-01 11:03:52', '0000-00-00 00:00:00'),
(8, 'The Force SMD Weekly Leadership Zoom', 'MÃ©xico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-06-20', '14:07', 'https://www.google.com/', 1, '2023-06-01 11:04:34', '0000-00-00 00:00:00'),
(9, 'ALL LEGACY FULL TIMERS - Financial Coaches Only', 'MÃ©xico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-06-20', '17:34', 'https://www.google.com/', 1, '2023-06-01 14:31:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `new-appointment`
--

CREATE TABLE `new-appointment` (
  `id` int(11) NOT NULL,
  `traine_appointment` varchar(150) DEFAULT NULL,
  `appointment_type` varchar(150) DEFAULT NULL,
  `who_seeing` int(150) DEFAULT NULL,
  `appointment_date` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `match_up` varchar(150) DEFAULT NULL,
  `they_are` varchar(150) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new-appointment`
--

INSERT INTO `new-appointment` (`id`, `traine_appointment`, `appointment_type`, `who_seeing`, `appointment_date`, `time`, `match_up`, `they_are`, `description`) VALUES
(1, '1', '2', 0, '2023-06-09', '1', NULL, NULL, NULL),
(2, '1', '1', 0, '2023-06-01', '1', NULL, NULL, NULL),
(3, '1', '2', 0, '2023-06-05', '2', NULL, '2', ''),
(4, '1', '1', 0, '2023-05-31', '3', NULL, '2', 'lorem text'),
(5, '1', '1', 0, '2023-06-07', '1', 'option2', '1', 'we'),
(6, '0', '0', 0, '', '0', 'Yes', '0', ''),
(7, '0', '0', 0, '', '0', 'Yes', '0', ''),
(8, '0', '0', 0, '', '0', 'Yes', '0', ''),
(9, '0', '0', 0, '', '0', 'Yes', '1', ''),
(10, '0', '0', 0, '', '0', 'Yes', '0', 'q'),
(11, '0', '0', 0, '2023-06-09', '0', 'Yes', '0', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `new-client`
--

CREATE TABLE `new-client` (
  `id` int(11) NOT NULL,
  `f_name` varchar(150) DEFAULT NULL,
  `l_name` varchar(150) DEFAULT NULL,
  `policy_name` varchar(150) DEFAULT NULL,
  `submitted_date` varchar(150) DEFAULT NULL,
  `coverage` varchar(150) DEFAULT NULL,
  `estimated_points` varchar(150) DEFAULT NULL,
  `CWA` varchar(150) DEFAULT NULL,
  `trainee` varchar(150) DEFAULT NULL,
  `split_option` varchar(150) DEFAULT NULL,
  `split_agent` varchar(150) DEFAULT NULL,
  `agent_policy` varchar(150) DEFAULT NULL,
  `product` varchar(150) DEFAULT NULL,
  `provider` varchar(150) DEFAULT NULL,
  `med_required` varchar(150) DEFAULT NULL,
  `contact_no` varchar(150) DEFAULT NULL,
  `email_address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new-client`
--

INSERT INTO `new-client` (`id`, `f_name`, `l_name`, `policy_name`, `submitted_date`, `coverage`, `estimated_points`, `CWA`, `trainee`, `split_option`, `split_agent`, `agent_policy`, `product`, `provider`, `med_required`, `contact_no`, `email_address`) VALUES
(1, '', '', '', '', '', '', '0', '0', 'YES', '0', '0', '0', '0', '0', '', ''),
(2, 'aas', 'as', 'as', '2023-06-14', 'qw', 'qw', '1', '1', 'YES', '1', '1', '1', '1', '1', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `new-recruit`
--

CREATE TABLE `new-recruit` (
  `id` int(250) NOT NULL,
  `agent_id` varchar(150) DEFAULT NULL,
  `start_date` varchar(150) DEFAULT NULL,
  `f_name` text,
  `l-name` text,
  `resident_state` varchar(150) DEFAULT NULL,
  `recruiter` varchar(150) DEFAULT NULL,
  `direct_MD` varchar(150) DEFAULT NULL,
  `direct_SMD` varchar(150) DEFAULT NULL,
  `licensed` varchar(150) DEFAULT NULL,
  `contact_no` int(100) DEFAULT NULL,
  `birthdate` varchar(150) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new-recruit`
--

INSERT INTO `new-recruit` (`id`, `agent_id`, `start_date`, `f_name`, `l-name`, `resident_state`, `recruiter`, `direct_MD`, `direct_SMD`, `licensed`, `contact_no`, `birthdate`, `email_address`) VALUES
(1, '', '', '', '0', '0', '0', '0', 'Yes', '', 0, '', ''),
(2, '12', 'as', 'as', '1', '1', '0', '0', 'Yes', '1212', 2023, '12', '12');

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
  `earning` double NOT NULL DEFAULT '0',
  `youtube_link` text,
  `appointment_link` text,
  `image_path` varchar(200) DEFAULT NULL,
  `bio` longtext,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `level`, `rank`, `department`, `earning`, `youtube_link`, `appointment_link`, `image_path`, `bio`, `created_date`, `updated_date`) VALUES
(2, 'SCHOEN', 1, 'MARKETING EXECTIVE', 'SENIOR ', 22000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685610651-img7.png', '<p style=\"text-align: justify;\"><img src=\"http://localhost/wanguard/uploads/1684998724-l2.jpg\" alt=\"\" width=\"300\" height=\"168\" /></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<h2 style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: 26px; line-height: 1; font-family: gilbert, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 18px; -webkit-font-smoothing: antialiased;\">Paragraphs</h2>\r\n<div style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: gilbert, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; color: #ffffff;\">\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>\r\n</div>', '2023-05-24 13:06:42', NULL),
(3, 'SCHOEN', 1, 'MARKETING EXECTIVE', 'SENIOR ', 12000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685610673-img8.png', NULL, '2023-05-24 13:07:11', NULL),
(4, 'SCHOEN', 1, 'MARKETING DIRECTORS', 'SENIOR ', 15000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685610683-img4.png', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://localhost/wanguard/uploads/1684998624-man.png\" alt=\"\" width=\"207\" height=\"187\" /></p>\r\n<h2 style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: 26px; line-height: 1; font-family: gilbert, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 18px; -webkit-font-smoothing: antialiased;\">Paragraphs</h2>\r\n<div style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: gilbert, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; color: #ffffff;\">\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>\r\n</div>\r\n<p>&nbsp;</p>', '2023-05-24 14:02:59', NULL),
(5, 'aa', 3, 'Developera', 'SE', 24, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685610631-img1.png', NULL, '2023-05-29 11:48:00', NULL),
(6, 'Profit Hive Premier', 2, 'Exective', 'SENIOR', 20000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685611078-img8.png', NULL, '2023-06-01 11:17:58', NULL),
(7, 'Nora', 2, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685611151-img3.png', NULL, '2023-06-01 11:19:11', NULL),
(8, 'Sindy', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685611192-img8.png', NULL, '2023-06-01 11:19:52', NULL),
(9, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685611212-img7.png', NULL, '2023-06-01 11:20:12', NULL),
(10, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685611251-img8.png', NULL, '2023-06-01 11:20:51', NULL),
(11, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685611270-img2.png', NULL, '2023-06-01 11:21:10', NULL),
(12, 'Profit Hive Premier', 3, 'Normal', 'lorem text ', 12334, 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1685611302-img5.png', NULL, '2023-06-01 11:21:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '0' COMMENT '0=user,1=admin',
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '1=active,0=block',
  `reset_token` varchar(10) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `notes` text,
  `address` text,
  `create_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `phone`, `password`, `status`, `reset_token`, `image_path`, `notes`, `address`, `create_date`, `updated_date`) VALUES
(2, 1, 'Admin', 'admin@gmail.com', '+447222555555', '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, '../uploads/profile/1685605239-IMG_3335.jpg', 'This is testing notes...', 'Lahore, Punjab, Pakistan', '2023-02-07 00:00:00', '2023-05-29 11:45:40'),
(20, 0, 'Testing', 'ur123meo@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', 0, '', NULL, NULL, NULL, NULL, NULL),
(23, 0, 'Testing', 'thebuilderforyou@gmail.com', NULL, 'b59c67bf196a4758191e42f76670ceba', 1, NULL, NULL, NULL, NULL, '2023-05-31 13:05:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_guest`
--
ALTER TABLE `add_guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new-appointment`
--
ALTER TABLE `new-appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new-client`
--
ALTER TABLE `new-client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new-recruit`
--
ALTER TABLE `new-recruit`
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
-- AUTO_INCREMENT for table `add_guest`
--
ALTER TABLE `add_guest`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `new-appointment`
--
ALTER TABLE `new-appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `new-client`
--
ALTER TABLE `new-client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new-recruit`
--
ALTER TABLE `new-recruit`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
