-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 06:03 AM
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
-- Database: `hrithify`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `image_path`) VALUES
(1, 'Darbuka Siva', 'artist_images/Darbuka_Siva.jpg'),
(2, 'Govind Vasantha', 'artist_images/govind-vasantha.jpg'),
(3, 'Ghibran', 'artist_images/ghibran.jpg'),
(4, 'AR Rahman', 'artist_images/a-r-rahman.jpg'),
(5, 'Shakthisree', 'artist_images/Shakthisree_Gopalan_2023.jpg'),
(6, 'Anirudh', 'artist_images/anirudh.jpg'),
(8, 'Harris Jeyaraj', 'artist_images/HarrisJayaraj-81-150x150.jpg'),
(9, 'Ilayaraja', 'artist_images/ij.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `file_path`, `image_path`, `artist_id`) VALUES
(10, 'Naan Pizhaipeno', 'Darbuka Siva', 'music/01.mp3', 'img/01.jpg', 1),
(11, 'Hey Nijame', 'Darbuka Siva', 'music/02.mp3', 'img/02.jpg', 1),
(12, 'Anthaathi', 'Govind Vasantha', 'music/Anthaathi-MassTamilan.com.mp3', 'img/04.jpeg', 2),
(13, 'Yaar Azhaippathu', 'Ghibran', 'music/Maara_Yaar_Azhaippadhu_Video_Song_(getmp3.pro).mp3', 'img/hqdefault.jpg', 3),
(14, 'Aye Sinamika', 'AR Rahman', 'music/Aye-Sinamika.mp3', 'img/okk.jpg', 4),
(15, 'Bhoomi Bhoomi', 'Shakthisree', 'music/Bhoomi-Bhoomi-MassTamilan.com.mp3', 'img/ccv.jpg', 5),
(16, 'Hayyoda', 'Anirudh', 'music/Hayyoda-MassTamilan.dev.mp3', 'img/photo.jpg', 6),
(18, 'Kaadhale Kaadhale', 'Govind Vasantha', 'music/Kaathalae_Kaathalae-MassTamilan.com.mp3', 'img/96-movie-actress-trisha-hd-pics-trisha-krishnan-96-movie-pics-0ef9262.jpg', 2),
(21, 'Nenjukkul Peithidum', 'Harris Jeyaraj', 'music/Nenjukkul-Peidhidum-MassTamilan.com.mp3', 'img/thumb.webp', 8),
(22, 'Yamunai Aatrile', 'Ilayaraja', 'music/Yamunai-Aatrile.mp3', 'img/a2fa320c510c6f53737401d01d0f4949.jpg', 9),
(23, 'Aga Naga', 'Shakthisree', 'music/Aga-Naga-MassTamilan.dev.mp3', 'img/trish.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Hrithick', 'jayakumarhrithick2002@gmail.com', '$2y$10$mejfJYbh1YvTPfPMyVuzQukQTTRzkI1u/.Rl9BIoYrer765gEFhOO'),
(5, 'Aksshita', 'booyah12@gmail.com', '$2y$10$NutX17R.R9mBNzr2SuCIz.Hs7DoXGnEBLOltT9JZB.G9HQKybXKcy'),
(6, 'rumana', 'jayakumarhrithick2002@gmail.com', '$2y$10$xTZzLhTrUUc6qtGrnKnmf.FZPwRCzou4vCbAAh36DUv963LwJFr62'),
(7, 'Amma', 'neo@gmail.com', '$2y$10$T4FlPex9DjFalLBhuDa5SO6k4uDR2Lomr18xr1i59DQ3zTNYkekie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constraint_name` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
