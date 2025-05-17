<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Áreas de trabajo</title>
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
    <h2>Gestión de Áreas</h2>
    <a href="/peoplepro/public/area/crear">Agregar Nueva Área</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($data['areas'] as $area): ?>
        <tr>
            <td><?= $area['id'] ?></td>
            <td><?= $area['nombre'] ?></td>
            <td><?= $area['descripcion'] ?></td>
            <td>
                <a href="/peoplepro/public/area/editar/<?= $area['id'] ?>">Editar</a> |
                <a href="/peoplepro/public/area/eliminar/<?= $area['id'] ?>" onclick="return confirm('¿Eliminar esta área?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table><br>
    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>