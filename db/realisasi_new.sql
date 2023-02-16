-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realisasi_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(250) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal_input`) VALUES
(2, 'dhfh', '2023-01-06'),
(4, 'fhf', '2023-01-11'),
(6, 'sbdhjdf', '2023-06-06'),
(7, 'rsgg', '2025-02-11'),
(10, 'Pembelian Hosting', '2022-06-27'),
(11, 'Pembelian Hosting', '2022-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notif`
--

CREATE TABLE `tb_notif` (
  `id_notif` int(11) NOT NULL,
  `from_id_pengguna` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_read` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(250) NOT NULL,
  `kode_rek` varchar(20) NOT NULL,
  `jabatan_pengguna` varchar(250) NOT NULL,
  `username_pengguna` varchar(250) NOT NULL,
  `password_pengguna` varchar(250) NOT NULL,
  `pengguna_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `kode_rek`, `jabatan_pengguna`, `username_pengguna`, `password_pengguna`, `pengguna_status`) VALUES
(1, 'Satria', '', 'Operator', 'satria', 'satria123', 'Aktif'),
(2, 'Kamui', '', 'Atasan', 'kamui', 'kamui123', 'Aktif'),
(4, 'Dima', '', 'Bendahara', 'dima', 'dima123', 'Aktif'),
(41, 'Bagas', '', 'Operator', 'bagas', 'bagas', 'Aktif'),
(47, 'haris', '123.312.123.32', 'PPTK', 'haris', 'haris123', 'Aktif'),
(48, 'sarip', '234.89.900', 'PPTK', 'sarip', 'sarip123', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subkegiatan`
--

CREATE TABLE `tb_subkegiatan` (
  `id_subkegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(300) NOT NULL,
  `sub_kegiatan` varchar(200) NOT NULL,
  `nama_belanja` varchar(300) NOT NULL,
  `kode_rekening` varchar(25) NOT NULL,
  `pagu_anggaran` int(50) NOT NULL,
  `nama_pptk` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL,
  `nominal` int(40) NOT NULL,
  `bukti_tagihan` varchar(40) NOT NULL,
  `bukti_transfer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_subkegiatan`
--

INSERT INTO `tb_subkegiatan` (`id_subkegiatan`, `nama_kegiatan`, `sub_kegiatan`, `nama_belanja`, `kode_rekening`, `pagu_anggaran`, `nama_pptk`, `tanggal_input`, `nominal`, `bukti_tagihan`, `bukti_transfer`) VALUES
(2, 'egrg', 'rerg', 'ergre', '123.312.123.32', 333352, 'haris', '2022-06-06', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_notif`
--
ALTER TABLE `tb_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_subkegiatan`
--
ALTER TABLE `tb_subkegiatan`
  ADD PRIMARY KEY (`id_subkegiatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_subkegiatan`
--
ALTER TABLE `tb_subkegiatan`
  MODIFY `id_subkegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
