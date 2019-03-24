-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 07:15 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databank`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` longtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` tinytext NOT NULL,
  `middle_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `gender` varchar(6) NOT NULL,
  `position` varchar(20) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `user_level` int(1) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `School Attended` varchar(50) NOT NULL,
  `Strand / Course` int(50) NOT NULL,
  `GWA` varchar(250) NOT NULL,
  `Math` int(2) NOT NULL,
  `English` int(2) NOT NULL,
  `Science` int(2) NOT NULL,
  `1st Choice` varchar(100) NOT NULL,
  `2nd Choice` varchar(100) NOT NULL,
  `3rd Choice` varchar(100) NOT NULL,
  `Raw Score` int(9) NOT NULL,
  `Remarks:` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `user_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
