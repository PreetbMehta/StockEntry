-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 02:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitedstocks`
--

-- --------------------------------------------------------

--
-- Table structure for table `signininfo`
--

CREATE TABLE `signininfo` (
  `id` int(10) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signininfo`
--

INSERT INTO `signininfo` (`id`, `Username`, `Password`) VALUES
(1, 'Admin', 'admin'),
(2, 'Bhavesh', 'bmm');

-- --------------------------------------------------------

--
-- Table structure for table `soldlist`
--

CREATE TABLE `soldlist` (
  `id` int(11) NOT NULL,
  `Stock Name` varchar(100) NOT NULL,
  `Buy Date` date NOT NULL,
  `Cost Price` double NOT NULL,
  `Buyer Info` varchar(100) NOT NULL,
  `Buy Quantity` int(10) NOT NULL,
  `Sell Quantity` int(10) NOT NULL,
  `Sell Date` date NOT NULL,
  `Sell Price` double NOT NULL,
  `UpdatedBy` varchar(10) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soldlist`
--

INSERT INTO `soldlist` (`id`, `Stock Name`, `Buy Date`, `Cost Price`, `Buyer Info`, `Buy Quantity`, `Sell Quantity`, `Sell Date`, `Sell Price`, `UpdatedBy`, `Status`) VALUES
(1, 'IBREAL', '2021-08-30', 112, 'Bhavesh Mehta', 500, 500, '2021-08-30', 182, '', 0),
(2, 'BASF', '2021-08-30', 3000, 'Bhavesh Mehta', 500, 500, '2021-08-31', 3005, '', 0),
(4, 'Tata motors', '0000-00-00', 400, 'Bhavesh Mehta', 500, 500, '2021-08-31', 500, '', 0),
(6, 'ZINDAL Steel', '2021-09-01', 417, 'Jay Thakkar', 500, 500, '2021-09-02', 417.5, '', 0),
(13, 'TVS Motors', '2021-07-22', 400, 'Jay Thakkar', 1000, 500, '2021-09-02', 500, '', 0),
(14, 'Reliance', '2021-09-01', 400, 'Bhavesh Mehta', 500, 250, '2021-09-02', 450, '', 0),
(17, 'xyz', '2021-09-01', 1000, 'Jay Thakkar', 500, 250, '2021-09-01', 1100, '', 0),
(19, 'Suzlon', '2021-08-30', 100, 'Vipul Chovatia', 50, 10, '2021-08-30', 130.3, '', 0),
(20, 'ZINDAL Steel', '2021-08-31', 400, 'Vipul Chovatia', 250, 500, '2021-09-01', 500, '', 0),
(21, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 5, 1, '2021-09-01', 92000, '', 0),
(22, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 4, 1, '2021-09-01', 92000, '', 0),
(23, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 4, 1, '2021-09-01', 92000, '', 0),
(24, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 4, 1, '2021-09-01', 92000, '', 0),
(25, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 3, 1, '2021-08-31', 93000, '', 0),
(26, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 2, 1, '2021-09-01', 92000, '', 0),
(27, 'IBREAL', '2021-09-12', 145, 'Bhavesh Mehta', 500, 25, '2021-09-13', 155, '', 0),
(28, 'AUBANK', '2021-08-31', 1270.08, 'Maulik Kabirpanthi', 798, 1, '2021-09-13', 1280, '', 0),
(29, 'AUBANK', '2021-08-31', 1270.08, 'Maulik Kabirpanthi', 797, 10, '2021-09-05', 1310.1, '', 0),
(30, 'AUBANK', '2021-08-31', 1270.08, 'Maulik Kabirpanthi', 787, 100, '2021-09-10', 1370.08, '', 0),
(31, 'AUBANK', '2021-08-31', 1270.08, 'Maulik Kabirpanthi', 599, 1, '2021-09-13', 1350.08, '', 0),
(32, 'yes bank', '2021-09-13', 11, 'Vipul Chovatia', 5000, 4000, '2021-09-14', 12.45, '', 0),
(33, 'Piramal', '2021-06-10', 100, 'Maulik Kabirpanthi', 100, 1, '2021-09-03', 100.101, '', 0),
(34, 'Piramal', '2021-06-10', 100, 'Maulik Kabirpanthi', 99, 1, '2021-09-18', 0, '', 0),
(35, 'Piramal', '2021-06-10', 0, 'Maulik Kabirpanthi', 98, 1, '2021-09-18', 3005, '', 0),
(36, 'Piramal', '2021-06-10', 100.01, 'Maulik Kabirpanthi', 97, 1, '2021-09-12', 150.05, '', 0),
(37, 'Reliance', '2021-09-02', 2.1, 'Jay Thakkar', 20, 3, '2021-09-11', 45, '', 0),
(38, 'LSIL', '2021-10-01', 5.85, 'Maulik Kabirpanthi', 500, 400, '2021-10-02', 6.1, '', 0),
(39, 'Reliance', '2021-09-02', 2.1, 'Jay Thakkar', 17, 17, '2021-11-11', 2, '', 0),
(40, 'Adani Ports', '2021-11-11', 736, 'Bhavesh Mehta', 131, 131, '2021-11-12', 740, '', 0),
(41, 'HDFC Bank', '2021-11-11', 1250, 'Bhavesh Mehta', 500, 250, '2021-11-12', 1300, 'Admin', 0),
(42, 'LSIL', '2021-11-11', 6.75, 'Vipul Chovatia', 1000, 1000, '2021-11-13', 7.25, 'Bhavesh', 0),
(43, 'HDFC Bank', '2021-11-11', 1250, 'Bhavesh Mehta', 250, 125, '2021-11-13', 1350, 'Bhavesh', 0),
(44, 'yes bank', '2021-09-13', 11, 'Vipul Chovatia', 1000, 500, '2021-11-13', 21, 'Bhavesh', 0),
(46, 'VI', '2021-11-07', 4.25, 'Bhavesh Mehta', 1000, 500, '2021-11-12', 5.25, 'Bhavesh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `unitedstocks`
--

CREATE TABLE `unitedstocks` (
  `id` int(11) NOT NULL,
  `BuyDate` date NOT NULL,
  `Stock Name` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Price` double NOT NULL,
  `Buyer Info` varchar(50) NOT NULL,
  `UpdatedBy` varchar(10) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unitedstocks`
--

INSERT INTO `unitedstocks` (`id`, `BuyDate`, `Stock Name`, `Quantity`, `Price`, `Buyer Info`, `UpdatedBy`, `Status`) VALUES
(5, '2021-06-10', 'Piramal', 96, 100, 'Maulik Kabirpanthi', '', 1),
(7, '2021-07-21', 'MRF tyres', 1, 90000, 'Vipul Chovatia', '', 1),
(8, '2021-07-23', 'ZINDAL Steel', 500, 417, 'Bhavesh Mehta', '', 1),
(25, '2021-08-30', 'Suzlon', 40, 100, 'Vipul Chovatia', '', 1),
(27, '2021-09-12', 'IBREAL', 475, 145, 'Bhavesh Mehta', '', 1),
(28, '2021-08-31', 'AUBANK', 598, 1270.08, 'Maulik Kabirpanthi', '', 1),
(29, '2021-09-13', 'yes bank', 500, 11, 'Vipul Chovatia', '', 1),
(32, '2021-10-01', 'LSIL', 100, 5.85, 'Maulik Kabirpanthi', '', 1),
(34, '2021-11-11', 'Adani Green', 150, 1227, 'Maulik Kabirpanthi', '', 1),
(35, '2021-11-11', 'HDFC Bank', 125, 1250, 'Bhavesh Mehta', 'Admin', 1),
(36, '2021-11-12', 'Irctc', 5, 800, 'Jay Thakkar', 'Bhavesh', 1),
(38, '2021-11-12', 'Suzlon', 500, 7, 'Jay Thakkar', 'Bhavesh', 1),
(39, '2021-11-07', 'VI', 500, 4.25, 'Bhavesh Mehta', 'Bhavesh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signininfo`
--
ALTER TABLE `signininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soldlist`
--
ALTER TABLE `soldlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unitedstocks`
--
ALTER TABLE `unitedstocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signininfo`
--
ALTER TABLE `signininfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soldlist`
--
ALTER TABLE `soldlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `unitedstocks`
--
ALTER TABLE `unitedstocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
