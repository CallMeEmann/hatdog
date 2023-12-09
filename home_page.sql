-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 02:33 PM
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
-- Database: `home_page`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `id` int(250) NOT NULL,
  `book` varchar(250) NOT NULL,
  `enter` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrowers_deatils`
--

CREATE TABLE `borrowers_deatils` (
  `id` int(250) NOT NULL,
  `borrowers` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrowers_deatils`
--

INSERT INTO `borrowers_deatils` (`id`, `borrowers`, `role`, `name`, `department`) VALUES
(1, '11', ' student', 'eman macapia', 'coe'),
(2, '11', ' COE', 'eman macapia', '1B'),
(3, '11', ' COE', 'eman macapia', '1B'),
(4, '11', ' COE', 'eman macapia', '1B'),
(5, '11', ' COE', 'eman macapia', '1B'),
(6, '11', ' COE', 'eman macapia', '1B'),
(7, '11', ' COE', 'eman macapia', '1B'),
(8, '11', ' COE', 'eman macapia', '1B'),
(9, '11', ' COE', 'eman macapia', '1B'),
(10, '11', ' COE', 'eman macapia', '1B'),
(11, '11', ' COE', 'eman macapia', '1B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers_deatils`
--
ALTER TABLE `borrowers_deatils`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrowers_deatils`
--
ALTER TABLE `borrowers_deatils`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
