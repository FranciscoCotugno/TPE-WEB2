-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 02:49 PM
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
-- Database: `tpeweb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `Category_id` int(11) NOT NULL,
  `Category_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`Category_id`, `Category_name`) VALUES
(1, 'Whisky'),
(2, 'Cerveza'),
(3, 'Gaseosa'),
(4, 'Gin'),
(5, 'Vodka'),
(6, 'Fernet');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_id` int(11) NOT NULL,
  `Product_name` varchar(45) NOT NULL,
  `Milliliters` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `Product_name`, `Milliliters`, `Price`, `Category_id`) VALUES
(1, 'Beefeater', 1000, 1000, 4),
(2, 'Bombay Frutos', 750, 1000, 4),
(3, 'Bombay', 750, 1000, 4),
(4, 'BullDog', 700, 1000, 4),
(5, 'Burnetts', 1000, 1000, 4),
(6, 'Gordons', 700, 1000, 4),
(7, 'Merle', 750, 1000, 4),
(8, 'Gin Gingko', 500, 1000, 4),
(9, 'Coca Cola', 1500, 1000, 3),
(10, 'Coca Cola', 2250, 1000, 3),
(11, 'Sprite', 1500, 1000, 3),
(12, 'Sprite', 2250, 1000, 3),
(13, 'Schweppes', 1500, 1000, 3),
(14, 'Absolut', 750, 1000, 5),
(15, 'Absolut Saborizado', 750, 1000, 5),
(16, 'Smirnoff', 700, 1000, 5),
(17, 'Smirnoff Green Apple', 700, 1000, 5),
(18, 'Smirnoff Watermelon', 700, 1000, 5),
(19, 'Sky', 750, 1000, 5),
(20, 'Black Label', 750, 1000, 1),
(21, 'Red Label', 750, 1000, 1),
(22, 'Jack Daniels', 750, 1000, 1),
(23, 'Jack Honey', 750, 1000, 1),
(24, 'J&B', 750, 1000, 1),
(25, 'Jameson', 700, 1000, 1),
(26, 'Buchannans', 750, 1000, 1),
(27, 'Vat 69', 700, 1000, 1),
(28, 'White Horse', 750, 1000, 1),
(29, 'Budweiser', 410, 1000, 2),
(30, 'Quilmes', 473, 1000, 2),
(31, 'Corona', 710, 1000, 2),
(32, 'Corona', 330, 1000, 2),
(33, 'Andes Rubia', 473, 1000, 2),
(34, 'Andes Roja', 473, 1000, 2),
(35, 'Andes IPA', 473, 1000, 2),
(36, 'Branca', 1000, 1000, 6),
(37, 'Branca', 750, 1000, 6),
(38, 'Branca edicion limitada', 750, 1000, 6),
(39, '1882', 750, 1000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email_user`, `password`) VALUES
(1, 'webadmin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `FK_category_id` (`Category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `categorys` (`Category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
