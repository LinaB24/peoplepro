<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios</title>
</head>
<body>
    <h2>Listado de Usuarios</h2>
    <a href="/peoplepro/public/usuario/asignar_area/5">Asignar Área a Usuario</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($data['usuarios'])): ?>
                <?php foreach($data['usuarios'] as $usuario): ?>
                    <tr>
                        <td><?= htmlspecialchars($usuario['id']) ?></td>
                        <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                        <td><?= htmlspecialchars($usuario['email']) ?></td>
                        <td><?= htmlspecialchars($usuario['rol']) ?></td>
                        <td><?= htmlspecialchars($usuario['area_id'] ?? 'Sin área') ?></td>
                        <td>
                            <a href="/peoplepro/public/usuario/asignar_area/<?= $usuario['id'] ?>">Asignar Área</a>
                            <!-- Aquí puedes agregar botones para editar, eliminar, etc -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6">No hay usuarios registrados.</td></tr>
            <?php endif; ?>
        </tbody>
    </table><br>
    <button><a href="/peoplepro/public/home/index">Inicio</a></button>
</body>
</html>
