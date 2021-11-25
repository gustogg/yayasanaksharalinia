-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2021 at 11:52 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE `publikasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `jenis_file` varchar(10) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id`, `judul`, `jenis_file`, `nama_file`) VALUES
(1, 'Kepala Sekolah SD Negeri 7 Gianyar, Bpk.I Gusti Ngurah Mideh S. Pd sedang berbincang kepada Penasihat Akshara Linia Indonesia, \" Sri Dharen S.H., M.B.A,\" mengucapkan terima kasih telah memperhatikan kebutuhan sekolah kami di Manukaya, Kabupaten Gianyar.', 'foto', 'pb1.jpg'),
(2, 'Photo Bersama para guru di sekolah SD Negeri 7 Manukaya Gianyar, didampingi oleh Pak I Ketut Arinata Yasa, Tampak Siring.', 'foto', 'pb2.jpg'),
(3, 'Ketua Yayasan Akshara Linia Indonesia \"Manmagilan S.E, M.Si.,\" menyampaikan kepada ibu Kepala sekolah SD 4 Negeri Sukawana tentang Rencana beberapa program Yayasan Akshara Linia kedepannya.', 'foto', 'pb3.jpg'),
(4, 'Penasihat Yayasan Akshara Linia Indonesia, \" Sri Dharen S.H., M.B.A \", sedang memaparkan makna Philopsopy dari Logo Yayasan kepada kepala sekolah SD Negeri 4 Sukawana, \"Ibu Ni Made Sukareni S.Pd.\"', 'foto', 'pb4.jpg'),
(5, 'Perjalanan menuju Lokasi SD Negeri 4 Sukawana, Kabupaten Bangli dengan lokasi pendakian dan penurunan yang terjal.', 'foto', 'pb5.jpg'),
(6, 'Awal pembelajaran tatap muka pada minggu pertama bulan November, murid-murid SD Negeri 4 Sukawana merasa senang mendapatkan fasilitas meja belajar dan kursi yang baru dari Yayasan Akshara Linia Indonesia.', 'video', 'pb6.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
