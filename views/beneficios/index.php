<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Beneficios</title>
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
    <h2>Gestión de Beneficios</h2>
    <a href="/peoplepro/public/index.php?action=beneficio&method=crear">➕ Registrar nuevo beneficio</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['beneficios'] as $b): ?>
                <tr>
                    <td><?= htmlspecialchars($b['id']) ?></td>
                    <td><?= htmlspecialchars($b['nombre']) ?></td>
                    <td><?= htmlspecialchars($b['descripcion']) ?></td>
                    <td><?= htmlspecialchars($b['fecha_inicio']) ?></td>
                    <td><?= htmlspecialchars($b['fecha_fin']) ?></td>
                    <td>
                        <a href="/peoplepro/public/index.php?action=beneficio&method=editar&id=<?= $b['id'] ?>">✏️ Editar</a> |
                        <a href="/peoplepro/public/index.php?action=beneficio&method=eliminar&id=<?= $b['id'] ?>" onclick="return confirm('¿Eliminar este beneficio?')">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
