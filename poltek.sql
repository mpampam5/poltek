-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Mei 2018 pada 19.18
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `m-crudniter`
--
CREATE DATABASE IF NOT EXISTS `m-crudniter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `m-crudniter`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `agenda` varchar(255) DEFAULT NULL,
  `desc` text,
  `date` date DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `agenda`, `desc`, `date`, `slug`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(2, 'makan pagi', '<p>dsadsa</p>', '2018-04-12', 'makan-pagi', 1, '2018-04-18 01:14:05', NULL, NULL),
(3, 'Pertemuan majelis taklim indonesia dsadas', '<p>dsadsasaddsadawcdwd dsadsasadasd</p>', '2018-04-23', 'pertemuan-majelis-taklim-indonesia-dsadas', 1, '2018-04-18 01:15:29', 2, '2018-04-23 03:33:01'),
(4, 'dsadas', '<p>dasdas</p>', '2018-04-20', 'dsadas', 1, '2018-04-18 01:16:05', NULL, NULL),
(7, 'Ceramah ust.abdul', '<p>\r\n\r\nPria selingkuh karena istri tidak cantik ada??? banyak...pdhl bikin cantik aja istrinya..<br>Istri dibikin cantik sm suami trus selingkuh..yg gini ada???\r\n\r\n</p>', '2018-04-23', 'ceramah-ustabdul', 2, '2018-04-23 03:28:47', NULL, NULL),
(8, 'Makan Bakso', '<p>Makan Bakso</p>', '2018-04-25', 'makan-bakso', 1, '2018-04-25 02:11:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `album` varchar(255) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id_album`, `album`, `desc`) VALUES
(6, 'Peluncuran dan Peresmian Kapal Kegiatan Wirausaha Muda Program Studi Perikanan Tangkap Oleh Bapak Direktur Politeknik KP Bone.', ''),
(7, 'Politeknik KP Bone 24 April pukul 19:33 ·  Penyerahan SK Fungsional Dosen kepada Bapak/Ibu Calon Dosen Oleh Bapak Direktur Politeknik KP Bone', ''),
(8, 'Hari Ke Dua Seminar PKL 1 Taruna Remaja Politeknik KP Bone Program Studi Budidaya Ikan, Teknologi Kelautan.', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id_auth` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `groups` int(11) DEFAULT NULL,
  `active` enum('0','1') NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_auth`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id_auth`, `name`, `telepon`, `image`, `email`, `password`, `groups`, `active`, `created_by`, `update_by`, `created_at`, `update_at`) VALUES
(1, 'mpampam', '', 'logo68x69.png', 'superadmin@mail.com', '$2y$10$Ug/q.me0MEtY.K0R/LJnducfo3xrBxSsqTdW1Vv7iChfQXgBIdS.2', 36, '1', NULL, 1, '2018-03-20 11:22:17', '2018-04-02 01:57:17'),
(2, 'admin', '', 'logo68x69.png', 'admin@mail.com', '$2y$10$jw8itFTr8zTNFBU7jtBCaePnMZASxvSjtlYNWjfYYx.wNHsBGh3X2', 37, '1', NULL, 1, NULL, '2018-05-01 07:05:09'),
(3, 'Operator', '', '', 'operator@mail.com', '$2y$10$MNSBYmKpadexVNFennNN0uEdkWXa6wDV67gCkVnm0cX6q6EGzihQy', 38, '1', 1, NULL, '2018-04-07 03:30:59', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_sess`
--

CREATE TABLE IF NOT EXISTS `auth_sess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_auth` int(11) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data untuk tabel `auth_sess`
--

INSERT INTO `auth_sess` (`id`, `id_auth`, `ip_address`, `user_agent`, `country`, `city`, `date`) VALUES
(1, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-28 09:56:44'),
(2, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-29 08:20:31'),
(3, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', NULL, NULL, '2018-03-29 02:00:30'),
(4, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', NULL, NULL, '2018-03-29 02:00:53'),
(5, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', NULL, NULL, '2018-03-29 02:01:08'),
(6, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', NULL, NULL, '2018-03-29 02:04:46'),
(7, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-29 02:05:51'),
(8, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 06:32:52'),
(9, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 03:50:41'),
(10, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 05:02:17'),
(11, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 05:10:13'),
(12, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 05:17:22'),
(13, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 05:17:52'),
(14, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 05:18:47'),
(15, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 06:33:15'),
(16, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 06:37:41'),
(17, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-03-31 06:38:09'),
(18, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-01 10:43:22'),
(19, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-01 10:49:08'),
(20, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-01 10:58:17'),
(21, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-01 02:47:30'),
(22, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-02 12:16:15'),
(23, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-02 09:19:24'),
(24, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-02 12:15:08'),
(25, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-02 01:54:42'),
(26, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-02 01:57:49'),
(27, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-02 02:03:17'),
(28, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-02 08:06:49'),
(29, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-02 08:07:58'),
(30, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-03 03:16:12'),
(31, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-03 03:38:08'),
(32, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-03 03:58:48'),
(33, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-03 04:09:51'),
(34, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-03 04:37:31'),
(35, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-03 04:46:02'),
(36, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-07 03:22:56'),
(37, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-07 03:23:17'),
(38, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-07 03:31:28'),
(39, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-07 03:32:21'),
(40, 3, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-07 03:32:59'),
(41, 3, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-07 03:33:50'),
(42, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-07 03:34:12'),
(43, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-07 05:41:23'),
(44, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-09 05:16:21'),
(45, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-10 07:48:49'),
(46, 1, '192.168.43.52', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi Note 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '', '', '2018-04-10 11:42:05'),
(47, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-10 07:06:46'),
(48, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-11 11:22:13'),
(49, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-11 12:04:45'),
(50, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-11 06:20:37'),
(51, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-15 07:04:52'),
(52, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-17 11:43:10'),
(53, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-18 05:03:15'),
(54, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-18 11:53:39'),
(55, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-20 01:12:43'),
(56, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-21 12:00:46'),
(57, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-21 05:31:26'),
(58, 3, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-21 05:32:19'),
(59, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-21 05:32:30'),
(60, 3, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '2018-04-21 05:34:11'),
(61, 3, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-22 12:36:15'),
(62, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-22 12:36:27'),
(63, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-23 10:37:41'),
(64, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-23 01:31:53'),
(65, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-23 09:30:57'),
(66, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-24 02:47:27'),
(67, 2, '192.168.43.1', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi Note 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '', '', '2018-04-24 05:23:46'),
(68, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-24 05:25:36'),
(69, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-24 07:39:46'),
(70, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-24 08:12:17'),
(71, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-25 02:10:15'),
(72, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-25 06:17:22'),
(73, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-26 09:11:24'),
(74, 1, '192.168.43.1', 'Mozilla/5.0 (Linux; Android 6.0.1; SM-G532G Build/MMB29T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '', '', '2018-04-26 03:49:43'),
(75, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-26 11:38:49'),
(76, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-28 05:26:14'),
(77, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-29 02:11:40'),
(78, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-29 04:28:58'),
(79, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '', '', '2018-04-30 08:18:59'),
(80, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-01 05:26:19'),
(81, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-01 07:04:41'),
(82, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-01 02:22:07'),
(83, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-02 07:35:48'),
(84, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-03 12:28:59'),
(85, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-03 07:40:03'),
(86, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-04 05:05:23'),
(87, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-04 05:09:37'),
(88, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-05 12:48:24'),
(89, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-05 12:48:34'),
(90, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-05 01:19:55'),
(91, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-05 01:20:46'),
(92, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-05 01:21:04'),
(93, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-05 01:21:25'),
(94, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-05 01:23:08'),
(95, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-05 02:54:08'),
(96, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-06 12:43:29'),
(97, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-06 09:16:14'),
(98, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-07 06:11:43'),
(99, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-07 10:31:11'),
(100, 2, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-07 10:54:20'),
(101, 2, '192.168.43.1', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi Note 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '', '', '2018-05-07 11:05:30'),
(102, 2, '192.168.43.1', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi Note 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '', '', '2018-05-07 11:06:17'),
(103, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', '', '2018-05-07 11:09:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `image`, `desc`) VALUES
(1, 'banner2.jpg', 'MENJUNGJUNG TINGGI KESEJAHTERAAN DAN ILMU PENGETAHUAN'),
(2, 'banner1.jpg', 'SELAMAT DATANG DI WEBSITE RESMI POLITEKNIK KELAUTAN DAN PERIKANAN BONE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `desc` text,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `komentar` enum('0','1') DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `desc`, `image`, `slug`, `hits`, `komentar`, `created_by`, `update_by`, `created_at`, `update_at`) VALUES
(7, 2, 'Codeigniter CRUD Generator is a simple tool to auto generate model, controller and view from your table. This tool will', '<p>Politeknik KP Sidoarjo melakukan koordinasi dengan I-PLAN (Indonesian Postharvest Loss Alliance for Nutrition) untuk mendapatkan gambaran awal penanganan ikan segar yang telah dilakukan sehingga bisa diterapkan dalam program IPLAN GAIN sebagai tindak lanjut MoU yang telah dilakukan Kementerian Kesehatan RI dengan I-PLAN dalam program perbaikan gizi masyarakat 2017-2020. Rapat koordinasi dilakukan oleh Direktur Politeknik KP Sidoarjo beserta unsur pimpinan terkait dengan Senior Project Manager IPLAN GAIN Indonesia dan tenaga ahli pasca panen dari Gain Washington dalam inovasi penanganan ikan segar dari TPI, transport hingga pasar ikan. </p>\r\n<p><img src="http://localhost/poltek/temp/upload/img/50141d1.jpg" alt="" width="100%" height="100%" /></p>', 'e7c9ab.jpg', 'codeigniter-crud-generator-is-a-simple-tool-to-auto-generate-model-controller-and-view-from-your-table-this-tool-will', 23, '1', 1, 1, '2018-04-10 07:52:25', '2018-05-07 10:45:19'),
(19, 2, 'Peluncuran dan Peresmian Kapal Kegiatan Wirausaha Muda Program Studi Perikanan Tangkap Oleh Bapak Direktur Politeknik KP Bone.', '<p><img src="http://localhost/poltek/temp/upload/img/Hydrangeas_1.jpg" alt="" width="487" height="366" /></p>\r\n<p>After success of the 2017 Summer Course on Ecosystem-based Disaster Risk Reduction in Yogyakarta Indonesia, this year, we are happy to invite your students to participate in the <strong>2018 Summer Course on Ecosystem-based Disaster Risk Reduction</strong> that will take place at the Faculty of Geography, Universitas Gadjah Mada, Yogyakarta, Indonesia, from July 29 to August 10, 2018.</p>\r\n<p> </p>\r\n<p><strong>THE FOCUS</strong></p>\r\n<p> </p>\r\n<p>Eco-DRR (Ecosystem-based Disaster Risk Reduction) is defined as sustainable management, conservation, and ecosystem restoration in reducing disaster risk whose main purpose is to achieve sustainable development and resilience.</p>\r\n<p> </p>\r\n<p>The 2018 Summer Course on Eco-DRR consists of in-class component and field component, held in Yogyakarta and surroundings. The activities are designed for not only understanding Eco-DRR praxis, but also promoting cultures of Indonesia, especially Yogyakarta. Yogyakarta has unique physical condition as well as cultural treasures. Covering about 3000 square kilometers area, Yogyakarta is configured by volcanic process in the Northern part, denudational process in the Western part, solutional process in the Southeastern part, marine process along the Southern part, fluvial process in the middle and structural process in the Southern and Southeastern part. The physical condition induces several different natural hazards in some specific areas, beside form heterogeneous ecosystems. The cultural wealth of Yogyakarta establishes a strong social capital of communities, which has an important role in ecosystem management, related disaster risk reduction.</p>\r\n<p> </p>', 'a6df44.jpg', 'peluncuran-dan-peresmian-kapal-kegiatan-wirausaha-muda-program-studi-perikanan-tangkap-oleh-bapak-direktur-politeknik-kp-bone', 3, '0', 1, 1, '2018-04-15 11:34:05', '2018-04-29 05:43:19'),
(20, 6, 'Tutorial CodeIgniter : Membuat Helper Untuk Format Tanggal Indonesia di CodeIgniter', '<p>Manajemen adalah proses perencanaan, pengorganisasi, pengkoordinasian, dan pengontrolan sumber daya untuk mencapai sasaran secara efektif dan efisien. Efektif berarti tujuan dapat dicapai sesuai dengan perencanaan, sedangkan efisien berarti tugas yang dilaksanakan secara benar, terorganisir dan sesuai dengan waktu yang telah ditentukan.</p>\r\n<p>Ilmu manajemen menjadi hal yang sangat penting dalam pengelolaan research center. Dengan penerapan ilmu manajemen yang terpat, diharapkan research center ini dituntut tidak hanya mengelola kegiatan skala nasional namun sampai skala internasional. Dalam konteks ini, lembaga penelitian dan konsultasi, terutama yang berada di lingkungan universitas memiliki keunikan dalam pengelolaannya. Sebagai lembaga penelitian dan konsultasi di lingkungan akademik, dituntut untuk melakukan inovasi dan langkah-langkah pengembangan konsep-konsep ilmiah menjadi kenyataan di lapangan dengan sistem yang berkelanjutan.</p>\r\n<p>Dalam mengelola suatu lembaga penelitian tidaklah mudah, diperlukan SDM yang kuat. Dalam menjalankan kegiatan di lembaga ini, SDM sebagai pendukung utama diharapkan memiliki kompetensi yang memadai. Dari sisi content, dibutuhkan para konsultan ahli/tenaga ahli yang relevan. Salah satu strategi yang dapat dilakukan dengan mengembangkan sistem kemitraan dengan narasumber / konsultan ahli yang berstatus part-time. Tenaga ahli ini bisa terdiri dari para praktisi (Dinas Kesehatan, Rumah Sakit dan Klinisi) dan dosen-dosen di lingkungan universitas (Departemen HPM, Fakultas Kedokteran Kesehatan Masyarakat dan Keperawatan, Fakultas Kedokteran Gigi, Fakultas Farmasi, Fakultas Ekonomi, Fakultas Hukum, dll). Sedangkan dari sisi manajemen, dibutuhkan SDM sebagai tenaga pendukung (supporting staff) untuk dapat mengelola manajemen lembaga secara efektif dan efisiensi.</p>\r\n<p>Dalam kegiatannya lembaga penelitian harus memahami dinamika lingkungan yang sering berubah. Kebijakan penelitian pemerintah, trend topik penelitian, ketersediaan sumber dana dari pemerintah pusat dan daerah, donor agencies dari luar negeri, badan-badan multilateral, sampai ke filantropis perlu diperhatikan. Tanpa pemahaman jelas mengenai keadaan eksternal lembaga penelitian, akan terjadi kesulitan untuk pengembangan. Disamping itu dukungan dari struktur perguruan tinggi seperti dari kantor rektorat dan dekanat perlu diadakan.</p>\r\n<p>Dengan melihat kompleksitas lembaga penelitian, berbagai pihak di UGM sepakat untuk mengembangkan Forum Nasional yang secara rutin dapat diselenggarakan untuk pengelolaan lembaga penelitian. Tahun 2018 ini merupakan kegiatan yang kedua kali dilakukan dalam bentuk seminar dengan topik: Kepemimpinan dan Penguatan Manajemen Lembaga Penelitian di Perguruan Tinggi.</p>', '', 'tutorial-codeigniter-membuat-helper-untuk-format-tanggal-indonesia-di-codeigniter', 16, '0', 1, 1, '2018-04-16 04:40:46', '2018-04-27 12:24:13'),
(21, 2, 'Helper CodeIgniter untuk Membuat Tanggal dalam Bahasa Indonesia', '<div class="post-content">\r\n<p>Novi Widyaningrum, SIP., MA, penelitui Pusat Studi Kependudukan dan Kebijakan UGM, mengatakan dalam menghadapi daya saing, Indonesia saat ini masih menghadapi kendala kapasitas sumber daya manusia. Kapasitas sumber daya manusia Indonesia dinilai lemah dari aspek pendidikan dan kesehatan.<br /><br />Sementara daya saing lebih besar terlihat pada peluang ekonomi. Hal tersebut merujuk ketersediaan lebih besar pada infrastruktur, market size, bussiness sophistication, innovation, market economic environment.<br /><br />"Jadi, ada di aspek-aspek ekonomi yang sudah diintervensi. Dari literatur bacaan maka infrastruktur, pendidikan dan kesehatan di Indonesia sebenarnya kalah 100 tahun dari negara-negara maju," ujarnya di Auditorium Agus Dwiyanto, Gedung Masri Singarimbun, PSKK UGM, Kamis (26/4) pada Seminar Kontribusi Akademisi Dalam Pembangunan Berwawasan Kependudukan. <br /><br />Soal daya saing, Novi mengakui memang ada kenaikan ranking di tahun 2017/ 2018 dari ranking 41 naik ranking 36. Meski begitu, jika dibandingkan dengan negara-negara sekitar, terutama Asean, posisi Indonesia masih jauh dari harapan. <br /><br />Data Global Competitiveness Index (GCI) tahun 2017/ 2018 menyebutkan Thailand menempati ranking 32. Sedangkan Malaysia menempati pada posisi 23 dari 136 negara. <br /><br />"Kita sudah tidak bisa mengelak lagi bahwa paling tinggi di Asean adalah Singapura, indeks daya saingnya di posisi 3 pada tahun 2017/ 2018," katanya.<br /><br />Menurut Novi, Indonesia bisa membus hingga ranking 36 karena faktor-faktor infrastruktur. Menurutnya, ada tiga pilar yang meningkat secara signifikan, yaitu infrastruktur, efisiensi birokrasi dan korupsi.<br /><br />"Tetapi dari aspek sumber daya manusia, ternyata di Indonesia masih lemah sekali, masih ranking 94. Ini mestinya yang menjadi poin pemerintah untuk memacu sumber daya manusia," tuturnya. (Humas UGM/ Agung)<br /><br /></p>\r\n</div>\r\n<ul id="yw1" class="share-box">\r\n<li></li>\r\n<li></li>\r\n<li></li>\r\n</ul>', 'ffb1a11.jpg', 'helper-codeigniter-untuk-membuat-tanggal-dalam-bahasa-indonesia', 44, '1', 1, 1, '2018-04-16 05:41:24', '2018-05-07 06:21:03'),
(22, 2, 'dsadsaasd', 'dsadsa', '', 'adsadsadsasda', 6, '0', NULL, NULL, '2018-05-07 21:46:00', NULL),
(23, 2, 'dssdaasdsda', '<p>dsasddas</p>', '', 'dssdaasdsda', NULL, '1', 1, NULL, '2018-05-07 10:32:33', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `btn_app`
--

CREATE TABLE IF NOT EXISTS `btn_app` (
  `id_btn` int(11) NOT NULL AUTO_INCREMENT,
  `btn_name` varchar(255) DEFAULT NULL,
  `btn_url` varchar(255) DEFAULT NULL,
  `btn_icon` varchar(255) DEFAULT NULL,
  `bg_color` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_btn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `btn_app`
--

INSERT INTO `btn_app` (`id_btn`, `btn_name`, `btn_url`, `btn_icon`, `bg_color`) VALUES
(4, 'Pendaftaran Mahasiswa Baru', '#', 'fa fa-home', '#0173f9'),
(5, 'Sistem Informasi Akademik', '#', 'fa fa-graduation-cap', '#02b735');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` int(11) DEFAULT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` text,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=957 ;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_pegawai`, `id_prodi`, `nidn`, `nama`, `image`, `desc`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(1, 2, '1111111', 'Prof. Andalangdsdsasdasdasdasd dsadas', '', NULL, 1, '2018-04-03 01:49:09', 1, '2018-04-20 03:15:20'),
(2, 4, '1223455', 'Prof. Dr. Muhammad Irfan Ibnu M.kom', '', NULL, 2, '2018-04-18 02:03:05', 1, '2018-04-20 03:08:35'),
(3, 2, '123456', 'sss', '', NULL, 1, '2018-04-21 12:21:14', NULL, NULL),
(4, 4, '1234', 'Irmawati', '', NULL, 1, '2018-04-21 12:25:28', 1, '2018-04-21 12:30:58'),
(5, 2, '21321', 'dsadsa', '', NULL, 1, '2018-04-21 12:29:40', 1, '2018-04-21 12:31:37'),
(6, 2, '111', 'dsadsa', '', NULL, 1, '2018-04-21 12:31:59', NULL, NULL),
(7, 4, '11231', 'Example-1', NULL, NULL, 1, '2018-04-21 12:53:02', NULL, NULL),
(8, 4, '11232', 'Example-2', NULL, NULL, 1, '2018-04-21 12:53:02', NULL, NULL),
(9, 4, '11233', 'Example-3', NULL, NULL, 1, '2018-04-21 12:53:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery_image`
--

CREATE TABLE IF NOT EXISTS `galery_image` (
  `id_galery_image` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_galery_image`),
  KEY `id_album` (`id_album`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `galery_image`
--

INSERT INTO `galery_image` (`id_galery_image`, `id_album`, `image`, `token`) VALUES
(10, 6, 'd0cb72.jpg', '0.3442197970996246'),
(11, 6, 'd0cb721.jpg', '0.11914165188347559'),
(12, 6, 'ada6c0.jpg', '0.0700994510129358'),
(13, 6, '2cf4a0.jpg', '0.6590924805812095'),
(14, 6, '09e075.jpg', '0.6154191486218086'),
(15, 6, '09e0751.jpg', '0.05569232658765788'),
(16, 6, 'a6df44.jpg', '0.07373066495376857'),
(17, 6, 'b7d77b.jpg', '0.6712456039367884'),
(18, 6, '6c6140.jpg', '0.457843739634622'),
(19, 6, '6c61401.jpg', '0.7541264388095192'),
(20, 6, '30eedf.jpg', '0.22998548124727636'),
(21, 7, 'ffb1a1.jpg', '0.8115746887622255'),
(22, 7, 'ffb1a11.jpg', '0.7906404791837969'),
(23, 7, '7e90be.jpg', '0.1661616191041746'),
(24, 7, 'e7c9ab.jpg', '0.7839116359624199'),
(25, 7, '4176ee.jpg', '0.5093058214805803'),
(26, 7, '4176ee1.jpg', '0.25496750879150976'),
(27, 7, 'a68afa.jpg', '0.46782383579202547'),
(28, 7, 'a68afa1.jpg', '0.32884978617356264'),
(29, 8, 'f4e6f8.jpg', '0.036869890612283074'),
(30, 8, 'f4e6f81.jpg', '0.09481707271868545'),
(31, 8, '06aaef.jpg', '0.6488395133555125'),
(32, 8, '87006f.jpg', '0.8675318461401598'),
(33, 8, '87006f1.jpg', '0.7520341514316062'),
(34, 8, 'acfd39.jpg', '0.14576760012377732');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `access` text,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id_level`, `level`, `description`, `access`, `created_by`, `update_by`, `created_at`, `update_at`) VALUES
(36, 'superadmin', 'Akses Semua Modul', '["33","1","2","6","9","8","25","12","15","18","20","19","27","28","29","16","17","26","31","3","4","5","21","22","23","24","32","30"]', 1, 1, '2018-03-25 10:16:10', '2018-05-03 08:44:08'),
(37, 'admin', '-', '["1","6","9","8","25","12","15","18","20","19","27","28","29","16","17","26","31","3","5","21","22","23","24","32","30"]', 1, 1, '2018-03-25 10:17:13', '2018-05-05 01:22:45'),
(38, 'operator', '', '["1","6","9","8","25","12","15","27","28","29","16","17","26","24"]', 1, 1, '2018-04-07 03:29:41', '2018-04-21 05:33:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
  `id_halaman` int(11) NOT NULL AUTO_INCREMENT,
  `halaman` varchar(255) DEFAULT NULL,
  `desc` text,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_halaman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `halaman`, `desc`, `image`, `slug`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(1, 'visi dan misi', '<div class="post-content">\r\n<p><strong>Visi :</strong></p>\r\n<p>Menjadikan Politeknik Kelautan dan Perikanan Sidoarjo sebagai politeknik yang berdaya saing terbaik 10 besar di Indonesia pada Tahun 2029</p>\r\n<p><strong>Misi:</strong></p>\r\n<ol>\r\n<li>Meningkatkan pendidikan dosen setara S3 sebanyak 50% pada tahun 2024</li>\r\n<li>Meningkatkan dosen dengan jabatan lektor kepala sebanyak 75% pada tahun 2024</li>\r\n<li>Meningkatkan jumlah dosen dengan bidang yang sesuai/linier dengan program studi sebesar 100% pada tahun 2024</li>\r\n<li>Menjadikan akreditasi seluruh Program Studi dengan predikat A pada tahun 2022</li>\r\n<li>Menjadikan akreditasi Institusi dengan predikat A pada tahun 2024</li>\r\n<li>Meningkatkan jumlah taruna/mahasiswa asing sebanyak 5% pada tahun 2024</li>\r\n<li>Meningkatkan peran serta taruna/mahasiswa dalam event nasional dan internasional </li>\r\n<li>Meningkatkan kinerja penelitian terapan dengan adanya artikel ilmiah dalam publikasi nasional terakreditasi dan internasional bereputasi terindek scopus sebanyak 6 publikasi untuk setiap dosen sampai tahun 2029</li>\r\n<li>Meningkatkan kegiatan pengabdian kepada masyarakat melalui penerapan hasil-hasil penelitian terapan sebanyak 6 paket per tahun</li>\r\n<li>Meningkatkan bimbingan teknis kepada masyarakat sebanyak 10 paket untuk 5 (lima) Program Studi setiap tahunnya</li>\r\n<li>Lulusan Politeknik Kelautan dan Perikanan Sidoarjo terserap 90% di dunia Industri/Usaha pada tahun 2024</li>\r\n<li>Menyusun sistem administrasi sesuai standar manajemen mutu ISO 9001:2015 pada tahun 2018</li>\r\n<li>Menjalankan kebijakan dan tugas-tugas Menteri Kelautan dan Perikanan, Badan Riset dan SDM Kelautan dan Perikanan</li>\r\n<li>Membangun kerjasama dalam bentuk kemitraan dengan semua stakeholder dalam bidang pendidikan, penelitian dan pengabdian kepada masyarakat.</li>\r\n</ol>\r\n</div>', '', 'visi-dan-misi', 1, '2018-04-11 12:16:19', 1, '2018-05-02 01:56:57'),
(2, 'Profile', '<div class="post-content">\r\n<p [removed]="text-align: justify;">"Mereka para calon mahasiswa yang diterima ini, berhasil masuk UGM setelah rekam jejak prestasi akademiknya unggul bersaing dengan 37.447 peserta SNMPTN yang mendaftar di UGM," papar Wakil Rektor Bidang Pendidikan, Pengajaran dan Kemahasiswaan (PPK), Prof. Dr. Ir. Djagal Wiseso Marseno, M.Agr., Selasa (17/4).</p>\r\n<p [removed]="text-align: justify;">Setelah ?dinyatakan diterima di UGM, kata Djagal, calon mahasiswa harus mengisi biodata  melalui laman um.ugm.ac.id.dan mengunggah dokumen yang disyaratkan pada 19 April 2018 mulai jam 10.00 WIB sampai dengan 24 April 2018 jam 10.00 WIB. Djagal mengimbau kepada calon mahasiswa untuk mempersiapkan dokumen yang akan diunggah seawal mungkin supaya dapat menyelesaikan pengisian biodata dengan baik pada waktu yang telah ditentukan.</p>\r\n<p [removed]="text-align: justify;">Calon mahasiswa yang tidak mengunggah data sampai dengan 24 April 2018 jam 10.00 WIB dianggap melepaskan haknya sebagai mahasiswa UGM di Tahun Akademik 2018/2019. (Humas UGM/Satria)</p>\r\n</div>', '', 'profile', 1, '2018-04-18 05:41:22', 1, '2018-04-19 01:27:46'),
(6, 'fasilitas', '<p>Gedung Auditorium Politeknik Kelautan dan Perikanan Bone adalah gedung serba guna yang digunakan sebagai tempat seminar, temu ilmiah, kuliah umum dan berbagai kegiatan lembaga.</p>\r\n<p>gedung ini telah dirancang dengan baik untuk dapat menampung 300 orang dan juga dilengkapi fasilitas multimedia dan audio visual.</p>', '', 'fasilitas', 1, '2018-05-02 02:29:07', 1, '2018-05-02 02:33:46'),
(7, 'sambutan', '<p>mlsmlsmls sml;sml;s</p>', '', 'sambutan', 1, '2018-05-03 07:41:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `slug`) VALUES
(2, 'Pemerintah', 'pemerintah'),
(6, 'kampus ku', 'kampus-ku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `desc` text,
  `read` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `email`, `desc`, `read`, `created_at`, `ip_address`) VALUES
(1, 'mpampam5@gmail.com', 'Tolong Infonya di perjelas lagi', '1', '2018-04-24 15:40:28', NULL),
(2, 'abdul@mail.com', 'Kapan ada acaranya?', '1', '2018-04-24 03:56:17', NULL),
(3, 'superadmin@mail.com', 'fdsfsd', '1', '2018-05-07 03:08:46', '::1'),
(4, 'operator@mail.com', 'dsaasd', '1', '2018-05-07 03:10:49', '::1'),
(5, 'mpampam5@gmail.com', 'dsa', '1', '2018-05-07 03:14:40', '::1'),
(6, 'superadmin@mail.com', 'dsadsa', '1', '2018-05-07 03:17:13', '::1'),
(7, 'superadmin@mail.com', 'fdsfdfds', '1', '2018-05-07 03:18:23', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `linkterkait`
--

CREATE TABLE IF NOT EXISTS `linkterkait` (
  `id_link` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_link`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `linkterkait`
--

INSERT INTO `linkterkait` (`id_link`, `nama`, `url`) VALUES
(1, 'Forlap Dikti', 'https://forlap.ristekdikti.go.id/'),
(2, 'Politeknik KP', 'https://forlap.ristekdikti.go.id/'),
(3, 'kabupaten bone', 'https://ugm.ac.id/id/pendidikan'),
(4, 'Kementrian Kelautan Dan Perikanan', '#');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `description` text,
  `is_active` int(11) NOT NULL,
  `is_parent` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `icon`, `description`, `is_active`, `is_parent`, `sort`) VALUES
(1, 'Beranda', 'home', 'fa fa-home', 'esa', 1, 0, 1),
(2, 'Menu Admin', 'menus', 'fa fa-list', '', 1, 0, 17),
(3, 'Manajemen Admin', '#', 'fa fa-user', '', 1, 0, 19),
(4, 'Groups', 'groups', 'fa fa-circle-o', '', 1, 3, 20),
(5, 'Pengguna', 'pengguna', 'fa fa-circle-o', '', 1, 3, 21),
(6, 'Berita', '#', 'fa fa-file-text-o', '', 1, 0, 2),
(8, 'Kategori', 'kategori', 'fa fa-file-text-o', '', 1, 6, 4),
(9, 'berita', 'berita', 'fa fa-file-text-o', '', 1, 6, 3),
(12, 'agenda', 'agenda', 'fa fa-calendar', '', 1, 25, 6),
(15, 'Pengumuman', 'pengumuman', 'fa fa-bullhorn', '', 1, 25, 7),
(16, 'Referensi', '#', 'fa fa-folder-o', '', 1, 0, 14),
(17, 'Data Dosen', 'dosen', 'fa fa-graduation-cap', '', 1, 16, 15),
(18, 'Halaman', '#', 'fa fa-newspaper-o ', '', 1, 0, 8),
(19, 'Tambah halaman', 'halaman/tambah', 'fa fa-newspaper-o ', '', 1, 18, 10),
(20, 'Semua halaman', 'halaman', 'fa fa-newspaper-o ', '', 1, 18, 9),
(21, 'Pengaturan', '#', 'fa fa-cogs', '', 1, 0, 22),
(22, 'Profile', 'profile', 'fa fa-cogs', '', 1, 21, 23),
(23, 'Gambar Slide', 'banner', 'fa fa-cogs', '', 1, 21, 24),
(24, 'Link Terkait', 'linkterkait', 'fa fa-cogs', '', 1, 21, 25),
(25, 'Informasi', '#', 'fa fa-info-circle', 'informasi', 1, 0, 5),
(26, 'program studi', 'prodi', 'fa fa-university', '', 1, 16, 16),
(27, 'Media', '#', 'fa fa-file', '', 1, 0, 11),
(28, 'Galeri Video', 'video', 'fa fa-file-movie-o', '', 1, 27, 12),
(29, 'Galeri Foto', 'album', 'fa fa-file-image-o', '', 1, 27, 13),
(30, 'Kontak', 'kontak', 'fa fa-envelope', '', 1, 0, 27),
(31, 'Manajemen Menu', 'pmenu/index', 'fa fa-list', '', 1, 0, 18),
(32, 'tombol Aplikasi terkait', 'btn_app', 'fa fa-leaf', '', 1, 21, 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus_public`
--

CREATE TABLE IF NOT EXISTS `menus_public` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `posisi` enum('header_top','header','footer') NOT NULL DEFAULT 'header_top',
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `menus_public`
--

INSERT INTO `menus_public` (`id_menu`, `menu`, `url`, `active`, `parent`, `posisi`, `sort`) VALUES
(3, 'informasi', '#', 1, 0, 'header', 9),
(4, 'pengumuman', 'pengumuman', 1, 3, 'header', 12),
(5, 'agenda', 'agenda', 1, 3, 'header', 11),
(11, 'Translate', '#', 1, 0, 'header_top', 3),
(12, 'indonesian', 'index', 1, 11, 'header_top', 4),
(13, 'english', 'berita/detail/21/helper-codeigniter-untuk-membuat-tanggal-dalam-bahasa-indonesia', 1, 11, 'header_top', 5),
(14, 'ini footer', '#', 1, 0, 'footer', 2),
(15, 'dsa', 'dsadas', 1, 0, 'footer', 1),
(16, 'dfsa', 'sda', 1, 0, 'footer', 3),
(17, 'Kontak', 'kontak', 1, 0, 'header_top', 2),
(18, 'Profile', 'page/profile', 1, 0, 'header', 1),
(19, 'Sambutan Rektor', 'sambutan', 1, 18, 'header', 4),
(20, 'Sejarah Kampus', 'page/jangan-sombong-dan', 1, 18, 'header', 3),
(21, 'Visi & Misi', 'page/visi-dan-misi', 1, 18, 'header', 2),
(22, 'Program Studi', '#', 1, 0, 'header', 5),
(23, 'Teknik Penangkapan Ikan', 'prodi/teknik-penangkapan-ikan', 1, 22, 'header', 8),
(24, 'Teknik Kelautan', 'prodi/teknik-kelautan', 1, 22, 'header', 7),
(25, 'Teknik Budidaya Perikanan', 'prodi/teknik-budidaya-perikanan', 1, 22, 'header', 6),
(26, 'Fasilitas', 'page/fasilitas', 1, 0, 'header', 14),
(27, 'Berita', 'berita', 1, 0, 'header_top', 1),
(28, 'Berita', 'berita', 1, 3, 'header', 10),
(29, 'kontak', 'kontak', 1, 0, 'header', 19),
(30, 'Data Dosen', 'dosen', 1, 0, 'header', 13),
(32, 'Media', '#', 1, 0, 'header', 16),
(33, 'Foto', 'album', 1, 32, 'header', 18),
(34, 'video', 'video', 1, 32, 'header', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `pengumuman` varchar(255) DEFAULT NULL,
  `desc` text,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `pengumuman`, `desc`, `image`, `slug`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(1, 'Pengurusan Kartu rencana study tahun ajaran 2007-2008', '<p> </p>\r\n<p>Menjadikan Politeknik Kelautan dan Perikanan Sidoarjo sebagai politeknik yang berdaya saing terbaik 10 besar di Indonesia pada Tahun 2029</p>\r\n<p><strong>Misi:</strong></p>\r\n<ol>\r\n<li>Meningkatkan pendidikan dosen setara S3 sebanyak 50% pada tahun 2024</li>\r\n<li>Meningkatkan dosen dengan jabatan lektor kepala sebanyak 75% pada tahun 2024</li>\r\n<li>Meningkatkan jumlah dosen dengan bidang yang sesuai/linier dengan program studi sebesar 100% pada tahun 2024</li>\r\n<li>Menjadikan akreditasi seluruh Program Studi dengan predikat A pada tahun 2022</li>\r\n<li>Menjadikan akreditasi Institusi dengan predikat A pada tahun 2024</li>\r\n<li>Meningkatkan jumlah taruna/mahasiswa asing sebanyak 5% pada tahun 2024</li>\r\n<li>Meningkatkan peran serta taruna/mahasiswa dalam event nasional dan internasional</li>\r\n<li>Meningkatkan kinerja penelitian terapan dengan adanya artikel ilmiah dalam publikasi nasional terakreditasi dan internasional bereputasi terindek scopus sebanyak 6 publikasi untuk setiap dosen sampai tahun 2029.</li>\r\n<li>Meningkatkan kegiatan pengabdian kepada masyarakat melalui penerapan hasil-hasil penelitian terapan sebanyak 6 paket per tahun</li>\r\n<li>Meningkatkan bimbingan teknis kepada masyarakat sebanyak 10 paket untuk 5 (lima) Program Studi setiap tahunnya</li>\r\n<li>Lulusan Politeknik Kelautan dan Perikanan Sidoarjo terserap 90% di dunia Industri/Usaha pada tahun 2024</li>\r\n<li>Menyusun sistem administrasi sesuai standar manajemen mutu ISO 9001:2015 pada tahun 2018</li>\r\n<li><img src="http://localhost/poltek/temp/upload/img/images (1).jpg" alt="" width="367" height="401" /></li>\r\n<li>Menjalankan kebijakan dan tugas-tugas Menteri Kelautan dan Perikanan, Badan Riset dan SDM Kelautan dan Perikanan</li>\r\n<li>Membangun kerjasama dalam bentuk kemitraan dengan semua stakeholder dalam bidang pendidikan, penelitian dan pengabdian kepada masyarakat.</li>\r\n</ol>\r\n<p> </p>', '2cf4a0.jpg', 'pengurusan-kartu-rencana-study-tahun-ajaran-2007-2008', 1, '2018-04-10 09:59:30', 1, '2018-05-02 09:34:54'),
(2, 'Waktu Final', '<p>fd</p>', '', 'waktu-final', 1, '2018-05-02 08:15:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(255) DEFAULT NULL,
  `desc` text,
  `slug` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `prodi`, `desc`, `slug`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(2, 'Teknik Budidaya Perikanan', '<p [removed]="text-align: justify;"><strong>Visi</strong><br />“ Menjadi Program Studi terkemuka dan unggul dalam menyelenggarakan pendidikan vokasi untuk menghasilkan sumberdaya manusia yang kompeten, berkarakter, Unggul dan berdaya saing dalam bidang budidaya perikanan “</p>\r\n<p [removed]="text-align: justify;">Program Studi Teknik Budidaya Perikanan menerapkan Pendidikan Vokasi Berbasis Teaching Factory (30 % Teori dan 70 % Praktek), dengan lama pendidikan 3 Tahun (6 Semester), menerapkan Kurikulum Pendidikan Berbasis Kompetensi (KBK), Menerapkan Pembelajaran dengan sistem BLOK (BULAT, UTUH, dan TUNTAS), dan Menerapkan Sistem Gugur Pada Setiap Semester Berdasarkan Nilai Akademik dan Nilai Kepribadian. Fasilitas pendidikan Program Studi Teknik Budidaya Perikanan yaitu ruang Kelas ( dilengkapi dengan PC Komputer, LCD dan Layar LCD), Laboratorium Kualitas Air dan Tanah , Laboratorium Biologi Lingkungan, Teaching Factory Budidaya Air Tawar, Teaching Factory Budidaya Perikanan, Stasiun Lapangan Praktek Tambak dan Pusat Studi Mangrove – Pasuruan, Stasiun Lapangan Praktek Pembenihan – Paciran , dan Instalasi Tambak Praktek Banjarkemuning.</p>\r\n<p [removed]="text-align: justify;"><strong>Semester I</strong> <br />(Pengembangan Kepribadian), dengan Mata Kuliah Wajib Umum yaitu Pancasila, Pendidikan Kewarganegaraan, Pendidikan Agama, Bahasa Indonesia dan Mata Kuliah Wajib Program Studi yaitu Bahasa Inggris, Teknik Penulisan Ilmiah, Dasar – Dasar Budidaya Perikanan, Mikrobiologi Perairan ;</p>\r\n<p [removed]="text-align: justify;"><strong>Semester III</strong> <br />( Kompetensi Budidaya Air Payau), dengan Mata Kuliah Wajib Program Studi : Teknik Budidaya Air Payau, Teknik Perkolaman, Mekanisasi Budidaya Perikanan, Teknik Produksi Pakan Alami, Teknik Pembenihan Ikan Tidak Bersirip, Manajemen Kualitas Tanah dan Air, Hama dan Penyakit Ikan. Pada</p>\r\n<p [removed]="text-align: justify;"><strong>Semester IV</strong> <br />(Kompetensi Budidaya Air Tawar), dengan Mata Kuliah Wajib Program Studi : Teknik Budidaya Air Tawar, Teknik Pembenihan Ikan Bersirip, Teknik Produksi Pakan Buatan, Pengelolaan Lingkungan Budidaya Perikanan, Manajemen Kesehatan Ikan, Bioteknologi Budidaya Perikanan. Pada semester IV dilaksanakan Praktek Kerja Lapang III untuk Peningkatan Kompetensi Keahlian Budidaya Air Tawar Pada Industri Pembesaran dan Pembenihan Ikan Air Tawar ;</p>\r\n<p [removed]="text-align: justify;"><strong>Semester VI </strong><br />(Kompetensi Berkehidupan Bermasyarakat), dilaksanakan Kerja Praktek Akhir (KPA) Pada Dunia Usaha dan Dunia Industri Kelautan dan Perikanan serta Instansi Pemerintah Untuk Penyusunan Tugas Akhir dalam Bentuk Karya Ilmiah Praktek Akhir (KIPA). Taruna Program Studi Teknik Budidaya Perikanan juga dibekali dengan Sertifikat Kompetensi Keahlian meliputi Sertifikat Kompetensi Keahlian Bidang Budidaya Perikanan dan Sertifikat Kompetensi Ahli Pembudidaya Ikan ( S-API).</p>', 'teknik-budidaya-perikanan', 1, '2018-04-20 02:14:51', 1, '2018-04-20 02:15:26'),
(4, 'Teknik Kelautan', '<p>Teknik Kelautan</p>', 'teknik-kelautan', 1, '2018-04-20 02:19:33', 1, '2018-04-29 03:36:22'),
(5, 'Teknik Penangkapan Ikan', '<p>Teknik Penangkapan Ikan t</p>', 'teknik-penangkapan-ikan', 1, '2018-04-29 03:37:15', 1, '2018-05-05 12:55:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id_profile` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `alamat` text,
  `tlp` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_profile`, `title`, `alamat`, `tlp`, `fax`, `web`, `email`, `facebook`, `twitter`, `instagram`, `youtube`) VALUES
(1, 'Politeknik KP Bone', 'Kabupaten Bone, Sulawesi Selatan 92719', '-', '-', '-', 'politeknikkpbone@mail.com', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `embed` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `video`, `desc`, `embed`) VALUES
(3, 'Politeknik Kelautan Dan Perikanan Bone', '', 'HeXBvN-JJZg'),
(4, 'Politeknik KP Bone 24 April pukul 19:33 · Penyerahan SK Fungsional Dosen kepada Bapak/Ibu Calon Dosen Oleh Bapak Direktur Politeknik KP Bone', 'I am getting an error when trying to set custom validation messages in CodeIgniter for the min_length and max_length validation constraints.I am getting an error when trying to set custom validation messages in CodeIgniter for the sadsaasd d', 'N9uF8_0bv0k');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galery_image`
--
ALTER TABLE `galery_image`
  ADD CONSTRAINT `Album_Delete` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
