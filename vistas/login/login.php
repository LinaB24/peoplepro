<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
   
    <link rel="stylesheet" href="/repositoriogit/peoplepro/public/css/login.css">
</head>
<body>

<h1>PeoplePro</h1>

<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST" action="index.php?accion=autenticar">
    <label>Usuarios:</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Clave:</label><br>
    <input type="password" name="clave" required><br><br>

    <input type="submit" value="Iniciar Sesión">
</form>

</body>
</html>
