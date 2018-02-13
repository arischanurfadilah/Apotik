-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 08:58 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_apotek`
--
CREATE DATABASE IF NOT EXISTS `db_apotek` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_apotek`;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `ID_OBAT` varchar(10) NOT NULL,
  `ID_SUPPLIER` varchar(10) DEFAULT NULL,
  `NAMA_OBAT` varchar(1024) DEFAULT NULL,
  `PRODUSEN` mediumtext,
  `HARGA` int(11) DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL,
  `FOTO` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ID_OBAT`),
  UNIQUE KEY `OBAT_PK` (`ID_OBAT`),
  KEY `MENYUPPLAI_FK` (`ID_SUPPLIER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_OBAT`, `ID_SUPPLIER`, `NAMA_OBAT`, `PRODUSEN`, `HARGA`, `STOCK`, `FOTO`) VALUES
('OBAT167', 'SUPPLY254', 'Amoxicillin', 'PT. Amox', 5000, 24, '6.jpg'),
('OBAT195', 'SUPPLY197', 'Bodrex', 'PT. bodrex', 3500, 26, '211.jpg'),
('OBAT337', 'S001123123', 'Bodrexin', 'PT. Bodrexin', 1500, 30, '41.png'),
('OBAT369', 'S001123123', 'Paramex', 'PT. Paramex', 2500, 20, '3.jpg'),
('OBAT391', 'S001123123', 'Asam Mefenamat', 'PT. Asam', 4000, 46, '5.jpg'),
('OBAT774', 'S001123123', 'Mixagrip', 'PT. Mixagrip', 2500, 45, '1002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `ID_PEGAWAI` varchar(10) NOT NULL,
  `USERNAME` varchar(1024) DEFAULT NULL,
  `PASSWORD` varchar(1024) DEFAULT NULL,
  `NAMA_PEGAWAI` varchar(1024) DEFAULT NULL,
  `ALAMAT` mediumtext,
  `TELP_PEGAWAI` varchar(1024) DEFAULT NULL,
  `JABATAN` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_PEGAWAI`),
  UNIQUE KEY `PEGAWAI_PK` (`ID_PEGAWAI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_PEGAWAI`, `USERNAME`, `PASSWORD`, `NAMA_PEGAWAI`, `ALAMAT`, `TELP_PEGAWAI`, `JABATAN`) VALUES
('CREW001', 'admin', 'admin', 'admin', 'Apotek Moklet Farma', '0987654321', 'admin'),
('CREW498', 'arischa', 'arischa', 'Arischa Nur Fadilah', 'Pasuruan', '341241241', 'kasir'),
('CREW967', 'apotek', 'apotek', 'apotek', 'apotek', '0381294000', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `ID_SUPPLIER` varchar(10) NOT NULL,
  `NAMA_SUPPLIER` varchar(1024) DEFAULT NULL,
  `ALAMAT_SUPPLIER` mediumtext,
  `KOTA_SUPPLIER` varchar(1024) DEFAULT NULL,
  `TELP_SUPPLIER` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ID_SUPPLIER`),
  UNIQUE KEY `SUPPLIER_PK` (`ID_SUPPLIER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`ID_SUPPLIER`, `NAMA_SUPPLIER`, `ALAMAT_SUPPLIER`, `KOTA_SUPPLIER`, `TELP_SUPPLIER`) VALUES
('S001123123', 'Arischa Nur Fadilah', 'Prigen', 'Pasuruan', '0813123'),
('SUPPLY197', 'Arischa NF', 'Sawojajar', 'Malang', '2412441241'),
('SUPPLY254', 'Arischa', 'Sawojajar', 'Malang', '123012'),
('SUPPLY620', 'Supplier', 'Supplier', 'Supplier', '3213124');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `ID_TRANSAKSI` varchar(10) NOT NULL,
  `ID_PEGAWAI` varchar(10) DEFAULT NULL,
  `ID_OBAT` varchar(10) DEFAULT NULL,
  `NAMA_PEMBELI` varchar(1024) DEFAULT NULL,
  `TGL_TRANS` varchar(1024) DEFAULT NULL,
  `QTY` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_TRANSAKSI`),
  UNIQUE KEY `TRANSAKSI_PK` (`ID_TRANSAKSI`),
  KEY `MELAKUKAN_FK` (`ID_PEGAWAI`),
  KEY `MENGURANGI_FK` (`ID_OBAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_TRANSAKSI`, `ID_PEGAWAI`, `ID_OBAT`, `NAMA_PEMBELI`, `TGL_TRANS`, `QTY`) VALUES
('TRANS145', 'CREW001', 'OBAT167', 'Ardhan', '2017 - 05 - 18', 2),
('TRANS209', 'CREW967', 'OBAT167', 'Bayu', '2017 - 05 - 18', 2),
('TRANS214', 'CREW001', 'OBAT167', 'Anisa', '2017 - 05 - 18', 1),
('TRANS293', 'CREW001', 'OBAT167', 'Arumia', '2017 - 05 - 18', 1),
('TRANS550', 'CREW498', 'OBAT195', 'Doxa', '2017 - 05 - 18', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `FK_OBAT_MENYUPPLA_SUPPLIER` FOREIGN KEY (`ID_SUPPLIER`) REFERENCES `supplier` (`ID_SUPPLIER`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_TRANSAKS_MELAKUKAN_PEGAWAI` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`),
  ADD CONSTRAINT `FK_TRANSAKS_MENGURANG_OBAT` FOREIGN KEY (`ID_OBAT`) REFERENCES `obat` (`ID_OBAT`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
