-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 01:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_mk`
--

CREATE TABLE `daftar_mk` (
  `id_mk` int(11) NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_mk`
--

INSERT INTO `daftar_mk` (`id_mk`, `nama_mk`, `nama`) VALUES
(1, 'Konsep Pemrograman', 'konsep_pemrograman'),
(2, 'Sistem Digital', 'sistem_digital'),
(3, 'Kalkulus I', 'kalkulus_I'),
(4, 'Kalkulus II', 'kalkulus_II'),
(5, 'Metematika Diskrit I', 'metematika_diskrit_I'),
(6, 'Struktur Data & Algoritma I', 'struktur_data_algoritma_I'),
(7, 'Probabilitas', 'probabilitas'),
(8, 'Matematika Diskrit II', 'matematika_diskrit_II'),
(9, 'Struktur Data & Algoritma II', 'struktur_data_algoritma_II'),
(10, 'Pemrograman Berorientasi Objek', 'pemrograman_berorientasi_objek'),
(11, 'Teori Bahasa & Automata', 'teori_bahasa_automata'),
(12, 'Teknik Multimedia', 'teknik_multimedia'),
(13, 'Komputer Grafik', 'komputer_grafik'),
(14, 'Pengolahan Citra Digital', 'pengolahan_citra_digital'),
(15, 'Basis Data', 'basis_data'),
(16, 'Metode Numerik', 'metode_numerik'),
(17, 'Desain & Analisis Algoritma', 'desain_analisis_algoritma'),
(18, 'Jaringan Syaraf Tiruan', 'jaringan_syaraf_tiruan'),
(19, 'Basis Data Lanjut', 'basis_data_lanjut'),
(20, 'Semantic Web', 'semantic_web'),
(21, 'Data Mining', 'data_mining'),
(22, 'Organisasi Sistem Komputer', 'organisasi_sistem_komputer'),
(23, 'Sistem Operasi', 'sistem_operasi'),
(24, 'Jaringan Komputer', 'jaringan_komputer'),
(25, 'Rekayasa Perangkat Lunak', 'rekayasa_perangkat_lunak'),
(26, 'Analisis & Perancangan Sistem', 'analisis_perancangan_sistem'),
(27, 'Manajemen Proyek', 'manajemen_proyek'),
(28, 'Artificial Intelligence', 'artificial_intelligence'),
(29, 'Manajemen Jaringan', 'manajemen_jaringan'),
(30, 'Sistem Terdistribusi', 'sistem_terdistribusi'),
(31, 'Open Source', 'open_source'),
(32, 'Sistem Pakar', 'sistem_pakar'),
(33, 'Sistem Pendukung Keputusan', 'sistem_pendukung_keputusan'),
(34, 'Wireless & Mobile Computing', 'wireless_mobile_computing'),
(35, 'Pemrograman Web', 'pemrograman_web'),
(36, 'Pengujian Perangkat Lunak', 'pengujian_perangkat_lunak'),
(37, 'Logika Samar', 'logika_samar'),
(38, 'Mobile App Development', 'mobile_app_development'),
(39, 'Manajemen Sistem Informasi', 'manajemen_sistem_informasi'),
(40, 'Jaminan Mutu Perangkat Lunak', 'jaminan_mutu_perangkat_lunak'),
(41, 'Proyek Perangkat Lunak', 'proyek_perangkat_lunak'),
(42, 'Natural Language Processing', 'natural_language_processing'),
(43, 'Aljabar Linier', 'aljabar_linier'),
(44, 'Kriptografi & Keamanan Informasi', 'kriptografi_keamanan_informasi'),
(45, 'Teknik Kompilasi', 'teknik_kompilasi');

-- --------------------------------------------------------

--
-- Table structure for table `data_mining`
--

