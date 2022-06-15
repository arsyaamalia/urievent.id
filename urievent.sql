-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2022 at 05:39 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urievent8`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID_ADMIN` varchar(8) NOT NULL,
  `USERNAME_ADMIN` varchar(50) DEFAULT NULL,
  `PASSWORD_ADMIN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_ADMIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `USERNAME_ADMIN`, `PASSWORD_ADMIN`) VALUES
('A001', 'charles', 'charles123'),
('A002', 'budi', 'budi123'),
('A003', 'andi', 'andi123');

-- --------------------------------------------------------

--
-- Table structure for table `bill_order`
--

DROP TABLE IF EXISTS `bill_order`;
CREATE TABLE IF NOT EXISTS `bill_order` (
  `ID_BILL` varchar(8) NOT NULL,
  `ID_ORDER` varchar(8) DEFAULT NULL,
  `TOTAL_HARGA` int DEFAULT NULL,
  PRIMARY KEY (`ID_BILL`),
  KEY `FK_MENGHASILKAN2` (`ID_ORDER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bill_order`
--

INSERT INTO `bill_order` (`ID_BILL`, `ID_ORDER`, `TOTAL_HARGA`) VALUES
('BILL001', 'ORD001', 25000),
('BILL002', 'ORD002', 50000),
('BILL003', 'ORD003', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

DROP TABLE IF EXISTS `detail_order`;
CREATE TABLE IF NOT EXISTS `detail_order` (
  `ID_PAKET` varchar(8) NOT NULL,
  `ID_ORDER` varchar(8) NOT NULL,
  PRIMARY KEY (`ID_PAKET`,`ID_ORDER`),
  KEY `FK_DETAIL_ORDER2` (`ID_ORDER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`ID_PAKET`, `ID_ORDER`) VALUES
('P001', 'ORD001'),
('P002', 'ORD002'),
('P003', 'ORD003');

-- --------------------------------------------------------

--
-- Table structure for table `form_order`
--

