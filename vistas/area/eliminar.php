<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Área</title>
</head>
<body>

<h1>Eliminar Área</h1>

<?php if ($area): ?>
    <p>¿Estás seguro de que deseas eliminar el área <strong><?= htmlspecialchars($area['nombre']) ?></strong>?</p>

    <form method="POST" action="index.php?accion=eliminar&id=<?= $area['id'] ?>">
        <input type="submit" name="confirmar" value="Sí, eliminar">
        <a href="index.php?accion=listar">Cancelar</a>
    </form>
<?php else: ?>
    <p>Área no encontrada.</p>
<?php endif; ?>

</body>
</html>