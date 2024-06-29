-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 12:30 PM
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
-- Database: `id22384732_articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `id22384732_articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_path` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image_path`, `created_at`) VALUES
(2, 'Masa Depan Transportasi: Peran Utama Mobil Otonom dalam Mobilitas Masa Depan!!', 'Teknologi mobil otonom telah menjadi pusat perhatian dalam industri transportasi. Mobil otonom menjanjikan revolusi dalam mobilitas masa depan dengan menggabungkan kecerdasan buatan, sensor, dan pemetaan digital untuk mengemudi tanpa campur tangan manusia. Dengan kemampuan untuk mengurangi kecelakaan lalu lintas, mengoptimalkan lalu lintas, dan meningkatkan aksesibilitas transportasi bagi orang-orang dengan mobilitas terbatas, mobil otonom memiliki potensi untuk mengubah cara kita bergerak dan berinteraksi dengan kota di masa depan.', 'cars-fb.jpg', '2024-05-08 15:13:00'),
(3, 'Mendefinisikan Era 5G: Implikasi Teknologi Jaringan Seluler Tercepat di Dunia', 'Ketersediaan teknologi 5G telah membuka pintu untuk era baru konektivitas yang cepat dan andal. Dibandingkan dengan generasi sebelumnya, 5G menawarkan kecepatan unduh yang jauh lebih tinggi, latency rendah, dan kapasitas jaringan yang lebih besar. Ini tidak hanya memungkinkan pengalaman pengguna yang lebih baik dalam hal streaming video, game online, dan IoT, tetapi juga mendorong inovasi dalam berbagai bidang seperti telemedisin, kendaraan otonom, dan industri manufaktur. Dengan implikasi yang mendalam, 5G dipandang sebagai pendorong utama transformasi digital di masa depan.', '5g.jpg', '2024-05-08 18:53:21'),
(4, 'Mengeksplorasi Potensi Blockchain: Revolusi Teknologi di Balik Cryptocurrency', 'Blockchain, teknologi yang mendasari cryptocurrency seperti Bitcoin, telah menarik perhatian karena potensinya untuk mengubah berbagai aspek kehidupan kita. Dengan konsep desentralisasi, transparansi, dan keamanan yang dibawanya, blockchain tidak hanya memberikan infrastruktur untuk mata uang digital, tetapi juga digunakan dalam aplikasi lain seperti logistik, rantai pasokan, dan pemungutan suara elektronik. Potensi blockchain untuk mengurangi biaya transaksi, mengamankan data, dan memfasilitasi transparansi telah menjadikannya fokus utama dalam diskusi tentang masa depan teknologi.', 'blockchain.jpg', '2024-05-08 18:54:37'),
(6, 'Peran Kecerdasan Buatan dalam Revolusi Industri: Transformasi Produktivitas dan Efisiensi', 'Kecerdasan buatan (AI) telah menjadi katalisator utama dalam revolusi industri modern. Dengan kemampuan untuk memproses dan menganalisis data secara cepat dan akurat, AI membantu meningkatkan produktivitas, efisiensi, dan inovasi di berbagai sektor, mulai dari manufaktur hingga layanan keuangan. Dari sistem manajemen rantai pasokan yang cerdas hingga perangkat medis yang dapat mengenali pola penyakit, AI telah membuka pintu untuk solusi yang belum pernah terbayangkan sebelumnya, mengubah cara kita bekerja, hidup, dan berinteraksi dengan teknologi.', 'ai.webp', '2024-05-08 18:56:09'),
(7, 'Membangun Masa Depan Berkelanjutan dengan Teknologi Hijau: Inovasi untuk Lingkungan yang Lebih Baik', 'Teknologi hijau, atau teknologi yang dirancang untuk mengurangi dampak lingkungan negatif, telah menjadi fokus utama dalam upaya untuk membangun masa depan berkelanjutan. Dari energi terbarukan seperti tenaga surya dan angin hingga mobil listrik dan desain bangunan ramah lingkungan, teknologi hijau memainkan peran penting dalam mengurangi emisi karbon dan memperbaiki kualitas lingkungan. Dengan berinvestasi dalam inovasi teknologi hijau dan menerapkan solusi yang ramah lingkungan, kita dapat membentuk dunia yang lebih bersih, lebih sehat, dan lebih berkelanjutan bagi generasi mendatang.', 'green-tech.jpeg', '2024-05-08 18:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
