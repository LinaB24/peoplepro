
<h2>Gestión de Áreas</h2>
<a href="/peoplepro/public/area/crear">Agregar Nueva Área</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($data['areas'] as $area): ?>
    <tr>
        <td><?= $area['id'] ?></td>
        <td><?= $area['nombre'] ?></td>
        <td><?= $area['descripcion'] ?></td>
        <td>
            <a href="/peoplepro/public/area/editar/<?= $area['id'] ?>">Editar</a> |
            <a href="/peoplepro/public/area/eliminar/<?= $area['id'] ?>" onclick="return confirm('¿Eliminar esta área?')">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table><br>
<button><a href="/peoplepro/public/home/index">Inicio</a></button>