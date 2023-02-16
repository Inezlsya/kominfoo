-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2022 pada 09.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `tb_belanja`
--

CREATE TABLE `tb_belanja` (
  `id_belanja` int(11) NOT NULL,
  `sub_belanja` varchar(255) NOT NULL,
  `kode_rek` varchar(255) NOT NULL,
  `jml_anggaran` int(11) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_belanja`
--

INSERT INTO `tb_belanja` (`id_belanja`, `sub_belanja`, `kode_rek`, `jml_anggaran`, `tanggal_input`) VALUES
(1, 'Belanja Alat/Bahan untuk Kegiatan Kantor- Kertasdan Cover', '5 . 2 . 1 . 01 . 25', 13000000, '2022-06-01'),
(3, 'Belanja Alat/Bahan untuk Kegiatan Kantor- Bahan Cetak', '5 . 2 . 1 . 01 . 26', 264000000, '2022-06-21'),
(4, 'Belanja Makanan dan Minuman Rapat', '5 . 2 . 1 . 01 . 52', 465685000, '2022-06-20'),
(5, 'Honorarium Narasumber atau Pembahas, Moderator, Pembawa Acara, dan Panitia', '5 . 2 . 1 . 04 . 03', 900000000, '2022-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(250) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal_input`) VALUES
(10, 'Perencanaan, Penganggaran, dan Evaluasi Kinerja Perangkat Daerah', '2022-06-24'),
(11, 'Administrasi Keuangan Perangkat Daerah', '2022-06-08'),
(13, 'Administrasi Umum Perangkat Daerah', '2022-06-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_notif`
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
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(250) NOT NULL,
  `jabatan_pengguna` varchar(250) NOT NULL,
  `username_pengguna` varchar(250) NOT NULL,
  `password_pengguna` varchar(250) NOT NULL,
  `pengguna_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `jabatan_pengguna`, `username_pengguna`, `password_pengguna`, `pengguna_status`) VALUES
(1, 'Satria', 'Operator', 'satria', 'satria123', 'Aktif'),
(2, 'Kamui', 'Atasan', 'kamui', 'kamui123', 'Aktif'),
(4, 'Dima', 'Bendahara', 'dima', 'dima123', 'Aktif'),
(41, 'Bagas', 'Operator', 'bagas', 'bagas', 'Aktif'),
(47, 'haris', 'PPTK', 'haris', 'haris123', 'Aktif'),
(48, 'sarip', 'PPTK', 'sarip', 'sarip123', 'Aktif'),
(50, 'Admin', 'Operator', 'admin', 'admin', 'Aktif'),
(51, 'Wijaya', 'PPTK', 'wijaya', 'wijaya', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subkegiatan`
--

CREATE TABLE `tb_subkegiatan` (
  `id_subkegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `sub_kegiatan` varchar(255) NOT NULL,
  `nama_belanja` varchar(255) NOT NULL,
  `kode_rekening` varchar(50) NOT NULL,
  `nama_pptk` varchar(255) NOT NULL,
  `tanggal_input` date NOT NULL,
  `pagu_anggaran` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `bukti_tagihan1` varchar(255) NOT NULL,
  `bukti_tagihan2` varchar(255) NOT NULL,
  `bukti_tagihan3` varchar(255) NOT NULL,
  `bukti_transfer1` varchar(255) NOT NULL,
  `bukti_transfer2` varchar(255) NOT NULL,
  `bukti_transfer3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_subkegiatan`
--

INSERT INTO `tb_subkegiatan` (`id_subkegiatan`, `nama_kegiatan`, `sub_kegiatan`, `nama_belanja`, `kode_rekening`, `nama_pptk`, `tanggal_input`, `pagu_anggaran`, `nominal`, `bukti_tagihan1`, `bukti_tagihan2`, `bukti_tagihan3`, `bukti_transfer1`, `bukti_transfer2`, `bukti_transfer3`) VALUES
(1, 'Perencanaan, Penganggaran, dan Evaluasi Kinerja Perangkat Daerah', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', 'Belanja Alat/Bahan untuk Kegiatan Kantor- Kertasdan Cover', '5210125', 'haris', '2022-06-22', 88000000, 0, 'logo4.png', 'transaksi2.png', 'images.png', 'transfer111.jpg', 'transfer111.jpg', 'transfer111.jpg'),
(15, 'Perencanaan, Penganggaran, dan Evaluasi Kinerja Perangkat Daerah', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', 'Belanja Alat/Bahan untuk Kegiatan Kantor- Bahan Cetak', '5 . 2 . 1 .', 'haris', '2022-06-26', 264000000, 0, '', '', '', '', '', ''),
(16, 'Perencanaan, Penganggaran, dan Evaluasi Kinerja Perangkat Daerah', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', 'Belanja Makanan dan Minuman Rapat', '5 . 2 . 1 . 01 . 52', 'haris', '2022-06-28', 465685000, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_transaksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `nama_transaksi`) VALUES
(1, 'Transaksi 1'),
(2, 'Transaksi 2\r\n'),
(3, 'Transaksi 3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_belanja`
--
ALTER TABLE `tb_belanja`
  ADD PRIMARY KEY (`id_belanja`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tb_notif`
--
ALTER TABLE `tb_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_subkegiatan`
--
ALTER TABLE `tb_subkegiatan`
  ADD PRIMARY KEY (`id_subkegiatan`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_belanja`
--
ALTER TABLE `tb_belanja`
  MODIFY `id_belanja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tb_subkegiatan`
--
ALTER TABLE `tb_subkegiatan`
  MODIFY `id_subkegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
