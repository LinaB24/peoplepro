<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Capacitaciones</title>
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
</head>
<body>
    <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h2>Gestión de Permisos</h2>

    <a href="/peoplepro/public/index.php?action=permiso&method=crear">➕ Nuevo Permiso</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permisos as $permiso): ?>
            <tr>
                <td><?= htmlspecialchars($permiso['id']) ?></td>
                <td><?= htmlspecialchars($permiso['tipo']) ?></td>
                <td>
                    <a href="/peoplepro/public/index.php?action=permiso&method=editar&id=<?= $permiso['id'] ?>">✏️ Editar</a> |
                    <a href="/peoplepro/public/index.php?action=permiso&method=eliminar&id=<?= $permiso['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar este permiso?')">🗑️ Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
