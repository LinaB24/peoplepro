<?php
require_once __DIR__ . '/../core/Controller.php';

class PermisoController extends Controller {
    public function index() {
        $permiso = $this->model('Permiso');
        $data = $permiso->obtenerTodos();
        $this->view('permisos/index', ['permisos' => $data]);
    }

    public function crear() {
        $this->view('permisos/crear');
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipo'];
            $permiso = $this->model('Permiso');
            $permiso->crear($tipo);
            $this->redirect('/peoplepro/public/index.php?action=permiso');
        }
    }

    public function editar($id) {
        $permiso = $this->model('Permiso');
        $data = $permiso->obtenerPorId($id);
        $this->view('permisos/editar', ['permiso' => $data]);
    }

    public function actualizar($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipo'];
            $permiso = $this->model('Permiso');
            $permiso->actualizar($id, $tipo);
            $this->redirect('/peoplepro/public/index.php?action=permiso');
        }
    }

    public function eliminar($id) {
        $permiso = $this->model('Permiso');
        $permiso->eliminar($id);
        $this->redirect('/peoplepro/public/index.php?action=permiso');
    }
}
