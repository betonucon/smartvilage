-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 06:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_adminlte`
--

-- --------------------------------------------------------

--
-- Table structure for table `ceo`
--

CREATE TABLE `ceo` (
  `id` int(10) NOT NULL,
  `name` text DEFAULT NULL,
  `startdate` datetime DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ceo`
--

INSERT INTO `ceo` (`id`, `name`, `startdate`, `deskripsi`) VALUES
(1, 'Ceo Juni 2021', NULL, 'Assalamu’alaikum Wr. Wb.\r\nSemoga rekan-rekan dan keluarganya selalu dalam keadaan sehat. Kesehatan adalah\r\nyang terpenting saat ini. Tetap patuhi protokol Covid-19 dan menerapkan 3M, memakai\r\nmasker, menjaga jarak, dan mencuci tangan. Jika ada rekan-rekan yang sedang dalam\r\nkeadaan sakit/tidak sehat sebaiknya di rumah saja, semoga bisa lekas sembuh dan dapat\r\nberaktivitas lagi seperti biasa. Bagi rekan-rekan yang tetap\r\nmenjalankan shift maupun work from office, mohon agar secara ketat menerapkan\r\nprotokol Covid-19 untuk melindungi lingkungan kerja dan keluarga. Dengan kedisiplinan,\r\ninsha Allah bersama kita mampu menjaga diri kita dan keluarga dari Covid-19.\r\nBapak Ibu yang saya hormati,\r\nKita tidak tahu kapan pandemi ini akan berakhir, sehingga yang dapat kita lakukan saat\r\nini adalah berusaha melakukan segala aktivitas secara optimal namun tetap menjaga\r\nprotokol kesehatan dengan baik dan benar. Alhamdulillah kita telah melewati masa kritis\r\ndi Q2 dan Q3 dengan cukup baik. Dengan dukungan dari pemerintah, sentimen positif\r\nperbaikan pasar baja dalam negeri mulai terlihat. Penjualan periode Agustus-September\r\n2020 mulai menunjukkan perbaikan di mana tingkat penjualan per Juni 2020 ada di\r\nangka 60%, naik dari periode sebelumnya dengan tingkat penjualan 40%. Masih ada\r\nbulan November dan Desember agar target kita di 2020 dapat tercapai.\r\nJangan lupa untuk berpartisipasi dalam Webinar selanjutnya di tanggal 6 November\r\n2020.\r\nTetap semangat, jaga produktivitas, tingkatkan kekompakan dalam bekerja agar kita\r\nbersama dapat mewujudkan Krakatau Steel yang maju, yang unggul, yang dapat\r\nmemberikan kesejahteraan bagi semua dan berkontribusi positif terhadap industri baja\r\nmaupun perekonomian nasional. Krakatau Steel, Bangkit!\r'),
(2, 'Ceo Juli 2021', NULL, 'Assalamu’alaikum Wr. Wb.\r\nSemoga rekan-rekan dan keluarganya selalu dalam keadaan sehat. Kesehatan adalah\r\nyang terpenting saat ini. Tetap patuhi protokol Covid-19 dan menerapkan 3M, memakai\r\nmasker, menjaga jarak, dan mencuci tangan. Jika ada rekan-rekan yang sedang dalam\r\nkeadaan sakit/tidak sehat sebaiknya di rumah saja, semoga bisa lekas sembuh dan dapat\r\nberaktivitas lagi seperti biasa. Bagi rekan-rekan yang tetap\r\nmenjalankan shift maupun work from office, mohon agar secara ketat menerapkan\r\nprotokol Covid-19 untuk melindungi lingkungan kerja dan keluarga. Dengan kedisiplinan,\r\ninsha Allah bersama kita mampu menjaga diri kita dan keluarga dari Covid-19.\r\nBapak Ibu yang saya hormati,\r\nKita tidak tahu kapan pandemi ini akan berakhir, sehingga yang dapat kita lakukan saat\r\nini adalah berusaha melakukan segala aktivitas secara optimal namun tetap menjaga\r\nprotokol kesehatan dengan baik dan benar. Alhamdulillah kita telah melewati masa kritis\r\ndi Q2 dan Q3 dengan cukup baik. Dengan dukungan dari pemerintah, sentimen positif\r\nperbaikan pasar baja dalam negeri mulai terlihat. Penjualan periode Agustus-September\r\n2020 mulai menunjukkan perbaikan di mana tingkat penjualan per Juni 2020 ada di\r\nangka 60%, naik dari periode sebelumnya dengan tingkat penjualan 40%. Masih ada\r\nbulan November dan Desember agar target kita di 2020 dapat tercapai.\r\nJangan lupa untuk berpartisipasi dalam Webinar selanjutnya di tanggal 6 November\r\n2020.\r\nTetap semangat, jaga produktivitas, tingkatkan kekompakan dalam bekerja agar kita\r\nbersama dapat mewujudkan Krakatau Steel yang maju, yang unggul, yang dapat\r\nmemberikan kesejahteraan bagi semua dan berkontribusi positif terhadap industri baja\r\nmaupun perekonomian nasional. Krakatau Steel, Bangkit!\r'),
(3, 'Ceo Agustus 2021', NULL, 'Assalamu’alaikum Wr. Wb.\r\nSemoga rekan-rekan dan keluarganya selalu dalam keadaan sehat. Kesehatan adalah\r\nyang terpenting saat ini. Tetap patuhi protokol Covid-19 dan menerapkan 3M, memakai\r\nmasker, menjaga jarak, dan mencuci tangan. Jika ada rekan-rekan yang sedang dalam\r\nkeadaan sakit/tidak sehat sebaiknya di rumah saja, semoga bisa lekas sembuh dan dapat\r\nberaktivitas lagi seperti biasa. Bagi rekan-rekan yang tetap\r\nmenjalankan shift maupun work from office, mohon agar secara ketat menerapkan\r\nprotokol Covid-19 untuk melindungi lingkungan kerja dan keluarga. Dengan kedisiplinan,\r\ninsha Allah bersama kita mampu menjaga diri kita dan keluarga dari Covid-19.\r\nBapak Ibu yang saya hormati,\r\nKita tidak tahu kapan pandemi ini akan berakhir, sehingga yang dapat kita lakukan saat\r\nini adalah berusaha melakukan segala aktivitas secara optimal namun tetap menjaga\r\nprotokol kesehatan dengan baik dan benar. Alhamdulillah kita telah melewati masa kritis\r\ndi Q2 dan Q3 dengan cukup baik. Dengan dukungan dari pemerintah, sentimen positif\r\nperbaikan pasar baja dalam negeri mulai terlihat. Penjualan periode Agustus-September\r\n2020 mulai menunjukkan perbaikan di mana tingkat penjualan per Juni 2020 ada di\r\nangka 60%, naik dari periode sebelumnya dengan tingkat penjualan 40%. Masih ada\r\nbulan November dan Desember agar target kita di 2020 dapat tercapai.\r\nJangan lupa untuk berpartisipasi dalam Webinar selanjutnya di tanggal 6 November\r\n2020.\r\nTetap semangat, jaga produktivitas, tingkatkan kekompakan dalam bekerja agar kita\r\nbersama dapat mewujudkan Krakatau Steel yang maju, yang unggul, yang dapat\r\nmemberikan kesejahteraan bagi semua dan berkontribusi positif terhadap industri baja\r\nmaupun perekonomian nasional. Krakatau Steel, Bangkit!\r'),
(4, 'Ceo Agustius 202122', '2021-08-24 06:12:42', '<p>\r\n\r\n<b>Assalamu’alaikum Wr. Wb.&nbsp;</b></p><p>Semoga rekan-rekan dan keluarganya selalu dalam keadaan sehat. Kesehatan adalah\r\nyang terpenting saat ini. Tetap patuhi protokol Covid-19 dan menerapkan 3M, memakai\r\nmasker, menjaga jarak, dan mencuci tangan. Jika ada rekan-rekan yang sedang dalam\r\nkeadaan sakit/tidak sehat sebaiknya di rumah saja, semoga bisa lekas sembuh dan dapat\r\nberaktivitas lagi seperti biasa. Bagi rekan-rekan yang tetap\r\nmenjalankan shift maupun work from office, mohon agar secara ketat menerapkan\r\nprotokol Covid-19 untuk melindungi lingkungan kerja dan keluarga. Dengan kedisiplinan,\r\ninsha Allah bersama kita mampu menjaga diri kita dan keluarga dari Covid-19.\r\nBapak Ibu yang saya hormati,\r\nKita tidak tahu kapan pandemi ini akan berakhir, sehingga yang dapat kita lakukan saat\r\nini adalah berusaha melakukan segala aktivitas secara optimal namun tetap menjaga\r\nprotokol kesehatan dengan baik dan benar. Alhamdulillah kita telah melewati masa kritis\r\ndi Q2 dan Q3 dengan cukup baik. Dengan dukungan dari pemerintah, sentimen positif\r\nperbaikan pasar baja dalam negeri mulai terlihat. Penjualan periode Agustus-September\r\n2020 mulai menunjukkan perbaikan di mana tingkat penjualan per Juni 2020 ada di\r\nangka 60%, naik dari periode sebelumnya dengan tingkat penjualan 40%. Masih ada\r\nbulan November dan Desember agar target kita di 2020 dapat tercapai.\r\nJangan lupa untuk berpartisipasi dalam Webinar selanjutnya di tanggal 6 November\r\n2020.\r\nTetap semangat, jaga produktivitas, tingkatkan kekompakan dalam bekerja agar kita\r\nbersama dapat mewujudkan Krakatau Steel yang maju, yang unggul, yang dapat\r\nmemberikan kesejahteraan bagi semua dan berkontribusi positif terhadap industri baja\r\nmaupun perekonomian nasional. Krakatau Steel, Bangkit!\r\n\r\nmaupun perekonomian nasional. Krakatau Steel, Bangkit!\r\nmaupun perekonomian nasional. Krakatau Steel, Bangkit!\r\nmaupun perekonomian nasional. Krakatau Steel, Bangkit!\r\nmaupun perekonomian nasional. Krakatau Steel, Bangkit!\r\n<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `id` int(11) NOT NULL,
  `nm_magazine` varchar(255) NOT NULL,
  `magazine_pic` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `start_dt` date DEFAULT NULL,
  `end_dt` date DEFAULT NULL,
  `internal` varchar(225) DEFAULT NULL,
  `link_address` text DEFAULT NULL,
  `creator` varchar(255) DEFAULT NULL,
  `date_create` date DEFAULT NULL,
  `jumlah_pengunjung` int(255) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`id`, `nm_magazine`, `magazine_pic`, `status`, `start_dt`, `end_dt`, `internal`, `link_address`, `creator`, `date_create`, `jumlah_pengunjung`) VALUES
