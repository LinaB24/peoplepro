<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas de trabajo</title>
    <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
    <link rel="stylesheet" href="/peoplepro/public/css/areas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
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
            <p><?= htmlspecialchars($_SESSION['usuario_nombre'] ?? 'Invitado') ?></p>
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
            <li><a href="/peoplepro/public/index.php?action=area">Áreas</a></li>
        </ul>
    </nav><br>
<h2 class="area-titulo">Gestión de Áreas</h2>

<div class="nueva-area-contenedor">
    <a href="/peoplepro/public/index.php?action=area&method=crear" class="nueva-area" title="Crear nueva área">+ Nueva Área</a>
</div>

<main class="main">
    <table class="tabla-areas" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['areas'] as $area): ?>
            <tr>
                <td><?= $area['id'] ?></td>
                <td><?= htmlspecialchars($area['nombre']) ?></td>
                <td><?= htmlspecialchars($area['descripcion']) ?></td>
                <td>
                    <a href="/peoplepro/public/index.php?action=area&method=editar&id=<?= urlencode($area['id']) ?>">✏️ Editar</a> |
                    <a href="/peoplepro/public/index.php?action=area&method=eliminar&id=<?= urlencode($area['id']) ?>" onclick="return confirm('¿Eliminar esta área?')">❌ Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

    <script src="/peoplepro/public/js/iframesAreas.js"></script>
    <script src="/peoplepro/public/js/nav.js"></script>
    <script src="/peoplepro/public/js/areas.js"></script>
</body>
</html>
