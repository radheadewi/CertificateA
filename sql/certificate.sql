-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2015 at 03:35 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `certificate`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
`id_certificate` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_user` varchar(25) DEFAULT NULL,
  `email_user` varchar(25) DEFAULT NULL,
  `kode_negara_user` int(11) DEFAULT NULL,
  `provinsi_user` varchar(25) DEFAULT NULL,
  `kota_user` varchar(25) DEFAULT NULL,
  `nama_organisasi` varchar(25) DEFAULT NULL,
  `unit_organisasi` varchar(25) DEFAULT NULL,
  `challenge_password` varchar(25) DEFAULT NULL,
  `optional_company` varchar(25) DEFAULT NULL,
  `url_certificate` varchar(25) NOT NULL,
  `status_certificate` int(11) NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id_certificate`, `id_user`, `tanggal`, `nama_user`, `email_user`, `kode_negara_user`, `provinsi_user`, `kota_user`, `nama_organisasi`, `unit_organisasi`, `challenge_password`, `optional_company`, `url_certificate`, `status_certificate`, `url`) VALUES
(1, 1, '2015-05-07 01:24:31', '0', '0', 111, '112', '0', '0', '0', '0', '0', '0', 0, 'https://www.facebook.com/groups/317682485073014/436199713221290/?notif_t=group_activity'),
(2, 1, '2015-05-07 01:27:18', 'Radhea', '', 0, '', '0', '0', '0', '0', '0', '0', 0, 'https://www.facebook.com/groups/317682485073014/436199713221290/?notif_t=group_activity'),
(3, 1, '2015-05-07 01:31:26', 'Radhea', 'radhea.dewi@gmail.com', 112, NULL, NULL, NULL, NULL, NULL, NULL, 'www.facebook.com', 0, 'https://www.facebook.com/groups/317682485073014/436199713221290/?notif_t=group_activity');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `email`, `password`) VALUES
(1, 'Radhea Permata Dewi', 'Jalan Trikora Kompleks Galuh Marindu 2, Banjarbaru', 'radhea.dewi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
 ADD PRIMARY KEY (`id_certificate`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
MODIFY `id_certificate` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
ADD CONSTRAINT `certificate_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
