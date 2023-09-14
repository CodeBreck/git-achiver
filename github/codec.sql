-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 11:27 AM
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
-- Database: `forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `codec`
--

CREATE TABLE `codec` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Email` varchar(42) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `MNumber` bigint(12) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `State` varchar(45) NOT NULL,
  `Father_Name` varchar(45) NOT NULL,
  `Mother_Name` varchar(45) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `codec`
--

INSERT INTO `codec` (`ID`, `Name`, `Email`, `Password`, `MNumber`, `Country`, `State`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Gender`, `image`) VALUES
(2, 'Ayush Sharma', 'Ayush21@gmail.com', 'A01', 6787876787, 'IN', 'Delhi', 'Mudgal Sharma', 'Sumitra Sharma', '2002-06-04', 'Male', 'images/Screenshot 2023-09-06 120245.png'),
(3, 'Saloni Raj', 'saloniraj23@gmail.com', 'S01', 9727141115, 'IN', 'bihar', 'Tarron Bhaduri', 'indra Bhaduri', '2001-02-14', 'Female', 'images/nice.jpg'),
(4, 'Saloni Raj', 'saloniji23@gmail.com', '12345', 9977886655, 'IN', 'Bihar', 'Bhukkhad', 'Pout', '2001-06-26', 'Female', 'images/nice.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codec`
--
ALTER TABLE `codec`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codec`
--
ALTER TABLE `codec`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
