<h2>Asignar Área al Usuario: <?php echo htmlspecialchars($data['usuario']['nombre']); ?></h2>

    <form method="POST" action="/peoplepro/public/index.php?url=usuario/guardar_asignacion">
    <input type="hidden" name="user_id" value="<?php echo $data['usuario']['id']; ?>">

    <label for="area_id">Área:</label>
    <select name="area_id" id="area_id" required>
        <?php foreach ($data['areas'] as $area): ?>
            <option value="<?php echo $area['id']; ?>">
                <?php echo htmlspecialchars($area['nombre']); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>
    <button type="submit">Guardar</button>
</form>
