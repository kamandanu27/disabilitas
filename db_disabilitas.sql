-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2023 at 03:49 AM
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
-- Table structure for table `tbl_kabkota`
--

CREATE TABLE `tbl_kabkota` (
  `id_kabkota` int(11) NOT NULL,
  `nama_kabkota` varchar(50) NOT NULL,
  `id_provinsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kabkota`
--

INSERT INTO `tbl_kabkota` (`id_kabkota`, `nama_kabkota`, `id_provinsi`) VALUES
(1, 'Kabupaten Cirebon', 0),
(2, 'Kota Cirebon', 0),
(3, 'Kabupaten Kuningan', 0),
(4, 'Kabupaten Indramayu', 0),
(5, 'Kabupaten Majalengka', 0),
(7, 'Kabupaten Tegal', 0),
(8, 'Kota Tegal', 0),
(9, 'Kota Cirebon', 4),
(11, 'Kota majalengka', 4),
(12, 'Kota Tegal', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemohon`
--

CREATE TABLE `tbl_pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `nik_pemohon` int(11) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `alamat_pemohon` text NOT NULL,
  `id_kabkota` int(11) NOT NULL,
  `notlp_pemohon` varchar(50) NOT NULL,
  `jeniskelamin_pemohon` varchar(50) NOT NULL,
  `tempatlahir_pemohon` varchar(50) NOT NULL,
  `tgllahir_pemohon` date NOT NULL,
  `email_pemohon` varchar(50) NOT NULL,
  `password_pemohon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemohon`
--

INSERT INTO `tbl_pemohon` (`id_pemohon`, `nik_pemohon`, `nama_pemohon`, `alamat_pemohon`, `id_kabkota`, `notlp_pemohon`, `jeniskelamin_pemohon`, `tempatlahir_pemohon`, `tgllahir_pemohon`, `email_pemohon`, `password_pemohon`) VALUES
(1, 1, 'sofyan', 'karangmekar', 0, '089', 'Pilih', '', '0000-00-00', '@gmail.com', '123456'),
(4, 1, 'sofyan', 'karangmekar', 9, '089', 'Laki-laki', 'cirebon', '2023-04-05', '@gmail.com', '123456');

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

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `tgl_pengajuan`, `id_pemohon`, `id_alatbantu`, `keterangan_pengajuan`, `status_pengajuan`) VALUES
(2, '2023-04-05', 4, 2, 'urgent', 'Di Terima'),
(3, '2023-04-06', 4, 3, 'urgent', 'Di Tolak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(2, 'Jawa Tengah'),
(3, 'Jawa Timur'),
(4, 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email_user`, `password_user`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alatbantu`
--
ALTER TABLE `tbl_alatbantu`
  ADD PRIMARY KEY (`id_alatbantu`);

--
-- Indexes for table `tbl_kabkota`
--
ALTER TABLE `tbl_kabkota`
  ADD PRIMARY KEY (`id_kabkota`);

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
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

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
-- AUTO_INCREMENT for table `tbl_kabkota`
--
ALTER TABLE `tbl_kabkota`
  MODIFY `id_kabkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
