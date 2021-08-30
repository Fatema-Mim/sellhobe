-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 01:09 PM
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
-- Database: `sellhobe`
--

-- --------------------------------------------------------

--
-- Table structure for table `allads`
--

CREATE TABLE `allads` (
  `id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `register_number` int(11) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allads`
--

INSERT INTO `allads` (`id`, `title`, `image`, `description`, `price`, `location`, `catagory`, `contact`, `register_number`, `reg_date`) VALUES
(31, 'deal of the day', 'bia.jpg', 'hhhhhhhhhhhhhhhhh', 100, 'Dhaka', 'ppp', 123455679, 1642935796, '2021-01-04'),
(32, 'deal of the day', 'dem.jpg', 'yyyyy', 123, 'Dhaka', 'cell', 123456789, 1850349030, '2021-01-04'),
(33, 'deal of the day', 'vt.jpg', 'ttt', 123, 'eee', 'eee', 12345678, 1914249273, '2021-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `phone`, `password`, `c_password`) VALUES
(35, 'mim', 1642935796, '12', '12'),
(36, 'Kamal jamal', 1850349030, '12', '12'),
(37, 'sd', 1914249273, '22', '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allads`
--
ALTER TABLE `allads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allads`
--
ALTER TABLE `allads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
