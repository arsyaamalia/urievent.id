-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 04:25 PM
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
('P001', 'LAY002', 'Bronze', 'lorem ipsum dolor', 25000),
('P002', 'LAY002', 'Silver', 'lorem ipsum dolor', 50000),
('P003', 'LAY002', 'Gold', 'lorem ipsum dolor', 75000),
('P004', 'LAY002', 'Diamond', 'lorem ipsum dolor', 100000),
('P005', 'LAY001', 'Bronze', 'lorem ipsum dolor', 25000),
('P006', 'LAY001', 'Silver', 'lorem ipsum dolor', 50000),
('P007', 'LAY001', 'Gold', 'lorem ipsum dolor', 75000),
('P008', 'LAY001', 'Diamond', 'lorem ipsum dolor', 10000),
('P009', 'LAY003', 'Gold', 'lorem ipsum dolor', 75000),
('P010', 'LAY003', 'Diamond', 'lorem ipsum dolor', 10000),
('P011', 'LAY004', 'Gold', 'lorem ipsum dolor', 25000),
('P012', 'LAY004', 'Diamond', 'lorem ipsum dolor', 75000),
('P013', 'LAY005', 'Silver', 'lorem ipsum dolor', 50000),
('P014', 'LAY005', 'Gold', 'lorem ipsum dolor', 75000),
('P018', 'LAY007', 'Bronze', 'lorem ipsum dolor', 30000),
('P019', 'LAY007', 'Silver', 'lorem ipsum dolor', 50000),
('P020', 'LAY007', 'Gold', 'lorem ipsum dolor', 75000);

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
  `deskripsi` varchar(1000) DEFAULT NULL,
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
('LAY022', 'CAT001', 'SCAT008', 'u004', 'irvan medpart', 'irvanshop@gmail.com', '82223456796', 'irvanshop', 'irvanmedpart.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'Upload poster event yang sudah berlogo company kami,Isi caption atau tambahan lainnya untuk keperluan upload,Kirim bukti transfer', 'Join WhatsApp group,Pilih jadwal upload poster saat mengisi formulir,Wait your poster to be uploaded', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'not verifed'),
('LAY023', 'CAT003', 'SCAT009', 'u005', 'bulan vendor', 'bulanshop@gmail.com', '82223456797', 'bulanshop', 'bulanvendor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed'),
('LAY018', 'CAT003', 'SCAT004', 'u002', 'adam vendor2', 'adamshop@gmail.com', '82223456792', 'adamrchmn', 'adamvendor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed'),
('LAY019', 'CAT002', 'SCAT005', 'u001', 'zebi sponsor', 'zabshop@gmail.com', '82223456793', 'zabinaan', 'zebisponsor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'not verifed'),
('LAY020', 'CAT004', 'SCAT006', 'u002', 'adam venue', 'adamshop@gmail.com', '82223456794', 'edishop', 'adamvenue.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed'),
('LAY021', 'CAT001', 'SCAT007', 'u003', 'hakim medpart', 'hakimshop@gmail.com', '82223456795', 'fafashop', 'hakimmedpart.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'Upload poster event yang sudah berlogo company kami,Isi caption atau tambahan lainnya untuk keperluan upload,Kirim bukti transfer', 'Join WhatsApp group,Pilih jadwal upload poster saat mengisi formulir,Wait your poster to be uploaded', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'not verifed'),
('LAY017', 'CAT004', 'SCAT003', 'u017', 'bisma venue', 'bismahop@gmail.com', '82223456791', 'bisma shop', 'bismavenue.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed'),
('LAY016', 'CAT004', 'SCAT002', 'u016', 'anang venue', 'anang@gmail.com', '82223456790', 'anang shop', 'anangvenue.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed'),
('LAY013', 'CAT001', 'SCAT001', 'u013', 'della medpart', 'dellashop@gmail.com', '82223456789', 'dellashop', 'dellamedpart.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'Upload poster event yang sudah berlogo company kami,Isi caption atau tambahan lainnya untuk keperluan upload,Kirim bukti transfer', 'Join WhatsApp group,Pilih jadwal upload poster saat mengisi formulir,Wait your poster to be uploaded', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'verifed'),
('LAY014', 'CAT002', 'SCAT001', 'u014', 'randy sponsor', 'randyshop@gmail.com', '82223456789', 'randyshop', 'randysponsor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed'),
('LAY015', 'CAT003', 'SCAT001', 'u015', 'abi vendor', 'abishop@gmail.com', '82223456789', 'abishop', 'abivendor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed'),
('LAY006', 'CAT002', 'SCAT001', 'u001', 'Zab sponsor', 'zabshop@gmail.com', '82223456789', 'zabinaan', 'Zabsponsor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'verifed'),
('LAY007', 'CAT003', 'SCAT001', 'u002', 'Adam vendor', 'adamshop@gmail.com', '82223456789', 'adamrchmn', 'Adamvendor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'verifed'),
('LAY008', 'CAT004', 'SCAT001', 'u003', 'Hakim venue', 'hakimshop@gmail.com', '82223456789', 'hakimshop', 'Hakimvenue.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'verifed'),
('LAY009', 'CAT001', 'SCAT001', 'u004', 'Irvan medpart', 'irvanshop@gmail.com', '82223456789', 'irvanshop', 'Irvanmedpart.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'Upload poster event yang sudah berlogo company kami,Isi caption atau tambahan lainnya untuk keperluan upload,Kirim bukti transfer', 'Join WhatsApp group,Pilih jadwal upload poster saat mengisi formulir,Wait your poster to be uploaded', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'verifed'),
('LAY010', 'CAT002', 'SCAT001', 'u005', 'bulan medpart', 'bulanshop@gmail.com', '82223456789', 'bulanshop', 'bulanmedpart.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'verifed'),
('LAY011', 'CAT003', 'SCAT001', 'u011', 'puput vendor', 'puputshop@gmail.com', '82223456789', 'puputshop', 'puputvendor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'verifed'),
('LAY012', 'CAT004', 'SCAT001', 'u012', 'cia venue', 'ciashop@gmail.com', '82223456789', 'ciashop', 'ciavenue.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'verifed'),
('LAY005', 'CAT002', 'SCAT001', 'u006', 'Ocha sponsor', 'ochashop@gmail.com', '82223456789', 'ochashop', 'Ochasponsor.jpg', 'This is deskripsi.Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, quisquam! Voluptate, temporibus quidem! Pariatur rem qui quo minima debitis. Ab suscipit exercitationem iusto, facilis', 'Upload poster event yang sudah berlogo company kami,Isi caption atau tambahan lainnya untuk keperluan upload,Kirim bukti transfer', 'Join WhatsApp group,Pilih jadwal upload poster saat mengisi formulir,Wait your poster to be uploaded', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'verifed'),
('LAY001', 'CAT001', 'SCAT001', 'u010', 'PT. medpartID', 'medpartpartindo@gmail.com', '81231231232', 'medpartpartindo', 'PTmedpartindo.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'Upload poster event yang sudah berlogo company kami,Isi caption atau tambahan lainnya untuk keperluan upload,Kirim bukti transfer', 'Join WhatsApp group,Pilih jadwal upload poster saat mengisi formulir,Wait your poster to be uploaded', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'verifed'),
('LAY002', 'CAT001', 'SCAT002', 'u009', 'MU  medpart', 'magangupdate@gmail.com', '81231231232', 'magangupdate', 'MUmedpart.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'Upload poster event yang sudah berlogo company kami,Isi caption atau tambahan lainnya untuk keperluan upload,Kirim bukti transfer', 'Join WhatsApp group,Pilih jadwal upload poster saat mengisi formulir,Wait your poster to be uploaded', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'verifed'),
('LAY003', 'CAT001', 'SCAT007', 'u008', 'Event Surabaya', 'eventsub@gmail.com', '82223456789', 'eventsurabaya', 'EventSurabayamedpart.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'Upload poster event yang sudah berlogo company kami,Isi caption atau tambahan lainnya untuk keperluan upload,Kirim bukti transfer', 'Join WhatsApp group,Pilih jadwal upload poster saat mengisi formulir,Wait your poster to be uploaded', 'This is other Lorem ipsum dolor sit amet consectet', '32.000++ active accounts,Have been trusted media partner for 5 years', 'verifed'),
('LAY004', 'CAT004', 'SCAT001', 'u007', 'Arsya venue', 'arsyashop@gmail.com', '82223456789', 'arsyashop', 'Arsyavenue.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'verifed'),
('LAY024', 'CAT004', 'SCAT010', 'u006', 'ocha venue', 'ochashop@gmail.com', '82223456798', 'ochashop', 'ochavenue.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed'),
('LAY025', 'CAT002', 'SCAT011', 'u007', 'arsya sponsor', 'jenishop@gmail.com', '82223456799', 'jenishop', 'arsyasponsor.jpg', 'This is deskripsi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sint minima fugiat odio animi ab beatae nesciunt soluta doloremque praesentium.', 'step, before, lorem ipum, lorem dolor, lorem', 'lorem ipsum bla bla blastep, after, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit', 'This is other Lorem ipsum dolor sit amet consectet', 'this value other Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'not verifed');

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
('u002', 'Adam ', 'adam', '123', 'adam@gmail.com', '8123456789', 'Adam.jpg', 'Sidoarjo', '20082010101', NULL),
('u001', 'Zab ', 'zab', '123', 'zab@gmail.com', '8123456789', 'Zab.jpg', 'Surabaya', '20082010100', NULL),
('u003', 'Hakim ', 'hakim', '123', 'hakim@gmail.com', '8123456789', 'Hakim.jpg', 'Malang', '20082010102', NULL),
('u004', 'Irvan ', 'irvan', '123', 'irvan@gmail.com', '8123456789', 'Irvan.jpg', 'Surabaya', '20082010103', NULL),
('u005', 'bulan ', 'bulan', '123', 'bulan@gmail.com', '8123456789', 'bulan.jpg', 'Sidoarjo', '20082010104', NULL),
('u006', 'Ocha ', 'ocha', '123', 'ocha@gmail.com', '8123456789', 'Ocha.jpg', 'Malang', '20082010105', NULL),
('u007', 'Arsya ', 'arsya', '123', 'arsya@gmail.com', '8123456789', 'Arsya.jpg', 'Surabaya', '20082010106', NULL),
('u008', 'Event Surabaya  ', 'eventsurabaya', '123', 'eventsby@gmail.com', '8123456789', 'EventSurabaya.jpg', 'Sidoarjo', '20082010107', NULL),
('u009', 'Magang Update', 'magangupdate', '123', 'magangupdate@gmail.com', '8123456789', 'MU.jpg', 'Surabaya', '20082010108', NULL),
('u010', 'PT. medpart Indonesia', 'ptmedpartindo', '123', 'ptpartindo@gmail.com', '8123456789', 'ptmedpartindo.jpg', 'Sidoarjo', '20082010109', NULL),
('u011', 'puput ', 'puput', '123', 'puput@gmail.com', '8123456789', 'puput.jpg', 'Malang', '20082010110', NULL),
('u012', 'cia ', 'cia', '123', 'cia@gmail.com', '8123456789', 'cia.jpg', 'Surabaya', '20082010111', NULL),
('u013', 'della ', 'della', '123', 'della@gmail.com', '8123456789', 'della.jpg', 'Sidoarjo', '20082010112', NULL),
('u014', 'randy ', 'randy', '123', 'randy@gmail.com', '8123456789', 'randy.jpg', 'Malang', '20082010113', NULL),
('u015', 'abi ', 'abi', '123', 'abia@gmail.com', '8123456789', 'abi.jpg', 'Surabaya', '20082010114', NULL),
('u016', 'anang ', 'anang', '123', 'anang@gmail.com', '8123456789', 'anang.jpg', 'Sidoarjo', '20082010115', NULL),
('u017', 'bisma ', 'bima', '123', 'rangga@gmail.com', '8123456789', 'bima.jpg', 'Surabaya', '20082010116', NULL);

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
