-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 08:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u355669643_ballamguri`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(20) NOT NULL,
  `head` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `head`, `title`, `image`, `description`, `date_uploaded`) VALUES
(6, '	Industrial Training Institue (ITI)	', 'Balamguri', 'images/about/b278590f55b74806846ede317785cd22abo.jpg', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Industrial Training Institute Ballamguri was constructed under MSDP and handed over to the Skill Employment Entrepreneurship Department, BTC for establishment of ITI. Accordingly, Governor of Assam notified the establishment of Industrial Training Institute Ballamguri Vide Notification no. SKI.158/2019/249 Dated Dispur the 10th January, 2022.</span></span></p>', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(224) NOT NULL,
  `username` varchar(244) NOT NULL,
  `email` varchar(224) NOT NULL,
  `password` varchar(224) NOT NULL,
  `user_type` varchar(224) NOT NULL,
  `status` varchar(224) NOT NULL DEFAULT '1' COMMENT 'active',
  `date_uploaded` date NOT NULL,
  `time_uploaded` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `user_type`, `status`, `date_uploaded`, `time_uploaded`) VALUES
(1, 'admin', 'itiadmin@gmail', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'admin', '1', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `administrative_details`
--

CREATE TABLE `administrative_details` (
  `administrative_id` int(100) NOT NULL,
  `staff_name` varchar(120) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `designation` varchar(120) NOT NULL,
  `date_of_joining` date NOT NULL,
  `image` text NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrative_details`
--

