<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>Lista de Documentos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>📄 Lista de Documentos</h2>
    <a href="index.php?controller=Documento&action=crear" class="btn btn-primary mb-3">+ Agregar Documento</a>

    <?php if (!empty($documentos)) : ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Archivo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($documentos as $doc) : ?>
                    <tr>
                        <td><?= htmlspecialchars($doc['nombre']) ?></td>
                        <td>
                            <a href="public/uploads/<?= $doc['archivo'] ?>" target="_blank">Ver PDF</a>
                        </td>
                        <td>
                            <a href="index.php?controller=Documento&action=editar&id=<?= $doc['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="index.php?controller=Documento&action=eliminar&id=<?= $doc['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este documento?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No hay documentos registrados.</p>
    <?php endif ?>
</body>
</html>
