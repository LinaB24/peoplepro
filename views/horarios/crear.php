<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Asignar Nuevo Horario</title>
  <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
  <link rel="stylesheet" href="/peoplepro/public/css/horario.css">
</head>
<body>
  <!-- Header igual que en otros módulos -->
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
    <main class="main-horario"> 
    <h2 class="titulo-horario">Asignar Nuevo Horario</h2>
    
    <form class="formulario-horario" action="/peoplepro/public/index.php?action=horario&method=crear" method="POST">
        
        <label for="usuario_id">Trabajador:</label>
        <select name="usuario_id" id="usuario_id" required>
            <option value="" disabled selected>Seleccione un trabajador</option>
            <?php if (!empty($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <option value="<?= htmlspecialchars($usuario['id']) ?>">
                        <?= htmlspecialchars($usuario['nombre']) ?>
                    </option>
                <?php endforeach; ?>
            <?php else: ?>
                <option disabled>No hay usuarios disponibles</option>
            <?php endif; ?>
        </select>

        <label for="fecha">Fecha de Inicio:</label>
        <input type="date" name="fecha" id="fecha" required>

        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" name="fecha_fin" id="fecha_fin">

        <label for="hora_inicio">Hora de Inicio:</label>
        <input type="time" name="hora_inicio" id="hora_inicio" required>

        <label for="hora_fin">Hora de Fin:</label>
        <input type="time" name="hora_fin" id="hora_fin" required>

        <label for="estado">Estado:</label>
        <select name="estado" id="estado" required>
            <option value="Activo">Activo</option>
            <option value="Permiso">Permiso</option>
            <option value="Incapacidad">Incapacidad</option>
            <option value="Inactivo">Inactivo</option>
        </select>

        <label for="observaciones">Observaciones:</label>
        <textarea name="observaciones" id="observaciones" rows="3" placeholder="Opcional"></textarea>

        <button type="submit">Guardar</button>
        <a class="btn-volver" href="/peoplepro/public/index.php?action=horario&method=index">Cancelar</a>
        
    </form>
</main>


  <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>