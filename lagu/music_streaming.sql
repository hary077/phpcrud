-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 07:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_streaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `music_sreaming`
--

CREATE TABLE `music_sreaming` (
  `lagu_id` int(11) NOT NULL,
  `judul_lagu` varchar(100) NOT NULL,
  `artis` varchar(100) DEFAULT NULL,
  `durasi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `music_sreaming`
--

INSERT INTO `music_sreaming` (`lagu_id`, `judul_lagu`, `artis`, `durasi`) VALUES
(4, 'pupus', 'dewa', '1mnt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music_sreaming`
--
ALTER TABLE `music_sreaming`
  ADD PRIMARY KEY (`lagu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music_sreaming`
--
ALTER TABLE `music_sreaming`
  MODIFY `lagu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
