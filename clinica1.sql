-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.20-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para clinica
DROP DATABASE IF EXISTS `clinica`;
CREATE DATABASE IF NOT EXISTS `clinica` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `clinica`;

-- Volcando estructura para tabla clinica.cita
DROP TABLE IF EXISTS `cita`;
CREATE TABLE IF NOT EXISTS `cita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(11) DEFAULT NULL,
  `id_doctor` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cupos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cita_servicio_idServicio` (`id_servicio`),
  KEY `cita_usuario_idDoctor` (`id_doctor`),
  CONSTRAINT `cita_servicio_idServicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cita_usuario_idDoctor` FOREIGN KEY (`id_doctor`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.cita: ~0 rows (aproximadamente)
DELETE FROM `cita`;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` (`id`, `id_servicio`, `id_doctor`, `fecha`, `cupos`) VALUES
	(1, 1, 3, '2021-11-23', NULL);
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.horacita
DROP TABLE IF EXISTS `horacita`;
CREATE TABLE IF NOT EXISTS `horacita` (
  `id_cita` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time NOT NULL DEFAULT '00:00:00',
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`id_cita`,`hora`) USING BTREE,
  CONSTRAINT `horaCita_cita_id_cita` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.horacita: ~2 rows (aproximadamente)
DELETE FROM `horacita`;
/*!40000 ALTER TABLE `horacita` DISABLE KEYS */;
INSERT INTO `horacita` (`id_cita`, `hora`, `status`) VALUES
	(1, '07:00:00', 1),
	(1, '08:00:00', 1),
	(1, '09:00:00', 2);
/*!40000 ALTER TABLE `horacita` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.registro
DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cita` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `horaCita` time DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `descripcionDoctor` varchar(50) DEFAULT NULL,
  `descripcionPaciente` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registro_usuario_idPaciente` (`id_paciente`),
  KEY `registro_cita_idCita` (`id_cita`),
  CONSTRAINT `registro_cita_idCita` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `registro_usuario_idPaciente` FOREIGN KEY (`id_paciente`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.registro: ~1 rows (aproximadamente)
DELETE FROM `registro`;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` (`id`, `id_cita`, `id_paciente`, `horaCita`, `status`, `descripcionDoctor`, `descripcionPaciente`) VALUES
	(1, 1, 4, '07:00:00', 2, NULL, 'Mi primera cita'),
	(2, 1, 4, '07:00:00', 2, NULL, 'oye'),
	(3, 1, 4, '07:00:00', 2, NULL, 's'),
	(4, 1, 4, '07:00:00', 2, NULL, ''),
	(5, 1, 4, '09:00:00', 2, NULL, 'dd');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.servicio
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE IF NOT EXISTS `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.servicio: ~12 rows (aproximadamente)
DELETE FROM `servicio`;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` (`id`, `nombre`) VALUES
	(1, 'Consultas y evaluaciones médicas con previa cita'),
	(2, 'Consultas y evaluaciones de urgencias'),
	(3, 'Referencias a especialidades médicas'),
	(4, 'Certificado de buena salud'),
	(5, 'Solicitudes de estudios de gabinete'),
	(6, 'Administración gratuita de medicamentos básicos'),
	(7, 'Curaciones y corte de puntos'),
	(8, 'Control de peso y talla'),
	(9, 'Control de presión arterial'),
	(10, 'Inhaloterapias'),
	(11, 'Aplicación de medicamentos inyectables'),
	(12, 'Toma de glicemia capilar');
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.tipousuario
DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.tipousuario: ~4 rows (aproximadamente)
DELETE FROM `tipousuario`;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` (`id`, `nombre`) VALUES
	(1, 'Administrador'),
	(2, 'Doctor'),
	(3, 'Secretaria'),
	(4, 'Paciente');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `perfil` varchar(100) DEFAULT NULL,
  `tipoUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`),
  KEY `usuario_tipoUsuario_tipouser` (`tipoUser`),
  CONSTRAINT `usuario_tipoUsuario_tipouser` FOREIGN KEY (`tipoUser`) REFERENCES `tipousuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.usuario: ~4 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `password`, `perfil`, `tipoUser`) VALUES
	(1, 'admin', 'admin', 'admin@admin', '123', '', 1),
	(2, 'paciente', 'paciente', 'paciente@paciente', '123', NULL, 4),
	(3, 'doctor', 'doctor', 'doctor@doctor', '123', NULL, 2),
	(4, 'secretaria', 'secretaria', 'secretaria@secretaria', '123', NULL, 3);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
