-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2024 pada 06.36
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_kafi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bayar`
--

CREATE TABLE `data_bayar` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(302) NOT NULL,
  `tanggal` varchar(3002) NOT NULL,
  `nama_siswa` varchar(2300) NOT NULL,
  `asal_sekolah` varchar(3000) NOT NULL,
  `gelombang` varchar(2300) NOT NULL,
  `jumlah` bigint(230) NOT NULL,
  `bayar` bigint(210) NOT NULL,
  `kembalian` bigint(230) NOT NULL,
  `sisa` bigint(200) NOT NULL,
  `keterangan` varchar(2300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bayar`
--

INSERT INTO `data_bayar` (`id`, `no_pendaftaran`, `tanggal`, `nama_siswa`, `asal_sekolah`, `gelombang`, `jumlah`, `bayar`, `kembalian`, `sisa`, `keterangan`) VALUES
(3, 'BYR002', '14-05-2024', 'yuari choirul kafi', 'MADEP', 'tiga', 300000, 400000, 100000, 0, 'Lunas'),
(4, 'BYR002', '14-05-2024', 'yuari choirul kafi', 'MADEP', 'tiga', 300000, 300000, 0, 0, 'Lunas'),
(5, 'BYR001', '15-05-2024', 'andre', 'MADEP', 'tiga', 300000, 200000, 0, 100000, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_ortu` varchar(123) NOT NULL,
  `alamat_ortu` varchar(123) NOT NULL,
  `no_telOrtu` varchar(123) NOT NULL,
  `pekerjaan_ortu` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `nama_siswa`, `nama_ortu`, `alamat_ortu`, `no_telOrtu`, `pekerjaan_ortu`) VALUES
(0, 'andre', 'aan', 'dzxcv', '', 'mancing'),
(5, 'andre', 'aan', 'qaws', '', 'SCz'),
(6, 'yuari choirul kafi', 'TUTI ', 'sdf', '', 'sdf'),
(7, 'andre', 'aan', '', '', 'mancing'),
(8, 'pii', 'TUTI ', 'eqf', '', 'SCz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(123) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `ttl` varchar(123) NOT NULL,
  `jenis_kel` varchar(123) NOT NULL,
  `agama` varchar(123) NOT NULL,
  `no_telSiswa` varchar(123) NOT NULL,
  `asal_sekolah` varchar(123) NOT NULL,
  `alamat_sekolah` varchar(123) NOT NULL,
  `jurusan` varchar(123) NOT NULL,
  `tanggal` varchar(111) NOT NULL,
  `ukuran` varchar(1231) NOT NULL,
  `gelombang` varchar(213) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `no_pendaftaran`, `nama_siswa`, `ttl`, `jenis_kel`, `agama`, `no_telSiswa`, `asal_sekolah`, `alamat_sekolah`, `jurusan`, `tanggal`, `ukuran`, `gelombang`) VALUES
(7, 'BYR001', 'andre', 'bogor', 'Laki-Laki', 'Islam', '45646', 'MADEP', 'iug', 'REKAYASA PERANGKAT LUNAK', '15-05-2024', '', 'tiga'),
(8, 'BYR002', 'pii', '10-05-2007', 'Laki-Laki', 'Islam', '08934652368', 'MADEP', 'aq', 'REKAYASA PERANGKAT LUNAK', '16-05-2024', '', 'empat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_wali` varchar(123) NOT NULL,
  `alamat_wali` varchar(123) NOT NULL,
  `no_telWali` varchar(123) NOT NULL,
  `pekerjaan_wali` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_wali`
--

INSERT INTO `data_wali` (`id`, `nama_siswa`, `nama_wali`, `alamat_wali`, `no_telWali`, `pekerjaan_wali`) VALUES
(0, 'andre', '', '', '', ''),
(5, 'andre', '', '', '', ''),
(6, 'yuari choirul kafi', '', '', '', ''),
(7, 'andre', '', '', '', ''),
(8, 'pii', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gel`
--

CREATE TABLE `tbl_gel` (
  `id` int(11) NOT NULL,
  `gelombang` varchar(111) NOT NULL,
  `nominal` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gel`
--

INSERT INTO `tbl_gel` (`id`, `gelombang`, `nominal`) VALUES
(1, 'satu', 200000),
(2, 'dua', 250000),
(3, 'tiga', 300000),
(4, 'empat', 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(290) NOT NULL,
  `username` varchar(290) NOT NULL,
  `password` varchar(289) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(5, 'jenal', 'dre', 'pi', 'admin'),
(6, 'pikapi', 'pikapi', 'kapi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bayar`
--
ALTER TABLE `data_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `tbl_gel`
--
ALTER TABLE `tbl_gel`
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
-- AUTO_INCREMENT untuk tabel `data_bayar`
--
ALTER TABLE `data_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_gel`
--
ALTER TABLE `tbl_gel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