INSERT INTO `administrative_details` (`administrative_id`, `staff_name`, `qualification`, `designation`, `date_of_joining`, `image`, `status`) VALUES
(8, '	Pamye Brahma', '	B.A. + ITI passed', 'Jr. Assistant', '2022-12-01', 'images/administrative/776b479493b6d3820345d0a9c9676718ad2.jpg', '1'),
(9, '	Pulen Daimary', 'B. Tech in Mechanical Engineering', '	Superintendent', '2022-12-01', 'images/administrative/5313716e0052e1987dd3fb51150ac422ad1.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_details`
--

CREATE TABLE `admin_login_details` (
  `id` int(224) NOT NULL,
  `admin_id` varchar(224) NOT NULL,
  `os` varchar(225) NOT NULL,
  `browser` varchar(224) NOT NULL,
  `ip` text NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login_details`
--

INSERT INTO `admin_login_details` (`id`, `admin_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES
(1, '', 'Windows 10', 'Firefox', '127.0.0.1', '2023-06-20', '12:38:38'),
(2, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-06-20', '12:51:32'),
(3, '1', 'Windows 10', 'Chrome', '::1', '2023-06-22', '15:04:00'),
(4, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-06-22', '16:52:16'),
(5, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-06-23', '11:23:13'),
(6, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-07-05', '11:07:36'),
(7, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-07-08', '12:55:58'),
(8, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-07-10', '12:37:12'),
(9, '1', 'Windows 7', 'Firefox', '127.0.0.1', '2023-07-14', '00:53:29'),
(10, '1', 'Windows 7', 'Firefox', '127.0.0.1', '2023-07-14', '10:06:21'),
(11, '1', 'Windows 10', 'Chrome', '103.199.202.23', '2023-07-15', '01:41:43'),
(12, '1', 'Windows 10', 'Chrome', '103.199.202.199', '2023-07-15', '11:00:21'),
(13, '1', 'Android', 'Handheld Browser', '2401:4900:3a88:322b:a7e5:ffe6:c34:2186', '2023-07-26', '13:11:12'),
(14, '1', 'Windows 10', 'Chrome', '2409:40e6:13:183c:b837:a4c6:3c18:f434', '2023-08-08', '14:08:01'),
(15, '1', 'Windows 10', 'Chrome', '223.229.194.234', '2023-08-15', '12:15:15'),
(16, '1', 'Windows 10', 'Chrome', '103.199.202.183', '2023-08-26', '16:31:26'),
(17, '1', 'Windows 10', 'Firefox', '103.199.202.200', '2023-09-21', '14:11:22'),
(18, '1', 'Windows 10', 'Chrome', '::1', '2024-05-25', '10:55:18'),
(19, '1', 'Windows 10', 'Chrome', '::1', '2024-05-27', '10:40:54'),
(20, '1', 'Windows 10', 'Chrome', '::1', '2024-05-28', '10:55:16'),
(21, '1', 'Windows 10', 'Chrome', '::1', '2024-05-29', '10:51:47'),
(22, '1', 'Windows 10', 'Chrome', '::1', '2024-05-30', '10:55:03'),
(23, '1', 'Windows 10', 'Chrome', '::1', '2024-06-01', '10:23:06'),
(24, '1', 'Windows 10', 'Chrome', '::1', '2024-06-15', '16:30:33'),
(25, '1', 'Windows 10', 'Chrome', '::1', '2024-06-19', '13:32:23'),
(26, '1', 'Windows 10', 'Chrome', '::1', '2024-06-19', '13:34:02'),
(27, '1', 'Windows 10', 'Chrome', '::1', '2024-06-20', '11:06:26'),
(28, '1', 'Windows 10', 'Chrome', '::1', '2024-06-24', '15:36:35'),
(29, '1', 'Windows 10', 'Chrome', '::1', '2024-06-29', '10:54:01'),
(30, '1', 'Windows 10', 'Chrome', '::1', '2024-06-29', '10:55:02'),
(31, '1', 'Windows 10', 'Chrome', '::1', '2024-06-29', '10:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `area_infrastructure`
--

CREATE TABLE `area_infrastructure` (
  `id` int(20) NOT NULL,
  `image` text NOT NULL,
  `TotalArea` varchar(200) NOT NULL,
  `CoveredArea` varchar(200) NOT NULL,
  `TotalClassRoomsArea` varchar(110) NOT NULL,
  `TotalWorkshopsArea` varchar(110) NOT NULL,
  `DrawingHall` varchar(110) NOT NULL,
  `AudioVisualHall` varchar(110) NOT NULL,
  `ComputerLab` varchar(110) NOT NULL,
  `Library` varchar(110) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `area_infrastructure`
--

INSERT INTO `area_infrastructure` (`id`, `image`, `TotalArea`, `CoveredArea`, `TotalClassRoomsArea`, `TotalWorkshopsArea`, `DrawingHall`, `AudioVisualHall`, `ComputerLab`, `Library`, `date_uploaded`) VALUES
(9, 'images/areaInfrastructure/ae9c4a161a465df8c4b10a25d2f7c3bbabo.jpg', '	2620.77', '	2620.77', '	50', '	522', '	50', '	100', '	246', '	50', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `attendence_instructors_details`
--

CREATE TABLE `attendence_instructors_details` (
  `attendence_InstructorID` int(12) NOT NULL,
  `instructor_name` varchar(123) NOT NULL,
  `attendence_month` varchar(112) NOT NULL,
  `percentage` varchar(112) DEFAULT NULL,
  `status` varchar(12) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendence_trainee_details`
--

CREATE TABLE `attendence_trainee_details` (
  `attendence_traineeID` int(12) NOT NULL,
  `trainee_name` varchar(123) NOT NULL,
  `trade` varchar(112) NOT NULL,
  `attendance_month` varchar(112) NOT NULL,
  `percentage` varchar(111) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(224) NOT NULL,
  `image` varchar(224) NOT NULL,
  `head` varchar(224) NOT NULL,
  `title` varchar(224) NOT NULL,
  `description` text NOT NULL,
  `course_fee` varchar(224) NOT NULL,
  `eligibility` text NOT NULL,
  `seat_availability` varchar(224) NOT NULL,
  `duration` varchar(224) NOT NULL,
  `status` int(224) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `electric_power_supply`
--

CREATE TABLE `electric_power_supply` (
  `id` int(224) NOT NULL,
  `electric_load` varchar(100) NOT NULL,
  `Date_of_Connection` date NOT NULL,
  `Connection_name` varchar(224) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electric_power_supply`
--

INSERT INTO `electric_power_supply` (`id`, `electric_load`, `Date_of_Connection`, `Connection_name`, `image`) VALUES
(4, '	80', '2015-02-07', '	Indutrial Training Institute Ballamguri', 'images/electricPowerSupply/46d9f939f6155b0eb352aac384375367abo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(224) NOT NULL,
  `image` varchar(224) NOT NULL,
  `head` varchar(224) NOT NULL,
  `title` varchar(224) NOT NULL,
  `description` text NOT NULL,
  `venue` varchar(224) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `head`, `title`, `description`, `venue`, `date_uploaded`) VALUES
(12, 'images/events/7e40a96addcd7a8a41d09140c35a6c9ceventfitter.jpg', 'Skill Development Thrives in Kokrajhar', 'By AT Kokrajhar Bureau | Tuesday, May 23, 2023 (06:05 pm)', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Kokrajhar: 23rd May, 2023-The event, organised by the Skill, Employment, and Entrepreneurship Department (SEED), was held on May 23, 2023, at the Auditorium Hall of Industrial Training Institute (ITI) Kokrajhar.</span></span></p>', '<p>Baksa</p>', '2024-06-12'),
(13, 'images/events/3f24562a4d36570cc96a8c692519aae1eventprogg.jpg', 'Inauguration of Ballamguri ITI', 'By AIR News Guwahati', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">BTR Chief Executive Member Pramod Boro inaugurated the Ballamguri ITI Centre in Gossaigaon subdivision of Kokrajhar district constructed under MSDP Fund.</span></span></p>', '<p>Ballamguri,</p><p>Gossaigaon</p>', '2024-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `faculty_id` int(120) NOT NULL,
  `full_name` varchar(120) NOT NULL,
  `designation` varchar(120) NOT NULL,
  `qualification` varchar(120) NOT NULL,
  `trade` varchar(120) NOT NULL,
  `date_of_joining` date NOT NULL,
  `post` varchar(120) NOT NULL,
  `CTI_trained` varchar(120) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(120) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`faculty_id`, `full_name`, `designation`, `qualification`, `trade`, `date_of_joining`, `post`, `CTI_trained`, `image`, `status`) VALUES
(20, 'Doly Basumatary', '	Jr. Instructor', '	B. Tech in Civil Engineering', '	Mason', '2023-03-01', 'Contractual', 'no', 'images/faculties/91a6e8b0e89b5c204a20287f18e8340df1.jpg', '1'),
(21, '	Fwshabsri Brahma', '	Jr. Instructor', '	B. Tech in Electrical & Electronic Engineering', '	ELECTRICIAN', '2022-12-01', 'Contractual', 'no', 'images/faculties/d8f389b38718a1fc32fc51519b7a0f13f2.jpg', '1'),
(22, '	Deveshananda Brahma', 'Jr. Instructor', 'ITI (Fitter) + 1 year Apprenticeship training passed', '	Fitter', '2022-01-12', 'Contractual', 'no', 'images/faculties/4059f23a25424b27620955312d1a7dbaf3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `newsupdates`
--

CREATE TABLE `newsupdates` (
  `id` int(224) NOT NULL,
  `news` varchar(224) NOT NULL,
  `description` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsupdates`
--

INSERT INTO `newsupdates` (`id`, `news`, `description`, `date_uploaded`) VALUES
(9, 'Admission 2023', '<p><a class=\"text-primary fw-bold\" style=\"--bs-text-opacity:1;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgba(var(--bs-primary-rgb),var(--bs-text-opacity)) !important;font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:700 !important;letter-spacing:normal;orphans:2;text-align:start;text-decoration:none;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" href=\"https://seedbtr.com/craftmanship/iti_bhergaon/admin/view_news.php#\">New admission for session 2023</a></p>', '2024-06-11'),
(10, 'exam notice', '<p><a class=\"text-primary fw-bold\" style=\"--bs-text-opacity:1;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgba(var(--bs-primary-rgb),var(--bs-text-opacity)) !important;font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:700 !important;letter-spacing:normal;orphans:2;text-align:start;text-decoration:none;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" href=\"https://seedbtr.com/craftmanship/iti_bhergaon/admin/view_news.php#\">download exam notice</a></p>', '2024-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(20) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `description`, `date_uploaded`) VALUES
(7, 'ITI', '<p><a style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(46, 46, 46);font-family:Poppins, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:normal;orphans:2;outline:0px;padding:10px 0px;text-align:left;text-decoration:none;text-indent:0px;text-transform:none;transition:all 0.3s ease 0s;white-space:normal;widows:2;word-spacing:0px;\" href=\"https://seedbtr.com/craftmanship/iti_mazbat/index.php#\">ITI website launched</a></p>', '2024-06-12'),
(8, 'Trades ', '<p><a style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(46, 46, 46);font-family:Poppins, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:300;letter-spacing:normal;orphans:2;outline:0px;padding:10px 0px;text-align:left;text-decoration:none;text-indent:0px;text-transform:none;transition:all 0.3s ease 0s;white-space:normal;widows:2;word-spacing:0px;\" href=\"https://seedbtr.com/craftmanship/iti_mazbat/index.php#\">Various new trades available</a></p>', '2024-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(224) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `trade` varchar(252) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `description`, `trade`, `date_uploaded`) VALUES
(40, 'images/photos/ff01653bed436039911f99ee2ef0fe28ts1.jpg', '', '	Associate Electrician', '2024-06-13'),
(41, 'images/photos/e3045fd369c4314125f71b9dc27661aats3.jpg', '', '	Associate Mason', '2024-06-13'),
(42, 'images/photos/3adb985cd9e07ac54818e7acc1de565ctspes1.jpg', '', 'Mason Tiling', '2024-06-13'),
(43, 'images/photos/79a182a73fdba61296d298a8acb833c6abo.jpg', '', 'Self Employed Tailor', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(224) NOT NULL,
  `image` varchar(224) NOT NULL,
  `head` text NOT NULL,
  `title` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `head`, `title`, `date_uploaded`) VALUES
(10, 'images/index/09d2bc6eeda2d4e8c81a2dbaeb79be8ds1.png', 'ITI Ballamguri', '	Enhancing the employability of our youth through employment services and systematic skill training.', '2024-06-13'),
(11, 'images/index/544b1d17448a486e2ce2fcaa16346001s2.png', 'Ballamguri, Gossaigaon', 'To provide semi-skilled/skilled workers to industry by systematic training.', '2024-06-13'),
(12, 'images/index/826839323afd647f9b124742b0b27996iti balamguri2.png', 'ITI Ballamguri', 'To reduce unemployment among educated youths by equipping them with suitable skills for industrial employment and self-employment.', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` int(20) NOT NULL,
  `trade_name` varchar(100) DEFAULT NULL,
  `duration` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `scheme` varchar(200) NOT NULL,
  `certificate` varchar(200) NOT NULL,
  `eligibility` varchar(220) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `trade_name`, `duration`, `description`, `image`, `scheme`, `certificate`, `eligibility`, `status`) VALUES
(60, '	Associate Mason', '210hrs', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">total seat 90</span></span></p>', 'images/trades/3943b1831c838f93a924a02af7be5519ts1.jpg', 'PMKVY 4.0', ' ', '	By percentage of Marks in qualifying Exam and as per reservation policy of Govt.', 1),
(61, '	Associate Electrician', '	210hrs', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">total seat 120</span></span></p>', 'images/trades/9201804dc719a67b486f092db0e8d1f7ts2.jpg', 'PMKVY 4.0', '  ', '	By percentage of Marks in qualifying Exam and as per reservation policy of Govt.', 1),
(62, 'Bar Bender & Steel Fixer', '450hrs', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">total seat 60</span></span></p>', 'images/trades/5145ec2f44e6a85cfaea2658f58d0931ts3.jpg', 'PMKVY 4.0', '  ', '	By percentage of Marks in qualifying Exam and as per reservation policy of Govt.', 1),
(63, 'Mason Tiling', '450 hrs', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">total seat 60</span></span></p>', 'images/trades/a660dad8d96ac7ad6ad06f03f8b4cf22t4.png', 'PMKVY 4.0', 'not mentioned', 'By percentage of Marks in qualifying Exam and as per reservation policy of Govt.		', 1),
(64, 'Self Employed Tailor', '	420 hrs', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">total seat 60</span></span></p>', 'images/trades/540e1041f1ff892d6833e53584d72391ts5.png', 'PMKVY 4.0', '  ', 'By percentage of Marks in qualifying Exam and as per reservation policy of Govt.', 1),
(65, '	Mason', '1 yr Course', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">total seat 24</span></span></p>', 'images/trades/f7f245c5451fffc76bd9cdbcda1b5686ts6.jpg', 'Craftsmen Training Scheme(CTS)', 'SCVT(State Council for Vocational Training)', 'By percentage of Marks in qualifying Exam and as per reservation policy of Govt.', 1),
(66, '	ELECTRICIAN', '	2 years', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">total seat 40</span></span></p>', 'images/trades/454121e1df0b891a2e72260535b05258ts7.jpg', 'Craftsmen Training Scheme(CTS)', 'SCVT(State Council for Vocational Training)', 'By percentage of Marks in qualifying Exam and as per reservation policy of Govt.', 1),
(67, '	Fitter', '	2 Years', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:&quot;Open Sans&quot;, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">total seat 40</span></span></p>', 'images/trades/24a9dd1de7ffad74980678e06cbacd68ts8.jpg', 'Craftsmen Training Scheme(CTS)', 'SCVT(State Council for Vocational Training)', 'By percentage of Marks in qualifying Exam and as per reservation policy of Govt.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tradescheme`
--

CREATE TABLE `tradescheme` (
  `id` int(20) NOT NULL,
  `scheme` varchar(200) NOT NULL,
  `certificate` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `total_seats` int(22) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tradescheme`
--

INSERT INTO `tradescheme` (`id`, `scheme`, `certificate`, `image`, `total_seats`, `status`) VALUES
(12, 'PMKVY 4.0', 'SCVT(State Council for Vocational Training)', 'images/schemes/c80608edd2f44986d7a12ba4303d7507t1.jpg', 390, 1),
(13, 'Craftsmen Training Scheme(CTS)', 'NCVT(National Council for Vocational Training)', 'images/schemes/92ff416204af0148c3b638f2fd207a75t2.jpg', 104, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trade_infrastructure`
--

CREATE TABLE `trade_infrastructure` (
  `id` int(20) NOT NULL,
  `Trade` varchar(100) NOT NULL,
  `Unit` varchar(100) NOT NULL,
  `ClassRoomArea` varchar(200) NOT NULL,
  `TotalClassRoom` varchar(200) NOT NULL,
  `WorkshopArea` varchar(200) NOT NULL,
  `Total_WorkshopArea` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trade_infrastructure`
--

INSERT INTO `trade_infrastructure` (`id`, `Trade`, `Unit`, `ClassRoomArea`, `TotalClassRoom`, `WorkshopArea`, `Total_WorkshopArea`, `image`, `date_uploaded`) VALUES
(4, '	Mason', 'I', '	50', '	50', '	100', '	100', '', '2024-06-13'),
(5, '	Fitter', 'II', '	50', '100', '100', '100', 'images/tradeInfrastructure/f29fb55163809a43ed673efc8d7f5fabtspes2.jpg', '2024-06-13'),
(6, '	ELECTRICIAN', 'II', '	50', '	100', '	100', '	100', 'images/tradeInfrastructure/34fda0fe7a9f5b49284df1a0c33d8d81tspes1.jpg', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_details`
--

CREATE TABLE `trainee_details` (
  `trainee_id` int(20) NOT NULL,
  `full_name` varchar(40) DEFAULT NULL,
  `father_name` varchar(40) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `caste` varchar(20) DEFAULT NULL,
  `trade` varchar(50) DEFAULT NULL,
  `shift` varchar(10) DEFAULT NULL,
  `course_session` varchar(20) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainee_details`
--

INSERT INTO `trainee_details` (`trainee_id`, `full_name`, `father_name`, `dob`, `gender`, `caste`, `trade`, `shift`, `course_session`, `image`, `status`) VALUES
(7, 'Mijink Narzary', 'Ramendra Narzary', '2001-10-30', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/c71eb0cd774a44fd3c7b40bb1dd7f759dummy-image-300x298.jpg', 1),
(8, 'Monorail Krishnan Narzary', 'Satiram Narzary', '1992-03-14', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/5ca3d60981827a14bd07495ebb097246dummy.jpg', 1),
(9, 'Jwngsar Narzary', 'Upendra Narzary', '1995-02-12', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/7b5c359b68cdccdd00511406cbcd6ea3dummy.jpg', 1),
(10, 'Mithinga Basumatary', 'Subhash Ch. Basumatary', '1999-08-11', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/00b2e2b6912009ab3339a0193802073ddummy.jpg', 1),
(11, 'Mintu Basumatary', 'Abhinash Basumatary', '2004-07-08', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/023d84dcdd588d7fc081e57ab108a129dummy.jpg', 1),
(12, 'Lakiraj Brahma', 'Namal Ch. Brahma', '1987-06-15', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/868c6644000b84f76457d6260a569f3cdummy.jpg', 1),
(13, 'Khampa Brahma', 'Munna Brahma', '2000-02-16', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/9b66c41732e6bf678e538033421fba02dummy.jpg', 1),
(14, 'Happy Raj Mushahary', 'Sahen Mushahary', '1997-06-09', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/9e1f8c9c84e6af86e6932c535157cd51dummy.jpg', 1),
(15, 'Daima Wary', 'Suniram Wary', '1997-11-04', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/9efb557909a5ab13e6d6000b1c512c54dummy.jpg', 1),
(16, 'Swmkhwr Basumatary', 'Pradip Basumatary', '2002-06-13', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/fa63497e4be6b7e027e91ce9ea603aa3dummy.jpg', 1),
(17, 'Swmdwn Basumatary', 'Japeram Basumatary', '2003-01-01', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/f0403df3602c48350bc116e4bfcae15adummy.jpg', 1),
(18, 'Tajen Narzary', 'Samiran Narzary', '2002-06-06', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/3fb212ab9c214754c79334accbf1b758dummy.jpg', 1),
(19, 'Vivekananda Brahma', 'Bota Brahma', '1998-02-04', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/88e71fa7cbd04a2beec41adfc02faeaadummy.jpg', 1),
(20, 'Sanjay Basumatary', 'Nirmal Basumatary', '2001-11-25', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/60a2cc250077585f92adcab1294f0a29dummy.jpg', 1),
(21, 'Didwm Narzary', 'Manik Narzary', '2000-05-19', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/ebe506f0c101c7c2b91d11ce0d2f6f4fdummy.jpg', 1),
(22, 'Kamendra Rabha', 'Bijay Rabha', '2002-11-24', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/e3c6bf244b65691f023f5a0fa32105f0dummy.jpg', 1),
(23, 'Karna Basumatary ', 'Madan Basumatary', '1999-11-12', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/cd4a010dd47ad9f5ef4e618c1ade72fbdummy.jpg', 1),
(24, 'Biliphang Mushahary', 'Jihudas Mushahary', '1997-05-03', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/1ae13f70eca8c89a85a9f4e870a1b608dummy.jpg', 1),
(25, 'Swmkhwr Wary', 'Dinesh Wary', '2001-08-15', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/f7f5f51c757060569872cd2d83b05734dummy.jpg', 1),
(26, 'Swmkwr Brahma', 'Nileswar Brahma', '2005-05-12', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/63a56869a59b60445db3811cecb772f9dummy.jpg', 1),
(27, 'Swmdwn Wary ', 'Sajit Wary', '2005-12-03', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/92f0e9978765c973cd0f12c5655d97eadummy.jpg', 1),
(28, 'Asique Mahmud Hassan  ', 'MD Aazahar Ali SK', '2002-05-08', 'Male', 'GENERAL', 'Mason', '1', '2022-2023', 'images/trainees/3c44aafe9e7d031003d038da4e05b54ddummy.jpg', 1),
(29, 'Robial SK ', 'Roshid Ali SK', '2005-01-03', 'Male', 'GENERAL', 'Mason', '1', '2022-2023', 'images/trainees/6d099473402dce416d189de7b696c462dummy.jpg', 1),
(30, 'Pwilao Basumatary', 'Lahit Basumatary ', '2004-01-01', 'Male', 'ST/SC', 'Mason', '1', '2022-2023', 'images/trainees/a8a61666875b05ece33a38ac8dadc6d7dummy.jpg', 1),
(31, 'Bigrai Basumatary', 'Sudem Basumatary', '1999-12-13', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/e89490d68e5cccc7928d82cd4aed5780dummy.jpg', 1),
(32, 'Joyok Borman', 'Shiren Borman', '1997-02-13', 'Male', 'OBC', 'Electrician', '1', '2022-2023', 'images/trainees/6fe210e7e1172abd91c43232424133b8dummy.jpg', 1),
(33, 'Pobitro Narzary ', 'Dolendro Narzary    ', '1997-12-13', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/0494252ce40722d3bbf264ff0ce21726dummy.jpg', 1),
(34, 'Arjun Basumatary', 'Rabin Basumatary', '1999-05-18', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/f8531cbb2331e3be411d398629e42916dummy.jpg', 1),
(35, 'Rinsad Narzary', 'Bhaskar Narzary', '1998-06-06', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/b74da8dd3c40e175181381476a172f0adummy.jpg', 1),
(36, 'Birdaw Mushahary', 'Asharu Mushahary', '1993-04-01', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/04643781a4ce4fcb1fc8e9111ee9f914dummy.jpg', 1),
(37, 'Elias Hoque', 'Shah Alom Hoque', '2004-01-16', 'Male', 'GENERAL', 'Electrician', '1', '2022-2023', 'images/trainees/265b63a8cf1f64fc4e918e4db8beda5cdummy.jpg', 1),
(38, 'Nur Alom ', 'Sabot Hoque', '2005-01-03', 'Male', 'GENERAL', 'Electrician', '1', '2022-2023', 'images/trainees/f3fba3499c7a8f261ae655c206fa946fdummy.jpg', 1),
(39, 'Utpal Brahma', 'Adip Brahma', '1992-07-20', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/9805338047f21cd8ad5ef5051c7348a3dummy.jpg', 1),
(40, 'Bhaben Wary', 'Seba Wary', '1999-05-27', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/bfa1a63605103bdeed6057cd1785912fdummy.jpg', 1),
(41, 'Sirajul Hassan', 'Intaj Ali SK', '1997-02-28', 'Male', 'GENERAL', 'Electrician', '1', '2022-2023', 'images/trainees/cf81740481944f7a0e66422223f09bd0dummy.jpg', 1),
(42, 'Argeng Mushahary', 'Lt.Jagadish Mushahary', '1997-06-11', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/6aae86e0a1bd00b099f1018a37d1be29dummy.jpg', 1),
(43, 'Samina Mushahary', 'Giridhar Mushahary', '1995-08-05', 'Female', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/e4a9fc218f7f527dff9ce3fd95f49f64dummy.jpg', 1),
(44, 'Barhungkha Brahma', 'Hemanta Kr.Brahma', '1996-12-13', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/01f0dcbaef2e4ef7dd45a8c04eeb9f93dummy.jpg', 1),
(45, 'Swmaosar Brahma', 'Swadesh Brahma', '2000-09-21', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/e2a7ebb543d594781acf16965856cebadummy.jpg', 1),
(46, 'Sanika Basumatary', 'Ratindra Basumatary', '1999-11-10', 'Female', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/b4a67d613d4c1b6fc5f6c9df5e96c3dadummy.jpg', 1),
(47, 'Gwjwn Bsumatary', 'Pratap Basumatary', '2001-11-21', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/b5123254d8672175207f12ad1af7f010dummy.jpg', 1),
(48, 'Ransai Gwra Basumatary', 'Mantu Kumar Brahma', '2001-04-28', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/872d5dabeb170cd05f319846e623126edummy.jpg', 1),
(49, 'Maya Laxmi Brahma', 'Fuleswar Brahma', '2000-06-06', 'Female', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/0bd49892148be009178d6da875876ae6dummy.jpg', 1),
(50, 'Rana Basumatary', 'Bhadreshwar Basumatary', '1996-10-30', 'Male', 'ST/SC', 'Electrician', '1', '2022-2023', 'images/trainees/097c80be17939ebbe9faae6022073348dummy.jpg', 1),
(51, 'Nirjoy Basumatary', 'Tikendra Bsumatary', '1998-11-10', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/849abadcfb8d3d576cc5d14422153f35dummy.jpg', 1),
(52, 'Pawan Ray', 'Satya Charan Ray', '2002-06-10', 'Male', 'OBC', 'Fitter', '1', '2022-2023', 'images/trainees/b269ddc07ccc8a1a9241fc025e6b57dfdummy.jpg', 1),
(53, 'Swgwmsat Brahma', 'Sajendra Brahma', '1998-11-18', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/06d1689bc612e7fb8fed5a51a3b48542dummy.jpg', 1),
(54, 'Mithun Brahma', 'Ajit Kr. Brahma', '2002-12-19', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/b796e59875482b2977e3ab28ca1f727cdummy.jpg', 1),
(55, 'Manjit Narzary', 'Gable Narzary', '1999-01-01', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/f4b1a9283ee8604fdd15adab82858d33dummy.jpg', 1),
(56, 'Rakesh Narzary', 'Niren Narzary', '1998-10-11', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/0675aa5db2bdd40e04ac6db1cab3fc93dummy.jpg', 1),
(57, 'Kwmta Brahma ', 'Udaysing Brahma ', '2001-07-10', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/f7e9935bf1830503e6274c08d0b47d6fdummy.jpg', 1),
(58, 'Raithai Brahma', 'Santash Brahma', '1998-06-15', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/f72c508fd3a205a1492fffbbfd2ac718dummy.jpg', 1),
(59, 'Bihung Brahma', 'Manoj Kumar Brahma', '2000-06-13', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/ae3cc6300caad3edcbe726dd5a0f14e4dummy.jpg', 1),
(60, 'Birswrangh Brahma', 'Daimonsing Brahma', '1999-02-28', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/6696aece0f69621bbfbad6b93c99338adummy.jpg', 1),
(61, 'Kailash Ch. Ray', 'Suresh Ch. Ray', '1999-12-03', 'Male', 'OBC', 'Fitter', '1', '2022-2023', 'images/trainees/26ddfb89f059a07a435e277075171c93dummy.jpg', 1),
(62, 'Swmkwr Brahma ', 'Binad Brahma', '1998-10-04', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/2ba4a66ef095a30c3d92fbc351b353e3dummy.jpg', 1),
(63, 'Musumi Mushahary', 'Bapendra Mushahary', '1995-06-12', 'Female', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/9d3a6a068e813465cc36f4aca7393b83dummy.jpg', 1),
(64, 'Saiful Islam Sheikh', 'Issamuddin Sheik', '2003-02-24', 'Male', 'GENERAL', 'Fitter', '1', '2022-2023', 'images/trainees/19e492bf71441ab7e31399eac6d0c0e4dummy.jpg', 1),
(65, 'Rashila Mushahary', 'Late. Manindra Mushahary', '2000-05-16', 'Female', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/a6be038b69281e2a0a3fe870990501b7dummy.jpg', 1),
(66, 'Birkang Basumatary', 'Madra Bsumatary', '1999-06-17', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/4a4ae58da37d8529bc3612058b125dc7dummy.jpg', 1),
(67, 'Dwimalu Basumatary', 'Bhadreswar Basumatary', '2002-06-05', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/55aa7cf410ed93c0b273f12e4009df52dummy.jpg', 1),
(68, 'Ranjay Basumatary', 'Amaradya Basumatary', '1993-10-21', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/26e9976201f932ecfdf8fd230d39d0ebdummy.jpg', 1),
(69, 'Fungkha Mushahary', 'Udang Mushahary', '1989-11-21', 'Male', 'ST/SC', 'Fitter', '1', '2022-2023', 'images/trainees/fac5c51d452be090a7f042e928f9102edummy.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrative_details`
--
ALTER TABLE `administrative_details`
  ADD PRIMARY KEY (`administrative_id`);

--
-- Indexes for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_infrastructure`
--
ALTER TABLE `area_infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence_instructors_details`
--
ALTER TABLE `attendence_instructors_details`
  ADD PRIMARY KEY (`attendence_InstructorID`);

--
-- Indexes for table `attendence_trainee_details`
--
ALTER TABLE `attendence_trainee_details`
  ADD PRIMARY KEY (`attendence_traineeID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electric_power_supply`
--
ALTER TABLE `electric_power_supply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `newsupdates`
--
ALTER TABLE `newsupdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tradescheme`
--
ALTER TABLE `tradescheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade_infrastructure`
--
ALTER TABLE `trade_infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee_details`
--
ALTER TABLE `trainee_details`
  ADD PRIMARY KEY (`trainee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administrative_details`
--
ALTER TABLE `administrative_details`
  MODIFY `administrative_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `area_infrastructure`
--
ALTER TABLE `area_infrastructure`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendence_instructors_details`
--
ALTER TABLE `attendence_instructors_details`
  MODIFY `attendence_InstructorID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `attendence_trainee_details`
--
ALTER TABLE `attendence_trainee_details`
  MODIFY `attendence_traineeID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `electric_power_supply`
--
ALTER TABLE `electric_power_supply`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `faculty_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `newsupdates`
--
ALTER TABLE `newsupdates`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tradescheme`
--
ALTER TABLE `tradescheme`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trade_infrastructure`
--
ALTER TABLE `trade_infrastructure`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainee_details`
--
ALTER TABLE `trainee_details`
  MODIFY `trainee_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
