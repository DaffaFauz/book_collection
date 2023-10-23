-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 01:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si2`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `username`, `password`) VALUES
('ADM-001', 'admin', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` varchar(7) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `nama_pengguna`, `alamat`, `no_hp`, `email`) VALUES
('USR-001', 'user', 'user', 'Cileunyi', '09889988', 'user@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` varchar(7) NOT NULL,
  `kategori_id` varchar(7) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kategori_id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `sinopsis`, `gambar`) VALUES
('BK-001', 'KTG-001', 'Harry Potter', 'J.K Rowling', 'Arthur A. Levine Books', 2007, 'After years of battling against the evil Lord Voldemort, 17-year-old Harry Potter is finally an adult wizard, and he and his best friends Ron Weasley and Hermione Granger must set out on a dangerous mission to stop Voldemort once and for all.', '../assets/img/cover/harry.jpg'),
('BK-002', 'KTG-001', 'Cinta Itu Luka', 'Eka Kurniawan', 'Penerbit Jendela', 2002, 'Di akhir masa kolonial, seorang perempuan dipaksa menjadi pelacur. Kehidupan itu terus dijalaninya hingga ia memiliki tiga anak gadis yang kesemuanya cantik. Ketika mengandung anaknya yang keempat, ia berharap anak itu akan lahir buruk rupa. Itulah yang terjadi, meskipun secara ironik ia memberinya nama si Cantik.', '../assets/img/cover/CIL.jpg'),
('BK-003', 'KTG-006', 'Laut Bercerita', 'Leila S. Chudori', 'Jakarta: KPG (Kepustakaan Populer Gramedia)', 2017, 'Laut Bercerita menceritakan terkait perilaku kekejaman dan kebengisan yang dirasakan oleh kelompok aktivis mahasiswa di masa Orde Baru.\r\n\r\nTidak hanya itu, novel ini pun merenungkan kembali akan hilangnya 13 aktivis, bahkan sampai saat ini belum juga ada yang mendapatkan petunjuknya.\r\n', '../assets/img/cover/1.jpg'),
('BK-004', 'KTG-006', 'Antares', 'Reinda', 'Loveable', 2018, 'Kisah Antares bermula dengan seorang remaja SMA bernama Antares Sebastian Aldevaro. Lelaki berwajah tampan yang dikenal karena kenakalan dan kebrandalannya di sekolah itu merupakan ketua dari geng motor bernama Calderioz. Sikap Antares kasar dan urak-urakan.\r\n\r\nZeanne Queensha Bratadikara atau dipanggil Zea merupakan siswa yang baru saja pindah ke SMA Derlangga, sekolah Antares. Gadis ini berparas cantik dan rupawan. Zea berasal dari Bandung. Kedatangannya ke SMA Derlangga bukan tanpa alasan. Ada sesuatu yang harus dia pecahkan di sana.', '../assets/img/cover/antares.png'),
('BK-005', 'KTG-006', 'Mariposa', 'Hidayatul Fajriyah (Luluk HF)', 'Coconut Books', 2018, 'Novel Mariposa mengisahkan seorang gadis cantik bernama Natasha Kay Loovi atau kerap disapa Acha yang memperjuangkan cintanya terhadap seorang laki-laki berhati beku dan super dingin–bagaikan es–dengan kehidupannya yang serba monoton, bernama Iqbal. Mereka berdua adalah siswa yang sangat pintar di sekolah.', '../assets/img/cover/mariposa_cover_film.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `deskripsi`) VALUES
('KTG-001', 'Fantasi', 'fantasi'),
('KTG-002', 'Petualangan', 'petualangan'),
('KTG-003', 'Horor', 'horor'),
('KTG-004', 'Komedi', 'komedi'),
('KTG-005', 'Misteri', 'mister'),
('KTG-006', 'Fiksi', 'fiksi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
