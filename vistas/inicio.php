<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="public/css/inicio.css">
</head>
<body>

<!-- Navegación principal -->
<nav style="background:#eee; padding:10px;">
    <a href="./index.php?accion=inicio">🏡 Inicio</a> |
    <a href="index.php?accion=listar">📁 Áreas</a> |
    <a href="index.php?accion=listarPermisos">📝 Permisos</a> |
    <a href="index.php?accion=logout" style="float:right;">🔒 Cerrar sesión</a>
</nav>
<hr>

<h1>Bienvenido, <?= htmlspecialchars($_SESSION["usuario"] ?? 'Usuario') ?> 👋</h1>

<p>Seleccioná una de las opciones del menú para comenzar:</p>

<ul>
    <li><a href="index.php?accion=listar">📁 Gestión de Áreas</a></li>
    <li><a href="index.php?accion=listarPermisos">📝 Permisos</a></li>
</ul>
<br>
<a href="index.php?accion=registrar">¿No tenés cuenta? Registrate aquí</a>
</body>
</html>
