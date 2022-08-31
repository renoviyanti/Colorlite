-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 03:33 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butawarna`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jawaban_benar` int(11) NOT NULL,
  `jawaban_salah` int(11) NOT NULL,
  `tgl_tes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `jawab_a` varchar(100) NOT NULL,
  `jawab_b` varchar(100) NOT NULL,
  `jawab_c` varchar(100) NOT NULL,
  `jawab_d` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawaban`) VALUES
(1, 'abumerah 5.png', '5', '8', '6', '1', '5'),
(2, 'abumerah 9.png', '0', '6', '9', '2', '9'),
(3, 'campurputih 3.png', '2', '8', '5', '3', '3'),
(4, 'toscamagenta 2.png', '2', '3', '1', '7', '2'),
(5, 'abutosca 4.png', '5', '4', '9', 'I see nothing', '4'),
(6, 'download (2).png', '2', '3', '7', '6', '7'),
(7, 'download (1).png', '6', '9', '8', '3', '8'),
(8, 'hijau 1.png', '7', '4', '1', '3', '1'),
(9, 'toscamagenta 6.png', '6', '9', '3', '1', '6'),
(10, 'merah 4.png', '1', '4', '7', '0', '4'),
(11, 'merah 4.png', '1', '4', '7', '0', '4'),
(12, 'merah 4.png', '1', '4', '7', '0', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tanyakami`
--

CREATE TABLE `tanyakami` (
  `idtanya` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanyakami`
--

INSERT INTO `tanyakami` (`idtanya`, `nama`, `email`, `pesan`) VALUES
(1, 'Rejeki Noviyanti', 'rejekinoviyanti@gmail.com', 'aplikasi keren'),
(2, 'Distira Bayu Pratama', 'dickywin98@gmail.com', 'keren'),
(3, 'Haniifah', 'rrhaniifah@gmail.com', 'Mantul'),
(4, 'Qathrunnada', 'qath@gmail.com', 'bagus sekali awaw'),
(5, 'Sulis', 'larassoemardjo@gmail.com', 'INI MANTAP'),
(6, 'yaya', 'yaya@gmail.com', 'bagusss'),
(7, 'benjos', 'benjos@gmail.com', 'jossds'),
(8, 'benjos', 'benjos@gmail.com', 'balalala'),
(9, 'maknyos', 'benjos@gmail.com', 'balalala'),
(10, 'Rejeki Noviyanti', 'rejekinoviyanti@gmail.com', 'yaya'),
(11, 'yamo', 'yamo@gmail.com', 'bagus mata saya baik');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanyakami`
--
ALTER TABLE `tanyakami`
  ADD PRIMARY KEY (`idtanya`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tanyakami`
--
ALTER TABLE `tanyakami`
  MODIFY `idtanya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
