-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2019 at 07:24 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tokomakanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'Muhammad Fadhil Adha');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `deskripsi_menu` text NOT NULL,
  `foto_menu` varchar(25) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `deskripsi_menu`, `foto_menu`) VALUES
(15, 'Lontong Pecal', 15000, 'Lontong pecal enak', 'lontong-pecel2.jpg'),
(2, 'Ayam Penyet', 12000, 'Ayam penyet \r\n', 'ayam-goreng2.jpg'),
(11, 'Jus Jeruk', 12000, 'Jus jeruk manis dingin', 'jus-jeruk2.jpg'),
(13, 'Ikan Bakar', 20000, 'Ikan bakar dengan sambal kecap yang enak.', 'ikan-bakar2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `nomor_telepon`) VALUES
(1, 'rudi.madu@gmail.com', 'rudimadu', 'Rudi Ashari Lubis', '08127661721'),
(2, 'fachreziiee@gmail.com', 'biawakterbang', 'Rizky Fachrezi', '089172319212'),
(13, 'tri.233@yahoo.co.id', 'trisumariansyah', 'Tri Sumariansyah ', '082243789099'),
(11, 'fahmi.hidyt@gmail.co.id', 'fahmiiieee', 'Muhammad Fahmi Hidayat', '082245331289'),
(12, 'ardi.koffie@outlook.co.us', 'ardiansyah', 'Ardiansyah Putra', '087765432210'),
(14, 'fadhil.sonic@gmail.com', 'Sonic123', 'Muhammad Fadhil Adha', '082273318016'),
(15, 'habib.azm@gmail.com', 'ogektampoe', 'Habib Azmi Tampubolon', '081256789923'),
(16, 'prayoga.wijaya12@yahoo.com', 'yogaogek', 'Prayoga Wijaya', '085377891230'),
(17, 'imam.xtkj30@gmail.com', 'imamari', 'Imam Ari Sugrada', '087765443210'),
(18, 'aufatama.ari@yahoo.com', 'aufatama', 'Ari Aufatama', '082344561282'),
(19, 'al_hussan.jahe@yahoo.com', 'jahemerah', 'Muhammad Husein Lubis', '082245128096'),
(20, 'ikky_hime@yahoo.com', 'ikyyhime', 'Muhammad Fajar Fikri', '08134556128');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  PRIMARY KEY (`id_pembelian`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tanggal_pembelian`, `total_pembelian`) VALUES
(1, 1, '2019-11-11', 10000),
(2, 2, '2019-11-07', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_menu`
--

CREATE TABLE IF NOT EXISTS `pembelian_menu` (
  `id_pembelian_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembelian` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id_pembelian_menu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pembelian_menu`
--

INSERT INTO `pembelian_menu` (`id_pembelian_menu`, `id_pembelian`, `id_menu`, `jumlah`) VALUES
(1, 1, 2, 10),
(2, 1, 2, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
