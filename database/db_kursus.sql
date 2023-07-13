-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 05:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id_kursus` varchar(10) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `durasi` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id_kursus`, `judul`, `deskripsi`, `durasi`) VALUES
('KR001', 'Belajar Dasar HTML&amp;CSS', 'HTML dan CSS adalah dasar bagi siapapun yang ingin terjun kedunia pemrograman web. Baik dia seorang web programmer, web designer, web developer maupun profesi yang berhubungan dengan website, mereka a', '01:00:00'),
('KR002', 'Javascript Dasar', 'Javascript adalah bahasa pemrograman yang wajib kamu pelajari jika ingin mendalami dunia web development.', '19:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` varchar(10) NOT NULL,
  `id_kursus` varchar(10) NOT NULL,
  `judul_materi` varchar(100) DEFAULT NULL,
  `des_mat` varchar(300) DEFAULT NULL,
  `link_embed` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `id_kursus`, `judul_materi`, `des_mat`, `link_embed`) VALUES
('MT001', 'KR001', 'HTML', 'HTML adalah kerangka yang membentuk dan mengatur bagaimana sebuah halaman web akan ditampilkan di browser.', 'https://www.w3schools.com/html/default.asp'),
('MT002', 'KR001', 'CSS', 'Cascading Style Sheet (CSS) merupakan aturan untuk mengendalikan beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.', 'https://www.w3schools.com/css/default.asp'),
('MT003', 'KR002', 'Pengenalan Javascript', 'Pelajari dasar JavaScript, dari fundamental, sintaks dan fitur ES6, hingga konsep automation test menggunakan framework populer.', 'https://www.w3schools.com/js/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_kursus` (`id_kursus`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_kursus`) REFERENCES `kursus` (`id_kursus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
