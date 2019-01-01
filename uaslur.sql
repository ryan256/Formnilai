-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 03:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaslur`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` int(20) NOT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `semester` int(25) DEFAULT NULL,
  `kode_prodi` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_mtkul` int(25) NOT NULL,
  `nama_mtkul` varchar(50) DEFAULT NULL,
  `sks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `npm` int(25) DEFAULT NULL,
  `kode_mtkul` int(25) DEFAULT NULL,
  `nilai_tugas` int(25) DEFAULT NULL,
  `nilai_uts` int(25) DEFAULT NULL,
  `nilai_uas` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kode_prodi` int(25) NOT NULL,
  `nama_prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `FK_mahasiswa_prodi` (`kode_prodi`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_mtkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `FK_nilai_mahasiswa` (`npm`),
  ADD KEY `FK_nilai_matakuliah` (`kode_mtkul`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `FK_mahasiswa_prodi` FOREIGN KEY (`kode_prodi`) REFERENCES `prodi` (`kode_prodi`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_nilai_mahasiswa` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `FK_nilai_matakuliah` FOREIGN KEY (`kode_mtkul`) REFERENCES `matakuliah` (`kode_mtkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
