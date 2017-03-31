-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 06:11 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `datane`
--

CREATE TABLE `datane` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `usia` int(4) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `hakakses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datane`
--

INSERT INTO `datane` (`id`, `username`, `email`, `password`, `nama`, `alamat`, `usia`, `jeniskelamin`, `agama`, `pekerjaan`, `hakakses`) VALUES
(1, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', 'anonymous', 69, 'pria', 'islam', 'anonymous', 'administrator'),
(2, 'user', 'user@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'user', 'kenari', 53, 'wanita', 'katolik', 'tani', 'pengunjung'),
(4, 'otong', 'otong@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'otong', 'mbuh', 69, 'pria', 'islam', 'tani', 'pengunjung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datane`
--
ALTER TABLE `datane`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datane`
--
ALTER TABLE `datane`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
