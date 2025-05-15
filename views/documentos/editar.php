<h2>Editar Documento</h2>

<form action="/peoplepro/public/documento/actualizar" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['documento']['id'] ?>">

    <label>Nombre del Documento:</label><br>
    <input type="text" name="nombre" value="<?= $data['documento']['nombre'] ?>" required><br><br>

    <label>Archivo actual:</label><br>
    <a href="/peoplepro/uploads/<?= basename($data['documento']['archivo']) ?>" target="_blank">Ver archivo actual</a><br><br>

    <label>Nuevo archivo (opcional):</label><br>
    <input type="file" name="archivo" accept="application/pdf"><br><br>

    <button type="submit">Guardar cambios</button>
</form>
