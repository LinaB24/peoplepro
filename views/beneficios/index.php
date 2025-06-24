<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Beneficios</title>
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
</head>
<body>
   <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h2>Gestión de Beneficios</h2>
    <a href="/peoplepro/public/index.php?action=beneficio&method=crear">➕ Registrar nuevo beneficio</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['beneficios'] as $b): ?>
                <tr>
                    <td><?= htmlspecialchars($b['id']) ?></td>
                    <td><?= htmlspecialchars($b['nombre']) ?></td>
                    <td><?= htmlspecialchars($b['descripcion']) ?></td>
                    <td><?= htmlspecialchars($b['fecha_inicio']) ?></td>
                    <td><?= htmlspecialchars($b['fecha_fin']) ?></td>
                    <td>
                        <a href="/peoplepro/public/index.php?action=beneficio&method=editar&id=<?= $b['id'] ?>">✏️ Editar</a> |
                        <a href="/peoplepro/public/index.php?action=beneficio&method=eliminar&id=<?= $b['id'] ?>" onclick="return confirm('¿Eliminar este beneficio?')">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
