-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 02:52 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(73, 'Laptop', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi quo tempora laboriosam explicabo vitae nobis ut amet aspernatur sequi illo eaque eius, tenetur quos architecto omnis aliquid laborum mollitia voluptas.\r\n', 'Pertanian', 6000, 20, 'laptop.jpg'),
(74, 'Hp', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi quo tempora laboriosam explicabo vitae nobis ut amet aspernatur sequi illo eaque eius, tenetur quos architecto omnis aliquid laborum mollitia voluptas.\r\n', 'Pertanian', 2500, 20, 'hp.jpg'),
(75, 'Sepatu', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi quo tempora laboriosam explicabo vitae nobis ut amet aspernatur sequi illo eaque eius, tenetur quos architecto omnis aliquid laborum mollitia voluptas.\r\n', 'Peternakan', 300000, 12, 'sepatu.jpg'),
(76, 'Kamera', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi quo tempora laboriosam explicabo vitae nobis ut amet aspernatur sequi illo eaque eius, tenetur quos architecto omnis aliquid laborum mollitia voluptas.\r\n', 'Peternakan', 5000000, 14, 'kamera.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id` int(11) NOT NULL,
  `category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id`, `category`) VALUES
(83, 'Pertanian'),
(84, 'Peternakan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kodepos` varchar(30) NOT NULL,
  `notelf` varchar(50) NOT NULL,
  `pengiriman` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `buktifoto` varchar(30) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `jam_pesan` time NOT NULL,
  `tgl_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `kota`, `kodepos`, `notelf`, `pengiriman`, `bank`, `buktifoto`, `catatan`, `status`, `tgl_pesan`, `jam_pesan`, `tgl_bayar`) VALUES
(10, 'Adhi Widiananda Laktama', 'Jl. Liman mukti utara 1/452 ', 'Semarang', '50192', '082227862992', 'JNE', 'MANDIRI', '5daa09cf6844a.png', 'Tidak ada catatan khusus !', 1, '2019-11-25', '22:29:15', '2019-11-26 22:29:15'),
(11, 'Chinossa Ayunatusyifa', 'Jl. Tlogosari V ', 'Semarang', '50192', '082227862992', 'Grab', 'MANDIRI', '5daa09c3ae339.jpg', 'tidak ada catatan khusus', 1, '2019-11-26', '15:24:38', '2019-11-27 15:24:38'),
(12, 'Gianita', 'Jl. tlogo raya', 'Semarang', '50192', '082227862992', 'POS INDONESIA', 'MANDIRI', 'buktibayar.jpg', 'tidak ada catatan khusus', 1, '2019-11-26', '17:47:57', '2019-11-27 17:47:57'),
(13, 'Maulana Jamianto', 'Tembalang V', 'Semarang', '50123', '082227862992', 'TIKI', 'BCA', 'buktibayar1.jpg', 'tidak ada catatan', 1, '2019-11-28', '03:00:20', '2019-11-29 03:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `idinvoice` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `idinvoice`, `idbarang`, `namabarang`, `jumlah`, `harga`) VALUES
(5, 10, 75, 'Sepatu', 1, 300000),
(6, 11, 76, 'Kamera', 2, 5000000),
(7, 11, 74, 'Hp', 1, 2500000),
(8, 11, 75, 'Sepatu', 1, 300000),
(9, 12, 76, 'Kamera', 2, 5000000),
(10, 13, 73, 'Laptop', 1, 6000000),
(11, 13, 74, 'Hp', 1, 2500000),
(12, 13, 75, 'Sepatu', 1, 300000),
(13, 13, 76, 'Kamera', 1, 5000000);

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id = NEW.idbarang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Adhi Widiananda', 'admin', 'admin', 1),
(2, 'widi', 'widi', 'widi', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
