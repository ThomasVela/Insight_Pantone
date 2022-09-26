-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 00:29:48
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
-- Base de datos: `insight`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenador`
--

CREATE TABLE `disenador` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nom_ape` varchar(50) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `num_contacto` int(20) DEFAULT NULL,
  `cc` int(12) DEFAULT NULL,
  `educacion` varchar(50) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `celular` int(15) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `hoja_vida` varchar(500) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `confirmacion` int(1) NOT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disenador`
--

INSERT INTO `disenador` (`id`, `id_user`, `nom_ape`, `correo`, `num_contacto`, `cc`, `educacion`, `ciudad`, `celular`, `genero`, `fecha_nacimiento`, `bio`, `hoja_vida`, `foto`, `confirmacion`, `estado`) VALUES
(32, 5, 'camilo aguilera', 'caguilera13@gmail.com', 565786798, 910576258, 'técnico diseño 3D', 'Bucaramanga', 311220036, 'hombre', '2000-03-05', 'graduado de la universidad de la UIS(universidad industrial de Santander)', '', NULL, 0, NULL),
(34, 27, 'felipe alvares', 'felipe345@gmail.com', 318078230, 91010067, 'tecnologo', 'Bogota', 318078230, 'hombre', '0000-00-00', 'graduado del Sena', '', NULL, 0, NULL),
(37, 30, 'karen daniela', 'karen7@gmail.com', 346578893, 1103855, 'bachiller', 'Bucaramanga', 345865897, 'mujer', '2004-07-12', 'actualmente soy estudiante de la universidad UTS de Santander ', '', NULL, 0, NULL),
(38, 29, 'Thomas', 'quintero34@gmail.com', 310572646, 1132436, 'bachiller', 'florian', 35646604, 'hombre', '2002-05-10', 'me gustan los diseños abstractos, con los que me guio para hacer diseños innovadores ', '', NULL, 0, NULL),
(44, 36, 'edgar', 'edgar24@gmail.com', 312451463, 31241233, 'Tecnologo', 'Bogota', 4243, 'hombre', '2022-09-03', 'técnico en diseño 3D y actualmente estudiando el tecnólogo', 'foto1.jpg', NULL, 0, NULL),
(45, 37, 'yamile tatiana', 'yamile1@gmail.com', 138678, 1208755, 'Básico Primaria', 'bogota', 31156788, 'mujer', '2022-09-06', 'vine a esta página para conseguir trabajo, sí le interesa unno de mis diseños llameme', 'foto4.jpg', NULL, 0, NULL),
(47, 44, 'juan', 'juanB@gmail.com', 311247, 130313, 'Básico Secundaria', 'Medellin', 3123124, 'Hombre', '2022-09-07', 'diseñador sin experiencia laboral graduado en el año 2022', 'victor.jpg', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleador`
--

CREATE TABLE `empleador` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom_ape` varchar(50) DEFAULT NULL,
  `ciudad` varchar(20) DEFAULT NULL,
  `celular` int(15) NOT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `empresa` varchar(40) DEFAULT NULL,
  `nit` int(12) DEFAULT NULL,
  `numero_contacto` int(30) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleador`
--

INSERT INTO `empleador` (`id`, `id_user`, `nom_ape`, `ciudad`, `celular`, `correo`, `empresa`, `nit`, `numero_contacto`, `foto`) VALUES
(1, 0, '', '', 121432, '', '', 0, 0, NULL),
(2, 0, 'Thomas Quintero', 'Bogota', 311574542, 'TQ@gmail.com', 'ewre', 11312, 457535, NULL),
(3, 0, 'empleador', 'bogota', 4124213, 'empleador@gmal.com', 'empleador', 213124, 242312, NULL),
(5, 42, 'probar', 'Bogota', 31254234, 'probar@gmail.com', 'SAS', 1231253225, 31135324, NULL),
(8, 47, 'juliethmmvrga', 'bogota', 4574555, 'pep@gmail.com', 'tigo S.A', 10102354, 78643545, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id` int(11) NOT NULL,
  `id_e` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `salario` int(11) NOT NULL,
  `horario` time NOT NULL,
  `descripcion` text NOT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id`, `id_e`, `cargo`, `ciudad`, `direccion`, `salario`, `horario`, `descripcion`, `correo`, `num`) VALUES
(1, 0, 'swdefrtgy', 'swedrftgyh', 'dfvgbhyj', 0, '00:00:00', 'edws ', 'pep@gmail.com', 233333);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL,
  `id_d` int(11) DEFAULT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fotop` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `id_d`, `titulo`, `descripcion`, `fotop`) VALUES
(162, 34, 'prueba', 'foto1', 'fondo.jpg'),
(163, 34, 'prueba', 'prueba', 'fondo.jpg'),
(164, 34, 'prueba', 'puente', 'fondo.jpg'),
(165, 34, 'sdfds', 'festival', 'fondo.jpg'),
(173, 34, 'ads', 'edad', 'fondo.jpg'),
(177, 34, 'asda', 'asda', 'foto3.jpg'),
(181, 37, 'como', 'como', 'foto3.jpg'),
(187, 38, 'asd', 'asdas', 'fondo.jpg'),
(191, 44, 'probando', 'probando', 'foto3.jpg'),
(192, 32, 'alicia', 'alicia', 'foto2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'empleador'),
(2, 'disenador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `idrol` int(11) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL,
  `foto` varchar(500) NOT NULL,
  `confirmacion` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `idrol`, `nombres`, `correo`, `empresa`, `contrasena`, `foto`, `confirmacion`) VALUES
(36, 2, 'edgar', 'edgar24@gmail.com', '', 'rozoD10.', '2.jpg', 1),
(37, 2, 'yamile tatiana ', 'yamile1@gmail.com', '', 'yamile01#', 'foto3.jpg', 1),
(44, 2, 'juan', 'juanB@gmail.com', '', 'juanito09C.', 'foto.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `disenador`
--
ALTER TABLE `disenador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleador`
--
ALTER TABLE `empleador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_d` (`id_d`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrol` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `disenador`
--
ALTER TABLE `disenador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `empleador`
--
ALTER TABLE `empleador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`id_d`) REFERENCES `disenador` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
