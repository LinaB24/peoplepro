<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Nueva Área</title>
</head>
<body>

    <h1>Registrar Nueva Área</h1>
    <a href="index.php?accion=listar">← Volver al listado</a><br><br>

    <form method="POST" action="index.php?accion=crear">
        <label>Nombre del Área:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion" rows="4" cols="40"></textarea><br><br>

        <input type="submit" value="Guardar Área">
    </form>

</body>
</html>
