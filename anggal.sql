-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Jul 2018 pada 13.47
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anggal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Aa', 'Aa'),
(2, 'Ivan gg', 'gg Sangad'),
(3, 'aa', 'a'),
(4, 'kerudung', 'lalala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_income`
--

CREATE TABLE `category_income` (
  `id_cat_income` int(11) NOT NULL,
  `category_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_income`
--

INSERT INTO `category_income` (`id_cat_income`, `category_name`, `note`) VALUES
(2, 'Others', 'Asw'),
(3, 'Party', 'P'),
(4, 'Salary', 'Bayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'Dicky', 'Tes'),
(4, 'hrd', 'pengatur pegawai'),
(5, 'keuangan', 'mengatur keuangan'),
(6, 'logistik', 'mengatur logistik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `income`
--

CREATE TABLE `income` (
  `id_income` int(11) NOT NULL,
  `category_income` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash` int(11) DEFAULT NULL,
  `note` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_attemps` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `income`
--

INSERT INTO `income` (`id_income`, `category_income`, `cash`, `note`, `date_attemps`) VALUES
(2, 'Party', 100000000, 'Minum coca cola 1', '2018-07-11 03:35:27'),
(3, 'Others', 11111, 'ss', '2018-07-11 06:05:09'),
(4, 'Party', 123, 'coba', '2018-07-27 06:39:45'),
(5, 'Party', 123, 'qweqwe', '2018-07-31 08:13:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outcome`
--

CREATE TABLE `outcome` (
  `id_outcome` int(11) NOT NULL,
  `category` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash` int(11) DEFAULT NULL,
  `note` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_attemps` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `outcome`
--

INSERT INTO `outcome` (`id_outcome`, `category`, `cash`, `note`, `date_attemps`) VALUES
(2, 'Entertaintment', 2, 'BBQ Partyw', '2018-07-11 11:30:33'),
(3, 'Party', 12000, 'Dua belas ribu aje', '2018-07-11 11:05:58'),
(4, 'Entertaintment', 123, 'lalala', '2018-07-31 01:15:15'),
(5, 'Entertaintment', 987654, 'asek', '2018-07-31 08:16:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outcome_category`
--

CREATE TABLE `outcome_category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `outcome_category`
--

INSERT INTO `outcome_category` (`id`, `name`, `desc`) VALUES
(1, 'Party', 'Makan Tomat'),
(2, 'Entertaintment', 'Entertaintment');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `description` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `foto` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `product`, `category`, `description`, `qty`, `price`, `foto`) VALUES
(2, 'hiasan kerudung', 1, 'mempercantik kerudung', 5000, 1000, 'download.jpg'),
(3, 'hiasan baju', 2, 'memperindah baju', 13, 3, 'download.jpg'),
(4, 'kalung', 1, '', 0, 6, 'download.jpg'),
(5, 'gelang', 1, '', 1, 4, 'download.jpg'),
(6, 'slayer', 1, '', 1, 6, 'download.jpg'),
(7, 'jepit rambut', 3, 'merapikan rambut', 0, 1, 'download.jpg'),
(8, 'anting', 2, '', 1, 4, 'download.jpg'),
(9, 'kerudung paris', 4, 'lalala', 1, 123, '31619_thumb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_tansaksi` int(11) NOT NULL,
  `id_product` int(200) NOT NULL,
  `product` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `harga` int(200) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `atm` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `jasa_kirim` varchar(50) NOT NULL,
  `status` varchar(200) NOT NULL,
  `no_resi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_tansaksi`, `id_product`, `product`, `category`, `description`, `harga`, `penerima`, `jumlah`, `atm`, `alamat`, `kota`, `provinsi`, `no_tlp`, `jasa_kirim`, `status`, `no_resi`) VALUES
(2, 2, 'Science', '1', 'VV', 1000, 'agus', 2, 'BNI', 'desa piyak kec kanor', 'bojonegoro', 'jawa timur', 2147483647, 'JNE', 'SUKSES', '6e6e32hvdhs'),
(7, 3, 'es', '0', 'gantungan kunci berbentuk aneka escrem', 900000, 'agus santoso', 1, 'BNI', 'desa piyak', 'bojonegoro', 'jawa timur', 2154515, 'JNE', 'READY', '76737r2r88r'),
(8, 3, 'es', '0', 'gantungan kunci berbentuk aneka escrem', 900000, 'abel', 1, 'BRI', 'madiun', 'madiun', 'jawa timur', 151400, 'J&T', '', ''),
(9, 2, 'Science', '1', 'VV', 1000, 'q', 1, 'BNI', 'qwe', 'qwe', 'qwe', 12312, 'JNE', 'PROSES', ''),
(10, 2, 'hiasan kerudung', '1', 'mempercantik kerudung', 1000, 'wira', 1, 'BNI', 'qwe', 'asd', 'asd', 123213, 'JNE', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `last_login` datetime NOT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '/.jiX5FyukWVBZRGdkldsu', NULL, '0000-00-00 00:00:00', 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'i.fadilaputra@gmail.com', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, 'i.fadilaputra@gmail.com', 'daf50f81d6536e89a278fdfa989d4c13d2a7ffd9', 'TWYyHvIgvqcXRPsxJWTQze8053cc30d08dc588b7', 1526609281, NULL, NULL, '0000-00-00 00:00:00', 0, 'Ivan', 'Fadila', 'Merv', '081555406386'),
(3, '205', 'hrd', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, 'hrd@hrd.com', NULL, NULL, NULL, '/.jiX5FyukWVBZRGdkldsu', NULL, '2018-07-27 01:44:30', 1, 'syafri', 'wira', 'wicaksana', NULL),
(4, '11', 'logistik', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, 'logistik@logistik.com', NULL, NULL, NULL, '/.jiX5FyukWVBZRGdkldsu', NULL, '2018-07-27 01:44:07', 1, 'agus', 'santoso', 'cakep', '987654'),
(5, '555', 'keuangan', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, 'keuangan@keuangan.com', NULL, NULL, NULL, '/.jiX5FyukWVBZRGdkldsu', NULL, '2018-07-27 01:41:54', 1, 'salsabiela', 'cahyahaq', 'tetew', '987654'),
(13, '1998', 'konsumen', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, 'konsumen@konsumen.com', NULL, NULL, NULL, NULL, '2018-07-26 01:47:17', '2018-07-27 01:33:03', 1, 'pembeli', 'konsumen', 'customer', '987654'),
(14, '::1', 'viko@viko.com', '$2y$08$lI7zv.uMUb37zwdGSQsWbem7f78lYmbZK6puoFSNSjxGwDI7VLHlW', NULL, 'viko@viko.com', NULL, NULL, NULL, NULL, '2018-07-27 01:36:42', '0000-00-00 00:00:00', 1, 'viko', 'putra', 'polinema', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 1),
(5, 2, 2),
(6, 3, 1),
(7, 3, 2),
(8, 3, 4),
(10, 4, 1),
(11, 4, 2),
(9, 4, 6),
(12, 5, 1),
(13, 5, 2),
(14, 5, 5),
(15, 14, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_income`
--
ALTER TABLE `category_income`
  ADD PRIMARY KEY (`id_cat_income`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id_income`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outcome`
--
ALTER TABLE `outcome`
  ADD PRIMARY KEY (`id_outcome`);

--
-- Indexes for table `outcome_category`
--
ALTER TABLE `outcome_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_tansaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_income`
--
ALTER TABLE `category_income`
  MODIFY `id_cat_income` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id_income` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outcome`
--
ALTER TABLE `outcome`
  MODIFY `id_outcome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `outcome_category`
--
ALTER TABLE `outcome_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_tansaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
