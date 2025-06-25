<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Capacitaciones</title>
  <link rel="stylesheet" href="/peoplepro/public/css/fondo.css">
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
  <link rel="stylesheet" href="/peoplepro/public/css/tablas.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h2 class="titulo-principal">Capacitaciones</h2>
    <main class="main-tabla"> 
        <a class="btn-tabla" href="/peoplepro/public/index.php?action=capacitacion&method=crear"><i class="bi bi-mortarboard-fill"></i> Nueva Capacitación</a>
        <table class="tablas">
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
                        <a href="/peoplepro/public/index.php?action=capacitacion&method=editar&id=<?= $cap['id'] ?>">✏️ Editar</a>
                        <a href="/peoplepro/public/index.php?action=capacitacion&method=eliminar&id=<?= $cap['id'] ?>" onclick="return confirm('¿Seguro que quieres eliminar esta capacitación?');">❌ Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
