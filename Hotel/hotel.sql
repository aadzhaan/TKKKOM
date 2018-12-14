-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 02:33 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pass`) VALUES
(3, 'deladzhan@gmail.com', '$2y$10$HTL53ylae2wqDoTQdqZov.h00xewpq2QlwT.gb2PUXYSpOSYPVH/G'),
(5, 'adilahad97@gmail.com', '$2y$10$SyehG1B2vzoURVcbrfu6nu9SJCBgBNJGQTAUaXEg.8gP9sD.XvV/y');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `noofdays`) VALUES
(39, 'Dr.', 'huhu', 'haha', '4', '2018-12-22', '2018-12-24', 500000.00, 510000.00, 10000.00, 'Breakfast', 2),
(32, 'Miss.', 'Silvia', 'T', '6', '2018-11-25', '2018-11-27', 700000.00, 714000.00, 14000.00, 'Breakfast', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `floor` varchar(10) DEFAULT NULL,
  `place` varchar(20) NOT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `number`, `floor`, `place`, `cusid`) VALUES
(1, '3', '101', '1', 'Free', NULL),
(2, '3', '102', '1', 'Free', NULL),
(3, '3', '103', '1', 'Free', NULL),
(4, '4', '201', '2', 'Free', 0),
(5, '4', '202', '2', 'Free', NULL),
(6, '4', '203', '2', 'Free', NULL),
(7, '5', '204', '2', 'Free', NULL),
(8, '5', '205', '2', 'Free', NULL),
(9, '5', '206', '2', 'Free', NULL),
(10, '6', '301', '3', 'NotFree', 32),
(11, '6', '302', '3', 'Free', NULL),
(12, '6', '303', '3', 'Free', NULL),
(13, '6', '304', '3', 'Free', NULL),
(14, '6', '305', '3', 'Free', NULL),
(15, '6', '306', '3', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `kodepemesanan` varchar(255) NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `identitynumber` varchar(255) NOT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Meal` varchar(20) NOT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `kodepemesanan`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `identitynumber`, `Phone`, `TRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(32, 'Rjh4aDdTNFAzOEFValFodG14RGdYUT09', 'Miss.', 'Silvia', 'T', 'silviatannasa97@gmail.com', 'Non Indonesian', 'Bangladesh', 'QkV6Umx2ZnA3ZnBEcXNaYWovK2ZmZz09', '08080808080', '6', 'Breakfast', '2018-11-25', '2018-11-27', 'Confirm', 2),
(38, 'MHVRNXVLTmdybnppOFM4U3JhNkxUUT09', 'Miss.', 'huhu', 'haha', 'adzhanilah@gmail.com', 'Non Indonesian', 'Australia', 'aDQ0cUtqWnM5aXRiMnF2MGdMeHFUdz09', '089898989989', '3', 'Room only', '2018-12-15', '2018-12-17', 'Not Confirm', 2),
(39, 'R1NYVzdQekdCMUYvM2k3VnIzWUtsQT09', 'Miss.', 'Dela', 'adzhan', 'adzhanilah@gmail.com', 'Non Indonesian', 'Afghanistan', 'R0VUdWI3ODhLTzNMNjcxUlJnQW5lUT09', '0947615890', '3', 'Breakfast', '2018-12-14', '2018-12-16', 'Not Confirm', 2),
(40, 'MFlCWUU2ZjgrYnpXb2RHZUllRlQrQT09', 'Miss.', 'Dela', 'Adilah', 'adzhanilah@gmail.com', 'Non Indonesian', 'Austria', 'R0VUdWI3ODhLTzNMNjcxUlJnQW5lUT09', '0947615890', '3', 'Room only', '2018-12-23', '2018-12-26', 'Not Confirm', 3),
(41, 'OVRJYldGREVaRzN0Y3BGOXN6Vmk2dz09', 'Dr.', 'Dela', 'D', 'adzhanilah@gmail.com', 'Non Indonesian', 'Azerbaijan', 'R0VUdWI3ODhLTzNMNjcxUlJnQW5lUT09', '0947615890', '4', 'Breakfast', '2018-12-10', '2018-12-12', 'Not Confirm', 2),
(42, 'd2pRNzdDODN0QUc0VGRDVjlyUDBxQT09', 'Miss.', 'Dela', 'adzhan', 'adzhanilah@gmail.com', 'Non Indonesian', 'Bahrain', 'QityWFBIdzZmeTlhWTFuR2lGZzk1QT09', '5746287294', '3', 'Room only', '2018-12-14', '2018-12-15', 'Not Confirm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`id`, `name`, `price`, `pic`) VALUES
(3, 'Single Room', 150000, 'images/singleroom.jpg'),
(4, 'Twin Room', 250000, 'images/twinbedroom.jpg'),
(5, 'Quad Room', 500000, 'images/quadroom.jpg'),
(6, 'King Room', 350000, 'images/kingroom.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
