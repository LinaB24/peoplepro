<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Documento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>📤 Subir nuevo Documento</h2>
    <form action="index.php?controller=Documento&action=guardar" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="titulo" class="form-label">Nombre del documento</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="archivo" class="form-label">Archivo PDF</label>
            <input type="file" name="archivo" id="archivo" class="form-control" accept=".pdf" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php?controller=Documento&action=index" class="btn btn-secondary">Volver</a>
    </form>
</body>
</html>