DROP TABLE IF EXISTS `form_order`;
CREATE TABLE IF NOT EXISTS `form_order` (
  `ID_FORM` varchar(8) NOT NULL,
  `ID_QUESTION` varchar(8) DEFAULT NULL,
  `ID_ORDER` varchar(8) DEFAULT NULL,
  `ANSWER_ITEMS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_FORM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `form_order`
--

INSERT INTO `form_order` (`ID_FORM`, `ID_QUESTION`, `ID_ORDER`, `ANSWER_ITEMS`) VALUES
('FRM001', 'QST001', 'ORD001', 'Rangga'),
('FRM002', 'QST002', 'ORD001', 'Proposal Sponsor.pdf'),
('FRM003', 'QST001', 'ORD002', 'Arsya'),
('FRM004', 'QST002', 'ORD002', 'Proposal Sponsor.pdf'),
('FRM005', 'QST001', 'ORD003', 'Adam'),
('FRM006', 'QST002', 'ORD003', 'Proposal Sponsor.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_layanan`
--

DROP TABLE IF EXISTS `kategori_layanan`;
CREATE TABLE IF NOT EXISTS `kategori_layanan` (
  `ID_KATEGORI` varchar(8) NOT NULL,
  `NAMA_KATEGORI` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_KATEGORI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`ID_KATEGORI`, `NAMA_KATEGORI`) VALUES
('CAT001', 'Media Partner'),
('CAT002', 'Sponsor'),
('CAT003', 'Vendor'),
('CAT004', 'Venue');

-- --------------------------------------------------------

--
-- Table structure for table `kelola_user`
--

DROP TABLE IF EXISTS `kelola_user`;
CREATE TABLE IF NOT EXISTS `kelola_user` (
  `ID_ADMIN` varchar(8) NOT NULL,
  `ID_USER` varchar(8) NOT NULL,
  PRIMARY KEY (`ID_ADMIN`,`ID_USER`),
  KEY `FK_KELOLA_USER2` (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kelola_user`
--

INSERT INTO `kelola_user` (`ID_ADMIN`, `ID_USER`) VALUES
('A001', 'U001'),
('A001', 'U002'),
('A001', 'U003');

-- --------------------------------------------------------

--
-- Table structure for table `order_layanan`
--

DROP TABLE IF EXISTS `order_layanan`;
CREATE TABLE IF NOT EXISTS `order_layanan` (
  `ID_ORDER` varchar(8) NOT NULL,
  `ID_BILL` varchar(8) DEFAULT NULL,
  `ID_USER` varchar(8) DEFAULT NULL,
  `DURASI_SEWA` datetime DEFAULT NULL,
  `QUANTITY` int DEFAULT NULL,
  `STATUS_PEMBAYARAN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_ORDER`),
  KEY `FK_MELAKUKAN` (`ID_USER`),
  KEY `FK_MENGHASILKAN` (`ID_BILL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_layanan`
--

INSERT INTO `order_layanan` (`ID_ORDER`, `ID_BILL`, `ID_USER`, `DURASI_SEWA`, `QUANTITY`, `STATUS_PEMBAYARAN`) VALUES
('ORD001', 'BILL001', 'U001', '2022-06-15 04:51:15', 1, NULL),
('ORD002', 'BILL002', 'U002', '2022-06-15 04:52:55', 1, NULL),
('ORD003', 'BILL003', 'U003', '2022-06-15 04:53:13', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paket_layanan`
--

DROP TABLE IF EXISTS `paket_layanan`;
CREATE TABLE IF NOT EXISTS `paket_layanan` (
  `ID_PAKET` varchar(8) NOT NULL,
  `ID_LAYANAN` varchar(8) DEFAULT NULL,
  `NAMA_PAKET` varchar(50) DEFAULT NULL,
  `HARGA_PAKET` int DEFAULT NULL,
  PRIMARY KEY (`ID_PAKET`),
  KEY `FK_MEMILIKI` (`ID_LAYANAN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `paket_layanan`
--

INSERT INTO `paket_layanan` (`ID_PAKET`, `ID_LAYANAN`, `NAMA_PAKET`, `HARGA_PAKET`) VALUES
('P001', 'LAY002', 'Bronze', 25000),
('P002', 'LAY002', 'Silver', 50000),
('P003', 'LAY002', 'Gold', 75000),
('P004', 'LAY002', 'Diamond', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `produk_layanan`
--

DROP TABLE IF EXISTS `produk_layanan`;
CREATE TABLE IF NOT EXISTS `produk_layanan` (
  `ID_LAYANAN` varchar(8) NOT NULL,
  `ID_KATEGORI` varchar(8) DEFAULT NULL,
  `ID_SUBKATEGORI` varchar(8) DEFAULT NULL,
  `ID_USER` varchar(8) DEFAULT NULL,
  `NAMA_LAYANAN` varchar(50) DEFAULT NULL,
  `NAMA_INSTANSI` varchar(50) DEFAULT NULL,
  `EMAIL_INSTANSI` varchar(50) DEFAULT NULL,
  `WHATSAPP` varchar(50) DEFAULT NULL,
  `INSTAGRAM` varchar(50) DEFAULT NULL,
  `PICTURE_POSTER` varchar(50) DEFAULT NULL,
  `DESKRIPSI` varchar(200) DEFAULT NULL,
  `STEP_BEFORE` varchar(200) DEFAULT NULL,
  `STEP_AFTER` varchar(200) DEFAULT NULL,
  `OTHER` varchar(50) DEFAULT NULL,
  `VALUE` varchar(200) DEFAULT NULL,
  `STATUS_LAYANAN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_LAYANAN`),
  KEY `FK_BERISIKAN` (`ID_KATEGORI`),
  KEY `FK_MENGUNGGAH` (`ID_USER`),
  KEY `FK_PUNYA` (`ID_SUBKATEGORI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produk_layanan`
--

INSERT INTO `produk_layanan` (`ID_LAYANAN`, `ID_KATEGORI`, `ID_SUBKATEGORI`, `ID_USER`, `NAMA_LAYANAN`, `NAMA_INSTANSI`, `EMAIL_INSTANSI`, `WHATSAPP`, `INSTAGRAM`, `PICTURE_POSTER`, `DESKRIPSI`, `STEP_BEFORE`, `STEP_AFTER`, `OTHER`, `VALUE`, `STATUS_LAYANAN`) VALUES
('LAY001', 'CAT001', 'SCAT001', 'U001', 'Medpart Kilat', 'PT. Medpart Indonesia', 'medpartindo@gmail.com', '08123123123', 'medpartindo', NULL, 'Lorem ipsum dolor sit amet.', NULL, NULL, NULL, NULL, NULL),
('LAY002', 'CAT001', 'SCAT002', 'U002', 'Medpart Trusted', 'Magang Update', 'magangupdate@gmail.com', '08123123123', 'magangupdate', NULL, 'Lorem ipsum dolor sit amet.', NULL, NULL, NULL, NULL, NULL),
('LAY003', 'CAT001', 'SCAT007', 'U003', 'Medpart Cepats', 'Event Surabaya', 'eventsub@gmail.com', 'eventsurabaya@gmail.com', 'eventsurabaya', NULL, 'Lorem ipsum dolor sit amet.', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_items`
--

DROP TABLE IF EXISTS `question_items`;
CREATE TABLE IF NOT EXISTS `question_items` (
  `ID_QUESTION` varchar(8) NOT NULL,
  `ID_LAYANAN` varchar(8) DEFAULT NULL,
  `QUESTION_ITEMS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_QUESTION`),
  KEY `FK_TERDAPAT` (`ID_LAYANAN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `question_items`
--

INSERT INTO `question_items` (`ID_QUESTION`, `ID_LAYANAN`, `QUESTION_ITEMS`) VALUES
('QST001', 'LAY002', 'Penanggung Jawab'),
('QST002', 'LAY002', 'Upload Proposal Pengajuan');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori_layanan`
--

DROP TABLE IF EXISTS `subkategori_layanan`;
CREATE TABLE IF NOT EXISTS `subkategori_layanan` (
  `ID_SUBKATEGORI` varchar(8) NOT NULL,
  `ID_KATEGORI` varchar(8) DEFAULT NULL,
  `NAMA_SUBKATEGORI` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_SUBKATEGORI`),
  KEY `FK_TERDIRI` (`ID_KATEGORI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subkategori_layanan`
--

INSERT INTO `subkategori_layanan` (`ID_SUBKATEGORI`, `ID_KATEGORI`, `NAMA_SUBKATEGORI`) VALUES
('SCAT001', 'CAT001', 'Career Development'),
('SCAT002', 'CAT001', 'Games'),
('SCAT003', 'CAT001', 'Pendidikan'),
('SCAT004', 'CAT001', 'Kesehatan'),
('SCAT005', 'CAT001', 'Pertanian'),
('SCAT006', 'CAT001', 'Properti'),
('SCAT007', 'CAT001', 'F & B'),
('SCAT008', 'CAT001', 'E-Commerce'),
('SCAT009', 'CAT001', 'Perjalanan & Akomodasi'),
('SCAT010', 'CAT001', 'SaaS (Software as a Service)'),
('SCAT011', 'CAT001', 'Transportasi'),
('SCAT012', 'CAT002', 'Career Development'),
('SCAT013', 'CAT002', 'Games'),
('SCAT014', 'CAT002', 'Pendidikan'),
('SCAT015', 'CAT002', 'Kesehatan'),
('SCAT016', 'CAT002', 'Pertanian'),
('SCAT017', 'CAT002', 'Properti'),
('SCAT018', 'CAT002', 'F & B'),
('SCAT019', 'CAT002', 'E-Commerce'),
('SCAT020', 'CAT002', 'Perjalanan & Akomodasi'),
('SCAT021', 'CAT002', 'SaaS (Software as a Service)'),
('SCAT022', 'CAT002', 'Transportasi'),
('SCAT023', 'CAT003', 'Productions'),
('SCAT024', 'CAT003', 'Event-Kit'),
('SCAT025', 'CAT004', 'Indoor'),
('SCAT026', 'CAT004', 'Outdoor'),
('SCAT027', 'CAT004', 'Indoor & Outdoor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` varchar(8) NOT NULL,
  `NAMA_USER` varchar(50) DEFAULT NULL,
  `USERNAME_USER` varchar(50) DEFAULT NULL,
  `PASSWORD_USER` varchar(50) DEFAULT NULL,
  `EMAIL_USER` varchar(50) DEFAULT NULL,
  `TELP_USER` varchar(13) DEFAULT NULL,
  `FOTO_USER` varchar(50) DEFAULT NULL,
  `DOMISILI_USER` varchar(50) DEFAULT NULL,
  `NIK_USER` varchar(50) DEFAULT NULL,
  `BIRTHDATE_USER` date DEFAULT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `NAMA_USER`, `USERNAME_USER`, `PASSWORD_USER`, `EMAIL_USER`, `TELP_USER`, `FOTO_USER`, `DOMISILI_USER`, `NIK_USER`, `BIRTHDATE_USER`) VALUES
('U001', 'rangga', 'rangga', 'rangga123', 'rangga@gmail.com', '08123456789', NULL, NULL, NULL, NULL),
('U002', 'arsya', 'arsya', 'arsya123', 'arsya@gmail.com', '08123456789', NULL, NULL, NULL, NULL),
('U003', 'adam', 'adam', 'adam123', 'adam@gmail.com', '08123456789', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_layanan`
--

DROP TABLE IF EXISTS `verifikasi_layanan`;
CREATE TABLE IF NOT EXISTS `verifikasi_layanan` (
  `ID_ADMIN` varchar(8) NOT NULL,
  `ID_LAYANAN` varchar(8) NOT NULL,
  PRIMARY KEY (`ID_ADMIN`,`ID_LAYANAN`),
  KEY `FK_VERIFIKASI_LAYANAN2` (`ID_LAYANAN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `verifikasi_layanan`
--

INSERT INTO `verifikasi_layanan` (`ID_ADMIN`, `ID_LAYANAN`) VALUES
('A001', 'LAY001'),
('A001', 'LAY002'),
('A001', 'LAY003');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `ID_WISHLIST` varchar(8) NOT NULL,
  `ID_LAYANAN` varchar(8) DEFAULT NULL,
  `ID_USER` varchar(8) DEFAULT NULL,
  `TGL_WISHLIST` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_WISHLIST`),
  KEY `FK_MEMPUNYAI` (`ID_USER`),
  KEY `FK_MENGANDUNG` (`ID_LAYANAN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`ID_WISHLIST`, `ID_LAYANAN`, `ID_USER`, `TGL_WISHLIST`) VALUES
('W001', 'LAY001', 'U001', '2022-06-15 04:18:53'),
('W002', 'LAY002', 'U002', '2022-06-15 04:19:38'),
('W003', 'LAY003', 'U003', '2022-06-15 04:19:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
