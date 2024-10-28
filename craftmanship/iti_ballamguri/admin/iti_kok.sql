-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 09:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iti_kok`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(224) NOT NULL,
  `image` varchar(224) NOT NULL,
  `head` varchar(224) NOT NULL,
  `title` varchar(224) NOT NULL,
  `description` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(4, 'images/index/ba79ca13c6414bf655fc5b1ef6222c4f19042f5e0577408b0df387f75169e70bcity3.jpg', 'Industrial Training Institue (ITI)', 'Kokrajhar', 'ITI Kokrajhar refer to the Industrial trainiiing Institute located in Kokrajhar, Assam, India. ITIs are vocational training institutes that offer skill-based training programmes in various trades to prepare students for employment in specific industries.', '2023-06-22');

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
(6, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2023-07-05', '11:07:36');

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

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `image`, `head`, `title`, `description`, `course_fee`, `eligibility`, `seat_availability`, `duration`, `status`, `date_uploaded`) VALUES
(1, 'images/index/e4a6423299234f5df17d6c84c3ce8ad7ITI-1.jpeg', 'Fitter Engineering', 'The duration of the course ', 'The course helps the students in studying blueprints, plans, and drawings to be able to construct, assemble, manufacture and fit parts of the machines. The duration of the course is two years and this course comes under the engineering stream.', '5000', '8 passed', '100', '6 monthhs', 0, '2023-06-22'),
(2, 'images/index/870062fac54dd71ba883290bd30a6eb9pump.jpg', 'Pump Operator', 'This course helps the students', 'This course helps the students in performing inspections and maintenance of various machinery and troubleshooting issues with the systems and processes. The duration of the course is one year and this course comes under the engineering stream.', '50000', 'hs passed', '75', '6 monthhs', 0, '2023-06-22');

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
(2, 'images/index/599380b2f72f631999c373c0834701d7city3.jpg', 'Bodoland celebrates Skills day', 'Kokrajhar', 'For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens. ', 'Kokrajhar', '2023-06-21'),
(3, 'images/index/2d625a185c3741355e73eb8c6fec5147fitter.jpg', 'Skill Development Thrives in Kokrajhar', 'By AT Kokrajhar Bureau | Tuesday, May 23, 2023 (06:05 pm)', 'Kokrajhar: 23rd May, 2023-The event, organised by the Skill, Employment, and Entrepreneurship Department (SEED), was held on May 23, 2023, at the Auditorium Hall of Industrial Training Institute (ITI) Kokrajhar. ', 'Baksa', '2023-06-22'),
(4, 'images/index/ee7b576ad81de821e0962a286e2a42dfevents-1.jpg', 'Vocational Education Program in Kokrajhar Includes Drone Training Camp', 'By Bodoland Radab June 7, 2023', 'Kokrajhar: Yuvaan Educative organized a workshop on Drone-based LLP surveillance at Kokrajhar Govt. HS & MP School on June 6.', 'Udalguri', '2023-06-22');

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
(1, 'kbikcbuwiop', 'lwcbnw  wckwcbowkcbowcbc ckwbcj', '2023-06-21'),
(3, 'yeryeryyehte', 'hhtehtrhrhbrn', '2023-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(224) NOT NULL,
  `image` varchar(224) NOT NULL,
  `description` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `description`, `date_uploaded`) VALUES
(2, 'images/index/ad3423805bdfd6a4ce7e5d6acc53920fimage-2.jpg', 'Field visit of distinguised guest of Skill development department.', '2023-06-22'),
(3, 'images/index/65f9486658f247636039f522d18202f6events-2.jpg', 'Group pictures of the students and staffs of ITI.\r\n', '2023-06-22'),
(4, 'images/index/5a6edb87f5323efcbe0a8adeb1ebdc5epump.jpg', 'Machinery training ongoing.', '2023-06-22'),
(5, 'images/index/55878edddebf496f947cc8ddae34d5f9image-2.jpg', 'Practicing sewing machine operator..', '2023-06-22'),
(6, 'images/index/467991b2630f6088893bd0ef4e0677a6ITI-Rowta.jpg', 'Computer training program.', '2023-06-22'),
(7, 'images/index/435520049687d2315640125b4bd63fc1image-2.jpg', 'Industrial Training Institute,ITI\r\n', '2023-06-22');

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
(3, 'images/index/ba38b6e339d51eb1aad5bc0742c5b64bbanner-bg.jpg', ' cljwc wc clnwlcolc', 'lcjnwocn cnlwjcnow cjndc clwnjco cjkdbc ckjbdwkwkjc', '2023-06-22'),
(4, 'images/index/c73138a618054d6fd9d9991501670326banner-bg.jpg', 'kbckw ckwbc ckbwkc hbcd bc cjbewkc', 'lkcnklwcnlwdkcn ckjwkjc cbdcb chjdsvcv cgghv hcv hvcwcv', '2023-06-22'),
(5, 'images/index/85cfd769222452aedb66496af1d98ab7s6.jpg', 'rvbr', 'rbg', '2023-07-05');

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
-- Indexes for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsupdates`
--
ALTER TABLE `newsupdates`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsupdates`
--
ALTER TABLE `newsupdates`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
