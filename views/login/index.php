<h2>Iniciar sesión</h2>

<?php if (isset($error)): ?>
    <p style="color:red"><?= $error ?></p>
<?php endif; ?>

<form method="POST" action="/peoplepro/public/index.php?action=login">
    <input type="email" name="email" placeholder="Correo" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <button type="submit">Entrar</button>
</form>
