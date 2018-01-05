-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 01:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bumimas`
--

-- --------------------------------------------------------

--
-- Table structure for table `baki`
--

CREATE TABLE `baki` (
  `idBaki` char(4) NOT NULL,
  `idjenis_barang` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baki`
--

INSERT INTO `baki` (`idBaki`, `idjenis_barang`) VALUES
('1A', 'A'),
('2A', 'A'),
('3A', 'A'),
('4A', 'A'),
('5A', 'A'),
('6A', 'A'),
('1B', 'B'),
('2B', 'B'),
('3B', 'B'),
('4B', 'B'),
('5B', 'B'),
('6B', 'B'),
('1BA', 'BA'),
('2BA', 'BA'),
('3BA', 'BA'),
('4BA', 'BA'),
('1BC', 'BC'),
('2BC', 'BC'),
('3BC', 'BC'),
('4BC', 'BC'),
('5BC', 'BC'),
('6BC', 'BC'),
('1BL', 'BL'),
('2BL', 'BL'),
('3BL', 'BL'),
('1C', 'C'),
('2C', 'C'),
('3C', 'C'),
('4C', 'C'),
('5C', 'C'),
('1D', 'D'),
('2D', 'D'),
('3D', 'D'),
('1E', 'E'),
('2E', 'E'),
('3E', 'E'),
('4E', 'E'),
('5E', 'E'),
('1EM', 'EM'),
('2EM', 'EM'),
('3EM', 'EM'),
('4EM', 'EM'),
('5EM', 'EM'),
('1F', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` varchar(12) NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `idbaki` char(4) NOT NULL,
  `idkadar` int(11) NOT NULL,
  `idjenis_barang` varchar(3) NOT NULL,
  `berat` decimal(5,0) DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `idtoko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `nama_barang`, `idbaki`, `idkadar`, `idjenis_barang`, `berat`, `foto`, `idtoko`) VALUES
('L1AYU1A001', 'kalung emas ', '1A', 3, 'A', '6', 'Jilbab-Khimar-Simple-Pet-Pita.png', 'L1'),
('L1BM1F003', 'kalung emas ', '1F', 1, 'F', '6', 'Jilbab-Khimar-Simple-Pet-Pita.png', 'L1'),
('L1BM3C002', 'kalung emas ', '3C', 1, 'C', '6', 'Jilbab-Khimar-Simple-Pet-Pita.png', 'L1'),
('L1BM3E004', 'kalung emas ', '3E', 1, 'E', '6', '1515153468.jpg', 'L1');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `idHarga` int(11) NOT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `id_toko` varchar(4) NOT NULL,
  `id_kadar` int(11) NOT NULL,
  `Last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`idHarga`, `harga_jual`, `id_toko`, `id_kadar`, `Last_update`) VALUES
(1, 20000, 'L1', 3, '2018-01-05 02:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `idjenis_barang` varchar(3) NOT NULL,
  `nama_jenis_barang` varchar(25) DEFAULT NULL,
  `singkatan` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`idjenis_barang`, `nama_jenis_barang`, `singkatan`) VALUES
('A', 'Kalung', 'A'),
('B', 'Gelang Kolong', 'B'),
('BA', 'Gelang Anak', 'BA'),
('BC', 'Gelang Kroncong', 'BC'),
('BL', 'Gelang PTT', 'BL'),
('C', 'Anting', 'C'),
('D', 'Liontin', 'D'),
('E', 'Cincin', 'E'),
('EM', 'Cincin Mata-Mata', 'EM'),
('F', 'Logam Mulia', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `kadar`
--

CREATE TABLE `kadar` (
  `idkadar` int(11) NOT NULL,
  `nama_kadar_barang` varchar(45) DEFAULT NULL,
  `kode` varchar(6) DEFAULT NULL,
  `kadar_persen` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kadar`
--

