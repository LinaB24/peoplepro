<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Áreas de trabajo</title>
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
  <link rel="stylesheet" href="/peoplepro/public/css/areas.css">
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
        <input type="text" placeholder="Buscar" class="input-icono">
        </form>
        <div class="derecha">
            <p><?= htmlspecialchars($_SESSION["usuario"] ?? 'Usuario') ?></p>
        </div>
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
    </nav><br>
    <h2 class="area-titulo">Gestión de Áreas</h2>
    <button class="nueva-area"><a href="/peoplepro/public/area/crear">Nueva Área</a></button>
    <main class="main">
        <?php foreach ($data['areas'] as $area): ?>
        <div class="area-contenedor">   
            <div class="area">
                <div class="area-header">
                    <h2><?= $area['nombre'] ?></h2>
                    <button class="confuguracion-area" id="configuracion"><img src="../../public/img/dots_three_outline_vertical_icon_173863.svg"></button>
                </div>
                <p><?= $area['descripcion'] ?></p>
                <button class="ver-mas"><a href="">ver más</a></button>
            </div>
            <ul class="area-menu">
                <li><a href="/peoplepro/public/area/editar/<?= $area['id'] ?>">Editar</a></li>
                <li><a href="/peoplepro/public/area/eliminar/<?= $area['id'] ?>" onclick="return confirm('¿Eliminar esta área?')">Eliminar</a></li>
            </ul>
        </div>
        <?php endforeach; ?>
    </main>
    <script src="/peoplepro/public/js/nav.js"></script>
    <script src="/peoplepro/public/js/area.js"></script>
</body>
</html>