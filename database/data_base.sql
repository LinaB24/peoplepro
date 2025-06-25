CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `areas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'cajas', 'área de almacenamiento '),
(2, 'gomitas', 'área de dulces');

CREATE TABLE `beneficios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `beneficios` (`id`, `nombre`, `descripcion`, `fecha_inicio`, `fecha_fin`) VALUES
(3, 'descuentos', 'descuentos en tus compras', '2025-05-08', '2025-05-08'),
(4, 'viajes', 'viajes en todo el pais', '2025-06-04', '2025-06-25');

CREATE TABLE `capacitaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `capacitaciones` (`id`, `nombre`, `descripcion`, `fecha`, `created_at`) VALUES
(2, 'bienestar en el área laboral ', 'tácticas de correcto uso de las áreas y de los implementos de trabajo ', '2025-06-28', '2025-06-24 16:48:47');

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `fecha_subida` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `documentos` (`id`, `nombre`, `archivo`, `fecha_subida`) VALUES
(2, 'cedula', 'C:\\xampp\\htdocs\\peoplepro/uploads/evidencia 1.pdf', '2025-05-14 19:14:09');

CREATE TABLE `evaluaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `estado` varchar(50) DEFAULT 'Activo',
  `observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `horarios` (`id`, `usuario_id`, `fecha`, `fecha_fin`, `hora_inicio`, `hora_fin`, `estado`, `observaciones`) VALUES
(1, 2, '2025-06-22', '2025-06-23', '13:35:00', '13:40:00', 'Activo', 'si me hace el favor'),
(5, 3, '2025-06-18', '2025-06-26', '14:14:00', '20:10:00', 'Activo', 'dsadsads');

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `permisos` (`id`, `tipo`) VALUES
(4, 'vacaciones ');

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('usuario','admin') NOT NULL DEFAULT 'usuario',
  `area_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `rol`, `area_id`, `created_at`, `updated_at`) VALUES
(2, 'samuel', 'samuel@gmail.com', '1234', 'usuario', 1, '2025-05-15 07:47:41', '2025-06-22 19:21:21'),
(3, 'daniela', 'daniela@gmail.com', '123456\r\n', 'usuario', NULL, '2025-06-07 02:52:33', '2025-06-22 19:21:32'),
(4, 'laura', 'laura@gmail.com', '$2y$10$/22naC06YvQ3w918U1kV/.5DCct6RqGDagyNx1bqFO7hSJh4zCPWy', 'admin', 1, '2025-06-09 20:33:02', '2025-06-22 19:21:47');

CREATE TABLE `visitantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `motivo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `visitantes` (`id`, `nombre`, `documento`, `empresa`, `fecha_ingreso`, `motivo`) VALUES
(8, 'daniela', '45465456', 'mym', '2025-06-14 11:47:00', 'revisión de maquinas');

ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `beneficios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `area_id` (`area_id`);

ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `beneficios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `capacitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `evaluaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `visitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE SET NULL;
