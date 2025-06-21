<?php
session_start();
require_once __DIR__ . '/../controllers/UsuarioController.php';

$action = $_GET['action'] ?? 'landing';
$controller = new UsuarioController();

switch ($action) {
    case 'login':
        $controller->login();
        break;
    case 'dashboard':
        $controller->dashboard();
        break;
    case 'landing':
    default:
        require_once __DIR__ . '/../views/landing/index.php';
        break;
}
