-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2021 at 08:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`name`, `pass`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `studentid` text NOT NULL,
  `username` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `class_Id` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `deleted` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`studentid`, `username`, `email`, `class_Id`, `password`, `deleted`) VALUES
('121212', 'n', '', '2C', 'b9d4007f8382e2f28c947849f62b4a67', 0),
('110112', 'Lynn', 'ekralynn@gmail.com', '2S', '0705cbb658e06758adc0a2bff7aa3d2c', 0),
('111000', 'mq', 'mq@gmail.com', '3A', '0705cbb658e06758adc0a2bff7aa3d2c', 1),
('112110', 'quincy ombati', 'quincymaccine@gmail.com', '3S', '0705cbb658e06758adc0a2bff7aa3d2c', 0),
('', 'Teacher X', 'teacherx@gmail.com', '', '0705cbb658e06758adc0a2bff7aa3d2c', 0),
('', 'Teacher Ombati', 'TeacherYY@gmail.com', '', '0705cbb658e06758adc0a2bff7aa3d2c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_teacher`
--

CREATE TABLE `user_teacher` (
  `teacherid` text NOT NULL,
  `username` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_teacher`
--

INSERT INTO `user_teacher` (`teacherid`, `username`, `email`, `password`, `deleted`) VALUES
('100', 'Teacher Yr ', 'teacherw@gmail.com', '0705cbb658e06758adc0a2bff7aa3d2c', 0),
('23', 'TeacherX', 'teacherx@gmail.com', '0705cbb658e06758adc0a2bff7aa3d2c', 1),
('25', 'teacherZ', 'teacherZ@gmail.com', '0705cbb658e06758adc0a2bff7aa3d2c', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_teacher`
--
ALTER TABLE `user_teacher`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
