-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2023 at 10:13 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_disabilitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alatbantu`
--

CREATE TABLE `tbl_alatbantu` (
  `id_alatbantu` int(11) NOT NULL,
  `nama_alatbantu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alatbantu`
--

INSERT INTO `tbl_alatbantu` (`id_alatbantu`, `nama_alatbantu`) VALUES
(1, 'Kursi Roda'),
(2, 'Tabung Oksigen'),
(3, 'Tongkat/Cane');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(5, 'Banjarwangi'),
(6, 'Banyuresmi'),
(8, 'Bayongbong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelurahan`
--

CREATE TABLE `tbl_kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelurahan`
--

INSERT INTO `tbl_kelurahan` (`id_kelurahan`, `nama_kelurahan`, `id_kecamatan`) VALUES
(13, 'Banjarwangi', 5),
(14, 'Bojong', 5),
(16, 'Dangiang', 5),
(17, 'Bagendit', 6),
(18, 'Bayongbong', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemohon`
--

CREATE TABLE `tbl_pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `nik_pemohon` int(11) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `alamat_pemohon` text NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `notlp_pemohon` varchar(50) NOT NULL,
  `jeniskelamin_pemohon` varchar(50) NOT NULL,
  `tempatlahir_pemohon` varchar(50) NOT NULL,
  `tgllahir_pemohon` date NOT NULL,
  `foto_pemohon` varchar(250) NOT NULL,
  `email_pemohon` varchar(50) NOT NULL,
  `password_pemohon` varchar(50) NOT NULL,
  `nik_pendamping` int(11) NOT NULL,
  `nama_pendamping` varchar(50) NOT NULL,
  `hubungan_pendamping` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `id_pemohon` int(11) NOT NULL,
  `id_alatbantu` int(11) NOT NULL,
  `keterangan_pengajuan` text NOT NULL,
  `status_pengajuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `foto_user` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email_user`, `password_user`, `foto_user`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '1683148390avatar3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alatbantu`
--
ALTER TABLE `tbl_alatbantu`
  ADD PRIMARY KEY (`id_alatbantu`);

--
-- Indexes for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alatbantu`
--
ALTER TABLE `tbl_alatbantu`
  MODIFY `id_alatbantu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
