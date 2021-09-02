-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 10:03 AM
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
-- Table structure for table `unitedstocks`
--

CREATE TABLE `unitedstocks` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Stock Name` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Buyer Info` varchar(50) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unitedstocks`
--

INSERT INTO `unitedstocks` (`id`, `Date`, `Stock Name`, `Quantity`, `Price`, `Buyer Info`, `Status`) VALUES
(1, '0000-00-00', 'IBREAL', 500, 300, 'Jay Thakkar', 1),
(3, '0000-00-00', 'Suzlon', 5000, 10, 'Jay Thakkar', 0),
(4, '2021-07-19', 'Tata motors', 500, 400, 'Maulik Kabirpanthi', 1),
(5, '2021-06-10', 'Piramal', 100, 100, 'Maulik Kabirpanthi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unitedstocks`
--
ALTER TABLE `unitedstocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unitedstocks`
--
ALTER TABLE `unitedstocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
