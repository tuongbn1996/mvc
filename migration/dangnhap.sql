-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2017 at 03:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dangnhap`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `avatar`) VALUES
(3, 'nntuong', '6ca05cadaa8b0b7a438a6d806f6228', 'Tưởng Nguyễn', 'tuongbn199x@gmail.com', ''),
(4, 'tuongnguyen', 'e10adc3949ba59abbe56e057f20f88', 'tuongnguyen', 'tuongnguyen@gmail.com', ''),
(5, 'alo', '$1$wX0.3i4.$T4r2xOrw1L/JjoAh8T', 'aloalo', 'alo@gmail.com', ''),
(6, 'daicatuong', 'e10adc3949ba59abbe56e057f20f88', 'daicatuong', 'daicatuong@gmail.com', ''),
(8, 'danchoi', '12345', 'danchoi', 'danchoi@gmail.com', ''),
(9, 'abcd', '$2y$10$Ed1TDe3L.4qdx/6jB.W5QuJoUYHgOVnJmMEF/dktM0yReGrRAb7RW', 'abcd', 'abcd@gmail.com', ''),
(11, 'aaaaaaaaaaaaabbbbbbbbbb', '$2y$10$VSlp8.BlmowD/mIdKh9B8et28Le4mseUO6OycpUAK7CfSnS3Fw5u2', 'aaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbb', 'tuongnbn9999000000@gmail.com', ''),
(12, 'sduuuuuuuu', '$2y$10$JaAPUuZ8/OLVqnp3fVmZb.T6MrILaN7u8fW8WsDT.g4S0JHrO2WHq', 'fgghjh', 'a@mail.com', ''),
(13, 'abcdefgh', '$2y$10$ZqQxKCE1uifQGKfLALDApeV4UFjPhF..blOKL..7gv9KUAzdAoxNe', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaa@gmail.com', ''),
(14, 'bhbhbhbhbh', '$2y$10$AUApsm8FO1vuVIsLBAz8Hu0rDo4Ie6gJgMqpn9EkgYyPCQknEBY3q', 'bbbbbbbbbbbbbbbb', 'b@gmail.com', ''),
(15, 'dhdhdhdhdhdhhdhdh', '$2y$10$VZX92eXssSS.Q2soG2lt1uoCgTT3TczG3DPMVazLihp5YKDJ.gP1u', 'bbbbbbbbbbbbbbbbb', 'c@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
