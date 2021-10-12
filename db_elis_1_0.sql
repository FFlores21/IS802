-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-10-2021 a las 00:54:40
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_elis(1.0)`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletas`
--

DROP TABLE IF EXISTS `boletas`;
CREATE TABLE IF NOT EXISTS `boletas` (
  `ID_BOLETA` int(11) NOT NULL AUTO_INCREMENT,
  `VOTO_JUNTA` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  PRIMARY KEY (`ID_BOLETA`),
  KEY `VOTO_JUNTA` (`VOTO_JUNTA`),
  KEY `ID_USUARIO` (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

DROP TABLE IF EXISTS `cargos`;
CREATE TABLE IF NOT EXISTS `cargos` (
  `ID_CARGOS` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_CARGO` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_CARGOS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

DROP TABLE IF EXISTS `correos`;
CREATE TABLE IF NOT EXISTS `correos` (
  `ID_CORREO` int(11) NOT NULL AUTO_INCREMENT,
  `CORREO` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `NOMBRES` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDOS` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `CARRERA` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_CORREO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Guardara todos los correos institucionales por Carrera.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elecciones`
--

DROP TABLE IF EXISTS `elecciones`;
CREATE TABLE IF NOT EXISTS `elecciones` (
  `ID_ELECCION` int(11) NOT NULL AUTO_INCREMENT,
  `CENTRO_ESTUDIO` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `FECHA_FINALIZACION` date NOT NULL,
  `ID_JUNTA` int(11) NOT NULL,
  `TOTAL_VOTANTES` int(11) NOT NULL,
  PRIMARY KEY (`ID_ELECCION`),
  KEY `ID_JUNTA` (`ID_JUNTA`),
  KEY `TOTAL_VOTANTES` (`TOTAL_VOTANTES`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juntas`
--

DROP TABLE IF EXISTS `juntas`;
CREATE TABLE IF NOT EXISTS `juntas` (
  `ID_JUNTAS` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_JUNTA` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PROPUESTA` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `LOGO` blob NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  PRIMARY KEY (`ID_JUNTAS`),
  KEY `ID_USUARIO` (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ROL` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_ROL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRES` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDOS` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `CORREO` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `NUMERO_CUENTA` int(11) NOT NULL,
  `SEXO` tinyint(1) NOT NULL,
  `CONTRASEÑA` blob NOT NULL,
  `FOTO` blob NOT NULL,
  `TIPO_ROL` int(11) NOT NULL,
  `TIPO_CARGO` int(11) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `TIPO_ROL` (`TIPO_ROL`),
  KEY `TIPO_CARGO` (`TIPO_CARGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boletas`
--
ALTER TABLE `boletas`
  ADD CONSTRAINT `boletas_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `juntas`
--
ALTER TABLE `juntas`
  ADD CONSTRAINT `juntas_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`TIPO_ROL`) REFERENCES `roles` (`ID_ROL`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `juntas` (`ID_USUARIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
