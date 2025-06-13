<?php
require_once '../models/Evaluacion.php';

class EvaluacionController
{
    private $model;

    public function __construct()
    {
        $this->model = new Evaluacion();
    }

    public function index()
    {
        $data['evaluaciones'] = $this->model->obtenerTodos();
        $this->view('evaluaciones/index', $data);
    }

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'fecha' => $_POST['fecha']
            ];
            if ($this->model->crear($data)) {
                header('Location: /peoplepro/public/evaluacion/index');
                exit;
            } else {
                echo "Error al crear la evaluación.";
            }
        } else {
            $this->view('evaluaciones/crear');
        }
    }

    public function editar($id = null)
    {
        if ($id === null) {
            header('Location: /peoplepro/public/evaluacion/index');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'fecha' => $_POST['fecha']
            ];
            if ($this->model->actualizar($id, $data)) {
                header('Location: /peoplepro/public/evaluacion/index');
                exit;
            } else {
                echo "Error al actualizar la evaluación.";
            }
        } else {
            $evaluacion = $this->model->obtenerPorId($id);
            if (!$evaluacion) {
                header('Location: /peoplepro/public/evaluacion/index');
                exit;
            }
            $this->view('evaluaciones/editar', ['evaluacion' => $evaluacion]);
        }
    }

    public function eliminar($id)
    {
        if ($this->model->eliminar($id)) {
            header('Location: /peoplepro/public/evaluacion/index');
            exit;
        } else {
            echo "Error al eliminar la evaluación.";
        }
    }

    private function view($vista, $data = [])
    {
        extract($data); // ← Esto convierte 'evaluaciones' en $evaluaciones dentro de la vista
        require_once "../views/$vista.php";
    } 
}
