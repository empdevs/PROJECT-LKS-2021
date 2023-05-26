-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2021 pada 09.55
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
-- Database: `tb_vaksin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta vaksin`
--

CREATE TABLE `peserta vaksin` (
  `Nama` varchar(10) NOT NULL,
  `Nik` char(10) NOT NULL,
  `Umur` char(10) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `No Hp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta vaksin`
--

INSERT INTO `peserta vaksin` (`Nama`, `Nik`, `Umur`, `Alamat`, `No Hp`) VALUES
('Budi', '12345', '21 Tahun', 'Bojong', '13425'),
('Joko', '76543', '23 Tahun', 'Bejod', '23123'),
('Sutisna', '34521', '25', 'Gogor', '08652'),
('Jaki', '4215', '18 Tahun', 'Pangdeglang', '1332'),
('Hamdan', '2654', '21 Tahun', 'Bejod', '08974'),
('Dodi', '32123', '23 Tahun', 'Jawa', '09876');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
