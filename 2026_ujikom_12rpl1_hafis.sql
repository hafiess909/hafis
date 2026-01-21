-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2026 pada 10.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2026_ujikom_12rpl1_hafis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(10) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama`, `password`) VALUES
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0),
('naben', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputaspirasi`
--

CREATE TABLE `inputaspirasi` (
  `Nama Pengaju` varchar(15) NOT NULL,
  `Kelas /  jabatan` varchar(10) NOT NULL,
  `Nama Fasilitas` varchar(15) NOT NULL,
  `Lokasi Fasilitas` varchar(50) NOT NULL,
  `Jenis Pengajuan` enum('Perbaikan','Pengadaan Baru','Pengaduan Kerusakan','') NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inputaspirasi`
--

INSERT INTO `inputaspirasi` (`Nama Pengaju`, `Kelas /  jabatan`, `Nama Fasilitas`, `Lokasi Fasilitas`, `Jenis Pengajuan`, `Keterangan`) VALUES
('hafis', 'XII RPL 1', 'pc', 'lab', 'Perbaikan', 'kurang'),
('HAFIS', 'XII RPL 1', 'PC', 'LAB', 'Perbaikan', 'KURANG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
