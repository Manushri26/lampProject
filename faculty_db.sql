-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 01:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Roll number` varchar(8) NOT NULL,
  `Number of absent` int(3) NOT NULL,
  `Total number of classes` int(3) NOT NULL DEFAULT 25,
  `Attendance percent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qID` int(3) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `tfilename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qID`, `tname`, `tfilename`) VALUES
(8, 'Anuja', 'Resume latest.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `regiform`
--

CREATE TABLE `regiform` (
  `name` varchar(50) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `Hobby` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` int(10) NOT NULL,
  `rid` int(4) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regiform`
--

INSERT INTO `regiform` (`name`, `sex`, `dob`, `Hobby`, `Address`, `City`, `Email`, `Contact`, `rid`, `Time`) VALUES
('Mansi Gautam Palsana', 'female', '2018-01-16', 'hobby', 'Atpl, Adalaj', 'Gandhinagar', '18bce114@nirmauni.ac.in', 88888999, 1, '2021-03-30 16:23:26'),
('Mansi Gautam Palsana1', 'female', '2020-12-01', 'hobbyiii', 'Atpl, Adalaj', 'Gandhinagar', '18bce114@nirmauni.ac.in', 54545846, 2, '2021-03-30 16:45:11'),
('Mansi Gautam Palsana', 'female', '2018-11-30', 'hobby', 'Atpl, Adalaj', 'Gandhinagar', '18bce114@nirmauni.ac.in', 78787888, 3, '2021-03-30 18:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `student marks`
--

CREATE TABLE `student marks` (
  `Name` varchar(50) NOT NULL,
  `Roll number` varchar(8) NOT NULL,
  `FA1 score` int(2) NOT NULL,
  `FA2 score` int(2) NOT NULL,
  `SA1 score` int(3) NOT NULL,
  `FA3 score` int(2) NOT NULL,
  `FA4 score` int(2) NOT NULL,
  `SA2 score` int(3) NOT NULL,
  `Cumulative result` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student marks`
--

INSERT INTO `student marks` (`Name`, `Roll number`, `FA1 score`, `FA2 score`, `SA1 score`, `FA3 score`, `FA4 score`, `SA2 score`, `Cumulative result`) VALUES
('mnj', '18bce002', 21, 25, 98, 23, 24, 97, 68),
('Rahul', '18bce003', 21, 25, 91, 27, 24, 95, 66),
('Diya', '18bce005', 24, 25, 97, 23, 22, 95, 67);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `sid` int(8) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL DEFAULT 'synergy2021',
  `Created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`sid`, `Username`, `Password`, `Created_at`) VALUES
(6, 'ram', '789789', '2021-03-28 15:28:19'),
(7, 'priya', '123456', '2021-03-28 15:28:31'),
(8, 'ajay', 'ajay', '2021-03-28 15:28:41'),
(9, 'Diya', 'Diya123', '2021-04-24 16:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `hwID` int(3) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`hwID`, `sname`, `filename`) VALUES
(11, 'ram', 'transcript-converted.pdf'),
(12, 'priya', 'Resume latest-pages-deleted.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `tid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `tpassword` varchar(30) NOT NULL,
  `fdatestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `Subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`tid`, `fname`, `tpassword`, `fdatestamp`, `Subject`) VALUES
(4, 'Anuja', '111111', '2021-03-28 14:08:42', 'Maths'),
(5, 'Dhaval', '456', '2021-03-28 14:09:39', 'Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Roll number`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qID`);

--
-- Indexes for table `regiform`
--
ALTER TABLE `regiform`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `student marks`
--
ALTER TABLE `student marks`
  ADD PRIMARY KEY (`Roll number`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`hwID`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`tid`),
  ADD UNIQUE KEY `Subject` (`Subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `regiform`
--
ALTER TABLE `regiform`
  MODIFY `rid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `sid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `hwID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher_login`
--
ALTER TABLE `teacher_login`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
