-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 03:34 PM
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
(10, '123', 'Zai', 'Co-workers', 'Mandie &amp; Javi', '030429412', 'email@gmail.com', 'No'),
(11, 'Abc', 'AC', 'Client', 'Jasmine', '123456789', 'we@hmg.com', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `add_md`
--

CREATE TABLE `add_md` (
  `id` int(150) NOT NULL,
  `md` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_md`
--

INSERT INTO `add_md` (`id`, `md`) VALUES
(23, 'MD 1'),
(24, 'MD 2');

-- --------------------------------------------------------

--
-- Table structure for table `add_smd`
--

CREATE TABLE `add_smd` (
  `id` int(150) NOT NULL,
  `add_smd` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_smd`
--

INSERT INTO `add_smd` (`id`, `add_smd`) VALUES
(4, 'SMD 1'),
(6, 'SMD 2');

-- --------------------------------------------------------

--
-- Table structure for table `client_tool`
--

CREATE TABLE `client_tool` (
  `id` int(150) NOT NULL,
  `client_name` varchar(500) DEFAULT NULL,
  `client_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_tool`
--

INSERT INTO `client_tool` (`id`, `client_name`, `client_link`) VALUES
(4, 'sds', 'sdsd'),
(5, 'LTC UG', 'https://www.transamerica.com/sites/default/files/files/e070d/LTC_Rider_Underwriting_Brochure.pdf'),
(7, 'Underwriters Guide TA', 'https://www.transamerica.com/sites/default/files/files/e070d/Field_Guide_to_Underwriting.pdf'),
(8, 'Bank Assests', 'https://www.usbanklocations.com/bank-rank/life-insurance-assets.html'),
(10, 'Everest', 'https://www.youtube.com/watch?v=JRFODdEYwqE&amp;t=42s'),
(11, 'LSPN', 'https://www.lspndirect.com'),
(12, 'Debtmerica', 'https://wfg.debtmerica.com/login'),
(13, 'Global Atlantic', 'https://www.globalatlanticannuity.com/login'),
(14, 'Management Fee', 'https://moneysmart.gov.au/managed-funds-and-etfs/managed-funds-fee-calculator'),
(15, 'Inflation', 'https://www.usinflationcalculator.com'),
(16, 'LB Video', 'https://player.vimeo.com/video/343484433/');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_stats`
--

CREATE TABLE `dashboard_stats` (
  `id` int(11) NOT NULL,
  `lic` varchar(150) DEFAULT NULL,
  `net_lic` varchar(250) DEFAULT NULL,
  `one_300` varchar(150) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard_stats`
--

INSERT INTO `dashboard_stats` (`id`, `lic`, `net_lic`, `one_300`, `status`) VALUES
(1, '23', 'ew', '0', 0);

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
(8, 'The Force SMD Weekly Leadership Zoom', 'MÃ©xico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-06-20', '14:07', 'https://www.google.com/', 1, '2023-06-01 11:04:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lic_name`
--

CREATE TABLE `lic_name` (
  `id` int(150) NOT NULL,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lic_name`
--

INSERT INTO `lic_name` (`id`, `f_name`, `l_name`) VALUES
(1, 'Abc', 'Xyz');

-- --------------------------------------------------------

--
-- Table structure for table `net_lic_name`
--

CREATE TABLE `net_lic_name` (
  `id` int(150) NOT NULL,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `net_lic_name`
--

INSERT INTO `net_lic_name` (`id`, `f_name`, `l_name`) VALUES
(1, 'Net ABC', 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `new-appointment`
--

CREATE TABLE `new-appointment` (
  `id` int(11) NOT NULL,
  `traine_appointment` varchar(150) DEFAULT NULL,
  `appointment_type` varchar(150) DEFAULT NULL,
  `who_seeing` varchar(500) DEFAULT NULL,
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
(15, 'Mandie &amp; Javi', 'Friend', 'Zain', '6789-05-31', 'AZ', 'Yes', 'Friend', 'lorem Text');

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
  `monthly_saving` varchar(500) DEFAULT NULL,
  `estimated_points` varchar(150) DEFAULT NULL,
  `CWA` varchar(150) DEFAULT NULL,
  `writing_agent` varchar(500) DEFAULT NULL,
  `trainee` varchar(150) DEFAULT NULL,
  `split_option` varchar(150) DEFAULT NULL,
  `split_agent` varchar(150) DEFAULT NULL,
  `agent_policy` varchar(150) DEFAULT NULL,
  `product` varchar(150) DEFAULT NULL,
  `provider` varchar(150) DEFAULT NULL,
  `med_required` varchar(150) DEFAULT NULL,
  `contact_no` varchar(150) DEFAULT NULL,
  `email_address` varchar(150) DEFAULT NULL,
  `add_notes` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new-client`
--

INSERT INTO `new-client` (`id`, `f_name`, `l_name`, `policy_name`, `submitted_date`, `coverage`, `monthly_saving`, `estimated_points`, `CWA`, `writing_agent`, `trainee`, `split_option`, `split_agent`, `agent_policy`, `product`, `provider`, `med_required`, `contact_no`, `email_address`, `add_notes`, `status`) VALUES
(10, 'AC', 'CD', '1456789', '275760-03-12', 'AC', '1234', '5678', '1', 'Jasmine', 'Jasmine', 'YES', '0', 'YES', 'Annuity', 'Athene', 'YES', '23456789', 'abc@gmail.com', 'lorem Text', 0);

-- --------------------------------------------------------

--
-- Table structure for table `new-recruit`
--

CREATE TABLE `new-recruit` (
  `id` int(250) NOT NULL,
  `agent_id` varchar(150) DEFAULT NULL,
  `start_date` varchar(150) DEFAULT NULL,
  `f_name` varchar(500) DEFAULT NULL,
  `l_name` varchar(500) DEFAULT NULL,
  `resident_state` varchar(150) DEFAULT NULL,
  `recruiter` varchar(150) DEFAULT NULL,
  `direct_MD` varchar(150) DEFAULT NULL,
  `direct_SMD` varchar(150) DEFAULT NULL,
  `licensed` varchar(150) DEFAULT NULL,
  `contact_no` int(100) DEFAULT NULL,
  `birthdate` varchar(150) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new-recruit`
--

INSERT INTO `new-recruit` (`id`, `agent_id`, `start_date`, `f_name`, `l_name`, `resident_state`, `recruiter`, `direct_MD`, `direct_SMD`, `licensed`, `contact_no`, `birthdate`, `email_address`, `home_address`, `status`) VALUES
(11, 'AC', '275760-03-12', 'DG', 'DF', 'KS', 'NO', 'MD 2', 'SMD 2', 'No', 567890, '275760-03-12', 'abc@gmail.com', 'Garden Town Blvd GUJRANWALA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `next_page_van_video`
--

CREATE TABLE `next_page_van_video` (
  `id` int(150) NOT NULL,
  `video_file` varchar(250) DEFAULT NULL,
  `create_date` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `next_page_van_video`
--

INSERT INTO `next_page_van_video` (`id`, `video_file`, `create_date`) VALUES
(1, '', '2023-08-21 10:15:22'),
(2, '', '2023-08-21 10:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `next_page_w_video`
--

CREATE TABLE `next_page_w_video` (
  `id` int(150) NOT NULL,
  `video_file` varchar(250) DEFAULT NULL,
  `create_date` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `next_page_w_video`
--

INSERT INTO `next_page_w_video` (`id`, `video_file`, `create_date`) VALUES
(1, '../uploads/next_page_w_video/1692604066-30 Second Demo.mp4', '2023-08-21 09:47:46'),
(2, '../uploads/next_page_w_video/1692604188-30 Second Demo.mp4', '2023-08-21 09:49:48'),
(3, '../uploads/next_page_w_video/1692604212-Red and Black Photo-centric Independence Day Instagram Post.jpg', '2023-08-21 09:50:12'),
(4, '../uploads/next_page_w_video/1692604232-30 Second Demo.mp4', '2023-08-21 09:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `one_three`
--

CREATE TABLE `one_three` (
  `id` int(150) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `number` int(150) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `one_three`
--

INSERT INTO `one_three` (`id`, `name`, `number`, `status`) VALUES
(1, '', 0, 0),
(2, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `one_three_name`
--

CREATE TABLE `one_three_name` (
  `id` int(150) NOT NULL,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `one_three_name`
--

INSERT INTO `one_three_name` (`id`, `f_name`, `l_name`) VALUES
(1, 'ABC', 'XYZ'),
(2, '1212', '121212');

-- --------------------------------------------------------

--
-- Table structure for table `recognition_video`
--

CREATE TABLE `recognition_video` (
  `id` int(150) NOT NULL,
  `video_file` varchar(500) DEFAULT NULL,
  `create_date` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recognition_video`
--

INSERT INTO `recognition_video` (`id`, `video_file`, `create_date`) VALUES
(4, '../uploads/video_file_uploads/1690865982-2Recognition 2023-07-31 at 9.08.24 PM.mov', '2023-07-17 11:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_tool`
--

CREATE TABLE `recruitment_tool` (
  `id` int(150) NOT NULL,
  `recruitment_Name` varchar(500) DEFAULT NULL,
  `recruitment_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruitment_tool`
--

INSERT INTO `recruitment_tool` (`id`, `recruitment_Name`, `recruitment_link`) VALUES
(4, 'Demo Button', 'http://vwbagency.com');

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
  `facebook_link` varchar(500) DEFAULT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `youtube_link` varchar(250) DEFAULT NULL,
  `appointment_link` text,
  `image_path` varchar(200) DEFAULT NULL,
  `bio` longtext,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `level`, `rank`, `department`, `earning`, `facebook_link`, `linkedin_link`, `twitter_link`, `instagram_link`, `youtube_link`, `appointment_link`, `image_path`, `bio`, `created_date`, `updated_date`) VALUES
(2, 'MANDIE &amp; JAVI WILLIAMS', 1, 'SENIOR', 'MARKETING DIRECTORS', 100000, 'https://www.youtube.com/', 'https://linkedin.com', NULL, 'https://twitter.com', NULL, 'https://api.leadconnectorhq.com/widget/booking/jQUff2AcULKWSHmnH3kP', '../uploads/1690774212-MJWilliams.png', '<p style=\"text-align: justify;\"><img src=\"http://localhost/wanguard/uploads/1684998724-l2.jpg\" alt=\"\" width=\"300\" height=\"168\" /></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<h2 style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: 26px; line-height: 1; font-family: gilbert, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 18px; -webkit-font-smoothing: antialiased;\">Paragraphs</h2>\r\n<div style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: gilbert, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; color: #ffffff;\">\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>\r\n</div>', '2023-05-24 13:06:42', NULL),
(3, 'JACKIE ADDO NTOW &amp; DOMONIC NTOW', 2, 'SENIOR ASSOCIATE', 'Junior Practice', 1, 'https://www.youtube.com/', '', NULL, '', NULL, 'https://www.youtube.com/', '../uploads/1685610673-img8.png', NULL, '2023-05-24 13:07:11', NULL),
(5, 'Jasmine Crunk &amp; Sean O\'Brien', 3, 'Associate', 'Junior Practice', 50000, 'https://www.facebook.com/Jas.Crunk', 'https://www.facebook.com/Jas.Crunk', NULL, '', NULL, 'https://www.youtube.com/', '../uploads/1690773571-Jasmine Crunk.png', '<p><img src=\"http://localhost/wanguard/uploads/1690773840-158428570_10105742654426292_2538079365854241174_n.jpg\" alt=\"\" /><img src=\"http://localhost/wanguard/uploads/1690773781-RFM_SuccessPlan_StepDiagram_Final.jpg\" alt=\"\" />HI blbjadlf jal jf</p>\r\n<p>a sd</p>\r\n<p>a dfjf lakjf&nbsp;</p>\r\n<p>asdfl\"asfjadjfa</p>\r\n<p>{dfjasdfjlaskf&nbsp;<img src=\"http://localhost/wanguard/uploads/1690773722-Screenshot 2023-05-15 at 11.34.34 PM.png\" alt=\"\" /></p>', '2023-05-29 11:48:00', NULL),
(8, 'Angie Ruvalcaba &amp; Raul Dominique', 3, 'Associate', 'No Practice', 50000, 'https://www.youtube.com/', '', NULL, '', NULL, 'https://www.youtube.com/', '../uploads/1685611192-img8.png', NULL, '2023-06-01 11:19:52', NULL),
(9, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', '', NULL, '', NULL, 'https://www.youtube.com/', '../uploads/1685611212-img7.png', NULL, '2023-06-01 11:20:12', NULL),
(10, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', '', NULL, '', NULL, 'https://www.youtube.com/', '../uploads/1685611251-img8.png', NULL, '2023-06-01 11:20:51', NULL),
(11, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', '', NULL, '', NULL, 'https://www.youtube.com/', '../uploads/1685611270-img2.png', '<p>ghjmasdasasdaDS</p>', '2023-06-01 11:21:10', NULL),
(12, 'Profit Hive Premier', 3, 'Normal', 'lorem text ', 12334, 'https://www.youtube.com/', '', NULL, '', NULL, 'https://www.youtube.com/', '../uploads/1685611302-img5.png', NULL, '2023-06-01 11:21:42', NULL),
(13, 'Karim', 2, 'Exective', 'lorem text ', 323, NULL, 'https://www.youtube.com/', 'https://www.youtube.com/', '', 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1693226187-1.png', NULL, '2023-08-28 14:36:27', NULL),
(14, 'Karim', 2, 'Exective', 'lorem text ', 323, NULL, 'https://www.youtube.com/', 'https://www.youtube.com/', '', 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1693226187-1.png', NULL, '2023-08-28 14:36:27', NULL),
(15, 'Karim', 2, 'Exective', 'lorem text ', 23, NULL, 'https://www.youtube.com/', 'https://www.youtube.com/', '', 'https://www.youtube.com/', 'https://www.youtube.com/', '../uploads/1693226249-1.png', NULL, '2023-08-28 14:37:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainer_images`
--

CREATE TABLE `trainer_images` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `image_path` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_images`
--

INSERT INTO `trainer_images` (`id`, `section_id`, `image_path`, `image_url`, `created_at`) VALUES
(2, 3, '../uploads/section_images/1690713116-Screenshot 2023-07-30 at 3.10.39 PM.png', 'https://123.com', '2023-07-30 10:31:56'),
(3, 3, '../uploads/section_images/1690713180-Screenshot 2023-07-30 at 3.10.39 PM.png', 'https://123.com', '2023-07-30 10:33:00'),
(4, 2, '../uploads/section_images/1690713187-Screenshot 2023-07-30 at 3.10.39 PM.png', 'https://123.com', '2023-07-30 10:33:07'),
(5, 4, '../uploads/section_images/1690743848-1 2023-07-30 at 12.03.36 PM.png', 'https://docs.google.com/presentation/d/1xG44-SWAGNzjGL2zOgWyrwIQoA7w2QcvpaFNIcO4jbs/edit#slide=id.g1324ece89b6_0_73', '2023-07-30 19:04:08'),
(6, 4, '../uploads/section_images/1690745367-Screenshot 2023-07-30 at 12.18.55 PM.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-30 19:29:27'),
(7, 12, '../uploads/section_images/1690753470-Screenshot 2023-07-30 at 2.41.50 PM.png', 'https://player.vimeo.com/video/292221833/', '2023-07-30 21:44:30'),
(8, 15, '../uploads/section_images/1690775724-1 2023-07-30 at 12.03.36 PM.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 03:55:24'),
(9, 9, '../uploads/section_images/1690776201-1 2023-07-30 at 12.03.36 PM.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:03:21'),
(10, 15, '../uploads/section_images/1693228353-1.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:07:33'),
(11, 15, '../uploads/section_images/1693228389-1.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:08:51'),
(12, 15, '../uploads/section_images/1690776761-Screenshot 2023-07-29 at 9.21.17 AM.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:12:41'),
(13, 15, '../uploads/section_images/1690776785-Screenshot 2023-07-29 at 9.21.17 AM.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:13:05'),
(15, 8, '../uploads/section_images/1690881351-1.png', 'https://www.theforceagency.us/', '2023-08-01 09:15:51'),
(16, 15, '../uploads/section_images/1692966114-1.png', 'https://www.google.com/', '2023-08-25 12:21:54'),
(17, 15, '../uploads/section_images/1692966136-1.png', 'https://www.google.com/', '2023-08-25 12:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_sections`
--

CREATE TABLE `trainer_sections` (
  `id` int(11) NOT NULL,
  `main_heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_sections`
--

INSERT INTO `trainer_sections` (`id`, `main_heading`, `sub_heading`, `created_at`) VALUES
(7, 'REFERRAL PARTNERS', ' ', '2023-07-30 20:05:07'),
(8, 'PODCAST/BOOKS', ' ', '2023-07-30 20:07:01'),
(9, 'SPECIAL PRESENTATIONS', ' ', '2023-07-30 20:07:27'),
(11, 'FINANCIAL LITERACY &amp; ENTREPRENEURSHIP ', ' ', '2023-07-30 20:08:16'),
(12, 'PRODUCT TRAINING', ' ', '2023-07-30 20:10:10'),
(13, 'VANGUARD SYSTEM	', 'TRAINING CLASSES	', '2023-07-30 20:10:30'),
(14, 'LEADERSHIP MINDSET', ' ', '2023-07-30 20:10:52'),
(15, 'PRESENTATIONS', ' ', '2023-07-30 20:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `training_featured_btn`
--

CREATE TABLE `training_featured_btn` (
  `id` int(150) NOT NULL,
  `faith` varchar(250) DEFAULT NULL,
  `family` varchar(250) DEFAULT NULL,
  `fitness` varchar(250) DEFAULT NULL,
  `fun` varchar(250) DEFAULT NULL,
  `finance` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_featured_btn`
--

INSERT INTO `training_featured_btn` (`id`, `faith`, `family`, `fitness`, `fun`, `finance`) VALUES
(1, 'https://www.google.com/', 'sdfsd', 'https://www.google.com/', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `training_featured_video`
--

CREATE TABLE `training_featured_video` (
  `id` int(255) NOT NULL,
  `video_file` varchar(150) DEFAULT NULL,
  `create_date` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_featured_video`
--

INSERT INTO `training_featured_video` (`id`, `video_file`, `create_date`) VALUES
(1, '../uploads/featured_video/1692606093-Red and Black Photo-centric Independence Day Instagram Post.jpg', '2023-08-21 10:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `training_images`
--

CREATE TABLE `training_images` (
  `id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `image_path` text,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_images`
--

INSERT INTO `training_images` (`id`, `section_id`, `image_path`, `image_url`, `created_at`) VALUES
(5, 2, '../uploads/training_section_images/1693216677-Screenshot 2023-08-28 115329.png', 'https://www.google.com/', '2023-08-28 09:57:57'),
(6, 11, '../uploads/training_section_images/1693224365-1.png', 'https://www.google.com/', '2023-08-28 12:06:05'),
(7, 11, '../uploads/training_section_images/1693224375-1.png', 'https://www.google.com/', '2023-08-28 12:06:15'),
(8, 10, '../uploads/training_section_images/1693224383-1.png', 'https://www.google.com/', '2023-08-28 12:06:23'),
(9, 9, '../uploads/training_section_images/1693224391-1.png', 'https://www.google.com/', '2023-08-28 12:06:31'),
(10, 8, '../uploads/training_section_images/1693224402-1.png', 'https://www.google.com/', '2023-08-28 12:06:42'),
(11, 7, '../uploads/training_section_images/1693224411-1.png', 'https://www.google.com/', '2023-08-28 12:06:51'),
(12, 6, '../uploads/training_section_images/1693224426-1.png', 'https://www.google.com/', '2023-08-28 12:07:06'),
(13, 5, '../uploads/training_section_images/1693227207-Screenshot 2023-06-09 130640.png', 'https://www.google.com/', '2023-08-28 12:07:16'),
(14, 4, '../uploads/training_section_images/1693224446-1.png', 'https://www.google.com/', '2023-08-28 12:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `training_sections`
--

CREATE TABLE `training_sections` (
  `id` int(150) NOT NULL,
  `main_heading` varchar(250) DEFAULT NULL,
  `sub_heading` varchar(250) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_sections`
--

INSERT INTO `training_sections` (`id`, `main_heading`, `sub_heading`, `create_date`) VALUES
(4, 'PRESENTATIONS', '', '2023-08-28 12:04:15'),
(5, 'LEADERSHIP MINDSET', '', '2023-08-28 12:04:27'),
(6, 'VANGUARD SYSTEM', 'TRAINING CLASSES', '2023-08-28 12:04:47'),
(7, 'PRODUCT TRAINING', '', '2023-08-28 12:05:16'),
(8, 'FINANCIAL LITERACY &amp; ENTREPRENEURSHIP', '', '2023-08-28 12:05:24'),
(9, 'SPECIAL PRESENTATIONS', '', '2023-08-28 12:05:30'),
(10, 'PODCAST/BOOKS', '', '2023-08-28 12:05:36'),
(11, 'REFERRAL PARTNERS', '', '2023-08-28 12:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '0' COMMENT '0=user,1=admin',
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(150) DEFAULT NULL,
  `agent_code` int(150) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `business_patner` varchar(150) DEFAULT NULL,
  `us_states` varchar(150) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `user_type`, `fname`, `lname`, `agent_code`, `email`, `phone`, `business_patner`, `us_states`, `password`, `status`, `reset_token`, `image_path`, `notes`, `address`, `create_date`, `updated_date`) VALUES
(2, 1, 'Admin', NULL, NULL, 'admin@gmail.com', '+447222555555', NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, '../uploads/profile/1685605239-IMG_3335.jpg', 'This is testing notes...', 'Lahore, Punjab, Pakistan', '2023-02-07 00:00:00', '2023-05-29 11:45:40'),
(20, 0, 'Testing', NULL, NULL, 'ur123meo@gmail.com', NULL, NULL, NULL, '202cb962ac59075b964b07152d234b70', 1, '', NULL, NULL, NULL, NULL, NULL),
(23, 0, 'Testing', NULL, NULL, 'thebuilderforyou@gmail.com', NULL, NULL, NULL, 'b59c67bf196a4758191e42f76670ceba', 1, NULL, NULL, NULL, NULL, '2023-05-31 13:05:17', NULL),
(24, 0, 'Mandie &amp; Javi', 'Williams', 66, 'MJWilliams.finance@gmail.com', '7602136240', 'Amelie Babin', 'CA', '6b4f43c1e9ae0a99f661593ef7e3c61d', 1, '', '../uploads/profile/1690757165-MJWilliams.png', NULL, NULL, '2023-07-30 22:46:05', NULL),
(25, 0, 'Jasmine', 'Crunk', 88, 'jasminecrunk.finance@gmail.com', '5756503394', 'Angie Ruvalcaba', 'NM', '75ddd16c378bce6b894e1f197929e687', 1, NULL, '../uploads/profile/1690773587-Jas and Sean.jpg', NULL, NULL, '2023-07-31 03:19:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `welcome_page_settings`
--

CREATE TABLE `welcome_page_settings` (
  `id` int(150) NOT NULL,
  `video_file` varchar(500) DEFAULT NULL,
  `create_date` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome_page_settings`
--

INSERT INTO `welcome_page_settings` (`id`, `video_file`, `create_date`) VALUES
(4, '../uploads/video_file_uploads/1690743512-Final.mp4', '2023-07-17 11:36:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_guest`
--
ALTER TABLE `add_guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_md`
--
ALTER TABLE `add_md`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_smd`
--
ALTER TABLE `add_smd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_tool`
--
ALTER TABLE `client_tool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard_stats`
--
ALTER TABLE `dashboard_stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lic_name`
--
ALTER TABLE `lic_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `net_lic_name`
--
ALTER TABLE `net_lic_name`
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
-- Indexes for table `next_page_van_video`
--
ALTER TABLE `next_page_van_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_page_w_video`
--
ALTER TABLE `next_page_w_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `one_three`
--
ALTER TABLE `one_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `one_three_name`
--
ALTER TABLE `one_three_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recognition_video`
--
ALTER TABLE `recognition_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment_tool`
--
ALTER TABLE `recruitment_tool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer_images`
--
ALTER TABLE `trainer_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer_sections`
--
ALTER TABLE `trainer_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_featured_btn`
--
ALTER TABLE `training_featured_btn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_featured_video`
--
ALTER TABLE `training_featured_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_images`
--
ALTER TABLE `training_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_sections`
--
ALTER TABLE `training_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_page_settings`
--
ALTER TABLE `welcome_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_guest`
--
ALTER TABLE `add_guest`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_md`
--
ALTER TABLE `add_md`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `add_smd`
--
ALTER TABLE `add_smd`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_tool`
--
ALTER TABLE `client_tool`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dashboard_stats`
--
ALTER TABLE `dashboard_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lic_name`
--
ALTER TABLE `lic_name`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `net_lic_name`
--
ALTER TABLE `net_lic_name`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new-appointment`
--
ALTER TABLE `new-appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `new-client`
--
ALTER TABLE `new-client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `new-recruit`
--
ALTER TABLE `new-recruit`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `next_page_van_video`
--
ALTER TABLE `next_page_van_video`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `next_page_w_video`
--
ALTER TABLE `next_page_w_video`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `one_three`
--
ALTER TABLE `one_three`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `one_three_name`
--
ALTER TABLE `one_three_name`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recognition_video`
--
ALTER TABLE `recognition_video`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recruitment_tool`
--
ALTER TABLE `recruitment_tool`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trainer_images`
--
ALTER TABLE `trainer_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `trainer_sections`
--
ALTER TABLE `trainer_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `training_featured_btn`
--
ALTER TABLE `training_featured_btn`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_featured_video`
--
ALTER TABLE `training_featured_video`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_images`
--
ALTER TABLE `training_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `training_sections`
--
ALTER TABLE `training_sections`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `welcome_page_settings`
--
ALTER TABLE `welcome_page_settings`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
