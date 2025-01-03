-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 04:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insur`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'krishna', 'a@gmail.com', '1', 'admin'),
(9, 'krishna', 'u@gmail.com', '1', 'user'),
(10, 'krishna', 'u1@gmail.com', '1', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `claim_description` varchar(1000) NOT NULL,
  `claim_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`id`, `user_id`, `service_type`, `claim_description`, `claim_date`, `status`) VALUES
(1, 2, 'collision', 'abkackakbcbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '13-Aug-2023', 'approved'),
(2, 2, 'additional', 'cvxbc c', '13-Aug-2023', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `username`, `number`, `email`, `message`) VALUES
(1, 2, 'Ganesh', 23, 'pankajsharma5087@gmail.com', 'dfcgvhb'),
(2, 2, 'PANKAJ SHARMA', 234, 'pankajsharma5087@gmail.com', 'radhe krishna'),
(3, 2, 'Pankaj', 23, 'pankajsharma5087@gmail.com', 'awbcsk'),
(4, 2, 'Pankaj', 23, 'pankajsharma5087@gmail.com', 'awjkca'),
(5, 2, 'PANKAJ SHARMA', 234, 'pankajsharma5087@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 1000,
  `tenure` int(255) NOT NULL,
  `placed_on` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `user_id`, `name`, `email`, `number`, `address`, `vehicle_number`, `vehicle_type`, `service_type`, `price`, `tenure`, `placed_on`, `status`) VALUES
(5, 2, 'PANKAJ SHARMA', 'pankajsharma5087@gmail.com', 2147483647, 'room no 3 sanjari apt ground floor - thakurpada near icon hospital mumbra thane - 400612', 'BKJJNNLNLN', 'suv', 'liability', 1000, 1, '13-Aug-23', 'approved'),
(6, 2, 'PANKAJ SHARMA', 'pankajsharma5087@gmail.com', 2147483647, 'room no 3 sanjari apt ground floor - thakurpada near icon hospital mumbra thane - 400612', 'BKJJNNLNLN', 'sedan', 'collision', 1000, 1, '13-Aug-23', 'rejected'),
(10, 2, 'PANKAJ SHARMA', 'pankajsharma5087@gmail.com', 2147483647, 'room no 3 sanjari apt ground floor - thakurpada near icon hospital mumbra thane - 400612', 'ADWAADWDDW', 'suv', 'comprehensive', 1000, 3, '13-Aug-23', 'rejected'),
(11, 2, 'PANKAJ SHARMA', 'pankajsharma5087@gmail.com', 2147483647, 'room no 3 sanjari apt ground floor - thakurpada near icon hospital mumbra thane - 400612', 'A83R982352', 'suv', 'comprehensive', 1000, 5, '13-Aug-23', 'pending'),
(12, 9, 'PANKAJ SHARMA', 'pankajsharma5087@gmail.com', 2147483647, 'room no 3 sanjari apt ground floor - thakurpada near icon hospital mumbra thane - 400612', 'A83R982352', 'sedan', 'liability', 1000, 3, '13-Aug-23', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
