-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 08:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `money` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `money`) VALUES
(1, 'Alaa Osama Mohamed', 'alaa@gmail.com', '98000'),
(2, 'Shimaa Mostafa Kamal', 'shimaa@gmail.com', '1001800'),
(3, 'Eman Ahmed Mohamed', 'eman@gmail.com', '500500'),
(4, 'Dina Mohamed Ahmed', 'dina@gmail.com', '597000'),
(5, 'Esraa Osama Mohamed', 'esraa@gmail.com', '8998800'),
(6, 'Ahmed Mohamed Mahmoud', 'ahmed@gmail.com', '499700'),
(7, 'Saad Mahmoud Mohamed', 'saad@gmail.com', '10000000'),
(8, 'Mahmoud Mohamed Ahmed', 'mahmoud@gmail.com', '9001200'),
(9, 'Sara Ahmed Mohamed', 'sara@gmail.com', '7000000'),
(10, 'Kamal Mohamed Ahmed', 'kamal@gmail.com', '20003000'),
(11, 'Rasha Mohammed Ahmed', 'rasha@gmail.com', '40000'),
(12, 'Mohamed Ahmed Mohamed', 'mohamed@gmail.com', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `data_history`
--

CREATE TABLE `data_history` (
  `id` int(5) NOT NULL,
  `money_from` varchar(100) NOT NULL,
  `money_to` varchar(100) NOT NULL,
  `money` int(10) NOT NULL,
  `theData` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_history`
--

INSERT INTO `data_history` (`id`, `money_from`, `money_to`, `money`, `theData`) VALUES
(1, 'Alaa Osama Mohamed', 'Shimaa Mostafa Kamal', 1000, '2022-03-20 19:15:58'),
(2, 'Dina Mohamed Ahmed', 'Kamal Mohamed Ahmed', 3000, '2022-03-20 19:20:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_history`
--
ALTER TABLE `data_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_history`
--
ALTER TABLE `data_history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
