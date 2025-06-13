<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Evaluaciones</title>
</head>
<body>
    <h1>Lista de Evaluaciones</h1>
    <a href="/peoplepro/public/evaluacion/crear">Crear Nueva Evaluación</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($evaluaciones)) : ?>
                <?php foreach ($evaluaciones as $evaluacion) : ?>
                    <tr>
                        <td><?= htmlspecialchars($evaluacion['id']) ?></td>
                        <td><?= htmlspecialchars($evaluacion['nombre']) ?></td>
                        <td><?= htmlspecialchars($evaluacion['descripcion']) ?></td>
                        <td><?= htmlspecialchars($evaluacion['fecha']) ?></td>
                        <td>
                            <a href="/peoplepro/public/evaluacion/editar/<?= $evaluacion['id'] ?>">Editar</a> |
                            <a href="/peoplepro/public/evaluacion/eliminar/<?= $evaluacion['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar esta evaluación?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr><td colspan="5">No hay evaluaciones registradas.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <br>
    <a href="/peoplepro/public">Volver al Menú Principal</a>
</body>
</html>
