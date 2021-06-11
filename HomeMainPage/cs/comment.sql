-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2021 at 05:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `phone`, `comment`) VALUES
(0, ' prabodha', 'wogoofficial@gmail.com', '123456987', 'sdcsd'),
(0, 'hfhjy', 'fghngmj@hnhj', '2525535345', 'yrjumor69p  688elkl8; uk'),
(0, ' vg', 'moto@gmil.co', '+942584525', 'kbgfhggfgjhn hjkjnigytfycdryxc'),
(0, ' vg', 'vgvkjh@fdvF', '64563', 'jdnnkjdfvojfn mkefmk'),
(0, 'igg', 'hrth@bfhjt', 'bhkbjl', 'kjlbn'),
(0, 'igg', 'hrth@bfhjt', 'bhkbjl', 'kjlbn'),
(0, 'igg', 'hrth@bfhjt', 'bhkbjl', 'kjlbn'),
(0, 'igg', 'hrth@bfhjt', 'bhkbjl', 'kjlbn'),
(0, 'Wogo', 'wogoofficial@gmail.com', '65165156154', 'doooooooododododododododod');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
