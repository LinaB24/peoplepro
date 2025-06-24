<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Capacitaciones</title>
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
</head>
<body>
    <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h2>Capacitaciones</h2>
        <a href="/peoplepro/public/index.php?action=capacitacion&method=crear">+ Nueva Capacitación</a>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($capacitaciones as $cap): ?>
                <tr>
                    <td><?= htmlspecialchars($cap['nombre']) ?></td>
                    <td><?= htmlspecialchars($cap['descripcion']) ?></td>
                    <td><?= htmlspecialchars($cap['fecha']) ?></td>
                    <td>
                        <a href="/peoplepro/public/index.php?action=capacitacion&method=editar&id=<?= $cap['id'] ?>">✏️ Editar</a> |
                        <a href="/peoplepro/public/index.php?action=capacitacion&method=eliminar&id=<?= $cap['id'] ?>" onclick="return confirm('¿Seguro que quieres eliminar esta capacitación?');">❌ Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
