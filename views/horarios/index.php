<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Horarios</title>
  <link rel="stylesheet" href="/peoplepro/public/css/fondo.css">
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
  <link rel="stylesheet" href="/peoplepro/public/css/horario.css">
  <link rel="stylesheet" href="/peoplepro/public/css/tablas.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
  <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h2 class="titulo-principal">Lista de Horarios</h2>
    <main class="main-tabla"> 
      <a class="btn-tabla" href="/peoplepro/public/index.php?action=horario&method=crear"><i class="bi bi-calendar-plus"></i> Nuevo Horario</a>
      <table class="tablas">
        <thead>
          <tr>
            <th>ID</th>
            <th>Trabajador</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($horarios)) : ?>
            <?php foreach ($horarios as $horario): ?>
              <tr>
                <td><?= $horario['id'] ?></td>
                <td><?= htmlspecialchars($horario['usuario_nombre']) ?></td>
                <td><?= $horario['fecha'] ?></td>
                <td><?= $horario['fecha_fin'] ?? '-' ?></td>
                <td><?= $horario['hora_inicio'] ?></td>
                <td><?= $horario['hora_fin'] ?></td>
                <td><?= $horario['estado'] ?></td>
                <td><?= htmlspecialchars($horario['observaciones']) ?></td>
                <td>
                  <a href="/peoplepro/public/index.php?action=horario&method=editar&id=<?= $horario['id'] ?>"><i class="bi bi-pencil-fill"></i> Editar</a>
                  <a href="/peoplepro/public/index.php?action=horario&method=eliminar&id=<?= $horario['id'] ?>" onclick="return confirm('¿Seguro de eliminar este horario?')"><i class="bi bi-trash3-fill"></i> Eliminar</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else : ?>
            <tr><td colspan="9">No hay horarios registrados.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
  </main>
  <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>