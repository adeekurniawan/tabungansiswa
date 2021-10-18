-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 18, 2021 at 01:31 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungan_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'ins', 'admin', '52030744974b6475536c0ba5a04937e1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `jenis_kelamin`, `alamat`) VALUES
('0091125301', 'Alam Anugrah', 'Laki-laki', 'Jl.Pertiwi 22'),
('0091125302', 'Beni Kurniadi', 'Laki-laki', 'Jl.Pramuka 20'),
('0091125303', 'Cici Syafitri', 'Perempuan', 'Jl.Merpati 25'),
('0091125304', 'Dodi ananda', 'Laki-laki', 'Jl.Garuda 17'),
('0091125305', 'Ema Putri', 'Perempuan', 'Jl.Mawar 70');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

DROP TABLE IF EXISTS `tabungan`;
CREATE TABLE IF NOT EXISTS `tabungan` (
  `id_tabungan` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(10) NOT NULL,
  `jumlah` decimal(12,2) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id_tabungan`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id_tabungan`, `nisn`, `jumlah`, `tgl`) VALUES
(9, '0091125301', '5000.00', '2021-10-10'),
(10, '0091125302', '5000.00', '2021-10-11'),
(11, '0091125303', '5000.00', '2021-10-12'),
(12, '0091125304', '5000.00', '2021-10-13'),
(13, '0091125305', '5000.00', '2021-10-14'),
(17, '0091125301', '10000.00', '2021-10-17'),
(19, '0091125302', '10000.00', '2021-10-18'),
(21, '0091125304', '10000.00', '2021-10-17'),
(23, '0091125301', '5000.00', '2021-10-17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
