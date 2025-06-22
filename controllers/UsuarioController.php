<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new Usuario();
    }

    public function index() {
        $usuarios = $this->userModel->obtenerTodosConArea();
        $areas = $this->userModel->obtenerAreas();
        $this->view('usuarios/index', ['usuarios' => $usuarios, 'areas' => $areas]);
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $rol = $_POST['rol'] ?? 'usuario';
            $area_id = $_POST['area_id'] ?? null;

            $this->userModel->crear($nombre, $email, $password, $rol, $area_id);
            $this->redirect('usuario/index');
        } else {
            $areas = $this->userModel->obtenerAreas();
            $this->view('usuarios/crear', ['areas' => $areas]);
        }
    }

    public function editar($id) {
        $usuario = $this->userModel->obtenerPorId($id);
        $areas = $this->userModel->obtenerAreas();

        if (!$usuario) {
            $this->redirect('usuario/index');
        }

        $this->view('usuarios/editar', ['usuario' => $usuario, 'areas' => $areas]);
    }

    public function actualizar($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $email = $_POST['email'] ?? '';
            $rol = $_POST['rol'] ?? 'usuario';
            $area_id = $_POST['area_id'] ?? null;

            $this->userModel->actualizar($id, $nombre, $email, $rol, $area_id);
            $this->redirect('usuario/index');
        }
    }

    public function eliminar($id) {
        $this->userModel->eliminar($id);
        $this->redirect('usuario/index');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $resultado = $this->userModel->login($email, $password);

            if (isset($resultado['usuario'])) {
                if (session_status() === PHP_SESSION_NONE) session_start();
                $_SESSION['usuario_id'] = $resultado['usuario']['id'];
                $_SESSION['usuario_nombre'] = $resultado['usuario']['nombre'];
                $this->redirect('index.php?action=dashboard');
            } else {
                $this->view('login/index', ['error' => $resultado['error']]);
            }
        } else {
            $this->view('login/index');
        }
    }

    public function dashboard() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['usuario_id'])) {
            $this->redirect('index.php?action=login');
        }
        $nombre = $_SESSION['usuario_nombre'] ?? 'Invitado';
        $this->view('dashboard/index', ['nombre' => $nombre]);
    }
}


