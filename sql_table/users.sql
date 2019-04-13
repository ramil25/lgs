-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 05:58 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
  `full_name` varchar(30) NOT NULL,
  `first_name` tinytext NOT NULL,
  `middle_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `gender` varchar(6) NOT NULL,
  `position` varchar(20) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `user_level` int(1) NOT NULL,
  `student_number` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `email`, `full_name`, `first_name`, `middle_name`, `last_name`, `gender`, `position`, `campus`, `user_level`, `student_number`, `course`, `mobile`) VALUES
(17, 'user', 'password12345', 'hh@gmail.com', 'Dem Soriano', 'Dem', 'Lalonio', 'Serrano', 'Male', '', '', 2, 'M-12-1-17222', 'BSIT/1st', 2147483647),
(18, 'admin', 'admin', 'gg@gmail.com', 'Hanz Yow', 'Hanz', 'Law', 'Yow', 'Male', 'Admin', 'Sta. Cruz', 0, '', '', 0),
(19, 'aby', '1122334455', 'gg@gmail.com', 'Aby Ser', '', '', '', 'Female', '', '', 2, 'M-12-1-17223', 'BSIT/1st', 2147483647),
(20, 'Madam', '1234567890', 'ss@gg', 'Hanz Yow', 'Hanz', 'Yow', 'Yow', 'Male', 'Guidance', 'Sta. Cruz', 1, '', '', 0);

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
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
