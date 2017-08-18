-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2017 a las 02:41:14
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agendaf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `idEvento` int(11) NOT NULL,
  `Titulo` varchar(40) NOT NULL,
  `Fec_inicio` varchar(20) NOT NULL,
  `Hora_inicio` varchar(20) NOT NULL,
  `Fec_fin` varchar(20) DEFAULT NULL,
  `Hora_fin` varchar(20) DEFAULT NULL,
  `dia_completo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`idEvento`, `Titulo`, `Fec_inicio`, `Hora_inicio`, `Fec_fin`, `Hora_fin`, `dia_completo`) VALUES
(1, 'C ongreso para la Paz en Sevilla', '2017/09/23', '9:00 am', NULL, NULL, 0),
(2, 'Reunion Colegio', '2017/11/03', '10:00 am', '2017/11/03', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `Fec_Nacimiento` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contraseña` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `Fec_Nacimiento`, `email`, `contraseña`) VALUES
(1, 'alfredo vargas', '1980-01-01', 'alfred@dime.com.co', '0897'),
(3, 'carlos', '1986-02-07', 'carlitos3@dime.com.c', '987'),
(2, 'Lorenzo Solis', '1990-07-23', 'lorenzo2@dime.com.co', '456'),
(2, 'Lorenzo Solis', '1990-07-23', 'lorenzo2@dime.com.co', '456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
