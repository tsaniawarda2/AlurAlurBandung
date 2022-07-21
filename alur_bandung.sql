-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2022 pada 02.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alur_bandung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@mail.com', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `laporan_id` int(11) NOT NULL,
  `tanggal_tahun` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `keterangan` enum('Masuk','Izin','Dinas Luar, Sakit') NOT NULL,
  `uraian_kegiatan` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `foto_profile` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` char(16) NOT NULL,
  `email` char(255) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `bpjs_ketenagakerjaan` varchar(100) NOT NULL,
  `bpjs_kesehatan` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `foto_profile`, `nama`, `nik`, `jabatan`, `instansi`, `unit_kerja`, `pendidikan`, `ijazah`, `ktp`, `bpjs_ketenagakerjaan`, `bpjs_kesehatan`, `npwp`, `kk`, `email`, `password`) VALUES
(1, '', 'devi ayu ', '12345678909876', 'kepala ', 'bppsdm', 'cc ', 'sma  ', '', '', '', '', '', '', 'devi@mail.com', '$2y$10$cHiinrleSxjNL9l.dlqPk.1xOvWpHTNlzSh..wrXPJZN6iTcBqhUq'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$tfpp6Hme3JR9xksOzIe7NuGLQxWw4cE5YuF4p68K8DGT6C.yNZq1K'),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', 'devi123@mail.com', '$2y$10$gX/JYeek3Ti8F5uKOXfA..pdJACcWDZd76k9r6/7i8zbn3xTOtkU.'),
(4, '62d614490f1db.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', 'devi12@mail.com', '$2y$10$D6kgqNZAXaF4nV/CstgZ.eTukfRssEEhqrljbuIF4iowWg58Ew9cC'),
(5, '62d61563484fa.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', 'devidevi@mail.com', '$2y$10$wAcmRgsQ3mXB.TvWHtJ.GepArmBI.2l3WznZYLNzwBiXRHxJeZZ7u'),
(6, '62d770ef28d21.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', 'echan@mail.com', '$2y$10$nP/bCalYLIdfPAX56ochmOd/hTtPyGXnaAC2usmGWQxFZ5LhUFY5e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`laporan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
