<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
</head>
<body>
     <header class="header">
        <div class="izquierda">
            <button class="menu-hamburguesa">
                <span class="linea"></span>
                <span class="linea"></span>
                <span class="linea"></span>
            </button>
            <div id="logo"></div> 
        </div>
        <form action="#" class="buscador">  
        <input type="text" placeholder="Buscar..." class="input-buscador">
        <button type="submit" class="buscador-icono"><i class="bi bi-search"></i></button>
        </form>
        <div class="derecha">
            <p><?= htmlspecialchars($nombre) ?></p>
            <a href="index.php?action=logout">Cerrar sesión</a>
        </div>
    </header>
    <nav class="nav-desplegable" id="nav-desplegable">
        <ul class="nav-lista">
            <li><a href="/peoplepro/public/index.php?action=dashboard">Inicio</a></li>
            <li><a href="/peoplepro/public/index.php?action=usuario">Usuarios</a></li>
            <li><a href="/peoplepro/public/index.php?action=permiso">Permisos</a></li>
            <li><a href="/peoplepro/public/index.php?action=beneficio">Beneficios</a></li>
            <li><a href="/peoplepro/public/index.php?action=visitante">Visitantes Externos</a></li>
            <li><a href="/peoplepro/public/index.php?action=documento">Documentos</a></li>
            <li><a href="/peoplepro/public/index.php?action=capacitacion">Capacitaciones</a></li>
            <li><a href="/peoplepro/public/index.php?action=horario">Horarios</a></li>
            <li><a href="/peoplepro/public/index.php?action=area">Áreas</a></li>
        </ul>
    </nav>
    <h1 class="tituloBienvenida">Welcome, <?= htmlspecialchars($nombre) ?>! 👋</h1>
  <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
