<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Permiso</title>
</head>
<body>

<h1>Registrar Nuevo Permiso</h1>
<a href="index.php?accion=listarPermisos">← Volver al listado</a><br><br>

<form method="POST" action="index.php?accion=crearPermiso">
    <label>ID del Empleado:</label><br>
    <input type="number" name="empleado_id" required><br><br>

    <label>Tipo de Permiso:</label><br>
    <input type="text" name="tipo_permiso" required><br><br>

    <label>Fecha de Inicio:</label><br>
    <input type="date" name="fecha_inicio" required><br><br>

    <label>Fecha de Fin:</label><br>
    <input type="date" name="fecha_fin" required><br><br>

    <label>Motivo:</label><br>
    <textarea name="motivo" rows="3" cols="40" required></textarea><br><br>

    <input type="submit" value="Guardar Permiso">
</form>

</body>
</html>
