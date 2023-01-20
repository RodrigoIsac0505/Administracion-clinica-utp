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
CREATE DATABASE IF NOT EXISTS `clinica` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `clinica`;

-- Volcando estructura para tabla clinica.cita
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.cita: ~5 rows (aproximadamente)
DELETE FROM `cita`;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` (`id`, `id_servicio`, `id_doctor`, `fecha`, `cupos`) VALUES
	(1, 10, 2, '2021-11-30', 7),
	(2, 1, 2, '2021-12-01', 9),
	(3, 9, 2, '2021-11-30', 6),
	(4, 2, 2, '2021-12-02', 0),
	(5, 2, 2, '2021-12-02', 0),
	(6, 3, 2, '2021-12-24', 7);
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.horacita
CREATE TABLE IF NOT EXISTS `horacita` (
  `id_cita` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time NOT NULL DEFAULT '00:00:00',
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`id_cita`,`hora`) USING BTREE,
  CONSTRAINT `horaCita_cita_id_cita` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='status \r\n1 cuando esta disponible\r\n2 cuando la hora esta ocupada';

-- Volcando datos para la tabla clinica.horacita: ~24 rows (aproximadamente)
DELETE FROM `horacita`;
/*!40000 ALTER TABLE `horacita` DISABLE KEYS */;
INSERT INTO `horacita` (`id_cita`, `hora`, `status`) VALUES
	(1, '07:00:00', 1),
	(1, '08:00:00', 2),
	(1, '09:00:00', 1),
	(1, '10:00:00', 1),
	(1, '11:00:00', 1),
	(1, '12:00:00', 1),
	(1, '13:00:00', 1),
	(1, '14:00:00', 1),
	(1, '15:00:00', 2),
	(2, '07:00:00', 1),
	(2, '08:00:00', 1),
	(2, '09:00:00', 1),
	(2, '10:00:00', 1),
	(2, '11:00:00', 1),
	(2, '12:00:00', 1),
	(2, '13:00:00', 1),
	(2, '14:00:00', 1),
	(2, '15:00:00', 1),
	(3, '07:00:00', 1),
	(3, '08:00:00', 1),
	(3, '09:00:00', 1),
	(3, '10:00:00', 1),
	(3, '11:00:00', 1),
	(3, '12:00:00', 1),
	(6, '07:00:00', 2),
	(6, '08:00:00', 1),
	(6, '09:00:00', 2),
	(6, '10:00:00', 1),
	(6, '11:00:00', 1),
	(6, '12:00:00', 1),
	(6, '13:00:00', 1),
	(6, '14:00:00', 1),
	(6, '15:00:00', 1);
/*!40000 ALTER TABLE `horacita` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.registro
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cita` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `horaCita` time DEFAULT NULL,
  `status` int(1) unsigned zerofill DEFAULT 1,
  `descripcionDoctor` varchar(50) DEFAULT NULL,
  `descripcionPaciente` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registro_usuario_idPaciente` (`id_paciente`),
  KEY `registro_cita_idCita` (`id_cita`),
  CONSTRAINT `registro_cita_idCita` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `registro_usuario_idPaciente` FOREIGN KEY (`id_paciente`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COMMENT='status 1 cuando la cita esta diponible, 2 cuando la cita se realizo y 3 cuando la cita se cancelo';

-- Volcando datos para la tabla clinica.registro: ~4 rows (aproximadamente)
DELETE FROM `registro`;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` (`id`, `id_cita`, `id_paciente`, `horaCita`, `status`, `descripcionDoctor`, `descripcionPaciente`) VALUES
	(14, 1, 4, '15:00:00', 2, NULL, 'dsaasdas'),
	(17, 5, 4, '06:18:56', 3, 'Se cancelo por el paciente', 'sdsdsdsdsd, asdadasdasd'),
	(18, 6, 4, '07:00:00', 2, 'Ya lo hice', 'xd'),
	(19, 6, 4, '09:00:00', 1, NULL, 'dd');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.servicio
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
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `perfil` varchar(100) DEFAULT NULL,
  `tipoUser` int(11) DEFAULT NULL,
  `cedula` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`),
  KEY `usuario_tipoUsuario_tipouser` (`tipoUser`),
  CONSTRAINT `usuario_tipoUsuario_tipouser` FOREIGN KEY (`tipoUser`) REFERENCES `tipousuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COMMENT='tipoUser \r\n1 = administrador\r\n2 =  doctor \r\n3 = secretaria\r\n4 = paciente';

-- Volcando datos para la tabla clinica.usuario: ~5 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `password`, `perfil`, `tipoUser`, `cedula`) VALUES
	(1, 'sdsd', 'asdad', 'admin@utp.ac.pa', '202cb962ac59075b964b07152d234b70', '1.png', 1, 'ads'),
	(2, 'rodolfo', 'Chiari', 'doctor1@utp.ac.pa', '202cb962ac59075b964b07152d234b70', '2.png', 2, '9-9128-12'),
	(3, ' secretaria1 ', ' secretaria1 ', 'secretaria1@utp.ac.pa', '202cb962ac59075b964b07152d234b70', '3.png', 3, ' 9-999-9999 '),
	(4, 'rodrigo', 'romero', 'rodrigo.rodriguez7@utp.ac.pa', '202cb962ac59075b964b07152d234b70', '4.png', 4, '8-900-999'),
	(8, 'usuario1', 'user', 'user1@utp.ac.pa', '123', 'perfil.png', 4, '9-999-9999');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
