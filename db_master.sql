-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2022 pada 08.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_master`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_compress`
--

CREATE TABLE `file_compress` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `file_pdf` varchar(200) NOT NULL,
  `file_size` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file_compress`
--

INSERT INTO `file_compress` (`id`, `username`, `file_pdf`, `file_size`, `date`) VALUES
(1, 'tamam', 'Simplicity-compress-Kuis Mobile dan Web Service.pdf', 0, '2022-01-10'),
(2, 'tamam', 'Simplicity-compress-Kuis Mobile dan Web Service.pdf', 145259, '2022-01-10'),
(3, 'tamam', 'Simplicity-compress-Kuis Mobile dan Web Service.pdf', 145259, '2022-01-10'),
(4, 'tamam', 'Simplicity-compress-Kuis Mobile dan Web Service.pdf', 145259, '2022-01-10'),
(5, 'tamam', 'Simplicity-compress-Kuis Mobile dan Web Service.pdf', 145259, '2022-01-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_pdf_word`
--

CREATE TABLE `file_pdf_word` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `file_pdf` varchar(200) NOT NULL,
  `file_word` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file_pdf_word`
--

INSERT INTO `file_pdf_word` (`id`, `username`, `file_pdf`, `file_word`, `date`) VALUES
(1, 'tamam', 'Simplicity-Kuis Mobile dan Web Service.pdf', 'Simplicity-Kuis Mobile dan Web Service.docx', '2022-01-09'),
(2, 'tamam', 'Simplicity-Kuis Mobile dan Web Service.pdf', 'Simplicity-Kuis Mobile dan Web Service.pdfdocx', '2022-01-10'),
(3, 'tamam', 'Simplicity-Kuis Mobile dan Web Service.pdf', 'Simplicity-Kuis Mobile dan Web Service.docx', '2022-01-10'),
(4, 'tamam', 'Simplicity-Kuis Mobile dan Web Service.pdf', 'Simplicity-Kuis Mobile dan Web Service.docx', '2022-01-10'),
(5, 'tamam', 'Simplicity-Kuis Mobile dan Web Service (1).pdf', 'Simplicity-Kuis Mobile dan Web Service (1).docx', '2022-01-10'),
(6, 'tamam', 'Simplicity-777-ArticleText-1289-1-10-20190930.pdf', 'Simplicity-777-ArticleText-1289-1-10-20190930.docx', '2022-01-10'),
(7, 'tamam', 'Simplicity-Kuis Mobile dan Web Service.pdf', 'Simplicity-Kuis Mobile dan Web Service.docx', '2022-01-10'),
(8, 'tamam', 'Simplicity-Kuis Mobile dan Web Service.pdf', 'Simplicity-Kuis Mobile dan Web Service.docx', '2022-01-10'),
(9, 'tamam', 'Simplicity-Kelompok 6.pdf', 'Simplicity-Kelompok 6.docx', '2022-01-10'),
(10, 'tamam', 'Simplicity-5200411161_Muhammad Tamam Huda_14.pdf', 'Simplicity-5200411161_Muhammad Tamam Huda_14.docx', '2022-01-10'),
(11, 'tamamhuda', 'Simplicity-Kuis Mobile dan Web Service.pdf', 'Simplicity-Kuis Mobile dan Web Service.docx', '2022-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_word_pdf`
--

CREATE TABLE `file_word_pdf` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `file_word` varchar(200) NOT NULL,
  `file_pdf` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file_word_pdf`
--

INSERT INTO `file_word_pdf` (`id`, `username`, `file_word`, `file_pdf`, `date`) VALUES
(86, 'tamam', 'Simplicity-Cover letter 1.doc', 'Simplicity-Cover letter 1.pdf', '2022-01-09'),
(87, 'tamam', 'Simplicity-Cover letter 1.doc', 'Simplicity-Cover letter 1.pdf', '2022-01-09'),
(88, 'tamam', 'Simplicity-Cover letter 1.doc', 'Simplicity-Cover letter 1.pdf', '2022-01-09'),
(89, 'tamam', 'Simplicity-Cover letter 1.doc', 'Simplicity-Cover letter 1.docpdf', '2022-01-10'),
(90, 'tamam', 'Simplicity-Cover letter 1.doc', 'Simplicity-Cover letter 1.pdf', '2022-01-10'),
(91, 'tamam', 'Simplicity-Simplicity-Kuis Mobile dan Web Service.docx', 'Simplicity-Simplicity-Kuis Mobile dan Web Service.pdf', '2022-01-10'),
(92, 'tamam', 'Simplicity-Simplicity-Kuis Mobile dan Web Service (9).docx', 'Simplicity-Simplicity-Kuis Mobile dan Web Service (9).pdf', '2022-01-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `an` varchar(50) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `ss_payment` varchar(100) NOT NULL,
  `status_payment` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `username`, `email`, `an`, `metode`, `ss_payment`, `status_payment`, `tanggal`) VALUES
(12, 'uta', 'uta@gmail.com', 'SAYA', 'BCA', 'png-clipart-obito-uchiha-sasuke-uchiha-kakashi-hatake-itachi-uchiha-sharingan-naruto-smiley-sasuke-u', 'Done', '2022-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(12, 'tamamhuda', 'tamam@gmail.com', '123456', 'user'),
(13, 'uta', 'uta@gmail.com', '123', 'vip');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `file_compress`
--
ALTER TABLE `file_compress`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `file_pdf_word`
--
ALTER TABLE `file_pdf_word`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `file_word_pdf`
--
ALTER TABLE `file_word_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `file_compress`
--
ALTER TABLE `file_compress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `file_pdf_word`
--
ALTER TABLE `file_pdf_word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `file_word_pdf`
--
ALTER TABLE `file_word_pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
