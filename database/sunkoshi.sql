-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 07:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunkoshi`
--

-- --------------------------------------------------------

--
-- Table structure for table `industrialdata`
--

CREATE TABLE `industrialdata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrialdata`
--

INSERT INTO `industrialdata` (`id`, `name`, `type`, `email`, `address`, `contact`) VALUES
(2, 'Waiwai', 'Mini', 'waiwai@gmail.com', 'Kathmandu', 1555980);

-- --------------------------------------------------------

--
-- Table structure for table `organizationaldata`
--

CREATE TABLE `organizationaldata` (
  `id` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `subtype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizationaldata`
--

INSERT INTO `organizationaldata` (`id`, `orgname`, `type`, `subtype`, `email`, `address`, `contact`) VALUES
(3, 'Bajaj', 'Private', 'Commercial', 'bajajnepal@gmail.com', 'Kathmandu', 15593890),
(4, 'Yamaha', 'Private', 'Commercial', 'yamahanepal@gmail.com', 'Kathmandu', 16693875);

-- --------------------------------------------------------

--
-- Table structure for table `personaldata`
--

CREATE TABLE `personaldata` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personaldata`
--

INSERT INTO `personaldata` (`id`, `firstname`, `middlename`, `lastname`, `date`, `bloodgroup`, `profession`, `email`, `address`, `contact`) VALUES
(4, 'Aakriti', '', 'Sapkota', '2001-10-15', 'B+ve', 'Student', 'aakriti@gmail.com', 'Chabhil', 123456789),
(5, 'Nitesh', 'Kumar', 'Sapkota', '1999-10-08', 'O+ve', 'Programmer', 'Lionitesh10@gmail.com', 'Sankhu', 9843804998);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `username` varchar(255) NOT NULL DEFAULT 'admin',
  `password` varchar(255) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `industrialdata`
--
ALTER TABLE `industrialdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizationaldata`
--
ALTER TABLE `organizationaldata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaldata`
--
ALTER TABLE `personaldata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `industrialdata`
--
ALTER TABLE `industrialdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organizationaldata`
--
ALTER TABLE `organizationaldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personaldata`
--
ALTER TABLE `personaldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
