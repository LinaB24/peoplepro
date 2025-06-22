<?php
require_once __DIR__ . '/../core/Controller.php';

class VisitanteController extends Controller
{
    private $visitanteModel;

    public function __construct()
    {
        $this->visitanteModel = $this->model('Visitante');
    }

    public function index()
    {
        $data = ['visitantes' => $this->visitanteModel->obtenerTodos()];
        $this->view('visitantes/index', $data);
    }

    public function crear()
    {
        $this->view('visitantes/crear');
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->visitanteModel->insertar(
                $_POST['nombre'] ?? '',
                $_POST['documento'] ?? '',
                $_POST['empresa'] ?? '',
                $_POST['fecha_ingreso'] ?? '',
                $_POST['motivo'] ?? ''
            );
            $this->redirect('/peoplepro/public/visitante/index');
        }
    }

    public function editar($id = null)
    {
        if ($id === null) {
            $this->redirect('/peoplepro/public/visitante/index');
        }
        $visitante = $this->visitanteModel->obtenerPorId($id);
        if (!$visitante) {
            $this->redirect('/peoplepro/public/visitante/index');
        }
        $this->view('visitantes/editar', ['visitante' => $visitante]);
    }

    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->visitanteModel->actualizar(
                $_POST['id'] ?? null,
                $_POST['nombre'] ?? '',
                $_POST['documento'] ?? '',
                $_POST['empresa'] ?? '',
                $_POST['fecha_ingreso'] ?? '',
                $_POST['motivo'] ?? ''
            );
            $this->redirect('/peoplepro/public/visitante/index');
        }
    }

    public function eliminar($id = null)
    {
        if ($id !== null) {
            $this->visitanteModel->eliminar($id);
        }
        $this->redirect('/peoplepro/public/visitante/index');
    }
}
