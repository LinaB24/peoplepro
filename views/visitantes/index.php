<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Visitantes Externos</title>
  <link rel="stylesheet" href="/peoplepro/public/css/fondo.css">
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
  <link rel="stylesheet" href="/peoplepro/public/css/tablas.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h2 class="titulo-principal">Lista de Visitantes Externos</h2>
        <main class="main-tabla">
            <a class="btn-tabla" href="/peoplepro/public/index.php?action=visitante&method=crear"><i class="bi bi-person-plus-fill"></i> Registrar nuevo visitante</a>
                <table class="tablas">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Empresa</th>
                            <th>Fecha Ingreso</th>
                            <th>Motivo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($data['visitantes'])): ?>
                        <?php foreach ($data['visitantes'] as $v): ?>
                            <tr>
                                <td><?= htmlspecialchars($v['id']) ?></td>
                                <td><?= htmlspecialchars($v['nombre']) ?></td>
                                <td><?= htmlspecialchars($v['documento']) ?></td>
                                <td><?= htmlspecialchars($v['empresa']) ?></td>
                                <td><?= htmlspecialchars($v['fecha_ingreso']) ?></td>
                                <td><?= htmlspecialchars($v['motivo']) ?></td>
                                <td>
                                    <a href="/peoplepro/public/index.php?action=visitante&method=editar&id=<?= $v['id'] ?>">✏️ Editar</a> |
                                    <a href="/peoplepro/public/index.php?action=visitante&method=eliminar&id=<?= $v['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar?')">🗑️ Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="7">No hay visitantes registrados.</td></tr>
                    <?php endif; ?>
                    </tbody>
                </table>
        </main>
    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
