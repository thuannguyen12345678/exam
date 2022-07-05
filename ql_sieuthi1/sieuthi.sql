-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 11:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sieuthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `mat_hang`
--

CREATE TABLE `mat_hang` (
  `id` int(10) NOT NULL,
  `ten_hang` varchar(255) NOT NULL,
  `loai_hang` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `so_luong` varchar(255) NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mat_hang`
--

INSERT INTO `mat_hang` (`id`, `ten_hang`, `loai_hang`, `gia`, `so_luong`, `ngay_tao`, `mo_ta`) VALUES
(15, '8plusijnm', 'điện thoại', '1200000', '13', '0000-00-00 00:00:00', 'tốt'),
(16, 'ipad pro', 'máy tính', '1200000', '12', '2022-07-05 14:56:42', 'tốt'),
(17, 'airpod ', 'tai nghe', '222222', '12', '2022-07-05 15:05:55', 'tốt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mat_hang`
--
ALTER TABLE `mat_hang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mat_hang`
--
ALTER TABLE `mat_hang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
