-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Apr 2019 pada 11.00
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'meiji', 'meijiaja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nrk` int(25) NOT NULL,
  `nama_dosen` varchar(25) NOT NULL,
  `konsentrasi` varchar(25) NOT NULL,
  `s_1` varchar(25) NOT NULL,
  `s_2` varchar(25) NOT NULL,
  `s_3` varchar(25) DEFAULT NULL,
  `judul_1` varchar(255) NOT NULL,
  `judul_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `sop` varchar(255) NOT NULL,
  `diagram` varchar(255) NOT NULL,
  `alur` varchar(255) NOT NULL,
  `hak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswaa`
--

CREATE TABLE `mahasiswaa` (
  `id` int(5) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `konsentrasi` varchar(30) NOT NULL,
  `judul_ta` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nrk`);

--
-- Indexes for table `mahasiswaa`
--
ALTER TABLE `mahasiswaa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `nrk` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mahasiswaa`
--
ALTER TABLE `mahasiswaa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
