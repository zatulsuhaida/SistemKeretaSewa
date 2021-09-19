-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 09:51 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
  `idkereta` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `namapenyewa` varchar(30) NOT NULL,
  `notelefon` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `noIC` int(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `jeniskereta` varchar(10) NOT NULL,
  `tarikhambil` varchar(20) NOT NULL,
  `masaambil` varchar(20) NOT NULL,
  `tarikhhantar` varchar(20) NOT NULL,
  `destinasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempahan`
--

INSERT INTO `tempahan` (`idtempahan`, `idkereta`, `idcustomer`, `namapenyewa`, `notelefon`, `email`, `noIC`, `alamat`, `jeniskereta`, `tarikhambil`, `masaambil`, `tarikhhantar`, `destinasi`) VALUES
(1, 1, 123456, 'Syakir Ridzuan', 175659039, 'syakir@gmail.com', 218020689, 'No 24 Taman Sri Jaya', 'Myvi', '18 Jun 2021', '8:30 AM', '20 Jun 2021', 'Penang'),
(2, 0, 0, 'Kamarul Nizam', 115659039, 'nizam@gmail.com', 224140687, 'No 24 Taman Mawar', 'Saga', '18 July 2021', '8:30 AM', '20 July 2021', 'Selangor');

--
-- Indexes for dumped tables
--

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
