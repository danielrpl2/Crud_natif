-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2022 pada 06.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(20) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tehun_terbit` int(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `deskripsi`, `penulis`, `penerbit`, `tehun_terbit`, `kategori`) VALUES
('1235', 'Laut Bercerita', 'Mengisahkan persahabatan', 'Leila S. Chudori', ' Kepustakaan Populer Gramedia', 2017, 'Novel'),
('1236', 'Bumi Manusia', 'Menceritakan pergerakan nasional', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980, 'Drama histori'),
('1237', 'Saman', 'Percintaan,agama', 'Ayu Utami', 'Kepustakaan Populer Gramedia', 1998, 'Novel'),
('1238', 'Entrok', 'Kisahkan perempuan Jawa', 'Okky Madasari', 'Gramedia Pustaka Utama', 2010, 'Fiksi Sejarah'),
('1239', 'Laskar Pelangi', 'Mengisahkan 11 Anak', 'Andrea Hirata', 'Bentang Pustaka', 2005, 'Roman'),
('1331', 'Hujan', 'Perjuangan hidup Lail', 'Tere Liye', 'Gramedia Pustaka Utama', 2016, 'Science fiction');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
('A19', 'Daniel', 'daniel', 'OMKUMIS_1', 'admin'),
('A20', 'Mahbubil', 'kumis2', 'OMKUMIS_2', 'admin'),
('A21', 'Sugianto', 'mamad', 'OMKUMIS_3', 'admin'),
('A22', 'Fitroh', 'fitroh', 'OMKUMIS_4', 'admin'),
('A23', 'Gofur', 'gofur', 'kk1', 'karyawan'),
('A24', 'Danil', 'danil', 'kk2', 'karyawan'),
('A25', 'Aril', 'aril', 'kk3', 'karyawan'),
('A26', 'Umdatul', 'umdatul', 'kk4', 'karyawan'),
('A27', 'Riris', 'riris', 'kk5', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
