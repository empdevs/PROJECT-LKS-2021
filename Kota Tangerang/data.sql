-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2021 pada 10.17
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
-- Database: `lks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_keluarga` text NOT NULL,
  `nik` varchar(255) NOT NULL,
  `umur` int(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat_email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `username`, `password`, `role`, `nama_depan`, `nama_keluarga`, `nik`, `umur`, `telepon`, `alamat_email`, `alamat`, `kota`, `provinsi`, `jadwal`, `tempat`) VALUES
(29, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'klahan', '', '0', 0, '', '', '', '', '', '', ''),
(30, 'user', '0192023a7bbd73250516f069df18b500', 'user', 'rak', 'siman', '098765', 17, '085156850530', 'adas@gmail.com', 'jl.kh hsasyim ashari', 'kota tangerang', 'banten', '15/09/21', 'tangerang'),
(31, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'rgfrfg', 'rfgerf', '234324', 1213, '123', 'a@a.com', 'dfvdfv', 'dfvd', 'dfedf', '15/09/21', 'tangerang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
