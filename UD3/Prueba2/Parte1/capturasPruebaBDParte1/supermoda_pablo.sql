-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2024 a las 11:36:38
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supermoda_pablo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rebajas_pablo`
--

CREATE TABLE `rebajas_pablo` (
  `id_prenda` int(11) NOT NULL,
  `prenda` varchar(100) DEFAULT NULL,
  `foto` blob DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `rebajada` tinyint(1) DEFAULT NULL,
  `rebaja` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rebajas_pablo`
--

INSERT INTO `rebajas_pablo` (`id_prenda`, `prenda`, `foto`, `precio`, `rebajada`, `rebaja`) VALUES
(1, 'chaleco', NULL, 32.5, 1, 10),
(2, 'bufanda', NULL, 50, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rebajas_pablo`
--
ALTER TABLE `rebajas_pablo`
  ADD PRIMARY KEY (`id_prenda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rebajas_pablo`
--
ALTER TABLE `rebajas_pablo`
  MODIFY `id_prenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
