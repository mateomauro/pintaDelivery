-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2023 a las 15:02:10
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
-- Base de datos: `pinta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delivery`
--

CREATE TABLE `delivery` (
  `id_bebida` int(10) NOT NULL,
  `bebida` varchar(30) NOT NULL,
  `capacidad` varchar(20) NOT NULL,
  `individual` int(10) NOT NULL,
  `x6` int(10) NOT NULL,
  `x12` int(10) NOT NULL,
  `x24` int(10) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `delivery`
--

INSERT INTO `delivery` (`id_bebida`, `bebida`, `capacidad`, `individual`, `x6`, `x12`, `x24`, `img`) VALUES
(2, 'quilmes', '', 0, 1100, 0, 4100, 'quilmes.png'),
(4, 'stella', '', 0, 1500, 0, 5600, 'stella.png'),
(5, 'brahma', '', 0, 1100, 0, 3900, 'brahma.png'),
(6, 'andes', '', 0, 1200, 0, 4400, 'andes.png'),
(7, 'corona', '710 cc ', 0, 0, 5000, 0, 'corona.png'),
(8, 'vino raices', '', 0, 3100, 0, 0, 'vino.png'),
(9, 'patagonia', '', 0, 1400, 0, 5000, 'patagonia.png'),
(10, 'fernet', '1L', 2000, 0, 0, 0, 'fernet.png'),
(11, 'gin bosque', '500 ml', 1800, 0, 0, 0, 'gin.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contraseña` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `contraseña`) VALUES
(1, 'admin@hotmail.com', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id_bebida` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
