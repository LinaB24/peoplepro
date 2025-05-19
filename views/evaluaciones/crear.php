<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Evaluación</title>
</head>
<body>
    <h1>Crear Nueva Evaluación</h1>
    <form action="/peoplepro/public/evaluacion/crear" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" id="descripcion" rows="4"></textarea><br><br>

        <label for="fecha">Fecha:</label><br>
        <input type="date" name="fecha" id="fecha" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="/peoplepro/public/evaluacion/index">Volver a la lista</a>
</body>
</html>
