<h2>Editar Área</h2>
<form action="/peoplepro/public/area/actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $data['area']['id'] ?>">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= $data['area']['nombre'] ?>" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion" rows="3"><?= $data['area']['descripcion'] ?></textarea><br><br>

    <input type="submit" value="Actualizar">
</form>
