-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2025 at 08:04 AM
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
-- Database: `DBFinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `stuName` text NOT NULL,
  `IDNumber` int(11) NOT NULL,
  `dateOfBirth` text NOT NULL,
  `email` text NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `major` text NOT NULL,
  `seq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`stuName`, `IDNumber`, `dateOfBirth`, `email`, `phoneNumber`, `major`, `seq`) VALUES
('Landon Haney', 1, '1/7/2005', 'landon@gmail.com', '111-111-1111', 'ComSci', 1),
('Colton Haney', 2, '5/22/2008', 'colton@gmail.com', '222-222-2222', 'Business', 2),
('Dawson Haney', 3, '4/19/2011', 'dawson@gmail.com', '333-333-3333', 'Math', 3),
('Ryland Haney', 4, '6/15/2006', 'ryland@gmail.com', '444-444-4444', 'Psych', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`seq`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `seq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
