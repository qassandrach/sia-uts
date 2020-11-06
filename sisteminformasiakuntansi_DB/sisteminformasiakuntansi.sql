-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 05:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminformasiakuntansi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_coa`
--

CREATE TABLE `tb_coa` (
  `id` int(10) NOT NULL,
  `kode_akun` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gol` varchar(10) NOT NULL,
  `klas` varchar(10) NOT NULL,
  `saldo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_coa`
--

INSERT INTO `tb_coa` (`id`, `kode_akun`, `nama`, `gol`, `klas`, `saldo`) VALUES
(2, 11101, 'KAS', 'Aktiva', 'Debet', 0),
(3, 11102, 'PERALATAN KOMPUTER', 'Aktiva', 'Debet', 0),
(4, 21101, 'HUTANG USAHA ', 'Pasiva', 'Kredit', 0),
(5, 21102, 'SHU', 'Pasiva', 'Kredit', 0),
(6, 31101, 'MODAL', 'Pasiva', 'Kredit', 0),
(7, 41101, 'PENDAPATAN JASA ', 'Aktiva', 'Debet', 25000000),
(8, 51101, 'BEBAN LISTRIK ', 'Beban', 'Debet', 1000000),
(9, 51102, 'BEBAN GAJI ', 'Beban', 'Debet', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `level`, `password`) VALUES
(1, 'Aldy Putra', 'admin', 'administrator', '1ff88497dac09479004f0c1a03ef6bf0');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_trx` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL,
  `debet` varchar(20) NOT NULL,
  `kredit` varchar(20) NOT NULL,
  `nominal` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_trx`, `tgl`, `nama_transaksi`, `debet`, `kredit`, `nominal`) VALUES
(11, '19-03-2020', 'Modal Awal', 'KAS', 'MODAL', 50000000),
(12, '19-03-2020', 'Membeli Peralatan Komputer ', 'PERALATAN KOMPUTER', 'KAS', 5000000),
(13, '19-03-2020', 'Membeli Peralatan dengan Kredit', 'PERALATAN KOMPUTER', 'HUTANG USAHA ', 20000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_coa`
--
ALTER TABLE `tb_coa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_trx`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_coa`
--
ALTER TABLE `tb_coa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_trx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
