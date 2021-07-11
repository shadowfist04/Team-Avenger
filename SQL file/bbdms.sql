-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 04:43 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblblooddonars`
--

CREATE TABLE `tblblooddonars` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `bloodbank` varchar(55) NOT NULL,
  `district` varchar(40) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblooddonars`
--

INSERT INTO `tblblooddonars` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Gender`, `Age`, `BloodGroup`, `bloodbank`, `district`, `PostingDate`, `status`) VALUES
(1, 'Anuj Kumar', '9999857868', 'anuj@gmail.com', 'Male', 27, 'O+', 'District Hospital Blood Bank Udupi', 'UDUPI', '2021-07-09 07:15:15', 1),
(2, 'Rajesh', '4124124124', 'rajesh@gmail.com', 'Male', 34, 'AB-', 'Kasturba Medical College Blood Bank', 'UDUPI', '2021-07-09 07:17:51', 1),
(3, 'Ani', '4235235235', 'ani@gmail.com', 'Male', 23, 'A+', 'Red Cross Blood Bank,kundapura', 'UDUPI', '2021-07-09 07:41:21', 1),
(4, 'Pallavi', '3534543534', 'pallavi@gmail.com', 'Female', 26, 'AB-', 'Kasturba Medical College Blood Bank', 'UDUPI', '2021-07-09 08:21:42', 1),
(5, 'Nitesh Kumart', '8569855244', 'niiii@test.com', 'Male', 32, 'A-', 'The Uttara Kannada Blood Bank And Health Services Socie', 'UTTAR KANNADA', '2021-07-09 09:00:18', 1),
(6, 'John', '1234567890', 'john@gmail.com', 'Male', 22, 'B+', 'District Hospital Blood Bank Udupi', 'UDUPI', '2021-07-09 10:40:47', 1),
(7, 'Santhosh G Patkar', '08105827187', 'sanahanann@gmail.com', 'Male', 20, 'B+', 'krishna Rajendra Hospital Blood Bank', 'MYSORE', '2021-07-09 14:50:00', 1),
(8, 'Santhosh G Patkar', '08445827187', 'sanahanann@gmail.com', 'Male', 42, 'O-', 'Belgum Blood Bank With Blood COMPONENTS & Apheresis Cen', 'BELGAUM', '2021-07-09 16:51:55', 1),
(9, 'Santhosh G Patkar', '08445827187', 'sanahanann@gmail.com', 'Male', 42, 'O-', 'Shree Mahaveer Blood Bank', 'BELGAUM', '2021-07-09 16:59:20', 1),
(10, 'Rayson', '985745789', 'rasyon@gmail.com', 'Male', 20, 'B+', 'District Hospital Blood Bank Bijapur', 'BIJAPUR', '2021-07-09 17:01:06', 1),
(11, 'vaishak', '874589612', 'vaishak@gmail.com', 'Male', 25, 'AB+', 'Belgum Blood Bank With Blood COMPONENTS & Apheresis Cen', 'BELGAUM', '2021-07-09 17:14:33', 1),
(12, 'vaishak', '874589612', 'vaishak@gmail.com', 'Male', 25, 'AB+', 'District Hospital Blood Bank Bellary', 'BELLARY', '2021-07-09 17:15:06', 1),
(13, 'vaishak', '874589612', 'vaishak@gmail.com', 'Male', 25, 'AB+', 'swamy vivekananda voluntary bloodbank', 'BENGALORE RURAL', '2021-07-09 17:15:10', 1),
(14, 'shashank', '8754896578', 'shashank@gmail.com', 'Male', 20, 'B-', 'Chikkamagaluru Blood Bank', 'CHIKMAGALUR', '2021-07-09 17:15:45', 1),
(15, 'shashank', '8745213698', 'shashank123@gmail.com', 'Male', 20, 'B+', 'Hassan Blood Bank', 'HASSAN', '2021-07-10 08:31:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

CREATE TABLE `tblbloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`id`, `BloodGroup`, `PostingDate`) VALUES
(1, 'A+', '2021-07-09 06:13:50'),
(2, 'B+', '2021-07-09 06:15:00'),
(3, 'AB+', '2021-07-09 06:18:05'),
(4, 'O+', '2021-07-09 06:20:10'),
(5, 'A-', '2021-07-09 06:22:13'),
(6, 'B-', '2021-07-09 06:23:18'),
(7, 'AB-', '2021-07-09 06:24:20'),
(8, 'O-', '2021-07-09 06:25:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
