<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área <?= htmlspecialchars($area['nombre']) ?></title>
</head>
<body>

<nav style="background:#eee; padding:10px;">
    <a href="index.php?accion=listar">📁 Áreas</a> |
    <a href="index.php?accion=inicio">🏠 Inicio</a> |
    <a href="index.php?accion=logout" style="float:right;">🔒 Cerrar sesión</a>
</nav>
<hr>

<h2> Área <?= htmlspecialchars($area['nombre']) ?></h2>

<!-- LISTA DE USUARIOS ASIGNADOS -->
<h3>Usuarios Asignados</h3>
<?php if (!empty($usuariosAsignados)): ?>
    <ul>
        <?php foreach ($usuariosAsignados as $usuario): ?>
            <li>
                <?= htmlspecialchars($usuario['usuario']) ?>
                <a href="index.php?accion=quitarUsuarioArea&usuario_id=<?= $usuario['id'] ?>&area_id=<?= $area['id'] ?>">🗑 Quitar</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No hay usuarios asignados a esta área.</p>
<?php endif; ?>

<!-- FORMULARIO PARA ASIGNAR USUARIO -->
<h3>Asignar Usuario Existente</h3>

<form method="POST" action="index.php?accion=asignarUsuarioArea">
    <input type="hidden" name="area_id" value="<?= $area['id'] ?>">
    <select name="usuario_id" required>
        <option value="">Seleccione un usuario sin área</option>
        <?php foreach ($usuariosDisponibles as $usuario): ?>
            <option value="<?= $usuario['id'] ?>"><?= htmlspecialchars($usuario['usuario']) ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Asignar">
</form>

<br>
<a href="index.php?accion=listar">← Volver a la lista de áreas</a>

</body>
</html>
