-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 02:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom_lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip_dosen` varchar(16) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `no_dosen` varchar(13) NOT NULL,
  `alamat_dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `thn_masuk` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `jurusan`, `thn_masuk`) VALUES
('1600018001', 'Joko Widodo', 'Surakarta', '1960-11-22', 'Jalan Kaliurang Km 20', 'Biologi', 2001),
('1600018002', 'Muhammad Aziz', 'Pagar Alam', '1982-07-21', 'Jalan Magelang', 'Teknik Sipil', 2017),
('1600018003', 'Faadihilah A Faiz', 'Bantul', '1998-01-21', 'Jalan Imogiri Barat', 'Ekonomi Syariah', 2016),
('1600018004', 'Insan Kamil', 'Banjarmasin', '1981-09-14', 'Jalan Wonosari', 'Bahasa Indonesia', 2011),
('1600018005', 'Citra Maya', 'Pekanbaru', '1999-06-05', 'Jalan Bantul', 'Matematika', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_mk` varchar(4) NOT NULL,
  `nama_mk` varchar(30) NOT NULL,
  `sks_mk` int(1) NOT NULL,
  `semester_mk` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_mk`, `nama_mk`, `sks_mk`, `semester_mk`) VALUES
('MK01', 'Kalkulus Informatika', 2, '1'),
('MK02', 'Logika Informatika', 3, '1'),
('MK03', 'Pemrograman Web', 3, '2'),
('MK04', 'Algoritma Pemrograman', 3, '3'),
('MK05', 'Kecerdasan Buatan', 3, '5'),
('MK06', 'Data Mining', 3, '5');

-- --------------------------------------------------------

--
-- Table structure for table `rencanastudi`
--

CREATE TABLE `rencanastudi` (
  `kode_krs` int(16) NOT NULL,
  `kode_mk` varchar(4) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas_krs` varchar(30) NOT NULL,
  `nilai_uts` int(4) NOT NULL,
  `nilai_uas` int(4) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL,
  `ipk` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip_dosen`);

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
-- Indexes for table `rencanastudi`
--
ALTER TABLE `rencanastudi`
  ADD PRIMARY KEY (`kode_krs`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kode_mk` (`kode_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rencanastudi`
--
ALTER TABLE `rencanastudi`
  MODIFY `kode_krs` int(16) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`nip_dosen`) REFERENCES `rencanastudi` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rencanastudi`
--
ALTER TABLE `rencanastudi`
  ADD CONSTRAINT `rencanastudi_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rencanastudi_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `matakuliah` (`kode_mk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
