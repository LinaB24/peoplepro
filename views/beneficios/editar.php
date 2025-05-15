<h2>Editar Beneficio</h2>
<form action="/peoplepro/public/beneficio/actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $data['beneficio']['id'] ?>">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= $data['beneficio']['nombre'] ?>" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion" rows="3"><?= $data['beneficio']['descripcion'] ?></textarea><br><br>

    <label>Fecha de inicio:</label><br>
    <input type="date" name="fecha_inicio" value="<?= $data['beneficio']['fecha_inicio'] ?>"><br><br>

    <label>Fecha de fin:</label><br>
    <input type="date" name="fecha_fin" value="<?= $data['beneficio']['fecha_fin'] ?>"><br><br>

    <input type="submit" value="Actualizar">
</form>
