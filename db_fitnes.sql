-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 01:30 PM
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
-- Database: `db_fitnes`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `id_pelatih` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `id_pelatih`) VALUES
(6, 'Senin', 13),
(8, 'Selasa', 12),
(9, 'Rabu', 11),
(10, 'Kamis', 13),
(12, 'Jumat', 12),
(13, 'Sabtu', 13),
(14, 'Minggu', 12),
(15, 'Senin', 11);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`) VALUES
(1, 'Fitnes'),
(2, 'Aerobik'),
(3, 'Billiard'),
(8, 'Senam Zumba');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_pelatih` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jadwal` datetime NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_kegiatan`, `id_pelatih`, `nama_kelas`, `deskripsi`, `jadwal`, `harga`, `stok`, `gambar`) VALUES
(3, 2, 11, 'Senam Zumba', 'Melakukan senam zumba dengan 3 tema senam yang berbeda. ', '2022-06-29 09:30:00', 25000, 39, '62b913895ab16.jpg'),
(4, 1, 13, 'Fitnes Siang', 'Latihan kardio, Latihan kekuatan, bench press, squat,  dan deadlift.', '2022-06-30 12:30:00', 40000, 13, '62b91656338ef.jpg'),
(5, 1, 12, 'Fitnes Sore', 'Latihan kardio, Latihan kekuatan, bench press, squat, dan deadlift.', '2022-07-01 15:30:00', 40000, 15, '62b9175f263ea.jpg'),
(6, 3, 16, 'Billiard', 'Terdapat 6 meja billiard yang kalian bisa gunakan untuk bermain.', '0001-01-01 00:00:00', 20000, 99, '62b91a6f9b623.jpg'),
(7, 1, 13, 'Fitnes Pagi', 'Latihan kardio, Latihan kekuatan, bench press, squat, dan deadlift.', '2022-07-02 09:00:00', 50000, 25, '62b91b574a966.jpg'),
(8, 1, 17, 'Fitnes', 'Anda bisa menggunakan semua alat fitnes yang ada di fitnes ini.', '0001-01-01 00:00:00', 15000, 100, '62b91b93a2992.jpg'),
(9, 1, 18, 'Kelas Koko', 'Latihan kardio, Latihan kekuatan, bench press, squat,  dan deadlift.', '2022-07-07 21:45:00', 20000, 15, '62bc495528ca4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komen`, `nama`, `nohp`, `email`, `pesan`) VALUES
(2, 'Aldi Jaya Mulyana', '+6287826753532', 'aldijayaa280902@gmail.com', 'a'),
(4, 'Aldi Jaya Mulyana', '+6287826753532', 'aldijayaa280902@gmail.com', 'lagi ngapain ?'),
(7, 'Aldi Jaya Mulyana', '+6287826753532', 'aldijayaa280902@gmail.com', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `pelatih`
--

CREATE TABLE `pelatih` (
  `id_pelatih` int(11) NOT NULL,
  `nama_pelatih` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatih`
--

INSERT INTO `pelatih` (`id_pelatih`, `nama_pelatih`, `jk`, `nohp`, `email`, `skill`, `alamat`, `gambar`) VALUES
(11, 'Nia Handayani', 'Perempuan', '082115621234', 'niahndyni@gmail.com', '2', 'Indihiang, Tasikmalaya', '62b90f28ba09f.jpg'),
(12, 'Bagja Wihardi', 'Laki - laki', '087834761278', 'bagjawhrdi@gmail.com', '1', 'Tawang, Tasikmalaya', '62b90f733a70f.jpg'),
(13, 'Ahmad Febriyanto ', 'Laki - laki', '085634926712', 'ahmdfrbt@gmail.com', '1', 'Sindangkasih, Ciamis', '62b90fca17008.jpg'),
(16, '', '', '', '', '1', '', ''),
(17, '', '', '', '', '3', '', ''),
(18, 'koko', 'Laki - laki', '087811223344', 'ko2@gmail.com', '1', 'cigeureung', '62bc46b108425.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `total_bayar` double NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `id_user`, `id_kelas`, `total_bayar`, `gambar`) VALUES
(4, '2022-06-27', 1, 3, 25000, '62b99230b2436.jpg'),
(5, '2022-06-27', 5, 6, 20000, '62b9bdd7b9845.png'),
(9, '2022-06-28', 7, 3, 25000, '62ba963d8c21c.png'),
(10, '2022-06-28', 1, 4, 40000, '62bab365a9a16.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tl` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `tempat`, `tl`, `jk`, `alamat`, `nohp`, `email`, `password`, `level`) VALUES
(1, 'Aldi Jaya Mulyana', 'aldiui', 'Tasikmalaya', '2002-09-28', 'Laki - laki', 'Jalan Raya Jamanis', '+6287826753532', 'aldijayaa280902@gmail.com', '$2y$10$u0ud4LE7fVhGR2j9eDzx7OD9CAjgtFal8kkj5M9f4/R7p0AStM8Oi', 'user'),
(2, 'Aldi Jaya Mulyana', 'admin', 'Tasikmalaya', '2002-09-28', 'Laki - laki', 'Jalan Raya Jamanis k', '+6287826753532', 'aldijaya280902@gmail.com', '$2y$10$X5M/0.zfRxOtCD7OwJecXu/W9BDpZhCoYIF4D3Rua5twsP.7s2CUi', 'admin'),
(4, 'Mohamad Fahmy Gustina', 'hoijowae', 'Tasikmalaya', '2001-08-10', 'Laki - laki', 'Kiarajangkung Tasikmalaya', '085724261672', 'fahmygustina619@gmail.com', '$2y$10$hivvJ0ZAWxd9yWsIsxtnwOuYGl3AdAgAslK.Oi1CkRLUmNUrJYdk.', 'admin'),
(5, 'Ridho Tsania Noor', 'rido', 'Tasikmalaya', '2005-04-04', 'Laki - laki', 'Kairo', '082117277197', 'hoijowae@gmail.com', '$2y$10$oRpKHGK75OX5eFuiOvFLmOR7jVdSooWBf5NJ1d734I.ULpSAhesjS', 'user'),
(7, 'ratna', 'ratna01', 'tasik', '2002-10-01', 'Perempuan', 'saripin', '123456', 'desidelentinapurba@gmail.com', '$2y$10$gcefV9g8qKr5k3/kCsKj.OHN1KiN/Y.J9Uw7dHLZ89Db43hCM76eu', 'user'),
(8, 'Fuzi zidane', 'zidan', 'Tasikmalaya', '2002-09-10', 'Laki - laki', 'Pancasila', '0812323456542', 'Hoijoae2@gmail.com', '$2y$10$v5.zJMM5AF9s5P6DBj6L9e/1FISjkWSPt9gOZLGMpaETeaelSidT2', 'user'),
(9, 'Aldi Jaya', 'kakabow', 'Tasikmalaya', '2002-09-28', 'Laki - laki', 'Jamanis', '087826753532', 'kakabow28@gmail.com', '$2y$10$fs8T.sZfV/oz.jai1eWZLOTJbvJ3pxkbmp2wx37Dh.pOf1WnTWVf2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`id_pelatih`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelatih`
--
ALTER TABLE `pelatih`
  MODIFY `id_pelatih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
