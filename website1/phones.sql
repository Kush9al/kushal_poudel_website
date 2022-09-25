-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 09:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first` varchar(150) NOT NULL,
  `last` varchar(150) NOT NULL,
  `message` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first`, `last`, `message`) VALUES
(1, 'first', 'last', ''),
(2, 'first', 'last', ''),
(3, 'Prabin', 'Subedi', ''),
(4, 'Prabin', 'Subedi', ''),
(5, 'Prabin', 'Subedi', ''),
(6, 'Prabin', 'Subedi', 'hello'),
(7, 'prabin', 'subedi', 'This is my message you should be happy');

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE `joinus` (
  `id` int(11) NOT NULL,
  `emaill` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`id`, `emaill`) VALUES
(2, 'thisis@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `phone_details`
--

CREATE TABLE `phone_details` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `category` enum('android','iphone') NOT NULL,
  `price` int(11) NOT NULL,
  `date_uploaded` datetime NOT NULL DEFAULT current_timestamp(),
  `description` varchar(500) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone_details`
--

INSERT INTO `phone_details` (`id`, `name`, `category`, `price`, `date_uploaded`, `description`, `image`) VALUES
(16, 'smasung', 'android', 12000, '2022-07-25 18:12:00', 'hello this is samsung', 'samsung-galaxy-s21-5g-.jpg'),
(17, 'Huawei Y7', 'android', 32000, '2022-07-27 12:24:17', 'This is huawei Y7 used for 5 months. Interested can contact me.', 'huawei y7.png'),
(18, 'Used IPhone 8', 'iphone', 20000, '2022-07-27 12:39:04', 'This is iphone 8.', 'iphone 8plus.jpg'),
(19, 'oppo f9', 'android', 12000, '2022-07-27 12:42:29', 'used for 1 year', 'oppo f9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Prabin', 'subediprabin66@gmail.com', '5d41402abc4b2a76b9719d911017c592');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone_details`
--
ALTER TABLE `phone_details`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phone_details`
--
ALTER TABLE `phone_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;