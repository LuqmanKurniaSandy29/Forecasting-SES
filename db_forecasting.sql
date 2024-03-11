-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 09:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_forecasting`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_jual` int(11) NOT NULL,
  `minggu` char(1) NOT NULL,
  `bulan` char(2) NOT NULL,
  `tahun` char(4) NOT NULL,
  `jumlah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_jual`, `minggu`, `bulan`, `tahun`, `jumlah`) VALUES
(29, '1', '10', '2022', 2850),
(30, '2', '10', '2022', 2550),
(31, '3', '10', '2022', 2750),
(32, '4', '10', '2022', 2560),
(33, '1', '11', '2022', 2560),
(34, '2', '11', '2022', 2240),
(35, '3', '11', '2022', 2560),
(36, '4', '11', '2022', 2240),
(37, '1', '12', '2022', 2560),
(38, '2', '12', '2022', 2240),
(39, '3', '12', '2022', 2560),
(40, '4', '12', '2022', 2690),
(41, '1', '01', '2023', 2640),
(42, '2', '01', '2023', 2240),
(43, '3', '01', '2023', 2560),
(44, '4', '01', '2023', 2560),
(45, '1', '02', '2023', 2240),
(46, '2', '02', '2023', 2240),
(47, '3', '02', '2023', 2380),
(48, '4', '02', '2023', 2240),
(49, '1', '03', '2023', 2560),
(50, '2', '03', '2023', 2240),
(51, '3', '03', '2023', 2650),
(52, '4', '03', '2023', 2740),
(53, '1', '04', '2023', 2640),
(54, '2', '04', '2023', 2290),
(55, '3', '04', '2023', 2580),
(56, '4', '04', '2023', 2380),
(57, '1', '05', '2023', 3200),
(58, '2', '05', '2023', 2240),
(59, '3', '05', '2023', 2560),
(60, '4', '05', '2023', 2560),
(61, '1', '06', '2023', 2560),
(62, '2', '06', '2023', 2240),
(63, '3', '06', '2023', 2560),
(64, '4', '06', '2023', 2240),
(65, '1', '07', '2023', 2560),
(66, '2', '07', '2023', 2240),
(67, '3', '07', '2023', 2700),
(68, '4', '07', '2023', 2240),
(69, '1', '08', '2023', 2560),
(70, '2', '08', '2023', 2240),
(71, '3', '08', '2023', 2890),
(72, '4', '08', '2023', 2560),
(73, '1', '09', '2023', 2560),
(74, '2', '09', '2023', 2240),
(75, '3', '09', '2023', 2560),
(76, '4', '09', '2023', 2420);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_jual`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
