-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 10:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `kuota` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id`, `img`, `kuota`, `kecamatan`, `nama`, `deskripsi`) VALUES
(1, '29.jpeg', 5, 'Pasar Kemis', 'Puskesmas Pasar Kemis', 'Coba'),
(5, '12.jpg', 99, 'Purwakarta', 'Puskesmas Purwakarta', 'Apa aja');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_faskes`
--

CREATE TABLE `pesan_faskes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `faskes_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan_faskes`
--

INSERT INTO `pesan_faskes` (`id`, `user_id`, `faskes_id`, `date`) VALUES
(9, 14, 1, '2021-09-15'),
(11, 16, 5, '2021-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `umur` tinyint(4) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('member','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `nama_depan`, `nama_belakang`, `nik`, `umur`, `telepon`, `email`, `alamat`, `kota`, `provinsi`, `password`, `level`) VALUES
(14, '26.jpg', 'Member', 'Member', 12312312, 12, '0812381238', 'member@member.com', 'Member', 'Tangerang', 'Banten', '66ef7b99b2d552e0aa071b50e6af9b22', 'member'),
(15, 'avatar2.png', 'Admin', 'Admin', 10293129312, 12, '0812381283', 'admin@admin.com', 'Admin', 'Admin', 'Banten', '0192023a7bbd73250516f069df18b500', 'admin'),
(16, '19.jpg', 'Member12', 'Family', 18231823812, 17, '081238123812', 'member12@member.com', 'Coba', 'Tangerang', 'Banten', '66ef7b99b2d552e0aa071b50e6af9b22', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_faskes`
--
ALTER TABLE `pesan_faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan_faskes`
--
ALTER TABLE `pesan_faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
