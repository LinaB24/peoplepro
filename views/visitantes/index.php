<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Visitantes Externos</title>
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
    <h2>Lista de Visitantes Externos</h2>
        <a href="/peoplepro/public/index.php?action=visitante&method=crear">➕ Registrar nuevo visitante</a>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Empresa</th>
                    <th>Fecha Ingreso</th>
                    <th>Motivo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($data['visitantes'])): ?>
                <?php foreach ($data['visitantes'] as $v): ?>
                    <tr>
                        <td><?= htmlspecialchars($v['id']) ?></td>
                        <td><?= htmlspecialchars($v['nombre']) ?></td>
                        <td><?= htmlspecialchars($v['documento']) ?></td>
                        <td><?= htmlspecialchars($v['empresa']) ?></td>
                        <td><?= htmlspecialchars($v['fecha_ingreso']) ?></td>
                        <td><?= htmlspecialchars($v['motivo']) ?></td>
                        <td>
                            <a href="/peoplepro/public/index.php?action=visitante&method=editar&id=<?= $v['id'] ?>">✏️ Editar</a> |
                            <a href="/peoplepro/public/index.php?action=visitante&method=eliminar&id=<?= $v['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar?')">🗑️ Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="7">No hay visitantes registrados.</td></tr>
            <?php endif; ?>
            </tbody>
        </table><br>
    <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
