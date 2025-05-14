<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
</head>
<body>

<h1>Registro de Usuario</h1>

<form method="POST" action="index.php?accion=registrar">
    <label>Usuario:</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="clave" required><br><br>

    <input type="submit" value="Registrarse">
</form>

<a href="index.php?accion=login">← Volver al login</a>

</body>
</html>
