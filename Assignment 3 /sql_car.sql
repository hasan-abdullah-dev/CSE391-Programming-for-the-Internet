-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 12:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `sm1`
--

CREATE TABLE `sm1` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm1`
--

INSERT INTO `sm1` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('0000-00-00', '0', '0', '0', '0'),
('2023-04-09', 'hasan@gmail.com', 'hasan@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sm2`
--

CREATE TABLE `sm2` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm2`
--

INSERT INTO `sm2` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('0000-00-00', '0', '0', '0', '0'),
('2023-04-09', 'hasan@gmail.com', 'hasan@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sm3`
--

CREATE TABLE `sm3` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm3`
--

INSERT INTO `sm3` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('0000-00-00', '0', '0', '0', '0'),
('2023-04-09', '', '', '', 'hasan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sm4`
--

CREATE TABLE `sm4` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm4`
--

INSERT INTO `sm4` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('0000-00-00', '0', '0', '0', '0'),
('2023-04-09', '', 'hasan@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sm5`
--

CREATE TABLE `sm5` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm5`
--

INSERT INTO `sm5` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('0000-00-00', '0', '0', '0', '0'),
('2023-04-09', 'hasan@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `linum` varchar(200) NOT NULL,
  `engnum` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `address`, `phone`, `linum`, `engnum`, `pass`, `type`) VALUES
(1, 'abdullah', 'abdullah@gmail.com', 'Dhaka', '01715170823', '123', '456', 'c4936bd2eef05c76bf6bde3b50ec366c660be5f4', 1),
(26, 'hasan', 'hasan@gmail.com', 'Dhaka', '01715170823', '789', '101112', 'c4936bd2eef05c76bf6bde3b50ec366c660be5f4', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sm1`
--
ALTER TABLE `sm1`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sm2`
--
ALTER TABLE `sm2`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sm3`
--
ALTER TABLE `sm3`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sm4`
--
ALTER TABLE `sm4`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sm5`
--
ALTER TABLE `sm5`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
