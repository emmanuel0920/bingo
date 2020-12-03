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

-- Volcando datos para la tabla bingo.a_quien: ~1 rows (aproximadamente)
DELETE FROM `a_quien`;
/*!40000 ALTER TABLE `a_quien` DISABLE KEYS */;
/*!40000 ALTER TABLE `a_quien` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.ganadores: ~7 rows (aproximadamente)
DELETE FROM `ganadores`;
/*!40000 ALTER TABLE `ganadores` DISABLE KEYS */;
INSERT INTO `ganadores` (`id`, `id_jugador`, `id_usuario`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 1),
	(4, 4, 1),
	(5, 5, 1),
	(6, 6, 1),
	(7, 7, 1);
/*!40000 ALTER TABLE `ganadores` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.jugadores: ~0 rows (aproximadamente)
DELETE FROM `jugadores`;
/*!40000 ALTER TABLE `jugadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `jugadores` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.jugadores_old: ~0 rows (aproximadamente)
DELETE FROM `jugadores_old`;
/*!40000 ALTER TABLE `jugadores_old` DISABLE KEYS */;
/*!40000 ALTER TABLE `jugadores_old` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.lider: ~0 rows (aproximadamente)
DELETE FROM `lider`;
/*!40000 ALTER TABLE `lider` DISABLE KEYS */;
/*!40000 ALTER TABLE `lider` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.movilizador: ~0 rows (aproximadamente)
DELETE FROM `movilizador`;
/*!40000 ALTER TABLE `movilizador` DISABLE KEYS */;
/*!40000 ALTER TABLE `movilizador` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.padron: ~1 rows (aproximadamente)
DELETE FROM `padron`;
/*!40000 ALTER TABLE `padron` DISABLE KEYS */;
INSERT INTO `padron` (`id`, `identificador`, `nombre`, `a_paterno`, `a_materno`, `calle`, `numero_ext`, `numero_int`, `colonia`, `c_p`, `seccion`, `edad`) VALUES
	(1, '1', 'fernando', 'martinez', 'martinez', 'las flawers', '209', '209', 'miravalle', '20900', '123', '30');
/*!40000 ALTER TABLE `padron` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.prep: ~0 rows (aproximadamente)
DELETE FROM `prep`;
/*!40000 ALTER TABLE `prep` DISABLE KEYS */;
/*!40000 ALTER TABLE `prep` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.seccional: ~1 rows (aproximadamente)
DELETE FROM `seccional`;
/*!40000 ALTER TABLE `seccional` DISABLE KEYS */;
INSERT INTO `seccional` (`id`, `nombre`, `direccion`, `telefono`, `seccion`) VALUES
	(1, 'seccio1', 'bien lejotes', '1111111111', 125);
/*!40000 ALTER TABLE `seccional` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.seccion_usuario: ~0 rows (aproximadamente)
DELETE FROM `seccion_usuario`;
/*!40000 ALTER TABLE `seccion_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `seccion_usuario` ENABLE KEYS */;

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

-- Volcando datos para la tabla bingo.usuarios: ~3 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `telefono`, `usuario`, `password`, `id_tipo_usuario`, `seccion`, `status`) VALUES
	(1, 'SUPER ADMIN', '449123456', 'soporte', '07ea4bfae142a9191cf78d9909c5e508', 1, '0', NULL),
	(2, 'Administrador', '4496789012', 'admin', '838b543b67bddf63b81c24da70f98fff', 1, '0', NULL),
	(3, 'Representante', '4491234567', 'repre', '838b543b67bddf63b81c24da70f98fff', 3, '0', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.votos: ~1 rows (aproximadamente)
DELETE FROM `votos`;
/*!40000 ALTER TABLE `votos` DISABLE KEYS */;
INSERT INTO `votos` (`id`, `seccion`, `votos`) VALUES
	(1, 125, 7);
/*!40000 ALTER TABLE `votos` ENABLE KEYS */;

-- Volcando datos para la tabla bingo.zonal: ~1 rows (aproximadamente)
DELETE FROM `zonal`;
/*!40000 ALTER TABLE `zonal` DISABLE KEYS */;
INSERT INTO `zonal` (`id`, `nombre`, `seccion`) VALUES
	(1, 'zonal1', 125);
/*!40000 ALTER TABLE `zonal` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
