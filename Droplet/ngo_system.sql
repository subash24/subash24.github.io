-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 05:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `item` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `contact` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `type`, `item`, `location`, `city`, `contact`) VALUES
(1, 'sriram', 'cloth', 'boys clothes', ' 28, Anna nedum pathai,choolaimedu', 'chennai', '9092857572'),
(2, 'sam', 'food', 'bread for 10 people', ' 62, zakria colony,choolaimedu', 'chennai', '9092857572');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `orgname` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `contact` varchar(64) NOT NULL,
  `website` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `orgname`, `location`, `email`, `password`, `contact`, `website`, `created_at`) VALUES
(1, 'smile foundation', 'No:28, ngo colony.', 'Subash9092857572@gmail.com', '9092857572', '9092857572', 'http:/www.smile foundation.com', '2020-12-24 16:32:40'),
(2, 'chithiram', 'anna nedum pathai, chennai.', 'sam23@gmail.com', '9962138399', '9092857572', 'http:/www.chithiramfoundation.com', '2020-12-24 16:34:07'),
(3, 'agaram foundation', 'besant nagar,chennai.', 'agaram@gmail.com', '12345678', '9710755333', 'http:/www.droplet.com', '2020-12-24 16:35:37'),
(4, 'sriram foundation', '32,retteri,chennai', 'sriram@gmail.com', '987654321', '9092857572', 'http:/www.sriram.com', '2020-12-24 16:42:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
