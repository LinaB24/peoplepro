<h2>Editar Visitante</h2>

<form action="/peoplepro/public/index.php?action=visitante&method=actualizar" method="POST">

    <input type="hidden" name="id" value="<?= $data['visitante']['id'] ?>">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= $data['visitante']['nombre'] ?>" required><br><br>

    <label>Documento:</label><br>
    <input type="text" name="documento" value="<?= $data['visitante']['documento'] ?>" required><br><br>

    <label>Empresa:</label><br>
    <input type="text" name="empresa" value="<?= $data['visitante']['empresa'] ?>"><br><br>

    <label>Fecha y hora de ingreso:</label><br>
    <input type="datetime-local" name="fecha_ingreso" value="<?= date('Y-m-d\TH:i', strtotime($data['visitante']['fecha_ingreso'])) ?>" required><br><br>

    <label>Motivo:</label><br>
    <textarea name="motivo" rows="3" cols="40"><?= $data['visitante']['motivo'] ?></textarea><br><br>

    <button type="submit">Actualizar</button>
    <a href="/peoplepro/public/index.php?action=visitante" class="btn-cancelar">Cancelar</a>

</form>
