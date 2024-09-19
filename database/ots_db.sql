-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 08:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ots_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(1000) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `cou_created`) VALUES
(1, 'UPSC TEST', '2023-05-29 05:32:18'),
(2, 'SSC TEST', '2023-05-29 05:32:57'),
(3, 'BANKING TEST', '2023-05-29 05:33:09'),
(4, 'TEACHING TEST', '2023-05-29 05:33:17'),
(5, 'CIVIL SERVICES TEST', '2023-05-29 05:33:35'),
(6, 'RAILWAYS TEST', '2023-05-29 05:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(11) NOT NULL,
  `student_firstname` varchar(1000) NOT NULL,
  `student_lastname` varchar(250) NOT NULL,
  `student_mobile` varchar(15) NOT NULL,
  `student_course` varchar(1000) NOT NULL,
  `student_gender` varchar(1000) NOT NULL,
  `student_birthdate` varchar(1000) NOT NULL,
  `student_email` varchar(1000) NOT NULL,
  `student_password` varchar(1000) NOT NULL,
  `student_address` text NOT NULL,
  `student_pincode` varchar(15) NOT NULL,
  `student_username` varchar(250) NOT NULL,
  `student_country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_firstname`, `student_lastname`, `student_mobile`, `student_course`, `student_gender`, `student_birthdate`, `student_email`, `student_password`, `student_address`, `student_pincode`, `student_username`, `student_country`) VALUES
