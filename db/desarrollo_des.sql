-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2016 a las 15:12:28
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `desarrollo_des`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma_f1_aei`
--

CREATE TABLE IF NOT EXISTS `cronograma_f1_aei` (
  `id` int(11) NOT NULL,
  `cronograma_aei_visita_id` int(11) DEFAULT NULL,
  `grado` int(11) DEFAULT NULL,
  `seccion` varchar(11) DEFAULT NULL,
  `nro_estudiantes` int(11) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `c1_p1` int(11) DEFAULT NULL,
  `c1_p2` int(11) DEFAULT NULL,
  `c1_p3` int(11) DEFAULT NULL,
  `c2_p1` int(11) DEFAULT NULL,
  `c2_p2` int(11) DEFAULT NULL,
  `c2_p3` int(11) DEFAULT NULL,
  `c3_p1` int(11) DEFAULT NULL,
  `c3_p2` int(11) DEFAULT NULL,
  `c3_p3` int(11) DEFAULT NULL,
  `c4_p1` int(11) DEFAULT NULL,
  `c4_p2` int(11) DEFAULT NULL,
  `c4_p3` int(11) DEFAULT NULL,
  `c5_p1` int(11) DEFAULT NULL,
  `c5_p2` int(11) DEFAULT NULL,
  `c5_p3` int(11) DEFAULT NULL,
  `c6_p1` int(11) DEFAULT NULL,
  `c6_p2` int(11) DEFAULT NULL,
  `c6_p3` int(11) DEFAULT NULL,
  `aspecto_abordado` varchar(500) DEFAULT NULL,
  `compromisos` varchar(500) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma_f2_aei`
--

CREATE TABLE IF NOT EXISTS `cronograma_f2_aei` (
  `id` int(11) NOT NULL,
  `cronograma_aei_visita_id` int(11) DEFAULT NULL,
  `grado` int(11) DEFAULT NULL,
  `seccion` varchar(11) DEFAULT NULL,
  `nro_estudiantes` int(11) DEFAULT NULL,
  `hora_inicio` datetime DEFAULT NULL,
  `hora_fin` datetime DEFAULT NULL,
  `c1_p1` int(11) DEFAULT NULL,
  `c1_p2` int(11) DEFAULT NULL,
  `c1_p3` int(11) DEFAULT NULL,
  `c2_p1` int(11) DEFAULT NULL,
  `c2_p2` int(11) DEFAULT NULL,
  `c2_p3` int(11) DEFAULT NULL,
  `c3_p1` int(11) DEFAULT NULL,
  `c3_p2` int(11) DEFAULT NULL,
  `c3_p3` int(11) DEFAULT NULL,
  `c4_p1` int(11) DEFAULT NULL,
  `c4_p2` int(11) DEFAULT NULL,
  `c4_p3` int(11) DEFAULT NULL,
  `c5_p1` int(11) DEFAULT NULL,
  `c5_p2` int(11) DEFAULT NULL,
  `c5_p3` int(11) DEFAULT NULL,
  `c6_p1` int(11) DEFAULT NULL,
  `c6_p2` int(11) DEFAULT NULL,
  `c6_p3` int(11) DEFAULT NULL,
  `aspecto_abordado` varchar(500) DEFAULT NULL,
  `compromisos` varchar(500) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma_visita_aei`
--

CREATE TABLE IF NOT EXISTS `cronograma_visita_aei` (
  `id` int(11) NOT NULL,
  `docente_id` int(11) DEFAULT NULL,
  `visita` int(11) DEFAULT NULL,
  `usuario_creador` int(11) DEFAULT NULL,
  `codigo_modular` varchar(7) DEFAULT NULL,
  `fecha_visita` datetime DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cronograma_f1_aei`
--
ALTER TABLE `cronograma_f1_aei`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cronograma_f2_aei`
--
ALTER TABLE `cronograma_f2_aei`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cronograma_visita_aei`
--
ALTER TABLE `cronograma_visita_aei`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cronograma_f1_aei`
--
ALTER TABLE `cronograma_f1_aei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cronograma_f2_aei`
--
ALTER TABLE `cronograma_f2_aei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cronograma_visita_aei`
--
ALTER TABLE `cronograma_visita_aei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
