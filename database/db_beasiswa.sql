-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2023 pada 02.41
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_beasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `jenis_beasiswa` varchar(30) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `status_ajuan` varchar(30) NOT NULL DEFAULT 'belum diverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftar`
--

INSERT INTO `tb_daftar` (`id`, `nama`, `email`, `no_hp`, `semester`, `ipk`, `jenis_beasiswa`, `berkas`, `status_ajuan`) VALUES
(13, 'Salsabillah Puspitasari', 'admin1@gmail.com', '081231413425', '3', '3.8', 'Beasiswa Akademik', '833d229e0f9700a925c654317d3c82fc.pdf', 'belum diverifikasi'),
(14, 'M.Lucky Dialjama', 'luckyyy@gmail.com', '082145275466635', '5', '3.9', 'Beasiswa Akademik', '3c5ccfb543d9400a58f6b3d35e3c14a8.pdf', 'belum diverifikasi'),
(15, 'Erika Asmaniar', 'erika@gmail.com', '0896324613488', '5', '3.4', 'Beasiswa Non Akademik', '64ebf9c6ddf09befe75d3cd7df0e2b92.pdf', 'belum diverifikasi'),
(16, 'M. Fajri Samego', 'fajrisamego88@gmail.com', '086631478436', '7', '3.7', 'Beasiswa Non Akademik', 'b73080e09f489f39c671704736a9f1f9.pdf', 'belum diverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
