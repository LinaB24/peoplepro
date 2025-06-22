<h2>Editar Permiso</h2>

<form action="/peoplepro/public/index.php?action=permiso&method=actualizar&id=<?= $data['permiso']['id'] ?>" method="POST">
    <label for="tipo">Tipo de permiso:</label>
    <input type="text" name="tipo" value="<?= $data['permiso']['tipo'] ?>" required>
    <br><br>
    <button type="submit">Actualizar</button>
    <a href="/peoplepro/public/index.php?action=permiso&method=index">Cancelar</a>
