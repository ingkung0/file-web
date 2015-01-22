-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2015 at 02:36 
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `WebsitePI`
--

-- --------------------------------------------------------

--
-- Table structure for table `Komplain`
--

CREATE TABLE IF NOT EXISTS `Komplain` (
`Nocomplain` int(5) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Complain` text NOT NULL,
  `Username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Komplain`
--

INSERT INTO `Komplain` (`Nocomplain`, `Judul`, `Complain`, `Username`) VALUES
(1, 'Pungli Polisi', 'Ketika saya ditilang didaerah xxx, ada polisi yang menawarkan damai ditempat', 'akune'),
(2, 'Tempat Sampah Kurang', 'Sering kali jika melewati jalan pemuda, fasilitas kebersihan berupa tempat sampah kurang.', 'akune'),
(3, 'Lampu Merah Tugu Muda', 'Sering sekali jika melewati tugu muda, pengendara motor harus menunggu lama karena lampu merah yang menurut saya terlalu lama. Waktu yang diperlu', 'adudu');

-- --------------------------------------------------------

--
-- Table structure for table `Tanggapan`
--

CREATE TABLE IF NOT EXISTS `Tanggapan` (
  `Nocomplain` int(5) NOT NULL,
  `Tanggapan` text NOT NULL,
  `Rating` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Admin` int(1) NOT NULL,
  `Corp` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Username`, `Email`, `Password`, `Admin`, `Corp`) VALUES
('Admin', '', 'Admin', 1, 1),
('adudu', 'naszdi@email.com', '11223', 0, 0),
('akune', 'aku@email.com', 'akune', 0, 0),
('ega', 'ega@email.com', 'egadu', 0, 0),
('Polri', 'polri@email.com', 'polri86', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Komplain`
--
ALTER TABLE `Komplain`
 ADD PRIMARY KEY (`Nocomplain`);

--
-- Indexes for table `Tanggapan`
--
ALTER TABLE `Tanggapan`
 ADD PRIMARY KEY (`Nocomplain`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Komplain`
--
ALTER TABLE `Komplain`
MODIFY `Nocomplain` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
