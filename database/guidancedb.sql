-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 03:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guidancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `counseling`
--

CREATE TABLE `counseling` (
  `ID` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `studAge` varchar(100) NOT NULL,
  `college` varchar(255) NOT NULL,
  `yearLevel` varchar(255) NOT NULL,
  `prefMode` varchar(255) NOT NULL,
  `cpnumber` varchar(100) NOT NULL,
  `fbname` varchar(255) NOT NULL,
  `counTime` varchar(255) NOT NULL,
  `counDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counseling`
--

INSERT INTO `counseling` (`ID`, `name`, `studAge`, `college`, `yearLevel`, `prefMode`, `cpnumber`, `fbname`, `counTime`, `counDate`) VALUES
(1, 'Gil Nicholas Cagande', '23', 'College of Administartion', '3rd Year', '2', '', 'Gil Nicholas Cagande', '', '2022-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userRole` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `userRole`) VALUES
(7, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Demo', 'User'),
(8, 'gilcagande', '21232f297a57a5a743894a0e4a801fc3', 'Gil Nicholas Cagande', 'Admin'),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Sample Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counseling`
--
ALTER TABLE `counseling`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counseling`
--
ALTER TABLE `counseling`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
