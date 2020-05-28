-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 11:22 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru_bk`
--

CREATE TABLE IF NOT EXISTS `guru_bk` (
  `id_guru` int(100) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `guru_bk`
--

INSERT INTO `guru_bk` (`id_guru`, `nama_guru`, `nip`, `password`, `email`) VALUES
(2, 'Nia, MPd.', '0002', 'nia', 'nia@gmail.com'),
(3, 'Tuti, MSc.', '0003', 'tuti', 'tuti@gmail.com'),
(4, 'Gea, MPd.', '0001', 'gea', 'gea@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama`, `hari`, `tanggal`, `sesi`, `waktu`) VALUES
(10, 'Nia, MPd.', 'Senin', '2019-01-28', '2', '10.00-11.00'),
(11, 'Tuti, MSc.', 'Jumat', '2019-01-11', '3', '11.00-12.00'),
(13, 'Gea, MPd.', 'Kamis', '2019-01-17', '4', '13.00-14.00');

-- --------------------------------------------------------

--
-- Table structure for table `konseling`
--

CREATE TABLE IF NOT EXISTS `konseling` (
  `id_daftar` int(100) NOT NULL AUTO_INCREMENT,
  `nama_daftar` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jadwal` varchar(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `note` varchar(300) NOT NULL,
  `hasil` varchar(1000) NOT NULL,
  `murid_fk` int(11) NOT NULL,
  PRIMARY KEY (`id_daftar`),
  KEY `id_murid` (`murid_fk`),
  KEY `id_murid_2` (`murid_fk`),
  KEY `id_jadwal` (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `konseling`
--

INSERT INTO `konseling` (`id_daftar`, `nama_daftar`, `kategori`, `jadwal`, `nama_guru`, `id_jadwal`, `note`, `hasil`, `murid_fk`) VALUES
(13, 'Jessica Ivana', 'Lainnya', '2019-01-28', 'Nia, MPd.', 10, 'ada bullying', 'yaudah', 2),
(14, 'Jessica Ivana', 'Perguruan Tinggi', '2019-01-28', 'Nia, MPd.', 10, 'Tentang SNMPTN', 'Berdasarkan nilai raport yang telah diperlihatkan, Jessica cenderung dominan pada mata pelajaran Kimia. Sehingga Jessica disarankan untuk mengambil jurusan ', 2),
(15, 'Devi Zenvita', 'Nilai Raport', '2019-01-28', 'Nia, MPd.', 10, 'Raport saya sudah terlalu bagus saya bingung gimana biar ga bagus bagus amat', 'Yasudah kalau begitu kamu tidak usah sekolah saja, lagipula kamu di sekolah hanya tidur dan jajan serta absen fingerprint biar dapat ijazah pas wisuda, jadi mending gausah lah kau sekolah sekolah cak wong ado otak bae', 1),
(16, 'Devi Zenvita', 'Kekerasan di Sekolah', '2019-01-11', 'Tuti, MSc.', 10, 'Bullying astigehh', 'oh', 1),
(18, 'Anggie Renaissance', 'Delegasi', '2019-01-11', 'Tuti, MSc.', 11, 'hms', 'ggggaduh', 3),
(22, 'Anggie Renaissance', 'Nilai Raport', '2019-01-17', 'Gea, MPd.', 13, 'halo', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE IF NOT EXISTS `murid` (
  `id_murid` int(11) NOT NULL AUTO_INCREMENT,
  `nama_murid` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `nama_walas` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_murid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `nama_murid`, `nis`, `ttl`, `email`, `kelas`, `nama_walas`, `password`) VALUES
(1, 'Devi Zenvita', '181910155', 'Tangerang/ 14 Januari 2001', 'devizenvita@gmail.com', 'XII MIPA 4', 'Roro', 'princess'),
(2, 'Jessica Ivana', '181910170', 'Jakarta 11 September 1999', 'jessica@gmail.com', 'XI MIPA 4', 'Bu Sulastri Nurdin', 'tutul'),
(3, 'Anggie Renaissance', '181910111', 'Tangerang/ 20 April 1999', 'anggie@gmail.com', 'X MIPA 2', 'Sri Widiastuti', 'nce');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konseling`
--
ALTER TABLE `konseling`
  ADD CONSTRAINT `konseling_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
