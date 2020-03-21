-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2020 at 06:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `INMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `deatail_of_center`
--

CREATE TABLE `deatail_of_center` (
  `C_ID` varchar(20) NOT NULL,
  `C_Name` varchar(30) NOT NULL,
  `C_Address` text NOT NULL,
  `C_State` char(20) NOT NULL,
  `C_PIN` int(10) NOT NULL,
  `C_URL` text NOT NULL,
  `C_Phone` int(20) NOT NULL,
  `C_Head` char(20) NOT NULL,
  `C_Designation` char(20) NOT NULL,
  `C_Mail` text NOT NULL,
  `C_Mobile` int(20) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `TIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deatail_of_sub_center`
--

CREATE TABLE `deatail_of_sub_center` (
  `S_ID` varchar(20) NOT NULL,
  `S_Name` char(30) NOT NULL,
  `S_Address` text NOT NULL,
  `S_State` char(20) NOT NULL,
  `S_PIN` int(10) NOT NULL,
  `S_URL` text NOT NULL,
  `S_Phone` int(20) NOT NULL,
  `S_Head` char(20) NOT NULL,
  `S_Designation` char(20) NOT NULL,
  `S_Mail` text NOT NULL,
  `S_Mobile` int(20) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `TIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `details_of_land`
--

CREATE TABLE `details_of_land` (
  `Land_ID` varchar(20) NOT NULL,
  `Land_Location` varchar(30) NOT NULL,
  `Land_Type` char(100) NOT NULL,
  `Land_Area` decimal(20,2) NOT NULL,
  `Land_Leas_peirod` varchar(10) NOT NULL,
  `Land_Status` text NOT NULL,
  `UID` varchar(20) NOT NULL,
  `TIME` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `Index` int(10) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`Index`, `UID`, `Password`) VALUES
(1, 'akmishra', '9406440675');

-- --------------------------------------------------------

--
-- Table structure for table `propsal`
--

CREATE TABLE `propsal` (
  `PID` varchar(20) NOT NULL,
  `C_ID` varchar(20) NOT NULL,
  `S_ID` varchar(20) NOT NULL,
  `Land_ID` varchar(20) NOT NULL,
  `area_of_construction` decimal(10,2) NOT NULL,
  `FAR` text NOT NULL,
  `FAR_File` longblob NOT NULL,
  `TnC` text NOT NULL,
  `TnC_File` longblob NOT NULL,
  `reasion_of_construction` text NOT NULL,
  `estimated_cost` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `TIME` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deatail_of_center`
--
ALTER TABLE `deatail_of_center`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `deatail_of_sub_center`
--
ALTER TABLE `deatail_of_sub_center`
  ADD PRIMARY KEY (`S_ID`),
  ADD KEY `S_ID` (`S_ID`);

--
-- Indexes for table `details_of_land`
--
ALTER TABLE `details_of_land`
  ADD PRIMARY KEY (`Land_ID`),
  ADD KEY `Land_ID` (`Land_ID`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD UNIQUE KEY `UID` (`UID`),
  ADD KEY `Index` (`Index`);

--
-- Indexes for table `propsal`
--
ALTER TABLE `propsal`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `C_ID` (`C_ID`,`S_ID`,`Land_ID`),
  ADD KEY `S_ID` (`S_ID`),
  ADD KEY `Land_ID` (`Land_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `propsal`
--
ALTER TABLE `propsal`
  ADD CONSTRAINT `propsal_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `deatail_of_center` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propsal_ibfk_2` FOREIGN KEY (`S_ID`) REFERENCES `deatail_of_sub_center` (`S_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propsal_ibfk_3` FOREIGN KEY (`Land_ID`) REFERENCES `details_of_land` (`Land_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
