<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Permiso</title>
</head>
<body>

<h1>Editar Permiso</h1>
<a href="index.php?accion=listarPermisos">← Volver al listado</a><br><br>

<?php if ($permiso): ?>
    <form method="POST" action="index.php?accion=editarPermiso&id=<?= $permiso['id'] ?>">
        <label>ID del Empleado:</label><br>
        <input type="number" name="empleado_id" value="<?= htmlspecialchars($permiso['empleado_id']) ?>" required><br><br>

        <label>Tipo de Permiso:</label><br>
        <input type="text" name="tipo_permiso" value="<?= htmlspecialchars($permiso['tipo_permiso']) ?>" required><br><br>

        <label>Fecha de Inicio:</label><br>
        <input type="date" name="fecha_inicio" value="<?= $permiso['fecha_inicio'] ?>" required><br><br>

        <label>Fecha de Fin:</label><br>
        <input type="date" name="fecha_fin" value="<?= $permiso['fecha_fin'] ?>" required><br><br>

        <label>Motivo:</label><br>
        <textarea name="motivo" rows="3" cols="40" required><?= htmlspecialchars($permiso['motivo']) ?></textarea><br><br>

        <label>Estado:</label><br>
        <input type="text" name="estado" value="<?= htmlspecialchars($permiso['estado'] ?? '') ?>"><br><br>

        <label>Comentarios:</label><br>
        <textarea name="comentarios" rows="3" cols="40"><?= htmlspecialchars($permiso['comentarios'] ?? '') ?></textarea><br><br>

        <input type="submit" value="Guardar Cambios">
    </form>
<?php else: ?>
    <p>Permiso no encontrado.</p>
<?php endif; ?>

</body>
</html>
