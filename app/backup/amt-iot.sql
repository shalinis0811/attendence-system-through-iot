-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 06:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `httpiot`
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
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_log`
--

INSERT INTO `emp_log` (`id`, `emp_id`, `date_time`) VALUES
(1, '1', '2018-03-05 16:27:00'),
(3, '1', '2018-03-05 17:19:07'),
(4, '1', '2018-03-05 17:22:06'),
(5, '1', '2018-03-05 17:22:24'),
(7, '1', '2018-03-05 17:24:11'),
(8, '', '2018-03-05 17:27:54'),
(9, '', '2018-03-05 17:35:30'),
(10, '', '2018-03-05 17:37:14'),
(11, '', '2018-03-05 17:37:56'),
(12, '', '2018-03-05 17:38:14'),
(13, '', '2018-03-05 17:38:16'),
(14, '1', '2018-03-05 17:38:27'),
(15, '1', '2018-03-05 17:38:52'),
(16, '1', '2018-03-05 17:40:50'),
(17, '1', '2018-03-06 09:33:25'),
(18, '1', '2018-03-06 09:34:48');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
