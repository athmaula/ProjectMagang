-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2016 at 03:19 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_Kemampuan`
--

CREATE TABLE IF NOT EXISTS `tabel_Kemampuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Identitas` int(11) NOT NULL,
  `bidang` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_Pendidikan`
--

CREATE TABLE IF NOT EXISTS `tabel_Pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_identitas` int(11) NOT NULL,
  `TK` varchar(50) NOT NULL,
  `SD` varchar(50) NOT NULL,
  `SMP` varchar(50) NOT NULL,
  `SMA` varchar(50) NOT NULL,
  `Perguruan Tinggi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_Pengalaman`
--

CREATE TABLE IF NOT EXISTS `tabel_Pengalaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_identitas` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `masuk` int(4) NOT NULL,
  `keluar` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_Perusahaan`
--

CREATE TABLE IF NOT EXISTS `tabel_Perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_identitas`
--

CREATE TABLE IF NOT EXISTS `table_identitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` enum('male','female') NOT NULL,
  `agama` enum('Islam','Kristen','Khatolik','Hindu','Budha','Kong Hu Cu') NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
