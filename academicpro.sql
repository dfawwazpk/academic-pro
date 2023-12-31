-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 07:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academicpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(18) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_lengkap`, `email`, `password`, `avatar`) VALUES
('000000000000000000', 'dosen', 'dosen@academic.pro', '$2y$10$9z6pQpMc.aK/oDQNOka9Guw7AS7tLTA2RaKZcXfvHnrxHi1XNe75O', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(14) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `jalur_masuk` varchar(7) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `avatar` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_lengkap`, `email`, `password`, `tanggal_lahir`, `alamat`, `kabupaten_kota`, `provinsi`, `angkatan`, `jalur_masuk`, `nomor_hp`, `status`, `avatar`) VALUES
('00000000000000', 'mahasiswa', 'mahasiswa@academic.pro', '$2y$10$9z6pQpMc.aK/oDQNOka9Guw7AS7tLTA2RaKZcXfvHnrxHi1XNe75O', '2001-09-11', 'tembalang', 'Kota Semarang', 'Jawa Tengah', '2021', 'SNBP', '08123456789', 'Aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `nip` varchar(18) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(1000) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`nip`, `nama_lengkap`, `email`, `password`, `avatar`, `updated_at`, `created_at`) VALUES
('000000000000000000', 'operator', 'operator@academic.pro', '$2y$10$9z6pQpMc.aK/oDQNOka9Guw7AS7tLTA2RaKZcXfvHnrxHi1XNe75O', NULL, '2023-10-31 00:00:00', '2023-10-31 00:00:00'),
('999999999999999999', 'Asep', 'asep@academic.pro', '$2y$10$mvFaM6ydSIFRDBARz/hMz.qm0O9JYn4NS6Fa8xXmloT.Vd80ek.L2', NULL, '2023-11-01 02:10:17', '2023-11-01 02:10:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
