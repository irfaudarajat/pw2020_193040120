-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 04:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040120`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat musik`
--

CREATE TABLE `alat musik` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `Nama alat` varchar(10) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `cara dimainkan` varchar(100) NOT NULL,
  `fungsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat musik`
--

INSERT INTO `alat musik` (`id`, `img`, `Nama alat`, `asal`, `cara dimainkan`, `fungsi`) VALUES
(1, 'angklung.jpg', 'Angklung', 'Jawa barat', 'Di Angkat', 'Alat musik Tradisional'),
(2, 'gamelan.jpg', 'Gamelan', 'Jawa Tengah', 'Di pukul', 'Alat musik Tradisional'),
(3, 'kecapi.jpg', 'Kecapi', 'Jawa Barat', 'Di Petik', 'Alat musik Tradisional'),
(4, 'kendang.jpg', 'Kendang', 'Jateng Dan Jabar', 'Di Pukul', 'Alat musik Tradisional'),
(5, 'rebab.jpg', 'Rebab', 'Arab', 'Di Petik', 'Alat musik Tradisional'),
(6, 'kolintang.jpg', 'kolintang', 'Asia Tenggara', 'Di pukul', 'Alat musik Tradisional'),
(7, 'sasando.jpg', 'Sasando', 'NTT', 'Di Petik', 'Alat musik Tradisional'),
(8, 'suling.jpg', 'Suling', 'Jawa Barat', 'Di tiup', 'Alat musik Tradisional'),
(9, 'siter.jpg', 'Siter', 'Jawa', 'Di Petik', 'Alat musik Tradisional'),
(10, 'tifa.jpg', 'Tifa', 'Maluku', 'Di Pukul', 'Alat musik Tradisional');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat musik`
--
ALTER TABLE `alat musik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat musik`
--
ALTER TABLE `alat musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
