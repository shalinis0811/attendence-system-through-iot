-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 07:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duplicate`
--

-- --------------------------------------------------------

--
-- Table structure for table `devicemsg`
--

CREATE TABLE `devicemsg` (
  `id` int(5) NOT NULL,
  `device_id` int(5) NOT NULL,
  `dev_msg` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_log`
--

CREATE TABLE `emp_log` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(32) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_swipe` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hours` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_log`
--

INSERT INTO `emp_log` (`id`, `emp_id`, `date_time`, `last_swipe`, `hours`) VALUES
(123, '1', '2018-03-13 11:31:06', '2018-03-13 15:57:07', '4.43'),
(124, '1', '2018-03-12 11:31:06', '2018-03-12 12:31:06', '1.00'),
(125, '1', '2018-03-14 10:31:06', '2018-03-14 11:22:35', '0.86'),
(126, '1', '2018-04-13 11:31:06', '2018-04-13 12:31:06', '1.00'),
(127, '1', '2018-02-13 11:31:06', '2018-02-13 13:31:06', '2');

-- --------------------------------------------------------

--
-- Table structure for table `month_log`
--

CREATE TABLE `month_log` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `total_days` int(5) NOT NULL,
  `month` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month_log`
--

INSERT INTO `month_log` (`id`, `emp_id`, `total_days`, `month`) VALUES
(18, 1, 3, 3),
(19, 1, 1, 4),
(20, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sentmsg`
--

CREATE TABLE `sentmsg` (
  `id` int(3) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentmsg`
--

INSERT INTO `sentmsg` (`id`, `message`, `time`) VALUES
(4, 'hey', '2018-03-04 13:31:54'),
(4, 'hade', '2018-03-04 13:32:58'),
(4, 'mnmn', '2018-03-04 13:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `rfid_tag` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `user_type` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `rfid_tag`, `email`, `password`, `full_name`, `user_type`) VALUES
(1, '25', 'abc@gmail.com', '12345', 'Ashwanth', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devicemsg`
--
ALTER TABLE `devicemsg`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexes for table `emp_log`
--
ALTER TABLE `emp_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month_log`
--
ALTER TABLE `month_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_log`
--
ALTER TABLE `emp_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `month_log`
--
ALTER TABLE `month_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
