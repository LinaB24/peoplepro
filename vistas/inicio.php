<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/nav.css">
</head>
<body>
    <!-- http://localhost/crud-people-rama-s/index.php?accion=inicio -->
    <!-- Navegación principal -->
    <header class="header">
            <div class="menu-hamburguesa">
                <span class="linea"></span>
                <span class="linea"></span>
                <span class="linea"></span>
            </div>
            <div id="logo"></div>
    </header>

    <nav class="nav-desplegable" id="nav-desplegable">
        <ul class="nav-lista">
            <li><a href="./index.php?accion=inicio">🏡 Inicio</a></li>
            <li><a href="index.php?accion=listar">📁 Áreas</a></li>
            <li><a href="index.php?accion=listarPermisos">📝 Permisos</a></li>
            <li><a href="#">📆 Calendario</a></li>
            <li><a href="#">✨ Beneficios</a></li>
            <li><a href="#">🧑‍🎓 Capacitaciones</a></li>
            <li><a href="#">🪪 Visitante externo</a></li>
        </ul>
    </nav>

    <a href="index.php?accion=logout" style="float:right;">🔒 Cerrar sesión</a>
    <h1 class="tituloBienvenida">Bienvenido, <?= htmlspecialchars($_SESSION["usuario"] ?? 'Usuario') ?> 👋</h1>

    <p>Seleccioná una de las opciones del menú para comenzar:</p>

    <ul>
        <li><a href="index.php?accion=listar">📁 Gestión de Áreas</a></li>
        <li><a href="index.php?accion=listarPermisos">📝 Permisos</a></li>
    </ul>
    <br>
    <a href="index.php?accion=registrar">¿No tenés cuenta? Registrate aquí</a>
    <script src="public/js/nav.js"></script>
</body>
</html>
