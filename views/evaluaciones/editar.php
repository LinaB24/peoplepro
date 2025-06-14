<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Evaluación</title>
</head>
<body>
    <h1>Editar Evaluación</h1>
    <form action="/peoplepro/public/evaluacion/editar/<?= $evaluacion['id'] ?>" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($evaluacion['nombre']) ?>" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" id="descripcion" rows="4"><?= htmlspecialchars($evaluacion['descripcion']) ?></textarea><br><br>

        <label for="fecha">Fecha:</label><br>
        <input type="date" name="fecha" id="fecha" value="<?= htmlspecialchars($evaluacion['fecha']) ?>" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="/peoplepro/public/evaluacion/index">Volver a la lista</a>
</body>
</html>
