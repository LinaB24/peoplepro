<h2>Lista de Visitantes Externos</h2>

<a href="/peoplepro/public/visitante/crear">Registrar nuevo visitante</a>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Documento</th>
        <th>Empresa</th>
        <th>Fecha Ingreso</th>
        <th>Motivo</th>
        <th>Acciones</th>
    </tr>
    <?php foreach($data['visitantes'] as $v): ?>
        <tr>
            <td><?= $v['id'] ?></td>
            <td><?= $v['nombre'] ?></td>
            <td><?= $v['documento'] ?></td>
            <td><?= $v['empresa'] ?></td>
            <td><?= $v['fecha_ingreso'] ?></td>
            <td><?= $v['motivo'] ?></td>
            <td>
                <a href="/peoplepro/public/visitante/editar/<?= $v['id'] ?>">Editar</a> |
                <a href="/peoplepro/public/visitante/eliminar/<?= $v['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table><br>
<button><a href="/peoplepro/public/home/index">Inicio</a></button>
