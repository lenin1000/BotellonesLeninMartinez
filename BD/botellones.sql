-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2023 a las 20:27:50
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `botellones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `cedula` int(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `cedula`, `nombre`, `apellido`) VALUES
(1, 27071877, 'Anny', 'Martinez'),
(2, 27071874, 'Franco', 'Martinez'),
(3, 30251283, 'Keyla', 'Luzardo'),
(4, 30251284, 'Lenin', 'Martinez'),
(5, 11949647, 'Carmen', 'Luzardo'),
(6, 2846789, 'cecilia', 'Luzardo'),
(7, 7456123, 'Francisco', 'Duarte'),
(8, 12456789, 'Carmela', 'Pinkoh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_Empleado` int(11) NOT NULL,
  `cedula` int(8) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_Empleado`, `cedula`, `nombre`, `rol`, `contrasena`) VALUES
(1, 30251284, 'Lenin', 'Administrador', '12345'),
(2, 10430044, 'MIGUEL', 'Empleado', '12345'),
(3, 11949647, 'Carmen', 'Empleado', '12345'),
(4, 11949647, 'Carmen', 'Empleado', '12345'),
(5, 30250461, 'Genesis', 'Empleado', '12345'),
(6, 28009470, 'Arianna', 'Empleado', '12345'),
(7, 30123519, 'Boo', 'Administrador', '12345'),
(8, 27071877, 'Lenin ', 'Empleado', '12345'),
(9, 11949648, 'Carmen', 'Empleado', '12345'),
(10, 18789526, '04146119988', 'Empleado', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `cedula_cliente` int(9) DEFAULT NULL,
  `nombre_cliente` varchar(20) DEFAULT NULL,
  `apellido_Cliente` varchar(20) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `cantidad_producto` int(11) DEFAULT NULL,
  `fecha_hora_venta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_cliente`, `cedula_cliente`, `nombre_cliente`, `apellido_Cliente`, `ubicacion`, `cantidad_producto`, `fecha_hora_venta`) VALUES
(1, 1, 27071877, 'Anny', 'Martinez', 'Maracaibo', 5, '2023-10-22 03:41:22'),
(2, 3, 30251283, 'Keyla', 'Luzardo', 'Maracaibo', 7, '2023-10-22 05:30:16'),
(3, 1, 27071877, 'Anny', 'Martinez', 'San Cristobal', 8, '2023-10-22 15:17:06'),
(4, 1, 27071877, 'Anny', 'Martinez', 'Maracaibo', 7, '2023-10-22 15:32:38'),
(5, 3, 30251283, 'Keyla', 'Luzardo', 'Maracaibo', 8, '2023-10-22 15:35:48'),
(6, 1, 27071877, 'Anny', 'Martinez', 'Maracaibo', 7, '2023-10-22 15:36:40'),
(7, 4, 30251284, 'Lenin', 'Martinez', 'Maracaibo', 7, '2023-10-22 15:55:42'),
(8, 4, 30251284, 'Lenin', 'Martinez', 'Valencia', 8, '2023-10-22 17:33:21'),
(9, 5, 11949647, 'Carmen', 'Luzardo', 'San Cristobal', 12, '2023-10-22 17:34:15'),
(10, 1, 27071877, 'Anny', 'Martinez', 'Barquisimeto', 2, '2023-10-22 17:58:03'),
(11, 4, 30251284, 'Lenin', 'Martinez', 'Maracaibo', 54, '2023-10-22 18:03:18'),
(12, 4, 30251284, 'Lenin', 'Martinez', 'San Cristobal', 50, '2023-10-22 18:23:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_Empleado`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
