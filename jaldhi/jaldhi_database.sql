-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 04:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaldhi_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_data_jaldhi`
--

CREATE TABLE `buy_data_jaldhi` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Quantity` int(250) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy_data_jaldhi`
--

INSERT INTO `buy_data_jaldhi` (`Name`, `Email`, `Phone`, `Product_Name`, `Quantity`, `Address`) VALUES
('vivek', 'vadoliyavivek6897@gmail.com', 2147483647, 'swan nack', 5, 'jamnagar'),
('vivek', 'vadoliyavivek6897@gmail.com', 2147483647, 'swan nack', 2, 'jamnagar');

-- --------------------------------------------------------

--
-- Table structure for table `contact_jaldhi`
--

CREATE TABLE `contact_jaldhi` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_jaldhi`
--

INSERT INTO `contact_jaldhi` (`Name`, `Email`, `Phone`, `Message`) VALUES
('vivek', 'vadoliyavivek6897@gmail.com', 2147483647, 'hiiiiii\r\n'),
('vivek', 'vadoliyavivek6897@gmail.com', 2147483647, 'hiiiiii\r\n'),
('vivek', 'vadoliyavivek6897@gmail.com', 2147483647, 'hiiiiii\r\n'),
('', '', 0, ''),
('vivek', 'vadoliyavivek6897@gmail.com', 2147483647, 'hiiii 23');

-- --------------------------------------------------------

--
-- Table structure for table `register_data_sc`
--

CREATE TABLE `register_data_sc` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_data_sc`
--

INSERT INTO `register_data_sc` (`id`, `email`, `password`) VALUES
(4, 'vadoliyavivek6897@gmail.com', '1234'),
(5, 'mayank@gmail.com', '568');

-- --------------------------------------------------------

--
-- Table structure for table `sub_jaldhi`
--

CREATE TABLE `sub_jaldhi` (
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_jaldhi`
--

INSERT INTO `sub_jaldhi` (`Email`) VALUES
(''),
(''),
('vadoliyavivek6897@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_data_sc`
--
ALTER TABLE `register_data_sc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_data_sc`
--
ALTER TABLE `register_data_sc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
