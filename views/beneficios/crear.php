<h2>Registrar Beneficio</h2>
<form action="/peoplepro/public/index.php?action=beneficio&method=guardar" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion" rows="3"></textarea><br><br>

    <label>Fecha de inicio:</label><br>
    <input type="date" name="fecha_inicio"><br><br>

    <label>Fecha de fin:</label><br>
    <input type="date" name="fecha_fin"><br><br>

    <input type="submit" value="Guardar">
    <a href="/peoplepro/public/index.php?action=beneficio" class="btn-cancelar">Cancelar</a>

</form>
