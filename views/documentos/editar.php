<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Documento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>✏️ Editar Documento</h2>
    <form action="index.php?controller=Documento&action=actualizar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $documento['id'] ?>">

        <div class="mb-3">
            <label for="titulo" class="form-label">Nombre del documento</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?= htmlspecialchars($documento['nombre']) ?>" required>
        </div>

        <div class="mb-3">
            <p>Archivo actual: <a href="public/uploads/<?= $documento['archivo'] ?>" target="_blank">Ver PDF</a></p>
            <label for="archivo" class="form-label">Nuevo archivo (opcional)</label>
            <input type="file" name="archivo" id="archivo" class="form-control" accept=".pdf">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="index.php?controller=Documento&action=index" class="btn btn-secondary">Volver</a>
    </form>
</body>
</html>
