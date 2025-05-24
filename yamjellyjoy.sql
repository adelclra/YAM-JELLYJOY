-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 11:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yamjellyjoy`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `order_date` date DEFAULT curdate(),
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `address` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `order_date`, `status`, `address`, `phone_number`, `quantity`) VALUES
(2, 'anggi BOTAK', '2024-06-06', 'Pending', 'universitas sam ratulangi', '089757684657', 12),
(3, 'tessa', '2024-06-05', 'Pending', 'Kost H2', '089768574635', 1),
(4, 'Adellsd', '2024-06-07', 'pending', 'karombasan atas', '089887987665', 2),
(7, 'REWAN', '2024-06-07', 'pending', 'minut', '083546778912', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'mikel', 'mikelnoppo03@gmail.com', '$2y$10$PM0S1IR.xcJeCKXsu8hDDeWLgwL5D3pCaMHXFB1VAtaa0TSbYiETq', 'admin'),
(2, 'adel', 'adelclara@gmai.com', '$2y$10$w62oNEl31XltInQ2UhjBhOcrkvOiLkLVW0uLjTa473Ev8XTQwgqRG', 'user'),
(3, 'tessa ', 'yuliet@sompotan.com', '$2y$10$XhMYfm3jczaQyACHn9Qy2O899JW.JPeZBdjoWaFj.t80GHfEYXnEG', 'admin'),
(11, 'Michael', 'michaelmanoppo026@student.unsrat.ac.id', '$2y$10$/zMAq39DEyVuwtBarjOypuedmHVKwSapp7AODGLDxSFz6EjzVaCbK', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
