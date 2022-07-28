-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 08:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(50) NOT NULL,
  `services_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_history`
--

CREATE TABLE `student_history` (
  `sr_code` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `services_name` int(11) NOT NULL,
  `time_in` int(11) NOT NULL,
  `time_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `sr-code` varchar(8) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `program` varchar(250) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`sr-code`, `firstname`, `lastname`, `department`, `program`, `section`) VALUES
('19-77824', 'Rodelyn', 'Pondare', 'CICS', 'BSIT', '1101'),
('19-77825', 'Karen', 'Quizana', 'CICS', 'BSIT', '1101'),
('19-77826', 'Arnold', 'Bausas', 'CICS', 'BSIT', '1101'),
('19-77827', 'Fatima', 'De Ore', 'CICS', 'BSIT', '1101'),
('19-77828', 'Nicole', 'Sanchez', 'CICS', 'BSIT', '1101'),
('19-77829', 'Sheila', 'Perez', 'CICS', 'BSIT', '1101'),
('19-77830', 'Caleb', 'Dominic', 'CICS', 'BSIT', '1101'),
('19-77831', 'Lucius', 'Comodeus', 'CICS', 'BSIT', '1101'),
('19-77832', 'Ashley', 'Catapang', 'CICS', 'BSIT', '1101'),
('19-77833', 'Dona Mae', 'De Jesus', 'CICS', 'BSIT', '1101'),
('19-77834', 'Maribel', 'Panganiban', 'CICS', 'BSIT', '1101'),
('19-77835', 'Christine Mae', 'Cahayon', 'CICS', 'BSIT', '1101'),
('19-77836', 'Perwin', 'Bausas', 'CICS', 'BSIT', '1101'),
('19-77837', 'Joshua', 'Villanueva', 'CICS', 'BSIT', '1101'),
('19-77838', 'Agnes', 'Velasquez', 'CICS', 'BSIT', '1101'),
('19-77839', 'Rael', 'Mabuhay', 'CICS', 'BSIT', '1101'),
('19-77840', 'Asher', 'Delfeo', 'CICS', 'BSIT', '1101'),
('19-77841', 'Zeus', 'Neri', 'CICS', 'BSIT', '1101'),
('19-77842', 'Reynan', 'Bermudo', 'CICS', 'BSIT', '1101');

-- --------------------------------------------------------

--
-- Table structure for table `student_time_history`
--

CREATE TABLE `student_time_history` (
  `sr_code` int(50) NOT NULL,
  `time_in` int(50) NOT NULL,
  `time_out` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `student_history`
--
ALTER TABLE `student_history`
  ADD PRIMARY KEY (`sr_code`);

--
-- Indexes for table `student_time_history`
--
ALTER TABLE `student_time_history`
  ADD PRIMARY KEY (`sr_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_history`
--
ALTER TABLE `student_history`
  MODIFY `sr_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_time_history`
--
ALTER TABLE `student_time_history`
  MODIFY `sr_code` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
