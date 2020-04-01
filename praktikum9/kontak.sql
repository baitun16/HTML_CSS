-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 11:49 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `euy`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(4) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jkel` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `jkel`, `email`, `alamat`, `kota`, `pesan`) VALUES
(1, 'Rudi', 'L', 'rudi123@gmail.com', 'jl.tambak oso rt 5 rt4', 'Surabaya', 'selamat siang'),
(2, 'Rara', 'P', 'rarai67@gmail.com', 'balung bendo', 'Gresik', 'Selamat Pagi'),
(3, 'Sasa', 'P', 'sasaku7639@gmail.com', 'cerme lor rt 9 rw 7', 'Gresik', 'Semangat'),
(4, 'Yakin', 'L', 'yakin89@gmail.com', 'cerme selatan rt 11', 'Gresik', 'Semangat...'),
(5, 'Al', 'L', 'alia@gmail.com', 'tambak beras rt5 rw 4', 'Gresik', 'Selamat Beraktivitas'),
(6, 'Anik', 'P', 'anik163899@gmail.com', 'cerme kidul rt 8 rw 9', 'Sidoarjo', 'Hallo'),
(7, 'Said', 'L', 'saiddd65@gmail.com', 'pandaan', 'Pasuruhan', 'Hey'),
(8, 'susi', 'P', 'fdgfgfs@gm.com', 'gresik selatan rt 10', 'Pasuruhan', 'halo\r\n'),
(9, 'baitun', 'P', 'baitunuun123@gmail.com', 'surajaya rt 7 rw 3', 'Sidoarjo', 'hi'),
(10, 'ba', 'L', 'baitunuun123@gmail.com', 'sirnoboyo rt 8 rw 11', 'Sidoarjo', 'hai'),
(11, 'Ananda GInting', 'L', 'ginting8870@gmail.com', 'Taman Rt 10 Rw 3', 'Sidoarjo', 'Stay at home'),
(12, 'Baitun Nadhiroh', 'P', 'bai456@gmail.com', 'cerme kidul', 'Gresik', 'malesnya dilawan hehe'),
(13, 'Aghil', 'L', 'Aghillsy421@gmail.com', 'Pandaan', 'Pasuruhan', 'Tetap produktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
