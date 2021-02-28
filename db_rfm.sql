-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2021 pada 07.46
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rfm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `userpwd` varchar(100) DEFAULT NULL,
  `surename` varchar(50) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `account_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`account_id`, `username`, `userpwd`, `surename`, `gender`, `account_created_at`) VALUES
(1, 'kurniawan', '$2y$10$/UrIXr43w/u34q70AU92medu5DzZXVvwnWKWwYbPfei4R69t.Wzl.', 'Oki Kurniawan', 'P', '2021-02-26 12:03:56'),
(2, 'buduq12', '$2y$10$UmG1nw5JJsIRAy6z3Ae6vOdmfS5z6e4g2L7aTCFkTJCxTt0rTUNRK', 'Satria Buduq', 'P', '2021-02-26 12:34:51'),
(3, 'indraf', '$2y$10$.Fo3rtR687x3KCf.Kcu0ZuSUXm/RxNp8QfYWa.NecCdk3evUbXrA6', 'M Indra F', 'P', '2021-02-26 15:12:10'),
(4, 'vegveg', '$2y$10$SaT2CaJVL644J5rpySbmj.J.Gl5BHUGhpccAyTcVw9cY9zs62/FGO', 'Vega Putri', 'W', '2021-02-26 15:13:37'),
(5, 'anaput', '$2y$10$QW0TYFBHeqCH.jExOZ4/Ee16dytlf5KDPRbR/Jwksp3WvO13NoTGW', 'Ananda Putri', 'W', '2021-02-26 15:52:52'),
(7, 'suganda', '$2y$10$4NX94eDmVBNFxA3lmyVYNejAr4OQQi.FlgZAV5xoEhdS1cKoJyNR.', 'Dion Suganda', 'P', '2021-02-27 10:26:25'),
(8, 'syahrul', '$2y$10$N8.Ua6CctIz8su1aokBA5.P7H0sMmY178BwkqNaN3vCEIYUcHaZsK', 'Syahrul Adhi', 'P', '2021-02-28 05:46:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `record`
--

CREATE TABLE `record` (
  `record_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `tinggi` varchar(3) NOT NULL,
  `pinggang` varchar(3) NOT NULL,
  `hasil` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `record`
--

INSERT INTO `record` (`record_id`, `account_id`, `tanggal`, `tinggi`, `pinggang`, `hasil`) VALUES
(1, 1, '2021-02-27 15:55:36', '177', '88', '23.77'),
(2, 4, '2021-02-27 15:56:35', '177', '80', '31.75'),
(3, 1, '2021-02-27 18:02:39', '178', '85', '22.11'),
(4, 1, '2021-02-27 18:03:38', '175', '83', '21.83'),
(5, 1, '2021-02-27 18:05:22', '178', '86', '22.60'),
(6, 1, '2021-02-27 18:05:44', '178', '86', '22.60');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indeks untuk tabel `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `record`
--
ALTER TABLE `record`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
