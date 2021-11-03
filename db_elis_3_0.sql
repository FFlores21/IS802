-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2021 at 04:03 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elis(3.0)`
--

-- --------------------------------------------------------

--
-- Table structure for table `boletas`
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
-- Table structure for table `cargos`
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
-- Table structure for table `correos`
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
-- Table structure for table `elecciones`
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
-- Table structure for table `imagenes`
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
-- Table structure for table `juntas`
--

DROP TABLE IF EXISTS `juntas`;
CREATE TABLE IF NOT EXISTS `juntas` (
  `ID_JUNTA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_JUNTA` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PROPUESTA` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `LOGO` blob NOT NULL,
  PRIMARY KEY (`ID_JUNTA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mensajes_soli`
--

DROP TABLE IF EXISTS `mensajes_soli`;
CREATE TABLE IF NOT EXISTS `mensajes_soli` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MENSAJE_SOLICITUD` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `FECHA` date NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_SALA` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SALA` (`ID_SALA`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ROL` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_ROL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID_ROL`, `NOMBRE_ROL`, `DESCRIPCION`) VALUES
(1, 'VOTANTE', 'PERSONA QUE PARTICIPARA EN LA ELECIONES'),
(2, 'ADMINISTRADOR', 'PERSONA QUE GESTIONA EL SISTEMA ELIS');

-- --------------------------------------------------------

--
-- Table structure for table `salas`
--

DROP TABLE IF EXISTS `salas`;
CREATE TABLE IF NOT EXISTS `salas` (
  `ID_SALA` int(11) NOT NULL AUTO_INCREMENT,
  `FECHA` date NOT NULL,
  PRIMARY KEY (`ID_SALA`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sala_usuario`
--

DROP TABLE IF EXISTS `sala_usuario`;
CREATE TABLE IF NOT EXISTS `sala_usuario` (
  `ID_SALA_U` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_SALA` int(11) NOT NULL,
  PRIMARY KEY (`ID_SALA_U`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SALA` (`ID_SALA`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRES` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDOS` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `CORREO` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `NUMERO_CUENTA` bigint(15) NOT NULL,
  `SEXO` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `CONTRASENA` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `FOTO` blob,
  `TIPO_ROL` int(11) NOT NULL,
  `TIPO_CARGO` int(11) DEFAULT NULL,
  `ID_JUNTA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `TIPO_ROL` (`TIPO_ROL`),
  KEY `TIPO_CARGO` (`TIPO_CARGO`),
  KEY `ID_JUNTA` (`ID_JUNTA`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRES`, `APELLIDOS`, `CORREO`, `NUMERO_CUENTA`, `SEXO`, `CONTRASENA`, `FOTO`, `TIPO_ROL`, `TIPO_CARGO`, `ID_JUNTA`) VALUES
(5, 'Pedro Andres', 'Gomez Arriaga', 'pedro.gomez@unah.hn', 20141007890, 'Masculino', '123', NULL, 1, NULL, NULL),
(6, 'Juan Francisco', 'Perez Rodriguez', 'asd.asd@unah.hn', 20151004745, 'Masculino', 'asd', NULL, 1, NULL, NULL),
(10, 'Carlos Enriquee', 'Saravia Martinez', 'carlos.saraviam@unah.hn', 20151004747, 'Masculino', 'asd', NULL, 1, NULL, NULL),
(11, 'Javier Enrique', 'Martinez Medina', 'javier.martinezm@unah.hn', 20101005547, 'Masculino', '321', NULL, 1, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boletas`
--
ALTER TABLE `boletas`
  ADD CONSTRAINT `boletas_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `boletas_ibfk_2` FOREIGN KEY (`VOTO_JUNTA`) REFERENCES `juntas` (`ID_JUNTA`);

--
-- Constraints for table `cargos`
--
ALTER TABLE `cargos`
  ADD CONSTRAINT `cargos_ibfk_1` FOREIGN KEY (`ID_CARGOS`) REFERENCES `usuarios` (`TIPO_CARGO`);

--
-- Constraints for table `elecciones`
--
ALTER TABLE `elecciones`
  ADD CONSTRAINT `elecciones_ibfk_1` FOREIGN KEY (`ID_JUNTA`) REFERENCES `juntas` (`ID_JUNTA`);

--
-- Constraints for table `mensajes_soli`
--
ALTER TABLE `mensajes_soli`
  ADD CONSTRAINT `fk_salam_id` FOREIGN KEY (`ID_SALA`) REFERENCES `salas` (`ID_SALA`),
  ADD CONSTRAINT `fk_usuariom_id` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Constraints for table `sala_usuario`
--
ALTER TABLE `sala_usuario`
  ADD CONSTRAINT `fk_sala_id` FOREIGN KEY (`ID_SALA`) REFERENCES `salas` (`ID_SALA`),
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`TIPO_ROL`) REFERENCES `roles` (`ID_ROL`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`TIPO_CARGO`) REFERENCES `cargos` (`ID_CARGOS`),
  ADD CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`ID_JUNTA`) REFERENCES `juntas` (`ID_JUNTA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
