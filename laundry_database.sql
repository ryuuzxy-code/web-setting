-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 17.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_beneran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `qty`, `subtotal`) VALUES
(98, 134, 8, 1, 0),
(99, 135, 8, 1, 0),
(100, 135, 9, 1, 0),
(101, 136, 10, 1, 0),
(102, 137, 9, 100, 0),
(103, 138, 8, 1, 0),
(104, 139, 8, 1, 0),
(105, 139, 9, 1, 0),
(106, 140, 9, 1, 0),
(107, 141, 8, 1, 0),
(108, 142, 8, 1, 0),
(109, 143, 10, 1, 0),
(110, 144, 9, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Laki laki','Perempuan') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(7, 'Fadil', 'Kepanjen', 'Laki laki', '085736422728'),
(9, 'Kha', 'Sawojajar', 'Perempuan', '0812345678'),
(10, 'Maharani', 'ngunut', 'Perempuan', '0812345678'),
(11, 'Nayla', 'Kepanjen', 'Perempuan', '08123456789'),
(13, 'Aji kucing', 'Telkom', 'Laki laki', '08333333333333'),
(14, 'Rasyid', 'Sidoarjo', 'Laki laki', '0987654321'),
(15, 'Ahmad', 'kediri', 'Laki laki', '08123456789'),
(16, 'Cecep', 'Ngantang', 'Laki laki', '0987654321'),
(17, 'Kia', 'Jombang beriman', 'Perempuan', '08123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `jenis_paket` enum('kiloan','selimut','bed_cover','kaos') NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `jenis_paket`, `harga`) VALUES
(7, 'selimut', 20000),
(8, 'bed_cover', 25000),
(9, 'kaos', 10000),
(10, 'kiloan', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status_order` enum('baru','proses','selesai','diambil') NOT NULL,
  `status_bayar` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `status_order`, `status_bayar`, `id_user`) VALUES
(134, 9, '2022-10-27', '2022-10-29', '2022-10-27', 'baru', 'belum_dibayar', 1),
(135, 10, '2022-10-27', '2022-10-29', '2022-10-27', 'baru', 'belum_dibayar', 1),
(136, 10, '2022-10-27', '2022-10-29', '2022-10-27', 'baru', 'belum_dibayar', 1),
(137, 10, '2022-10-27', '2022-10-29', '2022-10-27', 'baru', 'belum_dibayar', 1),
(138, 7, '2022-10-27', '2022-10-29', '2022-10-27', 'baru', 'belum_dibayar', 1),
(139, 7, '2022-10-27', '2022-10-29', '2022-10-27', 'baru', 'belum_dibayar', 1),
(140, 7, '2022-10-27', '2022-10-29', '2022-10-27', 'diambil', 'belum_dibayar', 13),
(141, 10, '2022-10-27', '2022-10-29', '2022-10-27', 'diambil', 'dibayar', 13),
(142, 7, '2022-10-27', '2022-10-29', '2022-10-27', 'diambil', 'belum_dibayar', 8),
(143, 11, '2022-10-27', '2022-10-29', '2022-10-27', 'diambil', 'dibayar', 8),
(144, 7, '2022-10-27', '2022-10-29', '2022-10-27', 'baru', 'belum_dibayar', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `role`) VALUES
(8, 'Aisya Karenina Ramadhani', 'ice', '202cb962ac59075b964b07152d234b70', 'admin'),
(13, 'Celline', 'line', '202cb962ac59075b964b07152d234b70', 'kasir'),
(14, 'Maharani Banica', 'rain', '202cb962ac59075b964b07152d234b70', 'owner'),
(15, 'Gizella Ratu', 'gisel', '202cb962ac59075b964b07152d234b70', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
