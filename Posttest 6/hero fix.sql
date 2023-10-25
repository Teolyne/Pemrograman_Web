-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 12:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hero`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_hero`
--

CREATE TABLE `detail_hero` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `raritas` text NOT NULL,
  `arena` float NOT NULL,
  `colo` float NOT NULL,
  `raid` float NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_hero`
--

INSERT INTO `detail_hero` (`id`, `nama`, `raritas`, `arena`, `colo`, `raid`, `gambar`) VALUES
(6, 'God of Harvest Kamael', '⭐⭐⭐', 9.5, 10, 9.5, 'kamael.jpg'),
(7, 'Beach Shapira', '⭐⭐⭐', 8, 6.5, 9, 'shapira.jpg'),
(8, 'Lifeguard Yuze', '⭐⭐⭐', 7, 5.5, 7.5, 'yuze.jpg'),
(9, 'Demonshire Count Claude', '⭐⭐⭐', 9.5, 9, 10, 'claude.jpg'),
(10, 'Vampire Girl Karina', '⭐⭐⭐', 7, 7.5, 9, 'karina.jpg'),
(11, 'Slayer Andras', '⭐⭐⭐', 9, 9.5, 10, 'andras.jpg'),
(12, 'Future Princess', '⭐⭐⭐', 8.5, 9.5, 4, 'fp.jpg'),
(13, 'Summer Innkeeper Loraine', '⭐⭐⭐', 8, 7, 8.5, 'loraine.jpg'),
(14, 'Elite Royal Guard Captain Valencia', '⭐⭐⭐', 9.5, 9.1, 9.2, 'Elite Royal Guard Captain Valencia.jpg'),
(18, 'pe', '⭐⭐⭐', 9, 9, 9, '2023-10-25pe.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_hero`
--
ALTER TABLE `detail_hero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_hero`
--
ALTER TABLE `detail_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
