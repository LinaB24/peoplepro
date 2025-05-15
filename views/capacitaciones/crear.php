<h2>Crear Nueva Capacitación</h2>

<form method="POST" action="/peoplepro/public/capacitacion/crear">
    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre" required><br><br>

    <label for="descripcion">Descripción:</label><br>
    <textarea name="descripcion" id="descripcion" rows="4" required></textarea><br><br>

    <label for="fecha">Fecha:</label><br>
    <input type="date" name="fecha" id="fecha" required><br><br>

    <button type="submit">Guardar</button>
    <a href="/peoplepro/public/capacitacion">Cancelar</a>
</form>
