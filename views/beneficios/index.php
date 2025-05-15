<h2>Gestión de Beneficios</h2>
<a href="/peoplepro/public/beneficio/crear">Registrar nuevo beneficio</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Inicio</th>
        <th>Fin</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($data['beneficios'] as $b): ?>
        <tr>
            <td><?= $b['id'] ?></td>
            <td><?= $b['nombre'] ?></td>
            <td><?= $b['descripcion'] ?></td>
            <td><?= $b['fecha_inicio'] ?></td>
            <td><?= $b['fecha_fin'] ?></td>
            <td>
                <a href="/peoplepro/public/beneficio/editar/<?= $b['id'] ?>">Editar</a> |
                <a href="/peoplepro/public/beneficio/eliminar/<?= $b['id'] ?>" onclick="return confirm('¿Eliminar este beneficio?')">Eliminar</a>

            </td>
        </tr>
    <?php endforeach; ?>
</table>
