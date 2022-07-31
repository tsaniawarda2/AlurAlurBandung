-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 10:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `laporan_id` int(11) NOT NULL,
  `tanggal_tahun` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `keterangan` enum('Masuk','Izin','Dinas Luar','Sakit') NOT NULL,
  `uraian_kegiatan` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`laporan_id`, `tanggal_tahun`, `waktu_mulai`, `waktu_selesai`, `keterangan`, `uraian_kegiatan`, `id_user`) VALUES
(1, '2023-03-02', '10:05:25', '23:00:12', 'Masuk', 'Pancarona', 1),
(2, '2022-07-23', '11:00:00', '22:16:25', 'Masuk', 'Apel Pagi', 1),
(31, '2022-07-02', '02:02:00', '04:04:00', 'Masuk', 'Masuk aku mah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `foto_profile` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` char(16) NOT NULL,
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
  `password` varchar(255) NOT NULL,
  `type` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `foto_profile`, `nama`, `nik`, `jabatan`, `instansi`, `unit_kerja`, `pendidikan`, `ijazah`, `ktp`, `bpjs_ketenagakerjaan`, `bpjs_kesehatan`, `npwp`, `kk`, `email`, `password`, `type`) VALUES
(1, '62e0acbb12940.jpg', 'Anak Agung Ayu Puspa Aditya Karang', '1234567890987690', 'Kepala ', 'BPSDM', 'Bandung', 'SMA', '', '', '', '', '', '', 'devi@mail.com', '$2y$10$cHiinrleSxjNL9l.dlqPk.1xOvWpHTNlzSh..wrXPJZN6iTcBqhUq', ''),
(2, '62e23e2f50cef.jpg', 'Tsania Warda Listianisari', '23456789876543', 'Bendahara', 'BUMN', 'Kab. Bandung', 'Sarjana', '', '', '', '', '', '', 'qwerty@mail.ac.id', '$2y$10$tfpp6Hme3JR9xksOzIe7NuGLQxWw4cE5YuF4p68K8DGT6C.yNZq1K', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`laporan_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
