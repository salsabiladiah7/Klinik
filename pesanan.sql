-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2020 pada 20.14
-- Versi server: 10.4.8-MariaDB
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
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pemesanan` int(8) NOT NULL,
  `namaa` varchar(70) NOT NULL,
  `telpp` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pemesanan`, `namaa`, `telpp`, `email`, `hari`, `jam`, `pesan`, `ket`) VALUES
(1, 'Diah', 82233051455, 'salsabiladiah@gmail.com', 'senin, 1 september 2019', '19.00', 'yayayayaya', ''),
(3, 'Conan Edogawa', 8547429259, 'conanedogawa@gmail.com', 'Selasa, 2-09-2019', '24.00', 'hmhmhmhm hmhmhm yayayayayayaya yaya okokokokok, wkwkwkwkwkwk wkwkwkwk', 'confirm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pemesanan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
