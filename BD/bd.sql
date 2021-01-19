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
CREATE DATABASE IF NOT EXISTS `bingo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `bingo`;

-- Volcando estructura para tabla bingo.a_quien
CREATE TABLE IF NOT EXISTS `a_quien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.a_quien: ~3 rows (aproximadamente)
DELETE FROM `a_quien`;
/*!40000 ALTER TABLE `a_quien` DISABLE KEYS */;
INSERT INTO `a_quien` (`id`, `nombre`) VALUES
	(1, 'PAN'),
	(2, 'PAN'),
	(3, 'PAN');
/*!40000 ALTER TABLE `a_quien` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.ganadores
CREATE TABLE IF NOT EXISTS `ganadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jugador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.ganadores: ~3 rows (aproximadamente)
DELETE FROM `ganadores`;
/*!40000 ALTER TABLE `ganadores` DISABLE KEYS */;
INSERT INTO `ganadores` (`id`, `id_jugador`, `id_usuario`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 2, 1);
/*!40000 ALTER TABLE `ganadores` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.jugadores
CREATE TABLE IF NOT EXISTS `jugadores` (
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
  `a_quien` varchar(50) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `edad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_capturista` int(10) NOT NULL,
  `fecha_captura` datetime NOT NULL,
  `existente` tinyint(4) DEFAULT '1',
  `observaciones` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `voto` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.jugadores: ~18 rows (aproximadamente)
DELETE FROM `jugadores`;
/*!40000 ALTER TABLE `jugadores` DISABLE KEYS */;
INSERT INTO `jugadores` (`id`, `id_usuario`, `id_movilizador`, `id_seccional`, `id_zonal`, `identificador`, `nombre`, `a_paterno`, `a_materno`, `calle`, `numero`, `colonia`, `c_p`, `telefono`, `seccion`, `casilla`, `posibilidad`, `a_quien`, `edad`, `fecha_nacimiento`, `id_capturista`, `fecha_captura`, `existente`, `observaciones`, `voto`) VALUES
	(1, 3, 1, 1, 1, NULL, 'Espino', 'José Manuel', 'Castañeda', 'Casa Blanca', '807', 'Casa Blanca', '20297', '4491291547', '123', '123', 90, '2', '34', '1986/03/23', 2, '2020-11-30 00:00:00', 0, NULL, NULL),
	(2, 3, 1, 1, 1, NULL, 'Espino', 'juan manuel', 'Castañeda', 'Casa Blanca', '807', 'Casa Blanca', '20297', '449912456', '123', '123', 90, '2', '34', '1986/03/23', 2, '2020-11-30 00:00:00', 0, NULL, NULL),
	(3, 3, 1, 1, 1, NULL, 'Espino', 'María', 'Castañeda', 'Casa Blanca', '807', 'Casa Blanca', '20297', '4492547861', '123', '123', 90, '2', '34', '1986/03/23', 2, '2020-11-30 17:57:25', 0, NULL, NULL),
	(4, 3, 1, 1, 1, NULL, 'esparza', 'Salvador', 'castro', 'Casa Blanca', '808', 'Casa Blanca', '20297', '4491472583', '123', '123', 90, '2', '34', '1986/03/20', 2, '2020-11-30 17:58:17', 0, NULL, NULL),
	(5, 3, 1, 1, 1, NULL, 'esparza', 'Pedro', 'castro', 'Casa Blanca', '808', 'Casa Blanca', '20297', '4492583691', '123', '123', 90, '2', '34', '1986/03/20', 2, '2020-11-30 17:58:42', 0, NULL, NULL),
	(6, 3, 1, 1, 1, NULL, 'estrada', 'Juan', 'de las cuerdas', 'Casa Blanca', '810', 'Casa Blanca', '20297', '44934785', '123', '0', 90, '2', '50', '1970/11/23', 2, '2020-11-30 18:12:50', 0, NULL, NULL),
	(7, NULL, 2, 1, 1, '12345687', 'juan manuel', 'castañon', 'espildola', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '321', '0', 100, 'no dijo', '34', '1986/03/23', 2, '2021-01-19 09:56:14', 0, NULL, 1),
	(8, NULL, 2, 1, 1, '12345687', 'juan manuel', 'castañon', 'espildola', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '321', '0', 100, 'no dijo', '34', '1986/03/23', 2, '2021-01-19 10:00:10', 0, NULL, 1),
	(9, NULL, 2, 1, 1, '12345687', 'juan manuel', 'castañon', 'espildola', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '321', '0', 100, 'no dijo', '34', '1986/03/23', 2, '2021-01-19 10:00:33', 0, NULL, 1),
	(10, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:05:26', 0, NULL, 0),
	(11, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:06:08', 0, NULL, 0),
	(12, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:20:15', 0, NULL, 0),
	(13, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:20:42', 0, NULL, 0),
	(14, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:25:39', 0, NULL, 0),
	(15, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:26:25', 0, NULL, 0),
	(16, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:27:26', 0, NULL, 0),
	(17, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:29:54', 0, NULL, 0),
	(18, NULL, 2, 1, 1, '6351616156', 'julio', 'catillo', 'esperanto', 'Casa Blanca', '806', 'Casa Blanca', '20297', '4491291547', '509', '0', 100, 'no dijo', '33', '1987/03/23', 2, '2021-01-19 10:30:29', 0, NULL, 0);
/*!40000 ALTER TABLE `jugadores` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.jugadores_old
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

-- Volcando datos para la tabla bingo.jugadores_old: ~0 rows (aproximadamente)
DELETE FROM `jugadores_old`;
/*!40000 ALTER TABLE `jugadores_old` DISABLE KEYS */;
/*!40000 ALTER TABLE `jugadores_old` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.lider
CREATE TABLE IF NOT EXISTS `lider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.lider: ~1 rows (aproximadamente)
DELETE FROM `lider`;
/*!40000 ALTER TABLE `lider` DISABLE KEYS */;
INSERT INTO `lider` (`id`, `id_usuario`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `lider` ENABLE KEYS */;

-- Volcando estructura para vista bingo.listado
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
CREATE TABLE IF NOT EXISTS `movilizador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.movilizador: ~11 rows (aproximadamente)
DELETE FROM `movilizador`;
/*!40000 ALTER TABLE `movilizador` DISABLE KEYS */;
INSERT INTO `movilizador` (`id`, `nombre`) VALUES
	(1, 'Ramón Montoya'),
	(2, '1'),
	(3, 'julio catillo esperanto'),
	(4, 'julio catillo esperanto'),
	(5, 'julio catillo esperanto'),
	(6, 'julio catillo esperanto'),
	(7, 'julio catillo esperanto'),
	(8, 'julio catillo esperanto'),
	(9, 'julio catillo esperanto'),
	(10, 'julio catillo esperanto'),
	(11, 'julio catillo esperanto');
/*!40000 ALTER TABLE `movilizador` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.padron
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

-- Volcando datos para la tabla bingo.padron: ~1 rows (aproximadamente)
DELETE FROM `padron`;
/*!40000 ALTER TABLE `padron` DISABLE KEYS */;
INSERT INTO `padron` (`id`, `identificador`, `nombre`, `a_paterno`, `a_materno`, `calle`, `numero_ext`, `numero_int`, `colonia`, `c_p`, `seccion`, `edad`) VALUES
	(1, 'caem860323es3', 'Jose Mauel', 'Casgtañeda', 'Espino', 'Casa Blanca', '806', '0', 'Casa Blanca', '20297', '123', '34');
/*!40000 ALTER TABLE `padron` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.prep
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

-- Volcando datos para la tabla bingo.prep: ~0 rows (aproximadamente)
DELETE FROM `prep`;
/*!40000 ALTER TABLE `prep` DISABLE KEYS */;
/*!40000 ALTER TABLE `prep` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.seccional
CREATE TABLE IF NOT EXISTS `seccional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `seccion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.seccional: ~1 rows (aproximadamente)
DELETE FROM `seccional`;
/*!40000 ALTER TABLE `seccional` DISABLE KEYS */;
INSERT INTO `seccional` (`id`, `nombre`, `direccion`, `telefono`, `seccion`) VALUES
	(1, 'Fernando Emmanuel Martinez', 'Flores 123', '4491234567', 123);
/*!40000 ALTER TABLE `seccional` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.seccion_usuario
CREATE TABLE IF NOT EXISTS `seccion_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.seccion_usuario: ~0 rows (aproximadamente)
DELETE FROM `seccion_usuario`;
/*!40000 ALTER TABLE `seccion_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `seccion_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.tipo_usuario
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `status` date DEFAULT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.tipo_usuario: ~7 rows (aproximadamente)
DELETE FROM `tipo_usuario`;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`, `status`) VALUES
	(1, 'Super Administrador', NULL),
	(2, 'Reportes', NULL),
	(3, 'Casilla', NULL),
	(4, 'Seccional', NULL),
	(5, 'Zonal', NULL),
	(6, 'Capturista Jugadores', NULL),
	(7, 'Capturista Lider', NULL);
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.usuarios
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

-- Volcando datos para la tabla bingo.usuarios: ~3 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `telefono`, `usuario`, `password`, `id_tipo_usuario`, `seccion`, `status`) VALUES
	(1, 'SUPER ADMIN', '449123456', 'soporte', '07ea4bfae142a9191cf78d9909c5e508', 1, '0', NULL),
	(2, 'Administrador', '4496789012', 'admin', '838b543b67bddf63b81c24da70f98fff', 1, '0', NULL),
	(3, 'casilla', '4491254786', 'casilla', '838b543b67bddf63b81c24da70f98fff', 3, '123', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.votos
CREATE TABLE IF NOT EXISTS `votos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` int(11) NOT NULL,
  `votos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.votos: ~1 rows (aproximadamente)
DELETE FROM `votos`;
/*!40000 ALTER TABLE `votos` DISABLE KEYS */;
INSERT INTO `votos` (`id`, `seccion`, `votos`) VALUES
	(1, 123, 3);
/*!40000 ALTER TABLE `votos` ENABLE KEYS */;

-- Volcando estructura para tabla bingo.zonal
CREATE TABLE IF NOT EXISTS `zonal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `seccion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla bingo.zonal: ~1 rows (aproximadamente)
DELETE FROM `zonal`;
/*!40000 ALTER TABLE `zonal` DISABLE KEYS */;
INSERT INTO `zonal` (`id`, `nombre`, `seccion`) VALUES
	(1, 'Eleazar Cortez Martinez', 123);
/*!40000 ALTER TABLE `zonal` ENABLE KEYS */;

-- Volcando estructura para vista bingo.listado
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`))))) ;

-- Volcando estructura para vista bingo.listado392
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado392`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado392` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 392) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado393
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado393`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado393` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 393) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado394
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado394`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado394` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 394) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado395
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado395`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado395` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 395) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado396
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado396`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado396` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 396) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado397
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado397`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado397` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 397) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado398
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado398`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado398` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 398) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado399
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado399`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado399` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 399) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado400
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado400`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado400` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 400) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado401
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado401`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado401` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 401) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado402
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado402`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado402` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 402) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado403
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado403`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado403` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 403) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado404
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado404`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado404` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 404) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado405
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado405`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado405` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 405) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado406
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado406`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado406` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 406) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado407
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado407`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado407` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 407) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado408
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado408`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado408` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 408) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado409
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado409`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado409` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 409) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado410
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado410`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado410` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 410) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado411
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado411`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado411` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 411) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado412
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado412`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado412` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 412) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado413
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado413`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado413` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 413) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

-- Volcando estructura para vista bingo.listado414
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `listado414`;
CREATE ALGORITHM=UNDEFINED DEFINER=`joseapp`@`localhost` SQL SECURITY DEFINER VIEW `listado414` AS select `p`.`id` AS `id`,`p`.`identificador` AS `identificador`,`p`.`nombre` AS `nombre`,`p`.`a_paterno` AS `a_paterno`,`p`.`a_materno` AS `a_materno`,`p`.`calle` AS `calle`,`p`.`numero_ext` AS `numero_ext`,`p`.`numero_int` AS `numero_int`,`p`.`colonia` AS `colonia`,`p`.`c_p` AS `c_p`,`p`.`seccion` AS `seccion`,`p`.`edad` AS `edad` from `padron` `p` where ((`p`.`seccion` = 414) and (not(exists(select `j`.`id` from `jugadores` `j` where ((`j`.`nombre` = `p`.`nombre`) and (`j`.`a_paterno` = `p`.`a_paterno`) and (`j`.`a_materno` = `p`.`a_materno`) and (`j`.`calle` = `p`.`calle`) and (`j`.`colonia` = `p`.`colonia`) and (`j`.`c_p` = `p`.`c_p`)))))) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
