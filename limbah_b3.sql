-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2024 pada 16.07
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limbah_b3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penerbit`, `pengarang`, `tahun`, `kategori_id`, `harga`) VALUES
(2, 'Buku Agama', 'Gramedia', 'Roy Suryo', '2001', NULL, 9999),
(3, 'Buku Belajar Memahami Wanita', 'Gramedia', 'Herzi', '2020', 21, 99000),
(4, 'upin ipin', 'malaysia', 'kak ros', '2011', 24, 90000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(6, 'Rhome irama'),
(7, 'lucuu2'),
(8, 'asiap1'),
(10, '12'),
(11, '12'),
(12, '12'),
(13, '12'),
(14, '12'),
(15, 'qw'),
(16, 'qw'),
(17, 'qw'),
(18, 'qw'),
(19, 'qw'),
(20, '123'),
(21, '44'),
(22, 'qd'),
(23, 'ef'),
(24, '24'),
(25, 'qwd'),
(26, 'qwd'),
(27, 'qwd'),
(28, 'qwd'),
(29, 'qwd'),
(31, '123'),
(32, 'qwd'),
(33, 'asd'),
(34, 'asd'),
(35, 'asd'),
(36, '123'),
(37, 'qwd'),
(38, 'asd'),
(39, 'asd'),
(40, 'asd'),
(41, 'asc'),
(42, '123'),
(43, 'asd'),
(44, 'asd'),
(48, 'bb'),
(49, '5000'),
(50, 'Anime'),
(52, '123'),
(53, 'Love Story'),
(54, '2342'),
(55, '2342'),
(56, '2342'),
(57, '123'),
(58, 'tambah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `limbah_keluar`
--

CREATE TABLE `limbah_keluar` (
  `id` int(255) NOT NULL,
  `jenis_limbah` varchar(255) NOT NULL,
  `nama_limbah` varchar(255) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `area` varchar(255) NOT NULL,
  `kode_line` varchar(255) NOT NULL,
  `jml_limbah_keluar` varchar(255) NOT NULL,
  `no_manifest` varchar(255) NOT NULL,
  `nama_transporter` varchar(255) NOT NULL,
  `no_kendaraan` varchar(10) NOT NULL,
  `masa_dishub` date NOT NULL,
  `no_batch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `limbah_keluar`
--

INSERT INTO `limbah_keluar` (`id`, `jenis_limbah`, `nama_limbah`, `tgl_keluar`, `area`, `kode_line`, `jml_limbah_keluar`, `no_manifest`, `nama_transporter`, `no_kendaraan`, `masa_dishub`, `no_batch`) VALUES
(1, 'bubul', 'RNBPW003', '2024-03-20', 'tengah', '', '1200', 'asas', 'MBI', 'B5463KZ', '2024-03-13', 'FSDS'),
(2, 'botols', 'RNBPW0003', '2024-03-26', 'depan', '03', '1000', 'ASA', 'MBI', 'A8909TEX', '2024-03-31', 'qwe'),
(4, 'botol', 'RNBPW0003', '2024-03-31', 'tengah', '03', '1000', 'ASA', 'LSA', 'A8909TEX', '2024-04-02', 'TAS'),
(5, 'minyak', 'minyak tanah', '2024-03-26', 'depan', '03', '1000', 'kas', 'LSA', 'A8909TEX', '2024-04-01', 'qwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `limbah_masuk`
--

CREATE TABLE `limbah_masuk` (
  `id` int(25) NOT NULL,
  `jenis_limbah` varchar(25) NOT NULL,
  `nama_limbah` varchar(25) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `area` varchar(25) NOT NULL,
  `kode_line` varchar(25) NOT NULL,
  `jml_limbah_masuk` varchar(25) NOT NULL,
  `no_manifest` varchar(25) NOT NULL,
  `nama_transporter` varchar(25) NOT NULL,
  `no_kendaraan` varchar(25) NOT NULL,
  `masa_dishub` date NOT NULL,
  `no_batch` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `limbah_masuk`
--

INSERT INTO `limbah_masuk` (`id`, `jenis_limbah`, `nama_limbah`, `tgl_masuk`, `area`, `kode_line`, `jml_limbah_masuk`, `no_manifest`, `nama_transporter`, `no_kendaraan`, `masa_dishub`, `no_batch`) VALUES
(2, 'minyak', 'minyak tanah', '2024-03-21', 'depan', '', '200', 'ASA', 'LSA', 'A8909TEX', '2024-03-21', 'qwe'),
(6, 'botol', 'minyak goreng', '2024-03-27', 'tengah', '01', '45000', 'kas', 'LSA', 'A8909TEX', '2024-03-29', 'TAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Adit', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limbah_keluar`
--
ALTER TABLE `limbah_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limbah_masuk`
--
ALTER TABLE `limbah_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `limbah_keluar`
--
ALTER TABLE `limbah_keluar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `limbah_masuk`
--
ALTER TABLE `limbah_masuk`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
