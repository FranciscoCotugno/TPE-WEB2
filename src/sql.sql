-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2023 a las 15:42:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpeweb2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorys`
--

CREATE TABLE `categorys` (
  `Category_id` int(11) NOT NULL,
  `Category_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorys`
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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `Product_id` int(11) NOT NULL,
  `Product_name` varchar(45) NOT NULL,
  `Milliliters` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `FK_category_id` (`Category_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorys`
--
ALTER TABLE `categorys`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `categorys` (`Category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
