-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2020 a las 18:42:34
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `my_recipes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flavor`
--

CREATE TABLE `flavor` (
  `id_flavor` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `flavor`
--

INSERT INTO `flavor` (`id_flavor`, `name`) VALUES
(1, 'salada'),
(2, 'dulce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipe`
--

CREATE TABLE `recipe` (
  `id_recipe` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `ingredient` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `finished` tinyint(4) NOT NULL DEFAULT 0,
  `step` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `id_flavor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `recipe`
--

INSERT INTO `recipe` (`id_recipe`, `name`, `ingredient`, `finished`, `step`, `id_flavor`) VALUES
(2, 'buñuelos', '1 huevo\r\n 1½ tazas de harina de trigo (210 gramos)\r\n ½ taza de azúcar (100 gramos)\r\n 1 cucharadita de polvos de hornear o levadura química tipo Royal\r\n', 1, ' trabajar los ingredientes secos,Incorpora la leche y el huevo,\r\nañade la esencia de vainilla,calienta una olla con suficiente aceite.', 2),
(3, 'tarta de choclo', ' paquete de Puré de Papa y Zapallo Knorr®\r\n2 tapas de tapas pequeñas\r\n6 huevos\r\n1 taza de queso crema\r\n1 cebolla de verdeo picada\r\n1 lata de choclo escurrido\r\n1 taza de queso en hebras\r\n1 puñadito de ', 1, '1 \r\nPrecalentar el horno a 180C.\r\n2 \r\nPreparar el puré según las instrucciones del paquete.\r\n3 \r\nEn un bowl colocar los huevos batidos, el queso crema y el queso en hebras, el verdeo, el choclo y 2⁄3 del puré.\r\n4 \r\nSobre moldes de tartas chicos colocar las tapas de tarta y hornear 5 minutos sin el r', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `mail`, `password`) VALUES
(1, '123@456', '$2y$10$RR9nAws//tarKt.mRyQNFemdmqZ87/DQsixTHBzRf95dW/eC0mYZS'),
(2, '123@456', '$2y$10$PumKZQPOTFULRX71Uycr.OPVx3FF6JC0SEoDCLpHeWB/m1gAKw9JO'),
(3, 'rosario@rosario', '$2y$10$f3kNriGB2Rk3wbofJPT3hea8tZemVdAmR9KIPRboUXsBS/XnEfh6S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flavor`
--
ALTER TABLE `flavor`
  ADD PRIMARY KEY (`id_flavor`);

--
-- Indices de la tabla `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id_recipe`),
  ADD KEY `id_flavor` (`id_flavor`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flavor`
--
ALTER TABLE `flavor`
  MODIFY `id_flavor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id_recipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
