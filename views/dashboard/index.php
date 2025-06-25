<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/peoplepro/public/css/fondo.css">
    <link rel="stylesheet" href="/peoplepro/public/css/nav.css">
</head>
<body>
    <?php include __DIR__ . '/../menu/menu.php'; ?><br>
    <h1 class="titulo-principal">Welcome, <?= htmlspecialchars($nombre) ?>! 👋</h1>
  <script src="/peoplepro/public/js/nav.js"></script>
</body>
</html>
