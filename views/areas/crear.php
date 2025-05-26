<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Áreas de trabajo</title>
    <link rel="stylesheet" href="/peoplepro/public/css/iframesAreas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<html>
<body>
    <h2>Crear Nueva Área</h2>
    <form action="/peoplepro/public/area/guardar" method="POST">
        <label class="label">Nombre:</label>
        <input type="text" name="nombre" required placeholder="Digita el nombre de área" class="input-nombre input"><br>

        <label class="label">Descripción:</label>
        <textarea name="descripcion" rows="3" placeholder="Digita la descripción de area" class="input-descripcion input"></textarea><br>
        
        <h3>Selecciona un color de fondo:</h3>
        <div class="contenedor-colores">
            <?php
            $colores = ['#ffeb3b', '#ff9800', '#f44336', '#f48fb1', '#ba68c8', '#80deea', '#9ccc65', '#00695c ', '#795548','#263238'];
            $colorActual = $area['color_fondo'] ?? '#F7F7F8';
            foreach ($colores as $color) {
                $checked = ($color === $colorActual) ? 'checked' : '';
                echo '
                <label class="color-opcion">
                    <input type="radio" name="color_fondo" value="'.$color.'" '.$checked.'>
                    <div class="color-circulo" style="background-color: '.$color.';"></div>
                </label>';
            }
            ?>
        </div>  
        <input type="submit" value="Guardar" class="boton aceptar-btn">
    </form>
    <button onclick="cerrarIframe()" class="boton">cancelar</button>
</body>
</html>
