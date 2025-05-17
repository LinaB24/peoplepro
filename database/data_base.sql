-- Crear base de datos
CREATE DATABASE IF NOT EXISTS `peoplepro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `peoplepro`;

-- Tabla: areas
CREATE TABLE `areas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` TEXT DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `areas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'corte', 'asdd'),
(2, 'juan', 'jasd');

-- Tabla: beneficios
CREATE TABLE `beneficios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `fecha_inicio` DATE DEFAULT NULL,
  `fecha_fin` DATE DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `beneficios` (`id`, `nombre`, `descripcion`, `fecha_inicio`, `fecha_fin`) VALUES
(3, 'dgyd', 'ertr', '2025-05-08', '2025-05-08');

-- Tabla: capacitaciones
CREATE TABLE `capacitaciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `fecha` DATE NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla: documentos
CREATE TABLE `documentos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `archivo` VARCHAR(255) NOT NULL,
  `fecha_subida` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `documentos` (`id`, `nombre`, `archivo`, `fecha_subida`) VALUES
(2, 'cedula', 'C:\\xampp\\htdocs\\peoplepro/uploads/evidencia 1.pdf', '2025-05-14 19:14:09');

-- Tabla: evaluaciones
CREATE TABLE `evaluaciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `fecha` DATE NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla: permisos
CREATE TABLE `permisos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `permisos` (`id`, `tipo`) VALUES
(3, 'Incapacidad');

-- Tabla: users
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `rol` ENUM('usuario', 'admin') NOT NULL DEFAULT 'usuario',
  `area_id` INT(11) DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `area_id` (`area_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `rol`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'Juan Perez', 'juan@example.com', '1234', 'usuario', 1, '2025-05-15 02:47:41', '2025-05-15 02:47:58'),
(2, 'Maria Gomez', 'maria@example.com', '1234', 'usuario', 1, '2025-05-15 02:47:41', '2025-05-15 02:48:01');

-- Tabla: visitantes
CREATE TABLE `visitantes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) DEFAULT NULL,
  `documento` VARCHAR(20) DEFAULT NULL,
  `empresa` VARCHAR(100) DEFAULT NULL,
  `fecha_ingreso` DATETIME DEFAULT NULL,
  `motivo` TEXT DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
