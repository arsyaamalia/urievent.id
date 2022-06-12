-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 08:17 AM
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
  `id_admin` varchar(6) NOT NULL,
  `username_admin` varchar(20) DEFAULT NULL,
  `password_admin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
('A001', 'charles', 'charles123');

-- --------------------------------------------------------

--
-- Table structure for table `bill_order`
--

CREATE TABLE `bill_order` (
  `id_bill` varchar(6) NOT NULL,
  `id_order` varchar(6) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_order`
--

INSERT INTO `bill_order` (`id_bill`, `id_order`, `total_harga`) VALUES
('b001', 'o001', 25000),
('b002', 'o001', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_paket` varchar(6) NOT NULL,
  `id_order` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_paket`, `id_order`) VALUES
('p001', 'o001');

-- --------------------------------------------------------

--
-- Table structure for table `form_order`
--

CREATE TABLE `form_order` (
  ` id_questions` varchar(6) DEFAULT NULL,
  `id_order` varchar(6) DEFAULT NULL,
  `answer_items` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_order`
--

INSERT INTO `form_order` (` id_questions`, `id_order`, `answer_items`) VALUES
('q001', 'o001', 'sggadj');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_layanan`
--

CREATE TABLE `kategori_layanan` (
  `id_kategori` varchar(6) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id_kategori`, `nama_kategori`) VALUES
('cat001', 'media partner'),
('cat002', 'vendor'),
('cat003', 'sponsorship'),
('cat004', 'venue');

-- --------------------------------------------------------

--
-- Table structure for table `kelola_user`
--

CREATE TABLE `kelola_user` (
  `id_admin` varchar(6) NOT NULL,
  `id_user` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelola_user`
--

INSERT INTO `kelola_user` (`id_admin`, `id_user`) VALUES
('A001', 'u001');

-- --------------------------------------------------------

--
-- Table structure for table `order_layanan`
--

CREATE TABLE `order_layanan` (
  `id_order` varchar(6) NOT NULL,
  `id_bill` varchar(6) DEFAULT NULL,
  `id_user` varchar(6) DEFAULT NULL,
  `tanggal_sewa` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status_pembayaran` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_layanan`
--

INSERT INTO `order_layanan` (`id_order`, `id_bill`, `id_user`, `tanggal_sewa`, `quantity`, `status_pembayaran`) VALUES
('o001', 'b001', 'u002', '2022-06-08', 1, 'not paid'),
('o002', 'b001', 'u002', '2022-06-08', 2, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `paket_layanan`
--

CREATE TABLE `paket_layanan` (
  `id_paket` varchar(6) NOT NULL,
  `id_layanan` varchar(6) DEFAULT NULL,
  `nama_paket` varchar(50) DEFAULT NULL,
  `dekripsi_paket` varchar(1000) DEFAULT NULL,
  `harga_paket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_layanan`
--

INSERT INTO `paket_layanan` (`id_paket`, `id_layanan`, `nama_paket`, `dekripsi_paket`, `harga_paket`) VALUES
('p001', 'lay001', 'mu medpart golden', '', 25000),
('p002', 'lay001', 'mu medpart silver', '', 20000),
('p003', 'lay010', 'es medpart silver', '', 20000),
('p004', 'lay010', 'es medpart gold', '', 25000),
('p005', 'lay010', 'es medpart platinum', '', 15000),
('p006', 'lay011', 'es1 medpart gold', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 35000),
('p007', 'lay011', 'es1 medpart silver', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 25000),
('p008', 'lay011', 'es1 medpart bronze', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 15000),
('p009', 'lay013', 'ochoch comitee cloth A', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 155000),
('p010', 'lay013', 'ochoch comitee cloth B', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 10000),
('p011', 'lay013', 'ochoch Lanyard A', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 20000),
('p012', 'lay013', 'ochoch Lanyard B', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 10000),
('p013', 'lay003', 'YKP Venue - Half Day', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 200000000),
('p014', 'lay003', 'YKP Venue - Full Day', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste possimus aspernatur tempore dignissimos nisi quos totam distinctio id atque aut voluptatem laboriosam illo, eligendi neque modi quod doloribus rerum iusto.', 300000000),
('p015', 'lay008', 'YKP Meeting Room - Half Day', 'LCD proyektor, screen, lighting, sound system, wifi, note pad, dan alat tulis. Paket yang juga termasuk pre function room usage ini dapat diambil dengan minimal pemesanan 20 pax dan sudah termasuk mineral water, coffee break (1x), makan siang, atau makan malam (buffet/1x).\n\nnb : harga per pax', 250000),
('p016', 'lay008', 'YKP Meeting Room - Full Day', 'LCD proyektor, screen, lighting, sound system, wifi, note pad, dan alat tulis. Paket yang juga termasuk pre function room usage ini ini dapat diambil dengan minimal pemesanan 20 pax dan sudah termasuk mineral water, coffee break (2x), makan siang, atau makan malam (buffet/1x)\r\n\r\nnb : harga per pax', 450000),
('p017', 'lay002', 'Zeger Sponsorship - Large', '- Sponsor yang diberikan merupakan produk sejumlah harga yang tertera', 5000000),
('p018', 'lay002', 'Zeger Sponsorship - Medium', 'Sponsor yang diberikan merupakan produk sejumlah harga yang tertera', 1000000),
('p019', 'lay005', 'Zeger Foundation - Large', 'Sponsor yang diberikan berupa fresh money', 3000000),
('p020', 'lay005', 'Zeger Foundation - Large', 'Sponsor yang diberikan berupa fresh money', 500000),
('p021', 'lay009', 'Peaky Sponsorship Program - Oat Package', 'Sponsor yang diberikan merupakan fresh money', 1000000),
('p022', 'lay009', 'Peaky Sponsorship Program - Banana Package', 'Sponsor yang diberikan merupakan fresh money', 500000),
('p023', 'lay012', 'Peaky Sponsorship Program - Vapor Package', 'Sponsor yang diberikan merupakan fresh money', 500000),
('p024', 'lay012', 'Peaky Sponsorship Program - Pot Package', 'Sponsor yang diberikan merupakan fresh money', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `produk_layanan`
--

CREATE TABLE `produk_layanan` (
  `id_layanan` varchar(6) NOT NULL,
  `id_user` varchar(6) DEFAULT NULL,
  `id_kategori` varchar(6) DEFAULT NULL,
  `nama_layanan` varchar(50) DEFAULT NULL,
  `picture_poster` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `syarat_ketentuan` varchar(200) DEFAULT NULL,
  `additional_items` varchar(200) DEFAULT NULL,
  `nama_instansi` varchar(50) DEFAULT NULL,
  `status_layanan` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_layanan`
--

INSERT INTO `produk_layanan` (`id_layanan`, `id_user`, `id_kategori`, `nama_layanan`, `picture_poster`, `deskripsi`, `syarat_ketentuan`, `additional_items`, `nama_instansi`, `status_layanan`) VALUES
('lay001', 'u001', 'cat001', 'Magang Update Madia Partnership 101', 'mu.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1. Lorem\r\n2. Ipsum\r\n3. Dolor', 'free upload story 1x24jam', 'magang update', 'verified'),
('lay002', 'u003', 'cat003', 'Zeger Sponsorship program', 'mu.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1. Lorem\r\n2. Ipsum\r\n3. Dolor', 'free drinks for guest star max. 10pcs', 'Zeger Indonesia', 'verified'),
('lay003', 'u004', 'cat004', 'Graha YKP Venue', 'ykp.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1. Lorem\r\n2. Ipsum\r\n3. Dolor', 'free meeting room for 2x8 hours one during the wee', 'Graha YKP Surabaya', 'verified'),
('lay005', 'u003', 'cat003', 'Zeger Event Fondation', 'zeger1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1. Lorem labore et dolore magna aliqua\r\n2. Ipsum labore et \r\n3. Dolor ipsum dolor sit amet', '', 'Zeger Indonesia', 'verified'),
('lay006', 'u001', 'cat001', 'Magang Update Media Partnership June', 'mu2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1. Lorem\r\n2. adipiscing elit,\r\n3. Dolor', 'free upload story 2x24jam', 'Magang Update', 'verified'),
('lay007', 'u005', 'cat002', 'Ochoch Lanyard', 'ochoch1.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolor nisi consequatur molestias officiis dolorum assumenda voluptate modi, provident ducimus a quas nobis vitae, at obcaecati soluta ', '1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. \r\n2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. ', 'free 10pcs lanyard accessories ', 'Ochoch clothing', 'verifed'),
('lay008', 'u004', 'cat004', 'Graha YKP Meeting Room', 'ykp1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1. Lorem\r\n2. Ipsum\r\n3. Dolor', 'free refill drinks for attendees', 'Graha YKP Surabaya', 'verified'),
('lay009', 'u006', 'cat003', 'Peaky Sponsorship Program ', 'pvs1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1. Lorem dolore magna aliqua.\r\n2. Ipsum labore \r\n3. Dolor', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Peaky Vape Store Surabaya', 'verified'),
('lay010', 'u007', 'cat001', 'Event Surabaya Media Partnership', 'es.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolor nisi consequatur molestias officiis dolorum assumenda voluptate modi, provident ducimus a quas nobis vitae, at obcaecati soluta excepturi laudantium. \r\n', '1. Dolores est debitis, in dignissimos magnam itaque at.\r\n2. omnis suscipit eius accusantium illum quas exercitationem deleniti.\r\n3. voluptatibus blanditiis provident assumenda facilis.', 'upload story add golden hour (09.00-18.00 WIB)', 'Event Surabaya', 'verifed'),
('lay011', 'u007', 'cat001', 'Event Surabaya Media Partnerprogram', 'es1.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolor nisi consequatur molestias officiis dolorum assumenda voluptate modi, provident ducimus. \r\n', '1. Dolores est debitis, in dignissimos magnam itaque at.\r\n2. omnis suscipit eius accusantium illum quas exercitationem deleniti.\r\n3. voluptatibus blanditiis provident assumenda facilis.', 'upload story add golden hour (09.00-18.00 WIB)', 'Event Surabaya', 'verifed'),
('lay012', 'u006', 'cat003', 'Peaky Vape Sponship ', 'pvs.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1. Lorem dolore magna aliqua.\r\n2. Ipsum labore \r\n3. Dolor', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Peaky Vape Store Surabaya', 'verified'),
('lay013', 'u005', 'cat002', 'Ochoch Committee Shirt', 'ochoch.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolor nisi consequatur molestias officiis dolorum assumenda voluptate modi, provident ducimus a quas nobis vitae, at obcaecati soluta ', '1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. \r\n2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. ', 'free 10pcs lanyard accessories ', 'Ochoch clothing', 'verifed');

-- --------------------------------------------------------

--
-- Table structure for table `question_items`
--

CREATE TABLE `question_items` (
  `id_question` varchar(6) NOT NULL,
  `id_layanan` varchar(6) DEFAULT NULL,
  `question_items` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_items`
--

INSERT INTO `question_items` (`id_question`, `id_layanan`, `question_items`) VALUES
('q001', 'lay001', 'apakah anda sudah mengupload twibbon dari kami?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(6) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username_user` varchar(20) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `telp_user` varchar(13) DEFAULT NULL,
  `foto_user` varchar(50) DEFAULT NULL,
  `domisili_user` varchar(50) DEFAULT NULL,
  `nik_user` varchar(50) DEFAULT NULL,
  `birthdate_user` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `email_user`, `password_user`, `telp_user`, `foto_user`, `domisili_user`, `nik_user`, `birthdate_user`) VALUES
('u001', 'arsya', 'arysaamalia', 'arsya@gmail.com', '1234', '08123456789', 'arsya.jpg', 'sby', '20082010104', '2002-06-02'),
('u002', 'zabina anastasya', 'zzabina', 'zabina@gmail.com', '12345', '085655075925', 'zab.jpg', 'surabaya', '20082010104', '2002-12-30'),
('u003', 'Randy Dwi ', 'randydwi', 'randydwi@gmail.com', '123456', NULL, 'randy.png', 'Surabaya', '20082010100', NULL),
('u004', 'Alfian Shendy', 'shendysen', 'shendy@gmail.com', '1234567', NULL, 'shendy.png', 'Surabaya', '20082010101', NULL),
('u005', 'Ocha Tania', 'ochat', 'ochat2gmail.com', '1234568', NULL, 'ocha.png', 'Surabaya', '20082010081', NULL),
('u006', 'Adam Rachman', 'adamdam', 'adam@gmail.com', '12345689', '0857283193826', 'adam.png', 'Sidoarjo', NULL, NULL),
('u007', 'Abiyoga Dwi', 'abibi', 'abi@gmail.com', '123456890', '0857283193009', 'abi.png', 'Sidoarjo', '200820001', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_layanan`
--

CREATE TABLE `verifikasi_layanan` (
  `id_admin` varchar(6) NOT NULL,
  `id_layanan` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifikasi_layanan`
--

INSERT INTO `verifikasi_layanan` (`id_admin`, `id_layanan`) VALUES
('A001', 'lay001');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` varchar(6) NOT NULL,
  `id_layanan` varchar(6) DEFAULT NULL,
  `id_user` varchar(6) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_layanan`, `id_user`, `created_at`) VALUES
('w001', 'lay001', 'u001', '2022-06-08 11:00:50');

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
  ADD KEY `FK_BERISI` (` id_questions`),
  ADD KEY `FK_MENGISI` (`id_order`);

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
  ADD KEY `FK_MENGUNGGAH` (`id_user`);

--
-- Indexes for table `question_items`
--
ALTER TABLE `question_items`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `FK_TERDAPAT` (`id_layanan`);

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_order`
--
ALTER TABLE `bill_order`
  ADD CONSTRAINT `FK_MENGHASILKAN2` FOREIGN KEY (`ID_ORDER`) REFERENCES `order_layanan` (`ID_ORDER`);

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `FK_DETAIL_ORDER` FOREIGN KEY (`ID_PAKET`) REFERENCES `paket_layanan` (`ID_PAKET`),
  ADD CONSTRAINT `FK_DETAIL_ORDER2` FOREIGN KEY (`ID_ORDER`) REFERENCES `order_layanan` (`ID_ORDER`);

--
-- Constraints for table `form_order`
--
ALTER TABLE `form_order`
  ADD CONSTRAINT `FK_BERISI` FOREIGN KEY (` id_questions`) REFERENCES `question_items` (`ID_QUESTION`),
  ADD CONSTRAINT `FK_MENGISI` FOREIGN KEY (`ID_ORDER`) REFERENCES `order_layanan` (`ID_ORDER`);

--
-- Constraints for table `kelola_user`
--
ALTER TABLE `kelola_user`
  ADD CONSTRAINT `FK_KELOLA_USER` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_KELOLA_USER2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `order_layanan`
--
ALTER TABLE `order_layanan`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_MENGHASILKAN` FOREIGN KEY (`id_bill`) REFERENCES `bill_order` (`ID_BILL`);

--
-- Constraints for table `paket_layanan`
--
ALTER TABLE `paket_layanan`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_LAYANAN`) REFERENCES `produk_layanan` (`ID_LAYANAN`);

--
-- Constraints for table `produk_layanan`
--
ALTER TABLE `produk_layanan`
  ADD CONSTRAINT `FK_BERISIKAN` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori_layanan` (`ID_KATEGORI`),
  ADD CONSTRAINT `FK_MENGUNGGAH` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `question_items`
--
ALTER TABLE `question_items`
  ADD CONSTRAINT `FK_TERDAPAT` FOREIGN KEY (`ID_LAYANAN`) REFERENCES `produk_layanan` (`ID_LAYANAN`);

--
-- Constraints for table `verifikasi_layanan`
--
ALTER TABLE `verifikasi_layanan`
  ADD CONSTRAINT `FK_VERIFIKASI_LAYANAN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_VERIFIKASI_LAYANAN2` FOREIGN KEY (`ID_LAYANAN`) REFERENCES `produk_layanan` (`ID_LAYANAN`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_MENGANDUNG` FOREIGN KEY (`ID_LAYANAN`) REFERENCES `produk_layanan` (`ID_LAYANAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
