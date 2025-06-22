<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new Usuario();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
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

            // Redirección corregida
            header('Location: /peoplepro/public/index.php?action=usuario');
            exit;
        } else {
            $areas = $this->userModel->obtenerAreas();
            $this->view('usuarios/crear', ['areas' => $areas]);
        }
    }

    public function editar($id) {
        $usuario = $this->userModel->obtenerPorId($id);
        $areas = $this->userModel->obtenerAreas();

        if (!$usuario) {
            header('Location: /peoplepro/public/index.php?action=usuario');
            exit;
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

            header('Location: /peoplepro/public/index.php?action=usuario');
            exit;
        }
    }

    public function eliminar($id) {
        $this->userModel->eliminar($id);
        header('Location: /peoplepro/public/index.php?action=usuario');
        exit;
    }
}
