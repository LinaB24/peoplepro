<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Horario.php';

class HorarioController extends Controller {
    private $model;

    public function __construct() {
        $this->model = new Horario();
    }

    // Mostrar lista de horarios
    public function index() {
        $horarios = $this->model->obtenerTodos();
        $this->view('horarios/index', ['horarios' => $horarios]);
    }

    // Crear nuevo horario
    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recoger datos del formulario
            $data = [
                'usuario_id'    => $_POST['usuario_id'] ?? null,
                'fecha'         => $_POST['fecha'] ?? null,
                'fecha_fin'     => $_POST['fecha_fin'] ?? null,
                'hora_inicio'   => $_POST['hora_inicio'] ?? null,
                'hora_fin'      => $_POST['hora_fin'] ?? null,
                'estado'        => $_POST['estado'] ?? 'Activo',
                'observaciones' => $_POST['observaciones'] ?? null
            ];

            // Validación básica (puedes expandirla)
            if ($this->model->crear($data)) {
                $this->redirect('/peoplepro/public/index.php?action=horario&method=index');
            } else {
                echo "Error al crear el horario.";
            }
        } else {
            // Mostrar formulario de creación
            $usuarios = $this->model->obtenerUsuarios();
            $this->view('horarios/crear', ['usuarios' => $usuarios]);
        }
    }

    // Editar horario existente
    public function editar($id) {
        $horario = $this->model->obtenerPorId($id);
        if (!$horario) {
            $this->redirect('/peoplepro/public/index.php?action=horario&method=index');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'usuario_id'    => $_POST['usuario_id'] ?? null,
                'fecha'         => $_POST['fecha'] ?? null,
                'fecha_fin'     => $_POST['fecha_fin'] ?? null,
                'hora_inicio'   => $_POST['hora_inicio'] ?? null,
                'hora_fin'      => $_POST['hora_fin'] ?? null,
                'estado'        => $_POST['estado'] ?? null,
                'observaciones' => $_POST['observaciones'] ?? null
            ];

            if ($this->model->actualizar($id, $data)) {
                $this->redirect('/peoplepro/public/index.php?action=horario&method=index');
            } else {
                echo "Error al actualizar el horario.";
            }
        } else {
            $usuarios = $this->model->obtenerUsuarios();
            $this->view('horarios/editar', [
                'horario' => $horario,
                'usuarios' => $usuarios
            ]);
        }
    }

    // Eliminar horario
    public function eliminar($id) {
        $this->model->eliminar($id);
        $this->redirect('/peoplepro/public/index.php?action=horario&method=index');
    }
}
