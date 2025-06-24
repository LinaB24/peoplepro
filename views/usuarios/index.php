<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.4/css/responsive.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.3/css/buttons.dataTables.css">
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
    <link rel="stylesheet" href="/peoplepro/public/css/usuario.css">
    <link rel="stylesheet" href="/peoplepro/public/css/fondo.css">
    

</head>
<body>
    <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    
        <h2 class="titulo-usuario">Crear nuevo usuario</h2>

    <form method="POST" action="/peoplepro/public/index.php?action=usuario&method=crear" class="formulario-usuario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" placeholder="correo@ejemplo.com" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" placeholder="Contraseña segura" required minlength="6">

        <label for="rol">Rol:</label>
        <select id="rol" name="rol" required>
            <option value="">Selecciona un rol</option>
            <option value="usuario">Usuario</option>
            <option value="admin">Admin</option>
        </select>

        <label for="area_id">Área:</label>
        <select id="area_id" name="area_id" required>
            <option value="">Selecciona un área</option>
            <?php foreach ($areas as $area): ?>
                <option value="<?= htmlspecialchars($area['id']) ?>">
                    <?= htmlspecialchars($area['nombre']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Crear usuario</button>
    </form>



<br>

    <main class="main-usuario">
        <table id="myTable" class="table table-striped nowrap responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Área</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data['usuarios'])): ?>
                    <?php foreach ($data['usuarios'] as $usuario): ?>
                        <tr>
                            <td><?= htmlspecialchars($usuario['id']) ?></td>
                            <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                            <td><?= htmlspecialchars($usuario['email']) ?></td>
                            <td><?= htmlspecialchars($usuario['rol']) ?></td>
                            <td><?= htmlspecialchars($usuario['area_nombre'] ?? 'Sin área') ?></td>
                            <td>
                                <a title="Editar" href="/peoplepro/public/index.php?action=usuario&method=editar&id=<?= $usuario['id'] ?>">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <a title="Eliminar" href="/peoplepro/public/index.php?action=usuario&method=eliminar&id=<?= $usuario['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6">No hay usuarios registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- DataTables y Extensiones -->
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.4/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.4/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.colVis.min.js"></script>

    <!-- Bootstrap JS (uno solo es suficiente) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tu código JS -->
    <script src="/peoplepro/public/js/datatable.js"></script>
    <script src="/peoplepro/public/js/nav.js"></script>

</body>
</html>
