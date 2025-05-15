-- Crear tabla `area`
CREATE TABLE `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar datos en `area`
INSERT INTO `area` (`id`, `nombre`, `descripcion`) VALUES
(5, 'jugetes', 'aaa');

-- Crear tabla `permisos`
CREATE TABLE `permisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empleado_id` int(11) NOT NULL,
  `tipo_permiso` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `motivo` text DEFAULT NULL,
  `estado` varchar(20) DEFAULT 'Pendiente',
  `comentarios` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar datos en `permisos`
INSERT INTO `permisos` (`id`, `empleado_id`, `tipo_permiso`, `fecha_inicio`, `fecha_fin`, `motivo`, `estado`, `comentarios`) VALUES
(1, 2, 'dsds', '2025-05-14', '2025-05-23', '5456454', 'Pendiente', NULL);

-- Crear tabla `usuario`
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar datos en `usuario`
INSERT INTO `usuario` (`id`, `usuario`, `clave`) VALUES
(1, 'admin', '$2y$10$bhwJAkxrFkXG4BxWfx303.tw3JLV1Asefb/g5.6pukQUc8EHpQYBi');

-- Crear tabla `usuarios`
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar datos en `usuarios`
INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `area_id`) VALUES
(2, 'saul', '$2y$10$FAULb7wlyO9UFJ7dqUaDXuypO7BLbqzDrxHHbXfcoDBwx2.ZRu1bK', 5);