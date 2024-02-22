-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2024 pada 17.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okeprintfix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `alamat_pemesan` varchar(100) NOT NULL,
  `nomor_telpon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_produk`, `jumlah_pesanan`, `nama_pemesan`, `alamat_pemesan`, `nomor_telpon`) VALUES
(5, 5, 200, 'elin', 'jl kurnia', '08127845367'),
(6, 6, 5, 'Finka', 'Jl Hangtuah', '05812313546'),
(7, 7, 500, 'Depi', 'Jl Cipta Karya', '08123456485');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `jumlah_produk`, `gambar_produk`, `deskripsi`) VALUES
(5, 'Kartu Nama', 45000, 800, '658c40c802d27.jpeg', '&lt;div&gt;Bahan :&lt;br&gt;ArtPaper&lt;br&gt;Katotik&lt;br&gt;Linen&lt;br&gt;&lt;br&gt;&lt;em&gt;Include Kotak (Isi 100pcs)&lt;/em&gt;&lt;/div&gt;'),
(6, 'Spanduk', 20000, 995, '65d5ffafdf410.jpeg', '&lt;div&gt;Bahan :&lt;br&gt;Spanduk 280gr&lt;br&gt;Spanduk 340gr&lt;br&gt;Spanduk 440gr&lt;br&gt;&lt;br&gt;&lt;em&gt;Include Mata Kancing 4pcs&lt;/em&gt;&lt;/div&gt;'),
(7, 'X Banner', 80, 4500, '65d6030484b3a.jpeg', '&lt;div&gt;Bahan :&lt;br&gt;Spanduk 280gr&lt;br&gt;Spanduk 340gr&lt;br&gt;Spanduk 440gr&lt;br&gt;&lt;br&gt;&lt;em&gt;Include Kaki X&lt;/em&gt;&lt;/div&gt;'),
(12, 'Undangan Amplop', 10, 4500, '65d60293d1de1.jpeg', '&lt;div&gt;Ukuran A5 Hardcover&lt;br&gt;&lt;br&gt;&lt;em&gt;Include :&lt;br&gt;Plastik&lt;br&gt;Label Undangan&lt;/em&gt;&lt;/div&gt;'),
(15, 'Undangan Lipat', 2000, 500, '65d603fe064de.jpeg', '&lt;div&gt;Ukuran A4 Lipat 2&lt;br&gt;&lt;br&gt;&lt;em&gt;Include :&lt;br&gt;Plastik&lt;br&gt;Label Undangan&lt;/em&gt;&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$qmasOLJnScZFtGG1YayMHO.Xs8c1fxikY89r/RGOcoiu8hcZ52FCO'),
(4, 'elin', '$2y$10$PhCmDOcb0yOVYqhjSOwwseXkZHAGWVNcUjoz3HoOuiZMF9cLP38SO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_produk` (`id_produk`) USING BTREE;

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
