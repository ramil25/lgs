-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 05:00 AM
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
  `Surname` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
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
  `date_ad` varchar(30) NOT NULL,
  `photo_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `Surname`, `first_name`, `middle_name`, `gender`, `school_last_attended`, `strand_course`, `grade_GWA`, `grade_Math`, `grade_English`, `grade_Science`, `fchoice`, `schoice`, `tchoice`, `fcourse`, `raw_score`, `remarks`, `colleges`, `date_ad`, `photo_link`) VALUES
(3, 'James Cabantog', '', '', 'Male', 'STI', 'ABM', 80, 93, 84, 88, 'BSAB', 'BSA', 'BSBA', 'BSAB', 90, 'Qualified', 'CA', 'July/01/2019', ''),
(7, 'Joy Arroyo', '', '', 'Female', 'LSPU', 'ABM', 75, 90, 84, 85, 'BSA', 'BAT', 'BSAB', 'none', 75, 'Unqualified', 'none', 'June/01/2019', ''),
(8, 'Alan Calinagan', '', '', 'Male', 'STI', 'GAS', 80, 90, 84, 88, 'BSIT', 'BS Accountancy', 'BSIS', 'none', 90, 'Unqualified', 'none', 'June/01/2019', ''),
(10, 'Garry Rivera', '', '', 'Male', 'LSPU', 'ICT', 80, 90, 84, 88, 'ACT', 'BAT', 'BSAB', 'none', 12, 'Unqualified', 'none', 'June/01/2019', ''),
(11, 'Larry Quiano', '', '', 'Male', 'STI', 'GAS', 80, 90, 89, 85, 'ACT', 'BSA', 'BAT', 'none', 90, 'Unqualified', 'none', 'June/22/2019', ''),
(13, 'Jenny Marquez', '', '', 'Female', 'LSPU', 'ABM', 84, 90, 84, 88, 'BSA', 'BS Accountancy', 'BAT', 'BSA', 90, 'Qualified', 'CA', 'June/01/2019', ''),
(14, 'Aby Ser', '', '', 'Female', 'LSPU', 'GAS', 79, 90, 84, 88, 'ACT', 'BAT', 'BSBA', 'BAT', 75, 'Qualified', 'CA', 'June/01/2019', ''),
(16, 'Kerry Weng', '', '', 'Male', 'SLSU', 'GAS', 87, 90, 84, 88, 'BS Psychology', 'BSBA', 'BSA', 'BS Psychology', 90, 'Qualified', 'CAS', 'June/01/2019', ''),
(17, 'James Romero', '', '', 'Male', 'CAVSU', 'GAS', 88, 90, 88, 88, 'BS PSYCHOLOGY', 'BSBA', 'BSA', 'BS Psychology', 90, 'Qualified', 'CAS', 'June/01/2019', ''),
(18, 'Jenifer Paras', '', '', 'Female', 'SNHS', 'ABM', 80, 90, 90, 78, 'BS Criminology', 'BAT', 'BSA', 'BS Criminology', 89, 'Qualified', 'CCJE', 'June/01/2019', ''),
(19, 'Ramond Go', '', '', 'Male', 'LSPU', 'GAS', 76, 90, 77, 78, 'BSIT', 'BS Accountancy', 'BS Criminology', 'BS Criminology', 75, 'Qualified', 'CCJE', 'June/01/2019', ''),
(20, 'Eunice Alvaran', '', '', 'Female', 'LSPU', 'STEM', 84, 90, 84, 88, 'BSHM', 'BSACCO', 'BSBA', 'BSHM', 90, 'Qualified', 'CHMT', 'June/01/2019', ''),
(21, 'Ronz Kervin Breganza', '', '', 'Male', 'AMA', 'ICT', 80, 90, 77, 88, 'BSACCO', 'BSTM', 'BSA', 'BSTM', 90, 'Qualified', 'CHMT', 'June/01/2019', ''),
(22, 'Joanna Alcachupas', '', '', 'Female', 'SNHS', 'GAS', 75, 90, 84, 85, 'BSACCO', 'BSA', 'BSOA', 'BSOA', 75, 'Qualified', 'CBMA', 'June/01/2019', ''),
(23, 'Loyce Porta', '', '', 'Female', 'AMA', 'ABM', 95, 90, 84, 88, 'BSed', 'BSACCO', 'BSA', 'BSACCO', 90, 'Qualified', 'CBMA', 'June/01/2019', ''),
(24, 'Yuki Orelaano', '', '', 'Female', 'AMA', 'ABM', 88, 90, 84, 97, 'BSEd', 'BSBA', 'BSA', 'BSEd', 90, 'Qualified', 'CTE', 'June/01/2019', ''),
(25, 'Lennie Tolintino', '', '', 'Female', 'STI', 'GAS', 75, 93, 84, 85, 'BSIT', 'BSEd', 'BSA', 'BSEd', 89, 'Qualified', 'CTE', 'June/01/2019', ''),
(26, 'Diether Santos', '', '', 'Male', 'LSPU', 'ICT', 80, 90, 84, 85, 'BSCS', 'BSA', 'BSEd', 'BSEd', 89, 'Qualified', 'CTE', 'June/01/2019', ''),
(30, 'Grethel Shaine Banocnoc', '', '', 'Female', 'AMA', 'ICT', 95, 90, 84, 97, 'BSAgEng', 'BSBA', 'BSA', 'BSAgEng', 90, 'Qualified', 'IAE', 'June/01/2019', ''),
(31, 'Ellah Brondia Urma', '', '', 'Female', 'LSPU', 'GAS', 88, 90, 88, 88, 'BSA', 'BSAgEng', 'BSA', 'BSA', 90, 'Qualified', 'CA', 'June/01/2019', ''),
(32, 'Jane Manalo', '', '', 'Female', 'SHS', 'ABM', 90, 99, 99, 99, 'BSBA', '', '', 'BSBA', 90, 'Qualified', 'CBMA', 'June/01/2019', ''),
(34, 'Gel Buan', '', '', 'Male', 'SHS', 'ICT', 90, 89, 88, 78, 'BSIT', '', '', 'BSIT', 90, 'Qualified', 'CCS', 'June/01/2019', ''),
(35, 'Harry Potter', '', '', 'Male', 'LSPU', 'ICT', 90, 99, 99, 99, 'BSTM', 'BSAB', 'BSHM', 'BSTM', 90, 'Qualified', 'CHMT', 'June/01/2019', ''),
(36, 'Amer Kahulugan', '', '', 'Male', 'LSPU', 'GAS', 88, 90, 84, 88, 'BEED', 'BSACCO', 'BAT', 'BEED', 89, 'Qualified', 'CTE', 'October/1/2019', ''),
(37, 'Homer Lapitan', '', '', 'Male', 'STI', 'GAS', 80, 90, 84, 88, 'BSEd', 'BSACCO', 'BSTM', 'BSEd', 89, 'Qualified', 'CTE', 'August/1/2019', ''),
(38, 'alnahyan', '', '', 'Male', 'LSPU', 'ICT', 84, 90, 88, 85, 'BSCS', 'BSIT', 'BSHM', 'BSCS', 90, 'Qualified', 'CCS', 'June/1/2019', ''),
(39, 'Hannah', '', '', 'Female', 'AMA', 'GAS', 80, 90, 84, 88, 'BSCS', 'BSA', 'BSIT', 'BSIT', 90, 'Qualified', 'CCS', 'June/1/2019', ''),
(40, 'Dan Jerick Sison', '', '', 'Male', 'SLSU', 'ABM', 80, 90, 84, 88, 'BSTM', 'BS Psychology', 'BAT', 'BSTM', 89, 'Qualified', 'CHMT', 'June/1/2019', '');

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
  MODIFY `student_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
