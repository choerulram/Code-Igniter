-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2024 at 01:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_igniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_komik`
--

CREATE TABLE `kategori_komik` (
  `id` int UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `tanggal_pembaruan` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kategori_komik`
--

INSERT INTO `kategori_komik` (`id`, `nama_kategori`, `deskripsi`, `tanggal_pembuatan`, `tanggal_pembaruan`, `created_at`, `updated_at`) VALUES
(1, 'Fantasi', 'Kategori untuk komik bergenre fantasi', '2023-01-01', '2024-01-01', '2024-04-07 17:09:06', '2024-04-07 17:09:06'),
(2, 'Aksi', 'Kategori untuk komik bergenre aksi', '2023-02-02', '2024-02-02', '2024-04-07 17:09:06', '2024-04-07 17:09:06'),
(3, 'Petualangan', 'Kategori untuk komik bergenre petualangan', '2023-03-03', '2024-03-03', '2024-04-07 17:09:06', '2024-04-07 17:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id` int UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', 'naruto', 'Masashi Kishimoto', 'Shonen Jump', 'naruto.jpg', '2024-04-07 17:08:44', '2024-04-07 17:08:44'),
(2, 'One Piece', 'one-piece', 'Eichiro Oda', 'Gramedia', 'onepiece.jpg', '2024-04-07 17:08:44', '2024-04-07 17:08:44'),
(3, 'Dragon Ball', 'dragon-ball', 'Akira Toriyama', 'Shueisha', 'dragonball.jpg', '2024-04-07 17:08:44', '2024-04-07 17:08:44'),
(4, 'Attack on Titan', 'attack-on-titan', 'Hajime Isayama', 'Kodansha', 'aot.jpg', '2024-04-07 17:08:44', '2024-04-07 17:08:44'),
(5, 'My Hero Academia', 'my-hero-academia', 'Kohei Horikoshi', 'Shueisha', 'mha.jpg', '2024-04-07 17:08:44', '2024-04-07 17:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(4, '2024-03-05-165356', 'App\\Database\\Migrations\\KategoriKomik', 'default', 'App', 1712509633, 1),
(5, '2024-04-07-161652', 'App\\Database\\Migrations\\Komik', 'default', 'App', 1712509633, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_komik`
--
ALTER TABLE `kategori_komik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_komik`
--
ALTER TABLE `kategori_komik`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
