-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2021 pada 10.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksinasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data faskes`
--

CREATE TABLE `data faskes` (
  `Quotas_vaksinasi` int(11) NOT NULL,
  `Kata_kunci` int(11) NOT NULL,
  `Kacamatan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `form pendaftaraan`
--

CREATE TABLE `form pendaftaraan` (
  `Nama_depan` int(11) NOT NULL,
  `Nama_keluarga` text NOT NULL,
  `NIK` varchar(32) NOT NULL,
  `Umur` int(11) NOT NULL,
  `Telepon` varchar(12) NOT NULL,
  `Almat_email` int(11) NOT NULL,
  `Alamat` int(11) NOT NULL,
  `Kota` int(11) NOT NULL,
  `Provinsi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data faskes`
--
ALTER TABLE `data faskes`
  ADD PRIMARY KEY (`Quotas_vaksinasi`);

--
-- Indeks untuk tabel `form pendaftaraan`
--
ALTER TABLE `form pendaftaraan`
  ADD PRIMARY KEY (`Nama_depan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
