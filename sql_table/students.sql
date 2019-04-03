-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 03:23 PM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `school_last_attended` varchar(100) NOT NULL,
  `strand_course` varchar(50) NOT NULL,
  `grade_GWA` float NOT NULL,
  `grade_Math` float NOT NULL,
  `grade_English` float NOT NULL,
  `grade_Science` float NOT NULL,
  `fchoice` varchar(30) NOT NULL,
  `schoice` varchar(30) NOT NULL,
  `tchoice` varchar(30) NOT NULL,
  `fcourse` varchar(20) NOT NULL,
  `raw_score` float NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `colleges` varchar(10) NOT NULL,
  `date_ad` varchar(10) NOT NULL,
  `photo_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `full_name`, `gender`, `school_last_attended`, `strand_course`, `grade_GWA`, `grade_Math`, `grade_English`, `grade_Science`, `fchoice`, `schoice`, `tchoice`, `fcourse`, `raw_score`, `remarks`, `colleges`, `date_ad`, `photo_link`) VALUES
(3, 'James Cabantog', 'Male', 'STI', 'ABM', 80, 93, 84, 88, 'BSAB', 'BSA', 'BSBA', 'BSAB', 90, 'Qualified', 'CBMA', 'June/1/201', ''),
(7, 'Joy Arroyo', 'Female', 'LSPU', 'ABM', 75, 90, 84, 85, 'BSA', 'BAT', 'BSAB', 'BSA', 75, 'Unqualified', 'none', 'June/1/201', ''),
(8, 'Alan Calinagan', 'Male', 'STI', 'GAS', 80, 90, 84, 88, 'BSIT', 'BS Accountancy', 'BSIS', 'BSIT', 90, 'Unqualified', 'none', 'June/1/201', ''),
(9, 'Ray Manalo', 'Male', 'LSPU', 'ABM', 84, 99, 88, 88, 'ACT', 'BS Accountancy', 'BSAB', 'ACT', 90, 'Qualified', 'CA', 'June/1/201', ''),
(10, 'Garry Rivera', 'Male', 'LSPU', 'ICT', 80, 90, 84, 88, 'ACT', 'BAT', 'BSAB', 'ACT', 12, 'Unqualified', 'none', 'June/1/201', ''),
(11, 'Larry Quiano', 'Male', 'STI', 'GAS', 80, 90, 89, 85, 'ACT', 'BSA', 'BAT', 'BSA', 90, 'Unqualified', 'none', 'June/1/201', ''),
(12, 'Susan Laos', 'Female', 'LSPU', 'GAS', 80, 90, 84, 88, 'BSIT', 'BAT', 'BSIS', 'BSIT', 90, 'Qualified', 'CA', 'June/1/201', ''),
(13, 'Jenny Marquez', 'Female', 'LSPU', 'ABM', 84, 90, 84, 88, 'BSA', 'BS Accountancy', 'BAT', 'BSA', 90, 'Qualified', 'CA', 'June/1/201', ''),
(14, 'Aby Ser', 'Female', 'LSPU', 'GAS', 79, 90, 84, 88, 'ACT', 'BAT', 'BSBA', 'BAT', 75, 'Qualified', 'CA', 'June/1/201', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
