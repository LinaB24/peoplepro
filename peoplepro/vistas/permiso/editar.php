<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Permiso</title>
</head>
<body>

    <nav style="background:#eee; padding:10px;">
        <a href="index.php?accion=inicio">🏠 Inicio</a> |
        <a href="index.php?accion=listarPermisos">📝 Permisos</a> |
        <a href="index.php?accion=logout" style="float:right;">🔒 Cerrar sesión</a>
    </nav>
    <hr>

    <h1>Editar Permiso</h1>

    <?php if ($permiso): ?>
        <form method="POST" action="index.php?accion=editarPermiso&id=<?= $permiso['id'] ?>">

            <label>Tipo de Permiso:</label><br>
            <select name="tipo_permiso" required>
                <option value="">Selecciona una</option>
                <?php
                $tipos = ["Vacaciones", "Permiso Personal", "Enfermedad", "Estudio", "Familiar", "Otro"];
                foreach ($tipos as $tipo) {
                    $selected = ($permiso['tipo_permiso'] === $tipo) ? 'selected' : '';
                    echo "<option value=\"$tipo\" $selected>$tipo</option>";
                }
                ?>
            </select><br><br>

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
