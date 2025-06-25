<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas de trabajo</title>
    <link rel="stylesheet" href="/peoplepro/public/css/fondo.css">
    <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
    <link rel="stylesheet" href="/peoplepro/public/css/tablas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
   <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h2 class="titulo-principal">Gestión de Áreas</h2>
    <main class="main-tabla">
        <a class="btn-tabla" href="/peoplepro/public/index.php?action=area&method=crear" class="nueva-area" title="Crear nueva área"><i class="bi bi-bookmark-plus-fill"></i> Nueva Área</a>
        <table class="tablas">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['areas'] as $area): ?>
                <tr>
                    <td><?= $area['id'] ?></td>
                    <td><?= htmlspecialchars($area['nombre']) ?></td>
                    <td><?= htmlspecialchars($area['descripcion']) ?></td>
                    <td>
                        <a href="/peoplepro/public/index.php?action=area&method=editar&id=<?= urlencode($area['id']) ?>">✏️ Editar</a> |
                        <a href="/peoplepro/public/index.php?action=area&method=eliminar&id=<?= urlencode($area['id']) ?>" onclick="return confirm('¿Eliminar esta área?')">❌ Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <script src="/peoplepro/public/js/iframesAreas.js"></script>
    <script src="/peoplepro/public/js/nav.js"></script>
    <script src="/peoplepro/public/js/areas.js"></script>
</body>
</html>
