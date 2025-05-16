<h2>Documentos Subidos</h2>

<a href="/peoplepro/public/documento/crear">+ Subir nuevo documento</a>
<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Archivo</th>
        <th>Fecha de subida</th>
    </tr>
    <?php foreach ($data['documentos'] as $doc): ?>
        <tr>
            <td><?= $doc['id'] ?></td>
            <td><?= $doc['nombre'] ?></td>
            <td>
                <a href="/peoplepro/public/documento/eliminar/<?= $doc['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar este documento?')">Eliminar</a>
                <a href="/peoplepro/public/documento/editar/<?= $doc['id'] ?>">Editar</a> |
                <a href="/peoplepro/uploads/<?= $d['archivo'] ?>" target="_blank">Ver PDF</a>

            </td>

            <td><?= $doc['fecha_subida'] ?></td>
        </tr>
    <?php endforeach; ?>
</table><br>
<button><a href="/peoplepro/public/home/index">Inicio</a></button>