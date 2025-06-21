<?php
session_start();
require_once __DIR__ . '/../controllers/UsuarioController.php';

// Definir la acción desde la URL (?action=...)
$action = $_GET['action'] ?? 'login';

$controller = new UsuarioController();

switch ($action) {
    case 'login':
        $controller->login();
        break;
    case 'dashboard':
        $controller->dashboard();
        break;
    case 'logout':
        $controller->logout();
        break;
    default:
        echo "Ruta no válida.";
        break;
}
