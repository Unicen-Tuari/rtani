-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2020 a las 20:41:09
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
-- Base de datos: `mis_recetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(8, 'dulce'),
(9, 'salada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id_receta` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `ingrediente` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `finalizada` tinyint(4) NOT NULL DEFAULT 0,
  `fk_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id_receta`, `titulo`, `ingrediente`, `paso`, `finalizada`, `fk_id_categoria`) VALUES
(44, 'asado ', 'carbon, leña', NULL, 1, 9),
(45, 'buñuelos', 'harina', NULL, 1, 8),
(47, 'torta', 'harina 000', NULL, 1, 8),
(49, 'ñoquis', 'ehfedth', 'drhfedbrfxhn', 0, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `mail`, `password`) VALUES
(3, '123@123', '$2y$10$Z0808ApvDa8e9D4GX1IKv.6SzdPDLsGrBjztHRora3iUgiiMeXjNS'),
(4, '123@1234', '$2y$10$YAGTFExwNVFrMxp8akseWuxqSTJltrbVS2psVHRg9o7iUPPYJdzOq'),
(5, 'mtanigomez@alumnos.exa.unicen.edu.ar', '$2y$10$lp9uT/nxoaPjuRlRWU1KB.PX1VUECwN.L3foP4iw8GWPyzfsIVuqG'),
(6, '123@456', '$2y$10$bmlW3r6jRC/OT2VknIfzNehy9ngQ8xJVqDUT55RilLQBVwR2P4rlO'),
(7, '123@gmail', '$2y$10$jbpR0uMJ82krPGEZPLmXZuSgzdYo2qr9vh.QUiB./dvJdwF8SzscK'),
(8, '12@12', '$2y$10$oseoRuZVZF8jjrt652UGK.qGyQWtENopXTDhx7xCYtursliVX3lCC'),
(9, '1@2', '$2y$10$yWEwVGur6jgMN5LN3kZ/A.7ZhIkNJoEIBU76B867Rhv6yMPEjb2b2'),
(10, '1234@12', '$2y$10$x5498akY.dG3aEUmIYlFOu/oNAV8PPNfTnRLAXz7n4nmzLyL0l5Ey'),
(11, 'rosario@rosario', '$2y$10$yP6eHHIdKhjms2BGCG31/uEo3SPwuoCu/ahvqtGr59PyeIX9WuJFS'),
(12, 'rosario1@rosario', '$2y$10$ct9aK5rQPQSiw7o7UkAqN./AYURSgVu.DfWBxhzg5nThKhd5G1rbS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id_receta`),
  ADD KEY `fk_id_categoria` (`fk_id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id_receta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
