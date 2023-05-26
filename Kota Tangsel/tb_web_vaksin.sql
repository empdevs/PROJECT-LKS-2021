-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 10:21 AM
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
-- Database: `tb_web_vaksin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_faskes`
--

CREATE TABLE `tb_faskes` (
  `id_faskes` int(11) NOT NULL,
  `nama_faskes` varchar(50) NOT NULL,
  `alamat_faskes` text NOT NULL,
  `kuota_faskes` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_faskes`
--

INSERT INTO `tb_faskes` (`id_faskes`, `nama_faskes`, `alamat_faskes`, `kuota_faskes`, `id_kecamatan`) VALUES
(1, 'Puskesmas Serpong 1', 'Jln Serpong nomor 123', 100, 2),
(2, 'Puskesmas Serpong 2', 'Jln Serpong nomor 123', 200, 2),
(3, 'Puskesmas Cilegon 1', 'Jln cilegon 1212121', 300, 1),
(4, 'Puskesmas Cilegon 2', 'jln. cilegon 12121311223', 500, 1),
(5, 'TesFaskes3_1', '', 600, 3),
(6, 'TesFaskes3_2', '', 800, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Cilegon'),
(2, 'Serpong'),
(3, 'Teskec3'),
(4, 'Teskec4'),
(5, 'Teskec5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `keluarga_peserta` varchar(50) NOT NULL,
  `nik_peserta` varchar(50) NOT NULL,
  `umur_peserta` int(11) NOT NULL,
  `telepon_peserta` varchar(50) NOT NULL,
  `email_peserta` varchar(50) NOT NULL,
  `password_peserta` varchar(255) NOT NULL,
  `alamat_peserta` text NOT NULL,
  `kota_peserta` varchar(50) NOT NULL,
  `provinsi_peserta` varchar(50) NOT NULL,
  `status_peserta` tinyint(1) NOT NULL DEFAULT 0,
  `jadwal_peserta` datetime DEFAULT NULL,
  `id_faskes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama_peserta`, `keluarga_peserta`, `nik_peserta`, `umur_peserta`, `telepon_peserta`, `email_peserta`, `password_peserta`, `alamat_peserta`, `kota_peserta`, `provinsi_peserta`, `status_peserta`, `jadwal_peserta`, `id_faskes`) VALUES
(1, 'Firmansyah', 'Masbud', '3312110291092', 21, '089653563221', 'firmansyah@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Tangsel', 'Banten', 1, '2021-09-24 09:32:23', 1),
(2, 'Dwi', 'Dwi', '331123314141', 32, '0888889743', 'dwi@peserta.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Depok', 'Jawa Barat', 0, NULL, 5),
(8, 'Akbar', 'Akbar', '33123212312', 21, '089127112412', 'akbar@peserta.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Tangerang Selatan', 'Banten', 0, '2021-09-23 10:07:15', 3),
(9, 'Imam ', 'Imam', '3325123123123123', 25, '089754653223', 'imam@peserta.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Tangerang Selatan', 'Banten', 1, '2021-09-01 09:32:23', NULL),
(10, 'Dandi', 'Dandi', '33224123312312', 51, '0897782812314', 'dandi@peserta.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Tangerang Selatan', 'Banten', 1, '2021-09-01 09:32:23', 2),
(11, 'Angga', 'angga', '3322123312331', 21, '08976217213', 'angga@peserta.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Tangerang Selatan', 'Banten', 0, '2021-09-01 00:00:00', 4),
(12, 'paldi', 'paldi', '332121213123', 22, '08967738237821', 'paldi@peserta.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'jln buaran 121231', 'Tangerang Selatan', 'Banten', 0, '2021-09-15 05:13:17', 1),
(13, 'Rifaldi', 'Setiawan', '33251223110004', 18, '089653563221', 'rifaldi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Jln masjid buaran rt 03 rw 03', 'Tangerang Selatan', 'Banten', 0, '2021-09-01 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  ADD PRIMARY KEY (`id_faskes`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_faskes` (`id_faskes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  MODIFY `id_faskes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  ADD CONSTRAINT `tb_faskes_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `tb_kecamatan` (`id_kecamatan`);

--
-- Constraints for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD CONSTRAINT `tb_peserta_ibfk_1` FOREIGN KEY (`id_faskes`) REFERENCES `tb_faskes` (`id_faskes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
