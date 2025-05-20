<?php
require_once '../models/Asistencia.php';

class AsistenciaController {
    private $model;

    public function __construct() {
        session_start(); // Iniciar la sesión una vez para todos los métodos
        $this->model = new Asistencia();
    }

    public function registrarLlegada() {
        if (!isset($_SESSION['usuario_id'])) {
            die('Error: Usuario no autenticado.');
        }

        $usuario_id = $_SESSION['usuario_id'];
        $this->model->registrarLlegada($usuario_id);
        header('Location: /peoplepro/public/asistencia/index');
        exit;
    }

    public function registrarSalida() {
        if (!isset($_SESSION['usuario_id'])) {
            die('Error: Usuario no autenticado.');
        }

        $usuario_id = $_SESSION['usuario_id'];
        $this->model->registrarSalida($usuario_id);
        header('Location: /peoplepro/public/asistencia/index');
        exit;
    }

    public function index() {
        if (!isset($_SESSION['usuario_id'])) {
            die('Error: Usuario no autenticado.');
        }

        $usuario_id = $_SESSION['usuario_id'];
        $registros = $this->model->obtenerPorUsuario($usuario_id);
        $this->view('asistencia/index', ['registros' => $registros]);
    }

    private function view($vista, $data = []) {
        require_once "../views/$vista.php";
    }
}
