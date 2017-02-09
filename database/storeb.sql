-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 09:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` char(20) NOT NULL,
  `last_name` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `mobileNumber` int(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `date_updated` varchar(50) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `bday`, `gender`, `mobileNumber`, `address`, `city`, `date_created`, `date_updated`, `user_type`) VALUES
(28, 'khelly', 'taguinod', 'khelly@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00', 'M', 12345678, 'sta. maria 123', 'Muntinlupa City', 'February 3, 2017 2:01:am  ', '', 'customer'),
(30, 'jheremy', 'taguinod', 'khellytaguinod@gmail.com', '54bea12e2f95e305d0c582d851d6aa60', '1996-08-01', 'M', 34567890, '978 San.Vicente Sta.Maria', 'Paranaque City', 'February 3, 2017 3:08:am  ', '', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
