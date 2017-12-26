-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2016 a las 20:00:12
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla',
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Es el nombre de la ciudad',
  `pais` int(10) unsigned NOT NULL,
  `poblacion` int(10) unsigned NOT NULL,
  `idioma` int(10) unsigned NOT NULL,
  `superficie` decimal(9,4) NOT NULL,
  `altura` decimal(5,2) NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pais` (`pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE IF NOT EXISTS `idioma` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id`, `nombre`, `observaciones`) VALUES
(1, 'Español', 'Origen en España Europa'),
(2, 'Inglés', 'Origen en Reino Unido Inglaterra'),
(3, 'Italiano', 'Origen en Italia Europa'),
(4, 'Portugués', 'Origen en Portugal Europa'),
(5, 'Francés', 'Origen en Francia Europa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo2` char(2) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo3` char(3) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `codigo2`, `codigo3`) VALUES
(1, 'Ecuador', 'EC', 'ECU'),
(2, 'Argentina', 'AR', 'ARG'),
(3, 'España', 'ES', 'ESP'),
(4, 'Estados Unidos', 'US', 'USA'),
(5, 'Italia', 'IT', 'ITA'),
(6, 'Japón', 'JP', 'JPA'),
(7, 'Chile', 'CL', 'CLI'),
(8, 'Brazil', 'BR', 'BRA'),
(9, 'Colombia', 'CO', 'COL'),
(10, 'Perú', 'PE', 'PER');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
