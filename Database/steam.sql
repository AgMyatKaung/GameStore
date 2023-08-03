-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 06:28 PM
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
-- Database: `steam`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardnumber`
--

CREATE TABLE `cardnumber` (
  `id` int(11) UNSIGNED NOT NULL,
  `cardno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardnumber`
--

INSERT INTO `cardnumber` (`id`, `cardno`) VALUES
(1, '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `freedownload`
--

CREATE TABLE `freedownload` (
  `id` int(10) UNSIGNED NOT NULL,
  `gamename` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `freedownload`
--

INSERT INTO `freedownload` (`id`, `gamename`) VALUES
(1, 'our-image1.jpg'),
(2, 'our-image1.jpg'),
(3, 'our-image2.jpg'),
(4, 'our-image3.jpg'),
(5, 'elring.jpg'),
(6, 'ghostw.png'),
(7, 'The_Quarry.png'),
(8, 'Halo.png'),
(9, 'cod2.jpg'),
(10, 'tunic1.jpg'),
(11, 'stanley.webp'),
(12, 'olli1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `user_name`, `user_email`, `subject`, `content`) VALUES
(1, 'John', 'John@gmail.com', 'Testing', 'Hi How are You?'),
(2, 'John', 'John@gmail.com', 'Very Good Website', 'Awesome Hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'John', 'john@gmail.com', '$2y$10$X/eMDFbjkM.9xFjfmqcpeuPxLswlodOiYK6ehKhfjRShv/m4zs0WW'),
(2, 'Jill', 'jill@gmail.com', '$2y$10$AYBv/xu9Dxj7MPErOQoqyebZIekpk8pcI.k27qz7DW5xxHZhQUX.S'),
(3, 'Mary', 'mary@gmail.com', '$2y$10$OsKP37rgkPIxSnpl7qv3duoc0vdHH1LeQRXT72VWDfjoCoO/orpoK'),
(4, 'Joe', 'joe@gmail.com', '$2y$10$sVqFdb2JNeTRWb1haUAYhuAA8OzVdLKdNR0amcyaipY/mC.c2NGme');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardnumber`
--
ALTER TABLE `cardnumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freedownload`
--
ALTER TABLE `freedownload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
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
-- AUTO_INCREMENT for table `cardnumber`
--
ALTER TABLE `cardnumber`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `freedownload`
--
ALTER TABLE `freedownload`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