CREATE TABLE `data_mining` (
  `id_data_mining` int(11) NOT NULL,
  `id_nama` int(11) NOT NULL,
  `nilai_mk` float NOT NULL,
  `nilai_dosen` float NOT NULL,
  `nilai_ditekuni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mining`
--

INSERT INTO `data_mining` (`id_data_mining`, `id_nama`, `nilai_mk`, `nilai_dosen`, `nilai_ditekuni`) VALUES
(1, 22, 4.16667, 8, 2),
(2, 24, 4.15167, 5.1, 0.1),
(3, 25, 0, 0.1, 0.1),
(4, 26, 0, 0.1, 0.1),
(5, 27, 0, 0.1, 0.1),
(6, 28, 0, 8.1, 2.1),
(7, 29, 3.54333, 5.1, 0.1),
(8, 30, 3.795, 6.1, 0.1),
(9, 31, 3.03333, 3.1, 3.1),
(10, 32, 2.6, 0.1, 0.1),
(11, 33, 3.9, 6.1, 0.1),
(12, 34, 3.55, 7.1, 3.1),
(13, 35, 3, 2.1, 0.1),
(14, 36, 2.6, 0.1, 0.1),
(15, 37, 2.6, 0.1, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`) VALUES
(1, 'Drs. Bambang H, M.App.Sc, PhD'),
(2, 'Dr. Wiranto, M.Kom, MCs'),
(3, 'Drs. YS. Palgunadi, M.Sc'),
(4, 'Umi Salamah, M.Kom'),
(5, 'Dr.tech. Dewi Wisnu Wardani, S.Si , MS'),
(6, 'Abdul Aziz, SKom , MCs'),
(7, 'Ristu Saptono, SSi, MT'),
(8, 'Wisnu Widiarto, SSi, MT'),
(9, 'Wiharto, ST, M.Kom'),
(10, 'Rini Anggrainingsih, ST, MT'),
(11, 'Esti Suryani, SSi, M.Kom'),
(12, 'Sari Widya Sihwi, S.Kom, MTI'),
(13, 'Afrizal Doewes, M.Sc'),
(14, 'Winarno, SSi, M.Eng'),
(15, 'Haryono Setiadi, ST, M.Eng'),
(16, 'Heri Prasetyo, S.Kom., M.Sc.Eng., Ph.D.'),
(17, 'Denis Eka Cahyani, S.Kom., M.Kom'),
(18, 'Ardhi Wijayanto, S.Kom., M.Cs.');

-- --------------------------------------------------------

--
-- Table structure for table `grup_tema`
--

CREATE TABLE `grup_tema` (
  `id_grup_tema` int(11) NOT NULL,
  `nama_grup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup_tema`
--

INSERT INTO `grup_tema` (`id_grup_tema`, `nama_grup`) VALUES
(1, 'Image Processing'),
(2, 'Data Mining'),
(3, 'IOT'),
(4, 'Jaringan'),
(5, 'RPL'),
(6, 'Natural Processing Langguage'),
(7, 'kriptografi');

-- --------------------------------------------------------

--
-- Table structure for table `image_processing`
--

CREATE TABLE `image_processing` (
  `id_image_processing` int(11) NOT NULL,
  `id_nama` int(11) NOT NULL,
  `nilai_mk` float NOT NULL,
  `nilai_dosen` float NOT NULL,
  `nilai_ditekuni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_processing`
--

INSERT INTO `image_processing` (`id_image_processing`, `id_nama`, `nilai_mk`, `nilai_dosen`, `nilai_ditekuni`) VALUES
(1, 22, 4.76786, 2, 3),
(2, 24, 4.54286, 2.1, 0.1),
(3, 25, 0, 0.1, 0.1),
(4, 26, 0, 0.1, 0.1),
(5, 27, 0, 0.1, 0.1),
(6, 28, 0, 2.1, 3.1),
(7, 29, 5.01964, 3.1, 3.1),
(8, 30, 5.18393, 0.1, 0.1),
(9, 31, 5.125, 9.1, 0.1),
(10, 32, 2.71429, 0.1, 0.1),
(11, 33, 4.07143, 0.1, 0.1),
(12, 34, 3.21429, 0.1, 2.1),
(13, 35, 5.02143, 0.1, 0.1),
(14, 36, 2.71429, 0.1, 0.1),
(15, 37, 2.71429, 0.1, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `iot`
--

CREATE TABLE `iot` (
  `id_iot` int(11) NOT NULL,
  `id_nama` int(11) NOT NULL,
  `nilai_mk` float NOT NULL,
  `nilai_dosen` float NOT NULL,
  `nilai_ditekuni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot`
--

INSERT INTO `iot` (`id_iot`, `id_nama`, `nilai_mk`, `nilai_dosen`, `nilai_ditekuni`) VALUES
(1, 22, 3.50694, 0, 0),
(2, 24, 3.61389, 3.1, 0.1),
(3, 25, 0, 0.1, 0.1),
(4, 26, 0, 0.1, 0.1),
(5, 27, 0, 0.1, 0.1),
(6, 28, 0, 0.1, 0.1),
(7, 29, 3.94444, 0.1, 3.1),
(8, 30, 3.9875, 3.1, 0.1),
(9, 31, 3.65278, 0.1, 3.1),
(10, 32, 2.22222, 0.1, 0.1),
(11, 33, 3.33333, 0.1, 2.1),
(12, 34, 2.88889, 0.1, 0.1),
(13, 35, 3.96111, 0.1, 0.1),
(14, 36, 2.22222, 0.1, 0.1),
(15, 37, 2.22222, 0.1, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `jaringan`
--

CREATE TABLE `jaringan` (
  `id_jaringan` int(11) NOT NULL,
  `id_nama` int(11) NOT NULL,
  `nilai_mk` float NOT NULL,
  `nilai_dosen` float NOT NULL,
  `nilai_ditekuni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan`
--

INSERT INTO `jaringan` (`id_jaringan`, `id_nama`, `nilai_mk`, `nilai_dosen`, `nilai_ditekuni`) VALUES
(1, 22, 4.28571, 0, 0),
(2, 24, 4.05714, 0.1, 3.1),
(3, 25, 0, 0.1, 0.1),
(4, 26, 0, 0.1, 0.1),
(5, 27, 0, 0.1, 0.1),
(6, 28, 0, 0.1, 0.1),
(7, 29, 5.75, 3.1, 0.1),
(8, 30, 6.02143, 0.1, 0.1),
(9, 31, 5.85714, 0.1, 0.1),
(10, 32, 3.14286, 0.1, 0.1),
(11, 33, 4.71429, 3.1, 0.1),
(12, 34, 4.25, 2.1, 0.1),
(13, 35, 5.98571, 0.1, 0.1),
(14, 36, 3.14286, 0.1, 0.1),
(15, 37, 3.14286, 0.1, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `kriptografi`
--

CREATE TABLE `kriptografi` (
  `id_kriptografi` int(11) NOT NULL,
  `id_nama` int(11) NOT NULL,
  `nilai_mk` float NOT NULL,
  `nilai_dosen` float NOT NULL,
  `nilai_ditekuni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriptografi`
--

INSERT INTO `kriptografi` (`id_kriptografi`, `id_nama`, `nilai_mk`, `nilai_dosen`, `nilai_ditekuni`) VALUES
(1, 22, 5.13333, 9, 0),
(2, 24, 4.75667, 2.1, 0.1),
(3, 25, 0, 0.1, 0.1),
(4, 26, 0, 0.1, 0.1),
(5, 27, 0, 0.1, 0.1),
(6, 28, 0, 9.1, 0.1),
(7, 29, 5.41833, 3.1, 0.1),
(8, 30, 5.46, 5.1, 0.1),
(9, 31, 5.38333, 3.1, 0.1),
(10, 32, 2.93333, 0.1, 0.1),
(11, 33, 4.56667, 3.1, 0.1),
(12, 34, 3.31667, 0.1, 0.1),
(13, 35, 5.44333, 2.1, 0.1),
(14, 36, 2.93333, 0.1, 0.1),
(15, 37, 2.93333, 0.1, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `nama`
--

CREATE TABLE `nama` (
  `id_nama` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama`
--

INSERT INTO `nama` (`id_nama`, `nama`) VALUES
(22, 'abrar fitrawan'),
(23, ''),
(24, 'alex'),
(25, ''),
(26, ''),
(27, ''),
(28, 'abrar'),
(29, 'ben'),
(30, 'what'),
(31, 'www'),
(32, ''),
(33, 'juda'),
(34, 'Indira Sekar'),
(35, 'abrar'),
(36, ''),
(37, '');

-- --------------------------------------------------------

--
-- Table structure for table `nlp`
--

CREATE TABLE `nlp` (
  `id_nlp` int(11) NOT NULL,
  `id_nama` int(11) NOT NULL,
  `nilai_mk` float NOT NULL,
  `nilai_dosen` float NOT NULL,
  `nilai_ditekuni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nlp`
--

INSERT INTO `nlp` (`id_nlp`, `id_nama`, `nilai_mk`, `nilai_dosen`, `nilai_ditekuni`) VALUES
(1, 22, 5.69318, 3, 0),
(2, 24, 5.42273, 2.1, 0.1),
(3, 25, 0, 0.1, 0.1),
(4, 26, 0, 0.1, 0.1),
(5, 27, 0, 0.1, 0.1),
(6, 28, 0, 3.1, 0.1),
(7, 29, 6.10909, 1.1, 0.1),
(8, 30, 5.42727, 2.1, 3.1),
(9, 31, 6.20455, 9.1, 0.1),
(10, 32, 3.27273, 0.1, 0.1),
(11, 33, 5, 0.1, 0.1),
(12, 34, 4, 0.1, 0.1),
(13, 35, 6.02045, 0.1, 0.1),
(14, 36, 3.27273, 0.1, 0.1),
(15, 37, 3.27273, 0.1, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `rpl`
--

CREATE TABLE `rpl` (
  `id_rpl` int(11) NOT NULL,
  `id_nama` int(11) NOT NULL,
  `nilai_mk` float NOT NULL,
  `nilai_dosen` float NOT NULL,
  `nilai_ditekuni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpl`
--

INSERT INTO `rpl` (`id_rpl`, `id_nama`, `nilai_mk`, `nilai_dosen`, `nilai_ditekuni`) VALUES
(1, 22, 4.40625, 0, 0),
(2, 24, 3.905, 6.1, 3.1),
(3, 25, 0, 0.1, 0.1),
(4, 26, 0, 0.1, 0.1),
(5, 27, 0, 0.1, 0.1),
(6, 28, 0, 0.1, 0.1),
(7, 29, 4.56375, 3.1, 0.1),
(8, 30, 4.7675, 6.1, 3.1),
(9, 31, 4.45, 0.1, 0.1),
(10, 32, 2.55, 0.1, 0.1),
(11, 33, 4, 6.1, 0.1),
(12, 34, 3.075, 9.1, 0.1),
(13, 35, 4.455, 0.1, 0.1),
(14, 36, 2.55, 0.1, 0.1),
(15, 37, 2.55, 0.1, 0.1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_mk`
--
ALTER TABLE `daftar_mk`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `data_mining`
--
ALTER TABLE `data_mining`
  ADD PRIMARY KEY (`id_data_mining`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `grup_tema`
--
ALTER TABLE `grup_tema`
  ADD PRIMARY KEY (`id_grup_tema`);

--
-- Indexes for table `image_processing`
--
ALTER TABLE `image_processing`
  ADD PRIMARY KEY (`id_image_processing`);

--
-- Indexes for table `iot`
--
ALTER TABLE `iot`
  ADD PRIMARY KEY (`id_iot`);

--
-- Indexes for table `jaringan`
--
ALTER TABLE `jaringan`
  ADD PRIMARY KEY (`id_jaringan`);

--
-- Indexes for table `kriptografi`
--
ALTER TABLE `kriptografi`
  ADD PRIMARY KEY (`id_kriptografi`);

--
-- Indexes for table `nama`
--
ALTER TABLE `nama`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `nlp`
--
ALTER TABLE `nlp`
  ADD PRIMARY KEY (`id_nlp`);

--
-- Indexes for table `rpl`
--
ALTER TABLE `rpl`
  ADD PRIMARY KEY (`id_rpl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_mk`
--
ALTER TABLE `daftar_mk`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `data_mining`
--
ALTER TABLE `data_mining`
  MODIFY `id_data_mining` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `grup_tema`
--
ALTER TABLE `grup_tema`
  MODIFY `id_grup_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image_processing`
--
ALTER TABLE `image_processing`
  MODIFY `id_image_processing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `iot`
--
ALTER TABLE `iot`
  MODIFY `id_iot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jaringan`
--
ALTER TABLE `jaringan`
  MODIFY `id_jaringan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kriptografi`
--
ALTER TABLE `kriptografi`
  MODIFY `id_kriptografi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nama`
--
ALTER TABLE `nama`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `nlp`
--
ALTER TABLE `nlp`
  MODIFY `id_nlp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rpl`
--
ALTER TABLE `rpl`
  MODIFY `id_rpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
