<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Beneficios</title>
  <link rel="stylesheet" href="/peoplepro/public/css/fondo.css">
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
  <link rel="stylesheet" href="/peoplepro/public/css/tablas.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
   <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h2 class="titulo-principal">Gestión de Beneficios</h2>
    <main class="main-tabla">
        <a class="btn-tabla" href="/peoplepro/public/index.php?action=beneficio&method=crear"><i class="bi bi-emoji-smile-fill"></i> Registrar nuevo beneficio</a>
        <table class="tablas">
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
    </main>
    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
