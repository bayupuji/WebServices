-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 10.33
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakultas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fklts`
--

CREATE TABLE `fklts` (
  `ID` int(11) NOT NULL,
  `nama_fakultas` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `dekan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fklts`
--

INSERT INTO `fklts` (`ID`, `nama_fakultas`, `kode`, `dekan`) VALUES
(1, 'teknik', '342fradck', 'bayu puji'),
(5, 'ekonomi', '8748hffkfnn', 'hilma alviani'),
(6, 'kesehatan', '6748hdhdh', 'xabiru alhakim'),
(7, 'ilmu sosial politik', '5447hhdb', 'faza muhammad'),
(8, 'pendidikan', 'hd76w777', 'baim '),
(9, '', '', ''),
(10, 'teknik ', '77638hhhh', 'bayupujin'),
(11, '', '', ''),
(12, 'teknik ', '77638hhhh', 'bayupujin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fklts`
--
ALTER TABLE `fklts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fklts`
--
ALTER TABLE `fklts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
