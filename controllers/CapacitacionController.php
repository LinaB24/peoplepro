<?php
require_once '../models/Capacitacion.php';

class CapacitacionController {
    private $model;

    public function __construct() {
        $this->model = new Capacitacion();
    }

    public function index() {
        $data['capacitaciones'] = $this->model->obtenerTodos();
        $this->view('capacitaciones/index', $data);
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'fecha' => $_POST['fecha']
            ];
            if ($this->model->crear($data)) {
                header('Location: /peoplepro/public/capacitacion');
                exit;
            } else {
                echo "Error al crear la capacitación.";
            }
        } else {
            $this->view('capacitaciones/crear');
        }
    }

    public function editar($id = null) {
        if ($id === null) {
            header('Location: /peoplepro/public/capacitacion');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'fecha' => $_POST['fecha']
            ];
            if ($this->model->actualizar($id, $data)) {
                header('Location: /peoplepro/public/capacitacion');
                exit;
            } else {
                echo "Error al actualizar la capacitación.";
            }
        } else {
            $capacitacion = $this->model->obtenerPorId($id);
            if (!$capacitacion) {
                header('Location: /peoplepro/public/capacitacion');
                exit;
            }
            $this->view('capacitaciones/editar', ['capacitacion' => $capacitacion]);
        }
    }

    public function eliminar($id) {
        if ($this->model->eliminar($id)) {
            header('Location: /peoplepro/public/capacitacion');
            exit;
        } else {
            echo "Error al eliminar la capacitación.";
        }
    }

    private function view($vista, $data = []) {
        require_once "../views/$vista.php";
    }
}
