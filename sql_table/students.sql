-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 01:25 PM
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
  `date_ad` date NOT NULL,
  `photo_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `Surname`, `first_name`, `middle_name`, `gender`, `school_last_attended`, `strand_course`, `grade_GWA`, `grade_Math`, `grade_English`, `grade_Science`, `fchoice`, `schoice`, `tchoice`, `fcourse`, `raw_score`, `remarks`, `colleges`, `date_ad`, `photo_link`) VALUES
(3, 'Cabantog', 'James', 'C.', 'Male', 'STI', 'ABM', 80, 93, 84, 88, 'BSAB', 'BSA', 'BSBA', 'BSAB', 90, 'Qualified', 'CA', '2019-04-25', ''),
(8, 'Alan Calinagan', '', '', 'Male', 'STI', 'GAS', 80, 90, 84, 88, 'BSIT', 'BS Accountancy', 'BSIS', 'none', 90, 'Unqualified', 'none', '2019-06-01', ''),
(10, 'Garry Rivera', '', '', 'Male', 'LSPU', 'ICT', 80, 90, 84, 88, 'ACT', 'BAT', 'BSAB', 'none', 12, 'Unqualified', 'none', '2019-06-01', ''),
(11, 'Larry Quiano', '', '', 'Male', 'STI', 'GAS', 80, 90, 89, 85, 'ACT', 'BSA', 'BAT', 'none', 90, 'Unqualified', 'none', '2019-06-01', ''),
(13, 'Jenny Marquez', '', '', 'Female', 'LSPU', 'ABM', 84, 90, 84, 88, 'BSA', 'BS Accountancy', 'BAT', 'BSA', 90, 'Qualified', 'CA', '2019-06-01', ''),
(14, 'Aby Ser', '', '', 'Female', 'LSPU', 'GAS', 79, 90, 84, 88, 'ACT', 'BAT', 'BSBA', 'BAT', 75, 'Qualified', 'CA', '2019-06-01', ''),
(16, 'Kerry Weng', '', '', 'Male', 'SLSU', 'GAS', 87, 90, 84, 88, 'BS Psychology', 'BSBA', 'BSA', 'BS Psychology', 90, 'Qualified', 'CAS', '2019-06-01', ''),
(17, 'James Romero', '', '', 'Male', 'CAVSU', 'GAS', 88, 90, 88, 88, 'BS PSYCHOLOGY', 'BSBA', 'BSA', 'BS Psychology', 90, 'Qualified', 'CAS', '2019-06-01', ''),
(18, 'Jenifer Paras', '', '', 'Female', 'SNHS', 'ABM', 80, 90, 90, 78, 'BS Criminology', 'BAT', 'BSA', 'BS Criminology', 89, 'Qualified', 'CCJE', '2019-06-01', ''),
(19, 'Ramond Go', '', '', 'Male', 'LSPU', 'GAS', 76, 90, 77, 78, 'BSIT', 'BS Accountancy', 'BS Criminology', 'BS Criminology', 75, 'Qualified', 'CCJE', '2019-06-01', ''),
(20, 'Eunice Alvaran', '', '', 'Female', 'LSPU', 'STEM', 84, 90, 84, 88, 'BSHM', 'BSACCO', 'BSBA', 'BSHM', 90, 'Qualified', 'CHMT', '2019-06-01', ''),
(21, 'Ronz Kervin Breganza', '', '', 'Male', 'AMA', 'ICT', 80, 90, 77, 88, 'BSACCO', 'BSTM', 'BSA', 'BSTM', 90, 'Qualified', 'CHMT', '2020-04-10', ''),
(22, 'Joanna Alcachupas', '', '', 'Female', 'SNHS', 'GAS', 75, 90, 84, 85, 'BSACCO', 'BSA', 'BSOA', 'BSOA', 75, 'Qualified', 'CBMA', '2019-06-01', ''),
(23, 'Loyce Porta', '', '', 'Female', 'AMA', 'ABM', 95, 90, 84, 88, 'BSed', 'BSACCO', 'BSA', 'BSACCO', 90, 'Qualified', 'CBMA', '2019-06-01', ''),
(24, 'Yuki Orelaano', '', '', 'Female', 'AMA', 'ABM', 88, 90, 84, 97, 'BSEd', 'BSBA', 'BSA', 'BSEd', 90, 'Qualified', 'CTE', '2019-06-01', ''),
(25, 'Lennie Tolintino', '', '', 'Female', 'STI', 'GAS', 75, 93, 84, 85, 'BSIT', 'BSEd', 'BSA', 'BSEd', 89, 'Qualified', 'CTE', '2020-06-01', ''),
(26, 'Diether Santos', '', '', 'Male', 'LSPU', 'ICT', 80, 90, 84, 85, 'BSCS', 'BSA', 'BSEd', 'BSEd', 89, 'Qualified', 'CTE', '2020-06-01', ''),
(30, 'Grethel Shaine Banocnoc', '', '', 'Female', 'AMA', 'ICT', 95, 90, 84, 97, 'BSAgEng', 'BSBA', 'BSA', 'BSAgEng', 90, 'Qualified', 'IAE', '2019-06-01', ''),
(31, 'Ellah Brondia Urma', '', '', 'Female', 'LSPU', 'GAS', 88, 90, 88, 88, 'BSA', 'BSAgEng', 'BSA', 'BSA', 90, 'Qualified', 'CA', '2020-06-01', ''),
(32, 'Jane Manalo', '', '', 'Female', 'SHS', 'ABM', 90, 99, 99, 99, 'BSBA', '', '', 'BSBA', 90, 'Qualified', 'CBMA', '2019-06-01', ''),
(34, 'Gel Buan', '', '', 'Male', 'SHS', 'ICT', 90, 89, 88, 78, 'BSIT', '', '', 'BSIT', 90, 'Qualified', 'CCS', '2019-06-01', ''),
(35, 'Harry Potter', '', '', 'Male', 'LSPU', 'ICT', 90, 99, 99, 99, 'BSTM', 'BSAB', 'BSHM', 'BSTM', 90, 'Qualified', 'CHMT', '2019-06-01', ''),
(36, 'Amer Kahulugan', '', '', 'Male', 'LSPU', 'GAS', 88, 90, 84, 88, 'BEED', 'BSACCO', 'BAT', 'BEED', 89, 'Qualified', 'CTE', '2019-06-01', ''),
(37, 'Homer Lapitan', '', '', 'Male', 'STI', 'GAS', 80, 90, 84, 88, 'BSEd', 'BSACCO', 'BSTM', 'BSEd', 89, 'Qualified', 'CTE', '2019-06-01', ''),
(38, 'alnahyan', '', '', 'Male', 'LSPU', 'ICT', 84, 90, 88, 85, 'BSCS', 'BSIT', 'BSHM', 'BSCS', 90, 'Qualified', 'CCS', '2019-06-01', ''),
(39, 'Hannah', '', '', 'Female', 'AMA', 'GAS', 80, 90, 84, 88, 'BSCS', 'BSA', 'BSIT', 'BSIT', 90, 'Qualified', 'CCS', '2019-06-01', ''),
(40, 'Dan Jerick Sison', '', '', 'Male', 'SLSU', 'ABM', 80, 90, 84, 88, 'BSTM', 'BS Psychology', 'BAT', 'BSTM', 89, 'Qualified', 'CHMT', '2019-06-01', ''),
(41, 'Miras', 'Robert', 'L.', 'Male', 'AMA', 'ICT', 90, 99, 99, 99, 'BSIT', 'BSCS', 'ACT', 'BSIT', 90, 'Qualified', 'CCS', '2019-06-01', ''),
(42, 'Oracion', 'Kobie', 'M.', 'Male', 'SHS', 'ABM', 90, 99, 84, 85, 'BSA', 'BSFOODTECH', 'BSTM', 'BSA', 90, 'Qualified', 'CA', '2019-06-01', ''),
(43, 'Miras', 'Kobie', 'L.', 'Male', 'SHS', 'ABM', 90, 99, 99, 88, 'BS Psychology', 'BS Psychology', 'BSTM', 'BS Psychology', 90, 'Qualified', 'CAS', '2019-06-01', ''),
(44, 'Cabantog', 'Kobie', 'L.', 'Male', 'AMA', 'ABM', 90, 99, 99, 99, 'BSBA', 'BS Psychology', 'BSFOODTECH', 'BSBA', 75, 'Qualified', 'CBMA', '2019-06-01', ''),
(45, 'Arroyo', 'Robert', 'C.', 'Male', 'SHS', 'ABM', 80, 99, 99, 88, 'BS Psychology', 'BSCriminology', 'BSHM', 'BS Psychology', 90, 'Qualified', 'CAS', '2019-04-08', ''),
(46, 'Oracion', 'Robert', 'L.', 'Female', 'SHS', 'ABM', 80, 90, 99, 88, 'BSHM', 'BEED', 'BSIS', 'BSHM', 90, 'Qualified', 'CHMT', '2019-06-01', ''),
(47, 'Arroyo', 'Robert', 'M.', 'Male', 'SHS', 'ICT', 90, 90, 99, 85, 'BSACCO', 'BSBA', 'BSHM', 'BSACCO', 90, 'Qualified', 'CBMA', '2019-06-01', ''),
(48, 'Arroyo', 'Robert', 'L.', 'Male', 'SHS', 'ABM', 90, 99, 99, 85, 'BSBA', 'BS Psychology', 'BS Psychology', 'BSBA', 90, 'Qualified', 'CBMA', '2019-06-01', ''),
(49, 'Arroyo', 'Robert', 'C.', 'Male', 'SHS', 'ABM', 90, 99, 99, 85, 'BSACCO', 'BSBA', 'BSHM', 'BSACCO', 90, 'Qualified', 'CBMA', '2019-06-01', ''),
(50, 'Arroyo', 'Kobie', 'M.', 'Female', 'SHS', 'ABM', 90, 99, 99, 85, 'BSTM', 'BSHM', 'BEED', 'BSTM', 75, 'Qualified', 'CHMT', '2019-06-01', ''),
(51, 'Arroyo', 'Kobie', 'C.', 'Male', 'SHS', 'ICT', 90, 90, 84, 85, 'BS Psychology', 'BSHM', 'BS Psychology', 'BS Psychology', 75, 'Qualified', 'CAS', '2019-06-01', ''),
(52, 'Arroyo', 'Robert', 'L.', 'Female', 'SHS', 'ICT', 90, 99, 99, 99, 'BSACCO', 'BSACCO', 'BS Psychology', 'BSACCO', 90, 'Qualified', 'CBMA', '2019-04-04', ''),
(53, 'Arroyo', 'Robert', 'L.', 'Female', 'SHS', 'ICT', 90, 99, 99, 99, 'BSACCO', 'BSACCO', 'BS Psychology', 'BSACCO', 90, 'Qualified', 'CBMA', '2019-04-04', ''),
(54, 'Calocan', 'Leslie', 'P.', 'Male', 'AMA', 'ABM', 90, 99, 99, 88, 'BSHM', 'ACT', 'BSFOODTECH', 'BSHM', 75, 'Qualified', 'CHMT', '2019-01-08', '');

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
  MODIFY `student_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
