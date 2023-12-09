-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2023 a las 20:26:09
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
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `tema` varchar(256) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES
(1, 'Diego', 'Maradona', 'diegomaradona@gmail.com', 'Futbol', '2023-11-07 22:26:00'),
(2, 'Lionel', 'Messi', 'lio@gmail.com', 'Primero voy a hablar de fútbol, y segundo, Francia', '2023-11-07 22:27:18'),
(3, 'Francis', 'Mallmann', 'francis@hotmail.com', 'Gastronomía', '2023-11-07 22:30:04'),
(4, 'Tristán', 'Murail', 'tristan@gmail,com', 'Espectralismo', '2023-11-07 22:32:39'),
(5, 'Pablo', 'Picasso', 'picasso@gmil.com', 'Cubismo', '2023-11-07 22:33:07'),
(6, 'Stephen', 'Hawking', 'stephen@hotmail.com', 'Agujeros negros y singularidad', '2023-11-07 22:35:18'),
(7, 'Ricky', 'Sarkany', 'sarkany@gmail.com', 'Zapatos', '2023-11-07 22:38:51'),
(8, 'Jacques', 'Cousteau', 'jac@gmail.com', 'Biología marina', '2023-11-07 22:45:10'),
(9, 'Warren', 'Buffett', 'warren@hotmail.com', 'Finanzas', '2023-11-07 22:46:05'),
(10, 'Rocky', 'Balboa', 'rocky@gmail.com', 'Boxeo', '2023-11-07 22:47:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
