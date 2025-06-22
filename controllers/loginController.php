<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Usuario.php';

class LoginController extends Controller {
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $resultado = $this->usuario->login($email, $password);

            if (isset($resultado['usuario'])) {
                if (session_status() === PHP_SESSION_NONE) session_start();
                $_SESSION['usuario_id'] = $resultado['usuario']['id'];
                $_SESSION['usuario_nombre'] = $resultado['usuario']['nombre'];
                $this->redirect('/peoplepro/public/index.php?action=dashboard');
            } else {
                $error = $resultado['error'];
                $this->view('login/index', ['error' => $error]);
            }
        } else {
            $this->view('login/index');
        }
    }
}
