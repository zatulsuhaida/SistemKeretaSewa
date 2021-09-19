-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Sep 19, 2021 at 01:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34
=======
-- Generation Time: Sep 19, 2021 at 12:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29
>>>>>>> 15357350dbdf2457423409ef5eef6cd9eb500a84

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
-- Table structure for table `customerlist`
--

CREATE TABLE `customerlist` (
  `idmanager` int(20) NOT NULL,
  `NamaPenyewa` varchar(50) NOT NULL,
  `NoTelefon` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoIC` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerlist`
--

INSERT INTO `customerlist` (`idmanager`, `NamaPenyewa`, `NoTelefon`, `Email`, `NoIC`, `Alamat`) VALUES
(101010, 'Syawal', '0112223333', 'syawal@gmail.com', '1998-12-0987', 'Tokyo Japan'),
(123456, 'Syakir', '0123456790', 'syakir99@gmail.com', '00218020689', 'No 24 Taman Sri Jaya');

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
<<<<<<< HEAD
  `idCustomer` int(11) NOT NULL,
=======
  `idmanager` int(11) NOT NULL,
>>>>>>> 15357350dbdf2457423409ef5eef6cd9eb500a84
  `tarikhambil` date NOT NULL,
  `masaambil` varchar(20) NOT NULL,
  `tarikhhantar` date NOT NULL,
  `destinasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempahan`
--

<<<<<<< HEAD
INSERT INTO `tempahan` (`idtempahan`, `idkereta`, `idCustomer`, `tarikhambil`, `masaambil`, `tarikhhantar`, `destinasi`) VALUES
=======
INSERT INTO `tempahan` (`idtempahan`, `idkereta`, `idmanager`, `tarikhambil`, `masaambil`, `tarikhhantar`, `destinasi`) VALUES
>>>>>>> 15357350dbdf2457423409ef5eef6cd9eb500a84
(1, 1, 123456, '2022-06-21', '8:30 AM', '2022-06-25', 'Penang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerlist`
--
ALTER TABLE `customerlist`
  ADD PRIMARY KEY (`idmanager`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`idkereta`);

--
-- Indexes for table `tempahan`
--
ALTER TABLE `tempahan`
  ADD PRIMARY KEY (`idtempahan`),
  ADD KEY `test` (`idkereta`),
<<<<<<< HEAD
  ADD KEY `cth` (`idCustomer`);
=======
  ADD KEY `cth` (`idmanager`);
>>>>>>> 15357350dbdf2457423409ef5eef6cd9eb500a84

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerlist`
--
ALTER TABLE `customerlist`
  MODIFY `idmanager` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224424;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tempahan`
--
ALTER TABLE `tempahan`
<<<<<<< HEAD
  ADD CONSTRAINT `cth` FOREIGN KEY (`idCustomer`) REFERENCES `customerlist` (`idCustomer`),
=======
  ADD CONSTRAINT `cth` FOREIGN KEY (`idmanager`) REFERENCES `customerlist` (`idmanager`),
>>>>>>> 15357350dbdf2457423409ef5eef6cd9eb500a84
  ADD CONSTRAINT `test` FOREIGN KEY (`idkereta`) REFERENCES `kereta` (`idkereta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
