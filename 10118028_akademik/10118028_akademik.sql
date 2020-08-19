-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 06:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10118028_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` char(10) NOT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`) VALUES
('111231', 'Alif Finandhita'),
('222456', 'Rani Susanto'),
('444890', 'Maya Hermawati'),
('555567', 'Andri Heryandi'),
('66677', '<br');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(12) NOT NULL,
  `nama_mahasiswa` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` char(2) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `tgl_lahir`, `jns_kelamin`, `alamat`) VALUES
('10118012', 'Moch Rizki Maulana', '1999-06-07', 'L', 'Jl.Bangbayang'),
('10118013', 'Rifian Joe Premilenio', '0000-00-00', 'L', 'Jl.Cicaheum'),
('10118028', 'Surya Fakhriy Hasbi', '2000-02-19', 'L', 'Jl.Cihampelas'),
('10118029', 'Azis Komara', '2000-08-03', 'L', 'Jl.Ir.H.Juanda'),
('10118033', 'Ikrar Anugrah Bastary', '0000-00-00', 'L', 'Jl.Cibiru');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(25) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_mk`, `nama_mk`, `sks`) VALUES
('01027', 'Metode Numerik', 3),
('01040  ', 'Sistem Informasi', 3),
('01104', 'Aplikasi Teknologi Online', 2),
('01125', 'Sistem Basis Data 2', 4),
('32222', 'Provis', 3);

-- --------------------------------------------------------

--
-- Table structure for table `perkuliahan`
--

CREATE TABLE `perkuliahan` (
  `nim` char(12) NOT NULL,
  `kode_mk` varchar(12) DEFAULT NULL,
  `id_dosen` char(12) DEFAULT NULL,
  `nilai` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perkuliahan`
--

INSERT INTO `perkuliahan` (`nim`, `kode_mk`, `id_dosen`, `nilai`) VALUES
('10118013', '01125', '111231', '80'),
('10118028', '01027', '444890', '85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- Indexes for table `perkuliahan`
--
ALTER TABLE `perkuliahan`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perkuliahan`
--
ALTER TABLE `perkuliahan`
  ADD CONSTRAINT `perkuliahan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `perkuliahan_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `matakuliah` (`kode_mk`),
  ADD CONSTRAINT `perkuliahan_ibfk_3` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
