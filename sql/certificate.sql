-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2015 at 05:11 AM
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
  `nama_certificate` varchar(25) NOT NULL,
  `status_certificate` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id_certificate`, `id_user`, `tanggal`, `nama_user`, `email_user`, `kode_negara_user`, `provinsi_user`, `kota_user`, `nama_organisasi`, `unit_organisasi`, `challenge_password`, `optional_company`, `nama_certificate`, `status_certificate`, `url`) VALUES
(3, 1, '2015-05-07 01:31:26', 'Radhea', 'radhea.dewi@gmail.com', 112, NULL, NULL, NULL, NULL, NULL, NULL, 'www.facebook.com', 0, 'https://www.facebook.com/groups/317682485073014/436199713221290/?notif_t=group_activity'),
(13, 1, '2015-05-07 02:35:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Radhea Permata Dewi', 0, '<input type="submit" class="btn btn-lg btn-success btn-block"></a>'),
(14, 1, '2015-05-07 02:37:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fandy Ahmad', 0, ' -----BEGIN CERTIFICATE REQUEST-----\r\nMIIC8DCCAdgCAQAwgY8xCzAJBgNVBAYTAklEMRMwEQYDVQQIDApKYXdhIFRpbXVy\r\nMREwDwYDVQQHDAhTdXJhYmF5YTEMMAoGA1UECgwDSVRTMRQwEgYDVQQLDAtJbmZv\r\ncm1hdGljczEQMA4GA1UEAwwHZmFuZHp6ejEiMCAGCSqGSIb3DQEJARYTY29iYS1j\r\nb2JhQGdtYWlsLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANO6\r\nNsHFwE1W7K+l3mNUqrZ3JWMj/7f1Qe+X74Z/u6P12vmL8bixNTgHIAKQzyF5CglJ\r\n4PdOkTUO8AtUceVtRV/PiF/Pxz/W9wraEO+WMTBTwCubv/FsVG1GQ2iFVH3QJwQ4\r\nCqwyw1/iOJA0G7Gnn/91pSM2ftuLowmaiQC0aU7bZx8bFClBdMRoxRI06TH+0En+\r\ncdrQUzSHDlc4dcvTER1oxObdp+3kOnmXM1HwzWYQI9M5Zfjum6aJ+hquAcrjZ2Up\r\n2VWs5evZf1NzdI1bZW4kLZZFMbnU/cYrjZkGJaBs5jLWQW7UX172GqJe9txD+ooT\r\nHSWzDHCQny7kpdf9QrsCAwEAAaAbMBkGCSqGSIb3DQEJBzEMDApmYW5kYXpreTIz\r\nMA0GCSqGSIb3DQEBCwUAA4IBAQBpWZAXToqEENdBifMtglMlysUL+OXKFmScbL8q\r\ntDPJIx4xmTAiMffv/p9P4B1PfkGC1FDDeD/XIEX14ylmuQfhOpmf1vlHTnq0+g55\r\nHBAc5Ff9d17sKcXWN0ZCqezJfthqIiRRUH+62PJsMFvKqK+mB/Cvqn0t5pK7eqDS\r\nYoeBT2KHANR37P628HiXAENEag5dsa4hsGgXjEkPWybRXHBWP9K/+vsi691ZSO4y\r\n2UWCuvt7d92ZWYq1H276O0iuutY+Gxns0ITtoVXJlm0ac/e5BRhgYj4BVz3S238u\r\nGhuKQVM4EUkm3w93ua61sFEcm5ph1pvDgUwghs0Nl8uTrQzS\r\n-----END CERTIFICATE REQUEST-----'),
(15, 1, '2015-05-07 02:38:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Raga Krilido', 0, ' -----BEGIN CERTIFICATE REQUEST-----\r\nMIIC7zCCAdcCAQAwcjELMAkGA1UEBhMCSUQxEzARBgNVBAgMCkphd2EgVGltdXIx\r\nETAPBgNVBAcMCFN1cmFiYXlhMRQwEgYDVQQKDAtwZWp1YW5nLmNvbTEPMA0GA1UE\r\nCwwGSVQgZGV2MRQwEgYDVQQDDAtwZWp1YW5nLmNvbTCCASIwDQYJKoZIhvcNAQEB\r\nBQADggEPADCCAQoCggEBAN2EA12l0z9SUiOVWecLUAMw+7NSYQmHMv+liZUfwHta\r\nnAGDovf6k2fBe5qBTYqq2dRXd4zGGByhTF2QNo97mNQLLrg6kOnriL0edv8xNLit\r\nutO0KajfXKNULeb6/AujweHQ2XCOOtlEGzYELL1OSPhKXgca6ZR4OyHuMrTp9L/L\r\nu1qcO12gxgcB5sHgR6gccmgQ/PxcEEjX84erHUM96uK4w1HvwRYJdrJi/hnUKWrt\r\njEpr+Jnv8vbHBhZczt7RfwDcJp3hKPPSELsKCzG2mlz5jbHN3zMMECzdLsaKc1Ia\r\noXqgbCVxeSgBOfHtsF/jtRmk8waS5b751wgvNZzJ5YMCAwEAAaA4MBoGCSqGSIb3\r\nDQEJAjENDAtwZWp1YW5nLmNvbTAaBgkqhkiG9w0BCQcxDQwLcGVqdWFuZy5jb20w\r\nDQYJKoZIhvcNAQELBQADggEBAEA+sTlyH2WnOg4c/toC2j525D5FxAiufr9g1vQ3\r\nQWoMg0I9+QgaCJYuUJWoRnbc+zZywBrqeIq8Nvpcjptd2cC30Z33YJ8Gu6QSUDUu\r\nkdRVLg66A1nsQXu+ryvjigzsyBXVGDNHCasAwz92BqaUHx7tcr5HB+7gQcOR0WYz\r\n8aq6YHy6mkDqnpvXeU3ML5pagHVe3ZL0r7znUYf3rCfb5zo+aYbsRy1HpWCG3xcl\r\nfG2Epfxpj70xMYdbx+39AKuyFDraq+qZjjhAhQuE1+mT/nqGBxYczQeoQGEmm8d4\r\n5695ycShe4l4PZd+9nyOQMUV5CCBItruOuDYnNWqQq08oH0=\r\n-----END CERTIFICATE REQUEST-----');

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
MODIFY `id_certificate` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
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
