-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 02:26 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `salary` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `salary`, `age`) VALUES
(1, 'Kamal Muhammed', 45000, 38),
(2, 'Gavin Giles', 55000, 42),
(3, 'Taylor McGrath', 60000, 21),
(4, 'Adam Condon', 100000, 19),
(5, '', 0, 0),
(6, 'Adam Condon', 0, 19),
(7, 'Adam Condon', 0, 19);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `trainers` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `trainers` (`ID`, `name`, `location`, `email`, `price`, `age`) VALUES
(1, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(2, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(3, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(4, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(5, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(6, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(7, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(8, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(9, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(10, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27),
(11, 'Niall Barrett ', 'Kildare', 'niallbarret@gmail.com', 35, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `trainers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
