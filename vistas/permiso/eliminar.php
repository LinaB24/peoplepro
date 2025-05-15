<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Permiso</title>
</head>
<body>

<h1>Eliminar Permiso</h1>
<a href="index.php?accion=listarPermisos">← Cancelar y volver al listado</a><br><br>

<?php if ($permiso): ?>
    <p>¿Estás seguro de que deseas eliminar el permiso del empleado <strong><?= htmlspecialchars($permiso['empleado_id']) ?></strong> del tipo <strong><?= htmlspecialchars($permiso['tipo_permiso']) ?></strong>?</p>

    <form method="POST" action="index.php?accion=eliminarPermiso&id=<?= $permiso['id'] ?>">
        <input type="submit" name="confirmar" value="Sí, eliminar">
        <a href="index.php?accion=listarPermisos">Cancelar</a>
    </form>
<?php else: ?>
    <p>Permiso no encontrado.</p>
<?php endif; ?>

</body>
</html>