(1, 'Md', 'Asif', '9304673653', '6', 'male', '2023-05-12', 'mdasif9a@gmail.com', '12345', 'dargah road neemtal patna, bihar, india', '800006', 'asif', 'india'),
(2, 'John', 'Doe', '1234567890', '3', 'male', '1990-01-01', 'johndoe@example.com', 'password123', '123 Street, City', '12345', 'johndoe123', 'India'),
(3, 'Emily', 'Johnson', '9876543210', '2', 'female', '1995-05-15', 'emilyjohnson@example.com', 'securepass', '456 Avenue, City', '54321', 'emilyj', 'USA'),
(4, 'Liam', 'Thompson', '8765432109', '5', 'male', '1992-11-03', 'liamthompson@example.com', 'pass1234', '789 Street, City', '98765', 'liamt', 'Canada'),
(5, 'Emma', 'Wilson', '7654321098', '1', 'female', '1993-09-21', 'emmawilson@example.com', 'password456', '321 Road, City', '56789', 'emmaw', 'India'),
(6, 'Ethan', 'Anderson', '6543210987', '4', 'male', '1994-07-12', 'ethananderson@example.com', 'secure456', '654 Lane, City', '43210', 'ethana', 'USA'),
(7, 'Ava', 'Garcia', '5432109876', '6', 'female', '1991-03-28', 'avagarcia@example.com', 'pass5678', '987 Court, City', '21098', 'avag', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `test_answers`
--

CREATE TABLE `test_answers` (
  `testans_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `testans_answer` varchar(1000) NOT NULL,
  `testans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `testans_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test_answers`
--

INSERT INTO `test_answers` (`testans_id`, `student_id`, `test_id`, `quest_id`, `testans_answer`, `testans_status`, `testans_created`) VALUES
(1, 1, 5, 3, '130 km/hr', 'new', '2023-05-30 07:00:00'),
(2, 1, 5, 4, 'Gorakhpur Junction', 'new', '2023-05-30 07:00:00'),
(3, 1, 5, 6, 'B.R. Ambedka', 'new', '2023-05-30 07:00:00'),
(4, 1, 5, 5, 'Vande Bharat Express', 'new', '2023-05-30 07:00:00'),
(5, 1, 5, 2, '1853', 'new', '2023-05-30 07:00:00'),
(6, 5, 3, 1, '5', 'new', '2023-06-01 04:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `test_attempt`
--

CREATE TABLE `test_attempt` (
  `testat_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `testat_status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test_attempt`
--

INSERT INTO `test_attempt` (`testat_id`, `student_id`, `test_id`, `testat_status`) VALUES
(1, 1, 5, 'used'),
(2, 5, 3, 'used');

-- --------------------------------------------------------

--
-- Table structure for table `test_question_tbl`
--

CREATE TABLE `test_question_tbl` (
  `tqt_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `test_question` varchar(1000) NOT NULL,
  `test_ch1` varchar(1000) NOT NULL,
  `test_ch2` varchar(1000) NOT NULL,
  `test_ch3` varchar(1000) NOT NULL,
  `test_ch4` varchar(1000) NOT NULL,
  `test_answer` varchar(1000) NOT NULL,
  `test_status` varchar(1000) NOT NULL DEFAULT 'active',
  `test_explain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test_question_tbl`
--

INSERT INTO `test_question_tbl` (`tqt_id`, `test_id`, `test_question`, `test_ch1`, `test_ch2`, `test_ch3`, `test_ch4`, `test_answer`, `test_status`, `test_explain`) VALUES
(1, 3, 'What is 2 + 3?', '1', '2', '3', '5', '5', 'active', ''),
(2, 5, 'Which year was the first railway in India established?', '1853', '1947', '1901', '1825', '1853', 'active', ''),
(3, 5, 'What is the average speed of a Rajdhani Express train in India?', '80 km/hr', '100 km/hr', '130 km/hr', '160 km/hr', '130 km/hr', 'active', ''),
(4, 5, 'Which is the longest railway platform in India?', 'New Delhi Railway Station', 'Howrah Junction', 'Gorakhpur Junction', 'Chennai Central', 'Gorakhpur Junction', 'active', ''),
(5, 5, 'Which is the first fully air-conditioned train in India?', 'Shatabdi Express', 'Rajdhani Express', 'Duronto Express', 'Vande Bharat Express', 'Vande Bharat Express', 'active', ''),
(6, 5, 'Who is known as the \"Father of Indian Railways\"?', 'J.R.D. Tata', 'Jamsetji Tata', 'B.R. Ambedka', 'Lala Lajpat Rai', 'Jamsetji Tata', 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `test_tbl`
--

CREATE TABLE `test_tbl` (
  `test_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `test_title` varchar(1000) NOT NULL,
  `test_time_limit` varchar(1000) NOT NULL,
  `test_questlimit_display` int(11) NOT NULL,
  `test_description` varchar(1000) NOT NULL,
  `test_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test_tbl`
--

INSERT INTO `test_tbl` (`test_id`, `cou_id`, `test_title`, `test_time_limit`, `test_questlimit_display`, `test_description`, `test_created`) VALUES
(2, 5, 'Civil Test 1', '10', 10, 'Basic Civil Test', '2023-05-29 05:38:29'),
(3, 1, 'Upsc Test 1', '30', 15, 'Upsc question 2017', '2023-05-29 05:43:25'),
(4, 6, 'Railway Test 1', '10', 10, 'Basic Railway Test', '2023-05-29 05:57:47'),
(5, 6, 'Railway Test Basic', '1', 5, 'For Best Result', '2023-05-30 01:42:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `test_answers`
--
ALTER TABLE `test_answers`
  ADD PRIMARY KEY (`testans_id`);

--
-- Indexes for table `test_attempt`
--
ALTER TABLE `test_attempt`
  ADD PRIMARY KEY (`testat_id`);

--
-- Indexes for table `test_question_tbl`
--
ALTER TABLE `test_question_tbl`
  ADD PRIMARY KEY (`tqt_id`);

--
-- Indexes for table `test_tbl`
--
ALTER TABLE `test_tbl`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test_answers`
--
ALTER TABLE `test_answers`
  MODIFY `testans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test_attempt`
--
ALTER TABLE `test_attempt`
  MODIFY `testat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test_question_tbl`
--
ALTER TABLE `test_question_tbl`
  MODIFY `tqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test_tbl`
--
ALTER TABLE `test_tbl`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
