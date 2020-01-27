-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2020 pada 11.33
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rsrz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `user_nis` int(11) NOT NULL,
  `kehadiran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `nama_kegiatan` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `tempat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `nama_materi` varchar(30) NOT NULL,
  `file_materi` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `kelas_id`, `level_id`, `nama_materi`, `file_materi`) VALUES
(3, 4, 2, 'membuat keramik', 0x6b65647564756b616e706572616e64616e6b6570656d696d70696e616e77616e69746164616c616d69736c616d2d3137313232383133333530332e706466);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_kegiatan`
--

CREATE TABLE `peserta_kegiatan` (
  `id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `user_nis` int(11) NOT NULL,
  `kehadiran` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `harga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nama_kelas`, `harga`) VALUES
(4, 'Coding Is Fun', '200000'),
(5, 'Seni Rupa', '200000'),
(6, 'Fotografi', '2000000'),
(7, 'Robotic', '2000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id` int(11) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id`, `level`) VALUES
(2, 'Pemula'),
(4, 'Sedang'),
(5, 'Expert');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lomba`
--

CREATE TABLE `tb_lomba` (
  `id` int(11) NOT NULL,
  `user_nis` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `nama_lomba` varchar(30) NOT NULL,
  `tempat` text NOT NULL,
  `tgl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id` int(11) NOT NULL,
  `user_nis` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `tunggakan` text NOT NULL,
  `lunas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nis` int(11) NOT NULL,
  `nama_lengkap` varchar(20) DEFAULT NULL,
  `nama_panggilan` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text,
  `hobi` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `foto_siswa` blob,
  `kelas_id` int(11) DEFAULT NULL,
  `nama_ibu` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(20) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `nama_ig` varchar(20) DEFAULT NULL,
  `nama_fb` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nis`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `hobi`, `jenis_kelamin`, `foto_siswa`, `kelas_id`, `nama_ibu`, `nama_ayah`, `no_hp`, `nama_ig`, `nama_fb`, `email`) VALUES
(2007, 'pg anjay', 'kiki', 'kiki', '2020-01-23', 'Ciampea', 'tidur', '0', NULL, 5, 'lina', 'jadi', '085717816647', 'kiki', 'kikiw', 'apipudin53@gmail.com'),
(2008, 'pgs yay', 'kiki', 'kiki', '2020-01-23', 'Ciampea', 'tidur', '1', NULL, 5, 'lina', 'jadi', '085717816647', 'kiki', 'kikiw', 'apipudin53@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta_kegiatan`
--
ALTER TABLE `peserta_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_lomba`
--
ALTER TABLE `tb_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta_kegiatan`
--
ALTER TABLE `peserta_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_lomba`
--
ALTER TABLE `tb_lomba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
