-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2022 a las 20:51:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `apellido` varchar(150) DEFAULT NULL,
  `correo` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `apellido`, `correo`, `clave`, `ciudad`) VALUES
(1, 'Maria', 'Rodas', 'mariaalgo.com', 'maria1234', 'Guatemala'),
(2, 'carlos', 'castillo', 'cdbarrientos', 'hola', 'guate'),
(3, 'carlos', 'castillo', 'cdbarrientos', 'hola', 'guate'),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, 'carlos', 'castillo', 'cdbarrientos', 'hola', 'ciudad'),
(7, 'carlos', 'castillo', 'cdbarrientos', 'hola', 'ciudad'),
(8, 'carlos', 'castillo', 'cdbarrientos', 'hola', 'city'),
(9, 'carlos', 'castillo', 'cdbarrientos', 'hola', 'city'),
(10, 'carlos', 'castillo', 'cdbarrientos', 'hola', 'city'),
(11, 'carlos', 'castillo', 'cdbarrientos', 'hola', 'city'),
(12, 'paulo', 'londra', 'cdbarrientos', 'hola', 'guate');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
