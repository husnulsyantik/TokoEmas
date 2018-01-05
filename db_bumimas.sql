-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jan 2018 pada 08.50
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
-- Struktur dari tabel `baki`
--

CREATE TABLE `baki` (
  `idBaki` char(4) NOT NULL,
  `idjenis_barang` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `baki`
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
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idBarang` varchar(12) NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `idbaki` char(4) NOT NULL,
  `idkadar` int(11) NOT NULL,
  `idjenis_barang` varchar(3) NOT NULL,
  `berat` decimal(5,0) DEFAULT NULL,
  `stok` int(8) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `idtoko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idBarang`, `nama_barang`, `idbaki`, `idkadar`, `idjenis_barang`, `berat`, `stok`, `foto`, `idtoko`) VALUES
('AYU1A002', '233', '1A', 3, 'A', '6', 0, '1515123191.jpg', 'L1'),
('CTK1A001', 'Kalung Bro', '1A', 1, 'A', '150', 0, '1515025128.jpg', 'L1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_barang`
--

CREATE TABLE `detail_barang` (
  `id_detail` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `idBarang` varchar(12) NOT NULL,
  `idBaki` char(4) NOT NULL,
  `idkadar` int(11) NOT NULL,
  `idjenis_barang` varchar(3) NOT NULL,
  `stok_awal` int(8) NOT NULL,
  `stok_tambah` int(8) NOT NULL,
  `stok_kurang` int(8) NOT NULL,
  `stik_akhir` int(8) NOT NULL,
  `idUser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `idHarga` int(11) NOT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `id_toko` varchar(4) NOT NULL,
  `idkadar` int(11) NOT NULL,
  `Last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`idHarga`, `harga_jual`, `id_toko`, `idkadar`, `Last_update`) VALUES
(1, 150000, 'L1', 3, '2017-12-21 00:00:00'),
(2, 120000, 'L1', 1, '2017-12-26 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `idjenis_barang` varchar(3) NOT NULL,
  `nama_jenis_barang` varchar(25) DEFAULT NULL,
  `singkatan` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
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
-- Struktur dari tabel `kadar`
--

CREATE TABLE `kadar` (
  `idkadar` int(11) NOT NULL,
  `nama_kadar_barang` varchar(45) DEFAULT NULL,
  `kode` varchar(6) DEFAULT NULL,
  `kadar_persen` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kadar`
--

INSERT INTO `kadar` (`idkadar`, `nama_kadar_barang`, `kode`, `kadar_persen`) VALUES
(1, 'BM 70% (78%-80%)', 'BM', '70'),
(2, 'CANTIK 37.5%(48%-52%)', 'CTK', '37.5'),
(3, 'AYU 30%(38%-42%)', 'AYU', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
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
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(12) NOT NULL,
  `berat` varchar(4) NOT NULL,
  `harga_gram` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `dp_harga` int(11) NOT NULL,
  `idkadar` int(11) NOT NULL,
  `idjenis_barang` varchar(3) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `idToko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `berat`, `harga_gram`, `harga_total`, `dp_harga`, `idkadar`, `idjenis_barang`, `id_user`, `idToko`) VALUES
('7', '7', 7, 7, 7, 1, 'A', 'LU01', 'P1'),
('887', '6', 100000, 1000000, 500000, 1, 'B', 'LU01', 'P2'),
('PE001', '3', 5, 5, 5, 1, 'B', 'LU01', 'P2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `idpengeluaran` int(11) NOT NULL,
  `detail_pengeluaran` text,
  `harga` int(11) DEFAULT NULL,
  `tanggal_pengeluaran` datetime DEFAULT NULL,
  `id_toko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
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
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`idPenjualan`, `berat_now`, `harga_gram`, `harga_total`, `tanggal_penjualan`, `idbarang`, `id_user`, `idtoko`) VALUES
('T001', '20', 150000, 3000000, '2018-01-03 20:41:26', '1', 'LU01', 'L1'),
('T002', '30', 150000, 4500000, '2018-01-03 20:55:46', '2', 'LU01', 'L1'),
('T003', '150', 120000, 18000000, '2018-01-04 07:59:06', 'CTK1A001', 'LU01', 'L1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `nama_role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`idRole`, `nama_role`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_sales`
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
-- Dumping data untuk tabel `tabel_sales`
--

INSERT INTO `tabel_sales` (`kode_sales`, `nama_sales`, `alamat`, `kota`, `telephone`, `default`, `status`) VALUES
('SPA001', 'ilham', 'Rambigundam', 'Jember', '048779768737', 'Default', 'Aktif'),
('SPA002', 'Cahyana', 'Jelbuk', 'Jember', '098987876765', 'Default', 'Aktif'),
('SPA003', 'Ully', 'Bondowosa', 'Bondodowa', '09889887653', 'Default', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_barang`
--

CREATE TABLE `tmst_barang` (
  `idTMST_Barang` int(11) NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `idjenis_barang` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `idToko` varchar(4) NOT NULL,
  `Nama_Toko` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `No_telp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`idToko`, `Nama_Toko`, `Alamat`, `No_telp`) VALUES
('L1', 'Bumi Mas Lawang 1', 'Stand A1 no 05,G1 28-30 pasar baru lawang', NULL),
('L2', 'Bumi Mas Lawang 2', 'Stand C no 01 pasar baru lawang', NULL),
('P1', 'Bumi Mas Pandaan 1', 'Stand A2-A3 pasar baru pandaan', NULL),
('P2', 'Bumi Mas Pandaan 2', 'Stand B2-B3 pasar baru pandaan', NULL),
('P3', 'Bumi Mas Pandaan 3', 'Jalan Kartini 07 pandaan', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` varchar(6) NOT NULL,
  `nama_user` varchar(45) DEFAULT NULL,
  `password` text,
  `Role_idRole` int(11) NOT NULL,
  `idtoko` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `nama_user`, `password`, `Role_idRole`, `idtoko`) VALUES
('LU01', 'Adwanul', 'Bismillah', 1, 'L1');

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
-- Indexes for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `idBarang` (`idBarang`),
  ADD KEY `idkadar` (`idkadar`),
  ADD KEY `idBaki` (`idBaki`),
  ADD KEY `idjenis_barang` (`idjenis_barang`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`idHarga`),
  ADD KEY `fk_Harga_Toko_idx` (`id_toko`),
  ADD KEY `fk_Harga_Kadar1_idx` (`idkadar`);

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
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `idkadar` (`idkadar`),
  ADD KEY `idjenis_barang` (`idjenis_barang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `idtoko` (`idToko`);

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
  ADD KEY `fk_Penjualan_User1_idx` (`id_user`,`idtoko`),
  ADD KEY `idtoko` (`idtoko`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `idbarang` (`idbarang`),
  ADD KEY `idtoko_2` (`idtoko`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `tabel_sales`
--
ALTER TABLE `tabel_sales`
  ADD PRIMARY KEY (`kode_sales`);

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
  MODIFY `idpengeluaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `baki`
--
ALTER TABLE `baki`
  ADD CONSTRAINT `fk_Baki_jenis_barang1` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idtoko`) REFERENCES `toko` (`idToko`),
  ADD CONSTRAINT `fk_Barang_Baki1` FOREIGN KEY (`idbaki`) REFERENCES `baki` (`idBaki`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Barang_Kadar1` FOREIGN KEY (`idkadar`) REFERENCES `kadar` (`idkadar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Barang_jenis_barang1` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD CONSTRAINT `detail_barang_ibfk_1` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_barang_ibfk_2` FOREIGN KEY (`idkadar`) REFERENCES `kadar` (`idkadar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_barang_ibfk_3` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_barang_ibfk_4` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_barang_ibfk_5` FOREIGN KEY (`idBaki`) REFERENCES `baki` (`idBaki`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `fk_Harga_Kadar1` FOREIGN KEY (`idkadar`) REFERENCES `kadar` (`idkadar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Harga_Toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`idToko`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_Pembelian_User1` FOREIGN KEY (`User_idUser`,`User_idtoko`) REFERENCES `user` (`idUser`, `idtoko`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`idkadar`) REFERENCES `kadar` (`idkadar`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`idtoko`) REFERENCES `toko` (`idToko`),
  ADD CONSTRAINT `pemesanan_ibfk_5` FOREIGN KEY (`idToko`) REFERENCES `toko` (`idToko`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `fk_pengeluaran_Toko1` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`idToko`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_barang`
--
ALTER TABLE `tmst_barang`
  ADD CONSTRAINT `fk_TMST_Barang_jenis_barang1` FOREIGN KEY (`idjenis_barang`) REFERENCES `jenis_barang` (`idjenis_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `penjualan` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
