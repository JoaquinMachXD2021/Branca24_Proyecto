-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2024 a las 20:33:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa_b24`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_productos`
--

CREATE TABLE `categoria_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria_productos`
--

INSERT INTO `categoria_productos` (`id`, `nombre`) VALUES
(1, 'Refresco'),
(2, 'Bebida alcohólica'),
(3, 'Lata'),
(4, 'Botella'),
(5, 'Botella de vidrio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Coca Cola 2,25', 'Botella de Coca Cola de 2.25 litros', 120.00),
(2, 'Fernet', 'Botella de Fernet de 750 ml', 450.00),
(3, 'Pomelo 2,25', 'Botella de Pomelo de 2.25 litros', 100.00),
(4, 'Pilsen', 'Lata de cerveza Pilsen de 473 ml', 70.00),
(5, 'William Lawson\'s', 'Botella de whisky William Lawson\'s de 750 ml', 700.00),
(6, 'Grapa Miel Vesubio', 'Botella de Grapa Miel Vesubio de 750 ml', 320.00),
(7, 'Sandy', 'Botella de bebida Sandy de 1 litro', 150.00),
(8, 'Patricia', 'Lata de cerveza Patricia de 473 ml', 75.00),
(9, 'Norteña', 'Lata de cerveza Norteña de 473 ml', 70.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `contrasena` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `rol`, `contrasena`) VALUES
(17, 'Joaquin Machado', 'Sr.InfinitoXD@gmail.com', 'Usuario01', 'administrador', 'JoaquinAAA'),
(18, 'Ramiro Demora', 'Rdemora@gmail.com', 'RD01', 'usuario', 'Ramiro1080'),
(19, 'Eduardo Torres', 'Etorres@gmail.com', 'ET02', 'usuario', 'Eduardo2Torres'),
(22, 'Pedro Pica Piedras', 'Piedra64@gmail.com', 'Piedras301', 'usuario', '$2y$10$VHfjQRS2rzUZh6Dj6GkVquESodReBFTwCEhx0ljUlp8Vu6w2O1UaG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
