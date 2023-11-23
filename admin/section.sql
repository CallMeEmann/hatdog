-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 08:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `section`
--

-- --------------------------------------------------------

--
-- Table structure for table `section a`
--

CREATE TABLE `section a` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section a`
--

INSERT INTO `section a` (`id`, `teacher`, `section`, `course`, `course_time`, `room`) VALUES
(17, 'emann', '3C', 'stem', '9:00 to 11:00', 'COE room 102');

-- --------------------------------------------------------

--
-- Table structure for table `section b`
--

CREATE TABLE `section b` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section b`
--

INSERT INTO `section b` (`id`, `teacher`, `section`, `course`, `course_time`, `room`) VALUES
(12, 'eman', '1A', 'stem', '9:00 to 11:00', 'COE room 102');

-- --------------------------------------------------------

--
-- Table structure for table `section c`
--

CREATE TABLE `section c` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section c`
--

INSERT INTO `section c` (`id`, `teacher`, `section`, `course`, `course_time`, `room`) VALUES
(12, 'emmunal reimond macapia', '1B', 'stem', '9:00 - 11:00', 'COE room 102');

-- --------------------------------------------------------

--
-- Table structure for table `section d`
--

CREATE TABLE `section d` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section d`
--

INSERT INTO `section d` (`id`, `teacher`, `section`, `course`, `course_time`, `room`) VALUES
(12, 'eman macapia', '3C', 'stem', '9:00 - 11:00', 'COE room 102');

-- --------------------------------------------------------

--
-- Table structure for table `section e`
--

CREATE TABLE `section e` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section e`
--

INSERT INTO `section e` (`id`, `teacher`, `section`, `course`, `course_time`, `room`) VALUES
(12, 'eman', '3C', 'stem', '9:00 to 11:00', 'COE room 102');

-- --------------------------------------------------------

--
-- Table structure for table `section f`
--

CREATE TABLE `section f` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section f`
--

INSERT INTO `section f` (`id`, `teacher`, `section`, `course`, `course_time`, `room`) VALUES
(8, 'emann', '3C', 'stem', '9:00 to 11:00', 'COE room 102');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section a`
--
ALTER TABLE `section a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section b`
--
ALTER TABLE `section b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section c`
--
ALTER TABLE `section c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section d`
--
ALTER TABLE `section d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section e`
--
ALTER TABLE `section e`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section f`
--
ALTER TABLE `section f`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `section a`
--
ALTER TABLE `section a`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `section b`
--
ALTER TABLE `section b`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `section c`
--
ALTER TABLE `section c`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `section d`
--
ALTER TABLE `section d`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `section e`
--
ALTER TABLE `section e`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `section f`
--
ALTER TABLE `section f`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
