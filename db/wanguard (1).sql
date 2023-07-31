-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 05:00 PM
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
(7, '1', 'we', '2', '2', 'we', 'email@gmail.com', 'YES'),
(8, 'wewe', 'wewe', '5', '3', 'we', 'we@hmg.com', 'No');

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
(10, 'sd'),
(13, 'reer'),
(15, 'reer'),
(17, 'we'),
(19, 'sd');

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
(1, 'akjshkasd'),
(3, 'as,nlaksd');

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
(1, '2', 'cvgb', 'bxfcg', 1);

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
(1, '', '', '', '', '', NULL, '', '0', NULL, '0', 'YES', '0', '0', '0', '0', '0', '', '', NULL, 0),
(2, 'aas', 'as', 'as', '2023-06-14', 'qw', NULL, 'qw', '1', NULL, '1', 'YES', '1', '1', '1', '1', '1', 'a', 'a', NULL, 0),
(3, 'Zain', 'Hassan', '45544', '5655-06-05', '12', '211212', 'qw', '1', NULL, '1', 'NO', '1', 'NO', 'IUL w/LTC', 'Nationwide', '1', '0300000000000', 'abc@gmail.com', NULL, 0),
(4, 'sds', 'sds', 'sdsd', '2023-07-10', 'sd', '3', '23', '1', NULL, '0', 'YES', '0', 'YES', 'Annuity', 'Athene', 'YES', 'sds', 'abc@gmail.com', 'asa', 0),
(5, 'asasajhadlg', 'jsd;lhcskjdhcj', 'ksndjcskjdch', '4894-08-31', 'sdljhskdjh', '893274897328', '83248738', '1', '', '', 'NO', '1', 'NO', 'IUL', 'Nationwide', 'NO', '2i3y7iy32iu32yu', 'abc@gmail.com', 'nnbsdfbaskljdhlksdhkjsdhfksdhfkdsjhfdsj', 0),
(6, 'nhgwshg', 'nhgnhg', 'nhmjgmhm', '7867-06-07', 'hvnbvn', '657567', '765766', '1', '', '', 'NO', '0', 'YES', 'Annuity', 'Athene', 'YES', '456789', 'abc@gmail.com', 'dfghjkl', 0),
(7, 'wer', 're', 'we', '6789-05-24', 'sdljhskdjh', '234', '32', '0', 'Jasmine', 'Jasmine', 'NO', '0', 'YES', 'Annuity', 'Athene', 'YES', '2345', '12345', 'adsfg', 0),
(8, 'wer', 're', 'we', '6789-05-24', 'sdljhskdjh', '234', '32', '0', 'Jasmine', 'Jasmine', 'NO', '0', 'YES', 'Annuity', 'Athene', 'YES', '2345', 'abc@gmail.com', 'adsfg', 0),
(9, 'asdfg', 'sadfgh', '123456', '4567-03-12', 'sadf', '2345', '212345', '1', 'Jasmine', 'Testing', 'YES', '0', 'YES', 'Annuity', 'Athene', 'YES', '234', 'abc@gmail.com', 'ashj', 0);

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
  `email_address` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new-recruit`
--

INSERT INTO `new-recruit` (`id`, `agent_id`, `start_date`, `f_name`, `l-name`, `resident_state`, `recruiter`, `direct_MD`, `direct_SMD`, `licensed`, `contact_no`, `birthdate`, `email_address`, `status`) VALUES
(1, '', '', '', '0', '0', '0', '0', 'Yes', '', 0, '', '', 0),
(2, '12', 'as', 'as', '1', '1', '0', '0', 'Yes', '1212', 2023, '12', '12', 0),
(3, 'ded', 'h', 'h', 'undefined', '0', '0', '0', 'Yes', 'h', 765, 'h', 'h', 0),
(4, '2', 'we', '2', 'undefined', '0', 'sd', 'akjshkasd', 'Yes', 'e', 243112, 'abc@gmail.com2', '212', 1);

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
(4, '../uploads/video_file_uploads/1690743450-Final.mp4', '2023-07-17 11:36:14');

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
(4, 'sdsd', 'sdsd');

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
  `linkedin_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `appointment_link` text,
  `image_path` varchar(200) DEFAULT NULL,
  `bio` longtext,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `level`, `rank`, `department`, `earning`, `youtube_link`, `linkedin_link`, `twitter_link`, `appointment_link`, `image_path`, `bio`, `created_date`, `updated_date`) VALUES
