<h2>Capacitaciones</h2>
<a href="/peoplepro/public/capacitacion/crear">Nueva Capacitación</a>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Fecha</th>
        <th>Acciones</th>
    </tr>
    <?php foreach($data['capacitaciones'] as $cap): ?>
        <tr>
            <td><?php echo htmlspecialchars($cap['nombre']); ?></td>
            <td><?php echo htmlspecialchars($cap['descripcion']); ?></td>
            <td><?php echo htmlspecialchars($cap['fecha']); ?></td>
            <td>
                <a href="/peoplepro/public/capacitacion/editar/<?php echo $cap['id']; ?>">Editar</a> |
                <a href="/peoplepro/public/capacitacion/eliminar/<?php echo $cap['id']; ?>" onclick="return confirm('¿Seguro que quieres eliminar?');">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table><br>
<button><a href="/peoplepro/public/home/index">Inicio</a></button>
