<h2>Editar Área</h2>
<form action="/peoplepro/public/area/actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $data['area']['id'] ?>">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= $data['area']['nombre'] ?>" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion" rows="3"><?= $data['area']['descripcion'] ?></textarea><br><br>

    <h3>Selecciona un color de fondo:</h3>
    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
        <?php
        $colores = ['#C0C0C2', '#8AA3B8', '#BFA68C', '#8DB08D', '#D1C26A', '#BF7D82', '#7B7BCC', '#7BA38B'];
        $colorActual = $area['color_fondo'] ?? '#F7F7F8';
        foreach ($colores as $color) {
            $checked = ($color === $colorActual) ? 'checked' : '';
            echo '
            <label style="cursor: pointer;">
                <input type="radio" name="color_fondo" value="'.$color.'" style="display:none;" '.$checked.'>
                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: '.$color.'; border: 2px solid #ccc;"></div>
            </label>';
        }
        ?>
    </div>


    <input type="submit" value="Actualizar">
</form>
