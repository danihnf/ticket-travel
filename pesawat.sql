-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 10:09 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesawat`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `token_pemesan` varchar(20) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(16) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_rute`, `token_pemesan`, `nama_pemesan`, `email`, `nohp`, `alamat`) VALUES
(222, 13, '4fedc2ab31', 'Abimanyu', 'danihanafi169@gmail.com', '082134334171', 'Sokaraja'),
(223, 15, 'a23b1f4dec', 'Dani Hanafi', 'danihanafi169@gmail.com', '082134334171', 'Banyumas'),
(224, 26, '3a1b2edcf4', 'Afit Inggyan', 'danihanafi169@gmail.com', '082134334171', 'Purbalingga');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `token_booking` varchar(20) NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `nama_penumpang` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `total_price` int(11) NOT NULL,
  `kursi` varchar(5) NOT NULL,
  `status` int(2) NOT NULL,
  `pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `id_rute`, `token_booking`, `no_identitas`, `nama_penumpang`, `token`, `total_price`, `kursi`, `status`, `pembayaran`) VALUES
(398, 13, '4fedc2ab31', '0101', 'Dani Hanafi', 'F2AGST3W15D4ER', 1000000, '39', 0, ''),
(399, 13, '4fedc2ab31', '0202', 'Afit Inggyan', 'F2AGST3W15D4ER', 1000000, '69', 0, ''),
(400, 15, 'a23b1f4dec', '9090', 'Hawley', 'TE52WG31S4ARFD', 400000, '7', 0, ''),
(401, 26, '3a1b2edcf4', '230', 'Afit Inggyan', 'W2AEF31TSG5D4R', 50, '35', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `maskapai`
--

CREATE TABLE IF NOT EXISTS `maskapai` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gambar` varchar(55) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `seat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maskapai`
--

INSERT INTO `maskapai` (`id`, `kode`, `nama`, `gambar`, `deskripsi`, `seat`) VALUES
(2, 'M11', 'Garuda Indonesia', 'garudaindonesia.png', 'Pesawat ini memiliki fasilitas yang sangat lengkap, dan juga keamanan yang sangat aman.', 100),
(3, 'M12', 'Lion Air', 'lionair.png', 'Pesawat ini memiliki fasilitas yang sangat lengkap, dan juga keamanan yang sangat aman.', 100),
(4, 'M13', 'Citilink', 'citilink.png', 'Pesawat ini memiliki fasilitas yang sangat lengkap, dan juga keamanan yang sangat aman.', 100),
(5, 'M14', 'Batik Air', 'batikair.png', 'Pesawat ini memiliki fasilitas yang sangat lengkap, dan juga keamanan yang sangat aman.', 100),
(6, 'M15', 'Aviastar', 'aviastar.png', 'Pesawat ini memiliki fasilitas yang sangat lengkap, dan juga keamanan yang sangat aman.', 100),
(7, 'M16', 'Batavia Air', 'bataviaair.png', 'Pesawat ini memiliki fasilitas yang sangat lengkap, dan juga keamanan yang sangat aman.', 100);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `depart_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `arrive_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rute_from` varchar(30) NOT NULL,
  `rute_to` varchar(30) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `id_maskapai`, `depart_at`, `arrive_at`, `rute_from`, `rute_to`, `price`) VALUES
(12, 4, '2018-01-29 02:49:00', '2018-01-30 02:49:00', 'Surabaya', 'Jogja', 400000),
(13, 2, '2018-01-30 03:09:00', '2018-01-31 03:09:00', 'Semarang', 'Bali', 500000),
(14, 7, '2018-01-29 03:10:00', '2018-02-01 03:10:00', 'Jogja', 'Bali', 500000),
(15, 2, '2018-02-05 02:58:00', '2018-02-21 02:58:00', 'Surabaya', 'Jakarta', 400000),
(16, 6, '2018-02-06 02:58:00', '2018-02-21 02:58:00', 'Jakarta', 'Bali', 400000),
(17, 7, '2018-02-05 02:58:00', '2018-02-13 02:58:00', 'Jogja', 'Jakarta', 500000),
(21, 4, '2018-02-09 00:27:00', '2018-02-10 00:27:00', 'Semarang', 'Bali', 400000),
(23, 2, '2018-02-14 06:27:00', '2018-02-24 06:28:00', 'Jakarta', 'Arab', 100000),
(24, 2, '2018-02-10 10:46:00', '2018-02-10 13:46:00', 'Jakarta', 'Bali', 600000),
(25, 5, '2018-02-10 10:48:00', '2018-02-10 13:52:00', 'Jakarta', 'Bali', 500000),
(26, 2, '2018-02-12 16:00:00', '2018-02-12 18:00:00', 'skj', 'pwt', 50),
(27, 3, '2018-02-23 13:33:00', '2018-02-24 13:33:00', 'Purwokerto', 'Banyumas', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'hanafi', '3c6e5a5188f5ce69ca7c587676d613b3'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `token_booking` (`token_pemesan`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `token_pemesan` (`token_pemesan`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_rute_2` (`id_rute`),
  ADD KEY `id_rute_3` (`id_rute`),
  ADD KEY `token_booking` (`token_booking`);

--
-- Indexes for table `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_maskapai` (`id_maskapai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=225;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=402;
--
-- AUTO_INCREMENT for table `maskapai`
--
ALTER TABLE `maskapai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id`),
  ADD CONSTRAINT `customer_ibfk_3` FOREIGN KEY (`token_booking`) REFERENCES `booking` (`token_pemesan`);

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `maskapai` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
