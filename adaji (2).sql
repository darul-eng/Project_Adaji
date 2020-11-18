-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 12:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(4) NOT NULL,
  `id_toko` int(4) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi_barang` varchar(255) NOT NULL,
  `gambar_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `jumlah_barang` int(128) NOT NULL,
  `jenis_kemasan` varchar(255) NOT NULL,
  `tanggal_upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_toko`, `nama_barang`, `deskripsi_barang`, `gambar_barang`, `harga_barang`, `jumlah_barang`, `jenis_kemasan`, `tanggal_upload`) VALUES
(1, 12, 'Mountea strawberry', 'uh', 'data.jpg', '1.500', 200, 'Kardus', '2020-11-18 17:50:35'),
(3, 12, 'Biore', 'mantap', 'biore-5569-8489842-2.jpg', '40.000', 120, 'Botol', '2020-11-18 17:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` varchar(255) NOT NULL,
  `kontak` varchar(40) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `email`, `password`, `nama_toko`, `alamat_toko`, `kontak`, `foto`) VALUES
(12, 'syahrilsaputra@gmail.com', '09c56337e5a19f6fccb93790abaf8348', 'Alfamidi', 'jl.Lasolo 23', '081245677654', '1.jpg'),
(13, 'syahrilsaputra23@gmail.com', '09c56337e5a19f6fccb93790abaf8348', 'Alfamart', 'jl.lasolo', '080808080808', 'defaulttoko.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
