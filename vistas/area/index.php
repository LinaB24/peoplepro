<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Áreas de trabajo</title>
</head>
<body>
    <a href="index.php?accion=inicio">🏡 Inicio</a> 
    <a href="index.php?accion=logout" style="float:right;">🔒 Cerrar sesión</a>

    <h1>Áreas de trabajo</h1>

   <button> <a href="index.php?accion=crear">➕ Crear área</a></button><br><br>
    <main>
        <article>
            <h2><?= htmlspecialchars($area['nombre']) ?></h2>
            <p><?= htmlspecialchars($area['descripcion']) ?></p>
            <h3>Usuarios Asignados</h3>
            <?php if (!empty($area['usuarios'])): ?>
            <ul>
                <?php foreach ($area['usuarios'] as $usuario): ?>
                    <li><?= htmlspecialchars($usuario['usuario']) ?></li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
                <em>Sin usuarios asignados</em>
            <?php endif; ?>
            <a href="index.php?accion=editar&id=<?= $area['id'] ?>">✏️ Editar</a>
            <a href="index.php?accion=eliminar&id=<?= $area['id'] ?>" onclick="return confirm('¿Eliminar esta área?')">🗑️ Eliminar</a>
           <button> <a href="index.php?accion=asignarUsuarios&area_id=<?= $area['id'] ?>">Ver mas</a></button>
        </article>
    </main>

</body>
</html>