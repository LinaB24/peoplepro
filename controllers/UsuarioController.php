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

            if (empty($email) || empty($password)) {
                $error = "Todos los campos son obligatorios";
                require_once __DIR__ . '/../views/login/index.php';
                return;
            }

            $resultado = $this->userModel->login($email, $password);

            if (isset($resultado['usuario'])) {
                session_start();
                $_SESSION['usuario_id'] = $resultado['usuario']['id'];
                $_SESSION['usuario_nombre'] = $resultado['usuario']['nombre'];
                header('Location: index.php?action=dashboard');
                exit;
            } else {
                $error = $resultado['error'];
                require_once __DIR__ . '/../views/login/index.php';
            }
        } else {
            require_once __DIR__ . '/../views/login/index.php';
        }
    }

    public function dashboard() {
        if (session_status() === PHP_SESSION_NONE) {
        session_start();
        }
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: index.php?action=login');
            exit;
        }

        $nombre = $_SESSION['usuario_nombre'];
        require_once __DIR__ . '/../views/dashboard/index.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
    }
}
