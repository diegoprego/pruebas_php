-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2023 a las 04:11:44
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
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores2`
--

CREATE TABLE `oradores2` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tema` varchar(256) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores2`
--

INSERT INTO `oradores2` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES
(1, '', 'Pirulo', 'diego@diego.com', 'Hola', '2023-12-09 21:59:01'),
(2, 'Diego', 'Pirulo2', 'diego@diego.com', 'Hola como te va?', '2023-12-09 22:00:09'),
(3, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:04:40'),
(4, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:05:29'),
(5, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:06:52'),
(6, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:08:00'),
(7, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:08:03'),
(8, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:08:10'),
(9, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:08:43'),
(10, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:09:09'),
(11, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:09:21'),
(12, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:09:31'),
(13, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:09:46'),
(14, 'Diego', 'Pirulo2', 'diego@diego.com', 'asadasdasd', '2023-12-09 22:10:30'),
(15, 'Diego', 'Pirulo', 'diego@diego.com', 'asdasd', '2023-12-09 23:08:45'),
(17, 'Laura', 'Pelota', 'laura@pelota.com', 'asdasdasd', '2023-12-09 23:46:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores2`
--
ALTER TABLE `oradores2`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores2`
--
ALTER TABLE `oradores2`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
