<h2>Gestión de Permisos</h2>

<a href="/peoplepro/public/permiso/crear">➕ Nuevo Permiso</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Tipo</th>
        <th>Acciones</th>
    </tr>
    <?php foreach($data['permisos'] as $permiso): ?>
        <tr>
            <td><?= $permiso['id'] ?></td>
            <td><?= $permiso['tipo'] ?></td>
            <td>
                <a href="/peoplepro/public/permiso/editar/<?= $permiso['id'] ?>">✏️ Editar</a> |
                <a href="/peoplepro/public/permiso/eliminar/<?= $permiso['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar este permiso?')">🗑️ Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