(2, 'MANDIE &amp; JAVI WILLIAMS', 1, 'SENIOR', 'MARKETING DIRECTORS', 100000, 'https://www.youtube.com/', 'https://linkedin.com', 'https://twitter.com', 'https://api.leadconnectorhq.com/widget/booking/jQUff2AcULKWSHmnH3kP', '../uploads/1690774212-MJWilliams.png', '<p style=\"text-align: justify;\"><img src=\"http://localhost/wanguard/uploads/1684998724-l2.jpg\" alt=\"\" width=\"300\" height=\"168\" /></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<h2 style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: 26px; line-height: 1; font-family: gilbert, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 18px; -webkit-font-smoothing: antialiased;\">Paragraphs</h2>\r\n<div style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: gilbert, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; color: #ffffff;\">\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>\r\n<p style=\"border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 18px; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin: 0px; padding: 0px 0px 14px; -webkit-font-smoothing: antialiased; color: #000000;\">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>\r\n</div>', '2023-05-24 13:06:42', NULL),
(3, 'JACKIE ADDO NTOW &amp; DOMONIC NTOW', 2, 'SENIOR ASSOCIATE', 'Junior Practice', 1, 'https://www.youtube.com/', '', '', 'https://www.youtube.com/', '../uploads/1685610673-img8.png', NULL, '2023-05-24 13:07:11', NULL),
(5, 'Jasmine Crunk &amp; Sean O\'Brien', 3, 'Associate', 'Junior Practice', 50000, 'https://www.facebook.com/Jas.Crunk', 'https://www.facebook.com/Jas.Crunk', '', 'https://www.youtube.com/', '../uploads/1690773571-Jasmine Crunk.png', '<p><img src=\"http://localhost/wanguard/uploads/1690773840-158428570_10105742654426292_2538079365854241174_n.jpg\" alt=\"\" /><img src=\"http://localhost/wanguard/uploads/1690773781-RFM_SuccessPlan_StepDiagram_Final.jpg\" alt=\"\" />HI blbjadlf jal jf</p>\r\n<p>a sd</p>\r\n<p>a dfjf lakjf&nbsp;</p>\r\n<p>asdfl\"asfjadjfa</p>\r\n<p>{dfjasdfjlaskf&nbsp;<img src=\"http://localhost/wanguard/uploads/1690773722-Screenshot 2023-05-15 at 11.34.34 PM.png\" alt=\"\" /></p>', '2023-05-29 11:48:00', NULL),
(8, 'Angie Ruvalcaba &amp; Raul Dominique', 3, 'Associate', 'No Practice', 50000, 'https://www.youtube.com/', '', '', 'https://www.youtube.com/', '../uploads/1685611192-img8.png', NULL, '2023-06-01 11:19:52', NULL),
(9, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', '', '', 'https://www.youtube.com/', '../uploads/1685611212-img7.png', NULL, '2023-06-01 11:20:12', NULL),
(10, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', '', '', 'https://www.youtube.com/', '../uploads/1685611251-img8.png', NULL, '2023-06-01 11:20:51', NULL),
(11, 'Karim', 3, 'Exective', 'lorem text ', 45000, 'https://www.youtube.com/', '', '', 'https://www.youtube.com/', '../uploads/1685611270-img2.png', NULL, '2023-06-01 11:21:10', NULL),
(12, 'Profit Hive Premier', 3, 'Normal', 'lorem text ', 12334, 'https://www.youtube.com/', '', '', 'https://www.youtube.com/', '../uploads/1685611302-img5.png', NULL, '2023-06-01 11:21:42', NULL);

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
(10, 15, '../uploads/section_images/1690776452-1 2023-07-30 at 12.03.36 PM.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:07:33'),
(11, 15, '../uploads/section_images/1690776531-1.pdf', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:08:51'),
(12, 15, '../uploads/section_images/1690776761-Screenshot 2023-07-29 at 9.21.17 AM.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:12:41'),
(13, 15, '../uploads/section_images/1690776785-Screenshot 2023-07-29 at 9.21.17 AM.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:13:05'),
(14, 15, '../uploads/section_images/1690777371-Step 1.png', 'https://docs.google.com/presentation/d/1qTBl_8MYKavzvYn2Mw1GznEspZWSDQIULFoNMR_XlK8/edit#slide=id.p1', '2023-07-31 04:22:51');

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
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_md`
--
ALTER TABLE `add_md`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `add_smd`
--
ALTER TABLE `add_smd`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `new-appointment`
--
ALTER TABLE `new-appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `new-client`
--
ALTER TABLE `new-client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `new-recruit`
--
ALTER TABLE `new-recruit`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trainer_images`
--
ALTER TABLE `trainer_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trainer_sections`
--
ALTER TABLE `trainer_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
