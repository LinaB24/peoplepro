<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área actualizada</title>
</head>
<body>
    <script>
        // Cierra el iframe desde el padre y recarga la página principal
        window.parent.document.getElementById('iframe-contenedor').classList.remove('activo');
        window.parent.document.getElementById('pantalla-oscura').classList.remove('activo');
        window.parent.location.reload(); // opcional si quieres recargar toda la lista de áreas
    </script>
</body>
</html>
