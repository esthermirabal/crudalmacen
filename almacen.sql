-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2023 a las 12:37:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` int(10) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `fechaAlta` date NOT NULL DEFAULT current_timestamp(),
  `nombre` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `categoria`, `fechaAlta`, `nombre`, `precio`, `imagen`) VALUES
(1, 'Verduras', '2023-06-28', 'Tomates', 895, 'imagenes/tomate.png'),
(8, 'Verduras', '2023-07-27', 'Tomate', 2550, 'imagenes/producto.png'),
(9, 'Verduras', '2023-07-27', 'Tomate', 800, ''),
(10, 'Carne', '2023-07-27', 'Matambre', 900, ''),
(11, 'Verduras', '2023-07-27', 'Matambre', 2500, ''),
(12, 'Verduras', '2023-07-27', 'Matambre', 2500, 'imagenes/tomate.png'),
(13, 'Verduras', '2023-07-27', 'Matambre', 2500, ''),
(14, 'locro', '2023-07-27', 'granos', 6000, ''),
(15, 'locro', '2023-07-27', 'granos', 6000, ''),
(16, 'locro', '2023-07-27', 'granos', 6000, ''),
(17, 'locro', '2023-07-27', 'granos', 6000, ''),
(18, 'locro', '2023-07-27', 'granos', 6000, ''),
(19, 'Granos', '2023-07-27', 'Locro', 2500, ''),
(20, 'Granos', '2023-07-27', 'Locro', 2500, ''),
(21, 'Verduras', '2023-07-27', 'arvejas', 522, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `clave`) VALUES
(1, 'admin', '1234'),
(2, 'andre', '2323');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
