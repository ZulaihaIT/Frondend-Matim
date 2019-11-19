-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2019 at 08:05 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matim`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `tgl_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gambar_seo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `nama_gambar`, `gambar`, `tgl_add`, `gambar_seo`) VALUES
(14, 'Manggarai Timur', 'manggarai-timur.jpg', '2019-11-15 03:23:28', 'manggarai-timur'),
(15, 'KPA', 'kpa.jpg', '2019-11-15 03:21:47', 'kpa'),
(16, 'Pemerintah ', 'pemerintah-.jpg', '2019-11-15 03:22:53', 'pemerintah-');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `kategori_seo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`) VALUES
(9, 'Berita Manggarai Timur', 'berita-manggarai-timur'),
(10, 'Berita Umum', 'berita-umum'),
(11, 'Pemerintahan', 'pemerintahan'),
(12, 'Kesehatan', 'kesehatan'),
(13, 'Ekonomi', 'ekonomi'),
(14, 'Pendidikan', 'pendidikan'),
(15, 'Budaya Dan Wisata', 'budaya-dan-wisata');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id_sub` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_sub` varchar(30) NOT NULL,
  `gambar` longtext NOT NULL,
  `sub_seo` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id_sub`, `id_kategori`, `nama_sub`, `gambar`, `sub_seo`, `keterangan`, `tgl_add`) VALUES
(18, 9, 'PUCUK PUCUK KEBANGKITAN PKK KA', 'pucuk-pucuk-kebangkitan-pkk-kabupaten-manggarai-timur.png', 'pucuk-pucuk-kebangkitan-pkk-ka', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify;\"><b style=\"font-weight: bold;\">ManggaraiTimur, MC-&nbsp;</b>Puncak Hari Kesatuan Gerak (HKG) PKK ke 47, tingkat Kabupaten Manggarai Timur diperingati di desa Nampar Sepang, Kecamatan Sambi Rampas, Kamis (25/7/2019). Kegiatan yang digabungkan dengan Peringatan hari Bulan Bakti Gotong Royong Masyarakat (BBGRM) ke 16, Hari Keluarga Nasional (HARGANAS) ke 26 dan Hari Kelahiran Teknologi Tepat Guna ke-5 ini berlangsung meriah.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tidak ingin melewatkan kesempatan, tim PKK desa Nampar Sepang, memamerkan produk teh daun kelor dalam event pameran yang diikuti berbagai pihak. Teh daun kelor, PKK desa Nampar Sepang merupakan hasil binaan PENA ( Proyek Ekspedisi Nusantara ) angkatan ke empat, UMJ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( Universitas Muhamadiyah Jogyakarta ) Jogyakarta. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Didukung kondisi iklim dan geografis, tanaman Kelor menjadi salah satu tanaman yang tumbuh subur, namun belum dimanfaatkan secara optimal sebagai salah satu potensi ekonomi. Tanaman yang kaya manfaat ini, kini ditangan kaum perempuan desa Nampar Sepang telah diolah menjadi produk teh daun Kelor.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt;\">Keberhasilan ini, diapresiasi Ketua Umum Penggerak PKK Kabupaten Manggarai Timur, Theresia Wisang sebagai langkah cerdas pemberdayaan ekonomi perempuan dan keluarga. “ PKK, sebagai mitra kerja Pemerintah haruslah mampu menjadi pelopor sekaligus pembaharu yang inspiratif “ tegas Theresia Wisang.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt;\">Theresia Wisang juga menjelaskan, Potensi dan semangat gerakan PKK bisa menjadi sebuah gerakan yang berskala besar, ketika memanfaatkan semangat gotong royong. Untuk mencapai target tersebut, Theresia Wisang menekankan pentingnya program PKK untuk bersinergi dengan agenda Pemerintah. Kepada seluruh kader PKK dan kader Dasa Wisma, untuk terus membaktikan diri dengan karya nyata dengan meningkatkan kreativitas dan inovasi dalam pengembangan program PKK sehigga selaras dengan agenda pemerintah.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt;\">Harapan Theresia Wisang yang di desa Nampar Sepang, sesungguhnya menjadi momentum kebangkitan peran PKK di Kabupaten Manggarai Timur. Teh daun kelor desa Nampar Sepang, menjadi simbol semangat inovasi dan inspiratif tumbuhnya pucuk pucuk baru kebangkitan PKK Kabupaten Manggarai Timur.( MANGGARAI TIMUR /MC/ MUHAMAD YAMIN )</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Editor : Patrys Anggo</p>', '2019-11-15 01:14:23'),
(19, 9, 'AGAS ANDREAS TEGASKAN CERDAS, ', 'agas-andreas-tegaskan-cerdas,-sehat-dan-sejahtera-bukan-takdir-melainkan-pilihan-hidup.png', 'agas-andreas-tegaskan-cerdas,-', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; line-height: 21px;\"><b style=\"font-weight: bold;\">Manggarai Timur,MC-</b>&nbsp;Bupati Manggari Timur, Agas Andreas, mengadiri puncak Peringatan hari Bulan Bakti Gotong Royong Masyarakat (BBGRM) ke 16, Hari Kesatuan Gerak (HKG) PKK ke 47, Hari Keluarga Nasional (HARGANAS) ke 26 dan Hari Kelahiran Teknologi Tepat Guna ke-5, Kamis (25/7/2019) di desa Nampar Sepang, Kecamatan Sambi Rampas.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt; line-height: 21px;\">Dihadapan ratusan peserta dan undangan yang hadir, Agas Andreas dalam sambutanya menyampaikan, semangat gotong royong dalam masyarakat, harus terus didorong untuk bertransformasi dalam mendukung pembangunan desa. Oleh karena itu, Agas Andreas mengajak setiap elemen masyarakat desa, terutama Lembaga Kemasyarakatan Desa ( LKD ) untuk menjadi mitra pemerintah desa, sehingga optimalisasi potensi desa mampu berdampak pada kesejahteraan bersama.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt; line-height: 21px;\">“ Gagasan kita kedepannya adalah, membangun kabupaten Manggarai Timur dengan semangat gotong royong, yang melibatkan seluruh masyarakat. Yang dibutuhkan adalah semangat untuk saling memberi. Salah satu contohnya, membangun rumah masyarakat dengan sistem gotong royong. Dampaknya jelas. Tidak akan timbul, kecemburuan sosial, karena setiap rumah yang dibangun berasal dari keterlibatan banyak pihak “ kata Agas Andreas.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt; line-height: 21px;\">Bagi Agas Andreas, gotong royong harus menjadi cara hidup yang mendukung dan memperkuat kehidupan masyarakat, karena gotong royong merupakan pendekatan komunitas yang melibatkan peran berbagai pihak. Oleh karena itu, modal sosial ini akan dioptimalisasi dalam berbagai kerja bersama, untuk meningkatkan kesejahteraan masyarakat Manggarai di Kabupaten Manggarai Timur. “ Cerdas, sehat dan sejahtera adalah pilihan. Bukan Takdir. Oleh karena itu, kita memilih untuk cerdas, sehat dan sejahtera “ tegas Agas Andreas.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt; line-height: 21px;\">Dalam kesempatan ini, Agas Andreas juga mengklarifikasi berbagai penyesatan informasi yang terutama yang berkaitan dengan isu perbatasan. Hingga saat ini, Pemerintah telah melakukan berbagai langkah strategis, sehingga isu perbatasan bisa segera diselesaikan. Untuk itu, ia juga mengharapkan agar masyarakat menggunakan perangkat teknologi informasi dan komunikasi secara bijak.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt; line-height: 21px;\">Dalam kesempatan ini, Agas Andreas juga menyerahkan bantuan berupa 3 unit alat pertanian dan 5 unit rumah layak huni dari Bank NTT senilai 250 juta rupiah. Selain itu 2 unit posyandu juga diresmikan oleh Ketua PKK Kabupaten Manggarai Timur, Thresia Agas.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt; line-height: 21px;\">Keberadaan fasilitas kesehatan ini, diharapkan mampu mendorong pembangunan kesehatan ibu dan anak di desa Nampar Sepang, Kacamatan Sambi Rampas. Keberadaan 2 unit Posyandu tersebut, akan melayani masyarakat yang berada di dusun Sambi Lodong dan Golo Mele.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; text-indent: 36pt; line-height: 21px;\">Sebagai lokasi kegiatan BBGRM ke 16, diharapkan potensi desa Nampar Sepang, lebih dikenal masyarakat luas sebagai desa yang memiliki potensi pada sektor perikanan, pertanian dan pariwisata. &nbsp;Dengan demimkian, BBGRM ini mampu mendorong terintegrasinya, berbagai agenda pembangunan antara Pemerintah Kabupaten dan desa. Serta mendorong keterlibatan pihak swasta untuk berinvestasi. ( MANGGARAITIMUR / MC / MUHAMAD YAMIN )</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify; line-height: 21px;\">Editor : Patrys Anggo</p>', '2019-11-15 01:15:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id_sub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
