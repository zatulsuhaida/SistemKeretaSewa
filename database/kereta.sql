-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD:database/sks.sql
-- Generation Time: Sep 18, 2021 at 09:12 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29
=======
-- Generation Time: Sep 18, 2021 at 02:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34
>>>>>>> d3c1e44659d8ada9ae66572bf5323ef462c40a65:database/kereta.sql

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
-- Table structure for table `tempahan`
--

CREATE TABLE `tempahan` (
  `idtempahan` int(10) NOT NULL,
  `namapenyewa` varchar(30) CHARACTER SET utf8 NOT NULL,
  `notelefon` int(10) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `noIC` int(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jeniskereta` varchar(10) NOT NULL,
  `tarikhambil` varchar(20) NOT NULL,
  `masaambil` varchar(20) NOT NULL,
  `tarikhhantar` varchar(20) NOT NULL,
  `destinasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempahan`
--

INSERT INTO `tempahan` (`idtempahan`, `namapenyewa`, `notelefon`, `email`, `noIC`, `alamat`, `jeniskereta`, `tarikhambil`, `masaambil`, `tarikhhantar`, `destinasi`) VALUES
(1, 'Syakir Ridzuan', 175659039, 'syakir@gmail.com', 218020689, 'No 24 Taman Sri Jaya', 'Myvi', '18 Jun 2021', '8:30 AM', '20 Jun 2021', 'Penang'),
(2, 'Kamarul Nizam', 115659039, 'nizam@gmail.com', 218020689, 'No 24 Taman Sri Jaya', 'Myvi', '18 Jun 2021', '8:30 AM', '20 Jun 2021', 'Penang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempahan`
--
ALTER TABLE `tempahan`
  ADD PRIMARY KEY (`idtempahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempahan`
--
ALTER TABLE `tempahan`
  MODIFY `idtempahan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