INSERT INTO `kadar` (`idkadar`, `nama_kadar_barang`, `kode`, `kadar_persen`) VALUES
(1, 'BM 70% (78%-80%)', 'BM', '70'),
(2, 'CANTIK 37.5%(48%-52%)', 'CTK', '37.5'),
(3, 'AYU 30%(38%-42%)', 'AYU', '30');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `idpembelian` int(11) NOT NULL,
  `barang` varchar(45) DEFAULT NULL,
  `berat` varchar(45) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `User_idUser` varchar(6) NOT NULL,
  `User_idtoko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(12) NOT NULL,
  `berat` decimal(4,0) NOT NULL,
  `harga_gram` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `dp_harga` int(11) NOT NULL,
  `idkadar` int(11) NOT NULL,
  `idjenis_barang` varchar(3) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `idtoko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `idpengeluaran` int(11) NOT NULL,
  `detail_pengeluaran` text,
  `harga` int(11) DEFAULT NULL,
  `tanggal_pengeluaran` datetime DEFAULT NULL,
  `id_toko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`idpengeluaran`, `detail_pengeluaran`, `harga`, `tanggal_pengeluaran`, `id_toko`) VALUES
(1, 'beli sate 2 tusuk', 12000, '2018-01-06 00:00:00', 'L2'),
(2, 'sate', 100000, '2018-01-10 12:11:00', 'L2');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idPenjualan` varchar(12) NOT NULL,
  `berat_now` decimal(4,0) DEFAULT NULL,
  `harga_gram` int(11) DEFAULT NULL,
  `harga_total` int(11) DEFAULT NULL,
  `tanggal_penjualan` datetime NOT NULL,
  `idbarang` varchar(12) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `idtoko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idPenjualan`, `berat_now`, `harga_gram`, `harga_total`, `tanggal_penjualan`, `idbarang`, `id_user`, `idtoko`) VALUES
('1', '6', 100000, 600000, '2018-01-01 03:11:23', 'BM1EM001', 'U001', 'L1'),
('2', '9', 800000, 120000, '2018-02-08 00:00:00', 'BM1EM001', 'U001', 'L1'),
('T001', '6', 20000, 120000, '2018-01-05 18:40:10', 'L1AYU1A001', 'U001', 'L1'),
('T002', '6', 20000, 120000, '2018-01-05 18:49:16', 'L1AYU1A001', 'U001', 'L1');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `nama_role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `nama_role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Operator'),
(4, 'Kasir'),
(5, 'Tambahan');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `Role_idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_sales`
--