(8, 'Krakatau Steel Terus Membaik', 'ksg-134-januari-2108/docs/ksg-134-januari-2108.pdf_1.jpg', '1', '2018-01-01', '2018-01-31', '3', 'ksg-134-januari-2108/index.html', '0', '2018-01-25', 0),
(16, 'Peringati Hari Kesadaran Nasional, Ini Harapan DIRUT KS', 'ksg-134-januari-2108/docs/ksg-134-januari-2108.pdf_1.jpg', '1', '2018-02-01', '2018-02-28', NULL, 'ksg-135/index.html', '0', '2018-02-06', 0),
(17, 'DUKUNGAN PENGGUNAAN MATERIAL PIPA BAJA UNTUK KEBUTUHAN OIL & GAS', 'ksg-134-januari-2108/docs/ksg-134-januari-2108.pdf_1.jpg', '1', '2018-03-01', NULL, NULL, 'Magazine_20180308063917/ksg-136/index.html', '0', '2018-03-08', 0),
(18, 'Kementerian BUMN Optimis Kinerja Krakatau Steel Terus Meningkat', 'Magazine_20180914061559/JULI EDISI 140/docs/JULI EDISI 140.pdf_1.jpg', '1', '2018-04-24', NULL, NULL, 'Magazine_20180424054557/KSG-News-Edisi-137/index.html', '90269', '2018-04-24', 0),
(19, 'Safari Ramadhan Indahnya Berbagi', 'ksg-134-januari-2108/docs/ksg-134-januari-2108.pdf_1.jpg', '1', '2018-08-01', NULL, NULL, 'Magazine_20180806071525/KSG EDISI 139 FIX/index.html', '0', '2018-08-06', 0),
(20, 'Dirgahayu PT Krakatau Steel (Persero) Tbk , Edisi Khusus', 'ksg-134-januari-2108/docs/ksg-134-januari-2108.pdf_1.jpg', '1', '2018-09-14', NULL, NULL, 'Magazine_20180913044428/EDISI KHUSUS AGUSTUS/index.html', '0', '2018-09-13', 0),
(21, 'Pengaruh Importasi Baja Terhadap Import Baja Nasional', 'Magazine_20180914061559/JULI EDISI 140/docs/JULI EDISI 140.pdf_1.jpg', '1', '2018-10-01', NULL, NULL, 'Magazine_20180914061559/JULI EDISI 140/index.html', '0', '2018-09-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(10) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `background` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `name`, `file`, `createdate`, `background`) VALUES
(2, 'Transmart Vilage', '20210824085822.mp4', NULL, 'BG20210824085822.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ceo`
--
ALTER TABLE `ceo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ceo`
--
ALTER TABLE `ceo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
