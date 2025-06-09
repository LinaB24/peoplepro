<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editar Usuario</h2>
    <form method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($usuario['id']) ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>

    <label>Rol:</label>
    <select name="rol" required>
        <option value="usuario" <?= $usuario['rol'] === 'usuario' ? 'selected' : '' ?>>Usuario</option>
        <option value="admin" <?= $usuario['rol'] === 'admin' ? 'selected' : '' ?>>Admin</option>
    </select>

    <label>Área:</label>
    <select name="area_id">
        <option value="">-- Sin área --</option>
        <?php foreach ($areas as $area): ?>
            <option value="<?= $area['id'] ?>" <?= $usuario['area_id'] == $area['id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($area['nombre']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Guardar cambios</button>
</form>
</body>
</html>