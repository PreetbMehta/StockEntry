-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 02:59 PM
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
  `Sell Brokerage` double NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soldlist`
--

INSERT INTO `soldlist` (`id`, `Stock Name`, `Buy Date`, `Cost Price`, `Buyer Info`, `Buy Quantity`, `Sell Quantity`, `Sell Date`, `Sell Price`, `Sell Brokerage`, `Status`) VALUES
(1, 'IBREAL', '2021-08-30', 112, 'Bhavesh Mehta', 500, 500, '2021-08-30', 182, 0, 0),
(2, 'BASF', '2021-08-30', 3000, 'Bhavesh Mehta', 500, 500, '2021-08-31', 3005, 0, 0),
(4, 'Tata motors', '0000-00-00', 400, 'Bhavesh Mehta', 500, 500, '2021-08-31', 500, 0, 0),
(6, 'ZINDAL Steel', '2021-09-01', 417, 'Jay Thakkar', 500, 500, '2021-09-02', 417.5, 0, 0),
(13, 'TVS Motors', '2021-07-22', 400, 'Jay Thakkar', 1000, 500, '2021-09-02', 500, 34, 0),
(14, 'Reliance', '2021-09-01', 400, 'Bhavesh Mehta', 500, 250, '2021-09-02', 450, 23, 0),
(17, 'xyz', '2021-09-01', 1000, 'Jay Thakkar', 500, 250, '2021-09-01', 1100, 23, 0),
(19, 'Suzlon', '2021-08-30', 100, 'Vipul Chovatia', 50, 10, '2021-08-30', 130.3, 15, 0),
(20, 'ZINDAL Steel', '2021-08-31', 400, 'Vipul Chovatia', 250, 500, '2021-09-01', 500, 23, 0),
(21, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 5, 1, '2021-09-01', 92000, 15, 0),
(22, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 4, 1, '2021-09-01', 92000, 15, 0),
(23, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 4, 1, '2021-09-01', 92000, 15, 0),
(24, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 4, 1, '2021-09-01', 92000, 15, 0),
(25, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 3, 1, '2021-08-31', 93000, 15.2, 0),
(26, 'MRF tyres', '2021-07-21', 90000, 'Vipul Chovatia', 2, 1, '2021-09-01', 92000, 15.2, 0);

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
  `Buy Brokerage` double NOT NULL,
  `Buyer Info` varchar(50) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unitedstocks`
--

INSERT INTO `unitedstocks` (`id`, `BuyDate`, `Stock Name`, `Quantity`, `Price`, `Buy Brokerage`, `Buyer Info`, `Status`) VALUES
(5, '2021-06-10', 'Piramal', 100, 100, 0, 'Maulik Kabirpanthi', 1),
(7, '2021-07-21', 'MRF tyres', 1, 90000, 0, 'Vipul Chovatia', 1),
(8, '2021-07-23', 'ZINDAL Steel', 500, 417, 0, 'Bhavesh Mehta', 1),
(9, '2021-07-22', 'TVS Motors', 1000, 400, 0, 'Jay Thakkar', 0),
(11, '2021-06-26', 'Asian Paints', 10, 3101, 0, 'Bhavesh Mehta', 0),
(12, '2021-07-29', 'IOC LTD', 500, 105, 0, 'Vipul Chovatia', 0),
(14, '0000-00-00', 'Tata motors', 500, 400, 0, 'Bhavesh Mehta', 0),
(16, '2021-07-21', 'Tata motors', 500, 417, 0, 'Jay Thakkar', 0),
(17, '2021-08-30', 'BASF', 500, 3000, 0, 'Bhavesh Mehta', 0),
(19, '2021-09-01', 'ASTERDM HEALTH', 200, 230, 0, 'Bhavesh Mehta', 0),
(20, '2021-09-01', 'ZINDAL Steel', 500, 417, 0, 'Jay Thakkar', 0),
(21, '2021-09-04', 'Reliance', 500, 2100.56005859375, 0, 'Maulik Kabirpanthi', 0),
(22, '2021-09-10', 'abc', 500, 300, 0, 'Maulik Kabirpanthi', 1),
(23, '2021-09-01', 'xyz', 250, 1000, 0, 'Jay Thakkar', 0),
(24, '2021-09-01', 'Reliance', 250, 400, 33, 'Bhavesh Mehta', 0),
(25, '2021-08-30', 'Suzlon', 40, 100, 15, 'Vipul Chovatia', 1),
(26, '2021-08-31', 'ZINDAL Steel', 250, 400, 33, 'Vipul Chovatia', 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `soldlist`
--
ALTER TABLE `soldlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `unitedstocks`
--
ALTER TABLE `unitedstocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
