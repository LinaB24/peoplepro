<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio | PeoplePro</title>
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
</head>
<body>
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
            <li><a href="/peoplepro/public/home/index">Inicio</a></li>
            <li><a href="/peoplepro/public/usuario/index">Usuarios</a></li>
            <li><a href="/peoplepro/public/permiso/index">Permisos</a></li>
            <li><a href="/peoplepro/public/beneficio/index">Beneficios</a></li>
            <li><a href="/peoplepro/public/visitante/index">Visitantes Externos</a></li>
            <li><a href="/peoplepro/public/documento/index">Documentos</a></li>
            <li><a href="/peoplepro/public/capacitacion/index">Capacitaciones</a></li>
            <li><a href="/peoplepro/public/evaluacion/index">Evaluaciones</a></li>
            <li><a href="/peoplepro/public/area/index">Áreas</a></li>
        </ul>
    </nav>
    <h1 class="tituloBienvenida">Bienvenido, <?= htmlspecialchars($_SESSION["usuario"] ?? 'Usuario') ?> 👋</h1>
  <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
