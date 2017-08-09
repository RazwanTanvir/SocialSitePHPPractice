-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2017 at 10:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `register_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `name`, `phone`, `password`, `register_time`) VALUES
(1, 'razwantanvir8050@gmail.com', 'razwantanvir8050@gmail.com', 'Razwan Ahmed Tanvir', '1675008050', 'tanvir', '2017-08-01 21:19:39'),
(2, 'darul@gmail.com', 'darul@gmail.com', 'Darul Khan', '1978665443', 'darul', '2017-08-01 21:27:15'),
(3, 'sakib@gmail.com', 'sakib@gmail.com', 'Nazmus Sakib', '1683525977', 'sakib', '2017-08-04 00:37:26'),
(4, 'rahim@gmail.com', 'rahim@gmail.com', 'Rahim Sarkar', '1765332765', 'rahim', '2017-08-04 00:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `user_id`, `post_content`, `post_time`) VALUES
(2, 1, 'hghfhgf', '2017-08-04 00:19:29'),
(3, 1, 'hgfhgfhgfghfh', '2017-08-04 00:19:42'),
(4, 1, 'bchgcbvcbv', '2017-08-04 00:20:17'),
(6, 1, 'Hello', '2017-08-04 00:27:23'),
(8, 2, 'hjgfhjghj', '2017-08-04 00:34:03'),
(10, 4, 'I am Rahim Sarker', '2017-08-04 00:40:32'),
(11, 3, 'I am sakib', '2017-08-04 00:41:04'),
(12, 2, 'Hello friends!', '2017-08-04 01:07:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
