<h2>Subir Documento</h2>

<form action="/peoplepro/public/documento/guardar" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre del documento:</label>
    <input type="text" name="nombre" required>
    <br><br>

    <label for="archivo">Archivo PDF:</label>
    <input type="file" name="archivo" accept="application/pdf" required>
    <br><br>

    <button type="submit">Subir</button>
    <a href="/peoplepro/public/documento/index">Cancelar</a>
</form>
