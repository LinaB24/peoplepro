<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Área</title>
</head>
<body>

    <h1>Editar Área</h1>
    <a href="index.php?accion=listar">← Volver al listado</a><br><br>

    <?php if ($area): ?>
        <form method="POST" action="index.php?accion=editar&id=<?= $area['id'] ?>">
            <label>Nombre del Área:</label><br>
            <input type="text" name="nombre" value="<?= htmlspecialchars($area['nombre']) ?>" required><br><br>

            <label>Descripción:</label><br>
            <textarea name="descripcion" rows="4" cols="40"><?= htmlspecialchars($area['descripcion']) ?></textarea><br><br>

            <input type="submit" value="Guardar Cambios">
        </form>
    <?php else: ?>
        <p>Área no encontrada.</p>
    <?php endif; ?>

</body>
</html>
