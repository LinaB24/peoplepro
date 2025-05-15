<h2>Registrar Visitante</h2>

<form action="/peoplepro/public/visitante/guardar" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Documento:</label><br>
    <input type="text" name="documento" required><br><br>

    <label>Empresa:</label><br>
    <input type="text" name="empresa"><br><br>

    <label>Fecha y hora de ingreso:</label><br>
    <input type="datetime-local" name="fecha_ingreso" required><br><br>

    <label>Motivo:</label><br>
    <textarea name="motivo" rows="3" cols="40"></textarea><br><br>

    <button type="submit">Guardar</button>
</form>
