<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Asistencia</title>
</head>
<body>
    <h1>Registro de Asistencia</h1>
    <form action="/peoplepro/public/asistencia/registrarLlegada" method="post">
        <button type="submit">Registrar Llegada</button>
    </form>
    <form action="/peoplepro/public/asistencia/registrarSalida" method="post">
        <button type="submit">Registrar Salida</button>
    </form>

    <h2>Historial</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora de Llegada</th>
                <th>Hora de Salida</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro): ?>
                <tr>
                    <td><?= htmlspecialchars($registro['fecha']) ?></td>
                    <td><?= htmlspecialchars($registro['hora_llegada']) ?></td>
                    <td><?= htmlspecialchars($registro['hora_salida']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="/peoplepro/public">Volver al Menú Principal</a>
</body>
</html>
