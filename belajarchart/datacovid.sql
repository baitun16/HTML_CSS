-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 03:51 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datacovid`
--

CREATE TABLE `datacovid` (
  `no` int(2) NOT NULL,
  `id negara` varchar(10) NOT NULL,
  `Total Cases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datacovid`
--

INSERT INTO `datacovid` (`no`, `id negara`, `Total Cases`) VALUES
(1, 'USA', 1029878),
(2, 'Spain', 232128),
(3, 'Italy', 201505),
(4, 'France', 165911),
(5, 'UK', 161145),
(6, 'Germany', 159431),
(7, 'Turkey', 114653),
(8, 'Russia', 93558),
(9, 'Iran', 92584),
(10, 'China', 82836);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datacovid`
--
ALTER TABLE `datacovid`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
