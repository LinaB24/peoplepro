<h2>Editar Permiso</h2>

<form action="/peoplepro/public/permiso/actualizar/<?= $data['permiso']['id'] ?>" method="POST">
    <label for="tipo">Tipo de permiso:</label>
    <input type="text" name="tipo" value="<?= $data['permiso']['tipo'] ?>" required>
    <br><br>
    <button type="submit">Actualizar</button>
    <a href="/peoplepro/public/permiso/index">Cancelar</a>
</form>
