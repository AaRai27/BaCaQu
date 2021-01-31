-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 02:50 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bacaqu`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` varchar(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `username`, `password`, `role`) VALUES
('s-2', 'ivanpradana', '159', 2),
('s-3', 'hadi', '159', 2),
('s1', 'ahmad', '789', 2),
('u-3', 'afif', '753', 1),
('u1', 'ustad1', '123', 1),
('u2', 'ustad2', '456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `iqra`
--

CREATE TABLE `iqra` (
  `id` int(11) NOT NULL,
  `jilid` int(10) NOT NULL,
  `halaman` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iqra`
--

INSERT INTO `iqra` (`id`, `jilid`, `halaman`) VALUES
(1, 1, 'Halaman_(1).jpg'),
(2, 1, 'Halaman_(2).jpg'),
(3, 1, 'Halaman_(3).jpg'),
(4, 1, 'Halaman_(4).jpg'),
(5, 1, 'Halaman_(5).jpg'),
(6, 1, 'Halaman_(6).jpg'),
(7, 1, 'Halaman_(7).jpg'),
(8, 1, 'Halaman_(8).jpg'),
(9, 1, 'Halaman_(9).jpg'),
(10, 1, 'Halaman_(10).jpg'),
(11, 1, 'Halaman_(11).jpg'),
(12, 1, 'Halaman_(12).jpg'),
(13, 1, 'Halaman_(13).jpg'),
(14, 1, 'Halaman_(14).jpg'),
(15, 1, 'Halaman_(15).jpg'),
(16, 1, 'Halaman_(16).jpg'),
(17, 1, 'Halaman_(17).jpg'),
(18, 1, 'Halaman_(18).jpg'),
(19, 1, 'Halaman_(19).jpg'),
(20, 1, 'Halaman_(20).jpg'),
(21, 1, 'Halaman_(21).jpg'),
(22, 1, 'Halaman_(22).jpg'),
(23, 1, 'Halaman_(23).jpg'),
(24, 1, 'Halaman_(24).jpg'),
(25, 1, 'Halaman_(25).jpg'),
(26, 1, 'Halaman_(26).jpg'),
(27, 1, 'Halaman_(27).jpg'),
(28, 1, 'Halaman_(28).jpg'),
(29, 1, 'Halaman_(29).jpg'),
(30, 1, 'Halaman_(30).jpg'),
(31, 1, 'Halaman_(31).jpg'),
(33, 2, 'Halaman_(1).jpg'),
(34, 2, 'Halaman_(2).jpg'),
(35, 2, 'Halaman_(3).jpg'),
(36, 2, 'Halaman_(4).jpg'),
(37, 2, 'Halaman_(5).jpg'),
(38, 2, 'Halaman_(6).jpg'),
(39, 2, 'Halaman_(7).jpg'),
(40, 2, 'Halaman_(8).jpg'),
(41, 2, 'Halaman_(9).jpg'),
(42, 2, 'Halaman_(10).jpg'),
(43, 2, 'Halaman_(11).jpg'),
(44, 2, 'Halaman_(12).jpg'),
(45, 2, 'Halaman_(13).jpg'),
(46, 2, 'Halaman_(14).jpg'),
(47, 2, 'Halaman_(15).jpg'),
(48, 2, 'Halaman_(16).jpg'),
(49, 2, 'Halaman_(17).jpg'),
(50, 2, 'Halaman_(18).jpg'),
(51, 2, 'Halaman_(19).jpg'),
(52, 2, 'Halaman_(20).jpg'),
(53, 2, 'Halaman_(21).jpg'),
(54, 2, 'Halaman_(22).jpg'),
(55, 2, 'Halaman_(23).jpg'),
(56, 2, 'Halaman_(24).jpg'),
(57, 2, 'Halaman_(25).jpg'),
(58, 2, 'Halaman_(26).jpg'),
(59, 2, 'Halaman_(27).jpg'),
(60, 2, 'Halaman_(28).jpg'),
(61, 2, 'Halaman_(29).jpg'),
(62, 2, 'Halaman_(30).jpg'),
(63, 3, 'Halaman_(1).jpg'),
(64, 3, 'Halaman_(2).jpg'),
(65, 3, 'Halaman_(3).jpg'),
(66, 3, 'Halaman_(4).jpg'),
(67, 3, 'Halaman_(5).jpg'),
(68, 3, 'Halaman_(6).jpg'),
(69, 3, 'Halaman_(7).jpg'),
(70, 3, 'Halaman_(8).jpg'),
(71, 3, 'Halaman_(9).jpg'),
(72, 3, 'Halaman_(10).jpg'),
(73, 3, 'Halaman_(11).jpg'),
(74, 3, 'Halaman_(12).jpg'),
(75, 3, 'Halaman_(13).jpg'),
(76, 3, 'Halaman_(14).jpg'),
(77, 3, 'Halaman_(15).jpg'),
(78, 3, 'Halaman_(16).jpg'),
(79, 3, 'Halaman_(17).jpg'),
(80, 3, 'Halaman_(18).jpg'),
(81, 3, 'Halaman_(19).jpg'),
(82, 3, 'Halaman_(20).jpg'),
(83, 3, 'Halaman_(21).jpg'),
(84, 3, 'Halaman_(22).jpg'),
(85, 3, 'Halaman_(23).jpg'),
(86, 3, 'Halaman_(24).jpg'),
(87, 3, 'Halaman_(25).jpg'),
(88, 3, 'Halaman_(26).jpg'),
(89, 3, 'Halaman_(27).jpg'),
(90, 3, 'Halaman_(28).jpg'),
(91, 3, 'Halaman_(29).jpg'),
(92, 3, 'Halaman_(30).jpg'),
(93, 4, 'Halaman_(1).jpg'),
(94, 4, 'Halaman_(2).jpg'),
(95, 4, 'Halaman_(3).jpg'),
(96, 4, 'Halaman_(4).jpg'),
(97, 4, 'Halaman_(5).jpg'),
(98, 4, 'Halaman_(6).jpg'),
(99, 4, 'Halaman_(7).jpg'),
(100, 4, 'Halaman_(8).jpg'),
(101, 4, 'Halaman_(9).jpg'),
(102, 4, 'Halaman_(10).jpg'),
(103, 4, 'Halaman_(11).jpg'),
(104, 4, 'Halaman_(12).jpg'),
(105, 4, 'Halaman_(14).jpg'),
(106, 4, 'Halaman_(14).jpg'),
(107, 4, 'Halaman_(15).jpg'),
(108, 4, 'Halaman_(16).jpg'),
(109, 4, 'Halaman_(17).jpg'),
(110, 4, 'Halaman_(18).jpg'),
(111, 4, 'Halaman_(19).jpg'),
(112, 4, 'Halaman_(20).jpg'),
(113, 4, 'Halaman_(21).jpg'),
(114, 4, 'Halaman_(22).jpg'),
(115, 4, 'Halaman_(24).jpg'),
(116, 4, 'Halaman_(24).jpg'),
(117, 4, 'Halaman_(25).jpg'),
(118, 4, 'Halaman_(26).jpg'),
(119, 4, 'Halaman_(27).jpg'),
(120, 4, 'Halaman_(28).jpg'),
(121, 4, 'Halaman_(29).jpg'),
(122, 4, 'Halaman_(30).jpg'),
(123, 5, 'Halaman_(1).jpg'),
(124, 5, 'Halaman_(2).jpg'),
(125, 5, 'Halaman_(3).jpg'),
(126, 5, 'Halaman_(4).jpg'),
(127, 5, 'Halaman_(5).jpg'),
(128, 5, 'Halaman_(6).jpg'),
(129, 5, 'Halaman_(7).jpg'),
(130, 5, 'Halaman_(8).jpg'),
(131, 5, 'Halaman_(9).jpg'),
(132, 5, 'Halaman_(10).jpg'),
(133, 5, 'Halaman_(11).jpg'),
(134, 5, 'Halaman_(12).jpg'),
(135, 5, 'Halaman_(14).jpg'),
(136, 5, 'Halaman_(14).jpg'),
(137, 5, 'Halaman_(15).jpg'),
(138, 5, 'Halaman_(16).jpg'),
(139, 5, 'Halaman_(17).jpg'),
(140, 5, 'Halaman_(18).jpg'),
(141, 5, 'Halaman_(19).jpg'),
(142, 5, 'Halaman_(20).jpg'),
(143, 5, 'Halaman_(21).jpg'),
(144, 5, 'Halaman_(22).jpg'),
(145, 5, 'Halaman_(24).jpg'),
(146, 5, 'Halaman_(24).jpg'),
(147, 5, 'Halaman_(25).jpg'),
(148, 5, 'Halaman_(26).jpg'),
(149, 5, 'Halaman_(27).jpg'),
(150, 5, 'Halaman_(28).jpg'),
(151, 5, 'Halaman_(29).jpg'),
(152, 5, 'Halaman_(30).jpg'),
(153, 6, 'Halaman_(1).jpg'),
(154, 6, 'Halaman_(2).jpg'),
(155, 6, 'Halaman_(3).jpg'),
(156, 6, 'Halaman_(4).jpg'),
(157, 6, 'Halaman_(5).jpg'),
(158, 6, 'Halaman_(6).jpg'),
(159, 6, 'Halaman_(7).jpg'),
(160, 6, 'Halaman_(8).jpg'),
(161, 6, 'Halaman_(9).jpg'),
(162, 6, 'Halaman_(10).jpg'),
(163, 6, 'Halaman_(11).jpg'),
(164, 6, 'Halaman_(12).jpg'),
(165, 6, 'Halaman_(14).jpg'),
(166, 6, 'Halaman_(14).jpg'),
(167, 6, 'Halaman_(15).jpg'),
(168, 6, 'Halaman_(16).jpg'),
(169, 6, 'Halaman_(17).jpg'),
(170, 6, 'Halaman_(18).jpg'),
(171, 6, 'Halaman_(19).jpg'),
(172, 6, 'Halaman_(20).jpg'),
(173, 6, 'Halaman_(21).jpg'),
(174, 6, 'Halaman_(22).jpg'),
(175, 6, 'Halaman_(24).jpg'),
(176, 6, 'Halaman_(24).jpg'),
(177, 6, 'Halaman_(25).jpg'),
(178, 6, 'Halaman_(26).jpg'),
(179, 6, 'Halaman_(27).jpg'),
(180, 6, 'Halaman_(28).jpg'),
(181, 6, 'Halaman_(29).jpg'),
(182, 6, 'Halaman_(30).jpg'),
(183, 6, 'Halaman_(31).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_ustadz` varchar(6) NOT NULL,
  `id_santri` varchar(6) NOT NULL,
  `hari_tanggal` date NOT NULL,
  `dibaca` varchar(50) NOT NULL,
  `keterangan` varchar(6) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_ustadz`, `id_santri`, `hari_tanggal`, `dibaca`, `keterangan`, `catatan`) VALUES
(3, 'u1', 's4', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` varchar(6) NOT NULL,
  `id_ustadz` varchar(6) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `level` int(1) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_santri`, `id_ustadz`, `nama`, `level`, `telepon`) VALUES
('s-3', 'u-3', 'Hadi Abdul Aziz', 1, '147852369'),
('s1', 'u1', 'Ahmad', 3, '123456789'),
('s12', 'u1', 'Toni', 2, '12345678'),
('s4', 'u1', 'Andi', 1, '081234567899');

-- --------------------------------------------------------

--
-- Table structure for table `ustadz`
--

CREATE TABLE `ustadz` (
  `id_ustadz` varchar(6) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ustadz`
--

INSERT INTO `ustadz` (`id_ustadz`, `nama`, `deskripsi`, `telepon`) VALUES
('u-3', 'Muhammad Afif', 'meet google something', '147'),
('u1', 'Abdullah Hadi', 'meet.google.com/kode-meet-baru', '987456321'),
('u2', 'Abdullah', 'link gmeet', '081234567891');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `iqra`
--
ALTER TABLE `iqra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `ustadz`
--
ALTER TABLE `ustadz`
  ADD PRIMARY KEY (`id_ustadz`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iqra`
--
ALTER TABLE `iqra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
