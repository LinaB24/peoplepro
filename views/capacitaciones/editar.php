<h2>Editar Capacitación</h2>

<form method="POST" action="/peoplepro/public/capacitacion/editar/<?php echo $data['capacitacion']['id']; ?>">
    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($data['capacitacion']['nombre']); ?>" required><br><br>

    <label for="descripcion">Descripción:</label><br>
    <textarea name="descripcion" id="descripcion" rows="4" required><?php echo htmlspecialchars($data['capacitacion']['descripcion']); ?></textarea><br><br>

    <label for="fecha">Fecha:</label><br>
    <input type="date" name="fecha" id="fecha" value="<?php echo htmlspecialchars($data['capacitacion']['fecha']); ?>" required><br><br>

    <button type="submit">Actualizar</button>
    <a href="/peoplepro/public/capacitacion">Cancelar</a>
</form>
