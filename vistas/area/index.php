<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Áreas</title>
</head>
<body>
    <a href="index.php?accion=inicio">🏡 Inicio</a> 
    <a href="index.php?accion=logout" style="float:right;">🔒 Cerrar sesión</a>

    <h1>Áreas Registradas</h1>

    <a href="index.php?accion=crear">➕ Nueva Área</a><br><br>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($areas)): ?>
                <?php foreach ($areas as $area): ?>
                    <tr>
                        <td><?= $area['id'] ?></td>
                        <td><?= htmlspecialchars($area['nombre']) ?></td>
                        <td><?= htmlspecialchars($area['descripcion']) ?></td>
                        <td>
                            <a href="index.php?accion=editar&id=<?= $area['id'] ?>">✏️ Editar</a> |
                            <a href="index.php?accion=eliminar&id=<?= $area['id'] ?>" onclick="return confirm('¿Eliminar esta área?')">🗑️ Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">No hay áreas registradas.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
