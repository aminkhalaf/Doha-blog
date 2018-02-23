-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 02:32 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shababekblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `date`) VALUES
(1, 'Oscar Winners 2019', '				<p>The complete list of 2019 Oscars winners is here! Moonlight took home Oscars 2017 Best Picture honors after a mishap had La La Land being declared the winner by presenters Warren Beatty and Faye Dunaway. La La Land did manage to score six total Oscars, including a win for Emma Stone! Casey Affleck, Viola Davis and Mahershala Ali also took home acting Oscars. View the complete list of of winners below from Oscar Sunday. Look for the WINNER mark in each category.\r\n            The complete list of 2016 Oscar Winners are here! View the list of winners below from OSCAR SUNDAY as well as the complete list of 2016 Oscar nominees. Look for the **WINNER** posted next to each awarded nominee. Mad Max: Fury Road had 10 nominations and took home the most awards with 6 Oscar wins!  As viewers waited, excitement ensued when Leonardo DiCaprio won his first Oscar for Best Actor showcasing his role in The Revenant.\r\n            The Best Actress category had a star-studded line-up with Cate Blanchett, Carol, Jennifer Lawrence, Joy, Charlotte Rampling, 45 Years, Saoirse Ronan, Brooklyn and Brie Larson, Room, who took home the Oscar.</p>				', 'Doha Kh', '2018-02-05 12:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'doha', 'do'),
(2, 'doha', 'doha'),
(8, 'da', 'aa'),
(9, 'aa', 'aa');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
