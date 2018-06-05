-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 04:01 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ilkom_a`
--

CREATE TABLE `ilkom_a` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ilkom_a`
--

INSERT INTO `ilkom_a` (`NIM`, `Nama`) VALUES
('G.211.16.0040', '1'),
('G.211.16.0041', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ilkom_b`
--

CREATE TABLE `ilkom_b` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ilkom_b`
--

INSERT INTO `ilkom_b` (`NIM`, `Nama`) VALUES
('G.211.16.0050', '12'),
('G.211.16.0051', '13');

-- --------------------------------------------------------

--
-- Table structure for table `ilkom_c`
--

CREATE TABLE `ilkom_c` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ilkom_c`
--

INSERT INTO `ilkom_c` (`NIM`, `Nama`) VALUES
('G.211.16.0060', '1A'),
('G.211.16.0061', '1B');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`) VALUES
('G.211.16.0001', 'Kita'),
('G.211.16.0002', 'Mereka'),
('G.211.16.0003', 'Saya');

-- --------------------------------------------------------

--
-- Table structure for table `si_a`
--

CREATE TABLE `si_a` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `si_a`
--

INSERT INTO `si_a` (`NIM`, `Nama`) VALUES
('G.211.16.0070', 'A1A'),
('G.211.16.0071', 'A2A');

-- --------------------------------------------------------

--
-- Table structure for table `si_b`
--

CREATE TABLE `si_b` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `si_b`
--

INSERT INTO `si_b` (`NIM`, `Nama`) VALUES
('G.211.16.0080', 'A1B'),
('G.211.16.0081', 'A1C');

-- --------------------------------------------------------

--
-- Table structure for table `si_c`
--

CREATE TABLE `si_c` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `si_c`
--

INSERT INTO `si_c` (`NIM`, `Nama`) VALUES
('G.211.16.0090', 'B1B'),
('G.211.16.0091', 'C1C');

-- --------------------------------------------------------

--
-- Table structure for table `ti_a`
--

CREATE TABLE `ti_a` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ti_a`
--

INSERT INTO `ti_a` (`NIM`, `Nama`) VALUES
('G.211.16.0010', 'A'),
('G.211.16.0011', 'B'),
('G.211.16.0012', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `ti_b`
--

CREATE TABLE `ti_b` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ti_b`
--

INSERT INTO `ti_b` (`NIM`, `Nama`) VALUES
('G.211.16.0020', 'AB'),
('G.211.16.0021', 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `ti_c`
--

CREATE TABLE `ti_c` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ti_c`
--

INSERT INTO `ti_c` (`NIM`, `Nama`) VALUES
('G.211.16.0030', 'A1'),
('G.211.16.0031', 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'fais', 'fais'),
(3, 'siti', 'siti'),
(4, 'rizal', 'rizal'),
(5, 'marisa', 'marisa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ilkom_a`
--
ALTER TABLE `ilkom_a`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `ilkom_b`
--
ALTER TABLE `ilkom_b`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `ilkom_c`
--
ALTER TABLE `ilkom_c`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `si_a`
--
ALTER TABLE `si_a`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `si_b`
--
ALTER TABLE `si_b`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `si_c`
--
ALTER TABLE `si_c`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `ti_a`
--
ALTER TABLE `ti_a`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `ti_b`
--
ALTER TABLE `ti_b`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `ti_c`
--
ALTER TABLE `ti_c`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
