-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 06:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urievent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(8) NOT NULL,
  `username_admin` varchar(50) DEFAULT NULL,
  `password_admin` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
('A001', 'charles', 'charles123'),
('A002', 'budi', 'budi123'),
('A003', 'andi', 'andi123');

-- --------------------------------------------------------

--
-- Table structure for table `bill_order`
--

CREATE TABLE `bill_order` (
  `id_bill` varchar(8) NOT NULL,
  `id_order` varchar(8) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill_order`
--

INSERT INTO `bill_order` (`id_bill`, `id_order`, `total_harga`) VALUES
('BILL001', 'ORD001', 25000),
('BILL002', 'ORD002', 50000),
('BILL003', 'ORD003', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_paket` varchar(8) NOT NULL,
  `id_order` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_paket`, `id_order`) VALUES
('P001', 'ORD001'),
('P002', 'ORD002'),
('P003', 'ORD003');

-- --------------------------------------------------------

--
-- Table structure for table `form_order`
--

CREATE TABLE `form_order` (
  `id_from` varchar(8) NOT NULL,
  `id_question` varchar(8) DEFAULT NULL,
  `id_order` varchar(8) DEFAULT NULL,
  `answer_items` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_order`
--

INSERT INTO `form_order` (`id_from`, `id_question`, `id_order`, `answer_items`) VALUES
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

CREATE TABLE `kategori_layanan` (
  `id_kategori` varchar(8) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id_kategori`, `nama_kategori`) VALUES
('CAT001', 'Media Partner'),
('CAT002', 'Sponsor'),
('CAT003', 'Vendor'),
('CAT004', 'Venue');

-- --------------------------------------------------------

--
-- Table structure for table `kelola_user`
--

CREATE TABLE `kelola_user` (
  `id_admin` varchar(8) NOT NULL,
  `id_user` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelola_user`
--

INSERT INTO `kelola_user` (`id_admin`, `id_user`) VALUES
('A001', 'U001'),
('A001', 'U002'),
('A001', 'U003');

-- --------------------------------------------------------

--
-- Table structure for table `order_layanan`
--

CREATE TABLE `order_layanan` (
  `id_order` varchar(8) NOT NULL,
  `id_bill` varchar(8) DEFAULT NULL,
  `id_user` varchar(8) DEFAULT NULL,
  `tanggal_sewa` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status_pembayaran` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_layanan`
--

INSERT INTO `order_layanan` (`id_order`, `id_bill`, `id_user`, `tanggal_sewa`, `quantity`, `status_pembayaran`) VALUES
('ORD001', 'BILL001', 'U001', '2022-06-15', 1, NULL),
('ORD002', 'BILL002', 'U002', '2022-06-15', 1, NULL),
('ORD003', 'BILL003', 'U003', '2022-06-15', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paket_layanan`
--

CREATE TABLE `paket_layanan` (
  `id_paket` varchar(8) NOT NULL,
  `id_layanan` varchar(8) DEFAULT NULL,
  `nama_paket` varchar(50) DEFAULT NULL,
  `deskripsi_paket` varchar(100) NOT NULL,
  `harga_paket` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paket_layanan`
--

INSERT INTO `paket_layanan` (`id_paket`, `id_layanan`, `nama_paket`, `deskripsi_paket`, `harga_paket`) VALUES
('P001', 'LAY002', 'Bronze', '0', 25000),
('P002', 'LAY002', 'Silver', '0', 50000),
('P003', 'LAY002', 'Gold', '0', 75000),
('P004', 'LAY002', 'Diamond', '0', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `produk_layanan`
--

CREATE TABLE `produk_layanan` (
  `id_layanan` varchar(8) NOT NULL,
  `id_kategori` varchar(8) DEFAULT NULL,
  `id_subkategori` varchar(8) DEFAULT NULL,
  `id_user` varchar(8) DEFAULT NULL,
  `nama_instansi` varchar(50) DEFAULT NULL,
  `email_instansi` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `picture_poster` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `step_before` varchar(200) DEFAULT NULL,
  `step_after` varchar(200) DEFAULT NULL,
  `other` varchar(50) DEFAULT NULL,
  `value` varchar(200) DEFAULT NULL,
  `status_layanan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk_layanan`
--

INSERT INTO `produk_layanan` (`id_layanan`, `id_kategori`, `id_subkategori`, `id_user`, `nama_instansi`, `email_instansi`, `whatsapp`, `instagram`, `picture_poster`, `deskripsi`, `step_before`, `step_after`, `other`, `value`, `status_layanan`) VALUES
('LAY013', 'CAT001', 'SCAT001', 'U001', 'della shop', 'dellashop@gmail.com', '82223456789', 'dellashop', 'dellashop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY012', 'CAT004', 'SCAT001', 'U003', 'cia shop', 'ciashop@gmail.com', '82223456789', 'ciashop', 'ciashop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY011', 'CAT003', 'SCAT001', 'U002', 'puput shop', 'puputshop@gmail.com', '82223456789', 'puputshop', 'puputshop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY010', 'CAT002', 'SCAT001', 'U001', 'bulan shop', 'bulanshop@gmail.com', '82223456789', 'bulanshop', 'bulanshop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY009', 'CAT001', 'SCAT001', 'U003', 'Irvan shop', 'irvanshop@gmail.com', '82223456789', 'irvanshop', 'irvanshop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY008', 'CAT004', 'SCAT001', 'U002', 'Hakim shop', 'hakimshop@gmail.com', '82223456789', 'hakimshop', 'hakimshop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY007', 'CAT003', 'SCAT001', 'U001', 'Adam shop', 'adamshop@gmail.com', '82223456789', 'adamshop', 'adamshop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY006', 'CAT002', 'SCAT001', 'U003', 'Zab shop', 'zabshop@gmail.com', '82223456789', 'zabshop', 'zabshop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY005', 'CAT001', 'SCAT001', 'U002', 'Ocha Shop', 'ochashop@gmail.com', '82223456789', 'ochashop', 'ochashop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY004', 'CAT004', 'SCAT001', 'U001', 'Arsya Shop', 'arsyashop@gmail.com', '82223456789', 'arsyashop', 'arsyashop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY003', 'CAT001', 'SCAT007', 'U003', 'Event Surabaya', 'eventsub@gmail.com', 'eventsurabaya@gmail.com', 'eventsurabaya', NULL, 'Lorem ipsum dolor sit amet.', NULL, NULL, NULL, NULL, NULL),
('LAY001', 'CAT001', 'SCAT001', 'U001', 'PT. Medpart Indonesia', 'medpartindo@gmail.com', '8123123123', 'medpartindo', NULL, 'Lorem ipsum dolor sit amet.', NULL, NULL, NULL, NULL, NULL),
('LAY002', 'CAT001', 'SCAT002', 'U002', 'Magang Update', 'magangupdate@gmail.com', '8123123123', 'magangupdate', NULL, 'Lorem ipsum dolor sit amet.', NULL, NULL, NULL, NULL, NULL),
('LAY014', 'CAT002', 'SCAT001', 'U002', 'randy shop', 'randyshop@gmail.com', '82223456789', 'randyshop', 'randyshop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL),
('LAY015', 'CAT003', 'SCAT001', 'U003', 'abi shop', 'abishop@gmail.com', '82223456789', 'abishop', 'abishop.jpg', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', 'lorem ipsum bla bla bla', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_items`
--

CREATE TABLE `question_items` (
  `id_question` varchar(8) NOT NULL,
  `id_layanan` varchar(8) DEFAULT NULL,
  `question_items` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_items`
--

INSERT INTO `question_items` (`id_question`, `id_layanan`, `question_items`) VALUES
('QST001', 'LAY002', 'Penanggung Jawab'),
('QST002', 'LAY002', 'Upload Proposal Pengajuan');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori_layanan`
--

CREATE TABLE `subkategori_layanan` (
  `id_subkategori` varchar(8) NOT NULL,
  `id_kategori` varchar(8) DEFAULT NULL,
  `nama_subkategori` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subkategori_layanan`
--

INSERT INTO `subkategori_layanan` (`id_subkategori`, `id_kategori`, `nama_subkategori`) VALUES
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

CREATE TABLE `user` (
  `id_user` varchar(8) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `telp_user` varchar(13) DEFAULT NULL,
  `foto_user` varchar(50) DEFAULT NULL,
  `domisili_user` varchar(50) DEFAULT NULL,
  `nik_user` varchar(50) DEFAULT NULL,
  `birthdate_user` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `email_user`, `telp_user`, `foto_user`, `domisili_user`, `nik_user`, `birthdate_user`) VALUES
('U001', 'rangga', 'rangga', 'rangga123', 'rangga@gmail.com', '08123456789', NULL, NULL, NULL, NULL),
('U002', 'arsya', 'arsya', 'arsya123', 'arsya@gmail.com', '08123456789', NULL, NULL, NULL, NULL),
('U003', 'adam', 'adam', 'adam123', 'adam@gmail.com', '08123456789', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_layanan`
--

CREATE TABLE `verifikasi_layanan` (
  `id_admin` varchar(8) NOT NULL,
  `id_layanan` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verifikasi_layanan`
--

INSERT INTO `verifikasi_layanan` (`id_admin`, `id_layanan`) VALUES
('A001', 'LAY001'),
('A001', 'LAY002'),
('A001', 'LAY003');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` varchar(8) NOT NULL,
  `id_layanan` varchar(8) DEFAULT NULL,
  `id_user` varchar(8) DEFAULT NULL,
  `tgl_wishlist` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_layanan`, `id_user`, `tgl_wishlist`) VALUES
('W001', 'LAY001', 'U001', '2022-06-15 04:18:53'),
('W002', 'LAY002', 'U002', '2022-06-15 04:19:38'),
('W003', 'LAY003', 'U003', '2022-06-15 04:19:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bill_order`
--
ALTER TABLE `bill_order`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `FK_MENGHASILKAN2` (`id_order`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_paket`,`id_order`),
  ADD KEY `FK_DETAIL_ORDER2` (`id_order`);

--
-- Indexes for table `form_order`
--
ALTER TABLE `form_order`
  ADD PRIMARY KEY (`id_from`);

--
-- Indexes for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelola_user`
--
ALTER TABLE `kelola_user`
  ADD PRIMARY KEY (`id_admin`,`id_user`),
  ADD KEY `FK_KELOLA_USER2` (`id_user`);

--
-- Indexes for table `order_layanan`
--
ALTER TABLE `order_layanan`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `FK_MELAKUKAN` (`id_user`),
  ADD KEY `FK_MENGHASILKAN` (`id_bill`);

--
-- Indexes for table `paket_layanan`
--
ALTER TABLE `paket_layanan`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `FK_MEMILIKI` (`id_layanan`);

--
-- Indexes for table `produk_layanan`
--
ALTER TABLE `produk_layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `FK_BERISIKAN` (`id_kategori`),
  ADD KEY `FK_MENGUNGGAH` (`id_user`),
  ADD KEY `FK_PUNYA` (`id_subkategori`);

--
-- Indexes for table `question_items`
--
ALTER TABLE `question_items`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `FK_TERDAPAT` (`id_layanan`);

--
-- Indexes for table `subkategori_layanan`
--
ALTER TABLE `subkategori_layanan`
  ADD PRIMARY KEY (`id_subkategori`),
  ADD KEY `FK_TERDIRI` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `verifikasi_layanan`
--
ALTER TABLE `verifikasi_layanan`
  ADD PRIMARY KEY (`id_admin`,`id_layanan`),
  ADD KEY `FK_VERIFIKASI_LAYANAN2` (`id_layanan`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `FK_MEMPUNYAI` (`id_user`),
  ADD KEY `FK_MENGANDUNG` (`id_layanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
