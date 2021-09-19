-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 03:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sks`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcustomer` int(20) NOT NULL,
  `namapenyewa` varchar(50) NOT NULL,
  `notelefon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noic` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcustomer`, `namapenyewa`, `notelefon`, `email`, `noic`, `alamat`) VALUES
(101010, 'Syawal', '0112223333', 'syawal@gmail.com', '1998-12-0987', 'Tokyo Japan'),
(123456, 'Syakir', '0123456790', 'syakir99@gmail.com', '00218020689', 'No 24 Taman Sri Jaya'),
(888877, 'radzi', '01270464543', 'radzi@gmail.com', '00999897463', 'Jabi');

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `idkereta` int(10) NOT NULL,
  `modal` varchar(20) NOT NULL,
  `priceperday` varchar(10) NOT NULL,
  `priceperweek` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`idkereta`, `modal`, `priceperday`, `priceperweek`) VALUES
(1, 'saga', 'RM 100', 'RM 700'),
(2, 'Myvi', 'RM 80', 'RM 560'),
(3, 'Alza', 'RM 120', 'RM 840'),
(4, 'Axia', 'RM 60', 'RM 420');

-- --------------------------------------------------------

--
-- Table structure for table `tempahan`
--

CREATE TABLE `tempahan` (
  `idtempahan` int(30) NOT NULL,
  `idkereta` int(10) NOT NULL,
  `idcustomer` int(10) NOT NULL,
  `tarikhambil` date NOT NULL,
  `masaambil` varchar(20) NOT NULL,
  `tarikhhantar` date NOT NULL,
  `destinasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempahan`
--

INSERT INTO `tempahan` (`idtempahan`, `idkereta`, `idcustomer`, `tarikhambil`, `masaambil`, `tarikhhantar`, `destinasi`) VALUES
(1, 1, 123456, '2022-06-21', '8:30 AM', '2022-06-25', 'Penang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`idkereta`);

--
-- Indexes for table `tempahan`
--
ALTER TABLE `tempahan`
  ADD PRIMARY KEY (`idtempahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustomer` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=888878;

--
-- AUTO_INCREMENT for table `kereta`
--
ALTER TABLE `kereta`
  MODIFY `idkereta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tempahan`
--
ALTER TABLE `tempahan`
  MODIFY `idtempahan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
