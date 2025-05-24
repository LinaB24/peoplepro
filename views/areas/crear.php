<h2>Crear Nueva Área</h2>
<form action="/peoplepro/public/area/guardar" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion" rows="3"></textarea><br><br>
    
    <h3>Selecciona un color de fondo:</h3>
    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
        <?php
        $colores = ['#ffeb3b', '#ff9800', '#f44336', '#f48fb1', '#ba68c8', '#80deea', '#9ccc65', '#795548','#263238'];
        foreach ($colores as $color) {
            echo '
            <label style="cursor: pointer;">
                <input type="radio" name="color_fondo" value="'.$color.'" style="display:none;" required>
                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: '.$color.'; border: 2px solid #ccc;"></div>
            </label>';
        }
        ?>
    </div>
    <input type="submit" value="Guardar">
</form>
