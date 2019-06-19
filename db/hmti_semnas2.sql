-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 10:38 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hmti_semnas2`
--

-- --------------------------------------------------------

--
-- Table structure for table `hadirs`
--

CREATE TABLE IF NOT EXISTS `hadirs` (
  `pin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `hadirs_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasis`
--

CREATE TABLE IF NOT EXISTS `konfirmasis` (
  `pin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `konfirmasis_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `konfirmasis`
--

INSERT INTO `konfirmasis` (`pin`, `name`, `email`, `kategori`, `created_at`, `updated_at`) VALUES
('4tssd', 'farizul', 'farizul@gmail.com', 'mahasiswa', '2018-02-25 06:33:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lunas`
--

CREATE TABLE IF NOT EXISTS `lunas` (
  `pin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `progdi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `lunas_email_unique` (`email`),
  UNIQUE KEY `lunas_telp_unique` (`telp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lunas`
--

INSERT INTO `lunas` (`pin`, `name`, `email`, `telp`, `kategori`, `nim`, `progdi`, `alamat`, `created_at`, `updated_at`) VALUES
('4tssd', 'farizul', 'farizul@gmail.com', '080908080', 'mahasiswa', 'a11.2015.09178', 'Teknik Informatika', '', '2018-02-25 06:26:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_02_02_141738_create_pesertas_table', 1),
('2017_02_02_221858_create_konfirmasis_table', 2),
('2017_02_02_222251_create_hadirs_table', 3),
('2017_02_02_231018_create_lunas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesertas`
--

CREATE TABLE IF NOT EXISTS `pesertas` (
  `pin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `progdi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pin`),
  UNIQUE KEY `pesertas_email_unique` (`email`),
  UNIQUE KEY `pesertas_telp_unique` (`telp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pesertas`
--

INSERT INTO `pesertas` (`pin`, `name`, `email`, `telp`, `kategori`, `nim`, `progdi`, `alamat`, `created_at`, `updated_at`) VALUES
('en4vp', 'wawan', 'Asd@gmail.com', '08652415162561', 'umum', '', '', 'Jl. Sidorejo', '2018-02-25 07:07:59', '0000-00-00 00:00:00'),
('hkqmp', 'mg', 'mg@gmail.com', '45655475445', 'umum', '', '', 'Jl. Sidorejo', '2018-02-25 08:24:25', '0000-00-00 00:00:00'),
('th7ob', 'asdasd', 'asdasdasd@gmail.com', '08712121212', 'mahasiswa', 'A11.2000.01232', 'Teknik Informatika', '', '2018-02-25 08:22:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hmti udinus', 'hmti.dinus@gmail.com', '$2y$10$LUdPagDxZYIsZDnu4NhPXec4c.//F9S4omIyV6wEeS0mPMO1ZYt0e', '7Mib4XUdMRXteBBZeWlHpF52yAQgAIi6YipqDWrzWnqejJcdPjLbmvGF1Joh', '2017-02-02 15:41:37', '2017-02-02 16:15:51'),
(3, 'SEMNASTI', 'semnasti.hmti@gmail.com', 'd9ded975580508322dac978d38ff338f', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'izul', 'mohamadfarizulrizki@gmail.com', '9336339511292fcd57ad9514ad53e473', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
