-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2021 pada 10.11
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
-- Database: `vaksin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `role`) VALUES
(99, 'admin', '$2y$10$rMYCfJ9bny0t.msCUaGkoercsfhKgjLymZCk62UubPocnf30M67Xq', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_vaksin`
--

CREATE TABLE `jadwal_vaksin` (
  `jadwal_vaksin_id` int(11) NOT NULL,
  `puskesmas_id` int(11) NOT NULL,
  `tanggal_vaksin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_vaksin`
--

INSERT INTO `jadwal_vaksin` (`jadwal_vaksin_id`, `puskesmas_id`, `tanggal_vaksin`) VALUES
(1, 1, '16-Sep-2021'),
(2, 2, '18-Sep-2021'),
(3, 3, '20-Sep-2021'),
(4, 4, '21-Sep-2021'),
(5, 5, '22-Sep-2021'),
(6, 6, '23-Sep-2021'),
(7, 6, '27-Sep-2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `pendaftaran_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jadwal_vaksin_id` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`pendaftaran_id`, `user_id`, `jadwal_vaksin_id`, `tanggal`) VALUES
(1, 1, 1, '15-Sep-2021'),
(3, 99, 5, '15-Sep-2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `puskesmas_id` int(11) NOT NULL,
  `nama_puskesmas` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `puskesmas`
--

INSERT INTO `puskesmas` (`puskesmas_id`, `nama_puskesmas`, `alamat`) VALUES
(1, 'Puskesmas Mitra Jaya', 'Kp.Mekar Sari'),
(2, 'Puskesmas Kalanganyar', 'Kp.Cirende'),
(3, 'Puskesmas Sehat Selalu', 'Kp.Sehat'),
(4, 'Puskesmas Citeras', 'Kp.Citeras'),
(5, 'Puskesmas Cisalam', 'Kp.Cisalam'),
(6, 'Puskesmas Malangnengah', 'Kp.Malang Nengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_keluarga` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama_depan`, `nama_keluarga`, `nik`, `umur`, `telepon`, `email`, `alamat`, `kota`, `provinsi`, `role`) VALUES
(1, 'Budi', 'Budayyy', '2357835906945786', '12', '222222222222', 'budi@gmail.com', 'Kp.Mekarsari', 'Rangkasbitung', 'Banten', 'user'),
(3, 'Andi Subroto', 'andooy', '3490685756087645', '22', '342567657868', 'andi@gmail.com', 'Kp.Cirende', 'Rangkasbitung', 'Banten', 'user'),
(5, 'Gugun', 'gugun', '123', '12', '444444444444', 'gugun@gmail.com', 'Kp.Kalanganyar', 'rangkasbitung', 'banten', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `jadwal_vaksin`
--
ALTER TABLE `jadwal_vaksin`
  ADD PRIMARY KEY (`jadwal_vaksin_id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`pendaftaran_id`);

--
-- Indeks untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`puskesmas_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `jadwal_vaksin`
--
ALTER TABLE `jadwal_vaksin`
  MODIFY `jadwal_vaksin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `pendaftaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `puskesmas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
