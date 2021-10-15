-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-10-2021 a las 04:15:57
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
  KEY `ID_JUNTA` (`ID_JUNTA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `ID_IMAGEN` int(11) NOT NULL AUTO_INCREMENT,
  `JUNTA` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `IMAGEN` blob NOT NULL,
  PRIMARY KEY (`ID_IMAGEN`)
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_ROL`, `NOMBRE_ROL`, `DESCRIPCION`) VALUES
(1, 'VOTANTE', 'PERSONA QUE PARTICIPARA EN LA ELECIONES'),
(2, 'ADMINISTRADOR', 'PERSONA QUE GESTIONA EL SISTEMA ELIS');

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
  `NUMERO_CUENTA` bigint(15) NOT NULL,
  `SEXO` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `CONTRASEÑA` blob NOT NULL,
  `FOTO` blob,
  `TIPO_ROL` int(11) NOT NULL,
  `TIPO_CARGO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `TIPO_ROL` (`TIPO_ROL`),
  KEY `TIPO_CARGO` (`TIPO_CARGO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRES`, `APELLIDOS`, `CORREO`, `NUMERO_CUENTA`, `SEXO`, `CONTRASEÑA`, `FOTO`, `TIPO_ROL`, `TIPO_CARGO`) VALUES
(5, 'Pedro Andres', 'Gomez Arriaga', 'pedro.gomez@unah.hn', 20141007890, 'Masculino', 0x313233, NULL, 1, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boletas`
--
ALTER TABLE `boletas`
  ADD CONSTRAINT `boletas_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `boletas_ibfk_2` FOREIGN KEY (`VOTO_JUNTA`) REFERENCES `juntas` (`ID_JUNTAS`);

--
-- Filtros para la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD CONSTRAINT `cargos_ibfk_1` FOREIGN KEY (`ID_CARGOS`) REFERENCES `usuarios` (`TIPO_CARGO`);

--
-- Filtros para la tabla `elecciones`
--
ALTER TABLE `elecciones`
  ADD CONSTRAINT `elecciones_ibfk_1` FOREIGN KEY (`ID_JUNTA`) REFERENCES `juntas` (`ID_JUNTAS`);

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
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`TIPO_CARGO`) REFERENCES `cargos` (`ID_CARGOS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
