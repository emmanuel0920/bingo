-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bingo
DROP DATABASE IF EXISTS `bingo`;
CREATE DATABASE IF NOT EXISTS `bingo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `bingo`;

-- Volcando estructura para tabla bingo.a_quien
DROP TABLE IF EXISTS `a_quien`;
CREATE TABLE IF NOT EXISTS `a_quien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.ganadores
DROP TABLE IF EXISTS `ganadores`;
CREATE TABLE IF NOT EXISTS `ganadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jugador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.jugadores
DROP TABLE IF EXISTS `jugadores`;
CREATE TABLE IF NOT EXISTS `jugadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_movilizador` int(11) DEFAULT NULL,
  `id_seccional` int(11) DEFAULT NULL,
  `id_zonal` int(11) DEFAULT '1',
  `identificador` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `a_paterno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `a_materno` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `calle` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `colonia` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `c_p` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(80) COLLATE utf8_spanish2_ci DEFAULT '449-123-45-67',
  `seccion` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `casilla` varchar(10) COLLATE utf8_spanish2_ci DEFAULT '1',
  `posibilidad` int(11) DEFAULT NULL,
  `a_quien` varchar(50) COLLATE utf8_spanish2_ci DEFAULT '',
  `edad` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_capturista` int(10) DEFAULT NULL,
  `fecha_captura` datetime DEFAULT NULL,
  `existente` tinyint(4) DEFAULT '1',
  `observaciones` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `voto` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.jugadores_old
DROP TABLE IF EXISTS `jugadores_old`;
CREATE TABLE IF NOT EXISTS `jugadores_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_movilizador` int(11) NOT NULL,
  `id_seccional` int(11) NOT NULL DEFAULT '1',
  `id_zonal` int(11) NOT NULL DEFAULT '1',
  `identificador` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `a_paterno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `a_materno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `calle` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `numero` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `colonia` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `c_p` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(80) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '449-123-45-67',
  `seccion` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `casilla` varchar(10) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '1',
  `posibilidad` int(11) NOT NULL,
  `a_quien` int(11) NOT NULL,
  `edad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_capturista` int(10) NOT NULL,
  `fecha_captura` date NOT NULL,
  `existente` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.lider
DROP TABLE IF EXISTS `lider`;
CREATE TABLE IF NOT EXISTS `lider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para vista bingo.listado
DROP VIEW IF EXISTS `listado`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado392
DROP VIEW IF EXISTS `listado392`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado392` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado393
DROP VIEW IF EXISTS `listado393`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado393` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado394
DROP VIEW IF EXISTS `listado394`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado394` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado395
DROP VIEW IF EXISTS `listado395`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado395` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado396
DROP VIEW IF EXISTS `listado396`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado396` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado397
DROP VIEW IF EXISTS `listado397`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado397` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado398
DROP VIEW IF EXISTS `listado398`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado398` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado399
DROP VIEW IF EXISTS `listado399`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado399` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado400
DROP VIEW IF EXISTS `listado400`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado400` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado401
DROP VIEW IF EXISTS `listado401`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado401` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado402
DROP VIEW IF EXISTS `listado402`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado402` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado403
DROP VIEW IF EXISTS `listado403`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado403` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado404
DROP VIEW IF EXISTS `listado404`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado404` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado405
DROP VIEW IF EXISTS `listado405`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado405` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado406
DROP VIEW IF EXISTS `listado406`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado406` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado407
DROP VIEW IF EXISTS `listado407`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado407` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado408
DROP VIEW IF EXISTS `listado408`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado408` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado409
DROP VIEW IF EXISTS `listado409`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado409` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado410
DROP VIEW IF EXISTS `listado410`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado410` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado411
DROP VIEW IF EXISTS `listado411`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado411` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado412
DROP VIEW IF EXISTS `listado412`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado412` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado413
DROP VIEW IF EXISTS `listado413`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado413` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista bingo.listado414
DROP VIEW IF EXISTS `listado414`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `listado414` (
	`id` INT(11) NOT NULL,
	`identificador` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_paterno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`a_materno` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci',
	`calle` VARCHAR(200) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_ext` VARCHAR(100) NOT NULL COLLATE 'utf8_spanish2_ci',
	`numero_int` VARCHAR(10) NOT NULL COLLATE 'utf8_spanish2_ci',
	`colonia` VARCHAR(500) NOT NULL COLLATE 'utf8_spanish2_ci',
	`c_p` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish2_ci',
	`seccion` VARCHAR(6) NOT NULL COLLATE 'utf8_spanish2_ci',
	`edad` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish2_ci'
) ENGINE=MyISAM;

-- Volcando estructura para tabla bingo.movilizador
DROP TABLE IF EXISTS `movilizador`;
CREATE TABLE IF NOT EXISTS `movilizador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.padron
DROP TABLE IF EXISTS `padron`;
CREATE TABLE IF NOT EXISTS `padron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `a_paterno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `a_materno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `calle` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `numero_ext` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `numero_int` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `colonia` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `c_p` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `seccion` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.prep
DROP TABLE IF EXISTS `prep`;
CREATE TABLE IF NOT EXISTS `prep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` int(11) NOT NULL,
  `casilla` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `pan` int(11) NOT NULL,
  `pri` int(11) NOT NULL,
  `morena` int(11) NOT NULL,
  `prd` int(11) NOT NULL,
  `pv` int(11) NOT NULL,
  `pt` int(11) NOT NULL,
  `mc` int(11) NOT NULL,
  `upm` int(11) NOT NULL,
  `pla` int(11) NOT NULL,
  `na` int(11) NOT NULL,
  `jr` int(11) NOT NULL,
  `jlm` int(11) NOT NULL,
  `ds` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.seccional
DROP TABLE IF EXISTS `seccional`;
CREATE TABLE IF NOT EXISTS `seccional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `seccion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.seccion_usuario
DROP TABLE IF EXISTS `seccion_usuario`;
CREATE TABLE IF NOT EXISTS `seccion_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.tipo_usuario
DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `status` date DEFAULT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `seccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `status` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.votos
DROP TABLE IF EXISTS `votos`;
CREATE TABLE IF NOT EXISTS `votos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` int(11) NOT NULL,
  `votos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bingo.zonal
DROP TABLE IF EXISTS `zonal`;
CREATE TABLE IF NOT EXISTS `zonal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `seccion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para vista bingo.listado
DROP VIEW IF EXISTS `listado`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`))))) ;

-- Volcando estructura para vista bingo.listado392
DROP VIEW IF EXISTS `listado392`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado392`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado392` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 392) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado393
DROP VIEW IF EXISTS `listado393`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado393`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado393` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 393) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado394
DROP VIEW IF EXISTS `listado394`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado394`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado394` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 394) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado395
DROP VIEW IF EXISTS `listado395`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado395`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado395` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 395) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado396
DROP VIEW IF EXISTS `listado396`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado396`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado396` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 396) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado397
DROP VIEW IF EXISTS `listado397`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado397`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado397` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 397) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado398
DROP VIEW IF EXISTS `listado398`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado398`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado398` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 398) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado399
DROP VIEW IF EXISTS `listado399`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado399`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado399` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 399) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado400
DROP VIEW IF EXISTS `listado400`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado400`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado400` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 400) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado401
DROP VIEW IF EXISTS `listado401`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado401`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado401` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 401) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado402
DROP VIEW IF EXISTS `listado402`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado402`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado402` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 402) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado403
DROP VIEW IF EXISTS `listado403`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado403`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado403` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 403) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado404
DROP VIEW IF EXISTS `listado404`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado404`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado404` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 404) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado405
DROP VIEW IF EXISTS `listado405`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado405`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado405` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 405) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado406
DROP VIEW IF EXISTS `listado406`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado406`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado406` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 406) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado407
DROP VIEW IF EXISTS `listado407`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado407`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado407` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 407) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado408
DROP VIEW IF EXISTS `listado408`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado408`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado408` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 408) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado409
DROP VIEW IF EXISTS `listado409`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado409`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado409` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 409) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado410
DROP VIEW IF EXISTS `listado410`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado410`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado410` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 410) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado411
DROP VIEW IF EXISTS `listado411`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado411`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado411` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 411) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado412
DROP VIEW IF EXISTS `listado412`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado412`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado412` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 412) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado413
DROP VIEW IF EXISTS `listado413`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado413`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado413` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 413) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado414
DROP VIEW IF EXISTS `listado414`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado414`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado414` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 414) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
