<h2>Crear Nuevo Permiso</h2>

<form action="/peoplepro/public/index.php?action=permiso&method=guardar" method="POST">
    <label for="tipo">Tipo de permiso:</label>
    <input type="text" name="tipo" required>
    <br><br>
    <button type="submit">Guardar</button>
    <a href="/peoplepro/public/index.php?action=permiso&method=index">Cancelar</a>

</form>
