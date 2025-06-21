<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Usuario();
    }

    public function login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $resultado = $this->userModel->login($email, $password);

        if (isset($resultado['usuario'])) {
            if (session_status() === PHP_SESSION_NONE) session_start();
            $_SESSION['usuario_id'] = $resultado['usuario']['id'];
            header('Location: index.php?action=dashboard');
            exit;
        } else {
            $error = $resultado['error'];
            require __DIR__ . '/../views/login/index.php';
        }
    } else {
        require __DIR__ . '/../views/login/index.php';
    }
}

public function dashboard() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: index.php?action=login');
        exit;
    }
     $nombre = $_SESSION['usuario_nombre'] ?? 'Invitado';

    require __DIR__ . '/../views/dashboard/index.php';
}
}

