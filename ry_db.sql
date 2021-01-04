-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 10:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `id` int(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` int(2) NOT NULL,
  `country` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `tel` varchar(10) NOT NULL,
  `term` varchar(5) NOT NULL,
  `letter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register_tb`
--

INSERT INTO `register_tb` (`id`, `username`, `password`, `email`, `gender`, `age`, `country`, `dateofbirth`, `tel`, `term`, `letter`) VALUES
(1, 'Peeraphatw', 'test', 'Judiciarypz@gmail.com', 'm', 23, 'thailand', '2021-01-04', '0944368295', 'on', 'on'),
(2, 'Peeraphatw2', 'test2', 'Judiciarypz@gmail.com', 'm', 23, 'thailand', '2021-01-04', '0944368295', 'on', 'on'),
(3, 'Peeraphatw3', 'test3', 'Judiciarypz@gmail.com', 'm', 23, 'thailand', '2021-01-04', '0944368295', 'on', 'on'),
(4, 'Peeraphatw4', 'test4', 'Judiciarypz@gmail.com', 'm', 23, 'thailand', '2021-01-04', '0944368295', 'on', 'on'),
(5, 'Peeraphatw', 'test', 'Judiciarypz@gmail.com', 'm', 23, 'thailand', '2021-01-04', '0944368295', 'on', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