CREATE TABLE `tabel_sales` (
  `kode_sales` varchar(6) NOT NULL,
  `nama_sales` varchar(45) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `telephone` varchar(13) NOT NULL,
  `default` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel_sales`
--

INSERT INTO `tabel_sales` (`kode_sales`, `nama_sales`, `alamat`, `kota`, `telephone`, `default`, `status`) VALUES
('SPA001', 'ilham', 'Rambigundam', 'Jember', '048779768737', 'Default', 'Aktif'),
('SPA002', 'Cahyana', 'Jelbuk', 'Jember', '098987876765', 'Default', 'Aktif'),
('SPA003', 'Ully', 'Bondowosa', 'Bondodowa', '09889887653', 'Default', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tmst_barang`
--

CREATE TABLE `tmst_barang` (
  `idTMST_Barang` int(11) NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `idjenis_barang` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `idToko` varchar(4) NOT NULL,
  `Nama_Toko` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `No_telp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`idToko`, `Nama_Toko`, `Alamat`, `No_telp`) VALUES
('L1', 'Bumi Mas Lawang 1', 'Stand A1 no 05,G1 28-30 pasar baru lawang', NULL),
('L2', 'Bumi Mas Lawang 2', 'Stand C no 01 pasar baru lawang', NULL),
('P1', 'Bumi Mas Pandaan 1', 'Stand A2-A3 pasar baru pandaan', NULL),
('P2', 'Bumi Mas Pandaan 2', 'Stand B2-B3 pasar baru pandaan', NULL),
('P3', 'Bumi Mas Pandaan 3', 'Jalan Kartini 07 pandaan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` varchar(6) NOT NULL,
  `nama_user` varchar(45) DEFAULT NULL,
  `password` text,
  `Role_idRole` int(11) NOT NULL,
  `idtoko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama_user`, `password`, `Role_idRole`, `idtoko`) VALUES
('U001', 'husnul', 'husnul', 2, 'L1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baki`
--
ALTER TABLE `baki`
  ADD PRIMARY KEY (`idBaki`),
  ADD KEY `fk_Baki_jenis_barang1_idx` (`idjenis_barang`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `fk_Barang_Baki1_idx` (`idbaki`),
  ADD KEY `fk_Barang_Kadar1_idx` (`idkadar`),
  ADD KEY `fk_Barang_jenis_barang1_idx` (`idjenis_barang`),
  ADD KEY `idtoko` (`idtoko`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`idHarga`),
  ADD KEY `fk_Harga_Toko_idx` (`id_toko`),
  ADD KEY `fk_Harga_Kadar1_idx` (`id_kadar`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`idjenis_barang`);

--
-- Indexes for table `kadar`
--
ALTER TABLE `kadar`
  ADD PRIMARY KEY (`idkadar`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idpembelian`),
  ADD KEY `fk_Pembelian_User1_idx` (`User_idUser`,`User_idtoko`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD KEY `idtoko` (`idtoko`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `idjenis_barang` (`idjenis_barang`),
  ADD KEY `idkadar` (`idkadar`),
  ADD KEY `idkadar_2` (`idkadar`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`idpengeluaran`),
  ADD KEY `fk_pengeluaran_Toko1_idx` (`id_toko`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idPenjualan`),
  ADD KEY `fk_Penjualan_Barang1_idx` (`idbarang`),
  ADD KEY `fk_Penjualan_User1_idx` (`id_user`,`idtoko`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `Role_idRole` (`Role_idRole`);

--
-- Indexes for table `tmst_barang`
--
ALTER TABLE `tmst_barang`
  ADD PRIMARY KEY (`idTMST_Barang`),
  ADD KEY `fk_TMST_Barang_jenis_barang1_idx` (`idjenis_barang`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`idToko`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`,`idtoko`),
  ADD KEY `fk_User_Role1_idx` (`Role_idRole`),
  ADD KEY `fk_User_Toko1_idx` (`idtoko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kadar`
--
ALTER TABLE `kadar`
  MODIFY `idkadar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `idpembelian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `idpengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `baki`
--
ALTER TABLE `baki`
  ADD CONSTRAINT `fk_Baki_jenis_barang1` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idtoko`) REFERENCES `toko` (`idToko`),
  ADD CONSTRAINT `fk_Barang_Baki1` FOREIGN KEY (`idbaki`) REFERENCES `baki` (`idBaki`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Barang_Kadar1` FOREIGN KEY (`idkadar`) REFERENCES `kadar` (`idkadar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Barang_jenis_barang1` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `fk_Harga_Kadar1` FOREIGN KEY (`id_kadar`) REFERENCES `kadar` (`idkadar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Harga_Toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`idToko`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_Pembelian_User1` FOREIGN KEY (`User_idUser`,`User_idtoko`) REFERENCES `user` (`idUser`, `idtoko`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`idtoko`) REFERENCES `toko` (`idToko`),
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`idkadar`) REFERENCES `kadar` (`idkadar`);

--
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `fk_pengeluaran_Toko1` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`idToko`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_Penjualan_Barang1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idBarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Penjualan_User1` FOREIGN KEY (`id_user`,`idtoko`) REFERENCES `user` (`idUser`, `idtoko`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD CONSTRAINT `super_admin_ibfk_1` FOREIGN KEY (`Role_idRole`) REFERENCES `role` (`idRole`);

--
-- Constraints for table `tmst_barang`
--
ALTER TABLE `tmst_barang`
  ADD CONSTRAINT `fk_TMST_Barang_jenis_barang1` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Role1` FOREIGN KEY (`Role_idRole`) REFERENCES `role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_User_Toko1` FOREIGN KEY (`idtoko`) REFERENCES `toko` (`idToko`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
