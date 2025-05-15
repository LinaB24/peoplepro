<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Permisos</title>
</head>
<body>

<!-- Navegación principal -->
<nav style="background:#eee; padding:10px;">
    <a href="index.php?accion=inicio">🏡 Inicio</a> 
    <a href="index.php?accion=logout" style="float:right;">🔒 Cerrar sesión</a>
</nav>
<hr>

<h1>Permisos Registrados</h1>

<a href="index.php?accion=crearPermiso">➕ Nuevo Permiso</a><br><br>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empleado ID</th>
            <th>Tipo</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Motivo</th>
            <th>Estado</th>
            <th>Comentarios</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($permisos)): ?>
            <?php foreach ($permisos as $permiso): ?>
                <tr>
                    <td><?= $permiso['id'] ?></td>
                    <td><?= htmlspecialchars($permiso['empleado_id']) ?></td>
                    <td><?= htmlspecialchars($permiso['tipo_permiso']) ?></td>
                    <td><?= htmlspecialchars($permiso['fecha_inicio']) ?></td>
                    <td><?= htmlspecialchars($permiso['fecha_fin']) ?></td>
                    <td><?= htmlspecialchars($permiso['motivo']) ?></td>
                    <td><?= htmlspecialchars($permiso['estado'] ?? '') ?></td>
                    <td><?= htmlspecialchars($permiso['comentarios'] ?? '') ?></td>
                    <td>
                        <a href="index.php?accion=editarPermiso&id=<?= $permiso['id'] ?>">✏️ Editar</a> |
                        <a href="index.php?accion=eliminarPermiso&id=<?= $permiso['id'] ?>" onclick="return confirm('¿Eliminar este permiso?')">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="9">No hay permisos registrados.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
